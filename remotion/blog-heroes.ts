import type { BlogMotif } from './compositions/BlogHero';

export type BlogHeroEntry = {
  slug: string;
  title: string;
  eyebrow: string;
  readTime?: string;
  motif: BlogMotif;
};

/**
 * One entry per blog post. Slug = blog post id + matches the output filename
 * public/blog-heroes/<slug>.png. Title/eyebrow are rendered into the hero.
 */
export const BLOG_HEROES: BlogHeroEntry[] = [
  {
    slug: 'ai-risk-diligence-walk-away-factor-best-practice-guide-pe-ma-firms-2026',
    title: "AI-Risk Diligence: The 'Walk Away' Factor",
    eyebrow: 'AI Risk · Diligence',
    readTime: '19 min read',
    motif: 'walk-away',
  },
  {
    slug: 'best-agentic-ai-deal-workflows-in-2026-how-the-fastest-firms-are-closing-more-and-sleeping-less',
    title: 'Best Agentic AI Deal Workflows in 2026',
    eyebrow: 'Agentic AI · Workflow',
    readTime: '12 min read',
    motif: 'agentic-flow',
  },
  {
    slug: 'complexity-tax-portfolio-tech',
    title: 'The Complexity Tax on Portfolio Tech',
    eyebrow: 'Portfolio · EBITDA',
    readTime: '10 min read',
    motif: 'complexity-knot',
  },
  {
    slug: 'cybersecurity-red-flags-target-companies',
    title: 'Cybersecurity Red Flags in Target Companies',
    eyebrow: 'Security · Diligence',
    readTime: '6 min read',
    motif: 'red-flags',
  },
  {
    slug: 'hidden-deal-killer-outdated-tech',
    title: 'The Hidden Deal Killer: Outdated Tech',
    eyebrow: 'M&A · Deal Velocity',
    readTime: '12 min read',
    motif: 'deal-stuck',
  },
  {
    slug: 'software-graveyard-hiding-in-your-firm',
    title: 'The $158K Software Graveyard Hiding in Your Firm',
    eyebrow: 'SaaS · Cost Optimization',
    readTime: '12 min read',
    motif: 'graveyard',
  },
  {
    slug: 'step-by-step-tech-assessment',
    title: 'Step-by-Step Tech Assessment: What We Look For',
    eyebrow: 'Due Diligence · Method',
    readTime: '7 min read',
    motif: 'scan',
  },
  {
    slug: 'the-488m-question',
    title: 'The $4.88M Question Every PE Operator Should Ask',
    eyebrow: 'Cybersecurity · Value',
    readTime: '5 min read',
    motif: 'math-488',
  },
];
