<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
    {
        // Validasi input

        // Ambil customer ID dari user yang login
        $customer = Customer::where('user_id', Auth::id())->first();
        if (!$customer) {
            return redirect()->back()->withErrors(['error' => 'Customer not found']);
        }

        // Ambil produk dari keranjang
        $cartItems = Cart::where('customer_id', $customer->customer_id)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->withErrors(['error' => 'Cart is empty']);
        }

        // Hitung total harga
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price;
        });

        // Simpan file bukti pembayaran
        $paymentProof = $request->file('payment-proof');
        $paymentProofPath = $paymentProof->store('payment-proofs', 'public');

        // Simpan data transaksi
        $transaction = Transaction::create([
            'customer_id' => $customer->customer_id,
            'image' => $paymentProofPath,
            'status' => 'pending',
            'total_price' => $totalPrice,
        ]);

        // Hapus semua item dari keranjang
        Cart::where('customer_id', $customer->customer_id)->delete();

        return redirect()->route('order.success')->with('success', 'Order placed successfully');
    }

    public function checkout()
{
    // Ambil data customer yang sedang login
    $customer = auth()->user()->customer;

    if (!$customer) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    // Ambil item di cart berdasarkan customer_id
    $cartItems = Cart::with('product')->where('customer_id', $customer->customer_id)->get();

    // Hitung total harga
    $totalPrice = $cartItems->sum(function ($item) {
        return $item->product->price;
    });

    // Kirim data ke view
    return view('checkout', compact('cartItems', 'totalPrice'));
}
}
