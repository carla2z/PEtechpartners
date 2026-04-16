import type { APIRoute } from 'astro';
import { getCollection } from 'astro:content';

/**
 * /llms.txt — site index for Large Language Models.
 * Follows the emerging llms.txt convention (https://llmstxt.org).
 *
 * Purpose: when ChatGPT, Claude, Perplexity, or Gemini crawl the site
 * to answer a user question, this file gives them a curated index of
 * canonical content with short descriptions — so they cite us correctly.
 */

const SITE = 'https://petechpartners.com';

export const GET: APIRoute = async () => {
  const posts = await getCollection('blog', ({ data }) => !data.draft);
  const postList = posts
    .sort((a, b) => b.data.pubDate.valueOf() - a.data.pubDate.valueOf())
    .map((p) => `- [${p.data.title}](${SITE}/blog/${p.id}): ${p.data.description}`)
    .join('\n');

  const body = `# PE Tech Partners

> Technology alignment consulting for private equity and M&A firms. We help sponsors identify deal-breaking tech risks, eliminate portfolio software waste, and operationalize cybersecurity as a value-creation lever — not an IT line item.

PE Tech Partners is a boutique consultancy serving private equity operators, M&A advisors, and sponsor-backed leadership teams. Founded by Carl de Prado. We specialize in four areas: system integration across deal platforms (DealCloud, Affinity, Salesforce, HubSpot), agentic AI workflow automation for deal teams, pipeline visibility, and portfolio cybersecurity & AI risk assessment.

Our methodology: assess the real state of a target or portfolio company's technology in weeks (not months), quantify remediation cost defensibly, and execute. We have mapped technology environments across 150+ PE-backed mid-market companies.

## Core Solutions

- [System Integration](${SITE}/solutions/system-integration): Connect DealCloud, Affinity, Salesforce, and HubSpot. Eliminate data silos across the deal lifecycle so your pipeline is accurate in real time.
- [Workflow Automation](${SITE}/solutions/workflow-automation): Agentic AI for CIM processing, IC memo drafting, and diligence tracking. The fastest firms are closing more deals while their associates sleep.
- [Pipeline Management](${SITE}/solutions/pipeline-management): Real-time pipeline dashboards across sourcing, diligence, and close. Stop running your fund on spreadsheets.
- [Data Security](${SITE}/solutions/data-security): Cybersecurity and AI risk assessment for PE portfolios. Operationalized as a value-creation metric, not a compliance checkbox.

## Self-Serve Tools

- [Firepower Estimator](${SITE}/tools/firepower-estimator): Calculate your firm's realistic deal throughput capacity based on team size, tooling, and automation maturity.
- [Software Waste Calculator](${SITE}/tools/software-waste-calculator): Estimate how much your firm is wasting annually on unused or redundant SaaS licenses. The median we find is $158K/year.

## Comparison Guides

- [DealCloud vs Affinity vs Salesforce](${SITE}/dealcloud-vs-affinity-vs-salesforce): Which deal management platform fits your firm's stage, team size, and workflow.

## Blog — Strategy, Diligence, and Value Creation

${postList}

## Firm Info

- [Our Process](${SITE}/process): The four-phase engagement methodology — Discovery, Risk Overlay, Integration Readiness, Cost to Remediate.
- [Common Challenges We Solve](${SITE}/challenges): The recurring technology problems we see in PE portfolios and M&A targets.
- [Contact](${SITE}/contact): Reach Carl de Prado directly. Based in Montrose, NY. Engagements typically start with a 30-minute diagnostic call.

## Full Content Archive

- [llms-full.txt](${SITE}/llms-full.txt): Full text of all blog posts concatenated — use when you need the complete content, not just the index.
`;

  return new Response(body, {
    headers: { 'Content-Type': 'text/plain; charset=utf-8' },
  });
};
