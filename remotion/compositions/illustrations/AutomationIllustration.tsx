import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS, IllustrationFrame, GridOverlay, CornerLabel } from './shared';

export const AutomationIllustration: React.FC = () => (
  <AbsoluteFill>
    <IllustrationFrame>
      <GridOverlay opacity={0.06} />
      <div style={{
        position: 'absolute', inset: 0,
        background: 'radial-gradient(ellipse 480px 360px at 50% 50%, rgba(191,10,48,0.24) 0%, transparent 60%)',
      }} />
      <div style={{
        position: 'absolute', inset: 0,
        background: 'radial-gradient(ellipse 420px 280px at 92% 8%, rgba(197,165,114,0.15) 0%, transparent 62%)',
      }} />

      <svg width="1000" height="800" style={{ position: 'absolute', inset: 0 }}>
        <defs>
          <linearGradient id="flowAuto" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%"  stopColor={COLORS.gold} stopOpacity="0.15" />
            <stop offset="50%" stopColor={COLORS.gold} stopOpacity="0.9" />
            <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.15" />
          </linearGradient>
        </defs>
        {/* input → gear → output flow lines */}
        <line x1="220" y1="400" x2="420" y2="400"
              stroke="url(#flowAuto)" strokeWidth="2" />
        <line x1="580" y1="400" x2="780" y2="400"
              stroke="url(#flowAuto)" strokeWidth="2" />
        {/* arrow heads */}
        <path d="M 410 395 L 420 400 L 410 405"
              fill="none" stroke={COLORS.gold} strokeWidth="2" />
        <path d="M 770 395 L 780 400 L 770 405"
              fill="none" stroke={COLORS.gold} strokeWidth="2" />
      </svg>

      {/* INPUT STACK — left */}
      {[0, 1, 2].map((i) => (
        <div key={i} style={{
          position: 'absolute',
          left: 90 + i * 8, top: 300 + i * 14,
          width: 140, height: 180,
          borderRadius: 6,
          background: 'rgba(255,255,255,0.05)',
          border: '1px solid rgba(255,255,255,0.18)',
          backdropFilter: 'blur(6px)',
          padding: '16px 14px',
          zIndex: 3 - i,
        }}>
          <div style={{
            fontSize: 10, color: COLORS.gold, fontFamily: 'Geist Mono, monospace',
            letterSpacing: '0.25em', marginBottom: 10, fontWeight: 500,
          }}>
            {['CIM', 'MEMO', 'VDR'][i]}
          </div>
          {[0.9, 0.8, 0.65, 0.85, 0.7].map((w, j) => (
            <div key={j} style={{
              height: 5, marginTop: 8, borderRadius: 2,
              width: `${w * 100}%`,
              background: 'rgba(255,255,255,0.22)',
            }} />
          ))}
        </div>
      ))}

      {/* GEAR CENTRE */}
      <div style={{
        position: 'absolute', left: 420, top: 280, width: 160, height: 240,
        display: 'flex', flexDirection: 'column', alignItems: 'center',
      }}>
        <div style={{
          width: 160, height: 160, borderRadius: 80,
          background: `linear-gradient(135deg, ${COLORS.crimson} 0%, #800621 100%)`,
          display: 'flex', alignItems: 'center', justifyContent: 'center',
          boxShadow: 'rgba(191,10,48,0.45) 0px 12px 32px, rgba(0,0,0,0.2) 0px 0px 0px 1px',
        }}>
          <svg width="82" height="82" viewBox="0 0 24 24" fill="none">
            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z"
                  stroke="white" strokeWidth="1.5" />
            <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 008 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H2a2 2 0 010-4h.09A1.65 1.65 0 004.6 8a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V2a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H22a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"
                  stroke="white" strokeWidth="1.5" />
          </svg>
        </div>
        <div style={{
          marginTop: 20, padding: '6px 16px', borderRadius: 4,
          border: `1px solid ${COLORS.gold}`,
          fontFamily: 'Geist Mono, monospace', fontSize: 11,
          color: COLORS.gold, letterSpacing: '0.3em', fontWeight: 500,
        }}>
          AUTO · 47 MIN
        </div>
      </div>

      {/* OUTPUT RECORD — right */}
      <div style={{
        position: 'absolute', left: 780, top: 300,
        width: 180, height: 180,
        borderRadius: 8,
        background: 'rgba(255,255,255,0.06)',
        border: '1px solid rgba(197,165,114,0.45)',
        padding: '18px 18px',
      }}>
        <div style={{
          fontSize: 10, color: COLORS.gold, fontFamily: 'Geist Mono, monospace',
          letterSpacing: '0.3em', marginBottom: 14, fontWeight: 500,
        }}>
          DEAL RECORD
        </div>
        {[
          ['Target', 'Acme Co.'],
          ['EV', '$142M'],
          ['Stage', 'IC'],
          ['Owner', 'CP'],
        ].map(([k, v], i) => (
          <div key={i} style={{
            display: 'flex', justifyContent: 'space-between',
            padding: '6px 0',
            borderBottom: i < 3 ? '1px solid rgba(255,255,255,0.08)' : 'none',
            fontSize: 11, fontFamily: 'Geist Mono, monospace',
          }}>
            <span style={{ color: 'rgba(255,255,255,0.45)', letterSpacing: '0.1em' }}>{k}</span>
            <span style={{ color: COLORS.whiteStrong, fontWeight: 500 }}>{v}</span>
          </div>
        ))}
      </div>

      {/* header badge */}
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
        }}>INGEST · TRANSFORM · LOAD</span>
      </div>

      <CornerLabel num="02" title="Workflow Automation" />
    </IllustrationFrame>
  </AbsoluteFill>
);
