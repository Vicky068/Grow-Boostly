<?php
require_once 'includes/service-details-data.php';

$id = isset($_GET['id']) ? trim($_GET['id']) : '';
$service = $id ? gb_get_service_detail($id) : null;

if (!$service) {
    $service = $growboostly_service_details[0];
    $service['_index'] = 0;
}

$index = $service['_index'];
$prev = $index > 0 ? $growboostly_service_details[$index - 1] : null;
$next = $index < count($growboostly_service_details) - 1 ? $growboostly_service_details[$index + 1] : null;
$details_url = fn($s) => 'service-details.php?id=' . urlencode($s['id']);

function gb_h($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
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
    <title><?php echo gb_h($service['title']); ?> | Grow Boostly Services</title>
    <meta name="description" content="<?php echo gb_h($service['overview']); ?>">
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">
    <?php include 'includes/case-study-styles.php'; ?>
</head>
<body class="gb-case-page">

<?php include 'header.php'; ?>

<section class="gb-case-detail-hero">
    <div class="container">
        <ul class="gb-case-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="services/index.php">Services</a></li>
            <li><?php echo gb_h($service['category']); ?></li>
        </ul>
        <span class="gb-case-detail-tag"><?php echo gb_h($service['category']); ?></span>
        <h1><?php echo gb_h($service['title']); ?></h1>
        <div class="gb-case-meta-row">
            <?php foreach ($service['tags'] as $tag): ?>
            <span class="gb-case-meta-pill"><i class="bi bi-check2-circle"></i> <?php echo gb_h($tag); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="gb-case-detail-wrap">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-8">
                <div class="gb-case-feature-img">
                    <img src="<?php echo gb_h($service['image']); ?>" alt="<?php echo gb_h($service['title']); ?>">
                </div>

                <div class="gb-case-content-block">
                    <h2>Service Overview</h2>
                    <p><?php echo gb_h($service['overview']); ?></p>
                </div>

                <div class="gb-case-content-block">
                    <h2>What's Included</h2>
                    <ul class="gb-case-list">
                        <?php foreach ($service['features'] as $feature): ?>
                        <li><?php echo gb_h($feature); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="gb-case-content-block">
                    <h2>How We Deliver</h2>
                    <ul class="gb-case-list">
                        <?php foreach ($service['process'] as $step): ?>
                        <li><strong><?php echo gb_h($step['label']); ?>:</strong> <?php echo gb_h($step['text']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="gb-case-content-block">
                    <h2>Why Choose Grow Boostly</h2>
                    <div class="gb-case-outcome-grid">
                        <?php foreach ($service['why_choose'] as $reason): ?>
                        <div class="gb-case-outcome-item"><?php echo gb_h($reason); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php if ($prev || $next): ?>
                <div class="gb-case-nav-row">
                    <?php if ($prev): ?>
                    <a href="<?php echo gb_h($details_url($prev)); ?>" class="gb-case-nav-card">
                        <small>Previous Service</small>
                        <span><?php echo gb_h($prev['title']); ?></span>
                    </a>
                    <?php else: ?><div></div><?php endif; ?>
                    <?php if ($next): ?>
                    <a href="<?php echo gb_h($details_url($next)); ?>" class="gb-case-nav-card next">
                        <small>Next Service</small>
                        <span><?php echo gb_h($next['title']); ?></span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-4">
                <aside class="gb-case-sidebar">
                    <div class="gb-case-sidebar-card">
                        <h3>Service Details</h3>
                        <ul class="gb-case-info-list">
                            <li><span>Category</span><strong><?php echo gb_h($service['category']); ?></strong></li>
                            <li><span>Ideal For</span><strong><?php echo gb_h($service['ideal_for']); ?></strong></li>
                            <li><span>Timeline</span><strong><?php echo gb_h($service['timeline']); ?></strong></li>
                        </ul>
                    </div>

                    <div class="gb-case-sidebar-card">
                        <h3>Performance Highlight</h3>
                        <p style="margin:0 0 4px; color:#64748b; font-size:14px; line-height:1.65;"><?php echo $service['sidebar_note']; ?></p>
                        <div class="gb-case-highlight-metrics">
                            <div class="gb-case-highlight-box">
                                <small><?php echo gb_h($service['sidebar_m1']); ?></small>
                                <strong><?php echo gb_h($service['sidebar_m1_val']); ?><em><?php echo gb_h($service['sidebar_m1_suffix']); ?></em></strong>
                            </div>
                            <div class="gb-case-highlight-box">
                                <small><?php echo gb_h($service['sidebar_m2']); ?></small>
                                <strong><?php echo gb_h($service['sidebar_m2_val']); ?><em><?php echo gb_h($service['sidebar_m2_suffix']); ?></em></strong>
                            </div>
                        </div>
                    </div>

                    <div class="gb-case-sidebar-card">
                        <h3>Get Started</h3>
                        <p style="margin:0 0 16px; color:#64748b; font-size:14px; line-height:1.65;">Book a free strategy call to discuss how <?php echo gb_h(strtolower($service['title'])); ?> can work for your business.</p>
                        <a href="contact.php" class="gb-case-btn-main w-100 mb-3" style="display:flex;">Book Strategy Call</a>
                        <a href="<?php echo gb_h($service['full_page']); ?>" class="gb-case-btn-outline w-100 mb-3" style="display:flex; color:#0f172a; background:#f8fafc; border-color:#e2e8f0;">View Full Service Page</a>
                        <a href="services/index.php" class="gb-case-btn-outline w-100" style="display:flex; color:#0f172a; background:#f8fafc; border-color:#e2e8f0;">Browse All Services</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="gb-case-cta">
    <div class="container">
        <h2>Ready to grow with <?php echo gb_h($service['title']); ?>?</h2>
        <p>Let Grow Boostly build a custom growth system — from lead generation and paid ads to automation and optimization.</p>
        <div class="gb-case-cta-btns">
            <a href="contact.php" class="gb-case-btn-main">Start Your Growth Plan</a>
            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%27m%20interested%20in%20<?php echo rawurlencode($service['title']); ?>." class="gb-case-btn-outline">WhatsApp Us</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
