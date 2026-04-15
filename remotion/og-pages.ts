/**
 * Manifest of pages that get their own Remotion-rendered OG card.
 *
 * Each entry produces /public/og/<slug>.png. Wire up each Astro page's
 * ogImage prop to `/og/<slug>.png` to activate the custom card.
 *
 * Keep entries tight: OG card headlines should read in < 2 seconds on a
 * LinkedIn feed. 6–9 words is the sweet spot.
 */

export type OGPage = {
  slug: string;
  title: string;
  subtitle?: string;
  eyebrow?: string;
  variant?: 'default' | 'blog' | 'tool' | 'solution';
};

export const OG_PAGES: OGPage[] = [
  // ─── Home + top-level ───────────────────────────────────────────────
  {
    slug: 'home',
    title: 'Close More Deals with Tech That Actually Works',
    subtitle:
      'Technology alignment for private equity and M&A firms — integration, automation, pipeline visibility.',
    eyebrow: 'PE Tech Partners',
    variant: 'default',
  },
  {
    slug: 'challenges',
    title: 'The Hidden Tax on Your Deal Velocity',
    subtitle:
      'Disconnected tools, dead licenses, manual workflows — the three things slowing every PE firm down.',
    eyebrow: 'PE Tech Challenges',
    variant: 'default',
  },
  {
    slug: 'process',
    title: 'From Assessment to Acceleration in 90 Days',
    subtitle: 'Discovery, architecture, optimization, ongoing support.',
    eyebrow: 'Our Process',
    variant: 'default',
  },
  {
    slug: 'contact',
    title: "Secure a Strategic Debrief",
    subtitle:
      'No-cost, no-pressure tech-stack mapping and a 90-day path to fixing the friction.',
    eyebrow: 'Contact',
    variant: 'default',
  },
  {
    slug: 'dealcloud-vs-affinity-vs-salesforce',
    title: 'DealCloud vs Affinity vs Salesforce',
    subtitle:
      'A PE-focused comparison — which CRM actually fits your deal workflow.',
    eyebrow: 'CRM Comparison',
    variant: 'default',
  },

  // ─── Solutions ──────────────────────────────────────────────────────
  {
    slug: 'solutions',
    title: 'Four Solutions. One Operating System.',
    subtitle:
      'Integration, automation, pipeline management, and data security — purpose-built for PE.',
    eyebrow: 'Solutions',
    variant: 'solution',
  },
  {
    slug: 'solutions-system-integration',
    title: 'Make Your Tools Talk to Each Other',
    subtitle:
      'DealCloud, Salesforce, Affinity, HubSpot — integrated into one operating system.',
    eyebrow: 'System Integration',
    variant: 'solution',
  },
  {
    slug: 'solutions-workflow-automation',
    title: 'Your Analysts Should Be Doing Strategy',
    subtitle:
      'Automate CIM processing, IC memos, diligence tracking, and VDR management.',
    eyebrow: 'Workflow Automation',
    variant: 'solution',
  },
  {
    slug: 'solutions-pipeline-management',
    title: 'Every Deal. Every Stage. Live.',
    subtitle:
      'Real-time dashboards for deal velocity and portfolio health.',
    eyebrow: 'Pipeline Management',
    variant: 'solution',
  },
  {
    slug: 'solutions-data-security',
    title: 'One Breach Kills the Deal',
    subtitle:
      'SOC 2 compliant enterprise-grade protection for sensitive transaction documents.',
    eyebrow: 'Data Security',
    variant: 'solution',
  },

  // ─── Tools ──────────────────────────────────────────────────────────
  {
    slug: 'tools',
    title: 'Quantify the Problem Before You Fix It',
    subtitle: 'Free calculators to measure what disconnected tech actually costs.',
    eyebrow: 'Free Tools',
    variant: 'tool',
  },
  {
    slug: 'tools-software-waste-calculator',
    title: 'How Much Is Your Firm Losing to Dead Software?',
    subtitle:
      'Find out what you bleed annually on forgotten subscriptions and unused licenses.',
    eyebrow: 'Software Waste Calculator',
    variant: 'tool',
  },
  {
    slug: 'tools-firepower-estimator',
    title: 'Multiply Your Team Without Adding Headcount',
    subtitle:
      'Model how AI and workflow automation can scale your effective output.',
    eyebrow: 'Firepower Estimator',
    variant: 'tool',
  },

  // ─── Blog ───────────────────────────────────────────────────────────
  {
    slug: 'blog',
    title: 'Field Notes on PE Technology',
    subtitle:
      'Insights on integration, automation, and closing deals faster.',
    eyebrow: 'PE Tech Blog',
    variant: 'blog',
  },
];
