<?php
// GrowBoostly Premium Pricing / Growth Plans Page
// Upload as: public_html/pricing.php
?>
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
    <!--Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- BoxIcon  CSS -->
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Growth Plans & Launch Offers | GrowBoostly</title>
    <meta name="description" content="Premium GrowBoostly growth plans for website development, lead generation, SEO, paid ads, automation, branding, app development and dedicated developers." />
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

  <style>
    :root {
      --bg: #ffffff;
      --bg2: #f6f9fc;
      --panel: #ffffff;
      --panel2: #f8fafc;
      --line: #e5e7eb;
      --text: #07111f;
      --muted: #6b7280;
      --soft: #4b5563;
      
      --gb-primary: #16c784;
      --gb-primary-dark: #0b9f68;
      --gb-dark: #07111f;
      
      /* Theme accents for three categories */
      --color-presence: #16c784;
      --color-presence-dark: #0b9f68;
      --color-presence-light: #f0fdf4;
      --color-presence-border: #bbf7d0;

      --color-leadgen: #3b82f6;
      --color-leadgen-dark: #1d4ed8;
      --color-leadgen-light: #eff6ff;
      --color-leadgen-border: #bfdbfe;

      --color-engineering: #8b5cf6;
      --color-engineering-dark: #6d28d9;
      --color-engineering-light: #f5f3ff;
      --color-engineering-border: #ddd6fe;

      --gold: #f59e0b;
      --red: #ef4444;
      --shadow: 0 20px 50px rgba(7, 17, 31, 0.08);
      --radius: 22px;
      --max: 1220px;
    }

    /* Override for Pricing Section */
    .pricing-page-wrapper {
      background: var(--bg);
      color: var(--text);
      font-family: 'Poppins', 'Inter', Arial, sans-serif;
      overflow-x: hidden;
      line-height: 1.65;
    }
    
    .pricing-page-wrapper a { text-decoration: none; color: inherit; }
    .pricing-page-wrapper .container { width: min(1180px, calc(100% - 36px)); margin: auto; }
    .pricing-page-wrapper .section { padding: 96px 0; position: relative; }
    .pricing-page-wrapper .grid { display: grid; gap: 28px; }
    .pricing-page-wrapper .grid-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .pricing-page-wrapper .grid-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
    .pricing-page-wrapper .grid-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }

    .pricing-page-wrapper .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      border-radius: 999px;
      background: rgba(22, 199, 132, 0.08);
      border: 1px solid rgba(22, 199, 132, 0.15);
      color: var(--gb-primary-dark);
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }
    .pricing-page-wrapper .badge.gold {
      color: var(--gold);
      background: rgba(245, 158, 11, 0.08);
      border-color: rgba(245, 158, 11, 0.2);
    }

    .pricing-page-wrapper .btn-pricing {
      min-height: 54px;
      padding: 14px 28px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 999px;
      border: 1.5px solid transparent;
      font-weight: 800;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      white-space: nowrap;
      cursor: pointer;
    }
    .pricing-page-wrapper .btn-pricing:hover {
      transform: translateY(-3px);
    }
    .pricing-page-wrapper .btn-pricing-primary {
      color: #041018 !important;
      background: linear-gradient(135deg, var(--gb-primary), #5aa7ff);
      box-shadow: 0 12px 24px rgba(22, 199, 132, 0.25);
    }
    .pricing-page-wrapper .btn-pricing-primary:hover {
      background: linear-gradient(135deg, var(--gb-primary-dark), #3b82f6);
      color: #ffffff !important;
      box-shadow: 0 15px 30px rgba(22, 199, 132, 0.35);
    }
    .pricing-page-wrapper .btn-pricing-outline {
      color: var(--text);
      background: #ffffff;
      border-color: var(--line);
    }
    .pricing-page-wrapper .btn-pricing-outline:hover {
      border-color: var(--gb-primary);
      color: var(--gb-primary-dark);
      background: var(--color-presence-light);
    }

    .pricing-page-wrapper .hero {
      padding: 110px 0 82px;
      position: relative;
      overflow: hidden;
      background: radial-gradient(circle at 80% 20%, rgba(22, 199, 132, 0.08), rgba(54, 120, 255, 0.08) 30%, transparent 60%), #ffffff;
      border-bottom: 1px solid var(--line);
    }
    .pricing-page-wrapper .hero-wrap {
      position: relative;
      display: grid;
      grid-template-columns: 1.08fr 0.92fr;
      gap: 54px;
      align-items: center;
    }
    .pricing-page-wrapper .eyebrow { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 24px; }
    .pricing-page-wrapper .hero h1 {
      font-size: clamp(38px, 5.5vw, 64px);
      line-height: 1.08;
      letter-spacing: -2px;
      margin-bottom: 22px;
      color: var(--gb-dark);
      font-weight: 900;
    }
    .pricing-page-wrapper .gradient {
      background: linear-gradient(135deg, var(--gb-primary-dark), var(--color-leadgen), var(--color-engineering));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .pricing-page-wrapper .hero p {
      color: var(--soft);
      font-size: 18px;
      line-height: 1.7;
      margin-bottom: 35px;
    }
    .pricing-page-wrapper .hero-actions { display: flex; gap: 16px; flex-wrap: wrap; margin-top: 32px; }
    .pricing-page-wrapper .proof-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-top: 40px;
    }
    .pricing-page-wrapper .proof {
      padding: 20px;
      border-radius: 18px;
      background: var(--bg2);
      border: 1px solid var(--line);
    }
    .pricing-page-wrapper .proof strong { display: block; color: var(--gb-primary-dark); font-size: 20px; line-height: 1.2; }
    .pricing-page-wrapper .proof span { display: block; color: var(--muted); font-size: 13px; margin-top: 6px; font-weight: 500; }

    /* Hero Visuals & Floating Badges */
    .pricing-page-wrapper .hero-visual {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 480px;
      z-index: 2;
    }
    .pricing-page-wrapper .hero-visual .main-img {
      max-width: 100%;
      border-radius: 28px;
      box-shadow: 0 30px 60px rgba(7, 17, 31, 0.15);
      border: 4px solid #ffffff;
      position: relative;
      z-index: 2;
      transition: all 0.5s ease;
    }
    .pricing-page-wrapper .hero-visual .main-img:hover {
      transform: scale(1.02);
      box-shadow: 0 35px 70px rgba(7, 17, 31, 0.2);
    }
    .pricing-page-wrapper .hero-visual .floating-card {
      position: absolute;
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(10px);
      padding: 16px 22px;
      border-radius: 16px;
      box-shadow: var(--shadow);
      border: 1px solid rgba(255, 255, 255, 0.6);
      z-index: 3;
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .pricing-page-wrapper .hero-visual .fc-1 {
      top: 15%;
      left: -5%;
      transform: rotate(3deg);
      animation: pricingFloat 6s ease-in-out infinite;
    }
    .pricing-page-wrapper .hero-visual .fc-2 {
      bottom: 20%;
      right: -5%;
      transform: rotate(-2deg);
      animation: pricingFloat2 6s ease-in-out infinite;
      animation-delay: 3s;
    }
    .pricing-page-wrapper .hero-visual .floating-card .icon {
      font-size: 24px;
      width: 48px;
      height: 48px;
      background: rgba(22, 199, 132, 0.1);
      color: var(--gb-primary-dark);
      border-radius: 12px;
      display: grid;
      place-items: center;
    }
    .pricing-page-wrapper .hero-visual .fc-2 .icon {
      background: rgba(245, 158, 11, 0.1);
      color: var(--gold);
    }
    .pricing-page-wrapper .hero-visual .floating-card h4 {
      margin: 0;
      font-size: 22px;
      font-weight: 800;
      color: var(--gb-dark);
      line-height: 1.1;
    }
    .pricing-page-wrapper .hero-visual .floating-card span {
      font-size: 13px;
      color: var(--soft);
      font-weight: 600;
    }

    @keyframes pricingFloat {
      0% { transform: translateY(0px) rotate(3deg); }
      50% { transform: translateY(-12px) rotate(3deg); }
      100% { transform: translateY(0px) rotate(3deg); }
    }
    @keyframes pricingFloat2 {
      0% { transform: translateY(0px) rotate(-2deg); }
      50% { transform: translateY(-12px) rotate(-2deg); }
      100% { transform: translateY(0px) rotate(-2deg); }
    }

    .pricing-page-wrapper .section-head { max-width: 850px; text-align: center; margin: 0 auto 52px; }
    .pricing-page-wrapper .section-head h2 {
      font-size: clamp(32px, 4vw, 52px);
      line-height: 1.1;
      letter-spacing: -1.5px;
      margin: 16px 0 16px;
      color: var(--gb-dark);
      font-weight: 900;
    }
    .pricing-page-wrapper .section-head p { color: var(--muted); font-size: 18px; line-height: 1.6; }

    .pricing-page-wrapper .panel {
      background: var(--bg);
      border: 1px solid var(--line);
      border-radius: var(--radius);
      box-shadow: 0 10px 30px rgba(7, 17, 31, 0.03);
      transition: all 0.3s ease;
    }
    .pricing-page-wrapper .card { padding: 30px; }
    .pricing-page-wrapper .card h3 { font-size: 22px; margin-bottom: 12px; font-weight: 800; color: var(--gb-dark); }
    .pricing-page-wrapper .card p { color: var(--muted); font-size: 15px; line-height: 1.6; }
    .pricing-page-wrapper .icon {
      width: 54px; height: 54px; border-radius: 16px;
      display: flex; align-items: center; justify-content: center;
      background: rgba(22, 199, 132, 0.1);
      border: 1px solid rgba(22, 199, 132, 0.15);
      font-size: 24px;
      margin-bottom: 18px;
      color: var(--gb-primary-dark);
    }

    /* Risk / Gain Cards styling */
    .pricing-page-wrapper .risk-card { position: relative; overflow: hidden; background: rgba(239, 68, 68, 0.01); border-color: rgba(239, 68, 68, 0.12); }
    .pricing-page-wrapper .risk-card:before {
      content: "";
      position: absolute; left: 0; top: 0; bottom: 0; width: 4px;
      background: linear-gradient(180deg, var(--red), var(--gold));
    }
    .pricing-page-wrapper .gain-card { position: relative; overflow: hidden; background: rgba(22, 199, 132, 0.01); border-color: rgba(22, 199, 132, 0.12); }
    .pricing-page-wrapper .gain-card:before {
      content: "";
      position: absolute; left: 0; top: 0; bottom: 0; width: 4px;
      background: linear-gradient(180deg, var(--gb-primary), var(--gb-primary-dark));
    }
    .pricing-page-wrapper .list { list-style: none; display: grid; gap: 10px; margin-top: 18px; padding: 0; }
    .pricing-page-wrapper .list li { position: relative; padding-left: 24px; color: var(--soft); font-size: 14.5px; font-weight: 500; }
    .pricing-page-wrapper .list li:before { content: "•"; position: absolute; left: 6px; color: var(--gb-primary-dark); font-weight: 900; }
    .pricing-page-wrapper .risk-card .list li { color: #991b1b; }
    .pricing-page-wrapper .risk-card .list li:before { color: var(--red); }

    /* Plan Categories Specific Styling */
    .pricing-page-wrapper .plan-card {
      position: relative;
      padding: 34px 30px;
      border-radius: var(--radius);
      background: #ffffff;
      border: 1px solid var(--line);
      box-shadow: 0 12px 36px rgba(7, 17, 31, 0.03);
      overflow: hidden;
      min-height: 100%;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .pricing-page-wrapper .plan-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--shadow);
    }

    /* Category-specific theme systems */
    .presence-theme .plan-card { border-top: 4px solid var(--color-presence); }
    .presence-theme .plan-card.featured { border: 2px solid var(--color-presence); box-shadow: 0 20px 50px rgba(22, 199, 132, 0.12), var(--shadow); }
    .presence-theme .plan-card.featured:before { display: none; }
    .presence-theme .deliverables li:before { color: var(--color-presence-dark); }
    .presence-theme .price-box { background: var(--color-presence-light); border: 1px solid var(--color-presence-border); }
    .presence-theme .tag { background: rgba(22, 199, 132, 0.1); border-color: rgba(22, 199, 132, 0.2); color: var(--color-presence-dark); }
    .presence-theme .plan-card.featured .btn-pricing-primary {
      background: linear-gradient(135deg, var(--color-presence), var(--color-presence-dark));
      box-shadow: 0 10px 20px rgba(22, 199, 132, 0.25);
      color: #ffffff !important;
      border: none;
    }
    .presence-theme .plan-card.featured .btn-pricing-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(22, 199, 132, 0.35);
    }

    .leadgen-theme .plan-card { border-top: 4px solid var(--color-leadgen); }
    .leadgen-theme .plan-card.featured { border: 2px solid var(--color-leadgen); box-shadow: 0 20px 50px rgba(59, 130, 246, 0.12), var(--shadow); }
    .leadgen-theme .plan-card.featured:before { display: none; }
    .leadgen-theme .deliverables li:before { color: var(--color-leadgen-dark); }
    .leadgen-theme .price-box { background: var(--color-leadgen-light); border: 1px solid var(--color-leadgen-border); }
    .leadgen-theme .tag { background: rgba(59, 130, 246, 0.1); border-color: rgba(59, 130, 246, 0.2); color: var(--color-leadgen-dark); }
    .leadgen-theme .plan-card.featured .btn-pricing-primary {
      background: linear-gradient(135deg, var(--color-leadgen), var(--color-leadgen-dark));
      box-shadow: 0 10px 20px rgba(59, 130, 246, 0.25);
      color: #ffffff !important;
      border: none;
    }
    .leadgen-theme .plan-card.featured .btn-pricing-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(59, 130, 246, 0.35);
    }

    .engineering-theme .plan-card { border-top: 4px solid var(--color-engineering); }
    .engineering-theme .plan-card.featured { border: 2px solid var(--color-engineering); box-shadow: 0 20px 50px rgba(139, 92, 246, 0.12), var(--shadow); }
    .engineering-theme .plan-card.featured:before { display: none; }
    .engineering-theme .deliverables li:before { color: var(--color-engineering-dark); }
    .engineering-theme .price-box { background: var(--color-engineering-light); border: 1px solid var(--color-engineering-border); }
    .engineering-theme .tag { background: rgba(139, 92, 246, 0.1); border-color: rgba(139, 92, 246, 0.2); color: var(--color-engineering-dark); }
    .engineering-theme .plan-card.featured .btn-pricing-primary {
      background: linear-gradient(135deg, var(--color-engineering), var(--color-engineering-dark));
      box-shadow: 0 10px 20px rgba(139, 92, 246, 0.25);
      color: #ffffff !important;
      border: none;
    }
    .engineering-theme .plan-card.featured .btn-pricing-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(139, 92, 246, 0.35);
    }

    .pricing-page-wrapper .plan-top { display: flex; justify-content: space-between; align-items: flex-start; gap: 12px; margin-bottom: 20px; }
    .pricing-page-wrapper .plan-top h3 { font-size: 24px; font-weight: 800; line-height: 1.2; margin-bottom: 8px; color: var(--gb-dark); }
    .pricing-page-wrapper .plan-top p { color: var(--muted); font-size: 14px; line-height: 1.5; }
    .pricing-page-wrapper .tag {
      flex: none;
      padding: 6px 14px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .pricing-page-wrapper .price-box {
      margin: 24px 0;
      padding: 20px;
      border-radius: 18px;
    }
    .pricing-page-wrapper .regular { color: var(--muted); font-size: 14px; font-weight: 500; }
    .pricing-page-wrapper .regular del { color: #8794ac; }
    .pricing-page-wrapper .price { font-size: 38px; line-height: 1.1; font-weight: 900; letter-spacing: -1.5px; margin: 6px 0; color: var(--gb-dark); }
    .pricing-page-wrapper .price small { font-size: 15px; color: var(--muted); letter-spacing: 0; font-weight: 600; }
    .pricing-page-wrapper .saving { color: var(--gold); font-size: 13.5px; font-weight: 700; }
    .pricing-page-wrapper .deliverables { list-style: none; display: grid; gap: 12px; margin: 24px 0; padding: 0; }
    .pricing-page-wrapper .deliverables li { position: relative; padding-left: 28px; color: var(--soft); font-size: 15px; line-height: 1.5; font-weight: 500; }
    .pricing-page-wrapper .deliverables li:before { content: "✓"; position: absolute; left: 0; top: 0; font-weight: 900; font-size: 16px; }
    .pricing-page-wrapper .value-note {
      margin-top: 20px;
      padding: 16px;
      border-radius: 18px;
      background: rgba(22, 199, 132, 0.06);
      border: 1px solid rgba(22, 199, 132, 0.15);
      color: var(--soft);
      font-size: 14px;
      line-height: 1.5;
    }

    .pricing-page-wrapper .suite-band {
      padding: 0;
      background: none;
      border: none;
      box-shadow: none;
    }
    .pricing-page-wrapper .suite-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 32px;
    }
    .pricing-page-wrapper .suite-card {
      padding: 36px;
      border-radius: 24px;
      background: #ffffff;
      border: 1px solid var(--line);
      box-shadow: 0 12px 36px rgba(7, 17, 31, 0.02);
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      position: relative;
      overflow: hidden;
    }
    .pricing-page-wrapper .suite-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 45px rgba(7, 17, 31, 0.06);
      border-color: var(--gb-primary);
    }
    .pricing-page-wrapper .suite-card.presence-card:hover { border-color: var(--color-presence); }
    .pricing-page-wrapper .suite-card.branding-card:hover { border-color: var(--color-leadgen); }
    .pricing-page-wrapper .suite-card.automation-card:hover { border-color: var(--color-engineering); }
    .pricing-page-wrapper .suite-card.other-card:hover { border-color: #f97316; }

    .pricing-page-wrapper .suite-card-header {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 28px;
      border-bottom: 1.5px solid var(--line);
      padding-bottom: 18px;
    }
    .pricing-page-wrapper .suite-card-header .icon {
      margin-bottom: 0;
      flex-shrink: 0;
      width: 48px;
      height: 48px;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f8fafc;
      border: 1px solid var(--line);
      border-radius: 12px;
    }
    .pricing-page-wrapper .suite-card-header h3 {
      font-size: 20px;
      font-weight: 800;
      color: var(--gb-dark);
      margin: 0;
    }
    .pricing-page-wrapper .suite-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .pricing-page-wrapper .suite-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      padding-bottom: 16px;
      border-bottom: 1px dashed rgba(7, 17, 31, 0.06);
    }
    .pricing-page-wrapper .suite-item:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }
    .pricing-page-wrapper .suite-item-info {
      flex-grow: 1;
    }
    .pricing-page-wrapper .suite-item-info h4 {
      font-size: 15.5px;
      font-weight: 700;
      color: var(--gb-dark);
      margin: 0 0 4px;
    }
    .pricing-page-wrapper .suite-item-info p {
      font-size: 13px;
      color: var(--muted);
      margin: 0;
      line-height: 1.4;
    }
    .pricing-page-wrapper .suite-item-price {
      flex-shrink: 0;
      padding: 6px 14px;
      border-radius: 999px;
      background: var(--color-presence-light);
      border: 1px solid var(--color-presence-border);
      color: var(--color-presence-dark);
      font-size: 13px;
      font-weight: 800;
      text-align: center;
      white-space: nowrap;
    }
    
    .suite-card.branding-card .suite-item-price {
      background: var(--color-leadgen-light);
      border-color: var(--color-leadgen-border);
      color: var(--color-leadgen-dark);
    }
    .suite-card.automation-card .suite-item-price {
      background: var(--color-engineering-light);
      border-color: var(--color-engineering-border);
      color: var(--color-engineering-dark);
    }
    .suite-card.other-card .suite-item-price {
      background: #fff7ed;
      border-color: #ffedd5;
      color: #c2410c;
    }
    
    .pricing-page-wrapper .suite-info-panel {
      display: flex;
      gap: 16px;
      align-items: center;
      padding: 24px;
      border-radius: 20px;
      background: rgba(245, 158, 11, 0.03);
      border: 1.5px solid rgba(245, 158, 11, 0.15);
      margin-top: 36px;
      text-align: left;
    }
    .pricing-page-wrapper .suite-info-panel .icon {
      margin-bottom: 0;
      background: rgba(245, 158, 11, 0.1);
      color: #d97706;
      border-radius: 50%;
      width: 42px;
      height: 42px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: bold;
      flex-shrink: 0;
      border: 1px solid rgba(245, 158, 11, 0.2);
    }
    .pricing-page-wrapper .suite-info-panel p {
      margin: 0;
      font-size: 14.5px;
      color: var(--soft);
      line-height: 1.5;
    }

    /* FAQ Section */
    .pricing-page-wrapper .faq {
      padding: 24px 30px;
      cursor: pointer;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: #ffffff;
      transition: all 0.28s ease;
      margin-bottom: 16px;
    }
    .pricing-page-wrapper .faq:hover {
      border-color: var(--gb-primary);
      box-shadow: 0 8px 24px rgba(7, 17, 31, 0.03);
    }
    .pricing-page-wrapper .faq h3 {
      font-size: 17px;
      font-weight: 700;
      display: flex;
      justify-content: space-between;
      gap: 16px;
      align-items: center;
      margin: 0;
      color: var(--gb-dark);
      transition: color 0.25s ease;
    }
    .pricing-page-wrapper .faq h3 span {
      color: var(--gb-primary-dark);
      font-size: 24px;
      line-height: 1;
      transition: transform 0.25s ease;
    }
    .pricing-page-wrapper .faq p {
      display: none;
      color: var(--soft);
      margin-top: 14px;
      margin-bottom: 0;
      font-size: 15px;
      line-height: 1.6;
      border-top: 1px solid var(--line);
      padding-top: 14px;
    }
    .pricing-page-wrapper .faq.active {
      border-color: var(--gb-primary);
      background: var(--color-presence-light);
    }
    .pricing-page-wrapper .faq.active h3 {
      color: var(--gb-primary-dark);
    }
    .pricing-page-wrapper .faq.active p { display: block; }
    .pricing-page-wrapper .faq.active h3 span { transform: rotate(45deg); color: var(--gb-primary-dark); }

    .pricing-page-wrapper .final-cta {
      position: relative;
      overflow: hidden;
      text-align: center;
      border-radius: 36px;
      padding: 82px 36px;
      border: 1px solid var(--line);
      background: radial-gradient(circle at 20% 20%, rgba(22, 199, 132, 0.04), transparent 40%),
                  radial-gradient(circle at 80% 80%, rgba(59, 130, 246, 0.04), transparent 40%),
                  #f8fafc;
      box-shadow: 0 20px 60px rgba(7, 17, 31, 0.03);
    }
    .pricing-page-wrapper .final-cta h2 { font-size: clamp(34px, 4vw, 54px); line-height: 1.1; letter-spacing: -1.5px; margin: 16px 0; color: var(--gb-dark); font-weight: 900; }
    .pricing-page-wrapper .final-cta p { color: var(--soft); max-width: 820px; margin: 0 auto 32px; font-size: 18px; line-height: 1.6; }
    
    .pricing-page-wrapper .wa-float-pricing {
      position: fixed; right: 24px; bottom: 24px; z-index: 100; padding: 16px 24px; border-radius: 999px;
      background: #25D366; color: #ffffff !important; font-weight: 800; font-size: 15px;
      box-shadow: 0 14px 38px rgba(37, 211, 102, 0.35);
      display: flex; align-items: center; gap: 8px;
      transition: all 0.3s ease;
    }
    .pricing-page-wrapper .wa-float-pricing:hover {
      transform: scale(1.05) translateY(-3px);
      box-shadow: 0 18px 45px rgba(37, 211, 102, 0.45);
    }

    /* ==========================================================================
       SECTION MODERNIZATION: RISK SECTION (Growth Delay)
       ========================================================================== */
    .pricing-page-wrapper .risk-section-bg {
      background: radial-gradient(circle at 10% 20%, rgba(239, 68, 68, 0.015), transparent 40%), #ffffff;
      padding: 96px 0;
    }
    .pricing-page-wrapper .text-danger-custom {
      color: #ef4444;
      background: linear-gradient(135deg, #f87171, #ef4444);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 900;
    }
    .pricing-page-wrapper .risk-section-wrap {
      display: grid;
      grid-template-columns: 0.95fr 1.05fr;
      gap: 48px;
      align-items: center;
      margin-top: 48px;
    }
    .pricing-page-wrapper .risk-visual-col {
      position: relative;
      border-radius: 28px;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(7, 17, 31, 0.03);
      background: #f8fafc;
      border: 1px solid var(--line);
    }
    .pricing-page-wrapper .risk-visual-col .risk-img {
      width: 100%;
      height: auto;
      display: block;
      transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .pricing-page-wrapper .risk-visual-col:hover .risk-img {
      transform: scale(1.03);
    }
    .pricing-page-wrapper .risk-cards-col {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 24px;
    }
    .pricing-page-wrapper .risk-card-modern {
      background: #ffffff;
      border: 1px solid var(--line);
      border-radius: 20px;
      padding: 28px;
      box-shadow: 0 10px 30px rgba(7, 17, 31, 0.015);
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      position: relative;
    }
    .pricing-page-wrapper .risk-card-modern:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(7, 17, 31, 0.05);
    }
    .pricing-page-wrapper .risk-card-modern.risk-red { border-bottom: 4px solid #ef4444; }
    .pricing-page-wrapper .risk-card-modern.risk-orange { border-bottom: 4px solid #f97316; }
    .pricing-page-wrapper .risk-card-modern.risk-blue { border-bottom: 4px solid #3b82f6; }
    .pricing-page-wrapper .risk-card-modern.risk-purple { border-bottom: 4px solid #8b5cf6; }

    .pricing-page-wrapper .risk-card-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 16px;
    }
    .pricing-page-wrapper .risk-card-header .icon-badge {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      flex-shrink: 0;
    }
    .pricing-page-wrapper .risk-red .icon-badge { background: #fee2e2; border: 1px solid #fecaca; }
    .pricing-page-wrapper .risk-orange .icon-badge { background: #ffedd5; border: 1px solid #fed7aa; }
    .pricing-page-wrapper .risk-blue .icon-badge { background: #dbeafe; border: 1px solid #bfdbfe; }
    .pricing-page-wrapper .risk-purple .icon-badge { background: #f3e8ff; border: 1px solid #e9d5ff; }

    .pricing-page-wrapper .risk-card-modern h3 {
      font-size: 17px;
      font-weight: 800;
      color: var(--gb-dark);
      margin: 0;
    }
    .pricing-page-wrapper .risk-card-modern p {
      font-size: 13.5px;
      color: var(--muted);
      margin: 0 0 20px;
      line-height: 1.5;
    }
    .pricing-page-wrapper .risk-check-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .pricing-page-wrapper .risk-check-list li {
      font-size: 13px;
      font-weight: 700;
      color: var(--gb-dark);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    /* ==========================================================================
       SECTION MODERNIZATION: SYSTEM SECTION (Growth Operating System)
       ========================================================================== */
    .pricing-page-wrapper .system-section-bg {
      background: radial-gradient(circle at 90% 80%, rgba(22, 199, 132, 0.015), transparent 40%), #f8fafc;
      border-top: 1px solid var(--line);
      border-bottom: 1px solid var(--line);
      padding: 96px 0;
    }
    .pricing-page-wrapper .text-primary-custom {
      color: var(--gb-primary);
      background: linear-gradient(135deg, var(--gb-primary), var(--gb-primary-dark));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 900;
    }
    /* ==========================================================================
       GROWTH OPERATING SYSTEM (Perfect Horizontal Grid & Overlapping Laptop mockup)
       ========================================================================== */
    .pricing-page-wrapper .system-section-bg {
      position: relative;
      background: #ffffff;
      padding: 100px 0;
      overflow: hidden;
    }
    .pricing-page-wrapper .system-section-bg::before {
      content: '';
      position: absolute;
      right: -150px;
      top: 50%;
      transform: translateY(-50%);
      width: 550px;
      height: 550px;
      background: radial-gradient(circle, rgba(22, 199, 132, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
      z-index: 1;
    }
    .pricing-page-wrapper .system-main-title {
      position: relative;
      display: inline-block;
      margin: 0 auto 20px;
    }
    .pricing-page-wrapper .system-main-title::before {
      content: '';
      position: absolute;
      left: -48px;
      top: 12px;
      width: 32px;
      height: 24px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 24' fill='none'%3E%3Cpath d='M8 22L22 2M2 22L16 2M14 22L28 2' stroke='%2316c784' stroke-width='2.5' stroke-linecap='round'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
    }
    .pricing-page-wrapper .system-main-title::after {
      content: '';
      position: absolute;
      right: -48px;
      top: 12px;
      width: 32px;
      height: 24px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 24' fill='none'%3E%3Cpath d='M24 22L10 2M30 22L16 2M18 22L4 2' stroke='%2316c784' stroke-width='2.5' stroke-linecap='round'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
    }
    .pricing-page-wrapper .system-grid-container {
      position: relative;
      margin-top: 56px;
      z-index: 2;
    }
    
    /* Background Laptop Mockup positioning to sit beautifully behind Cards 3 and 4 */
    .pricing-page-wrapper .system-bg-mockup {
      position: absolute;
      right: -80px;
      top: -120px;
      width: 520px;
      z-index: 1;
      pointer-events: none;
      opacity: 0.95;
      transition: all 0.5s ease;
    }
    .pricing-page-wrapper .system-bg-mockup .bg-laptop-img {
      width: 100%;
      height: auto;
      display: block;
    }

    .pricing-page-wrapper .system-cards-row {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
      position: relative;
      z-index: 2;
    }
    
    .pricing-page-wrapper .system-card-modern-v2 {
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(10px);
      border: 1.5px solid var(--line);
      border-radius: 24px;
      padding: 24px;
      box-shadow: 0 10px 40px rgba(7, 17, 31, 0.02);
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
      position: relative;
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    
    .pricing-page-wrapper .system-card-modern-v2:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 50px rgba(7, 17, 31, 0.08);
      background: #ffffff;
    }
    
    /* Themed hover borders */
    .pricing-page-wrapper .system-card-modern-v2.theme-green:hover { border-color: #16c784; }
    .pricing-page-wrapper .system-card-modern-v2.theme-orange:hover { border-color: #f97316; }
    .pricing-page-wrapper .system-card-modern-v2.theme-blue:hover { border-color: #3b82f6; }
    .pricing-page-wrapper .system-card-modern-v2.theme-purple:hover { border-color: #8b5cf6; }

    /* Number badge */
    .pricing-page-wrapper .system-number-badge {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 28px;
      height: 28px;
      border-radius: 8px;
      font-size: 11px;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      z-index: 10;
    }
    .pricing-page-wrapper .theme-green .system-number-badge { background: #16c784; }
    .pricing-page-wrapper .theme-orange .system-number-badge { background: #f97316; }
    .pricing-page-wrapper .theme-blue .system-number-badge { background: #3b82f6; }
    .pricing-page-wrapper .theme-purple .system-number-badge { background: #8b5cf6; }

    /* Media graphic block inside card */
    .pricing-page-wrapper .system-card-media-v2 {
      height: 150px;
      margin-bottom: 24px;
      background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
      border-radius: 18px;
      border: 1px solid var(--line);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    
    .pricing-page-wrapper .system-card-body {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }
    .pricing-page-wrapper .system-card-body h3 {
      font-size: 18px;
      font-weight: 850;
      color: var(--gb-dark);
      margin: 0 0 12px;
      line-height: 1.3;
    }
    .pricing-page-wrapper .system-card-body p {
      font-size: 13.5px;
      color: var(--muted);
      margin: 0 0 24px;
      line-height: 1.6;
      flex-grow: 1;
    }

    /* Action bottom arrow circles */
    .pricing-page-wrapper .system-action-circle {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      font-weight: bold;
      color: #ffffff;
      align-self: flex-end;
      transition: all 0.3s ease;
      cursor: pointer;
    }
    .pricing-page-wrapper .theme-green .system-action-circle { background: #16c784; }
    .pricing-page-wrapper .theme-orange .system-action-circle { background: #f97316; }
    .pricing-page-wrapper .theme-blue .system-action-circle { background: #3b82f6; }
    .pricing-page-wrapper .theme-purple .system-action-circle { background: #8b5cf6; }

    .pricing-page-wrapper .system-card-modern-v2:hover .system-action-circle {
      transform: scale(1.1);
    }

    /* CARD 1 GRAPHIC: Desktop & Phone Overlap */
    .pricing-page-wrapper .mock-device-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .pricing-page-wrapper .mock-desktop {
      width: 110px;
      height: 75px;
      background: #ffffff;
      border: 1px solid var(--line);
      border-radius: 6px;
      box-shadow: 0 6px 15px rgba(7, 17, 31, 0.04);
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      transform: translateX(-10px);
    }
    .pricing-page-wrapper .mock-desktop .screen-header {
      padding: 3px 6px;
      background: #f1f5f9;
      border-bottom: 1px solid var(--line);
      display: flex;
      gap: 3px;
    }
    .pricing-page-wrapper .mock-desktop .dot {
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: #cbd5e1;
    }
    .pricing-page-wrapper .mock-desktop .screen-content {
      flex-grow: 1;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      padding: 6px;
    }
    .pricing-page-wrapper .mock-phone {
      width: 32px;
      height: 60px;
      background: #ffffff;
      border: 1.5px solid #000;
      border-radius: 6px;
      position: absolute;
      right: 25px;
      bottom: 25px;
      z-index: 3;
      overflow: hidden;
      box-shadow: 0 6px 15px rgba(7, 17, 31, 0.08);
    }
    .pricing-page-wrapper .mock-phone .phone-screen {
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    }
    .pricing-page-wrapper .shield-badge {
      position: absolute;
      font-size: 16px;
      z-index: 4;
      animation: pulse-slow 3s infinite ease-in-out;
    }
    .pricing-page-wrapper .shield-badge.left-shield {
      left: 15px;
      bottom: 25px;
    }
    .pricing-page-wrapper .shield-badge.right-shield {
      right: 12px;
      top: 25px;
    }

    /* CARD 2 GRAPHIC: Target Board & Floating Leads */
    .pricing-page-wrapper .mock-target-wrapper {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      padding: 0 16px;
    }
    .pricing-page-wrapper .target-board {
      width: 70px;
      height: 70px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .pricing-page-wrapper .target-board .ring {
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .pricing-page-wrapper .target-board .ring.outer {
      width: 66px;
      height: 66px;
      border: 4px solid #ef4444;
      background: #ffffff;
    }
    .pricing-page-wrapper .target-board .ring.middle {
      width: 44px;
      height: 44px;
      border: 4px solid #ffffff;
      background: #ef4444;
    }
    .pricing-page-wrapper .target-board .ring.inner {
      width: 22px;
      height: 22px;
      border: 4px solid #ef4444;
      background: #ffffff;
    }
    .pricing-page-wrapper .target-board .dart {
      position: absolute;
      font-size: 26px;
      top: -8px;
      right: -8px;
      transform: rotate(-15deg);
      z-index: 2;
    }
    .pricing-page-wrapper .leads-list {
      display: flex;
      flex-direction: column;
      gap: 6px;
      flex-grow: 1;
      max-width: 90px;
    }
    .pricing-page-wrapper .leads-list .lead-item {
      background: #ffffff;
      padding: 4px 8px;
      border-radius: 6px;
      border: 1px solid var(--line);
      box-shadow: 0 2px 6px rgba(7, 17, 31, 0.02);
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .pricing-page-wrapper .leads-list .lead-item .avatar {
      font-size: 10px;
      color: #94a3b8;
    }
    .pricing-page-wrapper .leads-list .lead-item .bar {
      height: 4px;
      background: #cbd5e1;
      border-radius: 2px;
      flex-grow: 1;
    }

    /* CARD 3 GRAPHIC: Magnifying Glass & Bar Charts */
    .pricing-page-wrapper .mock-visibility-wrapper {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .pricing-page-wrapper .search-bar-mock {
      background: #ffffff;
      border: 1.5px solid var(--line);
      padding: 6px 14px;
      border-radius: 999px;
      font-size: 11px;
      font-weight: 700;
      color: var(--gb-dark);
      box-shadow: 0 4px 10px rgba(7, 17, 31, 0.02);
      display: flex;
      align-items: center;
      gap: 6px;
      position: absolute;
      left: 15px;
      top: 30px;
      z-index: 3;
    }
    .pricing-page-wrapper .growth-charts {
      display: flex;
      align-items: flex-end;
      gap: 6px;
      height: 60px;
      position: absolute;
      right: 25px;
      bottom: 25px;
      z-index: 2;
    }
    .pricing-page-wrapper .growth-charts .bar-chart {
      width: 12px;
      background: #3b82f6;
      border-radius: 4px 4px 0 0;
      transition: height 0.3s ease;
    }
    .pricing-page-wrapper .growth-charts .bar-chart.b1 { height: 20px; }
    .pricing-page-wrapper .growth-charts .bar-chart.b2 { height: 35px; }
    .pricing-page-wrapper .growth-charts .bar-chart.b3 { height: 50px; background: #16c784; }
    
    .pricing-page-wrapper .platform-icons {
      position: absolute;
      left: 20px;
      bottom: 20px;
      display: flex;
      gap: 6px;
      z-index: 4;
    }
    .pricing-page-wrapper .platform-icons .icon-brand {
      width: 20px;
      height: 20px;
      border-radius: 5px;
      font-size: 9px;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
    }
    .pricing-page-wrapper .platform-icons .icon-brand.yt { background: #ef4444; }
    .pricing-page-wrapper .platform-icons .icon-brand.g { background: #f59e0b; }

    /* CARD 4 GRAPHIC: Chatbot & Floating Messaging Icons */
    .pricing-page-wrapper .mock-automation-wrapper {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .pricing-page-wrapper .robot-face {
      font-size: 56px;
      animation: pulse-slow 3s infinite ease-in-out;
      z-index: 2;
    }
    .pricing-page-wrapper .floating-icons .float-icon {
      position: absolute;
      width: 26px;
      height: 26px;
      background: #ffffff;
      border: 1px solid var(--line);
      border-radius: 50%;
      box-shadow: 0 4px 10px rgba(7, 17, 31, 0.04);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      z-index: 3;
    }
    .pricing-page-wrapper .floating-icons .float-icon.wa {
      top: 25px;
      right: 35px;
      background: #25d366;
      border-color: #25d366;
      color: #ffffff;
    }
    .pricing-page-wrapper .floating-icons .float-icon.user {
      bottom: 25px;
      right: 30px;
    }
    .pricing-page-wrapper .floating-icons .float-icon.email {
      bottom: 35px;
      left: 30px;
    }

    .pricing-page-wrapper .combo-dark-section {
      background: #07111f !important;
      position: relative;
      overflow: hidden;
    }
    .pricing-page-wrapper .combo-dark-section::before {
      content: '';
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 800px;
      height: 800px;
      background: radial-gradient(circle, rgba(22, 199, 132, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
      z-index: 1;
    }
    .pricing-page-wrapper .combo-dark-section .container {
      position: relative;
      z-index: 2;
    }
    .pricing-page-wrapper .combo-dark-section .section-head h2 {
      color: #ffffff !important;
    }
    .pricing-page-wrapper .combo-dark-section .section-head p {
      color: rgba(255, 255, 255, 0.7) !important;
    }
    .pricing-page-wrapper .combo-dark-section .panel.card {
      background: rgba(255, 255, 255, 0.03) !important;
      border: 1px solid rgba(255, 255, 255, 0.08) !important;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2) !important;
      backdrop-filter: blur(12px);
    }
    .pricing-page-wrapper .combo-dark-section .panel.card h3 {
      color: #ffffff !important;
    }
    .pricing-page-wrapper .combo-dark-section .panel.card p {
      color: rgba(255, 255, 255, 0.65) !important;
    }
    .pricing-page-wrapper .combo-dark-section .panel.card p strong {
      color: #ffffff !important;
    }
    .pricing-page-wrapper .combo-dark-section .price-box {
      background: rgba(255, 255, 255, 0.02) !important;
      border: 1px solid rgba(255, 255, 255, 0.06) !important;
    }
    .pricing-page-wrapper .combo-dark-section .price-box .price {
      color: #ffffff !important;
    }
    .pricing-page-wrapper .combo-dark-section .price-box .price small {
      color: rgba(255, 255, 255, 0.5) !important;
    }
    .pricing-page-wrapper .combo-dark-section .panel.card:hover {
      transform: translateY(-8px);
      border-color: var(--gb-primary) !important;
      box-shadow: 0 25px 50px rgba(22, 199, 132, 0.18) !important;
      background: rgba(255, 255, 255, 0.06) !important;
    }

    @keyframes pulse-slow {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.08); }
    }

    @media(max-width: 1020px) {
      .pricing-page-wrapper .hero-wrap,
      .pricing-page-wrapper .grid-2,
      .pricing-page-wrapper .grid-3,
      .pricing-page-wrapper .grid-4,
      .pricing-page-wrapper .suite-grid,
      .pricing-page-wrapper .risk-section-wrap,
      .pricing-page-wrapper .risk-cards-col,
      .pricing-page-wrapper .system-section-wrap,
      .pricing-page-wrapper .system-cards-col {
        grid-template-columns: 1fr;
      }
      .pricing-page-wrapper .hero-visual {
        min-height: auto;
        margin-top: 50px;
      }
      .pricing-page-wrapper .hero-visual .fc-1 { left: 5%; }
      .pricing-page-wrapper .hero-visual .fc-2 { right: 5%; }
      .pricing-page-wrapper .proof-row { grid-template-columns: 1fr; }
      .pricing-page-wrapper .section { padding: 72px 0; }
      .pricing-page-wrapper .hero { padding-top: 76px; }
      .pricing-page-wrapper .hero-actions .btn-pricing { width: 100%; }
      .pricing-page-wrapper .risk-visual-col,
      .pricing-page-wrapper .system-visual-col {
        margin-top: 32px;
      }
    }

    /* ==========================================================================
       FAQ OVERHAUL (YouTube-style Accordion)
       ========================================================================== */
    .pricing-page-wrapper .accordion {
      --bs-accordion-bg: transparent;
      --bs-accordion-border-color: transparent;
    }
    .pricing-page-wrapper .accordion-item {
      border: 1.5px solid var(--line) !important;
      border-radius: 16px !important;
      margin-bottom: 16px;
      overflow: hidden;
      background: #ffffff !important;
      box-shadow: 0 4px 15px rgba(7, 17, 31, 0.01);
      transition: all 0.3s ease;
    }
    .pricing-page-wrapper .accordion-item:hover {
      border-color: var(--gb-primary) !important;
      box-shadow: 0 10px 25px rgba(22, 199, 132, 0.04);
    }
    .pricing-page-wrapper .accordion-header {
      margin: 0 !important;
      padding: 0 !important;
      background: none !important;
    }
    .pricing-page-wrapper .accordion-button {
      font-size: 17px;
      font-weight: 700;
      color: var(--gb-dark) !important;
      background: #ffffff !important;
      padding: 22px 28px;
      border: none !important;
      box-shadow: none !important;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      text-align: left;
      transition: all 0.3s ease;
      position: relative;
    }
    .pricing-page-wrapper .accordion-button:not(.collapsed) {
      color: var(--gb-primary-dark) !important;
      background: #f0fdf4 !important; /* Grow Boostly Cream Green */
    }
    .pricing-page-wrapper .accordion-button::after {
      display: none !important; /* Remove Bootstrap default arrow */
    }
    .pricing-page-wrapper .accordion-button::before {
      content: '+';
      position: absolute;
      right: 28px;
      font-size: 22px;
      font-weight: 400;
      color: var(--muted);
      transition: transform 0.3s ease;
      font-family: monospace;
    }
    .pricing-page-wrapper .accordion-button:not(.collapsed)::before {
      content: '−';
      color: var(--gb-primary-dark);
    }
    .pricing-page-wrapper .accordion-body {
      font-size: 15px;
      color: var(--soft) !important;
      padding: 12px 28px 26px !important;
      background: #f0fdf4 !important; /* Grow Boostly Cream Green */
      line-height: 1.75;
      border: none !important;
    }

    /* ==========================================================================
       FINAL CTA OVERHAUL (YouTube B2B SaaS Style)
       ========================================================================== */
    .pricing-page-wrapper .pricing-final-cta {
      padding: 100px 0;
      background: linear-gradient(135deg, #07111f 0%, #0d1b2f 60%, #0b9f68 100%);
      text-align: center;
      position: relative;
      overflow: hidden;
      border-radius: 36px;
      margin: 40px 15px 90px; /* Margins to inset the section beautifully */
      border: 1px solid rgba(22, 199, 132, 0.15);
      box-shadow: 0 30px 70px rgba(7, 17, 31, 0.25);
    }
    .pricing-page-wrapper .pricing-final-cta::before {
      content: '🚀';
      position: absolute;
      font-size: 350px;
      font-weight: 900;
      color: rgba(22, 199, 132, 0.035);
      left: 50%;
      transform: translateX(-50%);
      top: 50%;
      margin-top: -160px;
      white-space: nowrap;
      pointer-events: none;
      user-select: none;
    }
    .pricing-page-wrapper .pricing-final-cta h2 {
      font-size: clamp(28px, 4vw, 44px);
      font-weight: 900;
      color: #ffffff;
      margin-bottom: 24px;
      position: relative;
      z-index: 1;
      line-height: 1.25;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
    }
    .pricing-page-wrapper .pricing-final-cta h2 .cta-green {
      background: linear-gradient(135deg, #a7f3d0, #16c784);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 900;
    }
    .pricing-page-wrapper .pricing-final-cta p {
      font-size: 17.5px;
      color: rgba(255, 255, 255, 0.8);
      max-width: 760px;
      margin: 0 auto 44px;
      position: relative;
      z-index: 1;
      line-height: 1.8;
    }
    .pricing-page-wrapper .pricing-final-cta .cta-phone {
      font-size: 19px;
      font-weight: 700;
      margin-bottom: 36px;
      position: relative;
      z-index: 1;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .pricing-page-wrapper .pricing-final-cta .cta-phone a {
      color: #16c784;
      text-decoration: none;
      transition: color 0.25s ease;
    }
    .pricing-page-wrapper .pricing-final-cta .cta-phone a:hover {
      color: #a7f3d0;
    }
    .pricing-page-wrapper .pricing-cta-actions {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      position: relative;
      z-index: 1;
    }
    .pricing-page-wrapper .pricing-cta-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #ffffff;
      color: #0d1b2f;
      font-size: 16px;
      font-weight: 700;
      padding: 18px 40px;
      border-radius: 12px;
      text-decoration: none !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      border: 2px solid transparent;
      box-shadow: 0 10px 30px rgba(7, 17, 31, 0.15);
    }
    .pricing-page-wrapper .pricing-cta-btn:hover {
      background: #f0fdf4;
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(22, 199, 132, 0.2);
      color: #0b9f68;
    }
    .pricing-page-wrapper .pricing-cta-btn.ghost {
      background: transparent;
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: #ffffff;
      box-shadow: none;
    }
    .pricing-page-wrapper .pricing-cta-btn.ghost:hover {
      background: rgba(255, 255, 255, 0.08);
      border-color: #ffffff;
      color: #ffffff;
    }
    .pricing-page-wrapper .pricing-final-badge {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 16px 28px;
      margin-top: 48px;
      font-size: 14px;
      color: rgba(255, 255, 255, 0.9);
      position: relative;
      z-index: 1;
      flex-wrap: wrap;
      max-width: 85%;
    }
  
/* --- NEW PRICING SECTIONS PREMIUM CSS --- */

/* General Wrappers */
.wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.section.website-pricing-clean, .section.soft, .section.hire-dev-premium, .section.important-notes-premium {
    padding: 80px 0;
}
.section.soft {
    background-color: #f8fafc;
}

/* Headers & Eyebrows */
.website-section-header, .category-head, .section-intro {
    text-align: center;
    margin-bottom: 50px;
}
.eyebrow {
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--gb-primary, #0056b3);
    font-weight: 700;
    margin: 0 auto 10px auto !important;
    display: inline-block !important;
    width: max-content !important;
    background: rgba(0, 86, 179, 0.1);
    padding: 4px 12px;
    border-radius: 20px;
}
.eyebrow.dark {
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
}
.website-section-header h2, .category-head h2, .section-intro h2 {
    font-size: 36px;
    font-weight: 800;
    color: #111827;
    margin-bottom: 15px;
}
.website-section-header p, .category-head p, .section-intro p {
    font-size: 16px;
    color: #6b7280;
    max-width: 650px;
    margin: 0 auto;
}

/* Badge in header */
.website-header-badge {
    display: inline-flex;
    align-items: center;
    background: #fff3cd;
    color: #856404;
    padding: 8px 16px;
    border-radius: 50px;
    font-size: 14px;
    margin: 20px auto 0 auto;
    border: 1px solid #ffeeba;
    width: max-content;
}
.website-header-badge b {
    margin-right: 8px;
    background: #ffc107;
    color: #000;
    padding: 2px 8px;
    border-radius: 20px;
    font-size: 12px;
}

/* Grid Layouts */
.website-plans-layout, .price-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

.dev-card-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 40px;
}

/* Card Styles */
.website-plan-card, .price-card, .dev-card {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.website-plan-card:hover, .price-card:hover, .dev-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border-color: rgba(0, 86, 179, 0.3);
}

/* Featured / Premium Cards */
.featured-site-card, .price-card.featured {
    border: 2px solid var(--gb-primary, #00b87c) !important;
    box-shadow: 0 10px 15px -3px rgba(0, 184, 124, 0.1);
}
.featured-site-card::before, .price-card.featured::before {
    content: "Recommended";
    position: absolute;
    top: 0;
    right: 0;
    background: var(--gb-primary, #00b87c);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 10px;
    border-bottom-left-radius: 12px;
}
.dev-card-dark {
    background: #111827;
    color: #ffffff;
    border: none;
}
.dev-card-dark h3, .dev-card-dark p, .dev-card-dark ul li, .dev-card-dark .dev-card-head span {
    color: #f3f4f6;
}
.dev-card-dark .dev-card-head b {
    color: #fff;
}
.dev-card-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 12px;
    width: 100%;
    margin-bottom: 12px;
}
.dev-card-head b {
    text-align: right;
    flex-shrink: 0;
}

/* Card Content Typography */
.site-card-price-row {
    margin-bottom: 12px;
    width: 100%;
}
.site-card-price-row span, .tag, .dev-card-head span {
    display: inline-block !important;
    font-size: 11px;
    color: #6b7280;
    margin-bottom: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: max-content !important;
}
.tag {
    background: #f3f4f6;
    padding: 4px 10px;
    border-radius: 20px;
}
.site-card-price-row strong, .price, .dev-card-head b {
    font-size: 28px;
    font-weight: 800;
    color: #111827;
    line-height: 1;
    display: block;
}
.price-card .price {
    margin-bottom: 12px;
}
.website-plan-card h3, .price-card h3, .dev-card h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #1f2937;
    width: 100%;
}
.website-plan-card p, .price-card p, .dev-card p {
    font-size: 13px;
    color: #4b5563;
    margin-bottom: 15px;
    flex-grow: 1;
    width: 100%;
}

/* Lists in Cards */
.website-plan-card ul, .price-card ul, .dev-card ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
    width: 100%;
}
.website-plan-card ul li, .price-card ul li, .dev-card ul li {
    position: relative;
    padding-left: 22px;
    margin-bottom: 8px;
    font-size: 13px;
    color: #4b5563;
}
.website-plan-card ul li::before, .price-card ul li::before, .dev-card ul li::before {
    content: "\2713";
    position: absolute;
    left: 0;
    top: 0;
    color: #10b981;
    font-weight: 800;
}
.dev-card-dark ul li::before {
    color: #34d399;
}

/* Buttons — Ask for Quote (all pricing cards) */
.site-card-btn,
.btn-main,
.dev-btn,
.price-card .btn.btn-main,
.website-plan-card .site-card-btn,
.dev-card .dev-btn {
    display: block;
    width: 100%;
    text-align: center;
    background: var(--gb-primary, #16c784);
    color: #ffffff;
    padding: 10px 16px;
    font-size: 14px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.2s;
    border: 1px solid transparent;
}
.site-card-btn:hover,
.btn-main:hover,
.dev-btn:hover,
.price-card .btn.btn-main:hover,
.website-plan-card .site-card-btn:hover,
.dev-card .dev-btn:hover {
    background: var(--gb-primary-dark, #0b9f68);
    color: #ffffff;
}
.featured-site-card .site-card-btn,
.price-card.featured .btn-main,
.dev-card-dark .dev-btn {
    background: var(--gb-primary-dark, #0b9f68);
    color: #ffffff;
}
.featured-site-card .site-card-btn:hover,
.price-card.featured .btn-main:hover,
.dev-card-dark .dev-btn:hover {
    background: #099456;
    color: #ffffff;
}

/* Dark hire-dev cards — override general .dev-card typography (comes later in cascade) */
.dev-card.dev-card-dark h3 {
    color: #ffffff;
}
.dev-card.dev-card-dark p,
.dev-card.dev-card-dark ul li {
    color: #e5e7eb;
}
.dev-card.dev-card-dark .dev-card-head span {
    color: #9ca3af;
}
.dev-card.dev-card-dark .dev-card-head b {
    color: #ffffff;
}

.price-card .btns {
    width: 100%;
    margin-top: auto;
}

/* Notes Section */
.website-price-note, .mini-note {
    background: #fff;
    border: 1px dashed #cbd5e1;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    color: #475569;
}
.mini-note {
    display: block;
    text-align: center;
}
.website-price-note a {
    background: #111827;
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    white-space: nowrap;
    margin-left: 20px;
}
.website-price-note a:hover {
    background: #000;
}

/* Hire Dev Hero */
.hire-dev-hero {
    background: linear-gradient(135deg, #1e3a8a, #3b82f6);
    color: #fff;
    border-radius: 16px;
    padding: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 50px;
}
.hire-dev-hero span {
    background: rgba(255,255,255,0.2);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 1px;
}
.hire-dev-hero h3 {
    font-size: 28px;
    font-weight: 800;
    margin: 15px 0;
}
.hire-dev-hero p {
    font-size: 16px;
    opacity: 0.9;
    max-width: 600px;
    margin: 0;
}
.hire-dev-hero .btn-main {
    width: auto;
    display: inline-block;
    flex-shrink: 0;
    background: #fff;
    color: #1e3a8a;
    padding: 15px 30px;
    font-size: 16px;
}
.hire-dev-hero .btn-main:hover {
    background: #f8fafc;
}

/* Important Notes Premium */
.important-notes-premium {
    background: #0f172a;
    color: #e2e8f0;
}
.important-notes-premium h2,
.important-notes-premium h3 {
    color: #ffffff;
}
.important-notes-premium p {
    color: #cbd5e1;
}
.notes-layout {
    display: flex;
    gap: 50px;
    align-items: flex-start;
}
.notes-left {
    flex: 1;
}
.notes-left h2 {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 20px;
    color: #ffffff;
}
.notes-left p {
    color: #cbd5e1;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 30px;
}
.notes-proof {
    display: flex;
    gap: 20px;
}
.notes-proof div {
    background: rgba(255,255,255,0.05);
    padding: 15px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
}
.notes-proof b {
    display: block;
    color: #38bdf8;
    font-size: 18px;
    margin-bottom: 5px;
}
.notes-proof span {
    color: #cbd5e1;
    font-size: 13px;
}
.notes-right {
    flex: 1.2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
.note-step-card {
    background: rgba(255,255,255,0.05);
    padding: 25px;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.1);
    transition: 0.3s;
}
.note-step-card:hover {
    background: rgba(255,255,255,0.08);
    transform: translateY(-5px);
}
.note-step-card span {
    font-size: 32px;
    font-weight: 900;
    color: rgba(255,255,255,0.1);
    display: block;
    margin-bottom: 15px;
}
.note-step-card h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #ffffff;
}
.note-step-card p {
    font-size: 14px;
    color: #cbd5e1;
    line-height: 1.5;
    margin: 0;
}
.important-notes-premium .eyebrow.dark {
    color: #ffffff;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .website-plans-layout, .price-grid, .dev-card-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .notes-layout {
        flex-direction: column;
    }
    .hire-dev-hero {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    .hire-dev-hero p {
        margin: 0 auto;
    }
    .website-price-note {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    .website-price-note a {
        margin-left: 0;
    }
}
@media (max-width: 767px) {
    .website-plans-layout, .price-grid, .dev-card-grid {
        grid-template-columns: 1fr;
    }
    .notes-right {
        grid-template-columns: 1fr;
    }
}

    /* ── PRICING CATEGORY CARDS MODERN GRID ── */
    .pricing-categories-section {
        padding: 96px 0;
        background: radial-gradient(circle at 50% 50%, rgba(246, 249, 252, 0.5), #ffffff);
    }
    .pricing-categories-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
    }
    .pricing-category-card {
        background: #ffffff;
        border: 1px solid var(--line);
        border-radius: 20px;
        padding: 34px 30px;
        box-shadow: 0 10px 30px rgba(7, 17, 31, 0.02);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
        border-top: 4px solid var(--line);
    }
    .pricing-category-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(7, 17, 31, 0.08);
    }
    .pricing-category-card .card-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin-bottom: 24px;
        transition: transform 0.3s ease;
    }
    .pricing-category-card:hover .card-icon {
        transform: scale(1.1);
    }
    .pricing-category-card h3 {
        font-size: 20px;
        font-weight: 800;
        color: var(--gb-dark);
        margin: 0 0 12px;
    }
    .pricing-category-card p {
        font-size: 14.5px;
        color: var(--muted);
        line-height: 1.6;
        margin-bottom: 28px;
        flex-grow: 1;
    }
    .pricing-category-card .card-footer {
        background: none;
        border: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
        width: 100%;
    }
    .pricing-category-card .btn-card-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 24px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        color: #ffffff !important;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        width: 100%;
        text-align: center;
    }
    .pricing-category-card .btn-card-outline {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 11px 24px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        color: var(--soft);
        background: transparent;
        border: 1.5px solid var(--line);
        transition: all 0.3s ease;
        cursor: pointer;
        width: 100%;
        text-align: center;
    }
    .pricing-category-card .btn-card-outline:hover {
        background: var(--bg2);
        color: var(--gb-dark);
    }

    /* Category Themes */
    .card-theme-web {
        border-top-color: #8b5cf6;
    }
    .card-theme-web .card-icon {
        background: rgba(139, 92, 246, 0.08);
        color: #8b5cf6;
    }
    .card-theme-web .btn-card-primary {
        background: linear-gradient(135deg, #8b5cf6, #6d28d9);
        box-shadow: 0 8px 20px rgba(139, 92, 246, 0.2);
    }
    .card-theme-web .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(139, 92, 246, 0.3);
    }

    .card-theme-seo {
        border-top-color: #16c784;
    }
    .card-theme-seo .card-icon {
        background: rgba(22, 199, 132, 0.08);
        color: #16c784;
    }
    .card-theme-seo .btn-card-primary {
        background: linear-gradient(135deg, #16c784, #0b9f68);
        box-shadow: 0 8px 20px rgba(22, 199, 132, 0.2);
    }
    .card-theme-seo .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(22, 199, 132, 0.3);
    }

    .card-theme-ads {
        border-top-color: #3b82f6;
    }
    .card-theme-ads .card-icon {
        background: rgba(59, 130, 246, 0.08);
        color: #3b82f6;
    }
    .card-theme-ads .btn-card-primary {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        box-shadow: 0 8px 20px rgba(59, 130, 246, 0.2);
    }
    .card-theme-ads .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(59, 130, 246, 0.3);
    }

    .card-theme-social {
        border-top-color: #f97316;
    }
    .card-theme-social .card-icon {
        background: rgba(249, 115, 22, 0.08);
        color: #f97316;
    }
    .card-theme-social .btn-card-primary {
        background: linear-gradient(135deg, #f97316, #c2410c);
        box-shadow: 0 8px 20px rgba(249, 115, 22, 0.2);
    }
    .card-theme-social .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(249, 115, 22, 0.3);
    }

    .card-theme-branding {
        border-top-color: #4f46e5;
    }
    .card-theme-branding .card-icon {
        background: rgba(79, 70, 229, 0.08);
        color: #4f46e5;
    }
    .card-theme-branding .btn-card-primary {
        background: linear-gradient(135deg, #4f46e5, #3730a3);
        box-shadow: 0 8px 20px rgba(79, 70, 229, 0.2);
    }
    .card-theme-branding .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(79, 70, 229, 0.3);
    }

    .card-theme-influencer {
        border-top-color: #db2777;
    }
    .card-theme-influencer .card-icon {
        background: rgba(219, 39, 119, 0.08);
        color: #db2777;
    }
    .card-theme-influencer .btn-card-primary {
        background: linear-gradient(135deg, #db2777, #9d174d);
        box-shadow: 0 8px 20px rgba(219, 39, 119, 0.2);
    }
    .card-theme-influencer .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(219, 39, 119, 0.3);
    }

    .card-theme-app {
        border-top-color: #7c3aed;
    }
    .card-theme-app .card-icon {
        background: rgba(124, 58, 237, 0.08);
        color: #7c3aed;
    }
    .card-theme-app .btn-card-primary {
        background: linear-gradient(135deg, #7c3aed, #5b21b6);
        box-shadow: 0 8px 20px rgba(124, 58, 237, 0.2);
    }
    .card-theme-app .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(124, 58, 237, 0.3);
    }

    .card-theme-automation {
        border-top-color: #dc2626;
    }
    .card-theme-automation .card-icon {
        background: rgba(220, 38, 38, 0.08);
        color: #dc2626;
    }
    .card-theme-automation .btn-card-primary {
        background: linear-gradient(135deg, #dc2626, #991b1b);
        box-shadow: 0 8px 20px rgba(220, 38, 38, 0.2);
    }
    .card-theme-automation .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(220, 38, 38, 0.3);
    }

    .card-theme-dev {
        border-top-color: #1e293b;
    }
    .card-theme-dev .card-icon {
        background: rgba(30, 41, 59, 0.08);
        color: #1e293b;
    }
    .card-theme-dev .btn-card-primary {
        background: linear-gradient(135deg, #1e293b, #0f172a);
        box-shadow: 0 8px 20px rgba(30, 41, 59, 0.2);
    }
    .card-theme-dev .btn-card-primary:hover {
        box-shadow: 0 12px 25px rgba(30, 41, 59, 0.3);
    }

    @media (max-width: 991px) {
        .pricing-categories-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 767px) {
        .pricing-categories-grid {
            grid-template-columns: 1fr;
        }
        .pricing-categories-section {
            padding: 72px 0;
        }
    }

</style>
</head>

<body class="tt-magic-cursor digital-agency">

    <?php include 'header.php'; ?>

    <div class="pricing-page-wrapper">
        <a class="wa-float-pricing" href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20a%20custom%20growth%20proposal." target="_blank">WhatsApp Now</a>

        <header class="hero">
            <div class="container hero-wrap">
                <div>
                    <div class="eyebrow">
                        <span class="badge">Strategic Growth Plans</span>
                        <span class="badge gold">Launch Offer for Early Clients</span>
                    </div>
                    <h1>Build a Digital Growth System That Works Beyond a Basic Website</h1>
                    <p>
                        Your business already pays for rent, staff, electricity, inventory and time. The real loss starts when customers cannot find you, trust you or contact you easily. GrowBoostly builds the complete online system — website, SEO, paid ads, landing pages, WhatsApp follow-up, CRM, content and brand presence — so your business can attract, convert and retain better customers.
                    </p>
                    <div class="hero-actions">
                        <a class="btn-pricing btn-pricing-primary" href="#growth-plans">Explore Growth Plans</a>
                        <a class="btn-pricing btn-pricing-outline" href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20which%20plan%20is%20right%20for%20my%20business." target="_blank">Discuss My Business</a>
                    </div>
                    <div class="proof-row">
                        <div class="proof"><strong>Lead-First</strong><span>Designed for inquiries, not just design</span></div>
                        <div class="proof"><strong>ROI-Minded</strong><span>Tracking, follow-up and conversion focus</span></div>
                        <div class="proof"><strong>Premium Value</strong><span>Clear scope with launch investment</span></div>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="floating-card fc-1">
                        <div class="icon">📈</div>
                        <div>
                            <h4>+300%</h4>
                            <span>Lead Flow Spike</span>
                        </div>
                    </div>
                    <img src="assets/img/services/pricing-hero.png" alt="SaaS Digital Growth Roadmap & Pricing" class="main-img">
                    <div class="floating-card fc-2">
                        <div class="icon">💰</div>
                        <div>
                            <h4>₹20L+</h4>
                            <span>Revenue Rescued</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="section risk-section-bg">
                <div class="container">
                    <div class="section-head" style="text-align:center;">
                        <span class="badge">The Silent Business Cost</span>
                        <h2>Growth Delay Is More <span class="text-danger-custom">Expensive</span> Than Digital Investment</h2>
                        <p>A business does not lose only when it spends money. It loses more when potential customers cannot discover, trust, compare or contact the business at the right time.</p>
                    </div>

                    <div class="risk-section-wrap">
                        <div class="risk-visual-col">
                            <img src="assets/img/services/risk-visual.png" alt="Silent business loss due to digital growth delay" class="risk-img">
                        </div>
                        <div class="risk-cards-col">
                            <!-- Card 1: Low Trust Online -->
                            <div class="risk-card-modern risk-red">
                                <div class="risk-card-header">
                                    <div class="icon-badge">🛡️</div>
                                    <h3>Low Trust Online</h3>
                                </div>
                                <p>Customers check your website, Google profile and social presence before calling.</p>
                                <ul class="risk-check-list">
                                    <li>❌ Weak first impression</li>
                                    <li>❌ Lower referral conversion</li>
                                    <li>❌ Competitors look stronger</li>
                                </ul>
                            </div>

                            <!-- Card 2: Ad Budget Leakage -->
                            <div class="risk-card-modern risk-orange">
                                <div class="risk-card-header">
                                    <div class="icon-badge">📢</div>
                                    <h3>Ad Budget Leakage</h3>
                                </div>
                                <p>Ads without a proper landing page, tracking and follow-up can waste money quickly.</p>
                                <ul class="risk-check-list">
                                    <li>⚠️ Low-quality leads</li>
                                    <li>⚠️ No conversion clarity</li>
                                    <li>⚠️ High cost per inquiry</li>
                                </ul>
                            </div>

                            <!-- Card 3: Fixed Costs Continue -->
                            <div class="risk-card-modern risk-blue">
                                <div class="risk-card-header">
                                    <div class="icon-badge">💵</div>
                                    <h3>Fixed Costs Continue</h3>
                                </div>
                                <p>Rent, salary, electricity and operations cost continue even when sales are slow.</p>
                                <ul class="risk-check-list">
                                    <li>📉 Monthly pressure</li>
                                    <li>📉 Slow pipeline</li>
                                    <li>📉 Missed growth opportunities</li>
                                </ul>
                            </div>

                            <!-- Card 4: No Follow-Up System -->
                            <div class="risk-card-modern risk-purple">
                                <div class="risk-card-header">
                                    <div class="icon-badge">🔄</div>
                                    <h3>No Follow-Up System</h3>
                                </div>
                                <p>Interested customers go cold when there is no structured response process.</p>
                                <ul class="risk-check-list">
                                    <li>⏳ Lead leakage</li>
                                    <li>⏳ Missed calls</li>
                                    <li>⏳ Lower closing ratio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section system-section-bg">
                <div class="container">
                    <div class="section-head" style="text-align:center; position: relative; z-index: 2;">
                        <span class="badge">What GrowBoostly Builds</span>
                        <h2 class="system-main-title">
                            A Complete Growth Operating System <br>
                            for <span class="text-primary-custom">Modern Businesses</span>
                        </h2>
                        <p>We connect your website, search visibility, ads, content, automation and follow-up into one practical growth system.</p>
                    </div>

                    <div class="system-grid-container">


                        <div class="system-cards-row">
                            <!-- Card 1 -->
                            <div class="system-card-modern-v2 theme-green">
                                <span class="system-number-badge">01</span>
                                <div class="system-card-media-v2">
                                    <div class="mock-device-wrapper">
                                        <div class="mock-desktop">
                                            <div class="screen-header">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                            <div class="screen-content"></div>
                                        </div>
                                        <div class="mock-phone">
                                            <div class="phone-screen"></div>
                                        </div>
                                        <div class="shield-badge left-shield">🛡️</div>
                                        <div class="shield-badge right-shield">🛡️</div>
                                    </div>
                                </div>
                                <div class="system-card-body">
                                    <h3>Professional Digital Presence</h3>
                                    <p>Website, Google profile, social media and reviews work together to build trust and authority.</p>
                                    <div class="system-action-circle">→</div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="system-card-modern-v2 theme-orange">
                                <span class="system-number-badge">02</span>
                                <div class="system-card-media-v2">
                                    <div class="mock-target-wrapper">
                                        <div class="target-board">
                                            <div class="ring outer">
                                                <div class="ring middle">
                                                    <div class="ring inner"></div>
                                                </div>
                                            </div>
                                            <div class="dart">🎯</div>
                                        </div>
                                        <div class="leads-list">
                                            <div class="lead-item"><span class="avatar">👤</span><span class="bar"></span></div>
                                            <div class="lead-item"><span class="avatar">👤</span><span class="bar"></span></div>
                                            <div class="lead-item"><span class="avatar">👤</span><span class="bar"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="system-card-body">
                                    <h3>Lead Generation Engine</h3>
                                    <p>Landing pages, targeted campaigns, funnels and forms convert interest into enquiries.</p>
                                    <div class="system-action-circle">→</div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="system-card-modern-v2 theme-blue">
                                <span class="system-number-badge">03</span>
                                <div class="system-card-media-v2">
                                    <div class="mock-visibility-wrapper">
                                        <div class="search-bar-mock">
                                            <span class="search-icon">🔍</span>
                                            <span class="search-text">Google</span>
                                        </div>
                                        <div class="growth-charts">
                                            <div class="bar-chart b1"></div>
                                            <div class="bar-chart b2"></div>
                                            <div class="bar-chart b3"></div>
                                        </div>
                                        <div class="platform-icons">
                                            <span class="icon-brand yt">▶</span>
                                            <span class="icon-brand g">G</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="system-card-body">
                                    <h3>Visibility &amp; Demand</h3>
                                    <p>SEO, AI SEO, content, local/voice search and review systems bring more discovery.</p>
                                    <div class="system-action-circle">→</div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="system-card-modern-v2 theme-purple">
                                <span class="system-number-badge">04</span>
                                <div class="system-card-media-v2">
                                    <div class="mock-automation-wrapper">
                                        <div class="robot-face">🤖</div>
                                        <div class="floating-icons">
                                            <span class="float-icon wa">💬</span>
                                            <span class="float-icon user">👤</span>
                                            <span class="float-icon email">📧</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="system-card-body">
                                    <h3>Retention &amp; Automation</h3>
                                    <p>CRM integration, lead nurturing, automated follow-ups and WhatsApp-driven closing increase closing.</p>
                                    <div class="system-action-circle">→</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="section pricing-categories-section" id="growth-plans">
                <div class="container">
                    <div class="section-head text-center" style="text-align: center; margin-bottom: 48px;">
                        <span class="badge">GrowBoostly Growth Plans</span>
                        <h2>Choose a Service Category</h2>
                        <p>Select a category below to explore transparent pricing, tailored plans, specific deliverables, and onboarding guidelines.</p>
                    </div>

                    <div class="pricing-categories-grid">
                        
                        <!-- Card 1: Website & Development -->
                        <div class="pricing-category-card card-theme-web">
                            <div>
                                <div class="card-icon">💻</div>
                                <h3>Website & Development</h3>
                                <p>Choose a website plan based on your business stage — basic online presence, landing pages, corporate redesigns, eCommerce stores, maintenance, or custom database portals.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/website-development-pricing.php" class="btn-card-primary">View Web Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20website%20pricing." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 2: SEO & Growth -->
                        <div class="pricing-category-card card-theme-seo">
                            <div>
                                <div class="card-icon">📈</div>
                                <h3>SEO & Growth</h3>
                                <p>Dominate search engine results, drive organic traffic, improve local maps rankings, optimize content with AI, and secure long-term digital growth.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/seo-growth-pricing.php" class="btn-card-primary">View SEO Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20SEO%20and%20Growth%20plans." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 3: Paid Ads -->
                        <div class="pricing-category-card card-theme-ads">
                            <div>
                                <div class="card-icon">📢</div>
                                <h3>Paid Ads</h3>
                                <p>Target active buyers, scale lead generation, run high-converting search/social campaigns, and maximize your advertising ROI on Google and Meta.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/paid-ads-pricing.php" class="btn-card-primary">View Ads Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20Paid%20Ads%20campaigns." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 4: Social Media Marketing -->
                        <div class="pricing-category-card card-theme-social">
                            <div>
                                <div class="card-icon">📱</div>
                                <h3>Social Media</h3>
                                <p>Build consistent brand presence, publish engaging creatives, edit high-performing Reels/shorts, and grow your audience across social channels.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/social-media-marketing-pricing.php" class="btn-card-primary">View Social Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20Social%20Media%20marketing." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 5: Branding -->
                        <div class="pricing-category-card card-theme-branding">
                            <div>
                                <div class="card-icon">🎨</div>
                                <h3>Branding</h3>
                                <p>Design a memorable visual identity, construct professional brand guidelines, align strategy, design packaging, and position your brand to win.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/branding-pricing.php" class="btn-card-primary">View Branding Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20branding%20and%20identity%20design." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 6: Influencer Marketing -->
                        <div class="pricing-category-card card-theme-influencer">
                            <div>
                                <div class="card-icon">🤝</div>
                                <h3>Influencer Marketing</h3>
                                <p>Partner with authentic content creators, execute targeted YouTube/Instagram campaigns, and track real influencer delivery and ROI.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/influencer-marketing-pricing.php" class="btn-card-primary">View Influencer Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20influencer%20marketing%20campaigns." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 7: App Development -->
                        <div class="pricing-category-card card-theme-app">
                            <div>
                                <div class="card-icon">📲</div>
                                <h3>App Development</h3>
                                <p>Launch custom native Android/iOS mobile applications, cross-platform apps, responsive UI/UX prototypes, and administrative backends.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/app-development-pricing.php" class="btn-card-primary">View Mobile App Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20a%20mobile%20app%20development%20project." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 8: Automation & CRM -->
                        <div class="pricing-category-card card-theme-automation">
                            <div>
                                <div class="card-icon">⚙️</div>
                                <h3>Automation & CRM</h3>
                                <p>Build custom CRM dashboards, set up intelligent WhatsApp chatbots, connect marketing funnels, and automate business operations.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/automation-crm-pricing.php" class="btn-card-primary">View Automation Plans</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20CRM%20and%20business%20automation." target="_blank" class="btn-card-outline">Get Custom Quote</a>
                            </div>
                        </div>

                        <!-- Card 9: Hire Developers -->
                        <div class="pricing-category-card card-theme-dev">
                            <div>
                                <div class="card-icon">👨‍💻</div>
                                <h3>Hire Developers</h3>
                                <p>Scale your tech team instantly with remote web, mobile, frontend, backend, WordPress, React, Node.js, and fintech software developers.</p>
                            </div>
                            <div class="card-footer">
                                <a href="pricing/hire-developers-pricing.php" class="btn-card-primary">View Dev Rates</a>
                                <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20hiring%20remote%20developers." target="_blank" class="btn-card-outline">Discuss Talent Needs</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

<section class="section important-notes-premium">
  <div class="wrap">
    <div class="notes-layout">
      <div class="notes-left">
        <div class="eyebrow dark">Important Notes</div>
        <h2>Before you choose a plan</h2>
        <p>Pricing ko transparent rakhne ke liye ye section customer ko clearly batata hai ki kya starting price hai, kya separate hai, aur kin services me custom quote lagega.</p>
        <div class="notes-proof">
          <div><b>Starting</b><span>Simple plans</span></div>
          <div><b>Separate</b><span>Ad/influencer budget</span></div>
          <div><b>Custom</b><span>Complex projects</span></div>
        </div>
      </div>
      <div class="notes-right">
        <div class="note-step-card"><span>01</span><div><h3>Are these final prices?</h3><p>No. These are starting prices. Final quotation depends on scope, pages, features, design level, integrations and timeline.</p></div></div>
        <div class="note-step-card"><span>02</span><div><h3>Is ad budget included?</h3><p>No. Google Ads, Meta Ads and influencer/creator fees are separate and paid by the client.</p></div></div>
        <div class="note-step-card"><span>03</span><div><h3>Which services need custom quote?</h3><p>Apps, fintech software, CRM, automation, dashboards, custom development and dedicated teams usually need custom quote.</p></div></div>
        <div class="note-step-card"><span>04</span><div><h3>Can I start with a small plan?</h3><p>Yes. You can start with basic setup, landing page, task-based developer support or small monthly plan.</p></div></div>
      </div>
    </div>
  </div>
</section>

            <!-- FAQ Section -->
            <section class="section" id="faq" style="background:#ffffff">
                <div class="container">
                    <div class="section-head style-center" style="text-align:center; margin-bottom:48px;">
                        <span class="badge">FAQ</span>
                        <h2>Common Questions Before Starting</h2>
                        <p>Clear answers help clients understand the scope, investment and next steps before contacting GrowBoostly.</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-11">
                            <div class="accordion" id="pricingFaqAccordion">
                                
                                <!-- Question 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true">
                                            Why do you show regular and launch offer investment?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            Regular investment shows the full professional value. Launch offer helps early clients start at a more accessible investment while scope remains clear.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                                            Will this guarantee sales or SEO ranking?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            No ethical agency can guarantee fixed ranking or sales. We build the system, structure, tracking and optimization needed to improve growth potential.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
                                            Is ad budget included in ads plans?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            No. Ad budget is paid directly by the client to Meta, Google or other platforms. Our fee is for strategy, setup, management and optimization.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
                                            Can I start small and upgrade later?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. Many clients start with a website or local SEO plan and later add paid ads, automation, content, CRM or a full growth system.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5">
                                            Do you provide content writing?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse5" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            Basic content placement is included where mentioned. Professional copywriting, blogs and long-form content are available as add-ons.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6">
                                            How do you decide final pricing?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse6" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            Final pricing depends on pages, features, content, automation, campaign scope, integrations, app modules, design complexity and business goals.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 7 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7">
                                            Are influencer fees included?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse7" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            No. Influencer fees are separate. GrowBoostly can support strategy, shortlisting, coordination, campaign brief and tracking.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 8 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqH8">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8">
                                            Can you manage everything for me monthly?
                                        </button>
                                    </h2>
                                    <div id="faqCollapse8" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. Monthly growth retainers can include SEO, social media, ads, content, tracking, reporting and optimization depending on the selected plan.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FINAL CTA -->
            <section class="pricing-final-cta">
                <div class="container">
                    <h2>Ready to Build a <span class="cta-green">Digital Growth System</span> That Scales Your Revenue?</h2>
                    <p>Potential customers are searching, evaluating, and buying from your competitors right now. GrowBoostly will help you design, launch, and manage the complete digital sales system your business deserves. Whether you need a high-performance custom website, first-page local SEO search rankings, automated Meta &amp; Google ad campaigns, or integrated lead management, we build it all under clear setup plans. Talk with our expert growth consulting team today for a completely free, zero-obligation custom proposal.</p>
                    <div class="cta-phone">📞 Call / WhatsApp: <a href="tel:+919919020887">+91-9919020887</a></div>
                    <div class="pricing-cta-actions">
                        <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20a%20free%20growth%20consultation%20for%20my%20business." target="_blank" class="pricing-cta-btn">Get Free Consultation</a>
                        <a href="mailto:GrowBoostly@gmail.com?subject=GrowBoostly%20Growth%20Plan%20Inquiry" class="pricing-cta-btn ghost">Send Email Inquiry</a>
                    </div>
                    <div class="pricing-final-badge">
                        🌐 Custom Websites · 🔍 SEO Systems · 📢 Performance Ads · ⚙️ CRM &amp; Lead Automation · 🎨 Branding · 📱 Mobile Apps
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
