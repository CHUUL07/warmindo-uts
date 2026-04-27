<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        return redirect()->to('/login');
    }

    public function dashboard()
    {
        $data = [
            'title'       => 'Dashboard',
            'active_menu' => 'dashboard',
            'taglines'    => [
                'Runtime Error? Isi Bensin Dulu.',
                'Deadline Besok? Makan Dulu Biar Mikir Jernih.',
                'Bug Nggak Mau Selesai? Coba Setelah Makan Indomie.',
                'Ngoding Sampe Subuh? Warmindo Selalu Ada.',
                '404: Semangat Not Found — Tapi Indomie Selalu Ready.',
            ],
        ];
        return view('pages/dashboard', $data);
    }

    public function history()
    {
        $data = [
            'title'       => 'Sejarah Kami',
            'active_menu' => 'history',
        ];
        return view('pages/history', $data);
    }

    public function catalog()
    {
        $data = [
            'title'       => 'Katalog Menu',
            'active_menu' => 'catalog',
            'menu_items'  => $this->getMenuItems(),
        ];
        return view('pages/catalog', $data);
    }

    public function promos()
    {
        $data = [
            'title'       => 'Promo & Voucher',
            'active_menu' => 'promos',
            'promos'      => $this->getPromos(),
        ];
        return view('pages/promos', $data);
    }

    public function contact()
    {
        $data = [
            'title'       => 'Hubungi Kami',
            'active_menu' => 'contact',
        ];
        return view('pages/contact', $data);
    }

    // ─── Static Data ───────────────────────────────────────────────
    private function getMenuItems(): array
    {
        return [
            ['name' => 'Indomie Rebus Original',   'category' => 'kuah',    'price' => 'Rp 5.000',  'desc' => 'Kuah gurih klasik, comfort food sejuta mahasiswa.'],
            ['name' => 'Indomie Rebus Spesial',     'category' => 'kuah',    'price' => 'Rp 7.000',  'desc' => 'Ditambah telur, sayuran, dan kerupuk renyah.'],
            ['name' => 'Mie Ayam Kuah',             'category' => 'kuah',    'price' => 'Rp 12.000', 'desc' => 'Mie lembut dengan kaldu ayam kaya rempah.'],
            ['name' => 'Soto Ayam',                 'category' => 'kuah',    'price' => 'Rp 13.000', 'desc' => 'Kuah bening segar dengan irisan ayam dan bihun.'],
            ['name' => 'Indomie Goreng Original',   'category' => 'goreng',  'price' => 'Rp 5.000',  'desc' => 'Kering, smoky, favorit anak kos yang legendaris.'],
            ['name' => 'Indomie Goreng Spesial',    'category' => 'goreng',  'price' => 'Rp 7.000',  'desc' => 'Tambah telur ceplok dan sosis mini goreng.'],
            ['name' => 'Nasi Goreng Kampus',        'category' => 'goreng',  'price' => 'Rp 10.000', 'desc' => 'Nasi goreng sederhana penuh cita rasa, harga bersahabat.'],
            ['name' => 'Mie Goreng Jawa',           'category' => 'goreng',  'price' => 'Rp 11.000', 'desc' => 'Bumbu kecap Jawa autentik, wangi dan lezat.'],
            ['name' => 'Es Teh Manis',              'category' => 'minuman', 'price' => 'Rp 3.000',  'desc' => 'Teh manis segar, teman setia begadang malam.'],
            ['name' => 'Es Jeruk Peras',            'category' => 'minuman', 'price' => 'Rp 5.000',  'desc' => 'Jeruk segar diperas langsung, vitamin C boost.'],
            ['name' => 'Kopi Susu Hangat',          'category' => 'minuman', 'price' => 'Rp 6.000',  'desc' => 'Kopi robusta lokal dengan susu kental manis.'],
            ['name' => 'Jus Alpukat',               'category' => 'minuman', 'price' => 'Rp 8.000',  'desc' => 'Alpukat segar diblender creamy, penambah energi.'],
        ];
    }

    private function getPromos(): array
    {
        return [
            [
                'code'       => 'NGODING25',
                'title'      => 'Diskon Anak IT',
                'desc'       => 'Tunjukkan KTM Fakultas Teknik dan dapatkan diskon 25% untuk semua menu utama.',
                'discount'   => '25% OFF',
                'valid'      => 'Berlaku s/d 31 Desember 2025',
                'min_order'  => 'Min. order Rp 15.000',
            ],
            [
                'code'       => 'MALAM10K',
                'title'      => 'Promo Begadang',
                'desc'       => 'Order setelah jam 22:00 dan dapatkan gratis minuman untuk setiap pembelian di atas Rp 20.000.',
                'discount'   => 'FREE MINUMAN',
                'valid'      => 'Setiap Malam 22:00–03:00',
                'min_order'  => 'Min. order Rp 20.000',
            ],
            [
                'code'       => 'WARMKAMPUS',
                'title'      => 'Paket Hemat Kampus',
                'desc'       => 'Mie + Nasi + Minuman dengan harga spesial bundling. Kenyang tanpa kantongin.',
                'discount'   => 'Rp 15.000',
                'valid'      => 'Setiap Hari 11:00–15:00',
                'min_order'  => 'Paket bundling khusus',
            ],
            [
                'code'       => 'DEADLINEMODE',
                'title'      => 'Deadline Mode',
                'desc'       => 'Gratis kopi untuk setiap order di hari Senin. Karena deadline itu nyata.',
                'discount'   => 'FREE KOPI',
                'valid'      => 'Setiap Senin All Day',
                'min_order'  => 'Min. order Rp 10.000',
            ],
        ];
    }
}
