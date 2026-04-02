import { defineConfig } from 'astro/config';
import react from '@astrojs/react';
import sitemap from '@astrojs/sitemap';
import vercel from '@astrojs/vercel';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  site: 'https://petech-partners.vercel.app',
  adapter: vercel({
    webAnalytics: { enabled: true },
  }),
  integrations: [
    react(),
    sitemap({
      filter: (page) => !page.includes('/admin'),
    }),
  ],
  vite: {
    plugins: [tailwindcss()],
  },
  trailingSlash: 'never',
  build: {
    format: 'directory',
  },
  image: {
    domains: [],
  },
});
