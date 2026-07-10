# Punchlist Implementation — Review Checklist
**Date:** July 10, 2026 | **Scope:** All 27 pages | Preview each page in Replit, then commit & push to deploy via Vercel.

## What changed on EVERY page (27 files)
- Meta description (unique, 150–160 chars) — *drafts below, edit any you dislike*
- Canonical URL tag
- Open Graph + Twitter card tags (LinkedIn shares now show proper previews)
- Proper favicon set (new files in `assets/`: favicon.ico, 16px, 32px, apple-touch-icon)
- GA4 tag (G-77VVQVBH64) — was only on the homepage before
- `loading="lazy"` on below-the-fold images

## index.php — additional changes (review carefully)
- [ ] **Hero:** new secondary CTA "See How It Works" → #solutions
- [ ] **NEW testimonials section** above the final CTA — 3 NDA-cleared quotes pulled from testimonials.php
- [ ] **FAQ is now an accordion** (click to expand) + FAQPage schema for Google rich results
- [ ] **Footer:** 3 columns — added tagline, tel: link, LinkedIn, Blog/Tools/Calculator links
- [ ] **Gamma CDN image replaced** with local `image_1761591065504.png` ("You Deserve Better" section). ⚠️ This duplicates the image in the final CTA. If you want the original Gamma image: download it from the old URL in git history, save to attached_assets/, update line ~1615
- [ ] **Hover animations toned down** — removed 360° spin on step numbers, reduced card scaling to subtle lifts
- [ ] **Schema:** ProfessionalService JSON-LD (address, phone, service area) + FAQPage
- [ ] ⚠️ **LinkedIn URL in footer is a guess** — verify: linkedin.com/company/pe-tech-partners

## Page-by-page review (open each, check title bar favicon, view source for meta)
| Page | Extra notes |
|---|---|
| index.php | See section above — biggest changes |
| process.php, schedule.php, testimonials.php, blogs.php, calculator.php, contact.php, terms.php, privacy.php | Head-only changes + GA4. blogs.php: 15 card images now lazy-load |
| tools.php, ai-consulting-*.php | Already had SEO tags; only favicon block + GA4 added |
| 16 × blog-*.php | Head changes + Article schema. blog-hidden-deal-killer kept its existing description |

## Meta descriptions to approve (core pages)
- **process.php:** "See how PE Tech Partners runs technology diligence and integration for private equity and M&A firms — a proven process from assessment to value creation."
- **schedule.php:** "Schedule a no-cost strategic debrief with PE Tech Partners. Get clear, actionable guidance on IT diligence, integration, and portfolio technology risks."
- **testimonials.php:** "Real results from PE and M&A clients who stay anonymous by design. See how PE Tech Partners delivers technology wins while protecting deal confidentiality."
- **blogs.php:** "Insights on technology diligence, integration, and value creation for private equity and M&A firms — practical guidance for faster deals and stronger exits."
- **calculator.php:** "Free software waste calculator for PE and M&A firms. Estimate what forgotten subscriptions and unused licenses cost your deal team each year in minutes."
- **contact.php:** "Contact PE Tech Partners to discuss technology alignment for your next deal. Tell us your deal stage and challenges — our PE and M&A IT experts respond fast."
- (Blog descriptions are in each file's head — spot-check a few)

## NOT done — needs your decision
1. **Copy tone** (MEDIUM): punchlist flags casual FAQ voice ("You gonna push new software?") vs. polished headlines. Want me to rewrite toward authoritative-approachable?
2. **Nav consolidation** (HIGH): still 8 items; punchlist recommends 4–5. Which to drop/merge?
3. **CSS extraction** (CRITICAL per punchlist): ~1,300 inline lines per page → shared .css file. Big refactor, best done as its own pass after this one is verified live.
4. **Hard metrics in copy** (MEDIUM): "40% faster NDA-to-close" style numbers — need real/approved figures from you.
5. **NICE-to-haves:** sticky CTA bar, exit-intent popup, chatbot, blog previews on homepage, WebP conversion, dark mode.

## Deploy
Preview in Replit → `git add -A && git commit -m "Punchlist: SEO, favicons, GA4, FAQ accordion, testimonials, footer" && git push` → Vercel auto-deploys.
