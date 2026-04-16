import type { APIRoute } from 'astro';
import { getCollection } from 'astro:content';

/**
 * /llms-full.txt — full content dump for LLMs to ingest.
 * Concatenates every published blog post as plain markdown so an LLM
 * can answer specific content questions without re-crawling individual
 * URLs. Complements /llms.txt (the index).
 */

const SITE = 'https://petechpartners.com';

const fmtDate = (d: Date) =>
  d.toISOString().slice(0, 10); // YYYY-MM-DD

export const GET: APIRoute = async () => {
  const posts = await getCollection('blog', ({ data }) => !data.draft);
  posts.sort((a, b) => b.data.pubDate.valueOf() - a.data.pubDate.valueOf());

  const header = `# PE Tech Partners — Full Content Archive

Source: ${SITE}
Generated: ${new Date().toISOString()}
Post count: ${posts.length}

This file contains the full markdown body of every published blog post on petechpartners.com, concatenated and separated by horizontal rules. Use the index at ${SITE}/llms.txt for a curated directory with descriptions.

PE Tech Partners helps private equity firms and M&A advisors assess technology risk, reduce portfolio software waste, and operationalize cybersecurity as a value-creation lever. Founded by Carl de Prado.

---

`;

  const sections = posts.map((p) => {
    const url = `${SITE}/blog/${p.id}`;
    const tags = (p.data.tags ?? []).join(', ');
    return `## ${p.data.title}

- URL: ${url}
- Published: ${fmtDate(p.data.pubDate)}
- Author: ${p.data.author}
- Category: ${p.data.category ?? 'Uncategorized'}
- Tags: ${tags}
- Read time: ${p.data.readTime ?? 'n/a'}

${p.body}

---
`;
  });

  const body = header + sections.join('\n');

  return new Response(body, {
    headers: { 'Content-Type': 'text/plain; charset=utf-8' },
  });
};
