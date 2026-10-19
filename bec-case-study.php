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
    <title>How a Deal Wire Goes Missing - PE Tech Partners</title>
    <meta name="description" content="An example business email compromise scenario during a deal: how it unfolds day by day, the four moments it could have been stopped, and what deal teams put in place to prevent it.">
    <link rel="canonical" href="https://petechpartners.com/bec-case-study.php">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <meta property="og:type" content="article">
    <meta property="og:title" content="How a Deal Wire Goes Missing">
    <meta property="og:description" content="An example business email compromise scenario during a deal: how it unfolds day by day, the four moments it could have been stopped, and what deal teams put in place to prevent it.">
    <meta property="og:url" content="https://petechpartners.com/bec-case-study.php">
    <meta property="og:image" content="https://petechpartners.com/attached_assets/Home_1761834398568.png">
    <meta name="twitter:card" content="summary_large_image">
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","headline":"How a Deal Wire Goes Missing","description":"An example business email compromise scenario during a deal: how it unfolds day by day, the four moments it could have been stopped, and what deal teams put in place to prevent it.","url":"https://petechpartners.com/bec-case-study.php","publisher":{"@type":"Organization","name":"PE Tech Partners","url":"https://petechpartners.com/"}}</script>
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
        /* BEC case study page */
        .bc{--navy:#0A2E50;--red:#BF0A30;--gold:#D4A843;--green:#1F7A4D;--bg:#F4F7FB;--surface:#FFFFFF;--fg:#132238;--muted:#55657C;--line:#DBE4EF;--mono:'IBM Plex Mono',ui-monospace,Menlo,monospace;background:var(--bg);color:var(--fg);line-height:1.6}
        .bc *{box-sizing:border-box}
        .bc .wrap{max-width:960px;margin:0 auto;padding-left:max(20px,env(safe-area-inset-left,0px));padding-right:max(20px,env(safe-area-inset-right,0px))}
        .bc h1,.bc h2,.bc h3{text-wrap:balance;line-height:1.2;margin:0;color:inherit}
        .bc p{margin:0;font-size:17px}
        .bc-mast{background:linear-gradient(135deg,#071B31 0%,#0A2E50 100%);color:#FFFFFF}
        .bc-mast .wrap{padding-block:56px 60px;display:grid;gap:18px}
        .bc-tag{font-family:var(--mono);font-size:12px;color:var(--gold);letter-spacing:.06em;text-transform:uppercase}
        .bc-mast h1{font-size:clamp(30px,5vw,46px);font-weight:800;letter-spacing:-.02em;max-width:20ch;color:#FFFFFF}
        .bc-mast p{color:#B6C3D4;max-width:62ch}
        .bc-label{display:inline-flex;align-items:center;gap:8px;justify-self:start;font-size:13px;font-weight:600;color:#FFFFFF;border:1px solid rgba(255,255,255,.35);border-radius:999px;padding:6px 14px}
        .bc-main .wrap{padding-block:48px 16px;display:grid;grid-template-columns:minmax(0,1fr);gap:56px}
        .bc-main .wrap>*{min-width:0}
        .bc-head{display:grid;gap:6px;margin-bottom:20px}
        .bc-head h2{font-size:28px;font-weight:700;color:var(--navy)}
        .bc-head p{color:var(--muted);max-width:66ch}
        .bc-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px}
        .bc-stat{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:22px;display:grid;gap:6px;align-content:start}
        .bc-stat b{font-size:36px;font-weight:800;color:var(--navy);font-variant-numeric:tabular-nums;line-height:1.1;letter-spacing:-.01em}
        .bc-stat span{font-size:15px;color:var(--muted)}
        .bc-src{font-size:13px;color:var(--muted);margin-top:12px}
        .bc-src a{color:var(--navy)}
        .bc-setup{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:24px;display:grid;gap:10px}
        .bc-setup p{font-size:16px}
        .bc-tl{list-style:none;margin:0;padding:0;display:grid;gap:0;position:relative}
        .bc-tl li{margin:0;display:grid;grid-template-columns:110px minmax(0,1fr);gap:20px;padding-bottom:28px;position:relative}
        .bc-tl li::before{content:"";position:absolute;left:119px;top:10px;bottom:0;width:2px;background:var(--line)}
        .bc-tl li:last-child::before{display:none}
        .bc-when{font-family:var(--mono);font-size:13px;color:var(--red);text-transform:uppercase;letter-spacing:.05em;padding-top:2px}
        .bc-what{position:relative;padding-left:22px;display:grid;gap:8px}
        .bc-what::before{content:"";position:absolute;left:-7px;top:6px;width:14px;height:14px;border-radius:50%;background:var(--surface);border:3px solid var(--navy)}
        .bc-what h3{font-size:19px;font-weight:700;color:var(--navy)}
        .bc-what p{font-size:16px}
        .bc-stop{font-size:15px;background:#EEF6F1;border:1px solid #CFE5D8;color:#174D33;border-radius:8px;padding:10px 14px}
        .bc-stop b{font-weight:700}
        .bc-cost{display:grid;grid-template-columns:repeat(auto-fit,minmax(min(340px,100%),1fr));gap:16px}
        .bc-cost div{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:20px;display:grid;gap:6px}
        .bc-cost h3{font-size:17px;color:var(--navy)}
        .bc-cost p{font-size:15px;color:var(--muted)}
        .bc-fix{display:grid;gap:16px}
        .bc-fix .bc-fix-item{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:24px;display:grid;grid-template-columns:minmax(0,1fr);gap:8px;margin:0;max-width:none}
        .bc-fix h3{font-size:20px;color:var(--navy)}
        .bc-fix p{font-size:16px}
        .bc-fix .when{font-family:var(--mono);font-size:12px;color:var(--muted);text-transform:uppercase;letter-spacing:.05em}
        .bc-cta{background:var(--navy);color:#FFFFFF;border-radius:12px;padding:36px;display:grid;gap:14px;justify-items:start}
        .bc-cta h2{font-size:26px;color:#FFFFFF}
        .bc-cta p{color:#C3CEDD;max-width:62ch}
        .bc-cta a.bc-link{color:#FFFFFF}
        .bc-cta .btn{margin-top:4px}
        .bc-note{font-size:13px;color:var(--muted)}
        @media (max-width:640px){.bc-tl li{grid-template-columns:minmax(0,1fr);gap:6px}.bc-tl li::before{display:none}.bc-what{padding-left:0}.bc-what::before{display:none}.bc-cta{padding:24px}}
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


    <div class="bc">
    <section class="bc-mast">
      <div class="wrap">
        <div class="bc-tag">Business Email Compromise · Case Study</div>
        <h1>How a deal wire goes missing</h1>
        <p>A walk through one of the most common ways deal money disappears. No hacking skills involved, just a convincing email at a busy moment. Follow it day by day, and see the four points where a simple habit would have stopped it.</p>
        <span class="bc-label">Example scenario: a composite of common patterns, not a specific client</span>
      </div>
    </section>
    <main class="bc-main">
      <div class="wrap">
        <section aria-labelledby="bc-n">
          <div class="bc-head">
            <h2 id="bc-n">Why this matters</h2>
            <p>Business email compromise is when a criminal gets into, or imitates, a real email account and uses it to redirect a payment. It is one of the costliest kinds of cybercrime reported to the FBI.</p>
          </div>
          <div class="bc-stats">
            <div class="bc-stat"><b>$3.05B</b><span>reported lost to business email compromise in the U.S. in 2025</span></div>
            <div class="bc-stat"><b>24,768</b><span>business email compromise complaints filed with the FBI in 2025</span></div>
            <div class="bc-stat"><b>2nd</b><span>costliest category of cybercrime reported, behind investment fraud</span></div>
          </div>
          <p class="bc-src">Source: <a href="https://www.ic3.gov/AnnualReport/Reports" target="_blank" rel="noopener">FBI Internet Crime Complaint Center, 2025 Internet Crime Report</a>. These figures cover only incidents reported to the FBI, so the real total is likely higher.</p>
        </section>

        <section aria-labelledby="bc-s">
          <div class="bc-head"><h2 id="bc-s">The setup</h2></div>
          <div class="bc-setup">
            <p>A private equity firm is buying a regional services business. The deal team, the seller, two law firms and the seller's controller have been emailing each other for weeks. Closing is scheduled for Friday. The purchase price will be sent by wire.</p>
            <p>Nobody on the deal is careless. Everyone is busy, the timeline is tight, and most of the people involved met for the first time on this deal. That is exactly the situation this scam is built for.</p>
          </div>
        </section>

        <section aria-labelledby="bc-t">
          <div class="bc-head">
            <h2 id="bc-t">How it unfolds</h2>
            <p>Each step looks normal on its own. The green notes show where it could have been stopped.</p>
          </div>
          <ol class="bc-tl">
            <li><div class="bc-when">Three weeks out</div><div class="bc-what"><h3>A password is stolen</h3><p>The seller's controller gets an email that looks like a shared-document notice and enters her email password on a fake login page. The criminal now has access to her inbox. Nothing looks different to her.</p><p class="bc-stop"><b>Could have stopped it:</b> a second login step, such as a code on her phone, would have made the stolen password useless on its own.</p></div></li>
            <li><div class="bc-when">Weeks 2 to 3</div><div class="bc-what"><h3>Someone is quietly reading along</h3><p>The criminal reads the deal emails without sending anything. They learn who the lawyers are, how people sign their emails, the closing date and the amount. They set up a rule that hides certain replies from the controller.</p><p class="bc-stop"><b>Could have stopped it:</b> an alert for new inbox rules or logins from unusual places would have flagged this weeks before closing.</p></div></li>
            <li><div class="bc-when">Tuesday</div><div class="bc-what"><h3>The "updated" bank details arrive</h3><p>Two days before closing, the buyer's team receives an email that appears to come from the seller's side, in the same thread, with the right names and tone. It says the receiving bank account has changed for "tax reasons" and attaches new wire instructions.</p><p class="bc-stop"><b>Could have stopped it:</b> a standing rule that any change to payment details is confirmed by phone, using a number you already had, not one in the email.</p></div></li>
            <li><div class="bc-when">Friday</div><div class="bc-what"><h3>The wire goes out</h3><p>Under closing-day pressure, the new instructions are passed along and the payment is sent. The email looked right, the thread was real, and nobody wanted to be the person who delayed closing.</p><p class="bc-stop"><b>Could have stopped it:</b> a named approver for every payment and a short pause for any change made in the final week.</p></div></li>
            <li><div class="bc-when">Monday</div><div class="bc-what"><h3>The seller asks where the money is</h3><p>The seller says the funds never arrived. Banks are called, lawyers are called, and everyone tries to work out what happened. Speed matters most here: the faster the bank and the FBI are told, the better the chance of freezing the money.</p></div></li>
          </ol>
        </section>

        <section aria-labelledby="bc-c">
          <div class="bc-head"><h2 id="bc-c">What it costs, beyond the wire</h2><p>Even when part of the money is recovered, the deal pays for it.</p></div>
          <div class="bc-cost">
            <div><h3>A delayed or reopened closing</h3><p>Funds have to be found, re-sent or replaced while everyone works out who is responsible.</p></div>
            <div><h3>Legal and forensic bills</h3><p>Lawyers, investigators and insurers all get involved, often on both sides of the deal.</p></div>
            <div><h3>Damaged trust</h3><p>Buyer and seller start the relationship arguing about whose email was the weak link.</p></div>
            <div><h3>Questions about the asset</h3><p>If the seller's email was this exposed, what else is? That question tends to come back at renegotiation.</p></div>
          </div>
        </section>

        <section aria-labelledby="bc-f">
          <div class="bc-head"><h2 id="bc-f">What deal teams put in place</h2><p>None of this is expensive or complicated. It mostly comes down to doing three things before money starts moving.</p></div>
          <div class="bc-fix">
            <div class="bc-fix-item"><span class="when">Before the LOI</span><h3>A quick look at the target's email and accounts</h3><p>Is a second login step turned on? Who has access to what? Have there been past incidents? A short, outside-in review answers these before you are committed, and tells you how exposed the deal's own communications will be.</p></div>
            <div class="bc-fix-item"><span class="when">During the deal</span><h3>One simple view of the risks</h3><p>A one-page summary the whole deal team can read, written in plain business terms: what was found, how serious it is, and what it would cost to fix. It keeps the conversation on facts rather than surprises late in diligence.</p></div>
            <div class="bc-fix-item"><span class="when">Through closing</span><h3>Protection for the people who approve money</h3><p>Partners, principals and anyone who can approve a payment are the people criminals imitate. Stronger email protection on their accounts, a phone check for any payment change, and a clear approval rule close the gap this scenario walked through.</p></div>
          </div>
        </section>

        <section class="bc-cta" aria-labelledby="bc-cta-h">
          <h2 id="bc-cta-h">Want to see how exposed your next deal would be?</h2>
          <p>We'll walk through this scenario against your own process and show you where it would or would not be caught. No cost, and you keep the findings. For the questions to ask at every stage, see our <a class="bc-link" href="cyber-diligence-checklist.php">Cyber Due Diligence Checklist</a>.</p>
          <a class="btn" href="schedule.php">Secure a Strategic Debrief</a>
        </section>
        <p class="bc-note">This is an illustrative scenario built from patterns common to business email compromise. Names, amounts and timing are not drawn from any specific client or deal. If you think a payment has been redirected, contact your bank immediately and file a report at ic3.gov.</p>
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
