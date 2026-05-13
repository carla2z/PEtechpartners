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
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $company = isset($_POST['company']) ? trim($_POST['company']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $deal_stage = isset($_POST['deal_stage']) ? $_POST['deal_stage'] : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($company)) {
        $errors[] = "Company name is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // In a real application, you would:
        // - Send an email to your team
        // - Store in a database
        // - Integrate with a CRM
        // For now, we'll just show a success message
        
        $success_message = "Thank you for reaching out! We'll be in touch within 24 hours to discuss how we can help align your tech stack.";
        
        // Clear form fields after successful submission
        $name = $email = $company = $phone = $deal_stage = $message = '';
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
    <title>Contact Us - PE Tech Partners</title>
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

        .nav-links a:hover,
        .nav-links a.active {
            color: #87CEEB;
        }

        /* Contact Section */
        .contact-container {
            max-width: 800px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease;
        }

        .contact-header h1 {
            font-size: 3rem;
            color: white;
            margin-bottom: 1rem;
        }

        .contact-header p {
            font-size: 1.2rem;
            color: #87CEEB;
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
        .form-group select,
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
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #87CEEB;
            box-shadow: 0 0 0 3px rgba(135, 206, 235, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
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

        /* Info Box */
        .info-box {
            background: linear-gradient(135deg, #0A2E50 0%, #1a4d7a 100%);
            color: white;
            padding: 2rem;
            border-radius: 12px;
            margin-top: 3rem;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .info-box h3 {
            margin-bottom: 1rem;
            color: #87CEEB;
        }

        .info-box p {
            margin-bottom: 0.5rem;
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
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .contact-header h1 {
                font-size: 2rem;
            }

            .form-card {
                padding: 2rem 1.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .contact-container {
                margin: 2rem auto;
            }
        }

        .required {
            color: #BF0A30;
        }

        /* Calendar Booking Section */
        .booking-option {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            animation: scaleIn 0.8s ease 0.2s both;
        }

        .booking-option h3 {
            color: #0A2E50;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            text-align: center;
        }

        .booking-option p {
            color: #666;
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
            text-align: center;
        }

        .calendar-embed {
            width: 100%;
            height: 700px;
            border: none;
            border-radius: 12px;
            background: #f5f5f5;
        }

        .calendar-fallback {
            text-align: center;
            padding: 2rem;
            color: #666;
            display: none;
        }

        .calendar-fallback a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: 600;
        }

        .calendar-fallback a:hover {
            text-decoration: underline;
        }

        .divider {
            text-align: center;
            margin: 2rem 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #ccc, transparent);
        }

        .divider span {
            background: linear-gradient(135deg, #0A2E50 0%, #1a4d7a 100%);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 20px;
            position: relative;
            font-weight: 600;
            font-size: 0.9rem;
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
                        <a href="<?= htmlspecialchars($item['href']) ?>" 
                           class="<?= ($item['text'] === 'Contact') ? 'active' : '' ?>">
                            <?= htmlspecialchars($item['text']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <div class="contact-container">
        <div class="contact-header">
            <h1>Let's Talk Tech Alignment</h1>
            <p>Ready to streamline your PE tech stack? We're here to help.</p>
        </div>

        <div class="booking-option">
            <h3>Schedule a Consultation</h3>
            <p>Choose a time that works for you directly from our calendar below.</p>
            <iframe 
                src="https://booking.a2zbusinessit.com" 
                class="calendar-embed"
                id="calendar-frame"
                frameborder="0"
                scrolling="auto"
                loading="lazy">
            </iframe>
            <div class="calendar-fallback" id="calendar-fallback">
                <p>Unable to load the booking calendar. <a href="https://booking.a2zbusinessit.com" target="_blank">Click here to open it in a new window</a>.</p>
            </div>
        </div>

        <div class="divider">
            <span>OR SEND US A MESSAGE</span>
        </div>

        <div class="form-card">
            <?php if (!empty($success_message)): ?>
                <div class="success-message">
                    <?= htmlspecialchars($success_message) ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="error-message">
                    <strong>Please correct the following errors:</strong>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="contact.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Your Name <span class="required">*</span></label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="<?= htmlspecialchars($name ?? '') ?>"
                            required
                        >
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="<?= htmlspecialchars($email ?? '') ?>"
                            required
                        >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="company">Company/Firm <span class="required">*</span></label>
                        <input 
                            type="text" 
                            id="company" 
                            name="company" 
                            value="<?= htmlspecialchars($company ?? '') ?>"
                            required
                        >
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="<?= htmlspecialchars($phone ?? '') ?>"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="deal_stage">Where Are You in the Deal Process?</label>
                    <select id="deal_stage" name="deal_stage">
                        <option value="">Select an option...</option>
                        <option value="sourcing" <?= (isset($deal_stage) && $deal_stage === 'sourcing') ? 'selected' : '' ?>>Deal Sourcing</option>
                        <option value="diligence" <?= (isset($deal_stage) && $deal_stage === 'diligence') ? 'selected' : '' ?>>Due Diligence</option>
                        <option value="integration" <?= (isset($deal_stage) && $deal_stage === 'integration') ? 'selected' : '' ?>>Post-Acquisition Integration</option>
                        <option value="portfolio" <?= (isset($deal_stage) && $deal_stage === 'portfolio') ? 'selected' : '' ?>>Portfolio Management</option>
                        <option value="exit" <?= (isset($deal_stage) && $deal_stage === 'exit') ? 'selected' : '' ?>>Exit Planning</option>
                        <option value="general" <?= (isset($deal_stage) && $deal_stage === 'general') ? 'selected' : '' ?>>General Inquiry</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">How Can We Help? <span class="required">*</span></label>
                    <textarea 
                        id="message" 
                        name="message" 
                        required
                    ><?= htmlspecialchars($message ?? '') ?></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

        <div class="info-box">
            <h3>What Happens Next?</h3>
            <p>📧 We'll review your inquiry within 24 hours</p>
            <p>📞 Schedule a 30-minute strategy call to discuss your needs</p>
            <p>🎯 Get a customized tech alignment plan for your firm</p>
        </div>
    </div>

    <script>
        // Check if calendar iframe loads successfully, show fallback if not
        var calendarFrame = document.getElementById('calendar-frame');
        var fallback = document.getElementById('calendar-fallback');
        
        calendarFrame.addEventListener('error', function() {
            calendarFrame.style.display = 'none';
            fallback.style.display = 'block';
        });
        
        // Timeout fallback in case iframe is blocked
        setTimeout(function() {
            try {
                // Try to access iframe content - if blocked, this will throw an error
                if (!calendarFrame.contentWindow) {
                    throw new Error('Calendar blocked');
                }
            } catch (e) {
                // Don't automatically show fallback - let user try first
            }
        }, 3000);
    </script>
</body>
</html>
