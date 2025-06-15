<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="SuwandiSecBrand">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
  <title>Detail Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


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
  padding: 4rem 0; /* Shrinking the padding reduces the height */
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

/* Animasi muncul dari bawah */
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
    .product-container {
  background-color: #fff;
  margin-top: 30px; /* dari 100px jadi 30px */
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 150px; /* Tambahkan ini untuk memberi jarak ke footer */
}

    .product-container .row {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
.product-container .row p {
  word-wrap: break-word; /* Ensures long text breaks and wraps */
  overflow: hidden; /* Prevents overflow */
  text-overflow: ellipsis; /* Adds ellipsis if text overflows */
  white-space: normal; /* Ensures text wraps instead of staying on one line */
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

.btn-custom {
  background-color: #3366FF;
  color: #fff;
  border: none;
  transition: background 0.3s, transform 0.2s, box-shadow 0.2s;
  font-weight: 600;
  box-shadow: 0 2px 8px rgba(51, 102, 255, 0.08);
}

.btn-custom:hover, .btn-custom:focus {
  background: #254edb;
  color: #fff;
  transform: translateY(-2px) scale(1.04);
  box-shadow: 0 6px 18px rgba(51, 102, 255, 0.18);
}

/* Tambahkan di <style> detailproduk.blade.php */

/* Responsive: Produk jadi card/list di mobile */
@media (max-width: 767.98px) {
  .product-container {
    padding: 10px 5px !important;
    margin-top: 16px !important;
    margin-bottom: 70px !important;
    border-radius: 10px;
  }
  .product-container .row {
    flex-direction: column;
    gap: 1.5rem;
  }
  .product-container .col-md-6 {
    width: 100%;
    max-width: 100%;
    padding: 0 !important;
  }
  #mainImage {
    max-width: 220px;
    margin: 0 auto 1rem auto;
    display: block;
  }
  .ps-md-5 {
    padding-left: 0 !important;
  }
  .btn-custom.btn-lg {
    font-size: 1.1rem;
    padding: 0.9rem 1.2rem;
  }
}

/* Responsive tombol Buy Now */
@media (max-width: 500px) {
  .btn-custom.btn-lg {
    width: 100%;
    font-size: 1rem;
    padding: 0.8rem 1rem;
  }
  .navbar-brand {
    font-size: 1.2rem !important;
  }
}

/* Interaktif: efek hover pada gambar produk */
#mainImage:hover {
  filter: brightness(1.08) drop-shadow(0 2px 12px #1e3a8a22);
  transform: scale(1.04);
  transition: 0.2s;
}

/* Interaktif: efek tombol */
.btn-custom:active {
  filter: brightness(0.95);
  transform: scale(0.98);
}

/* Tooltip tetap responsif */
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
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
 
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
          <a class="nav-link d-flex align-items-center icon-tooltip" href="{{ url('/user') }}">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fff2; overflow:hidden;">
              <img src="{{ asset('images/user.svg') }}" alt="User" width="22" height="22" style="display:block;">
            </span>
            <span style="margin-left:10px; font-weight:600; color:#fff;">
              {{ Auth::user()->customer->name ?? Auth::user()->name }}
            </span>
            <span class="tooltip-text">Profil User</span>
          </a>
        </li>
        <li class="nav-item" style="margin-left:8px;">
          <a class="nav-link icon-tooltip" href="{{ url('/cart') }}">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fff2; overflow:hidden;">
              <img src="{{ asset('images/cart.svg') }}" alt="Cart" width="22" height="22" style="display:block;">
            </span>
            <span class="tooltip-text">Keranjang Belanja</span>
          </a>
        </li>
        <li class="nav-item" style="margin-left:8px;">
          <a class="nav-link icon-tooltip" href="{{ url('/history') }}">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fff2; overflow:hidden;">
              <img src="{{ asset('images/history.svg') }}" alt="History" width="22" height="22" style="display:block; filter: invert(1);">
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
              <img src="{{ asset('images/logout2.svg') }}" alt="Logout" width="22" height="22" style="display:block; filter: invert(1) brightness(2);">
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
    <h1><i class="fas fa-shoe-prints me-3"></i>Detail Sepatu</h1>
  </div>
</div>
    <!-- End Hero Section -->



  <div class="main-content flex-fill">
    <div class="container d-flex justify-content-center align-items-center product-container" style="max-width: 900px; padding: 20px;">
      <div class="row align-items-center w-100">
        <!-- Product Image -->
        <div class="col-md-6 text-center">
          <img id="mainImage" src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
        </div>

        <!-- Product Details -->
        <div class="col-md-6 ps-md-5">
          <h2 class="fw-bold">{{ $product->name }}</h2>
          <h5>Price:</h5>
          <h4 class="text-danger fw-bold">Rp{{ number_format($product->price, 0, ',', '.') }}</h4>
          <h5>Description:</h5>
          <p>{{ $product->description }}</p>
          <h5>Size:</h5>
          <p class="btn btn-dark btn-sm disabled">{{ $product->size }}</p>
          <h5 class="mt-3">Stock:</h5>
          <span class="badge bg-secondary mb-3">1</span> <!-- Tambahkan ini -->

          <!-- Buy Now Button -->
          <div class="mt-3 text-center">
            <form method="POST" action="{{ route('cart.buyNow') }}">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->product_id }}">
              <button class="btn btn-custom btn-lg w-100">Buy Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
