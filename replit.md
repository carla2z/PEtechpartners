# PE Tech Partners Website

## Overview
Professional website for PE Tech Partners - a technology consulting firm specializing in technology alignment for Private Equity and M&A firms.

## Recent Changes (November 24, 2025)

### Legal Pages & Footer Enhancement
- Created comprehensive Terms of Service page (terms.php)
- Created detailed Privacy Policy page (privacy.php)
- Both pages cover PE/M&A-specific compliance and confidentiality requirements
- Updated all page footers with contact information and legal links
- Footer now includes: Address (2125 Albany Post Rd Suite 106, Montrose NY 10548), Phone (917-715-7100)
- Footer links: Terms of Service, Privacy Policy, Contact Us
- Updated pages: index.php, blogs.php, testimonials.php, schedule.php, process.php

### Calendar Widget Update
- Replaced MSP Sites calendar with LeadConnector (GoHighLevel) booking widget
- Updated schedule.php with new calendar URL: api.leadconnectorhq.com/widget/booking/2jcoC62MukjeOCrx4UdP
- Integrated LeadConnector form embed JavaScript for enhanced functionality


### Blog Content Addition
- Created new blog article: "Compliance in M&A: Why Size Matters Not" (blog-compliance-size.php)
- 9-minute read covering GDPR, KYC, AML, and data privacy compliance
- Emphasizes equal regulatory requirements for boutique and mega-funds
- Added to blog listing page with professional stock image
- Total blog count: 14 articles

## Recent Changes (October 28, 2025)

### Testimonials Page Added
- Created humorous testimonials page (testimonials.php) with fictional NDA-themed quotes
- Tongue-in-cheek approach acknowledging PE industry discretion requirements
- 8 fictional testimonials from "Some Rich Dude," "Anonymous Billionaire," etc.
- Professional card-based layout with hover effects and quotation mark styling
- CTA section: "Book a Confidential Consultation" linking to schedule.php
- Added "Testimonials" link to main navigation menu
- Fully responsive mobile design matching site aesthetic

### Process Page Gamma Integration
- Converted process.php to full-screen Gamma presentation embed
- Desktop: Sticky header + Gamma iframe + footer with CTA button
- Mobile: Fixed header + full-screen Gamma iframe + slide-out "BOOK NOW" tab
- Footer hidden on mobile, replaced with vertical tab on right edge
- Optimized iframe sizing: Desktop calc(100vh - 82px - 100px), Mobile calc(100vh - 70px)

### CTA Section Enhancement
- Added "Execution Excellence Report" button next to "Book Your 30-Minute Assessment"
- Fixed button visibility on light backgrounds (navy border with white background)
- Responsive button layout: side-by-side on desktop, stacked on mobile
- Added scale-in animation to boardroom image in "Ready to Make Your Tech a Weapon?" section

## Recent Changes (October 27, 2025)

### Professional Graphics & Visual Enhancements
- Added professional background image to hero section with navy blue overlay
- Replaced all emoji placeholders with custom SVG icons for consistent cross-browser display
- Problem cards: Professional icons (settings, folders, documents, clipboard, lock, activity) with red gradient backgrounds
- Success/outcomes cards: SVG icons (lightning, clock, lock, charts, star, user) with light blue gradient backgrounds
- Credentials section: Enhanced icons (graduation cap, lightning, shield) with circular backgrounds
- Process steps: Added animated shimmer borders and enhanced numbered badges with gradients
- All icons sized appropriately (24px-36px) with smooth hover transitions
- Mobile-optimized: Fixed background-attachment for better mobile performance
- Downloaded 6 professional stock images for potential future use
- Brand color consistency maintained throughout (#0A2E50 navy, #BF0A30 red, #87CEEB light blue)

### Visual Style Guide
- Created comprehensive B2B SaaS visual style guide (VISUAL_STYLE_GUIDE.md)
- Documented complete design system optimized for PE/M&A conversion
- Includes color palette, typography, spacing system, component patterns
- Mobile-first responsive design principles with accessibility standards
- Ready for designer handoff or no-code tool implementation

### Mobile Navigation Optimization
- Replaced full navigation bar with minimal floating hamburger button (44px circle)
- Fixed iOS Safari overlay bug causing invisible blocking of hero content
- Changed menu from `left: -100%` to `transform: translateX(-100%)` for proper hiding
- Navigation now takes zero space, maximizing hero section visibility
- Menu slides in smoothly from left when hamburger button is tapped

### Calendar Integration Update
- Replaced booking.a2zbusinessit.com calendar with MSP Sites calendar widget
- Updated schedule.php with new calendar URL: api.mspsites.com/widget/booking/rcK4gmjBHQbS8ssndDPl
- Changed page title to "Book Your 30-Minute Alignment Assessment"
- Updated subtitle to "No cost. No pressure. High clarity."
- Embedded calendar iframe with required JavaScript for proper functionality

### Content Updates
- Updated "Problems" section headline to: "Old Tech Wastes Time. Smart Firms Don't."
- Changed all CTAs to 30-minute alignment assessment
- Updated hero CTA button layout: side-by-side with subtitle under primary button

## Recent Changes (October 25, 2025)

### Mobile Responsiveness Improvements
- Fixed navigation bar overlapping hero section on mobile devices
- Increased header top padding to 140px on mobile to ensure content appears below fixed nav
- Navigation bar height optimized at ~70px for mobile
- Logo sized at 35px for readability on small screens
- Made mobile menu scrollable with max-height constraint
- Optimized touch targets for mobile navigation
- Removed body padding-top; using header padding instead for cleaner spacing

### Calendar Integration
- Embedded booking.a2zbusinessit.com calendar directly into contact.php
- Visitors can now schedule appointments without leaving the website
- 700px tall responsive iframe with fallback options
- Calendar displays above contact form with clear "OR SEND US A MESSAGE" divider
- Added JavaScript fallback if calendar fails to load

### Microsoft Edge PDF Compatibility
- Added browser detection for Microsoft Edge on process.php
- Automatic fallback button appears if Edge blocks PDF iframe
- Users can open PDF in new tab if embedded view is blocked
- Maintains professional user experience across all browsers

## Recent Changes (October 24, 2025)

### Process PDF Integration
- Created process.php page with navigation menu and embedded PDF viewer
- Hosted "The PE Tech Edge" PDF document on the site (assets/pe-tech-edge.pdf)
- "Execution Excellence Report" button links to process.php
- PDF contains: Best Practices for Accelerating Deals with Integrated Systems (21 pages)
- Users can navigate the site while viewing the PDF

### Logo Update
- Updated to professional PE Tech Partners logo (PNG format)
- Features concentric circles design with red, navy blue, and white colors
- Diagonal arrow element showing movement and growth
- Logo displays across all pages (index, contact, schedule)

### Contact Form Addition
- Created professional contact form page (contact.php) as separate page
- Form includes fields for: Name, Email, Company, Phone, Deal Stage, Message
- Implemented comprehensive server-side validation with error messaging
- Added success messaging after form submission
- Styled to match main site with consistent design and animations
- Updated navigation on both pages to include Contact link

### Call Scheduling Form Addition
- Created dedicated call scheduling page (schedule.php) for booking 30-minute strategy calls
- Simple, focused form collecting: Name, Company, Phone (all required), and optional Notes
- Includes benefits box explaining what users will get from the call
- Server-side validation with error and success messaging
- Updated main page CTA buttons to link to schedule.php
- Professional styling matching the site's design language

### Animation Implementation
- Added comprehensive CSS animations and scroll-triggered effects throughout the website
- Implemented 8 different animation types: fadeInUp, fadeIn, slideInLeft, slideInRight, scaleIn, pulse, float, and shimmer
- All sections now animate smoothly as users scroll down the page
- Enhanced hover effects on all interactive elements

## Project Structure
```
/
├── index.php                    # Main website landing page with animations
├── contact.php                  # Contact form page with validation
├── schedule.php                 # Call scheduling form for booking 30-minute strategy calls
├── process.php                  # Gamma presentation embed page
├── testimonials.php             # Humorous fictional testimonials page (NDA-themed)
├── VISUAL_STYLE_GUIDE.md        # Comprehensive B2B SaaS design system
├── assets/
│   ├── images/
│   │   └── logo.png             # PE Tech Partners logo
│   └── pe-tech-edge.pdf         # Process documentation PDF
├── attached_assets/             # Professional images for two-column layouts
│   ├── image_1761591352795.png  # Celebration/champagne toast (outcomes section)
│   ├── image_1761591065504.png  # Boardroom/team collaboration (CTA section)
│   └── image_1761591203964.png  # Frustrated analyst (problems section)
├── .gitignore
└── replit.md
```

## Technology Stack
- PHP 8.4
- HTML/CSS with advanced animations
- JavaScript (Intersection Observer API for scroll-triggered animations)
- Responsive design with mobile menu support

## Running the Project
The PHP development server is configured to run automatically on port 5000:
- Server command: `php -S 0.0.0.0:5000 -t .`
- Access the website through the Replit webview

## Animation Features

### Scroll-Triggered Animations
- Section headings fade in and slide up when scrolled into view
- Cards appear with staggered timing for a sequential reveal effect
- Different animation styles for different card types:
  - Problem cards: fade and slide up
  - Process steps: scale in with number rotation on hover
  - Success outcomes: fade up with icon animations
  - Credentials: slide in from right
  - FAQ items: slide in from left

### Continuous Animations
- Header logo floats up and down continuously
- Logo pulses subtly to draw attention
- Navigation logo rotates on hover

### Hover Effects
- All buttons have shimmer effect and enhanced lift
- Cards lift up with enhanced shadows and border effects
- Icons scale and rotate on card hover
- FAQ items slide to the right on hover
- CTA box scales up on hover

### Performance
- CSS-driven animations for smooth 60fps performance
- Intersection Observer efficiently manages scroll triggers
- Animations trigger once and unobserve to save resources
- Staggered delays calculated automatically per section

## Features

### Main Landing Page (index.php)
- Responsive navigation bar with mobile menu
- Hero section with animated company branding
- Problem/solution showcasing with hover effects
- Three-step process explanation with rotating numbers
- Success outcomes grid with icon animations
- Credential cards with glow effects
- FAQ section with slide animations
- Call-to-action sections with scale effects

### Contact Form Page (contact.php)
- Professional contact form with PE/M&A-specific fields
- Deal stage selection dropdown (sourcing, diligence, integration, etc.)
- Server-side form validation with error messaging
- Success confirmation messaging
- Responsive design matching main site
- Smooth animations and transitions
- Info box explaining next steps after submission

### Call Scheduling Page (schedule.php)
- Dedicated page for booking 30-minute strategy calls
- Simple form with required fields: Name, Company, Phone
- Optional notes field for additional context
- Benefits box highlighting what users will receive
- Server-side validation with error and success messages
- Linked from main page CTA buttons with 30-minute alignment assessment
- Consistent design and animations matching the site theme

### Process PDF Viewer (process.php)
- Dedicated page displaying "The PE Tech Edge" PDF with navigation menu
- Full navigation header allows users to browse other pages while viewing PDF
- Embedded PDF viewer with full functionality (zoom, download, print, page navigation)
- Responsive layout filling the viewport
- Accessible from "Execution Excellence Report" button on main page

## Logo
The website uses the professional PE Tech Partners logo located at `assets/images/logo.png`, featuring a distinctive concentric circles design in navy blue, red, and white with a dynamic diagonal arrow. The logo includes continuous float and pulse animations in the header and rotates on hover.
