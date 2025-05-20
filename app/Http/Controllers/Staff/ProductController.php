<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function createProduct(){
        return view('pegawai.product');
    }

    function submitProduct(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        }

        $product = new Product();
        $product->pegawai_id = auth()->user()->pegawai->pegawai_id;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->size = $request->size;
        $product->image = $imagePath;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('shop')->with('success', 'Produk berhasil ditambahkan!');
    }

    function listProducts()
    { 
    $products = Product::all(); // Mengambil semua data produk
    return view('pegawai.listproduct', ['products' => $products]);
    }


    function showProducts()
    { 
    $products = Product::all(); // Mengambil semua data produk
    return view('shop', ['products' => $products]);
    }


}
