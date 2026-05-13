import { useState, useRef } from 'react';
import ScorecardForm from './components/ScorecardForm';
import ScoreSummary from './components/ScoreSummary';
import ScoreRadarChart from './components/ScoreRadarChart';
import { exportPDF } from './utils/exportPdf';
import './App.css';

const CRITERIA = [
  { key: 'revenueQuality', label: 'Revenue Quality', weight: 0.15 },
  { key: 'ebitdaMargin', label: 'EBITDA Margin', weight: 0.15 },
  { key: 'customerConcentration', label: 'Customer Concentration', weight: 0.10 },
  { key: 'technologyMoat', label: 'Technology Moat', weight: 0.12 },
  { key: 'managementTeam', label: 'Management Team', weight: 0.13 },
  { key: 'marketSize', label: 'Market Size', weight: 0.12 },
  { key: 'competitivePosition', label: 'Competitive Position', weight: 0.13 },
  { key: 'integrationComplexity', label: 'Integration Complexity', weight: 0.10 },
];

const initialScores = Object.fromEntries(CRITERIA.map(c => [c.key, 3]));

function getVerdict(weightedTotal) {
  if (weightedTotal >= 3.8) return { label: 'Proceed', color: 'var(--green)', className: 'verdict-green' };
  if (weightedTotal >= 2.8) return { label: 'Conditional', color: 'var(--yellow)', className: 'verdict-yellow' };
  return { label: 'Pass', color: 'var(--red)', className: 'verdict-red' };
}

export default function App() {
  const [companyName, setCompanyName] = useState('');
  const [scores, setScores] = useState(initialScores);
  const [submitted, setSubmitted] = useState(false);
  const [exporting, setExporting] = useState(false);
  const reportRef = useRef(null);

  const weightedTotal = CRITERIA.reduce(
    (sum, c) => sum + scores[c.key] * c.weight,
    0
  );

  const verdict = getVerdict(weightedTotal);

  const chartData = CRITERIA.map(c => ({
    criterion: c.label,
    score: scores[c.key],
    fullMark: 5,
  }));

  const handleScoreChange = (key, value) => {
    setScores(prev => ({ ...prev, [key]: value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    if (!companyName.trim()) return;
    setSubmitted(true);
  };

  const handleReset = () => {
    setCompanyName('');
    setScores(initialScores);
    setSubmitted(false);
  };

  const handleExportPDF = async () => {
    setExporting(true);
    try {
      await exportPDF(reportRef.current, companyName);
    } finally {
      setExporting(false);
    }
  };

  return (
    <div className="app">
      <header className="header">
        <div className="header-inner">
          <h1>Deal Screening Scorecard</h1>
          <p className="header-subtitle">PE-Tech Partners</p>
        </div>
      </header>

      <main className="main">
        {!submitted ? (
          <ScorecardForm
            companyName={companyName}
            setCompanyName={setCompanyName}
            scores={scores}
            criteria={CRITERIA}
            onScoreChange={handleScoreChange}
            onSubmit={handleSubmit}
          />
        ) : (
          <div className="results-container">
            <div ref={reportRef} className="report-content">
              <div className="report-header-bar">
                <div>
                  <h2 className="company-title">{companyName}</h2>
                  <span className="report-date">
                    {new Date().toLocaleDateString('en-US', {
                      year: 'numeric', month: 'long', day: 'numeric',
                    })}
                  </span>
                </div>
                <div className={`verdict-badge ${verdict.className}`}>
                  {verdict.label}
                </div>
              </div>

              <ScoreSummary
                weightedTotal={weightedTotal}
                verdict={verdict}
                scores={scores}
                criteria={CRITERIA}
              />

              <ScoreRadarChart data={chartData} />
            </div>

            <div className="action-bar">
              <button className="btn btn-secondary" onClick={handleReset}>
                New Screening
              </button>
              <button
                className="btn btn-primary"
                onClick={handleExportPDF}
                disabled={exporting}
              >
                {exporting ? 'Generating PDF...' : 'Export PDF'}
              </button>
            </div>
          </div>
        )}
      </main>
    </div>
  );
}
