<?php
// Logo
$logo_svg = "attached_assets/Home_1761834398568.png";

// Navigation items
$nav_items = [
    
    ['href' => 'index.php#problems', 'text' => 'Challenges'],
    ['href' => 'index.php#solutions', 'text' => 'Solutions'],
    ['href' => 'process.php', 'text' => 'Our Process'],
    ['href' => 'blogs.php', 'text' => 'Blog'],
    ['href' => 'testimonials.php', 'text' => 'Testimonials'],
    ['href' => 'schedule.php', 'text' => 'Storm the Data Room']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpeg" href="attached_assets/Home_1761834398568.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hidden Deal Killer: Automation for Private Equity Firms | PE Tech Partners</title>
    <meta name="description" content="See how automation for private equity firms eliminates deal killers and accelerates M&A. What smart PE firms do differently.">
    <meta name="keywords" content="automation for private equity firms, private equity automation, M&A automation, deal flow automation, PE technology, private equity technology solutions, M&A deal acceleration">
    <meta name="author" content="PE Tech Partners">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="The Hidden Deal Killer: Automation for Private Equity Firms">
    <meta property="og:description" content="See how automation for private equity firms eliminates deal killers and accelerates M&A. What smart PE firms do differently.">
    <meta property="og:image" content="attached_assets/Home_1761834398568.png">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The Hidden Deal Killer: Automation for Private Equity Firms">
    <meta name="twitter:description" content="See how automation for private equity firms eliminates deal killers and accelerates M&A. What smart PE firms do differently.">
    <meta name="twitter:image" content="attached_assets/Home_1761834398568.png">
    
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

            .nav-links {
                display: none;
            }
            
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
        </nav>
    </header>

    <div class="gamma-container">
        <iframe src="https://the-hidden-deal-killer-h-nvk490l.gamma.site/" title="Automation for Private Equity Firms: The Hidden Deal Killer" allowfullscreen></iframe>
    </div>

    <footer>
        <div class="footer-content">
            <a href="index.php#offer" class="btn btn-primary">Secure a Strategic Debrief</a>
        </div>
    </footer>

    <div class="slide-tab">
        <a href="index.php#offer" class="slide-tab-button">BOOK NOW</a>
    </div>
</body>
</html>
