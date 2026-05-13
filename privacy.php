<?php
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
    <title>Privacy Policy - PE Tech Partners</title>
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
        
        .highlight-box {
            background: #f8f9fa;
            border-left: 4px solid #BF0A30;
            padding: 24px;
            margin: 32px 0;
            border-radius: 4px;
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
        <h1>Privacy Policy</h1>
        <p class="last-updated">Last Updated: November 24, 2025</p>

        <p>At PE Tech Partners, we take your privacy seriously. This Privacy Policy explains how we collect, use, protect, and handle your personal information in accordance with applicable data protection laws.</p>

        <h2>1. Information We Collect</h2>
        
        <h3>Information You Provide Directly</h3>
        <ul>
            <li><strong>Contact Information:</strong> Name, email address, phone number, company name</li>
            <li><strong>Professional Details:</strong> Job title, firm type, areas of interest</li>
            <li><strong>Communication Content:</strong> Information shared during consultations, emails, and calls</li>
            <li><strong>Engagement Data:</strong> Details about technology stacks, deal processes, and business challenges</li>
        </ul>

        <h3>Information Collected Automatically</h3>
        <ul>
            <li><strong>Website Usage:</strong> Pages visited, time spent, referring sources</li>
            <li><strong>Technical Data:</strong> IP address, browser type, device information</li>
            <li><strong>Cookies:</strong> Analytics and performance tracking (see Cookie Policy below)</li>
        </ul>

        <h2>2. How We Use Your Information</h2>
        <p>We use collected information for the following purposes:</p>
        <ul>
            <li><strong>Service Delivery:</strong> To provide consulting services and technology assessments</li>
            <li><strong>Communication:</strong> To respond to inquiries and schedule consultations</li>
            <li><strong>Improvement:</strong> To enhance our website, services, and user experience</li>
            <li><strong>Marketing:</strong> To send relevant content and updates (with your consent)</li>
            <li><strong>Legal Compliance:</strong> To meet regulatory requirements and protect our rights</li>
        </ul>

        <h2>3. Data Security and Confidentiality</h2>
        <p>Given the sensitive nature of private equity work, we maintain enterprise-grade security measures:</p>
        
        <h3>Technical Safeguards</h3>
        <ul>
            <li>Encrypted data transmission (SSL/TLS)</li>
            <li>Secure data storage with access controls</li>
            <li>Regular security audits and updates</li>
            <li>Isolated environments for client-specific data</li>
        </ul>

        <h3>Organizational Safeguards</h3>
        <ul>
            <li>Confidentiality agreements with all team members</li>
            <li>Need-to-know access policies</li>
            <li>Regular security training</li>
            <li>Incident response protocols</li>
        </ul>

        <div class="highlight-box">
            <p><strong>Deal Confidentiality:</strong> We understand that private equity transactions require absolute discretion. All deal-related information is treated as confidential and protected under separate NDA agreements.</p>
        </div>

        <h2>4. Information Sharing and Disclosure</h2>
        <p>We do not sell your personal information. We may share information only in these limited circumstances:</p>
        
        <h3>With Your Consent</h3>
        <ul>
            <li>When you explicitly authorize us to share information</li>
            <li>When introducing you to technology vendors (at your request)</li>
        </ul>

        <h3>Service Providers</h3>
        <ul>
            <li>Calendar and scheduling tools (LeadConnector/GoHighLevel)</li>
            <li>Email communication platforms</li>
            <li>Analytics providers (Google Analytics)</li>
            <li>Cloud infrastructure providers</li>
        </ul>
        <p>All service providers are bound by confidentiality obligations and process data only as instructed.</p>

        <h3>Legal Requirements</h3>
        <ul>
            <li>To comply with court orders or legal processes</li>
            <li>To protect our rights and prevent fraud</li>
            <li>In connection with business transfers (with confidentiality maintained)</li>
        </ul>

        <h2>5. Data Retention</h2>
        <p>We retain your information for as long as necessary to provide services and comply with legal obligations:</p>
        <ul>
            <li><strong>Active Engagements:</strong> Throughout the engagement and for 7 years after completion (standard professional services retention)</li>
            <li><strong>Prospect Information:</strong> Until you request deletion or opt-out of communications</li>
            <li><strong>Website Analytics:</strong> Anonymized after 26 months</li>
            <li><strong>Legal Records:</strong> As required by applicable law</li>
        </ul>

        <h2>6. Your Rights and Choices</h2>
        <p>You have the following rights regarding your personal information:</p>
        
        <h3>Access and Correction</h3>
        <ul>
            <li>Request access to your personal data</li>
            <li>Correct inaccurate or incomplete information</li>
            <li>Receive a copy of your data in a portable format</li>
        </ul>

        <h3>Control and Deletion</h3>
        <ul>
            <li>Opt-out of marketing communications at any time</li>
            <li>Request deletion of your personal information (subject to legal retention requirements)</li>
            <li>Object to certain processing activities</li>
        </ul>

        <h3>California Residents (CCPA/CPRA)</h3>
        <p>If you are a California resident, you have additional rights including:</p>
        <ul>
            <li>Right to know what personal information is collected</li>
            <li>Right to delete personal information</li>
            <li>Right to opt-out of sale of personal information (we do not sell personal information)</li>
            <li>Right to non-discrimination for exercising privacy rights</li>
        </ul>

        <h3>European Residents (GDPR)</h3>
        <p>If you are in the European Economic Area, you have additional rights including:</p>
        <ul>
            <li>Right to data portability</li>
            <li>Right to restrict processing</li>
            <li>Right to object to automated decision-making</li>
            <li>Right to lodge a complaint with a supervisory authority</li>
        </ul>

        <h2>7. Cookies and Tracking Technologies</h2>
        <p>We use cookies and similar technologies to improve website functionality and understand usage patterns:</p>
        
        <h3>Essential Cookies</h3>
        <p>Required for website operation (cannot be disabled)</p>
        
        <h3>Analytics Cookies</h3>
        <p>Help us understand how visitors use our site (Google Analytics)</p>
        
        <h3>Marketing Cookies</h3>
        <p>Track conversions from ads and campaigns (with consent)</p>
        
        <p>You can control cookies through your browser settings, though disabling certain cookies may affect website functionality.</p>

        <h2>8. Third-Party Links</h2>
        <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We recommend reviewing their privacy policies before providing any personal information.</p>

        <h2>9. Children's Privacy</h2>
        <p>Our services are designed for business professionals and are not directed at individuals under 18 years of age. We do not knowingly collect personal information from children.</p>

        <h2>10. International Data Transfers</h2>
        <p>Our services are based in the United States. If you access our services from outside the US, your information may be transferred to and processed in the US. We ensure appropriate safeguards are in place for international transfers.</p>

        <h2>11. Changes to This Privacy Policy</h2>
        <p>We may update this Privacy Policy periodically to reflect changes in our practices or legal requirements. We will post the updated policy on this page with a new "Last Updated" date. Continued use of our services after changes constitutes acceptance of the updated policy.</p>

        <h2>12. Contact Us About Privacy</h2>
        <p>If you have questions about this Privacy Policy or wish to exercise your privacy rights, please contact us:</p>
        <p>
            <strong>PE Tech Partners</strong><br>
            2125 Albany Post Rd Suite 106<br>
            Montrose, NY 10548<br>
            Phone: 917-715-7100<br>
            Email: Contact us through our <a href="schedule.php" style="color: #BF0A30;">scheduling page</a>
        </p>

        <h2>13. Your Consent</h2>
        <p>By using our website and services, you consent to the collection and use of information as described in this Privacy Policy. For consulting engagements, additional consent and confidentiality agreements will govern the handling of sensitive business information.</p>
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
