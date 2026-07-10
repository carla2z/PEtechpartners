<?php
$logo_src = 'attached_assets/Home_1761834398568.png';
$year = date('Y');
$nav_items = [
    ['href' => 'index.php#problems', 'text' => 'Challenges'],
    ['href' => 'index.php#solutions', 'text' => 'Solutions'],
    ['href' => 'ai-consulting-private-equity-ma-advisors-northeast.php', 'text' => 'AI Consulting'],
    ['href' => 'process.php', 'text' => 'Our Process'],
    ['href' => 'blogs.php', 'text' => 'Blog'],
    ['href' => 'tools.php', 'text' => 'Free Tools'],
    ['href' => 'schedule.php', 'text' => 'Secure a Strategic Debrief'],
];

$service_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'AI Consulting for Private Equity and M&A Advisory Firms in the Northeast',
    'serviceType' => 'AI consulting, AI workflow automation, AI readiness assessment, and AI governance for deal teams',
    'provider' => [
        '@type' => 'LocalBusiness',
        'name' => 'PE Tech Partners',
        'url' => 'https://petechpartners.com/',
        'telephone' => '+1-917-715-7100',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '2125 Albany Post Rd Suite 106',
            'addressLocality' => 'Montrose',
            'addressRegion' => 'NY',
            'postalCode' => '10548',
            'addressCountry' => 'US',
        ],
        'areaServed' => [
            ['@type' => 'AdministrativeArea', 'name' => 'New York'],
            ['@type' => 'AdministrativeArea', 'name' => 'Connecticut'],
            ['@type' => 'AdministrativeArea', 'name' => 'Massachusetts'],
            ['@type' => 'AdministrativeArea', 'name' => 'New Jersey'],
            ['@type' => 'AdministrativeArea', 'name' => 'Pennsylvania'],
            ['@type' => 'AdministrativeArea', 'name' => 'Northeastern United States'],
        ],
    ],
    'areaServed' => 'Northeastern United States',
    'audience' => [
        '@type' => 'BusinessAudience',
        'audienceType' => 'Private equity firms, M&A advisory firms, investment banks, independent sponsors, and portfolio operations teams',
    ],
    'description' => 'PE Tech Partners helps private equity and M&A advisory firms in the Northeast deploy practical AI systems for deal sourcing, diligence, CIM review, IC memo production, portfolio reporting, and AI governance.',
    'url' => 'https://petechpartners.com/ai-consulting-private-equity-ma-advisors-northeast.php',
];

$faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'Do you provide AI consulting specifically for private equity and M&A advisory firms?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes. PE Tech Partners focuses on AI consulting and technology alignment for private equity firms, M&A advisory teams, deal teams, operating partners, and portfolio companies.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'What Northeast markets do you serve?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We serve firms across New York, Connecticut, Boston and Massachusetts, New Jersey, Philadelphia, and the broader Northeast corridor.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'What AI use cases do you implement for deal teams?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Common use cases include CIM and teaser extraction, VDR document triage, CRM enrichment, diligence request tracking, IC memo support, portfolio reporting, analyst workflow automation, and AI governance.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'Do you replace our existing deal software?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Usually no. We start by connecting and improving the tools already in place, including CRM, VDR, data providers, spreadsheets, document systems, and portfolio reporting workflows.',
            ],
        ],
    ],
];

$video_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'VideoObject',
    'name' => 'AI Transforms Private Equity and M&A',
    'description' => 'A short PE Tech Partners overview of how AI can help private equity and M&A advisory teams improve deal workflows, diligence, VDR review, IC memo support, and portfolio reporting.',
    'thumbnailUrl' => [
        'https://i.ytimg.com/vi/Ln4YvPCIHCw/hqdefault.jpg',
    ],
    'embedUrl' => 'https://www.youtube-nocookie.com/embed/Ln4YvPCIHCw',
    'url' => 'https://youtu.be/Ln4YvPCIHCw',
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'PE Tech Partners',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => 'https://petechpartners.com/attached_assets/Home_1761834398568.png',
        ],
    ],
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

    <link rel="icon" type="image/jpeg" href="<?= htmlspecialchars($logo_src) ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Consulting for PE &amp; M&amp;A Advisory Firms | Northeast | PE Tech Partners</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">

    <meta name="description" content="AI consulting for private equity and M&A advisory firms in New York, Connecticut, Boston, New Jersey, Philadelphia, and the Northeast. Practical AI for diligence, CIM review, VDR workflows, IC memos, and portfolio reporting.">
    <link rel="canonical" href="https://petechpartners.com/ai-consulting-private-equity-ma-advisors-northeast.php">
    <meta property="og:title" content="AI Consulting for PE &amp; M&amp;A Advisory Firms in the Northeast">
    <meta property="og:description" content="Practical AI consulting for private equity and M&A advisory teams across the Northeast. Build faster deal workflows without adding operational risk.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://petechpartners.com/ai-consulting-private-equity-ma-advisors-northeast.php">
    <meta property="og:image" content="https://petechpartners.com/attached_assets/Home_1761834398568.png">
    <meta name="twitter:card" content="summary_large_image">
    <script type="application/ld+json">
    <?= json_encode($service_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
    <script type="application/ld+json">
    <?= json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
    <script type="application/ld+json">
    <?= json_encode($video_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
    <style>
        :root {
            --navy: #0A2E50;
            --navy-dark: #071B31;
            --navy-light: #123D66;
            --red: #BF0A30;
            --red-dark: #9F0828;
            --sky: #87CEEB;
            --gold: #D4A843;
            --ink: #132238;
            --muted: #5F6F85;
            --border: #DCE6F1;
            --soft: #F4F7FB;
            --white: #FFFFFF;
            --shadow: 0 24px 60px rgba(10, 46, 80, 0.14);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
            color: var(--ink);
            background: var(--soft);
            line-height: 1.6;
        }

        a {
            color: inherit;
        }

        .container {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        header.site-header {
            position: sticky;
            top: 0;
            z-index: 20;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(10, 46, 80, 0.96);
            backdrop-filter: blur(14px);
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            min-height: 78px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 240px;
            color: var(--white);
            text-decoration: none;
            font-weight: 800;
        }

        .logo img {
            width: 42px;
            height: 42px;
            border-radius: 8px;
            background: var(--white);
            padding: 6px;
        }

        .logo .pe {
            color: var(--red);
        }

        .logo span {
            display: block;
            font-size: 20px;
            line-height: 1;
        }

        .logo small {
            display: block;
            margin-top: 5px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
            list-style: none;
        }

        .nav-links a {
            color: var(--white);
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        .nav-links a:hover {
            color: var(--sky);
        }

        .nav-cta {
            padding: 12px 16px;
            border-radius: 8px;
            background: var(--red);
        }

        .nav-cta:hover {
            color: var(--white) !important;
            background: var(--red-dark);
        }

        .hamburger {
            display: none;
            width: 46px;
            height: 46px;
            border: 0;
            border-radius: 8px;
            color: var(--navy);
            background: var(--white);
            font-size: 24px;
            cursor: pointer;
        }

        .hero {
            position: relative;
            overflow: hidden;
            color: var(--white);
            background:
                linear-gradient(135deg, rgba(7, 27, 49, 0.98), rgba(10, 46, 80, 0.95) 58%, rgba(18, 61, 102, 0.92)),
                radial-gradient(circle at 82% 18%, rgba(135, 206, 235, 0.28), transparent 30%);
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
            background-size: 44px 44px;
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(340px, 0.72fr);
            gap: 56px;
            align-items: center;
            padding: 88px 0 78px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--sky);
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 30px;
            height: 2px;
            background: currentColor;
        }

        h1 {
            max-width: 820px;
            margin-top: 18px;
            font-size: clamp(42px, 5.8vw, 72px);
            line-height: 1.03;
            letter-spacing: 0;
        }

        .hero-lede {
            max-width: 780px;
            margin-top: 24px;
            color: rgba(255, 255, 255, 0.82);
            font-size: 20px;
            line-height: 1.7;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 32px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 52px;
            padding: 14px 24px;
            border: 2px solid transparent;
            border-radius: 8px;
            font-weight: 800;
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        }

        .btn-primary {
            color: var(--white);
            background: var(--red);
            box-shadow: 0 18px 36px rgba(191, 10, 48, 0.26);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            background: var(--red-dark);
        }

        .btn-secondary {
            color: var(--white);
            border-color: rgba(255, 255, 255, 0.36);
            background: rgba(255, 255, 255, 0.08);
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            border-color: var(--sky);
            background: rgba(135, 206, 235, 0.14);
        }

        .market-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 30px;
        }

        .market-row span {
            padding: 9px 12px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 999px;
            color: rgba(255, 255, 255, 0.78);
            background: rgba(255, 255, 255, 0.08);
            font-size: 13px;
            font-weight: 800;
        }

        .ai-panel {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 18px;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.14), rgba(255, 255, 255, 0.08)),
                rgba(7, 20, 40, 0.82);
            box-shadow: 0 34px 80px rgba(0, 0, 0, 0.34);
            backdrop-filter: blur(18px);
        }

        .ai-panel-top {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }

        .ai-panel-top strong {
            display: block;
            font-size: 15px;
        }

        .ai-panel-top span {
            display: block;
            margin-top: 4px;
            color: rgba(255, 255, 255, 0.62);
            font-size: 12px;
        }

        .status-pill {
            align-self: flex-start;
            padding: 8px 10px;
            border-radius: 999px;
            color: var(--navy-dark);
            background: var(--sky);
            font-size: 11px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .workflow-list {
            padding: 22px 20px 8px;
        }

        .workflow-item {
            display: grid;
            grid-template-columns: 108px 1fr 48px;
            gap: 12px;
            align-items: center;
            margin-bottom: 18px;
            color: rgba(255, 255, 255, 0.78);
            font-size: 12px;
            font-weight: 800;
        }

        .track {
            height: 8px;
            overflow: hidden;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.13);
        }

        .fill {
            display: block;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, var(--sky), var(--red));
        }

        .panel-metrics {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            margin-top: 12px;
            background: rgba(255, 255, 255, 0.12);
        }

        .panel-metrics div {
            padding: 20px 15px;
            background: rgba(7, 20, 40, 0.58);
        }

        .panel-metrics strong {
            display: block;
            font-size: 24px;
            line-height: 1;
            font-variant-numeric: tabular-nums;
        }

        .panel-metrics span {
            display: block;
            margin-top: 8px;
            color: rgba(255, 255, 255, 0.62);
            font-size: 11px;
            line-height: 1.35;
        }

        section {
            padding: 82px 0;
        }

        .section-heading {
            max-width: 780px;
            margin-bottom: 34px;
        }

        .section-heading.center {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .section-heading h2 {
            margin-top: 12px;
            color: var(--navy);
            font-size: clamp(30px, 4vw, 48px);
            line-height: 1.12;
            letter-spacing: 0;
        }

        .section-heading p {
            margin-top: 16px;
            color: var(--muted);
            font-size: 18px;
            line-height: 1.75;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .card {
            position: relative;
            overflow: hidden;
            padding: 28px;
            border: 1px solid rgba(10, 46, 80, 0.1);
            border-radius: 14px;
            background: var(--white);
            box-shadow: 0 16px 38px rgba(10, 46, 80, 0.08);
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red), var(--sky));
        }

        .card h3 {
            color: var(--navy);
            font-size: 22px;
            line-height: 1.25;
        }

        .card p {
            margin-top: 12px;
            color: #43536A;
            font-size: 16px;
            line-height: 1.7;
        }

        .card ul {
            margin: 18px 0 0 18px;
            color: #43536A;
        }

        .card li {
            margin-bottom: 10px;
        }

        .band {
            background: var(--white);
        }

        .proof-band {
            padding: 42px 0;
            background: var(--navy-dark);
        }

        .proof-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 1px;
            overflow: hidden;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.12);
        }

        .proof-item {
            padding: 24px;
            color: var(--white);
            background: rgba(255, 255, 255, 0.06);
        }

        .proof-item strong {
            display: block;
            font-size: 28px;
            font-variant-numeric: tabular-nums;
        }

        .proof-item span {
            display: block;
            margin-top: 8px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 13px;
            line-height: 1.45;
        }

        .video-band {
            background:
                radial-gradient(circle at 12% 18%, rgba(135, 206, 235, 0.2), transparent 28%),
                linear-gradient(180deg, var(--white), #F4F7FB);
        }

        .video-feature {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(300px, 420px);
            gap: 48px;
            align-items: center;
        }

        .video-copy h2 {
            margin-top: 12px;
            color: var(--navy);
            font-size: clamp(32px, 4vw, 52px);
            line-height: 1.1;
            letter-spacing: 0;
        }

        .video-copy p {
            max-width: 720px;
            margin-top: 18px;
            color: var(--muted);
            font-size: 18px;
            line-height: 1.75;
        }

        .video-points {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin: 28px 0 0;
            list-style: none;
        }

        .video-points li {
            padding: 14px 16px;
            border: 1px solid rgba(10, 46, 80, 0.12);
            border-radius: 12px;
            color: var(--navy);
            background: rgba(255, 255, 255, 0.74);
            font-size: 14px;
            font-weight: 800;
            line-height: 1.35;
        }

        .video-copy .btn-secondary {
            border-color: rgba(10, 46, 80, 0.18);
            color: var(--navy);
            background: var(--white);
            box-shadow: 0 12px 30px rgba(10, 46, 80, 0.08);
        }

        .video-copy .btn-secondary:hover {
            border-color: rgba(10, 46, 80, 0.32);
            color: var(--navy-dark);
            background: #F8FAFD;
        }

        .video-frame-wrap {
            width: min(100%, 420px);
            justify-self: center;
        }

        .video-frame {
            position: relative;
            overflow: hidden;
            aspect-ratio: 9 / 16;
            border: 8px solid var(--navy-dark);
            border-radius: 24px;
            background: var(--navy-dark);
            box-shadow: 0 28px 70px rgba(10, 46, 80, 0.26);
        }

        .video-frame iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-caption {
            margin-top: 14px;
            color: #43536A;
            font-size: 14px;
            text-align: center;
        }

        .split {
            display: grid;
            grid-template-columns: minmax(0, 0.85fr) minmax(0, 1fr);
            gap: 44px;
            align-items: start;
        }

        .process-list {
            display: grid;
            gap: 16px;
        }

        .process-step {
            display: grid;
            grid-template-columns: 54px 1fr;
            gap: 16px;
            padding: 24px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: var(--white);
            box-shadow: 0 14px 34px rgba(10, 46, 80, 0.06);
        }

        .step-number {
            display: grid;
            place-items: center;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            color: var(--white);
            background: var(--red);
            font-weight: 900;
        }

        .process-step h3 {
            color: var(--navy);
            font-size: 20px;
        }

        .process-step p {
            margin-top: 8px;
            color: var(--muted);
        }

        .region-card {
            padding: 30px;
            border-radius: 18px;
            color: var(--white);
            background:
                radial-gradient(circle at 82% 16%, rgba(135, 206, 235, 0.25), transparent 30%),
                linear-gradient(135deg, var(--navy-dark), var(--navy));
            box-shadow: var(--shadow);
        }

        .region-card h3 {
            font-size: 28px;
            line-height: 1.2;
        }

        .region-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            margin-top: 22px;
        }

        .region-list span {
            padding: 12px;
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.08);
            font-size: 13px;
            font-weight: 800;
        }

        .faq-grid {
            display: grid;
            gap: 14px;
        }

        .faq-item {
            padding: 24px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: var(--white);
        }

        .faq-item h3 {
            color: var(--navy);
            font-size: 19px;
        }

        .faq-item p {
            margin-top: 8px;
            color: var(--muted);
        }

        .cta {
            position: relative;
            overflow: hidden;
            color: var(--white);
            background:
                linear-gradient(135deg, rgba(7, 27, 49, 0.98), rgba(10, 46, 80, 0.96)),
                radial-gradient(circle at 22% 18%, rgba(135, 206, 235, 0.22), transparent 30%);
        }

        .cta .container {
            position: relative;
            text-align: center;
        }

        .cta h2 {
            max-width: 780px;
            margin: 0 auto;
            font-size: clamp(32px, 4vw, 50px);
            line-height: 1.12;
        }

        .cta p {
            max-width: 720px;
            margin: 18px auto 0;
            color: rgba(255, 255, 255, 0.78);
            font-size: 18px;
        }

        footer {
            padding: 42px 0;
            color: var(--white);
            background: var(--navy-dark);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 32px;
        }

        footer a {
            color: var(--sky);
            text-decoration: none;
        }

        @media (max-width: 1040px) {
            .nav-links {
                display: none;
            }

            .nav-links.is-open {
                position: absolute;
                top: 78px;
                left: 16px;
                right: 16px;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                padding: 12px;
                border: 1px solid rgba(255, 255, 255, 0.12);
                border-radius: 12px;
                background: var(--navy-dark);
                box-shadow: 0 24px 60px rgba(0, 0, 0, 0.26);
            }

            .nav-links.is-open a {
                display: block;
                padding: 12px;
                border-radius: 8px;
            }

            .nav-links.is-open a:hover {
                background: rgba(255, 255, 255, 0.08);
            }

            .hamburger {
                display: block;
            }

            .hero-inner,
            .split,
            .video-feature {
                grid-template-columns: 1fr;
            }

            .ai-panel {
                max-width: 620px;
            }

            .grid-3,
            .proof-grid,
            .video-points {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 720px) {
            .container {
                width: min(100% - 32px, 1180px);
            }

            .nav {
                min-height: 92px;
            }

            .logo {
                min-width: 0;
            }

            .logo img {
                width: 48px;
                height: 48px;
            }

            .logo span {
                font-size: 24px;
                line-height: 1.05;
            }

            .logo small {
                display: none;
            }

            .hamburger {
                width: 52px;
                height: 52px;
            }

            .hero-inner {
                padding: 46px 0 42px;
            }

            h1 {
                font-size: clamp(32px, 9vw, 38px);
                line-height: 1.08;
            }

            .hero-lede {
                margin-top: 18px;
                font-size: 16px;
                line-height: 1.58;
            }

            .hero-actions {
                flex-direction: column;
                margin-top: 24px;
            }

            .btn {
                min-height: 48px;
                padding: 12px 18px;
            }

            .ai-panel {
                display: none;
            }

            .market-row {
                display: none;
            }

            section {
                padding: 62px 0;
            }

            .grid-3,
            .proof-grid,
            .video-points,
            .region-list,
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .video-frame-wrap {
                width: min(100%, 340px);
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <a href="index.php" class="logo" aria-label="PE Tech Partners home">
                <img src="<?= htmlspecialchars($logo_src) ?>" alt="PE Tech Partners">
                <div>
                    <span><span class="pe">PE</span> TECH PARTNERS</span>
                    <small>Strategic solutions for PE &amp; M&amp;A firms</small>
                </div>
            </a>
            <ul class="nav-links">
                <?php foreach ($nav_items as $item): ?>
                    <li>
                        <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $item['href'] === 'schedule.php' ? 'nav-cta' : '' ?>">
                            <?= htmlspecialchars($item['text']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <button class="hamburger" type="button" aria-label="Open navigation" onclick="document.querySelector('.nav-links').classList.toggle('is-open')">☰</button>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-inner">
                <div>
                    <span class="eyebrow">AI consultancy for PE and M&amp;A advisories</span>
                    <h1>AI Consulting for Private Equity and M&amp;A Advisory Firms in the Northeast</h1>
                    <p class="hero-lede">PE Tech Partners helps deal teams turn AI into controlled execution leverage: faster CIM review, cleaner VDR workflows, sharper diligence, faster IC memo production, and better portfolio reporting without adding governance risk.</p>
                    <div class="hero-actions">
                        <a href="schedule.php" class="btn btn-primary">Secure a Strategic Debrief</a>
                        <a href="tools.php" class="btn btn-secondary">Try the AI Firepower Estimator</a>
                    </div>
                    <div class="market-row" aria-label="Northeast markets served">
                        <span>New York</span>
                        <span>Connecticut</span>
                        <span>Boston</span>
                        <span>New Jersey</span>
                        <span>Philadelphia</span>
                        <span>Northeast corridor</span>
                    </div>
                </div>
                <div class="ai-panel" role="img" aria-label="AI deal workflow readiness dashboard">
                    <div class="ai-panel-top">
                        <div>
                            <strong>AI Deal Workflow Readiness</strong>
                            <span>Diligence, advisory, and portfolio operations</span>
                        </div>
                        <span class="status-pill">Mapped</span>
                    </div>
                    <div class="workflow-list">
                        <div class="workflow-item">
                            <span>CIM review</span>
                            <span class="track"><span class="fill" style="width: 86%;"></span></span>
                            <span>86%</span>
                        </div>
                        <div class="workflow-item">
                            <span>VDR triage</span>
                            <span class="track"><span class="fill" style="width: 74%;"></span></span>
                            <span>74%</span>
                        </div>
                        <div class="workflow-item">
                            <span>IC memo support</span>
                            <span class="track"><span class="fill" style="width: 69%;"></span></span>
                            <span>69%</span>
                        </div>
                    </div>
                    <div class="panel-metrics">
                        <div>
                            <strong>30</strong>
                            <span>minute AI opportunity screen</span>
                        </div>
                        <div>
                            <strong>90</strong>
                            <span>day implementation roadmap</span>
                        </div>
                        <div>
                            <strong>5</strong>
                            <span>deal workflow priorities</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="proof-band">
            <div class="container proof-grid">
                <div class="proof-item">
                    <strong>CIMs</strong>
                    <span>Extract deal facts, risks, add-backs, KPIs, and follow-up questions faster.</span>
                </div>
                <div class="proof-item">
                    <strong>VDRs</strong>
                    <span>Triage documents and flag missing diligence items before the team loses days.</span>
                </div>
                <div class="proof-item">
                    <strong>IC memos</strong>
                    <span>Turn scattered notes, models, and diligence findings into decision-ready drafts.</span>
                </div>
                <div class="proof-item">
                    <strong>PortCo ops</strong>
                    <span>Use AI to standardize reporting, risk review, and repeatable value creation workflows.</span>
                </div>
            </div>
        </section>

        <section class="video-band" id="ai-video">
            <div class="container video-feature">
                <div class="video-copy">
                    <span class="eyebrow">Watch the AI overview</span>
                    <h2>AI can transform PE and M&amp;A workflows when it is built around how deals actually move.</h2>
                    <p>This short video explains where AI creates practical leverage for deal teams: faster document review, cleaner diligence, stronger memo support, and better portfolio reporting with governance built in.</p>
                    <ul class="video-points" aria-label="AI consulting video topics">
                        <li>Deal workflow automation</li>
                        <li>VDR and diligence review</li>
                        <li>AI governance for deal teams</li>
                    </ul>
                    <div class="hero-actions">
                        <a href="schedule.php" class="btn btn-primary">Discuss AI Use Cases</a>
                        <a href="https://youtu.be/Ln4YvPCIHCw" class="btn btn-secondary" target="_blank" rel="noopener">Open on YouTube</a>
                    </div>
                </div>
                <div class="video-frame-wrap">
                    <div class="video-frame">
                        <iframe src="https://www.youtube-nocookie.com/embed/Ln4YvPCIHCw?rel=0&amp;modestbranding=1" title="AI Transforms Private Equity and M&amp;A" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <p class="video-caption">AI Transforms Private Equity &amp; M&amp;A</p>
                </div>
            </div>
        </section>

        <section class="band">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Where AI pays off first</span>
                    <h2>Practical AI systems for deal teams, not generic chatbot experiments.</h2>
                    <p>The highest-value AI use cases in PE and M&amp;A are not flashy. They are controlled workflows that remove manual drag, preserve judgment, and make the team faster from sourcing through post-close execution.</p>
                </div>
                <div class="grid-3">
                    <article class="card">
                        <h3>Deal sourcing and CRM enrichment</h3>
                        <p>Connect AI to your origination workflow so target notes, intermediary updates, owner research, and outreach context do not stay buried in inboxes and spreadsheets.</p>
                    </article>
                    <article class="card">
                        <h3>Diligence document intelligence</h3>
                        <p>Use AI to summarize, classify, and cross-check VDR materials while keeping humans in control of final judgment and investment committee recommendations.</p>
                    </article>
                    <article class="card">
                        <h3>Portfolio reporting and value creation</h3>
                        <p>Standardize reporting packs, risk signals, technology health checks, and operating updates across portfolio companies so partners see issues earlier.</p>
                    </article>
                </div>
            </div>
        </section>

        <section>
            <div class="container split">
                <div>
                    <div class="section-heading">
                        <span class="eyebrow">Our AI consulting process</span>
                        <h2>From AI opportunity map to working deal-team workflows.</h2>
                        <p>We start with the workflows that already cost your team time: CIM review, VDR tracking, IC memo prep, CRM updates, portfolio dashboards, and recurring diligence requests.</p>
                    </div>
                    <div class="region-card">
                        <h3>Built for Northeast PE and M&amp;A firms</h3>
                        <p style="margin-top: 12px; color: rgba(255,255,255,0.78);">We support sponsors, independent sponsors, boutique investment banks, M&amp;A advisors, and portfolio operations teams across the Northeast corridor.</p>
                        <div class="region-list">
                            <span>New York City</span>
                            <span>Westchester</span>
                            <span>Connecticut</span>
                            <span>Boston</span>
                            <span>New Jersey</span>
                            <span>Philadelphia</span>
                        </div>
                    </div>
                </div>
                <div class="process-list">
                    <div class="process-step">
                        <span class="step-number">1</span>
                        <div>
                            <h3>Assess AI readiness and workflow drag</h3>
                            <p>Map where analysts, associates, operating partners, and advisors lose time across documents, data rooms, CRM, reporting, and memo workflows.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <span class="step-number">2</span>
                        <div>
                            <h3>Prioritize high-control AI use cases</h3>
                            <p>Choose the AI workflows with measurable upside and manageable risk, then define human review gates, data boundaries, and success metrics.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <span class="step-number">3</span>
                        <div>
                            <h3>Implement inside your existing stack</h3>
                            <p>Connect AI workflows to your current tools where practical: CRM, VDR, Office, data providers, dashboards, spreadsheets, and document repositories.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <span class="step-number">4</span>
                        <div>
                            <h3>Govern, train, and scale</h3>
                            <p>Document usage rules, train the team, monitor adoption, and expand from one high-value workflow into a repeatable AI operating model.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="band">
            <div class="container">
                <div class="section-heading center">
                    <span class="eyebrow">What we help you build</span>
                    <h2>AI consultancy services for PE and M&amp;A advisory teams.</h2>
                </div>
                <div class="grid-3">
                    <article class="card">
                        <h3>AI readiness assessment</h3>
                        <p>Identify which deal and portfolio workflows are ready for AI, which need data cleanup first, and which should stay manual because risk outweighs payoff.</p>
                    </article>
                    <article class="card">
                        <h3>AI workflow automation</h3>
                        <p>Design and implement AI-assisted workflows for repetitive analyst and advisory tasks while preserving review, auditability, and partner judgment.</p>
                    </article>
                    <article class="card">
                        <h3>AI governance for deal teams</h3>
                        <p>Set practical policies for confidential deal data, model use, prompt libraries, output verification, and acceptable AI usage across teams and portfolio companies.</p>
                    </article>
                    <article class="card">
                        <h3>VDR and diligence AI</h3>
                        <p>Classify documents, summarize key risks, identify missing materials, and produce diligence question lists that speed the path from IOI to LOI.</p>
                    </article>
                    <article class="card">
                        <h3>IC memo and investment thesis support</h3>
                        <p>Turn CIMs, management calls, models, market notes, and diligence findings into structured drafts that are easier for senior teams to review.</p>
                    </article>
                    <article class="card">
                        <h3>Portfolio AI enablement</h3>
                        <p>Find repeatable AI use cases across portfolio companies: reporting automation, customer service review, invoice processing, sales ops, and technology risk checks.</p>
                    </article>
                </div>
            </div>
        </section>

        <section>
            <div class="container split">
                <div class="section-heading">
                    <span class="eyebrow">FAQ</span>
                    <h2>Questions PE and M&amp;A teams usually ask first.</h2>
                </div>
                <div class="faq-grid">
                    <div class="faq-item">
                        <h3>Do you provide AI consulting specifically for PE and M&amp;A?</h3>
                        <p>Yes. The work is built around deal workflows: sourcing, CIM review, VDR diligence, IC memo prep, portfolio reporting, and post-close execution.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do we need to replace our existing software?</h3>
                        <p>Usually no. We start with the systems you already use and look for integration, automation, and AI-assistance opportunities before recommending new platforms.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How do you handle confidential deal data?</h3>
                        <p>Every implementation needs data boundaries, access rules, verification gates, and approved AI usage policies. We treat governance as part of the build, not a side note.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How quickly can we identify the first AI use cases?</h3>
                        <p>A focused strategy session can usually surface the first 3 to 5 AI opportunities. A deeper readiness assessment turns those into a 30, 60, and 90 day roadmap.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <h2>Want to know where AI can actually help your deal team?</h2>
                <p>Book a confidential strategic debrief. We will map your current workflow, identify the highest-ROI AI use cases, and separate real leverage from AI theater.</p>
                <div class="hero-actions" style="justify-content: center;">
                    <a href="schedule.php" class="btn btn-primary">Secure a Strategic Debrief</a>
                    <a href="blogs.php" class="btn btn-secondary">Read PE Tech Insights</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-grid">
            <div>
                <p><strong>PE Tech Partners</strong></p>
                <p style="margin-top: 8px; color: rgba(255,255,255,0.74);">AI consulting and technology alignment for private equity and M&amp;A advisory firms.</p>
                <p style="margin-top: 14px; color: rgba(255,255,255,0.74);">2125 Albany Post Rd Suite 106<br>Montrose, NY 10548<br>Phone: 917-715-7100</p>
                <p style="margin-top: 14px; color: rgba(255,255,255,0.62);">&copy; <?= $year ?> PE Tech Partners. All rights reserved.</p>
            </div>
            <div>
                <p><a href="blogs.php">Insights</a></p>
                <p style="margin-top: 8px;"><a href="tools.php">Free AI Estimator</a></p>
                <p style="margin-top: 8px;"><a href="privacy.php">Privacy Policy</a></p>
                <p style="margin-top: 8px;"><a href="terms.php">Terms of Service</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
