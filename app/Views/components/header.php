<?php $active = $active_menu ?? ''; ?>
<header class="site-header" id="siteHeader">
    <nav class="navbar navbar-dark px-3 px-md-4">
        <div class="d-flex align-items-center gap-3">
            <!-- Hamburger — triggers Offcanvas Sidebar -->
            <button class="hamburger-btn d-lg-none" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar"
                    aria-controls="mobileSidebar" aria-label="Buka menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="4" width="24" height="2" rx="1" fill="white"/>
                    <rect y="11" width="24" height="2" rx="1" fill="white"/>
                    <rect y="18" width="24" height="2" rx="1" fill="white"/>
                </svg>
            </button>

            <!-- ─── LOGO: Warmindo / Kampus / -In ─────────────────── -->
            <a href="/dashboard" class="logo-wrap text-decoration-none">
                <div class="logo-block">
                    <span class="logo-warmindo">Warmindo</span>
                    <span class="logo-in">-In</span>
                    <span class="logo-kampus">Kampus</span>
                </div>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <ul class="nav-menu d-none d-lg-flex align-items-center list-unstyled mb-0 gap-1">
            <li>
                <a href="/dashboard" class="nav-link-custom <?= ($active === 'dashboard') ? 'active' : '' ?>">
                    <i class="bi bi-grid-1x2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="/history" class="nav-link-custom <?= ($active === 'history') ? 'active' : '' ?>">
                    <i class="bi bi-clock-history"></i> Sejarah
                </a>
            </li>
            <li>
                <a href="/catalog" class="nav-link-custom <?= ($active === 'catalog') ? 'active' : '' ?>">
                    <i class="bi bi-journal-text"></i> Katalog
                </a>
            </li>
            <li>
                <a href="/promos" class="nav-link-custom <?= ($active === 'promos') ? 'active' : '' ?>">
                    <i class="bi bi-ticket-perforated"></i> Promo
                </a>
            </li>
            <li>
                <a href="/contact" class="nav-link-custom <?= ($active === 'contact') ? 'active' : '' ?>">
                    <i class="bi bi-envelope"></i> Kontak
                </a>
            </li>
            <li class="ms-2">
                <a href="/logout" class="btn-logout">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>

        <!-- Mobile user icon -->
        <div class="d-flex d-lg-none align-items-center gap-2">
            <span class="text-muted small"><?= esc(session()->get('username') ?? 'admin') ?></span>
            <a href="/logout" class="btn-logout btn-logout-sm">
                <i class="bi bi-box-arrow-right"></i>
            </a>
        </div>
    </nav>
</header>
