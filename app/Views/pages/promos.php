<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container-fluid px-4">
        <h1 class="page-header-title">Promo & Voucher</h1>
        <p class="page-header-sub">Hemat lebih, makan lebih banyak. Untuk kamu yang selalu on budget.</p>
    </div>
</div>

<section class="section-pad">
    <div class="container-fluid px-4">

        <!-- Alert info -->
        <div class="promo-info-bar">
            <i class="bi bi-info-circle-fill"></i>
            <span>Tunjukkan kode voucher kepada kasir sebelum memesan. Tidak dapat digabung dengan promo lain.</span>
        </div>

        <!-- Voucher Grid -->
        <div class="voucher-grid mt-5">
            <?php foreach ($promos as $promo): ?>
            <div class="voucher-card">
                <!-- Left notch -->
                <div class="voucher-notch voucher-notch--left"></div>
                <!-- Right notch -->
                <div class="voucher-notch voucher-notch--right"></div>

                <div class="voucher-left">
                    <span class="voucher-discount"><?= esc($promo['discount']) ?></span>
                    <span class="voucher-title"><?= esc($promo['title']) ?></span>
                </div>

                <div class="voucher-divider">
                    <div class="voucher-divider-line"></div>
                    <div class="voucher-divider-scissors">
                        <i class="bi bi-scissors"></i>
                    </div>
                </div>

                <div class="voucher-right">
                    <p class="voucher-desc"><?= esc($promo['desc']) ?></p>
                    <div class="voucher-meta">
                        <span class="voucher-meta-item">
                            <i class="bi bi-calendar3"></i> <?= esc($promo['valid']) ?>
                        </span>
                        <span class="voucher-meta-item">
                            <i class="bi bi-bag-check"></i> <?= esc($promo['min_order']) ?>
                        </span>
                    </div>
                    <div class="voucher-code-wrap">
                        <span class="voucher-code-label">Kode Voucher:</span>
                        <span class="voucher-code" data-code="<?= esc($promo['code']) ?>">
                            <?= esc($promo['code']) ?>
                        </span>
                        <button class="voucher-copy-btn" type="button"
                                onclick="copyVoucherCode(this, '<?= esc($promo['code']) ?>')"
                                aria-label="Salin kode voucher">
                            <i class="bi bi-clipboard"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Terms section -->
        <div class="promo-terms mt-5">
            <h3 class="promo-terms-title">Syarat & Ketentuan Voucher</h3>
            <ul class="promo-terms-list">
                <li>Voucher hanya berlaku untuk pembelian langsung di warung (tidak berlaku untuk delivery).</li>
                <li>Satu voucher per transaksi. Tidak dapat digabungkan dengan voucher lain.</li>
                <li>Pengelola berhak membatalkan voucher jika terbukti disalahgunakan.</li>
                <li>Pertanyaan lebih lanjut, hubungi kami melalui halaman Kontak.</li>
            </ul>
        </div>

    </div>
</section>

<?= $this->endSection() ?>
