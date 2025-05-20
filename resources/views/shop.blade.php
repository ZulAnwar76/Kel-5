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
  <title>SuwandiSecBrand - Premium Shoes</title>
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
			  <li class><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="shop">Shop</a></li>
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
					<a class="nav-link" href="history">
					  <img src="images/history.svg" alt="History" width="24" style="filter: invert(1);">
					</a>
				  </li>		
			  </ul>		
		  </div>
		</div>
	  </nav>
  <!-- End Header/Navigation -->

  <!-- Start Hero Section -->
  <div class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="intro-excerpt">
            <h1 class="mb-4">Step into Style</h1>
            <p class="mb-4">Discover our latest collection of premium sneakers and shoes. Comfort meets fashion in every step.</p>
            <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="shop" class="btn btn-white-outline">Explore</a></p>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img src="images/sp33.jpg" class="img-fluid" alt="Latest Shoe Collection" style="max-height: 400px;">
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->
  <div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">

            @foreach ($products as $product)
                <div class="col-15 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{ route('detailproduk', ['id' => $product->product_id]) }}">
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid product-thumbnail" alt="{{ $product->name }}">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <strong class="product-price">Rp{{ number_format($product->price, 0, ',', '.') }}</strong>
                    </a>

                    <!-- Jika user login, tampilkan tombol Add to Cart -->
                    @auth
                        <form method="POST" action="{{ route('cart.add') }}" class="mt-2">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    @else
                       
                    @endauth
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
  <script>
    const toastElList = [].slice.call(document.querySelectorAll('.toast'));
    const toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl); // Aktifkan toast
    });
    toastList.forEach(toast => toast.show()); // Tampilkan semua toast yang ada
</script>

</body>
</html>