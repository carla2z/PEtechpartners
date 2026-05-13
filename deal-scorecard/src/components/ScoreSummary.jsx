export default function ScoreSummary({ weightedTotal, verdict, scores, criteria }) {
  return (
    <div className="score-summary">
      <div className="summary-top">
        <div className="total-score-card">
          <span className="total-label">Weighted Score</span>
          <span className="total-value" style={{ color: verdict.color }}>
            {weightedTotal.toFixed(2)}
          </span>
          <span className="total-max">out of 5.00</span>
        </div>
      </div>

      <div className="criteria-breakdown">
        <h3>Score Breakdown</h3>
        <div className="breakdown-grid">
          {criteria.map((c) => {
            const score = scores[c.key];
            const pct = (score / 5) * 100;
            const barColor =
              score >= 4 ? 'var(--green)' : score >= 3 ? 'var(--yellow)' : 'var(--red)';
            return (
              <div key={c.key} className="breakdown-row">
                <div className="breakdown-label">
                  <span>{c.label}</span>
                  <span className="breakdown-score">{score}/5</span>
                </div>
                <div className="progress-bar">
                  <div
                    className="progress-fill"
                    style={{ width: `${pct}%`, backgroundColor: barColor }}
                  />
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </div>
  );
}
