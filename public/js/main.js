/* ═══════════════════════════════════════════════════════════════
   WARMINDO KAMPUS-IN — main.js
   Handles: login spinner, catalog filter/search, voucher copy,
            contact form, password toggle, hero tagline cycle
═══════════════════════════════════════════════════════════════ */

'use strict';

document.addEventListener('DOMContentLoaded', function () {

    /* ─── Login: Bootstrap Loading Spinner on submit ──────────── */
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function () {
            const btn    = document.getElementById('loginBtn');
            const text   = btn?.querySelector('.btn-login-text');
            const spin   = btn?.querySelector('.btn-login-spinner');
            if (btn && text && spin) {
                text.classList.add('d-none');
                spin.classList.remove('d-none');
                btn.disabled = true;
            }
        });
    }

    /* ─── Password Toggle ─────────────────────────────────────── */
    const togglePw   = document.getElementById('togglePw');
    const toggleIcon = document.getElementById('togglePwIcon');
    const pwField    = document.getElementById('password');
    if (togglePw && pwField) {
        togglePw.addEventListener('click', function () {
            const isText = pwField.getAttribute('type') === 'text';
            pwField.setAttribute('type', isText ? 'password' : 'text');
            if (toggleIcon) {
                toggleIcon.className = isText ? 'bi bi-eye' : 'bi bi-eye-slash';
            }
        });
    }

    /* ─── Catalog: Category Tabs ──────────────────────────────── */
    const catTabs   = document.querySelectorAll('.cat-tab');
    const cards     = document.querySelectorAll('.catalog-card');
    const noResults = document.getElementById('noResults');
    const countEl   = document.getElementById('resultCount');

    function filterCatalog() {
        const activeCat   = document.querySelector('.cat-tab.active')?.dataset.cat || 'semua';
        const searchVal   = (document.getElementById('menuSearch')?.value || '').toLowerCase().trim();
        let   visible     = 0;

        cards.forEach(card => {
            const cat  = card.dataset.category || '';
            const name = card.dataset.name     || '';
            const catMatch  = activeCat === 'semua' || cat === activeCat;
            const nameMatch = !searchVal || name.includes(searchVal);

            if (catMatch && nameMatch) {
                card.classList.remove('hidden');
                visible++;
            } else {
                card.classList.add('hidden');
            }
        });

        if (noResults) noResults.classList.toggle('d-none', visible > 0);
        if (countEl)   countEl.textContent = visible;
    }

    catTabs.forEach(tab => {
        tab.addEventListener('click', function () {
            catTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            filterCatalog();
        });
    });

    /* ─── Catalog: Search Input ───────────────────────────────── */
    const searchInput = document.getElementById('menuSearch');
    const clearBtn    = document.getElementById('clearSearch');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            filterCatalog();
            if (clearBtn) clearBtn.classList.toggle('d-none', !this.value);
        });
    }
    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            if (searchInput) { searchInput.value = ''; searchInput.focus(); }
            this.classList.add('d-none');
            filterCatalog();
        });
    }

    /* ─── Voucher Code Copy ───────────────────────────────────── */
    window.copyVoucherCode = function (btn, code) {
        if (!navigator.clipboard) {
            // Fallback for older browsers
            const ta = document.createElement('textarea');
            ta.value = code;
            document.body.appendChild(ta);
            ta.select();
            document.execCommand('copy');
            document.body.removeChild(ta);
        } else {
            navigator.clipboard.writeText(code).catch(() => {});
        }
        const icon = btn.querySelector('i');
        if (icon) {
            icon.className = 'bi bi-clipboard-check';
            btn.style.color = 'var(--primary)';
            setTimeout(() => {
                icon.className = 'bi bi-clipboard';
                btn.style.color = '';
            }, 1800);
        }
    };

    /* ─── Contact Form (frontend demo) ───────────────────────── */
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const successEl = document.getElementById('contactSuccess');
            const submitBtn = contactForm.querySelector('[type=submit]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Mengirim...';
            }
            setTimeout(() => {
                if (successEl)  successEl.classList.remove('d-none');
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="bi bi-send-fill"></i> Kirim Pesan';
                }
                contactForm.reset();
            }, 1200);
        });
    }

    /* ─── Hero Tagline Cycling ────────────────────────────────── */
    const taglineEl = document.getElementById('heroTagline');
    if (taglineEl) {
        const taglines = [
            'Runtime Error? Isi Bensin Dulu.',
            'Deadline Besok? Makan Dulu Biar Mikir Jernih.',
            'Bug Nggak Mau Selesai? Coba Setelah Makan Indomie.',
            'Ngoding Sampe Subuh? Warmindo Selalu Ada.',
            '404: Semangat Not Found — Tapi Indomie Selalu Ready.',
        ];
        let idx = 0;

        setInterval(() => {
            idx = (idx + 1) % taglines.length;
            taglineEl.style.opacity = '0';
            taglineEl.style.transform = 'translateY(6px)';
            setTimeout(() => {
                taglineEl.textContent = taglines[idx];
                taglineEl.style.opacity = '1';
                taglineEl.style.transform = 'translateY(0)';
            }, 300);
        }, 3500);

        // Add transition style dynamically
        taglineEl.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    }

    /* ─── Sticky Header shadow on scroll ─────────────────────── */
    const header = document.getElementById('siteHeader');
    if (header) {
        window.addEventListener('scroll', function () {
            header.style.boxShadow = window.scrollY > 10
                ? '0 2px 16px rgba(0,0,0,0.6)'
                : 'none';
        }, { passive: true });
    }

});
