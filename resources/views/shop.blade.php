<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="SuwandiSecBrand">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

  <meta name="description" content="Premium Sneakers and Shoes Collection" />
  <meta name="keywords" content="shoes, sneakers, fashion, footwear, nike, adidas" />

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>

/* Hero Section */
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
.shop-navbar {
  background: #3366FF !important;
  padding-top: 20px;
  padding-bottom: 20px;
}

.shop-navbar .navbar-brand {
  font-size: 32px;
  font-weight: 600;
  color: #fff !important;
}

.shop-navbar .navbar-brand > span {
  opacity: 0.4;
  color: #fff !important;
}

/* Navigasi umum */
.shop-navbar-nav {
  list-style: none;
  padding: 0;
  margin: 0;
  gap: 8px;
  display: flex;
  align-items: center;
}

/* Navlink teks saja (Home & Shop) */
.shop-navbar-nav .nav-link.nav-text {
  position: relative;
  color: #fff !important;
  font-weight: 500;
  font-size: 1rem;
  opacity: 0.7;
  padding-bottom: 8px;
  transition: all 0.3s ease;
}

/* Garis kuning saat hover */
.shop-navbar-nav .nav-link.nav-text::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 8px;
  right: 8px;
  height: 4px;
  background-color: #f9bf29;
  width: 0;
  transition: width 0.25s ease-out;
}

.shop-navbar-nav .nav-link.nav-text:hover {
  color: #f9bf29 !important;
  opacity: 1;
}

.shop-navbar-nav .nav-link.nav-text:hover::before {
  width: calc(100% - 16px);
}

/* Non-animated icons */
.shop-navbar-nav .nav-link img {
  filter: invert(1);
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

/* Loading Overlay Centering */
#loading-overlay {
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(51,102,255,0.10);
  z-index: 99999;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  transition: opacity 0.4s;
}

.loading-spinner {
  border: 4px solid #fff;
  border-top: 4px solid #3366FF;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  animation: spin 1s linear infinite;
  margin-bottom: 18px;
}

.loading-text {
  color: #3366FF;
  font-size: 1.2rem;
  font-weight: 600;
  text-align: center;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

/* Responsive grid produk: 2 kolom di tablet, 1 kolom di mobile */
@media (max-width: 991.98px) {
  .product-section .col-lg-3,
  .product-section .col-md-4 {
    flex: 0 0 50%;
    max-width: 50%;
  }
}
@media (max-width: 575.98px) {
  .product-section .col-lg-3,
  .product-section .col-md-4,
  .product-section .col-15 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .product-item {
    margin-bottom: 1.5rem;
  }
}

/* Responsive tombol Add to Cart */
@media (max-width: 575.98px) {
  .btn.btn-primary.w-100 {
    font-size: 1rem;
    padding: 0.8rem 1rem;
    border-radius: 18px;
  }
  .navbar-brand {
    font-size: 1.2rem !important;
  }
}

/* Interaktif: efek hover pada produk */
.product-item {
  transition: box-shadow 0.2s, transform 0.2s;
}
.product-item:hover {
  box-shadow: 0 8px 32px rgba(51,102,255,0.13);
  transform: translateY(-2px) scale(1.01);
}

/* Interaktif: efek hover pada gambar produk */
.product-thumbnail:hover {
  filter: brightness(1.08) drop-shadow(0 2px 12px #1e3a8a22);
  transform: scale(1.04);
  transition: 0.2s;
}

/* Interaktif: efek tombol Add to Cart */
.btn.btn-primary:active {
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
  <title>SuwandiSecBrand - Premium Shoes</title>
</head>

<body>
  <!-- Loading Overlay -->
  <div id="loading-overlay">
    <div class="loading-spinner"></div>
    <div class="loading-text">Mohon Tunggu...</div>
  </div>
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
   <h1><i class="fas fa-store me-3"></i>Shop</h1>
  </div>
</div>
<!-- End Hero Section -->

  <!-- End Hero Section -->
  <div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row fade-up">

          @foreach ($products as $product)
<div class="col-15 col-md-4 col-lg-3 mb-5">
    <div class="product-item p-3" style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(51,102,255,0.08); text-align: center;">
        <a href="{{ route('detailproduk', ['id' => $product->product_id]) }}" style="text-decoration: none; color: inherit;">
            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid product-thumbnail" alt="{{ $product->name }}">
            <h3 class="product-title mt-3">{{ $product->name }}</h3>
            <strong class="product-price d-block mb-1">Rp{{ number_format($product->price, 0, ',', '.') }}</strong>
            <span class="badge bg-secondary mb-3">Stock: 1</span> <!-- Tambahkan ini -->
        </a>
        @auth
            <form method="POST" action="{{ route('cart.add') }}" class="add-to-cart-form">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
            </form>
        @endauth
    </div>
</div>
@endforeach

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
  <!-- End Footer Section -->
  

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
  <script>
    const toastElList = [].slice.call(document.querySelectorAll('.toast'));
    const toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl); // Aktifkan toast
    });
    toastList.forEach(toast => toast.show()); // Tampilkan semua toast yang ada

    // Animasi fade-down saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
      const fadeDown = document.querySelector('.fade-down');
      if (fadeDown) {
        fadeDown.classList.add('show');
      }
      // Animasi fade-up saat halaman dimuat
      const fadeUp = document.querySelector('.fade-up');
      if (fadeUp) {
        fadeUp.classList.add('show');
      }
    });

    // Loading overlay: hide when all content is loaded
    window.addEventListener('load', function() {
      var overlay = document.getElementById('loading-overlay');
      if (overlay) {
        overlay.style.opacity = '0';
        setTimeout(function() {
          overlay.style.display = 'none';
        }, 400);
      }
    });

document.querySelectorAll('.add-to-cart-form').forEach(function(form) {
    form.addEventListener('submit', function(e) {
        // Tampilkan loading overlay
        var overlay = document.getElementById('loading-overlay');
        if (overlay) {
            overlay.style.display = 'block';
            overlay.style.opacity = '1';
        }
        // Biarkan form submit normal (refresh)
        // Set flag di localStorage agar toast muncul setelah reload
        localStorage.setItem('showCartToast', '1');
    });
});

// Saat halaman selesai dimuat, cek flag dan tampilkan toast jika perlu
window.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('showCartToast') === '1') {
        showCartToast();
        localStorage.removeItem('showCartToast');
    }
});

function showCartToast() {
    var toast = document.getElementById('cart-toast');
    toast.style.display = 'block';
    toast.style.opacity = '1';
    setTimeout(function() {
        toast.style.opacity = '0';
        setTimeout(function() {
            toast.style.display = 'none';
        }, 400);
    }, 3000); // 3 detik
}
  </script>

<!-- Floating Toast Notification -->
<div id="cart-toast" style="display:none; position:fixed; top:30px; right:30px; z-index:9999;">
    <div style="background:#e0e0e0; color:#222; border-radius:16px; box-shadow:0 4px 24px rgba(51,102,255,0.10); padding:18px 32px; display:flex; align-items:center; gap:16px; min-width:260px; animation:slideDown .6s;">
        <span style="font-size:2rem; animation:bounce 1s;">👟</span>
        <div>
            <strong>Berhasil!</strong><br>
            Sepatu berhasil dimasukkan ke keranjang.
        </div>
    </div>
</div>
<style>
@keyframes slideDown {
    from { opacity:0; transform:translateY(-40px);}
    to { opacity:1; transform:translateY(0);}
}
@keyframes bounce {
    0%,100%{transform:translateY(0);}
    30%{transform:translateY(-10px);}
    50%{transform:translateY(-20px);}
    70%{transform:translateY(-10px);}
}
</style>
</body>
</html>