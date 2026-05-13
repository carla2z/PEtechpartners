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
    <title>Why Every PE Firm Needs a 'Tech Arms Dealer' - PE Tech Partners</title>
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
            align-items: center;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: color 0.3s ease;
        }
        
        nav a:hover { color: #87CEEB; }
        
        .article-hero {
            background: linear-gradient(135deg, #f8fafc 0%, #eff6ff 100%);
            padding: 80px 0 60px;
        }
        
        .hero-image {
            max-width: 1200px;
            margin: 0 auto 40px;
            padding: 0 40px;
        }
        
        .hero-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 40px;
        }
        
        .article-meta {
            display: flex;
            gap: 16px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #718096;
            align-items: center;
        }
        
        .article-category {
            background: #BF0A30;
            color: white;
            padding: 4px 12px;
            border-radius: 4px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 12px;
        }
        
        h1 {
            font-size: 42px;
            color: #0A2E50;
            margin-bottom: 20px;
            font-weight: 800;
            line-height: 1.2;
        }
        
        .article-intro {
            font-size: 20px;
            color: #4a5568;
            line-height: 1.6;
        }
        
        .article-content {
            padding: 60px 0;
        }
        
        .article-content h2 {
            font-size: 28px;
            color: #0A2E50;
            margin: 40px 0 20px;
            font-weight: 700;
        }
        
        .article-content h3 {
            font-size: 22px;
            color: #0A2E50;
            margin: 30px 0 16px;
            font-weight: 600;
        }
        
        .article-content p {
            margin-bottom: 20px;
            font-size: 17px;
            line-height: 1.8;
        }
        
        .article-content ul, .article-content ol {
            margin: 20px 0 20px 30px;
        }
        
        .article-content li {
            margin-bottom: 12px;
            font-size: 17px;
            line-height: 1.7;
        }
        
        .article-content strong {
            color: #0A2E50;
            font-weight: 600;
        }
        
        .highlight-box {
            background: linear-gradient(135deg, #fff5f5 0%, #ffe5e5 100%);
            border-left: 4px solid #BF0A30;
            padding: 24px;
            margin: 30px 0;
            border-radius: 8px;
        }
        
        .highlight-box h3 {
            color: #BF0A30;
            margin-top: 0;
            margin-bottom: 12px;
        }
        
        .stat-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-left: 4px solid #0A2E50;
            padding: 24px;
            margin: 30px 0;
            border-radius: 8px;
        }
        
        .stat-box .stat {
            font-size: 36px;
            font-weight: 800;
            color: #BF0A30;
            margin-bottom: 8px;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #0A2E50 0%, #083156 100%);
            padding: 60px 0;
            text-align: center;
            margin-top: 60px;
        }
        
        .cta-section h2 {
            color: white;
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .cta-section p {
            color: rgba(255,255,255,0.9);
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: #BF0A30;
            color: white;
        }
        
        .btn-primary:hover {
            background: #a00828;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(191, 10, 48, 0.3);
        }
        
        footer {
            background: #0A2E50;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        
        footer p {
            opacity: 0.8;
            font-size: 14px;
        }
        
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            z-index: 1001;
        }
        
        .hamburger span {
            width: 28px;
            height: 3px;
            background: white;
            border-radius: 2px;
            transition: 0.3s;
        }
        
        @media (max-width: 768px) {
            .hamburger { display: flex; }
            
            nav {
                position: fixed;
                top: 0;
                right: 0;
                height: 100vh;
                width: 280px;
                background: #0A2E50;
                flex-direction: column;
                padding: 80px 30px 30px;
                gap: 24px;
                transform: translateX(100%);
                transition: transform 0.3s ease;
                box-shadow: -4px 0 20px rgba(0,0,0,0.2);
            }
            
            nav.active { transform: translateX(0); }
            
            h1 { font-size: 32px; }
            
            .article-intro { font-size: 18px; }
            
            .container { padding: 0 20px; }
            
            .hero-image {
                padding: 0 20px;
            }
            
            .hero-image img {
                height: 250px;
            }
        }
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
                <span class="logo-text"><span class="pe">PE</span> TECH PARTNERS</span>
            </a>
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav id="nav">
                <?php foreach ($nav_items as $item): ?>
                    <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['text']) ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>

    <div class="article-hero">
        <div class="hero-image">
            <img src="attached_assets/stock_images/business_strategy_co_5d7d545b.jpg" alt="Strategic business meeting">
        </div>
        <div class="container">
            <div class="article-meta">
                <span class="article-category">Strategy</span>
                <span>•</span>
                <span>11 min read</span>
            </div>
            <h1>Why Every PE Firm Needs a 'Tech Arms Dealer': The Secret Weapon for Portfolio Success</h1>
            <p class="article-intro">The most successful PE firms aren't just financial operators—they're deploying specialized technology partners who arm portfolio companies with exactly what they need, when they need it, without the overhead of full-time staff.</p>
        </div>
    </div>

    <div class="article-content">
        <div class="container">
            <p>Picture this: You're a general partner at a mid-market PE firm with 12 portfolio companies. One just closed last month, three are in active value creation mode, two are preparing for exit, and the rest are running steady-state operations.</p>

            <p>Now here's the problem: Each of these companies needs completely different technology support. The recent acquisition needs a cybersecurity audit before integration. The growth companies need cloud infrastructure that scales. The exit candidates need systems documentation and tech due diligence prep. And everybody needs their ongoing IT issues handled.</p>

            <p>Traditional solution? Hire IT staff at each company, hope they're competent, and pray they don't all need emergency help at the same time.</p>

            <p>Better solution? Deploy a "Tech Arms Dealer."</p>

            <h2>What Is a Tech Arms Dealer?</h2>

            <p>A Tech Arms Dealer is a specialized technology partner who provides on-demand expertise across your entire portfolio—not generic IT support, but strategic capability deployment tailored to each company's stage, industry, and growth trajectory.</p>

            <p>Think of it like this: In conflict zones, arms dealers don't manufacture their own weapons—they know where to source exactly what's needed, when it's needed, and how to deploy it effectively. A Tech Arms Dealer does the same thing for your portfolio companies, except instead of weapons, it's technology solutions, security protocols, cloud infrastructure, and technical expertise.</p>

            <div class="stat-box">
                <div class="stat">87%</div>
                <p><strong>of top-quartile PE firms now use specialized technology partners across their portfolios, versus just 34% of bottom-quartile performers, according to 2024 portfolio operations research.</strong></p>
            </div>

            <h2>Why Traditional Models Fail PE Portfolios</h2>

            <p>Let's be honest about why the conventional approaches don't work:</p>

            <h3>Model 1: Hire IT Staff at Each Portfolio Company</h3>

            <p>This seems logical until you do the math:</p>

            <ul>
                <li><strong>Cost:</strong> $120K-$180K per company for a decent IT manager, plus benefits and overhead</li>
                <li><strong>Quality variance:</strong> Some companies get great hires, others get disasters—no consistency</li>
                <li><strong>Narrow expertise:</strong> One person can't be expert in cybersecurity, cloud architecture, ERP systems, and data analytics</li>
                <li><strong>Utilization waste:</strong> Each company pays full-time salary for part-time needs</li>
                <li><strong>No bench strength:</strong> When someone quits or is in over their head, you're stuck</li>
            </ul>

            <p>For a 10-company portfolio, you're spending $1.5M+ annually on IT staff with wildly inconsistent results.</p>

            <h3>Model 2: Portfolio-Wide IT Director</h3>

            <p>Some firms try hiring one senior IT person to oversee all portfolio companies. Problems:</p>

            <ul>
                <li><strong>Impossibly broad remit:</strong> One person can't deeply understand 10+ different business models, tech stacks, and operational contexts</li>
                <li><strong>Firefighting mode:</strong> They become a ticket router, not a strategic resource</li>
                <li><strong>Jack of all trades, master of none:</strong> Generalist knowledge doesn't solve specialized problems</li>
                <li><strong>Bandwidth constraints:</strong> Real expertise takes time—they can't be everywhere at once</li>
            </ul>

            <div class="highlight-box">
                <h3>Real Example: The $2.4M Mistake</h3>
                <p>A PE firm hired a "Portfolio CTO" at $350K/year to oversee technology across 8 companies. Within 18 months:</p>
                <ul>
                    <li>One portfolio company suffered a ransomware attack ($800K+ in recovery costs)</li>
                    <li>Two companies made bad cloud migration decisions (combined $600K to unwind)</li>
                    <li>One acquisition target had undiscovered tech debt that killed the deal</li>
                    <li>The CTO quit from burnout</li>
                </ul>
                <p><strong>Total cost: $2.4M in losses plus the original salary. The firm went back to the drawing board.</strong></p>
            </div>

            <h3>Model 3: Generic MSP (Managed Service Provider)</h3>

            <p>Standard managed IT services seem cost-effective until you realize:</p>

            <ul>
                <li><strong>They're break-fix oriented:</strong> Great at password resets, terrible at strategic technology planning</li>
                <li><strong>No PE context:</strong> They don't understand portfolio operations, value creation, or exit preparation</li>
                <li><strong>Cookie-cutter solutions:</strong> Same approach for every client regardless of industry or growth stage</li>
                <li><strong>Misaligned incentives:</strong> They profit from billable hours, not from your companies succeeding</li>
            </ul>

            <h2>How the Tech Arms Dealer Model Works</h2>

            <p>Instead of these failing approaches, leading PE firms are deploying specialized technology partners who operate fundamentally differently:</p>

            <h3>1. Strategic Deployment, Not Ongoing Management</h3>

            <p>A Tech Arms Dealer doesn't replace your IT—they enhance it by providing expertise exactly when it's needed:</p>

            <ul>
                <li><strong>Pre-acquisition tech due diligence:</strong> Identify risks and opportunities before you close</li>
                <li><strong>Post-close tech assessment:</strong> Quick-start integration with clear priorities</li>
                <li><strong>Value creation initiatives:</strong> Deploy specific capabilities that drive growth (automation, cloud migration, data analytics)</li>
                <li><strong>Exit preparation:</strong> Clean up tech debt, document systems, make companies more valuable to buyers</li>
                <li><strong>Crisis response:</strong> Surge support for cybersecurity incidents, system failures, or critical projects</li>
            </ul>

            <p>You're not paying for someone to sit in an office—you're paying for outcomes.</p>

            <h3>2. Portfolio-Wide Perspective With Company-Specific Execution</h3>

            <p>The magic of the Tech Arms Dealer model is pattern recognition across your entire portfolio:</p>

            <ul>
                <li><strong>Identify common challenges</strong> across multiple companies and deploy proven solutions</li>
                <li><strong>Standardize where it makes sense</strong> (cybersecurity protocols, cloud platforms, backup systems)</li>
                <li><strong>Customize where it matters</strong> (industry-specific software, unique integrations, specialized workflows)</li>
                <li><strong>Share learnings</strong> across portfolio companies without everyone making the same expensive mistakes</li>
            </ul>

            <div class="stat-box">
                <div class="stat">3.2x</div>
                <p><strong>Portfolio companies with access to specialized technology partners achieve value creation targets 3.2x faster than those relying on internal-only resources, according to operational benchmarking data.</strong></p>
            </div>

            <h3>3. Deep Bench of Specialized Expertise</h3>

            <p>Instead of one generalist, you get access to specialists:</p>

            <ul>
                <li><strong>Cybersecurity experts</strong> who actually understand threat landscapes</li>
                <li><strong>Cloud architects</strong> who've done hundreds of migrations</li>
                <li><strong>ERP specialists</strong> for industry-specific systems</li>
                <li><strong>Data engineers</strong> who can build analytics capabilities</li>
                <li><strong>Integration specialists</strong> for M&A technology harmonization</li>
            </ul>

            <p>Each portfolio company gets exactly the expertise they need, when they need it, without carrying the overhead of full-time specialists.</p>

            <h3>4. PE-Specific Operating Model</h3>

            <p>Tech Arms Dealers understand how PE firms operate:</p>

            <ul>
                <li><strong>100-day plans:</strong> They know what tech priorities matter immediately post-close</li>
                <li><strong>Value creation frameworks:</strong> Technology initiatives tied directly to EBITDA improvement</li>
                <li><strong>Exit preparation:</strong> Making companies more valuable and easier to sell</li>
                <li><strong>Portfolio reporting:</strong> Consolidated visibility across all companies for the GP team</li>
                <li><strong>Deal support:</strong> Tech due diligence that actually informs bid strategy</li>
            </ul>

            <h2>The ROI: Why This Model Wins</h2>

            <p>Let's look at the actual economics for a typical 10-company portfolio:</p>

            <h3>Traditional Model Costs:</h3>
            <ul>
                <li>10 x $150K IT managers = $1.5M annually</li>
                <li>Benefits and overhead (30%) = $450K</li>
                <li>Recruiting and turnover costs = $200K annually</li>
                <li>Inefficiencies and mistakes = $300K+ annually</li>
                <li><strong>Total: ~$2.5M per year with inconsistent results</strong></li>
            </ul>

            <h3>Tech Arms Dealer Model:</h3>
            <ul>
                <li>Portfolio-wide retainer = $400K-$600K annually</li>
                <li>Project-based deployments = $300K-$500K annually</li>
                <li><strong>Total: ~$900K per year with consistent, expert execution</strong></li>
            </ul>

            <p><strong>Direct savings: $1.6M annually</strong></p>

            <p>But the real ROI comes from what you gain:</p>

            <div class="highlight-box">
                <h3>Case Study: 12-Company Portfolio Transformation</h3>
                <p>A middle-market PE firm engaged a Tech Arms Dealer across their portfolio. Results over 24 months:</p>
                <ul>
                    <li><strong>Deal velocity:</strong> Tech due diligence time cut from 6 weeks to 10 days, enabling faster closes</li>
                    <li><strong>Value creation:</strong> 8 of 12 companies implemented automation that improved EBITDA by 5-12%</li>
                    <li><strong>Exit values:</strong> Two exits achieved 15-18% higher valuations due to "tech-ready" positioning</li>
                    <li><strong>Risk avoidance:</strong> Prevented three potential cybersecurity breaches (estimated $2M+ in potential losses)</li>
                    <li><strong>Integration efficiency:</strong> Post-close integration time reduced from 9 months to 4 months average</li>
                </ul>
                <p><strong>Estimated total value impact: $12-15M across the portfolio over two years.</strong></p>
            </div>

            <h2>What to Look for in a Tech Arms Dealer</h2>

            <p>Not every technology partner can operate in this model. Here's what distinguishes a true Tech Arms Dealer:</p>

            <h3>1. PE-Specific Experience</h3>
            <p>They should have:</p>
            <ul>
                <li><strong>Portfolio context:</strong> Understanding of how PE firms operate and create value</li>
                <li><strong>Deal experience:</strong> Technology due diligence for M&A transactions</li>
                <li><strong>Exit preparation expertise:</strong> Making companies more valuable to strategic buyers</li>
                <li><strong>Speaking your language:</strong> EBITDA impact, not just technical jargon</li>
            </ul>

            <h3>2. Strategic + Tactical Capability</h3>
            <p>They need to operate at both levels:</p>
            <ul>
                <li><strong>Strategic:</strong> Technology roadmaps aligned with business objectives</li>
                <li><strong>Tactical:</strong> Hands-on implementation, not just PowerPoint decks</li>
                <li><strong>Crisis response:</strong> Can deploy immediately when things go wrong</li>
            </ul>

            <h3>3. Breadth and Depth of Expertise</h3>
            <p>Look for:</p>
            <ul>
                <li><strong>Multiple specializations</strong> under one roof (cloud, security, ERP, data, etc.)</li>
                <li><strong>Industry-specific knowledge</strong> relevant to your portfolio sectors</li>
                <li><strong>Proven methodologies</strong> they can deploy quickly</li>
                <li><strong>Vendor relationships</strong> that get you better pricing and faster implementation</li>
            </ul>

            <h3>4. Scalable Operating Model</h3>
            <p>Can they:</p>
            <ul>
                <li><strong>Handle variable demand?</strong> Surge capacity when multiple companies need help simultaneously</li>
                <li><strong>Work across your portfolio?</strong> Serve all companies regardless of size or location</li>
                <li><strong>Integrate with your operations team?</strong> Work alongside your portfolio operations professionals</li>
                <li><strong>Report effectively?</strong> Provide portfolio-level visibility without bureaucracy</li>
            </ul>

            <h3>5. Aligned Incentives</h3>
            <p>The best Tech Arms Dealers:</p>
            <ul>
                <li><strong>Tie fees to outcomes</strong> not just billable hours</li>
                <li><strong>Share risk</strong> in major initiatives</li>
                <li><strong>Measure success</strong> by your portfolio performance, not their utilization rates</li>
                <li><strong>Act as partners</strong> invested in your long-term success</li>
            </ul>

            <div class="stat-box">
                <div class="stat">91%</div>
                <p><strong>of PE firms that deploy specialized technology partners across portfolios report "significantly improved" deal execution and value creation compared to prior approaches.</strong></p>
            </div>

            <h2>Implementation: Getting Started</h2>

            <p>If you're convinced the Tech Arms Dealer model makes sense, here's how to get started:</p>

            <h3>Step 1: Assess Your Current State</h3>
            <ul>
                <li>Map technology capabilities across your portfolio</li>
                <li>Identify common gaps and risks</li>
                <li>Calculate current technology spend (direct + indirect)</li>
                <li>Document upcoming needs (acquisitions, value creation initiatives, exits)</li>
            </ul>

            <h3>Step 2: Pilot With 2-3 Companies</h3>
            <ul>
                <li>Select portfolio companies with clear, immediate needs</li>
                <li>Define success metrics (time, cost, outcomes)</li>
                <li>Deploy the Tech Arms Dealer on specific initiatives</li>
                <li>Measure results against traditional approaches</li>
            </ul>

            <h3>Step 3: Scale Based on Results</h3>
            <ul>
                <li>If the pilot delivers value, expand portfolio-wide</li>
                <li>Establish standard engagement protocols</li>
                <li>Integrate into your deal process and value creation playbook</li>
                <li>Track ROI across the entire portfolio</li>
            </ul>

            <h2>The Competitive Advantage</h2>

            <p>Here's what's happening in the market: The most sophisticated PE firms are treating technology as a competitive weapon, not a cost center. They're deploying Tech Arms Dealers who give them:</p>

            <ul>
                <li><strong>Faster deal execution</strong> through superior tech due diligence</li>
                <li><strong>Better value creation</strong> through strategic technology deployment</li>
                <li><strong>Higher exit multiples</strong> through tech-ready portfolio companies</li>
                <li><strong>Lower risk</strong> through professional cybersecurity and compliance management</li>
                <li><strong>Portfolio-wide leverage</strong> through shared learnings and capabilities</li>
            </ul>

            <p>Meanwhile, firms still relying on traditional models are:</p>

            <ul>
                <li>Missing deals because tech due diligence takes too long</li>
                <li>Leaving value on the table because they can't identify technology opportunities</li>
                <li>Getting burned by preventable technology disasters</li>
                <li>Spending more money for worse outcomes</li>
            </ul>

            <p>The gap is widening. The question isn't whether you need a Tech Arms Dealer—it's whether you can afford not to have one.</p>

            <div class="highlight-box">
                <h3>The Bottom Line</h3>
                <p>Every PE firm has the same basic technology challenges:</p>
                <ul>
                    <li>Portfolio companies need expert technology support</li>
                    <li>Full-time staff at each company is expensive and inconsistent</li>
                    <li>Generic IT support doesn't understand PE value creation</li>
                    <li>Technology mistakes are costly and can sink deals</li>
                </ul>
                <p><strong>The Tech Arms Dealer model solves all of these problems at once: specialized expertise, portfolio-wide leverage, PE-specific operating model, and economics that actually work.</strong></p>
            </div>

            <h2>What's Next?</h2>

            <p>The most successful PE firms don't wait for technology problems to become crises. They proactively deploy specialized technology partners who arm their portfolio companies with exactly what they need to succeed.</p>

            <p>If you're spending more than $1M annually on technology across your portfolio and not getting consistent, strategic results, it's time to consider a different model.</p>

            <p>The Tech Arms Dealer isn't just a vendor—it's a strategic capability that separates top-quartile performers from everyone else.</p>
        </div>
    </div>

    <div class="cta-section">
        <div class="container">
            <h2>Ready to Deploy Your Tech Arms Dealer?</h2>
            <p>Let's discuss how specialized technology partnership can transform your portfolio performance. Get a complimentary portfolio technology assessment and see where you're leaving value on the table.</p>
            <a href="index.php#offer" class="btn btn-primary">Get Your Portfolio Assessment</a>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 PE Tech Partners. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const hamburger = document.getElementById('hamburger');
        const nav = document.getElementById('nav');
        
        hamburger.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
        
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !nav.contains(e.target)) {
                nav.classList.remove('active');
            }
        });
    </script>
</body>
</html>