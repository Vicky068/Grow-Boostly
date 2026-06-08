<?php
// Determine the base path based on whether the current page is in a subdirectory
$current_url = $_SERVER['PHP_SELF'];
$is_subdirectory = strpos($current_url, '/services/') !== false || strpos($current_url, '/industries/') !== false || strpos($current_url, '/pricing/') !== false;
$base = $is_subdirectory ? '../' : '';
?>
<link href="<?php echo $base; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base; ?>assets/css/style.css" rel="stylesheet">
<style>
/* PROFESSIONAL MARKETING MEGA MENU CSS */
.header-area .main-menu > ul > li .marketing-mega-menu,
.header-area .main-menu > ul > li .development-mega-menu {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) translateY(15px);
    width: 1050px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.08), 0 0 0 1px rgba(0,0,0,0.04);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.5s;
    z-index: 999;
    overflow: visible;
    display: block; 
    pointer-events: none;
}
.marketing-mega-menu::before, .development-mega-menu::before, .leadgen-dropdown-grid::before {
    content: '';
    position: absolute;
    top: -30px;
    left: 0;
    width: 100%;
    height: 30px;
    background: transparent;
    z-index: -1;
}
.header-area .main-menu > ul > li:hover .marketing-mega-menu,
.header-area .main-menu > ul > li:hover .development-mega-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0s;
    pointer-events: auto;
}

/* SMOOTHING FOR OTHER DROPDOWNS */
.leadgen-dropdown-grid {
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.5s !important;
    transform: translateX(-50%) translateY(15px) !important;
    overflow: visible !important;
}
.header-area .main-menu > ul > li:hover .leadgen-dropdown-grid {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateX(-50%) translateY(0) !important;
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0s !important;
    pointer-events: auto !important;
}
.marketing-mega-menu .mmm-container,
.development-mega-menu .mmm-container {
    display: flex;
    width: 100%;
}
.marketing-mega-menu .mmm-left,
.development-mega-menu .mmm-left {
    flex: 0 0 68%;
    padding: 40px;
}
.marketing-mega-menu .mmm-header,
.development-mega-menu .mmm-header {
    margin-bottom: 30px;
}
.marketing-mega-menu .mmm-tag,
.development-mega-menu .mmm-tag {
    display: inline-block;
    background: rgba(67,56,202,0.1);
    color: #4338ca;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 4px 10px;
    border-radius: 20px;
    margin-bottom: 12px;
}
.marketing-mega-menu .mmm-header h4,
.development-mega-menu .mmm-header h4 {
    font-size: 22px;
    font-weight: 800;
    color: #1c1917;
    margin: 0;
}
.marketing-mega-menu .mmm-grid,
.development-mega-menu .mmm-grid {
    display: flex;
    gap: 40px;
}
.marketing-mega-menu .mmm-col,
.development-mega-menu .mmm-col {
    flex: 1;
}
.marketing-mega-menu .mmm-col h5,
.development-mega-menu .mmm-col h5 {
    font-size: 14px;
    font-weight: 700;
    color: #444;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 10px;
}
.marketing-mega-menu .mmm-col h5 i,
.development-mega-menu .mmm-col h5 i {
    color: #4338ca;
    font-size: 16px;
}
.marketing-mega-menu .mmm-col ul,
.development-mega-menu .mmm-col ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.marketing-mega-menu .mmm-col ul li,
.development-mega-menu .mmm-col ul li {
    margin-bottom: 12px !important;
}
.marketing-mega-menu .mmm-col ul li:last-child,
.development-mega-menu .mmm-col ul li:last-child {
    margin-bottom: 0 !important;
}
.marketing-mega-menu .mmm-col ul li a,
.development-mega-menu .mmm-col ul li a {
    display: block;
    font-size: 14.5px;
    font-weight: 500;
    color: #57534e;
    text-decoration: none;
    transition: all 0.2s;
    line-height: 1.4;
}
.marketing-mega-menu .mmm-col ul li a:hover,
.development-mega-menu .mmm-col ul li a:hover {
    color: #4338ca;
    transform: translateX(5px);
}
.marketing-mega-menu .mmm-right,
.development-mega-menu .mmm-right {
    flex: 0 0 32%;
    background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%);
    padding: 40px 30px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
}
.marketing-mega-menu .mmm-promo,
.development-mega-menu .mmm-promo {
    position: relative;
    z-index: 2;
    text-align: center;
}
.marketing-mega-menu .promo-icon,
.development-mega-menu .promo-icon {
    font-size: 36px;
    margin-bottom: 20px;
    display: inline-block;
    background: rgba(255,255,255,0.1);
    padding: 15px;
    border-radius: 50%;
    backdrop-filter: blur(5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.marketing-mega-menu .mmm-promo h3,
.development-mega-menu .mmm-promo h3 {
    font-size: 22px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 15px;
    line-height: 1.3;
}
.marketing-mega-menu .mmm-promo p,
.development-mega-menu .mmm-promo p {
    font-size: 14px;
    color: rgba(255,255,255,0.7);
    line-height: 1.6;
    margin-bottom: 25px;
}
.marketing-mega-menu .mmm-btn,
.development-mega-menu .mmm-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #fff;
    color: #312e81;
    font-weight: 700;
    font-size: 14px;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s;
    width: 100%;
}
.marketing-mega-menu .mmm-btn:hover,
.development-mega-menu .mmm-btn:hover {
    background: rgba(255,255,255,0.9);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.marketing-mega-menu .mmm-right::after,
.development-mega-menu .mmm-right::after {
    content: '';
    position: absolute;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, rgba(255,255,255,0) 70%);
    top: -50px;
    right: -50px;
    border-radius: 50%;
    z-index: 1;
}
/* Responsive fixes */
@media (max-width: 991px) {
    .header-area .main-menu > ul > li .marketing-mega-menu,
    .header-area .main-menu > ul > li .development-mega-menu {
        position: relative;
        top: 0;
        left: 0;
        transform: none;
        width: 100%;
        box-shadow: none;
        border-radius: 0;
        opacity: 1;
        visibility: visible;
        display: none;
        pointer-events: auto;
    }
    .header-area .main-menu > ul > li.active .marketing-mega-menu,
    .header-area .main-menu > ul > li.active .development-mega-menu {
        display: block;
    }
}
</style>
<!-- header Section Start-->
    <header class="header-area style-4">
        <div class="container-fluid d-flex flex-nowrap align-items-center justify-content-between">
            <div class="company-logo">
                <a href="<?php echo $base; ?>index.php" class="logo-dark"><img alt="image" class="img-fluid" src="<?php echo $base; ?>assets/img/grow-boostly.png"></a>
                <a href="<?php echo $base; ?>index.php" class="logo-light"><img alt="image" class="img-fluid" src="<?php echo $base; ?>assets/img/grow-boostly.png"></a>
            </div>
            <div class="menu-wrap">
                <div class="main-menu">
                    <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                        <a href="<?php echo $base; ?>index.php" class="mobile-logo-wrap">
                            <img alt="image" class="img-fluid light" src="<?php echo $base; ?>assets/img/grow-boostly.png">
                            <img alt="image" class="img-fluid dark" src="<?php echo $base; ?>assets/img/grow-boostly.png">
                        </a>
                        <div class="menu-close-btn">
                            <i class="bi bi-x"></i>
                        </div>
                    </div>
                    <ul class="menu-list">
                        <li><a href="<?php echo $base; ?>about.php">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)" class="drop-down">Lead Generation</a>
                            <i class="bi bi-plus dropdown-icon"></i>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base; ?>services/b2b-lead-generation.php">B2B Lead Generation</a></li>
                                <li><a href="<?php echo $base; ?>services/b2c-lead-generation.php">B2C Lead Generation</a></li>
                                <li><a href="<?php echo $base; ?>services/ai-based-lead-targeting.php">AI-Based Lead Targeting</a></li>
                                <li><a href="<?php echo $base; ?>services/landing-page-creation.php">Landing Page Creation</a></li>
                                <li><a href="<?php echo $base; ?>services/sales-funnel-development.php">Sales Funnel Development</a></li>
                                <li><a href="<?php echo $base; ?>services/lead-nurturing.php">Lead Nurturing</a></li>
                                <li><a href="<?php echo $base; ?>services/crm-integration.php">CRM Integration</a></li>
                            </ul>
                        </li>
           
    <li class="menu-item-has-children position-inherit">
                            <a href="javascript:void(0)" class="drop-down">Marketing
                            </a>
                            <i class="bi bi-plus dropdown-icon"></i>
                            <div class="marketing-mega-menu">
                                <div class="mmm-container">
                                    <div class="mmm-left">
                                        <div class="mmm-header">
                                            <h4>Challenge We Tackle</h4>
                                        </div>
                                        <div class="mmm-grid">
                                            <!-- Column 1 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-graph-up-arrow"></i> Performance Marketing</h5>
                                                <ul>
                                                    <li><a href="<?php echo $base; ?>services/google-ads.php">Google Ads (PPC)</a></li>
                                                    <li><a href="<?php echo $base; ?>services/facebook-instagram-ads.php">Facebook & Instagram Ads</a></li>
                                                    <li><a href="<?php echo $base; ?>services/linkedin-ads.php">LinkedIn Ads (B2B)</a></li>
                                                    <li><a href="<?php echo $base; ?>services/search-engine-marketing.php">Search Engine Marketing</a></li>
                                                    <li><a href="<?php echo $base; ?>services/retargeting-remarketing.php">Retargeting / Remarketing</a></li>
                                                    <li><a href="<?php echo $base; ?>services/conversion-rate-optimisation.php">Conversion Rate Optimization</a></li>
                                                    <li><a href="<?php echo $base; ?>services/ab-testing.php">A/B Testing & Optimization</a></li>
                                                </ul>
                                            </div>
                                            <!-- Column 2 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-globe2"></i> Digital Marketing</h5>
                                                <ul>
                                                    <li><a href="<?php echo $base; ?>services/seo.php">Search Engine Optimization</a></li>
                                                    <li><a href="<?php echo $base; ?>services/ai-powered-seo.php">AI-Powered SEO</a></li>
                                                    <li><a href="<?php echo $base; ?>services/social-media-marketing.php">Social Media Marketing</a></li>
                                                    <li><a href="<?php echo $base; ?>services/app-store-optimisation.php">App Store Optimization</a></li>
                                                    <li><a href="<?php echo $base; ?>services/content-marketing.php">Content Marketing</a></li>
                                                    <li><a href="<?php echo $base; ?>services/email-marketing-automation.php">Email Automation</a></li>
                                                    <li><a href="<?php echo $base; ?>services/online-reputation-management.php">Online Reputation (ORM)</a></li>
                                                    <li><a href="<?php echo $base; ?>services/youtube-marketing.php">YouTube Marketing</a></li>
                                                </ul>
                                            </div>
                                            <!-- Column 3 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-people"></i> <a href="<?php echo $base; ?>services/influencer-marketing.php" style="color: inherit; text-decoration: none;">Influencer Marketing</a></h5>
                                                <ul>
                                                    <li><a href="<?php echo $base; ?>services/influencer-marketing.php">Influencer Research & Strategy</a></li>
                                                    <li><a href="<?php echo $base; ?>services/campaign-management.php">Campaign Management</a></li>
                                                    <li><a href="<?php echo $base; ?>services/instagram-influencer-marketing.php">Instagram Influencer Marketing</a></li>
                                                    <li><a href="<?php echo $base; ?>services/youtube-influencer-marketing.php">YouTube Influencer Marketing</a></li>
                                                    <li><a href="<?php echo $base; ?>services/creator-collaborations.php">Creator Collaborations</a></li>
                                                    <li><a href="<?php echo $base; ?>services/performance-tracking.php">Performance Tracking</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mmm-right">
                                        <div class="mmm-promo">
                                            <div class="promo-icon">🚀</div>
                                            <h3>We help businesses grow with smarter campaigns, better leads, and stronger conversion systems.</h3>
                                            <a href="<?php echo $base; ?>contact.php" class="mmm-btn">Let's Talk <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
    <li class="menu-item-has-children position-inherit">
                            <a href="javascript:void(0)" class="drop-down">Development</a>
                            <i class="bi bi-plus dropdown-icon"></i>
                            <div class="development-mega-menu">
                                <div class="mmm-container">
                                    <div class="mmm-left">
                                        <div class="mmm-header">
                                            <h4>Design & Engineering</h4>
                                        </div>
                                        <div class="mmm-grid">
                                            <!-- Column 1 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-pc-display"></i> Web Development</h5>
                                                <ul>
                                                    <li><a href="<?php echo $base; ?>services/business-website-development.php">Business Website</a></li>
                                                    <li><a href="<?php echo $base; ?>services/ecommerce-development.php">eCommerce Solutions</a></li>
                                                    <li><a href="<?php echo $base; ?>services/landing-page-development.php">Landing Page Dev</a></li>
                                                    <li><a href="<?php echo $base; ?>services/website-redesign.php">Website Redesign</a></li>
                                                    <li><a href="<?php echo $base; ?>services/maintenance-support.php">Maintenance & Support</a></li>
                                                </ul>
                                            </div>
                                            <!-- Column 2 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-phone"></i> App Development</h5>
                                                <ul>
                                                    <li><a href="<?php echo $base; ?>services/android-app-development.php">Android App Development</a></li>
                                                    <li><a href="<?php echo $base; ?>services/ios-app-development.php">iOS App Development</a></li>
                                                    <li><a href="<?php echo $base; ?>services/cross-platform-apps.php">Cross-Platform Apps</a></li>
                                                    <li><a href="<?php echo $base; ?>services/ui-ux-design.php">UI/UX Design</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mmm-right">
                                        <div class="mmm-promo">
                                            <div class="promo-icon">💻</div>
                                            <h3>We build high-performance websites and mobile apps tailored to your business goals.</h3>
                                            <a href="<?php echo $base; ?>contact.php" class="mmm-btn">Start Your Project <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)" class="drop-down">Branding</a>
                            <i class="bi bi-plus dropdown-icon"></i>
                            <ul class="sub-menu">
                            <li><a href="<?php echo $base; ?>services/logo-design.php">Logo Design</a></li>
                            <li><a href="<?php echo $base; ?>services/brand-identity-design.php">Brand Identity Design</a></li>
                            <li><a href="<?php echo $base; ?>services/brand-strategy.php">Brand Strategy</a></li>
                            <li><a href="<?php echo $base; ?>services/brand-positioning.php">Brand Positioning</a></li>
                            <li><a href="<?php echo $base; ?>services/social-media-creatives.php">Social Media Creatives</a></li>
                            <li><a href="<?php echo $base; ?>services/packaging-design.php">Packaging Design</a></li>
                            <li><a href="<?php echo $base; ?>services/rebranding.php">Rebranding</a></li>
                        </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)" class="drop-down">Hire Developers</a>
                            <i class="bi bi-plus dropdown-icon"></i>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base; ?>services/full-stack-developers.php">Full-Stack Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/backend-developers.php">Backend Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/android-developers.php">Android Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/nodejs-developers.php">Node.js Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/php-laravel-developers.php">PHP / Laravel Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/web-developers.php">Web Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/fintech-software-developers.php">Fintech Software Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/dedicated-developer.php">Dedicated Developers</a></li>
                                <li><a href="<?php echo $base; ?>services/swift-developer.php">Swift Developers</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $base; ?>pricing.php">Pricing</a></li>
                    </ul>
                    <div class="btn-and-contact-area d-lg-none d-block">
                        <a href="<?php echo $base; ?>contact.php" class="primary-btn4">
                            
                            <span class="content">Contact Us</span>
                            
                        </a>
                    </div>
                </div>
                <div class="nav-right">
                    <a href="<?php echo $base; ?>contact.php" class="primary-btn4 d-lg-flex d-none">
                        
                        <span class="content">Contact Us</span>
                        
                    </a>
                    <div class="sidebar-button mobile-menu-btn">
                        <svg width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.29445 2.8421H10.5237C11.2389 2.8421 11.8182 2.2062 11.8182 1.42105C11.8182 0.635903 11.2389 0 10.5237 0H1.29445C0.579249 0 0 0.635903 0 1.42105C0 2.2062 0.579249 2.8421 1.29445 2.8421Z"></path>
                            <path d="M1.23002 10.421H18.77C19.4496 10.421 20 9.78506 20 8.99991C20 8.21476 19.4496 7.57886 18.77 7.57886H1.23002C0.550421 7.57886 0 8.21476 0 8.99991C0 9.78506 0.550421 10.421 1.23002 10.421Z"></path>
                            <path d="M18.8052 15.1579H10.2858C9.62563 15.1579 9.09094 15.7938 9.09094 16.5789C9.09094 17.3641 9.62563 18 10.2858 18H18.8052C19.4653 18 20 17.3641 20 16.5789C20 15.7938 19.4653 15.1579 18.8052 15.1579Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header Section End-->