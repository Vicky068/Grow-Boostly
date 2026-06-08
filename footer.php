<?php
// Determine the base path based on whether the current page is in a subdirectory
$current_url = $_SERVER['PHP_SELF'];
$is_subdirectory = strpos($current_url, '/services/') !== false || strpos($current_url, '/industries/') !== false || strpos($current_url, '/pricing/') !== false;
$base = $is_subdirectory ? '../' : '';
?>
<link href="<?php echo $base; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base; ?>assets/css/style.css" rel="stylesheet">
<!-- home1 Footer Section Start --> 
    <style>
        .gb-footer-new {
            --gb-footer-accent: #5333ed;
            --gb-footer-accent-rgb: 83, 51, 237;
            background: #f8fafc;
            color: #475569;
            font-family: var(--font-dmsans), sans-serif;
            padding: 80px 90px 20px 90px;
            border-top: 1px solid #e2e8f0;
            font-size: 14.5px;
            line-height: 1.6;
        }
        @media (max-width: 1799px) {
            .gb-footer-new {
                padding: 80px 60px 20px 60px;
            }
        }
        @media (max-width: 1699px) {
            .gb-footer-new {
                padding: 80px 40px 20px 40px;
            }
        }
        @media (min-width: 1400px) and (max-width: 1599px) {
            .gb-footer-new {
                padding: 80px 20px 20px 20px;
            }
        }
        @media (max-width: 1399px) {
            .gb-footer-new {
                padding: 80px 10px 20px 10px;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .gb-footer-new {
                padding: 80px 0px 20px 0px;
            }
        }
        @media (max-width: 991px) {
            .gb-footer-new {
                padding: 80px 20px 20px 20px;
            }
        }
        @media (max-width: 767px) {
            .gb-footer-new {
                padding: 80px 10px 20px 10px;
            }
        }
        @media (max-width: 576px) {
            .gb-footer-new {
                padding: 60px 0px 20px 0px;
            }
        }
        .gb-footer-new a {
            color: #475569;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .gb-footer-new a:hover {
            color: var(--gb-footer-accent);
        }
        .gb-footer-new h3 {
            font-family: var(--font-suse), sans-serif;
            font-size: 16px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 24px 0;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            position: relative;
            padding-bottom: 8px;
        }
        .gb-footer-new h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 24px;
            height: 2.5px;
            background: var(--gb-footer-accent);
            border-radius: 99px;
        }
        .gb-footer-desc {
            color: #64748b;
            font-size: 14px;
            line-height: 1.65;
            margin-bottom: 24px;
            max-width: 320px;
        }
        
        /* Send Us Mail block */
        .gb-footer-mail-card {
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 16px;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
            max-width: 320px;
            transition: all 0.3s ease;
        }
        .gb-footer-mail-card:hover {
            border-color: rgba(var(--gb-footer-accent-rgb), 0.4);
            box-shadow: 0 8px 24px rgba(var(--gb-footer-accent-rgb), 0.05);
        }
        .gb-footer-mail-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--gb-footer-accent);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }
        .gb-footer-mail-icon i {
            line-height: 1;
        }
        .gb-footer-mail-info {
            display: flex;
            flex-direction: column;
        }
        .gb-footer-mail-info span {
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
            color: #94a3b8;
            letter-spacing: 0.5px;
            line-height: 1.2;
            margin-bottom: 2px;
        }
        .gb-footer-mail-info a {
            font-size: 14.5px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.2;
        }
        .gb-footer-mail-info a:hover {
            color: var(--gb-footer-accent);
        }
        
        /* Social block */
        .gb-footer-social-wrap {
            margin-top: 20px;
        }
        .gb-footer-social-wrap h5 {
            font-family: var(--font-suse), sans-serif;
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 12px 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .gb-footer-social-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 8px;
        }
        .gb-footer-social-list a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            color: #475569;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            transition: all 0.25s ease;
        }
        .gb-footer-social-list a:hover {
            background: var(--gb-footer-accent);
            border-color: var(--gb-footer-accent);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Widget List */
        .gb-footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .gb-footer-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .gb-footer-list li a {
            font-weight: 600;
            color: #475569;
            font-size: 14.5px;
        }
        .gb-footer-list li a:hover {
            color: var(--gb-footer-accent);
            padding-left: 2px;
        }
        .gb-footer-list li i {
            color: var(--gb-footer-accent);
            font-size: 16px;
            flex-shrink: 0;
        }

        /* Careers Hiring Badge */
        .gb-hiring-badge {
            background: var(--gb-footer-accent);
            color: #ffffff;
            font-size: 9px;
            font-weight: 800;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 99px;
            margin-left: 6px;
            letter-spacing: 0.5px;
            line-height: 1;
        }

        /* Newsletter Input */
        .gb-newsletter-form {
            display: flex;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 99px;
            padding: 4px;
            max-width: 320px;
            margin-bottom: 16px;
            transition: all 0.3s ease;
        }
        .gb-newsletter-form:focus-within {
            border-color: var(--gb-footer-accent);
            box-shadow: 0 0 0 4px rgba(var(--gb-footer-accent-rgb), 0.1);
        }
        .gb-newsletter-input {
            border: 0;
            background: transparent;
            padding: 0 16px;
            outline: none;
            font-size: 13.5px;
            width: 100%;
            color: #0f172a;
        }
        .gb-newsletter-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gb-footer-accent);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 0;
            cursor: pointer;
            transition: all 0.25s ease;
            flex-shrink: 0;
        }
        .gb-newsletter-btn:hover {
            background: #431cd6;
            transform: scale(1.05);
        }
        
        .gb-newsletter-notes {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .gb-newsletter-notes li {
            margin-bottom: 8px;
            font-size: 13px;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
        }
        .gb-newsletter-notes li i {
            color: var(--gb-footer-accent);
            font-size: 16px;
        }

        /* Feature Bar */
        .gb-footer-features {
            border-top: 1.5px solid #e2e8f0;
            border-bottom: 1.5px solid #e2e8f0;
            padding: 40px 0;
            margin: 40px 0;
        }
        .gb-feature-item {
            display: flex;
            align-items: center;
            gap: 16px;
            transition: transform 0.2s ease;
        }
        .gb-feature-item:hover {
            transform: translateY(-2px);
        }
        .gb-feature-icon {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: rgba(var(--gb-footer-accent-rgb), 0.1);
            color: var(--gb-footer-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        .gb-feature-item:hover .gb-feature-icon {
            background: var(--gb-footer-accent);
            color: #ffffff;
        }
        .gb-feature-info h4 {
            font-family: var(--font-suse), sans-serif;
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 4px 0;
        }
        .gb-feature-info p {
            font-size: 12.5px;
            color: #64748b;
            margin: 0;
            line-height: 1.4;
        }

        /* Bottom Copyright Area */
        .gb-footer-bottom {
            padding: 10px 0 30px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            font-size: 13.5px;
            color: #64748b;
        }
        .gb-footer-bottom-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 16px;
        }
        .gb-footer-bottom-links a {
            color: #64748b;
            font-weight: 500;
        }
        .gb-footer-bottom-links a:hover {
            color: var(--gb-footer-accent);
        }
        .gb-footer-bottom-divider {
            color: #cbd5e1;
        }
        .gb-footer-secure-badge {
            border: 1.5px solid #e2e8f0;
            padding: 6px 14px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            color: #475569;
            display: flex;
            align-items: center;
            gap: 6px;
            background: #ffffff;
        }
        .gb-footer-secure-badge i {
            color: var(--gb-footer-accent);
            font-size: 15px;
        }

        /* Use standard container padding, matching the header layout */
        .gb-footer-new .container-fluid {
            padding-left: var(--bs-gutter-x, 15px);
            padding-right: var(--bs-gutter-x, 15px);
        }

        @media (max-width: 991px) {
            .gb-footer-bottom {
                flex-direction: column;
                text-align: center;
                justify-content: center;
            }
            .gb-footer-bottom-links {
                justify-content: center;
            }
        }
    </style>

    <footer class="gb-footer-new">
        <div class="container-fluid">
            <!-- Better CSS Grid structure for footer top -->
            <div style="display: grid; grid-template-columns: 1.2fr 0.8fr 1fr 1fr 1.2fr; gap: 40px;" class="d-none d-lg-grid">
                <!-- Column 1: Info -->
                <div>
                    <img src="<?php echo $base; ?>assets/img/grow-boostly.png" alt="Grow Boostly" style="height: 40px; margin-bottom: 20px;">
                    <p class="gb-footer-desc">Data-driven performance marketing agency helping brands generate quality leads, increase conversions, and scale faster.</p>
                    
                    <div class="gb-footer-mail-card">
                        <div class="gb-footer-mail-icon">
                            <i class='bx bxs-envelope'></i>
                        </div>
                        <div class="gb-footer-mail-info">
                            <span>Send Us Mail</span>
                            <a href="mailto:growboostly@gmail.com">growboostly@gmail.com</a>
                        </div>
                    </div>

                    <div class="gb-footer-social-wrap">
                        <h5>Let's Connect</h5>
                        <ul class="gb-footer-social-list">
                            <li><a href="https://www.facebook.com/GrowBoostly/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://x.com/GrowBoostly" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/growboostly/" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="https://www.youtube.com/@Grow-Boostly" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="https://www.instagram.com/grow_boostly/" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2: Company -->
                <div>
                    <h3>Company</h3>
                    <ul class="gb-footer-list">
                        <li><a href="<?php echo $base; ?>index.php">Home</a></li>
                        <li><a href="<?php echo $base; ?>about.php">About Us</a></li>
                        <li><a href="<?php echo $base; ?>career.php">Careers <span class="gb-hiring-badge">Hiring</span></a></li>
                        <li><a href="<?php echo $base; ?>faq.php">FAQs</a></li>
                        <li><a href="<?php echo $base; ?>privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="<?php echo $base; ?>terms-and-conditions.php">Terms &amp; Conditions</a></li>
                        <li><a href="<?php echo $base; ?>contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h3>Services</h3>
                    <ul class="gb-footer-list">
                        <li><a href="<?php echo $base; ?>services/b2b-lead-generation.php">Lead Generation</a></li>
                        <li><a href="<?php echo $base; ?>services/google-ads.php">Google Ads</a></li>
                        <li><a href="<?php echo $base; ?>services/seo.php">SEO</a></li>
                        <li><a href="<?php echo $base; ?>services/social-media-marketing.php">Social Media Marketing</a></li>
                        <li><a href="<?php echo $base; ?>services/influencer-marketing.php">Influencer Marketing</a></li>
                        <li><a href="<?php echo $base; ?>services/business-website-development.php">Website Development</a></li>
                        <li><a href="<?php echo $base; ?>services/android-app-development.php">App Development</a></li>
                        <li><a href="<?php echo $base; ?>services/logo-design.php">Logo &amp; Brand Design</a></li>
                    </ul>
                </div>

                <!-- Column 4: Industries -->
                <div>
                    <h3>Industries</h3>
                    <ul class="gb-footer-list">
                        <li><i class='bx bx-shopping-bag'></i> <a href="<?php echo $base; ?>industries/ecommerce-d2c.php">E-commerce</a></li>
                        <li><i class='bx bx-store-alt'></i> <a href="<?php echo $base; ?>industries/local-businesses.php">Local Businesses</a></li>
                        <li><i class='bx bx-building-house'></i> <a href="<?php echo $base; ?>industries/real-estate.php">Real Estate</a></li>
                        <li><i class='bx bx-heart'></i> <a href="<?php echo $base; ?>industries/healthcare-clinics.php">Healthcare</a></li>
                        <li><i class='bx bxs-graduation'></i> <a href="<?php echo $base; ?>industries/education-coaching.php">Education</a></li>
                        <li><i class='bx bx-cloud'></i> <a href="<?php echo $base; ?>industries/saas-it-technology.php">SaaS &amp; Tech</a></li>
                        <li><i class='bx bx-support'></i> <a href="<?php echo $base; ?>industries/bpo-service-companies.php">BPO &amp; Offshoring</a></li>
                        <li><i class='bx bx-dollar-circle'></i> <a href="<?php echo $base; ?>industries/finance-insurance.php">Finance &amp; Insurance</a></li>
                    </ul>
                </div>

                <!-- Column 5: Newsletter -->
                <div>
                    <h3>Newsletter</h3>
                    <p class="gb-footer-desc" style="margin-bottom: 16px;">Subscribe to our newsletter and get marketing insights &amp; updates.</p>
                    <form class="gb-newsletter-form" action="#" method="POST" onsubmit="event.preventDefault();">
                        <input type="email" class="gb-newsletter-input" placeholder="Enter your email" required>
                        <button type="submit" class="gb-newsletter-btn">
                            <i class='bx bxs-paper-plane'></i>
                        </button>
                    </form>
                    <ul class="gb-newsletter-notes">
                        <li><i class="bi bi-check-circle-fill"></i> No spam, just valuable updates.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Unsubscribe anytime.</li>
                    </ul>
                </div>
            </div>

            <!-- Responsive Grid for Tablets and Mobile -->
            <div class="row g-5 d-lg-none">
                <!-- Column 1 -->
                <div class="col-12">
                    <img src="<?php echo $base; ?>assets/img/grow-boostly.png" alt="Grow Boostly" style="height: 40px; margin-bottom: 20px;">
                    <p class="gb-footer-desc">Data-driven performance marketing agency helping brands generate quality leads, increase conversions, and scale faster.</p>
                    
                    <div class="gb-footer-mail-card">
                        <div class="gb-footer-mail-icon">
                            <i class='bx bxs-envelope'></i>
                        </div>
                        <div class="gb-footer-mail-info">
                            <span>Send Us Mail</span>
                            <a href="mailto:growboostly@gmail.com">growboostly@gmail.com</a>
                        </div>
                    </div>

                    <div class="gb-footer-social-wrap">
                        <h5>Let's Connect</h5>
                        <ul class="gb-footer-social-list">
                            <li><a href="https://www.facebook.com/GrowBoostly/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://x.com/GrowBoostly" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/growboostly/" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="https://www.youtube.com/@Grow-Boostly" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="https://www.instagram.com/grow_boostly/" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2, 3, 4 responsive row -->
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-6 col-sm-4">
                            <h3>Company</h3>
                            <ul class="gb-footer-list">
                                <li><a href="<?php echo $base; ?>index.php">Home</a></li>
                                <li><a href="<?php echo $base; ?>about.php">About Us</a></li>
                                <li><a href="<?php echo $base; ?>career.php">Careers <span class="gb-hiring-badge">Hiring</span></a></li>
                                <li><a href="<?php echo $base; ?>faq.php">FAQs</a></li>
                                <li><a href="<?php echo $base; ?>privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="<?php echo $base; ?>terms-and-conditions.php">Terms &amp; Conditions</a></li>
                                <li><a href="<?php echo $base; ?>contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-4">
                            <h3>Services</h3>
                            <ul class="gb-footer-list">
                                <li><a href="<?php echo $base; ?>services/b2b-lead-generation.php">B2B Lead Generation</a></li>
                                <li><a href="<?php echo $base; ?>services/b2c-lead-generation.php">B2C Lead Generation</a></li>
                                <li><a href="<?php echo $base; ?>services/google-ads.php">Google Ads (PPC)</a></li>
                                <li><a href="<?php echo $base; ?>services/facebook-instagram-ads.php">Social Media Ads</a></li>
                                <li><a href="<?php echo $base; ?>services/seo.php">Search Engine Optimization</a></li>
                                <li><a href="<?php echo $base; ?>services/influencer-marketing.php">Influencer Marketing</a></li>
                                <li><a href="<?php echo $base; ?>services/business-website-development.php">Web &amp; App Development</a></li>
                                <li><a href="<?php echo $base; ?>services/ui-ux-design.php">UI/UX &amp; Brand Design</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-4">
                            <h3>Industries</h3>
                            <ul class="gb-footer-list">
                                <li><i class='bx bx-shopping-bag'></i> <a href="<?php echo $base; ?>industries/ecommerce-d2c.php">E-commerce</a></li>
                                <li><i class='bx bx-store-alt'></i> <a href="<?php echo $base; ?>industries/local-businesses.php">Local Businesses</a></li>
                                <li><i class='bx bx-building-house'></i> <a href="<?php echo $base; ?>industries/real-estate.php">Real Estate</a></li>
                                <li><i class='bx bx-heart'></i> <a href="<?php echo $base; ?>industries/healthcare-clinics.php">Healthcare</a></li>
                                <li><i class='bx bxs-graduation'></i> <a href="<?php echo $base; ?>industries/education-coaching.php">Education</a></li>
                                <li><i class='bx bx-cloud'></i> <a href="<?php echo $base; ?>industries/saas-it-technology.php">SaaS &amp; Tech</a></li>
                                <li><i class='bx bx-support'></i> <a href="<?php echo $base; ?>industries/bpo-service-companies.php">BPO &amp; Offshoring</a></li>
                                <li><i class='bx bx-dollar-circle'></i> <a href="<?php echo $base; ?>industries/finance-insurance.php">Finance &amp; Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Column 5 -->
                <div class="col-12">
                    <h3>Newsletter</h3>
                    <p class="gb-footer-desc" style="margin-bottom: 16px;">Subscribe to our newsletter and get marketing insights &amp; updates.</p>
                    <form class="gb-newsletter-form" action="#" method="POST" onsubmit="event.preventDefault();">
                        <input type="email" class="gb-newsletter-input" placeholder="Enter your email" required>
                        <button type="submit" class="gb-newsletter-btn">
                            <i class='bx bxs-paper-plane'></i>
                        </button>
                    </form>
                    <ul class="gb-newsletter-notes">
                        <li><i class="bi bi-check-circle-fill"></i> No spam, just valuable updates.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Unsubscribe anytime.</li>
                    </ul>
                </div>
            </div>

            <!-- Features Bar Section -->
            <div class="gb-footer-features">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-target-lock'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>ROI Focused</h4>
                                <p>We focus on strategies that deliver measurable results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-bar-chart-alt-2'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>Transparent Reporting</h4>
                                <p>Get clear insights and regular performance reports.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-support'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>Dedicated Support</h4>
                                <p>Our team is always here to support your growth journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-trending-up'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>Result-Driven Strategies</h4>
                                <p>Data-backed strategies that drive leads, sales &amp; growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright Section -->
            <div class="gb-footer-bottom">
                <div>
                    &copy; 2025 Grow Boostly. All Rights Reserved.
                </div>
                <div class="gb-footer-secure-badge">
                    <i class="bi bi-shield-check"></i> Secure &amp; Trusted
                </div>
            </div>
        </div>
    </footer>
    <!-- home1 Footer Section End --> 


    <!--  Main jQuery  -->
    <script src="<?php echo $base; ?>assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery-ui.js"></script>
    
    <!-- Popper and Bootstrap JS -->
    <script src="<?php echo $base; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/popper.min.js"></script>
    <!-- Swiper slider JS -->
    <script src="<?php echo $base; ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/slick.js"></script>
    <!-- Waypoints JS -->
    <script src="<?php echo $base; ?>assets/js/waypoints.min.js"></script>
    <!-- Counterup JS -->
    <script src="<?php echo $base; ?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/ScrollSmoother.min.js"></script>
    <!-- Wow JS -->
    <script src="<?php echo $base; ?>assets/js/wow.min.js"></script>
    <!-- Marquee  JS -->
    <script src="<?php echo $base; ?>assets/js/jquery.marquee.min.js"></script>
    <!-- Gsap  JS -->
    <script src="<?php echo $base; ?>assets/js/gsap.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/ScrollTrigger.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery.fancybox.min.js"></script>
    <!-- Custom JS -->
   <script src="<?php echo $base; ?>assets/js/custom.js"></script>
