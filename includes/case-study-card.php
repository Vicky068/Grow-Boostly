<?php
/** @var array $study */
/** @var int $index */
$details_url = 'case-study-details.php?id=' . urlencode($study['id']);
$m1_val = htmlspecialchars(($study['metric1_prefix'] ?? '') . $study['metric1_value'], ENT_QUOTES, 'UTF-8');
$m2_val = htmlspecialchars(($study['metric2_prefix'] ?? '') . $study['metric2_value'], ENT_QUOTES, 'UTF-8');
?>
<article class="gb-case-card">
    <a href="<?php echo $details_url; ?>" class="gb-case-card-image">
        <img src="<?php echo htmlspecialchars($study['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($study['title'], ENT_QUOTES, 'UTF-8'); ?>">
        <span class="gb-case-card-tag"><?php echo htmlspecialchars($study['category'], ENT_QUOTES, 'UTF-8'); ?></span>
    </a>
    <div class="gb-case-card-body">
        <h3><a href="<?php echo $details_url; ?>"><?php echo htmlspecialchars($study['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3>
        <div class="gb-case-metrics">
            <div class="gb-case-metric">
                <small><?php echo htmlspecialchars($study['metric1_label'], ENT_QUOTES, 'UTF-8'); ?></small>
                <strong><?php echo $m1_val; ?><em><?php echo htmlspecialchars($study['metric1_suffix'], ENT_QUOTES, 'UTF-8'); ?></em></strong>
            </div>
            <div class="gb-case-metric">
                <small><?php echo htmlspecialchars($study['metric2_label'], ENT_QUOTES, 'UTF-8'); ?></small>
                <strong><?php echo $m2_val; ?><em><?php echo htmlspecialchars($study['metric2_suffix'], ENT_QUOTES, 'UTF-8'); ?></em></strong>
            </div>
        </div>
        <a href="<?php echo $details_url; ?>" class="gb-case-card-link">
            Read Case Study <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</article>
