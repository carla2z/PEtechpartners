/**
 * Render the 4 solution illustrations to public/illustrations/<slug>.png.
 * Same pipeline as scripts/render-og-cards.mjs.
 */
import { bundle } from '@remotion/bundler';
import { renderStill, selectComposition } from '@remotion/renderer';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import { mkdir } from 'node:fs/promises';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const projectRoot = path.resolve(__dirname, '..');
const entry = path.join(projectRoot, 'remotion', 'index.ts');
const outDir = path.join(projectRoot, 'public', 'illustrations');

const ILLUSTRATIONS = [
  { id: 'IntegrationIllustration', slug: 'integration' },
  { id: 'AutomationIllustration',  slug: 'automation' },
  { id: 'PipelineIllustration',    slug: 'pipeline' },
  { id: 'SecurityIllustration',    slug: 'security' },
];

async function main() {
  console.log('→ Bundling Remotion project…');
  const t0 = Date.now();
  const bundleLocation = await bundle({ entryPoint: entry });
  console.log(`  Bundled in ${((Date.now() - t0) / 1000).toFixed(1)}s`);

  await mkdir(outDir, { recursive: true });

  for (const { id, slug } of ILLUSTRATIONS) {
    const composition = await selectComposition({
      serveUrl: bundleLocation,
      id,
    });
    await renderStill({
      composition,
      serveUrl: bundleLocation,
      output: path.join(outDir, `${slug}.png`),
      imageFormat: 'png',
    });
    console.log(`  ✓ ${slug}.png`);
  }

  console.log(`→ Rendered ${ILLUSTRATIONS.length} illustrations in ${((Date.now() - t0) / 1000).toFixed(1)}s`);
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
