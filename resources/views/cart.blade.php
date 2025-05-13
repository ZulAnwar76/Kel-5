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
      <a class="navbar-brand" href="index">SuwandiSecBrand<span>.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
          <li><a class="nav-link" href="shop">Shop</a></li>
          <li><a class="nav-link" href="about">About us</a></li>
          <li><a class="nav-link" href="contact">Contact us</a></li>
          <li><a class="nav-link" href="login">Login</a></li>
          <li><a class="nav-link" href="register">Register</a></li>
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
            <h1>Cart</h1>
          </div>
        </div>
        <div class="col-lg-7">

        </div>
      </div>
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
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remove</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cartItems as $item)
                <tr>
                  <td class="product-thumbnail">
                    <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">{{ $item->product->name }}</h2>
                  </td>
                  <td>Rp{{ number_format($item->product->price, 0, ',', '.') }}</td>
                  <td>Rp{{ number_format($item->product->price, 0, ',', '.') }}</td>
                  <td>
                    <form method="POST" action="{{ route('cart.remove', $item->cart_id) }}">
                      @csrf
                      <button type="submit" class="btn btn-black btn-sm">X</button>
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
                <button class="btn btn-outline-black btn-lg py-3 btn-block" onclick="window.location='shop'">Continue Shopping</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout'">Proceed To Checkout</button>
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