<?php
// include '../header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebranding Services in India | GrowBoostly</title>
    <meta name="description" content="GrowBoostly provides premium rebranding services for businesses that need a fresh logo, updated brand identity, stronger messaging, modern visual style, social media look, website presentation and growth-ready brand repositioning.">
    <meta name="keywords" content="Rebranding Services India, Brand Refresh, Logo Redesign, Brand Identity Redesign, Business Rebranding, Brand Makeover, GrowBoostly">
    
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
    
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
    .rebrand-page {
      /* Colors & Design Variables */
      --rebrand-ink: #07111f;
      --rebrand-text: #172033;
      --rebrand-muted: #667085;
      --rebrand-soft: #f6f8fc;
      --rebrand-white: #fff;
      --rebrand-line: #e7ebf3;
      --rebrand-green: #16c784;
      --rebrand-blue: #2563eb;
      --rebrand-violet: #7c3aed;
      --rebrand-pink: #e1306c;
      --rebrand-orange: #f97316;
      --rebrand-shadow: 0 26px 75px rgba(7, 17, 31, .13);
      --rebrand-shadow-soft: 0 14px 34px rgba(7, 17, 31, .07);
      --rebrand-grad: linear-gradient(135deg, #16c784 0%, #2563eb 55%, #7c3aed 100%);
      --rebrand-grad2: linear-gradient(135deg, #f97316 0%, #e1306c 45%, #7c3aed 100%);
      
      color: var(--rebrand-text);
      line-height: 1.65;
      font-family: Inter, Arial, Helvetica, sans-serif;
    }

    .rebrand-page .rebrand-breadcrumb-list {
      justify-content: flex-start;
      margin-bottom: 25px;
      padding: 0;
      display: flex;
      align-items: center;
      gap: 8px;
      list-style: none;
    }

    .rebrand-page .rebrand-breadcrumb-list li {
      display: inline-flex;
      align-items: center;
    }

    .rebrand-page .rebrand-breadcrumb-list li a {
      color: var(--rebrand-muted);
      text-decoration: none;
      font-size: 13px;
      font-weight: 500;
      transition: color 0.2s;
    }

    .rebrand-page .rebrand-breadcrumb-list li a:hover {
      color: var(--rebrand-orange);
    }

    .rebrand-page .rebrand-section {
      padding: 96px 0;
    }

    .rebrand-page .rebrand-soft {
      background: linear-gradient(180deg, #fff, #f7f9fd);
    }

    .rebrand-page .rebrand-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 16px;
      border-radius: 999px;
      background: rgba(225, 48, 108, .08);
      color: #e1306c;
      font-weight: 800;
      font-size: 12px;
      letter-spacing: .8px;
      text-transform: uppercase;
      margin-bottom: 18px;
    }

    .rebrand-page .rebrand-eyebrow.dark {
      background: rgba(255, 255, 255, .11);
      border: 1px solid rgba(255, 255, 255, .16);
      color: #fff;
    }

    .rebrand-page .rebrand-title {
      margin: 0 0 18px;
      font-size: clamp(32px, 3.8vw, 42px);
      line-height: 1.15;
      color: var(--rebrand-ink);
      letter-spacing: -1.5px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-sub {
      max-width: 900px;
      margin: 0 auto 44px;
      color: var(--rebrand-muted);
      font-size: 16.5px;
      line-height: 1.7;
    }

    .rebrand-page .rebrand-btns {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-top: 30px;
    }

    .rebrand-page .rebrand-btns.justify-content-center {
      justify-content: center;
    }

    .rebrand-page .rebrand-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 15px 24px;
      border-radius: 999px;
      font-weight: 900;
      border: 1px solid transparent;
      transition: .25s;
      text-decoration: none;
    }

    .rebrand-page .rebrand-btn:hover {
      transform: translateY(-3px);
      color: inherit;
    }

    .rebrand-page .rebrand-btn-main {
      background: var(--rebrand-grad);
      color: #fff;
      box-shadow: 0 18px 34px rgba(37, 99, 235, .24);
    }

    .rebrand-page .rebrand-btn-main:hover {
      color: #fff;
    }

    .rebrand-page .rebrand-btn-light {
      background: #fff;
      color: var(--rebrand-ink);
      border-color: var(--rebrand-line);
      box-shadow: 0 12px 24px rgba(7, 17, 31, .06);
    }

    .rebrand-page .rebrand-btn-outline {
      background: rgba(255, 255, 255, .08);
      color: #fff;
      border-color: rgba(255, 255, 255, .22);
    }

    .rebrand-page .rebrand-btn-outline:hover {
      background: #fff;
      color: var(--rebrand-ink) !important;
      border-color: #fff;
    }

    .rebrand-page .rebrand-hero .rebrand-btn-outline {
      background: #fff;
      color: var(--rebrand-ink);
      border-color: var(--rebrand-line);
      box-shadow: 0 12px 24px rgba(7, 17, 31, .06);
    }

    .rebrand-page .rebrand-hero .rebrand-btn-outline:hover {
      border-color: var(--rebrand-blue);
      color: var(--rebrand-blue);
      background: rgba(37, 99, 235, .04);
      transform: translateY(-3px);
    }

    /* Hero Section */
    .rebrand-page .rebrand-hero {
      position: relative;
      overflow: hidden;
      padding: 140px 0 98px;
      background:
        radial-gradient(circle at 12% 8%, rgba(22, 199, 132, .08), transparent 28%),
        radial-gradient(circle at 88% 8%, rgba(225, 48, 108, .09), transparent 30%),
        radial-gradient(circle at 55% 105%, rgba(37, 99, 235, .08), transparent 40%),
        linear-gradient(180deg, #f7f9fd 0%, #ffffff 100%);
      color: var(--rebrand-text);
    }

    .rebrand-page .rebrand-hero:before {
      content: "";
      position: absolute;
      inset: 0;
      background-image: linear-gradient(rgba(7, 17, 31, .03) 1px, transparent 1px), linear-gradient(90deg, rgba(7, 17, 31, .03) 1px, transparent 1px);
      background-size: 44px 44px;
      mask-image: linear-gradient(to bottom, rgba(0, 0, 0, .8), transparent 90%);
    }

    .rebrand-page .rebrand-hero:after {
      content: "";
      position: absolute;
      left: -10%;
      right: -10%;
      bottom: -1px;
      height: 120px;
      background: linear-gradient(180deg, transparent, #fff);
    }

    .rebrand-page .rebrand-hero-title {
      margin: 0 0 22px;
      font-size: clamp(38px, 4.5vw, 56px);
      line-height: 1.15;
      letter-spacing: -1.5px;
      color: var(--rebrand-ink);
    }

    .rebrand-page .rebrand-hero-desc {
      font-size: 17px;
      line-height: 1.7;
      color: var(--rebrand-muted);
      max-width: 720px;
      margin: 0;
    }

    .rebrand-page .rebrand-accent {
      background: linear-gradient(135deg, #16c784 0%, #2563eb 55%, #e1306c 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }

    .rebrand-page .rebrand-hero-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 30px;
    }

    .rebrand-page .rebrand-hero-tags span {
      padding: 9px 16px;
      border-radius: 999px;
      background: rgba(37, 99, 235, .06);
      border: 1px solid rgba(37, 99, 235, .12);
      font-weight: 800;
      font-size: 14px;
      color: var(--rebrand-blue);
    }

    .rebrand-page .rebrand-hero-metrics .rebrand-stat {
      padding: 18px;
      border-radius: 22px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: var(--rebrand-shadow-soft);
      backdrop-filter: blur(10px);
      height: 100%;
    }

    .rebrand-page .rebrand-hero-metrics .rebrand-stat strong {
      display: block;
      font-size: 20px;
      color: var(--rebrand-ink);
      line-height: 1;
      margin-bottom: 8px;
    }

    .rebrand-page .rebrand-hero-metrics .rebrand-stat span {
      font-size: 12px;
      color: var(--rebrand-muted);
      line-height: 1.4;
      display: block;
    }

    .rebrand-page .rebrand-hero-visual {
      position: relative;
      min-height: 650px;
    }

    .rebrand-page .rebrand-board {
      position: absolute;
      right: 0;
      top: 0;
      width: min(595px, 100%);
      border-radius: 38px;
      padding: 18px;
      background: rgba(246, 248, 252, 0.85);
      border: 1px solid rgba(7, 17, 31, 0.08);
      box-shadow: 0 30px 70px rgba(7, 17, 31, 0.12);
      backdrop-filter: blur(22px);
      z-index: 2;
      animation: rebrand-float-board 6s ease-in-out infinite;
    }

    .rebrand-page .rebrand-board-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 14px;
    }

    .rebrand-page .rebrand-dots {
      display: flex;
      gap: 8px;
    }

    .rebrand-page .rebrand-dots i {
      display: block;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #ef4444;
    }

    .rebrand-page .rebrand-dots i:nth-child(2) {
      background: #f59e0b;
    }

    .rebrand-page .rebrand-dots i:nth-child(3) {
      background: #22c55e;
    }

    .rebrand-page .rebrand-board-label {
      font-size: 12px;
      font-weight: 900;
      color: var(--rebrand-muted);
      padding: 7px 11px;
      border-radius: 999px;
      background: rgba(7, 17, 31, 0.05);
    }

    .rebrand-page .rebrand-workspace {
      border-radius: 30px;
      background: #fff;
      color: var(--rebrand-ink);
      padding: 18px;
      display: grid;
      gap: 14px;
      min-height: 470px;
    }

    .rebrand-page .rebrand-preview {
      position: relative;
      overflow: hidden;
      min-height: 360px;
      border-radius: 32px;
      background: linear-gradient(135deg, #fff7fb, #eef6ff);
      padding: 30px;
    }

    .rebrand-page .rebrand-before-after {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 18px;
      height: 100%;
    }

    .rebrand-page .rebrand-brand-side {
      border-radius: 28px;
      padding: 22px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 16px 34px rgba(7, 17, 31, .08);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 300px;
    }

    .rebrand-page .rebrand-old-brand {
      opacity: .72;
      filter: grayscale(.6);
    }

    .rebrand-page .rebrand-brand-side span {
      width: max-content;
      padding: 8px 12px;
      border-radius: 999px;
      background: #f3f6fb;
      color: #2563eb;
      font-size: 12px;
      font-weight: 900;
    }

    .rebrand-page .rebrand-old-brand span {
      color: #667085;
    }

    .rebrand-page .rebrand-logo-sample {
      height: 120px;
      border-radius: 28px;
      display: grid;
      place-items: center;
      font-size: 42px;
      font-weight: 900;
      color: #fff;
      letter-spacing: -2px;
      background: #94a3b8;
    }

    .rebrand-page .rebrand-new-brand .rebrand-logo-sample {
      background: var(--rebrand-grad2);
      box-shadow: 0 18px 38px rgba(225, 48, 108, .22);
    }

    .rebrand-page .rebrand-brand-side p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 13px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-system-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .rebrand-page .rebrand-system-row div {
      padding: 16px;
      border-radius: 22px;
      background: #f6f8fc;
      border: 1px solid var(--rebrand-line);
      color: var(--rebrand-ink);
      box-shadow: 0 10px 24px rgba(7, 17, 31, .05);
      transition: .3s;
    }
    
    .rebrand-page .rebrand-system-row div:hover {
      transform: translateY(-4px);
      border-color: var(--rebrand-orange);
    }

    .rebrand-page .rebrand-system-row b {
      display: block;
      font-size: 16px;
    }

    .rebrand-page .rebrand-system-row span {
      display: block;
      font-size: 12px;
      color: var(--rebrand-muted);
      font-weight: 800;
    }

    .rebrand-page .rebrand-floating {
      position: absolute;
      z-index: 5;
      padding: 16px 18px;
      border-radius: 22px;
      background: #fff;
      color: var(--rebrand-ink);
      box-shadow: var(--rebrand-shadow);
      font-weight: 900;
      font-size: 15px;
    }

    .rebrand-page .rebrand-floating small {
      display: block;
      color: var(--rebrand-muted);
      font-weight: 700;
      font-size: 11px;
    }

    .rebrand-page .rebrand-floating.rebrand-one {
      left: 28px;
      top: 88px;
      animation: rebrand-float-one 5s ease-in-out infinite;
    }

    .rebrand-page .rebrand-floating.rebrand-two {
      right: 22px;
      bottom: 58px;
      animation: rebrand-float-two 6.5s ease-in-out infinite;
    }

    /* Trust Strip */
    .rebrand-page .rebrand-trust-strip {
      position: relative;
      margin-top: 40px;
      z-index: 10;
    }

    .rebrand-page .rebrand-trust-card {
      background: #fff;
      border: 1px solid var(--rebrand-line);
      border-radius: 28px;
      padding: 24px;
      box-shadow: 0 18px 45px rgba(7, 17, 31, .08);
      min-height: 178px;
      height: 100%;
    }

    .rebrand-page .rebrand-icon {
      width: 52px;
      height: 52px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: rgba(37, 99, 235, .08);
      font-size: 25px;
      margin-bottom: 16px;
    }

    .rebrand-page .rebrand-trust-card h3 {
      margin: 0 0 8px;
      color: var(--rebrand-ink);
      font-size: 20px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-trust-card p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 14.5px;
    }

    /* Trust Section (Impact) */
    .rebrand-page .rebrand-trust-section {
      background: linear-gradient(135deg, #f6f8fc 0%, #eff2f9 100%);
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section,
    .rebrand-page .rebrand-dark-section {
      background:
        radial-gradient(circle at 16% 0%, rgba(225, 48, 108, .18), transparent 30%),
        radial-gradient(circle at 88% 10%, rgba(37, 99, 235, .18), transparent 28%),
        linear-gradient(135deg, #07111f, #0d1b2f);
      color: #fff;
    }

    .rebrand-page .rebrand-dark-section .rebrand-title,
    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-trust-content .rebrand-title {
      color: #fff;
    }

    .rebrand-page .rebrand-dark-section .rebrand-sub,
    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-trust-content p {
      color: rgba(255, 255, 255, .78);
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-value {
      background: rgba(255, 255, 255, .07);
      border: 1px solid rgba(255, 255, 255, .12);
      box-shadow: none;
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-value:hover {
      background: rgba(255, 255, 255, .11);
      box-shadow: 0 12px 32px rgba(0, 0, 0, .2);
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-value h3 {
      color: #fff;
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-value p {
      color: rgba(255, 255, 255, .72);
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-value-icon {
      background: rgba(255, 255, 255, .1);
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-result-box {
      background: rgba(255, 255, 255, .09);
      border: 1px solid rgba(255, 255, 255, .14);
      padding: 18px;
      border-radius: 18px;
      margin-top: 24px;
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-result-box strong {
      color: #fff;
    }

    .rebrand-page .rebrand-trust-section.rebrand-dark-section .rebrand-result-box span {
      color: rgba(255, 255, 255, .74);
    }

    .rebrand-page .rebrand-brand-impact-board {
      position: relative;
      border-radius: 38px;
      padding: 30px;
      background:
        radial-gradient(circle at 12% 14%, rgba(225, 48, 108, .14), transparent 30%),
        radial-gradient(circle at 92% 12%, rgba(37, 99, 235, .16), transparent 32%),
        linear-gradient(135deg, #fff7fb, #f3f6ff);
      border: 1px solid var(--rebrand-line);
      box-shadow: var(--rebrand-shadow);
      overflow: hidden;
    }

    .rebrand-page .rebrand-brand-impact-board:before {
      content: "";
      position: absolute;
      inset: 18px;
      border-radius: 30px;
      border: 1px solid rgba(255, 255, 255, .9);
      pointer-events: none;
    }

    .rebrand-page .rebrand-impact-header {
      position: relative;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 22px;
      padding: 18px 20px;
      border-radius: 24px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 14px 32px rgba(7, 17, 31, .06);
    }

    .rebrand-page .rebrand-impact-header span {
      color: var(--rebrand-muted);
      font-weight: 900;
    }

    .rebrand-page .rebrand-impact-header strong {
      font-size: 34px;
      line-height: 1;
      background: var(--rebrand-grad2);
      -webkit-background-clip: text;
      color: transparent;
    }

    .rebrand-page .rebrand-impact-card {
      padding: 20px;
      border-radius: 24px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 12px 28px rgba(7, 17, 31, .05);
      transition: .25s;
      height: 100%;
    }

    .rebrand-page .rebrand-impact-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 18px 40px rgba(7, 17, 31, .10);
    }

    .rebrand-page .rebrand-impact-card b {
      display: inline-grid;
      place-items: center;
      width: 42px;
      height: 42px;
      border-radius: 16px;
      background: rgba(225, 48, 108, .10);
      color: #e1306c;
      margin-bottom: 14px;
      font-size: 18px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-impact-card h3 {
      margin: 0 0 8px;
      color: var(--rebrand-ink);
      font-size: 18px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-impact-card p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 14px;
    }

    .rebrand-page .rebrand-identity-flow {
      position: relative;
      z-index: 2;
      margin-top: 22px;
      display: grid;
      grid-template-columns: 1fr 24px 1fr 24px 1fr 24px 1fr;
      align-items: center;
    }

    .rebrand-page .rebrand-identity-flow div {
      padding: 13px;
      border-radius: 999px;
      background: var(--rebrand-ink);
      color: #fff;
      text-align: center;
      font-weight: 900;
      font-size: 12px;
    }

    .rebrand-page .rebrand-identity-flow i {
      height: 2px;
      background: linear-gradient(90deg, #e1306c, #2563eb);
    }

    .rebrand-page .rebrand-value-list {
      display: grid;
      gap: 16px;
      margin-top: 26px;
    }

    .rebrand-page .rebrand-value {
      display: flex;
      gap: 14px;
      align-items: flex-start;
      padding: 18px;
      border-radius: 24px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 12px 28px rgba(7, 17, 31, .05);
      transition: .25s;
    }

    .rebrand-page .rebrand-value:hover {
      transform: translateX(4px);
      box-shadow: 0 18px 40px rgba(7, 17, 31, .09);
    }

    .rebrand-page .rebrand-value-icon {
      flex: 0 0 52px;
      width: 52px;
      height: 52px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, rgba(225, 48, 108, .12), rgba(37, 99, 235, .10));
      font-size: 24px;
    }

    .rebrand-page .rebrand-value h3 {
      margin: 0 0 4px;
      color: var(--rebrand-ink);
      font-size: 19px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-value p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 14.5px;
    }

    .rebrand-page .rebrand-goal-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 22px;
    }

    .rebrand-page .rebrand-goal-card {
      position: relative;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      border-radius: 28px;
      padding: 28px;
      box-shadow: 0 12px 28px rgba(7, 17, 31, .05);
      overflow: hidden;
      transition: .25s;
      height: 100%;
      text-align: left;
    }

    .rebrand-page .rebrand-goal-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 40px rgba(7, 17, 31, .10);
    }

    .rebrand-page .rebrand-goal-card:before {
      content: "";
      position: absolute;
      inset: 0 0 auto;
      height: 6px;
      background: var(--rebrand-grad);
    }

    .rebrand-page .rebrand-goal-card h3 {
      margin: 0 0 8px;
      color: var(--rebrand-ink);
      font-size: 19px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-goal-card p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 14px;
    }

    .rebrand-page .rebrand-dark-eyebrow {
      background: rgba(255, 255, 255, .11);
      border: 1px solid rgba(255, 255, 255, .16);
      color: #fff;
    }

    .rebrand-page .rebrand-dark-card {
      padding: 26px;
      border-radius: 28px;
      background: rgba(255, 255, 255, .07);
      border: 1px solid rgba(255, 255, 255, .12);
      backdrop-filter: blur(12px);
      height: 100%;
      text-align: left;
    }

    .rebrand-page .rebrand-dark-card h3 {
      margin: 0 0 8px;
      color: #fff;
      font-size: 20px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-dark-card p {
      margin: 0;
      color: rgba(255, 255, 255, .72);
      font-size: 15px;
    }

    .rebrand-page .rebrand-services-desc {
      max-width: 780px;
      color: var(--rebrand-muted);
      font-size: 18px;
      margin: 0;
    }

    .rebrand-page .rebrand-services-head-cta {
      border-radius: 28px;
      padding: 24px;
      background: var(--rebrand-ink);
      color: #fff;
      box-shadow: var(--rebrand-shadow);
      display: inline-block;
      text-align: left;
    }

    .rebrand-page .rebrand-services-head-cta span {
      display: block;
      color: rgba(255, 255, 255, .72);
      font-weight: 800;
      margin-bottom: 16px;
    }

    .rebrand-page .rebrand-service-card {
      position: relative;
      overflow: hidden;
      border-radius: 32px;
      padding: 26px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 16px 38px rgba(7, 17, 31, .07);
      transition: .25s;
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    .rebrand-page .rebrand-service-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--rebrand-shadow);
    }

    .rebrand-page .rebrand-service-card:before {
      content: "";
      position: absolute;
      inset: 0 0 auto;
      height: 6px;
      background: linear-gradient(90deg, #16c784 0%, #2563eb 50%, #7c3aed 100%);
    }

    .rebrand-page .rebrand-service-card.rebrand-highlight-card {
      background: linear-gradient(180deg, #fff, #fff7fb);
      border: 2px solid rgba(225, 48, 108, .18);
    }

    .rebrand-page .rebrand-card-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      margin-bottom: 18px;
      gap: 16px;
    }

    .rebrand-page .rebrand-service-icon {
      width: 56px;
      height: 56px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: rgba(37, 99, 235, .10);
      font-size: 28px;
      flex: 0 0 56px;
    }

    .rebrand-page .rebrand-service-count {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 999px;
      background: rgba(37, 99, 235, .08);
      font-size: 32px;
      line-height: 1;
      font-weight: 900;
      color: rgba(37, 99, 235, .20);
    }

    .rebrand-page .rebrand-service-card h3 {
      margin: 0 0 10px;
      color: var(--rebrand-ink);
      font-size: 22px;
      line-height: 1.2;
      font-weight: 800;
    }

    .rebrand-page .rebrand-service-card p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 15px;
      line-height: 1.6;
    }

    .rebrand-page .rebrand-service-card ul {
      padding: 0;
      margin: 18px 0 0;
      list-style: none;
      display: grid;
      gap: 10px;
      color: var(--rebrand-muted);
      flex-grow: 1;
    }

    .rebrand-page .rebrand-service-card li {
      display: flex;
      gap: 9px;
      align-items: flex-start;
      font-size: 14px;
    }

    .rebrand-page .rebrand-service-card li:before {
      content: "✓";
      flex: 0 0 18px;
      width: 18px;
      height: 18px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: rgba(37, 99, 235, .12);
      color: #2563eb;
      font-weight: 900;
      font-size: 12px;
    }

    .rebrand-page .rebrand-service-result {
      margin-top: 18px;
      padding: 14px 16px;
      border-radius: 16px;
      background: rgba(37, 99, 235, .06);
      border: 1px solid rgba(37, 99, 235, .12);
      color: var(--rebrand-muted);
      font-size: 13px;
      line-height: 1.6;
    }

    .rebrand-page .rebrand-service-result b {
      color: var(--rebrand-ink);
    }

    .rebrand-page .rebrand-deliverables-head {
      margin-bottom: 44px;
    }

    .rebrand-page .rebrand-deliverable-premium-card {
      padding: 26px;
      border-radius: 26px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 14px 34px rgba(7, 17, 31, .05);
      transition: .25s;
      height: 100%;
    }

    .rebrand-page .rebrand-deliverable-premium-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 45px rgba(7, 17, 31, .09);
      border-color: var(--rebrand-blue);
    }

    .rebrand-page .rebrand-main-deliverable {
      background: linear-gradient(180deg, #fff, #f4f7ff);
      border: 1px solid rgba(37, 99, 235, .2);
    }

    .rebrand-page .rebrand-deliverable-icon {
      font-size: 32px;
      margin-bottom: 16px;
    }

    .rebrand-page .rebrand-deliverable-tag {
      display: inline-flex;
      padding: 6px 12px;
      border-radius: 999px;
      background: rgba(37, 99, 235, .08);
      color: #2563eb;
      font-size: 12px;
      font-weight: 900;
      margin-bottom: 12px;
    }

    .rebrand-page .rebrand-deliverable-premium-card h3 {
      margin: 0 0 10px;
      color: var(--rebrand-ink);
      font-size: 20px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-deliverable-premium-card p {
      margin: 0 0 18px;
      color: var(--rebrand-muted);
      font-size: 14.5px;
    }

    .rebrand-page .rebrand-package {
      position: relative;
      border-radius: 34px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 18px 42px rgba(7, 17, 31, .07);
      overflow: hidden;
      transition: .25s;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .rebrand-page .rebrand-package:hover {
      transform: translateY(-6px);
      box-shadow: var(--rebrand-shadow);
    }

    .rebrand-page .rebrand-package.rebrand-featured {
      border: 2px solid rgba(37, 99, 235, .35);
      transform: translateY(-10px);
    }

    .rebrand-page .rebrand-package.rebrand-featured:hover {
      transform: translateY(-16px);
    }

    .rebrand-page .rebrand-package.rebrand-featured:before {
      content: "Recommended";
      position: absolute;
      right: 22px;
      top: 20px;
      padding: 7px 13px;
      border-radius: 999px;
      background: var(--rebrand-grad);
      color: #fff;
      font-size: 12px;
      font-weight: 900;
      z-index: 2;
    }

    .rebrand-page .rebrand-package-head {
      padding: 30px;
      background: linear-gradient(135deg, rgba(225, 48, 108, .08), rgba(37, 99, 235, .08), rgba(124, 58, 237, .06));
    }

    .rebrand-page .rebrand-package-head span {
      display: inline-flex;
      padding: 7px 12px;
      border-radius: 999px;
      background: #fff;
      color: #2563eb;
      font-size: 12px;
      font-weight: 900;
      margin-bottom: 14px;
    }

    .rebrand-page .rebrand-package-head h3 {
      margin: 0 0 8px;
      color: var(--rebrand-ink);
      font-size: 25px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-package-head p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 15px;
    }

    .rebrand-page .rebrand-package-body {
      padding: 28px 30px 32px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .rebrand-page .rebrand-price {
      font-size: 34px;
      line-height: 1;
      font-weight: 900;
      color: var(--rebrand-ink);
      margin-bottom: 8px;
    }

    .rebrand-page .rebrand-package-body small {
      color: var(--rebrand-muted);
      font-weight: 600;
    }

    .rebrand-page .rebrand-package ul {
      padding: 0;
      margin: 22px 0 0;
      list-style: none;
      color: var(--rebrand-muted);
      display: grid;
      gap: 10px;
      flex-grow: 1;
    }

    .rebrand-page .rebrand-package li {
      display: flex;
      gap: 8px;
      align-items: flex-start;
    }

    .rebrand-page .rebrand-package li:before {
      content: "✓";
      color: #2563eb;
      font-weight: 900;
    }

    .rebrand-page .rebrand-ideal {
      margin: 20px 0;
      padding: 16px;
      border-radius: 20px;
      background: rgba(37, 99, 235, .08);
      border: 1px solid rgba(37, 99, 235, .14);
      font-weight: 800;
      color: var(--rebrand-ink);
      font-size: 14px;
    }

    .rebrand-page .rebrand-pricing-note {
      max-width: 980px;
      margin: 0 auto 34px;
      padding: 18px 22px;
      border-radius: 24px;
      background: linear-gradient(135deg, rgba(37, 99, 235, .08), rgba(22, 199, 132, .07));
      border: 1px solid rgba(37, 99, 235, .14);
      display: flex;
      gap: 10px;
      align-items: flex-start;
      text-align: left;
    }

    .rebrand-page .rebrand-pricing-note strong {
      color: var(--rebrand-ink);
      font-size: 18px;
      flex-shrink: 0;
    }

    .rebrand-page .rebrand-pricing-note span {
      color: var(--rebrand-muted);
      font-size: 15px;
      line-height: 1.6;
    }

    .rebrand-page .rebrand-pricing-guide {
      max-width: 980px;
      margin: 40px auto 0;
      text-align: left;
    }

    .rebrand-page .rebrand-plan-guide-card {
      position: relative;
      overflow: hidden;
      border-radius: 34px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 18px 45px rgba(7, 17, 31, .08);
      padding: 28px;
    }

    .rebrand-page .rebrand-plan-guide-card:before {
      content: "";
      position: absolute;
      inset: 0 0 auto;
      height: 5px;
      background: var(--rebrand-grad);
    }

    .rebrand-page .rebrand-plan-guide-card h3 {
      margin: 0 0 8px;
      color: var(--rebrand-ink);
      font-size: 26px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-plan-guide-card > p {
      margin: 0 0 22px;
      color: var(--rebrand-muted);
    }

    .rebrand-page .rebrand-plan-guide-list {
      display: grid;
      gap: 14px;
    }

    .rebrand-page .rebrand-plan-guide-item {
      display: grid;
      grid-template-columns: 54px 1fr;
      gap: 14px;
      align-items: start;
      padding: 16px;
      border-radius: 22px;
      background: #f8fafc;
      border: 1px solid var(--rebrand-line);
    }

    .rebrand-page .rebrand-plan-guide-num {
      width: 54px;
      height: 54px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: rgba(37, 99, 235, .10);
      color: #2563eb;
      font-weight: 900;
    }

    .rebrand-page .rebrand-plan-guide-item h4 {
      margin: 0 0 3px;
      color: var(--rebrand-ink);
      font-size: 18px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-plan-guide-item p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 14px;
    }

    .rebrand-page .rebrand-plan-guide-item small {
      display: inline-flex;
      margin-top: 9px;
      padding: 7px 10px;
      border-radius: 999px;
      background: #fff;
      color: #2563eb;
      font-weight: 900;
      font-size: 12px;
      border: 1px solid rgba(37, 99, 235, .12);
    }

    .rebrand-page .rebrand-process {
      display: grid;
      gap: 22px;
      position: relative;
      max-width: 1000px;
      margin: 40px auto 0;
      text-align: left;
    }

    .rebrand-page .rebrand-process:before {
      content: "";
      position: absolute;
      left: 38px;
      top: 10px;
      bottom: 10px;
      width: 2px;
      background: linear-gradient(#e1306c, #2563eb, #7c3aed);
      opacity: .25;
    }

    .rebrand-page .rebrand-step {
      position: relative;
      display: grid;
      grid-template-columns: 78px 1fr;
      gap: 22px;
      align-items: start;
    }

    .rebrand-page .rebrand-step-num {
      width: 76px;
      height: 76px;
      border-radius: 26px;
      display: grid;
      place-items: center;
      background: var(--rebrand-grad);
      color: #fff;
      font-weight: 900;
      font-size: 24px;
      box-shadow: 0 18px 36px rgba(37, 99, 235, .22);
    }

    .rebrand-page .rebrand-step-content {
      padding: 26px;
      border-radius: 28px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 14px 34px rgba(7, 17, 31, .05);
    }

    .rebrand-page .rebrand-step-content h3 {
      margin: 0 0 8px;
      color: var(--rebrand-ink);
      font-size: 21px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-step-content p {
      margin: 0;
      color: var(--rebrand-muted);
    }

    .rebrand-page .rebrand-industries-section {
      background: var(--rebrand-ink);
      color: #fff;
    }

    .rebrand-page .rebrand-industries-section .rebrand-title {
      color: #fff;
    }

    .rebrand-page .rebrand-industries-section .rebrand-sub {
      color: rgba(255, 255, 255, .68);
    }

    .rebrand-page .rebrand-industries-list {
      list-style: none;
      padding: 0;
      margin: 0;
      border-top: 1px solid rgba(255, 255, 255, .1);
    }

    .rebrand-page .rebrand-industries-list li a {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 22px 0;
      border-bottom: 1px solid rgba(255, 255, 255, .1);
      text-decoration: none;
      color: rgba(255, 255, 255, .88);
      font-size: 18px;
      font-weight: 600;
      transition: all .3s ease;
    }

    .rebrand-page .rebrand-industries-list li a:hover {
      color: #f97316;
      padding-left: 12px;
    }

    .rebrand-page .rebrand-industries-list li a .ind-left {
      display: flex;
      align-items: center;
    }

    .rebrand-page .rebrand-industries-list li a .ind-icon {
      font-size: 24px;
      margin-right: 18px;
    }

    .rebrand-page .rebrand-industries-list li a .ind-arrow {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .07);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all .3s;
      flex-shrink: 0;
    }

    .rebrand-page .rebrand-industries-list li a:hover .ind-arrow {
      background: var(--rebrand-orange);
    }

    .rebrand-page .rebrand-industries-list li a:hover .ind-arrow svg {
      fill: #fff;
    }

    /* Sample Rebrand Plan (Case) */
    .rebrand-page .rebrand-case {
      border-radius: 38px;
      background: linear-gradient(135deg, rgba(225, 48, 108, .06), rgba(37, 99, 235, .06), rgba(124, 58, 237, .04));
      border: 1px solid rgba(37, 99, 235, .12);
      padding: 42px;
    }

    .rebrand-page .rebrand-case-card {
      padding: 24px;
      border-radius: 26px;
      background: #fff;
      border: 1px solid var(--rebrand-line);
      box-shadow: 0 12px 28px rgba(7, 17, 31, .05);
      height: 100%;
      text-align: left;
    }

    .rebrand-page .rebrand-case-card h3 {
      margin: 0 0 8px;
      color: var(--rebrand-ink);
      font-size: 20px;
      font-weight: 800;
    }

    .rebrand-page .rebrand-case-card p {
      margin: 0;
      color: var(--rebrand-muted);
      font-size: 14.5px;
    }

    /* Accordion FAQ Styling */
    .rebrand-page .rebrand-faq-container {
      max-width: 920px;
      margin: auto;
    }

    .rebrand-page .rebrand-faq-item {
      border: 1px solid var(--rebrand-line) !important;
      border-radius: 22px !important;
      margin-bottom: 14px !important;
      overflow: hidden;
      background: #fff !important;
    }

    .rebrand-page .rebrand-faq-btn {
      font-size: 16px !important;
      font-weight: 900 !important;
      color: var(--rebrand-ink) !important;
      background: #fff !important;
      padding: 21px 24px !important;
      border: none !important;
      box-shadow: none !important;
    }

    .rebrand-page .rebrand-faq-btn:not(.collapsed) {
      color: #2563eb !important;
      background: rgba(37, 99, 235, .05) !important;
    }

    .rebrand-page .rebrand-faq-body {
      font-size: 15px;
      color: var(--rebrand-muted);
      padding: 0 24px 24px 24px !important;
      background: #fff;
    }
    .rebrand-page .rebrand-faq-body p + p {
      margin-top: 12px;
    }

    /* Final CTA Section */
    .rebrand-page .rebrand-cta {
      position: relative;
      overflow: hidden;
      padding: 104px 0;
      background:
        radial-gradient(circle at 14% 10%, rgba(225, 48, 108, .24), transparent 30%),
        radial-gradient(circle at 88% 8%, rgba(37, 99, 235, .25), transparent 30%),
        linear-gradient(135deg, #07111f, #0d1b2f) !important;
      color: #fff !important;
    }

    .rebrand-page .rebrand-cta h2 {
      margin: 0 auto 18px;
      max-width: 950px;
      font-size: clamp(36px, 4.6vw, 64px);
      line-height: 1.05;
      letter-spacing: -1.6px;
      font-weight: 800;
      color: #fff !important;
    }

    .rebrand-page .rebrand-cta p {
      max-width: 850px;
      margin: auto;
      color: rgba(255, 255, 255, .74) !important;
      font-size: 18px;
    }

    .rebrand-page .rebrand-cta-contact {
      margin-top: 22px;
      font-weight: 900;
      color: #dbeafe !important;
    }

    .rebrand-page .rebrand-cta-contact a {
      color: #dbeafe !important;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .rebrand-page .rebrand-cta-contact a:hover {
      color: #fff !important;
      text-decoration: underline;
    }

    .rebrand-page .rebrand-cta .rebrand-btn-main {
      color: #fff !important;
    }

    .rebrand-page .rebrand-cta .rebrand-btn-outline {
      color: #fff !important;
      background: rgba(255, 255, 255, .08) !important;
      border-color: rgba(255, 255, 255, .22) !important;
    }

    .rebrand-page .rebrand-cta .rebrand-btn-outline:hover {
      background: #fff !important;
      color: var(--rebrand-ink) !important;
      border-color: #fff !important;
    }

    /* Floating Micro-Animations */
    @keyframes rebrand-float-board {
      0% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0); }
    }

    @keyframes rebrand-float-one {
      0% { transform: translateY(0); }
      50% { transform: translateY(-12px); }
      100% { transform: translateY(0); }
    }

    @keyframes rebrand-float-two {
      0% { transform: translateY(0); }
      50% { transform: translateY(-14px); }
      100% { transform: translateY(0); }
    }

    /* Responsive adjustments */
    @media(max-width:991px) {
      .rebrand-page .rebrand-section {
        padding: 70px 0;
      }
      .rebrand-page .rebrand-hero {
        padding-top: 100px;
      }
      .rebrand-page .rebrand-hero-visual {
        min-height: 690px;
        margin-top: 40px;
      }
      .rebrand-page .rebrand-trust-strip {
        margin-top: 24px;
      }
      .rebrand-page .rebrand-package.rebrand-featured {
        transform: none !important;
      }
    }

    @media (min-width: 768px) and (max-width: 991px) {
      .rebrand-page .rebrand-hero-visual {
        width: 595px;
        margin: 40px auto 0;
      }
    }

    @media(max-width:767px) {
      .rebrand-page .rebrand-pricing-note {
        display: block;
      }
      .rebrand-page .rebrand-pricing-note strong {
        display: block;
        margin-bottom: 6px;
      }
      .rebrand-page .rebrand-plan-guide-item {
        grid-template-columns: 1fr;
      }
      .rebrand-page .rebrand-hero-visual {
        min-height: auto;
        display: flex;
        flex-direction: column;
        gap: 20px;
      }
      .rebrand-page .rebrand-board,
      .rebrand-page .rebrand-floating {
        position: relative;
        width: 100%;
        transform: none !important;
        animation: none !important;
        inset: auto;
        margin-top: 20px;
      }
      .rebrand-page .rebrand-process:before {
        display: none;
      }
      .rebrand-page .rebrand-step {
        grid-template-columns: 1fr;
        gap: 12px;
      }
      .rebrand-page .rebrand-system-row {
        grid-template-columns: 1fr;
      }
      .rebrand-page .rebrand-before-after {
        grid-template-columns: 1fr;
      }
      .rebrand-page .rebrand-brand-side {
        min-height: 230px;
      }
    }
    </style>
</head>
<body class="tt-magic-cursor digital-agency">

<?php include '../header.php'; ?>

<div class="rebrand-page">

<!-- Hero Section -->
<section class="rebrand-hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">

        <div class="rebrand-eyebrow">Premium Rebranding Services</div>
        <h1 class="rebrand-hero-title">Upgrade your old brand into a <span class="rebrand-accent">modern, premium and trusted identity.</span></h1>
        <p class="rebrand-hero-desc">GrowBoostly helps businesses refresh outdated branding, redesign logos, improve messaging, modernize visual identity and create a stronger presentation across website, social media, ads and sales communication.</p>
        <div class="rebrand-btns">
          <a class="rebrand-btn rebrand-btn-main" href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Rebranding%20Services%20for%20my%20business.">Start Rebranding</a>
          <a class="rebrand-btn rebrand-btn-outline" href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20please%20help%20me%20audit%20and%20refresh%20my%20brand.">Request Brand Audit</a>
        </div>
        <div class="rebrand-hero-tags">
          <span>Logo Redesign</span><span>Brand Refresh</span><span>Message Upgrade</span><span>Visual Identity</span><span>Social Media Look</span>
        </div>
        <div class="row g-3 mt-4 rebrand-hero-metrics">
          <div class="col-md-4">
            <div class="rebrand-stat"><strong>Audit</strong><span>Find what looks outdated or unclear</span></div>
          </div>
          <div class="col-md-4">
            <div class="rebrand-stat"><strong>Refresh</strong><span>Upgrade logo, colors, fonts and message</span></div>
          </div>
          <div class="col-md-4">
            <div class="rebrand-stat"><strong>Relaunch</strong><span>Create a stronger brand presentation</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="rebrand-hero-visual">
          <div class="rebrand-floating rebrand-one">Brand Makeover<small>Logo + message + visual identity</small></div>
          <div class="rebrand-board">
            <div class="rebrand-board-head"><div class="rebrand-dots"><i></i><i></i><i></i></div><div class="rebrand-board-label">Rebrand System</div></div>
            <div class="rebrand-workspace">
              <div class="rebrand-preview">
                <div class="rebrand-before-after">
                  <div class="rebrand-brand-side rebrand-old-brand">
                    <span>Before</span>
                    <div class="rebrand-logo-sample">OLD</div>
                    <p>Generic identity • weak recall • outdated presentation</p>
                  </div>
                  <div class="rebrand-brand-side rebrand-new-brand">
                    <span>After</span>
                    <div class="rebrand-logo-sample">NEW</div>
                    <p>Premium identity • clear message • modern brand system</p>
                  </div>
                </div>
              </div>
              <div class="rebrand-system-row">
                <div><b>Audit</b><span>Old brand gaps</span></div>
                <div><b>Refresh</b><span>New visual system</span></div>
                <div><b>Launch</b><span>Ready identity</span></div>
              </div>
            </div>
          </div>
          <div class="rebrand-floating rebrand-two">Relaunch Ready<small>Website • social • ads • sales</small></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Trust Strip -->
<section class="rebrand-trust-strip">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-trust-card"><div class="rebrand-icon">🔍</div><h3>Brand Audit</h3><p>We review your current logo, message, visual identity and online presentation.</p></div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-trust-card"><div class="rebrand-icon">✨</div><h3>Modern Identity</h3><p>We refresh colors, typography, style and brand feel for a premium look.</p></div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-trust-card"><div class="rebrand-icon">💬</div><h3>Message Upgrade</h3><p>We improve brand communication so customers understand your value faster.</p></div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-trust-card"><div class="rebrand-icon">🚀</div><h3>Relaunch Support</h3><p>We prepare your rebrand direction for website, social media and campaigns.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- Brand Impact Section (Dark) -->
<section class="rebrand-section rebrand-trust-section rebrand-dark-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="rebrand-brand-impact-board">
          <div class="rebrand-impact-header">
            <span>Rebranding Framework</span>
            <strong>Refresh</strong>
          </div>
          <div class="row g-3 rebrand-impact-grid">
            <div class="col-sm-6">
              <div class="rebrand-impact-card">
                <b>01</b>
                <h3>Old Brand Audit</h3>
                <p>Identify weak logo, outdated design, unclear message and inconsistent presentation.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="rebrand-impact-card">
                <b>02</b>
                <h3>New Positioning</h3>
                <p>Define how the brand should be seen now by customers, clients and market.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="rebrand-impact-card">
                <b>03</b>
                <h3>Visual Upgrade</h3>
                <p>Refresh logo, colors, typography, layout style and brand personality.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="rebrand-impact-card">
                <b>04</b>
                <h3>Relaunch System</h3>
                <p>Apply the new identity to website, social media, ads and business assets.</p>
              </div>
            </div>
          </div>
          <div class="rebrand-identity-flow">
            <div><span>Audit</span></div><i></i>
            <div><span>Position</span></div><i></i>
            <div><span>Refresh</span></div><i></i>
            <div><span>Relaunch</span></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="rebrand-trust-content">
          <div class="rebrand-eyebrow dark">Rebranding That Makes Your Business Look Current</div>
          <h2 class="rebrand-title">If your brand looks old, customers may assume your business is behind.</h2>
          <p>Many businesses grow but their branding remains outdated. Old logos, inconsistent colors, weak social media creatives and unclear messaging can reduce trust even when the service quality is good.</p>
          <p>GrowBoostly helps you refresh your brand with modern visuals, stronger messaging and a consistent identity system so your business looks active, premium and ready for growth.</p>
          
          <div class="rebrand-value-list">
            <div class="rebrand-value">
              <div class="rebrand-value-icon">🏆</div>
              <div>
                <h3>Stronger brand perception</h3>
                <p>Your business looks more professional, modern and trustworthy.</p>
              </div>
            </div>
            <div class="rebrand-value">
              <div class="rebrand-value-icon">🧭</div>
              <div>
                <h3>Clearer brand direction</h3>
                <p>Your message, audience, offer and positioning become easier to understand.</p>
              </div>
            </div>
            <div class="rebrand-value">
              <div class="rebrand-value-icon">📈</div>
              <div>
                <h3>Better marketing consistency</h3>
                <p>Your website, social posts, ads and business profiles follow one strong identity.</p>
              </div>
            </div>
          </div>
          <div class="rebrand-result-box">
            <strong>Final Result:</strong> <span>A refreshed brand identity that feels modern, premium and ready for serious business growth.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rebranding Goals Grid -->
<section class="rebrand-section rebrand-soft">
  <div class="container text-center">
    <div class="rebrand-eyebrow">Rebranding Goals</div>
    <h2 class="rebrand-title">What kind of rebranding does your business need?</h2>
    <p class="rebrand-sub">Rebranding can be a small refresh or a complete transformation. We choose the right direction based on your business stage and market goals.</p>
    
    <div class="rebrand-goal-grid mt-5">
      <div class="rebrand-goal-card">
        <div class="rebrand-icon">🎨</div>
        <h3>Logo Refresh</h3>
        <p>Improve your old logo into a cleaner, modern and more professional identity.</p>
      </div>
      <div class="rebrand-goal-card">
        <div class="rebrand-icon">💬</div>
        <h3>Message Upgrade</h3>
        <p>Rewrite brand message, tagline, service positioning and customer communication.</p>
      </div>
      <div class="rebrand-goal-card">
        <div class="rebrand-icon">📱</div>
        <h3>Social Look Refresh</h3>
        <p>Update your profile look, post style, banners, highlights and digital presentation.</p>
      </div>
      <div class="rebrand-goal-card">
        <div class="rebrand-icon">🚀</div>
        <h3>Complete Rebrand</h3>
        <p>Full upgrade of logo, identity, messaging, website direction and launch assets.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why GrowBoostly (Dark Section) -->
<section class="rebrand-section rebrand-dark-section text-center">
  <div class="container">
    <div class="rebrand-eyebrow dark">Why GrowBoostly</div>
    <h2 class="rebrand-title">We rebrand with business clarity, not just a new design.</h2>
    <p class="rebrand-sub">A strong rebrand should improve how your brand looks, speaks and converts.</p>
    <div class="row g-4 mt-4 justify-content-center">
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-dark-card"><div class="rebrand-icon">🔍</div><h3>Brand Audit First</h3><p>We identify what is outdated, weak, confusing or inconsistent.</p></div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-dark-card"><div class="rebrand-icon">🎯</div><h3>Positioning Clarity</h3><p>We define how the refreshed brand should stand in the market.</p></div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-dark-card"><div class="rebrand-icon">✨</div><h3>Premium Visual Upgrade</h3><p>We improve logo, colors, typography and overall presentation.</p></div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-dark-card"><div class="rebrand-icon">📣</div><h3>Marketing Ready</h3><p>We align your new brand with website, social media, ads and campaigns.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- Services Grid -->
<section class="rebrand-section rebrand-services-premium-section">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-8">
        <div class="rebrand-eyebrow">Our Services</div>
        <h2 class="rebrand-title">Rebranding Services</h2>
        <p class="rebrand-services-desc">GrowBoostly helps businesses upgrade their brand identity, message and presentation so they look modern, trustworthy and ready for marketing growth.</p>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end">
        <div class="rebrand-services-head-cta">
          <span>Need a fresh brand look?</span>
          <a class="rebrand-btn rebrand-btn-main w-100" href="https://wa.me/919919020887?text=I%20want%20GrowBoostly%20Rebranding%20Services">Start Rebrand Project</a>
        </div>
      </div>
    </div>

    <div class="row g-4 rebrand-services-premium-grid">
      <div class="col-lg-4 col-md-6">
        <div class="rebrand-service-card">
          <div class="rebrand-card-top"><div class="rebrand-service-icon">🔍</div><span class="rebrand-service-count">01</span></div>
          <h3>Brand Audit & Gap Review</h3>
          <p>We review your current logo, website, social media, message and design consistency.</p>
          <ul><li>Logo and identity review</li><li>Website/social look check</li><li>Message clarity review</li><li>Rebrand gap report</li></ul>
          <div class="rebrand-service-result"><b>Outcome:</b> You know what needs to improve in your current brand.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="rebrand-service-card">
          <div class="rebrand-card-top"><div class="rebrand-service-icon">🎯</div><span class="rebrand-service-count">02</span></div>
          <h3>Brand Repositioning</h3>
          <p>We define how your refreshed brand should be seen by customers and competitors.</p>
          <ul><li>Target audience clarity</li><li>USP and value direction</li><li>Market positioning</li><li>Brand personality update</li></ul>
          <div class="rebrand-service-result"><b>Outcome:</b> Your rebrand gets a clear strategic direction.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="rebrand-service-card">
          <div class="rebrand-card-top"><div class="rebrand-service-icon">🎨</div><span class="rebrand-service-count">03</span></div>
          <h3>Logo Redesign & Refresh</h3>
          <p>We modernize your old logo while keeping the brand easy to recognize.</p>
          <ul><li>Logo refinement</li><li>New concept direction</li><li>Typography improvement</li><li>Light/dark logo versions</li></ul>
          <div class="rebrand-service-result"><b>Outcome:</b> Your logo looks modern, clean and professional.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="rebrand-service-card">
          <div class="rebrand-card-top"><div class="rebrand-service-icon">✨</div><span class="rebrand-service-count">04</span></div>
          <h3>Visual Identity Upgrade</h3>
          <p>We update brand colors, fonts, design style and digital presentation system.</p>
          <ul><li>Color palette update</li><li>Typography direction</li><li>Social media style</li><li>Brand asset direction</li></ul>
          <div class="rebrand-service-result"><b>Outcome:</b> Your brand looks consistent across platforms.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="rebrand-service-card">
          <div class="rebrand-card-top"><div class="rebrand-service-icon">💬</div><span class="rebrand-service-count">05</span></div>
          <h3>Messaging & Content Refresh</h3>
          <p>We improve taglines, headlines, service descriptions and customer-facing language.</p>
          <ul><li>Brand tagline direction</li><li>Website headline update</li><li>Service message improvement</li><li>CTA and offer language</li></ul>
          <div class="rebrand-service-result"><b>Outcome:</b> Customers understand your value faster.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="rebrand-service-card rebrand-highlight-card">
          <div class="rebrand-card-top"><div class="rebrand-service-icon">🚀</div><span class="rebrand-service-count">06</span></div>
          <h3>Rebrand Launch Kit</h3>
          <p>We prepare rebrand assets for website, social media, profile updates and campaign launch.</p>
          <ul><li>Brand kit direction</li><li>Social profile update assets</li><li>Launch announcement creative</li><li>Website refresh guidance</li></ul>
          <div class="rebrand-service-result"><b>Outcome:</b> Your rebrand becomes ready to launch professionally.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rebrand Deliverables -->
<section class="rebrand-section rebrand-deliverables-premium-section rebrand-soft">
  <div class="container">
    <div class="text-center rebrand-deliverables-head">
      <div class="rebrand-eyebrow">Rebrand Deliverables</div>
      <h2 class="rebrand-title">What you can get in a rebranding project</h2>
      <p class="rebrand-sub">Deliverables depend on your selected plan, but these are the most useful assets for a professional brand refresh.</p>
    </div>

    <div class="row g-4 rebrand-deliverables-grid justify-content-center">
      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card rebrand-main-deliverable">
          <div class="rebrand-deliverable-icon">📋</div>
          <span class="rebrand-deliverable-tag">Strategy</span>
          <h3>Brand Audit Notes</h3>
          <p>Detailed analysis of your existing brand gaps.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card">
          <div class="rebrand-deliverable-icon">🎨</div>
          <span class="rebrand-deliverable-tag">Visuals</span>
          <h3>Logo Redesign</h3>
          <p>A modernized, clean version of your logo.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card">
          <div class="rebrand-deliverable-icon">🖌️</div>
          <span class="rebrand-deliverable-tag">Visuals</span>
          <h3>Color Palette</h3>
          <p>Updated brand colors for a premium look.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card">
          <div class="rebrand-deliverable-icon">🔤</div>
          <span class="rebrand-deliverable-tag">Visuals</span>
          <h3>Typography Direction</h3>
          <p>Professional fonts aligned with your new identity.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card">
          <div class="rebrand-deliverable-icon">💬</div>
          <span class="rebrand-deliverable-tag">Copy</span>
          <h3>Brand Messaging</h3>
          <p>Refreshed communication that converts.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card">
          <div class="rebrand-deliverable-icon">✨</div>
          <span class="rebrand-deliverable-tag">Copy</span>
          <h3>Tagline Direction</h3>
          <p>A new, memorable hook for your business.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card">
          <div class="rebrand-deliverable-icon">📱</div>
          <span class="rebrand-deliverable-tag">Digital</span>
          <h3>Social Profile Kit</h3>
          <p>Refreshed banners, highlights, and profile images.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="rebrand-deliverable-premium-card">
          <div class="rebrand-deliverable-icon">📖</div>
          <span class="rebrand-deliverable-tag">Asset</span>
          <h3>Brand Usage Guide</h3>
          <p>Rules on how to apply your new identity.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing -->
<section class="rebrand-section rebrand-soft text-center" id="rebrand-pricing">
  <div class="container">
    <div class="rebrand-eyebrow">Rebranding Pricing</div>
    <h2 class="rebrand-title">Simple rebranding plans for startups and growing businesses</h2>
    <p class="rebrand-sub">Choose a package based on audit depth, logo redesign scope, identity system, messaging refresh and launch support needs.</p>

    <div class="rebrand-pricing-note">
      <strong>Note:</strong>
      <span>Final quote is confirmed after reviewing your current brand assets, number of touchpoints (logo, website, social, print), repositioning needs, revision rounds, file deliverables and relaunch timeline.</span>
    </div>

    <div class="row g-4 rebrand-packages justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="rebrand-package">
          <div class="rebrand-package-head">
            <span>Brand Refresh</span>
            <h3>Starter Rebrand</h3>
            <p>Best for businesses that need basic logo and presentation improvement.</p>
          </div>
          <div class="rebrand-package-body">
            <div class="rebrand-price">₹11,999+</div>
            <small>one-time rebrand project</small>
            <ul>
              <li>Brand audit notes</li>
              <li>Logo refresh direction</li>
              <li>Color and font suggestions</li>
              <li>Basic social profile guidance</li>
              <li>1 revision round</li>
            </ul>
            <div class="rebrand-ideal">Best when your brand needs a quick modern update.</div>
            <a class="rebrand-btn rebrand-btn-light w-100" href="https://wa.me/919919020887?text=I%20want%20Starter%20Rebranding%20(₹11,999%2B)">Ask for Starter Plan</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="rebrand-package rebrand-featured">
          <div class="rebrand-package-head">
            <span>Most Popular</span>
            <h3>Premium Rebranding</h3>
            <p>Best for businesses that need improved logo, messaging and brand identity.</p>
          </div>
          <div class="rebrand-package-body">
            <div class="rebrand-price">₹27,999+</div>
            <small>identity + message + brand kit</small>
            <ul>
              <li>Detailed brand audit</li>
              <li>Logo redesign or refinement</li>
              <li>Messaging refresh</li>
              <li>Social and website style direction</li>
              <li>2–3 revision rounds</li>
            </ul>
            <div class="rebrand-ideal">Best when you want a strong professional brand makeover.</div>
            <a class="rebrand-btn rebrand-btn-main w-100" href="https://wa.me/919919020887?text=I%20want%20Premium%20Rebranding%20(₹27,999%2B)">Get Premium Plan</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="rebrand-package">
          <div class="rebrand-package-head">
            <span>Complete Relaunch</span>
            <h3>Complete Rebrand System</h3>
            <p>Best for companies planning full business relaunch and marketing growth.</p>
          </div>
          <div class="rebrand-package-body">
            <div class="rebrand-price">₹54,999+</div>
            <small>full brand transformation</small>
            <ul>
              <li>Brand repositioning direction</li>
              <li>Complete identity system</li>
              <li>Website and social launch direction</li>
              <li>Rebrand launch kit</li>
              <li>Extended revision support</li>
            </ul>
            <div class="rebrand-ideal">Best when your business needs a complete modern relaunch.</div>
            <a class="rebrand-btn rebrand-btn-light w-100" href="https://wa.me/919919020887?text=I%20want%20Complete%20Rebrand%20System%20(₹54,999%2B)">Plan Complete Rebrand</a>
          </div>
        </div>
      </div>
    </div>

    <div class="rebrand-pricing-guide">
      <div class="rebrand-plan-guide-card">
        <h3>Which rebranding plan should you choose?</h3>
        <p>A quick guide to help you pick the right package without confusion.</p>
        <div class="rebrand-plan-guide-list">
          <div class="rebrand-plan-guide-item">
            <div class="rebrand-plan-guide-num">01</div>
            <div>
              <h4>Need a cleaner logo and fresher look without full repositioning?</h4>
              <p>Starter Rebrand is ideal when your business is established but visuals feel dated — you get audit notes, logo refresh direction and basic profile updates.</p>
              <small>Best for: local businesses, service brands, quick modernization</small>
            </div>
          </div>
          <div class="rebrand-plan-guide-item">
            <div class="rebrand-plan-guide-num">02</div>
            <div>
              <h4>Want a professional makeover with messaging and identity alignment?</h4>
              <p>Premium Rebranding includes detailed audit, logo redesign, messaging refresh and style direction for website and social so everything feels cohesive.</p>
              <small>Best for: growing companies, agencies, competitive markets</small>
            </div>
          </div>
          <div class="rebrand-plan-guide-item">
            <div class="rebrand-plan-guide-num">03</div>
            <div>
              <h4>Planning a full relaunch with new positioning and market presence?</h4>
              <p>Complete Rebrand System adds repositioning, full identity system, launch direction and a rebrand kit for website, campaigns and sales materials.</p>
              <small>Best for: mergers, pivots, funded startups, major growth phases</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process -->
<section class="rebrand-section rebrand-process-section text-center">
  <div class="container">
    <div class="rebrand-eyebrow">How It Works</div>
    <h2 class="rebrand-title">Our rebranding process</h2>
    <p class="rebrand-sub">A good rebrand should protect useful brand value while improving clarity, design and market perception.</p>
    <div class="rebrand-process">
      <div class="rebrand-step">
        <div class="rebrand-step-num">1</div>
        <div class="rebrand-step-content">
          <h3>Brand Audit</h3>
          <p>We review your current logo, visuals, message, website, social media and market presence.</p>
        </div>
      </div>
      <div class="rebrand-step">
        <div class="rebrand-step-num">2</div>
        <div class="rebrand-step-content">
          <h3>Rebrand Direction</h3>
          <p>We define what should be preserved, improved, modernized or completely changed.</p>
        </div>
      </div>
      <div class="rebrand-step">
        <div class="rebrand-step-num">3</div>
        <div class="rebrand-step-content">
          <h3>Visual Refresh</h3>
          <p>We upgrade logo, colors, fonts, layouts and overall brand presentation.</p>
        </div>
      </div>
      <div class="rebrand-step">
        <div class="rebrand-step-num">4</div>
        <div class="rebrand-step-content">
          <h3>Messaging Update</h3>
          <p>We improve taglines, headlines, offers, service communication and CTA language.</p>
        </div>
      </div>
      <div class="rebrand-step">
        <div class="rebrand-step-num">5</div>
        <div class="rebrand-step-content">
          <h3>Brand Kit Preparation</h3>
          <p>We prepare updated brand assets for website, social media and marketing use.</p>
        </div>
      </div>
      <div class="rebrand-step">
        <div class="rebrand-step-num">6</div>
        <div class="rebrand-step-content">
          <h3>Relaunch Guidance</h3>
          <p>We guide how to introduce the new brand across online platforms and campaigns.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Industries -->
<section class="rebrand-section rebrand-industries-section">
  <div class="container">
    <div class="row align-items-start g-5">
      <div class="col-lg-5">
        <div class="text-start">
          <div class="rebrand-eyebrow dark">Industries We Serve</div>
          <h2 class="rebrand-title" style="margin-top: 16px; margin-bottom: 16px;">Rebranding for different businesses</h2>
          <p class="rebrand-sub" style="margin-left: 0; max-width: 100%; text-align: left; margin-bottom: 24px;">GrowBoostly helps businesses refresh their identity when their old brand no longer matches their growth, quality or market ambition.</p>
        </div>
        <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Professional%20Rebranding%20Services%20for%20my%20business." class="rebrand-btn rebrand-btn-main" style="display:inline-flex;align-items:center;gap:8px; margin-top: 20px;">Start Your Rebrand Project
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </a>
      </div>
      <div class="col-lg-7">
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
        $chunks = array_chunk($industries, 4);
        $arr = '<svg width="12" height="12" viewBox="0 0 12 12" fill="#8ab4f8" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.99981C0 5.83405 0.0632157 5.67508 0.17574 5.55787C0.288264 5.44066 0.44088 5.37481 0.600014 5.37481H8.7518L6.17534 2.69231C6.06267 2.57496 5.99938 2.41578 5.99938 2.24981C5.99938 2.08384 6.06267 1.92467 6.17534 1.80731C6.28801 1.68995 6.44081 1.62402 6.60015 1.62402C6.75948 1.62402 6.91229 1.68995 7.02496 1.80731L10.625 5.55731C10.6809 5.61537 10.7252 5.68434 10.7555 5.76027C10.7857 5.8362 10.8013 5.9176 10.8013 5.99981C10.8013 6.08202 10.7857 6.16342 10.7555 6.23935C10.7252 6.31529 10.6809 6.38426 10.625 6.44231L7.02496 10.1923C6.91229 10.3097 6.75948 10.3756 6.60015 10.3756C6.44081 10.3756 6.28801 10.3097 6.17534 10.1923C6.06267 10.075 5.99938 9.91578 5.99938 9.74981C5.99938 9.58384 6.06267 9.42467 6.17534 9.30731L8.7518 6.62481H0.600014C0.44088 6.62481 0.288264 6.55897 0.17574 6.44176C0.0632157 6.32455 0 6.16557 0 5.99981Z"/></svg>';
        
        echo '<div class="row">';
        foreach ($chunks as $chunk) {
            echo '<div class="col-md-6"><ul class="rebrand-industries-list">';
            foreach ($chunk as $i) { 
                echo '<li><a href="' . htmlspecialchars($i[2], ENT_QUOTES, 'UTF-8') . '"><div class="ind-left"><span class="ind-icon">' . $i[0] . '</span>' . $i[1] . '</div><div class="ind-arrow">' . $arr . '</div></a></li>'; 
            }
            echo '</ul></div>';
        }
        echo '</div>';
        ?>
      </div>
    </div>
  </div>
</section>

<!-- Sample Rebrand Plan (Case) -->
<section class="rebrand-section">
  <div class="container">
    <div class="rebrand-case text-center">
      <div class="rebrand-eyebrow">Sample Rebrand Blueprint</div>
      <h2 class="rebrand-title">Example: Rebranding for a service business</h2>
      <p class="rebrand-sub">A practical rebranding model for BPO, digital marketing, coaching, clinic, real estate or local service business.</p>
      <div class="row g-4 rebrand-case-grid justify-content-center">
        <div class="col-md-6 col-lg-3">
          <div class="rebrand-case-card"><h3>1. Audit</h3><p>Review old logo, weak message, inconsistent design and outdated online presentation.</p></div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="rebrand-case-card"><h3>2. Refresh</h3><p>Improve logo, colors, typography, brand voice and visual identity direction.</p></div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="rebrand-case-card"><h3>3. Apply</h3><p>Use the updated brand across website, social profiles, posts, banners and business assets.</p></div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="rebrand-case-card"><h3>4. Relaunch</h3><p>Announce the new brand look with launch creatives, updated messaging and campaign-ready assets.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="rebrand-section rebrand-soft text-center">
  <div class="container">
    <div class="text-center mb-5">
      <div class="rebrand-eyebrow">FAQ</div>
      <h2 class="rebrand-title">Frequently asked questions</h2>
      <p class="rebrand-sub">Clear answers on when to rebrand, what’s included, what gets updated, timelines and how we keep brand value consistent.</p>
    </div>
    
    <div class="rebrand-faq-container">
      <div class="accordion" id="rebrandFaqAccordion">
        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading1">
            <button class="accordion-button rebrand-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
              What is rebranding?
            </button>
          </h2>
          <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>Rebranding means updating or improving your brand identity — logo, message, colors, visual style and presentation — so your business feels more relevant, professional and aligned with current goals.</p>
              <p>We aim to refresh what’s no longer working while protecting what customers already recognize, so your new look feels modern but still keeps brand trust.</p>
            </div>
          </div>
        </div>
        
        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading2">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
              When does a business need rebranding?
            </button>
          </h2>
          <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>A business needs rebranding when the old logo looks outdated, the message is unclear, services have changed, your audience has shifted, or your brand no longer matches the quality customers experience.</p>
              <p>It also helps when marketing performance drops because visitors can’t quickly understand your value, your social creatives feel inconsistent, or competitors look more credible in the customer’s mind.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading3">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
              Can you redesign only my logo?
            </button>
          </h2>
          <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>Yes. We can refresh or redesign only the logo, especially if your brand basics are fine but the logo needs a modern upgrade.</p>
              <p>However, if customers still find your message confusing or your marketing feels inconsistent, we may recommend a fuller rebrand so the visuals and communication work together.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading4">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
              Will rebranding help my website and social media?
            </button>
          </h2>
          <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>Yes. A strong rebrand improves website presentation, social media creatives, profile trust, ads and customer-facing communication. We upgrade the identity so it looks consistent and credible everywhere people meet your brand.</p>
              <p>Depending on your plan, we also prepare a social profile kit, update direction for website look/feel and include launch-ready assets so you can relaunch smoothly.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading5">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
              Do you provide rebrand launch creatives?
            </button>
          </h2>
          <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>Yes. Rebrand launch creatives, social profile assets and announcement designs can be included based on the selected plan.</p>
              <p>Our goal is to make relaunch easier for your team — so customers understand what changed, why it matters and where to reach you — instead of having your new branding appear without a clear launch message.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading6">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
              What’s the difference between a logo refresh and a complete rebrand?
            </button>
          </h2>
          <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>A logo refresh focuses on visual upgrade. We modernize your logo design while keeping the brand basics easy to recognize.</p>
              <p>A complete rebrand is broader: it can include brand audit, repositioning direction, messaging refresh, identity system improvements, website/social direction and a launch kit so your branding and communication work together.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading7">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
              Will a rebrand confuse my existing customers?
            </button>
          </h2>
          <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>It doesn’t have to. We start with a brand audit to understand what customers already recognize and what parts need improvement. Then we plan how the new identity will be applied so the change feels smooth.</p>
              <p>We also prepare launch guidance and announcement creatives so customers know what changed and why — helping preserve trust instead of creating uncertainty.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading8">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
              How long does rebranding usually take?
            </button>
          </h2>
          <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>Timeline depends on your chosen package and how quickly you share inputs and feedback. A Starter rebrand is usually faster because scope is focused on logo and basic refresh direction.</p>
              <p>Premium and Advanced projects require more audit, visual identity updates, messaging refresh and kit preparation. We share a realistic plan based on deliverables and your project feedback pace.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading9">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
              Do you update my website, social profiles and ads?
            </button>
          </h2>
          <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>We provide rebrand direction and assets for your website and online presence — including refreshed social profile kit, messaging improvements and relaunch-ready creative guidance.</p>
              <p>If you have a developer or marketing team, we collaborate through guidance so your website and profiles reflect the new identity correctly. If you need extra implementation help, tell us and we can suggest the best next step.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item rebrand-faq-item">
          <h2 class="accordion-header" id="faqHeading10">
            <button class="accordion-button rebrand-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
              What do I receive at the end of the rebranding project?
            </button>
          </h2>
          <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10" data-bs-parent="#rebrandFaqAccordion">
            <div class="accordion-body rebrand-faq-body">
              <p>At the end, you get practical rebrand deliverables based on your plan — including brand audit notes, logo redesign/refinement direction, messaging and tagline direction, social profile update assets and a brand usage guide.</p>
              <p>For relaunch-focused projects, you also receive rebrand launch creatives and guidance so your new brand is applied correctly across website, social media and marketing campaigns.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="rebrand-cta text-center">
  <div class="container">
    <h2>Ready to give your business a fresh, premium and trusted brand look?</h2>
    <p>GrowBoostly can help you refresh your old brand with stronger identity, better message, modern design and a relaunch-ready brand system.</p>
    <div class="rebrand-btns justify-content-center">
      <a class="rebrand-btn rebrand-btn-main text-white" href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20Rebranding%20Services%20for%20my%20business.">Get My Rebranding Plan</a>
      <a class="rebrand-btn rebrand-btn-outline" href="tel:+919919020887">Call / WhatsApp Now</a>
    </div>
  </div>
</section>

</div>

<!-- Bootstrap Bundle JS -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<?php include '../footer.php'; ?>

</body>
</html>