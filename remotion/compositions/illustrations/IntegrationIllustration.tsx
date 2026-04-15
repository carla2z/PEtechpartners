import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

export const IntegrationIllustration: React.FC = () => {
  const nodes = [
    { label: 'DealCloud',  angle: -135, color: COLORS.gold },
    { label: 'Affinity',   angle:  -45, color: COLORS.crimson },
    { label: 'Salesforce', angle:   45, color: COLORS.white },
    { label: 'HubSpot',    angle:  135, color: COLORS.gold },
  ];
  const cx = 500, cy = 400, r = 280;
  return (
    <AbsoluteFill>
      <IllustrationFrame>
        <GridOverlay opacity={0.06} />
        {/* crimson hub glow */}
        <div style={{
          position: 'absolute', inset: 0,
          background: 'radial-gradient(ellipse 520px 400px at 50% 50%, rgba(191,10,48,0.32) 0%, transparent 62%)',
        }} />
        {/* gold ambient corner */}
        <div style={{
          position: 'absolute', inset: 0,
          background: 'radial-gradient(ellipse 380px 260px at 90% 8%, rgba(197,165,114,0.16) 0%, transparent 65%)',
        }} />

        <svg width="1000" height="800" style={{ position: 'absolute', inset: 0 }}>
          <defs>
            <radialGradient id="hubGlow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stopColor={COLORS.crimson} stopOpacity="1" />
              <stop offset="70%" stopColor={COLORS.crimson} stopOpacity="0.85" />
              <stop offset="100%" stopColor={COLORS.crimson} stopOpacity="0" />
            </radialGradient>
            <linearGradient id="linkGrad" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%"  stopColor={COLORS.gold} stopOpacity="0.35" />
              <stop offset="50%" stopColor={COLORS.gold} stopOpacity="0.85" />
              <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.35" />
            </linearGradient>
          </defs>

          {/* outer orbit */}
          <circle cx={cx} cy={cy} r={r} fill="none"
                  stroke="rgba(197,165,114,0.22)" strokeWidth="1.25"
                  strokeDasharray="4,6" />
          {/* mid orbit */}
          <circle cx={cx} cy={cy} r={r - 75} fill="none"
                  stroke="rgba(255,255,255,0.06)" strokeWidth="1" />

          {/* connection lines + packets */}
          {nodes.map((n, i) => {
            const rad = (n.angle * Math.PI) / 180;
            const x = cx + r * Math.cos(rad);
            const y = cy + r * Math.sin(rad);
            const mx = cx + (r * 0.55) * Math.cos(rad);
            const my = cy + (r * 0.55) * Math.sin(rad);
            return (
              <g key={i}>
                <line x1={cx} y1={cy} x2={x} y2={y}
                      stroke="url(#linkGrad)" strokeWidth="2" />
                <circle cx={mx} cy={my} r="4" fill={COLORS.gold} opacity="0.9" />
              </g>
            );
          })}

          {/* hub halo layers */}
          <circle cx={cx} cy={cy} r="150" fill="url(#hubGlow)" opacity="0.35" />
          <circle cx={cx} cy={cy} r="95"  fill="none"
                  stroke={COLORS.crimson} strokeWidth="1.5" opacity="0.5" />
          <circle cx={cx} cy={cy} r="72"  fill={COLORS.crimson} />
          <circle cx={cx} cy={cy} r="72"  fill="none"
                  stroke="rgba(255,255,255,0.2)" strokeWidth="1.5" />
          {/* hex icon */}
          <g transform={`translate(${cx - 22}, ${cy - 24})`}>
            <path d="M 22 0 L 44 13 L 44 37 L 22 50 L 0 37 L 0 13 Z"
                  fill="none" stroke="white" strokeWidth="2" />
            <path d="M 22 0 L 22 50 M 0 13 L 44 37 M 44 13 L 0 37"
                  stroke="white" strokeWidth="1.2" opacity="0.55" />
          </g>
        </svg>

        {/* tool nodes — bigger, clearer */}
        {nodes.map((n, i) => {
          const rad = (n.angle * Math.PI) / 180;
          const x = cx + r * Math.cos(rad);
          const y = cy + r * Math.sin(rad);
          return (
            <div key={i} style={{
              position: 'absolute',
              left: x - 86, top: y - 30,
              width: 172, padding: '14px 18px',
              borderRadius: 8,
              background: 'rgba(255,255,255,0.07)',
              border: '1px solid rgba(255,255,255,0.22)',
              backdropFilter: 'blur(8px)',
              display: 'flex', alignItems: 'center', gap: 10,
            }}>
              <div style={{
                width: 10, height: 10, borderRadius: 5, background: n.color,
                boxShadow: `0 0 12px ${n.color}`,
              }} />
              <span style={{
                fontSize: 18, color: COLORS.whiteStrong,
                fontWeight: 500, letterSpacing: '-0.01em',
              }}>{n.label}</span>
            </div>
          );
        })}

        {/* top badge */}
        <div style={{
          position: 'absolute', top: 48, left: 56,
          display: 'flex', alignItems: 'center', gap: 10,
          padding: '6px 14px', borderRadius: 4,
          border: `1px solid ${COLORS.gold}`, opacity: 0.9,
        }}>
          <div style={{ width: 6, height: 6, borderRadius: 3, background: COLORS.gold }} />
          <span style={{
            fontSize: 11, fontFamily: 'Geist Mono, monospace',
            color: COLORS.gold, letterSpacing: '0.3em', fontWeight: 500,
          }}>LIVE · 4 SYSTEMS</span>
        </div>

        <CornerLabel num="01" title="System Integration" />
      </IllustrationFrame>
    </AbsoluteFill>
  );
};
