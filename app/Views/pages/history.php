<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container-fluid px-4">
        <h1 class="page-header-title">Sejarah Kami</h1>
        <p class="page-header-sub">Dari warung kecil pinggir kampus, menuju legenda indomie mahasiswa.</p>
    </div>
</div>

<!-- ─── Split Section 1: Awal Berdiri ─────────────────────────────── -->
<section class="section-pad">
    <div class="container-fluid px-4">
        <div class="split-row">
            <div class="split-text">
                <span class="split-year">2018</span>
                <h2 class="split-title">Awal Mula: Gerobak & Satu Kompor</h2>
                <p class="split-desc">
                    Warmindo Kampus-In lahir dari sebuah gerobak sederhana di sudut jalan
                    depan gerbang kampus pada tahun 2018. Pak Budi, sang pendiri, hanya
                    bermodalkan satu kompor gas, selusin bungkus indomie, dan semangat
                    untuk melayani mahasiswa yang sering kelaparan di malam hari.
                </p>
                <p class="split-desc">
                    Dengan harga yang sangat terjangkau, warung kecil ini langsung mendapat
                    tempat di hati para mahasiswa. Antrian pertama muncul di minggu kedua —
                    dan sejak saat itu, keramaian tidak pernah berhenti.
                </p>
            </div>
            <div class="split-image">
                <!-- REPLACE: /images/history-1.png — Foto gerobak warmindo atau suasana warung mie lama (vintage/retro feel) -->
                <img src="/images/placeholder-history.png"
                    alt="Gerobak awal Warmindo Kampus-In tahun 2018"
                    class="split-img">
                <div class="split-img-caption">Gerobak pertama kami, 2018.</div>
            </div>
        </div>
    </div>
</section>

<!-- ─── Split Section 2: Berkembang ──────────────────────────────── -->
<section class="section-pad section-dark-alt">
    <div class="container-fluid px-4">
        <div class="split-row split-row--reverse">
            <div class="split-image">
                <!-- REPLACE: /images/history-2.png — Foto warung permanen / bangunan warmindo yang sudah ada meja kursi -->
                <img src="/images/placeholder-history.png"
                    alt="Warung tetap Warmindo Kampus-In tahun 2020"
                    class="split-img">
                <div class="split-img-caption">Warung tetap pertama kami, 2020.</div>
            </div>
            <div class="split-text">
                <span class="split-year">2020</span>
                <h2 class="split-title">Memiliki Tempat Sendiri</h2>
                <p class="split-desc">
                    Setelah dua tahun berjualan dari gerobak, Warmindo Kampus-In akhirnya
                    menyewa sebuah lapak permanen. Ditambah meja dan kursi plastik yang
                    ikonik, warung ini menjadi tempat nongkrong favorit mahasiswa dari
                    berbagai jurusan.
                </p>
                <p class="split-desc">
                    Di sini pulalah tradisi "Makan Sambil Ngoding" dimulai. Beberapa
                    mahasiswa IT membawa laptop dan mengerjakan tugas di meja warung hingga
                    larut malam — disambut hangat oleh Pak Budi yang bahkan menyediakan
                    colokan listrik tambahan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ─── Split Section 3: Era Digital ─────────────────────────────── -->
<section class="section-pad">
    <div class="container-fluid px-4">
        <div class="split-row">
            <div class="split-text">
                <span class="split-year">2023</span>
                <h2 class="split-title">Masuk Era Digital</h2>
                <p class="split-desc">
                    Melihat perkembangan zaman, Warmindo Kampus-In mulai berbenah secara
                    digital. Hadir di media sosial, mendaftarkan diri ke platform pesan
                    antar online, dan kini memiliki website profil yang Anda lihat ini —
                    dibangun oleh mahasiswa IT pelanggan setia kami sendiri.
                </p>
                <p class="split-desc">
                    WiFi dipasang. Colokan ditambah. Menu digital dipajang. Kampus-In
                    bertransformasi menjadi warmindo modern tanpa kehilangan harga dan
                    kehangatan yang selama ini menjadi ciri khasnya.
                </p>
            </div>
            <div class="split-image">
                <!-- REPLACE: /images/history-3.png — Foto suasana warung modern dengan pelanggan ngoding dan wifi -->
                <img src="/images/placeholder-history.png"
                    alt="Suasana Warmindo Kampus-In di era digital 2023"
                    class="split-img">
                <div class="split-img-caption">Era digital dimulai, 2023.</div>
            </div>
        </div>
    </div>
</section>

<!-- ─── Timeline Bar ───────────────────────────────────────────────── -->
<section class="section-pad section-dark-alt">
    <div class="container-fluid px-4">
        <div class="section-header">
            <h2 class="section-title">Perjalanan Waktu</h2>
        </div>
        <div class="timeline mt-5">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2018</div>
                <div class="timeline-event">Berdiri sebagai warung gerobak kaki lima.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2019</div>
                <div class="timeline-event">Menu berkembang — Mie Goreng Jawa dan Nasi Goreng hadir.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2020</div>
                <div class="timeline-event">Pindah ke warung permanen dengan 10 meja.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2021</div>
                <div class="timeline-event">Pertama kali masuk platform ojek online.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2022</div>
                <div class="timeline-event">Pasang WiFi gratis untuk pelanggan.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2023</div>
                <div class="timeline-event">Website profil digital diluncurkan.</div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>