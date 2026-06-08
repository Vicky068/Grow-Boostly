<?php
$last_updated = 'May 23, 2026';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Privacy Policy | Grow Boostly</title>
    <meta name="description" content="Read how Grow Boostly collects, uses, stores, and protects your personal information when you use our website and marketing services.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://growboostly.com/privacy-policy.php">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">
    <style>
        :root {
            --pp-green: #10b981;
            --pp-blue: #3b82f6;
            --pp-indigo: #6366f1;
            --pp-dark: #0f172a;
            --pp-muted: #64748b;
            --pp-border: rgba(148, 163, 184, 0.12);
            --pp-glass-bg: rgba(255, 255, 255, 0.7);
            --pp-glass-border: rgba(255, 255, 255, 0.4);
            --pp-radius-md: 18px;
            --pp-radius-lg: 24px;
            --pp-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.05);
            --pp-shadow-hover: 0 20px 40px -15px rgba(15, 23, 42, 0.1);
        }
        body.pp-page { background: #fff; color: #334155; }
        .pp-hero {
            padding: 160px 0 80px;
            background: radial-gradient(circle at 10% 20%, rgba(239, 246, 255, 0.6) 0%, rgba(240, 253, 244, 0.4) 45%, #ffffff 90%);
            position: relative;
            overflow: hidden;
        }
        .pp-hero-content {
            text-align: left;
        }
        /* Custom background glows */
        .pp-hero::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -10%;
            width: 40%;
            height: 60%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: 1;
            pointer-events: none;
        }
        .pp-hero .container {
            position: relative;
            z-index: 2;
        }
        .pp-hero .breadcrumb-list {
            display: flex; align-items: center; justify-content: flex-start; gap: 8px;
            list-style: none; padding: 0; margin: 0 0 18px; font-size: 14px; color: var(--pp-muted);
        }
        .pp-hero .breadcrumb-list a { color: var(--pp-dark); text-decoration: none; font-weight: 500; }
        .pp-hero .breadcrumb-list a:hover { color: var(--pp-blue); }
        .pp-hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
        }
        .pp-hero-image-wrapper {
            position: relative;
            background: var(--pp-glass-bg);
            border: 1px solid var(--pp-glass-border);
            border-radius: var(--pp-radius-lg);
            padding: 16px;
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            animation: pp-float 6s ease-in-out infinite;
            max-width: 82%;
        }
        .pp-hero-image-wrapper img {
            border-radius: calc(var(--pp-radius-lg) - 4px);
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .pp-hero-image-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.15) 0%, rgba(59, 130, 246, 0.15) 100%);
            filter: blur(40px);
            border-radius: 50%;
            z-index: -1;
            pointer-events: none;
        }
        @keyframes pp-float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .pp-hero h1 {
            font-size: clamp(36px, 5vw, 52px);
            font-weight: 800;
            color: var(--pp-dark);
            margin-bottom: 16px;
            letter-spacing: -1px;
            line-height: 1.15;
        }
        .pp-hero p {
            font-size: 18px;
            color: var(--pp-muted);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .pp-updated {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 20px;
            font-size: 13px;
            font-weight: 700;
            color: #047857;
            background: rgba(16, 185, 129, 0.08);
            border: 1px solid rgba(16, 185, 129, 0.15);
            padding: 6px 16px;
            border-radius: 999px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .pp-updated::before {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            background-color: var(--pp-green);
            border-radius: 50%;
            animation: pp-pulse-dot 1.5s infinite;
        }
        @keyframes pp-pulse-dot {
            0% { transform: scale(0.9); opacity: 0.6; }
            50% { transform: scale(1.3); opacity: 1; }
            100% { transform: scale(0.9); opacity: 0.6; }
        }
        .pp-hero-features {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 28px;
            max-width: 480px;
        }
        .pp-hero-feature {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .pp-hf-icon {
            font-size: 20px;
            line-height: 1;
            padding: 8px;
            background: rgba(99, 102, 241, 0.08);
            border-radius: 8px;
            color: var(--pp-indigo);
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .pp-hf-text {
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        .pp-hf-text strong {
            font-size: 14.5px;
            font-weight: 700;
            color: var(--pp-dark);
            line-height: 1.3;
        }
        .pp-hf-text span {
            font-size: 13px;
            color: var(--pp-muted);
            line-height: 1.4;
            margin-top: 2px;
        }
        .pp-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 50px;
            padding: 60px 0 100px;
            align-items: start;
        }
        .pp-sidebar {
            position: sticky;
            top: 110px;
            background: var(--pp-glass-bg);
            border: 1px solid var(--pp-border);
            border-radius: var(--pp-radius-md);
            padding: 24px 20px;
            box-shadow: var(--pp-shadow);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        .pp-sidebar h2 {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--pp-dark);
            margin: 0 0 16px;
            font-weight: 800;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--pp-border);
        }
        .pp-sidebar nav {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        .pp-sidebar nav a {
            display: flex;
            align-items: center;
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #475569;
            text-decoration: none;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
        }
        .pp-sidebar nav a:hover {
            background: rgba(99, 102, 241, 0.04);
            color: var(--pp-indigo);
            padding-left: 18px;
        }
        .pp-sidebar nav a.active {
            background: rgba(99, 102, 241, 0.08);
            color: var(--pp-indigo);
            padding-left: 18px;
        }
        .pp-sidebar nav a.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 20%;
            height: 60%;
            width: 3px;
            background: var(--pp-indigo);
            border-radius: 99px;
        }
        .pp-content { max-width: 800px; }
        .pp-content section {
            margin-bottom: 56px;
            scroll-margin-top: 130px;
            padding-bottom: 24px;
            border-bottom: 1px dashed var(--pp-border);
        }
        .pp-content section:last-of-type {
            border-bottom: none;
            margin-bottom: 40px;
        }
        .pp-content h2 {
            font-size: 24px;
            font-weight: 800;
            color: var(--pp-dark);
            margin: 0 0 16px;
            letter-spacing: -0.5px;
        }
        .pp-content p {
            font-size: 15.5px;
            line-height: 1.8;
            color: #475569;
            margin: 0 0 16px;
        }
        .pp-content ul {
            margin: 0 0 20px;
            padding-left: 0;
            list-style: none;
        }
        .pp-content li {
            position: relative;
            padding-left: 26px;
            margin-bottom: 12px;
            font-size: 15.5px;
            line-height: 1.8;
            color: #475569;
        }
        .pp-content li::before {
            content: "\2713"; /* Unicode checkmark */
            position: absolute;
            left: 4px;
            top: 0px;
            color: var(--pp-green);
            font-size: 16px;
            font-weight: bold;
        }
        .pp-content a {
            color: var(--pp-indigo);
            font-weight: 700;
            text-decoration: none;
            border-bottom: 1.5px solid rgba(99, 102, 241, 0.2);
            transition: all 0.2s;
        }
        .pp-content a:hover {
            color: var(--pp-blue);
            border-bottom-color: var(--pp-blue);
        }
        .pp-contact-box {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            color: #fff;
            border-radius: var(--pp-radius-lg);
            padding: 44px 40px;
            margin-top: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px -10px rgba(15, 23, 42, 0.15);
        }
        .pp-contact-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.12) 0%, rgba(255, 255, 255, 0) 60%);
            z-index: 1;
            pointer-events: none;
        }
        .pp-contact-box > * {
            position: relative;
            z-index: 2;
        }
        .pp-contact-box h2 {
            color: #fff;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }
        .pp-contact-box p {
            color: #cbd5e1;
            font-size: 16px;
            margin-bottom: 24px;
            line-height: 1.6;
            max-width: 520px;
        }
        .pp-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 28px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            background: linear-gradient(135deg, var(--pp-green), var(--pp-blue));
            color: #fff;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 8px 20px rgba(37,99,235,0.25);
        }
        .pp-btn:hover {
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(37,99,235,0.4);
        }
        @media (max-width: 991px) {
            .pp-hero {
                padding: 130px 20px 60px;
                text-align: center;
            }
            .pp-hero-content {
                text-align: center;
                margin-bottom: 40px;
            }
            .pp-hero .breadcrumb-list {
                justify-content: center;
            }
            .pp-hero-features {
                margin: 28px auto 0;
            }
            .pp-layout { grid-template-columns: 1fr; gap: 36px; padding: 40px 0 80px; }
            .pp-sidebar { position: static; max-width: 100%; }
            .pp-sidebar nav {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
                gap: 4px;
            }
            .pp-sidebar nav a {
                padding: 8px 10px;
                font-size: 13.5px;
            }
            .pp-sidebar nav a.active::before {
                display: none;
            }
        }
        @media (max-width: 575px) {
            .pp-sidebar nav {
                grid-template-columns: 1fr 1fr;
            }
            .pp-contact-box {
                padding: 32px 24px;
            }
            .pp-contact-box h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body class="digital-agency pp-page">

<?php include 'header.php'; ?>

<section class="pp-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pp-hero-content">
                    <span class="pp-updated">Compliance &amp; Security</span>
                    <h1>Privacy Policy</h1>
                    <p>How Grow Boostly collects, manages, and safeguards your personal data.</p>
                    <div style="font-size: 13.5px; color: var(--pp-muted); font-weight: 600; margin-top: 16px;">
                        Last updated: <?php echo htmlspecialchars($last_updated, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                    
                    <div class="pp-hero-features">
                        <div class="pp-hero-feature">
                            <span class="pp-hf-icon">🛡️</span>
                            <div class="pp-hf-text">
                                <strong>Data Security First</strong>
                                <span>SSL encryption, secure APIs, and hardened server databases.</span>
                            </div>
                        </div>
                        <div class="pp-hero-feature">
                            <span class="pp-hf-icon">👁️</span>
                            <div class="pp-hf-text">
                                <strong>100% Transparency</strong>
                                <span>No hidden data brokers. We explicitly explain how cookies & trackings run.</span>
                            </div>
                        </div>
                        <div class="pp-hero-feature">
                            <span class="pp-hf-icon">⚖️</span>
                            <div class="pp-hf-text">
                                <strong>Your Privacy Controls</strong>
                                <span>Access, export, modify, or erase your information at any time.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="pp-hero-visual">
                    <div class="pp-hero-image-glow"></div>
                    <div class="pp-hero-image-wrapper">
                        <img src="assets/img/privacy_hero_security_shield.png" alt="Grow Boostly Data Privacy and Compliance Security Shield" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="pp-layout">
        <aside class="pp-sidebar">
            <h2>On this page</h2>
            <nav aria-label="Privacy policy sections">
                <a href="#introduction">Introduction</a>
                <a href="#who-we-are">Who we are</a>
                <a href="#information-we-collect">Information we collect</a>
                <a href="#how-we-use">How we use information</a>
                <a href="#cookies">Cookies &amp; analytics</a>
                <a href="#sharing">Sharing with third parties</a>
                <a href="#retention">Data retention</a>
                <a href="#security">Security</a>
                <a href="#your-rights">Your rights</a>
                <a href="#international">International transfers</a>
                <a href="#children">Children's privacy</a>
                <a href="#changes">Policy changes</a>
                <a href="#contact">Contact us</a>
            </nav>
        </aside>

        <article class="pp-content">
            <section id="introduction">
                <h2>1. Introduction</h2>
                <p>Grow Boostly ("we", "us", or "our") respects your privacy and is committed to protecting personal information you share with us. This Privacy Policy explains what data we collect, why we collect it, how we use it, and the choices you have when you visit <a href="https://growboostly.com/">growboostly.com</a>, contact us, subscribe to communications, or use our digital marketing, lead generation, branding, and technology services.</p>
                <p>By using our website or engaging our services, you agree to the practices described in this policy. If you do not agree, please do not use our website or submit personal information to us.</p>
            </section>

            <section id="who-we-are">
                <h2>2. Who we are</h2>
                <p>Grow Boostly is a performance marketing and digital growth company providing lead generation, paid media, SEO, content, influencer marketing, web and app development, branding, and related services to businesses globally.</p>
                <p>For privacy-related requests, contact us using the details in the <a href="#contact">Contact us</a> section below.</p>
            </section>

            <section id="information-we-collect">
                <h2>3. Information we collect</h2>
                <p>We may collect the following types of information:</p>
                <ul>
                    <li><strong>Information you provide directly</strong> — name, email address, phone number, company name, job title, country, message content, and any other details you submit through contact forms, consultation requests, newsletters, or service enquiries.</li>
                    <li><strong>Client and project information</strong> — business requirements, campaign data, access credentials (where necessary for service delivery), billing details, and communication records related to projects you engage us for.</li>
                    <li><strong>Automatically collected information</strong> — IP address, browser type, device information, pages visited, referring URLs, date and time of visits, and similar technical data collected through cookies and analytics tools.</li>
                    <li><strong>Marketing and advertising data</strong> — when we run campaigns on your behalf or for our own promotion, we may process audience, conversion, and engagement data in accordance with platform policies and your instructions.</li>
                </ul>
            </section>

            <section id="how-we-use">
                <h2>4. How we use your information</h2>
                <p>We use personal information to:</p>
                <ul>
                    <li>Respond to enquiries and provide quotes, consultations, and customer support</li>
                    <li>Deliver, manage, and improve our marketing, development, and consulting services</li>
                    <li>Send service-related communications, proposals, reports, and invoices</li>
                    <li>Send newsletters and marketing updates where you have opted in (you may unsubscribe at any time)</li>
                    <li>Analyse website usage to improve content, UX, and conversion performance</li>
                    <li>Comply with legal obligations and protect our rights, clients, and users</li>
                    <li>Prevent fraud, abuse, and unauthorised access to our systems</li>
                </ul>
                <p>We process personal data only where we have a lawful basis, such as your consent, performance of a contract, legitimate business interests (balanced against your rights), or legal requirement.</p>
            </section>

            <section id="cookies">
                <h2>5. Cookies and analytics</h2>
                <p>Our website may use cookies and similar technologies to remember preferences, measure traffic, and understand how visitors interact with our pages. These may include analytics tools (such as Google Analytics) and advertising pixels when applicable.</p>
                <p>You can control cookies through your browser settings. Disabling certain cookies may affect site functionality. Where required by law, we will request consent before placing non-essential cookies.</p>
            </section>

            <section id="sharing">
                <h2>6. Sharing with third parties</h2>
                <p>We do not sell your personal information. We may share data with:</p>
                <ul>
                    <li><strong>Service providers</strong> — hosting, email, CRM, analytics, payment processors, and project tools that help us operate our business, under confidentiality obligations</li>
                    <li><strong>Advertising and marketing platforms</strong> — such as Google, Meta, LinkedIn, and similar partners when delivering campaigns, subject to their terms and your campaign setup</li>
                    <li><strong>Professional advisers</strong> — lawyers, accountants, or auditors where reasonably necessary</li>
                    <li><strong>Legal authorities</strong> — when required by law, court order, or to protect rights and safety</li>
                </ul>
                <p>We require third parties to handle data securely and only for specified purposes.</p>
            </section>

            <section id="retention">
                <h2>7. Data retention</h2>
                <p>We retain personal information only as long as needed for the purposes described in this policy, including to fulfil contracts, resolve disputes, meet legal requirements, and maintain business records. Retention periods vary depending on data type and relationship (e.g. active client, enquiry, or marketing subscriber).</p>
                <p>When data is no longer required, we delete or anonymise it using reasonable technical and organisational measures.</p>
            </section>

            <section id="security">
                <h2>8. Security</h2>
                <p>We implement appropriate technical and organisational safeguards to protect personal information against unauthorised access, alteration, disclosure, or destruction. No method of transmission over the internet is 100% secure; while we strive to protect your data, we cannot guarantee absolute security.</p>
            </section>

            <section id="your-rights">
                <h2>9. Your rights</h2>
                <p>Depending on your location, you may have rights to:</p>
                <ul>
                    <li>Access the personal information we hold about you</li>
                    <li>Request correction of inaccurate or incomplete data</li>
                    <li>Request deletion of your data, subject to legal exceptions</li>
                    <li>Object to or restrict certain processing activities</li>
                    <li>Withdraw consent where processing is consent-based</li>
                    <li>Request a portable copy of your data where applicable</li>
                    <li>Lodge a complaint with a data protection authority</li>
                </ul>
                <p>To exercise these rights, contact us at <a href="mailto:hi@growboostly.com">hi@growboostly.com</a>. We may need to verify your identity before responding.</p>
            </section>

            <section id="international">
                <h2>10. International transfers</h2>
                <p>Grow Boostly serves clients in India, the UAE, UK, USA, and other regions. Your information may be processed in countries other than where you reside. Where we transfer data internationally, we take steps to ensure appropriate safeguards are in place consistent with applicable law.</p>
            </section>

            <section id="children">
                <h2>11. Children's privacy</h2>
                <p>Our website and services are not directed at individuals under 18. We do not knowingly collect personal information from children. If you believe we have collected data from a minor, please contact us and we will take steps to delete it.</p>
            </section>

            <section id="changes">
                <h2>12. Changes to this policy</h2>
                <p>We may update this Privacy Policy from time to time. The "Last updated" date at the top of this page indicates when it was last revised. Material changes may be communicated via our website or email where appropriate. Continued use of our website after changes constitutes acceptance of the updated policy.</p>
            </section>

            <section id="contact">
                <h2>13. Contact us</h2>
                <p>If you have questions about this Privacy Policy or how we handle your data, please contact:</p>
                <ul>
                    <li><strong>Grow Boostly</strong></li>
                    <li>Email: <a href="mailto:hi@growboostly.com">hi@growboostly.com</a></li>
                    <li>Email: <a href="mailto:growboostly@gmail.com">growboostly@gmail.com</a></li>
                    <li>Website: <a href="contact.php">Contact form</a></li>
                </ul>
            </section>

            <div class="pp-contact-box">
                <h2>Questions about your data?</h2>
                <p>Our team will respond to privacy requests within a reasonable timeframe.</p>
                <a href="contact.php?ref=privacy-policy" class="pp-btn">Contact Grow Boostly</a>
            </div>
        </article>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var navLinks = document.querySelectorAll('.pp-sidebar nav a');
    var sections = document.querySelectorAll('.pp-content section');

    function selectSection() {
        var scrollPosition = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
        
        var buffer = 150; 
        
        var currentSectionId = '';
        sections.forEach(function (sec) {
            var top = sec.offsetTop;
            if (scrollPosition >= top - buffer) {
                currentSectionId = sec.getAttribute('id');
            }
        });
        
        if (currentSectionId) {
            navLinks.forEach(function (link) {
                var isCurrent = link.getAttribute('href') === '#' + currentSectionId;
                link.classList.toggle('active', isCurrent);
            });
        }
    }

    window.addEventListener('scroll', selectSection);
    selectSection(); // Initial call
});
</script>

</body>
</html>
