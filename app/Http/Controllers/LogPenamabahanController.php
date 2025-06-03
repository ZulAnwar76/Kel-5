<?php

namespace App\Http\Controllers;

use App\Models\LogPenambahanProduk;
use Illuminate\Http\Request;

class LogPenamabahanController extends Controller
{
    public function showProductLog()
{
    $logProduk = LogPenambahanProduk::all(); // Fetch all data from the table
    return view('admin.productlist', compact('logProduk')); // Pass the data to the view
}
}
