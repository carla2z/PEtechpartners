<?php
// Logo
$logo_svg = "attached_assets/Home_1761834398568.png";

// Navigation items
$nav_items = [
    ['href' => 'index.php#problems', 'text' => 'Challenges'],
    ['href' => 'index.php#solutions', 'text' => 'Solutions'],
    ['href' => 'process.php', 'text' => 'Our Process'],
    ['href' => 'blogs.php', 'text' => 'Blog'],
    ['href' => 'tools.php', 'text' => 'Free Tools'],
    ['href' => 'testimonials.php', 'text' => 'Testimonials'],
    ['href' => 'schedule.php', 'text' => 'Secure a Strategic Debrief']
];
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpeg" href="attached_assets/Home_1761834398568.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Process - PE Tech Partners</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header & Navigation */
        header {
            background: rgba(10, 46, 80, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 8px;
            padding: 5px;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: rotate(15deg);
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
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

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #87CEEB;
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

        /* Gamma Embed Container */
        .gamma-container {
            width: 100%;
            background: white;
            position: relative;
            height: calc(100vh - 82px - 100px);
        }

        .gamma-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Footer CTA */
        footer {
            background: linear-gradient(135deg, #0A2E50 0%, #083156 100%);
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            flex-shrink: 0;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transition: left 0.5s ease;
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

        /* Slide-out Tab for Mobile */
        .slide-tab {
            display: none;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            body {
                display: block;
            }

            .nav-links { display: none; }
            .hamburger-btn { display: flex; }
            
            header {
                position: fixed;
                width: 100%;
            }

            .gamma-container {
                min-height: 100vh;
                padding-top: 70px;
            }

            .gamma-container iframe {
                height: calc(100vh - 70px);
            }

            footer {
                display: none;
            }

            .slide-tab {
                display: block;
                position: fixed;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                z-index: 9999;
            }

            .slide-tab-button {
                background: linear-gradient(135deg, #BF0A30 0%, #9A0826 100%);
                color: white;
                padding: 0.75rem 0.4rem;
                text-decoration: none;
                font-size: 0.75rem;
                font-weight: 700;
                writing-mode: vertical-rl;
                text-orientation: mixed;
                border-radius: 6px 0 0 6px;
                box-shadow: -2px 2px 8px rgba(0,0,0,0.3);
                display: block;
                letter-spacing: 1px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo-container">
                <img src="<?= htmlspecialchars($logo_svg) ?>" alt="PE Tech Partners Logo" class="logo">
                <div class="logo-text">
                    <div><span class="pe">PE</span> TECH PARTNERS</div>
                    <div class="logo-subtitle">STRATEGIC SOLUTIONS FOR PE & M&A FIRMS</div>
                </div>
            </a>
            <ul class="nav-links">
                <?php foreach ($nav_items as $item): ?>
                    <li>
                        <a href="<?= htmlspecialchars($item['href']) ?>">
                            <?= htmlspecialchars($item['text']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <button class="hamburger-btn" id="hamburgerBtn" aria-label="Open menu">&#9776;</button>
        </nav>
    </header>

    <div class="mobile-nav-overlay" id="navOverlay"></div>
    <div class="mobile-nav-drawer" id="navDrawer">
        <button class="mobile-nav-close" id="navClose" aria-label="Close menu">&times;</button>
        <?php foreach ($nav_items as $item): ?>
            <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['text']) ?></a>
        <?php endforeach; ?>
    </div>

    <div class="gamma-container">
        <iframe src="https://the-pe-tech-edge-best-pr-48ztpod.gamma.site/" title="PE Tech Edge Process" allowfullscreen></iframe>
    </div>

    <footer>
        <div class="footer-content" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start; max-width: 1200px; margin: 0 auto;">
            <div>
                <p style="margin-bottom: 12px;"><strong>PE Tech Partners</strong></p>
                <p style="margin-bottom: 8px;">2125 Albany Post Rd Suite 106<br>Montrose, NY 10548</p>
                <p style="margin-bottom: 12px;">Phone: 917-715-7100</p>
                <p>&copy; <?php echo date('Y'); ?> PE Tech Partners. All rights reserved.</p>
            </div>
            <div style="text-align: right;">
                <p style="margin-bottom: 8px;"><a href="terms.php" style="color: #87CEEB; text-decoration: none;">Terms of Service</a></p>
                <p style="margin-bottom: 8px;"><a href="privacy.php" style="color: #87CEEB; text-decoration: none;">Privacy Policy</a></p>
                <p style="margin-bottom: 12px;"><a href="schedule.php" style="color: #87CEEB; text-decoration: none;">Contact Us</a></p>
                <a href="schedule.php" class="btn btn-primary" style="display: inline-block; margin-top: 8px;">Secure a Strategic Debrief</a>
                <p style="color: rgba(255,255,255,0.8); font-size: 14px; margin-top: 8px; font-style: italic;">No cost. No pressure. High clarity.</p>
            </div>
        </div>
    </footer>

    <div class="slide-tab">
        <a href="index.php#offer" class="slide-tab-button">BOOK NOW</a>
    </div>

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
