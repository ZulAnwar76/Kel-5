<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Tambahkan ini

class ReportPenjualanController extends Controller
{
    public function showInvoiceReport()
    {
        $data = DB::table('rekap_penjualan')->get(); // Menggunakan DB Facade
        return view('admin.invoicereport', ['rekap_penjualan' => $data]);
    }
}
