import React from 'react';
import { Composition } from 'remotion';
import { OGCard } from './compositions/OGCard';

/**
 * Remotion root. Registers the OG card composition used by scripts/render-og-cards.ts.
 * Renders at 1200x630 (the OG standard accepted by Facebook/LinkedIn/Twitter).
 */
export const RemotionRoot: React.FC = () => {
  return (
    <>
      <Composition
        id="OGCard"
        component={OGCard}
        durationInFrames={1}
        fps={30}
        width={1200}
        height={630}
        defaultProps={{
          title: 'Technology Alignment for Private Equity',
          subtitle: 'System integration, workflow automation, pipeline visibility.',
          eyebrow: 'PE Tech Partners',
          variant: 'default' as const,
        }}
      />
    </>
  );
};
