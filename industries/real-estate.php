<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Supercharge your real estate sales and listing pipeline. Grow Boostly provides high-converting buyer & seller lead generation, local SEO for agents, and social media campaigns for real estate developers and brokers. Book a free consultation today!">
    <meta name="keywords" content="real estate lead generation, real estate marketing agency, buyer leads for agents, seller listings marketing, property advertising, local SEO for real estate">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Real Estate Lead Generation &amp; Marketing Services | Grow Boostly">
    <meta property="og:description" content="Get high-quality buyer &amp; seller leads, launch premium property marketing campaigns, and scale your real estate brokerage.">
    <meta property="og:url" content="https://www.growboostly.com/industries/real-estate">
    <meta property="og:type" content="website">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS -->
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="../assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <!--Nice Select CSS -->
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/slick-theme.css">
    <!-- BoxIcon CSS -->
    <link href="../assets/css/boxicons.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- Title -->
    <title>Real Estate Lead Generation &amp; Marketing Services | Grow Boostly</title>
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* ── REAL ESTATE THEME VARIABLES ── */
        :root {
            --re-primary: #d97706;      /* Premium Luxury Gold/Amber */
            --re-dark: #b45309;         /* Rich Bronze Gold */
            --re-light: #fef3c7;        /* Warm Soft Gold glow */
            --re-accent: #0f172a;       /* Deep Luxury Charcoal */
            --re-border: #fde68a;       /* Soft Gold Border */
            --re-navy: #0b1329;         /* Dark Space Blue */
            --re-text-gray: #475569;
        }

        /* ── HERO SECTION ── */
        .re-modern-hero {
            background: radial-gradient(circle at 10% 20%, rgba(217,119,6,0.06) 0%, rgba(255,255,255,0) 50%), #ffffff;
            padding: 110px 0 90px;
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid var(--re-border);
        }
        .re-modern-hero .hero-content-wrap {
            position: relative;
            z-index: 2;
        }
        .re-modern-hero .breadcrumb-list {
            justify-content: flex-start;
            margin-bottom: 25px;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
        }
        .re-modern-hero .breadcrumb-list li, .re-modern-hero .breadcrumb-list li a {
            font-size: 14px;
            font-weight: 500;
            color: var(--re-text-gray);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .re-modern-hero .breadcrumb-list li a:hover {
            color: var(--re-primary);
        }
        .re-modern-hero .re-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(217,119,6,0.08);
            color: var(--re-dark);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(217,119,6,0.15);
        }
        .re-modern-hero h1 {
            font-size: clamp(36px, 4.8vw, 56px);
            font-weight: 850;
            color: var(--re-accent);
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.2px;
        }
        .re-modern-hero h3 {
            font-size: 22px;
            font-weight: 600;
            color: var(--re-primary);
            margin-bottom: 24px;
            line-height: 1.4;
        }
        .re-modern-hero p {
            font-size: 17.5px;
            color: var(--re-text-gray);
            line-height: 1.65;
            margin-bottom: 36px;
        }
        .re-modern-hero .hero-actions {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }
        .re-modern-hero .btn-primary {
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(217,119,6,0.2);
            border: none;
        }
        .re-modern-hero .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(217,119,6,0.3);
            color: #fff !important;
        }
        .re-modern-hero .btn-secondary {
            background: #fff;
            color: var(--re-accent);
            padding: 15px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid var(--re-border);
            transition: all 0.3s ease;
        }
        .re-modern-hero .btn-secondary:hover {
            border-color: var(--re-primary);
            color: var(--re-primary);
        }
        .re-modern-hero .hero-stats {
            display: flex;
            gap: 40px;
            border-top: 1px solid #e2e8f0;
            padding-top: 32px;
        }
        .re-modern-hero .stat-block strong {
            display: block;
            font-size: 28px;
            font-weight: 800;
            color: var(--re-accent);
            line-height: 1.2;
        }
        .re-modern-hero .stat-block span {
            font-size: 13px;
            color: var(--re-text-gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Hero Image & Floating Cards */
        .re-modern-hero .hero-visual-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .re-modern-hero .main-img {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(15,23,42,0.12);
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
            border: 1px solid var(--re-border);
        }
        .re-modern-hero .floating-card {
            position: absolute;
            background: #fff;
            padding: 20px 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(15,23,42,0.06);
            border: 1px solid var(--re-border);
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 16px;
            animation: re-float 6s ease-in-out infinite;
        }
        .re-modern-hero .floating-card .icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(217,119,6,0.1);
            color: var(--re-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .re-modern-hero .floating-card strong {
            display: block;
            font-size: 22px;
            font-weight: 800;
            color: var(--re-accent);
            line-height: 1.2;
        }
        .re-modern-hero .floating-card span {
            display: block;
            font-size: 13px;
            color: var(--re-text-gray);
            font-weight: 500;
        }
        .re-modern-hero .re-fc-1 {
            top: 10%;
            left: -5%;
            animation-delay: 0s;
        }
        .re-modern-hero .re-fc-2 {
            bottom: 15%;
            right: -5%;
            animation-delay: 2.5s;
        }
        @keyframes re-float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @media (max-width: 991px) {
            .re-modern-hero .hero-visual-wrapper {
                margin-bottom: 60px;
                min-height: 400px;
            }
            .re-modern-hero .re-fc-1 { left: 5%; }
            .re-modern-hero .re-fc-2 { right: 5%; }
            .re-modern-hero .hero-stats { gap: 24px; flex-wrap: wrap; }
        }

        /* ── STATS BAR ── */
        .re-stats-bar {
            background: linear-gradient(135deg, var(--re-navy) 0%, #1e293b 100%);
            padding: 50px 0;
            margin-bottom: 80px;
        }
        .re-stats-bar .stat-item {
            text-align: center;
            padding: 20px 15px;
            border-right: 1px solid rgba(255,255,255,0.12);
        }
        .re-stats-bar .stat-item:last-child { border-right: none; }
        .re-stats-bar .stat-number {
            font-size: 44px;
            font-weight: 850;
            color: #fff;
            line-height: 1;
            margin-bottom: 8px;
        }
        .re-stats-bar .stat-number span { color: var(--re-primary); }
        .re-stats-bar .stat-label {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }
        @media (max-width: 767px) {
            .re-stats-bar .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
            .re-stats-bar .stat-item:last-child { border-bottom: none; }
        }

        /* ── SECTION TITLE HELPER ── */
        .re-section-title {
            margin-bottom: 48px;
            text-align: center;
        }
        .re-section-title h2 { font-size: 34px; font-weight: 800; color: var(--re-accent); }
        .re-section-title p {
            font-size: 16px;
            color: var(--re-text-gray);
            max-width: 720px;
            margin: 14px auto 0;
            text-align: center;
            line-height: 1.75;
        }
        .re-section-title .title-tag {
            display: inline-block;
            background: var(--re-light);
            color: var(--re-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ── WHAT IS / EDITORIAL GRID ── */
        .re-what-section { padding: 90px 0; background: #fff; overflow: hidden; }
        .re-what-inner { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center; }
        @media (max-width: 1199px) { .re-what-inner { grid-template-columns: 1fr; } }
        .re-what-left .eyebrow { display: inline-block; background: var(--re-light); color: var(--re-dark); font-size: 12px; font-weight: 800; padding: 6px 16px; border-radius: 30px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 20px; }
        .re-what-left h2 { font-size: clamp(30px, 3.8vw, 44px); font-weight: 850; color: var(--re-accent); line-height: 1.15; margin-bottom: 24px; letter-spacing: -0.8px; }
        .re-what-left p { font-size: 16.5px; color: var(--re-text-gray); line-height: 1.75; margin-bottom: 28px; }
        .re-what-left .re-highlight { color: var(--re-primary); font-weight: 700; }
        
        .re-btn-solid {
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(217,119,6,0.15);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .re-btn-solid:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(217,119,6,0.25);
            color: #fff !important;
        }

        .re-struggle-box { 
            background: #fffbf0; 
            border: 1.5px solid var(--re-border); 
            border-radius: 16px; 
            padding: 32px; 
            margin-top: 30px; 
            box-shadow: 0 8px 30px rgba(217,119,6, 0.02);
        }
        .re-struggle-box h4 { color: var(--re-dark); font-weight: 800; font-size: 20px; margin-bottom: 12px; }
        .re-struggle-box p { font-size: 15px; margin-bottom: 0; color: #78350f; }
        .re-struggle-list { list-style: none; padding: 0; margin: 24px 0 0; }
        .re-struggle-list li { display: flex; align-items: flex-start; gap: 12px; font-size: 15.5px; font-weight: 700; color: var(--re-accent); margin-bottom: 16px; }
        .re-struggle-list li i { color: var(--re-primary); flex-shrink: 0; font-size: 18px; }

        /* ── STRATEGY SECTION ── */
        .re-strategy {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
        }
        .re-feature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 35px;
        }
        @media (max-width: 767px) { .re-feature-grid { grid-template-columns: 1fr; } }
        
        .re-feature-card {
            background: #fff;
            border: 1.5px solid #f1f5f9;
            border-radius: 16px;
            padding: 30px 24px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            gap: 12px;
            height: 100%;
        }
        .re-feature-card:hover {
            border-color: var(--re-primary);
            box-shadow: 0 12px 36px rgba(217,119,6,0.08);
            transform: translateY(-4px);
        }
        .re-feature-card .icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--re-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--re-dark);
        }
        .re-feature-card h5 {
            font-size: 17.5px;
            font-weight: 800;
            color: var(--re-accent);
            margin: 0;
        }
        .re-feature-card p {
            font-size: 14.5px;
            color: var(--re-text-gray);
            margin: 0;
            line-height: 1.6;
        }

        /* ── ORBIT FLYWHEEL SECTION ── */
        .re-flywheel-section {
            padding: 95px 0;
            background: #fff;
        }
        .re-flywheel-section .re-flywheel-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 800;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #fff;
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-accent) 100%);
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.14);
            margin-bottom: 16px;
        }
        .re-flywheel-section h2 {
            font-size: clamp(28px, 3.2vw, 40px);
            font-weight: 850;
            color: var(--re-navy);
            letter-spacing: -0.8px;
            margin-bottom: 18px;
            line-height: 1.2;
        }
        .re-flywheel-section h2 .re-highlight-compounding {
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .re-flywheel-wrap { position: relative; max-width: 600px; margin: 0 auto; }
        .re-flywheel-hub { 
            width: 170px; 
            height: 170px; 
            border-radius: 50%; 
            background: var(--re-accent); 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            text-align: center; 
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            z-index: 10; 
            box-shadow: 0 0 0 16px rgba(217,119,6,.08), 0 0 0 32px rgba(217,119,6,.04); 
        }
        .re-flywheel-hub h4 { font-size: 15.5px; font-weight: 900; color: #fff; margin: 0; line-height: 1.3; }
        .re-flywheel-hub span { font-size: 11px; color: var(--re-primary); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; }
        
        .re-orbit { position: relative; width: 540px; height: 540px; margin: 0 auto; }
        @media (max-width: 767px) { .re-orbit { width: 340px; height: 340px; } }
        .re-orbit::before { content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px dashed rgba(217,119,6,.25); }
        .re-orbit-node { position: absolute; width: 125px; text-align: center; transform: translate(-50%, -50%); }
        @media (max-width: 767px) { .re-orbit-node { width: 85px; } }
        .re-orbit-node .on-circle { 
            width: 62px; 
            height: 62px; 
            border-radius: 50%; 
            background: #fff; 
            border: 2px solid var(--re-border); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 22px; 
            margin: 0 auto 8px; 
            box-shadow: 0 4px 16px rgba(0,0,0,.06); 
            transition: all .3s; 
        }
        @media (max-width: 767px) { .re-orbit-node .on-circle { width: 44px; height: 44px; font-size: 16px; } }
        .re-orbit-node:hover .on-circle { background: var(--re-primary); border-color: var(--re-primary); box-shadow: 0 0 0 8px rgba(217,119,6,.15); color: #fff; }
        .re-orbit-node:hover .on-circle i { color: #fff; }
        .re-orbit-node .on-label { font-size: 11.5px; font-weight: 800; color: var(--re-accent); text-transform: uppercase; letter-spacing: .6px; line-height: 1.3; }
        .re-orbit-node .on-sub { font-size: 10px; color: var(--re-text-gray); margin-top: 3px; }
        
        /* Node Positions */
        .re-orbit-node:nth-child(1) { top: 0%;   left: 50%; }
        .re-orbit-node:nth-child(2) { top: 25%;  left: 93.3%; }
        .re-orbit-node:nth-child(3) { top: 75%;  left: 93.3%; }
        .re-orbit-node:nth-child(4) { top: 100%; left: 50%; }
        .re-orbit-node:nth-child(5) { top: 75%;  left: 6.7%; }
        .re-orbit-node:nth-child(6) { top: 25%;  left: 6.7%; }

        /* ── EXPERT BOOKING ── */
        .re-expert-section {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }
        .re-expert-card {
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(15,23,42,0.05);
            border: 1px solid var(--re-border);
        }

        /* ── FAQ ── */
        .re-faq {
            padding: 90px 0;
        }
        .re-faq .accordion-item {
            border: 1px solid var(--re-border);
            border-radius: 12px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }
        .re-faq .accordion-button {
            font-size: 16.5px;
            font-weight: 700;
            color: var(--re-accent);
            background: #fff;
            padding: 22px 24px;
        }
        .re-faq .accordion-button:not(.collapsed) {
            color: var(--re-dark);
            background: var(--re-light);
            box-shadow: none;
        }
        .re-faq .accordion-body {
            font-size: 15px;
            color: var(--re-text-gray);
            padding: 18px 24px 22px;
            background: #fffdf9;
            line-height: 1.65;
        }

        /* ── FINAL CTA ── */
        .re-final-cta {
            padding: 95px 0;
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-dark) 100%);
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .re-final-cta::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
            pointer-events: none;
        }
        .re-final-cta h2 {
            font-size: 38px;
            font-weight: 850;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.8px;
        }
        .re-final-cta p {
            font-size: 18px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 36px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }
        .re-final-cta .cta-phone {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 30px;
            display: block;
        }
        .re-final-cta .cta-phone a { color: #fff; text-decoration: none; }
        .re-final-cta .cta-phone a:hover { text-decoration: underline; }
        
        .re-cta-btn {
            display: inline-block;
            background: #fff;
            color: var(--re-dark);
            font-size: 16px;
            font-weight: 700;
            padding: 16px 38px;
            border-radius: 40px;
            text-decoration: none;
            margin: 6px 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .re-cta-btn:hover {
            background: var(--re-accent);
            color: #fff;
            transform: translateY(-2px);
        }
        .re-cta-btn.outline {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.7);
            box-shadow: none;
        }
        .re-cta-btn.outline:hover {
            background: #fff;
            color: var(--re-dark);
        }
        .re-final-cta .highlight-note {
            display: inline-block;
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 8px;
            padding: 14px 28px;
            font-size: 15px;
            color: #fff;
            margin-top: 36px;
            font-weight: 600;
        }

        .re-brands-section {
            padding: 90px 0;
            background: var(--re-light);
            border-top: 1px solid var(--re-border);
            border-bottom: 1px solid var(--re-border);
        }
        .re-brands-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        @media (max-width: 991px) { .re-brands-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 575px) { .re-brands-grid { grid-template-columns: 1fr; } }
        .re-brand-card {
            background: #fff;
            border: 1px solid var(--re-border);
            border-radius: 16px;
            padding: 28px 24px;
            transition: all 0.3s ease;
        }
        .re-brand-card:hover {
            border-color: var(--re-primary);
            box-shadow: 0 12px 30px rgba(180,83,9,0.12);
            transform: translateY(-4px);
        }
        .re-brand-card .icon { font-size: 28px; margin-bottom: 14px; }
        .re-brand-card h5 { font-size: 17px; font-weight: 800; color: var(--re-accent); margin-bottom: 10px; }
        .re-brand-card p { font-size: 14px; color: var(--re-text-gray); margin: 0; line-height: 1.6; }

        .re-deliverables-section { padding: 90px 0; background: #fff; }
        .re-deliverables-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-top: 40px;
        }
        @media (max-width: 767px) { .re-deliverables-grid { grid-template-columns: 1fr; } }
        .re-deliverable-item {
            display: flex;
            gap: 18px;
            padding: 24px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            background: var(--re-light);
        }
        .re-deliverable-item .num {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--re-primary), var(--re-dark));
            color: #fff;
            font-weight: 800;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .re-deliverable-item h5 { font-size: 16px; font-weight: 800; color: var(--re-accent); margin-bottom: 8px; }
        .re-deliverable-item p { font-size: 14px; color: var(--re-text-gray); margin: 0; line-height: 1.65; }

        .re-industries-section {
            padding: 85px 0;
            background: var(--re-accent);
            color: #fff;
        }
        .re-industries-section h2 { color: #fff; font-weight: 850; margin-bottom: 12px; }
        .re-industries-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid rgba(255,255,255,0.12);
        }
        .re-industries-list li a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 0;
            border-bottom: 1px solid rgba(255,255,255,0.12);
            color: rgba(255,255,255,0.9);
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.25s;
        }
        .re-industries-list li a:hover { color: var(--re-primary); padding-left: 10px; }
        .re-industries-list .ind-left { display: flex; align-items: center; gap: 14px; }
        .re-industries-list .ind-icon { font-size: 22px; }
    </style>
</head>

<body class="tt-magic-cursor digital-agency">

    <?php include '../header.php'; ?>

    <!-- ── REAL ESTATE HERO SECTION ── -->
    <div class="re-modern-hero mb-0">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Column: Text Content -->
                <div class="col-lg-6">
                    <div class="hero-content-wrap">
                        <div class="breadcrumb-list">
                            <li><a href="../index.php">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i></li>
                            <li><a href="../industries">Industries</a></li>
                            <li><i class="bi bi-chevron-right"></i></li>
                            <li>Real Estate</li>
                        </div>
                        <span class="re-tag mb-3">Premium Property Marketing</span>
                        <h1>High-Intent Buyer &amp; Seller Lead Generation</h1>
                        <h3>Accelerate Listings, Sales &amp; Conversions.</h3>
                        <p>We build multi-channel marketing engines for property developers, brokers, and premium real estate agencies. By deploying geo-targeted lead funnels, virtual tour advertising, and local SEO domination, we connect your sales team directly with qualified property seekers.</p>
                        <div class="hero-actions">
                            <a href="../contact.php?ref=re-consultation" class="btn-primary">Book Free Consultation</a>
                            <a href="../contact.php?ref=re-growth-plan" class="btn-secondary">Get Free Growth Plan</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-block">
                                <strong>5.2x</strong>
                                <span>Average ROI</span>
                            </div>
                            <div class="stat-block">
                                <strong>$480M+</strong>
                                <span>Sales Value Generated</span>
                            </div>
                            <div class="stat-block">
                                <strong>94%</strong>
                                <span>Lead Accuracy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Visual Image -->
                <div class="col-lg-6">
                    <div class="hero-visual-wrapper">
                        <div class="floating-card re-fc-1">
                            <div class="icon"><i class="bi bi-house-heart-fill"></i></div>
                            <div>
                                <strong>84%</strong>
                                <span>Listing View Rate</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/real-estate-hero.png" alt="Real Estate Property Lead Dashboard" class="main-img">
                        <div class="floating-card re-fc-2">
                            <div class="icon"><i class="bi bi-graph-up-arrow"></i></div>
                            <div>
                                <strong>3.5x</strong>
                                <span>Pipeline Velocity</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── STATS BAR ── -->
    <div class="re-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>5.2</span>X+</div>
                        <div class="stat-label">Average Campaign ROI</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>40</span>%</div>
                        <div class="stat-label">Faster Close Times</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>12</span>k+</div>
                        <div class="stat-label">Qualified Buyer Profiles</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>$480</span>M+</div>
                        <div class="stat-label">Client Property Value Sold</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── THE STRUGGLE / WHY IT MATTERS ── -->
    <section class="re-what-section">
        <div class="container">
            <div class="re-what-inner">
                <div class="re-what-left">
                    <span class="eyebrow">The Bottleneck</span>
                    <h2>Is Your Property Pipeline Dry or Filled With Unqualified Clicks?</h2>
                    <p>Too many real estate agencies burn their margins on low-intent listing portals and spammy social ads. Agents spend hours chasing fake phone numbers or window shoppers who are years away from buying.</p>
                    <p>At Grow Boostly, we design <span class="re-highlight">targeted acquisition funnels</span> that verify buyer intent, qualify budgets, and automate nurturing. We deliver ready-to-talk prospects looking for properties in your specific price tier.</p>
                    
                    <a href="../contact.php?ref=re-project-discussion" class="re-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                
                <div>
                    <div class="re-struggle-box">
                        <h4>Struggling with these marketing challenges?</h4>
                        <p>Our Real Estate marketing services resolve the industry's biggest friction points:</p>
                        <ul class="re-struggle-list">
                            <li><i class="bi bi-exclamation-circle-fill"></i> Unqualified leads wasting agent time</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low visibility in premium neighborhood searches</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Inconsistent buyer and listing pipelines</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> High cost-per-lead on portal portals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── WHO WE HELP (REAL ESTATE & PROPERTY) ── -->
    <section class="re-brands-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">Who We Help</span>
                        <h2>Real Estate &amp; Property Brands We Scale</h2>
                        <p>Whether you are launching a tower, scaling a brokerage, or winning seller mandates — we build buyer and seller pipelines matched to your price band, geography, and sales team capacity.</p>
                    </div>
                </div>
            </div>
            <div class="re-brands-grid">
                <div class="re-brand-card">
                    <div class="icon">🏗️</div>
                    <h5>Property Developers</h5>
                    <p>Pre-launch registration funnels, launch-week ad bursts, and digital booking queues for residential and mixed-use projects.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🏠</div>
                    <h5>Residential Brokerages</h5>
                    <p>Qualified buyer leads, listing visibility, and agent-level CRM routing for single-market and regional teams.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">✨</div>
                    <h5>Luxury &amp; Premium Agencies</h5>
                    <p>HNW targeting, virtual tour retargeting, and high-ticket property campaigns for ultra-premium inventory.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🏢</div>
                    <h5>Commercial Real Estate</h5>
                    <p>Office, retail, and industrial lead gen with decision-maker qualification and long-cycle nurture sequences.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🔑</div>
                    <h5>Rental &amp; Property Management</h5>
                    <p>Tenant acquisition ads, local SEO, and fast-response funnels for landlords and managed portfolios.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">📈</div>
                    <h5>Investment &amp; Advisory Firms</h5>
                    <p>Investor webinars, ROI calculators, and pipeline campaigns for REIT-style and off-plan investment products.</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="../contact.php?ref=re-brands-discuss" class="re-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── CORE REAL ESTATE STRATEGIES ── -->
    <section class="re-strategy">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">Our System</span>
                        <h2>High-Performance Property Marketing Solutions</h2>
                        <p>We deploy pre-launch microsites, budget-qualified funnels, hyper-local SEO, virtual tour retargeting, and Meta/Google campaigns built to fill CRMs with serious buyers and sellers.</p>
                    </div>
                </div>
            </div>
            
            <div class="re-feature-grid">
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-building-fill"></i></div>
                    <h5>Project Launch Campaigns</h5>
                    <p>Generate high-velocity pre-launch registrations. We design high-converting microsites, produce target buyer ads, and organize digital booking queues that build massive launch momentum.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-funnel-fill"></i></div>
                    <h5>Budget-Qualified Funnels</h5>
                    <p>Acquire qualified leads. Our custom intake pathways qualify potential buyers by budget, timeline, location preference, and down-payment capability before they reach your CRM.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-search-heart-fill"></i></div>
                    <h5>Hyper-Local SEO &amp; Maps</h5>
                    <p>Become the dominant agency in your area. We optimize listing terms, neighborhood guides, and localized maps to make sure you capture buyers searching for local listings.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-camera-video-fill"></i></div>
                    <h5>Virtual Tour Retargeting</h5>
                    <p>Keep your listings top-of-mind. We set up behavioral retargeting sequences that serve immersive virtual tour clips and floor plans to prospects who showed high-intent on your pages.</p>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="../contact.php?ref=re-strategy" class="re-btn-solid">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── GROWTH DELIVERABLES ── -->
    <section class="re-deliverables-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">What You Get</span>
                        <h2>End-to-End Real Estate Growth Deliverables</h2>
                        <p>Every engagement is built around qualified tours and closed deals — not portal spam. Here is what a typical GrowBoostly property marketing growth plan includes.</p>
                    </div>
                </div>
            </div>
            <div class="re-deliverables-grid">
                <div class="re-deliverable-item">
                    <span class="num">1</span>
                    <div>
                        <h5>Buyer &amp; Seller Funnel Architecture</h5>
                        <p>Multi-step qualification, SMS verification, and separate paths for purchase intent vs. listing mandate capture.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">2</span>
                    <div>
                        <h5>Launch &amp; Listing Campaigns</h5>
                        <p>Pre-sale registration ads, project microsites, and always-on listing promotion with creative testing by unit type.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">3</span>
                    <div>
                        <h5>Local SEO &amp; Maps Dominance</h5>
                        <p>Neighborhood guides, map-pack optimization, and “homes for sale near me” visibility for your agency brand.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">4</span>
                    <div>
                        <h5>CRM Integration &amp; Nurture Automation</h5>
                        <p>Instant lead routing to agents, WhatsApp/SMS follow-up, and retargeting for virtual tour viewers and warm prospects.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="../contact.php?ref=re-deliverables-plan" class="re-btn-solid">Get Free Growth Plan <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── FAQ SECTION ── -->
    <div class="re-faq">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">FAQ</span>
                        <h2>Real Estate Marketing FAQ</h2>
                        <p>Common questions answered about our property marketing, listing funnel systems, lead qualification, and CRM integrations.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="realEstateFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do you filter out low-intent or unqualified leads?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    We use multi-step qualification funnels instead of single-click lead forms. Prospects must specify their desired purchase timeline, property size preference, and budget parameters, and verify their phone number via one-time SMS verification. This drops spam leads by up to 85% and ensures your agents only call serious buyers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you work directly with CRM platforms like Salesforce, HubSpot, or Follow Up Boss?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes, we integrate our funnels with all major real estate CRM tools via API/Zapier. Leads are routed instantly to the correct agent groups along with their qualification profile, allowing your sales team to follow up within minutes of an inquiry.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you target high-net-worth investors or luxury property buyers?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    We employ narrow targeting coordinates, layering interest segments (such as premium listing portals, real estate investment funds, luxury travel, and specific executive job titles) combined with zip code/neighborhood targeting. We also use lookalike models built off your past buyer lists.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can you help us get more property seller listing mandates?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Absolutely. We run dedicated listing acquisition funnels (e.g. "What is my home worth?" calculators) and neighborhood authority campaigns that position your agency as the best choice to sell. This captures local homeowners when they first begin considering listing their properties.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do you run separate campaigns for sales, rentals, and commercial inventory?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes. Each product line gets its own funnel logic, keywords, and creative — residential purchase, rental tenant acquisition, and commercial inquiry paths are kept separate so cost-per-lead and agent routing stay accurate.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How soon do qualified buyer leads start after campaign launch?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Paid campaigns typically produce verified inquiries within 7–14 days of go-live. Pre-launch projects often peak in weeks 2–4 as retargeting warms. Local SEO compounds over 60–90 days. We align spend with inventory availability and agent follow-up SLAs before scaling budgets.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── LEAD GENERATION FLYWHEEL ── -->
    <section class="re-flywheel-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="re-flywheel-wrap">
                        <div class="re-flywheel-hub">
                            <h4>PROPERTY<br>ACQUISITION</h4>
                            <span>Flywheel</span>
                        </div>
                        <div class="re-orbit">
                            <!-- Node 1 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-binoculars-fill"></i></div>
                                <div class="on-label">Attract</div>
                                <div class="on-sub">Luxury Social &amp; SEO</div>
                            </div>
                            <!-- Node 2 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-sliders"></i></div>
                                <div class="on-label">Qualify</div>
                                <div class="on-sub">Budget &amp; Timeline</div>
                            </div>
                            <!-- Node 3 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-calendar3"></i></div>
                                <div class="on-label">Tour Booking</div>
                                <div class="on-sub">Instant Booking</div>
                            </div>
                            <!-- Node 4 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-chat-left-dots-fill"></i></div>
                                <div class="on-label">Nurture</div>
                                <div class="on-sub">WhatsApp &amp; SMS</div>
                            </div>
                            <!-- Node 5 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-key-fill"></i></div>
                                <div class="on-label">Close</div>
                                <div class="on-sub">CRM Handoff</div>
                            </div>
                            <!-- Node 6 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-people-fill"></i></div>
                                <div class="on-label">Referral</div>
                                <div class="on-sub">Investor Networks</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <span class="re-flywheel-eyebrow mb-3">Self-Sustaining Pipeline</span>
                        <h2>The <span class="re-highlight-compounding">Compounding</span> Brokerage Flywheel</h2>
                        <p>Instead of starting from zero listings and listings views each month, we implement a compounding lead network. By combining local organic domination, automated nurturing, and investor email segments, we turn single inquiries into long-term listing referrals.</p>
                        <p>This systematic pipeline accelerates sales velocity, ensuring your property developments and broker listings sell out predictably.</p>
                        
                        <a href="../contact.php?ref=re-lead-gen" class="re-btn-solid mt-3">Start Lead Generation <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── REAL ESTATE EXPERT BOOKING ── -->
    <section class="re-expert-section">
        <div class="container">
            <div class="re-expert-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2 style="font-weight: 850; color: var(--re-accent); margin-bottom: 14px;">Consult a Property Marketing Expert</h2>
                        <p style="font-size: 16.5px; color: var(--re-text-gray); margin: 0; line-height: 1.6;">Launching a new residential tower, luxury development, or scaling a regional brokerage? Connect directly with a real estate growth architect to map out your pre-sale or listing acquisition campaign.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="../contact.php?ref=re-talk-expert" class="re-btn-solid">Talk To Growth Expert <i class="bi bi-chat-square-text-fill ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OTHER INDUSTRIES ── -->
    <section class="re-industries-section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <span class="re-tag" style="background:rgba(255,255,255,0.1);color:#fff;border-color:rgba(255,255,255,0.2);">Explore More</span>
                    <h2>Marketing for Other Industries</h2>
                    <p style="color:rgba(255,255,255,0.72);line-height:1.7;">GrowBoostly also builds growth systems for healthcare, education, eCommerce, SaaS, BPO, finance, and local service businesses.</p>
                    <a href="../contact.php?ref=re-other-industry" class="re-btn-solid mt-3">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-7">
                    <ul class="re-industries-list">
                        <li><a href="healthcare-clinics"><span class="ind-left"><span class="ind-icon">🏥</span>Healthcare &amp; Clinics</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="education-coaching"><span class="ind-left"><span class="ind-icon">🎓</span>Education &amp; Coaching</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="ecommerce-d2c"><span class="ind-left"><span class="ind-icon">🛒</span>eCommerce &amp; D2C Brands</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="local-businesses"><span class="ind-left"><span class="ind-icon">🏪</span>Local Businesses</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="saas-it-technology"><span class="ind-left"><span class="ind-icon">💻</span>SaaS &amp; IT Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="bpo-service-companies"><span class="ind-left"><span class="ind-icon">📞</span>BPO &amp; Service Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="finance-insurance"><span class="ind-left"><span class="ind-icon">🏦</span>Finance &amp; Insurance</span><i class="bi bi-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FINAL CONVERSION CTA BANNER ── -->
    <div class="re-final-cta">
        <div class="container">
            <h2>Accelerate Your Property Sales Velocity Today</h2>
            <p>Don't let valuable buyer leads slip to competitors. Connect with our dedicated property marketing team to configure your multi-channel acquisition pipeline and fill your CRM with qualified buyers.</p>
            <span class="cta-phone">
                📞 Call / WhatsApp: <a href="tel:+919919020887">+91-9919020887</a>
            </span>
            <div>
                <a href="../contact.php?ref=re-final-consultation" class="re-cta-btn">Book Free Consultation</a>
                <a href="../contact.php?ref=re-final-growth-plan" class="re-cta-btn outline">Get Free Growth Plan</a>
            </div>
            <div class="mt-3">
                <a href="../contact.php?ref=re-final-project" class="re-cta-btn outline" style="font-size:15px;padding:12px 28px;">Discuss Your Project</a>
                <a href="../contact.php?ref=re-final-expert" class="re-cta-btn outline" style="font-size:15px;padding:12px 28px;">Talk To Growth Expert</a>
            </div>
            <div class="highlight-note">
                ⭐ Average Agency ROI of 340% within the First 5 Months of Setup
            </div>
        </div>
    </div>
    <br>

    <?php include '../footer.php'; ?>

</body>
</html>
