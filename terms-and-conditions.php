<?php
$last_updated = 'May 26, 2026';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terms &amp; Conditions | Grow Boostly</title>
    <meta name="description" content="Read the Terms and Conditions for using Grow Boostly's website and digital marketing, lead generation, branding, and technology services.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://growboostly.com/terms-and-conditions.php">
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
    <?php
    preg_match('/<style>(.*?)<\/style>/s', file_get_contents(__DIR__ . '/privacy-policy.php'), $pp_style);
    $terms_page_css = <<<'CSS'

        .pp-hero-content .pp-hero p,
        .pp-hero-content > p { margin: 0; max-width: 600px; }
        .pp-hf-text a {
            color: var(--pp-indigo);
            font-weight: 700;
            text-decoration: none;
            border-bottom: 1px solid rgba(99, 102, 241, 0.25);
        }
        .pp-hf-text a:hover { color: var(--pp-blue); }
CSS;
    echo '<style>' . ($pp_style[1] ?? '') . $terms_page_css . "\n    </style>";
    ?>
</head>
<body class="digital-agency pp-page">

<?php include 'header.php'; ?>

<section class="pp-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pp-hero-content">
                    <span class="pp-updated">Legal Agreement</span>
                    <h1>Terms &amp; Conditions</h1>
                    <p>Rules and responsibilities for using our website and engaging Grow Boostly services.</p>
                    <div style="font-size: 13.5px; color: var(--pp-muted); font-weight: 600; margin-top: 16px;">
                        Last updated: <?php echo htmlspecialchars($last_updated, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                    <div class="pp-hero-features">
                        <div class="pp-hero-feature">
                            <span class="pp-hf-icon">📋</span>
                            <div class="pp-hf-text">
                                <strong>Clear engagements</strong>
                                <span>Scope, timelines, and deliverables defined in proposals or statements of work.</span>
                            </div>
                        </div>
                        <div class="pp-hero-feature">
                            <span class="pp-hf-icon">🤝</span>
                            <div class="pp-hf-text">
                                <strong>Fair use</strong>
                                <span>Website and materials are provided for lawful business purposes only.</span>
                            </div>
                        </div>
                        <div class="pp-hero-feature">
                            <span class="pp-hf-icon">🔒</span>
                            <div class="pp-hf-text">
                                <strong>Privacy aligned</strong>
                                <span>Data handling is governed by our <a href="privacy-policy.php">Privacy Policy</a>.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="pp-hero-visual">
                    <div class="pp-hero-image-glow"></div>
                    <div class="pp-hero-image-wrapper">
                        <img src="assets/img/terms_hero_document_premium.png" alt="Grow Boostly Terms and Conditions Document Agreement" class="img-fluid">
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
            <nav aria-label="Terms and conditions sections">
                <a href="#agreement">Agreement</a>
                <a href="#services">Our services</a>
                <a href="#website-use">Website use</a>
                <a href="#client-obligations">Client obligations</a>
                <a href="#fees">Fees &amp; payment</a>
                <a href="#ip">Intellectual property</a>
                <a href="#confidentiality">Confidentiality</a>
                <a href="#third-parties">Third-party platforms</a>
                <a href="#liability">Liability</a>
                <a href="#termination">Termination</a>
                <a href="#law">Governing law</a>
                <a href="#changes">Changes</a>
                <a href="#contact">Contact</a>
            </nav>
        </aside>

        <article class="pp-content">
            <section id="agreement">
                <h2>1. Agreement to these terms</h2>
                <p>These Terms &amp; Conditions ("Terms") govern your access to <a href="https://growboostly.com/">growboostly.com</a> and your use of services offered by Grow Boostly ("we", "us", or "our"). By visiting our website, submitting an enquiry, or entering into a service agreement with us, you agree to these Terms.</p>
                <p>If you do not agree, please do not use our website or services. Separate written agreements, proposals, or statements of work may apply to specific projects and will prevail where they conflict with these Terms on project-specific matters.</p>
            </section>

            <section id="services">
                <h2>2. Our services</h2>
                <p>Grow Boostly provides digital growth services including, but not limited to:</p>
                <ul>
                    <li>Lead generation and sales funnel development</li>
                    <li>Performance marketing (Google Ads, Meta, LinkedIn, and related channels)</li>
                    <li>SEO, content marketing, and email automation</li>
                    <li>Influencer marketing and campaign management</li>
                    <li>Web and mobile app development, UI/UX, and branding</li>
                    <li>Dedicated developer and consulting engagements</li>
                </ul>
                <p>Service scope, timelines, fees, and deliverables are defined in quotations, invoices, contracts, or project documentation agreed with you. We do not guarantee specific rankings, lead volumes, revenue, or ROI unless expressly stated in writing.</p>
            </section>

            <section id="website-use">
                <h2>3. Use of our website</h2>
                <p>You agree to use our website only for lawful purposes. You must not:</p>
                <ul>
                    <li>Attempt unauthorised access to our systems, accounts, or data</li>
                    <li>Introduce malware, spam, or harmful code</li>
                    <li>Copy, scrape, or redistribute site content without permission</li>
                    <li>Misrepresent your identity or affiliation with Grow Boostly</li>
                    <li>Use our content to compete unfairly or mislead third parties</li>
                </ul>
                <p>We may suspend or restrict access to the website for maintenance, security, or policy violations without prior notice.</p>
            </section>

            <section id="client-obligations">
                <h2>4. Client obligations</h2>
                <p>When you engage our services, you agree to:</p>
                <ul>
                    <li>Provide accurate business information and timely approvals</li>
                    <li>Supply assets, access, and feedback needed to deliver work (e.g. ad accounts, CMS, brand files)</li>
                    <li>Ensure you have rights to materials you provide for campaigns or development</li>
                    <li>Comply with applicable laws, advertising policies, and platform terms (Google, Meta, etc.)</li>
                    <li>Pay invoices according to agreed payment terms</li>
                </ul>
                <p>Delays caused by missing information, approvals, or third-party dependencies may affect timelines and are not our responsibility unless otherwise agreed.</p>
            </section>

            <section id="fees">
                <h2>5. Fees and payment</h2>
                <p>Fees are quoted in proposals, order forms, or invoices. Unless stated otherwise:</p>
                <ul>
                    <li>Ad spend, software subscriptions, and third-party costs are billed separately or reimbursed by the client</li>
                    <li>Taxes (including GST/VAT where applicable) are additional unless explicitly included</li>
                    <li>Late payments may pause work or incur interest as permitted by law</li>
                    <li>Deposits or advance payments for custom work may be non-refundable once work has commenced</li>
                </ul>
                <p>Refund terms for specific packages, if any, are described in our <a href="contact.php">contact</a> communications or separate refund policy when published.</p>
            </section>

            <section id="ip">
                <h2>6. Intellectual property</h2>
                <p>Unless agreed otherwise in writing:</p>
                <ul>
                    <li>We retain ownership of our methodologies, templates, tools, and pre-existing materials</li>
                    <li>Upon full payment, you receive rights to final deliverables created specifically for your project (e.g. designs, copy, code) as defined in the agreement</li>
                    <li>You grant us a licence to use your logos, content, and brand assets solely to perform services and showcase work in portfolios or case studies unless you opt out in writing</li>
                </ul>
                <p>You may not resell, sublicense, or claim authorship of our proprietary frameworks or internal tools.</p>
            </section>

            <section id="confidentiality">
                <h2>7. Confidentiality</h2>
                <p>Each party agrees to keep confidential non-public business, technical, and financial information received from the other, except where disclosure is required by law or already public through no fault of the receiving party.</p>
                <p>We handle personal data in accordance with our <a href="privacy-policy.php">Privacy Policy</a>.</p>
            </section>

            <section id="third-parties">
                <h2>8. Third-party platforms and tools</h2>
                <p>Our services often rely on third parties (advertising networks, analytics, hosting, CRM, payment gateways). Their terms and policies apply to your use of those platforms. We are not responsible for outages, policy changes, account suspensions, or actions taken by third parties beyond our reasonable control.</p>
            </section>

            <section id="liability">
                <h2>9. Limitation of liability</h2>
                <p>To the fullest extent permitted by law:</p>
                <ul>
                    <li>Our website and services are provided on an "as is" and "as available" basis</li>
                    <li>We are not liable for indirect, incidental, special, or consequential damages, including lost profits or data</li>
                    <li>Our total liability for any claim relating to a project is limited to the fees paid by you for that project in the three (3) months preceding the claim, unless a higher limit is set in a signed agreement</li>
                </ul>
                <p>Nothing in these Terms excludes liability that cannot be excluded under applicable law.</p>
            </section>

            <section id="termination">
                <h2>10. Termination</h2>
                <p>Either party may terminate an ongoing service engagement according to the notice period in the project agreement. We may terminate or suspend services immediately for non-payment, breach of these Terms, or unlawful use.</p>
                <p>Upon termination, you remain responsible for fees for work completed and non-cancellable third-party costs incurred on your behalf.</p>
            </section>

            <section id="law">
                <h2>11. Governing law and disputes</h2>
                <p>These Terms are governed by the laws of India, without regard to conflict-of-law principles. Courts in India shall have exclusive jurisdiction, unless mandatory local consumer protection laws in your country require otherwise.</p>
                <p>We encourage resolving disputes informally by contacting us first at <a href="mailto:hi@growboostly.com">hi@growboostly.com</a>.</p>
            </section>

            <section id="changes">
                <h2>12. Changes to these terms</h2>
                <p>We may update these Terms from time to time. The "Last updated" date above reflects the latest revision. Continued use of the website or services after changes constitutes acceptance of the updated Terms.</p>
            </section>

            <section id="contact">
                <h2>13. Contact us</h2>
                <p>For questions about these Terms, contact:</p>
                <ul>
                    <li><strong>Grow Boostly</strong></li>
                    <li>Email: <a href="mailto:hi@growboostly.com">hi@growboostly.com</a></li>
                    <li>Email: <a href="mailto:growboostly@gmail.com">growboostly@gmail.com</a></li>
                    <li>Website: <a href="contact.php?ref=terms">Contact form</a></li>
                </ul>
            </section>

            <div class="pp-contact-box">
                <h2>Questions about these terms?</h2>
                <p>Our team will respond to legal or commercial enquiries within a reasonable timeframe.</p>
                <a href="contact.php?ref=terms-conditions" class="pp-btn">Contact Grow Boostly</a>
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
            if (scrollPosition >= sec.offsetTop - buffer) {
                currentSectionId = sec.getAttribute('id');
            }
        });
        if (currentSectionId) {
            navLinks.forEach(function (link) {
                link.classList.toggle('active', link.getAttribute('href') === '#' + currentSectionId);
            });
        }
    }

    window.addEventListener('scroll', selectSection);
    selectSection();
});
</script>

</body>
</html>
