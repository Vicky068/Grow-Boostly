<?php
// Page initialized with standard header
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Creator Collaborations Agency in India | GrowBoostly</title>
<meta name="description" content="GrowBoostly helps brands build creator collaborations, UGC campaigns, brand ambassador partnerships, launch campaigns and influencer-led content systems.">
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
    /* NEW MODERN HERO - Creator Collaborations Page */
    :root {
        --cc-primary: #16c784;
        --cc-primary-dark: #0b9f68;
        --cc-purple: #7c3aed;
        --cc-light: #f6f9fc;
        --cc-border: #e2e8f0;
        --cc-navy: #0d1b2f;
        --cc-cream: #f0fdf4;
        --cc-text: #1f2937;
    }

    .cc-modern-hero { position: relative; padding: 130px 0 100px; background: radial-gradient(120% 120% at 80% 0%, #f0fdf4 0%, #ffffff 60%); overflow: hidden; }
    .cc-modern-hero .hero-content { position: relative; z-index: 2; padding-top: 0; }
    .cc-modern-hero h1 { font-size: clamp(40px, 5vw, 64px); font-weight: 900; color: #07111f; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1.5px; }
    .cc-modern-hero h3 { font-size: 22px; font-weight: 600; color: var(--cc-primary-dark); margin-bottom: 24px; line-height: 1.4; }
    .cc-modern-hero p { font-size: 18px; color: #4b5563; line-height: 1.7; margin-bottom: 35px; max-width: 90%; }
    .cc-hero-buttons { display: flex; gap: 15px; align-items: center; flex-wrap: wrap; }
    .cc-btn-primary { background: var(--cc-primary); color: #fff; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 10px 20px rgba(22,199,132,0.2); }
    .cc-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(22,199,132,0.3); color: #fff; background: var(--cc-primary-dark); }
    .cc-btn-outline { background: #fff; color: #07111f; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; border: 1.5px solid var(--cc-border); display: inline-flex; align-items: center; }
    .cc-btn-outline:hover { border-color: var(--cc-primary); color: var(--cc-primary); background: var(--cc-cream); }
    .cc-hero-visual { position: relative; z-index: 2; text-align: right; }
    .cc-hero-visual img.main-img { max-width: 100%; border-radius: 24px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); position: relative; z-index: 2; border: 4px solid #fff; }
    .cc-hero-visual .floating-card { position: absolute; background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); padding: 15px 20px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 15px 30px rgba(0,0,0,0.06); z-index: 3; display: flex; align-items: center; gap: 12px; animation: ccFloat 6s ease-in-out infinite; }
    .cc-hero-visual .fc-1 { top: -20px; left: -30px; animation-delay: 0s; }
    .cc-hero-visual .fc-2 { bottom: 40px; right: -20px; animation-delay: 3s; }
    .floating-card .icon { font-size: 24px; }
    .floating-card h4 { margin: 0; font-size: 20px; font-weight: 800; color: #07111f; }
    .floating-card span { font-size: 13px; color: #4b5563; font-weight: 500; }
    @keyframes ccFloat { 0% { transform: translateY(0px); } 50% { transform: translateY(-15px); } 100% { transform: translateY(0px); } }
    .hero-decor-circle { position: absolute; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(22,199,132,0.05) 0%, rgba(255,255,255,0) 70%); top: -100px; right: -100px; z-index: 1; }

    /* STATS BAR */
    .cc-stats-bar { background: linear-gradient(135deg, #0d1b2f 0%, #0b9f68 50%, #16c784 100%); padding: 50px 0; margin-bottom: 60px; }
    .cc-stats-bar .stat-item { text-align: center; padding: 20px 15px; border-right: 1px solid rgba(255,255,255,.12); }
    .cc-stats-bar .stat-item:last-child { border-right: none; }
    .cc-stats-bar .stat-number { font-size: 44px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; }
    .cc-stats-bar .stat-number span { color: #d1fae5; }
    .cc-stats-bar .stat-label { font-size: 13px; color: rgba(255,255,255,.75); text-transform: uppercase; letter-spacing: .6px; }

    /* General modern hero tag utility */
    .cc-tag { display: inline-block; background: rgba(22,199,132,.1); color: var(--cc-primary-dark); font-size: 12px; font-weight: 800; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; border: 1px solid rgba(22,199,132,.2); }

    /* Global gb-* styles */
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

    .gb-grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
    .gb-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
    .gb-grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 26px; }

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
    .gb-card h3, .gb-stat-card h3 { margin: 0 0 8px; color: var(--gb-dark); font-size: 20px; }
    .gb-card p, .gb-stat-card p { margin: 0; color: var(--gb-muted); }

    .gb-two-col { display: grid; grid-template-columns: .95fr 1.05fr; gap: 52px; align-items: center; }
    .gb-two-col.reverse { grid-template-columns: 1.05fr .95fr; }
    .gb-image-box { border-radius: 30px; overflow: hidden; box-shadow: var(--gb-shadow); min-height: 390px; background: #dfe7ef; }
    .gb-image-box img { width: 100%; height: 100%; min-height: 390px; object-fit: cover; }
    .gb-highlight { margin-top: 24px; padding: 22px; border-radius: 22px; background: rgba(22,199,132,.09); border: 1px solid rgba(22,199,132,.22); }
    .gb-highlight strong { color: var(--gb-dark); }

    .gb-dark-section {
        background: radial-gradient(circle at 20% 0%, rgba(22,199,132,.16), transparent 28%), linear-gradient(135deg, #07111f, #0d1b2f);
        color: var(--gb-white);
    }
    .gb-dark-section .gb-card { background: rgba(255,255,255,.07); border-color: rgba(255,255,255,.12); box-shadow: none; backdrop-filter: blur(12px); }
    .gb-dark-section .gb-card h3 { color: var(--gb-white); }
    .gb-dark-section .gb-card p { color: rgba(255,255,255,.72); }

    .gb-list { padding-left: 20px; margin: 18px 0 0; color: var(--gb-muted); }
    .gb-list li { margin: 7px 0; }

    /* Premium Redesigned Services Section */
    .cc-service-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 40px;
    }
    .cc-service-card {
        background: var(--gb-white);
        border: 1px solid var(--gb-border);
        border-radius: 24px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 12px 30px rgba(7, 17, 31, 0.04);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .cc-service-card:hover {
        transform: translateY(-6px);
        border-color: rgba(22, 199, 132, 0.25);
        box-shadow: 0 20px 40px rgba(7, 17, 31, 0.08);
    }
    .cc-service-header {
        padding: 30px;
        background: linear-gradient(135deg, rgba(22, 199, 132, 0.05) 0%, rgba(59, 130, 246, 0.02) 100%);
        border-bottom: 1px solid rgba(7, 17, 31, 0.05);
    }
    .cc-service-tag {
        display: inline-block;
        padding: 6px 14px;
        background: rgba(22, 199, 132, 0.08);
        color: #0b9f68;
        font-size: 11px;
        font-weight: 800;
        border-radius: 99px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 16px;
        border: 1px solid rgba(22, 199, 132, 0.15);
    }
    .cc-service-header h3 {
        margin: 0 0 10px;
        font-size: 21px;
        font-weight: 800;
        color: var(--gb-dark);
    }
    .cc-service-header p {
        margin: 0;
        font-size: 14px;
        color: var(--gb-muted);
        line-height: 1.5;
    }
    .cc-service-body {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .cc-service-list {
        list-style: none;
        padding: 0;
        margin: 0 0 24px;
    }
    .cc-service-list li {
        font-size: 15px;
        color: var(--gb-text);
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .cc-service-list li i {
        color: #16c784;
        font-size: 16px;
        flex-shrink: 0;
    }
    .cc-service-outcome {
        padding: 16px 20px;
        border-radius: 16px;
        background: rgba(22, 199, 132, 0.04);
        border-left: 4px solid #16c784;
    }
    .cc-service-outcome strong {
        display: block;
        font-size: 12px;
        text-transform: uppercase;
        color: #0b9f68;
        letter-spacing: 0.5px;
        margin-bottom: 4px;
        font-weight: 800;
    }
    .cc-service-outcome span {
        display: block;
        font-size: 13.5px;
        color: var(--gb-muted);
        line-height: 1.4;
    }
    @media (max-width: 980px) {
        .cc-service-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }
    @media (max-width: 640px) {
        .cc-service-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
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

    .gb-platform-card { border-radius: 30px; overflow: hidden; background: var(--gb-white); border: 1px solid var(--gb-border); box-shadow: 0 16px 38px rgba(7,17,31,.08); }
    .gb-platform-img { height: 250px; background-size: cover; background-position: center; }
    .gb-platform-content { padding: 28px; }

    /* Premium Redesigned Industries Section */
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

    /* Premium Redesigned Case Section */
    .cc-case-card {
        border-radius: 32px;
        background: linear-gradient(145deg, #0d1b2f 0%, #07111f 100%);
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 60px 45px;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.18);
        position: relative;
        overflow: hidden;
    }
    .cc-case-card::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(22, 199, 132, 0.08) 0%, transparent 70%);
        top: -100px;
        right: -100px;
        pointer-events: none;
    }
    .cc-case-card::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.06) 0%, transparent 70%);
        bottom: -100px;
        left: -100px;
        pointer-events: none;
    }
    .cc-case-card .gb-title {
        color: #ffffff;
    }
    .cc-case-card .gb-subtitle {
        color: rgba(255, 255, 255, 0.7);
    }
    .cc-case-card .gb-eyebrow {
        background: rgba(22, 199, 132, 0.16);
        color: #9ff6cd;
        border: 1px solid rgba(22, 199, 132, 0.25);
    }
    .cc-case-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-top: 40px;
        position: relative;
        z-index: 2;
    }
    .cc-case-item {
        padding: 30px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        transition: all 0.3s ease;
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }
    .cc-case-item:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(22, 199, 132, 0.3);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }
    .cc-case-icon-box {
        width: 54px;
        height: 54px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, rgba(22, 199, 132, 0.2) 0%, rgba(22, 199, 132, 0.05) 100%);
        border: 1px solid rgba(22, 199, 132, 0.25);
        color: #16c784;
        font-size: 24px;
        flex-shrink: 0;
    }
    .cc-case-item:nth-child(2) .cc-case-icon-box {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(59, 130, 246, 0.05) 100%);
        border-color: rgba(59, 130, 246, 0.25);
        color: #3b82f6;
    }
    .cc-case-item:nth-child(3) .cc-case-icon-box {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.2) 0%, rgba(124, 58, 237, 0.05) 100%);
        border-color: rgba(124, 58, 237, 0.25);
        color: #7c3aed;
    }
    .cc-case-item:nth-child(4) .cc-case-icon-box {
        background: linear-gradient(135deg, rgba(236, 72, 153, 0.2) 0%, rgba(236, 72, 153, 0.05) 100%);
        border-color: rgba(236, 72, 153, 0.25);
        color: #ec4899;
    }
    .cc-case-content h4 {
        margin: 0 0 8px;
        color: #ffffff;
        font-size: 20px;
        font-weight: 700;
    }
    .cc-case-content p {
        margin: 0;
        color: rgba(255, 255, 255, 0.7);
        font-size: 15px;
        line-height: 1.6;
    }

    .gb-faq-wrap { max-width: 920px; margin: 0 auto; }
    .gb-faq-item { border: 1px solid var(--gb-border); border-radius: 18px; margin-bottom: 14px; overflow: hidden; background: var(--gb-white); }
    .gb-faq-question { width: 100%; border: 0; background: var(--gb-white); padding: 20px 22px; text-align: left; display: flex; justify-content: space-between; align-items: center; gap: 14px; font-weight: 900; color: var(--gb-dark); cursor: pointer; font-size: 16px; }
    .gb-faq-question span:last-child { font-size: 24px; color: var(--gb-primary-dark); transition: .25s ease; }
    .gb-faq-answer { max-height: 0; overflow: hidden; transition: max-height .28s ease; }
    .gb-faq-answer p { margin: 0; padding: 0 22px 22px; color: var(--gb-muted); }
    .gb-faq-item.active .gb-faq-answer { max-height: 240px; }
    .gb-faq-item.active .gb-faq-question span:last-child { transform: rotate(45deg); }

    .gb-final-cta { padding: 100px 0; background: linear-gradient(135deg, #0d1b2f 0%, #0b9f68 50%, #16c784 100%); color: #ffffff !important; text-align: center; position: relative; overflow: hidden; }
    .gb-final-cta h2 { margin: 0 auto 18px; max-width: 820px; font-size: clamp(32px, 4vw, 52px); line-height: 1.1; color: #ffffff !important; font-weight: 900; }
    .gb-final-cta p { max-width: 780px; margin: 0 auto 40px; color: rgba(255,255,255,.9) !important; font-size: 18px; line-height: 1.7; }
    .gb-contact-line { margin-top: 22px; font-weight: 900; color: #9ff6cd; }

    /* Package / Pricing premium styles */
    .gb-pkg-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
    .gb-pkg-card { background: var(--gb-white); border: 1px solid var(--gb-border); border-radius: var(--gb-radius); padding: 0; position: relative; overflow: hidden; transition: .25s ease; box-shadow: 0 14px 34px rgba(7,17,31,.08); }
    .gb-pkg-card:hover { transform: translateY(-5px); box-shadow: var(--gb-shadow); }
    .gb-pkg-card.featured { border: 2px solid rgba(22,199,132,.35); }
    .gb-pkg-card.featured .gb-pkg-header { padding-top: 52px; }
    .gb-pkg-card.featured::before { content: 'Best for Growth'; position: absolute; right: 20px; top: 16px; padding: 5px 12px; border-radius: 999px; background: linear-gradient(135deg, #16c784, #3b82f6); color: #fff; font-size: 11px; font-weight: 900; z-index: 2; }
    .gb-pkg-header { padding: 26px; background: linear-gradient(135deg, rgba(22,199,132,.1), rgba(124,58,237,.05)); }
    .gb-pkg-header h3 { margin: 0 0 6px; font-size: 20px; color: var(--gb-dark); }
    .gb-pkg-header p { margin: 0; font-size: 14px; color: var(--gb-muted); }
    .gb-pkg-body { padding: 24px 26px 26px; }
    .gb-pkg-price { font-size: 32px; font-weight: 900; color: var(--gb-dark); margin-bottom: 4px; }
    .gb-pkg-sub { font-size: 13px; color: var(--gb-muted); margin-bottom: 20px; }
    .gb-pkg-body ul { padding-left: 20px; margin: 18px 0; color: var(--gb-muted); }
    .gb-pkg-body li { margin: 8px 0; font-size: 15px; }
    .gb-pkg-result { margin: 18px 0; padding: 14px; border-radius: 16px; background: rgba(22,199,132,.06); border: 1px solid rgba(22,199,132,.12); font-weight: 800; color: var(--cc-primary-dark); font-size: 14px; }

    @media (max-width: 980px) {
        .gb-hero-grid, .gb-two-col, .gb-two-col.reverse, .gb-case-grid { grid-template-columns: 1fr; }
        .gb-visual { min-height: 440px; }
        .gb-stats-grid, .gb-grid-4, .gb-grid-3, .gb-process, .gb-pkg-grid, .gb-industry-grid { grid-template-columns: repeat(2, 1fr); }
        .gb-pkg-card.featured { transform: none; }
    }
    @media (max-width: 640px) {
        .gb-section { padding: 64px 0; }
        .gb-hero { padding-top: 82px; }
        .gb-stats-grid, .gb-grid-4, .gb-grid-3, .gb-grid-2, .gb-process, .gb-pkg-grid, .gb-industry-grid { grid-template-columns: 1fr; }
        .gb-dashboard { position: relative; inset: auto; width: 100%; }
        .gb-visual { min-height: auto; }
        .gb-float { display: none; }
        .gb-btn { width: 100%; }
        .gb-title { letter-spacing: -1px; }
        .gb-metric-row { grid-template-columns: 1fr; }
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

    <!-- HERO SECTION -->
    <div class="cc-modern-hero mb-0">
        <div class="hero-decor-circle"></div>
        <div class="gb-container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="cc-tag">Creator Collaborations</div>
                        <h1>Build Brand Trust with Real Creator Partnerships</h1>
                        <h3>Turn trusted online voices into a natural recommendation source for your business.</h3>
                        <p>GrowBoostly helps Indian brands collaborate with relevant content creators for product launches, UGC videos, brand storytelling, ambassador partnerships, and long-term influencer-led growth.</p>
                        <div class="cc-hero-buttons">
                            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Creator%20Collaborations%20for%20my%20brand." class="cc-btn-primary">Plan Creator Collaboration</a>
                            <a href="tel:+919919020887" class="cc-btn-outline">Talk to Collaboration Expert</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cc-hero-visual">
                        <div class="hero-decor-circle"></div>
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Creator Collaborations" class="main-img">
                        <div class="floating-card fc-1">
                            <span class="icon">✨</span>
                            <div>
                                <h4>+340%</h4>
                                <span>Trust Reach Lift</span>
                            </div>
                        </div>
                        <div class="floating-card fc-2">
                            <span class="icon">📊</span>
                            <div>
                                <h4>92%</h4>
                                <span>Social Authority</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STATS BAR -->
    <div class="cc-stats-bar">
        <div class="gb-container">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">500<span>+</span></div>
                        <div class="stat-label">Verified Creators</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">8.5M<span>+</span></div>
                        <div class="stat-label">Content Reach</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">3.5x</div>
                        <div class="stat-label">Average UGC ROI</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">100<span>%</span></div>
                        <div class="stat-label">Brand-Safe Content</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PARTNERSHIP SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-two-col">
                <div class="gb-image-box">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1100&q=80" alt="Creator collaboration campaign">
                </div>
                <div>
                    <div class="gb-eyebrow">Partnership-Based Marketing</div>
                    <h2 class="gb-title">Customers Trust Creators More Than Direct Ads</h2>
                    <p>Creator collaborations help your brand appear through people your audience already follows and trusts. Instead of only showing ads, your brand gets introduced through stories, reviews, experiences and real content.</p>
                    <p>For Indian businesses, creator collaborations work strongly because buyers like to see real usage, honest presentation, local relevance and social proof before making a decision.</p>
                    <div class="gb-highlight">
                        <strong>Best for:</strong> D2C brands, salons, clinics, coaching institutes, real estate, apps, fashion, eCommerce, restaurants, events, SaaS tools and service businesses.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GOALS SECTION -->
    <section class="gb-section gb-section-soft">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Choose Your Collaboration Goal</div>
                <h2 class="gb-title">What Type of Creator Collaboration Do You Need?</h2>
                <p class="gb-subtitle">Every collaboration should support a clear business goal. GrowBoostly helps you choose the right creator format.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">🚀</div>
                    <h3>Launch a Product</h3>
                    <p>Create buzz for a new product, app, service, store, offer or event.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20creator%20collaboration%20for%20product%20launch" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Plan Launch →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">🎥</div>
                    <h3>Create UGC Content</h3>
                    <p>Get creator-style videos, reviews, demos and testimonials for marketing use.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20UGC%20content%20creator%20collaboration" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Create UGC →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">⭐</div>
                    <h3>Build Brand Trust</h3>
                    <p>Use creator recommendations to make customers more confident.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20creator%20collaboration%20for%20brand%20trust" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Build Trust →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">📈</div>
                    <h3>Grow Long-Term</h3>
                    <p>Build ongoing creator partnerships for consistent visibility and recall.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20long%20term%20creator%20collaboration" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Grow Long-Term →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY GROWBOOSTLY SECTION -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow dark">Why GrowBoostly</div>
                <h2 class="gb-title gb-title-light">We Manage Creator Collaborations Like a Brand Growth System</h2>
                <p class="gb-subtitle gb-text-light">We do not treat creator collaboration as a one-time post. We plan creator fit, content angle, campaign message, usage rights, CTA, tracking and long-term relationship value.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card">
                    <div class="gb-icon">🎯</div>
                    <h3>Creator Fit</h3>
                    <p>We select creators based on niche, location, audience quality and brand match.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">📝</div>
                    <h3>Content Brief</h3>
                    <p>We prepare content direction, talking points, brand message and CTA.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">🔁</div>
                    <h3>Collaboration Flow</h3>
                    <p>We manage creator communication, timeline, approval and posting coordination.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">📊</div>
                    <h3>Performance Review</h3>
                    <p>We track deliverables, reach, response, leads and creator-wise value.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Our Services</div>
                <h2 class="gb-title">Creator Collaboration Services</h2>
                <p class="gb-subtitle">GrowBoostly helps brands plan and manage creator collaborations that generate trust, content and business response.</p>
            </div>

            <div class="cc-service-grid">
                <!-- Service 1 -->
                <div class="cc-service-card">
                    <div class="cc-service-header">
                        <span class="cc-service-tag">01 · Partner Discovery</span>
                        <h3>Creator Research & Matching</h3>
                        <p>Find creators who match your brand voice, audience and target market.</p>
                    </div>
                    <div class="cc-service-body">
                        <ul class="cc-service-list">
                            <li><i class="bx bx-check-circle"></i> Niche and local creator shortlisting</li>
                            <li><i class="bx bx-check-circle"></i> Audience quality review</li>
                            <li><i class="bx bx-check-circle"></i> Content style and engagement check</li>
                        </ul>
                        <div class="cc-service-outcome">
                            <strong>Outcome</strong>
                            <span>You collaborate with relevant creators, not random profiles.</span>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="cc-service-card">
                    <div class="cc-service-header">
                        <span class="cc-service-tag">02 · Content System</span>
                        <h3>UGC Content Creation</h3>
                        <p>Plan creator-style content that looks natural and builds customer trust.</p>
                    </div>
                    <div class="cc-service-body">
                        <ul class="cc-service-list">
                            <li><i class="bx bx-check-circle"></i> Review and demo videos</li>
                            <li><i class="bx bx-check-circle"></i> Unboxing and experience content</li>
                            <li><i class="bx bx-check-circle"></i> Testimonials and social proof</li>
                        </ul>
                        <div class="cc-service-outcome">
                            <strong>Outcome</strong>
                            <span>You get content assets for ads, website and social media.</span>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="cc-service-card">
                    <div class="cc-service-header">
                        <span class="cc-service-tag">03 · Brand Voice</span>
                        <h3>Brand Ambassador Campaigns</h3>
                        <p>Build long-term partnerships with creators who repeatedly represent your brand.</p>
                    </div>
                    <div class="cc-service-body">
                        <ul class="cc-service-list">
                            <li><i class="bx bx-check-circle"></i> Ambassador selection</li>
                            <li><i class="bx bx-check-circle"></i> Monthly collaboration plan</li>
                            <li><i class="bx bx-check-circle"></i> Consistent brand messaging</li>
                        </ul>
                        <div class="cc-service-outcome">
                            <strong>Outcome</strong>
                            <span>Your brand gets repeated visibility and stronger recall.</span>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="cc-service-card">
                    <div class="cc-service-header">
                        <span class="cc-service-tag">04 · Launch Push</span>
                        <h3>Product Launch Collaborations</h3>
                        <p>Promote new launches through creator reviews, reels, stories, Shorts and posts.</p>
                    </div>
                    <div class="cc-service-body">
                        <ul class="cc-service-list">
                            <li><i class="bx bx-check-circle"></i> Launch content roadmap</li>
                            <li><i class="bx bx-check-circle"></i> Creator announcement plan</li>
                            <li><i class="bx bx-check-circle"></i> Offer and CTA placement</li>
                        </ul>
                        <div class="cc-service-outcome">
                            <strong>Outcome</strong>
                            <span>Your launch gets attention from trusted creator audiences.</span>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="cc-service-card">
                    <div class="cc-service-header">
                        <span class="cc-service-tag">05 · Campaign Control</span>
                        <h3>Collaboration Management</h3>
                        <p>We manage the full process from briefing to content approval and posting.</p>
                    </div>
                    <div class="cc-service-body">
                        <ul class="cc-service-list">
                            <li><i class="bx bx-check-circle"></i> Creator communication</li>
                            <li><i class="bx bx-check-circle"></i> Content brief and approval</li>
                            <li><i class="bx bx-check-circle"></i> Timeline and deliverables</li>
                        </ul>
                        <div class="cc-service-outcome">
                            <strong>Outcome</strong>
                            <span>Your campaign stays organized and professional.</span>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <a href="influencer-marketing.php" class="cc-service-card" style="text-decoration: none; color: inherit; display: flex;">
                    <div class="cc-service-header">
                        <span class="cc-service-tag">06 · Reporting</span>
                        <h3>Performance Tracking</h3>
                        <p>Track how each creator and content format performs for your business.</p>
                    </div>
                    <div class="cc-service-body">
                        <ul class="cc-service-list">
                            <li><i class="bx bx-check-circle"></i> Reach and engagement</li>
                            <li><i class="bx bx-check-circle"></i> Clicks, leads and enquiries</li>
                            <li><i class="bx bx-check-circle"></i> Creator-wise report</li>
                        </ul>
                        <div class="cc-service-outcome">
                            <strong>Outcome</strong>
                            <span>You know which partnerships deserve more investment.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- OPTIONS / PACKAGES SECTION -->
    <section class="gb-section gb-section-soft">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Campaign Options</div>
                <h2 class="gb-title">Creator Collaboration Options for Different Goals</h2>
                <p class="gb-subtitle">Choose a collaboration structure based on your business stage, budget and content requirement.</p>
            </div>

            <div class="gb-pkg-grid">
                <div class="gb-pkg-card">
                    <div class="gb-pkg-header">
                        <h3>UGC Starter Collaboration</h3>
                        <p>Best for brands that need creator-style content and social proof.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">UGC Plan</div>
                        <div class="gb-pkg-sub">Content-first collaboration</div>
                        <ul class="gb-list">
                            <li>2–3 creator shortlisting</li>
                            <li>Review/demo content brief</li>
                            <li>Basic content usage guidance</li>
                            <li>Simple performance report</li>
                        </ul>
                        <div class="gb-pkg-result">Best when you need fresh content for ads and social media.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20UGC%20Starter%20Creator%20Collaboration" class="gb-btn gb-btn-light" style="width: 100%; margin-top: 15px;">Ask for UGC Plan</a>
                    </div>
                </div>

                <div class="gb-pkg-card featured">
                    <div class="gb-pkg-header">
                        <h3>Growth Collaboration Campaign</h3>
                        <p>Best for lead-focused creator partnerships and brand promotion.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Growth Plan</div>
                        <div class="gb-pkg-sub">Creators + content + CTA tracking</div>
                        <ul class="gb-list">
                            <li>5–8 creator shortlisting</li>
                            <li>Reels, stories or video brief</li>
                            <li>WhatsApp/landing CTA planning</li>
                            <li>Creator-wise report</li>
                        </ul>
                        <div class="gb-pkg-result">Best when you want visibility, trust and enquiries together.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20Growth%20Creator%20Collaboration%20Campaign" class="gb-btn gb-btn-primary" style="width: 100%; margin-top: 15px;">Get Growth Plan</a>
                    </div>
                </div>

                <div class="gb-pkg-card">
                    <div class="gb-pkg-header">
                        <h3>Brand Ambassador Program</h3>
                        <p>Best for long-term brand building with repeated creator visibility.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Ambassador Plan</div>
                        <div class="gb-pkg-sub">Long-term creator partnership system</div>
                        <ul class="gb-list">
                            <li>Ambassador creator selection</li>
                            <li>Monthly content roadmap</li>
                            <li>Launch + trust content mix</li>
                            <li>Detailed review and scaling plan</li>
                        </ul>
                        <div class="gb-pkg-result">Best when you want consistent brand recall and trust.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20Brand%20Ambassador%20Creator%20Collaboration" class="gb-btn gb-btn-light" style="width: 100%; margin-top: 15px;">Plan Ambassador Program</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">How It Works</div>
                <h2 class="gb-title">Our Creator Collaboration Process</h2>
                <p class="gb-subtitle">A clear process helps your creator partnerships stay professional, trackable and brand-safe.</p>
            </div>

            <div class="gb-process">
                <div class="gb-step">
                    <div class="gb-step-number">1</div>
                    <h3>Brand Discovery</h3>
                    <p>Understand brand, audience, offer, goals and collaboration type.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">2</div>
                    <h3>Creator Shortlisting</h3>
                    <p>Find creators based on niche, location, audience and content quality.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">3</div>
                    <h3>Collaboration Brief</h3>
                    <p>Prepare message, content format, talking points, CTA and deliverables.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">4</div>
                    <h3>Content Approval</h3>
                    <p>Review content before posting to keep brand message accurate.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">5</div>
                    <h3>Campaign Launch</h3>
                    <p>Manage posting timeline, creator coordination and CTA flow.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">6</div>
                    <h3>Report & Scale</h3>
                    <p>Review results and identify creators for future collaborations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="gb-pricing-section gb-section-soft" id="cc-pricing">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Creator Collaboration Pricing</div>
                <h2 class="gb-title">Creator collaboration packages</h2>
                <p class="gb-subtitle">Choose a package based on creator count, content formats, usage rights and campaign management.</p>
            </div>
            <div class="gb-pricing-note">
                <strong>Note:</strong>
                <span>Final quote is confirmed after reviewing brand goals, platforms, creator tiers and deliverables. Creator fees may be separate.</span>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Starter</span>
                            <h3>Collab Starter</h3>
                            <p>Best for testing creator partnerships.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹9,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Creator discovery</li>
                                <li>1 collaboration campaign</li>
                                <li>Brief + coordination</li>
                                <li>Basic tracking</li>
                                <li>Wrap-up report</li>
                            </ul>
                            <div class="gb-ideal">Best for testing creator partnerships.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Creator%20Collab%20Starter%20(%E2%82%B99%2C999%2B)">Ask for Starter Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package gb-featured">
                        <div class="gb-package-head">
                            <span>Growth</span>
                            <h3>Collab Growth</h3>
                            <p>Best for launches and brand campaigns.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹19,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Multi-creator collaborations</li>
                                <li>Content format planning</li>
                                <li>Timeline management</li>
                                <li>Performance tracking</li>
                                <li>Optimisation notes</li>
                            </ul>
                            <div class="gb-ideal">Best for launches and brand campaigns.</div>
                            <a class="gb-btn-main" href="https://wa.me/919919020887?text=I%20want%20Creator%20Collab%20Growth%20(%E2%82%B919%2C999%2B)">Get Growth Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Scale</span>
                            <h3>Collab Scale</h3>
                            <p>Best for ongoing creator programs.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹39,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Creator portfolio strategy</li>
                                <li>Multi-platform collaborations</li>
                                <li>Usage rights guidance</li>
                                <li>ROI reporting</li>
                                <li>Dedicated coordinator</li>
                            </ul>
                            <div class="gb-ideal">Best for ongoing creator programs.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Creator%20Collab%20Scale%20(%E2%82%B939%2C999%2B)">Ask for Scale Plan</a>
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
                                <h4>Testing creator fit?</h4>
                                <p>Starter runs one structured collaboration.</p>
                                <small>Best for: new brands</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">02</div>
                            <div>
                                <h4>Multi-creator campaign?</h4>
                                <p>Growth manages formats, timelines and tracking.</p>
                                <small>Best for: ecommerce, apps</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">03</div>
                            <div>
                                <h4>Long-term creator network?</h4>
                                <p>Scale builds repeatable collaboration systems.</p>
                                <small>Best for: D2C, media brands</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES SECTION -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow dark">Industries We Serve</div>
                <h2 class="gb-title gb-title-light">Industries We Serve with Creator Collaborations</h2>
                <p class="gb-subtitle gb-text-light">We source creators, negotiate deliverables, and run UGC and sponsored content per vertical — authentic reviews for D2C, expert walkthroughs for SaaS, and trust-building collabs for clinics and finance.</p>
            </div>

            <div class="gb-industry-grid">
                <?php
                $industries = [
                    ['🏥', 'Healthcare &amp; Clinics', 'Doctor Q&amp;As &amp; trust content', '../industries/healthcare-clinics'],
                    ['🏠', 'Real Estate &amp; Property', 'Property walkthroughs', '../industries/real-estate'],
                    ['🎓', 'Education &amp; Coaching', 'Course promos &amp; success stories', '../industries/education-coaching'],
                    ['🛒', 'eCommerce &amp; D2C Brands', 'Unboxing &amp; UGC reviews', '../industries/ecommerce-d2c'],
                    ['🏪', 'Local Businesses', 'Store visits &amp; local proof', '../industries/local-businesses'],
                    ['💻', 'SaaS &amp; IT Companies', 'Workflow &amp; product walkthroughs', '../industries/saas-it-technology'],
                    ['📞', 'BPO &amp; Service Companies', 'Expert credibility campaigns', '../industries/bpo-service-companies'],
                    ['🏦', 'Finance &amp; Insurance', 'Explainer &amp; trust-building collabs', '../industries/finance-insurance'],
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
                <a href="../contact.php?ref=cc-industry-strategy" class="gb-btn gb-btn-primary">Get Industry Strategy →</a>
            </div>
        </div>
    </section>

    <!-- CASE PLAN SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="cc-case-card">
                <div class="gb-center">
                    <div class="gb-eyebrow">Sample Collaboration</div>
                    <h2 class="gb-title">Example: Product Launch Creator Collaboration</h2>
                    <p class="gb-subtitle">A practical campaign model for brands launching a product, app, service or event.</p>
                </div>

                <div class="cc-case-grid">
                    <div class="cc-case-item">
                        <div class="cc-case-icon-box">
                            <i class="bx bx-briefcase"></i>
                        </div>
                        <div class="cc-case-content">
                            <h4>Business</h4>
                            <p>eCommerce brand, app, salon, clinic, coaching, cafe, real estate or premium service.</p>
                        </div>
                    </div>
                    <div class="cc-case-item">
                        <div class="cc-case-icon-box">
                            <i class="bx bx-target-lock"></i>
                        </div>
                        <div class="cc-case-content">
                            <h4>Goal</h4>
                            <p>Build awareness, trust, product understanding, website visits and enquiries.</p>
                        </div>
                    </div>
                    <div class="cc-case-item">
                        <div class="cc-case-icon-box">
                            <i class="bx bx-cog"></i>
                        </div>
                        <div class="cc-case-content">
                            <h4>Setup</h4>
                            <p>5 creators, UGC videos, reels/stories, product demo, offer CTA and tracking links.</p>
                        </div>
                    </div>
                    <div class="cc-case-item">
                        <div class="cc-case-icon-box">
                            <i class="bx bx-bar-chart-alt-2"></i>
                        </div>
                        <div class="cc-case-content">
                            <h4>Measurement</h4>
                            <p>Reach, engagement, content delivery, clicks, WhatsApp enquiries and creator-wise results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">FAQ</div>
                <h2 class="gb-title">Frequently Asked Questions</h2>
                <p class="gb-subtitle">Answers that help customers understand creator collaborations faster.</p>
            </div>

            <div class="gb-faq-wrap">
                <div class="gb-faq-item active">
                    <button class="gb-faq-question" type="button"><span>What is creator collaboration?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Creator collaboration means partnering with content creators to promote your brand through real content such as reviews, reels, stories, demos, testimonials or long-term brand partnerships.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>How is creator collaboration different from influencer marketing?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Influencer marketing is often campaign-focused, while creator collaboration can also include UGC content, brand ambassador partnerships and long-term content relationships.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Can creator content be used for ads?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes, with proper permission and usage rights, creator content can be used for ads, website, social media and landing pages.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Do you manage creator communication?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. GrowBoostly can manage creator shortlisting, communication, content brief, approval, posting coordination and reporting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA SECTION -->
    <section class="gb-final-cta">
        <div class="gb-container">
            <h2>Ready to Build Real Creator Partnerships for Your Brand?</h2>
            <p>GrowBoostly can help you find the right creators, plan collaboration content, manage partnerships and track real customer response.</p>

            <div class="gb-btn-row center">
                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Creator%20Collaborations%20for%20my%20brand." class="gb-btn gb-btn-primary">Get My Collaboration Plan</a>
                <a href="tel:+919919020887" class="gb-btn gb-btn-outline">Call / WhatsApp Now</a>
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