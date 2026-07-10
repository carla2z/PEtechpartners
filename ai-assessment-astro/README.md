# PE Tech AI Readiness Assessment

Astro implementation of the AI readiness assessment flow:

- PE Tech Partners branding and visual system
- Six assessment sections with 30 scored dimensions, including legal exposure
- Optional advisor and client logo upload
- Client-side PDF report generation
- Browser-local report retrieval by client name and password

## Run Locally

```bash
npm install
npm run dev
```

The dev server runs on `0.0.0.0` so Replit can expose it.

## Build

```bash
npm run build
npm run preview
```

## Dev Handoff Notes

- The app is static Astro. There is no Flask or server endpoint dependency.
- Generated reports are stored in `localStorage`, keyed by client name and a password hash. Retrieval works in the same browser only.
- For cross-device retrieval or CRM capture, replace the `saveReport` and `retrieveReport` functions in `src/pages/index.astro` with API calls.
- The questionnaire data lives in `src/data/assessment.ts`.
- Styling lives in `src/styles/global.css`.
