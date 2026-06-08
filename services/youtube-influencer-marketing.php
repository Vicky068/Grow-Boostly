<?php
// Page initialized with standard header
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YouTube Influencer Marketing Agency in India | GrowBoostly</title>
<meta name="description" content="Partner with top Indian YouTube creators, tech reviewers, vloggers, and educational channels. GrowBoostly manages sponsorships, dedicated video reviews, and integrations that drive conversions.">
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
    /* NEW MODERN HERO - Campaign Management style alignment for YouTube */
    :root {
        --cm-primary: #f02828;
        --cm-primary-dark: #c30712;
        --cm-blue: #3b82f6;
        --cm-light: #fef2f2;
        --cm-border: #fca5a5;
        --cm-navy: #0d1b2f;
        --cm-cream: #fff5f5;
        --cm-text: #1f2937;
    }

    .cm-modern-hero { position: relative; padding: 150px 0 100px; background: radial-gradient(120% 120% at 80% 0%, #fff5f5 0%, #ffffff 60%); overflow: hidden; }
    @media (max-width: 991px) {
        .cm-modern-hero { padding: 130px 0 70px; }
    }
    .cm-modern-hero .hero-content { position: relative; z-index: 2; padding-top: 0; }
    .cm-modern-hero h1 { font-size: clamp(40px, 5vw, 64px); font-weight: 900; color: #07111f; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1.5px; }
    .cm-modern-hero h3 { font-size: 22px; font-weight: 600; color: var(--cm-primary-dark); margin-bottom: 24px; line-height: 1.4; }
    .cm-modern-hero p { font-size: 18px; color: #4b5563; line-height: 1.7; margin-bottom: 35px; max-width: 90%; }
    .cm-hero-buttons { display: flex; gap: 15px; align-items: center; flex-wrap: wrap; }
    .cm-btn-primary { background: var(--cm-primary); color: #fff; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 10px 20px rgba(240,40,40,0.2); }
    .cm-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(240,40,40,0.3); color: #fff; background: var(--cm-primary-dark); }
    .cm-btn-outline { background: #fff; color: #07111f; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; border: 1.5px solid var(--cm-border); display: inline-flex; align-items: center; }
    .cm-btn-outline:hover { border-color: var(--cm-primary); color: var(--cm-primary); background: var(--cm-cream); }
    .cm-hero-visual { position: relative; z-index: 2; text-align: right; max-width: 100%; width: 100%; margin-left: auto; }
    @media (min-width: 992px) {
        .cm-hero-visual { max-width: 108%; width: 108%; margin-right: -4%; }
    }
    .cm-hero-visual img.main-img { max-width: 100%; width: 100%; display: block; border-radius: 24px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); position: relative; z-index: 2; border: 4px solid #fff; }
    .cm-hero-visual .floating-card { position: absolute; background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); padding: 15px 20px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 15px 30px rgba(0,0,0,0.06); z-index: 3; display: flex; align-items: center; gap: 12px; animation: cmFloat 6s ease-in-out infinite; }
    .cm-hero-visual .fc-1 { top: 16px; left: -20px; animation-delay: 0s; }
    .cm-hero-visual .fc-2 { bottom: 40px; right: -20px; animation-delay: 3s; }
    .floating-card .icon { font-size: 24px; }
    .floating-card h4 { margin: 0; font-size: 20px; font-weight: 800; color: #07111f; }
    .floating-card span { font-size: 13px; color: #4b5563; font-weight: 500; }
    @keyframes cmFloat { 0% { transform: translateY(0px); } 50% { transform: translateY(-15px); } 100% { transform: translateY(0px); } }
    .hero-decor-circle { position: absolute; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(240,40,40,0.05) 0%, rgba(255,255,255,0) 70%); top: -100px; right: -100px; z-index: 1; }

    /* STATS BAR */
    .cm-stats-bar { background: linear-gradient(135deg, #0d1b2f 0%, #c30712 50%, #f02828 100%); padding: 50px 0; margin-bottom: 60px; }
    .cm-stats-bar .stat-item { text-align: center; padding: 20px 15px; border-right: 1px solid rgba(255,255,255,.12); }
    .cm-stats-bar .stat-item:last-child { border-right: none; }
    .cm-stats-bar .stat-number { font-size: 44px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; }
    .cm-stats-bar .stat-number span { color: #ffc2c2; }
    .cm-stats-bar .stat-label { font-size: 13px; color: rgba(255,255,255,.75); text-transform: uppercase; letter-spacing: .6px; }

    /* General modern hero tag utility */
    .cm-tag { display: inline-block; background: rgba(240,40,40,.1); color: var(--cm-primary-dark); font-size: 12px; font-weight: 800; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; border: 1px solid rgba(240,40,40,.2); }

    /* Global gb-* styles */
    :root {
        --gb-primary: #f02828;
        --gb-primary-dark: #c30712;
        --gb-blue: #3b82f6;
        --gb-dark: #07111f;
        --gb-navy: #0d1b2f;
        --gb-text: #1f2937;
        --gb-muted: #6b7280;
        --gb-light: #fef2f2;
        --gb-white: #ffffff;
        --gb-border: #fca5a5;
        --gb-shadow: 0 18px 45px rgba(240, 40, 40, 0.08);
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

    /* Grid helpers */
    .gb-center { text-align: center; max-width: 780px; margin: 0 auto 55px; }
    .gb-eyebrow { display: inline-block; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; color: var(--gb-primary-dark); background: rgba(240,40,40,.08); padding: 6px 16px; border-radius: 30px; margin-bottom: 15px; }
    .gb-eyebrow.dark {
        color: #ffc2c2;
        background: rgba(240,40,40,.16);
    }
    .gb-title { font-size: clamp(30px, 3.5vw, 44px); font-weight: 900; color: var(--gb-dark); line-height: 1.15; margin-top: 0; margin-bottom: 16px; letter-spacing: -1px; }
    .gb-title-light { color: var(--gb-white); }
    .gb-subtitle { font-size: 18px; color: var(--gb-muted); margin: 0; line-height: 1.6; }
    .gb-text-light { color: rgba(255,255,255,.76); }
    .gb-two-col { display: grid; grid-template-columns: repeat(2, 1fr); gap: 50px; align-items: center; }
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
        background: rgba(240,40,40,.09);
        border: 1px solid rgba(240,40,40,.22);
    }
    .gb-highlight strong { color: var(--gb-dark); }

    .gb-dark-section {
        background:
            radial-gradient(circle at 20% 0%, rgba(240,40,40,.16), transparent 28%),
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

    .gb-grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
    .gb-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
    .gb-card { background: var(--gb-white); border: 1px solid var(--gb-border); border-radius: var(--gb-radius); padding: 30px; transition: .3s; }
    .gb-card:hover { transform: translateY(-5px); box-shadow: var(--gb-shadow); }
    .gb-card h3 { font-size: 19px; font-weight: 800; color: var(--gb-dark); margin: 0 0 10px; }
    .gb-card p { margin: 0; font-size: 14.5px; color: var(--gb-muted); line-height: 1.6; }
    .gb-icon { font-size: 34px; margin-bottom: 16px; }

    .gb-service-tag {
        display: inline-block;
        margin-bottom: 14px;
        padding: 6px 12px;
        border-radius: 999px;
        background: rgba(240,40,40,.1);
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
        box-shadow: 0 15px 35px rgba(240, 40, 40, 0.04);
        position: relative;
        transition: all 0.3s ease;
    }
    .gb-step:hover {
        transform: translateY(-8px);
        border-color: var(--cm-primary);
        box-shadow: 0 20px 40px rgba(240, 40, 40, 0.12);
    }
    .gb-step-number {
        display: inline-grid;
        place-items: center;
        width: 50px;
        height: 50px;
        border-radius: 16px;
        background: linear-gradient(135deg, var(--cm-primary) 0%, var(--cm-primary-dark) 100%);
        color: var(--gb-white);
        font-weight: 900;
        font-size: 18px;
        margin-bottom: 22px;
        box-shadow: 0 8px 16px rgba(240, 40, 40, 0.25);
        transition: all 0.3s ease;
    }
    .gb-step:hover .gb-step-number {
        transform: rotate(10deg);
        box-shadow: 0 12px 20px rgba(240, 40, 40, 0.4);
    }
    .gb-step h3 { margin: 0 0 12px; color: var(--gb-dark); font-size: 20px; font-weight: 800; }
    .gb-step p { margin: 0; color: var(--gb-muted); font-size: 14.5px; line-height: 1.6; }

    .gb-industry-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
    }
    a.gb-industry {
        display: block;
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
    }

    a.gb-industry:hover {
        border-color: #f02828;
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(240, 40, 40, 0.12);
    }

    .gb-industry {
        padding: 18px;
        border-radius: 18px;
        background: var(--gb-white);
        border: 1px solid var(--gb-border);
        font-weight: 900;
        color: var(--gb-dark);
        box-shadow: 0 10px 20px rgba(7,17,31,.04);
        text-align: center;
        font-size: 15px;
        line-height: 1.4;
    }

    /* Premium Redesigned Case Section */
    .gb-case {
        border-radius: 32px;
        background: linear-gradient(145deg, #0d1b2f 0%, #07111f 100%);
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 60px 45px;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.18);
        position: relative;
        overflow: hidden;
    }
    .gb-case::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(240, 40, 40, 0.08) 0%, transparent 70%);
        top: -100px;
        right: -100px;
        pointer-events: none;
    }
    .gb-case::after {
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
    .gb-case .gb-title {
        color: #ffffff;
    }
    .gb-case .gb-subtitle {
        color: rgba(255, 255, 255, 0.7);
    }
    .gb-case .gb-eyebrow {
        background: rgba(240, 40, 40, 0.16);
        color: #fca5a5;
        border: 1px solid rgba(240, 40, 40, 0.25);
    }
    .gb-case-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-top: 40px;
        position: relative;
        z-index: 2;
    }
    .gb-case-item {
        padding: 30px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        transition: all 0.3s ease;
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }
    .gb-case-item:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(240, 40, 40, 0.3);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }
    .gb-case-icon-box {
        width: 54px;
        height: 54px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, rgba(240, 40, 40, 0.2) 0%, rgba(240, 40, 40, 0.05) 100%);
        border: 1px solid rgba(240, 40, 40, 0.25);
        color: #f02828;
        font-size: 24px;
        flex-shrink: 0;
    }
    .gb-case-item:nth-child(2) .gb-case-icon-box {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(59, 130, 246, 0.05) 100%);
        border-color: rgba(59, 130, 246, 0.25);
        color: #3b82f6;
    }
    .gb-case-item:nth-child(3) .gb-case-icon-box {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.2) 0%, rgba(124, 58, 237, 0.05) 100%);
        border-color: rgba(124, 58, 237, 0.25);
        color: #7c3aed;
    }
    .gb-case-item:nth-child(4) .gb-case-icon-box {
        background: linear-gradient(135deg, rgba(251, 146, 60, 0.2) 0%, rgba(251, 146, 60, 0.05) 100%);
        border-color: rgba(251, 146, 60, 0.25);
        color: #fb923c;
    }
    .gb-case-content h4 {
        margin: 0 0 8px;
        color: #ffffff;
        font-size: 20px;
        font-weight: 700;
    }
    .gb-case-content p {
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

    .gb-final-cta { padding: 100px 0; background: linear-gradient(135deg, #0d1b2f 0%, #c30712 50%, #f02828 100%); color: #ffffff !important; text-align: center; position: relative; overflow: hidden; }
    .gb-final-cta h2 { margin: 0 auto 18px; max-width: 820px; font-size: clamp(32px, 4vw, 52px); line-height: 1.1; color: #ffffff !important; font-weight: 900; }
    .gb-final-cta p { max-width: 780px; margin: 0 auto 40px; color: rgba(255,255,255,.9) !important; font-size: 18px; line-height: 1.7; }
    .gb-contact-line { margin-top: 22px; font-weight: 900; color: #ffc2c2; }

    /* Package / Pricing premium styles */
    .gb-pkg-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
    .gb-pkg-card { background: var(--gb-white); border: 1px solid var(--gb-border); border-radius: var(--gb-radius); padding: 0; position: relative; overflow: hidden; transition: .25s ease; box-shadow: 0 14px 34px rgba(7,17,31,.08); }
    .gb-pkg-card:hover { transform: translateY(-5px); box-shadow: var(--gb-shadow); }
    .gb-pkg-card.featured { border: 2px solid rgba(240, 40, 40, 0.35); }
    .gb-pkg-card.featured .gb-pkg-header { padding-top: 52px; }
    .gb-pkg-card.featured::before { content: 'Best for ROI'; position: absolute; right: 20px; top: 16px; padding: 5px 12px; border-radius: 999px; background: linear-gradient(135deg, #f02828, #3b82f6); color: #fff; font-size: 11px; font-weight: 900; z-index: 2; }
    .gb-pkg-header { padding: 26px; background: linear-gradient(135deg, rgba(240, 40, 40, 0.1), rgba(124,58,237,.05)); }
    .gb-pkg-header h3 { margin: 0 0 6px; font-size: 20px; color: var(--gb-dark); }
    .gb-pkg-header p { margin: 0; font-size: 14px; color: var(--gb-muted); }
    .gb-pkg-body { padding: 24px 26px 26px; }
    .gb-pkg-price { font-size: 32px; font-weight: 900; color: var(--gb-dark); margin-bottom: 4px; }
    .gb-pkg-sub { font-size: 13px; color: var(--gb-muted); margin-bottom: 20px; }
    .gb-pkg-body ul { padding-left: 20px; margin: 18px 0; color: var(--gb-muted); }
    .gb-pkg-body li { margin: 8px 0; font-size: 15px; }
    .gb-pkg-result { margin: 18px 0; padding: 14px; border-radius: 16px; background: rgba(240, 40, 40, 0.06); border: 1px solid rgba(240, 40, 40, 0.12); font-weight: 800; color: var(--cm-primary-dark); font-size: 14px; }

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
        color: #ffffff;
        box-shadow: 0 12px 24px rgba(240,40,40,.28);
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
    <div class="cm-modern-hero mb-0">
        <div class="hero-decor-circle"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="cm-tag mb-3">YouTube Sponsorships</span>
                        <h1>Drive High-Impact Sales with YouTube Creators</h1>
                        <h3>Reach high-intent buyers through unboxing, product reviews, and dedicated video integrations.</h3>
                        <p>GrowBoostly helps brands partner with India's top tech reviewers, financial analysts, lifestyle vloggers, and gaming creators for conversion-driven sponsorships.</p>
                        <div class="cm-hero-buttons">
                            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20YouTube%20Influencer%20Marketing%20for%20my%20brand." class="cm-btn-primary">Plan YouTube Campaign →</a>
                            <a href="tel:+919919020887" class="cm-btn-outline">Talk to YouTube Expert</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cm-hero-visual">
                        <div class="floating-card fc-1">
                            <span class="icon">✨</span>
                            <div>
                                <h4>+420%</h4>
                                <span>Purchase Intent</span>
                            </div>
                        </div>
                        <img src="../assets/img/youtube_dashboard.png" alt="YouTube Influencer Marketing" class="main-img">
                        <div class="floating-card fc-2">
                            <span class="icon">📊</span>
                            <div>
                                <h4>5.2x</h4>
                                <span>Average ROAS</span>
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
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">300<span>+</span></div>
                        <div class="stat-label">Vetted Tech & Review Channels</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">25M<span>+</span></div>
                        <div class="stat-label">Combined Video Views</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">4.8x</div>
                        <div class="stat-label">Average Video ROI</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">100<span>%</span></div>
                        <div class="stat-label">Tracking & Links Enabled</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WHY SPONSORSHIPS WORK SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-two-col">
                <div class="gb-image-box">
                    <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=1100&q=80" alt="YouTube video production">
                </div>
                <div>
                    <div class="gb-eyebrow">Deep Video Sponsorships</div>
                    <h2 class="gb-title">YouTube Videos Act as Permanent Search Assets</h2>
                    <p>Unlike short-form content or social media stories that vanish after 24 hours, YouTube sponsorships are a long-term resource. Whenever a high-intent user searches Google or YouTube for comparison reviews or product walkthroughs, your video will continue to display.</p>
                    <p>For brands targeting the Indian market, deep video reviews provide the technical validation, feature breakdowns, and social authority needed to turn viewers into active customers.</p>
                    <div class="gb-highlight">
                        <strong>Best for:</strong> Gadgets, tech products, SaaS/Software, EdTech, finance/investment tools, e-commerce, D2C brands, and automotive.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GOALS SECTION -->
    <section class="gb-section gb-section-soft">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Choose Your Campaign Format</div>
                <h2 class="gb-title">YouTube Sponsorship Campaign Styles</h2>
                <p class="gb-subtitle">Select a format designed specifically for your goals. GrowBoostly helps you plan and coordinate the script briefs.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">📺</div>
                    <h3>Dedicated Video Reviews</h3>
                    <p>Get a full, detailed 8-12 minute video reviewing your product, app, or service.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20YouTube%20Dedicated%20Video%20Reviews" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Plan Video →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">🔌</div>
                    <h3>Video Integrations</h3>
                    <p>Sponsor a 60-90 second dedicated shoutout or integration inside a creator's organic video.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20YouTube%20Video%20Integrations" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Sponsor Integration →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">📦</div>
                    <h3>Unboxing & First Look</h3>
                    <p>Build excitement with creators unboxing your new physical products, detailing features.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20YouTube%20Unboxing%20Campaign" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Get First Look →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">💻</div>
                    <h3>Software Walkthroughs</h3>
                    <p>Educate users with step-by-step screen shares, setup tutorials, and feature highlights.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20YouTube%20Software%20Walkthroughs" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Create Tutorial →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY GROWBOOSTLY SECTION -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow dark">Why GrowBoostly</div>
                <h2 class="gb-title gb-title-light">End-to-End Campaign Management</h2>
                <p class="gb-subtitle gb-text-light">We don't just find random channels. We plan creator alignment, integration talking points, tracking links, draft approvals, and performance reporting.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card">
                    <div class="gb-icon">🎯</div>
                    <h3>Niche Vetting</h3>
                    <p>We analyze subscriber retention, view-to-subscriber ratios, and audience location metrics.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">📝</div>
                    <h3>Conversion Briefs</h3>
                    <p>We prepare script briefs that deliver key hooks, value propositions, and direct CTAs.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">🔁</div>
                    <h3>Draft Reviews</h3>
                    <p>We review every video draft before publishing to check logo placements, audio, and compliance.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">📊</div>
                    <h3>Accurate Tracking</h3>
                    <p>Setup custom tracked URLs, description tags, coupon codes, and monitor long-tail view growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Our Services</div>
                <h2 class="gb-title">YouTube Sponsorship Services</h2>
                <p class="gb-subtitle">GrowBoostly helps brands build, manage, and scale high-converting YouTube creator partnerships.</p>
            </div>

            <div class="gb-grid-3">
                <!-- Service 1 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">01</span>
                    <h3>Creator Vetting & Matching</h3>
                    <p>Find channels matching your target demographic with active engagement and real reach.</p>
                    <ul>
                        <li>Subscriber count validation</li>
                        <li>Average video view review</li>
                        <li>Viewer location and age checks</li>
                        <li>Niche authority matching</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">02</span>
                    <h3>Sponsorship Briefing</h3>
                    <p>Draft structural scripts detailing visual cues, value hooks, and direct links.</p>
                    <ul>
                        <li>Value hooks creation</li>
                        <li>Core product features list</li>
                        <li>Specific CTA triggers</li>
                        <li>Description/comment guidelines</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">03</span>
                    <h3>Dedicated Reviews</h3>
                    <p>Manage unboxing, hands-on tutorials, and software walkthrough video sessions.</p>
                    <ul>
                        <li>Feature-by-feature demonstration</li>
                        <li>Real-world user testing</li>
                        <li>Clean voiceovers & presentation</li>
                        <li>Visual overlay coordination</li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">04</span>
                    <h3>60-Second Integrations</h3>
                    <p>Coordinate shoutouts seamlessly inside relevant, highly-popular organic videos.</p>
                    <ul>
                        <li>Seamless transition hooks</li>
                        <li>Dedicated product demonstration</li>
                        <li>Active tracking check</li>
                        <li>Creator brand voice alignment</li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">05</span>
                    <h3>Description & Link Optimization</h3>
                    <p>Set up tracking links, pinned comments, coupon codes, and custom URLs.</p>
                    <ul>
                        <li>Pinned comment CTAs</li>
                        <li>Tracked redirect links</li>
                        <li>Video time-stamp highlights</li>
                        <li>Coupon code attribution</li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <a href="influencer-marketing.php" class="gb-card gb-service-card" style="text-decoration: none; color: inherit;">
                    <span class="gb-service-tag">06</span>
                    <h3>Analytics & Performance Review</h3>
                    <p>Measure watch-time, engagement, link click-throughs, and long-tail growth.</p>
                    <ul>
                        <li>Engagement-rate reports</li>
                        <li>Link click-through audits</li>
                        <li>30/60/90 day views scaling</li>
                        <li>ROI and CPA calculations</li>
                    </ul>
                </a>
            </div>
        </div>
    </section>

    <!-- OPTIONS / PACKAGES SECTION -->
    <section class="gb-section gb-section-soft">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Campaign Options</div>
                <h2 class="gb-title">YouTube Sponsorship Packages</h2>
                <p class="gb-subtitle">Choose a package size depending on your product type, target market, and growth plans.</p>
            </div>

            <div class="gb-pkg-grid">
                <div class="gb-pkg-card">
                    <div class="gb-pkg-header">
                        <h3>YouTube Starter Sponsorship</h3>
                        <p>Best for testing product-market fit and initial buyer response.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Starter Plan</div>
                        <div class="gb-pkg-sub">Micro-creators & Integrations</div>
                        <ul class="gb-list">
                            <li>1–2 YouTube integrations</li>
                            <li>Micro-review channel matching</li>
                            <li>60-second video brief setup</li>
                            <li>Tracked description link setup</li>
                        </ul>
                        <div class="gb-pkg-result">Best for validating brand-message hooks on YouTube.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20YouTube%20Starter%20Sponsorship" class="gb-btn gb-btn-light" style="width: 100%; margin-top: 15px;">Ask for Starter Plan</a>
                    </div>
                </div>

                <div class="gb-pkg-card featured">
                    <div class="gb-pkg-header">
                        <h3>YouTube Growth Campaign</h3>
                        <p>Best for scaling sales, unboxing excitement, and lead acquisition.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Growth Plan</div>
                        <div class="gb-pkg-sub">Mixed reviews + Integrations</div>
                        <ul class="gb-list">
                            <li>3–5 YouTube integrations & reviews</li>
                            <li>Mid-tier authority channels</li>
                            <li>Custom script briefs & hooks</li>
                            <li>Attributed promo code setup</li>
                        </ul>
                        <div class="gb-pkg-result">Best for building authority and driving direct conversions.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20YouTube%20Growth%20Campaign" class="gb-btn gb-btn-primary" style="width: 100%; margin-top: 15px;">Get Growth Plan</a>
                    </div>
                </div>

                <div class="gb-pkg-card">
                    <div class="gb-pkg-header">
                        <h3>YouTube Enterprise Program</h3>
                        <p>Best for high-volume product launches and long-term search dominance.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Enterprise Plan</div>
                        <div class="gb-pkg-sub">Dedicated reviews & Ambassadors</div>
                        <ul class="gb-list">
                            <li>6–10 premium channel sponsorships</li>
                            <li>Dedicated product walkthrough series</li>
                            <li>Custom landing page tracking</li>
                            <li>Ongoing brand ambassador rights</li>
                        </ul>
                        <div class="gb-pkg-result">Best for dominating searches in your product category.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20YouTube%20Enterprise%20Program" class="gb-btn gb-btn-light" style="width: 100%; margin-top: 15px;">Plan Enterprise Program</a>
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
                <h2 class="gb-title">Our YouTube Sponsorship Process</h2>
                <p class="gb-subtitle">We use a strict structured workflow to keep your sponsorships professional, timely, and brand-safe.</p>
            </div>

            <div class="gb-process">
                <div class="gb-step">
                    <div class="gb-step-number">1</div>
                    <h3>Goal Setup</h3>
                    <p>Align on target demographics, target views, and landing page CTAs.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">2</div>
                    <h3>Channel Pitching</h3>
                    <p>Pitch vetted YouTube creators with appropriate audience matching.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">3</div>
                    <h3>Briefing & Hooking</h3>
                    <p>Create visual screen-share cues and verbal conversion triggers.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">4</div>
                    <h3>Video Review</h3>
                    <p>Inspect raw video drafts for logo, audio, and brief alignment.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">5</div>
                    <h3>Publish & Pin</h3>
                    <p>Go live, monitor comments, and verify pinned tracking links.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">6</div>
                    <h3>ROI Reporting</h3>
                    <p>Review watch-time analytics, link conversions, and scale.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="gb-pricing-section gb-section-soft" id="yti-pricing">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">YouTube Influencer Pricing</div>
                <h2 class="gb-title">YouTube influencer campaign packages</h2>
                <p class="gb-subtitle">Choose a package based on creator tier, video formats, usage rights and campaign reporting.</p>
            </div>
            <div class="gb-pricing-note">
                <strong>Note:</strong>
                <span>Final quote is confirmed after reviewing niche, subscriber tiers, deliverables and creator fees. Creator payments are typically separate from management.</span>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Lite</span>
                            <h3>YT Creator Lite</h3>
                            <p>Best for testing YouTube creator partnerships.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹14,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Creator research + outreach</li>
                                <li>1 sponsored integration</li>
                                <li>Brief + timeline management</li>
                                <li>Tracking links/codes</li>
                                <li>Campaign recap report</li>
                            </ul>
                            <div class="gb-ideal">Best for testing YouTube creator partnerships.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20YouTube%20Influencer%20Lite%20(%E2%82%B914%2C999%2B)">Ask for Lite Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package gb-featured">
                        <div class="gb-package-head">
                            <span>Growth</span>
                            <h3>YT Creator Growth</h3>
                            <p>Best for product launches on YouTube.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹29,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Multi-creator shortlist</li>
                                <li>Dedicated + integrated videos</li>
                                <li>Content review coordination</li>
                                <li>Performance tracking</li>
                                <li>Optimisation recommendations</li>
                            </ul>
                            <div class="gb-ideal">Best for product launches on YouTube.</div>
                            <a class="gb-btn-main" href="https://wa.me/919919020887?text=I%20want%20YouTube%20Influencer%20Growth%20(%E2%82%B929%2C999%2B)">Get Growth Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Scale</span>
                            <h3>YT Creator Scale</h3>
                            <p>Best for sustained YouTube influence programs.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹54,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Tiered creator portfolio</li>
                                <li>Multi-video campaign waves</li>
                                <li>Whitelisting/ads support</li>
                                <li>Detailed ROI analysis</li>
                                <li>Dedicated campaign lead</li>
                            </ul>
                            <div class="gb-ideal">Best for sustained YouTube influence programs.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20YouTube%20Influencer%20Scale%20(%E2%82%B954%2C999%2B)">Ask for Scale Plan</a>
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
                                <h4>Testing YouTube creators?</h4>
                                <p>Lite runs one focused integration with tracking.</p>
                                <small>Best for: apps, gadgets</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">02</div>
                            <div>
                                <h4>Launch campaign on YouTube?</h4>
                                <p>Growth coordinates multiple creators and formats.</p>
                                <small>Best for: ecommerce, education</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">03</div>
                            <div>
                                <h4>Long-term creator program?</h4>
                                <p>Scale builds portfolio strategy and ad amplification.</p>
                                <small>Best for: D2C, tech brands</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES SECTION -->
    <section class="gb-section gb-section-soft">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Industries We Serve</div>
                <h2 class="gb-title">Industries We Serve with YouTube Influencer Marketing</h2>
                <p class="gb-subtitle">We place sponsored integrations, dedicated videos, and Shorts with creators matched to each vertical — long-form demos for SaaS, tutorials for coaching, and review-style content for D2C and local brands.</p>
            </div>

            <div class="gb-industry-grid" style="margin-top:30px;">
                <?php
                $industries = [
                    ['🏥', 'Healthcare &amp; Clinics', '../industries/healthcare-clinics'],
                    ['🏠', 'Real Estate &amp; Property', '../industries/real-estate'],
                    ['🎓', 'Education &amp; Coaching', '../industries/education-coaching'],
                    ['🛒', 'eCommerce &amp; D2C Brands', '../industries/ecommerce-d2c'],
                    ['🏪', 'Local Businesses', '../industries/local-businesses'],
                    ['💻', 'SaaS &amp; IT Companies', '../industries/saas-it-technology'],
                    ['📞', 'BPO &amp; Service Companies', '../industries/bpo-service-companies'],
                    ['🏦', 'Finance &amp; Insurance', '../industries/finance-insurance'],
                ];
                foreach ($industries as $i) {
                    $href = htmlspecialchars($i[2], ENT_QUOTES, 'UTF-8');
                    echo '<a href="' . $href . '" class="gb-industry">' . $i[0] . ' ' . $i[1] . '</a>';
                }
                ?>
            </div>

            <div class="gb-btn-row center" style="margin-top:36px;">
                <a href="../contact.php?ref=yim-industry-strategy" class="gb-btn gb-btn-primary">Get Industry Strategy →</a>
            </div>
        </div>
    </section>

    <!-- CASE PLAN SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-case">
                <div class="gb-center">
                    <div class="gb-eyebrow">Sample Campaign Plan</div>
                    <h2 class="gb-title">Example: Tech/SaaS Sponsorship Campaign</h2>
                    <p class="gb-subtitle">A highly effective campaign roadmap designed for SaaS software, mobile apps, or technical gadgets.</p>
                </div>

                <div class="gb-case-grid">
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-briefcase"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Business Type</h4>
                            <p>SaaS platform, finance app, EdTech course, lifestyle gadget, or premium accessory.</p>
                        </div>
                    </div>
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-target-lock"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Campaign Goal</h4>
                            <p>Drive product awareness, demonstrate dashboard features, and acquire trial signups.</p>
                        </div>
                    </div>
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-cog"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Campaign Setup</h4>
                            <p>3 dedicated software reviews + 5 YouTube integrations with UTM tracked discount links.</p>
                        </div>
                    </div>
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-bar-chart-alt-2"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Performance Review</h4>
                            <p>Watch-time, comment sentiment, click-through rates, trial signups, and cost-per-acquisition.</p>
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
                <p class="gb-subtitle">Quick answers to help you understand YouTube sponsorships faster.</p>
            </div>

            <div class="gb-faq-wrap">
                <div class="gb-faq-item active">
                    <button class="gb-faq-question" type="button"><span>How long do YouTube videos remain effective?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Unlike Instagram stories or Facebook posts that fade in 24 hours, YouTube videos rank permanently in YouTube and Google search results, generating leads, views, and brand value for years after posting.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>What is the difference between Dedicated Video and Integration?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>A dedicated review video is 100% focused on explaining and demonstrating your product or service. An integration is a 60-90 second sponsored slot placed inside the creator's regular organic video content.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>How do you track ROI from YouTube campaigns?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>We place unique UTM tracking links in the video descriptions and pinned comments, and assign custom discount coupon codes to each individual creator to monitor conversions.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Do you write script briefs for creators?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes. We draft detailed creative briefs highlighting value hooks, screen demonstration guides, required talking points, discount details, and direct CTAs to ensure optimal messaging alignment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA SECTION -->
    <section class="gb-final-cta">
        <div class="gb-container">
            <h2>Ready to Scale Conversions with YouTube Sponsorships?</h2>
            <p>GrowBoostly helps you pitch the right channels, coordinate sponsorship scripts, review video drafts, and track attributed buyer leads.</p>

            <div class="gb-btn-row center">
                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20YouTube%20Influencer%20Marketing%20for%20my%20brand." class="gb-btn gb-btn-primary">Get My YouTube Campaign Plan</a>
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