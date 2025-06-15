<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Tampilkan daftar item di keranjang.
     */
    public function index()
    {
        $user = Auth::user();
        $customer = \App\Models\Customer::where('user_id', $user->user_id)->first();
        if (!$customer) {
            return redirect()->route('shop')->with('error', 'Customer profile not found');
        }
        $customer_id = $customer->customer_id;

        // Ambil item di keranjang dengan relasi produk
        $cartItems = Cart::with('product')
            ->where('customer_id', $customer_id)
            ->get();

        // Hitung subtotal dengan validasi jika product ada
        $subtotal = $cartItems->sum(function ($item) {
            return optional($item->product)->price ?? 0;
        });

        return view('cart', compact('cartItems', 'subtotal'));
    }

    /**
     * Tambahkan item ke keranjang.
     */
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,product_id',
        ]);

        $user = Auth::user();
        $customer = \App\Models\Customer::where('user_id', $user->user_id)->first();
        if (!$customer) {
            return redirect()->back()->with('error', 'Customer profile not found');
        }
        $customer_id = $customer->customer_id;

        $existingCartItem = Cart::where('customer_id', $customer_id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($existingCartItem) {
            return redirect()->back()->with('info', 'Product already in the cart!');
        }

        Cart::create([
            'customer_id' => $customer_id,
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Hapus item dari keranjang.
     */
    public function remove($cart_id)
    {
        $user = Auth::user();
        $customer = \App\Models\Customer::where('user_id', $user->user_id)->first();
        if (!$customer) {
            return redirect()->route('cart.index')->with('error', 'Customer profile not found');
        }
        $customer_id = $customer->customer_id;

        $cart = Cart::where('cart_id', $cart_id)
            ->where('customer_id', $customer_id)
            ->firstOrFail();

        $cart->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }

    /**
     * Tambahkan item ke keranjang dan langsung redirect ke cart.
     */
    public function buyNow(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,product_id',
        ]);

        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login.show')->with('error', 'Silakan login terlebih dahulu untuk membeli produk.');
        }

        $user = Auth::user();
        $customer = \App\Models\Customer::where('user_id', $user->user_id)->first();
        if (!$customer) {
            return redirect()->back()->with('error', 'Customer profile not found');
        }
        $customer_id = $customer->customer_id;

        $existingCartItem = Cart::where('customer_id', $customer_id)
            ->where('product_id', $request->product_id)
            ->first();

        if (!$existingCartItem) {
            Cart::create([
                'customer_id' => $customer_id,
                'product_id' => $request->product_id,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added and redirected to cart!');
    }
}

