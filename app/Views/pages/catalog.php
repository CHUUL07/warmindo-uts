<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container-fluid px-4">
        <h1 class="page-header-title">Katalog Menu</h1>
        <p class="page-header-sub">Semua tersedia. Semua terjangkau. Semua enak.</p>
    </div>
</div>

<section class="section-pad">
    <div class="container-fluid px-4">

        <!-- Search + Filter Row -->
        <div class="catalog-controls">
            <div class="catalog-search-wrap">
                <i class="bi bi-search catalog-search-icon"></i>
                <input type="text" id="menuSearch" class="catalog-search-input"
                       placeholder="Cari menu...">
                <button type="button" class="catalog-search-clear d-none" id="clearSearch"
                        aria-label="Hapus pencarian">
                    <i class="bi bi-x-circle-fill"></i>
                </button>
            </div>
        </div>

        <!-- Category Tabs -->
        <div class="cat-tabs" role="tablist">
            <button class="cat-tab active" data-cat="semua" role="tab">
                <i class="bi bi-grid-fill"></i> Semua
            </button>
            <button class="cat-tab" data-cat="kuah" role="tab">
                <i class="bi bi-droplet-fill"></i> Kuah
            </button>
            <button class="cat-tab" data-cat="goreng" role="tab">
                <i class="bi bi-fire"></i> Goreng
            </button>
            <button class="cat-tab" data-cat="minuman" role="tab">
                <i class="bi bi-cup-straw"></i> Minuman
            </button>
        </div>

        <!-- No Results Message -->
        <div class="no-results d-none" id="noResults">
            <i class="bi bi-search fs-1 mb-3 d-block" style="color:var(--primary)"></i>
            <p>Menu tidak ditemukan. Coba kata kunci lain.</p>
        </div>

        <!-- Menu Grid -->
        <div class="catalog-grid" id="catalogGrid">
            <?php foreach ($menu_items as $item): ?>
            <div class="catalog-card" data-category="<?= esc($item['category']) ?>"
                 data-name="<?= esc(strtolower($item['name'])) ?>">
                <div class="catalog-card-img-wrap">
                    <?php
                    $imgMap = [
                        'kuah'    => 'placeholder-kuah.png',
                        'goreng'  => 'placeholder-menu.png',
                        'minuman' => 'placeholder-minuman.png',
                    ];
                    $imgFile = $imgMap[$item['category']] ?? 'placeholder-menu.png';
                    ?>
                    <!-- REPLACE: /images/<?= $imgFile ?> — Foto <?= esc($item['name']) ?> tampak atas atau 45 derajat -->
                    <img src="/images/<?= $imgFile ?>"
                         alt="<?= esc($item['name']) ?>"
                         class="catalog-card-img"
                         loading="lazy">
                    <span class="catalog-card-cat cat-<?= esc($item['category']) ?>">
                        <?= esc(ucfirst($item['category'])) ?>
                    </span>
                </div>
                <div class="catalog-card-body">
                    <h3 class="catalog-card-title"><?= esc($item['name']) ?></h3>
                    <p class="catalog-card-desc"><?= esc($item['desc']) ?></p>
                    <div class="catalog-card-footer">
                        <span class="catalog-card-price"><?= esc($item['price']) ?></span>
                        <button class="catalog-card-order" type="button"
                                onclick="window.location.href='/contact'">
                            <i class="bi bi-bag-plus"></i> Order
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Result count -->
        <div class="catalog-count mt-4">
            Menampilkan <span id="resultCount"><?= count($menu_items) ?></span> menu.
        </div>

    </div>
</section>

<?= $this->endSection() ?>
