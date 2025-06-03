<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan - SuwandiSecBrand</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #3b82f6;
            --accent-blue: #1e40af;
            --sky-blue: #0ea5e9;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --charcoal: #1f2937;
            --slate: #64748b;
            --light-gray: #f8fafc;
            --white: #ffffff;
            --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-soft: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--charcoal);
            background-color: #D3DEFF;
            min-height: 100vh;
        }

        /* Custom Navbar Styles */
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


        /* Main Content Container */
        .order-history {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Empty State */
        .empty-state {
            background: var(--white);
            border-radius: 20px;
            padding: 4rem 2rem;
            box-shadow: var(--shadow-soft);
            margin: 2rem 0;
        }

        .empty-icon {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Statistics Cards */
        .order-stats {
            margin-bottom: 3rem;
        }

        .stat-card {
            background: var(--white);
            border-radius: 15px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            box-shadow: var(--shadow-soft);
            transition: var(--transition-smooth);
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-primary);
            color: var(--white);
            font-size: 1.5rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .stat-icon.success {
            background: linear-gradient(135deg, var(--success) 0%, #047857 100%);
        }

        .stat-icon.warning {
            background: linear-gradient(135deg, var(--warning) 0%, #d97706 100%);
        }

        .stat-icon.danger {
            background: linear-gradient(135deg, var(--danger) 0%, #dc2626 100%);
        }

        .stat-content h4 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--charcoal);
            margin-bottom: 0.25rem;
        }

        .stat-content p {
            color: var(--slate);
            font-size: 0.9rem;
            margin: 0;
        }

        /* Order Items */
        .order-item {
            background: var(--white);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-soft);
            transition: var(--transition-smooth);
            border-left: 5px solid transparent;
            cursor: pointer;
        }

        .order-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .order-item[data-status="approved"] {
            border-left-color: var(--success);
        }

        .order-item[data-status="pending"] {
            border-left-color: var(--warning);
        }

        .order-item[data-status="declined"] {
            border-left-color: var(--danger);
        }

        .order-info {
            flex: 1;
            min-width: 0;
        }

        .order-details p {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .order-details strong {
            color: var(--charcoal);
            font-weight: 600;
        }

        /* Badge Styles */
        .badge {
            font-size: 0.75rem;
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Order Summary */
        .order-summary {
            flex-shrink: 0;
            min-width: 250px;
        }

        .summary-card {
            background: var(--light-gray);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
        }

        .item-count, .total-price {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .total-price strong {
            font-size: 1.25rem;
            color: var(--success);
        }

        /* Progress Indicator */
        .progress-indicator {
            margin-top: 1.5rem;
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            margin-top: 1rem;
        }

        .progress-steps::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            height: 2px;
            background: #e5e7eb;
            z-index: 1;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            z-index: 2;
            flex: 1;
        }

        .step i {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e5e7eb;
            color: var(--slate);
            font-size: 0.75rem;
        }

        .step.completed i {
            background: var(--success);
            color: var(--white);
        }

        .step.active i {
            background: var(--primary-blue);
            color: var(--white);
            animation: pulse 2s infinite;
        }

        .step span {
            font-size: 0.75rem;
            color: var(--slate);
            text-align: center;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* Footer */
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

            .order-item {
                flex-direction: column;
                gap: 1.5rem;
            }

            .order-summary {
                min-width: auto;
                width: 100%;
            }

            .summary-card {
                text-align: left;
            }

            .progress-steps {
                flex-direction: column;
                gap: 1rem;
            }

            .progress-steps::before {
                display: none;
            }

            .step {
                flex-direction: row;
                width: 100%;
                justify-content: flex-start;
                gap: 1rem;
            }

            .stat-card {
                text-align: center;
                flex-direction: column;
                gap: 1rem;
            }

            .stat-icon {
                margin-right: 0;
            }
        }

        @media (max-width: 576px) {
            .hero {
                padding: 2rem 0 1rem;
            }

            .order-item {
                padding: 1.5rem;
            }

            .order-details p {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.25rem;
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

/* Tambahkan di <style> history.blade.php */

/* Responsive: Statistik & order card jadi stack di mobile */
@media (max-width: 991.98px) {
  .order-stats .col-md-3, .order-stats .col-6 {
    width: 50% !important;
    max-width: 50% !important;
    flex: 0 0 50% !important;
  }
}
@media (max-width: 767.98px) {
  .order-stats .col-md-3, .order-stats .col-6 {
    width: 100% !important;
    max-width: 100% !important;
    flex: 0 0 100% !important;
  }
  .stat-card {
    margin-bottom: 1rem;
    text-align: center;
    flex-direction: column;
    gap: 1rem;
  }
  .stat-icon {
    margin-right: 0;
    margin-bottom: 0.5rem;
  }
  .order-item {
    flex-direction: column !important;
    gap: 1.5rem;
    padding: 1.2rem 1rem;
  }
  .order-summary {
    width: 100%;
    min-width: unset;
    margin-top: 1.2rem;
    text-align: left;
  }
  .summary-card {
    text-align: left;
    padding: 1.2rem;
  }
  .progress-steps {
    flex-direction: column;
    gap: 1rem;
  }
  .progress-steps::before {
    display: none;
  }
  .step {
    flex-direction: row;
    width: 100%;
    justify-content: flex-start;
    gap: 1rem;
  }
}

/* Responsive: Hero title & tombol */
@media (max-width: 576px) {
  .hero h1 {
    font-size: 1.3rem;
    padding: 0.5rem 0;
  }
  .order-item {
    padding: 1rem 0.5rem;
  }
  .order-details p {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.25rem;
  }
  .btn.btn-primary.btn-lg {
    width: 100%;
    font-size: 1rem;
    padding: 0.8rem 1rem;
    border-radius: 18px;
  }
  .navbar-brand {
    font-size: 1.2rem !important;
  }
}

/* Interaktif: efek hover pada order-item & tombol */
.order-item:hover, .stat-card:hover {
  box-shadow: 0 8px 24px rgba(30,58,138,0.13);
  transform: translateY(-2px) scale(1.01);
  transition: 0.2s;
}
.btn.btn-primary:active {
  filter: brightness(0.95);
  transform: scale(0.98);
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

    <!-- Hero Section -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
          <h1><i class="fas fa-history me-3"></i>Riwayat Pemesanan</h1>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Main Content -->
    <div class="order-history">

  @if($transactions->isEmpty())
  <!-- Empty State for No Orders -->
  <div class="empty-state text-center py-5">
    <div class="empty-icon mb-4">
      <i class="fas fa-shopping-bag" style="font-size: 4rem; color: var(--accent-blue); opacity: 0.5;"></i>
    </div>
    <h3 class="mb-3" style="color: var(--charcoal); font-family: 'Playfair Display', serif;">Belum Ada Pesanan</h3>
    <p class="mb-4" style="color: var(--slate); font-size: 1.1rem;">Anda belum memiliki riwayat pesanan. Mulai berbelanja sekarang!</p>
    <a href="shop" class="btn btn-primary btn-lg" style="background: var(--gradient-primary); border: none; padding: 12px 30px; border-radius: 25px; font-weight: 600; transition: var(--transition-smooth);">
      <i class="fas fa-shopping-cart me-2"></i>Mulai Berbelanja
    </a>
  </div>
  @else

  <!-- Order Statistics Summary -->
  <div class="order-stats mb-5">
    <div class="row g-4">
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="stat-icon">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <div class="stat-content">
            <h4>{{ $transactions->count() }}</h4>
            <p>Total Pesanan</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="stat-icon success">
            <i class="fas fa-check-circle"></i>
          </div>
          <div class="stat-content">
            <h4>{{ $transactions->where('status', 'approved')->count() }}</h4>
            <p>Disetujui</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="stat-icon warning">
            <i class="fas fa-clock"></i>
          </div>
          <div class="stat-content">
            <h4>{{ $transactions->where('status', 'pending')->count() }}</h4>
            <p>Menunggu</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="stat-icon danger">
            <i class="fas fa-times-circle"></i>
          </div>
          <div class="stat-content">
            <h4>{{ $transactions->where('status', 'rejected')->count() }}</h4>
            <p>Ditolak</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Order Items -->
  @foreach($transactions as $transaction)
  <div class="order-item d-flex justify-content-between flex-wrap" data-status="{{ $transaction->status }}" tabindex="0" role="button" aria-label="Order details for transaction {{ $transaction->transaction_id }}">
    <div class="order-info flex-grow-1">
      <div class="order-details">
        <p>
          <i class="fas fa-calendar-alt me-2" style="color: var(--sky-blue);"></i>
          <strong>Tanggal Pesanan:</strong>
          <span class="order-date">{{ $transaction->created_at->setTimezone('Asia/Jakarta')->format('d M Y, H:i') }}</span>
        </p>
        <p>
          <i class="fas fa-info-circle me-2" style="color: var(--accent-blue);"></i>
          <strong>Status:</strong>
          @if($transaction->status === 'approved')
          <span class="badge bg-success" role="img" aria-label="Order approved">Approved</span>
          @elseif($transaction->status === 'rejected')
          <span class="badge bg-danger" role="img" aria-label="Order declined">Declined</span>
          @else
          <span class="badge bg-warning" role="img" aria-label="Order pending">Pending</span>
          @endif
        </p>
        <p>
          <i class="fas fa-truck me-2" style="color: var(--success);"></i>
          <strong>Estimasi Pengiriman:</strong>
          <span class="delivery-estimate">
            @if($transaction->status === 'approved')
              {{ $transaction->created_at->addDays(3)->format('d M Y') }} - {{ $transaction->created_at->addDays(7)->format('d M Y') }}
            @elseif($transaction->status === 'pending')
              Menunggu konfirmasi
            @else
              -
            @endif
          </span>
        </p>
      </div>
    </div>
    <div class="order-summary text-end">
      <div class="summary-card">
        <p class="item-count">
          <i class="fas fa-boxes me-2" style="color: var(--warning);"></i>
          <strong>{{ $transaction->item_count }}</strong> item
        </p>
        <p class="total-price">
          <i class="fas fa-tag me-2" style="color: var(--success);"></i>
          <strong>IDR {{ number_format($transaction->total_price, 0, ',', '.') }}</strong>
        </p>

        @if($transaction->status === 'approved')
        <div class="progress-indicator mt-3">
          <div class="progress-steps">
            <div class="step completed">
              <i class="fas fa-check"></i>
              <span>Dikonfirmasi</span>
            </div>
            <div class="step active">
              <i class="fas fa-box"></i>
              <span>Dikemas</span>
            </div>
            <div class="step">
              <i class="fas fa-truck"></i>
              <span>Siap Diambil</span>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  @endforeach

  @endif

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function showAuthMenu() {
            alert('Fungsi login/logout akan diimplementasikan dengan Laravel authentication');
        }

        // Add click functionality to order items
        document.querySelectorAll('.order-item').forEach(item => {
            item.addEventListener('click', function() {
                const status = this.getAttribute('data-status');
                const orderDate = this.querySelector('.order-date').textContent;
                alert(`Detail pesanan:\nTanggal: ${orderDate}\nStatus: ${status}`);
            });
        });

        // Add keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && e.target.classList.contains('order-item')) {
                e.target.click();
            }
        });
    </script>
</body>
</html>