import React from 'react';
import { AbsoluteFill } from 'remotion';
import { COLORS } from './illustrations/shared';
import {
  WalkAwayMotif,
  AgenticFlowMotif,
  ComplexityKnotMotif,
  RedFlagsMotif,
  DealStuckMotif,
  GraveyardMotif,
  ScanMotif,
  Math488Motif,
} from './BlogHeroMotifs';

export type BlogMotif =
  | 'walk-away'
  | 'agentic-flow'
  | 'complexity-knot'
  | 'red-flags'
  | 'deal-stuck'
  | 'graveyard'
  | 'scan'
  | 'math-488';

export type BlogHeroProps = {
  title: string;
  eyebrow: string;
  readTime?: string;
  motif: BlogMotif;
};

const MOTIFS: Record<BlogMotif, React.FC> = {
  'walk-away': WalkAwayMotif,
  'agentic-flow': AgenticFlowMotif,
  'complexity-knot': ComplexityKnotMotif,
  'red-flags': RedFlagsMotif,
  'deal-stuck': DealStuckMotif,
  'graveyard': GraveyardMotif,
  'scan': ScanMotif,
  'math-488': Math488Motif,
};

/**
 * Editorial blog hero — 1200x630.
 *
 * Layout:
 *  - Left 52%: category eyebrow, weight-300 title, monospace meta footer
 *  - Right 48%: motif visual inside a framed panel with gold hairline seam
 *  - Navy gradient bg + grid + dual radial glows (matches OG card family)
 */
export const BlogHero: React.FC<BlogHeroProps> = ({
  title,
  eyebrow,
  readTime,
  motif,
}) => {
  const Motif = MOTIFS[motif];

  return (
    <AbsoluteFill
      style={{
        background:
          'linear-gradient(135deg, #030e19 0%, #061b30 55%, #0A2E50 100%)',
        fontFamily: 'Geist, -apple-system, BlinkMacSystemFont, sans-serif',
        color: '#ffffff',
      }}
    >
      {/* radial crimson glow top-right */}
      <AbsoluteFill
        style={{
          background:
            'radial-gradient(ellipse 700px 500px at 95% 5%, rgba(191,10,48,0.20) 0%, transparent 60%)',
        }}
      />
      {/* ambient navy glow bottom-left */}
      <AbsoluteFill
        style={{
          background:
            'radial-gradient(ellipse 520px 380px at 5% 95%, rgba(62,98,159,0.20) 0%, transparent 60%)',
        }}
      />
      {/* grid overlay */}
      <AbsoluteFill
        style={{
          opacity: 0.04,
          backgroundImage:
            'linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px)',
          backgroundSize: '40px 40px',
        }}
      />

      {/* vertical gold seam at 52% */}
      <div
        style={{
          position: 'absolute',
          top: 72,
          bottom: 72,
          left: '52%',
          width: 1,
          background:
            'linear-gradient(180deg, transparent 0%, rgba(197,165,114,0.4) 15%, rgba(197,165,114,0.4) 85%, transparent 100%)',
        }}
      />

      {/* Left panel: text */}
      <div
        style={{
          position: 'absolute',
          top: 0,
          bottom: 0,
          left: 0,
          width: '52%',
          padding: '72px 56px 72px 72px',
          display: 'flex',
          flexDirection: 'column',
          justifyContent: 'space-between',
        }}
      >
        {/* brand lockup */}
        <div style={{ display: 'flex', alignItems: 'center', gap: 14 }}>
          <div
            style={{
              width: 36,
              height: 36,
              borderRadius: 6,
              background:
                'linear-gradient(135deg, #BF0A30 0%, #800621 100%)',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center',
              fontSize: 17,
              fontWeight: 700,
              color: '#ffffff',
              letterSpacing: '-0.02em',
              boxShadow:
                'rgba(191,10,48,0.35) 0px 4px 14px 0px, rgba(0,0,0,0.2) 0px 0px 0px 1px',
            }}
          >
            PE
          </div>
          <div
            style={{
              fontSize: 17,
              fontWeight: 500,
              letterSpacing: '-0.01em',
              color: '#ffffff',
            }}
          >
            PE Tech Partners
          </div>
        </div>

        {/* headline block */}
        <div style={{ display: 'flex', flexDirection: 'column', gap: 22 }}>
          <div style={{ display: 'flex', alignItems: 'center', gap: 14 }}>
            <div
              style={{
                width: 40,
                height: 3,
                background: COLORS.crimson,
                borderRadius: 2,
              }}
            />
            <span
              style={{
                fontSize: 13,
                fontFamily: 'Geist Mono, ui-monospace, monospace',
                fontWeight: 500,
                letterSpacing: '0.22em',
                textTransform: 'uppercase',
                color: COLORS.gold,
              }}
            >
              {eyebrow}
            </span>
          </div>

          <div
            style={{
              fontSize: 52,
              fontWeight: 300,
              letterSpacing: '-0.035em',
              lineHeight: 1.04,
              color: '#ffffff',
              fontFeatureSettings: '"ss01"',
            }}
          >
            {title}
          </div>
        </div>

        {/* footer */}
        <div style={{ display: 'flex', flexDirection: 'column', gap: 14 }}>
          <div
            style={{
              height: 1,
              background:
                'linear-gradient(90deg, rgba(197,165,114,0.5) 0%, rgba(197,165,114,0.5) 75%, transparent 100%)',
            }}
          />
          <div
            style={{
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'space-between',
            }}
          >
            <span
              style={{
                fontSize: 14,
                fontFamily: 'Geist Mono, ui-monospace, monospace',
                color: 'rgba(255,255,255,0.55)',
                letterSpacing: '0.02em',
              }}
            >
              petechpartners.com / blog
            </span>
            {readTime && (
              <span
                style={{
                  fontSize: 12,
                  fontFamily: 'Geist Mono, ui-monospace, monospace',
                  color: 'rgba(255,255,255,0.4)',
                  letterSpacing: '0.15em',
                  textTransform: 'uppercase',
                }}
              >
                {readTime}
              </span>
            )}
          </div>
        </div>
      </div>

      {/* Right panel: motif */}
      <div
        style={{
          position: 'absolute',
          top: 0,
          bottom: 0,
          right: 0,
          width: '48%',
          display: 'flex',
          alignItems: 'center',
          justifyContent: 'center',
        }}
      >
        <Motif />
      </div>
    </AbsoluteFill>
  );
};
