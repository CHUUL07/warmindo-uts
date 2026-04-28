<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return redirect()->to('/dashboard');
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

    public function laporan()
    {
        $data = [
            'title'        => 'Laporan Penjualan',
            'active_menu'  => 'laporan',
            'sales_data'   => $this->getSalesData(),
            'summary'      => $this->getSalesSummary(),
        ];
        return view('pages/laporan', $data);
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
                'code'      => 'NGODING25',
                'title'     => 'Diskon Anak IT',
                'desc'      => 'Tunjukkan KTM Fakultas Teknik dan dapatkan diskon 25% untuk semua menu utama.',
                'discount'  => '25% OFF',
                'valid'     => 'Berlaku s/d 31 Desember 2025',
                'min_order' => 'Min. order Rp 15.000',
            ],
            [
                'code'      => 'MALAM10K',
                'title'     => 'Promo Begadang',
                'desc'      => 'Order setelah jam 22:00 dan dapatkan gratis minuman untuk setiap pembelian di atas Rp 20.000.',
                'discount'  => 'FREE MINUMAN',
                'valid'     => 'Setiap Malam 22:00–03:00',
                'min_order' => 'Min. order Rp 20.000',
            ],
            [
                'code'      => 'WARMKAMPUS',
                'title'     => 'Paket Hemat Kampus',
                'desc'      => 'Mie + Nasi + Minuman dengan harga spesial bundling. Kenyang tanpa kantongin.',
                'discount'  => 'Rp 15.000',
                'valid'     => 'Setiap Hari 11:00–15:00',
                'min_order' => 'Paket bundling khusus',
            ],
            [
                'code'      => 'DEADLINEMODE',
                'title'     => 'Deadline Mode',
                'desc'      => 'Gratis kopi untuk setiap order di hari Senin. Karena deadline itu nyata.',
                'discount'  => 'FREE KOPI',
                'valid'     => 'Setiap Senin All Day',
                'min_order' => 'Min. order Rp 10.000',
            ],
        ];
    }

    private function getSalesData(): array
    {
        return [
            ['id' => 'TRX-001', 'item' => 'Mie Goreng Overflow',     'category' => 'goreng',  'qty' => 47, 'unit_price' => 7000,  'total' => 329000,  'status' => 'selesai'],
            ['id' => 'TRX-002', 'item' => 'Kopi Localhost',           'category' => 'minuman', 'qty' => 61, 'unit_price' => 6000,  'total' => 366000,  'status' => 'selesai'],
            ['id' => 'TRX-003', 'item' => 'Indomie Rebus Spesial',    'category' => 'kuah',    'qty' => 53, 'unit_price' => 7000,  'total' => 371000,  'status' => 'selesai'],
            ['id' => 'TRX-004', 'item' => 'Nasi Goreng Kampus',       'category' => 'goreng',  'qty' => 38, 'unit_price' => 10000, 'total' => 380000,  'status' => 'selesai'],
            ['id' => 'TRX-005', 'item' => 'Es Teh Syntax Error',      'category' => 'minuman', 'qty' => 74, 'unit_price' => 3000,  'total' => 222000,  'status' => 'selesai'],
            ['id' => 'TRX-006', 'item' => 'Soto Debug Ayam',          'category' => 'kuah',    'qty' => 29, 'unit_price' => 13000, 'total' => 377000,  'status' => 'selesai'],
            ['id' => 'TRX-007', 'item' => 'Jus Alpukat 404',          'category' => 'minuman', 'qty' => 22, 'unit_price' => 8000,  'total' => 176000,  'status' => 'pending'],
            ['id' => 'TRX-008', 'item' => 'Mie Ayam Null Pointer',    'category' => 'kuah',    'qty' => 35, 'unit_price' => 12000, 'total' => 420000,  'status' => 'selesai'],
            ['id' => 'TRX-009', 'item' => 'Indomie Goreng Original',  'category' => 'goreng',  'qty' => 66, 'unit_price' => 5000,  'total' => 330000,  'status' => 'selesai'],
            ['id' => 'TRX-010', 'item' => 'Es Jeruk Port 5000',       'category' => 'minuman', 'qty' => 41, 'unit_price' => 5000,  'total' => 205000,  'status' => 'selesai'],
        ];
    }

    private function getSalesSummary(): array
    {
        return [
            'total_revenue'    => 'Rp 3.176.000',
            'total_orders'     => 466,
            'top_item'         => 'Es Teh Syntax Error',
            'avg_order_value'  => 'Rp 6.812',
        ];
    }
}