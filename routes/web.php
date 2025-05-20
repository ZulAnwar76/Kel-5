<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Staff\ProductController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LogPenamabahanController;
use App\Http\Controllers\ReportPenjualanController;

Route::middleware('auth')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
});


Route::get('/invoicereport', [ReportPenjualanController::class, 'showInvoiceReport'])->name('invoicereport');


Route::post('/update-status/{transaction_id}', [CheckoutController::class, 'updateStatus'])->name('update.status');
Route::get('/transaksi', [CheckoutController::class, 'showTransactions'])->name('transaksi.index');   

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::middleware('auth')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
});


Route::get('/productlist', [LogPenamabahanController::class, 'showProductLog']);

Route::get('/listproduct', [ProductController::class, 'listProducts'])->name('product.list');

Route::get('/userlist', [UserlistController::class, 'index'])->name('admin.userlist');

Route::get('/detailproduk/{id}', [DetailProductController::class, 'showDetail'])->name('detailproduk');

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('index.customer');
})->name('logout');

// Register Routes
Route::get('/register', [RegisterController::class, 'showRegistration'])->name('register.show');
Route::post('/register/submit', [RegisterController::class, 'submitRegistration'])->name('register.submit');

// Login Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

// Halaman Umum (Dapat Diakses Semua User)
Route::get('/', fn() => view('index'))->name('index.customer');
Route::get('/about', fn() => view('about'));
//Route::get('/cart', fn() => view('cart'));
//Route::get('/checkout', fn() => view('checkout'));
Route::get('/contact', fn() => view('contact'));
Route::get('/services', fn() => view('services'));
Route::get('/shop', fn() => view('shop'));
Route::get('/thankyou', fn() => view('thankyou'))->name('thankyou.index');
Route::get('/wishlist', fn() => view('wishlist'));
Route::get('/user', fn() => view('user'));

// Route Khusus Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/indexadmin', function () {
        if (Auth::user()->role === 'admin') {
            return view('admin.indexadmin');
        }
        abort(403, 'Forbidden');
    })->name('admin.index');

    Route::get('/generalsettings', function () {
        if (Auth::user()->role === 'admin') {
            return view('admin.generalsettings');
        }
        abort(403, 'Forbidden');
    })->name('admin.settings');

//    Route::get('/invoicereport', function () {
//        if (Auth::user()->role === 'admin') {
//            return view('admin.invoicereport');
//        }
//        abort(403, 'Forbidden');
//    })->name('admin.invoicereport');

//    Route::get('/productlist', function () {
//        if (Auth::user()->role === 'admin') {
//            return view('admin.productlist');
//        }
//        abort(403, 'Forbidden');
//    })->name('admin.productlist');

    Route::get('/profileadmin', function () {
        if (Auth::user()->role === 'admin') {
            return view('admin.profileadmin');
        }
        abort(403, 'Forbidden');
    })->name('admin.profileadmin');

    Route::get('/saleslist', function () {
        if (Auth::user()->role === 'admin') {
            return view('admin.saleslist');
        }
        abort(403, 'Forbidden');
    })->name('admin.saleslist');
});

// Route Khusus Pegawai
Route::middleware(['auth'])->group(function () {
    Route::get('/indexpegawai', function () {
        if (Auth::user()->role === 'pegawai') {
            return view('pegawai.indexpegawai');
        }
        abort(403, 'Forbidden');
    })->name('pegawai.index');

    Route::get('/produk', function () {
        if (Auth::user()->role === 'pegawai') {
            return view('pegawai.produk');
        }
        abort(403, 'Forbidden');
    })->name('pegawai.produk');

//    Route::get('/transaksi', function () {
//        if (Auth::user()->role === 'pegawai') {
//            return view('pegawai.transaksi');
//        }
//        abort(403, 'Forbidden');
//    })->name('pegawai.transaksi');

    Route::get('/profile', function () {
        if (Auth::user()->role === 'pegawai') {
            return view('pegawai.profile');
        }
        abort(403, 'Forbidden');
    })->name('pegawai.profile');

    Route::get('/settings', function () {
        if (Auth::user()->role === 'pegawai') {
            return view('pegawai.settings');
        }
        abort(403, 'Forbidden');
    })->name('pegawai.settings');

//    Route::get('/listproduct', function () {
//        if (Auth::user()->role === 'pegawai') {
//            return view('pegawai.listproduct');
//        }
//        abort(403, 'Forbidden');
//    })->name('pegawai.listproduct');
});

// Route Khusus Customer
Route::middleware(['auth'])->group(function () {
    Route::get('/index', function () {
        if (Auth::user()->role === 'customer') {
            return view('index');
        }
        abort(403, 'Forbidden');
    })->name('customer.index');
});

//product
Route::get('/product', [ProductController::class, 'createProduct'])->name('product.create');
Route::post('/produk/submit', [ProductController::class, 'submitProduct'])->name('product.submit');
Route::get('/shop', [ProductController::class, 'showProducts'])->name('shop');

Route::put('/users/{id}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole');

//Route::get('/history', function () {
//    return view('history');
//});

Route::get('/history', [CheckoutController::class, 'showHistory'])->name('history')->middleware('auth');