<?= $this->extend('layouts/layout_clear') ?>
<?= $this->section('content') ?>

<div class="login-page">
    <!-- Left: Branding Panel -->
    <div class="login-panel login-panel--brand d-none d-lg-flex">
        <div class="login-brand-content">
            <div class="logo-block logo-block--lg">
                <span class="logo-warmindo">Warmindo</span>
                <span class="logo-in">-In</span>
                <span class="logo-kampus">Kampus</span>
            </div>
            <p class="login-brand-desc">Portal Admin Warung Mie Instan<br>untuk Pejuang Deadline.</p>
            <div class="login-brand-quotes">
                <p class="quote-text">"Runtime Error? Isi Bensin Dulu."</p>
                <p class="quote-text">"Ngoding Sampe Subuh? Warmindo Selalu Ada."</p>
            </div>
        </div>
        <!-- Decorative SVG bowl -->
        <div class="login-decor">
            <svg viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg" class="bowl-svg">
                <ellipse cx="150" cy="140" rx="120" ry="40" fill="#59ccec" opacity="0.15"/>
                <ellipse cx="150" cy="130" rx="110" ry="50" fill="none" stroke="#59ccec" stroke-width="2" opacity="0.4"/>
                <path d="M60 130 Q150 170 240 130" stroke="#59ccec" stroke-width="2" fill="none" opacity="0.6"/>
                <!-- Steam lines -->
                <path d="M110 100 Q115 85 110 70" stroke="#59ccec" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.5">
                    <animate attributeName="opacity" values="0.5;0.1;0.5" dur="2s" repeatCount="indefinite"/>
                </path>
                <path d="M150 95 Q155 80 150 65" stroke="#59ccec" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.5">
                    <animate attributeName="opacity" values="0.5;0.1;0.5" dur="2.5s" repeatCount="indefinite"/>
                </path>
                <path d="M190 100 Q195 85 190 70" stroke="#59ccec" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.5">
                    <animate attributeName="opacity" values="0.5;0.1;0.5" dur="1.8s" repeatCount="indefinite"/>
                </path>
            </svg>
        </div>
    </div>

    <!-- Right: Login Form -->
    <div class="login-panel login-panel--form">
        <div class="login-form-box">
            <!-- Mobile logo -->
            <div class="d-lg-none mb-4 text-center">
                <div class="logo-block">
                    <span class="logo-warmindo">Warmindo</span>
                    <span class="logo-in">-In</span>
                    <span class="logo-kampus">Kampus</span>
                </div>
            </div>

            <h2 class="login-title">Selamat Datang</h2>
            <p class="login-subtitle">Masuk ke panel admin untuk mengelola warung.</p>

            <!-- Flash messages -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert-custom alert-custom--error">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <?= esc(session()->getFlashdata('error')) ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert-custom alert-custom--success">
                    <i class="bi bi-check-circle-fill"></i>
                    <?= esc(session()->getFlashdata('success')) ?>
                </div>
            <?php endif; ?>

            <form action="/login" method="POST" id="loginForm" novalidate>
                <?= csrf_field() ?>

                <div class="form-field">
                    <label for="username" class="form-label-custom">Username</label>
                    <div class="input-icon-wrap">
                        <i class="bi bi-person input-icon"></i>
                        <input type="text" id="username" name="username"
                               class="input-custom" placeholder="Masukkan username"
                               required autocomplete="username">
                    </div>
                </div>

                <div class="form-field">
                    <label for="password" class="form-label-custom">Password</label>
                    <div class="input-icon-wrap">
                        <i class="bi bi-lock input-icon"></i>
                        <input type="password" id="password" name="password"
                               class="input-custom" placeholder="Masukkan password"
                               required autocomplete="current-password">
                        <button type="button" class="toggle-pw" id="togglePw" aria-label="Tampilkan password">
                            <i class="bi bi-eye" id="togglePwIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-login" id="loginBtn">
                    <span class="btn-login-text">Masuk</span>
                    <span class="btn-login-spinner d-none">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Memproses...
                    </span>
                </button>

                <p class="login-hint">
                    <i class="bi bi-info-circle"></i>
                    Gunakan <strong>admin</strong> / <strong>admin123</strong>
                </p>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
