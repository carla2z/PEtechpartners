<?php
$nav_items = [
    ['href' => 'index.php#problems', 'text' => 'Challenges'],
    ['href' => 'index.php#solutions', 'text' => 'Solutions'],
    ['href' => 'process.php', 'text' => 'Our Process'],
    ['href' => 'blogs.php', 'text' => 'Blog'],
    ['href' => 'tools.php', 'text' => 'Free Tools'],
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
    <title>Terms of Service - PE Tech Partners</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
        
        .content {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 40px;
        }
        
        h1 {
            font-size: 42px;
            color: #0A2E50;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .last-updated {
            color: #666;
            margin-bottom: 40px;
            font-size: 14px;
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
            font-size: 16px;
        }
        
        ul, ol {
            margin: 20px 0 20px 24px;
            font-size: 16px;
        }
        
        li {
            margin-bottom: 12px;
        }
        
        strong {
            color: #0A2E50;
            font-weight: 600;
        }
        
        footer {
            background: #0A2E50;
            color: white;
            padding: 40px 0;
            margin-top: 80px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }
        
        .footer-info p {
            margin-bottom: 12px;
            opacity: 0.9;
        }
        
        .footer-links {
            text-align: right;
        }
        
        .footer-links a {
            color: #87CEEB;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 32px; }
            h2 { font-size: 24px; }
            .content { padding: 0 20px; }
            .footer-content { grid-template-columns: 1fr; }
            .footer-links { text-align: left; margin-top: 20px; }
            nav { display: none; }
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
                <span class="logo-text"><span class="pe">PE</span> TECH PARTNERS</span>
            </a>
            <nav>
                <?php foreach ($nav_items as $item): ?>
                    <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['text']) ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>

    <div class="content">
        <h1>Terms of Service</h1>
        <p class="last-updated">Last Updated: November 24, 2025</p>

        <p>Welcome to PE Tech Partners. By accessing or using our website and services, you agree to be bound by these Terms of Service. Please read them carefully.</p>

        <h2>1. Acceptance of Terms</h2>
        <p>By accessing this website (petechpartners.com) and engaging with PE Tech Partners' services, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service and our Privacy Policy.</p>

        <h2>2. Services Description</h2>
        <p>PE Tech Partners provides technology consulting, integration, and alignment services specifically designed for private equity firms and M&A advisors. Our services include but are not limited to:</p>
        <ul>
            <li>Technology assessment and auditing</li>
            <li>System integration and workflow automation</li>
            <li>Due diligence technology consulting</li>
            <li>Portfolio company technology alignment</li>
            <li>Strategic technology planning</li>
        </ul>

        <h2>3. Confidentiality and Non-Disclosure</h2>
        <p>We understand the sensitive nature of private equity transactions and portfolio company information. PE Tech Partners maintains strict confidentiality protocols:</p>
        <ul>
            <li>All client information is treated as confidential</li>
            <li>We execute NDAs before any detailed discussions or assessments</li>
            <li>Deal-specific information is never shared with third parties</li>
            <li>Portfolio company data is isolated and protected</li>
        </ul>

        <h2>4. Professional Services Agreement</h2>
        <p>Detailed consulting engagements are governed by separate, customized Professional Services Agreements that supersede these general Terms of Service. These agreements will specify:</p>
        <ul>
            <li>Scope of work and deliverables</li>
            <li>Fees and payment terms</li>
            <li>Timeline and milestones</li>
            <li>Specific confidentiality provisions</li>
            <li>Intellectual property rights</li>
        </ul>

        <h2>5. Initial Consultations</h2>
        <p>We offer complimentary initial strategic assessments. These consultations:</p>
        <ul>
            <li>Are provided at no charge</li>
            <li>Carry no obligation to engage our services</li>
            <li>Are subject to the same confidentiality standards as paid engagements</li>
            <li>May result in high-level recommendations without detailed implementation plans</li>
        </ul>

        <h2>6. Limitation of Liability</h2>
        <p>PE Tech Partners provides professional consulting services based on information provided by clients. While we maintain high standards of professional excellence:</p>
        <ul>
            <li>We are not liable for business decisions made by clients based on our recommendations</li>
            <li>Our liability is limited to the fees paid for specific engagements</li>
            <li>We do not guarantee specific business outcomes or returns on investment</li>
            <li>Technology implementations may encounter unforeseen technical challenges</li>
        </ul>

        <h2>7. Intellectual Property</h2>
        <p>Unless otherwise specified in a Professional Services Agreement:</p>
        <ul>
            <li>PE Tech Partners retains ownership of proprietary methodologies and frameworks</li>
            <li>Client-specific deliverables and implementations belong to the client</li>
            <li>Generic best practices and recommendations may be reused across clients</li>
            <li>Deal-specific insights remain confidential and are never shared</li>
        </ul>

        <h2>8. Website Content</h2>
        <p>The content on this website is for informational purposes only:</p>
        <ul>
            <li>Blog articles represent our professional opinions at the time of publication</li>
            <li>Case studies may be anonymized to protect client confidentiality</li>
            <li>Technology recommendations evolve as tools and platforms change</li>
            <li>Contact us for current, specific guidance for your situation</li>
        </ul>

        <h2>9. Third-Party Links and Services</h2>
        <p>Our website and services may reference third-party tools, platforms, or service providers:</p>
        <ul>
            <li>We are not responsible for third-party services or their terms</li>
            <li>Links to external sites are provided for convenience only</li>
            <li>We may receive referral fees from certain technology vendors (disclosed when applicable)</li>
            <li>Client selection of vendors is always voluntary and at their discretion</li>
        </ul>

        <h2>10. Payment Terms</h2>
        <p>Unless otherwise specified in a Professional Services Agreement:</p>
        <ul>
            <li>Invoices are due within 30 days of receipt</li>
            <li>Late payments may incur interest charges</li>
            <li>Clients are responsible for all costs of collection</li>
            <li>Work may be paused if accounts are past due</li>
        </ul>

        <h2>11. Termination</h2>
        <p>Either party may terminate services with written notice:</p>
        <ul>
            <li>Clients may terminate at any time for any reason</li>
            <li>Fees for work completed are due upon termination</li>
            <li>Confidentiality obligations survive termination</li>
            <li>Work product completed to date will be delivered upon final payment</li>
        </ul>

        <h2>12. Modifications to Terms</h2>
        <p>PE Tech Partners reserves the right to modify these Terms of Service:</p>
        <ul>
            <li>Changes will be posted on this page with updated dates</li>
            <li>Continued use of our services constitutes acceptance of changes</li>
            <li>Active engagements are governed by the terms in effect at signing</li>
        </ul>

        <h2>13. Governing Law</h2>
        <p>These Terms of Service are governed by the laws of the State of New York. Any disputes will be resolved in the courts of Westchester County, New York.</p>

        <h2>14. Contact Information</h2>
        <p>For questions about these Terms of Service, please contact us:</p>
        <p>
            <strong>PE Tech Partners</strong><br>
            2125 Albany Post Rd Suite 106<br>
            Montrose, NY 10548<br>
            Phone: 917-715-7100
        </p>

        <h2>15. Entire Agreement</h2>
        <p>These Terms of Service, together with our Privacy Policy and any executed Professional Services Agreement, constitute the entire agreement between PE Tech Partners and clients regarding our services.</p>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <p><strong>PE Tech Partners</strong></p>
                <p>2125 Albany Post Rd Suite 106<br>Montrose, NY 10548</p>
                <p>Phone: 917-715-7100</p>
                <p>&copy; 2025 PE Tech Partners. All rights reserved.</p>
            </div>
            <div class="footer-links">
                <a href="terms.php">Terms of Service</a>
                <a href="privacy.php">Privacy Policy</a>
                <a href="schedule.php">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>
