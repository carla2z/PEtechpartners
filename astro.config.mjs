import { defineConfig } from 'astro/config';
import react from '@astrojs/react';
import sitemap from '@astrojs/sitemap';
import vercel from '@astrojs/vercel';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  site: 'https://petechpartners.com',
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
    format: 'file',
  },
  image: {
    domains: [],
  },
});
