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
	<link href="css/style.css" rel="stylesheet">
	<title>SuwandiSecBrand</title>
  <style>
  .icon-tooltip {
  position: relative;
  cursor: pointer;
}
.icon-tooltip .tooltip-text {
  visibility: hidden;
  opacity: 0;
  width: max-content;
  background: #222;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 4px 12px;
  position: absolute;
  z-index: 10;
  top: 120%; /* tampil di bawah ikon */
  left: 50%;
  transform: translateX(-50%);
  transition: opacity 0.2s;
  font-size: 13px;
  pointer-events: none;
  white-space: nowrap;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}
.icon-tooltip:hover .tooltip-text {
  visibility: visible;
  opacity: 1;
}
  </style>
</head>

<body>

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
        <li><a class="nav-link" href="#why-choose-section">About Us</a></li>
        <li><a class="nav-link" href="#contact-section">Contact Us</a></li>
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

  
<button id="help-book-btn" title="Help / Tutorial">
  <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="#3498db" stroke-width="2" stroke-linecap="round"/>
    <rect x="4" y="3" width="16" height="18" rx="2.5" stroke="#3498db" stroke-width="2"/>
    <path d="M8 7h8M8 11h8" stroke="#3498db" stroke-width="2" stroke-linecap="round"/>
  </svg>
</button>

<div id="help-popup">
  <button class="help-close" aria-label="Close">&times;</button>
  <h4 id="help-title"></h4>
  <p id="help-desc"></p>
  <div class="help-nav">
    <span class="help-step" id="help-step"></span>
    <div>
      <button class="help-btn" id="help-prev">Sebelumnya</button>
      <button class="help-btn" id="help-next">Selanjutnya</button>
      <button class="help-btn" id="help-done" style="display:none;">Selesai</button>
    </div>
  </div>
</div>
<div id="help-blur-overlay"></div>


	<!-- Start Hero Section -->
<div class="hero-carousel">
  <div class="carousel-slide active" style="background-image: url('images/rak.jpg');"></div>
  <div class="carousel-slide" style="background-image: url('images/rakbaru2.jpg');"></div>
  <div class="carousel-slide" style="background-image: url('images/rakbaru.jpg');"></div>

 <div class="hero-content container">
    <div class="row">
      <div class="col-lg-6">
        <div class="intro-excerpt">
          <h1>High Quality <span class="d-block">Second Shoes</span></h1>
          <p class="mb-4">Kami menjual berbagai macam jenis sepatu second dengan top quality sesuai seleramu!</p>
          <p>
            <a href="#" class="btn btn-secondary me-2">Shop Now</a>
            <a href="shop" class="btn btn-white-outline">Explore</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-btn prev">&#10094;</button>
  <button class="carousel-btn next">&#10095;</button>
</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Product Section -->
	<div class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
					<h2 class="mb-4 section-title">Berikut adalah most wanted sneakers yang kami jual</h2>
					<p class="mb-4">Kualitas barang second yang gak perlu diragukan lagi </p>
					<p><a href="shop" class="btn">Explore</a></p>
				</div> 

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="shop">
						<img src="images/sepatu1.jpg" class="img-fluid product-thumbnail">
						<h3 class="product-title">AJ1 High Green</h3>
						<strong class="product-price">300.000</strong>
						<span class="icon-cross"><img src="images/cross.svg" class="img-fluid"></span>
					</a>
				</div> 

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="shop">
						<img src="images/sepatu2.jpg" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kobe</h3>
						<strong class="product-price">320.000</strong>
						<span class="icon-cross"><img src="images/cross.svg" class="img-fluid"></span>
					</a>
				</div>

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart">
						<img src="images/sepatu3.jpg" class="img-fluid product-thumbnail">
						<h3 class="product-title">Airmax 720</h3>
						<strong class="product-price">280.000</strong>
						<span class="icon-cross"><img src="images/cross.svg" class="img-fluid"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Product Section -->

			<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/sp5.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="images/sp4.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="images/sp6.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">Kami Akan Membantu Anda Mencari Style Yang Pas</h2>
						<p>Terdapat banyak pilihan di toko SuwandiSecBrand Kamu bisa memilih mana sepatu yang sesuai dengan seleramu dan untuk pemakaian sehari-hari, diantaranya:</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Sepatu casual</li>
							<li>Sepatu Sport</li>
						</ul>
						<p><a href="shop" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/sp5.jpg" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nike Kobe</h3>
								<p>Nike Basket UK 43 Kondisi Good</p>
								<p><a href="shop">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/sp4.jpg" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Airmax 94</h3>
								<p>Nike seri Airmax UK 44 Kondisi Good</p>
								<p><a href="shop">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/sp6.jpg" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>AF1 Cloth</h3>
								<p>Nike seri AF1 Collab cloth</p>
								<p><a href="shop">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

<!-- Start Why Choose Us Section -->
<section id="why-choose-section">
<div class="why-choose-section" style="display: flex; justify-content: center; align-items: center; text-align: center; min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">

                <h2 class="section-title">Why Choose Us</h2>
                <p>  Halo teman teman pelanggan setia di SuwandiSecBrand, disini kami menawarkan sepatu import dengan harga yang murah dan dengan kualitas terbaik. Kalau mau pantau live kita bisa di follow akun sosmed dibawah ya.
					Menyediakan berbagai macam sepatu berkualitas dengan harga terjangkau dan terpercaya</p>
                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/truck.svg" alt="Truck Icon" class="img-fluid">
                            </div>
                            <h3>Fast Shipping</h3>
                            <p>Proses pengiriman yang cepat.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/bag.svg" alt="Shop Icon" class="img-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Proses pembelanjaan yang mudah anti ribet.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Support Icon" class="img-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Admin yang selalu standby jika terjadi masalah ataupun kendala.</p>
                        </div>
                    </div>
					<div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                            <img src="images/package.svg" alt="packet Icon" class="img-fluid" style="width:46px;">
                            </div>
                            <h3>100% Warranty</h3>
                            <p>Produk bergaransi dan terjamin original.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Start Contact Form -->
<section id="contact-section">
<div class="untree_co-section">
  <div class="container">

    <h2 class="section-title text-center mb-5">Contact</h2> <!-- Judul Contact -->

    <div class="block">
      <div class="row justify-content-center">

        <div class="col-md-8 col-lg-8 pb-4">
          <div class="row mb-5">
            <div class="col-lg-4">
              <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                <div class="service-icon color-1 mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>
                </div>
                <div class="service-contents">
                  <p>Jl. KArya Wisata Ujung No.43, Medan</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                <div class="service-icon color-1 mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                  </svg>
                </div>
                <div class="service-contents">
                  <p>suwandisecbrand@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                <div class="service-icon color-1 mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                </div>
                <div class="service-contents">
                  <p>+62895383713434</p>
                </div>
              </div>
            </div>
          </div>

          <form id="whatsappForm">
            <div class="row">
              <div class="form-group">
                <label class="text-black" for="fname">Full name</label>
                <input type="text" class="form-control" id="fname" required>
              </div>
            </div>
            <div class="form-group">
              <label class="text-black" for="email">Email address</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group mb-5">
              <label class="text-black" for="message">Pesan</label>
              <textarea name="" class="form-control" id="message" cols="30" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary-hover-outline">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Contact Form -->


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
		
		<div class="scroll-btn-group">
  <button id="scroll-top-btn" title="Scroll ke Atas">
    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
      <path d="M12 5v14M12 5l-7 7M12 5l7 7" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
  <button id="scroll-bottom-btn" title="Scroll ke Bawah">
    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
      <path d="M12 19V5M12 19l-7-7M12 19l7-7" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
</div>

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
		<script>
  const slides = document.querySelectorAll(".carousel-slide");
  const nextBtn = document.querySelector(".carousel-btn.next");
  const prevBtn = document.querySelector(".carousel-btn.prev");
  let currentIndex = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove("active");
      if (i === index) slide.classList.add("active");
    });
  }

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  });

  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  });

  // Optional: auto slide every 5 seconds
  setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }, 5000);

   // Tutorial steps
// Selector tombol sesuai urutan step
@guest
// Untuk user BELUM login
const helpTargets = [
  ".custom-navbar-nav .nav-link[href='/']",         // Home
  ".custom-navbar-nav .nav-link[href='shop']",      // Shop
  ".custom-navbar-nav .nav-link[href='#why-choose-section']", // About Us
  ".custom-navbar-nav .nav-link[href='#contact-section']",    // Contact Us
  ".custom-navbar-nav .nav-link[href*='login']",    // Login
  ".custom-navbar-nav .nav-link[href*='register']", // Register
];
const helpSteps = [
  { title: "Tombol Home", desc: "Klik <b>Home</b> untuk kembali ke halaman utama website." },
  { title: "Tombol Shop", desc: "Klik <b>Shop</b> untuk melihat dan membeli produk yang tersedia." },
  { title: "Tombol About Us", desc: "Klik <b>About Us</b> untuk mengetahui informasi tentang toko ini." },
  { title: "Tombol Contact Us", desc: "Klik <b>Contact Us</b> untuk menghubungi admin atau pemilik toko." },
  { title: "Tombol Login", desc: "Klik <b>Login</b> untuk masuk ke akun Anda." },
  { title: "Tombol Register", desc: "Klik <b>Register</b> untuk membuat akun baru." }
];
@else
// Untuk user SUDAH login
const helpTargets = [
  ".custom-navbar-nav .nav-link[href='/']",         // Home
  ".custom-navbar-nav .nav-link[href='shop']",      // Shop
  ".custom-navbar-nav .nav-link[href='#why-choose-section']", // About Us
  ".custom-navbar-nav .nav-link[href='#contact-section']",    // Contact Us
  ".navbar-nav.ms-3 .nav-link[href='user']",        // User
  ".navbar-nav.ms-3 .nav-link[href='cart']",        // Cart
  ".navbar-nav.ms-3 .nav-link[href='history']",     // History
  ".navbar-nav.ms-3 .nav-link[href='#']",           // Logout
];
const helpSteps = [
  { title: "Tombol Home", desc: "Klik <b>Home</b> untuk kembali ke halaman utama website." },
  { title: "Tombol Shop", desc: "Klik <b>Shop</b> untuk melihat dan membeli produk yang tersedia." },
  { title: "Tombol About Us", desc: "Klik <b>About Us</b> untuk mengetahui informasi tentang toko ini." },
  { title: "Tombol Contact Us", desc: "Klik <b>Contact Us</b> untuk menghubungi admin atau pemilik toko." },
  { title: "Tombol User", desc: "Klik <b>User</b> untuk melihat profil dan pengaturan akun Anda." },
  { title: "Tombol Cart", desc: "Klik <b>Cart</b> untuk melihat keranjang belanja Anda." },
  { title: "Tombol History", desc: "Klik <b>History</b> untuk melihat riwayat transaksi Anda." },
  { title: "Tombol Logout", desc: "Klik <b>Logout</b> untuk keluar dari akun Anda." }
];
@endguest

let helpIndex = 0;

const helpBtn = document.getElementById('help-book-btn');
const helpPopup = document.getElementById('help-popup');
const helpTitle = document.getElementById('help-title');
const helpDesc = document.getElementById('help-desc');
const helpStep = document.getElementById('help-step');
const helpPrev = document.getElementById('help-prev');
const helpNext = document.getElementById('help-next');
const helpDone = document.getElementById('help-done');
const helpClose = document.querySelector('.help-close');
const helpBlur = document.getElementById('help-blur-overlay');

function highlightTarget(idx) {
  // Remove previous highlight
  document.querySelectorAll('.help-highlight').forEach(el => el.classList.remove('help-highlight'));
  // Show blur overlay
  helpBlur.style.display = 'block';

  // Highlight current target
  const target = document.querySelector(helpTargets[idx]);
  if (target) {
    target.classList.add('help-highlight');
    // Scroll to target if needed
    const rect = target.getBoundingClientRect();
    if (rect.top < 0 || rect.bottom > window.innerHeight) {
      target.scrollIntoView({behavior: "smooth", block: "center"});
    }
  }
}

function removeHighlight() {
  document.querySelectorAll('.help-highlight').forEach(el => el.classList.remove('help-highlight'));
  helpBlur.style.display = 'none';
}

function showHelpStep(idx) {
  helpTitle.innerHTML = helpSteps[idx].title;
  helpDesc.innerHTML = helpSteps[idx].desc;
  helpStep.textContent = `Langkah ${idx+1} dari ${helpSteps.length}`;
  helpPrev.disabled = idx === 0;
  helpNext.style.display = idx === helpSteps.length-1 ? 'none' : '';
  helpDone.style.display = idx === helpSteps.length-1 ? '' : 'none';

  // Highlight sesuai step
  if (idx < helpTargets.length) {
    highlightTarget(idx);
  } else {
    removeHighlight();
  }
}

helpBtn.onclick = function() {
  helpPopup.style.display = 'flex';
  helpIndex = 0;
  showHelpStep(helpIndex);
};
helpClose.onclick = function() {
  helpPopup.style.display = 'none';
  removeHighlight();
};
helpPrev.onclick = function() {
  if (helpIndex > 0) {
    helpIndex--;
    showHelpStep(helpIndex);
  }
};
helpNext.onclick = function() {
  if (helpIndex < helpSteps.length-1) {
    helpIndex++;
    showHelpStep(helpIndex);
  }
};
helpDone.onclick = function() {
  helpPopup.style.display = 'none';
  removeHighlight();
};

// Tampilkan help book otomatis HANYA untuk user baru (sekali saja per device/login)
window.addEventListener('DOMContentLoaded', function() {
  // Ganti key sesuai kebutuhan, misal: 'helpbook_shown_v1'
  let helpKey = 'helpbook_shown_v1';
  @if(Auth::check())
    helpKey += '_user_{{ Auth::id() }}';
  @endif

  if (!localStorage.getItem(helpKey)) {
    setTimeout(() => {
      helpBtn.click();
      localStorage.setItem(helpKey, 'yes');
    }, 800);
  }
});

// Jika user klik di luar popup, tutup popup dan hilangkan highlight
helpBlur.onclick = function() {
  helpPopup.style.display = 'none';
  removeHighlight();
};
document.getElementById('scroll-top-btn').onclick = function() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};
// Scroll ke bawah
document.getElementById('scroll-bottom-btn').onclick = function() {
  window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
};

document.getElementById('scroll-top-btn').onclick = function() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};
document.getElementById('scroll-bottom-btn').onclick = function() {
  window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
};
	</script>

	</body>

</html>
