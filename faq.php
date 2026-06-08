<?php
$faq_categories = [
    'about' => [
        'label' => 'About Grow Boostly',
        'icon' => '🚀',
        'items' => [
            [
                'q' => 'What is Grow Boostly?',
                'a' => 'Grow Boostly is a global performance marketing and digital growth partner. We help businesses generate qualified leads, improve conversions, and scale revenue through data-driven campaigns, funnels, SEO, paid media, automation, branding, and development.',
            ],
            [
                'q' => 'Which industries do you work with?',
                'a' => 'We build strategies for Healthcare &amp; Clinics, Real Estate &amp; Property, Education &amp; Coaching, eCommerce &amp; D2C Brands, Local Businesses, SaaS &amp; IT Companies, BPO &amp; Service Companies, and Finance &amp; Insurance — plus startups and enterprises in adjacent sectors.',
            ],
            [
                'q' => 'Do you work with clients outside India?',
                'a' => 'Yes. We serve clients across India, the UAE, UK, USA, and other international markets. Campaigns, reporting, and communication are structured for your timezone and target geography.',
            ],
            [
                'q' => 'How is Grow Boostly different from a typical agency?',
                'a' => 'We focus on measurable outcomes — leads, CPA, ROAS, and pipeline — not vanity metrics alone. Every engagement includes clear tracking, regular optimization, and reporting tied to business goals rather than generic deliverable lists.',
            ],
        ],
    ],
    'leadgen' => [
        'label' => 'Lead Generation',
        'icon' => '🎯',
        'items' => [
            [
                'q' => 'What is lead generation?',
                'a' => 'Lead generation is the process of attracting potential customers and capturing their interest through landing pages, ads, forms, outreach, and nurture flows — then qualifying them before they reach your sales team.',
            ],
            [
                'q' => 'Do you offer both B2B and B2C lead generation?',
                'a' => 'Yes. B2B programmes typically use LinkedIn, email outreach, webinars, and account-based targeting. B2C programmes lean on Meta, Google, influencers, and high-converting landing experiences for faster volume.',
            ],
            [
                'q' => 'How does Grow Boostly qualify leads?',
                'a' => 'We define ICP criteria with you — role, company size, location, budget signals, and intent — then filter through forms, chat, CRM rules, and manual QA so your team receives marketing- or sales-qualified leads.',
            ],
            [
                'q' => 'How soon can we expect leads?',
                'a' => 'Paid campaigns often produce initial leads within 1–2 weeks once tracking and creatives are live. Outbound and SEO-led programmes build over 4–12 weeks. Timelines depend on offer, competition, and budget.',
            ],
            [
                'q' => 'Which platforms do you use for lead generation?',
                'a' => 'Google Ads, Meta (Facebook &amp; Instagram), LinkedIn, YouTube, email automation, landing pages, and CRM integrations — selected based on where your buyers actually research and convert.',
            ],
        ],
    ],
    'marketing' => [
        'label' => 'Digital Marketing',
        'icon' => '📈',
        'items' => [
            [
                'q' => 'What digital marketing services do you offer?',
                'a' => 'SEO, Google &amp; Meta ads, LinkedIn ads, social media marketing, content marketing, email automation, CRO, retargeting, YouTube marketing, and performance tracking — as standalone services or integrated growth programmes.',
            ],
            [
                'q' => 'How long does SEO take compared to paid ads?',
                'a' => 'Paid ads can drive traffic and leads within days of launch. SEO and content authority typically show meaningful movement in 3–6 months, with compounding returns over 12+ months.',
            ],
            [
                'q' => 'Do you build custom marketing strategies?',
                'a' => 'Every client gets a tailored plan based on goals, industry, competition, and budget — including channel mix, messaging, funnel stages, and KPI targets before execution starts.',
            ],
            [
                'q' => 'How do you measure marketing ROI?',
                'a' => 'We track cost per lead, conversion rate, ROAS, pipeline value, and channel attribution using GA4, ad platforms, CRM data, and UTM discipline — with monthly reports and optimization recommendations.',
            ],
        ],
    ],
    'brandtech' => [
        'label' => 'Branding & Technology',
        'icon' => '💻',
        'items' => [
            [
                'q' => 'What branding services do you provide?',
                'a' => 'Logo design, brand identity systems, messaging, repositioning, and rebranding programmes that align visual identity with your growth and conversion goals.',
            ],
            [
                'q' => 'Do you design and develop websites?',
                'a' => 'Yes — custom, mobile-responsive, SEO-friendly websites and high-converting landing pages built for speed, clarity, and lead capture.',
            ],
            [
                'q' => 'Do you build mobile applications?',
                'a' => 'We develop Android and iOS applications with scalable architecture, intuitive UX, and performance optimization — including app store optimisation (ASO) where needed.',
            ],
            [
                'q' => 'Can you integrate marketing tools with our CRM?',
                'a' => 'We integrate HubSpot, Zoho, Salesforce, Pipedrive, and similar CRMs so leads, ad data, and nurture flows stay connected for sales visibility.',
            ],
        ],
    ],
    'influencer' => [
        'label' => 'Influencer Marketing',
        'icon' => '✨',
        'items' => [
            [
                'q' => 'What influencer marketing services do you offer?',
                'a' => 'Creator discovery, Instagram and YouTube influencer campaigns, creator collaborations, campaign management, and performance tracking with creator-wise ROI reporting.',
            ],
            [
                'q' => 'How do you choose the right creators?',
                'a' => 'We evaluate niche relevance, audience authenticity, engagement quality, content style, and brand fit — not follower count alone — aligned to your campaign objective.',
            ],
            [
                'q' => 'Can you track influencer campaign results?',
                'a' => 'Yes. We set up UTMs, promo codes, WhatsApp lead tracking, and dashboards so you see clicks, enquiries, and conversions per creator and per content piece.',
            ],
        ],
    ],
    'process' => [
        'label' => 'Pricing & Process',
        'icon' => '💬',
        'items' => [
            [
                'q' => 'How much do your services cost?',
                'a' => 'Pricing depends on scope, channels, and goals. We offer project-based, monthly retainer, and performance-aligned models. View <a href="pricing.php">growth plans</a> or request a custom quote.',
            ],
            [
                'q' => 'Do you offer a free consultation?',
                'a' => 'Yes. We start with a strategy call to understand your business, audience, and targets — then recommend the right mix of services and expected outcomes.',
            ],
            [
                'q' => 'Do you provide reports and analytics?',
                'a' => 'All ongoing programmes include scheduled reports covering spend, leads, conversions, creative performance, and next-step recommendations.',
            ],
            [
                'q' => 'How do I get started with Grow Boostly?',
                'a' => 'Fill out the <a href="contact.php?ref=faq-get-started">contact form</a>, book a free consultation, or message us on WhatsApp. We typically respond within one business day.',
            ],
        ],
    ],
];

$faq_schema = [];
foreach ($faq_categories as $cat) {
    foreach ($cat['items'] as $item) {
        $faq_schema[] = [
            '@type' => 'Question',
            'name' => strip_tags($item['q']),
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => strip_tags(str_replace(['<a href="pricing.php">growth plans</a>', '<a href="contact.php?ref=faq-get-started">contact form</a>'], ['growth plans', 'contact form'], $item['a'])),
            ],
        ];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQs | Lead Generation, Digital Marketing & Growth – Grow Boostly</title>
    <meta name="description" content="Answers to common questions about Grow Boostly — lead generation, performance marketing, SEO, paid ads, branding, web development, influencer campaigns, pricing, and getting started.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://growboostly.com/faq.php">
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
    <script type="application/ld+json"><?php echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $faq_schema,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
    <style>
        :root {
            --faq-blue: #2563eb;
            --faq-green: #16c784;
            --faq-dark: #0f172a;
            --faq-muted: #64748b;
            --faq-border: #e2e8f0;
            --faq-soft: #f8fafc;
            --faq-grad: linear-gradient(135deg, #f0fdf4 0%, #eff6ff 100%);
        }
        body.faq-page { background: #fff; color: #334155; }
        .faq-hero {
            padding: 130px 20px 90px;
            background: var(--faq-grad);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .faq-hero::after {
            content: '';
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(22,199,132,0.12) 0%, transparent 70%);
            top: -120px;
            right: -80px;
            pointer-events: none;
        }
        .faq-hero .breadcrumb-list {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
            font-size: 14px;
            font-weight: 500;
            color: var(--faq-muted);
        }
        .faq-hero .breadcrumb-list a { color: var(--faq-dark); text-decoration: none; }
        .faq-hero .breadcrumb-list a:hover { color: var(--faq-blue); }
        .faq-hero .faq-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(22,199,132,0.1);
            color: #0b9f68;
            border: 1px solid rgba(22,199,132,0.25);
            padding: 6px 16px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 18px;
        }
        .faq-hero h1 {
            font-size: clamp(34px, 5vw, 52px);
            font-weight: 800;
            color: var(--faq-dark);
            margin-bottom: 16px;
            letter-spacing: -0.5px;
            line-height: 1.15;
        }
        .faq-hero p {
            font-size: 18px;
            color: var(--faq-muted);
            max-width: 640px;
            margin: 0 auto 28px;
            line-height: 1.7;
        }
        .faq-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }
        .faq-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 26px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .faq-btn-primary {
            background: linear-gradient(135deg, var(--faq-green), var(--faq-blue));
            color: #fff;
            box-shadow: 0 8px 24px rgba(37,99,235,0.2);
        }
        .faq-btn-primary:hover { color: #fff; transform: translateY(-2px); }
        .faq-btn-outline {
            background: #fff;
            color: var(--faq-dark);
            border: 1px solid var(--faq-border);
        }
        .faq-btn-outline:hover { border-color: var(--faq-blue); color: var(--faq-blue); }
        .faq-quick-strip {
            margin-top: -48px;
            position: relative;
            z-index: 5;
            padding-bottom: 20px;
        }
        .faq-quick-card {
            background: #fff;
            border: 1px solid var(--faq-border);
            border-radius: 16px;
            padding: 22px 20px;
            height: 100%;
            text-align: center;
            box-shadow: 0 12px 32px rgba(15,23,42,0.06);
            transition: transform 0.25s, border-color 0.25s;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .faq-quick-card:hover {
            transform: translateY(-4px);
            border-color: rgba(37,99,235,0.35);
            color: inherit;
        }
        .faq-quick-card .qc-icon { font-size: 28px; margin-bottom: 10px; }
        .faq-quick-card h3 { font-size: 16px; font-weight: 700; color: var(--faq-dark); margin: 0 0 6px; }
        .faq-quick-card p { font-size: 13px; color: var(--faq-muted); margin: 0; }
        .faq-main { padding: 50px 0 90px; }
        .faq-layout { display: grid; grid-template-columns: 280px 1fr; gap: 36px; align-items: start; }
        .faq-sidebar {
            position: sticky;
            top: 100px;
            background: var(--faq-soft);
            border: 1px solid var(--faq-border);
            border-radius: 20px;
            padding: 24px;
        }
        .faq-search-wrap { margin-bottom: 20px; }
        .faq-search-wrap label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--faq-muted);
            margin-bottom: 8px;
        }
        .faq-search {
            width: 100%;
            padding: 12px 14px 12px 40px;
            border: 1px solid var(--faq-border);
            border-radius: 12px;
            font-size: 14px;
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2394a3b8' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.242 1.056a5 5 0 1 1 0-10 5 5 0 0 1 0 10z'/%3E%3C/svg%3E") 14px center no-repeat;
        }
        .faq-search:focus { outline: none; border-color: var(--faq-blue); box-shadow: 0 0 0 3px rgba(37,99,235,0.12); }
        .faq-cat-nav { display: flex; flex-direction: column; gap: 6px; }
        .faq-cat-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            text-align: left;
            padding: 12px 14px;
            border: none;
            border-radius: 12px;
            background: transparent;
            font-size: 14px;
            font-weight: 600;
            color: #475569;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .faq-cat-btn:hover, .faq-cat-btn.active {
            background: #fff;
            color: var(--faq-dark);
            box-shadow: 0 4px 12px rgba(15,23,42,0.06);
        }
        .faq-cat-btn.active { border-left: 3px solid var(--faq-green); }
        .faq-cat-btn .count {
            margin-left: auto;
            font-size: 11px;
            font-weight: 700;
            background: #e2e8f0;
            color: #64748b;
            padding: 2px 8px;
            border-radius: 999px;
        }
        .faq-cat-btn.active .count { background: rgba(22,199,132,0.15); color: #0b9f68; }
        .faq-mobile-cats {
            display: none;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 24px;
        }
        .faq-mobile-cats .faq-cat-btn { width: auto; font-size: 13px; padding: 10px 14px; }
        .faq-block {
            margin-bottom: 40px;
            scroll-margin-top: 110px;
        }
        .faq-block.is-hidden { display: none; }
        .faq-block-head {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 2px solid var(--faq-border);
        }
        .faq-block-head .fb-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(22,199,132,0.12), rgba(37,99,235,0.1));
            display: grid;
            place-items: center;
            font-size: 22px;
        }
        .faq-block-head h2 { font-size: 22px; font-weight: 800; color: var(--faq-dark); margin: 0; }
        .faq-accordion .accordion-item {
            border: 1px solid var(--faq-border);
            border-radius: 14px !important;
            margin-bottom: 12px;
            overflow: hidden;
            background: #fff;
        }
        .faq-accordion .accordion-item.faq-no-match { display: none; }
        .faq-accordion .accordion-button {
            font-size: 16px;
            font-weight: 700;
            color: var(--faq-dark);
            padding: 20px 24px;
            background: #fff;
            box-shadow: none;
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            background: var(--faq-soft);
            color: var(--faq-blue);
        }
        .faq-accordion .accordion-button:focus { box-shadow: none; border-color: transparent; }
        .faq-accordion .accordion-body {
            padding: 0 24px 22px;
            font-size: 15px;
            line-height: 1.75;
            color: #475569;
        }
        .faq-accordion .accordion-body a { color: var(--faq-blue); font-weight: 600; }
        .faq-empty {
            display: none;
            text-align: center;
            padding: 48px 24px;
            background: var(--faq-soft);
            border-radius: 16px;
            border: 1px dashed var(--faq-border);
        }
        .faq-empty.is-visible { display: block; }
        .faq-cta {
            margin-top: 60px;
            padding: 48px 40px;
            border-radius: 24px;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 100%);
            text-align: center;
            color: #fff;
        }
        .faq-cta h2 { font-size: clamp(24px, 3vw, 32px); font-weight: 800; margin-bottom: 12px; color: #fff; }
        .faq-cta p { color: rgba(255,255,255,0.75); max-width: 520px; margin: 0 auto 24px; font-size: 16px; line-height: 1.65; }
        .faq-cta .faq-btn-primary { background: linear-gradient(135deg, var(--faq-green), #22d3ee); }
        @media (max-width: 991px) {
            .faq-layout { grid-template-columns: 1fr; }
            .faq-sidebar { position: static; }
            .faq-cat-nav { display: none; }
            .faq-mobile-cats { display: flex; }
        }
    </style>
</head>
<body class="digital-agency faq-page">

<?php include 'header.php'; ?>

<section class="faq-hero">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="/">Home</a></li>
            <li>
                <svg width="25" height="6" viewBox="0 0 25 6" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM20 3.5L25 5.88675V0.113249L20 2.5V3.5ZM4.5 3.5H20.5V2.5H4.5V3.5Z"/>
                </svg>
                FAQ
            </li>
        </ul>
        <div class="faq-badge">Help Centre</div>
        <h1>Frequently Asked Questions</h1>
        <p>Clear answers about our lead generation, performance marketing, branding, and technology services — plus how to work with us.</p>
        <div class="faq-hero-actions">
            <a href="contact.php?ref=faq-hero" class="faq-btn faq-btn-primary">Book Free Consultation</a>
            <a href="mailto:hi@growboostly.com" class="faq-btn faq-btn-outline">hi@growboostly.com</a>
        </div>
    </div>
</section>

<section class="faq-quick-strip">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <a href="contact.php?ref=faq-quick" class="faq-quick-card">
                    <div class="qc-icon">📩</div>
                    <h3>Contact Us</h3>
                    <p>Talk to our team</p>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="pricing.php" class="faq-quick-card">
                    <div class="qc-icon">💎</div>
                    <h3>Growth Plans</h3>
                    <p>View pricing options</p>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="services/" class="faq-quick-card">
                    <div class="qc-icon">⚡</div>
                    <h3>Services</h3>
                    <p>Explore what we offer</p>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="industries/local-businesses.php" class="faq-quick-card">
                    <div class="qc-icon">🏢</div>
                    <h3>Industries</h3>
                    <p>Sector strategies</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="faq-main">
    <div class="container">
        <div class="faq-mobile-cats" id="faqMobileCats" role="tablist" aria-label="FAQ categories"></div>

        <div class="faq-layout">
            <aside class="faq-sidebar">
                <div class="faq-search-wrap">
                    <label for="faqSearch">Search questions</label>
                    <input type="search" id="faqSearch" class="faq-search" placeholder="e.g. lead generation, SEO…" autocomplete="off">
                </div>
                <nav class="faq-cat-nav" id="faqCatNav" aria-label="FAQ categories"></nav>
            </aside>

            <div class="faq-content">
                <div class="faq-empty" id="faqEmpty" role="status">
                    <p style="font-size:18px;font-weight:700;color:var(--faq-dark);margin-bottom:8px;">No matches found</p>
                    <p style="margin:0;color:var(--faq-muted);">Try another keyword or <a href="contact.php?ref=faq-search">ask us directly</a>.</p>
                </div>

                <?php
                foreach ($faq_categories as $cat_id => $cat) :
                    $parent_id = 'faqAcc_' . $cat_id;
                ?>
                <div class="faq-block" id="faq-<?php echo htmlspecialchars($cat_id, ENT_QUOTES, 'UTF-8'); ?>" data-category="<?php echo htmlspecialchars($cat_id, ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="faq-block-head">
                        <div class="fb-icon" aria-hidden="true"><?php echo $cat['icon']; ?></div>
                        <h2><?php echo $cat['label']; ?></h2>
                    </div>
                    <div class="accordion faq-accordion" id="<?php echo $parent_id; ?>">
                        <?php foreach ($cat['items'] as $idx => $item) :
                            $item_id = $cat_id . '_' . $idx;
                            $heading_id = 'heading_' . $item_id;
                            $collapse_id = 'collapse_' . $item_id;
                            $is_first = ($cat_id === 'about' && $idx === 0);
                        ?>
                        <div class="accordion-item faq-item" data-question="<?php echo htmlspecialchars(strtolower(strip_tags($item['q'])), ENT_QUOTES, 'UTF-8'); ?>" data-answer="<?php echo htmlspecialchars(strtolower(strip_tags($item['a'])), ENT_QUOTES, 'UTF-8'); ?>">
                            <h3 class="accordion-header" id="<?php echo $heading_id; ?>">
                                <button class="accordion-button<?php echo $is_first ? '' : ' collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" aria-controls="<?php echo $collapse_id; ?>">
                                    <?php echo $item['q']; ?>
                                </button>
                            </h3>
                            <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse<?php echo $is_first ? ' show' : ''; ?>" aria-labelledby="<?php echo $heading_id; ?>" data-bs-parent="#<?php echo $parent_id; ?>">
                                <div class="accordion-body"><?php echo $item['a']; ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="faq-cta">
                    <h2>Still have questions?</h2>
                    <p>Our growth team will answer your questions and recommend the right strategy for your business goals.</p>
                    <div class="faq-hero-actions">
                        <a href="contact.php?ref=faq-cta" class="faq-btn faq-btn-primary">Get Free Growth Plan</a>
                        <a href="https://wa.me/919919020887?text=Hi%20GrowBoostly%2C%20I%20have%20a%20question%20from%20your%20FAQ%20page." class="faq-btn faq-btn-outline" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff;">WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<script>
(function () {
    var categories = <?php echo json_encode(array_map(function ($c, $id) {
        return ['id' => $id, 'label' => $c['label'], 'icon' => $c['icon'], 'count' => count($c['items'])];
    }, $faq_categories, array_keys($faq_categories)), JSON_UNESCAPED_UNICODE); ?>;

    var catNav = document.getElementById('faqCatNav');
    var mobileCats = document.getElementById('faqMobileCats');
    var blocks = document.querySelectorAll('.faq-block');
    var searchInput = document.getElementById('faqSearch');
    var emptyState = document.getElementById('faqEmpty');

    function setActiveCat(id) {
        document.querySelectorAll('.faq-cat-btn').forEach(function (btn) {
            btn.classList.toggle('active', btn.dataset.cat === id);
        });
        blocks.forEach(function (block) {
            if (id === 'all') {
                block.classList.remove('is-hidden');
            } else {
                block.classList.toggle('is-hidden', block.dataset.category !== id);
            }
        });
    }

    function buildCatButton(cat, isMobile) {
        var btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'faq-cat-btn' + (cat.id === 'all' ? ' active' : '');
        btn.dataset.cat = cat.id;
        btn.innerHTML = '<span>' + (cat.icon || '') + '</span> ' + cat.label + (cat.count ? '<span class="count">' + cat.count + '</span>' : '');
        btn.addEventListener('click', function () {
            setActiveCat(cat.id);
            if (cat.id !== 'all') {
                var el = document.getElementById('faq-' + cat.id);
                if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
        (isMobile ? mobileCats : catNav).appendChild(btn);
        return btn;
    }

    var total = 0;
    categories.forEach(function (c) { total += c.count; });
    buildCatButton({ id: 'all', label: 'All topics', icon: '📋', count: total }, false);
    buildCatButton({ id: 'all', label: 'All', icon: '📋', count: total }, true);
    categories.forEach(function (c) {
        buildCatButton(c, false);
        buildCatButton(c, true);
    });

    function runSearch() {
        var q = (searchInput.value || '').trim().toLowerCase();
        var anyVisible = false;

        if (q) {
            setActiveCat('all');
        }

        document.querySelectorAll('.faq-item').forEach(function (item) {
            var match = !q || item.dataset.question.indexOf(q) !== -1 || item.dataset.answer.indexOf(q) !== -1;
            item.classList.toggle('faq-no-match', !match);
        });

        blocks.forEach(function (block) {
            var visibleItems = block.querySelectorAll('.faq-item:not(.faq-no-match)');
            var show = visibleItems.length > 0;
            block.classList.toggle('is-hidden', !show);
            if (show) anyVisible = true;
        });

        emptyState.classList.toggle('is-visible', !anyVisible);
    }

    searchInput.addEventListener('input', runSearch);
})();
</script>

</body>
</html>
