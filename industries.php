<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <title>Industry Growth Solutions | Grow Boostly</title>
    <meta name="description" content="Explore custom growth solutions, automation systems, and performance marketing strategies tailored for E-commerce, Real Estate, Finance, Healthcare, SaaS, and more.">
    <meta name="robots" content="index, follow">

    <!-- CSS Inclusions -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* ── CENTRAL PORTAL STYLES ── */
        .gb-ind-hero {
            background: linear-gradient(135deg, #f5f3ff 0%, #eff6ff 50%, #f0fdf4 100%);
            padding: 160px 0 90px;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid #e2e8f0;
        }
        .gb-ind-hero:before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(15, 23, 42, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(15, 23, 42, 0.03) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent 90%);
            pointer-events: none;
        }
        .gb-ind-hero .breadcrumb-list {
            padding: 0;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
            position: relative;
            z-index: 2;
        }
        .gb-ind-hero .breadcrumb-list li a {
            color: #64748b;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
        }
        .gb-ind-hero .breadcrumb-list li a:hover {
            color: #6366f1;
        }
        .gb-ind-hero .breadcrumb-list li {
            color: #0f172a;
            font-size: 14px;
        }
        .gb-ind-hero h1 {
            font-size: clamp(38px, 5vw, 56px);
            font-weight: 850;
            line-height: 1.15;
            color: #0f172a;
            letter-spacing: -1.2px;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        .gb-ind-hero h1 span {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gb-ind-hero p {
            font-size: 18px;
            color: #64748b;
            line-height: 1.65;
            max-width: 680px;
            margin-bottom: 0;
            position: relative;
            z-index: 2;
        }

        .gb-ind-grid-section {
            padding: 100px 0;
            background: #f8fafc;
        }
        .gb-ind-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 40px 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.01);
        }
        .gb-ind-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #6366f1, #a855f7);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        .gb-ind-card:hover {
            transform: translateY(-6px);
            border-color: #cbd5e1;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }
        .gb-ind-card:hover::before {
            transform: scaleX(1);
        }
        .gb-ind-icon-box {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 24px;
            transition: all 0.3s ease;
        }
        .gb-ind-card:hover .gb-ind-icon-box {
            transform: scale(1.08);
        }
        
        /* Diverse pastel glow styles for each card */
        .ic-ec { background: #f5f3ff; color: #8b5cf6; }
        .ic-re { background: #eff6ff; color: #3b82f6; }
        .ic-fi { background: #ecfdf5; color: #10b981; }
        .ic-ed { background: #fff7ed; color: #f97316; }
        .ic-hc { background: #f0fdfa; color: #14b8a6; }
        .ic-sa { background: #f0f9ff; color: #06b6d4; }
        .ic-bp { background: #fff1f2; color: #f43f5e; }
        .ic-lo { background: #fcf8e3; color: #af8b2c; }

        .gb-ind-info h3 {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
        }
        .gb-ind-info p {
            font-size: 15px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .gb-ind-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .gb-ind-link i {
            font-size: 18px;
            transition: transform 0.3s ease;
        }
        .gb-ind-card:hover .gb-ind-link {
            color: #6366f1;
        }
        .gb-ind-card:hover .gb-ind-link i {
            transform: translateX(4px);
        }

        /* ── CTA SECTION ── */
        .gb-ind-cta {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 90px 0;
            text-align: center;
            color: #fff;
            border-top: 1px solid #334155;
        }
        .gb-ind-cta h2 {
            font-size: 36px;
            font-weight: 850;
            margin-bottom: 16px;
            letter-spacing: -0.8px;
        }
        .gb-ind-cta p {
            font-size: 17px;
            color: #94a3b8;
            max-width: 600px;
            margin: 0 auto 36px;
            line-height: 1.65;
        }
        .gb-ind-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.2);
            border: none;
        }
        .gb-ind-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(99, 102, 241, 0.35);
        }
    </style>
</head>
<body class="gb-ind-portal-page">

<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="gb-ind-hero">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li class="active">Industries</li>
        </ul>
        <h1>Tailored <span>Growth Systems</span> For Your Industry</h1>
        <p>We combine high-intent marketing funnels, performance marketing, and CRM marketing automation to build custom scaling loops designed for your business sector.</p>
    </div>
</section>

<!-- Industries Grid Section -->
<section class="gb-ind-grid-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- E-Commerce & D2C -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-ec">
                        <i class="bi bi-cart3"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>E-Commerce &amp; D2C</h3>
                        <p>Scale Shopify stores, D2C retail brands, and marketplaces with high-ROAS ads and automated customer retention funnels.</p>
                    </div>
                    <a href="industries/ecommerce-d2c.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Real Estate -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-re">
                        <i class="bi bi-building"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>Real Estate</h3>
                        <p>Capture serious property buyers with high-intent lead generation, landing pages, and automated WhatsApp nurturing pipelines.</p>
                    </div>
                    <a href="industries/real-estate.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Finance & Insurance -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-fi">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>Finance &amp; Insurance</h3>
                        <p>Generate high-value qualified leads using search intent-based campaigns, strict CRM filtering, and lead workflows.</p>
                    </div>
                    <a href="industries/finance-insurance.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Education & Coaching -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-ed">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>Education &amp; Coaching</h3>
                        <p>Acquire student enrollments and webinar sign-ups with conversion-optimized funnels, lead magnets, and automation.</p>
                    </div>
                    <a href="industries/education-coaching.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Healthcare & Clinics -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-hc">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>Healthcare &amp; Clinics</h3>
                        <p>Drive patient bookings and appointment inquiries through localized search ads, landing pages, and auto-scheduling.</p>
                    </div>
                    <a href="industries/healthcare-clinics.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- SaaS & IT Technology -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-sa">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>SaaS &amp; IT Technology</h3>
                        <p>Accelerate product sign-ups, demo requests, and trial conversions with ICP-targeted LinkedIn campaigns.</p>
                    </div>
                    <a href="industries/saas-it-technology.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- BPO & Service Companies -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-bp">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>BPO &amp; Service Companies</h3>
                        <p>Automate lead capture, assignment rules, and instant follow-up to convert enquiries into corporate clients.</p>
                    </div>
                    <a href="industries/bpo-service-companies.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Local Businesses -->
            <div class="col-lg-4 col-md-6">
                <article class="gb-ind-card">
                    <div class="gb-ind-icon-box ic-lo">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="gb-ind-info">
                        <h3>Local Businesses</h3>
                        <p>Grow local walk-ins, phone calls, and localized service requests with Map optimization and Google Search Ads.</p>
                    </div>
                    <a href="industries/local-businesses.php" class="gb-ind-link">
                        Explore Solutions <i class="bi bi-arrow-right"></i>
                    </a>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- Call To Action Section -->
<section class="gb-ind-cta">
    <div class="container">
        <h2>Ready to grow your industry market share?</h2>
        <p>Talk to a Grow Boostly scaling consultant about a custom lead generation and marketing workflow designed specifically for your industry.</p>
        <a href="contact.php?ref=industries-portal" class="gb-ind-btn">Book Your Free Strategy Call</a>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
