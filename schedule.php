<?php
// Initialize variables
$form_submitted = false;
$errors = [];
$success_message = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;
    
    // Sanitize and validate inputs
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $company = isset($_POST['company']) ? trim($_POST['company']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $notes = isset($_POST['notes']) ? trim($_POST['notes']) : '';
    
    // Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($company)) {
        $errors[] = "Company name is required";
    }
    
    if (empty($phone)) {
        $errors[] = "Phone number is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // In a real application, you would:
        // - Send an email to your team
        // - Store in a database
        // - Integrate with a calendar/scheduling system (Calendly, etc.)
        // For now, we'll just show a success message
        
        $success_message = "Thanks for scheduling a call! We'll reach out to you at " . htmlspecialchars($phone) . " within 24 hours to confirm a time that works best for you.";
        
        // Clear form fields after successful submission
        $name = $company = $phone = $notes = '';
    }
}

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
    <title>Schedule a Strategy Call - PE Tech Partners</title>
    <meta name="description" content="Schedule a no-cost strategic debrief with PE Tech Partners. Get clear, actionable guidance on IT diligence, integration, and portfolio technology risks.">
    <link rel="canonical" href="https://petechpartners.com/schedule.php">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Schedule a Strategy Call - PE Tech Partners">
    <meta property="og:description" content="Schedule a no-cost strategic debrief with PE Tech Partners. Get clear, actionable guidance on IT diligence, integration, and portfolio technology risks.">
    <meta property="og:url" content="https://petechpartners.com/schedule.php">
    <meta property="og:image" content="https://petechpartners.com/attached_assets/Home_1761834398568.png">
    <meta name="twitter:card" content="summary_large_image">
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
            background: linear-gradient(135deg, #0A2E50 0%, #1a4d7a 100%);
            min-height: 100vh;
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

        /* Schedule Section */
        .schedule-container {
            max-width: 700px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .schedule-header {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease;
        }

        .schedule-header h1 {
            font-size: 3rem;
            color: white;
            margin-bottom: 1rem;
        }

        .schedule-header .subtitle {
            font-size: 1.3rem;
            color: #87CEEB;
            margin-bottom: 0.5rem;
        }

        .schedule-header p {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.9);
        }

        .form-card {
            background: white;
            border-radius: 16px;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: scaleIn 0.8s ease;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #0A2E50;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #87CEEB;
            box-shadow: 0 0 0 3px rgba(135, 206, 235, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            width: 100%;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #BF0A30 0%, #8B0000 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(191, 10, 48, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Messages */
        .error-message {
            background: #fee;
            border-left: 4px solid #c00;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 4px;
            animation: slideInLeft 0.5s ease;
        }

        .error-message ul {
            margin-left: 1.5rem;
            color: #c00;
        }

        .success-message {
            background: #efe;
            border-left: 4px solid #0c0;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-radius: 4px;
            color: #060;
            animation: slideInLeft 0.5s ease;
            font-weight: 500;
        }

        /* Benefits Box */
        .benefits-box {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            color: white;
            padding: 2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            border: 1px solid rgba(255,255,255,0.2);
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        .benefits-box h3 {
            margin-bottom: 1rem;
            color: #87CEEB;
            font-size: 1.3rem;
        }

        .benefits-list {
            list-style: none;
            padding: 0;
        }

        .benefits-list li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }

        .benefits-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #87CEEB;
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Animations */
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

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Mobile Responsive */
        .hamburger-btn {
            display: none;
            background: none;
            border: 2px solid rgba(255,255,255,0.5);
            color: white;
            font-size: 22px;
            cursor: pointer;
            width: 44px;
            height: 44px;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
        }

        .mobile-nav-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 1001;
        }

        .mobile-nav-drawer {
            position: fixed;
            top: 0; left: 0;
            width: 280px;
            height: 100%;
            background: #0A2E50;
            padding: 72px 24px 24px;
            z-index: 1002;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .mobile-nav-drawer.active { transform: translateX(0); }
        .mobile-nav-overlay.active { display: block; }

        .mobile-nav-close {
            position: absolute;
            top: 16px; right: 16px;
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

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hamburger-btn { display: flex; }

            .schedule-header h1 {
                font-size: 2rem;
            }

            .schedule-header .subtitle {
                font-size: 1.1rem;
            }

            .form-card {
                padding: 2rem 1.5rem;
            }

            .schedule-container {
                margin: 2rem auto;
            }
        }

        .required {
            color: #BF0A30;
        }

        .helper-text {
            font-size: 0.875rem;
            color: #666;
            margin-top: 0.25rem;
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

    <div class="schedule-container">
        <div class="schedule-header">
            <h1>Secure a Strategic Debrief</h1>
            <p class="subtitle">No cost. No pressure. High clarity.</p>
            <p>Let's discuss how we can streamline your tech stack and accelerate your deals</p>
        </div>

        <div class="benefits-box">
            <h3>What You'll Get:</h3>
            <ul class="benefits-list">
                <li>Quick assessment of your current tech stack pain points</li>
                <li>Immediate insights on integration opportunities</li>
                <li>Customized recommendations for your firm</li>
                <li>No obligation—just actionable advice</li>
            </ul>
        </div>

        <div class="form-card">
            <iframe 
                src="https://api.leadconnectorhq.com/widget/booking/2jcoC62MukjeOCrx4UdP" 
                style="width: 100%; border: none; overflow: hidden; min-height: 800px;" 
                scrolling="no" 
                id="2jcoC62MukjeOCrx4UdP_1764001882575"
            ></iframe>
        </div>
    </div>

    <footer style="background: rgba(10, 46, 80, 0.95); color: white; padding: 40px 0; margin-top: 60px;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px; display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
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

    <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
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
