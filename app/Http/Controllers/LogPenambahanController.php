<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogPenambahanProduk;

class LogPenambahanController extends Controller
{
    public function showProductLog()
    {
        // Ambil semua log penambahan produk beserta relasi produk dan pegawai
        $logs = LogPenambahanProduk::with(['product', 'pegawai'])->latest()->get();

        // Kirim ke view admin.productlist
        return view('admin.productlist', compact('logs'));
    }
}
