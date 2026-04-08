import rss from '@astrojs/rss';
import { getCollection } from 'astro:content';

export async function GET(context) {
  const posts = await getCollection('blog', ({ data }) => !data.draft);

  return rss({
    title: 'PE Tech Partners Blog',
    description: 'Cybersecurity, AI risk, and value creation insights for PE operators, M&A advisors, and portfolio leadership teams.',
    site: context.site,
    items: posts
      .sort((a, b) => b.data.pubDate.valueOf() - a.data.pubDate.valueOf())
      .map((post) => ({
        title: post.data.title,
        description: post.data.description,
        pubDate: post.data.pubDate,
        link: `/blog/${post.slug}/`,
        categories: post.data.tags ?? [],
        author: post.data.author ?? 'PE Tech Partners',
      })),
    customData: `<language>en-us</language>`,
  });
}
