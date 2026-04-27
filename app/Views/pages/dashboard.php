<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<!-- ─── Hero Section ──────────────────────────────────────────────── -->
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <div class="hero-badge">
                <i class="bi bi-wifi"></i> Online & Siap Layani
            </div>
            <h1 class="hero-title" id="heroTagline">
                <?= esc($taglines[0]) ?>
            </h1>
            <p class="hero-desc">
                Warmindo Kampus-In — warung mie instan favorit para mahasiswa IT.
                Buka dari siang sampai dinihari. Harga kos-kosan, rasa restoran.
            </p>
            <div class="hero-actions">
                <a href="/catalog" class="btn-primary-accent">
                    <i class="bi bi-journal-text"></i> Lihat Menu
                </a>
                <a href="/promos" class="btn-outline-accent">
                    <i class="bi bi-ticket-perforated"></i> Cek Promo
                </a>
            </div>
            <!-- Stats row -->
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">12+</span>
                    <span class="stat-label">Menu Pilihan</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">24H</span>
                    <span class="stat-label">Open Terus</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">Rp 5K</span>
                    <span class="stat-label">Mulai Dari</span>
                </div>
            </div>
        </div>

        <div class="hero-image-wrap">
            <!-- Floating main image -->
            <!-- REPLACE: /images/hero-bowl.png — Foto mangkuk mi indomie rebus spesial dari atas (hero image utama) -->
            <img src="/images/placeholder-hero.png"
                alt="Indomie Warmindo Kampus-In"
                class="hero-float-img">
            <!-- Glow ring behind image -->
            <div class="hero-glow-ring"></div>
        </div>
    </div>

    <!-- Scroll Mouse Indicator -->
    <div class="scroll-indicator" aria-label="Scroll ke bawah">
        <svg class="mouse-svg" viewBox="0 0 30 50" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="1" width="28" height="48" rx="14" fill="none" stroke="#59ccec" stroke-width="2" />
            <circle class="mouse-dot" cx="15" cy="14" r="4" fill="#59ccec">
                <animate attributeName="cy" values="14;32;14" dur="1.6s" repeatCount="indefinite" calcMode="ease-in-out" />
                <animate attributeName="opacity" values="1;0.2;1" dur="1.6s" repeatCount="indefinite" />
            </circle>
        </svg>
        <span class="scroll-label">Scroll</span>
    </div>
</section>

<!-- ─── Feature Cards ─────────────────────────────────────────────── -->
<section class="section-pad">
    <div class="container-fluid px-4">
        <div class="section-header">
            <h2 class="section-title">Kenapa Kampus-In?</h2>
            <p class="section-sub">Karena anak IT butuh lebih dari sekadar makan.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h3 class="feature-title">Serba Cepat</h3>
                    <p class="feature-desc">Pesanan siap dalam 5 menit. Karena waktu compile-mu lebih lama dari itu.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <h3 class="feature-title">Harga Ramah Dompet</h3>
                    <p class="feature-desc">Mulai 5 ribu. Sesuai budget mahasiswa yang UKTnya habis buat bayar kos.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-moon-stars-fill"></i>
                    </div>
                    <h3 class="feature-title">Buka 24 Jam</h3>
                    <p class="feature-desc">Jam 3 pagi deadline belum selesai? Kami masih buka. Selalu.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-wifi"></i>
                    </div>
                    <h3 class="feature-title">WiFi Kenceng</h3>
                    <p class="feature-desc">Koneksi stabil buat push ke GitHub sambil makan. Prioritas developer.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── Menu Highlight ────────────────────────────────────────────── -->
<section class="section-pad section-dark-alt">
    <div class="container-fluid px-4">
        <div class="section-header">
            <h2 class="section-title">Menu Terpopuler</h2>
            <p class="section-sub">Favorit para coder yang sudah battle-tested.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-card-img-wrap">
                        <!-- REPLACE: /images/menu-rebus.png — Foto Indomie Rebus Spesial tampak atas -->
                        <img src="/images/placeholder-kuah.png"
                            alt="Indomie Rebus Spesial"
                            class="menu-card-img">
                        <div class="menu-card-badge">Best Seller</div>
                    </div>
                    <div class="menu-card-body">
                        <h4 class="menu-card-title">Indomie Rebus Spesial</h4>
                        <p class="menu-card-desc">Kuah gurih + telur + sayuran segar. Comfort food nomor satu.</p>
                        <span class="menu-card-price">Rp 7.000</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-card-img-wrap">
                        <!-- REPLACE: /images/menu-goreng.png — Foto Indomie Goreng Spesial tampak atas -->
                        <img src="/images/placeholder-menu.png"
                            alt="Indomie Goreng Spesial"
                            class="menu-card-img">
                        <div class="menu-card-badge menu-card-badge--new">Favorit</div>
                    </div>
                    <div class="menu-card-body">
                        <h4 class="menu-card-title">Indomie Goreng Spesial</h4>
                        <p class="menu-card-desc">Kering, smoky, dengan telur ceplok dan sosis. Legendaris.</p>
                        <span class="menu-card-price">Rp 7.000</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-card-img-wrap">
                        <!-- REPLACE: /images/menu-kopi.png — Foto kopi susu hangat dalam gelas -->
                        <img src="/images/placeholder-minuman.png"
                            alt="Kopi Susu Hangat"
                            class="menu-card-img">
                        <div class="menu-card-badge menu-card-badge--drink">Minuman</div>
                    </div>
                    <div class="menu-card-body">
                        <h4 class="menu-card-title">Kopi Susu Hangat</h4>
                        <p class="menu-card-desc">Robusta lokal dengan susu kental manis. Bahan bakar deadline.</p>
                        <span class="menu-card-price">Rp 6.000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/catalog" class="btn-primary-accent">
                <i class="bi bi-arrow-right"></i> Lihat Semua Menu
            </a>
        </div>
    </div>
</section>

<!-- ─── IT Quotes Ticker ──────────────────────────────────────────── -->
<section class="quotes-ticker-section">
    <div class="ticker-track">
        <div class="ticker-inner">
            <?php foreach (array_merge($taglines, $taglines) as $q): ?>
                <span class="ticker-item"><?= esc($q) ?> <span class="ticker-dot">&#8226;</span></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>