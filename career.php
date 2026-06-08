<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- BoxIcon  CSS -->
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Title -->
    <title>Careers | Grow Boostly Performance Marketing Agency</title>
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <!-- Custom Premium Styles for Career Page (Unique Design) -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --cr-primary: #0f172a;
            --cr-text: #334155;
            --cr-muted: #64748b;
            --cr-bg: #fafcff;
            
            /* Custom Harmonious Gradients */
            --cr-grad-green: linear-gradient(135deg, #059669 0%, #10b981 100%);
            --cr-grad-blue: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
            --cr-grad-violet: linear-gradient(135deg, #6d28d9 0%, #8b5cf6 100%);
            
            --cr-glow-green: rgba(16, 185, 129, 0.15);
            --cr-glow-blue: rgba(59, 130, 246, 0.15);
            --cr-glow-violet: rgba(139, 92, 246, 0.15);

            --cr-font-title: 'Outfit', sans-serif;
            --cr-font-body: 'Inter', sans-serif;
        }

        body.career-page-new {
            background-color: var(--cr-bg);
            color: var(--cr-text);
            font-family: var(--cr-font-body);
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(59, 130, 246, 0.03) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(139, 92, 246, 0.03) 0%, transparent 40%);
        }

        /* Hero Section Styling */
        .cr-hero {
            padding: 180px 0 100px;
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .cr-hero-glow {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: -1;
            filter: blur(40px);
            pointer-events: none;
        }

        .cr-hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(37, 99, 235, 0.06);
            border: 1px solid rgba(37, 99, 235, 0.12);
            color: #2563eb;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            padding: 8px 16px;
            border-radius: 99px;
            margin-bottom: 24px;
            font-family: var(--cr-font-title);
        }

        .cr-hero h1 {
            font-family: var(--cr-font-title);
            font-size: clamp(42px, 6vw, 76px);
            font-weight: 800;
            line-height: 1.05;
            color: var(--cr-primary);
            letter-spacing: -2px;
            margin-bottom: 20px;
        }

        .cr-hero h1 span {
            background: linear-gradient(135deg, #10b981 0%, #2563eb 50%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cr-hero p {
            font-size: 18px;
            color: var(--cr-muted);
            max-width: 680px;
            margin: 0 auto 35px;
            line-height: 1.65;
        }

        .cr-hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: #fff !important;
            font-weight: 700;
            font-size: 15px;
            padding: 16px 36px;
            border-radius: 99px;
            box-shadow: 0 16px 32px rgba(37, 99, 235, 0.2);
            transition: all 0.3s ease;
        }

        .cr-hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.3);
        }

        /* Bento Grid Section (Culture & Values) */
        .cr-bento-section {
            padding: 80px 0;
        }

        .cr-section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .cr-section-title h2 {
            font-family: var(--cr-font-title);
            font-size: clamp(32px, 4vw, 48px);
            font-weight: 800;
            color: var(--cr-primary);
            letter-spacing: -1px;
            margin-bottom: 12px;
        }

        .cr-section-title p {
            color: var(--cr-muted);
            font-size: 16px;
            max-width: 550px;
            margin: 0 auto;
        }

        .cr-bento-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .cr-bento-card {
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(226, 232, 240, 0.9);
            border-radius: 28px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(7, 17, 31, 0.04);
            backdrop-filter: blur(12px);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 320px;
            z-index: 1;
        }

        .cr-bento-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 60px rgba(7, 17, 31, 0.08);
            border-color: rgba(37, 99, 235, 0.15);
        }

        .cr-bento-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            transition: all 0.3s ease;
        }

        .cr-bento-card.blue::before { background: var(--cr-grad-blue); }
        .cr-bento-card.green::before { background: var(--cr-grad-green); }
        .cr-bento-card.violet::before { background: var(--cr-grad-violet); }
        .cr-bento-card.gold::before { background: linear-gradient(135deg, #f59e0b, #d97706); }

        /* Specific Bento Card Backgrounds */
        .cr-bento-card.blue {
            background: radial-gradient(circle at 100% 0%, rgba(59, 130, 246, 0.07) 0%, rgba(255, 255, 255, 0.92) 60%);
            border-color: rgba(59, 130, 246, 0.12);
        }
        .cr-bento-card.green {
            background: radial-gradient(circle at 100% 0%, rgba(16, 185, 129, 0.07) 0%, rgba(255, 255, 255, 0.92) 60%);
            border-color: rgba(16, 185, 129, 0.12);
        }
        .cr-bento-card.violet {
            background: radial-gradient(circle at 100% 0%, rgba(139, 92, 246, 0.07) 0%, rgba(255, 255, 255, 0.92) 60%);
            border-color: rgba(139, 92, 246, 0.12);
        }
        .cr-bento-card.gold {
            background: radial-gradient(circle at 100% 0%, rgba(245, 158, 11, 0.07) 0%, rgba(255, 255, 255, 0.92) 60%);
            border-color: rgba(245, 158, 11, 0.12);
        }

        .cr-bento-card .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 24px;
            position: absolute;
            top: 40px;
            left: 40px;
            transition: all 0.3s ease;
        }

        .cr-bento-card.blue .icon-box { background: var(--cr-glow-blue); color: #2563eb; }
        .cr-bento-card.green .icon-box { background: var(--cr-glow-green); color: #10b981; }
        .cr-bento-card.violet .icon-box { background: var(--cr-glow-violet); color: #7c3aed; }
        .cr-bento-card.gold .icon-box { background: rgba(245, 158, 11, 0.12); color: #d97706; }

        .cr-bento-card:hover .icon-box {
            transform: scale(1.1);
        }

        .cr-bento-card h3 {
            font-family: var(--cr-font-title);
            font-size: 22px;
            font-weight: 700;
            color: var(--cr-primary);
            margin-bottom: 8px;
        }

        .cr-bento-card p {
            color: var(--cr-muted);
            font-size: 14.5px;
            line-height: 1.55;
            margin: 0;
        }

        /* Bento Span Layouts */
        .span-2 {
            grid-column: span 2;
        }

        /* Benefits Grid */
        .cr-benefits-section {
            padding: 80px 0;
            background:
                radial-gradient(circle at 12% 10%, rgba(59, 130, 246, 0.22), transparent 42%),
                radial-gradient(circle at 92% 0%, rgba(16, 185, 129, 0.18), transparent 40%),
                radial-gradient(circle at 55% 105%, rgba(139, 92, 246, 0.18), transparent 45%),
                linear-gradient(180deg, #0b1220 0%, #0f172a 55%, #0b1220 100%);
            border-top: 1px solid rgba(148, 163, 184, 0.12);
            border-bottom: 1px solid rgba(148, 163, 184, 0.12);
        }

        .cr-benefits-section .cr-section-title h2 {
            color: #f8fafc;
        }

        .cr-benefits-section .cr-section-title p {
            color: rgba(226, 232, 240, 0.78);
        }

        .cr-benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .cr-benefit-card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(148, 163, 184, 0.18);
            border-radius: 20px;
            padding: 24px;
            display: flex;
            align-items: flex-start;
            gap: 16px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .cr-benefit-card:hover {
            transform: translateX(4px);
            border-color: rgba(59, 130, 246, 0.32);
            box-shadow: 0 14px 34px rgba(2, 6, 23, 0.35);
        }

        .cr-benefit-num {
            font-family: var(--cr-font-title);
            font-size: 15px;
            font-weight: 800;
            color: #34d399;
            background: rgba(52, 211, 153, 0.14);
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .cr-benefit-card h4 {
            font-size: 16px;
            font-weight: 700;
            color: rgba(248, 250, 252, 0.94);
            margin: 4px 0 0 0;
            line-height: 1.4;
        }

        /* Job Positions Section */
        .cr-positions-section {
            padding: 100px 0;
        }

        .cr-job-list {
            max-width: 960px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .cr-job-card {
            background: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 24px;
            padding: 32px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 30px rgba(7, 17, 31, 0.03);
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .cr-job-card:hover {
            transform: scale(1.01);
            border-color: rgba(37, 99, 235, 0.25);
            box-shadow: 0 20px 50px rgba(37, 99, 235, 0.08);
        }

        .cr-job-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            background: linear-gradient(180deg, #2563eb, #7c3aed);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .cr-job-card:hover::before {
            opacity: 1;
        }

        .cr-job-info h3 {
            font-family: var(--cr-font-title);
            font-size: 24px;
            font-weight: 700;
            color: var(--cr-primary);
            margin-bottom: 12px;
        }

        .cr-job-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 16px;
        }

        .cr-job-badge {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 4px 12px;
            border-radius: 6px;
        }

        .cr-job-badge.blue {
            background: rgba(37, 99, 235, 0.08);
            color: #2563eb;
        }

        .cr-job-badge.green {
            background: rgba(16, 185, 129, 0.08);
            color: #10b981;
        }

        .cr-job-details {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 24px;
            font-size: 14px;
            color: var(--cr-muted);
        }

        .cr-job-details li {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cr-job-details i {
            color: #2563eb;
            font-size: 16px;
        }

        .cr-apply-btn {
            background: #0f172a;
            color: #ffffff !important;
            font-weight: 700;
            font-size: 14px;
            padding: 12px 28px;
            border-radius: 12px;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s ease;
        }

        .cr-apply-btn:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.2);
        }

        /* FAQ Section styling */
        .cr-faq-section {
            padding: 100px 0;
            background: #ffffff;
            border-top: 1px solid #edf2f7;
        }

        .cr-faq-list {
            max-width: 720px;
            margin: 0 auto;
        }

        .cr-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            margin-bottom: 16px;
            overflow: hidden;
            background: #ffffff;
            transition: all 0.3s ease;
        }

        .cr-faq-item:hover {
            border-color: #cbd5e1;
        }

        .cr-faq-trigger {
            width: 100%;
            padding: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: none;
            border: none;
            outline: none;
            font-family: var(--cr-font-title);
            font-size: 18px;
            font-weight: 700;
            color: var(--cr-primary);
            text-align: left;
            cursor: pointer;
        }

        .cr-faq-trigger i {
            font-size: 18px;
            color: var(--cr-muted);
            transition: transform 0.3s ease;
        }

        .cr-faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            background: #fafcff;
        }

        .cr-faq-content p {
            padding: 0 24px 24px 24px;
            margin: 0;
            font-size: 14.5px;
            line-height: 1.6;
            color: var(--cr-text);
        }

        .cr-faq-item.active {
            border-color: rgba(37, 99, 235, 0.25);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.03);
        }

        .cr-faq-item.active .cr-faq-trigger i {
            transform: rotate(45deg);
            color: #2563eb;
        }

        .cr-faq-item.active .cr-faq-content {
            max-height: 250px;
        }

        /* Responsiveness adjustments */
        @media (max-width: 991px) {
            .cr-bento-grid {
                grid-template-columns: 1fr 1fr;
            }
            .cr-benefits-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 767px) {
            .cr-hero {
                padding: 140px 20px 80px;
            }
            .cr-bento-grid {
                grid-template-columns: 1fr;
            }
            .span-2 {
                grid-column: span 1;
            }
            .cr-bento-card {
                min-height: 280px;
            }
            .cr-benefits-grid {
                grid-template-columns: 1fr;
            }
            .cr-job-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 24px;
                padding: 24px;
            }
            .cr-apply-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body class="career-page-new">

    <!-- Header Include -->
    <?php include 'header.php'; ?>

    <!-- Unique Hero Section -->
    <section class="cr-hero">
        <div class="cr-hero-glow"></div>
        <div class="container">
            <span class="cr-hero-tag">
                <i class="bi bi-rocket-takeoff-fill"></i> We Are Hiring
            </span>
            <h1>Shape the Future of <br><span>Digital Growth Systems</span></h1>
            <p>Join a team of high-performing thinkers, builders, and strategists. At Grow Boostly, we create solutions that don't just generate clicks—they turn leads into real business.</p>
            <a href="#positions" class="cr-hero-btn">
                View Open Positions <i class="bi bi-arrow-down-short ms-1"></i>
            </a>
        </div>
    </section>

    <!-- Bento Grid Section (Unique Values & Culture) -->
    <section class="cr-bento-section">
        <div class="container">
            <div class="cr-section-title">
                <h2>Our Team Culture</h2>
                <p>We work in a modern environment built around ownership, innovation, and direct impact.</p>
            </div>
            
            <div class="cr-bento-grid">
                <!-- Bento Card 1 -->
                <div class="cr-bento-card span-2 blue">
                    <div class="icon-box"><i class="bi bi-cpu"></i></div>
                    <div>
                        <h3>Innovative Projects</h3>
                        <p>Work on real performance campaigns and automation systems for fast-growing D2C, SaaS, tech, and global brands. We build things that matter.</p>
                    </div>
                </div>

                <!-- Bento Card 2 -->
                <div class="cr-bento-card green">
                    <div class="icon-box"><i class="bi bi-graph-up"></i></div>
                    <div>
                        <h3>Learning & Growth</h3>
                        <p>Receive hands-on exposure to paid media, SEO, automation, and full funnel optimization with clear pathways to advance your career.</p>
                    </div>
                </div>

                <!-- Bento Card 3 -->
                <div class="cr-bento-card violet">
                    <div class="icon-box"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <h3>Work-Life Harmony</h3>
                        <p>We trust you to deliver. Enjoy flexible hybrid working models and balanced schedules designed for productivity.</p>
                    </div>
                </div>

                <!-- Bento Card 4 -->
                <div class="cr-bento-card span-2 gold">
                    <div class="icon-box"><i class="bi bi-people-fill"></i></div>
                    <div>
                        <h3>Inclusive & Respectful Teams</h3>
                        <p>We foster a collaborative culture where every team member is encouraged to share ideas, test experiments, and take ownership of results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="cr-benefits-section">
        <div class="container">
            <div class="cr-section-title">
                <h2>Perks & Benefits</h2>
                <p>Designed to support your lifestyle, health, and career progression.</p>
            </div>

            <div class="cr-benefits-grid">
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">1</div>
                    <div>
                        <h4>Salary & Bonuses</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">2</div>
                    <div>
                        <h4>Comprehensive Insurance</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">3</div>
                    <div>
                        <h4>Hybrid / Remote Options</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">4</div>
                    <div>
                        <h4>Paid Time Off</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">5</div>
                    <div>
                        <h4>Wellness Programs</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">6</div>
                    <div>
                        <h4>Commuting Benefits</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">7</div>
                    <div>
                        <h4>Inclusive Culture</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">8</div>
                    <div>
                        <h4>Mentorship & Training</h4>
                    </div>
                </div>
                <div class="cr-benefit-card">
                    <div class="cr-benefit-num">9</div>
                    <div>
                        <h4>Clear Promotion Paths</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="cr-positions-section" id="positions">
        <div class="container">
            <div class="cr-section-title">
                <h2>Open Career Positions</h2>
                <p>We are searching for self-motivated, passionate builders to join our team.</p>
            </div>

            <div class="cr-job-list">
                <!-- Job 1 -->
                <div class="cr-job-card">
                    <div class="cr-job-info">
                        <h3>Performance Marketing Executive</h3>
                        <div class="cr-job-meta">
                            <span class="cr-job-badge blue">On-site</span>
                            <span class="cr-job-badge green">Full-time</span>
                        </div>
                        <ul class="cr-job-details">
                            <li><i class="bi bi-briefcase"></i> Experience: 1–3 Years</li>
                            <li><i class="bi bi-wallet2"></i> Salary: ₹3.5L–₹7L / year</li>
                        </ul>
                    </div>
                    <div>
                        <a href="contact.php?ref=career-performance-marketing#contact-form" class="cr-apply-btn">
                            Apply for Role <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="cr-job-card">
                    <div class="cr-job-info">
                        <h3>SEO & Content Strategist</h3>
                        <div class="cr-job-meta">
                            <span class="cr-job-badge blue">Remote</span>
                            <span class="cr-job-badge green">Full-time</span>
                        </div>
                        <ul class="cr-job-details">
                            <li><i class="bi bi-briefcase"></i> Experience: 2–4 Years</li>
                            <li><i class="bi bi-wallet2"></i> Salary: ₹4L–₹8L / year</li>
                        </ul>
                    </div>
                    <div>
                        <a href="contact.php?ref=career-seo-content#contact-form" class="cr-apply-btn">
                            Apply for Role <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="cr-job-card">
                    <div class="cr-job-info">
                        <h3>UI/UX Designer</h3>
                        <div class="cr-job-meta">
                            <span class="cr-job-badge blue">On-site</span>
                            <span class="cr-job-badge green">Full-time</span>
                        </div>
                        <ul class="cr-job-details">
                            <li><i class="bi bi-briefcase"></i> Experience: 2–4 Years</li>
                            <li><i class="bi bi-wallet2"></i> Salary: ₹4L–₹9L / year</li>
                        </ul>
                    </div>
                    <div>
                        <a href="contact.php?ref=career-ui-ux#contact-form" class="cr-apply-btn">
                            Apply for Role <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>

                <!-- Job 4 -->
                <div class="cr-job-card">
                    <div class="cr-job-info">
                        <h3>AI Automation Engineer</h3>
                        <div class="cr-job-meta">
                            <span class="cr-job-badge blue">Remote</span>
                            <span class="cr-job-badge green">Full-time</span>
                        </div>
                        <ul class="cr-job-details">
                            <li><i class="bi bi-briefcase"></i> Experience: 1–3 Years</li>
                            <li><i class="bi bi-wallet2"></i> Salary: ₹5L–₹10L / year</li>
                        </ul>
                    </div>
                    <div>
                        <a href="contact.php?ref=career-ai-automation#contact-form" class="cr-apply-btn">
                            Apply for Role <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>

                <!-- Job 5 -->
                <div class="cr-job-card">
                    <div class="cr-job-info">
                        <h3>B2B Lead Generation Specialist</h3>
                        <div class="cr-job-meta">
                            <span class="cr-job-badge blue">On-site</span>
                            <span class="cr-job-badge green">Full-time</span>
                        </div>
                        <ul class="cr-job-details">
                            <li><i class="bi bi-briefcase"></i> Experience: 1–2 Years</li>
                            <li><i class="bi bi-wallet2"></i> Salary: ₹3L–₹6L / year</li>
                        </ul>
                    </div>
                    <div>
                        <a href="contact.php?ref=career-b2b-lead-gen#contact-form" class="cr-apply-btn">
                            Apply for Role <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>

                <!-- Job 6 -->
                <div class="cr-job-card">
                    <div class="cr-job-info">
                        <h3>Telecaller Executive</h3>
                        <div class="cr-job-meta">
                            <span class="cr-job-badge blue">On-site</span>
                            <span class="cr-job-badge green">Full-time</span>
                        </div>
                        <ul class="cr-job-details">
                            <li><i class="bi bi-briefcase"></i> Experience: 0–2 Years</li>
                            <li><i class="bi bi-wallet2"></i> Salary: ₹2.4L–₹4.8L / year</li>
                        </ul>
                    </div>
                    <div>
                        <a href="contact.php?ref=career-telecaller#contact-form" class="cr-apply-btn">
                            Apply for Role <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>

                <!-- Job 7 -->
                <div class="cr-job-card">
                    <div class="cr-job-info">
                        <h3>Digital Marketing Executive</h3>
                        <div class="cr-job-meta">
                            <span class="cr-job-badge blue">On-site</span>
                            <span class="cr-job-badge green">Full-time</span>
                        </div>
                        <ul class="cr-job-details">
                            <li><i class="bi bi-briefcase"></i> Experience: 1–3 Years</li>
                            <li><i class="bi bi-wallet2"></i> Salary: ₹3L–₹6.5L / year</li>
                        </ul>
                    </div>
                    <div>
                        <a href="contact.php?ref=career-digital-marketing#contact-form" class="cr-apply-btn">
                            Apply for Role <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="cr-faq-section">
        <div class="container">
            <div class="cr-section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Have questions about joining our team? Find answers below.</p>
            </div>

            <div class="cr-faq-list">
                <div class="cr-faq-item active">
                    <button class="cr-faq-trigger">
                        How do I apply for a job at Grow Boostly? <i class="bi bi-plus"></i>
                    </button>
                    <div class="cr-faq-content">
                        <p>Click "Apply for Role" next to the position you're interested in. Make sure to attach your resume, portfolio link, and a brief description of why you'd be a great fit. You can also directly email your application to growboostly@gmail.com.</p>
                    </div>
                </div>

                <div class="cr-faq-item">
                    <button class="cr-faq-trigger">
                        What is the interview process like? <i class="bi bi-plus"></i>
                    </button>
                    <div class="cr-faq-content">
                        <p>Our interview process typically starts with a short screening call. Followed by a practical skill assessment or technical discussion, and a final alignment interview with the team leads to discuss collaboration and culture.</p>
                    </div>
                </div>

                <div class="cr-faq-item">
                    <button class="cr-faq-trigger">
                        Do you offer remote work opportunities? <i class="bi bi-plus"></i>
                    </button>
                    <div class="cr-faq-content">
                        <p>Yes, we offer both remote and hybrid options depending on the role. Roles classified as "Remote" allow you to work fully from anywhere, while "Hybrid" positions usually require a couple of days in our Lucknow office.</p>
                    </div>
                </div>

                <div class="cr-faq-item">
                    <button class="cr-faq-trigger">
                        What type of candidates are you looking for? <i class="bi bi-plus"></i>
                    </button>
                    <div class="cr-faq-content">
                        <p>We value active learners, self-starters, and candidates with strong problem-solving skills. If you are passionate about driving client growth, love testing data-backed experiments, and communicate well within teams, you will fit right in!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Include -->
    <?php include 'footer.php'; ?>

    <!-- FAQ accordion interactive behavior -->
    <script>
        document.querySelectorAll('.cr-faq-trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const parent = trigger.parentElement;
                const wasActive = parent.classList.contains('active');
                
                // close all items
                document.querySelectorAll('.cr-faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                if (!wasActive) {
                    parent.classList.add('active');
                }
            });
        });
    </script>

</body>

</html>
