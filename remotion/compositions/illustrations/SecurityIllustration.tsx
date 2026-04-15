import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

export const SecurityIllustration: React.FC = () => (
  <AbsoluteFill>
    <IllustrationFrame>
      <GridOverlay opacity={0.06} />
      <div style={{
        position: 'absolute', inset: 0,
        background: 'radial-gradient(ellipse 480px 360px at 50% 42%, rgba(191,10,48,0.28) 0%, transparent 60%)',
      }} />
      <div style={{
        position: 'absolute', inset: 0,
        background: 'radial-gradient(ellipse 360px 240px at 90% 10%, rgba(197,165,114,0.14) 0%, transparent 65%)',
      }} />

      <svg width="1000" height="800" style={{ position: 'absolute', inset: 0 }}>
        <defs>
          <linearGradient id="shieldFill" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%"  stopColor="#0F3B66" />
            <stop offset="100%" stopColor="#061b30" />
          </linearGradient>
          <radialGradient id="shieldHalo" cx="50%" cy="50%" r="50%">
            <stop offset="0%"  stopColor={COLORS.crimson} stopOpacity="0.4" />
            <stop offset="100%" stopColor={COLORS.crimson} stopOpacity="0" />
          </radialGradient>
        </defs>
        {/* concentric scan rings */}
        {[300, 250, 200, 150].map((r, i) => (
          <circle key={i} cx="500" cy="360" r={r}
                  fill="none"
                  stroke={i === 0 ? COLORS.gold : 'rgba(255,255,255,0.12)'}
                  strokeOpacity={i === 0 ? 0.35 : undefined}
                  strokeWidth="1"
                  strokeDasharray={i % 2 === 0 ? '4,8' : undefined} />
        ))}
        {/* shield halo */}
        <circle cx="500" cy="360" r="220" fill="url(#shieldHalo)" />

        {/* shield path */}
        <path
          d="M 500 140 L 680 220 L 680 400 C 680 500, 610 580, 500 620 C 390 580, 320 500, 320 400 L 320 220 Z"
          fill="url(#shieldFill)"
          stroke={COLORS.gold}
          strokeWidth="2.5"
        />
        {/* shield inner ring */}
        <path
          d="M 500 175 L 650 240 L 650 400 C 650 485, 590 555, 500 590 C 410 555, 350 485, 350 400 L 350 240 Z"
          fill="none"
          stroke="rgba(255,255,255,0.22)"
          strokeWidth="1"
          strokeDasharray="3,5"
        />
        {/* check mark — bold crimson */}
        <path
          d="M 410 380 L 478 448 L 590 316"
          fill="none" stroke={COLORS.crimson} strokeWidth="16"
          strokeLinecap="round" strokeLinejoin="round"
        />
      </svg>

      {/* compliance badges row */}
      <div style={{
        position: 'absolute', bottom: 108, left: 0, right: 0,
        display: 'flex', justifyContent: 'center', gap: 20,
      }}>
        {[
          { top: 'SOC 2', bot: 'TYPE II' },
          { top: 'AES-256', bot: 'ENCRYPTION' },
          { top: 'ISO 27001', bot: 'CERTIFIED' },
        ].map((b, i) => (
          <div key={i} style={{
            padding: '10px 20px', borderRadius: 6,
            background: 'rgba(255,255,255,0.06)',
            border: `1px solid ${COLORS.gold}`,
            textAlign: 'center', minWidth: 140,
          }}>
            <div style={{
              fontSize: 15, color: COLORS.whiteStrong, fontWeight: 500,
              letterSpacing: '-0.01em', fontFamily: 'Geist, sans-serif',
            }}>{b.top}</div>
            <div style={{
              fontSize: 10, color: COLORS.gold, fontFamily: 'Geist Mono, monospace',
              letterSpacing: '0.25em', marginTop: 3, fontWeight: 500,
            }}>{b.bot}</div>
          </div>
        ))}
      </div>

      {/* top status badge */}
      <div style={{
        position: 'absolute', top: 48, left: 56,
        display: 'flex', alignItems: 'center', gap: 10,
        padding: '6px 14px', borderRadius: 4,
        border: `1px solid ${COLORS.gold}`, opacity: 0.9,
      }}>
        <div style={{
          width: 6, height: 6, borderRadius: 3,
          background: COLORS.crimson,
          boxShadow: `0 0 8px ${COLORS.crimson}`,
        }} />
        <span style={{
          fontSize: 11, fontFamily: 'Geist Mono, monospace',
          color: COLORS.gold, letterSpacing: '0.3em', fontWeight: 500,
        }}>SECURED · MONITORED · LOGGED</span>
      </div>

      <CornerLabel num="04" title="Data Security" />
    </IllustrationFrame>
  </AbsoluteFill>
);
