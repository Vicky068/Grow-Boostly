<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Case Studies | Grow Boostly</title>
    <meta name="description" content="Explore Grow Boostly case studies on B2B lead generation, SEO, Google Ads, branding, Meta ads and CRM automation — real growth results for businesses in India and globally.">
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">
    <?php include 'includes/case-study-styles.php'; ?>
</head>
<body class="gb-case-page">

    <?php include 'header.php'; ?>
<?php require_once 'includes/case-studies-data.php'; ?>

<section class="gb-case-hero">
    <div class="container position-relative">
        <span class="gb-case-eyebrow"><i class="bi bi-graph-up-arrow"></i> Client Success Stories</span>
        <h1>Real Growth Results <span>From Our Campaigns</span></h1>
        <p>See how Grow Boostly helps businesses generate qualified leads, improve conversions, scale paid media and build stronger brands with data-driven marketing systems.</p>
        <ul class="gb-case-breadcrumb">
                            <li><a href="index.php">Home</a></li>
            <li>Case Studies</li>
                        </ul>
                    </div>
</section>

<section class="gb-case-stats">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="gb-case-stat-card">
                    <strong>6+</strong>
                    <span>Industries served across lead gen, ads, SEO, branding & automation</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gb-case-stat-card">
                    <strong>3x</strong>
                    <span>Average lead growth after funnel, targeting & landing page improvements</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gb-case-stat-card">
                    <strong>ROI</strong>
                    <span>Performance-focused campaigns built for measurable business outcomes</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gb-case-section">
    <div class="container">
        <div class="gb-case-section-head">
            <h2>Featured Case Studies</h2>
            <p>Explore practical examples of how we help startups, service brands, eCommerce companies and B2B businesses grow with smarter marketing.</p>
        </div>
        <div class="gb-case-grid">
            <?php foreach ($growboostly_case_studies as $index => $study) { include 'includes/case-study-card.php'; } ?>
        </div>
    </div>
</section>

<section class="gb-case-cta">
    <div class="container">
        <h2>Want similar results for your business?</h2>
        <p>Grow Boostly builds custom lead generation, marketing and automation systems based on your industry, audience and revenue goals.</p>
        <div class="gb-case-cta-btns">
            <a href="contact.php" class="gb-case-btn-main">Book a Free Strategy Call</a>
            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20want%20to%20discuss%20a%20case%20study%20style%20growth%20plan." class="gb-case-btn-outline">WhatsApp Us</a>
        </div>
    </div>
</section>
     
    <?php include 'footer.php'; ?>
</body>
</html>
