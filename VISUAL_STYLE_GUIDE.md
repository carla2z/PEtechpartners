# PE Tech Partners Visual Style Guide
## B2B SaaS Landing Page Design System

---

## Brand Attributes

PE Tech Partners conveys:
- **Professional Credibility**: Enterprise-grade solutions for sophisticated PE firms
- **Technical Expertise**: Deep understanding of deal flow technology
- **Speed & Efficiency**: Focus on closing deals faster
- **Modern & Data-Driven**: Contemporary approach to private equity tech

---

## 1. Color Palette

### Primary Colors

**Navy Blue (Primary Brand)**
- `#0A2E50` - Main brand color, headers, navigation
- Usage: Primary backgrounds, headings, navigation bars
- Conveys: Trust, professionalism, stability

**Deep Slate (Background)**
- `#0F1B2A` - Dark background variant
- Usage: Alternate section backgrounds, footer
- Conveys: Depth, sophistication

### Accent Colors

**PE Red (Brand Accent)**
- `#BF0A30` - Brand highlight, "PE" emphasis
- Usage: Logo accent, key word highlights, limited decorative use
- Conveys: Energy, urgency, private equity tradition

**Light Blue (Primary CTA)**
- `#87CEEB` - Call-to-action primary color
- `#6BB8D6` - Hover state (darker)
- `#A8DFED` - Active/pressed state (lighter)
- Usage: Primary buttons, links, interactive elements
- Conveys: Action, clarity, approachability

### Semantic Colors

**Success**
- `#1FAA59` - Success states, confirmations
- Usage: Form validation, success messages, positive metrics

**Warning**
- `#F7B733` - Warning states, cautionary information
- Usage: Alert messages, important notices

**Error**
- `#E63946` - Error states, critical alerts
- Usage: Form errors, validation failures

**Info**
- `#3BAFDA` - Informational states
- Usage: Tips, helper text, additional context

### Neutral Gray Scale

**Light Neutrals**
- `#FFFFFF` - Pure white, backgrounds
- `#F7F8FA` - Off-white, subtle backgrounds
- `#E2E7EF` - Light gray, borders, dividers

**Mid Neutrals**
- `#C3CBD9` - Medium gray, inactive states
- `#94A3B8` - Gray, secondary text
- `#64748B` - Dark gray, tertiary text

**Dark Neutrals**
- `#1A1A1A` - Near-black, primary text on light backgrounds

### Usage Guidelines

**Conversion-Optimized Color Strategy:**
- Limit bright colors (Light Blue, PE Red) to CTAs and key focal points
- Use navy and neutrals for 80% of the interface
- Maintain high contrast for readability (WCAG AA: 4.5:1 minimum)
- Reserve PE Red for strategic emphasis only (overuse dilutes impact)

---

## 2. Typography System

### Font Families

**Headlines: Source Serif Pro**
```css
font-family: 'Source Serif Pro', Georgia, serif;
```
- Weights: 600 (Semi-bold), 700 (Bold)
- Usage: H1, H2, major section headlines
- Rationale: Professional serif conveys authority and credibility

**Body & UI: Inter**
```css
font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
```
- Weights: 400 (Regular), 500 (Medium), 600 (Semi-bold), 700 (Bold)
- Usage: Body text, buttons, navigation, forms
- Rationale: Clean, highly readable sans-serif optimized for screens

### Type Scale (8pt Modular Scale)

| Element | Size | Line Height | Weight | Letter Spacing |
|---------|------|-------------|--------|----------------|
| **H1 (Hero)** | 64px (4rem) | 1.2 (77px) | 700 | -0.5px |
| **H1 (Section)** | 52px (3.25rem) | 1.2 (62px) | 700 | -0.5px |
| **H2** | 40px (2.5rem) | 1.25 (50px) | 600 | -0.3px |
| **H3** | 32px (2rem) | 1.3 (42px) | 600 | -0.2px |
| **H4** | 26px (1.625rem) | 1.3 (34px) | 600 | 0 |
| **H5** | 20px (1.25rem) | 1.4 (28px) | 600 | 0 |
| **Body Large** | 20px (1.25rem) | 1.6 (32px) | 400 | 0 |
| **Body** | 16px (1rem) | 1.6 (26px) | 400 | 0 |
| **Body Small** | 14px (0.875rem) | 1.5 (21px) | 400 | 0 |
| **Caption** | 12px (0.75rem) | 1.4 (17px) | 500 | 0.5px |

### Mobile Type Scale

| Element | Mobile Size | Line Height |
|---------|-------------|-------------|
| **H1** | 36-40px | 1.2 |
| **H2** | 32px | 1.25 |
| **H3** | 26px | 1.3 |
| **Body** | 16px (min) | 1.6 |

### Typography Best Practices

**Line Length**
- Desktop: 60-75 characters per line
- Mobile: 35-45 characters per line

**Hierarchy Principles**
1. Use size, weight, and color to create clear visual hierarchy
2. Maintain consistent vertical rhythm (multiples of 8px)
3. Never use more than 3 font weights on a single page
4. Ensure 16px minimum body text on mobile

---

## 3. Button System

### Button Variants

#### Primary Button (High Priority CTAs)
```css
Background: #87CEEB (Light Blue)
Text: #0A2E50 (Navy)
Font: Inter, 16px, weight 600
Padding: 14px 28px
Border-radius: 8px
Border: none
Box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1)

Hover:
  Background: #6BB8D6
  Transform: translateY(-2px)
  Box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15)

Active/Pressed:
  Background: #A8DFED
  Transform: translateY(0)
  Box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1)

Focus:
  Outline: 3px solid rgba(135, 206, 235, 0.4)
  Outline-offset: 2px

Disabled:
  Background: #C3CBD9
  Text: #94A3B8
  Cursor: not-allowed
  Opacity: 0.6
```

#### Secondary Button (Medium Priority)
```css
Background: transparent
Text: #87CEEB (Light Blue on dark) / #0A2E50 (Navy on light)
Font: Inter, 16px, weight 600
Padding: 14px 28px
Border-radius: 8px
Border: 2px solid #87CEEB

Hover:
  Background: rgba(135, 206, 235, 0.1)
  Border-color: #6BB8D6
  Transform: translateY(-2px)

Active/Pressed:
  Background: rgba(135, 206, 235, 0.2)

Focus:
  Outline: 3px solid rgba(135, 206, 235, 0.4)
  Outline-offset: 2px
```

#### Tertiary Button (Low Priority, Text Links)
```css
Background: transparent
Text: #87CEEB
Font: Inter, 16px, weight 600
Padding: 8px 12px
Border: none

Hover:
  Text: #6BB8D6
  Text-decoration: underline
  Text-underline-offset: 4px

Focus:
  Outline: 2px solid rgba(135, 206, 235, 0.4)
  Outline-offset: 2px
```

### Button Sizes

| Size | Padding | Font Size | Min Width |
|------|---------|-----------|-----------|
| **Large** | 16px 32px | 18px | 180px |
| **Default** | 14px 28px | 16px | 140px |
| **Small** | 10px 20px | 14px | 100px |

### Button Icons
- Icon + text spacing: 8px gap
- Icon size: 20px (default), 24px (large), 16px (small)
- Icon position: Left or right of text, never alone (use aria-label if icon-only)

### Mobile Button Guidelines
- Minimum touch target: 44px × 44px
- Full-width on mobile for primary CTAs
- Stack vertically with 12px gap between buttons

---

## 4. Spacing System

### 4px Baseline Grid

All spacing uses multiples of 4px for vertical rhythm and consistency.

**Spacing Scale:**
```
4px   - Micro (tight icon spacing, inline elements)
8px   - XXS (form field gaps, list item spacing)
12px  - XS (component internal padding)
16px  - SM (card padding, small component gaps)
24px  - MD (section element gaps, card spacing)
32px  - LG (component spacing, subsection margins)
48px  - XL (section padding top/bottom)
64px  - XXL (major section spacing)
96px  - XXXL (hero section padding, major separations)
```

### Layout Spacing

**Desktop:**
- Container max-width: 1200px
- Horizontal padding: 20px (minimum)
- Section vertical padding: 80-100px
- Component gap: 32-48px

**Tablet (600-959px):**
- Container: 100% width
- Horizontal padding: 24px
- Section vertical padding: 60-80px
- Component gap: 24-32px

**Mobile (<600px):**
- Container: 100% width
- Horizontal padding: 20px
- Section vertical padding: 48-60px
- Component gap: 16-24px

### Vertical Rhythm
- Maintain consistent spacing between sections
- Use spacing scale for margins/padding (avoid arbitrary values)
- Stack elements with predictable gaps (16px, 24px, 32px)

---

## 5. Component Patterns

### Hero Section

**Desktop Layout:**
- Two-column grid (60/40 or 50/50 split)
- Copy left-aligned (left column)
- Visual/image right (right column)
- Minimum height: 600px, max: 100vh
- Vertical centering of content

**Mobile Layout:**
- Single column, stacked
- Logo/branding at top
- Heading → Subheading → CTA buttons
- Minimum padding top: 100px (clear of nav)
- Background: Navy gradient or solid

**Hero Elements:**
```
Logo: 60-80px height (mobile: 50-60px)
Heading (H1): 52-64px (mobile: 36-40px)
Subheading: 18-20px, max-width 600px
CTA spacing: 16px gap, stack on mobile
```

### Card Component

```css
Background: #FFFFFF
Border: 1px solid #E2E7EF
Border-radius: 12px
Padding: 32px
Box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05)

Hover:
  Box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1)
  Transform: translateY(-4px)
  Transition: all 0.3s ease

Card Header:
  Icon: 48px (optional colored accent)
  Title (H3): 24-26px, weight 600
  Spacing: 16px gap

Card Body:
  Text: 16px, line-height 1.6
  Max-width: 500px
```

### Form Elements

**Input Fields:**
```css
Background: #FFFFFF
Border: 2px solid #C3CBD9
Border-radius: 8px
Padding: 12px 16px
Font: Inter, 16px
Min-height: 48px (touch-friendly)

Focus:
  Border-color: #87CEEB
  Outline: none
  Box-shadow: 0 0 0 4px rgba(135, 206, 235, 0.2)

Error:
  Border-color: #E63946
  Box-shadow: 0 0 0 4px rgba(230, 57, 70, 0.1)

Success:
  Border-color: #1FAA59
```

**Labels:**
```css
Font: Inter, 14px, weight 600
Color: #1A1A1A
Margin-bottom: 8px
Display: block
```

**Helper Text:**
```css
Font: Inter, 12px, weight 400
Color: #64748B
Margin-top: 4px
```

**Validation Messages:**
```css
Font: Inter, 12px, weight 500
Color: #E63946 (error) / #1FAA59 (success)
Margin-top: 4px
Icon + text (16px icon, 4px gap)
```

### Navigation

**Desktop Navigation:**
```css
Height: 80px
Background: #0A2E50
Position: sticky, top: 0
Z-index: 1000
Box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1)

Logo: 40-50px height
Nav links: 16px, weight 600, #FFFFFF
Link spacing: 32px gap
CTA button: Primary style (Light Blue)
```

**Mobile Navigation:**
```css
Hamburger: 44px × 44px touch target
Menu: Full-screen overlay or slide-in panel
Background: #0A2E50
Links: Full-width, 48px min height
Close button: 44px × 44px, fixed position
```

### Section Layouts

**Alternating Background Pattern:**
- White (#FFFFFF) → Light Gray (#F7F8FA) → White → Repeat
- Or: Navy (#0A2E50) → Deep Slate (#0F1B2A) → Navy

**Content Width:**
- Text-heavy sections: max 800px centered
- Full-width sections: 1200px max with 20px padding
- Card grids: 3 columns (desktop), 2 (tablet), 1 (mobile)

---

## 6. Iconography & Images

### Icon System

**Style:** Outline icons (2px stroke weight)
**Sizes:**
- Small: 16px
- Default: 20px
- Medium: 24px
- Large: 32px
- Hero: 48-64px

**Colors:**
- Primary: #87CEEB (Light Blue)
- Accent: #BF0A30 (PE Red, sparingly)
- Neutral: #94A3B8 (Gray)
- On dark: #FFFFFF

**Usage:**
- Use consistently across the site (same library)
- Align with text baseline
- Maintain 8px spacing from adjacent text
- Ensure decorative icons don't interfere with content hierarchy

### Photography Style

**Image Types:**
- Professional office environments (modern, clean)
- Technology/dashboard screenshots (data visualization)
- Team collaboration (diverse, authentic)
- Abstract business imagery (geometric, professional)

**Treatment:**
- High quality, professional photography
- Minimal filters (slight desaturation acceptable)
- Consistent lighting and tone
- Avoid cheesy stock photos

**Technical Specs:**
- Format: WebP with JPG fallback
- Resolution: 2x for retina displays
- Lazy loading for performance
- Alt text for accessibility

---

## 7. Mobile-First Responsive Design

### Breakpoints

```css
/* Mobile First */
Base: 0-599px (default styles)

/* Tablet */
@media (min-width: 600px) { }

/* Desktop Small */
@media (min-width: 960px) { }

/* Desktop Large */
@media (min-width: 1280px) { }
```

### Mobile Optimization Principles

**Layout:**
1. Single column by default
2. Grid collapses to 1 column on mobile
3. Gutters: 24px (desktop) → 20px (mobile)
4. Full-width components with edge-to-edge backgrounds

**Typography:**
5. Minimum 16px body text (prevents zoom on iOS)
6. Scale down headings proportionally (see mobile type scale)
7. Maintain line-height ratios (1.6 for body, 1.2 for headings)

**Touch Targets:**
8. Minimum 44px × 44px for all interactive elements
9. 8px minimum spacing between touch targets
10. Buttons full-width on mobile (primary CTAs)

**Navigation:**
11. Hamburger menu for main navigation
12. Sticky header with minimal height
13. Accessible menu (keyboard navigation, focus management)

**Performance:**
14. Serve appropriately sized images
15. Lazy load below-fold content
16. Minimize animations on mobile (respect prefers-reduced-motion)

**Forms:**
17. Stack labels above inputs
18. Full-width form fields
19. Appropriate input types (tel, email, number)
20. Large, thumb-friendly submit buttons

---

## 8. Visual Hierarchy for Conversion

### Scanning Patterns

**F-Pattern (Text-Heavy Pages):**
- Important content in top-left
- Key points at beginning of paragraphs
- CTA buttons left-aligned or centered

**Z-Pattern (Landing Pages):**
- Logo top-left → CTA top-right
- Headline across top
- Supporting copy middle-left → CTA bottom-right

### Hierarchy Principles

**Above the Fold:**
1. Value proposition (H1) - largest, most prominent
2. Supporting subheadline - 18-20px, high contrast
3. Primary CTA - bright color (Light Blue), high contrast
4. Hero visual - supports messaging, not distracting

**Progressive Disclosure:**
5. Lead with benefits, not features
6. Use accordions/tabs for detailed information
7. "Learn more" links for additional context
8. Keep initial view uncluttered (3-5 key elements max)

**Directional Cues:**
9. Arrows pointing to CTAs
10. Eye gaze in photos toward CTAs
11. White space guiding attention
12. Color contrast highlighting key actions

**Trust Signals:**
13. Testimonials near CTAs
14. Logos of recognizable clients
15. Security badges near forms
16. Credentials and certifications

### Conversion-Focused Color Strategy

**CTAs:**
- Primary CTA: Light Blue (#87CEEB) - most prominent color on page
- Limit to 1-2 primary CTAs per screen
- Secondary CTAs: Outlined or subdued

**Supporting Elements:**
- Use neutrals (grays) for 80% of page
- Navy blue for structure and headers
- Red accent sparingly (1-2 instances per section max)
- White space as a design element (not "empty" space)

---

## 9. Accessibility Standards

### WCAG 2.1 AA Compliance

**Color Contrast Ratios:**
```
Body text (16px): 4.5:1 minimum
Large text (18px+ or 14px+ bold): 3.0:1 minimum
Interactive elements: 3.0:1 minimum

Example Passing Combinations:
✓ #1A1A1A on #FFFFFF (16.1:1)
✓ #0A2E50 on #FFFFFF (10.9:1)
✓ #87CEEB on #0A2E50 (5.2:1)
✓ #FFFFFF on #0A2E50 (10.9:1)

Example Failing Combinations:
✗ #87CEEB on #FFFFFF (2.1:1) - too low
✗ #C3CBD9 on #FFFFFF (1.6:1) - too low
```

**Focus States:**
- Visible focus indicator on all interactive elements
- 3px outline with 2px offset (minimum)
- High contrast color (#87CEEB or #BF0A30)
- Never remove focus outlines (use `outline: none` sparingly)

**Keyboard Navigation:**
- Logical tab order (top to bottom, left to right)
- Skip links for main content
- Escape key closes modals/menus
- Arrow keys for custom components (where appropriate)

**Alternative Text:**
- Descriptive alt text for informative images
- Empty alt (`alt=""`) for decorative images
- Link text describes destination (avoid "click here")
- Icon buttons have aria-label

**Semantic HTML:**
- Use proper heading hierarchy (H1 → H2 → H3)
- `<nav>` for navigation, `<main>` for content, `<footer>` for footer
- `<button>` for actions, `<a>` for links
- Form labels associated with inputs (`for` attribute)

**Touch Targets:**
- Minimum 44px × 44px (per WCAG 2.1 AAA)
- 8px spacing between adjacent targets
- Ensure interactive elements are easily tappable on mobile

**Motion & Animation:**
- Respect `prefers-reduced-motion` media query
- Disable non-essential animations for users with motion sensitivities
- Keep transitions under 300ms for perceived performance

---

## 10. Grid System

### 12-Column Grid

**Desktop (960px+):**
```
Columns: 12
Gutter: 24px
Margin: 20px (min)
Max-width: 1200px
```

**Tablet (600-959px):**
```
Columns: 8
Gutter: 20px
Margin: 24px
```

**Mobile (<600px):**
```
Columns: 4
Gutter: 16px
Margin: 20px
```

### Layout Patterns

**Full-Width Hero:**
- 12 columns, centered content (6-8 column width)

**Two-Column (Features/Benefits):**
- Desktop: 6/6 split or 7/5 split
- Tablet: 4/4 split
- Mobile: Stacked (4 columns each)

**Three-Column (Cards/Services):**
- Desktop: 4/4/4 split
- Tablet: 4/4 (2 per row, stack third)
- Mobile: 4 (stack all)

**Sidebar Layout:**
- Desktop: 8 (content) / 4 (sidebar)
- Tablet: 5 (content) / 3 (sidebar)
- Mobile: Stacked (sidebar below content)

---

## 11. Animation & Micro-interactions

### Transition Timing

**Standard Transitions:**
```css
Buttons, links: 150ms ease-out
Hover effects: 200ms ease-in-out
Transforms: 300ms ease-in-out
Modals, overlays: 300ms ease-in-out
Page sections (scroll): 400ms ease-out
```

### Animation Principles

**Purposeful Motion:**
- Enhance usability (feedback, hierarchy)
- Never animate for decoration alone
- Smooth, natural easing functions

**Hover States:**
- Buttons: subtle lift (translateY -2px) + shadow
- Links: color change + underline
- Cards: lift + shadow increase

**Loading States:**
- Skeleton screens for content loading
- Spinner for actions (button clicks)
- Progress indicators for multi-step processes

**Scroll Animations:**
- Fade-in on scroll (optional, subtle)
- Parallax effects (minimal, not distracting)
- Sticky navigation reveals

### Performance
- Use `transform` and `opacity` (GPU-accelerated)
- Avoid animating `width`, `height`, `top`, `left`
- Keep animations under 300ms for snappiness
- Disable on low-power devices (media query)

---

## 12. Implementation Guidelines

### CSS Variables (Custom Properties)

```css
:root {
  /* Colors */
  --color-navy: #0A2E50;
  --color-slate: #0F1B2A;
  --color-red: #BF0A30;
  --color-blue: #87CEEB;
  --color-blue-hover: #6BB8D6;
  
  --color-success: #1FAA59;
  --color-warning: #F7B733;
  --color-error: #E63946;
  --color-info: #3BAFDA;
  
  --color-gray-50: #F7F8FA;
  --color-gray-100: #E2E7EF;
  --color-gray-200: #C3CBD9;
  --color-gray-400: #94A3B8;
  --color-gray-600: #64748B;
  --color-gray-900: #1A1A1A;
  
  /* Spacing */
  --space-xs: 4px;
  --space-sm: 8px;
  --space-md: 16px;
  --space-lg: 24px;
  --space-xl: 32px;
  --space-2xl: 48px;
  --space-3xl: 64px;
  --space-4xl: 96px;
  
  /* Typography */
  --font-serif: 'Source Serif Pro', Georgia, serif;
  --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  
  --text-xs: 12px;
  --text-sm: 14px;
  --text-base: 16px;
  --text-lg: 20px;
  --text-xl: 26px;
  --text-2xl: 32px;
  --text-3xl: 40px;
  --text-4xl: 52px;
  --text-5xl: 64px;
  
  /* Effects */
  --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 8px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 8px 16px rgba(0, 0, 0, 0.15);
  
  --radius-sm: 4px;
  --radius-md: 8px;
  --radius-lg: 12px;
  --radius-xl: 16px;
  --radius-full: 9999px;
  
  /* Transitions */
  --transition-fast: 150ms ease-out;
  --transition-base: 200ms ease-in-out;
  --transition-slow: 300ms ease-in-out;
}
```

### No-Code Tool Configuration

**Webflow/Framer:**
- Import color palette as global swatches
- Create text styles for each heading level
- Build component library (buttons, cards, forms)
- Set up breakpoints (600px, 960px, 1280px)

**Figma:**
- Create design tokens (colors, typography, spacing)
- Build component library with variants
- Use auto-layout for responsive components
- Export design system for handoff

---

## 13. Brand Voice in Visual Design

### Visual Tone

**Professional, Not Stuffy:**
- Clean layouts with breathing room
- Modern typography (no outdated serifs everywhere)
- Subtle animations (not flashy)

**Confident, Not Arrogant:**
- Bold headlines that make claims
- Credible proof points (no hype)
- Testimonials from real firms

**Technical, But Approachable:**
- Data visualizations where helpful
- Plain language in body copy
- Visual hierarchy guides the reader

**Urgent, Not Panicky:**
- Strong CTAs (action-oriented)
- Red accent used sparingly (not everywhere)
- Focus on opportunity, not fear

---

## 14. Quality Checklist

### Before Launch

**Visual Consistency:**
- [ ] All colors match the palette (no arbitrary hex codes)
- [ ] Typography uses system fonts and sizes
- [ ] Spacing follows 4px grid
- [ ] Buttons use defined variants (no custom one-offs)

**Responsive Design:**
- [ ] Test on mobile (375px), tablet (768px), desktop (1280px)
- [ ] All touch targets meet 44px minimum
- [ ] Text remains readable at all breakpoints
- [ ] Images scale properly without distortion

**Accessibility:**
- [ ] Color contrast passes WCAG AA (use checker tool)
- [ ] All images have alt text
- [ ] Forms have associated labels
- [ ] Focus states visible on all interactive elements
- [ ] Keyboard navigation works throughout

**Performance:**
- [ ] Images optimized (WebP, lazy loading)
- [ ] Fonts subset and preloaded
- [ ] Animations use GPU-accelerated properties
- [ ] Page loads in under 3 seconds (mobile 4G)

**Conversion Optimization:**
- [ ] Primary CTA above the fold
- [ ] Clear value proposition in H1
- [ ] Minimal distractions on page
- [ ] Trust signals near form/CTA
- [ ] Logical visual hierarchy (F or Z pattern)

---

## Support & Resources

**Design Tools:**
- Figma: Component library and prototyping
- Adobe Color: Palette contrast checking
- WebAIM Contrast Checker: Accessibility validation
- Google Fonts: Typography hosting (Inter, Source Serif Pro)

**Development:**
- CSS Variables for theme consistency
- Tailwind CSS (optional, matches spacing system)
- Accessibility testing: Axe, Lighthouse, WAVE

**Version:** 1.0
**Last Updated:** October 2025
**Owner:** PE Tech Partners Design System

---

*This guide is a living document. Update as the brand evolves and new patterns emerge.*
