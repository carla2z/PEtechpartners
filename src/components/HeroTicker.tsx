const items = [
  'DealCloud', 'Salesforce', 'Affinity', 'HubSpot',
  'SOC 2 Compliance', 'VDR Management', 'Cap Table',
  'IC Memos', 'Due Diligence', 'Pipeline Tracking',
  'Portfolio Monitoring', 'CIM Processing', 'Data Rooms',
];

export default function HeroTicker() {
  const repeated = [...items, ...items];

  return (
    <div className="w-full overflow-hidden border-t border-white/10 pt-6 pb-2">
      <div
        className="flex gap-8 whitespace-nowrap"
        style={{ animation: 'ticker-scroll 40s linear infinite' }}
      >
        {repeated.map((item, i) => (
          <span key={i} className="flex items-center gap-8 text-xs tracking-widest uppercase">
            <span className="text-zinc-500/40 font-mono">{item}</span>
            <span className="w-1 h-1 rounded-full bg-gold-400/50" />
          </span>
        ))}
      </div>
    </div>
  );
}
