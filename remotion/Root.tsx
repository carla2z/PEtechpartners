import React from 'react';
import { Composition } from 'remotion';
import { OGCard } from './compositions/OGCard';
import { IntegrationIllustration } from './compositions/illustrations/IntegrationIllustration';
import { AutomationIllustration } from './compositions/illustrations/AutomationIllustration';
import { PipelineIllustration } from './compositions/illustrations/PipelineIllustration';
import { SecurityIllustration } from './compositions/illustrations/SecurityIllustration';

/**
 * Remotion root — registers every composition used by render scripts.
 *   OGCard              1200x630  parameterized social share cards
 *   Illustration/*      1000x800  solution illustrations (home + solution pages)
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

      <Composition
        id="IntegrationIllustration"
        component={IntegrationIllustration}
        durationInFrames={1}
        fps={30}
        width={1000}
        height={800}
      />
      <Composition
        id="AutomationIllustration"
        component={AutomationIllustration}
        durationInFrames={1}
        fps={30}
        width={1000}
        height={800}
      />
      <Composition
        id="PipelineIllustration"
        component={PipelineIllustration}
        durationInFrames={1}
        fps={30}
        width={1000}
        height={800}
      />
      <Composition
        id="SecurityIllustration"
        component={SecurityIllustration}
        durationInFrames={1}
        fps={30}
        width={1000}
        height={800}
      />
    </>
  );
};
