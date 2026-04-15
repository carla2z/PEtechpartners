import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

/**
 * Data Security — shield with SOC2 mark + compliance badges.
 * Communicates: enterprise-grade protection, SOC 2 compliance, document security.
 */
export const SecurityIllustration: React.FC = () => {
  const badges = [
    { label: 'SOC 2',     detail: 'TYPE II' },
    { label: 'AES-256',   detail: 'ENCRYPTION' },
    { label: 'ISO 27001', detail: 'CERTIFIED' },
  ];

  return (
    <AbsoluteFill>
      <IllustrationFrame>
        <GridOverlay opacity={0.04} />

        {/* Glow behind shield */}
        <div
          style={{
            position: 'absolute',
            inset: 0,
            background:
              'radial-gradient(ellipse 350px 450px at 50% 42%, rgba(197,165,114,0.28) 0%, transparent 60%)',
          }}
        />

        {/* Shield */}
        <div
          style={{
            position: 'absolute',
            top: 120,
            left: '50%',
            transform: 'translateX(-50%)',
            width: 280,
            height: 340,
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'center',
          }}
        >
          <svg
            width="280"
            height="340"
            viewBox="0 0 280 340"
            fill="none"
          >
            <defs>
              <linearGradient id="shieldGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stopColor="#13477A" stopOpacity="0.95" />
                <stop offset="100%" stopColor="#0A2E50" stopOpacity="1" />
              </linearGradient>
              <linearGradient id="shieldOutline" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stopColor={COLORS.gold} stopOpacity="1" />
                <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.3" />
              </linearGradient>
            </defs>

            {/* Shield path */}
            <path
              d="M140 10 L260 56 L260 180 C260 246, 200 300, 140 326 C80 300, 20 246, 20 180 L20 56 Z"
              fill="url(#shieldGrad)"
              stroke="url(#shieldOutline)"
              strokeWidth="2"
            />

            {/* Inner ring */}
            <path
              d="M140 40 L230 76 L230 178 C230 232, 188 278, 140 300 C92 278, 50 232, 50 178 L50 76 Z"
              fill="none"
              stroke="rgba(197,165,114,0.25)"
              strokeWidth="1"
              strokeDasharray="4,6"
            />

            {/* Checkmark — big, centered */}
            <path
              d="M90 170 L130 210 L195 140"
              stroke={COLORS.crimson}
              strokeWidth="8"
              strokeLinecap="round"
              strokeLinejoin="round"
              fill="none"
            />
            {/* Check highlight */}
            <path
              d="M90 170 L130 210 L195 140"
              stroke="rgba(255,255,255,0.25)"
              strokeWidth="2"
              strokeLinecap="round"
              strokeLinejoin="round"
              fill="none"
            />
          </svg>
        </div>

        {/* Shield label */}
        <div
          style={{
            position: 'absolute',
            top: 478,
            left: '50%',
            transform: 'translateX(-50%)',
            textAlign: 'center',
          }}
        >
          <div
            style={{
              fontSize: 13,
              fontFamily: 'Geist Mono, ui-monospace, monospace',
              color: COLORS.gold,
              letterSpacing: '0.3em',
              textTransform: 'uppercase',
              fontWeight: 500,
            }}
          >
            SECURED · MONITORED · LOGGED
          </div>
        </div>

        {/* Compliance badges row */}
        <div
          style={{
            position: 'absolute',
            top: 560,
            left: '50%',
            transform: 'translateX(-50%)',
            display: 'flex',
            gap: 18,
          }}
        >
          {badges.map((b, i) => (
            <div
              key={i}
              style={{
                padding: '14px 22px',
                borderRadius: 6,
                background: 'rgba(255,255,255,0.05)',
                border: '1px solid rgba(197,165,114,0.35)',
                textAlign: 'center',
                minWidth: 120,
              }}
            >
              <div
                style={{
                  fontSize: 16,
                  fontWeight: 500,
                  color: COLORS.white,
                  letterSpacing: '-0.01em',
                  marginBottom: 4,
                }}
              >
                {b.label}
              </div>
              <div
                style={{
                  fontSize: 10,
                  fontFamily: 'Geist Mono, ui-monospace, monospace',
                  color: COLORS.gold,
                  letterSpacing: '0.18em',
                }}
              >
                {b.detail}
              </div>
            </div>
          ))}
        </div>

        <CornerLabel num="04" title="Data Security" />
      </IllustrationFrame>
    </AbsoluteFill>
  );
};
