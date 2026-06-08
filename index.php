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
  <title>AI-Powered Lead Generation & Automation Agency | GrowBoostly</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');

body.gb-home-page {
    --gb-ink: #07111f;
    --gb-ink2: #0d1b2f;
    --gb-text: #172033;
    --gb-muted: #667085;
    --gb-line: #e7ebf3;
    --gb-soft: #f7f9fd;
    --gb-green: #16c784;
    --gb-blue: #2563eb;
    --gb-violet: #7c3aed;
    --gb-grad: linear-gradient(135deg, #16c784, #2563eb 55%, #7c3aed);
    --gb-accent-text: linear-gradient(135deg, #bbf7d0, #bfdbfe, #fbcfe8);
    --gb-shadow: 0 24px 65px rgba(7, 17, 31, 0.12);
    --gb-shadow-sm: 0 16px 38px rgba(7, 17, 31, 0.075);
    font-family: Inter, Arial, Helvetica, sans-serif;
    color: var(--gb-text);
    background:
        radial-gradient(circle at 0% 0%, rgba(37, 99, 235, 0.055), transparent 26%),
        radial-gradient(circle at 100% 0%, rgba(22, 199, 132, 0.045), transparent 28%),
        #ffffff;
    line-height: 1.65;
}

/* Typography */
body.gb-home-page .section-title2 h2,
body.gb-home-page .section-title2 h2 strong {
    font-family: Inter, sans-serif;
    color: var(--gb-ink);
    letter-spacing: -1.2px;
    font-weight: 800;
}
body.gb-home-page .section-title2 h2 strong {
    background: var(--gb-grad);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
body.gb-home-page .section-title2 p {
    font-family: Inter, sans-serif;
    color: var(--gb-muted);
    font-size: 17px;
    line-height: 1.7;
}

/* Hero / Banner — light premium background (matches about page) */
body.gb-home-page .home4-banner-section {
    background:
        radial-gradient(circle at 8% 10%, rgba(22, 199, 132, 0.08), transparent 30%),
        radial-gradient(circle at 90% 5%, rgba(37, 99, 235, 0.09), transparent 32%),
        radial-gradient(circle at 52% 110%, rgba(124, 58, 237, 0.08), transparent 42%),
        linear-gradient(180deg, #f7f9fd 0%, #ffffff 100%) !important;
    background-image: none !important;
    position: relative;
    overflow: visible;
    padding-top: 160px !important;
    padding-bottom: 90px !important;
}
body.gb-home-page .home4-banner-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(7, 17, 31, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(7, 17, 31, 0.03) 1px, transparent 1px);
    background-size: 42px 42px;
    pointer-events: none;
    z-index: 0;
}
body.gb-home-page .home4-banner-section::after {
    display: none;
}
body.gb-home-page .home4-banner-section > .container > .partner-area {
    position: absolute !important;
    left: -80px;
    top: 30%;
    right: auto;
    margin: 0;
    z-index: 4;
}
@media (max-width: 1799px) {
    body.gb-home-page .home4-banner-section > .container > .partner-area {
        left: -50px;
        top: 32%;
    }
}
@media (min-width: 1400px) and (max-width: 1599px) {
    body.gb-home-page .home4-banner-section > .container > .partner-area {
        left: -10px;
    }
}
@media (max-width: 1399px) {
    body.gb-home-page .home4-banner-section > .container > .partner-area {
        left: 0;
        top: 34%;
    }
}
@media (max-width: 991px) {
    body.gb-home-page .home4-banner-section > .container > .partner-area {
        position: relative !important;
        left: auto !important;
        top: auto !important;
        margin-bottom: 25px;
    }
}
body.gb-home-page .home4-banner-section .container {
    position: relative;
    z-index: 2;
}
body.gb-home-page .home4-banner-section .partner-area h5,
body.gb-home-page .home4-banner-section .partner-area span {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
}
body.gb-home-page .home4-banner-section .partner-area svg {
    fill: var(--gb-muted);
}
body.gb-home-page .home4-banner-section .banner-content-wrap .subtitle {
    background: rgba(37, 99, 235, 0.08);
    border: 1px solid rgba(37, 99, 235, 0.12);
    border-radius: 999px;
    padding: 9px 16px;
}
body.gb-home-page .home4-banner-section .banner-content-wrap .subtitle > span {
    color: var(--gb-blue);
    font-family: Inter, sans-serif;
    font-weight: 800;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
body.gb-home-page .home4-banner-section .banner-content-wrap .subtitle .corner {
    display: none;
}
body.gb-home-page .home4-banner-section .banner-content-wrap h1 {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
    font-weight: 800;
    letter-spacing: -2px;
}
body.gb-home-page .home4-banner-section .banner-content-wrap h1 span {
    background: var(--gb-grad);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
}
body.gb-home-page .home4-banner-section .banner-content-wrap p {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
    font-size: 18px;
}
body.gb-home-page .home4-banner-section .banner-content-wrap p span {
    color: var(--gb-text);
    font-weight: 700;
}
body.gb-home-page .home4-banner-section .counter-area {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 20px;
    box-shadow: var(--gb-shadow-sm);
}
body.gb-home-page .home4-banner-section .counter-area .content p {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
}
body.gb-home-page .home4-banner-section .counter-area .number h3,
body.gb-home-page .home4-banner-section .counter-area .number span {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page .home4-banner-section .counter-wrap {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 20px;
    box-shadow: var(--gb-shadow-sm);
}
body.gb-home-page .home4-banner-section .counter-wrap .counter-content .number h4,
body.gb-home-page .home4-banner-section .counter-wrap .counter-content > span {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page .home4-banner-section .primary-btn4.black-bg {
    background: var(--gb-grad);
    border: none;
    border-radius: 999px;
    box-shadow: 0 16px 32px rgba(37, 99, 235, 0.28);
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page .home4-banner-section .primary-btn4.black-bg:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 40px rgba(37, 99, 235, 0.34);
}
body.gb-home-page .home4-banner-section .blinking-svg .circle {
    background: rgba(37, 99, 235, 0.25);
}
/* Header on light hero */
body.gb-home-page header.style-4:not(.sticky) {
    background: linear-gradient(180deg, rgba(247, 249, 253, 0.92) 0%, rgba(247, 249, 253, 0) 100%);
}
body.gb-home-page header.style-4:not(.sticky) .main-menu > ul > li > a,
body.gb-home-page header.style-4:not(.sticky) .main-menu > ul > li i {
    color: var(--gb-ink);
}
body.gb-home-page header.style-4:not(.sticky) .nav-right .mobile-menu-btn svg {
    fill: var(--gb-ink);
}

/* Partner strip */
body.gb-home-page .partner-area.four {
    background: linear-gradient(180deg, #fff, var(--gb-soft));
    padding-top: 20px;
}
body.gb-home-page .partner-area.four .partner-title-area h6 {
    font-family: Inter, sans-serif;
    color: var(--gb-muted);
    font-weight: 600;
}
body.gb-home-page .partner-area.four .partner-title-area h6 span {
    color: var(--gb-blue);
    font-weight: 800;
}

/* Feature cards */
body.gb-home-page .home4-feature-section {
    background: linear-gradient(180deg, #fff, var(--gb-soft));
}
body.gb-home-page .feature-card3,
body.gb-home-page .feature-card3.two,
body.gb-home-page .feature-card3.three,
body.gb-home-page .feature-card3.four,
body.gb-home-page .feature-card3.five,
body.gb-home-page .feature-card3.six {
    background: linear-gradient(180deg, #fff, #fbfcff);
    border: 1px solid var(--gb-line);
    border-radius: 28px;
    box-shadow: var(--gb-shadow-sm);
    overflow: hidden;
    transition: 0.25s;
}
body.gb-home-page .feature-card3::before {
    content: "";
    position: absolute;
    inset: 0 0 auto;
    height: 4px;
    background: var(--gb-grad);
    z-index: 2;
}
body.gb-home-page .feature-card3:hover {
    transform: translateY(-4px);
    box-shadow: var(--gb-shadow);
}
body.gb-home-page .feature-card3 .feature-content h4 {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page .feature-card3 .feature-content p {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
}
body.gb-home-page .feature-card3 .arrow {
    stroke: var(--gb-blue);
}
body.gb-home-page .feature-card3 .shape {
    fill: rgba(37, 99, 235, 0.06);
}

/* Process */
body.gb-home-page .home4-process-section {
    background: #fff;
}
body.gb-home-page .home4-process-section .single-process {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 24px;
    box-shadow: 0 10px 24px rgba(7, 17, 31, 0.055);
    transition: 0.25s;
}
body.gb-home-page .home4-process-section .single-process:hover {
    transform: translateX(4px);
    box-shadow: var(--gb-shadow-sm);
}
body.gb-home-page .home4-process-section .step-no strong {
    background: var(--gb-grad);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-family: Inter, sans-serif;
    font-weight: 900;
}
body.gb-home-page .home4-process-section .process-content h5 {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page .home4-process-section .process-content p {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
}

/* Service cards */
body.gb-home-page .home4-service-section {
    background: linear-gradient(180deg, var(--gb-soft), #fff);
}
body.gb-home-page .service-card3,
body.gb-home-page .service-card3.two,
body.gb-home-page .service-card3.three,
body.gb-home-page .service-card3.four {
    background: linear-gradient(180deg, #fff, #fbfcff);
    border: 1px solid var(--gb-line);
    border-radius: 28px;
    box-shadow: var(--gb-shadow-sm);
    overflow: hidden;
    transition: 0.25s;
}
body.gb-home-page .service-card3::before {
    content: "";
    position: absolute;
    inset: 0 0 auto;
    height: 4px;
    background: var(--gb-grad);
    z-index: 2;
}
body.gb-home-page .service-card3:hover {
    transform: translateY(-4px);
    box-shadow: var(--gb-shadow);
}
body.gb-home-page .service-card3 h4 a {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page .service-card3 h4 a:hover {
    color: var(--gb-blue);
}
body.gb-home-page .service-card3 ul li {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
}
body.gb-home-page .service-card3 .shape {
    fill: rgba(37, 99, 235, 0.05);
}
body.gb-home-page .home4-service-section .result-area span {
    color: var(--gb-blue);
    font-family: Inter, sans-serif;
    font-weight: 900;
}
body.gb-home-page .home4-service-section .result-area p {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
}
body.gb-home-page .primary-btn3.three {
    background: var(--gb-grad);
    border-radius: 999px;
    font-family: Inter, sans-serif;
    font-weight: 800;
    border: none;
    box-shadow: 0 12px 28px rgba(37, 99, 235, 0.2);
}
body.gb-home-page .primary-btn3.three:hover {
    transform: translateY(-2px);
}

/* Counter section — dark like about trust-pro */
body.gb-home-page .home4-counter-section {
    background:
        radial-gradient(circle at 16% 0%, rgba(22, 199, 132, 0.18), transparent 30%),
        radial-gradient(circle at 88% 10%, rgba(37, 99, 235, 0.18), transparent 28%),
        linear-gradient(135deg, #07111f, #0d1b2f);
    position: relative;
    overflow: hidden;
}
body.gb-home-page .home4-counter-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
    background-size: 44px 44px;
    pointer-events: none;
}
body.gb-home-page .home4-counter-section .container {
    position: relative;
    z-index: 2;
}
body.gb-home-page .home4-counter-section .section-title2 h2,
body.gb-home-page .home4-counter-section .section-title2 h2 strong {
    color: #fff;
    -webkit-text-fill-color: unset;
    background: none;
}
body.gb-home-page .home4-counter-section .section-title2 h2 strong {
    background: var(--gb-accent-text);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
body.gb-home-page .home4-counter-section .section-title2 p {
    color: rgba(255, 255, 255, 0.72);
}
body.gb-home-page .home4-counter-section .single-counter {
    border: 1.5px solid rgba(255, 255, 255, 0.08);
    border-radius: 26px;
    box-shadow: 0 20px 45px rgba(7, 17, 31, 0.25);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
body.gb-home-page .home4-counter-section .single-counter:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px rgba(7, 17, 31, 0.35);
}
body.gb-home-page .home4-counter-section .single-counter .conter-content .number h2,
body.gb-home-page .home4-counter-section .single-counter .conter-content .number span {
    color: #ffffff;
    font-family: Inter, sans-serif;
    font-weight: 900;
}
body.gb-home-page .home4-counter-section .single-counter .conter-content p {
    color: rgba(255, 255, 255, 0.85);
    font-family: Inter, sans-serif;
    font-weight: 600;
}
body.gb-home-page .home4-counter-section .bg-shape {
    opacity: 0.15;
}

/* Individual card background colors (Gradients) */
body.gb-home-page .home4-counter-section .row .col-lg-3:nth-child(1) .single-counter {
    background: linear-gradient(135deg, rgba(37, 99, 235, 0.95), rgba(37, 99, 235, 0.75));
}
body.gb-home-page .home4-counter-section .row .col-lg-3:nth-child(2) .single-counter {
    background: linear-gradient(135deg, rgba(22, 199, 132, 0.95), rgba(22, 199, 132, 0.75));
}
body.gb-home-page .home4-counter-section .row .col-lg-3:nth-child(3) .single-counter {
    background: linear-gradient(135deg, rgba(124, 58, 237, 0.95), rgba(124, 58, 237, 0.75));
}
body.gb-home-page .home4-counter-section .row .col-lg-3:nth-child(4) .single-counter {
    background: linear-gradient(135deg, rgba(13, 27, 47, 0.95), rgba(7, 17, 31, 0.85));
}

/* Move bottom proposal banner down */
body.gb-home-page .home4-counter-section .contact-btn-area.two {
    margin-top: 40px;
}

/* Industry section */
body.gb-home-page .home4-industry-section {
    background: linear-gradient(180deg, #fff, var(--gb-soft));
}
body.gb-home-page .home4-industry-section .section-title2 h2,
body.gb-home-page .home4-industry-section .section-title2 h2 strong {
    font-family: Inter, sans-serif;
}
body.gb-home-page .home4-industry-section .result-area span {
    color: var(--gb-blue);
    font-family: Inter, sans-serif;
    font-weight: 900;
}
body.gb-home-page .home4-industry-section .result-area p {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
}
body.gb-home-page .home4-industry-section .industry-list h2 a {
    color: var(--gb-ink);
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page .home4-industry-section .industry-list h2 a:hover {
    color: var(--gb-blue);
}
body.gb-home-page .home4-industry-section .industry-content p {
    color: var(--gb-muted);
    font-family: Inter, sans-serif;
}
body.gb-home-page .home4-industry-section .industry-list li.active h2 a {
    color: var(--gb-blue);
}
body.gb-home-page .home4-industry-section .industry-img .single-img {
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid var(--gb-line);
}

/* Testimonials */
body.gb-home-page .home4-testimonial-section {
    background: linear-gradient(180deg, var(--gb-soft), #fff);
    position: relative;
}
body.gb-home-page .home4-testimonial-section .testimonial-bg {
    opacity: 0.08;
}
body.gb-home-page .home4-testimonial-section .testimonial-card4 {
    background: linear-gradient(180deg, #fff, #fbfcff);
    border: 1px solid var(--gb-line);
    border-radius: 28px;
    box-shadow: var(--gb-shadow-sm);
    padding: 8px;
}
body.gb-home-page .home4-testimonial-section .testimonial-content span,
body.gb-home-page .home4-testimonial-section .testimonial-content p,
body.gb-home-page .home4-testimonial-section .author-area h5,
body.gb-home-page .home4-testimonial-section .author-area span {
    font-family: Inter, sans-serif;
}
body.gb-home-page .home4-testimonial-section .testimonial-content span {
    color: var(--gb-blue);
    font-weight: 800;
}
body.gb-home-page .home4-testimonial-section .testimonial-content p {
    color: var(--gb-text);
}
body.gb-home-page .home4-testimonial-section .author-area h5 {
    color: var(--gb-ink);
    font-weight: 800;
}
body.gb-home-page .home4-testimonial-section .author-area span {
    color: var(--gb-muted);
}
body.gb-home-page .home4-testimonial-section .testimonial-img {
    border-radius: 22px;
    overflow: hidden;
}
body.gb-home-page .gb-testimonial-sidebar {
    display: flex;
    flex-direction: column;
    gap: 18px;
    height: 100%;
}
body.gb-home-page .gb-trust-stat {
    padding: 22px 20px;
    border-radius: 20px;
    background: #fff;
    border: 1px solid var(--gb-line);
    box-shadow: var(--gb-shadow-sm);
    font-family: Inter, sans-serif;
}
body.gb-home-page .gb-trust-stat strong {
    display: block;
    font-size: clamp(28px, 3vw, 36px);
    font-weight: 800;
    line-height: 1;
    margin-bottom: 8px;
    background: var(--gb-grad);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
body.gb-home-page .gb-trust-stat p {
    margin: 0;
    font-size: 14px;
    line-height: 1.55;
    color: var(--gb-muted);
}
body.gb-home-page .gb-trust-stat p b {
    color: var(--gb-ink);
    font-weight: 700;
}
@media (max-width: 991px) {
    body.gb-home-page .gb-testimonial-sidebar {
        flex-direction: row;
        flex-wrap: wrap;
    }
    body.gb-home-page .gb-trust-stat {
        flex: 1 1 calc(50% - 9px);
        min-width: 200px;
    }
}

/* Case study section — homepage horizontal cards */
body.gb-home-page .home4-case-study-section {
    background: linear-gradient(180deg, var(--gb-soft), #fff);
}
body.gb-home-page .gb-home-case-card {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 14px 40px rgba(15, 23, 42, 0.06);
    transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
    height: 100%;
    min-height: 280px;
}
body.gb-home-page .gb-home-case-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--gb-shadow);
    border-color: rgba(37, 99, 235, 0.2);
}
body.gb-home-page .gb-home-case-card-media {
    flex: 0 0 42%;
    max-width: 42%;
    position: relative;
    overflow: hidden;
    display: block;
    background: var(--gb-ink);
}
body.gb-home-page .gb-home-case-card-media img {
    width: 100%;
    height: 100%;
    min-height: 260px;
    object-fit: cover;
    transition: transform 0.4s ease;
}
body.gb-home-page .gb-home-case-card:hover .gb-home-case-card-media img {
    transform: scale(1.05);
}
body.gb-home-page .gb-home-case-card-media::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(7, 17, 31, 0.15), transparent 55%);
    pointer-events: none;
}
body.gb-home-page .gb-home-case-card-body {
    flex: 1;
    padding: 28px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-family: Inter, sans-serif;
}
body.gb-home-page .gb-home-case-badge {
    display: inline-block;
    align-self: flex-start;
    padding: 6px 12px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    margin-bottom: 14px;
}
body.gb-home-page .gb-home-case-badge--blue {
    color: var(--gb-blue);
    background: rgba(37, 99, 235, 0.1);
    border: 1px solid rgba(37, 99, 235, 0.14);
}
body.gb-home-page .gb-home-case-badge--green {
    color: #059669;
    background: rgba(22, 199, 132, 0.12);
    border: 1px solid rgba(22, 199, 132, 0.2);
}
body.gb-home-page .gb-home-case-title {
    margin: 0 0 20px;
    font-size: clamp(18px, 2vw, 22px);
    line-height: 1.35;
    font-weight: 800;
    color: var(--gb-ink);
}
body.gb-home-page .gb-home-case-title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.2s;
}
body.gb-home-page .gb-home-case-title a:hover {
    color: var(--gb-blue);
}
body.gb-home-page .gb-home-case-metrics {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-bottom: 22px;
}
body.gb-home-page .gb-home-case-metric {
    padding: 14px 16px;
    border-radius: 16px;
    background: var(--gb-soft);
    border: 1px solid var(--gb-line);
}
body.gb-home-page .gb-home-case-metric-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.45px;
    color: var(--gb-muted);
    margin-bottom: 8px;
}
body.gb-home-page .gb-home-case-metric-value {
    display: block;
    font-size: clamp(26px, 3vw, 32px);
    font-weight: 800;
    line-height: 1;
    background: var(--gb-grad);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
body.gb-home-page .gb-home-case-metric-value em {
    font-style: normal;
    font-size: 0.65em;
    font-weight: 800;
}
body.gb-home-page .gb-home-case-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    align-self: flex-start;
    padding: 12px 20px;
    border-radius: 999px;
    border: 1.5px solid var(--gb-ink);
    color: var(--gb-ink);
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    transition: 0.25s ease;
    margin-top: auto;
}
body.gb-home-page .gb-home-case-cta i {
    font-size: 16px;
    transition: transform 0.25s ease;
}
body.gb-home-page .gb-home-case-cta:hover {
    background: var(--gb-ink);
    color: #fff;
    border-color: var(--gb-ink);
}
body.gb-home-page .gb-home-case-cta:hover i {
    transform: translate(2px, -2px);
}
body.gb-home-page .gb-home-case-viewall {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 28px;
    border-radius: 999px;
    background: var(--gb-grad);
    color: #fff !important;
    font-family: Inter, sans-serif;
    font-size: 15px;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 14px 32px rgba(37, 99, 235, 0.22);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
body.gb-home-page .gb-home-case-viewall:hover {
    transform: translateY(-3px);
    box-shadow: 0 18px 40px rgba(37, 99, 235, 0.3);
    color: #fff !important;
}
body.gb-home-page .gb-home-case-viewall svg {
    stroke: currentColor;
}
@media (max-width: 991px) {
    body.gb-home-page .gb-home-case-card {
        flex-direction: column;
        min-height: 0;
    }
    body.gb-home-page .gb-home-case-card-media {
        flex: none;
        max-width: 100%;
        aspect-ratio: 16 / 10;
    }
    body.gb-home-page .gb-home-case-card-media img {
        min-height: 0;
        height: 100%;
    }
    body.gb-home-page .gb-home-case-card-body {
        padding: 24px 22px 26px;
    }
}
@media (max-width: 575px) {
    body.gb-home-page .gb-home-case-metrics {
        grid-template-columns: 1fr;
    }
}

/* Team/Why Choose Section */
body.gb-home-page .home4-team-section {
    background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    padding: 120px 0;
}

body.gb-home-page .gb-choose-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
}

@media (max-width: 1199px) {
    body.gb-home-page .gb-choose-grid {
        gap: 24px;
    }
}

@media (max-width: 991px) {
    body.gb-home-page .gb-choose-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 767px) {
    body.gb-home-page .gb-choose-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

body.gb-home-page .gb-choose-card {
    position: relative;
    border-radius: 24px;
    background: #ffffff;
    border: 1px solid var(--gb-line);
    box-shadow: var(--gb-shadow-sm);
    padding: 24px;
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), 
                box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1), 
                border-color 0.4s ease;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
}

body.gb-home-page .gb-choose-card:hover {
    transform: translateY(-8px);
    border-color: var(--gb-blue);
    box-shadow: var(--gb-shadow);
}

body.gb-home-page .gb-choose-img-wrapper {
    position: relative;
    width: 100%;
    aspect-ratio: 4 / 5;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 20px;
    border: 1px solid var(--gb-line);
}

body.gb-home-page .gb-choose-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

body.gb-home-page .gb-choose-card:hover .gb-choose-img-wrapper img {
    transform: scale(1.05);
}

body.gb-home-page .gb-choose-card-content {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

body.gb-home-page .gb-choose-card h4 {
    font-size: 20px;
    font-weight: 800;
    line-height: 1.35;
    color: var(--gb-ink);
    margin-bottom: 8px;
    font-family: Inter, sans-serif;
    transition: color 0.3s ease;
}

body.gb-home-page .gb-choose-card h4 a {
    color: inherit;
    text-decoration: none;
}

body.gb-home-page .gb-choose-card:hover h4 {
    color: var(--gb-blue);
}

body.gb-home-page .gb-choose-card p {
    font-size: 14.5px;
    line-height: 1.6;
    color: var(--gb-muted);
    margin-bottom: 20px;
    font-family: Inter, sans-serif;
    flex-grow: 1;
}

body.gb-home-page .gb-choose-learn-more {
    margin-top: auto;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    font-weight: 700;
    color: var(--gb-ink);
    text-decoration: none;
    transition: color 0.3s ease, gap 0.3s ease;
    font-family: Inter, sans-serif;
}

body.gb-home-page .gb-choose-learn-more i {
    font-size: 18px;
    transition: transform 0.3s ease;
}

body.gb-home-page .gb-choose-card:hover .gb-choose-learn-more {
    color: var(--gb-blue);
    gap: 12px;
}

/* Contact section */
body.gb-home-page .home4-contact-section {
    background:
        radial-gradient(circle at 14% 10%, rgba(225, 48, 108, 0.1), transparent 30%),
        radial-gradient(circle at 88% 8%, rgba(124, 58, 237, 0.12), transparent 30%),
        linear-gradient(135deg, #07111f, #0d1b2f);
}
body.gb-home-page .home4-contact-section .section-title2 h2,
body.gb-home-page .home4-contact-section .section-title2 h2 strong {
    color: #fff;
    -webkit-text-fill-color: unset;
    background: none;
}
body.gb-home-page .home4-contact-section .section-title2 h2 strong {
    background: var(--gb-accent-text);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
body.gb-home-page .home4-contact-section .section-title2 p {
    color: rgba(255, 255, 255, 0.72);
}
body.gb-home-page .home4-contact-section .primary-btn3,
body.gb-home-page .home4-contact-section .primary-btn4 {
    background: var(--gb-grad);
    border-radius: 999px;
    font-family: Inter, sans-serif;
    font-weight: 800;
    border: none;
    box-shadow: 0 16px 32px rgba(37, 99, 235, 0.24);
}

/* Shared buttons & links */
body.gb-home-page .primary-btn3,
body.gb-home-page .primary-btn4 {
    font-family: Inter, sans-serif;
    font-weight: 800;
}
body.gb-home-page a:hover {
    transition: 0.25s;
}

/* Video section edge */
body.gb-home-page .home4-video-section {
    border-top: 1px solid var(--gb-line);
    border-bottom: 1px solid var(--gb-line);
}

/* Section spacing polish */
body.gb-home-page .mb-130 {
    margin-bottom: 100px;
}
@media (max-width: 991px) {
    body.gb-home-page .mb-130 {
        margin-bottom: 72px;
    }
    body.gb-home-page .home4-banner-section {
        padding-top: 120px !important;
        padding-bottom: 72px !important;
    }
    body.gb-home-page .home4-banner-section .banner-content-wrap h1 {
        letter-spacing: -1.2px;
    }
}
</style>

<body class="tt-magic-cursor marketing-agency gb-home-page">


    <?php include 'header.php'; ?>
    
     
    <!-- home3 Banner Section Start -->
    <div class="home4-banner-section mb-130">
        <div class="container position-relative">
            <div class="partner-area">
                <img src="assets/img/home4/icon/meta-logo.svg" alt="">
                <h5>Smart Growth</h5>
                <span>More Qualified Leads</span>
                <svg width="160" height="6" viewBox="0 0 200 6" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM195 3.5L200 5.88675V0.113249L195 2.5V3.5ZM4.5 3.5H195.5V2.5H4.5V3.5Z"/>
                </svg>
            </div>
            <div class="row gy-5 align-items-end">
                <div class="col-lg-2 d-lg-block d-none">
                    <div class="animated-svg">
                        <div class="blinking-svg">
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-content-wrap">
                        <div class="subtitle">
                            <span>Lead Generation & Conversion Systems Company</span>
                            <i class="corner tl"></i>
                            <i class="corner tr"></i>
                            <i class="corner br"></i>
                            <i class="corner bl"></i>
                        </div>
                        <h1><span>Get Qualified</span> Leads That Turn Into Real Business</h1>
                        <p>We help businesses generate <span>high-intent leads</span> through targeted campaigns, <span>landing pages</span>, and <span>conversion-focused systems</span>.</p>
                        <div class="btn-and-counter-area">
                            <a href="contact.php" class="primary-btn4 black-bg">
                                <span class="icon">
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </span>
                                <span class="content">Get Your Growth Plan</span>
                                <span class="icon two">
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </a>
                            <div class="counter-area">
                                <div class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M0.351903 27.6225C0.143442 27.9805 0.264614 28.4396 0.622548 28.6481C0.980482 28.8566 1.43964 28.7354 1.6481 28.3775L0.351903 27.6225ZM29 3L21.7485 7.73454L29.4745 11.6472L29 3ZM20.0155 20.7406L19.3465 20.4017L20.0155 20.7406ZM1.6481 28.3775L7.7352 17.9257L6.439 17.1708L0.351903 27.6225L1.6481 28.3775ZM11.4985 17.7338L14.3075 21.5923L15.5202 20.7094L12.7112 16.851L11.4985 17.7338ZM20.6846 21.0794L26.6194 9.36065L25.2813 8.68295L19.3465 20.4017L20.6846 21.0794ZM14.3075 21.5923C15.957 23.8581 19.4184 23.5797 20.6846 21.0794L19.3465 20.4017C18.5867 21.9019 16.5099 22.0689 15.5202 20.7094L14.3075 21.5923ZM7.7352 17.9257C8.55264 16.5221 10.5425 16.4206 11.4985 17.7338L12.7112 16.851C11.1179 14.6624 7.80141 14.8315 6.439 17.1708L7.7352 17.9257Z"/>
                                            <circle cx="22" cy="17" r="3"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="content">
                                    <div class="number">
                                        <h3>3</h3>
                                        <span>X+</span>
                                    </div>
                                    <p>Core Growth Systems</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-block d-none">
                    <div class="banner-img-wrap">
                        <img src="assets/img/home4/homepage-hero-new.png" alt="Grow Boostly - Lead Generation & Conversion Systems">
                        <div class="counter-wrap">
                            <div class="counter-content">
                                <div class="number">
                                    <h4>500</h4>
                                    <span>+</span>
                                </div>
                                <span>Businesses Assisted</span>
                            </div>
                            <svg class="arrow" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 14L13 2M13 2C10.3333 2.5 4.5 3.5 1 2M13 2C12.5 4.5 11.5 10 13 14" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home3 Banner Section End -->


    <!-- home4 Feature Section Start -->
    <div class="home4-feature-section mb-130">
        <div class="container">
            <div class="row justify-content-lg-end mb-70">
                <div class="col-xl-10 col-lg-11 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="section-title2">
                        <h2>Lead Generation That Actually Works</h2>
                        <p>Targeted audience, better lead quality, and higher conversion rates.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-50">
                <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="feature-card3 magnetic-item">
                        <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 23L23 1M23 1C18.1111 1.91667 7.41667 3.75 1 1M23 1C22.0833 5.58333 20.25 15.6667 23 23" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <svg class="shape" width="195" height="118" viewBox="0 0 195 118" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M108.972 51.7893C108.939 51.7893 108.907 51.7893 108.841 51.7564L-22.6324 5.61378C-22.7311 5.5808 -22.7969 5.51484 -22.8298 5.41589C-22.8627 5.31694 -22.8627 5.21798 -22.8298 5.15202L20.6984 -119.555C20.7643 -119.753 20.9617 -119.852 21.1591 -119.786L152.665 -73.6432C152.764 -73.6103 152.83 -73.5443 152.863 -73.4453C152.895 -73.3464 152.895 -73.2474 152.863 -73.1815L109.334 51.5255C109.268 51.6904 109.137 51.7893 108.972 51.7893ZM-22.0731 5.05307L108.775 50.9648L152.073 -73.0825L21.2578 -118.994L-22.0731 5.05307Z"/>
                                <path
                                    d="M107.262 55.9447C107.229 55.9447 107.163 55.9447 107.13 55.9117L-26.712 3.63437C-26.8107 3.60139 -26.8765 3.53543 -26.9094 3.43649C-26.9423 3.33754 -26.9423 3.23857 -26.9094 3.17261L22.4424 -123.744C22.5082 -123.942 22.7385 -124.008 22.903 -123.942L156.745 -71.6647C156.942 -71.5988 157.008 -71.3679 156.942 -71.203L107.591 55.7138C107.558 55.8127 107.492 55.8787 107.393 55.9117C107.36 55.9447 107.295 55.9447 107.262 55.9447ZM-26.1198 3.10666L107.031 55.1201L156.12 -71.137L22.9688 -123.15L-26.1198 3.10666Z"/>
                                <path
                                    d="M105.32 60.1998C105.287 60.1998 105.222 60.1998 105.189 60.1668L-30.8248 1.45789C-30.9235 1.4249 -30.9893 1.35892 -31.0222 1.25998C-31.0551 1.16103 -31.0551 1.06209 -31.0222 0.996124L24.3505 -127.999C24.3834 -128.098 24.4492 -128.163 24.5479 -128.196C24.6466 -128.229 24.7453 -128.229 24.8111 -128.196L160.825 -69.5205C161.022 -69.4546 161.088 -69.2237 161.022 -69.0588L105.649 59.9689C105.584 60.1008 105.452 60.1998 105.32 60.1998ZM-30.2326 0.96315L105.123 59.3752L160.232 -68.9598L24.8769 -127.372L-30.2326 0.96315Z"/>
                                <path
                                    d="M103.149 64.4874C103.083 64.4874 103.05 64.4874 102.984 64.4544L-35.0031 -0.916946C-35.1677 -1.0159 -35.2664 -1.21379 -35.1677 -1.4117L26.5221 -132.319C26.555 -132.418 26.6208 -132.484 26.7195 -132.517C26.8182 -132.55 26.9169 -132.55 26.9827 -132.517L165.003 -67.1459C165.168 -67.0469 165.266 -66.849 165.168 -66.6511L103.478 64.2895C103.445 64.3885 103.379 64.4544 103.281 64.4874C103.248 64.4874 103.215 64.4874 103.149 64.4874ZM-34.378 -1.4117L102.984 63.6628L164.378 -66.6182L27.0156 -131.66L-34.378 -1.4117Z"/>
                                <path
                                    d="M100.813 68.8411C100.747 68.8411 100.714 68.8411 100.648 68.8081L-39.2145 -3.52258C-39.3132 -3.55557 -39.379 -3.65451 -39.379 -3.72047C-39.4119 -3.81943 -39.4119 -3.91837 -39.3461 -3.98433L28.9238 -136.64C28.9567 -136.739 29.0555 -136.805 29.1213 -136.805C29.22 -136.838 29.3187 -136.838 29.3845 -136.772L169.247 -64.4413C169.412 -64.3424 169.511 -64.1445 169.412 -63.9466L101.109 68.6432C101.043 68.7751 100.945 68.8411 100.813 68.8411ZM-38.5894 -4.01733L100.616 67.9835L168.556 -64.0126L29.3516 -136.013L-38.5894 -4.01733Z"/>
                                <path
                                    d="M98.2138 73.2276C98.148 73.2276 98.0822 73.2276 98.0493 73.1946L-43.4587 -6.39226C-43.6232 -6.49121 -43.689 -6.72208 -43.5903 -6.88699L31.4902 -141.093C31.5231 -141.192 31.6218 -141.225 31.7205 -141.258C31.8192 -141.291 31.9179 -141.258 31.9837 -141.225L173.492 -61.671C173.656 -61.572 173.722 -61.3411 173.623 -61.1762L98.5099 73.0627C98.477 73.1616 98.3783 73.1946 98.2796 73.2276C98.2796 73.2276 98.2467 73.2276 98.2138 73.2276ZM-42.8007 -6.82103L98.0822 72.403L172.834 -61.1762L31.9179 -140.4L-42.8007 -6.82103Z"/>
                                <path
                                    d="M95.3842 77.6803C95.3184 77.6803 95.2526 77.6473 95.1868 77.6143L-47.7359 -9.45955C-47.8017 -9.52553 -47.8675 -9.59149 -47.9004 -9.69044C-47.9333 -9.78938 -47.9004 -9.88834 -47.8675 -9.9543L34.3196 -145.512C34.4183 -145.677 34.6486 -145.743 34.8131 -145.644L177.736 -58.5705C177.9 -58.4716 177.966 -58.2407 177.867 -58.0758L95.6803 77.4824C95.6145 77.6143 95.4829 77.6803 95.3842 77.6803ZM-47.0779 -9.88832L95.2526 76.8228L177.045 -58.1088L34.7473 -144.82L-47.0779 -9.88832Z"/>
                                <path
                                    d="M92.2913 82.1328C92.2255 82.1328 92.1597 82.0998 92.0939 82.0668L-52.0462 -12.7909C-52.112 -12.8569 -52.1778 -12.9228 -52.2107 -13.0218C-52.2436 -13.1207 -52.2107 -13.2197 -52.1449 -13.2856L37.3792 -149.998C37.4779 -150.163 37.7082 -150.196 37.8727 -150.097L182.013 -55.2064C182.079 -55.1405 182.144 -55.0745 182.177 -54.9756C182.21 -54.8766 182.177 -54.7777 182.112 -54.7117L92.5874 81.9679C92.5216 82.0669 92.4229 82.1328 92.2913 82.1328ZM-51.3553 -13.2197L92.1926 81.2753L181.322 -54.8106L37.8069 -149.306L-51.3553 -13.2197Z"/>
                                <path
                                    d="M88.9684 86.6185C88.9026 86.6185 88.8368 86.5855 88.771 86.5526L-56.3232 -16.3859C-56.389 -16.4519 -56.4548 -16.5179 -56.4548 -16.6168C-56.4548 -16.7158 -56.4548 -16.8147 -56.389 -16.8807L40.7353 -154.517C40.8669 -154.682 41.0643 -154.715 41.2288 -154.616L186.323 -51.6773C186.389 -51.6113 186.455 -51.5453 186.455 -51.4464C186.455 -51.3474 186.455 -51.2485 186.389 -51.1825L89.2645 86.4866C89.1987 86.5525 89.1329 86.6185 89.0342 86.6185C89.0013 86.6185 89.0013 86.6185 88.9684 86.6185ZM-55.6323 -16.7817L88.9026 85.761L185.632 -51.2485L41.1301 -153.791L-55.6323 -16.7817Z"/>
                                <path
                                    d="M85.3822 91.1373C85.3164 91.1373 85.2177 91.1043 85.1519 91.0713L-60.6333 -20.2447C-60.6991 -20.3107 -60.7649 -20.3767 -60.7649 -20.4756C-60.7649 -20.5746 -60.7649 -20.6735 -60.6991 -20.7395L44.3215 -159.035C44.4531 -159.2 44.6834 -159.233 44.815 -159.101L190.633 -47.7852C190.798 -47.6532 190.83 -47.4223 190.699 -47.2904L85.6783 91.0053C85.6125 91.0713 85.5467 91.1373 85.448 91.1373C85.4151 91.1373 85.3822 91.1373 85.3822 91.1373ZM-59.9095 -20.6075L85.3164 90.2467L189.909 -47.4553L44.6834 -158.31L-59.9095 -20.6075Z"/>
                                <path
                                    d="M81.5328 95.6561C81.4341 95.6561 81.3683 95.6231 81.3025 95.5901L-64.9433 -24.3673C-65.1078 -24.4993 -65.1078 -24.7301 -65.0091 -24.8621L48.171 -163.554C48.2368 -163.62 48.3355 -163.686 48.4013 -163.686C48.5 -163.686 48.5987 -163.653 48.6645 -163.62L194.877 -43.6951C195.042 -43.5632 195.042 -43.3323 194.943 -43.2004L81.796 95.5241C81.7302 95.5901 81.6315 95.6561 81.5657 95.6561C81.5328 95.6561 81.5328 95.6561 81.5328 95.6561ZM-64.1865 -24.6972L81.467 94.7986L194.186 -43.3323L48.5329 -162.795L-64.1865 -24.6972Z"/>
                                <path
                                    d="M77.3874 100.174C77.2887 100.174 77.2229 100.141 77.1571 100.075L-69.2203 -28.7544C-69.3848 -28.8864 -69.3848 -29.1172 -69.2532 -29.2492L52.3496 -168.073C52.4154 -168.139 52.5141 -168.205 52.6128 -168.205C52.7115 -168.205 52.8102 -168.172 52.876 -168.106L199.22 -39.2759C199.286 -39.2099 199.352 -39.1109 199.352 -39.012C199.352 -38.9131 199.319 -38.8141 199.253 -38.7481L77.6506 100.042C77.5848 100.108 77.4861 100.174 77.3874 100.174ZM-68.4636 -29.0513L77.3545 99.2838L198.464 -38.979L52.6457 -167.314L-68.4636 -29.0513Z"/>
                                <path
                                    d="M72.9457 104.66C72.847 104.66 72.7812 104.627 72.6825 104.561L-73.4645 -33.4377C-73.5962 -33.5696 -73.6291 -33.8005 -73.4645 -33.9654L56.7913 -172.591C56.8571 -172.657 56.9558 -172.69 57.0545 -172.69C57.1532 -172.69 57.2519 -172.657 57.3177 -172.591L203.465 -34.5591C203.531 -34.4931 203.563 -34.3942 203.563 -34.2952C203.563 -34.1963 203.531 -34.0974 203.465 -34.0314L73.209 104.561C73.1431 104.627 73.0444 104.66 72.9457 104.66ZM-72.7078 -33.7345L72.9128 103.803L202.708 -34.2952L57.0545 -171.832L-72.7078 -33.7345Z"/>
                                <path
                                    d="M68.2408 109.146C68.1421 109.146 68.0434 109.113 67.9776 109.047L-77.676 -38.451C-77.8076 -38.5829 -77.8076 -38.8138 -77.676 -38.9787L61.4961 -177.11C61.5619 -177.176 61.6277 -177.208 61.7593 -177.208C61.858 -177.208 61.9567 -177.176 62.0225 -177.11L207.676 -29.6447C207.808 -29.5127 207.808 -29.2818 207.676 -29.1169L68.504 109.014C68.4053 109.113 68.3395 109.146 68.2408 109.146ZM-76.8863 -38.6819L68.2408 108.288L206.886 -29.3478L61.7593 -176.285L-76.8863 -38.6819Z"/>
                                <path
                                    d="M63.207 113.598C63.1083 113.598 63.0096 113.565 62.9438 113.466L-81.8215 -43.7285C-81.8873 -43.7944 -81.9202 -43.8934 -81.9202 -43.9923C-81.9202 -44.0913 -81.8873 -44.1902 -81.7886 -44.2562L66.5629 -181.529C66.6287 -181.595 66.7274 -181.628 66.8261 -181.628C66.9248 -181.628 67.0235 -181.595 67.0893 -181.496L211.855 -24.3017C211.986 -24.1698 211.986 -23.9389 211.822 -23.774L63.4373 113.499C63.3715 113.565 63.3057 113.598 63.207 113.598ZM-81.0318 -43.9593L63.2399 112.708L211.032 -24.0709L66.7932 -180.738L-81.0318 -43.9593Z"/>
                                <path
                                    d="M57.8769 117.985C57.7782 117.985 57.6795 117.952 57.6137 117.853L-85.9013 -49.3354C-85.9671 -49.4013 -86 -49.5003 -86 -49.5992C-86 -49.6982 -85.9342 -49.7971 -85.8684 -49.8301L71.8928 -185.916C72.0573 -186.048 72.2876 -186.015 72.3863 -185.883L215.901 -18.6946C215.967 -18.6286 216 -18.5297 216 -18.4307C216 -18.3318 215.934 -18.2328 215.868 -18.1998L58.1072 117.919C58.0414 117.952 57.9427 117.985 57.8769 117.985ZM-85.1446 -49.5332L57.8769 117.095L215.112 -18.5297L72.0902 -185.157L-85.1446 -49.5332Z"/>
                            </g>
                        </svg>
                        <div class="feature-content">
                            <h4>Low-Quality Leads?</h4>
                            <p>Struggling with leads that don’t convert into real business? We help you attract <strong>high-intent, targeted prospects</strong> who are genuinely interested and more likely to convert.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="feature-card3 two magnetic-item">
                        <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 23L23 1M23 1C18.1111 1.91667 7.41667 3.75 1 1M23 1C22.0833 5.58333 20.25 15.6667 23 23" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <svg class="shape" width="195" height="118" viewBox="0 0 195 118" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M108.972 51.7893C108.939 51.7893 108.907 51.7893 108.841 51.7564L-22.6324 5.61378C-22.7311 5.5808 -22.7969 5.51484 -22.8298 5.41589C-22.8627 5.31694 -22.8627 5.21798 -22.8298 5.15202L20.6984 -119.555C20.7643 -119.753 20.9617 -119.852 21.1591 -119.786L152.665 -73.6432C152.764 -73.6103 152.83 -73.5443 152.863 -73.4453C152.895 -73.3464 152.895 -73.2474 152.863 -73.1815L109.334 51.5255C109.268 51.6904 109.137 51.7893 108.972 51.7893ZM-22.0731 5.05307L108.775 50.9648L152.073 -73.0825L21.2578 -118.994L-22.0731 5.05307Z"/>
                                <path
                                    d="M107.262 55.9447C107.229 55.9447 107.163 55.9447 107.13 55.9117L-26.712 3.63437C-26.8107 3.60139 -26.8765 3.53543 -26.9094 3.43649C-26.9423 3.33754 -26.9423 3.23857 -26.9094 3.17261L22.4424 -123.744C22.5082 -123.942 22.7385 -124.008 22.903 -123.942L156.745 -71.6647C156.942 -71.5988 157.008 -71.3679 156.942 -71.203L107.591 55.7138C107.558 55.8127 107.492 55.8787 107.393 55.9117C107.36 55.9447 107.295 55.9447 107.262 55.9447ZM-26.1198 3.10666L107.031 55.1201L156.12 -71.137L22.9688 -123.15L-26.1198 3.10666Z"/>
                                <path
                                    d="M105.32 60.1998C105.287 60.1998 105.222 60.1998 105.189 60.1668L-30.8248 1.45789C-30.9235 1.4249 -30.9893 1.35892 -31.0222 1.25998C-31.0551 1.16103 -31.0551 1.06209 -31.0222 0.996124L24.3505 -127.999C24.3834 -128.098 24.4492 -128.163 24.5479 -128.196C24.6466 -128.229 24.7453 -128.229 24.8111 -128.196L160.825 -69.5205C161.022 -69.4546 161.088 -69.2237 161.022 -69.0588L105.649 59.9689C105.584 60.1008 105.452 60.1998 105.32 60.1998ZM-30.2326 0.96315L105.123 59.3752L160.232 -68.9598L24.8769 -127.372L-30.2326 0.96315Z"/>
                                <path
                                    d="M103.149 64.4874C103.083 64.4874 103.05 64.4874 102.984 64.4544L-35.0031 -0.916946C-35.1677 -1.0159 -35.2664 -1.21379 -35.1677 -1.4117L26.5221 -132.319C26.555 -132.418 26.6208 -132.484 26.7195 -132.517C26.8182 -132.55 26.9169 -132.55 26.9827 -132.517L165.003 -67.1459C165.168 -67.0469 165.266 -66.849 165.168 -66.6511L103.478 64.2895C103.445 64.3885 103.379 64.4544 103.281 64.4874C103.248 64.4874 103.215 64.4874 103.149 64.4874ZM-34.378 -1.4117L102.984 63.6628L164.378 -66.6182L27.0156 -131.66L-34.378 -1.4117Z"/>
                                <path
                                    d="M100.813 68.8411C100.747 68.8411 100.714 68.8411 100.648 68.8081L-39.2145 -3.52258C-39.3132 -3.55557 -39.379 -3.65451 -39.379 -3.72047C-39.4119 -3.81943 -39.4119 -3.91837 -39.3461 -3.98433L28.9238 -136.64C28.9567 -136.739 29.0555 -136.805 29.1213 -136.805C29.22 -136.838 29.3187 -136.838 29.3845 -136.772L169.247 -64.4413C169.412 -64.3424 169.511 -64.1445 169.412 -63.9466L101.109 68.6432C101.043 68.7751 100.945 68.8411 100.813 68.8411ZM-38.5894 -4.01733L100.616 67.9835L168.556 -64.0126L29.3516 -136.013L-38.5894 -4.01733Z"/>
                                <path
                                    d="M98.2138 73.2276C98.148 73.2276 98.0822 73.2276 98.0493 73.1946L-43.4587 -6.39226C-43.6232 -6.49121 -43.689 -6.72208 -43.5903 -6.88699L31.4902 -141.093C31.5231 -141.192 31.6218 -141.225 31.7205 -141.258C31.8192 -141.291 31.9179 -141.258 31.9837 -141.225L173.492 -61.671C173.656 -61.572 173.722 -61.3411 173.623 -61.1762L98.5099 73.0627C98.477 73.1616 98.3783 73.1946 98.2796 73.2276C98.2796 73.2276 98.2467 73.2276 98.2138 73.2276ZM-42.8007 -6.82103L98.0822 72.403L172.834 -61.1762L31.9179 -140.4L-42.8007 -6.82103Z"/>
                                <path
                                    d="M95.3842 77.6803C95.3184 77.6803 95.2526 77.6473 95.1868 77.6143L-47.7359 -9.45955C-47.8017 -9.52553 -47.8675 -9.59149 -47.9004 -9.69044C-47.9333 -9.78938 -47.9004 -9.88834 -47.8675 -9.9543L34.3196 -145.512C34.4183 -145.677 34.6486 -145.743 34.8131 -145.644L177.736 -58.5705C177.9 -58.4716 177.966 -58.2407 177.867 -58.0758L95.6803 77.4824C95.6145 77.6143 95.4829 77.6803 95.3842 77.6803ZM-47.0779 -9.88832L95.2526 76.8228L177.045 -58.1088L34.7473 -144.82L-47.0779 -9.88832Z"/>
                                <path
                                    d="M92.2913 82.1328C92.2255 82.1328 92.1597 82.0998 92.0939 82.0668L-52.0462 -12.7909C-52.112 -12.8569 -52.1778 -12.9228 -52.2107 -13.0218C-52.2436 -13.1207 -52.2107 -13.2197 -52.1449 -13.2856L37.3792 -149.998C37.4779 -150.163 37.7082 -150.196 37.8727 -150.097L182.013 -55.2064C182.079 -55.1405 182.144 -55.0745 182.177 -54.9756C182.21 -54.8766 182.177 -54.7777 182.112 -54.7117L92.5874 81.9679C92.5216 82.0669 92.4229 82.1328 92.2913 82.1328ZM-51.3553 -13.2197L92.1926 81.2753L181.322 -54.8106L37.8069 -149.306L-51.3553 -13.2197Z"/>
                                <path
                                    d="M88.9684 86.6185C88.9026 86.6185 88.8368 86.5855 88.771 86.5526L-56.3232 -16.3859C-56.389 -16.4519 -56.4548 -16.5179 -56.4548 -16.6168C-56.4548 -16.7158 -56.4548 -16.8147 -56.389 -16.8807L40.7353 -154.517C40.8669 -154.682 41.0643 -154.715 41.2288 -154.616L186.323 -51.6773C186.389 -51.6113 186.455 -51.5453 186.455 -51.4464C186.455 -51.3474 186.455 -51.2485 186.389 -51.1825L89.2645 86.4866C89.1987 86.5525 89.1329 86.6185 89.0342 86.6185C89.0013 86.6185 89.0013 86.6185 88.9684 86.6185ZM-55.6323 -16.7817L88.9026 85.761L185.632 -51.2485L41.1301 -153.791L-55.6323 -16.7817Z"/>
                                <path
                                    d="M85.3822 91.1373C85.3164 91.1373 85.2177 91.1043 85.1519 91.0713L-60.6333 -20.2447C-60.6991 -20.3107 -60.7649 -20.3767 -60.7649 -20.4756C-60.7649 -20.5746 -60.7649 -20.6735 -60.6991 -20.7395L44.3215 -159.035C44.4531 -159.2 44.6834 -159.233 44.815 -159.101L190.633 -47.7852C190.798 -47.6532 190.83 -47.4223 190.699 -47.2904L85.6783 91.0053C85.6125 91.0713 85.5467 91.1373 85.448 91.1373C85.4151 91.1373 85.3822 91.1373 85.3822 91.1373ZM-59.9095 -20.6075L85.3164 90.2467L189.909 -47.4553L44.6834 -158.31L-59.9095 -20.6075Z"/>
                                <path
                                    d="M81.5328 95.6561C81.4341 95.6561 81.3683 95.6231 81.3025 95.5901L-64.9433 -24.3673C-65.1078 -24.4993 -65.1078 -24.7301 -65.0091 -24.8621L48.171 -163.554C48.2368 -163.62 48.3355 -163.686 48.4013 -163.686C48.5 -163.686 48.5987 -163.653 48.6645 -163.62L194.877 -43.6951C195.042 -43.5632 195.042 -43.3323 194.943 -43.2004L81.796 95.5241C81.7302 95.5901 81.6315 95.6561 81.5657 95.6561C81.5328 95.6561 81.5328 95.6561 81.5328 95.6561ZM-64.1865 -24.6972L81.467 94.7986L194.186 -43.3323L48.5329 -162.795L-64.1865 -24.6972Z"/>
                                <path
                                    d="M77.3874 100.174C77.2887 100.174 77.2229 100.141 77.1571 100.075L-69.2203 -28.7544C-69.3848 -28.8864 -69.3848 -29.1172 -69.2532 -29.2492L52.3496 -168.073C52.4154 -168.139 52.5141 -168.205 52.6128 -168.205C52.7115 -168.205 52.8102 -168.172 52.876 -168.106L199.22 -39.2759C199.286 -39.2099 199.352 -39.1109 199.352 -39.012C199.352 -38.9131 199.319 -38.8141 199.253 -38.7481L77.6506 100.042C77.5848 100.108 77.4861 100.174 77.3874 100.174ZM-68.4636 -29.0513L77.3545 99.2838L198.464 -38.979L52.6457 -167.314L-68.4636 -29.0513Z"/>
                                <path
                                    d="M72.9457 104.66C72.847 104.66 72.7812 104.627 72.6825 104.561L-73.4645 -33.4377C-73.5962 -33.5696 -73.6291 -33.8005 -73.4645 -33.9654L56.7913 -172.591C56.8571 -172.657 56.9558 -172.69 57.0545 -172.69C57.1532 -172.69 57.2519 -172.657 57.3177 -172.591L203.465 -34.5591C203.531 -34.4931 203.563 -34.3942 203.563 -34.2952C203.563 -34.1963 203.531 -34.0974 203.465 -34.0314L73.209 104.561C73.1431 104.627 73.0444 104.66 72.9457 104.66ZM-72.7078 -33.7345L72.9128 103.803L202.708 -34.2952L57.0545 -171.832L-72.7078 -33.7345Z"/>
                                <path
                                    d="M68.2408 109.146C68.1421 109.146 68.0434 109.113 67.9776 109.047L-77.676 -38.451C-77.8076 -38.5829 -77.8076 -38.8138 -77.676 -38.9787L61.4961 -177.11C61.5619 -177.176 61.6277 -177.208 61.7593 -177.208C61.858 -177.208 61.9567 -177.176 62.0225 -177.11L207.676 -29.6447C207.808 -29.5127 207.808 -29.2818 207.676 -29.1169L68.504 109.014C68.4053 109.113 68.3395 109.146 68.2408 109.146ZM-76.8863 -38.6819L68.2408 108.288L206.886 -29.3478L61.7593 -176.285L-76.8863 -38.6819Z"/>
                                <path
                                    d="M63.207 113.598C63.1083 113.598 63.0096 113.565 62.9438 113.466L-81.8215 -43.7285C-81.8873 -43.7944 -81.9202 -43.8934 -81.9202 -43.9923C-81.9202 -44.0913 -81.8873 -44.1902 -81.7886 -44.2562L66.5629 -181.529C66.6287 -181.595 66.7274 -181.628 66.8261 -181.628C66.9248 -181.628 67.0235 -181.595 67.0893 -181.496L211.855 -24.3017C211.986 -24.1698 211.986 -23.9389 211.822 -23.774L63.4373 113.499C63.3715 113.565 63.3057 113.598 63.207 113.598ZM-81.0318 -43.9593L63.2399 112.708L211.032 -24.0709L66.7932 -180.738L-81.0318 -43.9593Z"/>
                                <path
                                    d="M57.8769 117.985C57.7782 117.985 57.6795 117.952 57.6137 117.853L-85.9013 -49.3354C-85.9671 -49.4013 -86 -49.5003 -86 -49.5992C-86 -49.6982 -85.9342 -49.7971 -85.8684 -49.8301L71.8928 -185.916C72.0573 -186.048 72.2876 -186.015 72.3863 -185.883L215.901 -18.6946C215.967 -18.6286 216 -18.5297 216 -18.4307C216 -18.3318 215.934 -18.2328 215.868 -18.1998L58.1072 117.919C58.0414 117.952 57.9427 117.985 57.8769 117.985ZM-85.1446 -49.5332L57.8769 117.095L215.112 -18.5297L72.0902 -185.157L-85.1446 -49.5332Z"/>
                            </g>
                        </svg>
                        <div class="feature-content">
                            <h4>Leads But No Sales?</h4>
                            <p>Getting leads but not seeing real revenue growth? We design conversion-focused funnels and systems that consistently guide your prospects and turn them into paying customers. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="feature-card3 three magnetic-item">
                        <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 23L23 1M23 1C18.1111 1.91667 7.41667 3.75 1 1M23 1C22.0833 5.58333 20.25 15.6667 23 23" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <svg class="shape" width="195" height="118" viewBox="0 0 195 118" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M108.972 51.7893C108.939 51.7893 108.907 51.7893 108.841 51.7564L-22.6324 5.61378C-22.7311 5.5808 -22.7969 5.51484 -22.8298 5.41589C-22.8627 5.31694 -22.8627 5.21798 -22.8298 5.15202L20.6984 -119.555C20.7643 -119.753 20.9617 -119.852 21.1591 -119.786L152.665 -73.6432C152.764 -73.6103 152.83 -73.5443 152.863 -73.4453C152.895 -73.3464 152.895 -73.2474 152.863 -73.1815L109.334 51.5255C109.268 51.6904 109.137 51.7893 108.972 51.7893ZM-22.0731 5.05307L108.775 50.9648L152.073 -73.0825L21.2578 -118.994L-22.0731 5.05307Z"/>
                                <path
                                    d="M107.262 55.9447C107.229 55.9447 107.163 55.9447 107.13 55.9117L-26.712 3.63437C-26.8107 3.60139 -26.8765 3.53543 -26.9094 3.43649C-26.9423 3.33754 -26.9423 3.23857 -26.9094 3.17261L22.4424 -123.744C22.5082 -123.942 22.7385 -124.008 22.903 -123.942L156.745 -71.6647C156.942 -71.5988 157.008 -71.3679 156.942 -71.203L107.591 55.7138C107.558 55.8127 107.492 55.8787 107.393 55.9117C107.36 55.9447 107.295 55.9447 107.262 55.9447ZM-26.1198 3.10666L107.031 55.1201L156.12 -71.137L22.9688 -123.15L-26.1198 3.10666Z"/>
                                <path
                                    d="M105.32 60.1998C105.287 60.1998 105.222 60.1998 105.189 60.1668L-30.8248 1.45789C-30.9235 1.4249 -30.9893 1.35892 -31.0222 1.25998C-31.0551 1.16103 -31.0551 1.06209 -31.0222 0.996124L24.3505 -127.999C24.3834 -128.098 24.4492 -128.163 24.5479 -128.196C24.6466 -128.229 24.7453 -128.229 24.8111 -128.196L160.825 -69.5205C161.022 -69.4546 161.088 -69.2237 161.022 -69.0588L105.649 59.9689C105.584 60.1008 105.452 60.1998 105.32 60.1998ZM-30.2326 0.96315L105.123 59.3752L160.232 -68.9598L24.8769 -127.372L-30.2326 0.96315Z"/>
                                <path
                                    d="M103.149 64.4874C103.083 64.4874 103.05 64.4874 102.984 64.4544L-35.0031 -0.916946C-35.1677 -1.0159 -35.2664 -1.21379 -35.1677 -1.4117L26.5221 -132.319C26.555 -132.418 26.6208 -132.484 26.7195 -132.517C26.8182 -132.55 26.9169 -132.55 26.9827 -132.517L165.003 -67.1459C165.168 -67.0469 165.266 -66.849 165.168 -66.6511L103.478 64.2895C103.445 64.3885 103.379 64.4544 103.281 64.4874C103.248 64.4874 103.215 64.4874 103.149 64.4874ZM-34.378 -1.4117L102.984 63.6628L164.378 -66.6182L27.0156 -131.66L-34.378 -1.4117Z"/>
                                <path
                                    d="M100.813 68.8411C100.747 68.8411 100.714 68.8411 100.648 68.8081L-39.2145 -3.52258C-39.3132 -3.55557 -39.379 -3.65451 -39.379 -3.72047C-39.4119 -3.81943 -39.4119 -3.91837 -39.3461 -3.98433L28.9238 -136.64C28.9567 -136.739 29.0555 -136.805 29.1213 -136.805C29.22 -136.838 29.3187 -136.838 29.3845 -136.772L169.247 -64.4413C169.412 -64.3424 169.511 -64.1445 169.412 -63.9466L101.109 68.6432C101.043 68.7751 100.945 68.8411 100.813 68.8411ZM-38.5894 -4.01733L100.616 67.9835L168.556 -64.0126L29.3516 -136.013L-38.5894 -4.01733Z"/>
                                <path
                                    d="M98.2138 73.2276C98.148 73.2276 98.0822 73.2276 98.0493 73.1946L-43.4587 -6.39226C-43.6232 -6.49121 -43.689 -6.72208 -43.5903 -6.88699L31.4902 -141.093C31.5231 -141.192 31.6218 -141.225 31.7205 -141.258C31.8192 -141.291 31.9179 -141.258 31.9837 -141.225L173.492 -61.671C173.656 -61.572 173.722 -61.3411 173.623 -61.1762L98.5099 73.0627C98.477 73.1616 98.3783 73.1946 98.2796 73.2276C98.2796 73.2276 98.2467 73.2276 98.2138 73.2276ZM-42.8007 -6.82103L98.0822 72.403L172.834 -61.1762L31.9179 -140.4L-42.8007 -6.82103Z"/>
                                <path
                                    d="M95.3842 77.6803C95.3184 77.6803 95.2526 77.6473 95.1868 77.6143L-47.7359 -9.45955C-47.8017 -9.52553 -47.8675 -9.59149 -47.9004 -9.69044C-47.9333 -9.78938 -47.9004 -9.88834 -47.8675 -9.9543L34.3196 -145.512C34.4183 -145.677 34.6486 -145.743 34.8131 -145.644L177.736 -58.5705C177.9 -58.4716 177.966 -58.2407 177.867 -58.0758L95.6803 77.4824C95.6145 77.6143 95.4829 77.6803 95.3842 77.6803ZM-47.0779 -9.88832L95.2526 76.8228L177.045 -58.1088L34.7473 -144.82L-47.0779 -9.88832Z"/>
                                <path
                                    d="M92.2913 82.1328C92.2255 82.1328 92.1597 82.0998 92.0939 82.0668L-52.0462 -12.7909C-52.112 -12.8569 -52.1778 -12.9228 -52.2107 -13.0218C-52.2436 -13.1207 -52.2107 -13.2197 -52.1449 -13.2856L37.3792 -149.998C37.4779 -150.163 37.7082 -150.196 37.8727 -150.097L182.013 -55.2064C182.079 -55.1405 182.144 -55.0745 182.177 -54.9756C182.21 -54.8766 182.177 -54.7777 182.112 -54.7117L92.5874 81.9679C92.5216 82.0669 92.4229 82.1328 92.2913 82.1328ZM-51.3553 -13.2197L92.1926 81.2753L181.322 -54.8106L37.8069 -149.306L-51.3553 -13.2197Z"/>
                                <path
                                    d="M88.9684 86.6185C88.9026 86.6185 88.8368 86.5855 88.771 86.5526L-56.3232 -16.3859C-56.389 -16.4519 -56.4548 -16.5179 -56.4548 -16.6168C-56.4548 -16.7158 -56.4548 -16.8147 -56.389 -16.8807L40.7353 -154.517C40.8669 -154.682 41.0643 -154.715 41.2288 -154.616L186.323 -51.6773C186.389 -51.6113 186.455 -51.5453 186.455 -51.4464C186.455 -51.3474 186.455 -51.2485 186.389 -51.1825L89.2645 86.4866C89.1987 86.5525 89.1329 86.6185 89.0342 86.6185C89.0013 86.6185 89.0013 86.6185 88.9684 86.6185ZM-55.6323 -16.7817L88.9026 85.761L185.632 -51.2485L41.1301 -153.791L-55.6323 -16.7817Z"/>
                                <path
                                    d="M85.3822 91.1373C85.3164 91.1373 85.2177 91.1043 85.1519 91.0713L-60.6333 -20.2447C-60.6991 -20.3107 -60.7649 -20.3767 -60.7649 -20.4756C-60.7649 -20.5746 -60.7649 -20.6735 -60.6991 -20.7395L44.3215 -159.035C44.4531 -159.2 44.6834 -159.233 44.815 -159.101L190.633 -47.7852C190.798 -47.6532 190.83 -47.4223 190.699 -47.2904L85.6783 91.0053C85.6125 91.0713 85.5467 91.1373 85.448 91.1373C85.4151 91.1373 85.3822 91.1373 85.3822 91.1373ZM-59.9095 -20.6075L85.3164 90.2467L189.909 -47.4553L44.6834 -158.31L-59.9095 -20.6075Z"/>
                                <path
                                    d="M81.5328 95.6561C81.4341 95.6561 81.3683 95.6231 81.3025 95.5901L-64.9433 -24.3673C-65.1078 -24.4993 -65.1078 -24.7301 -65.0091 -24.8621L48.171 -163.554C48.2368 -163.62 48.3355 -163.686 48.4013 -163.686C48.5 -163.686 48.5987 -163.653 48.6645 -163.62L194.877 -43.6951C195.042 -43.5632 195.042 -43.3323 194.943 -43.2004L81.796 95.5241C81.7302 95.5901 81.6315 95.6561 81.5657 95.6561C81.5328 95.6561 81.5328 95.6561 81.5328 95.6561ZM-64.1865 -24.6972L81.467 94.7986L194.186 -43.3323L48.5329 -162.795L-64.1865 -24.6972Z"/>
                                <path
                                    d="M77.3874 100.174C77.2887 100.174 77.2229 100.141 77.1571 100.075L-69.2203 -28.7544C-69.3848 -28.8864 -69.3848 -29.1172 -69.2532 -29.2492L52.3496 -168.073C52.4154 -168.139 52.5141 -168.205 52.6128 -168.205C52.7115 -168.205 52.8102 -168.172 52.876 -168.106L199.22 -39.2759C199.286 -39.2099 199.352 -39.1109 199.352 -39.012C199.352 -38.9131 199.319 -38.8141 199.253 -38.7481L77.6506 100.042C77.5848 100.108 77.4861 100.174 77.3874 100.174ZM-68.4636 -29.0513L77.3545 99.2838L198.464 -38.979L52.6457 -167.314L-68.4636 -29.0513Z"/>
                                <path
                                    d="M72.9457 104.66C72.847 104.66 72.7812 104.627 72.6825 104.561L-73.4645 -33.4377C-73.5962 -33.5696 -73.6291 -33.8005 -73.4645 -33.9654L56.7913 -172.591C56.8571 -172.657 56.9558 -172.69 57.0545 -172.69C57.1532 -172.69 57.2519 -172.657 57.3177 -172.591L203.465 -34.5591C203.531 -34.4931 203.563 -34.3942 203.563 -34.2952C203.563 -34.1963 203.531 -34.0974 203.465 -34.0314L73.209 104.561C73.1431 104.627 73.0444 104.66 72.9457 104.66ZM-72.7078 -33.7345L72.9128 103.803L202.708 -34.2952L57.0545 -171.832L-72.7078 -33.7345Z"/>
                                <path
                                    d="M68.2408 109.146C68.1421 109.146 68.0434 109.113 67.9776 109.047L-77.676 -38.451C-77.8076 -38.5829 -77.8076 -38.8138 -77.676 -38.9787L61.4961 -177.11C61.5619 -177.176 61.6277 -177.208 61.7593 -177.208C61.858 -177.208 61.9567 -177.176 62.0225 -177.11L207.676 -29.6447C207.808 -29.5127 207.808 -29.2818 207.676 -29.1169L68.504 109.014C68.4053 109.113 68.3395 109.146 68.2408 109.146ZM-76.8863 -38.6819L68.2408 108.288L206.886 -29.3478L61.7593 -176.285L-76.8863 -38.6819Z"/>
                                <path
                                    d="M63.207 113.598C63.1083 113.598 63.0096 113.565 62.9438 113.466L-81.8215 -43.7285C-81.8873 -43.7944 -81.9202 -43.8934 -81.9202 -43.9923C-81.9202 -44.0913 -81.8873 -44.1902 -81.7886 -44.2562L66.5629 -181.529C66.6287 -181.595 66.7274 -181.628 66.8261 -181.628C66.9248 -181.628 67.0235 -181.595 67.0893 -181.496L211.855 -24.3017C211.986 -24.1698 211.986 -23.9389 211.822 -23.774L63.4373 113.499C63.3715 113.565 63.3057 113.598 63.207 113.598ZM-81.0318 -43.9593L63.2399 112.708L211.032 -24.0709L66.7932 -180.738L-81.0318 -43.9593Z"/>
                                <path
                                    d="M57.8769 117.985C57.7782 117.985 57.6795 117.952 57.6137 117.853L-85.9013 -49.3354C-85.9671 -49.4013 -86 -49.5003 -86 -49.5992C-86 -49.6982 -85.9342 -49.7971 -85.8684 -49.8301L71.8928 -185.916C72.0573 -186.048 72.2876 -186.015 72.3863 -185.883L215.901 -18.6946C215.967 -18.6286 216 -18.5297 216 -18.4307C216 -18.3318 215.934 -18.2328 215.868 -18.1998L58.1072 117.919C58.0414 117.952 57.9427 117.985 57.8769 117.985ZM-85.1446 -49.5332L57.8769 117.095L215.112 -18.5297L72.0902 -185.157L-85.1446 -49.5332Z"/>
                            </g>
                        </svg>
                        <div class="feature-content">
                            <h4>Wasting Ad Budget?</h4>
                            <p>Spending money on ads but not getting expected results? We optimize targeting and campaigns to reduce waste and deliver <strong>maximum return on investment</strong> from your budget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <div class="feature-card3 four magnetic-item">
                        <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 23L23 1M23 1C18.1111 1.91667 7.41667 3.75 1 1M23 1C22.0833 5.58333 20.25 15.6667 23 23" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <svg class="shape" width="195" height="118" viewBox="0 0 195 118" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M108.972 51.7893C108.939 51.7893 108.907 51.7893 108.841 51.7564L-22.6324 5.61378C-22.7311 5.5808 -22.7969 5.51484 -22.8298 5.41589C-22.8627 5.31694 -22.8627 5.21798 -22.8298 5.15202L20.6984 -119.555C20.7643 -119.753 20.9617 -119.852 21.1591 -119.786L152.665 -73.6432C152.764 -73.6103 152.83 -73.5443 152.863 -73.4453C152.895 -73.3464 152.895 -73.2474 152.863 -73.1815L109.334 51.5255C109.268 51.6904 109.137 51.7893 108.972 51.7893ZM-22.0731 5.05307L108.775 50.9648L152.073 -73.0825L21.2578 -118.994L-22.0731 5.05307Z"/>
                                <path
                                    d="M107.262 55.9447C107.229 55.9447 107.163 55.9447 107.13 55.9117L-26.712 3.63437C-26.8107 3.60139 -26.8765 3.53543 -26.9094 3.43649C-26.9423 3.33754 -26.9423 3.23857 -26.9094 3.17261L22.4424 -123.744C22.5082 -123.942 22.7385 -124.008 22.903 -123.942L156.745 -71.6647C156.942 -71.5988 157.008 -71.3679 156.942 -71.203L107.591 55.7138C107.558 55.8127 107.492 55.8787 107.393 55.9117C107.36 55.9447 107.295 55.9447 107.262 55.9447ZM-26.1198 3.10666L107.031 55.1201L156.12 -71.137L22.9688 -123.15L-26.1198 3.10666Z"/>
                                <path
                                    d="M105.32 60.1998C105.287 60.1998 105.222 60.1998 105.189 60.1668L-30.8248 1.45789C-30.9235 1.4249 -30.9893 1.35892 -31.0222 1.25998C-31.0551 1.16103 -31.0551 1.06209 -31.0222 0.996124L24.3505 -127.999C24.3834 -128.098 24.4492 -128.163 24.5479 -128.196C24.6466 -128.229 24.7453 -128.229 24.8111 -128.196L160.825 -69.5205C161.022 -69.4546 161.088 -69.2237 161.022 -69.0588L105.649 59.9689C105.584 60.1008 105.452 60.1998 105.32 60.1998ZM-30.2326 0.96315L105.123 59.3752L160.232 -68.9598L24.8769 -127.372L-30.2326 0.96315Z"/>
                                <path
                                    d="M103.149 64.4874C103.083 64.4874 103.05 64.4874 102.984 64.4544L-35.0031 -0.916946C-35.1677 -1.0159 -35.2664 -1.21379 -35.1677 -1.4117L26.5221 -132.319C26.555 -132.418 26.6208 -132.484 26.7195 -132.517C26.8182 -132.55 26.9169 -132.55 26.9827 -132.517L165.003 -67.1459C165.168 -67.0469 165.266 -66.849 165.168 -66.6511L103.478 64.2895C103.445 64.3885 103.379 64.4544 103.281 64.4874C103.248 64.4874 103.215 64.4874 103.149 64.4874ZM-34.378 -1.4117L102.984 63.6628L164.378 -66.6182L27.0156 -131.66L-34.378 -1.4117Z"/>
                                <path
                                    d="M100.813 68.8411C100.747 68.8411 100.714 68.8411 100.648 68.8081L-39.2145 -3.52258C-39.3132 -3.55557 -39.379 -3.65451 -39.379 -3.72047C-39.4119 -3.81943 -39.4119 -3.91837 -39.3461 -3.98433L28.9238 -136.64C28.9567 -136.739 29.0555 -136.805 29.1213 -136.805C29.22 -136.838 29.3187 -136.838 29.3845 -136.772L169.247 -64.4413C169.412 -64.3424 169.511 -64.1445 169.412 -63.9466L101.109 68.6432C101.043 68.7751 100.945 68.8411 100.813 68.8411ZM-38.5894 -4.01733L100.616 67.9835L168.556 -64.0126L29.3516 -136.013L-38.5894 -4.01733Z"/>
                                <path
                                    d="M98.2138 73.2276C98.148 73.2276 98.0822 73.2276 98.0493 73.1946L-43.4587 -6.39226C-43.6232 -6.49121 -43.689 -6.72208 -43.5903 -6.88699L31.4902 -141.093C31.5231 -141.192 31.6218 -141.225 31.7205 -141.258C31.8192 -141.291 31.9179 -141.258 31.9837 -141.225L173.492 -61.671C173.656 -61.572 173.722 -61.3411 173.623 -61.1762L98.5099 73.0627C98.477 73.1616 98.3783 73.1946 98.2796 73.2276C98.2796 73.2276 98.2467 73.2276 98.2138 73.2276ZM-42.8007 -6.82103L98.0822 72.403L172.834 -61.1762L31.9179 -140.4L-42.8007 -6.82103Z"/>
                                <path
                                    d="M95.3842 77.6803C95.3184 77.6803 95.2526 77.6473 95.1868 77.6143L-47.7359 -9.45955C-47.8017 -9.52553 -47.8675 -9.59149 -47.9004 -9.69044C-47.9333 -9.78938 -47.9004 -9.88834 -47.8675 -9.9543L34.3196 -145.512C34.4183 -145.677 34.6486 -145.743 34.8131 -145.644L177.736 -58.5705C177.9 -58.4716 177.966 -58.2407 177.867 -58.0758L95.6803 77.4824C95.6145 77.6143 95.4829 77.6803 95.3842 77.6803ZM-47.0779 -9.88832L95.2526 76.8228L177.045 -58.1088L34.7473 -144.82L-47.0779 -9.88832Z"/>
                                <path
                                    d="M92.2913 82.1328C92.2255 82.1328 92.1597 82.0998 92.0939 82.0668L-52.0462 -12.7909C-52.112 -12.8569 -52.1778 -12.9228 -52.2107 -13.0218C-52.2436 -13.1207 -52.2107 -13.2197 -52.1449 -13.2856L37.3792 -149.998C37.4779 -150.163 37.7082 -150.196 37.8727 -150.097L182.013 -55.2064C182.079 -55.1405 182.144 -55.0745 182.177 -54.9756C182.21 -54.8766 182.177 -54.7777 182.112 -54.7117L92.5874 81.9679C92.5216 82.0669 92.4229 82.1328 92.2913 82.1328ZM-51.3553 -13.2197L92.1926 81.2753L181.322 -54.8106L37.8069 -149.306L-51.3553 -13.2197Z"/>
                                <path
                                    d="M88.9684 86.6185C88.9026 86.6185 88.8368 86.5855 88.771 86.5526L-56.3232 -16.3859C-56.389 -16.4519 -56.4548 -16.5179 -56.4548 -16.6168C-56.4548 -16.7158 -56.4548 -16.8147 -56.389 -16.8807L40.7353 -154.517C40.8669 -154.682 41.0643 -154.715 41.2288 -154.616L186.323 -51.6773C186.389 -51.6113 186.455 -51.5453 186.455 -51.4464C186.455 -51.3474 186.455 -51.2485 186.389 -51.1825L89.2645 86.4866C89.1987 86.5525 89.1329 86.6185 89.0342 86.6185C89.0013 86.6185 89.0013 86.6185 88.9684 86.6185ZM-55.6323 -16.7817L88.9026 85.761L185.632 -51.2485L41.1301 -153.791L-55.6323 -16.7817Z"/>
                                <path
                                    d="M85.3822 91.1373C85.3164 91.1373 85.2177 91.1043 85.1519 91.0713L-60.6333 -20.2447C-60.6991 -20.3107 -60.7649 -20.3767 -60.7649 -20.4756C-60.7649 -20.5746 -60.7649 -20.6735 -60.6991 -20.7395L44.3215 -159.035C44.4531 -159.2 44.6834 -159.233 44.815 -159.101L190.633 -47.7852C190.798 -47.6532 190.83 -47.4223 190.699 -47.2904L85.6783 91.0053C85.6125 91.0713 85.5467 91.1373 85.448 91.1373C85.4151 91.1373 85.3822 91.1373 85.3822 91.1373ZM-59.9095 -20.6075L85.3164 90.2467L189.909 -47.4553L44.6834 -158.31L-59.9095 -20.6075Z"/>
                                <path
                                    d="M81.5328 95.6561C81.4341 95.6561 81.3683 95.6231 81.3025 95.5901L-64.9433 -24.3673C-65.1078 -24.4993 -65.1078 -24.7301 -65.0091 -24.8621L48.171 -163.554C48.2368 -163.62 48.3355 -163.686 48.4013 -163.686C48.5 -163.686 48.5987 -163.653 48.6645 -163.62L194.877 -43.6951C195.042 -43.5632 195.042 -43.3323 194.943 -43.2004L81.796 95.5241C81.7302 95.5901 81.6315 95.6561 81.5657 95.6561C81.5328 95.6561 81.5328 95.6561 81.5328 95.6561ZM-64.1865 -24.6972L81.467 94.7986L194.186 -43.3323L48.5329 -162.795L-64.1865 -24.6972Z"/>
                                <path
                                    d="M77.3874 100.174C77.2887 100.174 77.2229 100.141 77.1571 100.075L-69.2203 -28.7544C-69.3848 -28.8864 -69.3848 -29.1172 -69.2532 -29.2492L52.3496 -168.073C52.4154 -168.139 52.5141 -168.205 52.6128 -168.205C52.7115 -168.205 52.8102 -168.172 52.876 -168.106L199.22 -39.2759C199.286 -39.2099 199.352 -39.1109 199.352 -39.012C199.352 -38.9131 199.319 -38.8141 199.253 -38.7481L77.6506 100.042C77.5848 100.108 77.4861 100.174 77.3874 100.174ZM-68.4636 -29.0513L77.3545 99.2838L198.464 -38.979L52.6457 -167.314L-68.4636 -29.0513Z"/>
                                <path
                                    d="M72.9457 104.66C72.847 104.66 72.7812 104.627 72.6825 104.561L-73.4645 -33.4377C-73.5962 -33.5696 -73.6291 -33.8005 -73.4645 -33.9654L56.7913 -172.591C56.8571 -172.657 56.9558 -172.69 57.0545 -172.69C57.1532 -172.69 57.2519 -172.657 57.3177 -172.591L203.465 -34.5591C203.531 -34.4931 203.563 -34.3942 203.563 -34.2952C203.563 -34.1963 203.531 -34.0974 203.465 -34.0314L73.209 104.561C73.1431 104.627 73.0444 104.66 72.9457 104.66ZM-72.7078 -33.7345L72.9128 103.803L202.708 -34.2952L57.0545 -171.832L-72.7078 -33.7345Z"/>
                                <path
                                    d="M68.2408 109.146C68.1421 109.146 68.0434 109.113 67.9776 109.047L-77.676 -38.451C-77.8076 -38.5829 -77.8076 -38.8138 -77.676 -38.9787L61.4961 -177.11C61.5619 -177.176 61.6277 -177.208 61.7593 -177.208C61.858 -177.208 61.9567 -177.176 62.0225 -177.11L207.676 -29.6447C207.808 -29.5127 207.808 -29.2818 207.676 -29.1169L68.504 109.014C68.4053 109.113 68.3395 109.146 68.2408 109.146ZM-76.8863 -38.6819L68.2408 108.288L206.886 -29.3478L61.7593 -176.285L-76.8863 -38.6819Z"/>
                                <path
                                    d="M63.207 113.598C63.1083 113.598 63.0096 113.565 62.9438 113.466L-81.8215 -43.7285C-81.8873 -43.7944 -81.9202 -43.8934 -81.9202 -43.9923C-81.9202 -44.0913 -81.8873 -44.1902 -81.7886 -44.2562L66.5629 -181.529C66.6287 -181.595 66.7274 -181.628 66.8261 -181.628C66.9248 -181.628 67.0235 -181.595 67.0893 -181.496L211.855 -24.3017C211.986 -24.1698 211.986 -23.9389 211.822 -23.774L63.4373 113.499C63.3715 113.565 63.3057 113.598 63.207 113.598ZM-81.0318 -43.9593L63.2399 112.708L211.032 -24.0709L66.7932 -180.738L-81.0318 -43.9593Z"/>
                                <path
                                    d="M57.8769 117.985C57.7782 117.985 57.6795 117.952 57.6137 117.853L-85.9013 -49.3354C-85.9671 -49.4013 -86 -49.5003 -86 -49.5992C-86 -49.6982 -85.9342 -49.7971 -85.8684 -49.8301L71.8928 -185.916C72.0573 -186.048 72.2876 -186.015 72.3863 -185.883L215.901 -18.6946C215.967 -18.6286 216 -18.5297 216 -18.4307C216 -18.3318 215.934 -18.2328 215.868 -18.1998L58.1072 117.919C58.0414 117.952 57.9427 117.985 57.8769 117.985ZM-85.1446 -49.5332L57.8769 117.095L215.112 -18.5297L72.0902 -185.157L-85.1446 -49.5332Z"/>
                            </g>
                        </svg>
                        <div class="feature-content">
                           <h4>No Clear Results?</h4>
                           <p>Not sure what’s working in your marketing campaigns? We track performance, analyse  data, and continuously improve strategies using <strong>real insights</strong> to scale your business growth.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="contact-btn-area two">
                       <h6>How We Turn Strategy Into Real Results</h6>
<p>A clear, structured approach designed to generate better leads and improve your business performance.</p>
                        <a href="contact.php" class="primary-btn4 transparent">
                            <span class="icon">
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="content">Let’s Talk</span>
                            <span class="icon two">
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Feature Section End -->

    <!-- home4 Video Section Start -->
    <div class="home4-video-section">
        <video autoplay loop muted playsinline src="assets/video/home4-video.mp4"></video>
    </div>
    <!-- home4 Video Section End -->

    <!-- home4 Process Section Start -->
    <div class="home4-process-section mb-130">
        <div class="container">
            <div class="row justify-content-lg-end">
                <div class="col-xl-10 col-lg-11">
                    <div class="process-wrapper">
                        <ul>
                            <li>
                                <svg class="divider" width="6" height="98" viewBox="0 0 6 98" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5L5.88675 0H0.113249L2.5 5H3.5ZM2.5 93L0.113249 98H5.88675L3.5 93H2.5ZM2.5 4.5V93.5H3.5V4.5H2.5Z"/>
                                </svg>
                                <div class="single-process">
                               <div class="step-no">
                               <span>Step</span>
                              <strong>01</strong>
                             </div>
                            <div class="process-content">
                          <h5>Understanding Your <br>Business</h5>
                         <p>We analyze your <strong>business, audience, and goals</strong> to build a strong foundation for generating high-quality leads.</p>
                        </div>
                         </div>
                            </li>
                           <li>
                            <svg class="divider" width="6" height="98" viewBox="0 0 6 98" xmlns="http://www.w3.org/2000/svg">
                             <path d="M3.5 5L5.88675 0H0.113249L2.5 5H3.5ZM2.5 93L0.113249 98H5.88675L3.5 93H2.5ZM2.5 4.5V93.5H3.5V4.5H2.5Z"/>
                           </svg>
                            <div class="single-process">
                             <div class="step-no">
                             <span>Step</span>
                             <strong>02</strong>
                            </div>
                             <div class="process-content">
                              <h5>Building the Lead <br>System</h5>
                              <p>We create campaigns, landing pages, and funnels designed to attract the <strong>right audience</strong> and improve conversions.</p>
                              </div>
                              </div>
                                </li>
                            <li>
                                <div class="single-process">
                                    <div class="step-no">
                                        <span>Step</span>
                                        <strong>03</strong>
                                    </div>
                                    <div class="process-content">
                                        <h5>Optimization & <br>Growth</h5>
                                         <p>We track performance, refine strategies, and continuously optimize using <strong>real data insights</strong> to scale your business.</p>
                                      </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Process Section End -->

    <!-- home4 Service Section Start -->
    <div class="home4-service-section mb-130">
        <div class="container">
            <div class="row justify-content-lg-end mb-70 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-10 col-lg-11">
                    <div class="row g-4 justify-content-between align-items-end">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title2">
                                <h2><strong>Growth Systems</strong> Built for Leads & ROI</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-lg-end">
                            <div class="result-area">
                                 <span>ROI</span>
                             <p>Focused on measurable growth, better lead quality, and higher conversions.</p>
                                <svg width="200" height="6" viewBox="0 0 200 6" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM195 3.5L200 5.88675V0.113249L195 2.5V3.5ZM4.5 3.5H195.5V2.5H4.5V3.5Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-md-5 gy-4">
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="service-card3 magnetic-item">
                        <h4><a href="service-details.php?id=lead-generation">Lead Generation <br> Campaigns.</a></h4>
                        <ul>
                        <li>+ Audience Targeting</li>
                        <li>+ Lead Campaign Setup</li>
                        <li>+ Lead Quality Optimization</li>
                        </ul>
                        <a href="service-details.php?id=lead-generation" class="primary-btn3 three btn-hover">
                            See How It Works
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="service-card3 two magnetic-item">
                        <h4><a href="service-details.php?id=landing-funnels">Landing Pages <br> & Funnels.</a></h4>
                       <ul>
                        <li>+ Landing Page Design</li>
                        <li>+ Sales Funnel Setup</li>
                        <li>+ Conversion Optimization</li>
                      </ul>
                        <a href="service-details.php?id=landing-funnels" class="primary-btn3 three btn-hover">
                            See How It Works
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="service-card3 magnetic-item">
                        <h4><a href="service-details.php?id=performance-ads">Performance <br> Ads.</a></h4>
                        <ul>
                        <li>+ Meta Ads Campaigns</li>
                        <li>+ Google Ads Setup</li>
                        <li>+ Campaign Optimization</li>
                        </ul>
                        <a href="service-details.php?id=performance-ads" class="primary-btn3 three btn-hover">
                            See How It Works
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <div class="service-card3 three magnetic-item">
                        <h4><a href="service-details.php?id=automation">Automation & <br> Follow-Up.</a></h4>
                        <ul>
                        <li>+ WhatsApp Automation</li>
                        <li>+ Email Follow-Up</li>
                        <li>+ CRM Integration</li>
                        </ul>
                        <a href="service-details.php?id=automation" class="primary-btn3 three btn-hover">
                            See How It Works
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="service-card3 magnetic-item">
                        <h4><a href="service-details.php?id=lead-nurturing">Lead Nurturing <br> & Conversion.</a></h4>
                        <ul>
                        <li>+ Lead Qualification</li>
                        <li>+ Follow-Up Strategy</li>
                        <li>+ Conversion Tracking</li>
                        </ul>
                        <a href="service-details.php?id=lead-nurturing" class="primary-btn3 three btn-hover">
                            See How It Works
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="service-card3 four magnetic-item">
                        <h4><a href="service-details.php?id=growth-strategy">Growth Strategy <br> & Optimization.</a></h4>
                        <ul>
                        <li>+ Performance Analysis</li>
                        <li>+ A/B Testing</li>
                        <li>+ Scaling Strategy</li>
                       </ul>
                        <a href="service-details.php?id=growth-strategy" class="primary-btn3 three btn-hover">
                            See How It Works
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Service Section End -->

    <!-- home4 Counter Section Start -->
    <div class="home4-counter-section mb-130">
        <svg class="bg-shape" height="472" viewBox="0 0 1920 472" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M-29.145 1.7091C97.5305 119.595 459.868 370.081 881.462 307.82C1187.68 262.597 1395.29 252.524 1556.31 265.635C1717.31 278.745 1831.74 315.037 1951.63 362.577L1951.99 361.648C1832.05 314.085 1717.52 277.759 1556.39 264.638C1395.27 251.518 1187.57 261.603 881.316 306.831C460.166 369.026 98.1229 118.78 -28.4638 0.977051L-29.145 1.7091ZM-29.145 23.4171C97.5305 141.303 459.868 391.789 881.462 329.528C1187.68 284.305 1395.29 274.232 1556.31 287.343C1717.31 300.453 1831.74 336.745 1951.63 384.285L1951.99 383.356C1832.05 335.793 1717.52 299.467 1556.39 286.346C1395.27 273.226 1187.57 283.311 881.316 328.539C460.166 390.734 98.1229 140.488 -28.4638 22.6851L-29.145 23.4171ZM881.462 351.236C459.868 413.496 97.5307 163.011 -29.1448 45.125L-28.4636 44.393C98.1231 162.196 460.166 412.442 881.316 350.246C1187.57 305.018 1395.27 294.934 1556.39 308.054C1717.52 321.175 1832.05 357.501 1951.99 405.064L1951.63 405.993C1831.74 358.453 1717.31 322.161 1556.31 309.051C1395.29 295.94 1187.68 306.013 881.462 351.236ZM-29.145 66.8336C97.5305 184.719 459.868 435.205 881.462 372.944C1187.68 327.722 1395.29 317.648 1556.31 330.759C1717.31 343.869 1831.74 380.162 1951.63 427.702L1951.99 426.772C1832.05 379.21 1717.52 342.883 1556.39 329.763C1395.27 316.643 1187.57 326.727 881.316 371.955C460.166 434.15 98.1229 183.905 -28.4638 66.1016L-29.145 66.8336ZM881.462 394.652C459.868 456.913 97.5305 206.427 -29.145 88.5416L-28.4638 87.8096C98.1229 205.613 460.166 455.858 881.316 393.663C1187.57 348.435 1395.27 338.351 1556.39 351.471C1717.52 364.591 1832.05 400.918 1951.99 448.48L1951.63 449.41C1831.74 401.87 1717.31 365.577 1556.31 352.467C1395.29 339.356 1187.68 349.43 881.462 394.652ZM-29.145 110.25C97.5305 228.136 459.868 478.622 881.462 416.361C1187.68 371.138 1395.29 361.065 1556.31 374.176C1717.31 387.286 1831.74 423.578 1951.63 471.118L1951.99 470.189C1832.05 422.626 1717.52 386.3 1556.39 373.179C1395.27 360.059 1187.57 370.144 881.316 415.372C460.166 477.567 98.1229 227.321 -28.4638 109.518L-29.145 110.25Z"/>
        </svg>
        <div class="container">
           <div class="row justify-content-lg-end mb-70">
                <div class="col-lg-11">
                    <div class="row justify-content-between">
                        <div class="col-xl-8 col-lg-10 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="section-title2">
                                <div class="shape-and-title-area">
                                    <svg width="88" height="64" viewBox="0 0 88 64" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M88 64V0L0 64H88ZM10 44L60 8H10V44Z"/>
                                    </svg>
                                    <h2><strong>More Than Marketing</strong> — A Complete Growth System.</h2>
                                </div>
                               <p>We build complete growth systems that attract the right audience, convert them into qualified leads, and turn opportunities into real revenue.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-2 d-lg-flex d-none justify-content-lg-end">
                            <div class="animated-svg">
                                <div class="blinking-svg">
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                    <span class="circle"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div> 
           <div class="row g-xl-4 g-lg-3 g-4 mb-50">
                <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-counter bg-clip">
                        <img src="assets/img/home4/icon/home4-counter-vector1.svg" alt="" class="vector">
                        <div class="conter-content">
                            <div class="number">
                                <h2>100</h2>
                                <span>+</span>
                            </div>
                            <p>Campaign Strategies <br>Executed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-counter two">
                        <img src="assets/img/home4/icon/home4-counter-vector2.svg" alt="" class="vector">
                        <div class="conter-content">
                            <div class="number">
                                <h2>25</h2>
                                <span>+</span>
                            </div>
                            <p>Businesses <br>Supported</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="single-counter bg-clip three">
                        <img src="assets/img/home4/icon/home4-counter-vector3.svg" alt="" class="vector">
                        <div class="conter-content">
                            <div class="number">
                                <h2>6</h2>
                                <span>+</span>
                            </div>
                             <p>Core Growth <br>Systems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <div class="single-counter">
                        <img src="assets/img/home4/icon/home4-counter-vector4.svg" alt="" class="vector">
                        <div class="conter-content">
                            <div class="number">
                                <h2>90</h2>
                                <span>%</span>
                            </div>
                            <p>Clients <br>Retention Rate</p>
                        </div>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="contact-btn-area two">
                        <h6>Ready To Build A Smarter Growth System?</h6>
                        <a href="contact.php" class="primary-btn4 transparent">
                            <span class="icon">
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="content">Get A Proposal</span>
                            <span class="icon two">
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Counter Section End -->

    <!-- home4 Industry Section Start -->
    <div class="home4-industry-section mb-130">
        <div class="container">
            <div class="row g-4 align-items-center mb-70 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-3 col-md-4">
                    <div class="result-area">
                        <span>ROI</span>
                        <p>Growth systems designed to improve leads, conversions, and long-term business performance.</p>
                        <svg width="200" height="6" viewBox="0 0 200 6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM195 3.5L200 5.88675V0.113249L195 2.5V3.5ZM4.5 3.5H195.5V2.5H4.5V3.5Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="section-title2">
                        <h2><strong>Industries Where We</strong> Generate Real Results.</h2>
                        <p>We build lead generation, conversion, and automation systems tailored to the needs of each business model.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 align-items-md-end">
                <div class="col-lg-3 d-lg-block d-none">
                    <div class="industry-img">
                        <ul>
                            <li class="active">
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-sm-img1.png" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-sm-img2.png" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-sm-img3.png" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-sm-img4.png" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-sm-img5.png" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-sm-img6.png" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="industry-list">
                        <ul>
                            <li class="active">
                                <h2><a href="industries/healthcare-clinics.php">Health Care</a></h2>
                                <div class="industry-content">
                                    <p>Generate more patient inquiries through <strong>targeted ads, landing pages,</strong> and <strong>appointment-focused follow-up systems.</strong></p>
                                    <svg class="divider" width="313" height="6" viewBox="0 0 313 6" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 2.5C0.723858 2.5 0.5 2.72386 0.5 3C0.5 3.27614 0.723858 3.5 1 3.5V2.5ZM313 3L308 0.113249V5.88675L313 3ZM1 3.5H308.5V2.5H1V3.5Z"/>
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <h2><a href="industries/real-estate.php">Real Estate</a></h2>
                                <div class="industry-content">
                                 <p>Capture serious property buyers with <strong>high-intent lead generation, WhatsApp follow-ups,</strong> and <strong>conversion-driven funnels.</strong></p>
                                    <svg class="divider" width="313" height="6" viewBox="0 0 313 6" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 2.5C0.723858 2.5 0.5 2.72386 0.5 3C0.5 3.27614 0.723858 3.5 1 3.5V2.5ZM313 3L308 0.113249V5.88675L313 3ZM1 3.5H308.5V2.5H1V3.5Z"/>
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <h2><a href="industries/ecommerce-d2c.php">Ecommerce</a></h2>
                                <div class="industry-content">
                                <p>Increase online sales with <strong>performance marketing, retargeting campaigns,</strong> and <strong>conversion-optimized product funnels.</strong></p>
                                    <svg class="divider" width="313" height="6" viewBox="0 0 313 6" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 2.5C0.723858 2.5 0.5 2.72386 0.5 3C0.5 3.27614 0.723858 3.5 1 3.5V2.5ZM313 3L308 0.113249V5.88675L313 3ZM1 3.5H308.5V2.5H1V3.5Z"/>
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <h2><a href="industries/finance-insurance.php">Finance and Insurance</a></h2> 
                                <div class="industry-content">
                                <p>Bring in qualified prospects using <strong>intent-based targeting, lead qualification,</strong> and <strong>automated follow-up workflows.</strong></p>
                                    <svg class="divider" width="313" height="6" viewBox="0 0 313 6" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 2.5C0.723858 2.5 0.5 2.72386 0.5 3C0.5 3.27614 0.723858 3.5 1 3.5V2.5ZM313 3L308 0.113249V5.88675L313 3ZM1 3.5H308.5V2.5H1V3.5Z"/>
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <h2><a href="industries/education-coaching.php">Education and Coaching</a></h2>
                                <div class="industry-content">
                                 <p>Get more student or client enrollments with <strong>lead magnets, webinar funnels,</strong> and <strong>nurture automation systems.</strong></p>
                                    <svg class="divider" width="313" height="6" viewBox="0 0 313 6" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 2.5C0.723858 2.5 0.5 2.72386 0.5 3C0.5 3.27614 0.723858 3.5 1 3.5V2.5ZM313 3L308 0.113249V5.88675L313 3ZM1 3.5H308.5V2.5H1V3.5Z"/>
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <h2><a href="industries/local-businesses.php">Local Businesses</a></h2>
                                <div class="industry-content">
                                 <p>Grow localized inquiries and foot traffic through <strong>Map optimization, search visibility,</strong> and <strong>targeted localized ads.</strong></p>
                                    <svg class="divider" width="313" height="6" viewBox="0 0 313 6" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 2.5C0.723858 2.5 0.5 2.72386 0.5 3C0.5 3.27614 0.723858 3.5 1 3.5V2.5ZM313 3L308 0.113249V5.88675L313 3ZM1 3.5H308.5V2.5H1V3.5Z"/>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                        <a href="industries.php" class="details-btn">
                            View Industry Solutions
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="industry-img two">
                        <ul>
                            <li class="active">
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-img1.png" alt="">
                                </div>
                                <div class="counter-wrap">
                                    <div class="counter-content">
                                        <div class="number">
                                            <h4>98</h4>
                                            <span>%</span>
                                        </div>
                                        <span>Success Rate</span>
                                    </div>
                                    <svg class="arrow" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 14L13 2M13 2C10.3333 2.5 4.5 3.5 1 2M13 2C12.5 4.5 11.5 10 13 14" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-img2.png" alt="">
                                </div>
                                <div class="counter-wrap">
                                    <div class="counter-content">
                                        <div class="number">
                                            <h4>95</h4>
                                            <span>%</span>
                                        </div>
                                        <span>Success Rate</span>
                                    </div>
                                    <svg class="arrow" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 14L13 2M13 2C10.3333 2.5 4.5 3.5 1 2M13 2C12.5 4.5 11.5 10 13 14" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-img3.png" alt="">
                                </div>
                                <div class="counter-wrap">
                                    <div class="counter-content">
                                        <div class="number">
                                            <h4>99</h4>
                                            <span>%</span>
                                        </div>
                                        <span>Success Rate</span>
                                    </div>
                                    <svg class="arrow" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 14L13 2M13 2C10.3333 2.5 4.5 3.5 1 2M13 2C12.5 4.5 11.5 10 13 14" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-img4.png" alt="">
                                </div>
                                <div class="counter-wrap">
                                    <div class="counter-content">
                                        <div class="number">
                                            <h4>93</h4>
                                            <span>%</span>
                                        </div>
                                        <span>Success Rate</span>
                                    </div>
                                    <svg class="arrow" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 14L13 2M13 2C10.3333 2.5 4.5 3.5 1 2M13 2C12.5 4.5 11.5 10 13 14" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-img5.png" alt="">
                                </div>
                                <div class="counter-wrap">
                                    <div class="counter-content">
                                        <div class="number">
                                            <h4>94</h4>
                                            <span>%</span>
                                        </div>
                                        <span>Success Rate</span>
                                    </div>
                                    <svg class="arrow" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 14L13 2M13 2C10.3333 2.5 4.5 3.5 1 2M13 2C12.5 4.5 11.5 10 13 14" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <div class="single-img">
                                    <img src="assets/img/home4/industry-img6.png" alt="">
                                </div>
                                <div class="counter-wrap">
                                    <div class="counter-content">
                                        <div class="number">
                                            <h4>99</h4>
                                            <span>%</span>
                                        </div>
                                        <span>Success Rate</span>
                                    </div>
                                    <svg class="arrow" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 14L13 2M13 2C10.3333 2.5 4.5 3.5 1 2M13 2C12.5 4.5 11.5 10 13 14" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Industry Section End -->

    <!-- home4 Testimonial Section Start -->
    <div class="home4-testimonial-section mb-130">
        <img src="assets/img/home4/testimonial-bg.png" alt="" class="testimonial-bg light">
        <img src="assets/img/home4/testimonial-bg-dark.png" alt="" class="testimonial-bg dark">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-9 position-relative">
                    <svg class="divider" width="6" height="644" viewBox="0 0 6 644" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 5L5.88675 0H0.113249L2.5 5H3.5ZM2.5 639L0.113249 644H5.88675L3.5 639H2.5ZM2.5 4.5V639.5H3.5V4.5H2.5Z"/>
                    </svg>
                    <div class="testimonial-area">
                        <div class="section-title2 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <h2><strong>Why Businesses Work With Us</strong></h2>
                            <p>Clients choose Grow Boostly for lead quality, conversion-focused systems, and clear reporting — not vanity metrics.</p>
                        </div>
                        <div class="swiper home2-testimonial-slider mt-70">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card4">
                                        <div class="row g-4">
                                            <div class="col-xl-4 col-md-5">
                                                <div class="testimonial-img">
                                                    <img src="assets/img/home4/testimonial-img1.png" alt="">
                                                    <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-player">
                                                        <i class="bi bi-play-fill"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial-content">
                                                    <span>Strong Lead Quality</span>
                                                    <p>Grow Boostly rebuilt our campaigns and landing pages. We started getting decision-maker inquiries instead of random form fills — and our sales team could finally trust the pipeline.</p>
                                                    <div class="author-area">
                                                        <h5>Marketing Director</h5>
                                                        <span>B2B SaaS Company</span>
                                                    </div>
                                                    <svg class="quote" width="110" height="82" viewBox="0 0 110 82" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M26.3071 0.666626C41.5823 0.666626 52.6106 13.179 52.6106 31.7079C52.5149 58.6259 32.1178 77.6578 2.69136 81.3114C-0.0346363 81.6531 -1.08678 77.8951 1.42401 76.7895C12.7106 71.8073 18.4161 65.4871 19.1526 59.2333C19.7025 54.5595 17.1439 50.4646 13.9253 49.696C5.58953 47.7078 0.003623 37.4066 0.003623 26.7637C0.003623 19.8423 2.77488 13.2044 7.70774 8.31029C12.6406 3.41614 19.331 0.666626 26.3071 0.666626ZM83.6965 0.666626C98.9717 0.666626 110 13.179 110 31.7079C109.904 58.6259 89.5072 77.6578 60.0808 81.3114C57.3548 81.6531 56.3026 77.8951 58.8134 76.7895C70.1 71.8073 75.8055 65.4871 76.542 59.2333C77.0919 54.5595 74.5333 50.4646 71.3148 49.696C62.9789 47.7078 57.393 37.4066 57.393 26.7637C57.393 19.8423 60.1643 13.2044 65.0971 8.31029C70.03 3.41614 76.7204 0.666626 83.6965 0.666626Z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card4">
                                        <div class="row g-4">
                                            <div class="col-xl-4 col-md-5">
                                                <div class="testimonial-img">
                                                    <img src="assets/img/home4/testimonial-img2.png" alt="">
                                                    <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-player">
                                                        <i class="bi bi-play-fill"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial-content">
                                                    <span>Measurable ROI</span>
                                                    <p>Their Google and Meta setup gave us proper tracking from ad click to CRM. We could see cost per lead and close rates weekly — exactly what we needed to scale spend confidently.</p>
                                                    <div class="author-area">
                                                        <h5>Founder</h5>
                                                        <span>Real Estate Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card4">
                                        <div class="row g-4">
                                            <div class="col-xl-4 col-md-5">
                                                <div class="testimonial-img">
                                                    <img src="assets/img/home4/testimonial-img3.png" alt="">
                                                    <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-player">
                                                        <i class="bi bi-play-fill"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial-content">
                                                    <span>End-to-End Support</span>
                                                    <p>From strategy to automation and follow-up, the team handled everything under one roof. Response times were fast and the growth plan was practical, not generic agency talk.</p>
                                                    <div class="author-area">
                                                        <h5>Operations Head</h5>
                                                        <span>Service Business</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="gb-testimonial-sidebar">
                        <div class="gb-trust-stat">
                            <strong>100%</strong>
                            <p><b>ROI-focused</b> campaigns with tracking from click to CRM.</p>
                        </div>
                        <div class="gb-trust-stat">
                            <strong>3x</strong>
                            <p>Typical lift in <b>qualified leads</b> after funnel and targeting fixes.</p>
                        </div>
                        <div class="gb-trust-stat">
                            <strong>24h</strong>
                            <p><b>Strategy support</b> with clear weekly performance updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Testimonial Section End -->

    <!-- home4 Case Study Section Start -->
    <div class="home4-case-study-section mb-130">
        <div class="container">
            <div class="row justify-content-lg-end mb-70 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-9 col-lg-10">
                    <div class="row g-4 justify-content-between align-items-end">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title2">
                                <h2><strong>Real Growth</strong> From Client Campaigns.</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-lg-end">
                            <div class="result-area">
                                <span>3x</span>
                                <p>Many clients see <strong>3x more qualified leads</strong> after funnel and targeting improvements.</p>
                                <svg width="200" height="6" viewBox="0 0 200 6" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM195 3.5L200 5.88675V0.113249L195 2.5V3.5ZM4.5 3.5H195.5V2.5H4.5V3.5Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 mb-50">
                <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <article class="gb-home-case-card">
                        <a href="case-study-details.php?id=b2b-lead-generation-saas" class="gb-home-case-card-media">
                            <img src="assets/img/innerpages/lead-generation-case-study.png" alt="B2B Lead Generation Case Study – Grow Boostly">
                        </a>
                        <div class="gb-home-case-card-body">
                            <span class="gb-home-case-badge gb-home-case-badge--blue">B2B SaaS Company</span>
                            <h3 class="gb-home-case-title">
                                <a href="case-study-details.php?id=b2b-lead-generation-saas">B2B Lead Generation System for a SaaS Company</a>
                            </h3>
                            <div class="gb-home-case-metrics">
                                <div class="gb-home-case-metric">
                                    <span class="gb-home-case-metric-label">Qualified Leads</span>
                                    <span class="gb-home-case-metric-value">320<em>%</em></span>
                                </div>
                                <div class="gb-home-case-metric">
                                    <span class="gb-home-case-metric-label">Cost Per Lead</span>
                                    <span class="gb-home-case-metric-value">-45<em>%</em></span>
                                </div>
                            </div>
                            <a href="case-study-details.php?id=b2b-lead-generation-saas" class="gb-home-case-cta">
                                <span>Read Case Study</span>
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <article class="gb-home-case-card">
                        <a href="case-study-details.php?id=google-ads-real-estate" class="gb-home-case-card-media">
                            <img src="assets/img/innerpages/performance-marketing-case-study.png" alt="Google Ads Real Estate Case Study – Grow Boostly">
                        </a>
                        <div class="gb-home-case-card-body">
                            <span class="gb-home-case-badge gb-home-case-badge--green">Real Estate Developer</span>
                            <h3 class="gb-home-case-title">
                                <a href="case-study-details.php?id=google-ads-real-estate">Google Ads Funnel for a Real Estate Developer</a>
                            </h3>
                            <div class="gb-home-case-metrics">
                                <div class="gb-home-case-metric">
                                    <span class="gb-home-case-metric-label">Conversion Rate</span>
                                    <span class="gb-home-case-metric-value">186<em>%</em></span>
                                </div>
                                <div class="gb-home-case-metric">
                                    <span class="gb-home-case-metric-label">Monthly Leads</span>
                                    <span class="gb-home-case-metric-value">3<em>x</em></span>
                                </div>
                            </div>
                            <a href="case-study-details.php?id=google-ads-real-estate" class="gb-home-case-cta">
                                <span>Read Case Study</span>
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="case-study.php" class="gb-home-case-viewall">
                        View All Case Studies
                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" fill="none"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Case Study Section End -->

      <!-- home4 Team Section Start -->
<div class="home4-team-section mb-130">
    <div class="container">
        <div class="row justify-content-lg-end mb-70">
            <div class="col-xl-10 col-lg-11">
                <div class="row g-4 justify-content-between align-items-end">
                    <div class="col-xl-5 col-md-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="section-title2">
                            <h2><strong>Why Businesses</strong> Choose GrowBoostly.</h2>
                            <p>We build lead generation, conversion, and automation systems designed to turn interest into real business growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-md-end wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="button-area">
                            <svg class="arrow" width="268" height="108" viewBox="0 0 268 108" xmlns="http://www.w3.org/2000/svg">
                                <path d="M68 105L63 102.113V107.887L68 105ZM2 105L1.6746 104.62L0.648371 105.5H2V105ZM58 57L58.3254 57.3796L58.6308 57.1178L58.4405 56.7634L58 57ZM29 3V2.5H28.1639L28.5595 3.23656L29 3ZM263 3.5L268 5.88675V0.113249L263 2.5V3.5ZM63.5 104.5H2V105.5H63.5V104.5ZM2.3254 105.38L58.3254 57.3796L57.6746 56.6204L1.6746 104.62L2.3254 105.38ZM58.4405 56.7634L29.4405 2.76344L28.5595 3.23656L57.5595 57.2366L58.4405 56.7634ZM29 3.5H263.5V2.5H29V3.5Z"/>
                            </svg>
                            <h5>Growth Focused
                                <img src="assets/img/home4/eye-blink.gif" alt="">
                            </h5>
                            <a href="contact.php" class="primary-btn4 black-bg">
                                <span class="icon">
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </span>
                                <span class="content">Get Free Growth Audit</span>
                                <span class="icon two">
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <div class="row mb-50">
            <div class="col-lg-12">
                <div class="gb-choose-grid">

                    <div class="gb-choose-card">
                        <div class="gb-choose-img-wrapper">
                            <a href="service-details.php?id=lead-generation">
                                <img src="assets/img/home4/High-Intent-Leads.png" alt="High Intent Leads">
                            </a>
                        </div>
                        <div class="gb-choose-card-content">
                            <h4><a href="service-details.php?id=lead-generation">High-Intent Leads</a></h4>
                            <p>Targeted campaigns setup specifically to attract and capture serious buyers at the right moment.</p>
                            <a href="service-details.php?id=lead-generation" class="gb-choose-learn-more">
                                Learn More <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>
                    </div>

                    <div class="gb-choose-card">
                        <div class="gb-choose-img-wrapper">
                            <a href="service-details.php?id=landing-funnels">
                                <img src="assets/img/home4/Conversion_Funnels.png" alt="Conversion Funnels">
                            </a>
                        </div>
                        <div class="gb-choose-card-content">
                            <h4><a href="service-details.php?id=landing-funnels">Conversion Funnels</a></h4>
                            <p>Mobile-first landing pages built to turn traffic and clicks into active sales inquiries and leads.</p>
                            <a href="service-details.php?id=landing-funnels" class="gb-choose-learn-more">
                                Learn More <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>
                    </div>

                    <div class="gb-choose-card">
                        <div class="gb-choose-img-wrapper">
                            <a href="service-details.php?id=automation">
                                <img src="assets/img/home4/CRM-Follow-Up.png" alt="CRM & Follow-Up">
                            </a>
                        </div>
                        <div class="gb-choose-card-content">
                            <h4><a href="service-details.php?id=automation">CRM & Follow-Up</a></h4>
                            <p>Capture, track, route, and nurture every lead properly, ensuring that zero pipeline deals are lost.</p>
                            <a href="service-details.php?id=automation" class="gb-choose-learn-more">
                                Learn More <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>
                    </div>

                    <div class="gb-choose-card">
                        <div class="gb-choose-img-wrapper">
                            <a href="services/ai-based-lead-targeting.php">
                                <img src="assets/img/home4/AI-Automation.png" alt="AI Automation">
                            </a>
                        </div>
                        <div class="gb-choose-card-content">
                            <h4><a href="services/ai-based-lead-targeting.php">AI Automation</a></h4>
                            <p>Automate user responses, instant follow-ups, qualification rules, and multi-channel lead flows.</p>
                            <a href="services/ai-based-lead-targeting.php" class="gb-choose-learn-more">
                                Learn More <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>
                    </div>

                    <div class="gb-choose-card">
                        <div class="gb-choose-img-wrapper">
                            <a href="services/seo.php">
                                <img src="assets/img/home4/SEO-Visibility.png" alt="SEO & Visibility">
                            </a>
                        </div>
                        <div class="gb-choose-card-content">
                            <h4><a href="services/seo.php">SEO & Visibility</a></h4>
                            <p>Build long-term organic traffic, search presence, and ranking positions across primary engines.</p>
                            <a href="services/seo.php" class="gb-choose-learn-more">
                                Learn More <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>
                    </div>

                    <div class="gb-choose-card">
                        <div class="gb-choose-img-wrapper">
                            <a href="service-details.php?id=growth-strategy">
                                <img src="assets/img/home4/Performance-Tracking.png" alt="Performance Tracking">
                            </a>
                        </div>
                        <div class="gb-choose-card-content">
                            <h4><a href="service-details.php?id=growth-strategy">Performance Tracking</a></h4>
                            <p>Accurately measure what works, analyze funnel performance, and optimize campaigns for a higher ROI.</p>
                            <a href="service-details.php?id=growth-strategy" class="gb-choose-learn-more">
                                Learn More <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home4 Team Section End -->

    <!-- home4 Contact Section Start -->
    <div class="home4-contact-section mb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="contact-wrapper">
                        <div class="contact-content">
                            <div class="section-title2">
                                <h2><strong>Let’s Start</strong> A Project?</h2>
                                <p>Get <strong>30 Minutes</strong> free call with our marketing expert about your topics or Projects.</p>
                            </div>
                            <div class="home4-contact-btn-area">
                                <a href="contact.php" class="primary-btn4">
                                    <span class="icon">
                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                    </span>
                                    <span class="content">Free Stretagy Session</span>
                                    <span class="icon two">
                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="img-list">
                                    <li>
                                        <video class="video1" autoplay loop muted playsinline src="assets/video/home4-contact-video1.mp4"></video>
                                    </li>
                                    <li><img src="assets/img/home4/home4-contact-img2.png" alt=""></li>
                                    <li>
                                        <video class="video2" autoplay loop muted playsinline src="assets/video/home4-contact-video2.mp4"></video>
                                    </li>
                                    <li>
                                        <video class="video2" autoplay loop muted playsinline src="assets/video/home4-contact-video3.mp4"></video>
                                    </li>
                                    <li><img src="assets/img/home4/home4-contact-img5.png" alt=""></li>
                                    <li><img src="assets/img/home4/home4-contact-img6.png" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home4 Contact Section End -->
     
    <?php include 'footer.php'; ?>

</body>

</html>