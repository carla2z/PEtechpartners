/**
 * Render all Remotion OG cards declared in remotion/og-pages.ts to
 * public/og/<slug>.png. Called by `npm run render:og` and as a prebuild hook.
 *
 * Strategy: bundle the Remotion entry once, then loop OG_PAGES calling
 * renderStill with per-page inputProps. Much faster than spawning the CLI
 * for each page (which re-bundles every time).
 */
import { bundle } from '@remotion/bundler';
import { renderStill, selectComposition } from '@remotion/renderer';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import { mkdir } from 'node:fs/promises';
import { OG_PAGES } from '../remotion/og-pages.ts';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const projectRoot = path.resolve(__dirname, '..');
const entry = path.join(projectRoot, 'remotion', 'index.ts');
const outDir = path.join(projectRoot, 'public', 'og');

async function main() {
  console.log('→ Bundling Remotion project…');
  const t0 = Date.now();
  const bundleLocation = await bundle({
    entryPoint: entry,
    // Use project root as webpack root so @fontsource imports resolve.
    webpackOverride: (config) => config,
  });
  console.log(`  Bundled in ${((Date.now() - t0) / 1000).toFixed(1)}s`);

  await mkdir(outDir, { recursive: true });

  let count = 0;
  for (const page of OG_PAGES) {
    const outPath = path.join(outDir, `${page.slug}.png`);
    const composition = await selectComposition({
      serveUrl: bundleLocation,
      id: 'OGCard',
      inputProps: page,
    });

    await renderStill({
      composition,
      serveUrl: bundleLocation,
      output: outPath,
      inputProps: page,
      imageFormat: 'png',
    });
    count++;
    console.log(`  ✓ ${page.slug}.png`);
  }

  console.log(`→ Rendered ${count} OG cards to public/og/ in ${((Date.now() - t0) / 1000).toFixed(1)}s`);
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
