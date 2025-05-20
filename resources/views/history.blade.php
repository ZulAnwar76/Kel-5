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
  <title>History Order | SuwandiSecBrand</title>
  <style>
	html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

.history-order-section {
    margin-top: 50px; /* Memberikan jarak 40px dari navbar */
    flex: 1; /* Tetap mempertahankan properti sebelumnya */
}


.footer-section {
    background-color: #f8f9fa;
    text-align: center;
    padding: 20px 0;
    border-top: 1px solid #dee2e6;
}

  </style>
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
						<a class="nav-link" href="history">
						  <img src="images/history.svg" alt="History" width="24" style="filter: invert(1);">
						</a>
					  </li>	
        </ul>   
      </div>
    </div>
  </nav>
  <!-- End Header/Navigation -->

  <!-- Start History Order Section -->
  <div class="history-order-section">
    <div class="container">
      <h2 class="section-title mb-4">Riwayat Pemesanan</h2>
      <p class="mb-4">Berikut adalah riwayat pesanan Anda:</p>

      <div class="order-history">
    @foreach($transactions as $transaction)
    <div class="order-item d-flex justify-content-between mb-3">
        <div class="order-info">
            <h4>Order #{{ $transaction->transaction_id }}</h4>
            <p>Tanggal Pesanan: {{ $transaction->created_at->format('Y-m-d') }}</p>
            <p>Status: 
                @if($transaction->status === 'approved')
                    <span class="badge bg-success">Approved</span>
                @elseif($transaction->status === 'declined')
                    <span class="badge bg-danger">Declined</span>
                @else
                    <span class="badge bg-warning">Pending</span>
                @endif
            </p>
        </div>
        <div class="order-summary">
            <p>Jumlah: {{ $transaction->item_count }} item</p>
            <p>Total: IDR {{ number_format($transaction->total_price, 0, ',', '.') }}</p>
        </div>
    </div>
    @endforeach
</div>

    </div>
  </div>
  <!-- End History Order Section -->

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
