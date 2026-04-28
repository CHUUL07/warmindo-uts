<?php $active = $active_menu ?? ''; ?>
<nav class="sidebar-nav">
    <ul class="list-unstyled mb-0">

        <!-- Always visible: Guest + Admin -->
        <li>
            <a href="/dashboard" class="sidebar-link <?= ($active === 'dashboard') ? 'active' : '' ?>">
                <i class="bi bi-grid-1x2"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/history" class="sidebar-link <?= ($active === 'history') ? 'active' : '' ?>">
                <i class="bi bi-clock-history"></i>
                <span>Sejarah</span>
            </a>
        </li>
        <li>
            <a href="/catalog" class="sidebar-link <?= ($active === 'catalog') ? 'active' : '' ?>">
                <i class="bi bi-journal-text"></i>
                <span>Katalog Menu</span>
            </a>
        </li>

        <?php if (session()->get('isLoggedIn')): ?>
            <!-- Admin-only menus -->
            <li>
                <a href="/promos" class="sidebar-link <?= ($active === 'promos') ? 'active' : '' ?>">
                    <i class="bi bi-ticket-perforated"></i>
                    <span>Promo &amp; Voucher</span>
                </a>
            </li>
            <li>
                <a href="/contact" class="sidebar-link <?= ($active === 'contact') ? 'active' : '' ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Hubungi Kami</span>
                </a>
            </li>
            <li>
                <a href="/laporan" class="sidebar-link <?= ($active === 'laporan') ? 'active' : '' ?>">
                    <i class="bi bi-bar-chart-line"></i>
                    <span>Laporan Penjualan</span>
                </a>
            </li>
            <li class="sidebar-divider"></li>
            <li>
                <a href="/logout" class="sidebar-link sidebar-link--logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        <?php else: ?>
            <!-- Guest: Login Admin -->
            <li class="sidebar-divider"></li>
            <li>
                <a href="/login" class="sidebar-link sidebar-link--login">
                    <i class="bi bi-person-lock"></i>
                    <span>Login Admin</span>
                </a>
            </li>
        <?php endif; ?>

    </ul>

    <div class="sidebar-user">
        <?php if (session()->get('isLoggedIn')): ?>
            <i class="bi bi-person-circle fs-4"></i>
            <div>
                <div class="fw-semibold small"><?= esc(session()->get('fullname') ?? 'Administrator') ?></div>
                <div class="text-muted" style="font-size:0.7rem;"><?= esc(session()->get('username') ?? 'admin') ?></div>
            </div>
        <?php else: ?>
            <i class="bi bi-person-circle fs-4" style="color:var(--text-dark)"></i>
            <div>
                <div class="fw-semibold small" style="color:var(--text-muted)">Mode Tamu</div>
                <div style="font-size:0.7rem;color:var(--text-dark);">Belum login</div>
            </div>
        <?php endif; ?>
    </div>
</nav>