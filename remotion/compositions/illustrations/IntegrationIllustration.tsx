import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

/**
 * System Integration — central hub with 4 spoked tool nodes.
 * Communicates: DealCloud, Salesforce, Affinity, HubSpot → one operating system.
 */
export const IntegrationIllustration: React.FC = () => {
  const nodes = [
    { label: 'DealCloud',  angle: -140, color: COLORS.gold },
    { label: 'Affinity',   angle:  -45, color: COLORS.crimson },
    { label: 'Salesforce', angle:   45, color: COLORS.white },
    { label: 'HubSpot',    angle:  140, color: COLORS.gold },
  ];
  const center = { x: 500, y: 400 };
  const radius = 240;

  return (
    <AbsoluteFill>
      <IllustrationFrame>
        <GridOverlay />

        {/* Ambient crimson glow behind hub */}
        <div
          style={{
            position: 'absolute',
            inset: 0,
            background:
              'radial-gradient(ellipse 400px 300px at 50% 50%, rgba(191,10,48,0.28) 0%, transparent 60%)',
          }}
        />

        {/* SVG: connecting lines + nodes */}
        <svg
          width="1000"
          height="800"
          style={{ position: 'absolute', inset: 0 }}
        >
          <defs>
            <radialGradient id="hubGlow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stopColor={COLORS.crimson} stopOpacity="1" />
              <stop offset="70%" stopColor={COLORS.crimson} stopOpacity="0.8" />
              <stop offset="100%" stopColor={COLORS.crimson} stopOpacity="0" />
            </radialGradient>
            <linearGradient id="lineGrad" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stopColor={COLORS.gold} stopOpacity="0.2" />
              <stop offset="50%" stopColor={COLORS.gold} stopOpacity="0.6" />
              <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.2" />
            </linearGradient>
          </defs>

          {/* Orbit ring (subtle) */}
          <circle
            cx={center.x}
            cy={center.y}
            r={radius}
            fill="none"
            stroke="rgba(197,165,114,0.18)"
            strokeWidth="1"
            strokeDasharray="4,6"
          />

          {/* Connection lines */}
          {nodes.map((n, i) => {
            const rad = (n.angle * Math.PI) / 180;
            const x = center.x + radius * Math.cos(rad);
            const y = center.y + radius * Math.sin(rad);
            return (
              <line
                key={`line-${i}`}
                x1={center.x}
                y1={center.y}
                x2={x}
                y2={y}
                stroke="url(#lineGrad)"
                strokeWidth="1.5"
              />
            );
          })}

          {/* Hub glow halo */}
          <circle
            cx={center.x}
            cy={center.y}
            r="90"
            fill="url(#hubGlow)"
            opacity="0.45"
          />
          {/* Hub outer ring */}
          <circle
            cx={center.x}
            cy={center.y}
            r="60"
            fill="none"
            stroke={COLORS.crimson}
            strokeWidth="1.5"
            opacity="0.4"
          />
          {/* Hub core */}
          <circle cx={center.x} cy={center.y} r="42" fill={COLORS.crimson} />
          <circle
            cx={center.x}
            cy={center.y}
            r="42"
            fill="none"
            stroke="rgba(255,255,255,0.15)"
            strokeWidth="1"
          />
        </svg>

        {/* Hub center icon */}
        <div
          style={{
            position: 'absolute',
            left: center.x - 12,
            top: center.y - 12,
            width: 24,
            height: 24,
            zIndex: 5,
          }}
        >
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path
              d="M12 2 L22 7 L22 17 L12 22 L2 17 L2 7 Z"
              stroke="white"
              strokeWidth="1.5"
              fill="none"
            />
            <path
              d="M12 2 L12 22 M2 7 L22 17 M22 7 L2 17"
              stroke="white"
              strokeWidth="1"
              opacity="0.6"
            />
          </svg>
        </div>

        {/* Tool nodes */}
        {nodes.map((n, i) => {
          const rad = (n.angle * Math.PI) / 180;
          const x = center.x + radius * Math.cos(rad);
          const y = center.y + radius * Math.sin(rad);
          return (
            <div
              key={`node-${i}`}
              style={{
                position: 'absolute',
                left: x - 60,
                top: y - 24,
                width: 120,
                padding: '10px 16px',
                borderRadius: 6,
                background: 'rgba(255,255,255,0.06)',
                border: '1px solid rgba(255,255,255,0.14)',
                backdropFilter: 'blur(8px)',
                fontSize: 14,
                color: COLORS.whiteStrong,
                fontWeight: 500,
                textAlign: 'center',
                letterSpacing: '-0.01em',
                zIndex: 5,
              }}
            >
              {n.label}
              <div
                style={{
                  position: 'absolute',
                  top: 4,
                  right: 6,
                  width: 6,
                  height: 6,
                  borderRadius: 3,
                  background: n.color,
                  boxShadow: `0 0 8px ${n.color}`,
                }}
              />
            </div>
          );
        })}

        <CornerLabel num="01" title="System Integration" />
      </IllustrationFrame>
    </AbsoluteFill>
  );
};
