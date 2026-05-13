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
    <title>Software Waste Calculator - PE Tech Partners</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #0A2E50;
            line-height: 1.6;
        }
        header {
            background: linear-gradient(135deg, #0A2E50 0%, #083156 100%);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .logo-icon { width: 42px; height: 42px; background: white; border-radius: 8px; padding: 6px; }
        .logo-icon img { width: 100%; height: 100%; object-fit: contain; }
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
        nav { display: flex; gap: 32px; }
        nav a { color: white; text-decoration: none; font-weight: 500; }
        
        .calculator-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 40px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .hero { text-align: center; margin-bottom: 40px; }
        .hero h1 { font-size: 36px; margin-bottom: 16px; color: #0A2E50; }
        .hero p { font-size: 18px; color: #64748b; }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }
        .stat-card {
            background: #f1f5f9;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
        }
        .stat-value { font-size: 32px; font-weight: 800; color: #BF0A30; display: block; }
        .stat-label { font-size: 14px; font-weight: 600; color: #64748b; text-transform: uppercase; }

        .waste-list { margin-bottom: 40px; }
        .waste-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
            transition: background 0.3s;
        }
        .waste-item:hover { background: #f8fafc; }
        .waste-info h4 { font-size: 18px; color: #0A2E50; }
        .waste-info p { font-size: 14px; color: #64748b; }
        .waste-price { font-size: 20px; font-weight: 700; color: #0A2E50; }

        .cta-section {
            text-align: center;
            padding: 40px;
            background: #0A2E50;
            color: white;
            border-radius: 12px;
        }
        .btn {
            display: inline-block;
            padding: 16px 32px;
            background: #BF0A30;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 700;
            margin-top: 20px;
            transition: transform 0.2s;
        }
        .btn:hover { transform: translateY(-2px); }

        @media (max-width: 768px) {
            .stats-grid { grid-template-columns: 1fr; }
            .calculator-container { margin: 20px; padding: 20px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav-container">
            <a href="index.php" class="logo">
                <div class="logo-icon"><img src="attached_assets/Home_1761834398568.png" alt="PE Tech Partners"></div>
                <div class="logo-text">
                    <div><span class="pe">PE</span> TECH PARTNERS</div>
                    <div class="logo-subtitle">STRATEGIC SOLUTIONS FOR PE & M&A FIRMS</div>
                </div>
            </a>
            <nav>
                <?php foreach ($nav_items as $item): ?>
                    <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['text']) ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>

    <div class="calculator-container">
        <div class="hero">
            <h1>Your Hidden Software Graveyard</h1>
            <p>M&A and PE firms waste thousands on forgotten subscriptions</p>
        </div>

        <div class="calculator-inputs" style="background: #f1f5f9; padding: 32px; border-radius: 12px; margin-bottom: 40px;">
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 700; margin-bottom: 8px;">Number of Professionals</label>
                <input type="range" id="professionals" min="5" max="100" value="15" style="width: 100%; margin-bottom: 12px;">
                <div style="display: flex; justify-content: space-between; font-weight: 600;">
                    <span>5</span>
                    <span id="prof-value" style="color: #BF0A30; font-size: 20px;">15 Professionals</span>
                    <span>100</span>
                </div>
            </div>
            
            <div>
                <label style="display: block; font-weight: 700; margin-bottom: 8px;">Estimated Software Waste Per Pro (Annual)</label>
                <input type="range" id="waste-per-pro" min="100" max="500000" step="1000" value="10000" style="width: 100%; margin-bottom: 12px;">
                <div style="display: flex; justify-content: space-between; font-weight: 600;">
                    <span>$100</span>
                    <span id="waste-value" style="color: #BF0A30; font-size: 20px;">$10,000 /yr</span>
                    <span>$500,000</span>
                </div>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <span class="stat-value" id="total-waste">$158,000</span>
                <span class="stat-label">Hidden in This Firm's Software Stack</span>
            </div>
            <div class="stat-card">
                <span class="stat-value">50%</span>
                <span class="stat-label">Licenses Actually Used</span>
            </div>
            <div class="stat-card">
                <span class="stat-value" id="zombie-logins">0</span>
                <span class="stat-label">Logins in 18 Months</span>
            </div>
            <div class="stat-card">
                <span class="stat-value">38%</span>
                <span class="stat-label">Apps Unused or Barely Used</span>
            </div>
        </div>

        <script>
            const profInput = document.getElementById('professionals');
            const wasteInput = document.getElementById('waste-per-pro');
            const profValue = document.getElementById('prof-value');
            const wasteValue = document.getElementById('waste-value');
            const totalWaste = document.getElementById('total-waste');
            const zombieLogins = document.getElementById('zombie-logins');

            function updateCalculator() {
                const pros = parseInt(profInput.value);
                const waste = parseInt(wasteInput.value);
                // Adjust initial calc to reflect the higher baseline from the artifact if needed, 
                // but we'll stick to the dynamic math for the tool.
                const total = pros * waste;
                
                profValue.textContent = `${pros} Professionals`;
                wasteValue.textContent = `$${waste.toLocaleString()} /yr`;
                totalWaste.textContent = `$${total.toLocaleString()}`;
                
                // Scale zombie logins for effect
                zombieLogins.textContent = Math.floor(pros * 0.4);
            }

            profInput.addEventListener('input', updateCalculator);
            wasteInput.addEventListener('input', updateCalculator);
            updateCalculator();
        </script>

        <div class="waste-list">
            <div class="waste-item">
                <div class="waste-info">
                    <h4>PitchBook</h4>
                    <p>Team seat • Last login 14 months ago</p>
                </div>
                <div class="waste-price">$24,000/yr</div>
            </div>
            <div class="waste-item">
                <div class="waste-info">
                    <h4>CB Insights</h4>
                    <p>Purchased for tech deal • Hasn't been used since</p>
                </div>
                <div class="waste-price">$60,000/yr</div>
            </div>
            <div class="waste-item">
                <div class="waste-info">
                    <h4>S&P Capital IQ</h4>
                    <p>3 licenses • Only 1 active user</p>
                </div>
                <div class="waste-price">$36,000/yr</div>
            </div>
            <div class="waste-item">
                <div class="waste-info">
                    <h4>ZoomInfo</h4>
                    <p>Enterprise tier • 5 of 15 seats used</p>
                </div>
                <div class="waste-price">$18,000/yr</div>
            </div>
            <div class="waste-item">
                <div class="waste-info">
                    <h4>Crunchbase Pro</h4>
                    <p>Overlaps with PitchBook • Duplicate data</p>
                </div>
                <div class="waste-price">$3,588/yr</div>
            </div>
            <div class="waste-item">
                <div class="waste-info">
                    <h4>Preqin</h4>
                    <p>Former partner's login • Never reassigned</p>
                </div>
                <div class="waste-price">$15,000/yr</div>
            </div>
            <div class="waste-item">
                <div class="waste-info">
                    <h4>Virtual Data Room</h4>
                    <p>Deal closed Q1 2023 • Still renewing</p>
                </div>
                <div class="waste-price">$1,800/yr</div>
            </div>
        </div>

        <div class="cta-section">
            <h3>Discover Your Hidden Costs</h3>
            <p>We'll help you audit your stack and reclaim lost margin.</p>
            <a href="schedule.php" class="btn">Book Your Audit →</a>
            <p style="margin-top: 14px; opacity: 0.85;">
                <a href="tools.php" style="color: #87CEEB; text-decoration: none; font-weight: 600;">Explore More Free Tools →</a>
            </p>
        </div>
    </div>
</body>
</html>
