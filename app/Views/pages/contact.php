<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container-fluid px-4">
        <h1 class="page-header-title">Hubungi Kami</h1>
        <p class="page-header-sub">Ada pertanyaan, kritik, atau saran? Kami selalu mendengarkan.</p>
    </div>
</div>

<section class="section-pad">
    <div class="container-fluid px-4">
        <div class="contact-layout">

            <!-- Left: Form -->
            <div class="contact-form-col">
                <h2 class="contact-col-title">Kirim Pesan</h2>
                <p class="contact-col-sub">Isi formulir di bawah dan kami akan membalas secepat mungkin.</p>

                <form class="contact-form" id="contactForm" novalidate>

                    <div class="form-field">
                        <label for="c_name" class="form-label-custom">Nama Lengkap</label>
                        <div class="input-icon-wrap">
                            <i class="bi bi-person input-icon"></i>
                            <input type="text" id="c_name" name="name"
                                   class="input-custom" placeholder="Nama kamu...">
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="c_email" class="form-label-custom">Email</label>
                        <div class="input-icon-wrap">
                            <i class="bi bi-envelope input-icon"></i>
                            <input type="email" id="c_email" name="email"
                                   class="input-custom" placeholder="email@contoh.com">
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="c_subject" class="form-label-custom">Subjek</label>
                        <div class="input-icon-wrap">
                            <i class="bi bi-chat-text input-icon"></i>
                            <input type="text" id="c_subject" name="subject"
                                   class="input-custom" placeholder="Perihal pesan...">
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="c_message" class="form-label-custom">Pesan</label>
                        <textarea id="c_message" name="message" rows="5"
                                  class="input-custom input-textarea"
                                  placeholder="Tulis pesanmu di sini..."></textarea>
                    </div>

                    <button type="submit" class="btn-primary-accent w-100" id="contactBtn">
                        <i class="bi bi-send-fill"></i> Kirim Pesan
                    </button>

                    <!-- Success notification (hidden by default) -->
                    <div class="contact-success d-none" id="contactSuccess">
                        <i class="bi bi-check-circle-fill"></i>
                        Pesan berhasil terkirim! Kami akan segera membalas.
                    </div>
                </form>
            </div>

            <!-- Right: Map + Info -->
            <div class="contact-info-col">
                <h2 class="contact-col-title">Temukan Kami</h2>
                <p class="contact-col-sub">Kami ada di jantung kawasan kampus, mudah dijangkau dari mana saja.</p>

                <!-- SVG Map Placeholder -->
                <div class="map-container">
                    <!-- REPLACE: Embed Google Maps iframe atau gunakan image peta lokasi yang sesungguhnya -->
                    <svg viewBox="0 0 500 320" xmlns="http://www.w3.org/2000/svg" class="map-svg">
                        <!-- Map background -->
                        <rect width="500" height="320" fill="#111"/>
                        <!-- Grid roads -->
                        <line x1="0" y1="80" x2="500" y2="80" stroke="#1a1a1a" stroke-width="20"/>
                        <line x1="0" y1="160" x2="500" y2="160" stroke="#1a1a1a" stroke-width="20"/>
                        <line x1="0" y1="240" x2="500" y2="240" stroke="#1a1a1a" stroke-width="20"/>
                        <line x1="100" y1="0" x2="100" y2="320" stroke="#1a1a1a" stroke-width="20"/>
                        <line x1="250" y1="0" x2="250" y2="320" stroke="#1a1a1a" stroke-width="20"/>
                        <line x1="400" y1="0" x2="400" y2="320" stroke="#1a1a1a" stroke-width="20"/>
                        <!-- Road center lines -->
                        <line x1="0" y1="80" x2="500" y2="80" stroke="#222" stroke-width="1" stroke-dasharray="10,10"/>
                        <line x1="0" y1="160" x2="500" y2="160" stroke="#222" stroke-width="1" stroke-dasharray="10,10"/>
                        <line x1="0" y1="240" x2="500" y2="240" stroke="#222" stroke-width="1" stroke-dasharray="10,10"/>
                        <!-- Building blocks -->
                        <rect x="115" y="95" width="60" height="50" rx="4" fill="#1e1e1e" stroke="#2a2a2a" stroke-width="1"/>
                        <rect x="200" y="95" width="35" height="50" rx="4" fill="#1e1e1e" stroke="#2a2a2a" stroke-width="1"/>
                        <rect x="115" y="175" width="120" height="50" rx="4" fill="#1e1e1e" stroke="#2a2a2a" stroke-width="1"/>
                        <rect x="265" y="95" width="120" height="50" rx="4" fill="#1e1e1e" stroke="#2a2a2a" stroke-width="1"/>
                        <rect x="265" y="175" width="120" height="50" rx="4" fill="#1e1e1e" stroke="#2a2a2a" stroke-width="1"/>
                        <rect x="10" y="95" width="70" height="115" rx="4" fill="#1e1e1e" stroke="#2a2a2a" stroke-width="1"/>
                        <rect x="415" y="95" width="70" height="115" rx="4" fill="#1e1e1e" stroke="#2a2a2a" stroke-width="1"/>
                        <!-- Campus label -->
                        <rect x="115" y="175" width="120" height="50" rx="4" fill="#59ccec" opacity="0.1" stroke="#59ccec" stroke-width="1"/>
                        <text x="175" y="205" text-anchor="middle" fill="#59ccec" font-size="10" font-family="sans-serif">KAMPUS</text>
                        <!-- Location pin -->
                        <circle cx="200" cy="155" r="16" fill="#59ccec" opacity="0.2"/>
                        <circle cx="200" cy="155" r="8" fill="#59ccec"/>
                        <circle cx="200" cy="155" r="3" fill="#000"/>
                        <!-- Pulse animation -->
                        <circle cx="200" cy="155" r="16" fill="none" stroke="#59ccec" stroke-width="2">
                            <animate attributeName="r" values="16;28;16" dur="2s" repeatCount="indefinite"/>
                            <animate attributeName="opacity" values="0.6;0;0.6" dur="2s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Label -->
                        <rect x="130" y="125" width="130" height="22" rx="4" fill="#59ccec"/>
                        <text x="195" y="140" text-anchor="middle" fill="#000" font-size="11" font-family="sans-serif" font-weight="700">Warmindo Kampus-In</text>
                    </svg>
                    <div class="map-label">
                        <i class="bi bi-geo-alt-fill"></i>
                        Peta lokasi ilustratif — perbarui dengan koordinat asli
                    </div>
                </div>

                <!-- Contact Info Cards -->
                <div class="contact-info-cards mt-4">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">Alamat</div>
                            <div class="contact-info-value">Jl. Kampus Raya No. 42, depan Gerbang Utama, Semarang</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">Jam Operasional</div>
                            <div class="contact-info-value">Setiap Hari — 10:00 sampai 03:00</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">WhatsApp</div>
                            <div class="contact-info-value">+62 812-3456-7890</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">Instagram</div>
                            <div class="contact-info-value">@warmindo.kampusin</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>
