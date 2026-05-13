<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpeg" href="attached_assets/Home_1761834398568.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - PE Tech Partners</title>
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
        
        .hamburger {
            display: none;
            background: white;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 4px;
            position: fixed;
            top: 14px;
            right: 20px;
            z-index: 1001;
            width: 44px;
            height: 44px;
        }
        
        .hamburger span {
            display: block;
            width: 24px;
            height: 3px;
            background: #0A2E50;
            margin: 5px auto;
            transition: 0.3s;
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
        
        .hero-section p {
            font-size: 18px;
            color: #4a5568;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Blog Grid */
        .blog-section {
            padding: 80px 0;
            background: white;
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }
        
        .blog-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }
        
        .blog-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
            background: linear-gradient(135deg, #0A2E50 0%, #083156 100%);
        }
        
        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        .blog-content {
            padding: 32px;
            background: white;
        }
        
        .blog-meta {
            display: flex;
            gap: 16px;
            margin-bottom: 16px;
            font-size: 14px;
            color: #64748b;
            font-weight: 500;
        }
        
        .blog-category {
            color: #BF0A30;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-size: 12px;
        }
        
        .blog-card h3 {
            font-size: 24px;
            color: #0A2E50;
            margin-bottom: 16px;
            font-weight: 800;
            line-height: 1.4;
        }
        
        .blog-excerpt {
            color: #334155;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        .read-more {
            color: #BF0A30;
            font-weight: 700;
            text-decoration: none;
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s ease;
        }
        
        .read-more:hover {
            color: #0A2E50;
            gap: 10px;
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #0A2E50 0%, #083156 100%);
            padding: 80px 0;
            text-align: center;
            color: white;
        }
        
        .cta-section h2 {
            font-size: 36px;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .cta-section p {
            font-size: 18px;
            margin-bottom: 32px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
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
        
        /* Footer */
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
        
        /* Mobile Styles */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
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
            
            nav.active {
                transform: translateX(0);
            }
            
            .hero-section h1 {
                font-size: 32px;
            }
            
            .hero-section p {
                font-size: 16px;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .container {
                padding: 0 20px;
            }
            
            .cta-section h2 {
                font-size: 28px;
            }
        }
    </style>
    <link rel="stylesheet" href="assets/blog-enhancements.css">
</head>
<body class="blog-index">
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
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav id="nav">
                <a href="index.php#problems">Challenges</a>
                <a href="index.php#solutions">Solutions</a>
                <a href="process.php">Our Process</a>
                <a href="blogs.php">Blog</a>
                <a href="tools.php">Free Tools</a>
                <a href="testimonials.php">Testimonials</a>
                <a href="schedule.php">Secure a Strategic Debrief</a>
            </nav>
        </div>
    </header>

    <section class="hero-section">
        <div class="container hero-layout">
            <div class="hero-copy">
                <span class="hero-kicker">PE &amp; M&amp;A technology intelligence</span>
                <h1>Faster diligence, cleaner integrations, stronger exits.</h1>
                <p>Field notes, frameworks, and practical calculators for deal teams turning technology from a hidden risk into measurable value creation.</p>
                <div class="hero-actions">
                    <a href="schedule.php" class="btn btn-primary">Secure a Strategic Debrief</a>
                    <a href="tools.php" class="btn btn-secondary">Explore Free Tools</a>
                </div>
                <div class="hero-metrics" aria-label="Blog focus metrics">
                    <div class="hero-metric">
                        <strong>90</strong>
                        <span>day post-close alignment playbooks</span>
                    </div>
                    <div class="hero-metric">
                        <strong>2.3x</strong>
                        <span>deal velocity lens for tech readiness</span>
                    </div>
                    <div class="hero-metric">
                        <strong>$158K</strong>
                        <span>software waste benchmark to investigate</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual" role="img" aria-label="Technology alignment dashboard preview">
                <div class="insight-panel">
                    <div class="panel-top">
                        <div>
                            <span class="panel-title">Technology Alignment Signal</span>
                            <span class="panel-subtitle">Diligence view by value lever</span>
                        </div>
                        <span class="panel-status">Live</span>
                    </div>
                    <div class="panel-body">
                        <div class="signal-row">
                            <span>Deal speed</span>
                            <span class="signal-track"><span class="signal-fill" style="width: 82%;"></span></span>
                            <span>82%</span>
                        </div>
                        <div class="signal-row">
                            <span>Integration risk</span>
                            <span class="signal-track"><span class="signal-fill" style="width: 46%;"></span></span>
                            <span>46%</span>
                        </div>
                        <div class="signal-row">
                            <span>Value leakage</span>
                            <span class="signal-track"><span class="signal-fill" style="width: 68%;"></span></span>
                            <span>68%</span>
                        </div>
                    </div>
                    <div class="panel-bottom">
                        <div>
                            <strong>17</strong>
                            <span>insights and tools</span>
                        </div>
                        <div>
                            <strong>6</strong>
                            <span>deal-stage categories</span>
                        </div>
                        <div>
                            <strong>3</strong>
                            <span>ROI calculators</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="section-heading">
                <div>
                    <span class="eyebrow">Field Notes</span>
                    <h2>Browse by the problem slowing down the deal.</h2>
                </div>
                <p>Use these articles as a punchlist for diligence, integration, operational cleanup, cyber review, and portfolio-wide value creation.</p>
            </div>

            <div class="topic-rail" aria-label="Blog topics">
                <a class="topic-pill" href="ai-consulting-private-equity-ma-advisors-northeast.php">AI Consulting</a>
                <a class="topic-pill" href="blog-tech-assessment.php">Due Diligence</a>
                <a class="topic-pill" href="blog-deal-velocity.php">Deal Velocity</a>
                <a class="topic-pill" href="blog-value-leak.php">Value Creation</a>
                <a class="topic-pill" href="blog-connected-ecosystem.php">Portfolio Ops</a>
                <a class="topic-pill" href="blog-cybersecurity.php">Cybersecurity</a>
                <a class="topic-pill" href="blog-compliance-size.php">Compliance</a>
                <a class="topic-pill" href="tools.php">Free Calculators</a>
            </div>

            <div class="featured-insight">
                <div class="featured-media" aria-hidden="true">
                    <div class="featured-metric-card">
                        <strong>10+ days</strong>
                        <span>lost each month when portfolio reporting depends on disconnected systems and manual consolidation.</span>
                    </div>
                </div>
                <div class="featured-copy">
                    <span class="eyebrow">Featured Insight</span>
                    <h3><a href="blog-it-complexity.php">The Complexity Tax: Why Most PE Portfolio Tech Is a Drag on Valuation</a></h3>
                    <p>Growth through acquisition often creates a patchwork of legacy systems, redundant software, and conflicting IT processes. This piece shows where EBITDA quietly leaks and what top-quartile operators standardize first.</p>
                    <div class="featured-stats">
                        <div>
                            <strong>ERP</strong>
                            <span>instance sprawl</span>
                        </div>
                        <div>
                            <strong>CRM</strong>
                            <span>data fragmentation</span>
                        </div>
                        <div>
                            <strong>SaaS</strong>
                            <span>vendor overlap</span>
                        </div>
                    </div>
                    <a href="blog-it-complexity.php" class="read-more">Read Featured Insight →</a>
                </div>
            </div>

            <div class="blog-grid">

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/inefficient_office_w_84aad69b.jpg" alt="Software Waste">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Strategy</span>
                            <span>•</span>
                            <span>12 min read</span>
                        </div>
                        <h3>The $158,000 Software Graveyard Hiding in Your M&A Firm</h3>
                        <p class="blog-excerpt">M&A advisors and PE firms are bleeding six figures on enterprise tools no one touches. Discover how to identify and reclaim your hidden software waste.</p>
                        <a href="blog-software-graveyard.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/inefficient_office_w_84aad69b.jpg" alt="Operational Efficiency">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Operational Efficiency</span>
                            <span>•</span>
                            <span>8 min read</span>
                        </div>
                        <h3>Your Firm's "Quick Question" Habit: Quietly Eroding Judgment</h3>
                        <p class="blog-excerpt">It's not just a two-minute interruption. Discover why "quick questions" are a systemic failure costing PE firms millions in lost clarity.</p>
                        <a href="blog-operational-efficiency.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/business_technology__2b5cb298.jpg" alt="M&A Technology">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">M&A Strategy</span>
                            <span>•</span>
                            <span>12 min read</span>
                        </div>
                        <h3>The Hidden Deal Killer: How Outdated Tech Slows Down M&A Deals</h3>
                        <p class="blog-excerpt">Discover why legacy systems are sabotaging mergers and what dealmakers must do to stay ahead. Technology integration is now as critical as financial and cultural factors in deal success.</p>
                        <a href="blog-hidden-deal-killer.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/business_meeting_tec_0862ce87.jpg" alt="Tech Assessment">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Due Diligence</span>
                            <span>•</span>
                            <span>7 min read</span>
                        </div>
                        <h3>Step-by-Step Tech Assessment: What We Look For</h3>
                        <p class="blog-excerpt">Inside our comprehensive technology alignment process and the critical gaps we identify through our structured assessment steps.</p>
                        <a href="blog-tech-assessment.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/business_growth_scal_ba21c20b.jpg" alt="Business Scaling">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Best Practices</span>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>
                        <h3>Why Portfolio Companies Fail to Scale: A Tech Perspective</h3>
                        <p class="blog-excerpt">The technology bottlenecks that prevent portfolio companies from reaching their growth potential and how to fix them.</p>
                        <a href="blog-scaling.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/technology_integrati_141ff25d.jpg" alt="Tech Migration">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Case Study</span>
                            <span>•</span>
                            <span>8 min read</span>
                        </div>
                        <h3>From Chaos to Compliance: Post-Acquisition Tech Migration</h3>
                        <p class="blog-excerpt">A real-world example of how we aligned three acquired companies onto a unified technology platform in 90 days.</p>
                        <a href="blog-migration.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/cloud_computing_data_2872198c.jpg" alt="Cloud Computing">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Strategy</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3>The PE Firm's Guide to Cloud Migration ROI</h3>
                        <p class="blog-excerpt">How to calculate true cloud migration costs and returns for portfolio companies considering infrastructure modernization.</p>
                        <a href="blog-cloud-roi.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/cybersecurity_networ_3e9bf05c.jpg" alt="Cybersecurity">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Security</span>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>
                        <h3>Cybersecurity Red Flags in Target Companies</h3>
                        <p class="blog-excerpt">The security vulnerabilities that should pause a deal and how to evaluate cyber risk during acquisition due diligence.</p>
                        <a href="blog-cybersecurity.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/business_executive_t_c761da6e.jpg" alt="Non-Technical IT Management">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Risk Management</span>
                            <span>•</span>
                            <span>10 min read</span>
                        </div>
                        <h3>The $2M Mistake: Why Non-Technical IT Managers Are Costing Your Firm</h3>
                        <p class="blog-excerpt">When an office manager doubles as your IT lead, you're not saving money—you're building technical debt that could derail your next deal.</p>
                        <a href="blog-non-technical-manager.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/business_meeting_han_ca40f33f.jpg" alt="Client Acquisition">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Business Development</span>
                            <span>•</span>
                            <span>9 min read</span>
                        </div>
                        <h3>How Superior Technology Infrastructure Helps M&A Firms Win More Clients</h3>
                        <p class="blog-excerpt">In today's competitive deal environment, the firms winning mandates aren't just the ones with the best relationships—they're the ones with the best systems.</p>
                        <a href="blog-client-acquisition.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/business_strategy_co_5d7d545b.jpg" alt="Tech Arms Dealer">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Strategy</span>
                            <span>•</span>
                            <span>11 min read</span>
                        </div>
                        <h3>Why Every PE Firm Needs a 'Tech Arms Dealer'</h3>
                        <p class="blog-excerpt">The secret weapon top-quartile PE firms use to accelerate value creation across their entire portfolio—and why you need one too.</p>
                        <a href="blog-tech-arms-dealer.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/connected_network_te_739555ac.jpg" alt="Connected Ecosystem">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Portfolio Management</span>
                            <span>•</span>
                            <span>10 min read</span>
                        </div>
                        <h3>From Diligence to Exit: Building a Connected Tech Ecosystem</h3>
                        <p class="blog-excerpt">How unified technology infrastructure across your portfolio companies drives measurable value creation and premium exit valuations.</p>
                        <a href="blog-connected-ecosystem.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/inefficient_office_w_84aad69b.jpg" alt="Value Leak">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Value Creation</span>
                            <span>•</span>
                            <span>9 min read</span>
                        </div>
                        <h3>The Silent Value Leak: How Inefficient Systems Cost You Millions</h3>
                        <p class="blog-excerpt">Portfolio companies are quietly bleeding $2M-$4M annually through inefficient technology. Here's how to stop it and recapture that value.</p>
                        <a href="blog-value-leak.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/speed_velocity_fast__5e4f820a.jpg" alt="Deal Velocity">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Deal Execution</span>
                            <span>•</span>
                            <span>10 min read</span>
                        </div>
                        <h3>How to Double Deal Velocity with Better Tech Alignment</h3>
                        <p class="blog-excerpt">Top PE firms are closing twice as many deals with the same team size. The difference? Technology readiness and alignment throughout the deal lifecycle.</p>
                        <a href="blog-deal-velocity.php" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image">
                        <img src="attached_assets/stock_images/business_compliance__733fb8b4.jpg" alt="Compliance">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-category">Compliance</span>
                            <span>•</span>
                            <span>9 min read</span>
                        </div>
                        <h3>Compliance in M&A: Why Size Matters Not</h3>
                        <p class="blog-excerpt">GDPR, KYC, and data privacy regulations hit boutique firms just as hard as mega-funds. How small PE firms can leverage technology to level the compliance playing field.</p>
                        <a href="blog-compliance-size.php" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to Discuss Your Tech Strategy?</h2>
            <p>Book a confidential alignment assessment and discover how we help PE firms turn technology into a competitive advantage.</p>
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
        const hamburger = document.getElementById('hamburger');
        const nav = document.getElementById('nav');
        
        hamburger.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
        
        document.addEventListener('click', (e) => {
            if (!nav.contains(e.target) && !hamburger.contains(e.target)) {
                nav.classList.remove('active');
            }
        });
    </script>
</body>
</html>
