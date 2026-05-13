<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpeg" href="attached_assets/Home_1761834398568.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - PE Tech Partners</title>
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
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 20px;
            }
            
            nav {
                display: none;
            }
            
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
                <a href="testimonials.php">Testimonials</a>
                <a href="schedule.php">Storm the Data Room</a>
            </nav>
        </div>
    </header>

    <section class="hero-section">
        <div class="container">
            <h1>What Our Clients (Probably) Would Say</h1>
            <p class="subtitle">(If NDAs and discretion didn't exist)</p>
            <p class="disclaimer">All testimonials below are fictional and for humor only — because our real clients don't do public praise, they do private equity.</p>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/IMG_3905_1761650627389.jpeg" alt="Some Rich Dude">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">These guys are great. We'd tell you what they did, but then we'd have to acquire you.</p>
                    <p class="testimonial-author">— Some Rich Dude</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/stock_images/wealthy_businessman__6994a6e0.jpg" alt="Unnamed Managing Partner">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">Impeccable work. Confidentiality so tight I can't even tell my wife why I'm smiling.</p>
                    <p class="testimonial-author">— Unnamed Managing Partner</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/stock_images/wealthy_businessman__47de340c.jpg" alt="Anonymous Billionaire">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">They handled our deal so smoothly I almost enjoyed due diligence. Almost.</p>
                    <p class="testimonial-author">— Anonymous Billionaire (we assume)</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/stock_images/wealthy_businessman__2eb9fe28.jpg" alt="Discreet PE Guy">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">We don't talk about them. At all. Which is exactly why we keep hiring them.</p>
                    <p class="testimonial-author">— Discreet PE Guy</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/IMG_3907_1761651200700.jpeg" alt="Too Many Zeros">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">Five stars. Would recommend… if that didn't violate five NDAs.</p>
                    <p class="testimonial-author">— Someone with Too Many Zeros in Their Bank Account</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/stock_images/wealthy_businessman__7d15ecf3.jpg" alt="Private Equity Partner">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">They made me look smart in front of the board. Worth every undisclosed cent.</p>
                    <p class="testimonial-author">— Private Equity Partner (Name Redacted)</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/IMG_3901_1761650396224.png" alt="M&A Insider on a Yacht">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">They know things. Dangerous, valuable things. Fortunately, they'll never tell.</p>
                    <p class="testimonial-author">— M&A Insider, Probably on a Yacht</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="attached_assets/IMG_3906_1761650866512.jpeg" alt="Some Rich Dude #2">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">Fast, flawless, and not a single leak. Can't ask for more in this business.</p>
                    <p class="testimonial-author">— Some Rich Dude #2</p>
                </div>
            </div>

            <div class="divider">⸻</div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Confidentiality is kind of our thing.</h2>
            <p>While we can't share real client names (NDA life!), we can share the results. Curious how we help firms like yours close faster, cleaner, and with total discretion?</p>
            <a href="schedule.php" class="btn btn-primary">Book a Confidential Consultation</a>
        </div>
    </section>

    <footer>
        <div class="container" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
            <div>
                <p style="margin-bottom: 12px;"><strong>PE Tech Partners</strong></p>
                <p style="margin-bottom: 8px;">2125 Albany Post Rd Suite 106<br>Montrose, NY 10548</p>
                <p style="margin-bottom: 12px;">Phone: 917-715-7100</p>
                <p>&copy; 2025 PE Tech Partners. All rights reserved.</p>
            </div>
            <div style="text-align: right;">
                <p style="margin-bottom: 8px;"><a href="terms.php" style="color: #87CEEB; text-decoration: none;">Terms of Service</a></p>
                <p style="margin-bottom: 8px;"><a href="privacy.php" style="color: #87CEEB; text-decoration: none;">Privacy Policy</a></p>
                <p><a href="schedule.php" style="color: #87CEEB; text-decoration: none;">Contact Us</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
