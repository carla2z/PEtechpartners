<?php
/**
 * PE Tech Partners Website
 * Technology Alignment for Private Equity & M&A Firms
 */

// Configuration
$site_title = "PE Tech Partners - Technology Alignment for Private Equity & M&A Firms";
$company_name = "PE Tech Partners";
$tagline = "Strategic Solutions for PE & M&A Firms";
$year = date('Y');

// Navigation items
$nav_items = [
    ['href' => '#problems', 'text' => 'Challenges'],
    ['href' => '#solutions', 'text' => 'Solutions'],
    ['href' => 'ai-consulting-private-equity-ma-advisors-northeast.php', 'text' => 'AI Consulting'],
    ['href' => 'process.php', 'text' => 'Our Process'],
    ['href' => 'blogs.php', 'text' => 'Blog'],
    ['href' => 'tools.php', 'text' => 'Free Tools'],
    ['href' => 'testimonials.php', 'text' => 'Testimonials'],
    ['href' => 'calculator.php', 'text' => 'Software Waste Calc']
];

// Logo
$logo_svg = "attached_assets/Home_1761834398568.png";

// Problem cards
$problems = [
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 1v6m0 6v6m5.2-14.2l-4.2 4.2m0 6l4.2 4.2M1 12h6m6 0h6m-14.2 5.2l4.2-4.2m0-6l-4.2-4.2"/></svg>',
        'title' => 'Analysts stuck doing grunt work',
        'description' => 'Instead of hunting new deals or digging into diligence, they\'re toggling tabs and copy-pasting data. It\'s killing their output.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/><circle cx="12" cy="13" r="2"/></svg>',
        'title' => 'Data scattered everywhere',
        'description' => 'Pipeline targets, portfolio updates, diligence notes—it\'s all trapped in different systems. When you need it fast (NDA to exclusivity), good luck.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V9z"/><polyline points="13 2 13 9 20 9"/></svg>',
        'title' => 'Data room mess slows everything',
        'description' => 'Hours wasted downloading docs, renaming files, uploading to internal systems. What should take minutes turns into a full afternoon.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
        'title' => 'CIMs take forever to process',
        'description' => 'Every new deal? Someone\'s manually typing teaser/CIM data into your CRM and models. Errors. Delays. Frustration.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>',
        'title' => 'Security holes everywhere',
        'description' => 'CIMs, mgmt presentations, transaction docs flying through unsecured email and drives. One slip and you\'re exposed.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
        'title' => 'Deals fall through the cracks',
        'description' => 'No single view of your pipeline means missed follow-ups, lost co-invests, and warm leads going cold to faster sponsors.'
    ]
];

// Process steps
$steps = [
    [
        'number' => 1,
        'title' => 'Assess',
        'description' => 'They map the entire deal process—from origination to exit—to uncover where time and efficiency are lost across systems, workflows, and teams.'
    ],
    [
        'number' => 2,
        'title' => 'Align',
        'description' => 'They integrate CRMs, data rooms, cap tables, and portfolio tools—automating CIMs, IC memos, diligence tracking, VDR downloads, and post-close reporting.'
    ],
    [
        'number' => 3,
        'title' => 'Amplify',
        'description' => 'With real-time dashboards for pipeline, velocity, and portfolio health, the team gains speed, visibility, and a competitive edge—every step of the way.'
    ]
];

// Success outcomes
$outcomes = [
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
        'title' => 'More Deals, Same Headcount',
        'description' => 'Automation kills the manual crap—comps, reporting, data entry. Analysts produce way more without burning out or adding staff.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'title' => 'Lightning Deal Velocity',
        'description' => 'Spot add-ons early. Push teasers to IOI in days, not weeks. Close before competing bids even show up.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>',
        'title' => 'Locked Down & Compliant',
        'description' => 'CIMs, presentations, transaction data—enterprise security keeps it all safe and LP reporting compliant.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/></svg>',
        'title' => 'Real Returns',
        'description' => 'Your stack finally pays off: shorter diligence, higher closes, better monitoring. Not just another expense.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        'title' => 'Beat the Competition',
        'description' => 'While others fight their tools, you\'re signing term sheets, owning intermediary relationships, and landing proprietary flow.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
        'title' => 'Happy Team',
        'description' => 'Analysts do what they signed up for: source, model, diligence. Not chase emails or manage software chaos.'
    ]
];

// Credentials
$credentials = [
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
        'title' => 'We Know PE Cold',
        'description' => 'Exclusively private equity and M&A tech. We get your platforms and workflows inside out—from origination to exit.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
        'title' => 'Quick Wins',
        'description' => 'Most firms see real traction in 2-4 weeks. We start with automated diligence and pipeline dashboards, then build from there.'
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
        'title' => 'Fort Knox Security',
        'description' => 'Every integration hits institutional standards. Your CIMs, portfolio data, transactions—protected, always.'
    ]
];

// FAQ items
$faqs = [
    [
        'question' => 'You work with any CRM?',
        'answer' => 'Yep—DealCloud, Salesforce, Affinity, HubSpot, whatever you\'ve got. We make your current tools play nice, no platform bias.'
    ],
    [
        'question' => 'How fast do we see results?',
        'answer' => '2-4 weeks for most. Quick wins like automated workflows and dashboards hit first. Full transformation in 60-90 days.'
    ],
    [
        'question' => 'You gonna push new software?',
        'answer' => 'Only if we absolutely have to. 9 times out of 10, you\'re just underusing what you\'ve already paid for. We fix integrations first.'
    ],
    [
        'question' => 'Security taken care of?',
        'answer' => '100%. SOC 2 compliant, enterprise-grade. We work within your security setup—no shortcuts on sensitive data.'
    ],
    [
        'question' => 'What size firms?',
        'answer' => 'Boutique advisors to multi-billion funds. If you\'re running deals and tech\'s in the way, we can help.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-77VVQVBH64"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-77VVQVBH64');
</script>
    <link rel="icon" type="image/jpeg" href="attached_assets/Home_1761834398568.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($site_title); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background: #ffffff;
            padding-top: 80px;
        }
        
        /* Keyframe Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }
        
        /* Animation Classes */
        .animate-on-scroll {
            opacity: 0;
        }
        
        .animate-on-scroll.animated {
            animation-duration: 0.8s;
            animation-fill-mode: both;
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .fade-in-up {
            animation-name: fadeInUp;
        }
        
        .fade-in {
            animation-name: fadeIn;
        }
        
        .slide-in-left {
            animation-name: slideInLeft;
        }
        
        .slide-in-right {
            animation-name: slideInRight;
        }
        
        .scale-in {
            animation-name: scaleIn;
        }
        
        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #0A2E50;
            padding: 20px 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }
        
        .nav-logo-icon {
            background: white;
            padding: 8px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .nav-logo-icon:hover {
            transform: rotate(5deg) scale(1.05);
            box-shadow: 0 4px 12px rgba(135, 206, 235, 0.4);
        }
        
        .nav-logo-icon img {
            height: 45px;
            width: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        
        .nav-logo:hover .nav-logo-icon img {
            transform: rotate(-5deg);
        }
        
        .nav-logo-text {
            color: white;
            font-size: 20px;
            font-weight: 700;
        }
        
        .nav-logo-text .pe {
            color: #BF0A30;
        }
        
        .nav-menu {
            display: flex;
            gap: 32px;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }
        
        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: color 0.3s ease;
        }
        
        .nav-menu a:hover {
            color: #87CEEB;
        }
        
        .nav-cta {
            background: #87CEEB;
            color: #0A2E50;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        
        .nav-cta:hover {
            background: #6BB8D6;
            transform: translateY(-2px);
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 28px;
            cursor: pointer;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            background: linear-gradient(135deg, rgba(10, 46, 80, 0.85) 0%, rgba(10, 46, 80, 0.90) 100%), url('attached_assets/stock_images/professional_busines_418d8c09.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 100px 20px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(135, 206, 235, 0.1) 0%, transparent 60%);
            pointer-events: none;
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            position: relative;
        }
        
        .logo-icon-wrapper {
            background: white;
            padding: 16px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex-shrink: 0;
        }
        
        .logo img {
            height: 70px;
            width: auto;
            display: block;
        }
        
        .logo-text {
            text-align: left;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        .logo-main {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.5px;
            line-height: 1;
        }
        
        .logo-main .pe {
            color: #BF0A30;
        }
        
        .logo-main .tech {
            color: white;
        }
        
        .logo-main .partners {
            color: white;
        }
        
        .logo-tagline {
            font-size: 13px;
            font-weight: 600;
            color: #87CEEB;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .logo-subtitle {
            font-size: 11px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.7);
            letter-spacing: 0.3px;
            margin-top: 2px;
        }
        
        h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 24px;
            line-height: 1.2;
            position: relative;
        }
        
        .subtitle {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.95;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
            position: relative;
        }
        
        .cta-buttons {
            display: flex;
            flex-direction: row;
            gap: 20px;
            align-items: flex-start;
            justify-content: center;
            position: relative;
        }
        
        .cta-primary-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }
        
        .cta-subtitle {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }
        
        .btn {
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }
        
        .btn:hover::before {
            left: 100%;
        }
        
        .btn-primary {
            background: #BF0A30;
            color: white;
        }
        
        .btn-primary:hover {
            background: #9A0826;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 30px rgba(191, 10, 48, 0.4);
        }
        
        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
        }
        
        /* Stakes Section */
        .stakes-section {
            background: linear-gradient(to bottom, #fef2f2 0%, #ffffff 100%);
            padding: 80px 20px;
        }
        
        .stakes-intro {
            max-width: 800px;
            margin: 0 auto 48px;
            text-align: center;
        }
        
        .stakes-intro h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #0A2E50;
        }
        
        .stakes-intro p {
            font-size: 18px;
            color: #333133;
            line-height: 1.7;
        }
        
        .problem-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .problem-card {
            background: white;
            border-left: 4px solid #BF0A30;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .problem-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(191, 10, 48, 0.05) 0%, rgba(191, 10, 48, 0.02) 100%);
            border-radius: 0 8px 0 100%;
            transition: all 0.3s ease;
        }
        
        .problem-card:hover::before {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, rgba(191, 10, 48, 0.08) 0%, rgba(191, 10, 48, 0.03) 100%);
        }
        
        .problem-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 24px rgba(191, 10, 48, 0.15);
            border-left-width: 6px;
        }
        
        .problem-card .problem-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #BF0A30 0%, #8B0000 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            color: white;
            box-shadow: 0 4px 8px rgba(191, 10, 48, 0.2);
        }
        
        .problem-card .problem-icon svg {
            width: 24px;
            height: 24px;
            stroke: white;
        }
        
        .problem-card h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #BF0A30;
            position: relative;
            z-index: 1;
        }
        
        .problem-card p {
            color: #333133;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }
        
        /* Empathy Section */
        .empathy-section {
            padding: 80px 20px;
            background: white;
        }
        
        .empathy-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .empathy-content h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 24px;
            color: #0A2E50;
        }
        
        .empathy-content p {
            font-size: 18px;
            color: #333133;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        
        .empathy-content .highlight {
            font-weight: 600;
            color: #0A2E50;
        }
        
        /* Plan Section */
        .plan-section {
            padding: 80px 20px;
            background: #f8fafc;
        }
        
        .section-title {
            font-size: 36px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 20px;
            color: #0A2E50;
        }
        
        .section-subtitle {
            text-align: center;
            font-size: 18px;
            color: #333133;
            max-width: 700px;
            margin: 0 auto 48px;
            line-height: 1.7;
        }
        
        .plan-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 48px;
            margin-top: 48px;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .step {
            text-align: center;
            position: relative;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            padding: 40px 24px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            overflow: hidden;
        }
        
        .step::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #87CEEB 0%, #6BB8D6 50%, #87CEEB 100%);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
        }
        
        .step:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 40px rgba(135, 206, 235, 0.2);
            border-color: #87CEEB;
        }
        
        .step:hover .step-number {
            transform: scale(1.15) rotate(360deg);
            box-shadow: 0 8px 16px rgba(135, 206, 235, 0.4);
        }
        
        .step-number {
            width: 72px;
            height: 72px;
            background: linear-gradient(135deg, #87CEEB 0%, #6BB8D6 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 700;
            margin: 0 auto 24px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 6px 20px rgba(135, 206, 235, 0.3);
            position: relative;
        }
        
        .step-number::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, transparent 100%);
            border-radius: 50%;
            pointer-events: none;
        }
        
        .step h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #0A2E50;
        }
        
        .step p {
            color: #333133;
            line-height: 1.6;
        }
        
        /* Success Section */
        .success-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
        }
        
        .success-content {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .success-content h2 {
            font-size: 36px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 24px;
            color: #0A2E50;
        }
        
        .success-intro {
            text-align: center;
            font-size: 18px;
            color: #333133;
            margin-bottom: 48px;
            line-height: 1.7;
        }
        
        .success-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
        }
        
        .success-card {
            background: white;
            padding: 32px;
            border-radius: 12px;
            border-left: 4px solid #87CEEB;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .success-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(135, 206, 235, 0.03) 0%, transparent 70%);
            transition: all 0.5s ease;
        }
        
        .success-card:hover::before {
            top: -60%;
            right: -60%;
            background: radial-gradient(circle, rgba(135, 206, 235, 0.08) 0%, transparent 70%);
        }
        
        .success-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 24px rgba(135, 206, 235, 0.2);
            border-left-width: 6px;
        }
        
        .success-card:hover .success-icon {
            transform: scale(1.1);
            background: linear-gradient(135deg, #87CEEB 0%, #6BB8D6 100%);
        }
        
        .success-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, rgba(135, 206, 235, 0.2) 0%, rgba(135, 206, 235, 0.1) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
            box-shadow: 0 4px 12px rgba(135, 206, 235, 0.15);
        }
        
        .success-icon svg {
            width: 32px;
            height: 32px;
            stroke: #0A2E50;
        }
        
        .success-card h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #0A2E50;
            position: relative;
            z-index: 1;
        }
        
        .success-card p {
            color: #333133;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }
        
        /* Failure Section */
        .failure-section {
            padding: 60px 20px;
            background: #fef2f2;
            border-top: 2px solid #fecaca;
            border-bottom: 2px solid #fecaca;
        }
        
        .failure-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .failure-content h2 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #BF0A30;
        }
        
        .failure-content p {
            font-size: 18px;
            color: #333133;
            line-height: 1.7;
            margin-bottom: 16px;
        }
        
        /* Guide Section */
        .guide-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, #0A2E50 0%, #0A2E50 100%);
            color: white;
        }
        
        .guide-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        
        .guide-content h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 24px;
        }
        
        .guide-content p {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.95;
            line-height: 1.7;
        }
        
        .guide-credentials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 32px;
            margin-top: 48px;
        }
        
        .credential-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 32px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .credential-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(135, 206, 235, 0.1), transparent);
            transition: left 0.6s ease;
        }
        
        .credential-card:hover::before {
            left: 100%;
        }
        
        .credential-card:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(135, 206, 235, 0.5);
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 12px 24px rgba(135, 206, 235, 0.3);
        }
        
        .credential-card:hover .credential-icon {
            transform: scale(1.1);
            background: linear-gradient(135deg, rgba(135, 206, 235, 0.3) 0%, rgba(135, 206, 235, 0.2) 100%);
        }
        
        .credential-icon {
            width: 72px;
            height: 72px;
            background: rgba(135, 206, 235, 0.15);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
            box-shadow: 0 4px 16px rgba(135, 206, 235, 0.2);
        }
        
        .credential-icon svg {
            width: 36px;
            height: 36px;
            stroke: white;
        }
        
        .credential-card h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }
        
        .credential-card p {
            font-size: 16px;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 20px;
            background: white;
            text-align: center;
        }
        
        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .cta-section h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #0A2E50;
        }
        
        .cta-section p {
            font-size: 18px;
            margin-bottom: 32px;
            color: #333133;
            line-height: 1.7;
        }
        
        .cta-box {
            background: linear-gradient(135deg, #87CEEB 0%, #6BB8D6 100%);
            padding: 48px;
            border-radius: 16px;
            margin-top: 40px;
            box-shadow: 0 20px 40px rgba(135, 206, 235, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .cta-box:hover {
            transform: scale(1.02);
            box-shadow: 0 30px 60px rgba(135, 206, 235, 0.4);
        }
        
        .cta-box h3 {
            font-size: 28px;
            font-weight: 700;
            color: #0A2E50;
            margin-bottom: 16px;
        }
        
        .cta-box p {
            color: #0A2E50;
            margin-bottom: 24px;
        }
        
        .btn-cta {
            background: #BF0A30;
            color: white;
            font-size: 18px;
            font-weight: 700;
            padding: 18px 40px;
        }
        
        .btn-cta:hover {
            background: #9A0826;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(191, 10, 48, 0.4);
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 80px 20px;
            background: #f8fafc;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 48px auto 0;
        }
        
        .faq-item {
            background: white;
            padding: 24px;
            margin-bottom: 16px;
            border-radius: 8px;
            border-left: 4px solid #87CEEB;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }
        
        .faq-item:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 16px rgba(135, 206, 235, 0.15);
            border-left-width: 6px;
        }
        
        .faq-item h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #0A2E50;
        }
        
        .faq-item p {
            color: #333133;
            line-height: 1.6;
        }
        
        /* Image Sections - PDF Style Two-Column Layout */
        .image-section {
            padding: 60px 20px;
            background: white;
        }
        
        .image-section.alt {
            background: #f8fafc;
        }
        
        .image-section.urgency {
            background: linear-gradient(135deg, #f8fafc 0%, #eff6ff 100%);
            border-left: 4px solid #BF0A30;
        }
        
        .cta-grid {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
            display: grid;
            grid-template-columns: 380px 1fr;
            gap: 40px;
            align-items: flex-start;
        }
        
        .image-section-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: flex-start;
        }
        
        .image-section-text {
            padding: 0;
        }
        
        .image-section-text h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 24px;
            color: #0A2E50;
            line-height: 1.2;
        }
        
        .image-section-text p {
            font-size: 18px;
            line-height: 1.7;
            color: #333133;
            margin-bottom: 16px;
        }
        
        .image-section-text .highlight-box {
            background: #fef2f2;
            border-left: 4px solid #BF0A30;
            padding: 20px;
            margin-top: 24px;
            border-radius: 8px;
        }
        
        .image-section-text .highlight-box p {
            margin: 0;
            color: #991b1b;
            font-weight: 600;
        }
        
        .image-section-image {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-height: 450px;
        }
        
        .image-section-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 0.4s ease;
        }
        
        .image-section:hover .image-section-image img {
            transform: scale(1.05);
        }
        
        .image-section-list {
            list-style: none;
            margin-top: 24px;
        }
        
        .image-section-list li {
            padding: 12px 0 12px 32px;
            position: relative;
            font-size: 16px;
            line-height: 1.6;
        }
        
        .image-section-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #BF0A30;
            font-weight: bold;
            font-size: 18px;
        }
        
        /* Footer */
        footer {
            background: #0A2E50;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        
        footer p {
            opacity: 0.8;
        }
        
        @media (max-width: 768px) {
            body {
                padding-top: 0;
            }
            
            nav {
                padding: 0;
                background: transparent;
                box-shadow: none;
                position: absolute;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 1000;
            }
            
            nav .container {
                justify-content: flex-end;
                padding: 0;
            }
            
            .nav-logo {
                display: none;
            }
            
            .nav-logo-text {
                display: none;
            }
            
            .nav-logo-icon {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: block;
                position: fixed;
                top: 10px;
                right: 10px;
                background: #0A2E50;
                color: white;
                width: 44px;
                height: 44px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                cursor: pointer;
                z-index: 1001;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
                border: 2px solid rgba(255, 255, 255, 0.1);
            }
            
            .nav-menu {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #0A2E50;
                flex-direction: column;
                padding: 80px 20px 20px;
                gap: 20px;
                align-items: stretch;
                transition: transform 0.3s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                overflow-y: auto;
                transform: translateX(-100%);
            }
            
            .nav-menu.active {
                transform: translateX(0);
            }
            
            .nav-menu a {
                padding: 12px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            .nav-cta {
                text-align: center;
                border-bottom: none;
            }
            
            header {
                padding: 100px 20px 60px;
                margin-top: 0;
                background-attachment: scroll;
            }
            
            h1 {
                font-size: 36px;
            }
            
            .subtitle {
                font-size: 18px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            
            .btn {
                width: 100%;
            }
            
            .problem-grid,
            .plan-steps,
            .success-grid,
            .guide-credentials {
                grid-template-columns: 1fr;
            }
            
            .image-section-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .cta-grid {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 0 20px;
            }
            
            .cta-grid h2 {
                font-size: 28px !important;
            }
            
            .cta-grid p {
                font-size: 16px !important;
            }
            
            .image-section-text h2 {
                font-size: 28px;
            }
            
            .image-section-text p {
                font-size: 16px;
            }
            
            .logo {
                flex-direction: column;
                gap: 12px;
            }
            
            .logo img {
                height: 60px;
            }
            
            .logo-text {
                text-align: center;
            }
            
            .logo-main {
                font-size: 24px;
            }
            
            .logo-tagline {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="#home" class="nav-logo">
                <div class="nav-logo-icon">
                    <img src="<?php echo $logo_svg; ?>" alt="<?php echo htmlspecialchars($company_name); ?>">
                </div>
                <span class="nav-logo-text"><span class="pe">PE</span> TECH PARTNERS</span>
            </a>
            <button class="mobile-menu-toggle" onclick="toggleMenu()">☰</button>
            <ul class="nav-menu" id="navMenu">
                <?php foreach ($nav_items as $item): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                           class="<?php echo isset($item['is_cta']) && $item['is_cta'] ? 'nav-cta' : ''; ?>">
                            <?php echo htmlspecialchars($item['text']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <header id="home">
        <div class="container">
            <div class="logo">
                <div class="logo-icon-wrapper">
                    <img src="<?php echo $logo_svg; ?>" alt="<?php echo htmlspecialchars($company_name); ?> Logo">
                </div>
            </div>
            <h1>Close More Deals with Tech That Actually Works</h1>
            <p class="subtitle">Strategic Solutions for PE &amp; M&amp;A Firms. You've got the tools. We make 'em play nice together so your team can focus on sourcing, analyzing, and closing deals, not fighting software.</p>
            <div class="cta-buttons">
                <div class="cta-primary-group">
                    <a href="schedule.php" class="btn btn-primary">Secure a Strategic Debrief</a>
                    <p class="cta-subtitle">No cost. No pressure. High clarity.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Old Tech Wastes Time Section -->
    <section class="image-section" id="problems">
        <div class="image-section-content">
            <div class="image-section-text">
                <h2>Old Tech Wastes Time. Smart Firms Don't.</h2>
                <p>Look, you've dropped serious cash on the best platforms out there. But if your analysts are bouncing between DealCloud, Excel, PitchBook, and email just to get comps for an IC memo, you're bleeding time. And time is deals.</p>
            </div>
            <div class="image-section-image">
                <img src="attached_assets/image_1765825165573.png" alt="Analyst working with multi-monitor trading desk">
            </div>
        </div>
    </section>

    <section class="stakes-section">
        <div class="container">
            <div class="problem-grid">
                <?php foreach ($problems as $problem): ?>
                    <div class="problem-card animate-on-scroll fade-in-up">
                        <div class="problem-icon"><?php echo $problem['icon']; ?></div>
                        <h3><?php echo htmlspecialchars($problem['title']); ?></h3>
                        <p><?php echo htmlspecialchars($problem['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- You Deserve Better Section with Image -->
    <section class="image-section alt">
        <div class="image-section-content">
            <div class="image-section-text">
                <h2>You Deserve Better</h2>
                <p>You built a killer firm. Hired sharp people. Invested in premium tech. The tools aren't broken—they're just not talking to each other.</p>
                <p>No one's got time to glue this stuff together properly. Meanwhile, the funds that figure it out first? They're signing platforms quicker, nailing IOI-to-PSA in record time, and owning relationships with the best intermediaries.</p>
                <p><strong>Time to join them.</strong></p>
            </div>
            <div class="image-section-image">
                <img src="https://cdn.gamma.app/fn0vcrcds7u127c/generated-images/C4pJ8WiMZ9oDJqi7plok1.png" alt="Team collaborating in office">
            </div>
        </div>
    </section>

    <!-- Here's Exactly How You Fix It Section with Image -->
    <section class="image-section" id="solutions">
        <div class="image-section-content">
            <div class="image-section-text">
                <h2>Here's How to Fix It</h2>
                <p>Connect your deal systems, automate the busywork, and streamline everything from first outreach to signed term sheet—on your terms.</p>
                <p>Looking specifically at AI? See our <a href="ai-consulting-private-equity-ma-advisors-northeast.php" style="color: #BF0A30; font-weight: 700;">AI consulting for PE and M&amp;A advisory firms in the Northeast</a>.</p>
                <ul class="image-section-list">
                    <li><strong>01 Assess:</strong> Map the entire deal process—from origination to exit—to uncover where time and efficiency are lost across systems, workflows, and teams.</li>
                    <li><strong>02 Align:</strong> Integrate CRMs, data rooms, cap tables, and portfolio tools—automating CIMs, IC memos, diligence tracking, VDR downloads, and post-close reporting.</li>
                    <li><strong>03 Amplify:</strong> With real-time dashboards for pipeline, velocity, and portfolio health, the team gains speed, visibility, and a competitive edge—every step of the way.</li>
                </ul>
            </div>
            <div class="image-section-image">
                <img src="attached_assets/image_1761590822944.png" alt="Technology and data security">
            </div>
        </div>
    </section>

    <section class="success-section" id="outcomes">
        <div class="container">
            <div class="success-content">
                <h2 class="animate-on-scroll fade-in-up">What Winning Looks Like</h2>
                <p class="success-intro">When your tech actually works together, deals flow smoother. Your team gets faster. Data gets clear. And yeah, you win more.</p>
                
                <div class="success-grid">
                    <?php foreach ($outcomes as $outcome): ?>
                        <div class="success-card animate-on-scroll fade-in-up">
                            <div class="success-icon"><?php echo $outcome['icon']; ?></div>
                            <h3><?php echo htmlspecialchars($outcome['title']); ?></h3>
                            <p><?php echo htmlspecialchars($outcome['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- But If You Wait... Urgency Section -->
    <section class="image-section urgency">
        <div class="image-section-content">
            <div class="image-section-image">
                <img src="attached_assets/image_1761590928600.png" alt="Dystopian office environment - frustrated workers">
            </div>
            <div class="image-section-text">
                <h2>But If You Wait...</h2>
                <p>Your competitors won't. They'll slam through NDA-to-exclusivity. They'll grab bolt-ons you miss. They'll be the sponsor intermediaries actually want to send deals to.</p>
                <p>Your team? Still frustrated as hell. Top associates jump to better-run shops. Partners make calls with half-baked comps and stale pipeline views.</p>
                <div class="highlight-box">
                    <p>⚠️ Every quarter you delay = deals lost, bolt-ons missed, and faster funds eating your lunch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ready to Make Your Tech a Weapon CTA -->
    <section class="image-section cta-section" style="background: #f8fafc; padding: 80px 0;">
        <div class="container">
            <div class="cta-grid">
                <div class="animate-on-scroll scale-in">
                    <img src="attached_assets/image_1761591065504.png" alt="Team collaboration" style="border-radius: 8px; width: 100%;">
                </div>
                <div>
                    <h2 style="color: #0A2E50; font-size: 32px; margin-bottom: 24px;">Ready to Make Your Tech a Weapon?</h2>
                    <p style="font-size: 18px; line-height: 1.6; margin-bottom: 16px;">Takes 30 minutes. We'll look at what you've got, show you quick fixes, and map the fastest path to turning tech into deal acceleration.</p>
                    <p style="font-size: 18px; font-weight: 600; color: #0A2E50; margin: 24px 0 16px;">Get Your Free Alignment Assessment</p>
                    <p style="font-size: 16px; line-height: 1.6; margin-bottom: 24px;">No sales BS. Just straight talk on where your setup's costing you deals—and how to crush from first call to signed term sheet.</p>
                    <div style="display: flex; gap: 16px; margin-top: 24px; flex-wrap: wrap;">
                        <a href="schedule.php" class="btn btn-primary">Secure a Strategic Debrief</a>
                        <a href="process.php" class="btn" style="background: white; color: #0A2E50; border: 2px solid rgba(10, 46, 80, 0.3); padding: 16px 32px; text-decoration: none; border-radius: 6px; font-weight: 600; display: inline-block; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">Open Classified Tech Brief</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="guide-section">
        <div class="container">
            <div class="guide-content">
                <h2 class="animate-on-scroll fade-in-up">Why Us?</h2>
                <p>We've spent years making PE and M&A tech actually work. We're not general IT consultants. We live and breathe DealCloud, Affinity, PitchBook, VDRs, and how deals really flow from teaser to close.</p>
                
                <div class="guide-credentials">
                    <?php foreach ($credentials as $credential): ?>
                        <div class="credential-card animate-on-scroll slide-in-right">
                            <div class="credential-icon"><?php echo $credential['icon']; ?></div>
                            <h3><?php echo htmlspecialchars($credential['title']); ?></h3>
                            <p><?php echo htmlspecialchars($credential['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-section" id="faq">
        <div class="container">
            <h2 class="section-title animate-on-scroll fade-in-up">What You're Probably Wondering</h2>
            <div class="faq-container">
                <?php foreach ($faqs as $faq): ?>
                    <div class="faq-item animate-on-scroll slide-in-left">
                        <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
                        <p><?php echo htmlspecialchars($faq['answer']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
            <div>
                <p style="margin-bottom: 12px;"><strong><?php echo htmlspecialchars($company_name); ?></strong></p>
                <p style="margin-bottom: 8px;">2125 Albany Post Rd Suite 106<br>Montrose, NY 10548</p>
                <p style="margin-bottom: 12px;">Phone: 917-715-7100</p>
                <p>&copy; <?php echo $year; ?> <?php echo htmlspecialchars($company_name); ?>. All rights reserved.</p>
            </div>
            <div style="text-align: right;">
                <p style="margin-bottom: 8px;"><a href="terms.php" style="color: #87CEEB; text-decoration: none;">Terms of Service</a></p>
                <p style="margin-bottom: 8px;"><a href="privacy.php" style="color: #87CEEB; text-decoration: none;">Privacy Policy</a></p>
                <p><a href="schedule.php" style="color: #87CEEB; text-decoration: none;">Contact Us</a></p>
            </div>
        </div>
    </footer>
    
    <script>
        function toggleMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('active');
        }
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navMenu').classList.remove('active');
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80; // Account for fixed nav height
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Scroll-triggered animations
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const animateOnScroll = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        animateOnScroll.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            // Observe all elements with animate-on-scroll class
            document.querySelectorAll('.animate-on-scroll').forEach((el, index) => {
                // Add staggered delay for elements in the same section
                const section = el.closest('section');
                const siblingsInSection = section ? Array.from(section.querySelectorAll('.animate-on-scroll')) : [];
                const indexInSection = siblingsInSection.indexOf(el);
                
                if (indexInSection >= 0) {
                    el.style.animationDelay = `${indexInSection * 0.1}s`;
                }
                
                animateOnScroll.observe(el);
            });
        });
    </script>
</body>
</html>
