/**
 * Render blog post hero images to public/blog-heroes/<slug>.png using
 * the parametric BlogHero composition + per-post props from blog-heroes.ts.
 *
 * Same bundle+renderStill pipeline as render-og-cards.mjs / render-illustrations.mjs.
 */
import { bundle } from '@remotion/bundler';
import { renderStill, selectComposition } from '@remotion/renderer';
import path from 'node:path';
import { fileURLToPath, pathToFileURL } from 'node:url';
import { mkdir } from 'node:fs/promises';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const projectRoot = path.resolve(__dirname, '..');
const entry = path.join(projectRoot, 'remotion', 'index.ts');
const manifestPath = path.join(projectRoot, 'remotion', 'blog-heroes.ts');
const outDir = path.join(projectRoot, 'public', 'blog-heroes');

async function main() {
  // Import manifest via tsx's strip-types loader
  const { BLOG_HEROES } = await import(pathToFileURL(manifestPath).href);

  console.log(`→ Bundling Remotion project…`);
  const t0 = Date.now();
  const bundleLocation = await bundle({ entryPoint: entry });
  console.log(`  Bundled in ${((Date.now() - t0) / 1000).toFixed(1)}s`);

  await mkdir(outDir, { recursive: true });

  for (const post of BLOG_HEROES) {
    const composition = await selectComposition({
      serveUrl: bundleLocation,
      id: 'BlogHero',
      inputProps: {
        title: post.title,
        eyebrow: post.eyebrow,
        readTime: post.readTime,
        motif: post.motif,
      },
    });
    await renderStill({
      composition,
      serveUrl: bundleLocation,
      output: path.join(outDir, `${post.slug}.png`),
      imageFormat: 'png',
      inputProps: {
        title: post.title,
        eyebrow: post.eyebrow,
        readTime: post.readTime,
        motif: post.motif,
      },
    });
    console.log(`  ✓ ${post.slug}.png`);
  }

  console.log(`→ Rendered ${BLOG_HEROES.length} blog heroes in ${((Date.now() - t0) / 1000).toFixed(1)}s`);
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
