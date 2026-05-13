import {
  RadarChart,
  PolarGrid,
  PolarAngleAxis,
  PolarRadiusAxis,
  Radar,
  ResponsiveContainer,
  Tooltip,
} from 'recharts';

export default function ScoreRadarChart({ data }) {
  return (
    <div className="chart-section">
      <h3>Performance Profile</h3>
      <div className="chart-container">
        <ResponsiveContainer width="100%" height={380}>
          <RadarChart data={data} cx="50%" cy="50%" outerRadius="75%">
            <PolarGrid stroke="#cbd5e1" />
            <PolarAngleAxis
              dataKey="criterion"
              tick={{ fill: '#475569', fontSize: 12 }}
            />
            <PolarRadiusAxis
              angle={90}
              domain={[0, 5]}
              tickCount={6}
              tick={{ fill: '#94a3b8', fontSize: 10 }}
            />
            <Tooltip
              contentStyle={{
                backgroundColor: '#fff',
                border: '1px solid #e2e8f0',
                borderRadius: '6px',
                fontSize: '13px',
              }}
              formatter={(value) => [value, 'Score']}
            />
            <Radar
              name="Score"
              dataKey="score"
              stroke="#3b82f6"
              fill="#3b82f6"
              fillOpacity={0.25}
              strokeWidth={2}
            />
          </RadarChart>
        </ResponsiveContainer>
      </div>
    </div>
  );
}
