import React from 'react';
import { AbsoluteFill } from 'remotion';

export type OGCardProps = {
  title: string;
  subtitle?: string;
  eyebrow?: string;
  variant?: 'default' | 'blog' | 'tool' | 'solution';
};

/**
 * PE Tech Partners OG card — Stripe-inspired.
 *
 * - Navy gradient with subtle radial crimson glow
 * - Weight-300 display headline (Stripe spec), tight negative tracking
 * - Crimson accent bar beneath eyebrow; gold hairline + domain stamp
 * - 1200 x 630 (OG standard for Facebook, LinkedIn, Twitter)
 */
export const OGCard: React.FC<OGCardProps> = ({
  title,
  subtitle,
  eyebrow = 'PE Tech Partners',
  variant = 'default',
}) => {
  const accentColor =
    variant === 'blog' ? '#C5A572' : variant === 'tool' ? '#C5A572' : '#BF0A30';

  return (
    <AbsoluteFill
      style={{
        background:
          'linear-gradient(135deg, #030e19 0%, #061b30 55%, #0A2E50 100%)',
        fontFamily: 'Geist, -apple-system, BlinkMacSystemFont, sans-serif',
        color: '#ffffff',
      }}
    >
      {/* Radial crimson glow — top right */}
      <AbsoluteFill
        style={{
          background:
            'radial-gradient(ellipse 600px 400px at 90% 10%, rgba(191,10,48,0.22) 0%, transparent 60%)',
        }}
      />
      {/* Secondary navy glow — bottom left */}
      <AbsoluteFill
        style={{
          background:
            'radial-gradient(ellipse 500px 350px at 10% 95%, rgba(62,98,159,0.18) 0%, transparent 60%)',
        }}
      />
      {/* Subtle grid overlay */}
      <AbsoluteFill
        style={{
          opacity: 0.04,
          backgroundImage:
            'linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px)',
          backgroundSize: '40px 40px',
        }}
      />

      <div
        style={{
          position: 'absolute',
          inset: 0,
          padding: '80px 96px',
          display: 'flex',
          flexDirection: 'column',
          justifyContent: 'space-between',
        }}
      >
        {/* Brand lockup */}
        <div style={{ display: 'flex', alignItems: 'center', gap: 16 }}>
          <div
            style={{
              width: 44,
              height: 44,
              borderRadius: 8,
              background: 'linear-gradient(135deg, #BF0A30 0%, #800621 100%)',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center',
              fontSize: 22,
              fontWeight: 700,
              color: '#ffffff',
              letterSpacing: '-0.02em',
              boxShadow:
                'rgba(191,10,48,0.35) 0px 6px 20px 0px, rgba(0,0,0,0.2) 0px 0px 0px 1px',
            }}
          >
            PE
          </div>
          <div
            style={{
              fontSize: 20,
              fontWeight: 500,
              letterSpacing: '-0.01em',
              color: '#ffffff',
            }}
          >
            PE Tech Partners
          </div>
        </div>

        {/* Headline block */}
        <div style={{ display: 'flex', flexDirection: 'column', gap: 24 }}>
          <div style={{ display: 'flex', alignItems: 'center', gap: 14 }}>
            <div
              style={{
                width: 40,
                height: 3,
                background: accentColor,
                borderRadius: 2,
              }}
            />
            <span
              style={{
                fontSize: 14,
                fontFamily: 'Geist Mono, ui-monospace, monospace',
                fontWeight: 500,
                letterSpacing: '0.2em',
                textTransform: 'uppercase',
                color: '#C5A572',
              }}
            >
              {eyebrow}
            </span>
          </div>

          <div
            style={{
              fontSize: 72,
              fontWeight: 300,
              letterSpacing: '-0.035em',
              lineHeight: 1.04,
              color: '#ffffff',
              maxWidth: 1000,
              fontFeatureSettings: '"ss01"',
            }}
          >
            {title}
          </div>

          {subtitle && (
            <div
              style={{
                fontSize: 26,
                fontWeight: 400,
                lineHeight: 1.35,
                color: 'rgba(255,255,255,0.62)',
                maxWidth: 880,
                letterSpacing: '-0.01em',
              }}
            >
              {subtitle}
            </div>
          )}
        </div>

        {/* Footer */}
        <div style={{ display: 'flex', flexDirection: 'column', gap: 16 }}>
          <div
            style={{
              height: 1,
              background:
                'linear-gradient(90deg, transparent 0%, rgba(197,165,114,0.5) 20%, rgba(197,165,114,0.5) 80%, transparent 100%)',
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
                fontSize: 16,
                fontFamily: 'Geist Mono, ui-monospace, monospace',
                color: 'rgba(255,255,255,0.55)',
                letterSpacing: '0.02em',
              }}
            >
              petechpartners.com
            </span>
            <span
              style={{
                fontSize: 14,
                fontFamily: 'Geist Mono, ui-monospace, monospace',
                color: 'rgba(255,255,255,0.4)',
                letterSpacing: '0.15em',
                textTransform: 'uppercase',
              }}
            >
              Technology Alignment for PE & M&A
            </span>
          </div>
        </div>
      </div>
    </AbsoluteFill>
  );
};
