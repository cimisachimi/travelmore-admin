<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard utama.
     */
    public function index(): View
    {
        // Kita bisa mengirim data ke view dari sini
        $stats = [
            ['label' => 'Total Pesanan', 'value' => '1,250'],
            ['label' => 'Paket Populer', 'value' => 'Petualangan Yogyakarta'],
            ['label' => 'Pengguna Terdaftar', 'value' => '875'],
        ];

        return view('dashboard', [
            'stats' => $stats
        ]);
    }
}