import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

/**
 * Pipeline Management — bar chart showing deal velocity across stages.
 * Communicates: live view, deal volume per stage, bottleneck visibility.
 */
export const PipelineIllustration: React.FC = () => {
  const bars = [
    { label: 'Sourced',     value: 0.85, tone: 'gold' as const },
    { label: 'Qualified',   value: 0.68, tone: 'gold' as const },
    { label: 'LOI',         value: 0.45, tone: 'crimson' as const },
    { label: 'Diligence',   value: 0.55, tone: 'crimson' as const },
    { label: 'Negotiation', value: 0.32, tone: 'white' as const },
    { label: 'Closed',      value: 0.24, tone: 'white' as const },
  ];

  const chartTop = 180;
  const chartBottom = 600;
  const chartHeight = chartBottom - chartTop;
  const chartLeft = 110;
  const chartRight = 890;
  const barWidth = 88;
  const barGap = ((chartRight - chartLeft) - bars.length * barWidth) / (bars.length - 1);

  return (
    <AbsoluteFill>
      <IllustrationFrame>
        <GridOverlay />

        {/* Ambient glow */}
        <div
          style={{
            position: 'absolute',
            inset: 0,
            background:
              'radial-gradient(ellipse 500px 350px at 50% 40%, rgba(62,98,159,0.35) 0%, transparent 60%)',
          }}
        />

        {/* Chart header */}
        <div
          style={{
            position: 'absolute',
            top: 72,
            left: 110,
            display: 'flex',
            alignItems: 'center',
            gap: 14,
          }}
        >
          <span
            style={{
              fontSize: 14,
              fontFamily: 'Geist Mono, ui-monospace, monospace',
              color: COLORS.whiteMid,
              letterSpacing: '0.2em',
              textTransform: 'uppercase',
            }}
          >
            Pipeline · Q1
          </span>
          <div
            style={{
              padding: '3px 10px',
              borderRadius: 4,
              background: 'rgba(197,165,114,0.18)',
              fontSize: 10,
              color: COLORS.gold,
              fontFamily: 'Geist Mono, ui-monospace, monospace',
              letterSpacing: '0.15em',
            }}
          >
            LIVE
          </div>
        </div>

        {/* Stat overlay top-right */}
        <div
          style={{
            position: 'absolute',
            top: 56,
            right: 110,
            textAlign: 'right',
          }}
        >
          <div
            style={{
              fontSize: 36,
              fontWeight: 300,
              color: COLORS.white,
              letterSpacing: '-0.02em',
              fontFamily: 'Geist Mono, ui-monospace, monospace',
            }}
          >
            <span style={{ color: COLORS.gold }}>47</span>
            <span style={{ opacity: 0.6 }}> active</span>
          </div>
          <div
            style={{
              fontSize: 11,
              color: COLORS.whiteMid,
              fontFamily: 'Geist Mono, ui-monospace, monospace',
              letterSpacing: '0.15em',
              textTransform: 'uppercase',
              marginTop: 2,
            }}
          >
            deals in motion
          </div>
        </div>

        {/* Bars */}
        <svg width="1000" height="800" style={{ position: 'absolute', inset: 0 }}>
          {/* Gridlines */}
          {[0.25, 0.5, 0.75, 1].map((g, i) => (
            <line
              key={`grid-${i}`}
              x1={chartLeft}
              x2={chartRight}
              y1={chartBottom - g * chartHeight}
              y2={chartBottom - g * chartHeight}
              stroke="rgba(255,255,255,0.06)"
              strokeWidth="1"
            />
          ))}

          {/* Baseline */}
          <line
            x1={chartLeft}
            x2={chartRight}
            y1={chartBottom}
            y2={chartBottom}
            stroke="rgba(197,165,114,0.4)"
            strokeWidth="1.5"
          />

          {bars.map((b, i) => {
            const x = chartLeft + i * (barWidth + barGap);
            const h = b.value * chartHeight;
            const y = chartBottom - h;
            const color =
              b.tone === 'gold'
                ? COLORS.gold
                : b.tone === 'crimson'
                ? COLORS.crimson
                : 'rgba(255,255,255,0.85)';
            return (
              <g key={`bar-${i}`}>
                {/* shadow */}
                <rect
                  x={x}
                  y={y}
                  width={barWidth}
                  height={h}
                  fill={color}
                  opacity="0.18"
                  rx="2"
                />
                {/* top accent */}
                <rect
                  x={x}
                  y={y}
                  width={barWidth}
                  height={4}
                  fill={color}
                  rx="2"
                />
                {/* bar body gradient via 2 rects */}
                <rect
                  x={x}
                  y={y + 4}
                  width={barWidth}
                  height={h - 4}
                  fill={color}
                  opacity="0.35"
                />
              </g>
            );
          })}
        </svg>

        {/* Labels under bars */}
        {bars.map((b, i) => {
          const x = chartLeft + i * (barWidth + barGap);
          return (
            <div
              key={`label-${i}`}
              style={{
                position: 'absolute',
                left: x,
                top: chartBottom + 16,
                width: barWidth,
                textAlign: 'center',
                fontSize: 11,
                fontFamily: 'Geist Mono, ui-monospace, monospace',
                color: COLORS.whiteMid,
                letterSpacing: '0.05em',
                textTransform: 'uppercase',
              }}
            >
              {b.label}
            </div>
          );
        })}

        <CornerLabel num="03" title="Pipeline Management" />
      </IllustrationFrame>
    </AbsoluteFill>
  );
};
