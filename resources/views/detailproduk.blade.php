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
    /* Navbar Styling */
    .navbar {
      background-color: #3b5d50;
      /* Warna hijau tua seperti di homepage */
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
      font-size: 24px;
    }

    .navbar-brand span {
      color: #fdda2a;
      /* Warna kuning seperti tombol */
    }

    .navbar-nav .nav-link {
      color: #ddd;
    }

    .navbar-nav .nav-link:hover {
      color: #fdda2a;
      /* Warna kuning */
    }

    .breadcrumb {
      background-color: transparent;
      color: #fdda2a;
    }

    .breadcrumb a {
      color: #fdda2a;
      text-decoration: none;
    }

    .breadcrumb .active {
      color: #fff;
    }

    body {
      background-color: #3b5d50;
      /* Latar belakang hijau tua */
      color: #fff;
    }

    .container {
      background-color: #ffffff;
      color: #000;
      border-radius: 8px;
      padding: 20px;
    }

    .btn-yellow {
      background-color: #fdda2a;
      color: #000;
      font-weight: bold;
      border: none;
    }

    .btn-yellow:hover {
      background-color: #e5c721;
      color: #000;
    }

    .related-products .card img {
      max-height: 180px;
      object-fit: cover;
    }

    footer {
      background-color: #3b5d50;
      color: #fff;
      text-align: center;
      padding: 10px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index">SuwandiSecBrand<span>.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="shop">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="about">About us</a></li>
          <li class="nav-item"><a class="nav-link" href="services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="contact">Contact us</a></li>
          <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Breadcrumb -->


  <!-- Product Section -->
  <div class="container mt-4">
    <div class="row">
      <!-- Gambar Produk -->
      <div class="col-md-6">
        <img id="mainImage" src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
      </div>

      <!-- Detail Produk -->
      <div class="col-md-6">
        <h2 class="fw-bold">{{ $product->name }}</h2>
        <h5>Harga:</h5>
        <h4 class="text-danger fw-bold">Rp{{ number_format($product->price, 0, ',', '.') }}</h4>
        <h5>Deskripsi:</h5>
        <p>{{ $product->description }}</p>
        <h5>Ukuran:</h5>
        <p class="btn btn-dark btn-sm disabled">{{ $product->size }}</p>
        <button class="btn btn-yellow btn-lg mt-3">Beli Sekarang</button>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <p>&copy; {{ date('Y') }} SuwandiSecBrand. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>