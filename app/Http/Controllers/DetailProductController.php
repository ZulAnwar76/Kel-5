<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function showDetail($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('shop')->with('error', 'Produk tidak ditemukan!');
        }

        return view('detailproduk', ['product' => $product]);
    }
}
