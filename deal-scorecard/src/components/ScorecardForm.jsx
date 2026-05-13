export default function ScorecardForm({
  companyName,
  setCompanyName,
  scores,
  criteria,
  onScoreChange,
  onSubmit,
}) {
  return (
    <form className="scorecard-form" onSubmit={onSubmit}>
      <div className="card">
        <h2 className="card-title">Company Information</h2>
        <div className="form-group">
          <label htmlFor="companyName">Company / Target Name</label>
          <input
            id="companyName"
            type="text"
            value={companyName}
            onChange={(e) => setCompanyName(e.target.value)}
            placeholder="Enter company name..."
            required
            autoFocus
          />
        </div>
      </div>

      <div className="card">
        <h2 className="card-title">Screening Criteria</h2>
        <p className="card-description">
          Score each criterion from 1 (poor) to 5 (excellent)
        </p>
        <div className="criteria-grid">
          {criteria.map((c) => (
            <div key={c.key} className="criterion-row">
              <div className="criterion-info">
                <span className="criterion-label">{c.label}</span>
                <span className="criterion-weight">
                  {Math.round(c.weight * 100)}% weight
                </span>
              </div>
              <div className="score-selector">
                {[1, 2, 3, 4, 5].map((val) => (
                  <button
                    key={val}
                    type="button"
                    className={`score-btn ${scores[c.key] === val ? 'score-btn-active' : ''} ${
                      val <= 2 ? 'score-low' : val <= 3 ? 'score-mid' : 'score-high'
                    }`}
                    onClick={() => onScoreChange(c.key, val)}
                  >
                    {val}
                  </button>
                ))}
              </div>
            </div>
          ))}
        </div>
      </div>

      <button type="submit" className="btn btn-primary btn-submit" disabled={!companyName.trim()}>
        Generate Scorecard
      </button>
    </form>
  );
}
