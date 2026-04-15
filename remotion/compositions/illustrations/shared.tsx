import React from 'react';

/**
 * Shared tokens + primitives for solution illustrations.
 * All illustrations render at 1000x800 and are meant to sit inside
 * a navy-800 card on the home page + solution page heroes.
 *
 * Design grammar:
 * - Navy-800 background (matches existing accent card color)
 * - Geometric, flat, minimal — Stripe-adjacent
 * - Gold + crimson accents pop against navy
 * - Consistent stroke weights, corner radii
 */

export const COLORS = {
  navyBg: '#0A2E50',         // card background
  navyDeep: '#061b30',
  navyElevated: '#0F3B66',   // lighter navy for raised elements
  navySurface: '#13477A',    // lightest navy for foreground shapes
  crimson: '#BF0A30',
  crimsonSoft: 'rgba(191,10,48,0.18)',
  gold: '#C5A572',
  goldSoft: 'rgba(197,165,114,0.22)',
  white: '#ffffff',
  whiteSoft: 'rgba(255,255,255,0.08)',
  whiteMid: 'rgba(255,255,255,0.4)',
  whiteStrong: 'rgba(255,255,255,0.85)',
};

export const CARD_W = 1000;
export const CARD_H = 800;

/** Grid overlay used as a subtle texture on all illustrations. */
export const GridOverlay: React.FC<{ opacity?: number; size?: number }> = ({
  opacity = 0.05,
  size = 40,
}) => (
  <div
    style={{
      position: 'absolute',
      inset: 0,
      opacity,
      backgroundImage:
        'linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px)',
      backgroundSize: `${size}px ${size}px`,
    }}
  />
);

/** Radial glow anchored somewhere on the card — adds depth. */
export const RadialGlow: React.FC<{
  color: string;
  x: string;
  y: string;
  size?: number;
  intensity?: number;
}> = ({ color, x, y, size = 500, intensity = 0.35 }) => (
  <div
    style={{
      position: 'absolute',
      inset: 0,
      background: `radial-gradient(ellipse ${size}px ${size * 0.8}px at ${x} ${y}, ${color.replace('INTENSITY', intensity.toString())} 0%, transparent 60%)`,
    }}
  />
);

/** Base card container — consistent background, radius, border. */
export const IllustrationFrame: React.FC<{ children: React.ReactNode }> = ({
  children,
}) => (
  <div
    style={{
      width: CARD_W,
      height: CARD_H,
      position: 'relative',
      background: `linear-gradient(135deg, ${COLORS.navyDeep} 0%, ${COLORS.navyBg} 55%, ${COLORS.navyElevated} 100%)`,
      overflow: 'hidden',
      fontFamily: 'Geist, -apple-system, sans-serif',
    }}
  >
    {children}
  </div>
);

/** Bottom-left label in the style of Stripe's corner annotations. */
export const CornerLabel: React.FC<{ num: string; title: string }> = ({
  num,
  title,
}) => (
  <div
    style={{
      position: 'absolute',
      bottom: 48,
      left: 56,
      display: 'flex',
      alignItems: 'center',
      gap: 16,
      zIndex: 10,
    }}
  >
    <span
      style={{
        fontSize: 14,
        fontFamily: 'Geist Mono, ui-monospace, monospace',
        color: COLORS.gold,
        letterSpacing: '0.25em',
        fontWeight: 500,
      }}
    >
      {num}
    </span>
    <div style={{ width: 40, height: 1, background: COLORS.gold, opacity: 0.6 }} />
    <span
      style={{
        fontSize: 14,
        fontFamily: 'Geist Mono, ui-monospace, monospace',
        color: COLORS.whiteStrong,
        letterSpacing: '0.15em',
        textTransform: 'uppercase',
        fontWeight: 500,
      }}
    >
      {title}
    </span>
  </div>
);
