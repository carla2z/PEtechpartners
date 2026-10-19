<?php
$nav_items = [
    ['href' => 'index.php#problems', 'text' => 'Challenges'],
    ['href' => 'index.php#solutions', 'text' => 'Solutions'],
    ['href' => 'process.php', 'text' => 'Our Process'],
    ['href' => 'blogs.php', 'text' => 'Blog'],
    ['href' => 'tools.php', 'text' => 'Free Tools'],
    ['href' => 'testimonials.php', 'text' => 'Testimonials'],
    ['href' => 'schedule.php', 'text' => 'Secure a Strategic Debrief']
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Due Diligence Checklist - PE Tech Partners</title>
    <meta name="description" content="A plain-language checklist for deal teams: the questions to ask before, during and after a deal so technology and security issues show up early, not after close.">
    <link rel="canonical" href="https://petechpartners.com/cyber-diligence-checklist.php">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Cyber Due Diligence Checklist">
    <meta property="og:description" content="A plain-language checklist for deal teams: the questions to ask before, during and after a deal so technology and security issues show up early, not after close.">
    <meta property="og:url" content="https://petechpartners.com/cyber-diligence-checklist.php">
    <meta property="og:image" content="https://petechpartners.com/attached_assets/Home_1761834398568.png">
    <meta name="twitter:card" content="summary_large_image">
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","headline":"Cyber Due Diligence Checklist","description":"A plain-language checklist for deal teams: the questions to ask before, during and after a deal so technology and security issues show up early, not after close.","url":"https://petechpartners.com/cyber-diligence-checklist.php","publisher":{"@type":"Organization","name":"PE Tech Partners","url":"https://petechpartners.com/"}}</script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.7;
            color: #1a1a1a;
            background: #ffffff;
        }
        
        header {
            background: linear-gradient(135deg, #0A2E50 0%, #083156 100%);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }
        
        .logo-icon {
            width: 42px;
            height: 42px;
            background: white;
            border-radius: 8px;
            padding: 6px;
        }
        
        .logo-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .logo-subtitle {
            font-size: 10px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.7);
            letter-spacing: 0.3px;
            margin-top: -2px;
            text-transform: uppercase;
        }
        
        .logo-text .pe { color: #BF0A30; }
        
        nav {
            display: flex;
            gap: 32px;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav a:hover { color: #87CEEB; }
        
        .nav-toggle { display: none; }

        @media (max-width: 1100px) {
            .nav-container { flex-wrap: wrap; gap: 16px; }
            .nav-container .logo { flex: 1; min-width: 0; }
            .nav-container .logo-icon { flex-shrink: 0; }
            .nav-container nav {
                width: 100%;
                flex-direction: column;
                gap: 0;
                max-height: 65vh;
                overflow-y: auto;
            }
            .nav-container nav a { padding: 12px 0; }
            .nav-container.nav-ready .nav-toggle {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 60px;
                min-height: 44px;
                padding: 8px;
                border: 1px solid #ffffff;
                border-radius: 4px;
                background: #ffffff;
                color: #0A2E50;
                font: inherit;
                font-weight: 600;
                cursor: pointer;
            }
            .nav-container.nav-ready nav { display: none; }
            .nav-container.nav-ready nav.is-open { display: flex; }
            .nav-toggle:focus-visible, nav a:focus-visible {
                outline: 3px solid #87CEEB;
                outline-offset: 3px;
            }
        }

        article {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 40px;
        }
        
        .article-header {
            margin-bottom: 48px;
        }
        
        .article-meta {
            display: flex;
            gap: 16px;
            align-items: center;
            margin-bottom: 24px;
            font-size: 14px;
            color: #666;
        }
        
        .category {
            background: #0A2E50;
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-weight: 600;
        }
        
        h1 {
            font-size: 42px;
            color: #0A2E50;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .subtitle {
            font-size: 20px;
            color: #666;
            line-height: 1.6;
        }
        
        h2 {
            font-size: 28px;
            color: #0A2E50;
            margin: 48px 0 20px;
        }
        
        h3 {
            font-size: 22px;
            color: #0A2E50;
            margin: 32px 0 16px;
        }
        
        p {
            margin-bottom: 20px;
            font-size: 18px;
        }
        
        .highlight-box {
            background: #f8f9fa;
            border-left: 4px solid #BF0A30;
            padding: 24px;
            margin: 32px 0;
            border-radius: 4px;
        }
        
        .highlight-box p:last-child { margin-bottom: 0; }
        
        ul, ol {
            margin: 20px 0 20px 24px;
            font-size: 18px;
        }
        
        li {
            margin-bottom: 12px;
        }
        
        strong {
            color: #0A2E50;
            font-weight: 600;
        }
        
        .cta-section {
            background: #f8f9fa;
            padding: 48px;
            border-radius: 8px;
            margin: 60px 0;
            text-align: center;
        }
        
        .cta-section h2 {
            margin-top: 0;
        }
        
        .btn {
            display: inline-block;
            padding: 16px 32px;
            background: #BF0A30;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            margin-top: 24px;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background: #9a0826;
        }

        .btn-secondary {
            background: #0A2E50;
            margin-left: 12px;
        }

        .btn-secondary:hover {
            background: #083156;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 32px; }
            h2 { font-size: 24px; }
            article { padding: 0 20px; }
            .btn-secondary { margin-left: 0; margin-top: 12px; }
        }
        
        footer {
            background: #0A2E50;
            color: white;
            padding: 60px 0 30px;
            margin-top: 80px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        .footer-logo {
            font-size: 24px;
            font-weight: 800;
            color: white;
            text-decoration: none;
            margin-bottom: 20px;
            display: block;
        }

        .footer-logo .pe { color: #BF0A30; }

        .footer-links a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            margin-right: 20px;
            font-size: 14px;
        }

        .footer-links a:hover { opacity: 1; }
        /* Cyber diligence checklist page */
        .ck{--navy:#0A2E50;--red:#BF0A30;--gold:#D4A843;--green:#1F7A4D;--bg:#F4F7FB;--surface:#FFFFFF;--fg:#132238;--muted:#55657C;--line:#DBE4EF;--mono:'IBM Plex Mono',ui-monospace,Menlo,monospace;background:var(--bg);color:var(--fg);line-height:1.6}
        .ck *{box-sizing:border-box}
        .ck .wrap{max-width:960px;margin:0 auto;padding-left:max(20px,env(safe-area-inset-left,0px));padding-right:max(20px,env(safe-area-inset-right,0px))}
        .ck h1,.ck h2,.ck h3{text-wrap:balance;line-height:1.2;margin:0;color:inherit}
        .ck p{margin:0;font-size:17px}
        .ck-mast{background:linear-gradient(135deg,#071B31 0%,#0A2E50 100%);color:#FFFFFF}
        .ck-mast .wrap{padding-block:56px 60px;display:grid;gap:18px}
        .ck-tag{font-family:var(--mono);font-size:12px;color:var(--gold);letter-spacing:.06em;text-transform:uppercase}
        .ck-mast h1{font-size:clamp(30px,5vw,44px);font-weight:800;letter-spacing:-.02em;max-width:22ch;color:#FFFFFF}
        .ck-mast p{color:#B6C3D4;max-width:62ch}
        .ck-how{display:flex;flex-wrap:wrap;gap:10px 28px;font-size:14px;color:#B6C3D4}
        .ck-how b{color:#FFFFFF;font-weight:600}
        .ck-bar{background:var(--surface);border-bottom:1px solid var(--line)}
        .ck-bar .wrap{padding-block:12px;display:flex;flex-wrap:wrap;align-items:center;gap:10px 20px;justify-content:space-between}
        .ck-progress{display:flex;align-items:center;gap:12px;font-size:14px;font-weight:600;color:var(--navy);flex:1;min-width:220px}
        .ck-track{flex:1;height:8px;border-radius:4px;background:var(--line);overflow:hidden;max-width:280px}
        .ck-fill{height:100%;width:0;background:var(--green);transition:width .3s ease}
        .ck-actions{display:flex;gap:8px}
        .ck-btn{font:inherit;font-size:14px;font-weight:600;padding:8px 14px;border-radius:6px;border:1px solid var(--line);background:var(--surface);color:var(--navy);cursor:pointer}
        .ck-btn:hover{border-color:var(--navy)}
        .ck-btn:focus-visible{outline:3px solid #87CEEB;outline-offset:2px}
        .ck-main .wrap{padding-block:40px 16px;display:grid;grid-template-columns:minmax(0,1fr);gap:40px}
        .ck-main .wrap>*{min-width:0}
        .ck-stage-head{display:grid;grid-template-columns:auto 1fr;gap:4px 16px;align-items:baseline;margin-bottom:16px}
        .ck-num{font-family:var(--mono);font-size:13px;color:var(--red);grid-row:span 2}
        .ck-stage-head h2{font-size:26px;font-weight:700;color:var(--navy)}
        .ck-stage-head p{color:var(--muted);font-size:16px}
        .ck-list{list-style:none;margin:0;padding:0;background:var(--surface);border:1px solid var(--line);border-radius:12px}
        .ck-list li{margin:0;border-top:1px solid var(--line)}
        .ck-list li:first-child{border-top:0}
        .ck-item{display:grid;grid-template-columns:28px minmax(0,1fr);gap:14px;padding:18px 20px;cursor:pointer}
        .ck-item input{width:22px;height:22px;margin:2px 0 0;accent-color:var(--green);cursor:pointer}
        .ck-item input:focus-visible{outline:3px solid #87CEEB;outline-offset:2px}
        .ck-q{display:block;font-weight:600;font-size:17px;color:var(--fg)}
        .ck-why{display:block;font-size:15px;color:var(--muted);margin-top:4px}
        .ck-why b{color:var(--fg);font-weight:600}
        .ck-item:has(input:checked) .ck-q{color:var(--muted);text-decoration:line-through;text-decoration-color:var(--muted)}
        .ck-flag{background:var(--surface);border:1px solid var(--line);border-left:4px solid var(--gold);border-radius:12px;padding:24px;display:grid;gap:10px}
        .ck-flag h2{font-size:22px;color:var(--navy)}
        .ck-flag ul{margin:0;padding-left:20px;font-size:16px;display:grid;gap:6px}
        .ck-flag li{margin:0}
        .ck-cta{background:var(--navy);color:#FFFFFF;border-radius:12px;padding:36px;display:grid;gap:14px;justify-items:start}
        .ck-cta h2{font-size:26px;color:#FFFFFF}
        .ck-cta p{color:#C3CEDD;max-width:60ch}
        .ck-cta .btn{margin-top:4px}
        .ck-cta a.ck-link{color:#FFFFFF}
        @media (max-width:640px){.ck-item{padding:16px}.ck-cta{padding:24px}.ck-stage-head h2{font-size:22px}}
        @media print{header,footer,.ck-bar,.ck-cta,.ck-actions{display:none!important}.ck,.ck-mast{background:#fff!important;color:#000!important}.ck-mast h1,.ck-mast p,.ck-how,.ck-how b{color:#000!important}.ck-list{border-color:#999}.ck-item{break-inside:avoid;padding:10px 12px}}
    </style>
    <link rel="stylesheet" href="assets/blog-enhancements.css">
</head>
<body>
    <header>
        <div class="nav-container">
            <a href="index.php" class="logo">
                <div class="logo-icon">
                    <img src="attached_assets/Home_1761834398568.png" alt="PE Tech Partners">
                </div>
                <div class="logo-text">
                    <div><span class="pe">PE</span> TECH PARTNERS</div>
                    <div class="logo-subtitle">STRATEGIC SOLUTIONS FOR PE & M&A FIRMS</div>
                </div>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="article-nav">Menu</button>
            <nav id="article-nav" aria-label="Main navigation">
                <?php foreach ($nav_items as $item): ?>
                    <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['text']) ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>


    <div class="ck">
    <section class="ck-mast">
      <div class="wrap">
        <div class="ck-tag">Cyber Due Diligence Checklist</div>
        <h1>The questions that prevent post-close surprises</h1>
        <p>Most technology and security problems in a deal are not hard to find. They are found too late. This checklist puts the right questions at the right stage, in plain language, so anyone on the deal team can ask them.</p>
        <div class="ck-how"><span><b>17</b> questions</span><span><b>4</b> deal stages</span><span>No technical background needed</span></div>
      </div>
    </section>
    <div class="ck-bar" aria-label="Checklist progress">
      <div class="wrap">
        <div class="ck-progress"><span id="ck-count">0 of 17 checked</span><div class="ck-track" aria-hidden="true"><div class="ck-fill" id="ck-fill"></div></div></div>
        <div class="ck-actions"><button type="button" class="ck-btn" id="ck-print">Print or save as PDF</button><button type="button" class="ck-btn" id="ck-reset">Clear all</button></div>
      </div>
    </div>
    <main class="ck-main">
      <div class="wrap">
        <section aria-labelledby="ck-s1">
          <div class="ck-stage-head"><span class="ck-num">Stage 1</span><h2 id="ck-s1">Before the LOI</h2><p>Quick questions you can ask in a first meeting. No technical background needed.</p></div>
          <ul class="ck-list">
            <li><label class="ck-item" for="ck-1"><input type="checkbox" id="ck-1" data-ck><span><span class="ck-q">Who looks after the company's technology day to day?</span><span class="ck-why"><b>Why it matters:</b> if the answer is one person, or "a guy we call," you are buying a single point of failure.</span></span></label></li>
            <li><label class="ck-item" for="ck-2"><input type="checkbox" id="ck-2" data-ck><span><span class="ck-q">Has the company had a security incident, scam or data loss in the last three years?</span><span class="ck-why"><b>Why it matters:</b> past problems often come back, and how they were handled tells you more than the incident itself.</span></span></label></li>
            <li><label class="ck-item" for="ck-3"><input type="checkbox" id="ck-3" data-ck><span><span class="ck-q">Does the company carry cyber insurance, and has it ever made a claim?</span><span class="ck-why"><b>Why it matters:</b> insurers ask hard questions before they cover a business. A recent policy means someone has already checked the basics.</span></span></label></li>
            <li><label class="ck-item" for="ck-4"><input type="checkbox" id="ck-4" data-ck><span><span class="ck-q">Is the business using AI tools, and is AI part of the growth story?</span><span class="ck-why"><b>Why it matters:</b> if AI is in the pitch, find out early whether it is real and in use or still an idea.</span></span></label></li>
          </ul>
        </section>
        <section aria-labelledby="ck-s2">
          <div class="ck-stage-head"><span class="ck-num">Stage 2</span><h2 id="ck-s2">During diligence</h2><p>Ask for proof, not just answers. A short document or a screenshot is usually enough.</p></div>
          <ul class="ck-list">
            <li><label class="ck-item" for="ck-5"><input type="checkbox" id="ck-5" data-ck><span><span class="ck-q">Can they produce a simple list of every system and software subscription they pay for?</span><span class="ck-why"><b>Why it matters:</b> a company that cannot list its own tools usually cannot control them, and is often paying twice for the same thing.</span></span></label></li>
            <li><label class="ck-item" for="ck-6"><input type="checkbox" id="ck-6" data-ck><span><span class="ck-q">Which outside vendors can see financial or customer information?</span><span class="ck-why"><b>Why it matters:</b> a vendor with access to your data can become your problem if they are breached.</span></span></label></li>
            <li><label class="ck-item" for="ck-7"><input type="checkbox" id="ck-7" data-ck><span><span class="ck-q">Do any key software contracts change or end if the company is sold?</span><span class="ck-why"><b>Why it matters:</b> some contracts reprice or terminate on a change of ownership, and you want to know before you sign, not after.</span></span></label></li>
            <li><label class="ck-item" for="ck-8"><input type="checkbox" id="ck-8" data-ck><span><span class="ck-q">Are backups tested, and how long would it take to get running again after an outage?</span><span class="ck-why"><b>Why it matters:</b> "we have backups" is common. "We restored from them last quarter" is the answer you want.</span></span></label></li>
            <li><label class="ck-item" for="ck-9"><input type="checkbox" id="ck-9" data-ck><span><span class="ck-q">Is a second step required to log in to email and key systems?</span><span class="ck-why"><b>Why it matters:</b> a code on your phone stops most stolen-password break-ins. It is cheap and should already be on.</span></span></label></li>
            <li><label class="ck-item" for="ck-10"><input type="checkbox" id="ck-10" data-ck><span><span class="ck-q">How many separate systems does finance pull from to produce monthly numbers?</span><span class="ck-why"><b>Why it matters:</b> lots of manual stitching means slower reporting, more errors and a longer quality of earnings review.</span></span></label></li>
          </ul>
        </section>
        <section aria-labelledby="ck-s3">
          <div class="ck-stage-head"><span class="ck-num">Stage 3</span><h2 id="ck-s3">Between signing and closing</h2><p>This is when money moves and scammers pay the most attention.</p></div>
          <ul class="ck-list">
            <li><label class="ck-item" for="ck-11"><input type="checkbox" id="ck-11" data-ck><span><span class="ck-q">Is every change to payment or wire details confirmed by phone, using a number you already had?</span><span class="ck-why"><b>Why it matters:</b> fake "updated bank details" emails are one of the most common ways deal money goes missing.</span></span></label></li>
            <li><label class="ck-item" for="ck-12"><input type="checkbox" id="ck-12" data-ck><span><span class="ck-q">Does everyone involved know who is allowed to approve a payment?</span><span class="ck-why"><b>Why it matters:</b> scammers create urgency. A clear approval rule removes the pressure to act fast.</span></span></label></li>
            <li><label class="ck-item" for="ck-13"><input type="checkbox" id="ck-13" data-ck><span><span class="ck-q">Is access to the deal documents limited to the people who need it?</span><span class="ck-why"><b>Why it matters:</b> the fewer people with access, the fewer places a leak can start.</span></span></label></li>
          </ul>
        </section>
        <section aria-labelledby="ck-s4">
          <div class="ck-stage-head"><span class="ck-num">Stage 4</span><h2 id="ck-s4">The first 100 days</h2><p>Lock in what you bought before small gaps become expensive ones.</p></div>
          <ul class="ck-list">
            <li><label class="ck-item" for="ck-14"><input type="checkbox" id="ck-14" data-ck><span><span class="ck-q">Has every password and admin account been handed over to people you control?</span><span class="ck-why"><b>Why it matters:</b> if the old owner or a former employee still holds the keys, so does anyone who gets into their email.</span></span></label></li>
            <li><label class="ck-item" for="ck-15"><input type="checkbox" id="ck-15" data-ck><span><span class="ck-q">Have accounts for people who left been switched off?</span><span class="ck-why"><b>Why it matters:</b> old accounts that still work are one of the easiest ways in.</span></span></label></li>
            <li><label class="ck-item" for="ck-16"><input type="checkbox" id="ck-16" data-ck><span><span class="ck-q">Is there a simple plan for combining or replacing duplicate systems?</span><span class="ck-why"><b>Why it matters:</b> the cost savings in your model depend on it, and it rarely happens without an owner and a date.</span></span></label></li>
            <li><label class="ck-item" for="ck-17"><input type="checkbox" id="ck-17" data-ck><span><span class="ck-q">Is there a written, one-page plan for what to do if something goes wrong?</span><span class="ck-why"><b>Why it matters:</b> during an incident, nobody has time to work out who to call. Decide that now.</span></span></label></li>
          </ul>
        </section>
        <section class="ck-flag" aria-labelledby="ck-flags">
          <h2 id="ck-flags">Answers that deserve a second look</h2>
          <ul>
            <li>"I'd have to check with our IT guy."</li>
            <li>"We've never had a problem."</li>
            <li>"Everyone has the same password, it's easier."</li>
            <li>"We have backups somewhere."</li>
            <li>"We just reply to the email to confirm payments."</li>
          </ul>
          <p>None of these kills a deal. Each one is a cost, a delay or a negotiating point you want to know about now.</p>
        </section>
        <section class="ck-cta" aria-labelledby="ck-cta-h">
          <h2 id="ck-cta-h">Want a second set of eyes on a live deal?</h2>
          <p>We'll go through this checklist with you for one portfolio company or target and point out the gaps that matter. No cost, and you keep the findings. You can also see where each risk hits hardest on our <a class="ck-link" href="risk-map.php">Deal Team Risk Map</a>.</p>
          <a class="btn" href="schedule.php">Secure a Strategic Debrief</a>
        </section>
      </div>
    </main>
    </div>

    <footer style="margin-top:56px">
        <div class="footer-container">
            <div>
                <a href="index.php" class="footer-logo"><span class="pe">PE</span> TECH PARTNERS</a>
                <p style="opacity: 0.8; margin-bottom: 20px;">Technology Alignment for Private Equity & M&A</p>
                <p style="opacity: 0.6; font-size: 13px;">2125 Albany Post Rd Suite 106, Montrose NY 10548<br>Phone: 917-715-7100</p>
            </div>
            <div style="text-align: right;">
                <div class="footer-links" style="margin-bottom: 20px;">
                    <a href="terms.php">Terms of Service</a>
                    <a href="privacy.php">Privacy Policy</a>
                    <a href="contact.php">Contact</a>
                </div>
                <p style="opacity: 0.5; font-size: 12px;">&copy; 2026 PE Tech Partners. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        const navContainer = document.querySelector('.nav-container');
        const navToggle = document.querySelector('.nav-toggle');
        const articleNav = document.getElementById('article-nav');
        function setMenuOpen(open) {
            navToggle.setAttribute('aria-expanded', String(open));
            navToggle.textContent = open ? 'Close' : 'Menu';
            articleNav.classList.toggle('is-open', open);
        }
        navContainer.classList.add('nav-ready');
        navToggle.addEventListener('click', () => {
            setMenuOpen(navToggle.getAttribute('aria-expanded') !== 'true');
        });
        document.addEventListener('click', (event) => {
            if (!navContainer.contains(event.target) || event.target.closest('#article-nav a')) {
                setMenuOpen(false);
            }
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && navToggle.getAttribute('aria-expanded') === 'true') {
                setMenuOpen(false);
                navToggle.focus();
            }
        });
        window.matchMedia('(max-width: 1100px)').addEventListener('change', () => setMenuOpen(false));
    </script>
    <script>
      (function(){
        var boxes=[].slice.call(document.querySelectorAll('[data-ck]'));
        var count=document.getElementById('ck-count'),fill=document.getElementById('ck-fill'),key='ck-diligence-v1';
        function save(){try{localStorage.setItem(key,JSON.stringify(boxes.map(function(b){return b.checked})))}catch(e){}}
        function update(){var c=boxes.filter(function(b){return b.checked}).length;count.textContent=c+' of '+boxes.length+' checked';fill.style.width=(c/boxes.length*100)+'%'}
        try{var s=JSON.parse(localStorage.getItem(key)||'[]');boxes.forEach(function(b,i){b.checked=!!s[i]})}catch(e){}
        boxes.forEach(function(b){b.addEventListener('change',function(){update();save()})});
        document.getElementById('ck-reset').addEventListener('click',function(){boxes.forEach(function(b){b.checked=false});update();save()});
        document.getElementById('ck-print').addEventListener('click',function(){window.print()});
        update();
      })();
    </script>
</body>
</html>
