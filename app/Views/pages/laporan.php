<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container-fluid px-4">
        <h1 class="page-header-title">Laporan Penjualan</h1>
        <p class="page-header-sub">Data transaksi harian warung — hanya bisa diakses oleh Admin.</p>
    </div>
</div>

<section class="section-pad">
    <div class="container-fluid px-4">

        <!-- ─── Summary Cards ──────────────────────────────────── -->
        <div class="report-summary-grid">
            <div class="report-card">
                <div class="report-card-icon">
                    <i class="bi bi-cash-stack"></i>
                </div>
                <div class="report-card-body">
                    <span class="report-card-label">Total Pendapatan</span>
                    <span class="report-card-value"><?= esc($summary['total_revenue']) ?></span>
                </div>
            </div>
            <div class="report-card">
                <div class="report-card-icon report-card-icon--blue">
                    <i class="bi bi-receipt"></i>
                </div>
                <div class="report-card-body">
                    <span class="report-card-label">Total Transaksi</span>
                    <span class="report-card-value"><?= esc($summary['total_orders']) ?></span>
                </div>
            </div>
            <div class="report-card">
                <div class="report-card-icon report-card-icon--orange">
                    <i class="bi bi-trophy"></i>
                </div>
                <div class="report-card-body">
                    <span class="report-card-label">Menu Terlaris</span>
                    <span class="report-card-value report-card-value--sm"><?= esc($summary['top_item']) ?></span>
                </div>
            </div>
            <div class="report-card">
                <div class="report-card-icon report-card-icon--teal">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <div class="report-card-body">
                    <span class="report-card-label">Rata-rata Nilai Order</span>
                    <span class="report-card-value"><?= esc($summary['avg_order_value']) ?></span>
                </div>
            </div>
        </div>

        <!-- ─── Admin badge ────────────────────────────────────── -->
        <div class="report-admin-bar mt-5 mb-4">
            <i class="bi bi-shield-lock-fill"></i>
            <span>Data ini hanya terlihat oleh Administrator yang sedang login.</span>
        </div>

        <!-- ─── Sales Table ────────────────────────────────────── -->
        <div class="report-table-wrap">
            <div class="report-table-header">
                <h2 class="report-table-title">Rincian Transaksi</h2>
                <span class="report-table-count"><?= count($sales_data) ?> entri</span>
            </div>
            <div class="report-table-scroll">
                <table class="report-table">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Nama Menu</th>
                            <th>Kategori</th>
                            <th class="text-end">Qty</th>
                            <th class="text-end">Harga Satuan</th>
                            <th class="text-end">Total</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sales_data as $row): ?>
                        <tr>
                            <td class="report-td-id"><?= esc($row['id']) ?></td>
                            <td class="report-td-item"><?= esc($row['item']) ?></td>
                            <td>
                                <span class="report-cat-badge report-cat-<?= esc($row['category']) ?>">
                                    <?= esc(ucfirst($row['category'])) ?>
                                </span>
                            </td>
                            <td class="text-end report-td-num"><?= esc($row['qty']) ?></td>
                            <td class="text-end report-td-num">
                                Rp <?= esc(number_format($row['unit_price'], 0, ',', '.')) ?>
                            </td>
                            <td class="text-end report-td-total">
                                Rp <?= esc(number_format($row['total'], 0, ',', '.')) ?>
                            </td>
                            <td class="text-center">
                                <span class="report-status report-status--<?= esc($row['status']) ?>">
                                    <?php if ($row['status'] === 'selesai'): ?>
                                        <i class="bi bi-check-circle-fill"></i>
                                    <?php else: ?>
                                        <i class="bi bi-hourglass-split"></i>
                                    <?php endif; ?>
                                    <?= esc(ucfirst($row['status'])) ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="report-tfoot-label">Grand Total</td>
                            <td class="text-end report-tfoot-total"><?= esc($summary['total_revenue']) ?></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- ─── Bar Chart (pure CSS) ───────────────────────────── -->
        <div class="report-chart-wrap mt-5">
            <h3 class="report-chart-title">Distribusi Penjualan per Kategori</h3>
            <div class="report-bars">
                <div class="report-bar-row">
                    <span class="report-bar-label">Goreng</span>
                    <div class="report-bar-track">
                        <div class="report-bar-fill report-bar-fill--goreng" style="width:42%">
                            <span class="report-bar-pct">42%</span>
                        </div>
                    </div>
                </div>
                <div class="report-bar-row">
                    <span class="report-bar-label">Minuman</span>
                    <div class="report-bar-track">
                        <div class="report-bar-fill report-bar-fill--minuman" style="width:35%">
                            <span class="report-bar-pct">35%</span>
                        </div>
                    </div>
                </div>
                <div class="report-bar-row">
                    <span class="report-bar-label">Kuah</span>
                    <div class="report-bar-track">
                        <div class="report-bar-fill report-bar-fill--kuah" style="width:23%">
                            <span class="report-bar-pct">23%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>