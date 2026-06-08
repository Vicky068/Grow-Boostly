<?php
/**
 * GrowBoostly - Campaign Management Service Page
 * Ready to upload PHP page
 * Suggested file path: /services/campaign-management.php
 *
 * Image note:
 * Replace placeholder image URLs with your own images from /assets/img/
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Management Services in India | Digital & Influencer Campaigns – GrowBoostly</title>
    <meta name="description" content="GrowBoostly manages digital marketing, influencer, social media and lead generation campaigns with strategy, execution, tracking, reporting and optimization.">
    <meta name="keywords" content="Campaign Management India, Digital Campaign Management, Influencer Campaign Management, Social Media Campaigns, Lead Generation Campaign Management, GrowBoostly">
    <link rel="canonical" href="https://growboostly.com/services/campaign-management.php">

    <meta property="og:title" content="Campaign Management Services in India | GrowBoostly">
    <meta property="og:description" content="Plan, manage and optimize digital campaigns with GrowBoostly's campaign management services.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://growboostly.com/services/campaign-management.php">
    <meta property="og:image" content="https://growboostly.com/assets/img/campaign-management-og.jpg">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/jquery-ui.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <link href="../assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/slick-theme.css">
    <link href="../assets/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* NEW MODERN HERO - Campaign Management Page */
        :root {
            --cm-primary: #16c784;
            --cm-primary-dark: #0b9f68;
            --cm-blue: #3b82f6;
            --cm-light: #f6f9fc;
            --cm-border: #e2e8f0;
            --cm-navy: #0d1b2f;
            --cm-cream: #f0fdf4;
            --cm-text: #1f2937;
        }

        .cm-modern-hero { position: relative; padding: 150px 0 100px; background: radial-gradient(120% 120% at 80% 0%, #f0fdf4 0%, #ffffff 60%); overflow: hidden; }
        @media (max-width: 991px) {
            .cm-modern-hero { padding: 130px 0 70px; }
        }
        .cm-modern-hero .hero-content { position: relative; z-index: 2; padding-top: 0; }
        .cm-modern-hero h1 { font-size: clamp(40px, 5vw, 64px); font-weight: 900; color: #07111f; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1.5px; }
        .cm-modern-hero h3 { font-size: 22px; font-weight: 600; color: var(--cm-primary-dark); margin-bottom: 24px; line-height: 1.4; }
        .cm-modern-hero p { font-size: 18px; color: #4b5563; line-height: 1.7; margin-bottom: 35px; max-width: 90%; }
        .cm-hero-buttons { display: flex; gap: 15px; align-items: center; flex-wrap: wrap; }
        .cm-btn-primary { background: var(--cm-primary); color: #fff; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 10px 20px rgba(22,199,132,0.2); }
        .cm-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(22,199,132,0.3); color: #fff; background: var(--cm-primary-dark); }
        .cm-btn-outline { background: #fff; color: #07111f; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; border: 1.5px solid var(--cm-border); display: inline-flex; align-items: center; }
        .cm-btn-outline:hover { border-color: var(--cm-primary); color: var(--cm-primary); background: var(--cm-cream); }
        .cm-hero-visual { position: relative; z-index: 2; text-align: right; }
        .cm-hero-visual img.main-img { max-width: 100%; border-radius: 24px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); position: relative; z-index: 2; border: 4px solid #fff; }
        .cm-hero-visual .floating-card { position: absolute; background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); padding: 15px 20px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 15px 30px rgba(0,0,0,0.06); z-index: 3; display: flex; align-items: center; gap: 12px; animation: cmFloat 6s ease-in-out infinite; }
        .cm-hero-visual .fc-1 { top: 16px; left: -20px; animation-delay: 0s; }
        .cm-hero-visual .fc-2 { bottom: 40px; right: -20px; animation-delay: 3s; }
        .floating-card .icon { font-size: 24px; }
        .floating-card h4 { margin: 0; font-size: 20px; font-weight: 800; color: #07111f; }
        .floating-card span { font-size: 13px; color: #4b5563; font-weight: 500; }
        @keyframes cmFloat { 0% { transform: translateY(0px); } 50% { transform: translateY(-15px); } 100% { transform: translateY(0px); } }
        .hero-decor-circle { position: absolute; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(22,199,132,0.05) 0%, rgba(255,255,255,0) 70%); top: -100px; right: -100px; z-index: 1; }

        /* STATS BAR */
        .cm-stats-bar { background: linear-gradient(135deg, #0d1b2f 0%, #0b9f68 50%, #16c784 100%); padding: 50px 0; margin-bottom: 60px; }
        .cm-stats-bar .stat-item { text-align: center; padding: 20px 15px; border-right: 1px solid rgba(255,255,255,.12); }
        .cm-stats-bar .stat-item:last-child { border-right: none; }
        .cm-stats-bar .stat-number { font-size: 44px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; }
        .cm-stats-bar .stat-number span { color: #d1fae5; }
        .cm-stats-bar .stat-label { font-size: 13px; color: rgba(255,255,255,.75); text-transform: uppercase; letter-spacing: .6px; }

        /* General modern hero tag utility */
        .cm-tag { display: inline-block; background: rgba(22,199,132,.1); color: var(--cm-primary-dark); font-size: 12px; font-weight: 800; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; border: 1px solid rgba(22,199,132,.2); }
        :root {
            --gb-primary: #16c784;
            --gb-primary-dark: #0b9f68;
            --gb-blue: #3b82f6;
            --gb-dark: #07111f;
            --gb-navy: #0d1b2f;
            --gb-text: #1f2937;
            --gb-muted: #6b7280;
            --gb-light: #f6f9fc;
            --gb-white: #ffffff;
            --gb-border: #e5e7eb;
            --gb-shadow: 0 18px 45px rgba(7, 17, 31, 0.12);
            --gb-radius: 22px;
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--gb-text);
            background: var(--gb-white);
            line-height: 1.65;
        }
        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; display: block; }
        .gb-page { overflow: hidden; }
        .gb-container { width: min(1180px, calc(100% - 36px)); margin: 0 auto; }
        .gb-section { padding: 86px 0; }
        .gb-section-soft { background: var(--gb-light); }
        .gb-center { text-align: center; }

        .gb-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            color: var(--gb-primary-dark);
            background: rgba(22,199,132,.12);
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 18px;
        }
        .gb-eyebrow.dark {
            color: #9ff6cd;
            background: rgba(22,199,132,.16);
        }

        .gb-title {
            margin: 0 0 18px;
            font-size: clamp(32px, 4vw, 54px);
            line-height: 1.08;
            letter-spacing: -1.5px;
            color: var(--gb-dark);
        }
        .gb-title-light { color: var(--gb-white); }
        .gb-subtitle {
            max-width: 780px;
            margin: 0 auto 42px;
            color: var(--gb-muted);
            font-size: 18px;
        }
        .gb-text-light { color: rgba(255,255,255,.76); }

        .gb-btn-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            align-items: center;
            margin-top: 28px;
        }
        .gb-btn-row.center { justify-content: center; }

        .gb-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 22px;
            border-radius: 999px;
            font-weight: 900;
            border: 1px solid transparent;
            transition: .25s ease;
            cursor: pointer;
        }
        .gb-btn-primary {
            background: var(--gb-primary);
            color: #03120c;
            box-shadow: 0 12px 24px rgba(22,199,132,.28);
        }
        .gb-btn-primary:hover {
            background: var(--gb-primary-dark);
            color: var(--gb-white);
            transform: translateY(-2px);
        }
        .gb-btn-outline {
            border-color: rgba(255,255,255,.22);
            color: var(--gb-white);
            background: rgba(255,255,255,.08);
        }
        .gb-btn-outline:hover {
            background: var(--gb-white);
            color: var(--gb-dark);
            transform: translateY(-2px);
        }
        .gb-btn-light {
            border-color: var(--gb-border);
            background: var(--gb-white);
            color: var(--gb-dark);
        }
        .gb-btn-light:hover {
            border-color: var(--gb-primary);
            color: var(--gb-primary-dark);
            transform: translateY(-2px);
        }

        .gb-hero {
            position: relative;
            padding: 112px 0 86px;
            background:
                radial-gradient(circle at 16% 18%, rgba(22,199,132,.22), transparent 31%),
                radial-gradient(circle at 84% 10%, rgba(59,130,246,.22), transparent 31%),
                linear-gradient(135deg, #07111f 0%, #0d1b2f 56%, #07111f 100%);
            color: var(--gb-white);
        }
        .gb-hero-grid {
            display: grid;
            grid-template-columns: 1.04fr .96fr;
            gap: 46px;
            align-items: center;
        }
        .gb-hero h1 {
            margin: 0 0 20px;
            font-size: clamp(38px, 5vw, 68px);
            line-height: 1.02;
            letter-spacing: -2px;
        }
        .gb-hero p {
            color: rgba(255,255,255,.78);
            font-size: 18px;
            max-width: 620px;
            margin: 0;
        }
        .gb-hero-points {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 28px;
        }
        .gb-hero-points span {
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255,255,255,.09);
            border: 1px solid rgba(255,255,255,.12);
            color: rgba(255,255,255,.86);
            font-size: 14px;
            font-weight: 800;
        }

        .gb-visual {
            position: relative;
            min-height: 480px;
        }
        .gb-dashboard {
            position: absolute;
            inset: 22px 0 auto auto;
            width: min(430px, 94%);
            min-height: 430px;
            border-radius: 30px;
            padding: 22px;
            background: linear-gradient(160deg, rgba(255,255,255,.96), rgba(246,249,252,.9));
            box-shadow: 0 30px 80px rgba(0,0,0,.32);
            color: var(--gb-dark);
            border: 1px solid rgba(255,255,255,.42);
        }
        .gb-dash-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px;
        }
        .gb-dash-title strong { display: block; font-size: 18px; }
        .gb-dash-title span { color: var(--gb-muted); font-size: 13px; }

        .gb-status {
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(22,199,132,.12);
            color: var(--gb-primary-dark);
            font-weight: 900;
            font-size: 12px;
        }
        .gb-bars {
            display: grid;
            gap: 12px;
            margin: 18px 0;
        }
        .gb-bar {
            padding: 14px;
            border: 1px solid var(--gb-border);
            border-radius: 18px;
            background: var(--gb-white);
        }
        .gb-bar-top {
            display: flex;
            justify-content: space-between;
            font-weight: 800;
            margin-bottom: 8px;
            font-size: 13px;
        }
        .gb-bar-line {
            height: 9px;
            border-radius: 999px;
            background: #e9eef5;
            overflow: hidden;
        }
        .gb-bar-line span {
            display: block;
            height: 100%;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--gb-primary), var(--gb-blue));
        }
        .gb-metric-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 18px;
        }
        .gb-metric {
            padding: 12px;
            border-radius: 18px;
            background: var(--gb-white);
            border: 1px solid var(--gb-border);
        }
        .gb-metric strong { display:block; font-size:20px; color:var(--gb-dark); }
        .gb-metric span { font-size:12px; color:var(--gb-muted); }

        .gb-float {
            position: absolute;
            border-radius: 18px;
            padding: 14px 16px;
            background: rgba(255,255,255,.96);
            color: var(--gb-dark);
            box-shadow: var(--gb-shadow);
            font-weight: 900;
        }
        .gb-float.one { left: 0; top: 96px; }
        .gb-float.two { right: 4px; bottom: 46px; }

        .gb-stats {
            margin-top: -34px;
            position: relative;
            z-index: 5;
        }
        .gb-stats-grid, .gb-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }
        .gb-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }
        .gb-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 26px;
        }

        .gb-card, .gb-stat-card {
            background: var(--gb-white);
            border: 1px solid var(--gb-border);
            box-shadow: 0 14px 34px rgba(7,17,31,.08);
            border-radius: var(--gb-radius);
            padding: 24px;
            transition: .25s ease;
        }
        .gb-card:hover, .gb-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--gb-shadow);
        }
        .gb-icon {
            width: 48px;
            height: 48px;
            border-radius: 16px;
            display: grid;
            place-items: center;
            background: rgba(22,199,132,.12);
            color: var(--gb-primary-dark);
            font-size: 24px;
            margin-bottom: 15px;
        }
        .gb-card h3, .gb-stat-card h3 {
            margin: 0 0 8px;
            color: var(--gb-dark);
            font-size: 20px;
        }
        .gb-card p, .gb-stat-card p {
            margin: 0;
            color: var(--gb-muted);
        }

        .gb-two-col {
            display: grid;
            grid-template-columns: .95fr 1.05fr;
            gap: 52px;
            align-items: center;
        }
        .gb-two-col.reverse {
            grid-template-columns: 1.05fr .95fr;
        }
        .gb-image-box {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: var(--gb-shadow);
            min-height: 390px;
            background: #dfe7ef;
        }
        .gb-image-box img {
            width: 100%;
            height: 100%;
            min-height: 390px;
            object-fit: cover;
        }
        .gb-highlight {
            margin-top: 24px;
            padding: 22px;
            border-radius: 22px;
            background: rgba(22,199,132,.09);
            border: 1px solid rgba(22,199,132,.22);
        }
        .gb-highlight strong { color: var(--gb-dark); }

        .gb-dark-section {
            background:
                radial-gradient(circle at 20% 0%, rgba(22,199,132,.16), transparent 28%),
                linear-gradient(135deg, #07111f, #0d1b2f);
            color: var(--gb-white);
        }
        .gb-dark-section .gb-card {
            background: rgba(255,255,255,.07);
            border-color: rgba(255,255,255,.12);
            box-shadow: none;
            backdrop-filter: blur(12px);
        }
        .gb-dark-section .gb-card h3 { color: var(--gb-white); }
        .gb-dark-section .gb-card p { color: rgba(255,255,255,.72); }

        .gb-service-tag {
            display: inline-block;
            margin-bottom: 14px;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(22,199,132,.1);
            color: var(--gb-primary-dark);
            font-weight: 900;
            font-size: 13px;
        }
        .gb-service-card ul, .gb-list {
            padding-left: 20px;
            margin: 18px 0 0;
            color: var(--gb-muted);
        }
        .gb-service-card li, .gb-list li { margin: 7px 0; }

        .gb-process {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        .gb-step {
            padding: 35px 30px;
            border-radius: 24px;
            border: 1px solid var(--gb-border);
            background: #ffffff;
            box-shadow: 0 15px 35px rgba(22, 199, 132, 0.04);
            position: relative;
            transition: all 0.3s ease;
        }
        .gb-step:hover {
            transform: translateY(-8px);
            border-color: var(--gb-primary);
            box-shadow: 0 20px 40px rgba(22, 199, 132, 0.12);
        }
        .gb-step-number {
            display: inline-grid;
            place-items: center;
            width: 50px;
            height: 50px;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--gb-primary) 0%, var(--gb-primary-dark) 100%);
            color: var(--gb-white);
            font-weight: 900;
            font-size: 18px;
            margin-bottom: 22px;
            box-shadow: 0 8px 16px rgba(22, 199, 132, 0.25);
            transition: all 0.3s ease;
        }
        .gb-step:hover .gb-step-number {
            transform: rotate(10deg);
            box-shadow: 0 12px 20px rgba(22, 199, 132, 0.4);
        }
        .gb-step h3 { margin: 0 0 12px; color: var(--gb-dark); font-size: 20px; font-weight: 800; }
        .gb-step p { margin: 0; color: var(--gb-muted); font-size: 14.5px; line-height: 1.6; }

        .gb-platform-card {
            border-radius: 30px;
            overflow: hidden;
            background: var(--gb-white);
            border: 1px solid var(--gb-border);
            box-shadow: 0 16px 38px rgba(7,17,31,.08);
        }
        .gb-platform-img {
            height: 250px;
            background-size: cover;
            background-position: center;
        }
        .gb-platform-content { padding: 28px; }

        .gb-industry-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        a.gb-industry {
            text-decoration: none;
            color: inherit;
        }

        .gb-industry {
            background: rgba(255, 255, 255, 0.04);
            border: 1.5px solid rgba(255, 255, 255, 0.08);
            border-radius: 18px;
            padding: 24px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
            text-align: left;
        }

        .gb-industry::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(22, 199, 132, 0.12), rgba(54, 120, 255, 0.04));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .gb-industry:hover {
            transform: translateY(-5px);
            border-color: rgba(22, 199, 132, 0.4);
            box-shadow: 0 12px 30px rgba(22, 199, 132, 0.15);
        }

        .gb-industry:hover::before {
            opacity: 1;
        }

        .gb-industry .ind-icon-wrap {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: rgba(22, 199, 132, 0.12);
            color: #16c784;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
            border: 1.5px solid rgba(22, 199, 132, 0.2);
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .gb-industry:hover .ind-icon-wrap {
            background: #16c784;
            color: #fff;
            transform: scale(1.05) rotate(5deg);
        }

        .gb-industry .ind-info {
            position: relative;
            z-index: 2;
        }

        .gb-industry .ind-info h4 {
            font-size: 16px;
            font-weight: 800;
            color: #ffffff;
            margin: 0 0 4px 0;
            letter-spacing: -0.3px;
        }

        .gb-industry .ind-info p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.55);
            margin: 0;
            line-height: 1.35;
        }

        .gb-case {
            border-radius: 30px;
            background: linear-gradient(135deg, rgba(22,199,132,.12), rgba(59,130,246,.1));
            border: 1px solid rgba(22,199,132,.22);
            padding: 34px;
        }
        .gb-case-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 26px;
        }
        .gb-case-item {
            padding: 20px;
            border-radius: 20px;
            background: rgba(255,255,255,.72);
            border: 1px solid rgba(255,255,255,.78);
        }
        .gb-case-item h4 { margin:0 0 6px; color:var(--gb-dark); }
        .gb-case-item p { margin:0; color:var(--gb-muted); }

        .gb-faq-wrap { max-width: 920px; margin: 0 auto; }
        .gb-faq-item {
            border: 1px solid var(--gb-border);
            border-radius: 18px;
            margin-bottom: 14px;
            overflow: hidden;
            background: var(--gb-white);
        }
        .gb-faq-question {
            width: 100%;
            border: 0;
            background: var(--gb-white);
            padding: 20px 22px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            font-weight: 900;
            color: var(--gb-dark);
            cursor: pointer;
            font-size: 16px;
        }
        .gb-faq-question span:last-child {
            font-size: 24px;
            color: var(--gb-primary-dark);
            transition: .25s ease;
        }
        .gb-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height .28s ease;
        }
        .gb-faq-answer p {
            margin: 0;
            padding: 0 22px 22px;
            color: var(--gb-muted);
        }
        .gb-faq-item.active .gb-faq-answer { max-height: 240px; }
        .gb-faq-item.active .gb-faq-question span:last-child { transform: rotate(45deg); }

        .gb-final-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, #0d1b2f 0%, #0b9f68 50%, #16c784 100%);
            color: #ffffff !important;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .gb-final-cta h2 {
            margin: 0 auto 18px;
            max-width: 820px;
            font-size: clamp(32px, 4vw, 52px);
            line-height: 1.1;
            color: #ffffff !important;
            font-weight: 900;
        }
        .gb-final-cta p {
            max-width: 780px;
            margin: 0 auto 40px;
            color: rgba(255,255,255,.9) !important;
            font-size: 18px;
            line-height: 1.7;
        }
        .gb-contact-line {
            margin-top: 22px;
            font-weight: 900;
            color: #9ff6cd;
        }

        @media (max-width: 980px) {
            .gb-hero-grid, .gb-two-col, .gb-two-col.reverse, .gb-case-grid {
                grid-template-columns: 1fr;
            }
            .gb-visual { min-height: 440px; }
            .gb-stats-grid, .gb-grid-4, .gb-grid-3, .gb-process, .gb-industry-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 640px) {
            .gb-section { padding: 64px 0; }
            .gb-hero { padding-top: 82px; }
            .gb-stats-grid, .gb-grid-4, .gb-grid-3, .gb-grid-2, .gb-process, .gb-industry-grid {
                grid-template-columns: 1fr;
            }
            .gb-dashboard {
                position: relative;
                inset: auto;
                width: 100%;
            }
            .gb-visual { min-height: auto; }
            .gb-float { display: none; }
            .gb-btn { width: 100%; }
            .gb-title { letter-spacing: -1px; }
            .gb-metric-row { grid-template-columns: 1fr; }
        }

        /* Pricing */
        .gb-pricing-section { padding: 90px 0; }
        .gb-pricing-note { max-width: 980px; margin: 0 auto 34px; padding: 18px 22px; border-radius: 24px; background: linear-gradient(135deg, rgba(22,199,132,.08), rgba(59,130,246,.07)); border: 1px solid var(--gb-border); display: flex; gap: 10px; align-items: flex-start; text-align: left; }
        .gb-pricing-note strong { color: var(--gb-dark); font-size: 18px; flex-shrink: 0; }
        .gb-pricing-note span { color: #555; font-size: 15px; line-height: 1.6; }
        .gb-package { position: relative; border-radius: 34px; background: #fff; border: 1px solid var(--gb-border); box-shadow: 0 18px 42px rgba(7,17,31,.07); overflow: hidden; transition: .25s; height: 100%; display: flex; flex-direction: column; }
        .gb-package:hover { transform: translateY(-6px); box-shadow: var(--gb-shadow); }
        .gb-package.gb-featured { border: 2px solid rgba(22,199,132,.35); transform: translateY(-10px); }
        .gb-package.gb-featured:before { content: "Most Popular"; position: absolute; right: 22px; top: 20px; padding: 7px 13px; border-radius: 999px; background: var(--gb-primary); color: #fff; font-size: 12px; font-weight: 900; z-index: 2; }
        .gb-package-head { padding: 30px; background: linear-gradient(135deg, rgba(22,199,132,.08), rgba(59,130,246,.06)); }
        .gb-package-head span { display: inline-flex; padding: 7px 12px; border-radius: 999px; background: #fff; color: var(--gb-primary-dark); font-size: 12px; font-weight: 900; margin-bottom: 14px; }
        .gb-package-head h3 { margin: 0 0 8px; color: var(--gb-dark); font-size: 25px; font-weight: 800; }
        .gb-package-head p { margin: 0; color: var(--gb-muted); font-size: 15px; }
        .gb-package-body { padding: 28px 30px 32px; display: flex; flex-direction: column; flex-grow: 1; }
        .gb-price { font-size: 34px; line-height: 1; font-weight: 900; color: var(--gb-dark); margin-bottom: 8px; }
        .gb-package-body small { color: #667085; font-weight: 600; }
        .gb-package ul { padding: 0; margin: 22px 0 0; list-style: none; color: #555; display: grid; gap: 10px; flex-grow: 1; }
        .gb-package li { display: flex; gap: 8px; align-items: flex-start; font-size: 14.5px; }
        .gb-package li:before { content: "✓"; color: var(--gb-primary); font-weight: 900; flex-shrink: 0; }
        .gb-ideal { margin: 20px 0; padding: 16px; border-radius: 20px; background: rgba(22,199,132,.06); border: 1px solid var(--gb-border); font-weight: 800; color: var(--gb-dark); font-size: 14px; }
        .gb-package .gb-btn-light { background: #fff; color: var(--gb-dark); border: 1px solid var(--gb-border); box-shadow: 0 12px 24px rgba(7,17,31,.06); width: 100%; text-align: center; padding: 15px 24px; border-radius: 999px; font-weight: 900; display: inline-block; text-decoration: none; }
        .gb-package .gb-btn-main { background: var(--gb-primary); color: #fff; width: 100%; text-align: center; padding: 15px 24px; border-radius: 999px; font-weight: 900; display: inline-block; text-decoration: none; box-shadow: 0 18px 34px rgba(22,199,132,.24); }
        .gb-pricing-guide { max-width: 980px; margin: 40px auto 0; text-align: left; }
        .gb-plan-guide-card { position: relative; overflow: hidden; border-radius: 34px; background: #fff; border: 1px solid var(--gb-border); box-shadow: 0 18px 45px rgba(7,17,31,.08); padding: 28px; }
        .gb-plan-guide-card:before { content: ""; position: absolute; inset: 0 0 auto; height: 5px; background: var(--gb-primary); }
        .gb-plan-guide-card h3 { margin: 0 0 8px; color: var(--gb-dark); font-size: 26px; font-weight: 800; }
        .gb-plan-guide-card > p { margin: 0 0 22px; color: #555; }
        .gb-plan-guide-list { display: grid; gap: 14px; }
        .gb-plan-guide-item { display: grid; grid-template-columns: 54px 1fr; gap: 14px; align-items: start; padding: 16px; border-radius: 22px; background: #f8fafc; border: 1px solid #e7ebf3; }
        .gb-plan-guide-num { width: 54px; height: 54px; border-radius: 18px; display: grid; place-items: center; background: rgba(22,199,132,.10); color: var(--gb-primary-dark); font-weight: 900; }
        .gb-plan-guide-item h4 { margin: 0 0 3px; color: var(--gb-dark); font-size: 18px; font-weight: 800; }
        .gb-plan-guide-item p { margin: 0; color: #555; font-size: 14px; line-height: 1.55; }
        .gb-plan-guide-item small { display: inline-flex; margin-top: 9px; padding: 7px 10px; border-radius: 999px; background: #fff; color: var(--gb-primary-dark); font-weight: 900; font-size: 12px; border: 1px solid var(--gb-border); }
        @media (max-width: 991px) { .gb-package.gb-featured { transform: none; } }
        @media (max-width: 767px) { .gb-pricing-note { display: block; } .gb-pricing-note strong { display: block; margin-bottom: 6px; } .gb-plan-guide-item { grid-template-columns: 1fr; } }
    </style>
</head>

<body>
<?php include '../header.php'; ?>
<div class="gb-page">

    <!-- BREADCRUMB & HERO -->
    <div class="cm-modern-hero mb-0">
        <div class="hero-decor-circle"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="cm-tag mb-3">Multi-Platform Campaign Management</span>
                        <h1>Campaign Management Service</h1>
                        <h3>Campaign Management That Turns Marketing Plans Into Real Business Results.</h3>
                        <p>GrowBoostly plans, manages, tracks, and optimizes digital campaigns for brands that want more visibility, better enquiries, stronger engagement, and measurable growth. Instead of running uncoordinated activities, we build cohesive multi-channel marketing campaigns across Facebook, Google, Instagram, and YouTube to maximize your business outcomes.</p>
                        <div class="cm-hero-buttons">
                            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20campaign%20management%20services%20for%20my%20business." class="cm-btn-primary">Start Campaign Management →</a>
                            <a href="#services" class="cm-btn-outline">View Our Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cm-hero-visual">
                        <div class="floating-card fc-1">
                            <div class="icon">🚀</div>
                            <div>
                                <h4>+420%</h4>
                                <span>Lead Generation</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/campaign-hero.png" alt="Campaign Management Growth Analysis" class="main-img">
                        <div class="floating-card fc-2">
                            <div class="icon">📈</div>
                            <div>
                                <h4>14x</h4>
                                <span>Campaign ROI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STATS BAR -->
    <div class="cm-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>3.8</span>M</div><div class="stat-label">Leads Generated</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>14</span>x</div><div class="stat-label">Average Campaign ROI</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>100</span>%</div><div class="stat-label">Fully Managed Strategy &amp; Setup</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>98</span>%</div><div class="stat-label">Execution Success Rate</div></div></div>
            </div>
        </div>
    </div>

    <!-- WHAT IS CAMPAIGN MANAGEMENT -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-two-col">
                <div class="gb-image-box">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1100&q=80" alt="Digital campaign management planning">
                </div>

                <div>
                    <div class="gb-eyebrow">Marketing Execution System</div>
                    <h2 class="gb-title">What Is Campaign Management?</h2>
                    <p>Campaign management is the complete process of planning, launching, monitoring and improving marketing campaigns across digital platforms.</p>
                    <p>It includes campaign strategy, audience targeting, creative planning, content coordination, ad setup, influencer coordination, lead tracking, reporting and optimization.</p>
                    <p>For Indian businesses, campaign management is important because customers interact through many channels — WhatsApp, Instagram, Facebook, YouTube, Google, websites and landing pages. A managed campaign keeps all these channels connected with one clear business goal.</p>

                    <div class="gb-highlight">
                        <strong>Best For:</strong> Lead generation campaigns, influencer campaigns, social media promotions, paid ads, product launches, local business marketing, app promotions and service campaigns.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY GROWBOOSTLY -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow dark">Why GrowBoostly</div>
                <h2 class="gb-title gb-title-light">Why Choose GrowBoostly for Campaign Management?</h2>
                <p class="gb-subtitle gb-text-light">Many businesses run campaigns without proper tracking, clear CTA or lead follow-up system. GrowBoostly manages campaigns with strategy, execution discipline and performance focus.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card">
                    <div class="gb-icon">🧩</div>
                    <h3>Complete Planning</h3>
                    <p>We define goal, audience, offer, platform, content and tracking before launch.</p>
                </div>

                <div class="gb-card">
                    <div class="gb-icon">⚙️</div>
                    <h3>Managed Execution</h3>
                    <p>We coordinate creatives, content, ads, influencer posts, landing pages and timelines.</p>
                </div>

                <div class="gb-card">
                    <div class="gb-icon">📞</div>
                    <h3>Lead Journey Focus</h3>
                    <p>We connect campaign traffic with WhatsApp, forms, calls, CRM or lead sheets.</p>
                </div>

                <div class="gb-card">
                    <div class="gb-icon">📈</div>
                    <h3>Optimization</h3>
                    <p>We review results and improve campaign direction for better performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="gb-section" id="services">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Complete Campaign Management</div>
                <h2 class="gb-title">Our Campaign Management Services</h2>
                <p class="gb-subtitle">GrowBoostly helps your campaign move from idea to execution, tracking and improvement with a proper digital growth system.</p>
            </div>

            <div class="gb-grid-3">
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">01</span>
                    <h3>Campaign Strategy & Planning</h3>
                    <p>We create a clear campaign roadmap based on your business goal, target audience, offer, platform and budget.</p>
                    <ul>
                        <li>Campaign goal planning</li>
                        <li>Audience and market research</li>
                        <li>Offer and CTA planning</li>
                        <li>Platform selection</li>
                        <li>Budget direction</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">02</span>
                    <h3>Creative & Content Coordination</h3>
                    <p>We guide campaign creatives, captions, ad copies, short scripts, landing content and promotional messages.</p>
                    <ul>
                        <li>Creative brief</li>
                        <li>Ad copy direction</li>
                        <li>Social media captions</li>
                        <li>Influencer brief</li>
                        <li>Landing page message</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">03</span>
                    <h3>Platform Campaign Setup</h3>
                    <p>We help manage campaign setup across the platforms needed for your business objective and customer journey.</p>
                    <ul>
                        <li>Facebook and Instagram campaigns</li>
                        <li>Google campaign coordination</li>
                        <li>YouTube promotion support</li>
                        <li>Influencer campaign setup</li>
                        <li>WhatsApp CTA setup</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">04</span>
                    <h3>Lead Generation Campaigns</h3>
                    <p>We structure campaigns to generate enquiries through WhatsApp, phone calls, lead forms and landing pages.</p>
                    <ul>
                        <li>Lead form campaign flow</li>
                        <li>WhatsApp enquiry setup</li>
                        <li>Landing page CTA</li>
                        <li>Lead sheet tracking</li>
                        <li>Follow-up workflow</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">05</span>
                    <h3>Influencer Campaign Management</h3>
                    <p>We manage influencer campaign planning, creator briefing, posting coordination, tracking links and campaign reporting.</p>
                    <ul>
                        <li>Creator communication</li>
                        <li>Campaign brief</li>
                        <li>Content approval</li>
                        <li>Posting schedule</li>
                        <li>Creator-wise tracking</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">06</span>
                    <h3>Reporting & Optimization</h3>
                    <p>We track campaign performance and share practical insights to improve future campaigns and marketing decisions.</p>
                    <ul>
                        <li>Reach and impressions</li>
                        <li>Clicks and enquiries</li>
                        <li>Cost per lead review</li>
                        <li>Campaign-wise report</li>
                        <li>Improvement suggestions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CAMPAIGN TYPES -->
    <section class="gb-section gb-section-soft">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Campaign Types</div>
                <h2 class="gb-title">Campaigns We Can Manage for Your Business</h2>
                <p class="gb-subtitle">Different goals need different campaign structures. We help you choose the right campaign type for your business stage.</p>
            </div>

            <div class="gb-grid-2">
                <div class="gb-platform-card">
                    <div class="gb-platform-img" style="background-image:url('https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1100&q=80');"></div>
                    <div class="gb-platform-content">
                        <h3>Lead Generation Campaigns</h3>
                        <p>For businesses that want enquiries, calls, appointments, WhatsApp leads or form submissions from targeted customers.</p>
                        <ul class="gb-list">
                            <li>Real estate enquiries</li>
                            <li>Coaching admissions</li>
                            <li>Clinic appointments</li>
                            <li>Service business leads</li>
                            <li>B2B enquiry campaigns</li>
                        </ul>
                    </div>
                </div>

                <div class="gb-platform-card">
                    <div class="gb-platform-img" style="background-image:url('https://images.unsplash.com/photo-1557838923-2985c318be48?auto=format&fit=crop&w=1100&q=80');"></div>
                    <div class="gb-platform-content">
                        <h3>Brand Awareness Campaigns</h3>
                        <p>For brands that want visibility, recall, social proof and stronger market presence across digital platforms.</p>
                        <ul class="gb-list">
                            <li>New brand launch</li>
                            <li>Product promotion</li>
                            <li>Influencer visibility</li>
                            <li>Local area promotion</li>
                            <li>Festival and offer campaigns</li>
                        </ul>
                    </div>
                </div>

                <div class="gb-platform-card">
                    <div class="gb-platform-img" style="background-image:url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1100&q=80');"></div>
                    <div class="gb-platform-content">
                        <h3>Performance Marketing Campaigns</h3>
                        <p>For businesses that want data-driven campaigns with proper conversion tracking and measurable campaign outcomes.</p>
                        <ul class="gb-list">
                            <li>Ad funnel planning</li>
                            <li>Landing page traffic</li>
                            <li>Conversion tracking</li>
                            <li>Retargeting support</li>
                            <li>Campaign optimization</li>
                        </ul>
                    </div>
                </div>

                <div class="gb-platform-card">
                    <div class="gb-platform-img" style="background-image:url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?auto=format&fit=crop&w=1100&q=80');"></div>
                    <div class="gb-platform-content">
                        <h3>Product Launch Campaigns</h3>
                        <p>For launching a product, app, service, offer, event or new business with a proper promotional plan.</p>
                        <ul class="gb-list">
                            <li>Launch roadmap</li>
                            <li>Creative planning</li>
                            <li>Influencer and social push</li>
                            <li>Landing page support</li>
                            <li>Launch performance report</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Execution Process</div>
                <h2 class="gb-title">Our Campaign Management Process</h2>
                <p class="gb-subtitle">We follow a practical step-by-step process so your campaign remains organized, trackable and improvement-focused.</p>
            </div>

            <div class="gb-process">
                <div class="gb-step">
                    <div class="gb-step-number">1</div>
                    <h3>Business Discovery</h3>
                    <p>We understand your business, audience, location, offer, competition and campaign objective.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">2</div>
                    <h3>Campaign Roadmap</h3>
                    <p>We plan platform, content, creative style, CTA, landing flow and tracking method.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">3</div>
                    <h3>Asset Preparation</h3>
                    <p>We prepare campaign brief, creatives, copy, landing page message and lead capture setup.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">4</div>
                    <h3>Launch & Monitoring</h3>
                    <p>We launch or coordinate the campaign and monitor early response, reach and lead quality.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">5</div>
                    <h3>Lead Tracking</h3>
                    <p>We track enquiries through WhatsApp, forms, calls, landing pages or CRM sheets.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">6</div>
                    <h3>Report & Improve</h3>
                    <p>We review campaign data and suggest practical improvements for better next campaigns.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="gb-pricing-section gb-section-soft" id="cm-pricing">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Campaign Management Pricing</div>
                <h2 class="gb-title">Digital campaign management packages</h2>
                <p class="gb-subtitle">Choose a package based on platforms managed, creative coordination, tracking and reporting depth.</p>
            </div>
            <div class="gb-pricing-note">
                <strong>Note:</strong>
                <span>Final quote is confirmed after reviewing channels, campaign frequency, assets required and lead tracking setup. Ad spend is separate.</span>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Quick Start</span>
                            <h3>Campaign Starter</h3>
                            <p>Best for businesses running focused campaigns.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹14,999+</div>
                            <small>per month</small>
                            <ul>
                                <li>1–2 platform campaigns</li>
                                <li>Campaign calendar</li>
                                <li>Basic creative coordination</li>
                                <li>Lead tracking setup</li>
                                <li>Monthly report</li>
                            </ul>
                            <div class="gb-ideal">Best for businesses running focused campaigns.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Campaign%20Management%20Starter%20(%E2%82%B914%2C999%2B%2Fmonth)">Ask for Campaign Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package gb-featured">
                        <div class="gb-package-head">
                            <span>Most Popular</span>
                            <h3>Campaign Growth</h3>
                            <p>Best for brands running ongoing lead campaigns.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹29,999+</div>
                            <small>per month</small>
                            <ul>
                                <li>Multi-platform management</li>
                                <li>Creative + copy coordination</li>
                                <li>Landing page alignment</li>
                                <li>Weekly optimisation</li>
                                <li>CRM/reporting integration</li>
                            </ul>
                            <div class="gb-ideal">Best for brands running ongoing lead campaigns.</div>
                            <a class="gb-btn-main" href="https://wa.me/919919020887?text=I%20want%20Campaign%20Management%20Growth%20(%E2%82%B929%2C999%2B%2Fmonth)">Get Campaign Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Full Scale</span>
                            <h3>Campaign Advanced</h3>
                            <p>Best when campaigns drive core revenue.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹54,999+</div>
                            <small>per month</small>
                            <ul>
                                <li>Full cross-channel orchestration</li>
                                <li>Influencer/paid coordination</li>
                                <li>Advanced tracking dashboard</li>
                                <li>Bi-weekly strategy calls</li>
                                <li>Dedicated campaign lead</li>
                            </ul>
                            <div class="gb-ideal">Best when campaigns drive core revenue.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Campaign%20Management%20Advanced%20(%E2%82%B954%2C999%2B%2Fmonth)">Ask for Campaign Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gb-pricing-guide">
                <div class="gb-plan-guide-card">
                    <h3>Which plan should you choose?</h3>
                    <p>A quick guide to help you pick the right package without over- or under-investing.</p>
                    <div class="gb-plan-guide-list">
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">01</div>
                            <div>
                                <h4>Running one main campaign?</h4>
                                <p>Starter keeps execution organised and tracked.</p>
                                <small>Best for: local launches</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">02</div>
                            <div>
                                <h4>Multiple channels active?</h4>
                                <p>Growth coordinates assets, landing pages and reporting.</p>
                                <small>Best for: growing brands</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">03</div>
                            <div>
                                <h4>Campaigns as growth engine?</h4>
                                <p>Advanced adds orchestration and dedicated support.</p>
                                <small>Best for: agencies, D2C, B2B</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow dark">Industries We Serve</div>
                <h2 class="gb-title gb-title-light">Industries We Serve with Campaign Management</h2>
                <p class="gb-subtitle gb-text-light">We structure Google, Meta, and LinkedIn campaigns per vertical — budgets, audiences, and conversion goals tuned for clinic bookings, D2C ROAS, SaaS demos, and local lead gen.</p>
            </div>

            <div class="gb-industry-grid">
                <?php
                $industries = [
                    ['🏥', 'Healthcare &amp; Clinics', 'Patient bookings &amp; local search', '../industries/healthcare-clinics'],
                    ['🏠', 'Real Estate &amp; Property', 'Lead capture &amp; tour campaigns', '../industries/real-estate'],
                    ['🎓', 'Education &amp; Coaching', 'Admissions &amp; demo signups', '../industries/education-coaching'],
                    ['🛒', 'eCommerce &amp; D2C Brands', 'ROAS &amp; catalog ads', '../industries/ecommerce-d2c'],
                    ['🏪', 'Local Businesses', 'Calls &amp; map-pack leads', '../industries/local-businesses'],
                    ['💻', 'SaaS &amp; IT Companies', 'Demo &amp; trial acquisition', '../industries/saas-it-technology'],
                    ['📞', 'BPO &amp; Service Companies', 'LinkedIn &amp; SQL generation', '../industries/bpo-service-companies'],
                    ['🏦', 'Finance &amp; Insurance', 'Consultation &amp; quote leads', '../industries/finance-insurance'],
                ];
                foreach ($industries as $i) {
                    $href = htmlspecialchars($i[3], ENT_QUOTES, 'UTF-8');
                    echo '<a href="' . $href . '" class="gb-industry">';
                    echo '<div class="ind-icon-wrap">' . $i[0] . '</div>';
                    echo '<div class="ind-info"><h4>' . $i[1] . '</h4><p>' . $i[2] . '</p></div>';
                    echo '</a>';
                }
                ?>
            </div>

            <div class="gb-btn-row center" style="margin-top:36px;">
                <a href="../contact.php?ref=cm-industry-strategy" class="gb-btn gb-btn-primary">Get Industry Strategy →</a>
            </div>
        </div>
    </section>

    <!-- EXAMPLE CAMPAIGN -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-case">
                <div class="gb-center">
                    <div class="gb-eyebrow">Practical Campaign Example</div>
                    <h2 class="gb-title">Example Campaign Management Plan</h2>
                    <p class="gb-subtitle">Here is how GrowBoostly can manage a campaign for a local service business.</p>
                </div>

                <div class="gb-case-grid">
                    <div class="gb-case-item">
                        <h4>Business Type</h4>
                        <p>Local clinic or coaching institute looking for enquiry growth.</p>
                    </div>

                    <div class="gb-case-item">
                        <h4>Campaign Goal</h4>
                        <p>Generate qualified WhatsApp enquiries and appointment requests.</p>
                    </div>

                    <div class="gb-case-item">
                        <h4>Campaign Setup</h4>
                        <p>Landing page, WhatsApp CTA, Instagram/Facebook promotion, content creatives and lead sheet tracking.</p>
                    </div>

                    <div class="gb-case-item">
                        <h4>Performance Review</h4>
                        <p>Track reach, clicks, enquiries, lead quality, follow-up status and campaign improvement points.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT WORKS -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-two-col reverse">
                <div>
                    <div class="gb-eyebrow dark">Growth-Focused Management</div>
                    <h2 class="gb-title gb-title-light">Why Managed Campaigns Perform Better</h2>
                    <p class="gb-text-light">Campaigns fail when strategy, creatives, targeting, landing page and follow-up are not connected. GrowBoostly connects these moving parts into one clear campaign system.</p>
                    <p class="gb-text-light">This helps your business avoid wasted spend, weak creatives, poor tracking and missed leads. A managed campaign gives you clarity, control and better improvement decisions.</p>
                </div>

                <div class="gb-grid-2">
                    <div class="gb-card"><h3>Clear Goal</h3><p>Every campaign starts with a defined business objective.</p></div>
                    <div class="gb-card"><h3>Better Tracking</h3><p>Lead source and campaign response become easier to measure.</p></div>
                    <div class="gb-card"><h3>Stronger Follow-Up</h3><p>Campaign leads can be managed through WhatsApp, forms or sheets.</p></div>
                    <div class="gb-card"><h3>Improved ROI</h3><p>Reports help you invest budget in better-performing channels.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">FAQ</div>
                <h2 class="gb-title">Frequently Asked Questions</h2>
                <p class="gb-subtitle">Common questions businesses ask before starting campaign management with GrowBoostly.</p>
            </div>

            <div class="gb-faq-wrap">
                <div class="gb-faq-item active">
                    <button class="gb-faq-question" type="button"><span>What is included in campaign management?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>It includes campaign planning, creative direction, content coordination, platform setup support, lead tracking, reporting and optimization guidance.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Can you manage lead generation campaigns?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. We can manage campaigns focused on WhatsApp enquiries, phone calls, form submissions, landing page leads and appointment requests.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Do you manage influencer campaigns also?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. We can manage influencer campaign planning, creator communication, campaign brief, posting schedule and performance tracking.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Which platforms do you support?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>We support campaign coordination for Instagram, Facebook, YouTube, Google, WhatsApp, landing pages, websites and lead capture systems.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Do you provide campaign reports?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. We provide campaign reports covering reach, clicks, enquiries, lead quality, platform response and improvement suggestions.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Is campaign management useful for small businesses?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. Small businesses often benefit because proper campaign management reduces wasted spend and improves lead follow-up.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="gb-final-cta">
        <div class="gb-container">
            <h2>Ready to Run a Campaign That Is Planned, Tracked and Managed Properly?</h2>
            <p>GrowBoostly helps you manage campaigns from strategy to execution, reporting and optimization — so your business can generate better visibility, leads and growth.</p>

            <div class="gb-btn-row center">
                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20campaign%20management%20services%20for%20my%20business." class="gb-btn gb-btn-primary">Start Campaign Management</a>
                <a href="tel:+919919020887" class="gb-btn gb-btn-outline">WhatsApp / Call Now</a>
            </div>

            <div class="gb-contact-line">Call / WhatsApp: +91-9919020887 | Brand: GrowBoostly</div>
        </div>
    </section>

</div>

<?php include '../footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const faqItems = document.querySelectorAll('.gb-faq-item');

        faqItems.forEach(function (item) {
            const button = item.querySelector('.gb-faq-question');

            button.addEventListener('click', function () {
                faqItems.forEach(function (otherItem) {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });

                item.classList.toggle('active');
            });
        });

        const internalLinks = document.querySelectorAll('a[href^="#"]');

        internalLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                const target = document.querySelector(link.getAttribute('href'));

                if (target) {
                    event.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>

</body>
</html>
