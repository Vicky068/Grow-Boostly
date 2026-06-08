<?php
require_once 'includes/case-studies-data.php';

$id = isset($_GET['id']) ? trim($_GET['id']) : '';
$study = $id ? gb_get_case_study($id) : null;

if (!$study) {
    $study = $growboostly_case_studies[0];
    $study['_index'] = 0;
}

$index = $study['_index'];
$prev = $index > 0 ? $growboostly_case_studies[$index - 1] : null;
$next = $index < count($growboostly_case_studies) - 1 ? $growboostly_case_studies[$index + 1] : null;
$details_url = fn($s) => 'case-study-details.php?id=' . urlencode($s['id']);

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
    <title><?php echo gb_h($study['title']); ?> | Grow Boostly Case Study</title>
    <meta name="description" content="<?php echo gb_h($study['overview']); ?>">
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">
    <?php include 'includes/case-study-styles.php'; ?>
</head>
<body class="gb-case-page">

<?php include 'header.php'; ?>

<section class="gb-case-detail-hero">
    <div class="container">
        <ul class="gb-case-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="case-study.php">Case Studies</a></li>
            <li><?php echo gb_h($study['category']); ?></li>
        </ul>
        <span class="gb-case-detail-tag"><?php echo gb_h($study['category']); ?></span>
        <h1><?php echo gb_h($study['title']); ?></h1>
        <div class="gb-case-meta-row">
            <span class="gb-case-meta-pill"><i class="bi bi-building"></i> <?php echo gb_h($study['client']); ?></span>
            <span class="gb-case-meta-pill"><i class="bi bi-geo-alt"></i> <?php echo gb_h($study['location']); ?></span>
            <span class="gb-case-meta-pill"><i class="bi bi-calendar3"></i> <?php echo gb_h($study['date']); ?></span>
        </div>
    </div>
</section>

<section class="gb-case-detail-wrap">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-8">
                <div class="gb-case-feature-img">
                    <img src="<?php echo gb_h($study['image']); ?>" alt="<?php echo gb_h($study['title']); ?>">
                </div>

                <div class="gb-case-content-block">
                    <h2>Project Summary</h2>
                    <p><?php echo gb_h($study['overview']); ?></p>
                </div>

                <div class="gb-case-content-block">
                    <h2>Challenges</h2>
                    <ul class="gb-case-list">
                        <?php foreach ($study['challenges'] as $item): ?>
                        <li><strong><?php echo gb_h($item['label']); ?>:</strong> <?php echo gb_h($item['text']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="gb-case-content-block">
                    <h2>What Grow Boostly Delivered</h2>
                    <ul class="gb-case-list">
                        <li><strong>Strategy:</strong> Audience research, offer positioning and channel planning aligned to business goals.</li>
                        <li><strong>Execution:</strong> Campaign setup, creative direction, landing pages and conversion-focused implementation.</li>
                        <li><strong>Optimization:</strong> Ongoing tracking, reporting and performance improvements based on lead quality and ROI.</li>
                    </ul>
                </div>

                <div class="gb-case-content-block">
                    <h2>Results</h2>
                    <div class="gb-case-outcome-grid">
                        <?php foreach ($study['outcomes'] as $outcome): ?>
                        <div class="gb-case-outcome-item"><?php echo gb_h($outcome); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="gb-case-content-block">
                    <h2>Key Takeaways</h2>
                    <ul class="gb-case-list">
                        <?php foreach ($study['takeaways'] as $item): ?>
                        <li><strong><?php echo gb_h($item['label']); ?>:</strong> <?php echo gb_h($item['text']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php if ($prev || $next): ?>
                <div class="gb-case-nav-row">
                    <?php if ($prev): ?>
                    <a href="<?php echo gb_h($details_url($prev)); ?>" class="gb-case-nav-card">
                        <small>Previous Case Study</small>
                        <span><?php echo gb_h($prev['title']); ?></span>
                    </a>
                    <?php else: ?><div></div><?php endif; ?>
                    <?php if ($next): ?>
                    <a href="<?php echo gb_h($details_url($next)); ?>" class="gb-case-nav-card next">
                        <small>Next Case Study</small>
                        <span><?php echo gb_h($next['title']); ?></span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-4">
                <aside class="gb-case-sidebar">
                    <div class="gb-case-sidebar-card">
                        <h3>Project Details</h3>
                        <ul class="gb-case-info-list">
                            <li><span>Category</span><strong><?php echo gb_h($study['category']); ?></strong></li>
                            <li><span>Client</span><strong><?php echo gb_h($study['client']); ?></strong></li>
                            <li><span>Location</span><strong><?php echo gb_h($study['location']); ?></strong></li>
                            <li><span>Date</span><strong><?php echo gb_h($study['date']); ?></strong></li>
                        </ul>
                    </div>

                    <div class="gb-case-sidebar-card">
                        <h3>Performance Highlight</h3>
                        <p style="margin:0 0 4px; color:#64748b; font-size:14px; line-height:1.65;"><?php echo $study['note']; ?></p>
                        <div class="gb-case-highlight-metrics">
                            <div class="gb-case-highlight-box">
                                <small><?php echo gb_h($study['sidebar_m1']); ?></small>
                                <strong><?php echo gb_h($study['sidebar_m1_val']); ?><em><?php echo gb_h($study['metric1_suffix']); ?></em></strong>
                            </div>
                            <div class="gb-case-highlight-box">
                                <small><?php echo gb_h($study['sidebar_m2']); ?></small>
                                <strong><?php echo gb_h($study['sidebar_m2_val']); ?><em><?php echo gb_h($study['sidebar_m2_suffix'] ?? $study['metric2_suffix']); ?></em></strong>
                            </div>
                        </div>
                    </div>

                    <div class="gb-case-sidebar-card">
                        <h3>Get Similar Results</h3>
                        <p style="margin:0 0 16px; color:#64748b; font-size:14px; line-height:1.65;">Talk to Grow Boostly about a custom growth plan for your business.</p>
                        <a href="contact.php" class="gb-case-btn-main w-100 mb-3" style="display:flex;">Book Strategy Call</a>
                        <a href="case-study.php" class="gb-case-btn-outline w-100" style="display:flex; color:#0f172a; background:#f8fafc; border-color:#e2e8f0;">View All Case Studies</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="gb-case-cta">
    <div class="container">
        <h2>Ready to build your next success story?</h2>
        <p>Let Grow Boostly design a lead generation, marketing or automation system tailored to your business goals.</p>
        <div class="gb-case-cta-btns">
            <a href="contact.php" class="gb-case-btn-main">Start Your Growth Plan</a>
            <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20read%20your%20case%20study%20and%20want%20similar%20results." class="gb-case-btn-outline">WhatsApp Us</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
