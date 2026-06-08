<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

.gb-case-page {
    --gb-ink: #0f172a;
    --gb-text: #334155;
    --gb-muted: #64748b;
    --gb-line: #e2e8f0;
    --gb-soft: #f8fafc;
    --gb-blue: #2563eb;
    --gb-green: #16c784;
    --gb-violet: #7c3aed;
    --gb-grad: linear-gradient(135deg, #16c784 0%, #2563eb 55%, #7c3aed 100%);
    --gb-hero-bg: linear-gradient(135deg, #f0fdf4 0%, #eff6ff 50%, #f5f3ff 100%);
    --gb-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    font-family: 'Inter', sans-serif;
    color: var(--gb-text);
    background: #fff;
}

.gb-case-page .gb-case-hero {
    padding: 150px 20px 90px;
    background: var(--gb-hero-bg);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.gb-case-page .gb-case-hero:before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(15, 23, 42, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(15, 23, 42, 0.03) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent 90%);
    pointer-events: none;
}

.gb-case-page .gb-case-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 16px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.08);
    border: 1px solid rgba(37, 99, 235, 0.12);
    color: var(--gb-blue);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.gb-case-page .gb-case-hero h1 {
    font-size: clamp(36px, 5vw, 58px);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -1.5px;
    color: var(--gb-ink);
    margin: 0 0 18px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

.gb-case-page .gb-case-hero h1 span {
    background: var(--gb-grad);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.gb-case-page .gb-case-hero p {
    max-width: 720px;
    margin: 0 auto 24px;
    font-size: 17px;
    line-height: 1.7;
    color: var(--gb-muted);
}

.gb-case-page .gb-case-breadcrumb {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 14px;
    font-weight: 600;
}

.gb-case-page .gb-case-breadcrumb a {
    color: var(--gb-muted);
    text-decoration: none;
    transition: color 0.2s;
}

.gb-case-page .gb-case-breadcrumb a:hover {
    color: var(--gb-blue);
}

.gb-case-page .gb-case-breadcrumb li:not(:last-child):after {
    content: "/";
    margin-left: 8px;
    color: #cbd5e1;
}

.gb-case-page .gb-case-breadcrumb li:last-child {
    color: var(--gb-ink);
}

.gb-case-page .gb-case-stats {
    margin-top: -40px;
    position: relative;
    z-index: 2;
    padding-bottom: 20px;
}

.gb-case-page .gb-case-stat-card {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 20px;
    padding: 24px;
    text-align: center;
    box-shadow: var(--gb-shadow);
    height: 100%;
}

.gb-case-page .gb-case-stat-card strong {
    display: block;
    font-size: 34px;
    font-weight: 800;
    color: var(--gb-ink);
    line-height: 1;
    margin-bottom: 8px;
}

.gb-case-page .gb-case-stat-card span {
    font-size: 14px;
    color: var(--gb-muted);
    line-height: 1.5;
}

.gb-case-page .gb-case-section {
    padding: 70px 0 90px;
}

.gb-case-page .gb-case-section-head {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 48px;
}

.gb-case-page .gb-case-section-head h2 {
    font-size: clamp(28px, 3vw, 38px);
    font-weight: 800;
    color: var(--gb-ink);
    letter-spacing: -0.8px;
    margin: 0 0 12px;
}

.gb-case-page .gb-case-section-head p {
    margin: 0;
    color: var(--gb-muted);
    font-size: 16px;
    line-height: 1.7;
}

.gb-case-page .gb-case-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 28px;
}

.gb-case-page .gb-case-card {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 12px 32px rgba(15, 23, 42, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.gb-case-page .gb-case-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--gb-shadow);
    border-color: rgba(37, 99, 235, 0.18);
}

.gb-case-page .gb-case-card-image {
    display: block;
    position: relative;
    overflow: hidden;
    aspect-ratio: 16 / 10;
}

.gb-case-page .gb-case-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.35s ease;
}

.gb-case-page .gb-case-card:hover .gb-case-card-image img {
    transform: scale(1.04);
}

.gb-case-page .gb-case-card-tag {
    position: absolute;
    left: 16px;
    top: 16px;
    padding: 7px 12px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.4px;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.92);
    color: var(--gb-blue);
    border: 1px solid rgba(37, 99, 235, 0.12);
}

.gb-case-page .gb-case-card-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.gb-case-page .gb-case-card-body h3 {
    margin: 0 0 14px;
    font-size: 20px;
    line-height: 1.35;
    font-weight: 800;
    color: var(--gb-ink);
}

.gb-case-page .gb-case-card-body h3 a {
    color: inherit;
    text-decoration: none;
}

.gb-case-page .gb-case-card-body h3 a:hover {
    color: var(--gb-blue);
}

.gb-case-page .gb-case-metrics {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 20px;
}

.gb-case-page .gb-case-metric {
    padding: 14px;
    border-radius: 16px;
    background: var(--gb-soft);
    border: 1px solid var(--gb-line);
}

.gb-case-page .gb-case-metric small {
    display: block;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: var(--gb-muted);
    margin-bottom: 6px;
}

.gb-case-page .gb-case-metric strong {
    font-size: 24px;
    line-height: 1;
    font-weight: 800;
    color: var(--gb-ink);
}

.gb-case-page .gb-case-metric strong em {
    font-style: normal;
    font-size: 16px;
    color: var(--gb-muted);
    font-weight: 700;
}

.gb-case-page .gb-case-card-link {
    margin-top: auto;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--gb-blue);
    font-weight: 800;
    font-size: 14px;
    text-decoration: none;
}

.gb-case-page .gb-case-card-link:hover {
    gap: 12px;
}

.gb-case-page .gb-case-cta {
    padding: 90px 20px;
    background:
        radial-gradient(circle at 14% 10%, rgba(225, 48, 108, 0.18), transparent 30%),
        radial-gradient(circle at 88% 8%, rgba(124, 58, 237, 0.2), transparent 30%),
        linear-gradient(135deg, #07111f, #0d1b2f);
    color: #fff;
    text-align: center;
}

.gb-case-page .gb-case-cta h2 {
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 800;
    letter-spacing: -1px;
    margin: 0 0 16px;
    color: #fff;
}

.gb-case-page .gb-case-cta p {
    max-width: 680px;
    margin: 0 auto 28px;
    color: rgba(255, 255, 255, 0.74);
    font-size: 17px;
    line-height: 1.7;
}

.gb-case-page .gb-case-cta-btns {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    justify-content: center;
}

.gb-case-page .gb-case-btn-main,
.gb-case-page .gb-case-btn-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 15px 24px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 15px;
    text-decoration: none;
    transition: 0.25s;
}

.gb-case-page .gb-case-btn-main {
    background: var(--gb-grad);
    color: #fff;
    box-shadow: 0 18px 34px rgba(37, 99, 235, 0.24);
}

.gb-case-page .gb-case-btn-main:hover {
    transform: translateY(-3px);
    color: #fff;
}

.gb-case-page .gb-case-btn-outline {
    background: rgba(255, 255, 255, 0.08);
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.22);
}

.gb-case-page .gb-case-btn-outline:hover {
    background: #fff;
    color: var(--gb-ink);
}

/* Details page */
.gb-case-page .gb-case-detail-hero {
    padding: 150px 20px 60px;
    background: var(--gb-hero-bg);
}

.gb-case-page .gb-case-detail-hero .gb-case-breadcrumb {
    justify-content: flex-start;
    margin-bottom: 20px;
}

.gb-case-page .gb-case-detail-tag {
    display: inline-flex;
    padding: 7px 14px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.08);
    color: var(--gb-blue);
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 16px;
}

.gb-case-page .gb-case-detail-hero h1 {
    font-size: clamp(32px, 4.5vw, 52px);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -1.2px;
    color: var(--gb-ink);
    margin: 0 0 20px;
    max-width: 900px;
}

.gb-case-page .gb-case-meta-row {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
}

.gb-case-page .gb-case-meta-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 14px;
    border-radius: 14px;
    background: #fff;
    border: 1px solid var(--gb-line);
    font-size: 14px;
    color: var(--gb-text);
    box-shadow: 0 8px 20px rgba(15, 23, 42, 0.04);
}

.gb-case-page .gb-case-meta-pill i {
    color: var(--gb-blue);
}

.gb-case-page .gb-case-detail-wrap {
    padding: 50px 0 90px;
}

.gb-case-page .gb-case-feature-img {
    border-radius: 24px;
    overflow: hidden;
    margin-bottom: 32px;
    border: 1px solid var(--gb-line);
    box-shadow: var(--gb-shadow);
}

.gb-case-page .gb-case-feature-img img {
    width: 100%;
    display: block;
}

.gb-case-page .gb-case-content-block {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 24px;
    padding: 28px;
    margin-bottom: 24px;
    box-shadow: 0 10px 28px rgba(15, 23, 42, 0.04);
}

.gb-case-page .gb-case-content-block h2 {
    font-size: 24px;
    font-weight: 800;
    color: var(--gb-ink);
    margin: 0 0 16px;
}

.gb-case-page .gb-case-content-block p {
    margin: 0 0 14px;
    color: var(--gb-muted);
    line-height: 1.75;
    font-size: 15px;
}

.gb-case-page .gb-case-content-block p:last-child {
    margin-bottom: 0;
}

.gb-case-page .gb-case-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    gap: 14px;
}

.gb-case-page .gb-case-list li {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    padding: 16px;
    border-radius: 18px;
    background: var(--gb-soft);
    border: 1px solid var(--gb-line);
    font-size: 14.5px;
    line-height: 1.65;
    color: var(--gb-muted);
}

.gb-case-page .gb-case-list li:before {
    content: "\2713";
    flex: 0 0 24px;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    background: rgba(37, 99, 235, 0.12);
    color: var(--gb-blue);
    font-weight: 900;
    font-size: 12px;
}

.gb-case-page .gb-case-list li strong {
    color: var(--gb-ink);
}

.gb-case-page .gb-case-outcome-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
}

.gb-case-page .gb-case-outcome-item {
    padding: 18px;
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(22, 199, 132, 0.06), rgba(37, 99, 235, 0.06));
    border: 1px solid rgba(37, 99, 235, 0.1);
    font-size: 14.5px;
    font-weight: 600;
    color: var(--gb-ink);
    line-height: 1.55;
}

.gb-case-page .gb-case-sidebar {
    position: sticky;
    top: 110px;
}

.gb-case-page .gb-case-sidebar-card {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 24px;
    padding: 24px;
    box-shadow: var(--gb-shadow);
    margin-bottom: 20px;
}

.gb-case-page .gb-case-sidebar-card h3 {
    margin: 0 0 18px;
    font-size: 18px;
    font-weight: 800;
    color: var(--gb-ink);
}

.gb-case-page .gb-case-info-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    gap: 12px;
}

.gb-case-page .gb-case-info-list li {
    display: flex;
    justify-content: space-between;
    gap: 16px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--gb-line);
    font-size: 14px;
}

.gb-case-page .gb-case-info-list li:last-child {
    border-bottom: 0;
    padding-bottom: 0;
}

.gb-case-page .gb-case-info-list span {
    color: var(--gb-muted);
    font-weight: 600;
}

.gb-case-page .gb-case-info-list strong {
    color: var(--gb-ink);
    font-weight: 700;
    text-align: right;
}

.gb-case-page .gb-case-highlight-metrics {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-top: 18px;
}

.gb-case-page .gb-case-highlight-box {
    padding: 16px;
    border-radius: 18px;
    background: var(--gb-soft);
    border: 1px solid var(--gb-line);
    text-align: center;
}

.gb-case-page .gb-case-highlight-box small {
    display: block;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: var(--gb-muted);
    margin-bottom: 6px;
}

.gb-case-page .gb-case-highlight-box strong {
    font-size: 28px;
    line-height: 1;
    color: var(--gb-ink);
}

.gb-case-page .gb-case-highlight-box em {
    font-style: normal;
    font-size: 14px;
    color: var(--gb-muted);
}

.gb-case-page .gb-case-nav-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-top: 10px;
}

.gb-case-page .gb-case-nav-card {
    display: block;
    padding: 20px;
    border-radius: 20px;
    border: 1px solid var(--gb-line);
    background: #fff;
    text-decoration: none;
    transition: 0.25s;
    box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
}

.gb-case-page .gb-case-nav-card:hover {
    border-color: rgba(37, 99, 235, 0.2);
    transform: translateY(-3px);
}

.gb-case-page .gb-case-nav-card small {
    display: block;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: var(--gb-blue);
    margin-bottom: 8px;
}

.gb-case-page .gb-case-nav-card span {
    display: block;
    font-size: 15px;
    font-weight: 700;
    color: var(--gb-ink);
    line-height: 1.45;
}

.gb-case-page .gb-case-nav-card.next {
    text-align: right;
}

@media (max-width: 991px) {
    .gb-case-page .gb-case-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    .gb-case-page .gb-case-sidebar {
        position: static;
    }
}

@media (max-width: 767px) {
    .gb-case-page .gb-case-hero,
    .gb-case-page .gb-case-detail-hero {
        padding-top: 120px;
    }
    .gb-case-page .gb-case-grid,
    .gb-case-page .gb-case-outcome-grid,
    .gb-case-page .gb-case-nav-row {
        grid-template-columns: 1fr;
    }
    .gb-case-page .gb-case-nav-card.next {
        text-align: left;
    }
}
</style>
