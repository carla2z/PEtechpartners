import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

/**
 * Workflow Automation — flow of documents through automated steps.
 * Input docs → transform node → structured output. Plus a subtle clock
 * glyph for the time-saved angle.
 */
export const AutomationIllustration: React.FC = () => {
  return (
    <AbsoluteFill>
      <IllustrationFrame>
        <GridOverlay />

        {/* Gold glow on right side */}
        <div
          style={{
            position: 'absolute',
            inset: 0,
            background:
              'radial-gradient(ellipse 500px 400px at 80% 50%, rgba(197,165,114,0.22) 0%, transparent 60%)',
          }}
        />

        <svg width="1000" height="800" style={{ position: 'absolute', inset: 0 }}>
          <defs>
            <linearGradient id="flowGrad" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stopColor={COLORS.gold} stopOpacity="0.1" />
              <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.7" />
            </linearGradient>
          </defs>

          {/* Flow path */}
          <path
            d="M 140 400 L 850 400"
            stroke="url(#flowGrad)"
            strokeWidth="2"
            strokeDasharray="6,6"
          />
        </svg>

        {/* Left: stack of input documents */}
        <div
          style={{
            position: 'absolute',
            left: 80,
            top: 280,
            display: 'flex',
            flexDirection: 'column',
            gap: 10,
          }}
        >
          {[0, 1, 2].map((i) => (
            <div
              key={i}
              style={{
                width: 140,
                height: 60,
                background: 'rgba(255,255,255,0.05)',
                border: '1px solid rgba(255,255,255,0.15)',
                borderLeft: `3px solid ${COLORS.crimson}`,
                borderRadius: 6,
                display: 'flex',
                flexDirection: 'column',
                justifyContent: 'center',
                padding: '0 14px',
                gap: 6,
                opacity: 1 - i * 0.15,
                transform: `translateX(${i * 4}px)`,
              }}
            >
              <div
                style={{
                  width: 70,
                  height: 4,
                  background: 'rgba(255,255,255,0.4)',
                  borderRadius: 2,
                }}
              />
              <div
                style={{
                  width: 96,
                  height: 3,
                  background: 'rgba(255,255,255,0.2)',
                  borderRadius: 2,
                }}
              />
              <div
                style={{
                  width: 50,
                  height: 3,
                  background: 'rgba(255,255,255,0.2)',
                  borderRadius: 2,
                }}
              />
            </div>
          ))}
          <span
            style={{
              fontSize: 12,
              color: COLORS.whiteMid,
              fontFamily: 'Geist Mono, ui-monospace, monospace',
              letterSpacing: '0.15em',
              textTransform: 'uppercase',
              marginTop: 8,
            }}
          >
            CIMs · Memos · VDRs
          </span>
        </div>

        {/* Center: transform/gear node */}
        <div
          style={{
            position: 'absolute',
            left: 430,
            top: 340,
            width: 140,
            height: 140,
            borderRadius: 16,
            background: `linear-gradient(135deg, ${COLORS.crimson} 0%, #800621 100%)`,
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'center',
            boxShadow:
              'rgba(191,10,48,0.4) 0px 12px 40px 0px, rgba(0,0,0,0.3) 0px 0px 0px 1px',
          }}
        >
          {/* Gear SVG */}
          <svg width="64" height="64" viewBox="0 0 24 24" fill="none">
            <path
              d="M12 15.5A3.5 3.5 0 1 0 12 8.5a3.5 3.5 0 0 0 0 7Z"
              stroke="white"
              strokeWidth="1.5"
            />
            <path
              d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3h.1A1.7 1.7 0 0 0 10 3.1V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.8v.1a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1Z"
              stroke="white"
              strokeWidth="1.5"
              strokeLinecap="round"
              strokeLinejoin="round"
            />
          </svg>
        </div>

        {/* Small time-saved badge under center node */}
        <div
          style={{
            position: 'absolute',
            left: 430,
            top: 500,
            width: 140,
            padding: '8px 12px',
            borderRadius: 6,
            background: 'rgba(197,165,114,0.12)',
            border: '1px solid rgba(197,165,114,0.3)',
            fontSize: 12,
            fontFamily: 'Geist Mono, ui-monospace, monospace',
            color: COLORS.gold,
            textAlign: 'center',
            letterSpacing: '0.1em',
          }}
        >
          AUTO · 47 MIN
        </div>

        {/* Right: structured output record */}
        <div
          style={{
            position: 'absolute',
            right: 80,
            top: 290,
            width: 180,
            padding: '18px 18px',
            borderRadius: 8,
            background: 'rgba(255,255,255,0.07)',
            border: '1px solid rgba(197,165,114,0.4)',
            boxShadow: 'rgba(0,0,0,0.3) 0px 8px 24px 0px',
          }}
        >
          <div
            style={{
              fontSize: 10,
              color: COLORS.gold,
              fontFamily: 'Geist Mono, ui-monospace, monospace',
              letterSpacing: '0.2em',
              marginBottom: 12,
            }}
          >
            DEAL_RECORD
          </div>
          {[
            { k: 'target', v: 'AcmeCo' },
            { k: 'ebitda', v: '$12.4M' },
            { k: 'stage', v: 'LOI' },
            { k: 'flag', v: 'clean' },
          ].map((r) => (
            <div
              key={r.k}
              style={{
                display: 'flex',
                justifyContent: 'space-between',
                fontSize: 11,
                fontFamily: 'Geist Mono, ui-monospace, monospace',
                marginBottom: 6,
                color: COLORS.whiteStrong,
              }}
            >
              <span style={{ color: COLORS.whiteMid }}>{r.k}</span>
              <span>{r.v}</span>
            </div>
          ))}
        </div>

        <CornerLabel num="02" title="Workflow Automation" />
      </IllustrationFrame>
    </AbsoluteFill>
  );
};
