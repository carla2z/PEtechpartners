import type { APIRoute } from 'astro';

const getRobotsTxt = (siteURL: string) => `# robots.txt for petechpartners.com
# Allow all crawlers; block admin + API routes; point to sitemap.

User-agent: *
Allow: /
Disallow: /admin
Disallow: /admin/
Disallow: /api/

# AI / LLM crawlers — allowed (content is meant to be discovered)
User-agent: GPTBot
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: Google-Extended
Allow: /

Sitemap: ${siteURL}sitemap-index.xml

# LLM-readable content index (https://llmstxt.org)
# ${siteURL}llms.txt
# ${siteURL}llms-full.txt
`;

export const GET: APIRoute = ({ site }) => {
  return new Response(getRobotsTxt(site?.toString() || 'https://petechpartners.com/'), {
    headers: { 'Content-Type': 'text/plain; charset=utf-8' },
  });
};
