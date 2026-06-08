<?php
// Page initialized with standard header
// Enable verbose errors for local debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Ensure $base is defined when header isn't included yet
if (!isset($base)) {
    $current_url = $_SERVER['PHP_SELF'] ?? '';
    $is_subdirectory = strpos($current_url, '/services/') !== false;
    $base = $is_subdirectory ? '../' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Performance Tracking Services for Influencer Campaigns | GrowBoostly</title>
<meta name="description" content="GrowBoostly helps brands track influencer marketing performance, campaign ROI, leads, clicks, creator-wise reports, WhatsApp enquiries and conversion insights.">
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
    /* NEW MODERN HERO - Campaign Management style alignment for Performance Tracking */
    :root {
        --cm-primary: #3b82f6;
        --cm-primary-dark: #1d4ed8;
        --cm-blue: #3b82f6;
        --cm-light: #eff6ff;
        --cm-border: #bfdbfe;
        --cm-navy: #0d1b2f;
        --cm-cream: #f8fafc;
        --cm-text: #1f2937;
    }

    .cm-modern-hero { position: relative; padding: 150px 0 100px; background: radial-gradient(120% 120% at 80% 0%, #eff6ff 0%, #ffffff 60%); overflow: hidden; }
    @media (max-width: 991px) {
        .cm-modern-hero { padding: 130px 0 70px; }
    }
    .cm-modern-hero .hero-content { position: relative; z-index: 2; padding-top: 0; }
    .cm-modern-hero h1 { font-size: clamp(40px, 5vw, 64px); font-weight: 900; color: #07111f; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1.5px; }
    .cm-modern-hero h3 { font-size: 22px; font-weight: 600; color: var(--cm-primary-dark); margin-bottom: 24px; line-height: 1.4; }
    .cm-modern-hero p { font-size: 18px; color: #4b5563; line-height: 1.7; margin-bottom: 35px; max-width: 90%; }
    .cm-hero-buttons { display: flex; gap: 15px; align-items: center; flex-wrap: wrap; }
    .cm-btn-primary { background: var(--cm-primary); color: #fff; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 10px 20px rgba(59,130,246,0.2); }
    .cm-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(59,130,246,0.3); color: #fff; background: var(--cm-primary-dark); }
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
    .hero-decor-circle { position: absolute; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(59,130,246,0.05) 0%, rgba(255,255,255,0) 70%); top: -100px; right: -100px; z-index: 1; }

    /* STATS BAR */
    .cm-stats-bar { background: linear-gradient(135deg, #0d1b2f 0%, #1d4ed8 50%, #3b82f6 100%); padding: 50px 0; margin-bottom: 60px; }
    .cm-stats-bar .stat-item { text-align: center; padding: 20px 15px; border-right: 1px solid rgba(255,255,255,.12); }
    .cm-stats-bar .stat-item:last-child { border-right: none; }
    .cm-stats-bar .stat-number { font-size: 44px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; }
    .cm-stats-bar .stat-number span { color: #bfdbfe; }
    .cm-stats-bar .stat-label { font-size: 13px; color: rgba(255,255,255,.75); text-transform: uppercase; letter-spacing: .6px; }

    /* General modern hero tag utility */
    .cm-tag { display: inline-block; background: rgba(59,130,246,.1); color: var(--cm-primary-dark); font-size: 12px; font-weight: 800; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; border: 1px solid rgba(59,130,246,.2); }

    /* Global gb-* styles */
    :root {
        --gb-primary: #3b82f6;
        --gb-primary-dark: #1d4ed8;
        --gb-blue: #3b82f6;
        --gb-dark: #07111f;
        --gb-navy: #0d1b2f;
        --gb-text: #1f2937;
        --gb-muted: #6b7280;
        --gb-light: #eff6ff;
        --gb-white: #ffffff;
        --gb-border: #bfdbfe;
        --gb-shadow: 0 18px 45px rgba(59, 130, 246, 0.08);
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

    /* Centered typography helpers */
    .gb-center { text-align: center; margin-bottom: 48px; }
    .gb-eyebrow { display: inline-block; padding: 6px 16px; border-radius: 99px; background: rgba(59,130,246,.12); color: var(--gb-primary-dark); font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; border: 1px solid rgba(59,130,246,.18); }
    .gb-title { font-size: clamp(30px, 4vw, 44px); font-weight: 900; color: var(--gb-dark); line-height: 1.15; margin: 0 0 16px; letter-spacing: -1px; }
    .gb-subtitle { font-size: 18px; color: var(--gb-muted); max-width: 760px; margin: 0 auto; line-height: 1.6; }

    /* Chips utility */
    .gb-chips { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 30px; }
    .gb-chips span { padding: 8px 16px; border-radius: 99px; background: rgba(255,255,255,.1); border: 1px solid rgba(255,255,255,.18); font-size: 13px; font-weight: 700; color: #fff; }

    /* Grid utilities */
    .gb-grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .gb-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
    .gb-grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; }
    .gb-two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
    .gb-two-col.reverse { direction: rtl; }
    .gb-two-col.reverse > * { direction: ltr; }

    /* Standard Card Elements */
    .gb-card {
        background: var(--gb-white);
        border: 1px solid var(--gb-border);
        border-radius: var(--gb-radius);
        padding: 30px;
        box-shadow: 0 10px 30px rgba(7,17,31,.04);
        transition: all 0.3s ease;
    }
    .gb-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--gb-shadow);
        border-color: var(--gb-primary);
    }
    .gb-card-icon {
        width: 50px;
        height: 50px;
        border-radius: 14px;
        background: rgba(59,130,246,.1);
        color: var(--gb-primary);
        display: grid;
        place-items: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    .gb-card h3 { margin: 0 0 10px; font-size: 20px; font-weight: 800; color: var(--gb-dark); }
    .gb-card p { margin: 0; font-size: 15px; color: var(--gb-muted); line-height: 1.6; }
    .gb-card .gb-learn-more { display: inline-flex; align-items: center; gap: 6px; font-weight: 700; color: var(--gb-primary); font-size: 14px; margin-top: 15px; transition: color 0.2s; }
    .gb-card:hover .gb-learn-more { color: var(--gb-primary-dark); }

    /* Static offset stats cards block */
    .gb-stats-grid { margin-top: -50px; position: relative; z-index: 10; }

    /* Highlight box style */
    .gb-highlight {
        margin-top: 24px;
        padding: 22px;
        border-radius: 18px;
        background: rgba(59,130,246,.08);
        border: 1px solid rgba(59,130,246,.18);
        font-size: 15px;
        color: var(--gb-dark);
    }
    .gb-highlight strong { color: var(--gb-primary-dark); }

    /* Image wrapper */
    .gb-image-box { border-radius: 28px; overflow: hidden; box-shadow: var(--gb-shadow); border: 4px solid #fff; }
    .gb-image-box img { width: 100%; height: auto; object-fit: cover; }

    /* Dark section theme overrides */
    .gb-section-dark {
        background: radial-gradient(circle at 18% 0%, rgba(59,130,246,.15), transparent 30%), linear-gradient(135deg, #07111f, #0d1b2f);
        color: #fff;
    }
    .gb-section-dark .gb-title { color: #fff; }
    .gb-section-dark .gb-subtitle { color: rgba(255,255,255,0.7); }
    .gb-section-dark .gb-card { background: rgba(255,255,255,0.04); border-color: rgba(255,255,255,0.1); box-shadow: none; }
    .gb-section-dark .gb-card h3 { color: #fff; }
    .gb-section-dark .gb-card p { color: rgba(255,255,255,0.7); }
    .gb-section-dark .gb-card-icon { background: rgba(255,255,255,0.1); color: #fff; }

    /* Premium layout features for service cards */
    .gb-card-premium { padding: 0; overflow: hidden; }
    .gb-card-premium .premium-top { padding: 24px; background: linear-gradient(135deg, rgba(59,130,246,.1), rgba(59,130,246,.04)); border-bottom: 1px solid var(--gb-border); }
    .gb-card-premium .premium-badge { display: inline-block; padding: 4px 10px; border-radius: 99px; background: rgba(59,130,246,.12); color: var(--gb-primary-dark); font-size: 11px; font-weight: 800; text-transform: uppercase; margin-bottom: 10px; }
    .gb-card-premium .premium-body { padding: 24px; }
    .gb-card-premium .gb-service-list { list-style: none; padding: 0; margin: 15px 0 20px; }
    .gb-card-premium .gb-service-list li { display: flex; gap: 10px; align-items: flex-start; margin-bottom: 8px; font-size: 14px; color: var(--gb-muted); }
    .gb-card-premium .gb-service-list li::before { content: "\F272"; font-family: "bootstrap-icons"; color: var(--gb-primary); font-weight: 900; font-size: 14px; }
    .gb-card-premium .premium-outcome { background: rgba(59,130,246,0.06); padding: 12px; border-radius: 12px; border: 1.5px dashed var(--gb-border); }
    .gb-card-premium .premium-outcome strong { display: block; font-size: 13px; color: var(--gb-dark); }
    .gb-card-premium .premium-outcome span { font-size: 13px; color: var(--gb-muted); }

    /* Packages Cards styling */
    .gb-pkg-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
    .gb-pkg-card { background: #fff; border: 1.5px solid var(--gb-border); border-radius: 30px; padding: 35px 30px; transition: all 0.3s ease; display: flex; flex-direction: column; }
    .gb-pkg-card:hover { transform: translateY(-6px); box-shadow: var(--gb-shadow); }
    .gb-pkg-card.featured { border: 2.5px solid var(--gb-primary); position: relative; }
    .gb-pkg-card.featured::before { content: 'Recommended'; position: absolute; top: -14px; right: 24px; padding: 4px 14px; border-radius: 99px; background: linear-gradient(135deg, var(--gb-primary) 0%, var(--gb-primary-dark) 100%); color: #fff; font-size: 11px; font-weight: 800; text-transform: uppercase; box-shadow: 0 4px 10px rgba(59,130,246,0.3); }
    .gb-pkg-title { font-size: 22px; font-weight: 800; color: var(--gb-dark); margin: 0 0 10px; }
    .gb-pkg-desc { font-size: 14px; color: var(--gb-muted); margin-bottom: 20px; line-height: 1.5; }
    .gb-pkg-price { font-size: 36px; font-weight: 900; color: var(--gb-dark); line-height: 1.1; margin-bottom: 5px; }
    .gb-pkg-sub { font-size: 13px; color: var(--gb-muted); margin-bottom: 22px; border-bottom: 1.5px solid #f3f4f6; padding-bottom: 22px; }
    .gb-pkg-features { list-style: none; padding: 0; margin: 0 0 25px; flex-grow: 1; }
    .gb-pkg-features li { display: flex; gap: 10px; align-items: flex-start; margin-bottom: 12px; font-size: 14.5px; color: var(--gb-text); }
    .gb-pkg-features li::before { content: '✓'; display: inline-grid; place-items: center; width: 18px; height: 18px; border-radius: 50%; background: rgba(59,130,246,0.1); color: var(--gb-primary); font-size: 11px; font-weight: 900; flex-shrink: 0; }
    .gb-pkg-highlight { padding: 14px; border-radius: 16px; background: rgba(59,130,246,0.06); border: 1px solid rgba(59,130,246,0.15); font-weight: 700; color: var(--gb-dark); font-size: 13.5px; margin-bottom: 24px; text-align: center; }

    /* HOW IT WORKS SECTION */
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
        box-shadow: 0 15px 35px rgba(59, 130, 246, 0.04);
        position: relative;
        transition: all 0.3s ease;
    }
    .gb-step:hover {
        transform: translateY(-8px);
        border-color: var(--cm-primary);
        box-shadow: 0 20px 40px rgba(59, 130, 246, 0.12);
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
        box-shadow: 0 8px 16px rgba(59, 130, 246, 0.25);
        transition: all 0.3s ease;
    }
    .gb-step:hover .gb-step-number {
        transform: rotate(10deg);
        box-shadow: 0 12px 20px rgba(59, 130, 246, 0.4);
    }
    .gb-step h3 { margin: 0 0 12px; color: var(--gb-dark); font-size: 20px; font-weight: 800; }
    .gb-step p { margin: 0; color: var(--gb-muted); font-size: 14.5px; line-height: 1.6; }

    /* Industries grid */
    .gb-industry-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 30px; }
    a.gb-industry {
        display: block;
        text-decoration: none;
        color: inherit;
    }
    .gb-industry { padding: 18px; border-radius: 18px; background: var(--gb-white); border: 1px solid var(--gb-border); font-weight: 900; color: var(--gb-dark); box-shadow: 0 10px 20px rgba(7,17,31,.04); text-align: center; transition: all 0.25s; font-size: 15px; line-height: 1.4; }
    a.gb-industry:hover { transform: translateY(-4px); border-color: var(--cm-primary); box-shadow: 0 14px 28px rgba(59, 130, 246, 0.12); }
    .gb-industries-cta { display: flex; justify-content: center; margin-top: 36px; }

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
        background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
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
        background: rgba(59, 130, 246, 0.16);
        color: #bfdbfe;
        border: 1px solid rgba(59, 130, 246, 0.25);
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
        border-color: rgba(59, 130, 246, 0.3);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }
    .gb-case-icon-box {
        width: 54px;
        height: 54px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(59, 130, 246, 0.05) 100%);
        border: 1px solid rgba(59, 130, 246, 0.25);
        color: #3b82f6;
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

    /* Pricing */
    .gb-pricing-note { max-width: 980px; margin: 0 auto 34px; padding: 18px 22px; border-radius: 24px; background: linear-gradient(135deg, rgba(59,130,246,.08), rgba(191,219,254,.12)); border: 1px solid var(--gb-border); display: flex; gap: 10px; align-items: flex-start; text-align: left; }
    .gb-pricing-note strong { color: var(--gb-dark); font-size: 18px; flex-shrink: 0; }
    .gb-pricing-note span { color: var(--gb-muted); font-size: 15px; line-height: 1.6; }
    .gb-pricing-guide { max-width: 980px; margin: 40px auto 0; text-align: left; }
    .gb-plan-guide-card { position: relative; overflow: hidden; border-radius: 34px; background: #fff; border: 1px solid var(--gb-border); box-shadow: 0 18px 45px rgba(7,17,31,.08); padding: 28px; }
    .gb-plan-guide-card:before { content: ""; position: absolute; inset: 0 0 auto; height: 5px; background: var(--gb-primary); }
    .gb-plan-guide-card h3 { margin: 0 0 8px; color: var(--gb-dark); font-size: 26px; font-weight: 800; }
    .gb-plan-guide-card > p { margin: 0 0 22px; color: var(--gb-muted); }
    .gb-plan-guide-list { display: grid; gap: 14px; }
    .gb-plan-guide-item { display: grid; grid-template-columns: 54px 1fr; gap: 14px; align-items: start; padding: 16px; border-radius: 22px; background: #f8fafc; border: 1px solid #e7ebf3; }
    .gb-plan-guide-num { width: 54px; height: 54px; border-radius: 18px; display: grid; place-items: center; background: rgba(59,130,246,.10); color: var(--gb-primary); font-weight: 900; }
    .gb-plan-guide-item h4 { margin: 0 0 3px; color: var(--gb-dark); font-size: 18px; font-weight: 800; }
    .gb-plan-guide-item p { margin: 0; color: var(--gb-muted); font-size: 14px; line-height: 1.55; }
    .gb-plan-guide-item small { display: inline-flex; margin-top: 9px; padding: 7px 10px; border-radius: 999px; background: #fff; color: var(--gb-primary); font-weight: 900; font-size: 12px; border: 1px solid var(--gb-border); }
    .gb-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 15px 24px; border-radius: 999px; font-weight: 900; border: 1px solid transparent; transition: .25s ease; text-decoration: none; }
    .gb-btn-primary { background: var(--gb-primary); color: #fff; box-shadow: 0 12px 24px rgba(59,130,246,.28); }
    .gb-btn-primary:hover { background: var(--gb-primary-dark); color: #fff; transform: translateY(-2px); }
    .gb-btn-light { border-color: var(--gb-border); background: #fff; color: var(--gb-dark); box-shadow: 0 12px 24px rgba(7,17,31,.06); }
    .gb-btn-light:hover { border-color: var(--gb-primary); color: var(--gb-primary-dark); transform: translateY(-2px); }

    /* FAQ accordion styles */
    .gb-faq-wrap { max-width: 920px; margin: 0 auto; }
    .gb-faq-item { border: 1px solid var(--gb-border); border-radius: 18px; margin-bottom: 14px; overflow: hidden; background: var(--gb-white); }
    .gb-faq-question { width: 100%; border: 0; background: var(--gb-white); padding: 20px 22px; text-align: left; display: flex; justify-content: space-between; align-items: center; gap: 14px; font-weight: 900; color: var(--gb-dark); cursor: pointer; font-size: 16px; }
    .gb-faq-question span:last-child { font-size: 22px; color: var(--gb-primary); transition: transform 0.25s; }
    .gb-faq-answer { display: none; padding: 0 22px 22px; color: var(--gb-muted); font-size: 15px; line-height: 1.6; border-top: 1px solid transparent; }
    .gb-faq-item.active .gb-faq-question span:last-child { transform: rotate(45deg); }
    .gb-faq-item.active .gb-faq-answer { display: block; }

    /* Final CTA styling */
    .gb-final-cta { padding: 100px 0; background: linear-gradient(135deg, #0d1b2f 0%, #1d4ed8 50%, #3b82f6 100%); color: #ffffff !important; text-align: center; position: relative; overflow: hidden; }
    .gb-final-cta h2 { font-size: clamp(32px, 4.5vw, 52px); font-weight: 900; line-height: 1.1; margin: 0 auto 20px; max-width: 860px; letter-spacing: -1.5px; color: #ffffff !important; }
    .gb-final-cta p { font-size: 18px; color: rgba(255,255,255,0.9) !important; max-width: 700px; margin: 0 auto 35px; line-height: 1.65; }
    .gb-final-cta .cm-hero-buttons { justify-content: center; }

    /* RESPONSIVE DESIGN */
    @media (max-width: 980px) {
        .cm-modern-hero .hero-grid { grid-template-columns: 1fr; gap: 40px; }
        .cm-modern-hero { padding: 130px 0 60px; }
        .cm-hero-visual { margin: 0 auto; }
        .gb-two-col { grid-template-columns: 1fr; gap: 40px; }
        .gb-grid-4, .gb-grid-3, .gb-pkg-grid, .gb-process, .gb-industry-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 767px) {
        .gb-pricing-note { display: block; }
        .gb-pricing-note strong { display: block; margin-bottom: 6px; }
        .gb-plan-guide-item { grid-template-columns: 1fr; }
    }
    @media (max-width: 640px) {
        .gb-grid-4, .gb-grid-3, .gb-grid-2, .gb-pkg-grid, .gb-process, .gb-industry-grid, .gb-case-grid { grid-template-columns: 1fr; }
        .cm-stats-bar .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,.12); }
        .cm-stats-bar .stat-item:last-child { border-bottom: none; }
        .cm-stats-bar { padding: 30px 0; }
        .cm-hero-visual .fc-1 { left: -10px; }
        .cm-hero-visual .fc-2 { right: -10px; }
    }
</style>
</head>
<body>
<div class="gb-page">

<?php include '../header.php'; ?>

<!-- HERO SECTION -->
<section class="cm-modern-hero">
    <div class="hero-decor-circle"></div>
    <div class="gb-container">
        <div class="row align-items-center hero-grid">
            <div class="col-lg-6 hero-content">
                <div class="cm-tag">Performance Tracking</div>
                <h1>Track Every Campaign, Creator, Click & Lead Clearly</h1>
                <p>GrowBoostly helps brands measure influencer campaign performance with creator-wise reports, lead tracking, WhatsApp enquiries, website clicks, coupon usage and improvement insights.</p>
                <div class="cm-hero-buttons">
                    <a class="cm-btn-primary" href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Performance%20Tracking%20for%20my%20campaigns.">
                        <i class="bx bxl-whatsapp"></i> Get Tracking Setup
                    </a>
                    <a class="cm-btn-outline" href="tel:+919919020887">
                        Talk to Reporting Expert
                    </a>
                </div>
                <div class="gb-chips">
                    <span>Creator-Wise Reports</span>
                    <span>Lead Source Tracking</span>
                    <span>WhatsApp Enquiries</span>
                    <span>Clicks & Conversions</span>
                    <span>ROI Insights</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cm-hero-visual">
                    <div class="floating-card fc-1">
                        <div class="icon">📈</div>
                        <div>
                            <h4>99.8%</h4>
                            <span>Data Accuracy</span>
                        </div>
                    </div>
                    <div class="floating-card fc-2">
                        <div class="icon">🎯</div>
                        <div>
                            <h4>450+</h4>
                            <span>Campaigns Tracked</span>
                        </div>
                    </div>
                    <img src="../assets/img/tracking_dashboard.png" class="main-img" alt="GrowBoostly campaign tracking dashboard UI">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS BAR -->
<section class="cm-stats-bar">
    <div class="gb-container">
        <div class="row">
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">99.8<span>%</span></div>
                <div class="stat-label">Data Accuracy</div>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">450<span>+</span></div>
                <div class="stat-label">Tracked Campaigns</div>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">10M<span>+</span></div>
                <div class="stat-label">Conversions Logged</div>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">100<span>%</span></div>
                <div class="stat-label">Real-time Reporting</div>
            </div>
        </div>
    </div>
</section>

<!-- CORE STATS/BENEFITS GRID -->
<section class="gb-stats-grid">
    <div class="gb-container">
        <div class="gb-grid-4">
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-bar-chart-alt-2"></i></div>
                <h3>Creator Reports</h3>
                <p>Know which influencer delivered the best reach, engagement, clicks and leads.</p>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-link-alt"></i></div>
                <h3>Click Tracking</h3>
                <p>Track website visits, landing page clicks, WhatsApp clicks and CTA response.</p>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-message-square-detail"></i></div>
                <h3>Lead Tracking</h3>
                <p>Measure enquiries from forms, calls, WhatsApp, coupon codes and landing pages.</p>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-line-chart"></i></div>
                <h3>ROI Insights</h3>
                <p>Understand which campaign format and creator deserve more budget.</p>
            </div>
        </div>
    </div>
</section>

<!-- MEASURE WHAT MATTERS TWO COLUMN -->
<section class="gb-section">
    <div class="gb-container">
        <div class="gb-two-col">
            <div class="gb-image-box">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Performance analytics setup dashboard mockup">
            </div>
            <div>
                <div class="gb-eyebrow">Measure What Matters</div>
                <h2 class="gb-title">Influencer Marketing Should Not Be Judged Only by Likes and Views</h2>
                <p>Likes and views are useful, but they do not show the full business impact. A good campaign should also track traffic, enquiries, lead quality, WhatsApp response, coupon usage and creator-wise performance.</p>
                <p>GrowBoostly helps you connect influencer campaigns with real business metrics, so you can clearly understand what worked, what failed and where to invest next.</p>
                <div class="gb-highlight">
                    <strong>Best for:</strong> influencer campaigns, Instagram reels, YouTube videos, creator collaborations, product launches, app promotions, local campaigns and lead generation campaigns.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GOALS CHOOSE SECTION -->
<section class="gb-section gb-section-soft">
    <div class="gb-container">
        <div class="gb-center">
            <div class="gb-eyebrow">Choose Your Tracking Goal</div>
            <h2 class="gb-title">What Do You Want to Track in Your Campaign?</h2>
            <p class="gb-subtitle">Different campaigns need different tracking systems. GrowBoostly helps you set the right measurement flow before campaign launch.</p>
        </div>
        <div class="gb-grid-4">
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-group"></i></div>
                <h3>Creator Performance</h3>
                <p>Compare creators based on reach, engagement, content response and lead quality.</p>
                <a class="gb-learn-more" href="https://wa.me/919919020887?text=I%20want%20creator-wise%20performance%20tracking">Track Creators <i class="bx bx-right-arrow-alt"></i></a>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-mouse-pointer"></i></div>
                <h3><i class="bx bx-mouse-pointer" style="margin-right:8px; font-size:20px; color:var(--gb-primary);"></i>Traffic & Clicks</h3>
                <p>Track website visits, landing page clicks, UTM links and WhatsApp button clicks.</p>
                <a class="gb-learn-more" href="https://wa.me/919919020887?text=I%20want%20traffic%20and%20click%20tracking">Track Clicks <i class="bx bx-right-arrow-alt"></i></a>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-envelope"></i></div>
                <h3>Leads & Enquiries</h3>
                <p>Measure enquiries from forms, WhatsApp, calls, coupon codes and booking links.</p>
                <a class="gb-learn-more" href="https://wa.me/919919020887?text=I%20want%20lead%20and%20enquiry%20tracking">Track Leads <i class="bx bx-right-arrow-alt"></i></a>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-dollar-circle"></i></div>
                <h3>ROI & Budget</h3>
                <p>Understand cost per lead, campaign value and future budget direction.</p>
                <a class="gb-learn-more" href="https://wa.me/919919020887?text=I%20want%20campaign%20ROI%20tracking">Track ROI <i class="bx bx-right-arrow-alt"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- WHY GROWBOOSTLY (DARK GRID) -->
<section class="gb-section gb-section-dark">
    <div class="gb-container">
        <div class="gb-center">
            <div class="gb-eyebrow">Why GrowBoostly</div>
            <h2 class="gb-title">We Turn Campaign Data Into Clear Business Decisions</h2>
            <p class="gb-subtitle">Most campaigns collect screenshots and basic numbers. GrowBoostly turns campaign metrics into practical insights that help you improve leads, content and creator selection.</p>
        </div>
        <div class="gb-grid-4">
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-compass"></i></div>
                <h3>Tracking Setup</h3>
                <p>We define what should be measured before the campaign goes live.</p>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-receipt"></i></div>
                <h3>Clean Reporting</h3>
                <p>We organize results in a simple format that business owners can understand.</p>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-target-lock"></i></div>
                <h3>Lead Quality Review</h3>
                <p>We help identify which source brings better enquiries and customers.</p>
            </div>
            <div class="gb-card">
                <div class="gb-card-icon"><i class="bx bx-rocket"></i></div>
                <h3>Scaling Direction</h3>
                <p>We suggest which creators, platforms and content formats to repeat.</p>
            </div>
        </div>
    </div>
</section>

<!-- PERFORMANCE TRACKING SERVICES -->
<section class="gb-section">
    <div class="gb-container">
        <div class="gb-center">
            <div class="gb-eyebrow">Our Services</div>
            <h2 class="gb-title">Performance Tracking Services</h2>
            <p class="gb-subtitle">GrowBoostly helps you track influencer and creator campaigns from visibility to lead generation and improvement planning.</p>
        </div>
        <div class="gb-grid-3">
            <div class="gb-card gb-card-premium">
                <div class="premium-top">
                    <span class="premium-badge">01 · Creator Analysis</span>
                    <h3>Creator-Wise Reporting</h3>
                    <p>Compare each influencer based on performance, audience response and lead contribution.</p>
                </div>
                <div class="premium-body">
                    <ul class="gb-service-list">
                        <li>Reach and engagement report</li>
                        <li>Creator-wise clicks and enquiries</li>
                        <li>Best-performing creator identification</li>
                    </ul>
                    <div class="premium-outcome">
                        <strong>Outcome:</strong>
                        <span>You know which creators should be repeated.</span>
                    </div>
                </div>
            </div>
            <div class="gb-card gb-card-premium">
                <div class="premium-top">
                    <span class="premium-badge">02 · Link Tracking</span>
                    <h3>UTM & Click Tracking</h3>
                    <p>Track where traffic is coming from and which campaign links are working.</p>
                </div>
                <div class="premium-body">
                    <ul class="gb-service-list">
                        <li>UTM link setup</li>
                        <li>Website and landing page clicks</li>
                        <li>WhatsApp button click tracking</li>
                    </ul>
                    <div class="premium-outcome">
                        <strong>Outcome:</strong>
                        <span>You understand which platform is sending real traffic.</span>
                    </div>
                </div>
            </div>
            <div class="gb-card gb-card-premium">
                <div class="premium-top">
                    <span class="premium-badge">03 · Lead Tracking</span>
                    <h3>Enquiry & Lead Source Tracking</h3>
                    <p>Connect campaign response with WhatsApp, forms, phone calls and lead sheets.</p>
                </div>
                <div class="premium-body">
                    <ul class="gb-service-list">
                        <li>WhatsApp enquiry tracking</li>
                        <li>Lead form source tracking</li>
                        <li>Call and coupon response review</li>
                    </ul>
                    <div class="premium-outcome">
                        <strong>Outcome:</strong>
                        <span>You see which campaigns generate actual enquiries.</span>
                    </div>
                </div>
            </div>
            <div class="gb-card gb-card-premium">
                <div class="premium-top">
                    <span class="premium-badge">04 · Conversion Review</span>
                    <h3>Landing Page Performance</h3>
                    <p>Track how users behave after they click from an influencer or creator campaign.</p>
                </div>
                <div class="premium-body">
                    <ul class="gb-service-list">
                        <li>Landing page visit tracking</li>
                        <li>CTA click analysis</li>
                        <li>Conversion flow improvement</li>
                    </ul>
                    <div class="premium-outcome">
                        <strong>Outcome:</strong>
                        <span>You can improve landing pages for better conversion.</span>
                    </div>
                </div>
            </div>
            <div class="gb-card gb-card-premium">
                <div class="premium-top">
                    <span class="premium-badge">05 · ROI Clarity</span>
                    <h3>Cost & ROI Analysis</h3>
                    <p>Review campaign spend against results to understand cost per lead and value.</p>
                </div>
                <div class="premium-body">
                    <ul class="gb-service-list">
                        <li>Cost per click review</li>
                        <li>Cost per lead analysis</li>
                        <li>Campaign value comparison</li>
                    </ul>
                    <div class="premium-outcome">
                        <strong>Outcome:</strong>
                        <span>You know where to invest your next campaign budget.</span>
                    </div>
                </div>
            </div>
            <div class="gb-card gb-card-premium">
                <div class="premium-top">
                    <span class="premium-badge">06 · Improvement</span>
                    <h3>Campaign Insight Report</h3>
                    <p>Get practical recommendations for next campaign strategy, content and creator selection.</p>
                </div>
                <div class="premium-body">
                    <ul class="gb-service-list">
                        <li>What worked and what failed</li>
                        <li>Content format recommendations</li>
                        <li>Next campaign action plan</li>
                    </ul>
                    <div class="premium-outcome">
                        <strong>Outcome:</strong>
                        <span>Your next campaign becomes smarter and stronger.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRACKING OPTIONS PACKAGES -->
<section class="gb-section gb-section-dark">
    <div class="gb-container">
        <div class="gb-center">
            <div class="gb-eyebrow">Tracking Options</div>
            <h2 class="gb-title">Performance Tracking Options for Different Campaign Levels</h2>
            <p class="gb-subtitle">Choose a tracking system based on campaign size, platforms and business goals.</p>
        </div>
        <div class="gb-pkg-grid">
            <div class="gb-pkg-card">
                <h3 class="gb-pkg-title">Basic Campaign Report</h3>
                <p class="gb-pkg-desc">Best for small campaigns that need simple performance clarity.</p>
                <div class="gb-pkg-price">Basic</div>
                <div class="gb-pkg-sub">Simple creator and campaign report</div>
                <ul class="gb-pkg-features">
                    <li>Reach and engagement summary</li>
                    <li>Clicks and enquiries review</li>
                    <li>Creator-wise basic report</li>
                    <li>Improvement notes</li>
                </ul>
                <div class="gb-pkg-highlight">Best when you want quick campaign clarity.</div>
                <a class="cm-btn-outline mt-auto w-100 text-center" href="https://wa.me/919919020887?text=I%20want%20Basic%20Campaign%20Performance%20Report">Ask for Basic Report</a>
            </div>
            <div class="gb-pkg-card featured">
                <h3 class="gb-pkg-title">Growth Tracking System</h3>
                <p class="gb-pkg-desc">Best for lead-focused campaigns across Instagram, YouTube and creators.</p>
                <div class="gb-pkg-price">Growth</div>
                <div class="gb-pkg-sub">Links + leads + creator-wise tracking</div>
                <ul class="gb-pkg-features">
                    <li>UTM and campaign link setup</li>
                    <li>WhatsApp/form lead tracking</li>
                    <li>Creator-wise performance report</li>
                    <li>Cost and response analysis</li>
                </ul>
                <div class="gb-pkg-highlight">Best when you want leads, tracking and decision-ready reports.</div>
                <a class="cm-btn-primary mt-auto w-100 text-center justify-content-center" href="https://wa.me/919919020887?text=I%20want%20Growth%20Performance%20Tracking%20System">Get Growth Tracking</a>
            </div>
            <div class="gb-pkg-card">
                <h3 class="gb-pkg-title">Advanced ROI Dashboard</h3>
                <p class="gb-pkg-desc">Best for brands running multiple campaigns and needing deeper reporting.</p>
                <div class="gb-pkg-price">Advanced</div>
                <div class="gb-pkg-sub">Multi-platform tracking and ROI insights</div>
                <ul class="gb-pkg-features">
                    <li>Multi-creator campaign dashboard</li>
                    <li>Landing page and CTA analysis</li>
                    <li>Cost per lead and ROI review</li>
                    <li>Scaling and optimization plan</li>
                </ul>
                <div class="gb-pkg-highlight">Best when you want a serious performance marketing view.</div>
                <a class="cm-btn-outline mt-auto w-100 text-center" href="https://wa.me/919919020887?text=I%20want%20Advanced%20ROI%20Dashboard%20for%20campaigns">Plan Advanced Tracking</a>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS PROCESS SECTION (REDESIGNED) -->
<section class="gb-section">
    <div class="gb-container">
        <div class="gb-center">
            <div class="gb-eyebrow">How It Works</div>
            <h2 class="gb-title">Our Campaign Tracking Process</h2>
            <p class="gb-subtitle">A clean process helps your campaign data become useful for business decisions.</p>
        </div>
        <div class="gb-process">
            <div class="gb-step">
                <div class="gb-step-number">1</div>
                <h3>Define Goals</h3>
                <p>Set what should be tracked: awareness, clicks, leads, sales or ROI.</p>
            </div>
            <div class="gb-step">
                <div class="gb-step-number">2</div>
                <h3>Setup Tracking</h3>
                <p>Create campaign links, WhatsApp flow, forms, coupon codes or lead sheets.</p>
            </div>
            <div class="gb-step">
                <div class="gb-step-number">3</div>
                <h3>Collect Data</h3>
                <p>Gather platform metrics, creator insights, clicks, leads and response data.</p>
            </div>
            <div class="gb-step">
                <div class="gb-step-number">4</div>
                <h3>Analyze Results</h3>
                <p>Compare creators, platforms, content formats and lead quality.</p>
            </div>
            <div class="gb-step">
                <div class="gb-step-number">5</div>
                <h3>Prepare Report</h3>
                <p>Create simple business-friendly reports with clear numbers and insights.</p>
            </div>
            <div class="gb-step">
                <div class="gb-step-number">6</div>
                <h3>Improve Next</h3>
                <p>Recommend what to repeat, stop, improve and scale.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRICING -->
<section class="gb-section gb-section-soft" id="pt-pricing">
    <div class="gb-container">
        <div class="gb-center">
            <div class="gb-eyebrow">Performance Tracking Pricing</div>
            <h2 class="gb-title">Tracking plans for campaigns, creators and ROI clarity</h2>
            <p class="gb-subtitle">Choose a package based on campaign volume, platforms tracked, lead attribution depth and reporting frequency.</p>
        </div>
        <div class="gb-pricing-note">
            <strong>Note:</strong>
            <span>Final quote is confirmed after reviewing campaign scale, number of creators, tracking tools needed, dashboard complexity and reporting cadence. Third-party analytics subscriptions are billed separately.</span>
        </div>
        <div class="gb-pkg-grid">
            <div class="gb-pkg-card">
                <h3 class="gb-pkg-title">Basic Tracking</h3>
                <p class="gb-pkg-desc">Best for small campaigns that need simple performance clarity.</p>
                <div class="gb-pkg-price">₹7,999+</div>
                <div class="gb-pkg-sub">setup fee</div>
                <ul class="gb-pkg-features">
                    <li>Reach and engagement summary</li>
                    <li>Clicks and enquiries review</li>
                    <li>Creator-wise basic report</li>
                    <li>UTM link setup guidance</li>
                    <li>Improvement notes</li>
                </ul>
                <div class="gb-pkg-highlight">Best when you want quick campaign clarity.</div>
                <a class="gb-btn gb-btn-light w-100" href="https://wa.me/919919020887?text=I%20want%20Basic%20Performance%20Tracking%20(%E2%82%B97%2C999%2B)">Ask for Basic Plan</a>
            </div>
            <div class="gb-pkg-card featured">
                <h3 class="gb-pkg-title">Pro Tracking</h3>
                <p class="gb-pkg-desc">Best for lead-focused campaigns across Instagram, YouTube and creators.</p>
                <div class="gb-pkg-price">₹14,999+</div>
                <div class="gb-pkg-sub">per month</div>
                <ul class="gb-pkg-features">
                    <li>UTM and campaign link setup</li>
                    <li>WhatsApp and form lead tracking</li>
                    <li>Creator-wise performance report</li>
                    <li>Cost and response analysis</li>
                    <li>Monthly optimisation review</li>
                </ul>
                <div class="gb-pkg-highlight">Best when you want leads, tracking and decision-ready reports.</div>
                <a class="gb-btn gb-btn-primary w-100" href="https://wa.me/919919020887?text=I%20want%20Pro%20Performance%20Tracking%20(%E2%82%B914%2C999%2B%2Fmonth)">Get Pro Plan</a>
            </div>
            <div class="gb-pkg-card">
                <h3 class="gb-pkg-title">Advanced Tracking</h3>
                <p class="gb-pkg-desc">Best for brands running multiple campaigns and needing deeper reporting.</p>
                <div class="gb-pkg-price">₹29,999+</div>
                <div class="gb-pkg-sub">per month</div>
                <ul class="gb-pkg-features">
                    <li>Multi-creator campaign dashboard</li>
                    <li>Landing page and CTA analysis</li>
                    <li>Cost per lead and ROI review</li>
                    <li>Cross-platform attribution</li>
                    <li>Scaling and optimisation plan</li>
                </ul>
                <div class="gb-pkg-highlight">Best when you want a serious performance marketing view.</div>
                <a class="gb-btn gb-btn-light w-100" href="https://wa.me/919919020887?text=I%20want%20Advanced%20Performance%20Tracking%20(%E2%82%B929%2C999%2B%2Fmonth)">Plan Advanced Tracking</a>
            </div>
        </div>
        <div class="gb-pricing-guide">
            <div class="gb-plan-guide-card">
                <h3>Which tracking plan should you choose?</h3>
                <p>A quick guide to help you pick the right performance tracking package without over- or under-investing.</p>
                <div class="gb-plan-guide-list">
                    <div class="gb-plan-guide-item">
                        <div class="gb-plan-guide-num">01</div>
                        <div>
                            <h4>Just need a clear post-campaign report?</h4>
                            <p>Basic Tracking covers reach, clicks and creator-wise summaries so you know what worked.</p>
                            <small>Best for: one-off campaigns, small budgets</small>
                        </div>
                    </div>
                    <div class="gb-plan-guide-item">
                        <div class="gb-plan-guide-num">02</div>
                        <div>
                            <h4>Want leads and attribution tracked monthly?</h4>
                            <p>Pro Tracking adds UTM setup, WhatsApp lead tracking and ongoing reporting for growth campaigns.</p>
                            <small>Best for: influencer campaigns, D2C, agencies</small>
                        </div>
                    </div>
                    <div class="gb-plan-guide-item">
                        <div class="gb-plan-guide-num">03</div>
                        <div>
                            <h4>Running multiple creators and platforms?</h4>
                            <p>Advanced Tracking builds ROI dashboards, cross-platform attribution and scaling recommendations.</p>
                            <small>Best for: multi-campaign brands, performance teams</small>
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
            <h2 class="gb-title">Industries We Serve with Performance Tracking</h2>
            <p class="gb-subtitle">We set up creator-wise reports, UTM tracking, lead attribution, and ROI dashboards per vertical — so you see which campaigns, platforms, and influencers actually drive bookings and revenue.</p>
        </div>
        <div class="gb-industry-grid">
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
        <div class="gb-industries-cta">
            <a class="cm-btn-primary" href="../contact.php?ref=pt-industry-strategy">Get Industry Strategy →</a>
        </div>
    </div>
</section>

<!-- SAMPLE REPORT ROADMAP / CASE SECTION (REDESIGNED) -->
<section class="gb-section">
    <div class="gb-container">
        <div class="gb-case">
            <div class="gb-center">
                <div class="gb-eyebrow">Sample Tracking Report</div>
                <h2 class="gb-title">Example: Influencer Campaign Performance Tracking</h2>
                <p class="gb-subtitle">A practical report model for a campaign with multiple creators and lead sources.</p>
            </div>

            <div class="gb-case-grid">
                <div class="gb-case-item">
                    <div class="gb-case-icon-box">
                        <i class="bx bx-briefcase"></i>
                    </div>
                    <div class="gb-case-content">
                        <h4>Campaign Setup</h4>
                        <p>5 creators, reels/stories, landing page, WhatsApp link and source-wise tracking.</p>
                    </div>
                </div>
                <div class="gb-case-item">
                    <div class="gb-case-icon-box">
                        <i class="bx bx-target-lock"></i>
                    </div>
                    <div class="gb-case-content">
                        <h4>Metrics Tracked</h4>
                        <p>Reach, engagement, story clicks, landing visits, WhatsApp enquiries and form leads.</p>
                    </div>
                </div>
                <div class="gb-case-item">
                    <div class="gb-case-icon-box">
                        <i class="bx bx-cog"></i>
                    </div>
                    <div class="gb-case-content">
                        <h4>Report Output</h4>
                        <p>Creator-wise performance, lead quality, best CTA, best content format and cost review.</p>
                    </div>
                </div>
                <div class="gb-case-item">
                    <div class="gb-case-icon-box">
                        <i class="bx bx-bar-chart-alt-2"></i>
                    </div>
                    <div class="gb-case-content">
                        <h4>Next Action</h4>
                        <p>Repeat best creators, improve weak CTA, retarget warm traffic and scale high-quality lead source.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="gb-section gb-section-soft">
    <div class="gb-container">
        <div class="gb-center">
            <div class="gb-eyebrow">FAQ</div>
            <h2 class="gb-title">Frequently Asked Questions</h2>
            <p class="gb-subtitle">Answers that help businesses understand campaign tracking clearly.</p>
        </div>
        <div class="gb-faq-wrap">
            <div class="gb-faq-item active">
                <button class="gb-faq-question">
                    <span>What is performance tracking in influencer marketing?</span>
                    <span class="bx bx-plus"></span>
                </button>
                <div class="gb-faq-answer">
                    <p>It means measuring campaign results such as reach, engagement, clicks, leads, WhatsApp enquiries, coupon usage, creator-wise response and overall campaign value.</p>
                </div>
            </div>
            <div class="gb-faq-item">
                <button class="gb-faq-question">
                    <span>Can you track WhatsApp enquiries?</span>
                    <span class="bx bx-plus"></span>
                </button>
                <div class="gb-faq-answer">
                    <p>Yes. We can create campaign-specific WhatsApp links and track enquiry sources using links, lead sheets or campaign labels.</p>
                </div>
            </div>
            <div class="gb-faq-item">
                <button class="gb-faq-question">
                    <span>Can you compare different creators?</span>
                    <span class="bx bx-plus"></span>
                </button>
                <div class="gb-faq-answer">
                    <p>Yes. We can compare creators based on reach, engagement, clicks, enquiries, lead quality and campaign cost.</p>
                </div>
            </div>
            <div class="gb-faq-item">
                <button class="gb-faq-question">
                    <span>Do you provide reports after campaign completion?</span>
                    <span class="bx bx-plus"></span>
                </button>
                <div class="gb-faq-answer">
                    <p>Yes. GrowBoostly can provide clear campaign reports with metrics, insights and next-step recommendations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FINAL CTA -->
<section class="gb-final-cta">
    <div class="gb-container">
        <h2>Ready to Track Your Campaign Results Like a Professional Brand?</h2>
        <p>GrowBoostly can help you track creator campaigns, leads, clicks, WhatsApp enquiries and ROI insights so your next campaign becomes smarter.</p>
        <div class="cm-hero-buttons">
            <a class="cm-btn-primary" href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Performance%20Tracking%20for%20my%20campaigns.">
                <i class="bx bxl-whatsapp"></i> Get Performance Tracking Setup
            </a>
            <a class="cm-btn-outline" href="tel:+919919020887">
                Call / WhatsApp Now
            </a>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.gb-faq-item');
    faqItems.forEach(function(item) {
        const questionBtn = item.querySelector('.gb-faq-question');
        questionBtn.addEventListener('click', function() {
            // Close other items
            faqItems.forEach(function(otherItem) {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>
</body>
</html>