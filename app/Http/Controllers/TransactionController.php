<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Simpan gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('payment_proofs', 'public');
        }

        // Buat transaksi
        $transaction = Transaction::create([
            'customer_id' => $validated['customer_id'],
            'product_id' => $validated['product_id'],
            'image' => $imagePath ?? null,
            'status' => 'pending',
            'total_price' => $validated['total_price'],
        ]);

        return redirect()->back()->with('success', 'Pesanan Anda berhasil dibuat!');
    }
}
