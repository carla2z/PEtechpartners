import React from 'react';
import { COLORS } from './illustrations/shared';

/**
 * 8 editorial motifs used by BlogHero. Each component renders its own
 * 500x500 visual. Styling intentionally flat + geometric to match the
 * Stripe/navy family of illustrations on the site.
 */

const MOTIF_SIZE = 500;

const MotifFrame: React.FC<{ children: React.ReactNode }> = ({ children }) => (
  <div
    style={{
      width: MOTIF_SIZE,
      height: MOTIF_SIZE,
      position: 'relative',
    }}
  >
    {children}
  </div>
);

const mono = 'Geist Mono, ui-monospace, monospace';

// ============================================================
// 1. WALK AWAY — risk gauge with needle past crimson threshold
// ============================================================
export const WalkAwayMotif: React.FC = () => (
  <MotifFrame>
    <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
      <defs>
        <linearGradient id="gaugeBg" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%"  stopColor={COLORS.gold}    stopOpacity="0.35" />
          <stop offset="55%" stopColor={COLORS.gold}    stopOpacity="0.45" />
          <stop offset="70%" stopColor={COLORS.crimson} stopOpacity="0.5" />
          <stop offset="100%" stopColor={COLORS.crimson} stopOpacity="1" />
        </linearGradient>
      </defs>
      {/* gauge arc */}
      <path
        d="M 70 310 A 180 180 0 0 1 430 310"
        fill="none"
        stroke="url(#gaugeBg)"
        strokeWidth="26"
        strokeLinecap="round"
      />
      {/* threshold tick */}
      <line x1="345" y1="165" x2="372" y2="140" stroke={COLORS.crimson} strokeWidth="3" />
      <text x="380" y="132" fill={COLORS.crimson} fontSize="11" fontFamily={mono}
            letterSpacing="0.15em">WALK</text>
      <text x="380" y="148" fill={COLORS.crimson} fontSize="11" fontFamily={mono}
            letterSpacing="0.15em">AWAY</text>
      {/* tick marks */}
      {[0, 0.25, 0.5, 0.75, 1].map((t, i) => {
        const a = Math.PI - t * Math.PI;
        const x1 = 250 + Math.cos(a) * 160;
        const y1 = 310 - Math.sin(a) * 160;
        const x2 = 250 + Math.cos(a) * 148;
        const y2 = 310 - Math.sin(a) * 148;
        return <line key={i} x1={x1} y1={y1} x2={x2} y2={y2}
                     stroke="rgba(255,255,255,0.35)" strokeWidth="1.5" />;
      })}
      {/* needle — pointing into crimson zone (t ~ 0.82) */}
      {(() => {
        const t = 0.82;
        const a = Math.PI - t * Math.PI;
        const x = 250 + Math.cos(a) * 175;
        const y = 310 - Math.sin(a) * 175;
        return (
          <>
            <line x1="250" y1="310" x2={x} y2={y}
                  stroke={COLORS.white} strokeWidth="3" strokeLinecap="round" />
            <circle cx={x} cy={y} r="6" fill={COLORS.crimson} />
          </>
        );
      })()}
      {/* pivot hub */}
      <circle cx="250" cy="310" r="16" fill={COLORS.navyElevated}
              stroke={COLORS.gold} strokeWidth="1.5" />
      <circle cx="250" cy="310" r="6" fill={COLORS.gold} />
      {/* label */}
      <text x="250" y="380" fill={COLORS.whiteStrong} fontSize="14"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.3em">
        AI RISK SCORE
      </text>
      <text x="250" y="415" fill={COLORS.crimson} fontSize="36"
            fontFamily="Geist, sans-serif" fontWeight="300"
            textAnchor="middle" letterSpacing="-0.02em">
        82 / 100
      </text>
    </svg>
  </MotifFrame>
);

// ============================================================
// 2. AGENTIC FLOW — 4 autonomous task nodes chained
// ============================================================
export const AgenticFlowMotif: React.FC = () => {
  const nodes = [
    { x: 80,  y: 100, label: 'SOURCE', color: COLORS.gold },
    { x: 320, y: 170, label: 'QUALIFY', color: COLORS.crimson },
    { x: 80,  y: 280, label: 'ANALYZE', color: COLORS.gold },
    { x: 320, y: 370, label: 'MEMO', color: COLORS.white },
  ];
  return (
    <MotifFrame>
      <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
        <defs>
          <linearGradient id="flowLine" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stopColor={COLORS.gold} stopOpacity="0.2" />
            <stop offset="50%" stopColor={COLORS.gold} stopOpacity="0.7" />
            <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.2" />
          </linearGradient>
        </defs>
        {/* connecting curves */}
        {[
          'M 180 130 Q 280 130, 320 200',
          'M 320 200 Q 230 230, 180 310',
          'M 180 310 Q 280 310, 320 400',
        ].map((d, i) => (
          <path key={i} d={d} stroke="url(#flowLine)" strokeWidth="1.5"
                fill="none" strokeDasharray="4,6" />
        ))}
      </svg>
      {nodes.map((n, i) => (
        <div
          key={i}
          style={{
            position: 'absolute',
            left: n.x,
            top: n.y,
            width: 140,
            padding: '14px 16px',
            borderRadius: 6,
            background: 'rgba(255,255,255,0.06)',
            border: '1px solid rgba(255,255,255,0.14)',
            backdropFilter: 'blur(8px)',
            color: COLORS.whiteStrong,
          }}
        >
          <div style={{
            display: 'flex', alignItems: 'center', gap: 10, marginBottom: 6,
          }}>
            <div style={{
              width: 8, height: 8, borderRadius: 4, background: n.color,
              boxShadow: `0 0 10px ${n.color}`,
            }} />
            <span style={{
              fontFamily: mono, fontSize: 11, letterSpacing: '0.15em',
              color: 'rgba(255,255,255,0.5)',
            }}>
              AGENT {String(i + 1).padStart(2, '0')}
            </span>
          </div>
          <div style={{
            fontSize: 15, fontWeight: 500, letterSpacing: '-0.01em',
          }}>
            {n.label}
          </div>
        </div>
      ))}
    </MotifFrame>
  );
};

// ============================================================
// 3. COMPLEXITY KNOT — tangled curves, declining value
// ============================================================
export const ComplexityKnotMotif: React.FC = () => (
  <MotifFrame>
    <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
      <defs>
        <linearGradient id="tangle1" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stopColor={COLORS.crimson} stopOpacity="0.9" />
          <stop offset="100%" stopColor={COLORS.crimson} stopOpacity="0.3" />
        </linearGradient>
        <linearGradient id="tangle2" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stopColor={COLORS.gold} stopOpacity="0.3" />
          <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.9" />
        </linearGradient>
      </defs>

      {/* declining graph in background */}
      <polyline
        points="40,120 110,160 180,200 250,230 320,290 390,350 460,400"
        fill="none" stroke="rgba(255,255,255,0.2)" strokeWidth="1.5"
        strokeDasharray="3,5"
      />
      <line x1="40" y1="400" x2="460" y2="400"
            stroke="rgba(255,255,255,0.2)" strokeWidth="1" />

      {/* tangled knot */}
      <path
        d="M 110 250 C 180 100, 380 140, 410 260 C 430 370, 260 420, 180 330 C 120 260, 260 200, 350 280 C 420 340, 280 400, 200 340"
        fill="none" stroke="url(#tangle1)" strokeWidth="3.5" strokeLinecap="round"
      />
      <path
        d="M 140 320 C 200 200, 320 190, 380 300 C 410 380, 250 400, 180 330"
        fill="none" stroke="url(#tangle2)" strokeWidth="2.5" strokeLinecap="round"
        opacity="0.8"
      />
      <path
        d="M 200 180 C 280 220, 340 280, 320 360"
        fill="none" stroke="rgba(255,255,255,0.4)" strokeWidth="1.5"
        strokeLinecap="round" strokeDasharray="2,4"
      />

      {/* dollar loss labels */}
      <text x="440" y="110" fill={COLORS.crimson} fontSize="24"
            fontFamily="Geist, sans-serif" fontWeight="300"
            textAnchor="end" letterSpacing="-0.02em">−$4.2M</text>
      <text x="440" y="132" fill="rgba(255,255,255,0.4)" fontSize="10"
            fontFamily={mono} textAnchor="end" letterSpacing="0.2em">
        EBITDA DRAG / YR
      </text>

      <text x="60" y="430" fill={COLORS.whiteStrong} fontSize="13"
            fontFamily={mono} letterSpacing="0.3em">TIME →</text>
      <text x="60" y="450" fill="rgba(255,255,255,0.45)" fontSize="10"
            fontFamily={mono} letterSpacing="0.25em">VALUATION MULTIPLE</text>
    </svg>
  </MotifFrame>
);

// ============================================================
// 4. RED FLAGS — shield with warning flags
// ============================================================
export const RedFlagsMotif: React.FC = () => (
  <MotifFrame>
    <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
      {/* shield base */}
      <path
        d="M 250 80 L 370 130 L 370 270 C 370 340, 320 400, 250 430 C 180 400, 130 340, 130 270 L 130 130 Z"
        fill={COLORS.navyElevated} stroke={COLORS.gold} strokeWidth="2"
        opacity="0.95"
      />
      <path
        d="M 250 80 L 370 130 L 370 270 C 370 340, 320 400, 250 430 C 180 400, 130 340, 130 270 L 130 130 Z"
        fill="none" stroke="rgba(255,255,255,0.15)" strokeWidth="1"
        transform="translate(0,6)"
      />
      {/* scan lines inside shield */}
      {[0, 1, 2, 3].map((i) => (
        <line key={i}
              x1="150" y1={180 + i * 35}
              x2="350" y2={180 + i * 35}
              stroke="rgba(197,165,114,0.15)" strokeWidth="1"
              strokeDasharray="3,6" />
      ))}
      {/* 3 red flags */}
      {[
        { x: 180, y: 170, h: 60 },
        { x: 250, y: 140, h: 90 },
        { x: 320, y: 190, h: 50 },
      ].map((f, i) => (
        <g key={i}>
          <line x1={f.x} y1={f.y} x2={f.x} y2={f.y + f.h}
                stroke={COLORS.white} strokeWidth="2" />
          <path
            d={`M ${f.x} ${f.y} L ${f.x + 42} ${f.y + 10} L ${f.x} ${f.y + 22} Z`}
            fill={COLORS.crimson}
          />
          <circle cx={f.x} cy={f.y + f.h} r="3" fill={COLORS.white} />
        </g>
      ))}
      {/* status badge */}
      <rect x="165" y="355" width="170" height="36" rx="4"
            fill={COLORS.crimson} opacity="0.9" />
      <text x="250" y="378" fill={COLORS.white} fontSize="13"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.3em"
            fontWeight="500">3 RED FLAGS</text>
    </svg>
  </MotifFrame>
);

// ============================================================
// 5. DEAL STUCK — progress halted by legacy tech block
// ============================================================
export const DealStuckMotif: React.FC = () => (
  <MotifFrame>
    <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
      {/* timeline track */}
      <line x1="50" y1="250" x2="450" y2="250"
            stroke="rgba(255,255,255,0.2)" strokeWidth="2" />
      {/* stages */}
      {[
        { x: 70,  label: 'LOI' },
        { x: 170, label: 'DD' },
        { x: 270, label: 'IC' },
        { x: 370, label: 'SIGN' },
        { x: 450, label: 'CLOSE' },
      ].map((s, i) => (
        <g key={i}>
          <circle cx={s.x} cy="250" r="5"
                  fill={i < 2 ? COLORS.gold : 'rgba(255,255,255,0.25)'} />
          <text x={s.x} y="285" fill="rgba(255,255,255,0.55)"
                fontSize="11" fontFamily={mono} textAnchor="middle"
                letterSpacing="0.15em">{s.label}</text>
        </g>
      ))}
      {/* progress filled up to DD */}
      <line x1="50" y1="250" x2="170" y2="250"
            stroke={COLORS.gold} strokeWidth="2" />
      {/* legacy block in the way */}
      <rect x="215" y="210" width="110" height="80" rx="4"
            fill={COLORS.crimson} opacity="0.92" />
      <rect x="215" y="210" width="110" height="80" rx="4"
            fill="none" stroke={COLORS.white} strokeWidth="1" opacity="0.3" />
      <text x="270" y="240" fill={COLORS.white} fontSize="11"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.25em"
            fontWeight="500">LEGACY</text>
      <text x="270" y="258" fill={COLORS.white} fontSize="11"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.25em"
            fontWeight="500">TECH</text>
      <text x="270" y="277" fill="rgba(255,255,255,0.7)" fontSize="9"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.3em">
        BLOCKED
      </text>
      {/* halted arrow */}
      <path d="M 195 250 L 215 250 M 210 245 L 215 250 L 210 255"
            stroke={COLORS.gold} strokeWidth="2" fill="none"
            strokeLinecap="round" />
      {/* day counter */}
      <text x="250" y="140" fill={COLORS.gold} fontSize="48"
            fontFamily="Geist, sans-serif" fontWeight="300"
            textAnchor="middle" letterSpacing="-0.03em">+47 days</text>
      <text x="250" y="170" fill="rgba(255,255,255,0.5)" fontSize="11"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.25em">
        TO CLOSE · DELTA
      </text>
      {/* hourglass icon */}
      <g transform="translate(60,370)">
        <path d="M 0 0 L 30 0 L 15 18 Z" fill={COLORS.gold} opacity="0.85" />
        <path d="M 0 36 L 30 36 L 15 18 Z" fill={COLORS.gold} opacity="0.35" />
        <line x1="-4" y1="0" x2="34" y2="0"
              stroke={COLORS.gold} strokeWidth="2" />
        <line x1="-4" y1="36" x2="34" y2="36"
              stroke={COLORS.gold} strokeWidth="2" />
      </g>
      <text x="105" y="395" fill={COLORS.whiteStrong} fontSize="12"
            fontFamily={mono} letterSpacing="0.2em">
        DUE DILIGENCE STALLED
      </text>
    </svg>
  </MotifFrame>
);

// ============================================================
// 6. GRAVEYARD — unused software tombstones + $158K stamp
// ============================================================
export const GraveyardMotif: React.FC = () => {
  const stones = [
    { x: 60,  h: 150, label: 'CRM', note: "'17" },
    { x: 150, h: 180, label: 'ERP', note: "'15" },
    { x: 240, h: 140, label: 'VDR', note: "'18" },
    { x: 330, h: 170, label: 'BI',  note: "'16" },
    { x: 420, h: 130, label: 'PM',  note: "'19" },
  ];
  return (
    <MotifFrame>
      <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
        {/* ground */}
        <line x1="20" y1="400" x2="480" y2="400"
              stroke="rgba(197,165,114,0.4)" strokeWidth="1" />
        <line x1="20" y1="408" x2="480" y2="408"
              stroke="rgba(255,255,255,0.08)" strokeWidth="1" strokeDasharray="4,6" />
        {/* stones */}
        {stones.map((s, i) => (
          <g key={i}>
            <path
              d={`M ${s.x} ${400 - s.h + 25}
                  Q ${s.x} ${400 - s.h}, ${s.x + 25} ${400 - s.h}
                  L ${s.x + 45} ${400 - s.h}
                  Q ${s.x + 70} ${400 - s.h}, ${s.x + 70} ${400 - s.h + 25}
                  L ${s.x + 70} ${400}
                  L ${s.x} ${400} Z`}
              fill={COLORS.navyElevated}
              stroke="rgba(255,255,255,0.22)" strokeWidth="1"
            />
            <text x={s.x + 35} y={400 - s.h + 55}
                  fill={COLORS.whiteStrong} fontSize="14"
                  fontFamily={mono} textAnchor="middle"
                  fontWeight="500" letterSpacing="0.1em">{s.label}</text>
            <text x={s.x + 35} y={400 - s.h + 75}
                  fill="rgba(255,255,255,0.4)" fontSize="10"
                  fontFamily={mono} textAnchor="middle"
                  letterSpacing="0.15em">{s.note}</text>
            <text x={s.x + 35} y={400 - s.h + 95}
                  fill={COLORS.crimson} fontSize="9"
                  fontFamily={mono} textAnchor="middle"
                  letterSpacing="0.25em">UNUSED</text>
          </g>
        ))}
        {/* $158K stamp */}
        <g transform="translate(250,190)">
          <rect x="-90" y="-40" width="180" height="80" rx="4"
                fill="none" stroke={COLORS.crimson} strokeWidth="2" />
          <text x="0" y="-10" fill={COLORS.crimson} fontSize="32"
                fontFamily="Geist, sans-serif" fontWeight="300"
                textAnchor="middle" letterSpacing="-0.03em">$158K</text>
          <text x="0" y="20" fill={COLORS.crimson} fontSize="10"
                fontFamily={mono} textAnchor="middle" letterSpacing="0.3em"
                fontWeight="500">WASTED / YR</text>
        </g>
        <text x="250" y="450" fill="rgba(255,255,255,0.5)" fontSize="11"
              fontFamily={mono} textAnchor="middle" letterSpacing="0.25em">
          LICENSES · UNUSED · RENEWED
        </text>
      </svg>
    </MotifFrame>
  );
};

// ============================================================
// 7. SCAN — concentric radar + infrastructure layers
// ============================================================
export const ScanMotif: React.FC = () => (
  <MotifFrame>
    <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
      <defs>
        <linearGradient id="scanSweep" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stopColor={COLORS.gold} stopOpacity="0" />
          <stop offset="100%" stopColor={COLORS.gold} stopOpacity="0.5" />
        </linearGradient>
      </defs>
      {/* layer rings */}
      {[200, 150, 100, 55].map((r, i) => (
        <circle key={i} cx="250" cy="250" r={r}
                fill="none" stroke="rgba(255,255,255,0.14)" strokeWidth="1"
                strokeDasharray={i % 2 === 0 ? '2,6' : undefined} />
      ))}
      {/* sweep wedge */}
      <path d="M 250 250 L 250 50 A 200 200 0 0 1 420 330 Z"
            fill="url(#scanSweep)" opacity="0.55" />
      {/* core */}
      <circle cx="250" cy="250" r="28" fill={COLORS.crimson} />
      <circle cx="250" cy="250" r="28" fill="none"
              stroke="rgba(255,255,255,0.2)" strokeWidth="1" />
      <text x="250" y="255" fill={COLORS.white} fontSize="11"
            fontFamily={mono} textAnchor="middle" fontWeight="500"
            letterSpacing="0.1em">CORE</text>
      {/* detected nodes */}
      {[
        { x: 190, y: 150, label: 'APP' },
        { x: 370, y: 200, label: 'DB' },
        { x: 340, y: 340, label: 'NET' },
        { x: 140, y: 320, label: 'ID' },
        { x: 290, y: 100, label: 'API' },
      ].map((n, i) => (
        <g key={i}>
          <circle cx={n.x} cy={n.y} r="5" fill={COLORS.gold} />
          <circle cx={n.x} cy={n.y} r="12"
                  fill="none" stroke={COLORS.gold} strokeOpacity="0.4"
                  strokeWidth="1" />
          <text x={n.x + 18} y={n.y + 4} fill={COLORS.whiteStrong}
                fontSize="10" fontFamily={mono} letterSpacing="0.2em"
                fontWeight="500">{n.label}</text>
        </g>
      ))}
      {/* scan label */}
      <text x="250" y="460" fill={COLORS.whiteStrong} fontSize="12"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.3em">
        INFRASTRUCTURE · SCAN
      </text>
      <text x="250" y="480" fill={COLORS.gold} fontSize="10"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.35em">
        47 ASSETS DISCOVERED
      </text>
    </svg>
  </MotifFrame>
);

// ============================================================
// 8. MATH 488 — $4.88M centerpiece with cascading impact
// ============================================================
export const Math488Motif: React.FC = () => (
  <MotifFrame>
    <svg width={MOTIF_SIZE} height={MOTIF_SIZE} viewBox="0 0 500 500">
      {/* eyebrow tag */}
      <rect x="100" y="70" width="300" height="30" rx="4"
            fill="rgba(191,10,48,0.16)" stroke={COLORS.crimson}
            strokeWidth="1" />
      <text x="250" y="90" fill={COLORS.crimson} fontSize="11"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.3em"
            fontWeight="500">AVG COST OF A BREACH · 2025</text>

      {/* headline number */}
      <text x="250" y="230" fill={COLORS.white} fontSize="110"
            fontFamily="Geist, sans-serif" fontWeight="300"
            textAnchor="middle" letterSpacing="-0.04em"
            style={{ fontFeatureSettings: '"ss01"' }}>$4.88M</text>
      {/* seam */}
      <line x1="150" y1="260" x2="350" y2="260"
            stroke={COLORS.gold} strokeOpacity="0.5" strokeWidth="1" />

      {/* math cascade */}
      <g fontFamily={mono} fontSize="13" letterSpacing="0.08em">
        <text x="250" y="295" fill="rgba(255,255,255,0.55)" textAnchor="middle">
          × 15% EBITDA MARGIN
        </text>
        <text x="250" y="325" fill="rgba(255,255,255,0.55)" textAnchor="middle">
          = $32.5M REVENUE IMPACT
        </text>
        <text x="250" y="355" fill="rgba(255,255,255,0.55)" textAnchor="middle">
          × 10x EXIT MULTIPLE
        </text>
      </g>

      {/* result */}
      <text x="250" y="410" fill={COLORS.crimson} fontSize="36"
            fontFamily="Geist, sans-serif" fontWeight="300"
            textAnchor="middle" letterSpacing="-0.03em">= $488M</text>
      <text x="250" y="432" fill={COLORS.gold} fontSize="11"
            fontFamily={mono} textAnchor="middle" letterSpacing="0.3em"
            fontWeight="500">ENTERPRISE VALUE AT RISK</text>
    </svg>
  </MotifFrame>
);
