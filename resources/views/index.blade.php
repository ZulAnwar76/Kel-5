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
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
		<div class="container">
		  <a class="navbar-brand" href="/">SuwandiSecBrand<span>.</span></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarsFurni">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
			  <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
			  <li><a class="nav-link" href="shop">Shop</a></li>
			  <li><a class="nav-link" href="about">About us</a></li>
			  <li><a class="nav-link" href="contact">Contact us</a></li>
        @if (!Auth::check())
            <li><a class="nav-link" href="{{ route('login.show') }}">Login</a></li>
            <li><a class="nav-link" href="{{ route('register.show') }}">Register</a></li>
        @else
            <!-- If user is logged in, show Logout Link -->
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

        @endif
			</ul>
			<ul class="navbar-nav ms-5">
				<li class="nav-item">
				  <a class="nav-link" href="user"><img src="images/user.svg" alt="User" width="24"></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="cart"><img src="images/cart.svg" alt="Cart" width="24"></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="wishlist"><img src="images/wishlist.svg" alt="Wishlist" width="24"></a>
				</li>
			  </ul>		
		  </div>
		</div>
	  </nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>High Quality <span clsas="d-block">Second Shoes</span></h1>
						<p class="mb-4">Kami menjual berbagai macam jenis sepatu second dengan top quality sesuai seleramu!</p>
						<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="shop" class="btn btn-white-outline">Explore</a></p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<img src="images/rak.jpg" class="img-fluid hero-img">
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
					<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
					<p class="mb-4">Kualitas barang second yang gak perlu diragukan lagi </p>
					<p><a href="shop" class="btn">Explore</a></p>
				</div> 

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart">
						<img src="images/sepatu1.jpg" class="img-fluid product-thumbnail">
						<h3 class="product-title">AJ1 High Green</h3>
						<strong class="product-price">$50.00</strong>
						<span class="icon-cross"><img src="images/cross.svg" class="img-fluid"></span>
					</a>
				</div> 

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart">
						<img src="images/sepatu2.jpg" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kobe</h3>
						<strong class="product-price">$78.00</strong>
						<span class="icon-cross"><img src="images/cross.svg" class="img-fluid"></span>
					</a>
				</div>

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart">
						<img src="images/sepatu3.jpg" class="img-fluid product-thumbnail">
						<h3 class="product-title">Airmax 720</h3>
						<strong class="product-price">$43.00</strong>
						<span class="icon-cross"><img src="images/cross.svg" class="img-fluid"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Menyediakan berbagai macam sepatu berkualitas dengan harga terjangkau dan terpercaya</p>
		
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
						</div>
					</div>
		
					<!-- Bagian gambar -->
					<div class="col-lg-6">
						<div class="image-section">
							<img src="images/keranjangfull1.jpg" alt="Keranjang Full" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End Why Choose Us Section -->

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
							<li>Sepatu Unisex</li>
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
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Section -->
		


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
