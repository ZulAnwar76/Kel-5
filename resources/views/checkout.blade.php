<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <title>SuwandiSecBrand - Checkout</title>

  <style>
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
  padding-bottom: 20px; }
  .custom-navbar .navbar-brand {
    font-size: 32px;
    font-weight: 600; }
    .custom-navbar .navbar-brand > span {
      opacity: .4; }
  .custom-navbar .navbar-toggler {
    border-color: transparent; }
    .custom-navbar .navbar-toggler:active, .custom-navbar .navbar-toggler:focus {
      -webkit-box-shadow: none;
      box-shadow: none;
      outline: none; }
  @media (min-width: 992px) {
    .custom-navbar .custom-navbar-nav li {
      margin-left: 15px;
      margin-right: 15px; } }
  .custom-navbar .custom-navbar-nav li a {
    font-weight: 500;
    color: #ffffff !important;
    opacity: .5;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    position: relative; }
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
        transition: .15s all ease-out; } }
    .custom-navbar .custom-navbar-nav li a:hover {
      opacity: 1; }
      .custom-navbar .custom-navbar-nav li a:hover:before {
        width: calc(100% - 16px); }
  .custom-navbar .custom-navbar-nav li.active a {
    opacity: 1; }
    .custom-navbar .custom-navbar-nav li.active a:before {
      width: calc(100% - 16px); }
  .custom-navbar .custom-navbar-cta {
    margin-left: 0 !important;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    @media (min-width: 768px) {
      .custom-navbar .custom-navbar-cta {
        margin-left: 40px !important; } }
    .custom-navbar .custom-navbar-cta li {
      margin-left: 0px;
      margin-right: 0px; }
      .custom-navbar .custom-navbar-cta li:first-child {
        margin-right: 20px; }

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

    /* Payment Methods */
    .payment-methods {
      margin: 2rem 0;
    }

    .payment-methods button {
      width: 100%;
      margin-bottom: 1rem;
      padding: 1.25rem;
      border: 2px solid #e2e8f0;
      border-radius: 12px;
      background: white;
      color: var(--primary-blue);
      font-weight: 600;
      font-size: 1rem;
      transition: var(--transition);
      position: relative;
      overflow: hidden;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
    }

    .payment-methods button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: var(--gradient-primary);
      transition: var(--transition);
      z-index: 0;
    }

    .payment-methods button span {
      position: relative;
      z-index: 1;
    }

    .payment-methods button:hover {
      border-color: var(--secondary-blue);
      transform: translateY(-1px);
      box-shadow: var(--shadow-secondary);
    }

    .payment-methods button:hover::before {
      left: 0;
    }

    .payment-methods button:hover span {
      color: white;
    }

    .payment-methods button.active {
      background: var(--gradient-primary) !important;
      border-color: var(--primary-blue) !important;
      color: white !important;
      transform: translateY(-1px);
      box-shadow: var(--shadow-primary);
    }

    .payment-methods button.active::before {
      left: 0;
    }

    .payment-details {
      background: var(--light-blue);
      border-radius: 12px;
      padding: 1.5rem;
      margin-top: 1rem;
      border-left: 4px solid var(--secondary-blue);
      animation: slideDown 0.3s ease-out;
    }

    .payment-details p {
      margin: 0.5rem 0;
      color: var(--primary-blue);
      font-weight: 500;
    }

    .payment-details strong {
      color: var(--dark-blue);
    } */

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

    /* File Upload */
    .upload-section {
      background: var(--gradient-secondary);
      border-radius: 16px;
      padding: 2rem;
      text-align: center;
      border: 2px dashed var(--accent-blue);
      margin: 2rem 0;
      transition: var(--transition);
    }

    .upload-section:hover {
      border-color: var(--secondary-blue);
      background: linear-gradient(135deg, #bfdbfe 0%, #93c5fd 100%);
    }

    .upload-section h5 {
      color: var(--primary-blue);
      font-weight: 700;
      margin-bottom: 1.5rem;
      font-size: 1.25rem;
    }

    .custom-file-upload {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: white;
      border: 2px solid var(--accent-blue);
      border-radius: 50px;
      padding: 1rem 2rem;
      cursor: pointer;
      box-shadow: var(--shadow-secondary);
      transition: var(--transition);
      color: var(--primary-blue);
      font-weight: 600;
      min-width: 280px;
    }

    .custom-file-upload:hover {
      background: var(--secondary-blue);
      color: white;
      transform: translateY(-2px);
      box-shadow: var(--shadow-primary);
    }

    .upload-icon {
      width: 24px;
      height: 24px;
      margin-right: 12px;
      transition: var(--transition);
    }

    .custom-file-upload:hover .upload-icon {
      transform: scale(1.1);
    }

    .file-name {
      font-size: 1rem;
    }

    .upload-warning {
      color: #dc2626;
      font-weight: 600;
      margin-top: 1rem;
      font-size: 0.95rem;
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
      background: #3366FF;
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
  background: #3366FF; }
  .footer-section .relative {
    position: relative; }
  .footer-section a {
    text-decoration: none;
    color: #2f2f2f;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .footer-section a:hover {
      color: rgba(47, 47, 47, 0.5); }
  .footer-section .subscription-form {
    margin-bottom: 40px;
    position: relative;
    z-index: 2;
    margin-top: 100px; }
    @media (min-width: 992px) {
      .footer-section .subscription-form {
        margin-top: 0px;
        margin-bottom: 80px; } }
    .footer-section .subscription-form h3 {
      font-size: 18px;
      font-weight: 500;
      color: #3b5d50; }
    .footer-section .subscription-form .form-control {
      height: 50px;
      border-radius: 10px;
      font-family: "Inter", sans-serif; }
      .footer-section .subscription-form .form-control:active, .footer-section .subscription-form .form-control:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: #3b5d50;
        -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2); }
      .footer-section .subscription-form .form-control::-webkit-input-placeholder {
        font-size: 14px; }
      .footer-section .subscription-form .form-control::-moz-placeholder {
        font-size: 14px; }
      .footer-section .subscription-form .form-control:-ms-input-placeholder {
        font-size: 14px; }
      .footer-section .subscription-form .form-control:-moz-placeholder {
        font-size: 14px; }
    .footer-section .subscription-form .btn {
      border-radius: 10px !important; }
  .footer-section .sofa-img {
    position: absolute;
    top: -200px;
    z-index: 1;
    right: 0; }
    .footer-section .sofa-img img {
      max-width: 380px; }
  .footer-section .links-wrap {
    margin-top: 0px; }
    @media (min-width: 992px) {
      .footer-section .links-wrap {
        margin-top: 54px; } }
    .footer-section .links-wrap ul li {
      margin-bottom: 10px; }
  .footer-section .footer-logo-wrap .footer-logo {
    font-size: 32px;
    font-weight: 500;
    text-decoration: none;
    color: lab(100% 0.01 -0.01); }
  .footer-section .custom-social li {
    margin: 2px;
    display: inline-block; }
    .footer-section .custom-social li a {
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      display: inline-block;
      background: #dce5e4;
      color: #3366FF;
      border-radius: 50%; }
      .footer-section .custom-social li a:hover {
        background: #3b5d50;
        color: #3366FF; }
  .footer-section .border-top {
    border-color: #dce5e4; }
    .footer-section .border-top.copyright {
      font-size: 14px !important; }


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

/* Tambahkan di <style> checkout.blade.php */
/* Responsive Order Table: Card Style on Mobile */
@media (max-width: 767.98px) {
  .site-block-order-table,
  .site-block-order-table thead,
  .site-block-order-table tbody,
  .site-block-order-table th,
  .site-block-order-table td,
  .site-block-order-table tr {
    display: block;
    width: 100%;
  }
  .site-block-order-table thead {
    display: none;
  }
  .site-block-order-table tr {
    margin-bottom: 1.2rem;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(30,58,138,0.08);
    background: #fff;
    padding: 1rem 0.5rem;
  }
  .site-block-order-table td {
    text-align: left;
    padding: 0.5rem 1rem;
    border: none;
    position: relative;
  }
  .site-block-order-table td:before {
    content: attr(data-label);
    font-weight: 600;
    color: #1e3a8a;
    display: block;
    margin-bottom: 0.25rem;
    font-size: 0.95rem;
  }
}

/* Responsive tombol & form */
@media (max-width: 767.98px) {
  .btn-group-actions {
    flex-direction: column;
    gap: 0.5rem;
  }
  .btn-back, .btn-order {
    min-width: 100%;
    font-size: 1rem;
    padding: 0.8rem 1rem;
  }
  .form-container, .section-container, .upload-section {
    padding: 1rem !important;
  }
}

/* Efek interaktif tombol & input */
.btn-order:active, .btn-back:active {
  filter: brightness(0.95);
  transform: scale(0.98);
}
input:focus, select:focus, textarea:focus {
  outline: 2px solid #3b82f6;
  box-shadow: 0 0 0 2px #3b82f633;
}

/* Efek hover pada tombol pembayaran */
.payment-methods button:hover, .payment-methods button.active {
  background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%) !important;
  color: #fff !important;
  border-color: #1e3a8a !important;
  box-shadow: 0 8px 24px rgba(30,58,138,0.15);
}

/* Navbar brand kecil di mobile */
@media (max-width: 500px) {
  .navbar-brand {
    font-size: 1.2rem !important;
  }
}
  </style>

</head>

<body>

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
           <h1><i class="fas fa-cash-register me-3"></i>Checkout</h1>
        </div>
    </div>
    <!-- End Hero Section -->


    <div class="untree_co-section">
    <div class="container">
        <form action="{{ route('checkout.process') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Billing Details -->
                <div class="col-md-6">
                    <div class="section-container">
                        <h2 class="section-title"><i class="fas fa-user-edit me-2"></i>Billing Details</h2>
                        <div class="form-group">
                            <label for="c_fname"><i class="fas fa-user me-2"></i>Nama</label>
                            <input type="text" class="form-control" id="c_fname" name="c_fname" value="{{ $customer->name ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="c_address"><i class="fas fa-map-marker-alt me-2"></i>Address</label>
                            <input type="text" class="form-control" id="c_address" name="c_address" value="{{ $customer->address ?? '' }}" placeholder="Street address" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_email"><i class="fas fa-envelope me-2"></i>Email</label>
                                <input type="email" class="form-control" id="c_email" name="c_email" value="{{ $customer->email ?? '' }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="c_phone"><i class="fas fa-phone me-2"></i>Phone</label>
                                <input type="tel" class="form-control" id="c_phone" name="c_phone" value="{{ $customer->phone ?? '' }}" required>
                            </div>
                        </div>
                    </div>
                </div>

      <!-- Your Order -->
                <div class="col-md-6">
                    <div class="section-container">
                        <h2 class="section-title"><i class="fas fa-shopping-bag me-2"></i>Your Order</h2>
                        <table class="table site-block-order-table mb-5">
                            <thead>
                                <th><i class="fas fa-box me-2"></i>Product</th>
                                <th><i class="fas fa-money-bill-wave me-2"></i>Total</th>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $item)
                                <tr>
                                    <td data-label="Product">{{ $item->product->name }}</td>
                                    <td data-label="Total">Rp{{ number_format($item->product->price, 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td data-label="Order Total" class="text-black font-weight-bold">Order Total</td>
                                    <td data-label="Order Total" class="text-black font-weight-bold">Rp{{ number_format($total, 0, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>


                        <!-- Payment Methods -->
                        <div class="payment-methods">
                            <button type="button" class="btn btn-outline-secondary" id="bank-transfer" onclick="selectPayment(this, 'Direct Bank Transfer')">
                                <span><i class="fas fa-university me-2"></i>Direct Bank Transfer</span>
                            </button>
                            <div id="bank-transfer-details" class="payment-details collapse">
                                <p class="mb-2"><i class="fas fa-info-circle me-2"></i>Transfer ke: <strong>106 0002133380 Mandiri</strong> atas nama <strong>Farida Hanum</strong></p>
                                <p class="mb-0"><i class="fas fa-info-circle me-2"></i>Atau ke: <strong>106 0062642038 BNI</strong> atas nama <strong>Farida Hanum</strong></p>
                            </div>

                            <button type="button" class="btn btn-outline-secondary" id="dana" onclick="selectPayment(this, 'Dana')">
                                <span><i class="fas fa-mobile-alt me-2"></i>Dana</span>
                            </button>
                            <div id="dana-details" class="payment-details collapse">
                                <p class="mb-0"><i class="fas fa-phone me-2"></i>Nomor Dana: <strong>+62 896-5326-6351</strong></p>
                            </div>
                        </div>


<!-- Bukti Pembayaran -->
                        <div class="upload-section">
                            <h5><i class="fas fa-receipt me-2"></i>Bukti Pembayaran</h5>
                            <label for="payment-proof" class="custom-file-upload">
                                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                <span id="file-name" class="file-name">Pilih file bukti pembayaran...</span>
                            </label>
                            <input type="file" name="payment_proof" id="payment-proof" class="form-control-file d-none" accept="image/*" onchange="displayFileName()">
                            <p class="upload-warning"><i class="fas fa-exclamation-triangle me-2"></i>*wajib menyertakan bukti pembayaran</p>
                        </div>


<!-- Tombol Kembali dan Place Order -->
                        <div class="btn-group-actions">
                            <button type="button" class="btn-back" onclick="goBack()">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </button>
                            <button type="submit" class="btn-order" onclick="placeOrder()">
                                <i class="fas fa-check me-2"></i>Place Order
                            </button>
                        </div>


              <script>
                // Fungsi untuk tombol "Kembali"
                function goBack() {
                  window.history.back(); // Kembali ke halaman sebelumnya
                }

                // Fungsi untuk tombol "Place Order"
                function placeOrder() {
                  // Redirect ke halaman thankyou.blade.php
                  window.location.href = "/thankyou"; // Pastikan rute ini sesuai dengan aplikasi Anda
                }
              </script>

              <script>
                function displayFileName() {
                  const input = document.getElementById('payment-proof');
                  const fileName = input.files.length > 0 ? input.files[0].name : 'Pilih file bukti pembayaran...';
                  document.getElementById('file-name').textContent = fileName;
                }

                function goBack() {
                  window.history.back();
                }

                function placeOrder() {
                  const fileInput = document.getElementById('payment-proof');
                  if (!fileInput.files.length) {
                    alert('Harap unggah bukti pembayaran terlebih dahulu!');
                    return;
                  }
                }
              </script>

            </div>
          </div>
      </div>
      </form>
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

  <script>
    function selectPayment(button, method) {
      // Reset all buttons
      const buttons = document.querySelectorAll('.payment-methods button');
      buttons.forEach(btn => btn.classList.remove('active'));

      // Activate selected button
      button.classList.add('active');

      // Collapse other payment details
      document.querySelectorAll('.payment-methods .collapse').forEach(collapse => collapse.classList.remove('show'));

      // Show selected payment details
      const detailId = button.id + '-details';
      document.getElementById(detailId).classList.add('show');
      console.log('Selected Payment Method:', method);
    }
  </script>


  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
