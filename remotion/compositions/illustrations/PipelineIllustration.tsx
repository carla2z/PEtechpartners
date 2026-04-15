import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

export const PipelineIllustration: React.FC = () => {
  const stages = [
    { label: 'SOURCED',   v: 0.92, color: COLORS.gold },
    { label: 'QUALIFIED', v: 0.78, color: COLORS.gold },
    { label: 'LOI',       v: 0.58, color: COLORS.crimson },
    { label: 'DILIGENCE', v: 0.68, color: COLORS.crimson },
    { label: 'NEGOTIATE', v: 0.42, color: COLORS.whiteStrong },
    { label: 'CLOSED',    v: 0.30, color: COLORS.whiteStrong },
  ];
  const chartX = 110, chartY = 220, chartW = 780, chartH = 380;
  const barGap = 28;
  const barW = (chartW - barGap * (stages.length - 1)) / stages.length;

  return (
    <AbsoluteFill>
      <IllustrationFrame>
        <GridOverlay opacity={0.06} />
        <div style={{
          position: 'absolute', inset: 0,
          background: 'radial-gradient(ellipse 460px 320px at 50% 60%, rgba(191,10,48,0.20) 0%, transparent 65%)',
        }} />

        <svg width="1000" height="800" style={{ position: 'absolute', inset: 0 }}>
          {/* horizontal gridlines */}
          {[0, 0.25, 0.5, 0.75, 1].map((t, i) => (
            <line key={i}
                  x1={chartX} y1={chartY + chartH * (1 - t)}
                  x2={chartX + chartW} y2={chartY + chartH * (1 - t)}
                  stroke="rgba(255,255,255,0.08)" strokeWidth="1" />
          ))}
          {/* bars */}
          {stages.map((s, i) => {
            const h = chartH * s.v;
            const x = chartX + i * (barW + barGap);
            const y = chartY + (chartH - h);
            return (
              <g key={i}>
                {/* bar value label */}
                <text x={x + barW / 2} y={y - 10}
                      fill={COLORS.whiteStrong} fontSize="13"
                      fontFamily="Geist Mono, monospace"
                      textAnchor="middle" letterSpacing="0.08em">
                  {Math.round(s.v * 100)}
                </text>
                {/* bar */}
                <rect x={x} y={y} width={barW} height={h}
                      rx="4" fill={s.color} opacity={s.color === COLORS.whiteStrong ? 0.85 : 0.94} />
                {/* stage label */}
                <text x={x + barW / 2} y={chartY + chartH + 28}
                      fill="rgba(255,255,255,0.6)" fontSize="11"
                      fontFamily="Geist Mono, monospace"
                      textAnchor="middle" letterSpacing="0.18em" fontWeight="500">
                  {s.label}
                </text>
              </g>
            );
          })}
        </svg>

        {/* header row */}
        <div style={{
          position: 'absolute', top: 56, left: 56, right: 56,
          display: 'flex', alignItems: 'center', justifyContent: 'space-between',
        }}>
          <div style={{ display: 'flex', alignItems: 'center', gap: 14 }}>
            <span style={{
              fontSize: 22, color: COLORS.whiteStrong, fontWeight: 300,
              letterSpacing: '-0.02em',
            }}>Pipeline</span>
            <span style={{
              fontSize: 11, fontFamily: 'Geist Mono, monospace',
              color: COLORS.gold, letterSpacing: '0.25em',
            }}>· Q1</span>
            <div style={{
              display: 'flex', alignItems: 'center', gap: 8,
              padding: '4px 10px', borderRadius: 3,
              background: 'rgba(191,10,48,0.2)', border: `1px solid ${COLORS.crimson}`,
            }}>
              <div style={{
                width: 6, height: 6, borderRadius: 3, background: COLORS.crimson,
                boxShadow: `0 0 8px ${COLORS.crimson}`,
              }} />
              <span style={{
                fontSize: 10, fontFamily: 'Geist Mono, monospace',
                color: COLORS.crimson, letterSpacing: '0.3em', fontWeight: 500,
              }}>LIVE</span>
            </div>
          </div>
          <div style={{
            padding: '10px 16px', borderRadius: 6,
            background: 'rgba(255,255,255,0.07)',
            border: '1px solid rgba(255,255,255,0.2)',
            textAlign: 'right',
          }}>
            <div style={{
              fontSize: 11, color: 'rgba(255,255,255,0.55)',
              fontFamily: 'Geist Mono, monospace', letterSpacing: '0.2em',
            }}>ACTIVE</div>
            <div style={{
              fontSize: 26, color: COLORS.gold, fontWeight: 300,
              fontFamily: 'Geist, sans-serif', letterSpacing: '-0.03em',
            }}>47 deals</div>
          </div>
        </div>

        <CornerLabel num="03" title="Pipeline Management" />
      </IllustrationFrame>
    </AbsoluteFill>
  );
};
