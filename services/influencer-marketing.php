<?php
/**
 * GrowBoostly - Influencer Marketing Service Page
 * Ready to upload PHP page
 * Suggested file path: /services/influencer-marketing.php
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
    <title>Influencer Marketing Agency in India | Instagram & YouTube Campaigns – GrowBoostly</title>
    <meta name="description" content="GrowBoostly helps brands grow with influencer marketing, Instagram influencer campaigns, YouTube promotions, creator collaborations, campaign management and performance tracking.">
    <meta name="keywords" content="Influencer Marketing Agency India, Instagram Influencer Marketing, YouTube Influencer Marketing, Creator Collaborations, Influencer Campaign Management, GrowBoostly">
    <link rel="canonical" href="https://growboostly.com/services/influencer-marketing.php">

    <meta property="og:title" content="Influencer Marketing Agency in India | GrowBoostly">
    <meta property="og:description" content="Run Instagram, YouTube and creator campaigns with strategy, management and performance tracking.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://growboostly.com/services/influencer-marketing.php">
    <meta property="og:image" content="https://growboostly.com/assets/img/influencer-marketing-og.jpg">
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
        /* NEW MODERN HERO - Influencer Marketing Page */
        :root {
            --im-primary: #16c784;
            --im-primary-dark: #0b9f68;
            --im-light: #f6f9fc;
            --im-border: #e2e8f0;
            --im-navy: #0d1b2f;
            --im-cream: #f0fdf4;
            --im-text: #1f2937;
        }

        .im-modern-hero { position: relative; padding: 140px 0 100px; background: radial-gradient(120% 120% at 80% 0%, #f0fdf4 0%, #ffffff 60%); overflow: hidden; }
        .im-modern-hero .hero-content { position: relative; z-index: 2; padding-top: 0; }
        .im-modern-hero h1 { font-size: clamp(40px, 5vw, 64px); font-weight: 900; color: #07111f; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1.5px; }
        .im-modern-hero h3 { font-size: 22px; font-weight: 600; color: var(--im-primary-dark); margin-bottom: 24px; line-height: 1.4; }
        .im-modern-hero p { font-size: 18px; color: #4b5563; line-height: 1.7; margin-bottom: 35px; max-width: 90%; }
        .im-hero-buttons { display: flex; gap: 15px; align-items: center; flex-wrap: wrap; }
        .im-btn-primary { background: var(--im-primary); color: #fff; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 10px 20px rgba(22,199,132,0.2); }
        .im-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(22,199,132,0.3); color: #fff; background: var(--im-primary-dark); }
        .im-btn-outline { background: #fff; color: #07111f; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; border: 1.5px solid var(--im-border); display: inline-flex; align-items: center; }
        .im-btn-outline:hover { border-color: var(--im-primary); color: var(--im-primary); background: var(--im-cream); }
        .im-hero-visual { position: relative; z-index: 2; text-align: right; }
        .im-hero-visual img.main-img { max-width: 100%; border-radius: 24px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); position: relative; z-index: 2; border: 4px solid #fff; }
        .im-hero-visual .floating-card { position: absolute; background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); padding: 15px 20px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 15px 30px rgba(0,0,0,0.06); z-index: 3; display: flex; align-items: center; gap: 12px; animation: imFloat 6s ease-in-out infinite; }
        .im-hero-visual .fc-1 { top: -20px; left: -30px; animation-delay: 0s; }
        .im-hero-visual .fc-2 { bottom: 40px; right: -20px; animation-delay: 3s; }
        .floating-card .icon { font-size: 24px; }
        .floating-card h4 { margin: 0; font-size: 20px; font-weight: 800; color: #07111f; }
        .floating-card span { font-size: 13px; color: #4b5563; font-weight: 500; }
        @keyframes imFloat { 0% { transform: translateY(0px); } 50% { transform: translateY(-15px); } 100% { transform: translateY(0px); } }
        .hero-decor-circle { position: absolute; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(22,199,132,0.05) 0%, rgba(255,255,255,0) 70%); top: -100px; right: -100px; z-index: 1; }

        /* STATS BAR */
        .im-stats-bar { background: linear-gradient(135deg, #0d1b2f 0%, #0b9f68 50%, #16c784 100%); padding: 50px 0; margin-bottom: 60px; }
        .im-stats-bar .stat-item { text-align: center; padding: 20px 15px; border-right: 1px solid rgba(255,255,255,.12); }
        .im-stats-bar .stat-item:last-child { border-right: none; }
        .im-stats-bar .stat-number { font-size: 44px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; }
        .im-stats-bar .stat-number span { color: #d1fae5; }
        .im-stats-bar .stat-label { font-size: 13px; color: rgba(255,255,255,.75); text-transform: uppercase; letter-spacing: .6px; }

        /* General modern hero tag utility */
        .im-tag { display: inline-block; background: rgba(22,199,132,.1); color: var(--im-primary-dark); font-size: 12px; font-weight: 800; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; border: 1px solid rgba(22,199,132,.2); }

        :root {
            --gb-primary: #16c784;
            --gb-primary-dark: #0b9f68;
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

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--gb-text);
            background: var(--gb-white);
            line-height: 1.65;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .gb-page {
            overflow: hidden;
        }

        .gb-container {
            width: min(1180px, calc(100% - 36px));
            margin: 0 auto;
        }

        .gb-section {
            padding: 86px 0;
        }

        .gb-section-small {
            padding: 55px 0;
        }

        .gb-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            color: var(--gb-primary-dark);
            background: rgba(22, 199, 132, 0.12);
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .gb-eyebrow.dark {
            background: rgba(22, 199, 132, 0.16);
            color: #9ff6cd;
        }

        .gb-title {
            margin: 0 0 18px;
            font-size: clamp(32px, 4vw, 54px);
            line-height: 1.08;
            letter-spacing: -1.5px;
            color: var(--gb-dark);
        }

        .gb-title-light {
            color: var(--gb-white);
        }

        .gb-subtitle {
            max-width: 760px;
            margin: 0 auto 42px;
            color: var(--gb-muted);
            font-size: 18px;
        }

        .gb-text-light {
            color: rgba(255,255,255,0.76);
        }

        .gb-center {
            text-align: center;
        }

        .gb-btn-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            align-items: center;
            margin-top: 28px;
        }

        .gb-btn-row.center {
            justify-content: center;
        }

        .gb-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 22px;
            border-radius: 999px;
            font-weight: 800;
            border: 1px solid transparent;
            transition: .25s ease;
            cursor: pointer;
        }

        .gb-btn-primary {
            background: var(--gb-primary);
            color: #03120c;
            box-shadow: 0 12px 24px rgba(22, 199, 132, .28);
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
            padding: 110px 0 82px;
            background:
                radial-gradient(circle at 15% 20%, rgba(22,199,132,.22), transparent 30%),
                radial-gradient(circle at 85% 12%, rgba(54,120,255,.22), transparent 32%),
                linear-gradient(135deg, #07111f 0%, #0d1b2f 52%, #07111f 100%);
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
            font-weight: 700;
        }

        .gb-hero-visual {
            position: relative;
            min-height: 480px;
        }

        .gb-phone-card {
            position: absolute;
            inset: 20px 22px auto auto;
            width: min(370px, 86%);
            min-height: 450px;
            border-radius: 34px;
            padding: 22px;
            background: linear-gradient(160deg, rgba(255,255,255,.95), rgba(246,249,252,.86));
            box-shadow: 0 30px 80px rgba(0,0,0,.32);
            color: var(--gb-dark);
            border: 1px solid rgba(255,255,255,.42);
            transform: rotate(3deg);
        }

        .gb-phone-top {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
        }

        .gb-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(135deg, #16c784, #5aa7ff);
        }

        .gb-line {
            height: 10px;
            background: #e9eef5;
            border-radius: 999px;
        }

        .gb-reel {
            height: 235px;
            border-radius: 24px;
            background:
                linear-gradient(180deg, rgba(0,0,0,.1), rgba(0,0,0,.7)),
                url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=80');
            background-size: cover;
            background-position: center;
            margin-bottom: 18px;
            position: relative;
            overflow: hidden;
        }

        .gb-reel::after {
            content: "▶";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 58px;
            height: 58px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: rgba(255,255,255,.88);
            color: var(--gb-primary-dark);
            font-weight: 900;
            font-size: 24px;
        }

        .gb-metric-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .gb-metric {
            padding: 12px;
            border-radius: 18px;
            background: var(--gb-white);
            border: 1px solid var(--gb-border);
        }

        .gb-metric strong {
            display: block;
            font-size: 20px;
            color: var(--gb-dark);
        }

        .gb-metric span {
            font-size: 12px;
            color: var(--gb-muted);
        }

        .gb-float {
            position: absolute;
            border-radius: 18px;
            padding: 14px 16px;
            background: rgba(255,255,255,.95);
            color: var(--gb-dark);
            box-shadow: var(--gb-shadow);
            font-weight: 800;
        }

        .gb-float.one {
            left: 0;
            top: 90px;
        }

        .gb-float.two {
            right: 0;
            bottom: 42px;
        }

        .gb-stats {
            margin-top: -34px;
            position: relative;
            z-index: 5;
        }

        .gb-stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .gb-stat-card,
        .gb-card {
            background: var(--gb-white);
            border: 1px solid var(--gb-border);
            box-shadow: 0 14px 34px rgba(7,17,31,.08);
            border-radius: var(--gb-radius);
            padding: 24px;
            transition: .25s ease;
        }

        .gb-stat-card:hover,
        .gb-card:hover {
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

        .gb-stat-card h3,
        .gb-card h3 {
            margin: 0 0 8px;
            color: var(--gb-dark);
            font-size: 20px;
        }

        .gb-stat-card p,
        .gb-card p {
            margin: 0;
            color: var(--gb-muted);
        }

        .gb-two-col {
            display: grid;
            grid-template-columns: .95fr 1.05fr;
            gap: 52px;
            align-items: center;
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

        .gb-highlight strong {
            color: var(--gb-dark);
        }

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

        .gb-dark-section .gb-card h3 {
            color: var(--gb-white);
        }

        .gb-dark-section .gb-card p {
            color: rgba(255,255,255,.72);
        }

        .gb-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .gb-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .gb-service-card {
            min-height: 100%;
        }

        .gb-service-card ul,
        .gb-platform-card ul,
        .gb-faq-answer ul {
            padding-left: 20px;
            margin: 18px 0 0;
            color: var(--gb-muted);
        }

        .gb-service-card li,
        .gb-platform-card li {
            margin: 7px 0;
        }

        .gb-service-tag {
            display: inline-block;
            margin-bottom: 14px;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(22,199,132,.1);
            color: var(--gb-primary-dark);
            font-weight: 800;
            font-size: 13px;
        }

        .gb-platform-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 26px;
        }

        .gb-platform-card {
            border-radius: 30px;
            overflow: hidden;
            background: var(--gb-white);
            border: 1px solid var(--gb-border);
            box-shadow: 0 16px 38px rgba(7,17,31,.08);
        }

        .gb-platform-img {
            height: 260px;
            background-size: cover;
            background-position: center;
        }

        .gb-platform-content {
            padding: 28px;
        }

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
            background: linear-gradient(135deg, rgba(22,199,132,.12), rgba(64,124,255,.1));
            border: 1px solid rgba(22,199,132,.22);
            padding: 34px;
        }

        .gb-case-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 26px;
        }

        .gb-case-item {
            padding: 20px;
            border-radius: 20px;
            background: rgba(255,255,255,.7);
            border: 1px solid rgba(255,255,255,.75);
        }

        .gb-case-item h4 {
            margin: 0 0 6px;
            color: var(--gb-dark);
        }

        .gb-case-item p {
            margin: 0;
            color: var(--gb-muted);
        }

        .gb-faq-wrap {
            max-width: 920px;
            margin: 0 auto;
        }

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

        .gb-faq-item.active .gb-faq-answer {
            max-height: 220px;
        }

        .gb-faq-item.active .gb-faq-question span:last-child {
            transform: rotate(45deg);
        }

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
            .gb-hero-grid,
            .gb-two-col,
            .gb-case-grid {
                grid-template-columns: 1fr;
            }

            .gb-hero-visual {
                min-height: 440px;
            }

            .gb-stats-grid,
            .gb-grid-4,
            .gb-grid-3,
            .gb-process,
            .gb-industry-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gb-platform-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .gb-section {
                padding: 64px 0;
            }

            .gb-hero {
                padding-top: 82px;
            }

            .gb-stats-grid,
            .gb-grid-4,
            .gb-grid-3,
            .gb-process,
            .gb-industry-grid {
                grid-template-columns: 1fr;
            }

            .gb-phone-card {
                position: relative;
                inset: auto;
                width: 100%;
                transform: none;
            }

            .gb-hero-visual {
                min-height: auto;
            }

            .gb-float {
                display: none;
            }

            .gb-btn {
                width: 100%;
            }

            .gb-btn-row {
                align-items: stretch;
            }

            .gb-title {
                letter-spacing: -1px;
            }
        }

        /* Pricing */
        .gb-pricing-section { padding: 90px 0; }
        .gb-pricing-note { max-width: 980px; margin: 0 auto 34px; padding: 18px 22px; border-radius: 24px; background: var(--gb-light); border: 1px solid var(--gb-border); display: flex; gap: 10px; align-items: flex-start; text-align: left; }
        .gb-pricing-note strong { color: var(--gb-dark); font-size: 18px; flex-shrink: 0; }
        .gb-pricing-note span { color: #555; font-size: 15px; line-height: 1.6; }
        .gb-package { position: relative; border-radius: 34px; background: #fff; border: 1px solid var(--gb-border); box-shadow: 0 18px 42px rgba(7,17,31,.07); overflow: hidden; transition: .25s; height: 100%; display: flex; flex-direction: column; }
        .gb-package:hover { transform: translateY(-6px); box-shadow: var(--gb-shadow); }
        .gb-package.gb-featured { border: 2px solid var(--gb-primary); transform: translateY(-10px); }
        .gb-package.gb-featured:before { content: "Most Popular"; position: absolute; right: 22px; top: 20px; padding: 7px 13px; border-radius: 999px; background: var(--gb-primary); color: #fff; font-size: 12px; font-weight: 900; z-index: 2; }
        .gb-package-head { padding: 30px; background: var(--gb-light); }
        .gb-package-head span { display: inline-flex; padding: 7px 12px; border-radius: 999px; background: #fff; color: var(--gb-primary-dark); font-size: 12px; font-weight: 900; margin-bottom: 14px; }
        .gb-package-head h3 { margin: 0 0 8px; color: var(--gb-dark); font-size: 25px; font-weight: 800; }
        .gb-package-head p { margin: 0; color: var(--gb-muted); font-size: 15px; }
        .gb-package-body { padding: 28px 30px 32px; display: flex; flex-direction: column; flex-grow: 1; }
        .gb-price { font-size: 34px; line-height: 1; font-weight: 900; color: var(--gb-dark); margin-bottom: 8px; }
        .gb-package-body small { color: #667085; font-weight: 600; }
        .gb-package ul { padding: 0; margin: 22px 0 0; list-style: none; color: #555; display: grid; gap: 10px; flex-grow: 1; }
        .gb-package li { display: flex; gap: 8px; align-items: flex-start; font-size: 14.5px; }
        .gb-package li:before { content: "✓"; color: var(--gb-primary); font-weight: 900; flex-shrink: 0; }
        .gb-ideal { margin: 20px 0; padding: 16px; border-radius: 20px; background: var(--gb-light); border: 1px solid var(--gb-border); font-weight: 800; color: var(--gb-dark); font-size: 14px; }
        .gb-package .gb-btn-light { background: #fff; color: var(--gb-dark); border: 1px solid var(--gb-border); box-shadow: 0 12px 24px rgba(7,17,31,.06); width: 100%; text-align: center; padding: 15px 24px; border-radius: 999px; font-weight: 900; display: inline-block; text-decoration: none; }
        .gb-package .gb-btn-main { background: var(--gb-primary); color: #fff; width: 100%; text-align: center; padding: 15px 24px; border-radius: 999px; font-weight: 900; display: inline-block; text-decoration: none; box-shadow: var(--gb-shadow); }
        .gb-pricing-guide { max-width: 980px; margin: 40px auto 0; text-align: left; }
        .gb-plan-guide-card { position: relative; overflow: hidden; border-radius: 34px; background: #fff; border: 1px solid var(--gb-border); box-shadow: 0 18px 45px rgba(7,17,31,.08); padding: 28px; }
        .gb-plan-guide-card:before { content: ""; position: absolute; inset: 0 0 auto; height: 5px; background: var(--gb-primary); }
        .gb-plan-guide-card h3 { margin: 0 0 8px; color: var(--gb-dark); font-size: 26px; font-weight: 800; }
        .gb-plan-guide-card > p { margin: 0 0 22px; color: #555; }
        .gb-plan-guide-list { display: grid; gap: 14px; }
        .gb-plan-guide-item { display: grid; grid-template-columns: 54px 1fr; gap: 14px; align-items: start; padding: 16px; border-radius: 22px; background: #f8fafc; border: 1px solid #e7ebf3; }
        .gb-plan-guide-num { width: 54px; height: 54px; border-radius: 18px; display: grid; place-items: center; background: var(--gb-light); color: var(--gb-primary-dark); font-weight: 900; }
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
    <div class="im-modern-hero mb-0">
        <div class="hero-decor-circle"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="im-tag mb-3">Verified Creator Campaigns</span>
                        <h1>Influencer Marketing Service</h1>
                        <h3>Influencer Marketing That Builds Trust, Reach &amp; Real Business Results.</h3>
                        <p>GrowBoostly helps brands connect with the right creators, manage influencer campaigns, and track real performance across Instagram, YouTube, and other creator platforms. Instead of wasting budget on raw follower counts, we focus on audience quality, engagement metrics, and localized conversion alignment to deliver up to 18x ROI for your campaigns.</p>
                        <div class="im-hero-buttons">
                            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20start%20an%20influencer%20marketing%20campaign." class="im-btn-primary">Start Influencer Campaign →</a>
                            <a href="#services" class="im-btn-outline">View Our Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="im-hero-visual">
                        <div class="floating-card fc-1">
                            <div class="icon">🚀</div>
                            <div>
                                <h4>+340%</h4>
                                <span>Organic Reach</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/influencer-hero.png" alt="Influencer Marketing Growth Analysis" class="main-img">
                        <div class="floating-card fc-2">
                            <div class="icon">📈</div>
                            <div>
                                <h4>18x</h4>
                                <span>Average ROI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STATS BAR -->
    <div class="im-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>2.7</span>B</div><div class="stat-label">Active Users Reached</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>18</span>x</div><div class="stat-label">ROI vs Traditional Ads</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>100</span>%</div><div class="stat-label">Verified Nano &amp; Micro Network</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-item"><div class="stat-number"><span>95</span>%</div><div class="stat-label">Positive Campaign Outcomes</div></div></div>
            </div>
        </div>
    </div>

    <!-- WHAT IS INFLUENCER MARKETING -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-two-col">
                <div class="gb-image-box">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1100&q=80" alt="Influencer marketing campaign planning">
                </div>

                <div>
                    <div class="gb-eyebrow">Creator Economy Growth</div>
                    <h2 class="gb-title">What Is Influencer Marketing?</h2>
                    <p>Influencer marketing is a modern growth strategy where brands collaborate with trusted creators to promote products, services, offers or brand stories to a highly engaged audience.</p>
                    <p>Instead of only depending on paid ads, influencer marketing helps your brand build trust through people your customers already follow, watch and believe.</p>
                    <p>For Indian businesses, influencer marketing works strongly because customers often trust reviews, product demos, reels, YouTube videos and real experiences before making a buying decision.</p>

                    <div class="gb-highlight">
                        <strong>Best For:</strong> D2C brands, local businesses, coaching institutes, clinics, real estate companies, salons, restaurants, eCommerce brands, apps and service-based businesses.
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
                <h2 class="gb-title gb-title-light">Why Choose GrowBoostly for Influencer Marketing?</h2>
                <p class="gb-subtitle gb-text-light">Many brands waste budget because they choose influencers only by follower count. GrowBoostly focuses on audience quality, niche relevance, engagement, location, content style and campaign objective.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card">
                    <div class="gb-icon">🎯</div>
                    <h3>Audience Match</h3>
                    <p>We select creators based on niche, location, audience type and engagement quality.</p>
                </div>

                <div class="gb-card">
                    <div class="gb-icon">🧠</div>
                    <h3>Campaign Strategy</h3>
                    <p>We plan campaign message, content format, offer, CTA and posting schedule.</p>
                </div>

                <div class="gb-card">
                    <div class="gb-icon">🤝</div>
                    <h3>Creator Management</h3>
                    <p>We manage creator communication, content approval and campaign execution.</p>
                </div>

                <div class="gb-card">
                    <div class="gb-icon">📈</div>
                    <h3>Result Tracking</h3>
                    <p>We track views, reach, clicks, leads, enquiries and creator-wise performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="gb-section" id="services">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Complete Influencer Marketing Solution</div>
                <h2 class="gb-title">Our Influencer Marketing Services</h2>
                <p class="gb-subtitle">From influencer research to campaign reporting, GrowBoostly manages the complete influencer marketing process for your brand.</p>
            </div>

            <div class="gb-grid-3">
                <div class="gb-card gb-service-card" id="research-strategy">
                    <span class="gb-service-tag">01</span>
                    <h3>Influencer Research & Strategy</h3>
                    <p>We identify the right influencers for your brand based on niche, audience quality, engagement rate, location, content style and campaign goals.</p>
                    <ul>
                        <li>Influencer shortlisting</li>
                        <li>Audience quality check</li>
                        <li>Engagement review</li>
                        <li>Local and niche creator research</li>
                        <li>Campaign budget planning</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">02</span>
                    <h3>Campaign Management</h3>
                    <p>GrowBoostly manages your influencer campaign from planning to posting, including campaign briefs, creator coordination and reporting.</p>
                    <ul>
                        <li>Campaign planning</li>
                        <li>Creator communication</li>
                        <li>Content brief creation</li>
                        <li>Posting schedule</li>
                        <li>Campaign reporting</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card" id="instagram-marketing">
                    <span class="gb-service-tag">03</span>
                    <h3>Instagram Influencer Marketing</h3>
                    <p>Instagram is one of the best platforms for quick reach, reels, stories, lifestyle promotion and local brand awareness.</p>
                    <ul>
                        <li>Instagram reels promotion</li>
                        <li>Story shoutouts</li>
                        <li>Collaboration posts</li>
                        <li>Product review videos</li>
                        <li>Local influencer campaigns</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card" id="youtube-marketing">
                    <span class="gb-service-tag">04</span>
                    <h3>YouTube Influencer Marketing</h3>
                    <p>YouTube influencer marketing is powerful for products and services that need explanation, demonstration and trust building.</p>
                    <ul>
                        <li>Product review videos</li>
                        <li>Sponsored video integrations</li>
                        <li>YouTube Shorts promotion</li>
                        <li>Explainer campaigns</li>
                        <li>App promotion</li>
                    </ul>
                </div>

                <div class="gb-card gb-service-card" id="creator-collaborations">
                    <span class="gb-service-tag">05</span>
                    <h3>Creator Collaborations</h3>
                    <p>Long-term creator collaborations help brands build stronger trust and recall through product launches and brand storytelling.</p>
                    <ul>
                        <li>Product launch campaigns</li>
                        <li>Brand ambassador style promotions</li>
                        <li>Monthly creator partnerships</li>
                        <li>Festival campaigns</li>
                        <li>UGC-style content</li>
                    </ul>
                    <div class="mt-3">
                        <a href="creator-collaborations.php" class="im-btn-primary" style="padding: 8px 16px; font-size: 14px; box-shadow: none; border-radius: 6px;">Learn More →</a>
                    </div>
                </div>

                <div class="gb-card gb-service-card" id="performance-tracking">
                    <span class="gb-service-tag">06</span>
                    <h3>Performance Tracking</h3>
                    <p>Influencer marketing should not be judged only by likes and views. We track the metrics that matter for business growth.</p>
                    <ul>
                        <li>Reach and impressions</li>
                        <li>Engagement tracking</li>
                        <li>Website clicks</li>
                        <li>WhatsApp enquiries</li>
                        <li>Campaign performance report</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- INSTAGRAM & YOUTUBE -->
    <section class="gb-section" style="background: var(--gb-light);">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Platform Based Campaigns</div>
                <h2 class="gb-title">Influencer Campaigns for Instagram & YouTube</h2>
                <p class="gb-subtitle">Choose the right platform based on your brand, audience, campaign type and business goal.</p>
            </div>

            <div class="gb-platform-grid">
                <div class="gb-platform-card">
                    <div class="gb-platform-img" style="background-image:url('https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?auto=format&fit=crop&w=1100&q=80');"></div>
                    <div class="gb-platform-content">
                        <h3>Instagram Influencer Marketing</h3>
                        <p>Instagram influencer marketing is ideal for brands that want fast visibility, local reach and visual engagement. It works well for fashion, beauty, food, fitness, coaching, clinics, real estate, events and local services.</p>
                        <ul>
                            <li>Reels promotion</li>
                            <li>Story campaigns</li>
                            <li>Product demos</li>
                            <li>Local business promotion</li>
                            <li>Giveaway campaigns</li>
                        </ul>
                        <div class="gb-btn-row">
                            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20plan%20an%20Instagram%20influencer%20campaign." class="gb-btn gb-btn-primary">Plan Instagram Campaign</a>
                        </div>
                    </div>
                </div>

                <div class="gb-platform-card">
                    <div class="gb-platform-img" style="background-image:url('https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=1100&q=80');"></div>
                    <div class="gb-platform-content">
                        <h3>YouTube Influencer Marketing</h3>
                        <p>YouTube influencer marketing is best for brands that need detailed explanation, trust and long-term content visibility. It is useful for tech products, apps, education, finance, real estate and high-value services.</p>
                        <ul>
                            <li>Product reviews</li>
                            <li>Sponsored videos</li>
                            <li>YouTube Shorts</li>
                            <li>Tutorials and explainers</li>
                            <li>App install campaigns</li>
                        </ul>
                        <div class="gb-btn-row">
                            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20plan%20a%20YouTube%20influencer%20campaign." class="gb-btn gb-btn-primary">Plan YouTube Campaign</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- PROCESS -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Simple & Professional Execution</div>
                <h2 class="gb-title">How We Run Influencer Marketing Campaigns</h2>
                <p class="gb-subtitle">A clear process helps your campaign stay organized, measurable and result-focused.</p>
            </div>

            <div class="gb-process">
                <div class="gb-step">
                    <div class="gb-step-number">1</div>
                    <h3>Brand Understanding</h3>
                    <p>We understand your business, product, target audience, location and campaign objective.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">2</div>
                    <h3>Influencer Research</h3>
                    <p>We shortlist creators based on niche, audience quality, engagement and content style.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">3</div>
                    <h3>Campaign Planning</h3>
                    <p>We prepare campaign message, content idea, CTA, offer, posting schedule and tracking method.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">4</div>
                    <h3>Campaign Execution</h3>
                    <p>We coordinate with creators, manage content approval and ensure campaign posts go live properly.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">5</div>
                    <h3>Performance Tracking</h3>
                    <p>We track reach, engagement, clicks, enquiries, traffic, leads and creator-wise performance.</p>
                </div>

                <div class="gb-step">
                    <div class="gb-step-number">6</div>
                    <h3>Optimization</h3>
                    <p>We analyze what worked best and recommend how to improve the next campaign.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="gb-pricing-section gb-section-soft" id="im-pricing">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Influencer Marketing Pricing</div>
                <h2 class="gb-title">Influencer marketing packages</h2>
                <p class="gb-subtitle">Choose a package based on creator tier, campaign count, content rights and reporting.</p>
            </div>
            <div class="gb-pricing-note">
                <strong>Note:</strong>
                <span>Final quote is confirmed after reviewing niche, platforms, creator budget, deliverables and campaign goals. Creator fees may be separate.</span>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Lite</span>
                            <h3>Influencer Lite</h3>
                            <p>Best for testing influencer marketing.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹9,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Creator shortlist research</li>
                                <li>1 micro-influencer campaign</li>
                                <li>Brief + coordination</li>
                                <li>Basic performance tracking</li>
                                <li>Campaign summary report</li>
                            </ul>
                            <div class="gb-ideal">Best for testing influencer marketing.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Influencer%20Lite%20(%E2%82%B99%2C999%2B)">Ask for Lite Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package gb-featured">
                        <div class="gb-package-head">
                            <span>Growth</span>
                            <h3>Influencer Growth</h3>
                            <p>Best for product launches and brand awareness.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹19,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Multi-creator campaign</li>
                                <li>Content usage guidance</li>
                                <li>Story + reel coordination</li>
                                <li>UTM/offer tracking</li>
                                <li>Mid-campaign optimisation</li>
                            </ul>
                            <div class="gb-ideal">Best for product launches and brand awareness.</div>
                            <a class="gb-btn-main" href="https://wa.me/919919020887?text=I%20want%20Influencer%20Growth%20(%E2%82%B919%2C999%2B)">Get Growth Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Scale</span>
                            <h3>Influencer Scale</h3>
                            <p>Best for D2C and sustained influencer programs.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹34,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Tiered creator portfolio</li>
                                <li>Multi-wave campaigns</li>
                                <li>Whitelisting/ads support</li>
                                <li>Detailed ROI reporting</li>
                                <li>Dedicated campaign manager</li>
                            </ul>
                            <div class="gb-ideal">Best for D2C and sustained influencer programs.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Influencer%20Scale%20(%E2%82%B934%2C999%2B)">Ask for Scale Plan</a>
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
                                <h4>First influencer test?</h4>
                                <p>Lite validates creators and messaging affordably.</p>
                                <small>Best for: new brands</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">02</div>
                            <div>
                                <h4>Launch or seasonal push?</h4>
                                <p>Growth coordinates multiple creators and tracking.</p>
                                <small>Best for: ecommerce, apps</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">03</div>
                            <div>
                                <h4>Always-on influencer program?</h4>
                                <p>Scale builds repeatable creator portfolios.</p>
                                <small>Best for: D2C, lifestyle brands</small>
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
                <h2 class="gb-title gb-title-light">Industries We Serve with Influencer Marketing</h2>
                <p class="gb-subtitle gb-text-light">We match creators, formats, and platforms per vertical — nano and micro influencers for local foot traffic, UGC for D2C, and expert voices for SaaS and finance where trust drives conversions.</p>
            </div>

            <div class="gb-industry-grid">
                <?php
                $industries = [
                    ['🏥', 'Healthcare &amp; Clinics', 'Doctor Q&amp;A &amp; trust reels', '../industries/healthcare-clinics'],
                    ['🏠', 'Real Estate &amp; Property', 'Property walkthroughs', '../industries/real-estate'],
                    ['🎓', 'Education &amp; Coaching', 'Course promos &amp; demos', '../industries/education-coaching'],
                    ['🛒', 'eCommerce &amp; D2C Brands', 'Unboxing &amp; UGC reviews', '../industries/ecommerce-d2c'],
                    ['🏪', 'Local Businesses', 'Store visits &amp; foot traffic', '../industries/local-businesses'],
                    ['💻', 'SaaS &amp; IT Companies', 'Product demos &amp; thought leadership', '../industries/saas-it-technology'],
                    ['📞', 'BPO &amp; Service Companies', 'Expert review campaigns', '../industries/bpo-service-companies'],
                    ['🏦', 'Finance &amp; Insurance', 'Trust-building explainers', '../industries/finance-insurance'],
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
                <a href="../contact.php?ref=inf-industry-strategy" class="gb-btn gb-btn-primary">Get Industry Strategy →</a>
            </div>
        </div>
    </section>

    <!-- EXAMPLE CAMPAIGN -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-case">
                <div class="gb-center">
                    <div class="gb-eyebrow">Practical Campaign View</div>
                    <h2 class="gb-title">Example Influencer Campaign Plan</h2>
                    <p class="gb-subtitle">Here is how GrowBoostly can plan a local influencer campaign for a business.</p>
                </div>

                <div class="gb-case-grid">
                    <div class="gb-case-item">
                        <h4>Business Type</h4>
                        <p>Local coaching institute looking to generate student enquiries.</p>
                    </div>

                    <div class="gb-case-item">
                        <h4>Campaign Goal</h4>
                        <p>Improve local brand awareness and increase admission enquiries.</p>
                    </div>

                    <div class="gb-case-item">
                        <h4>Platform & Strategy</h4>
                        <p>Instagram reels with 5 local education creators, story CTA and WhatsApp enquiry link.</p>
                    </div>

                    <div class="gb-case-item">
                        <h4>Tracking Method</h4>
                        <p>Reel views, story clicks, WhatsApp enquiries, form submissions and creator-wise performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT WORKS -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-two-col">
                <div>
                    <div class="gb-eyebrow dark">Indian Market Focus</div>
                    <h2 class="gb-title gb-title-light">Why Influencer Marketing Works for Indian Businesses</h2>
                    <p class="gb-text-light">Indian customers often prefer recommendations, reviews and real experiences before buying. Influencer marketing helps your brand appear in front of the right audience through a trusted creator voice.</p>
                    <p class="gb-text-light">A well-planned influencer campaign can help you build awareness, increase customer trust, promote products faster, generate enquiries and improve local visibility.</p>
                </div>

                <div class="gb-grid-2" style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
                    <div class="gb-card"><h3>Brand Awareness</h3><p>Reach new audiences through trusted creator content.</p></div>
                    <div class="gb-card"><h3>Customer Trust</h3><p>Use real reviews, demos and stories to build confidence.</p></div>
                    <div class="gb-card"><h3>Lead Generation</h3><p>Convert attention into WhatsApp enquiries and form leads.</p></div>
                    <div class="gb-card"><h3>Content Creation</h3><p>Get useful content assets for future marketing campaigns.</p></div>
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
                <p class="gb-subtitle">Common questions businesses ask before starting influencer marketing.</p>
            </div>

            <div class="gb-faq-wrap">
                <div class="gb-faq-item active">
                    <button class="gb-faq-question" type="button"><span>How do you select influencers?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>We select influencers based on niche, audience type, location, engagement quality, content style and campaign objective.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Do you work with micro-influencers?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. Micro-influencers are often very useful for local businesses, startups and budget-friendly campaigns because they usually have a more engaged audience.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Can influencer marketing generate leads?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. With proper CTA, WhatsApp link, landing page, offer, coupon code and tracking setup, influencer marketing can generate enquiries and leads.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Which is better — Instagram or YouTube?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Instagram is better for quick reach, reels, lifestyle promotion and local awareness. YouTube is better for detailed product explanation, reviews and trust building.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Do you manage the complete campaign?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. GrowBoostly manages influencer research, strategy, creator communication, content brief, campaign execution and performance reporting.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Can you run local influencer campaigns?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. We can help businesses run city-based or area-based influencer campaigns for local customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="gb-final-cta">
        <div class="gb-container">
            <h2>Ready to Promote Your Brand with the Right Influencers?</h2>
            <p>GrowBoostly helps you find the right creators, manage influencer campaigns and track real business results from Instagram, YouTube and creator collaborations.</p>

            <div class="gb-btn-row center">
                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20start%20an%20influencer%20marketing%20campaign." class="gb-btn gb-btn-primary">Start Your Influencer Campaign</a>
                <a href="tel:+919919020887" class="gb-btn gb-btn-outline">WhatsApp / Call Now</a>
            </div>

            <div class="gb-contact-line">Call / WhatsApp: +91-9919020887 | Brand: GrowBoostly</div>
        </div>
    </section>

</div>

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
<?php include '../footer.php'; ?>
</body>
</html>
