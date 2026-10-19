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
    <title>AI + Cybersecurity Risk Map for Deal Teams - PE Tech Partners</title>
    <meta name="description" content="Six places value leaks between the LOI and the exit, where each one hits hardest in the deal, and the question that catches it before you sign.">
    <link rel="canonical" href="https://petechpartners.com/risk-map.php">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <meta property="og:type" content="article">
    <meta property="og:title" content="AI + Cybersecurity Risk Map for Deal Teams">
    <meta property="og:description" content="Six places value leaks between the LOI and the exit, where each one hits hardest in the deal, and the question that catches it before you sign.">
    <meta property="og:url" content="https://petechpartners.com/risk-map.php">
    <meta property="og:image" content="https://petechpartners.com/attached_assets/Home_1761834398568.png">
    <meta name="twitter:card" content="summary_large_image">
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","headline":"AI + Cybersecurity Risk Map for Deal Teams","description":"Six places value leaks between the LOI and the exit, where each one hits hardest in the deal, and the question that catches it before you sign.","url":"https://petechpartners.com/risk-map.php","publisher":{"@type":"Organization","name":"PE Tech Partners","url":"https://petechpartners.com/"}}</script>
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
        /* Risk map page */
        .rm{--navy:#0A2E50;--red:#BF0A30;--gold:#D4A843;--bg:#F4F7FB;--surface:#FFFFFF;--fg:#132238;--muted:#55657C;--line:#DBE4EF;--hi:#BF0A30;--med:#E9B44C;--med-fg:#3A2A05;--lo:#DCE4EE;--lo-fg:#41536B;--mono:'IBM Plex Mono',ui-monospace,Menlo,monospace;background:var(--bg);color:var(--fg);line-height:1.6}
        .rm *{box-sizing:border-box}
        .rm .wrap{max-width:1120px;margin:0 auto;padding-left:max(20px,env(safe-area-inset-left,0px));padding-right:max(20px,env(safe-area-inset-right,0px))}
        .rm h1,.rm h2,.rm h3{text-wrap:balance;line-height:1.2;margin:0;color:inherit}
        .rm p{margin:0}
        .rm-mast{background:linear-gradient(135deg,#071B31 0%,#0A2E50 100%);color:#FFFFFF}
        .rm-mast .wrap{padding-block:56px 60px;display:grid;gap:18px}
        .rm-tag{font-family:var(--mono);font-size:12px;color:var(--gold);letter-spacing:.06em;text-transform:uppercase}
        .rm-mast h1{font-size:clamp(30px,5vw,46px);font-weight:800;letter-spacing:-.02em;max-width:20ch;color:#FFFFFF}
        .rm-mast h1 em{font-style:normal;color:#E0405A}
        .rm-mast p{color:#B6C3D4;max-width:62ch;font-size:17px}
        .rm-main .wrap{padding-block:48px 16px;display:grid;grid-template-columns:minmax(0,1fr);gap:56px}
        .rm-main .wrap>*{min-width:0}
        .rm-head{display:grid;gap:6px;margin-bottom:18px}
        .rm-head h2{font-size:28px;font-weight:700;color:var(--navy)}
        .rm-head p{color:var(--muted);max-width:68ch}
        .rm-legend{display:flex;flex-wrap:wrap;gap:16px;font-size:13px;color:var(--muted);margin-bottom:14px}
        .rm-legend span{display:inline-flex;align-items:center;gap:8px}
        .rm-sw{width:14px;height:14px;border-radius:3px;display:inline-block}
        .rm-scroll{overflow-x:auto;border:1px solid var(--line);border-radius:12px;background:var(--surface)}
        .rm-map{table-layout:fixed;border-collapse:separate;border-spacing:4px;width:100%;min-width:760px;padding:6px}
        .rm-map th{font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:var(--muted);text-align:center;padding:8px 6px;vertical-align:bottom;background:none}
        .rm-map th.row{text-align:left;text-transform:none;letter-spacing:0;font-size:14px;color:var(--fg);font-weight:600;padding:8px 10px;width:210px}
        .rm-map th.row a{color:inherit;text-decoration:none}
        .rm-map th.row a:hover,.rm-map th.row a:focus-visible{text-decoration:underline;outline:none}
        .rm-map th.row small{display:block;font-weight:400;color:var(--muted);font-size:12px}
        .rm-map td{text-align:center;font-family:var(--mono);font-size:11px;letter-spacing:.06em;text-transform:uppercase;border-radius:6px;padding:12px 4px;font-weight:500;border:0}
        .rm .hi{background:var(--hi);color:#FFFFFF}.rm .med{background:var(--med);color:var(--med-fg)}.rm .lo{background:var(--lo);color:var(--lo-fg)}
        .rm-n{display:block;font-family:var(--mono);color:var(--red);font-size:11px;margin-bottom:2px}
        .rm-risks{display:grid;gap:16px}
        .rm-risk{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:26px;display:grid;gap:16px;scroll-margin-top:110px}
        .rm-risk-top{display:flex;flex-wrap:wrap;align-items:baseline;justify-content:space-between;gap:8px 16px}
        .rm-risk h3{font-size:21px;font-weight:700;color:var(--navy)}
        .rm-peak{font-family:var(--mono);font-size:12px;color:var(--muted);text-transform:uppercase;letter-spacing:.05em}
        .rm-peak b{color:var(--hi);font-weight:500}
        .rm-cols{display:grid;gap:20px;grid-template-columns:repeat(auto-fit,minmax(240px,1fr))}
        .rm-cols>div{min-width:0}
        .rm-cols h4{margin:0 0 4px;font-size:12px;text-transform:uppercase;letter-spacing:.08em;color:var(--muted);font-weight:600}
        .rm-ask{border-left:3px solid var(--red);padding-left:14px}
        .rm-ask p{font-weight:500}
        .rm-cta{background:var(--navy);color:#FFFFFF;border-radius:12px;padding:36px;display:grid;gap:14px;justify-items:start}
        .rm-cta h2{font-size:28px;color:#FFFFFF}
        .rm-cta p{color:#C3CEDD;max-width:60ch}
        .rm-cta .btn{margin-top:4px}
        .rm-sr{position:absolute;left:-9999px}
        @media (max-width:640px){.rm-risk{padding:18px}.rm-cta{padding:24px}}
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

    <div class="rm">
    <section class="rm-mast">
      <div class="wrap">
        <div class="rm-tag">AI + Cybersecurity Risk Map for Deal Teams</div>
        <h1>Six places value <em>leaks</em> between the LOI and the exit</h1>
        <p>Most of these never show up as a technology line item. They show up as a slower close, a retrade, a missed integration target, or a lower multiple. This map shows where each one usually surfaces in the deal, and the question that catches it early.</p>
      </div>
    </section>
    <main class="rm-main">
      <div class="wrap">
        <section aria-labelledby="map-h">
          <div class="rm-head">
            <h2 id="map-h">The map</h2>
            <p>Rows are the risks. Columns are the stages of the deal. Color shows where each risk tends to do the most damage, based on what we see working with deal teams and portfolio companies.</p>
          </div>
          <div class="rm-legend" aria-hidden="true">
            <span><i class="rm-sw hi"></i>High exposure</span>
            <span><i class="rm-sw med"></i>Watch closely</span>
            <span><i class="rm-sw lo"></i>Lower exposure</span>
          </div>
          <div class="rm-scroll">
            <table class="rm-map">
              <caption class="rm-sr">Risk exposure by deal stage</caption>
              <thead><tr>
                <th scope="col" class="row" style="color:var(--muted);font-size:12px;text-transform:uppercase;letter-spacing:.06em">Risk</th>
                <th scope="col"><span class="rm-n">1</span>Pre-LOI</th>
                <th scope="col"><span class="rm-n">2</span>Diligence</th>
                <th scope="col"><span class="rm-n">3</span>Sign to close</th>
                <th scope="col"><span class="rm-n">4</span>First 100 days</th>
                <th scope="col"><span class="rm-n">5</span>Hold</th>
                <th scope="col"><span class="rm-n">6</span>Exit</th>
              </tr></thead>
              <tbody>
                <tr><th scope="row" class="row"><a href="#systems">Systems that don't talk<small>The add-on patchwork</small></a></th><td class="med">Watch</td><td class="hi">High</td><td class="med">Watch</td><td class="hi">High</td><td class="hi">High</td><td class="hi">High</td></tr>
                <tr><th scope="row" class="row"><a href="#numbers">Numbers you can't trust<small>Reporting built on spreadsheets</small></a></th><td class="med">Watch</td><td class="hi">High</td><td class="med">Watch</td><td class="med">Watch</td><td class="hi">High</td><td class="hi">High</td></tr>
                <tr><th scope="row" class="row"><a href="#fraud">Email and wire fraud<small>Spoofed partners, fake invoices</small></a></th><td class="lo">Lower</td><td class="med">Watch</td><td class="hi">High</td><td class="hi">High</td><td class="med">Watch</td><td class="med">Watch</td></tr>
                <tr><th scope="row" class="row"><a href="#ai">Unmanaged AI use<small>Claims, tools and leaked data</small></a></th><td class="med">Watch</td><td class="hi">High</td><td class="lo">Lower</td><td class="med">Watch</td><td class="hi">High</td><td class="hi">High</td></tr>
                <tr><th scope="row" class="row"><a href="#vendors">Vendor and contract exposure<small>Who touches your data</small></a></th><td class="lo">Lower</td><td class="hi">High</td><td class="med">Watch</td><td class="hi">High</td><td class="med">Watch</td><td class="med">Watch</td></tr>
                <tr><th scope="row" class="row"><a href="#access">Access and key-person risk<small>The one person who knows</small></a></th><td class="lo">Lower</td><td class="med">Watch</td><td class="hi">High</td><td class="hi">High</td><td class="med">Watch</td><td class="med">Watch</td></tr>
              </tbody>
            </table>
          </div>
        </section>
        <section aria-labelledby="risks-h">
          <div class="rm-head">
            <h2 id="risks-h">What each risk looks like</h2>
            <p>What to look for, where it hits the numbers, and one question to ask before you sign.</p>
          </div>
          <div class="rm-risks">
            <div class="rm-risk" id="systems">
              <div class="rm-risk-top"><h3>Systems that don't talk</h3><span class="rm-peak">Peaks: <b>Diligence, first 100 days, hold, exit</b></span></div>
              <div class="rm-cols">
                <div><h4>What it looks like</h4><p>Each add-on keeps its own accounting, CRM and IT setup. Three divisions run three systems, and nobody owns pulling them together.</p></div>
                <div><h4>Where it costs you</h4><p>Integration savings in the model never arrive. Overhead grows with every acquisition instead of shrinking, and buyers discount the platform for the cleanup they will inherit.</p></div>
                <div class="rm-ask"><h4>Ask before you sign</h4><p>How many separate systems does finance pull from to close the month, and who owns combining them?</p></div>
              </div>
            </div>
            <div class="rm-risk" id="numbers">
              <div class="rm-risk-top"><h3>Numbers you can't trust</h3><span class="rm-peak">Peaks: <b>Diligence, hold, exit</b></span></div>
              <div class="rm-cols">
                <div><h4>What it looks like</h4><p>Board reporting depends on someone stitching spreadsheets together by hand. Two reports of the same metric give two different answers.</p></div>
                <div><h4>Where it costs you</h4><p>Quality of earnings takes longer and finds more adjustments. During the hold, decisions run on numbers that are weeks old.</p></div>
                <div class="rm-ask"><h4>Ask before you sign</h4><p>How many days after month end does the board see final numbers, and how many manual steps happen in between?</p></div>
              </div>
            </div>
            <div class="rm-risk" id="fraud">
              <div class="rm-risk-top"><h3>Email and wire fraud</h3><span class="rm-peak">Peaks: <b>Sign to close, first 100 days</b></span></div>
              <div class="rm-cols">
                <div><h4>What it looks like</h4><p>Large wires, new bank details and lots of unfamiliar people emailing each other. That is exactly the setting fraudsters look for when they impersonate a partner, a lawyer or a seller.</p></div>
                <div><h4>Where it costs you</h4><p>A redirected wire or a fake invoice is cash out the door, often unrecoverable, and it lands at the moment everyone is too busy to notice.</p></div>
                <div class="rm-ask"><h4>Ask before you sign</h4><p>How does every party confirm wire instructions, and is it something other than email?</p></div>
              </div>
            </div>
            <div class="rm-risk" id="ai">
              <div class="rm-risk-top"><h3>Unmanaged AI use</h3><span class="rm-peak">Peaks: <b>Diligence, hold, exit</b></span></div>
              <div class="rm-cols">
                <div><h4>What it looks like</h4><p>The CIM promises AI-driven growth that is mostly a pilot. Meanwhile staff paste customer and financial data into free AI tools nobody approved.</p></div>
                <div><h4>Where it costs you</h4><p>You pay for capability that isn't there, and you carry data exposure nobody can measure. At exit, buyers will test the AI story harder than you did.</p></div>
                <div class="rm-ask"><h4>Ask before you sign</h4><p>Which AI tools are in use today, who approved them, and what company data goes into them?</p></div>
              </div>
            </div>
            <div class="rm-risk" id="vendors">
              <div class="rm-risk-top"><h3>Vendor and contract exposure</h3><span class="rm-peak">Peaks: <b>Diligence, first 100 days</b></span></div>
              <div class="rm-cols">
                <div><h4>What it looks like</h4><p>Dozens of software subscriptions and outside providers, many duplicated across add-ons, some with access to sensitive data and no clear contract terms.</p></div>
                <div><h4>Where it costs you</h4><p>Paying several times for the same tool, change-of-control clauses that surprise you after close, and a vendor breach that becomes your incident.</p></div>
                <div class="rm-ask"><h4>Ask before you sign</h4><p>Which vendors can see customer or financial data, and which contracts change or end on a change of control?</p></div>
              </div>
            </div>
            <div class="rm-risk" id="access">
              <div class="rm-risk-top"><h3>Access and key-person risk</h3><span class="rm-peak">Peaks: <b>Sign to close, first 100 days</b></span></div>
              <div class="rm-cols">
                <div><h4>What it looks like</h4><p>One IT person or one outside provider holds every password. Former employees still have access. Nothing is written down.</p></div>
                <div><h4>Where it costs you</h4><p>If that person leaves during the transition, the business can lose control of its own systems. Old accounts left open are a common way in for attackers.</p></div>
                <div class="rm-ask"><h4>Ask before you sign</h4><p>What breaks if the one person who runs IT quits next week?</p></div>
              </div>
            </div>
          </div>
        </section>
        <section class="rm-cta" aria-labelledby="cta-h">
          <h2 id="cta-h">Want this run on one of your companies?</h2>
          <p>We'll walk through the six risks for a single portfolio company or live deal and tell you which ones are worth your attention. No cost, and you keep the findings.</p>
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
</body>
</html>
