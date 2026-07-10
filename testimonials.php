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
    <title>Testimonials - PE Tech Partners</title>
    <meta name="description" content="Real results from PE and M&A clients who stay anonymous by design. See how PE Tech Partners delivers technology wins while protecting deal confidentiality.">
    <link rel="canonical" href="https://petechpartners.com/testimonials.php">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Testimonials - PE Tech Partners">
    <meta property="og:description" content="Real results from PE and M&A clients who stay anonymous by design. See how PE Tech Partners delivers technology wins while protecting deal confidentiality.">
    <meta property="og:url" content="https://petechpartners.com/testimonials.php">
    <meta property="og:image" content="https://petechpartners.com/attached_assets/Home_1761834398568.png">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background: #ffffff;
        }
        
        /* Header Styles */
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
        
        .logo-text .pe {
            color: #BF0A30;
        }
        
        nav {
            display: flex;
            gap: 32px;
            align-items: center;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: color 0.3s ease;
        }
        
        nav a:hover {
            color: #87CEEB;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #f8fafc 0%, #eff6ff 100%);
            padding: 80px 0 60px;
            text-align: center;
        }
        
        .hero-section h1 {
            font-size: 48px;
            color: #0A2E50;
            margin-bottom: 16px;
            font-weight: 800;
        }
        
        .hero-section .subtitle {
            font-size: 20px;
            color: #4a5568;
            margin-bottom: 12px;
            font-style: italic;
        }
        
        .hero-section .disclaimer {
            font-size: 14px;
            color: #718096;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 60px 0 80px;
            background: white;
        }
        
        .testimonial-card {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 32px;
            margin-bottom: 24px;
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            gap: 24px;
            align-items: flex-start;
        }
        
        .testimonial-card:hover {
            border-color: #0A2E50;
            box-shadow: 0 8px 24px rgba(10, 46, 80, 0.1);
            transform: translateY(-2px);
        }
        
        .testimonial-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #BF0A30;
            flex-shrink: 0;
        }
        
        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .testimonial-content {
            flex: 1;
            position: relative;
        }
        
        .testimonial-content::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: -10px;
            font-size: 48px;
            color: #BF0A30;
            opacity: 0.15;
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .testimonial-quote {
            font-size: 18px;
            color: #1a1a1a;
            line-height: 1.7;
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            font-size: 16px;
            color: #4a5568;
            font-weight: 600;
            font-style: italic;
        }
        
        .divider {
            text-align: center;
            margin: 40px 0;
            color: #cbd5e0;
            font-size: 24px;
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #0A2E50 0%, #083156 100%);
            padding: 60px 0;
            text-align: center;
        }
        
        .cta-section h2 {
            color: white;
            font-size: 32px;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .cta-section p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 18px;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto 32px;
        }
        
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #BF0A30 0%, #9A0826 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(191, 10, 48, 0.3);
        }
        
        .btn-primary:hover {
            background: #9A0826;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(191, 10, 48, 0.4);
        }
        
        /* Footer */
        footer {
            background: #0A2E50;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        
        footer p {
            font-size: 14px;
            opacity: 0.9;
        }
        
        /* Mobile Nav */
        .hamburger-btn {
            display: none;
            background: none;
            border: 2px solid rgba(255,255,255,0.5);
            color: white; font-size: 22px;
            cursor: pointer; width: 44px; height: 44px;
            border-radius: 8px;
            align-items: center; justify-content: center;
        }

        .mobile-nav-overlay {
            display: none;
            position: fixed; top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5); z-index: 1001;
        }

        .mobile-nav-drawer {
            position: fixed; top: 0; left: 0;
            width: 280px; height: 100%;
            background: #0A2E50;
            padding: 72px 24px 24px;
            z-index: 1002;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            display: flex; flex-direction: column;
        }

        .mobile-nav-drawer.active { transform: translateX(0); }
        .mobile-nav-overlay.active { display: block; }

        .mobile-nav-close {
            position: absolute; top: 16px; right: 16px;
            background: none; border: none;
            color: white; font-size: 28px;
            cursor: pointer; width: 44px; height: 44px;
            display: flex; align-items: center; justify-content: center;
        }

        .mobile-nav-drawer a {
            color: white; text-decoration: none;
            font-weight: 600; font-size: 16px;
            padding: 14px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            transition: color 0.2s ease;
        }

        .mobile-nav-drawer a:hover { color: #87CEEB; }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 20px;
            }

            nav { display: none; }
            .hamburger-btn { display: flex; }

            .container {
                padding: 0 20px;
            }

            .hero-section h1 {
                font-size: 32px;
            }

            .hero-section .subtitle {
                font-size: 18px;
            }

            .testimonial-card {
                padding: 24px;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .testimonial-avatar {
                width: 100px;
                height: 100px;
                margin-bottom: 16px;
            }

            .testimonial-content::before {
                left: 50%;
                transform: translateX(-50%);
            }

            .testimonial-quote {
                font-size: 16px;
            }

            .cta-section h2 {
                font-size: 28px;
            }
        }
    </style>
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
            <nav>
                <a href="index.php#problems">Challenges</a>
                <a href="index.php#solutions">Solutions</a>
                <a href="process.php">Our Process</a>
                <a href="blogs.php">Blog</a>
                <a href="tools.php">Free Tools</a>
                <a href="testimonials.php">Testimonials</a>
                <a href="schedule.php">Secure a Strategic Debrief</a>
            </nav>
            <button class="hamburger-btn" id="hamburgerBtn" aria-label="Open menu">&#9776;</button>
        </div>
    </header>

    <div class="mobile-nav-overlay" id="navOverlay"></div>
    <div class="mobile-nav-drawer" id="navDrawer">
        <button class="mobile-nav-close" id="navClose" aria-label="Close menu">&times;</button>
        <a href="index.php#problems">Challenges</a>
        <a href="index.php#solutions">Solutions</a>
        <a href="process.php">Our Process</a>
        <a href="blogs.php">Blog</a>
        <a href="tools.php">Free Tools</a>
        <a href="testimonials.php">Testimonials</a>
        <a href="schedule.php">Secure a Strategic Debrief</a>
    </div>

    <section class="hero-section">
        <div class="container">
            <h1>Real Results. Anonymous Clients.</h1>
            <p class="subtitle">Because in private equity, discretion isn't a courtesy — it's a requirement.</p>
            <p class="disclaimer">Our clients don't do press releases. They close deals. The outcomes below are real, client-approved (and NDA-cleared) for general sharing — firm names withheld by mutual agreement.</p>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">

            <div class="testimonial-card">
                <div class="testimonial-avatar" style="background: linear-gradient(135deg, #0A2E50, #1a4d7a); display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#87CEEB" stroke-width="2" width="36" height="36"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">After we integrated DealCloud with PitchBook and automated our CIM intake workflow, our analysts reclaimed roughly 12 hours per deal. IC memo prep went from 3 days to same-day. We closed 4 add-ons in the quarter we previously would have processed 1.</p>
                    <p class="testimonial-author">— Managing Director, Lower-Middle-Market PE Fund (AUM: $400M–$800M)</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar" style="background: linear-gradient(135deg, #0A2E50, #1a4d7a); display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#87CEEB" stroke-width="2" width="36" height="36"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">We were paying for six software tools and using maybe 40% of the features in two of them. PE Tech Partners audited our stack and helped us consolidate. We cut $180K in annual SaaS spend and actually got more functionality out of what we kept.</p>
                    <p class="testimonial-author">— COO, M&amp;A Advisory Boutique (12-person team)</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar" style="background: linear-gradient(135deg, #0A2E50, #1a4d7a); display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#87CEEB" stroke-width="2" width="36" height="36"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">NDA-to-exclusivity used to take us 6–8 weeks on a typical deal. After the pipeline and diligence workflow overhaul, we're consistently hitting 3–4 weeks. That speed has become a real differentiator with intermediaries — they know we move.</p>
                    <p class="testimonial-author">— Partner, Growth Equity Firm ($1.2B AUM)</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar" style="background: linear-gradient(135deg, #0A2E50, #1a4d7a); display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#87CEEB" stroke-width="2" width="36" height="36"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">Our LP reporting used to occupy two analysts for nearly a week every quarter. Between manual data pulls, formatting, and review cycles, it was brutal. Now it's automated end-to-end — one analyst, one day, zero complaints from LPs. That alone justified the engagement.</p>
                    <p class="testimonial-author">— CFO, Multi-Strategy Private Equity Firm</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar" style="background: linear-gradient(135deg, #0A2E50, #1a4d7a); display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#87CEEB" stroke-width="2" width="36" height="36"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">We'd had a data breach scare — nothing material, but enough to know our deal document security was not where it needed to be. PE Tech Partners locked it down inside 30 days. SOC 2 aligned, zero new software to learn, fully integrated with how we already work.</p>
                    <p class="testimonial-author">— General Counsel, Mid-Market PE Firm</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar" style="background: linear-gradient(135deg, #0A2E50, #1a4d7a); display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#87CEEB" stroke-width="2" width="36" height="36"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/></svg>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">We came in expecting to buy new software. They came back and told us we didn't need it — we just weren't using what we had. That kind of honesty is rare. They optimized our existing Affinity + Slack + Google Workspace setup and we saw immediate productivity gains.</p>
                    <p class="testimonial-author">— Founding Partner, Boutique M&amp;A Advisory</p>
                </div>
            </div>

            <div class="divider">⸻</div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Confidentiality is kind of our thing.</h2>
            <p>While we can't share real client names (NDA life!), we can share the results. Curious how we help firms like yours close faster, cleaner, and with total discretion?</p>
            <a href="schedule.php" class="btn btn-primary">Secure a Strategic Debrief</a>
            <p style="color: rgba(255,255,255,0.8); font-size: 14px; margin-top: 12px; font-style: italic;">No cost. No pressure. High clarity.</p>
        </div>
    </section>

    <footer>
        <div class="container" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
            <div>
                <p style="margin-bottom: 12px;"><strong>PE Tech Partners</strong></p>
                <p style="margin-bottom: 8px;">2125 Albany Post Rd Suite 106<br>Montrose, NY 10548</p>
                <p style="margin-bottom: 12px;">Phone: 917-715-7100</p>
                <p>&copy; <?php echo date('Y'); ?> PE Tech Partners. All rights reserved.</p>
            </div>
            <div style="text-align: right;">
                <p style="margin-bottom: 8px;"><a href="terms.php" style="color: #87CEEB; text-decoration: none;">Terms of Service</a></p>
                <p style="margin-bottom: 8px;"><a href="privacy.php" style="color: #87CEEB; text-decoration: none;">Privacy Policy</a></p>
                <p><a href="schedule.php" style="color: #87CEEB; text-decoration: none;">Contact Us</a></p>
            </div>
        </div>
    </footer>

    <script>
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const navOverlay   = document.getElementById('navOverlay');
        const navDrawer    = document.getElementById('navDrawer');
        const navClose     = document.getElementById('navClose');
        function openNav()  { navDrawer.classList.add('active'); navOverlay.classList.add('active'); }
        function closeNav() { navDrawer.classList.remove('active'); navOverlay.classList.remove('active'); }
        hamburgerBtn.addEventListener('click', openNav);
        navClose.addEventListener('click', closeNav);
        navOverlay.addEventListener('click', closeNav);
        navDrawer.querySelectorAll('a').forEach(a => a.addEventListener('click', closeNav));
    </script>
</body>
</html>
