<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $customer_id = Auth::id();

        // Ambil item di keranjang dengan relasi produk
        $cartItems = Cart::with('product')
            ->where('customer_id', $customer_id)
            ->get();

        // Hitung total harga
        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price;
        });

        return view('cart', compact('cartItems', 'subtotal'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,product_id',
        ]);

        $cart = Cart::create([
            'customer_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($cart_id)
    {
        $cart = Cart::findOrFail($cart_id);
        $cart->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }
}