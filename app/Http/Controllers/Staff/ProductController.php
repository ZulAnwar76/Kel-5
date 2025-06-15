<?php

namespace App\Http\Controllers\Staff;

use App\Models\Pegawai;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\LogPenambahanProduk;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function createProduct()
    {
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

        // ✅ Tambahkan log penambahan produk
        LogPenambahanProduk::create([
            'pegawai_id' => auth()->user()->pegawai->pegawai_id,
            'product_id' => $product->product_id,
            'name' => $product->name
        ]);

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

    function destroy($id)
    {
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }
}
