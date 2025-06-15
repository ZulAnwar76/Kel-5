<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  {{-- <link href="css/style.css" rel="stylesheet"> --}}
  <style>
    html, body {
      height: 100%;
      min-height: 100%;
    }
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .main-content {
      flex: 1 0 auto;
    }
    .footer-section {
      flex-shrink: 0;
    }

    :root {
      --primary-blue: #1e3a8a;
      --secondary-blue: #3b82f6;
      --light-blue: #dbeafe;
      --accent-blue: #60a5fa;
      --dark-blue: #1e40af;
      --shadow-primary: 0 10px 30px rgba(30, 58, 138, 0.15);
      --shadow-secondary: 0 4px 15px rgba(59, 130, 246, 0.1);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: #D3DEFF;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      color: #334155;
      line-height: 1.6;
    }

    /* Header Styling */
    .custom-navbar {
      background: #3366FF !important;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    .custom-navbar .navbar-brand {
      font-size: 32px;
      font-weight: 600;
    }
    .custom-navbar .navbar-brand > span {
      opacity: .4;
    }
    .custom-navbar .navbar-toggler {
      border-color: transparent;
    }
    .custom-navbar .navbar-toggler:active, .custom-navbar .navbar-toggler:focus {
      -webkit-box-shadow: none;
      box-shadow: none;
      outline: none;
    }
    @media (min-width: 992px) {
      .custom-navbar .custom-navbar-nav li {
        margin-left: 15px;
        margin-right: 15px;
      }
    }
    .custom-navbar .custom-navbar-nav li a {
      font-weight: 500;
      color: #ffffff !important;
      opacity: .5;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
      position: relative;
    }
    @media (min-width: 768px) {
      .custom-navbar .custom-navbar-nav li a:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 8px;
        right: 8px;
        background: #f9bf29;
        height: 5px;
        opacity: 1;
        visibility: visible;
        width: 0;
        -webkit-transition: .15s all ease-out;
        -o-transition: .15s all ease-out;
        transition: .15s all ease-out;
      }
    }
    .custom-navbar .custom-navbar-nav li a:hover {
      opacity: 1;
    }
    .custom-navbar .custom-navbar-nav li a:hover:before {
      width: calc(100% - 16px);
    }
    .custom-navbar .custom-navbar-nav li.active a {
      opacity: 1;
    }
    .custom-navbar .custom-navbar-nav li.active a:before {
      width: calc(100% - 16px);
    }
    .custom-navbar .custom-navbar-cta {
      margin-left: 0 !important;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
    }
    @media (min-width: 768px) {
      .custom-navbar .custom-navbar-cta {
        margin-left: 40px !important;
      }
    }
    .custom-navbar .custom-navbar-cta li {
      margin-left: 0px;
      margin-right: 0px;
    }
    .custom-navbar .custom-navbar-cta li:first-child {
      margin-right: 20px;
    }

    /* Hero Section */
    .hero {
  background: #3366FF;
  padding: 2rem 0; /* Shrinking the padding reduces the height */
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 10%; /* Reduce the bottom margin to shrink the height */
  background: #3366FF;
}


    .hero h1 {
      color: white;
      font-weight: 700;
      font-size: 3rem;
      text-align: center;
      margin: 0;
      text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
      z-index: 1;
      animation: slideInUp 0.8s ease-out;
    }

    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Main Content */
    .untree_co-section {
      padding: 4rem 0;
      position: relative;
    }

    .section-title {
      color: var(--primary-blue);
      font-weight: 700;
      font-size: 1.75rem;
      margin-bottom: 2rem;
      position: relative;
      padding-bottom: 1rem;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--gradient-primary);
      border-radius: 3px;
    }

    /* Form Styling */
    .form-container {
      background: white;
      border-radius: 16px;
      padding: 2.5rem;
      box-shadow: var(--shadow-primary);
      border: 1px solid rgba(30, 58, 138, 0.1);
      transition: var(--transition);
      position: relative;
      overflow: hidden;
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--gradient-primary);
    }

    .form-container:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 40px rgba(30, 58, 138, 0.2);
    }

    .form-group {
      margin-bottom: 1.75rem;
    }

    .form-group label {
      color: var(--primary-blue);
      font-weight: 600;
      margin-bottom: 0.75rem;
      display: block;
      text-transform: capitalize;
      font-size: 0.95rem;
    }

    .form-control {
      border: 2px solid #e2e8f0;
      border-radius: 12px;
      padding: 0.875rem 1.25rem;
      font-size: 1rem;
      transition: var(--transition);
      background: #f8fafc;
      color: #334155;
    }

    .form-control:focus {
      border-color: var(--secondary-blue);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
      background: white;
      outline: none;
    }

    .form-control:disabled {
      background: #f1f5f9;
      color: #64748b;
      cursor: not-allowed;
    }

    /* Order Summary Table */
    .site-block-order-table {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--shadow-secondary);
      margin-bottom: 2rem;
      border: none;
    }

    .site-block-order-table thead th {
      background: var(--gradient-primary);
      color: white;
      font-weight: 600;
      padding: 1.25rem;
      border: none;
      text-transform: uppercase;
      font-size: 0.875rem;
      letter-spacing: 0.5px;
    }

    .site-block-order-table tbody td {
      padding: 1.25rem;
      border-bottom: 1px solid #e2e8f0;
      font-size: 1rem;
      vertical-align: middle;
    }

    .site-block-order-table tbody tr:last-child td {
      border-bottom: none;
      background: var(--light-blue);
      font-weight: 700;
      color: var(--primary-blue);
      font-size: 1.1rem;
    }


    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Buttons */
    .btn-group-actions {
      display: flex;
      gap: 1rem;
      margin-top: 2.5rem;
      flex-wrap: wrap;
    }

    .btn-back, .btn-order {
      flex: 1;
      min-width: 200px;
      padding: 1rem 2rem;
      border-radius: 12px;
      font-weight: 600;
      font-size: 1.1rem;
      transition: var(--transition);
      border: none;
      position: relative;
      overflow: hidden;
    }

    .btn-back {
      background: white;
      color: var(--primary-blue);
      border: 2px solid var(--primary-blue);
    }

    .btn-back:hover {
      background: var(--primary-blue);
      color: white;
      transform: translateY(-2px);
      box-shadow: var(--shadow-secondary);
    }

    .btn-order {
      background: var(--gradient-primary);
      color: white;
      box-shadow: var(--shadow-secondary);
    }

    .btn-order:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-primary);
      filter: brightness(1.1);
    }

    .footer-section {
      padding: 40px 0;
      background: #3366FF;
    }
    .footer-section .relative {
      position: relative;
    }
    .footer-section a {
      text-decoration: none;
      color: #2f2f2f;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
    }
    .footer-section a:hover {
      color: rgba(47, 47, 47, 0.5);
    }
    .footer-section .subscription-form {
      margin-bottom: 40px;
      position: relative;
      z-index: 2;
      margin-top: 100px;
    }
    @media (min-width: 992px) {
      .footer-section .subscription-form {
        margin-top: 0px;
        margin-bottom: 80px;
      }
    }
    .footer-section .subscription-form h3 {
      font-size: 18px;
      font-weight: 500;
      color: #3b5d50;
    }
    .footer-section .subscription-form .form-control {
      height: 50px;
      border-radius: 10px;
      font-family: "Inter", sans-serif;
    }
    .footer-section .subscription-form .form-control:active, .footer-section .subscription-form .form-control:focus {
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-color: #3b5d50;
      -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
      box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
    }
    .footer-section .subscription-form .form-control::-webkit-input-placeholder {
      font-size: 14px;
    }
    .footer-section .subscription-form .form-control::-moz-placeholder {
      font-size: 14px;
    }
    .footer-section .subscription-form .form-control:-ms-input-placeholder {
      font-size: 14px;
    }
    .footer-section .subscription-form .form-control:-moz-placeholder {
      font-size: 14px;
    }
    .footer-section .subscription-form .btn {
      border-radius: 10px !important;
    }
    .footer-section .sofa-img {
      position: absolute;
      top: -200px;
      z-index: 1;
      right: 0;
    }
    .footer-section .sofa-img img {
      max-width: 380px;
    }
    .footer-section .links-wrap {
      margin-top: 0px;
    }
    @media (min-width: 992px) {
      .footer-section .links-wrap {
        margin-top: 54px;
      }
    }
    .footer-section .links-wrap ul li {
      margin-bottom: 10px;
    }
    .footer-section .footer-logo-wrap .footer-logo {
      font-size: 32px;
      font-weight: 500;
      text-decoration: none;
      color: lab(100% 0.01 -0.01);
    }
    .footer-section .custom-social li {
      margin: 2px;
      display: inline-block;
    }
    .footer-section .custom-social li a {
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      display: inline-block;
      background: #dce5e4;
      color: #3366FF;
      border-radius: 50%;
    }
    .footer-section .custom-social li a:hover {
      background: #3b5d50;
      color: #3366FF;
    }
    .footer-section .border-top {
      border-color: #dce5e4;
    }
    .footer-section .border-top.copyright {
      font-size: 14px !important;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }
      .form-container {
        padding: 1.5rem;
        margin-bottom: 2rem;
      }
      .btn-group-actions {
        flex-direction: column;
      }
      .btn-back, .btn-order {
        min-width: 100%;
      }
      .custom-file-upload {
        min-width: 100%;
        padding: 1rem;
      }
    }

    /* Loading Animation */
    .loading {
      display: inline-block;
      width: 20px;
      height: 20px;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      border-top-color: white;
      animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Success Animation */
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    .success-animation {
      animation: pulse 0.3s ease-in-out;
    }

    /* Cart Totals & Table */
    .cart-totals {
      text-align: center;
      margin-top: 20px;
      background-color: #f8f9fa;
    }
    .table th,
    .table td {
      text-align: center;
      vertical-align: middle;
    }
    .btn-block {
      margin-top: 10px;
    }

    /* Batasi ukuran gambar di cart */
.product-thumbnail img {
  max-width: 90px;
  max-height: 90px;
  width: auto;
  height: auto;
  display: block;
  margin: 0 auto;
}

.cart-totals {
  text-align: center;
  margin-top: 60px; /* lebih ke bawah */
  background-color: #f8f9fa;
}

/* Tombol biru gradasi di cart-totals */
.cart-totals .btn-blue {
  background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
  color: #fff;
  border: none;
  transition: transform 0.2s, box-shadow 0.2s, filter 0.2s;
  box-shadow: 0 4px 15px rgba(59, 130, 246, 0.1);
}
.cart-totals .btn-blue:hover {
  filter: brightness(1.1);
  transform: translateY(-4px) scale(1.04);
  box-shadow: 0 8px 24px rgba(30, 58, 138, 0.15);
  color: #fff;
}

.btn-remove {
    background: none;
    border: none;
    color: #e53935 !important;
    font-size: 1.3rem;
    font-weight: bold;
    padding: 0.25rem 0.7rem;
    cursor: pointer;
    transition: color 0.2s, transform 0.2s;
    line-height: 1;
}
.btn-remove:hover {
    color: #b71c1c !important;
    transform: scale(1.2);
    background: none;
}

/* Tooltip custom bawah ikon navbar */
.icon-tooltip {
  position: relative;
  cursor: pointer;
  margin-bottom: 4px; /* beri jarak bawah agar tooltip tidak overlap */
}
.icon-tooltip .tooltip-text {
  visibility: hidden;
  opacity: 0;
  width: max-content;
  max-width: 220px;
  background: #222;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 4px 12px;
  position: absolute;
  z-index: 9999;
  top: 120%;
  left: 50%;
  transform: translateX(-50%);
  transition: opacity 0.2s;
  font-size: 13px;
  pointer-events: none;
  white-space: pre-line;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}
.icon-tooltip:hover .tooltip-text {
  visibility: visible;
  opacity: 1;
}

/* Responsive: Tooltip tetap di dalam layar */
@media (max-width: 600px) {
  .icon-tooltip .tooltip-text {
    left: 0;
    right: 0;
    transform: none;
    margin: 0 auto;
    min-width: 120px;
    max-width: 90vw;
  }
}

/* Responsive Cart Table: Card Style on Mobile */
@media (max-width: 767.98px) {
  .site-blocks-table table, .site-blocks-table thead, .site-blocks-table tbody, .site-blocks-table th, .site-blocks-table td, .site-blocks-table tr {
    display: block;
    width: 100%;
  }
  .site-blocks-table thead {
    display: none;
  }
  .site-blocks-table tr {
    margin-bottom: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(30,58,138,0.08);
    background: #fff;
    padding: 1rem 0.5rem;
  }
  .site-blocks-table td {
    text-align: left;
    padding: 0.5rem 1rem;
    border: none;
    position: relative;
  }
  .site-blocks-table td:before {
    content: attr(data-label);
    font-weight: 600;
    color: #1e3a8a;
    display: block;
    margin-bottom: 0.25rem;
    font-size: 0.95rem;
  }
  .product-thumbnail img {
    max-width: 70px;
    max-height: 70px;
  }
}

/* Animasi hover pada card cart */
.site-blocks-table tr:hover {
  box-shadow: 0 8px 32px rgba(30,58,138,0.12);
  transform: translateY(-2px) scale(1.01);
  transition: 0.2s;
}

/* Responsive tombol cart-totals */
@media (max-width: 767.98px) {
  .cart-totals .row > div {
    margin-bottom: 10px;
  }
  .cart-totals .btn {
    width: 100%;
    margin-bottom: 10px;
  }
}

/* Responsive navbar brand */
@media (max-width: 500px) {
  .navbar-brand {
    font-size: 1.2rem !important;
  }
}

/* Interaktif: efek hover pada gambar produk */
.product-thumbnail img:hover {
  filter: brightness(1.1) drop-shadow(0 2px 8px #1e3a8a22);
  transform: scale(1.05);
  transition: 0.2s;
}
  </style>

  <title>SuwandiSecBrand</title>
</head>

<body>
  <div class="main-content">
    <!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
  <div class="container">
    <a class="navbar-brand" href="/">SuwandiSecBrand<span>.</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsFurni">
      <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li><a class="nav-link" href="/">Home</a></li>
        <li><a class="nav-link" href="shop">Shop</a></li>
        @if (!Auth::check())
          <li><a class="nav-link" href="{{ route('login.show') }}">Login</a></li>
          <li><a class="nav-link" href="{{ route('register.show') }}">Register</a></li>
        @endif
      </ul>
      @if (Auth::check())
      <ul class="navbar-nav ms-3">
        <li class="nav-item d-flex align-items-center" style="gap:8px;">
          <a class="nav-link d-flex align-items-center icon-tooltip" href="user">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fff2; overflow:hidden;">
              <img src="images/user.svg" alt="User" width="22" height="22" style="display:block;">
            </span>
            <span style="margin-left:10px; font-weight:600; color:#fff;">
              {{ Auth::user()->customer->name ?? Auth::user()->name }}
            </span>
            <span class="tooltip-text">Profil User</span>
          </a>
        </li>
        <li class="nav-item" style="margin-left:8px;">
          <a class="nav-link icon-tooltip" href="cart">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fff2; overflow:hidden;">
              <img src="images/cart.svg" alt="Cart" width="22" height="22" style="display:block;">
            </span>
            <span class="tooltip-text">Keranjang Belanja</span>
          </a>
        </li>
        <li class="nav-item" style="margin-left:8px;">
          <a class="nav-link icon-tooltip" href="history">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fff2; overflow:hidden;">
              <img src="images/history.svg" alt="History" width="22" height="22" style="display:block; filter: invert(1);">
            </span>
            <span class="tooltip-text">Riwayat Transaksi</span>
          </a>
        </li>
        <li class="nav-item" style="margin-left:8px;">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          <a class="nav-link icon-tooltip" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fff2; overflow:hidden;">
              <img src="images/logout2.svg" alt="Logout" width="22" height="22" style="display:block; filter: invert(1) brightness(2);">
            </span>
            <span class="tooltip-text">Logout</span>
          </a>
        </li>
      </ul>
      @endif
    </div>
  </div>
</nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <h1><i class="fas fa-shopping-cart me-3"></i>Cart</h1>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section before-footer-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-stock">Stock</th> <!-- Tambahkan ini -->
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
 @foreach ($cartItems as $item)
<tr>
  <td class="product-thumbnail" data-label="Image">
    <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="img-fluid">
  </td>
  <td class="product-name" data-label="Product">
    <h2 class="h5 text-black">{{ $item->product->name }}</h2>
  </td>
  <td data-label="Price">Rp{{ number_format($item->product->price, 0, ',', '.') }}</td>
  <td data-label="Stock">1</td> <!-- Tampilkan stock 1 -->
  <td data-label="Total">Rp{{ number_format($item->product->price, 0, ',', '.') }}</td>
  <td data-label="Remove">
    <form method="POST" action="{{ route('cart.remove', $item->cart_id) }}" id="removeCartForm{{ $item->cart_id }}">
      @csrf
      @method('DELETE')
      <button type="button" class="btn btn-remove btn-sm" title="Remove" onclick="confirmRemoveCart({{ $item->cart_id }})">&#10006;</button>
    </form>
  </td>
</tr>
@endforeach

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <!-- Cart Totals Section - Dipindahkan ke tengah bawah -->
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="border p-4 rounded cart-totals">
              <h3 class="text-black text-center text-uppercase">Cart Totals</h3>
              <div class="d-flex justify-content-between mb-3">
                <span class="text-black">Subtotal</span>
                <strong class="text-black">Rp{{ number_format($subtotal, 0, ',', '.') }}</strong>
              </div>
              <div class="d-flex justify-content-between mb-4">
                <span class="text-black">Total</span>
                <strong class="text-black">Rp{{ number_format($subtotal, 0, ',', '.') }}</strong>
              </div>
             <div class="row">
  <div class="col-md-6">
    <button type="button" class="btn btn-blue btn-lg py-3 btn-block" onclick="window.location='shop'">Continue Shopping</button>
  </div>
  <div class="col-md-6">
    <button type="button" class="btn btn-blue btn-lg py-3 btn-block" onclick="window.location='checkout'">Proceed To Checkout</button>
  </div>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .cart-totals {
        text-align: center;
        margin-top: 20px;
        background-color: #f8f9fa;
      }
      .table th,
      .table td {
        text-align: center;
        vertical-align: middle;
      }
      .btn-block {
        margin-top: 10px;
      }
    </style>
  </div>

  <!-- Start Footer Section -->
  <footer class="footer-section">
    <div class="container">
      <div class="row justify-content-center">
        <!-- Kolom Logo dan Teks -->
        <div class="col-lg-4 text-center">
          <div class="mb-4 footer-logo-wrap">
            <a href="#" class="footer-logo">SuwandiSecBrand<span>.</span></a>
          </div>
          <ul class="list-unstyled custom-social">
            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-tiktok"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function confirmRemoveCart(cartId) {
    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: "Anda akan menghapus item ini dari keranjang belanja Anda.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#e74c3c',
      cancelButtonColor: '#95a5a6',
      confirmButtonText: '<i class="fas fa-trash"></i> Ya, hapus!',
      cancelButtonText: '<i class="fas fa-times"></i> Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById('removeCartForm' + cartId).submit();
      }
    });
  }
</script>
</body>
</html>