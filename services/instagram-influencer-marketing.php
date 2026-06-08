<?php
// Page initialized with standard header
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Instagram Influencer Marketing Agency in India | GrowBoostly</title>
<meta name="description" content="Partner with top Indian Instagram influencers, lifestyle creators, fashion bloggers, and niche reels creators. GrowBoostly manages campaign briefs, reels, stories, and carousel ads that drive engagement and sales.">
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
    /* NEW MODERN HERO - Campaign Management style alignment for Instagram */
    :root {
        --cm-primary: #e1306c;
        --cm-primary-dark: #c13584;
        --cm-blue: #3b82f6;
        --cm-light: #fff0f5;
        --cm-border: #fbcfe8;
        --cm-navy: #0d1b2f;
        --cm-cream: #fff5f7;
        --cm-text: #1f2937;
    }

    .cm-modern-hero { position: relative; padding: 150px 0 100px; background: radial-gradient(120% 120% at 80% 0%, #fff5f7 0%, #ffffff 60%); overflow: hidden; }
    @media (max-width: 991px) {
        .cm-modern-hero { padding: 130px 0 70px; }
    }
    .cm-modern-hero .hero-content { position: relative; z-index: 2; padding-top: 0; }
    .cm-modern-hero h1 { font-size: clamp(40px, 5vw, 64px); font-weight: 900; color: #07111f; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1.5px; }
    .cm-modern-hero h3 { font-size: 22px; font-weight: 600; color: var(--cm-primary-dark); margin-bottom: 24px; line-height: 1.4; }
    .cm-modern-hero p { font-size: 18px; color: #4b5563; line-height: 1.7; margin-bottom: 35px; max-width: 90%; }
    .cm-hero-buttons { display: flex; gap: 15px; align-items: center; flex-wrap: wrap; }
    .cm-btn-primary { background: var(--cm-primary); color: #fff; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 10px 20px rgba(225,48,108,0.2); }
    .cm-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(225,48,108,0.3); color: #fff; background: var(--cm-primary-dark); }
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
    .hero-decor-circle { position: absolute; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(225,48,108,0.05) 0%, rgba(255,255,255,0) 70%); top: -100px; right: -100px; z-index: 1; }

    /* STATS BAR */
    .cm-stats-bar { background: linear-gradient(135deg, #0d1b2f 0%, #c13584 50%, #e1306c 100%); padding: 50px 0; margin-bottom: 60px; }
    .cm-stats-bar .stat-item { text-align: center; padding: 20px 15px; border-right: 1px solid rgba(255,255,255,.12); }
    .cm-stats-bar .stat-item:last-child { border-right: none; }
    .cm-stats-bar .stat-number { font-size: 44px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; }
    .cm-stats-bar .stat-number span { color: #fbcfe8; }
    .cm-stats-bar .stat-label { font-size: 13px; color: rgba(255,255,255,.75); text-transform: uppercase; letter-spacing: .6px; }

    /* General modern hero tag utility */
    .cm-tag { display: inline-block; background: rgba(225,48,108,.1); color: var(--cm-primary-dark); font-size: 12px; font-weight: 800; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; border: 1px solid rgba(225,48,108,.2); }

    /* Global gb-* styles */
    :root {
        --gb-primary: #e1306c;
        --gb-primary-dark: #c13584;
        --gb-blue: #3b82f6;
        --gb-dark: #07111f;
        --gb-navy: #0d1b2f;
        --gb-text: #1f2937;
        --gb-muted: #6b7280;
        --gb-light: #fff0f5;
        --gb-white: #ffffff;
        --gb-border: #fbcfe8;
        --gb-shadow: 0 18px 45px rgba(225, 48, 108, 0.08);
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
    .gb-eyebrow { display: inline-block; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; color: var(--gb-primary-dark); background: rgba(225,48,108,.08); padding: 6px 16px; border-radius: 30px; margin-bottom: 15px; }
    .gb-eyebrow.dark {
        color: #fbcfe8;
        background: rgba(225,48,108,.16);
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
        background: rgba(225,48,108,.09);
        border: 1px solid rgba(225,48,108,.22);
    }
    .gb-highlight strong { color: var(--gb-dark); }

    .gb-dark-section {
        background:
            radial-gradient(circle at 20% 0%, rgba(225,48,108,.16), transparent 28%),
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
        background: rgba(225,48,108,.1);
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
        box-shadow: 0 15px 35px rgba(225, 48, 108, 0.04);
        position: relative;
        transition: all 0.3s ease;
    }
    .gb-step:hover {
        transform: translateY(-8px);
        border-color: var(--cm-primary);
        box-shadow: 0 20px 40px rgba(225, 48, 108, 0.12);
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
        box-shadow: 0 8px 16px rgba(225, 48, 108, 0.25);
        transition: all 0.3s ease;
    }
    .gb-step:hover .gb-step-number {
        transform: rotate(10deg);
        box-shadow: 0 12px 20px rgba(225, 48, 108, 0.4);
    }
    .gb-step h3 { margin: 0 0 12px; color: var(--gb-dark); font-size: 20px; font-weight: 800; }
    .gb-step p { margin: 0; color: var(--gb-muted); font-size: 14.5px; line-height: 1.6; }

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
        background: linear-gradient(135deg, rgba(225, 48, 108, 0.12), rgba(59, 130, 246, 0.04));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .gb-industry:hover {
        transform: translateY(-5px);
        border-color: rgba(225, 48, 108, 0.4);
        box-shadow: 0 12px 30px rgba(225, 48, 108, 0.15);
    }

    .gb-industry:hover::before {
        opacity: 1;
    }

    .gb-industry .ind-icon-wrap {
        width: 50px;
        height: 50px;
        border-radius: 14px;
        background: rgba(225, 48, 108, 0.12);
        color: #e1306c;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
        border: 1.5px solid rgba(225, 48, 108, 0.2);
        position: relative;
        z-index: 2;
        transition: all 0.3s ease;
    }

    .gb-industry:hover .ind-icon-wrap {
        background: #e1306c;
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
        background: radial-gradient(circle, rgba(225, 48, 108, 0.08) 0%, transparent 70%);
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
        background: rgba(225, 48, 108, 0.16);
        color: #fca5a5;
        border: 1px solid rgba(225, 48, 108, 0.25);
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
        border-color: rgba(225, 48, 108, 0.3);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }
    .gb-case-icon-box {
        width: 54px;
        height: 54px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, rgba(225, 48, 108, 0.2) 0%, rgba(225, 48, 108, 0.05) 100%);
        border: 1px solid rgba(225, 48, 108, 0.25);
        color: #e1306c;
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

    .gb-final-cta { padding: 100px 0; background: linear-gradient(135deg, #0d1b2f 0%, #c13584 50%, #e1306c 100%); color: #ffffff !important; text-align: center; position: relative; overflow: hidden; }
    .gb-final-cta h2 { margin: 0 auto 18px; max-width: 820px; font-size: clamp(32px, 4vw, 52px); line-height: 1.1; color: #ffffff !important; font-weight: 900; }
    .gb-final-cta p { max-width: 780px; margin: 0 auto 40px; color: rgba(255,255,255,.9) !important; font-size: 18px; line-height: 1.7; }
    .gb-contact-line { margin-top: 22px; font-weight: 900; color: #fbcfe8; }

    /* Package / Pricing premium styles */
    .gb-pkg-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
    .gb-pkg-card { background: var(--gb-white); border: 1px solid var(--gb-border); border-radius: var(--gb-radius); padding: 0; position: relative; overflow: hidden; transition: .25s ease; box-shadow: 0 14px 34px rgba(7,17,31,.08); }
    .gb-pkg-card:hover { transform: translateY(-5px); box-shadow: var(--gb-shadow); }
    .gb-pkg-card.featured { border: 2px solid rgba(225, 48, 108, 0.35); }
    .gb-pkg-card.featured .gb-pkg-header { padding-top: 52px; }
    .gb-pkg-card.featured::before { content: 'Best for ROI'; position: absolute; right: 20px; top: 16px; padding: 5px 12px; border-radius: 999px; background: linear-gradient(135deg, #e1306c, #3b82f6); color: #fff; font-size: 11px; font-weight: 900; z-index: 2; }
    .gb-pkg-header { padding: 26px; background: linear-gradient(135deg, rgba(225, 48, 108, 0.1), rgba(124,58,237,.05)); }
    .gb-pkg-header h3 { margin: 0 0 6px; font-size: 20px; color: var(--gb-dark); }
    .gb-pkg-header p { margin: 0; font-size: 14px; color: var(--gb-muted); }
    .gb-pkg-body { padding: 24px 26px 26px; }
    .gb-pkg-price { font-size: 32px; font-weight: 900; color: var(--gb-dark); margin-bottom: 4px; }
    .gb-pkg-sub { font-size: 13px; color: var(--gb-muted); margin-bottom: 20px; }
    .gb-pkg-body ul { padding-left: 20px; margin: 18px 0; color: var(--gb-muted); }
    .gb-pkg-body li { margin: 8px 0; font-size: 15px; }
    .gb-pkg-result { margin: 18px 0; padding: 14px; border-radius: 16px; background: rgba(225, 48, 108, 0.06); border: 1px solid rgba(225, 48, 108, 0.12); font-weight: 800; color: var(--cm-primary-dark); font-size: 14px; }

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
        box-shadow: 0 12px 24px rgba(225,48,108,.28);
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
        background: var(--white);
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
                        <span class="cm-tag mb-3">Instagram Reels & Stories</span>
                        <h1>Drive High-Impact Sales with Instagram Influencers</h1>
                        <h3>Reach engaged buyers through high-impact Reels, interactive Stories, and product integrations.</h3>
                        <p>GrowBoostly helps brands partner with India's top fashion, beauty, tech, lifestyle, and fitness creators for conversion-driven influencer campaigns.</p>
                        <div class="cm-hero-buttons">
                            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Instagram%20Influencer%20Marketing%20for%20my%20brand." class="cm-btn-primary">Plan Instagram Campaign →</a>
                            <a href="tel:+919919020887" class="cm-btn-outline">Talk to Instagram Expert</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cm-hero-visual">
                        <div class="floating-card fc-1">
                            <span class="icon">✨</span>
                            <div>
                                <h4>+320%</h4>
                                <span>Audience Engagement</span>
                            </div>
                        </div>
                        <img src="../assets/img/instagram_dashboard.png" alt="Instagram Influencer Marketing" class="main-img">
                        <div class="floating-card fc-2">
                            <span class="icon">📊</span>
                            <div>
                                <h4>4.6x</h4>
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
                        <div class="stat-number">800<span>+</span></div>
                        <div class="stat-label">Vetted Reels & Story Creators</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">40M<span>+</span></div>
                        <div class="stat-label">Combined Monthly Reach</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">3.8x</div>
                        <div class="stat-label">Average Campaign ROI</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">100<span>%</span></div>
                        <div class="stat-label">Brand-Safe Ad Integrations</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WHY PARTNERSHIPS WORK SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-two-col">
                <div class="gb-image-box">
                    <img src="https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?auto=format&fit=crop&w=1100&q=80" alt="Instagram app interface screen">
                </div>
                <div>
                    <div class="gb-eyebrow">Instagram Reels & Stories</div>
                    <h2 class="gb-title">Instagram Reels Drive Viral Product Discovery</h2>
                    <p>Unlike traditional static posts, Instagram Reels and interactive Stories create high-trust organic connections. With short-form video content dominating user attention, creative product showcases and lifestyle integrations drive immediate brand interest.</p>
                    <p>For brands targeting the Indian retail, lifestyle, beauty, and D2C spaces, Instagram collaborations provide visual proof, aesthetic appeal, and community engagement that traditional advertising cannot replicate.</p>
                    <div class="gb-highlight">
                        <strong>Best for:</strong> Fashion & Apparel, Beauty & Cosmetics, D2C Brands, Food & Beverages, Travel & Tourism, Fitness & Wellness, and Mobile Apps.
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
                <h2 class="gb-title">Instagram Campaign Formats</h2>
                <p class="gb-subtitle">Select the format that fits your conversion funnel. GrowBoostly handles creator communications, contracts, and quality control.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">📱</div>
                    <h3>Reels Product Showcases</h3>
                    <p>Get viral, high-energy 30-60 second Reels detailing product benefits and aesthetic lifestyle demos.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20Instagram%20Reels%20Product%20Showcases" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Plan Reels →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">🔗</div>
                    <h3>Interactive Stories</h3>
                    <p>Drive direct traffic with swipe-up/sticker links, countdowns, and Q&A product stickers.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20Instagram%20Interactive%20Stories" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Sponsor Stories →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">🎨</div>
                    <h3>Aesthetic Carousels</h3>
                    <p>Detail product features, swatches, ingredients, or step-by-step guides with swipeable slides.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20Instagram%20Aesthetic%20Carousels" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Get Carousels →</a>
                </div>

                <div class="gb-card text-center" style="position: relative; overflow: hidden; border-top: 4px solid var(--gb-primary);">
                    <div class="gb-icon" style="margin: 0 auto 15px;">🤝</div>
                    <h3>Co-Authored Collab Posts</h3>
                    <p>Boost organic reach by co-publishing posts directly to both the creator and brand feeds.</p>
                    <a href="https://wa.me/919919020887?text=I%20want%20Instagram%20Co-Authored%20Collab%20Posts" style="margin-top: 18px; display: inline-flex; font-weight: 900; color: var(--gb-primary-dark);">Create Collab →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY GROWBOOSTLY SECTION -->
    <section class="gb-section gb-dark-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow dark">Why GrowBoostly</div>
                <h2 class="gb-title gb-title-light">End-to-End Instagram Campaigns</h2>
                <p class="gb-subtitle gb-text-light">We manage creator selection, custom script/vibe briefs, link tagging, draft approvals, and ROI reporting.</p>
            </div>

            <div class="gb-grid-4">
                <div class="gb-card">
                    <div class="gb-icon">🎯</div>
                    <h3>Niche Matching</h3>
                    <p>We screen creators for authentic engagement, follower audits, location, and brand fit.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">📝</div>
                    <h3>Aesthetic Briefs</h3>
                    <p>We outline visual styles, hook guidelines, trending audios, and exact call-to-actions.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">🔁</div>
                    <h3>Quality Assurance</h3>
                    <p>We inspect every draft reel to ensure high lighting, crisp sound, and brief compliance.</p>
                </div>
                <div class="gb-card">
                    <div class="gb-icon">📊</div>
                    <h3>Conversion Tracking</h3>
                    <p>We implement tracked links, promo codes, and pixel tracking to measure cost-per-acquisition.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Our Services</div>
                <h2 class="gb-title">Instagram Sponsorship Services</h2>
                <p class="gb-subtitle">GrowBoostly helps brands build, manage, and scale high-converting Instagram creator partnerships.</p>
            </div>

            <div class="gb-grid-3">
                <!-- Service 1 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">01</span>
                    <h3>Creator Vetting & Sourcing</h3>
                    <p>Find channels matching your target demographic with active engagement and real reach.</p>
                    <ul>
                        <li>Follower authenticity audits</li>
                        <li>Average reel view analysis</li>
                        <li>Viewer location and age checks</li>
                        <li>Niche brand voice alignment</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">02</span>
                    <h3>Content Briefing & Strategy</h3>
                    <p>Draft structural scripts detailing visual cues, value hooks, and direct links.</p>
                    <ul>
                        <li>High-hook intro creation</li>
                        <li>Core product features list</li>
                        <li>Specific CTA triggers</li>
                        <li>Visual aesthetic guidelines</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">03</span>
                    <h3>Reels & Video Production</h3>
                    <p>Coordinating editing style, hooks, transitions, and audio selection.</p>
                    <ul>
                        <li>Trending audio alignment</li>
                        <li>Aesthetic product staging</li>
                        <li>Dynamic transitions</li>
                        <li>Text overlay styling</li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">04</span>
                    <h3>Interactive Story Sequences</h3>
                    <p>Structuring multiple stories with countdowns, polls, and link stickers.</p>
                    <ul>
                        <li>Swipe-up/Sticker link setup</li>
                        <li>Interactive polls & Q&A</li>
                        <li>Countdown stickers for launches</li>
                        <li>Direct product tags</li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="gb-card gb-service-card">
                    <span class="gb-service-tag">05</span>
                    <h3>Promo Codes & Attribution</h3>
                    <p>Setting up dedicated discounts, custom URLs, and UTM setups.</p>
                    <ul>
                        <li>Custom influencer discounts</li>
                        <li>UTM link parameter setup</li>
                        <li>Pixel tracking configurations</li>
                        <li>Checkout flow validation</li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <a href="influencer-marketing.php" class="gb-card gb-service-card" style="text-decoration: none; color: inherit;">
                    <span class="gb-service-tag">06</span>
                    <h3>Performance & ROI Auditing</h3>
                    <p>Measuring story link clicks, reach, shares, and attributed conversions.</p>
                    <ul>
                        <li>Engagement-rate reports</li>
                        <li>Story click-through audits</li>
                        <li>Share & Save metrics auditing</li>
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
                <h2 class="gb-title">Instagram Campaign Packages</h2>
                <p class="gb-subtitle">Choose a package size depending on your product type, target market, and growth plans.</p>
            </div>

            <div class="gb-pkg-grid">
                <div class="gb-pkg-card">
                    <div class="gb-pkg-header">
                        <h3>Instagram Starter Pack</h3>
                        <p>Best for testing product-market fit and brand testing.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Starter Pack</div>
                        <div class="gb-pkg-sub">Micro-Influencer Reels & Stories</div>
                        <ul class="gb-list">
                            <li>5–8 micro-influencer Reels</li>
                            <li>Custom discount code setup</li>
                            <li>Story link sticker placements</li>
                            <li>Engagement metrics report</li>
                        </ul>
                        <div class="gb-pkg-result">Best for validating brand-message hooks on Instagram.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20Instagram%20Starter%20Pack" class="gb-btn gb-btn-light" style="width: 100%; margin-top: 15px;">Ask for Starter Pack</a>
                    </div>
                </div>

                <div class="gb-pkg-card featured">
                    <div class="gb-pkg-header">
                        <h3>Instagram Growth Campaign</h3>
                        <p>Best for scaling direct sales, app downloads, and D2C traffic.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Growth Plan</div>
                        <div class="gb-pkg-sub">Mid-tier Reels + Collab Posts</div>
                        <ul class="gb-list">
                            <li>3–5 mid-tier influencer Reels</li>
                            <li>Co-authored Collab posts</li>
                            <li>Story sequences with link stickers</li>
                            <li>Trackable conversion dashboard</li>
                        </ul>
                        <div class="gb-pkg-result">Best for building authority and driving direct conversions.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20Instagram%20Growth%20Campaign" class="gb-btn gb-btn-primary" style="width: 100%; margin-top: 15px;">Get Growth Plan</a>
                    </div>
                </div>

                <div class="gb-pkg-card">
                    <div class="gb-pkg-header">
                        <h3>Instagram Dominance Program</h3>
                        <p>Best for massive product launches and market share growth.</p>
                    </div>
                    <div class="gb-pkg-body">
                        <div class="gb-pkg-price">Dominance Plan</div>
                        <div class="gb-pkg-sub">Premium Creators & Ambassadors</div>
                        <ul class="gb-list">
                            <li>10+ premium creator Reels & Stories</li>
                            <li>Long-term brand ambassador rights</li>
                            <li>Custom landing page tracking</li>
                            <li>High-production UGC assets for paid ads</li>
                        </ul>
                        <div class="gb-pkg-result">Best for dominating feed shares in your brand category.</div>
                        <a href="https://wa.me/919919020887?text=I%20want%20Instagram%20Dominance%20Program" class="gb-btn gb-btn-light" style="width: 100%; margin-top: 15px;">Plan Dominance Program</a>
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
                <h2 class="gb-title">Our Instagram Campaign Process</h2>
                <p class="gb-subtitle">We use a strict structured workflow to keep your campaigns professional, timely, and brand-safe.</p>
            </div>

            <div class="gb-process">
                <div class="gb-step">
                    <div class="gb-step-number">1</div>
                    <h3>Campaign Goals</h3>
                    <p>Set target audience, visual vibe, budget, and conversion metrics.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">2</div>
                    <h3>Creator Casting</h3>
                    <p>Shortlist and pitch vetted influencers matching your aesthetics.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">3</div>
                    <h3>Briefing & Audio</h3>
                    <p>Provide styling guides, trending audio tracks, and CTA cues.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">4</div>
                    <h3>Asset Review</h3>
                    <p>Approve Reels and Stories drafts for audio, visuals, and codes.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">5</div>
                    <h3>Live Launch</h3>
                    <p>Schedule posts, coordinate link stickers, and monitor comments.</p>
                </div>
                <div class="gb-step">
                    <div class="gb-step-number">6</div>
                    <h3>ROI Assessment</h3>
                    <p>Track click-throughs, engagement metrics, and sales conversion scaling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="gb-pricing-section gb-section-soft" id="igi-pricing">
        <div class="gb-container">
            <div class="gb-center">
                <div class="gb-eyebrow">Instagram Influencer Pricing</div>
                <h2 class="gb-title">Instagram influencer campaign packages</h2>
                <p class="gb-subtitle">Choose a package based on creator tier, reel/story mix, usage rights and reporting depth.</p>
            </div>
            <div class="gb-pricing-note">
                <strong>Note:</strong>
                <span>Final quote is confirmed after reviewing niche, follower tiers, deliverable count and creator fees. Creator payments are typically separate.</span>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Lite</span>
                            <h3>IG Creator Lite</h3>
                            <p>Best for testing Instagram creators.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹9,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Creator shortlist</li>
                                <li>1 reel + story set</li>
                                <li>Brief + posting coordination</li>
                                <li>Tracking links/codes</li>
                                <li>Campaign summary</li>
                            </ul>
                            <div class="gb-ideal">Best for testing Instagram creators.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Instagram%20Influencer%20Lite%20(%E2%82%B99%2C999%2B)">Ask for Lite Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package gb-featured">
                        <div class="gb-package-head">
                            <span>Growth</span>
                            <h3>IG Creator Growth</h3>
                            <p>Best for launches and seasonal pushes.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹19,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Multi-creator campaign</li>
                                <li>Reels + stories bundle</li>
                                <li>Content usage guidance</li>
                                <li>UTM/offer tracking</li>
                                <li>Mid-campaign tweaks</li>
                            </ul>
                            <div class="gb-ideal">Best for launches and seasonal pushes.</div>
                            <a class="gb-btn-main" href="https://wa.me/919919020887?text=I%20want%20Instagram%20Influencer%20Growth%20(%E2%82%B919%2C999%2B)">Get Growth Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gb-package">
                        <div class="gb-package-head">
                            <span>Scale</span>
                            <h3>IG Creator Scale</h3>
                            <p>Best for always-on Instagram programs.</p>
                        </div>
                        <div class="gb-package-body">
                            <div class="gb-price">₹34,999+</div>
                            <small>management fee</small>
                            <ul>
                                <li>Tiered creator roster</li>
                                <li>Multi-wave campaigns</li>
                                <li>Whitelisting support</li>
                                <li>Detailed ROI reporting</li>
                                <li>Dedicated manager</li>
                            </ul>
                            <div class="gb-ideal">Best for always-on Instagram programs.</div>
                            <a class="gb-btn-light" href="https://wa.me/919919020887?text=I%20want%20Instagram%20Influencer%20Scale%20(%E2%82%B934%2C999%2B)">Ask for Scale Plan</a>
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
                                <h4>First creator test?</h4>
                                <p>Lite validates creators and creative angles.</p>
                                <small>Best for: beauty, local brands</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">02</div>
                            <div>
                                <h4>Product launch on IG?</h4>
                                <p>Growth coordinates multiple creators and formats.</p>
                                <small>Best for: D2C, coaching</small>
                            </div>
                        </div>
                        <div class="gb-plan-guide-item">
                            <div class="gb-plan-guide-num">03</div>
                            <div>
                                <h4>Scaling influencer ROI?</h4>
                                <p>Scale adds portfolio strategy and ad support.</p>
                                <small>Best for: fashion, lifestyle</small>
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
                <h2 class="gb-title gb-title-light">Industries We Serve with Instagram Influencer Marketing</h2>
                <p class="gb-subtitle gb-text-light">We book Reels, Stories, and collab posts with creators matched to each vertical — nano influencers for local discovery, UGC for D2C, and trusted voices for clinics, coaching, and finance.</p>
            </div>

            <div class="gb-industry-grid">
                <?php
                $industries = [
                    ['🏥', 'Healthcare &amp; Clinics', 'Trust reels &amp; patient education', '../industries/healthcare-clinics'],
                    ['🏠', 'Real Estate &amp; Property', 'Property tours &amp; lifestyle reels', '../industries/real-estate'],
                    ['🎓', 'Education &amp; Coaching', 'Course promos &amp; demo clips', '../industries/education-coaching'],
                    ['🛒', 'eCommerce &amp; D2C Brands', 'Unboxing &amp; UGC reviews', '../industries/ecommerce-d2c'],
                    ['🏪', 'Local Businesses', 'Store visits &amp; offer reels', '../industries/local-businesses'],
                    ['💻', 'SaaS &amp; IT Companies', 'Product demos &amp; founder content', '../industries/saas-it-technology'],
                    ['📞', 'BPO &amp; Service Companies', 'Expert credibility campaigns', '../industries/bpo-service-companies'],
                    ['🏦', 'Finance &amp; Insurance', 'Explainer &amp; trust-building posts', '../industries/finance-insurance'],
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
                <a href="../contact.php?ref=iim-industry-strategy" class="gb-btn gb-btn-primary">Get Industry Strategy →</a>
            </div>
        </div>
    </section>

    <!-- CASE PLAN SECTION -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-case">
                <div class="gb-center">
                    <div class="gb-eyebrow">Sample Campaign Plan</div>
                    <h2 class="gb-title">Example: D2C Lifestyle Campaign Roadmap</h2>
                    <p class="gb-subtitle">A highly optimized roadmap designed for fashion, beauty, home decor, or consumer product brands.</p>
                </div>

                <div class="gb-case-grid">
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-briefcase"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Business Type</h4>
                            <p>D2C consumer brand, apparel line, beauty product, or lifestyle app.</p>
                        </div>
                    </div>
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-target-lock"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Campaign Goal</h4>
                            <p>Drive direct sales, generate social proof, and compile UGC library.</p>
                        </div>
                    </div>
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-cog"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Campaign Setup</h4>
                            <p>6 micro-influencer Reels + 3 mid-tier collab posts + interactive Story sequences with tracking links.</p>
                        </div>
                    </div>
                    <div class="gb-case-item">
                        <div class="gb-case-icon-box">
                            <i class="bx bx-bar-chart-alt-2"></i>
                        </div>
                        <div class="gb-case-content">
                            <h4>Performance Review</h4>
                            <p>Story click-through rate, coupon code sales volume, reels engagement, and follower growth.</p>
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
                <p class="gb-subtitle">Quick answers to help you understand Instagram campaigns faster.</p>
            </div>

            <div class="gb-faq-wrap">
                <div class="gb-faq-item active">
                    <button class="gb-faq-question" type="button"><span>How long do Instagram campaigns remain effective?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Stories last 24 hours but can be saved to Highlights. Reels remain in the feed and algorithm recommendations for weeks, driving long-term discovery.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>What are Co-Authored Collab Posts?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>They allow a post/reel to appear simultaneously on both the creator's profile and the brand's profile, sharing comments, likes, and reach.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>How do you track sales from Instagram?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>We use trackable story link stickers with custom UTM parameters, unique coupon codes for each influencer, and landing page pixel setups.</p>
                    </div>
                </div>

                <div class="gb-faq-item">
                    <button class="gb-faq-question" type="button"><span>Do you negotiate creator pricing?</span><span>+</span></button>
                    <div class="gb-faq-answer">
                        <p>Yes, we manage all negotiations, contracting, usage rights agreements, and payouts to creators.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA SECTION -->
    <section class="gb-final-cta">
        <div class="gb-container">
            <h2>Ready to Scale Conversions with Instagram Influencers?</h2>
            <p>GrowBoostly helps you cast the right creators, brief them on visual aesthetics, review content drafts, and track attributed purchase leads.</p>

            <div class="gb-btn-row center">
                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Instagram%20Influencer%20Marketing%20for%20my%20brand." class="gb-btn gb-btn-primary">Get My Instagram Campaign Plan</a>
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
