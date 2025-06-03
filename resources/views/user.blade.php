<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background:#D3DEFF;
      line-height: 1.6;
      scroll-behavior: smooth;
    }

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

    .hero {
      background: #3366FF;
      color: white;
      padding: 30px 0;
      text-align: center;
      box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #3366FF;
    }

    .hero h1 {
      font-size: clamp(2rem, 5vw, 3rem);
      margin: 0;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      position: relative;
      z-index: 1;
      animation: fadeInUp 0.8s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .profile-container {
      padding: 40px 0;
      animation: slideIn 0.6s ease-out 0.2s both;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .profile-content {
      background: #ffffff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 12px 35px rgba(59, 130, 246, 0.1);
      border: 1px solid #e0f2fe;
      position: relative;
      overflow: hidden;
    }

    .profile-content::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #1e40af, #3b82f6, #60a5fa);
    }

    .profile-content h3 {
      color: #1e40af;
      margin-bottom: 30px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 1.75rem;
    }

    .form-group {
      margin-bottom: 25px;
      position: relative;
    }

    .form-label {
      font-weight: 600;
      color: #1e40af;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.95rem;
    }

    .form-control {
      border: 2px solid #e0f2fe;
      border-radius: 12px;
      padding: 15px 20px;
      font-size: 16px;
      transition: all 0.3s ease;
      background-color: #fafbff;
      position: relative;
    }

    .form-control:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.15);
      background-color: white;
      outline: none;
      transform: translateY(-2px);
    }

    .form-control:hover:not(:focus) {
      border-color: #93c5fd;
      background-color: white;
    }

    .input-group {
      position: relative;
    }

    .input-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #64748b;
      z-index: 10;
      pointer-events: none;
      transition: color 0.3s ease;
    }

    .form-control:focus + .input-icon {
      color: #3b82f6;
    }

    .btn-primary {
      background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
      border: none;
      padding: 15px 30px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 16px;
      box-shadow: 0 6px 20px rgba(59, 130, 246, 0.25);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      min-width: 140px;
      justify-content: center;
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s ease;
    }

    .btn-primary:hover::before {
      left: 100%;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(59, 130, 246, 0.4);
    }

    .btn-primary:active {
      transform: translateY(-1px);
      box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
    }

    .btn-secondary {
      background: linear-gradient(135deg, #64748b 0%, #94a3b8 100%);
      border: none;
      padding: 15px 30px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 16px;
      color: white;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      min-width: 120px;
      justify-content: center;
    }

    .btn-secondary:hover {
      background: linear-gradient(135deg, #475569 0%, #64748b 100%);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(100, 116, 139, 0.3);
    }

    .button-group {
      display: flex;
      gap: 15px;
      margin-top: 30px;
      flex-wrap: wrap;
    }

    .success-message {
      background: linear-gradient(135deg, #059669 0%, #10b981 100%);
      color: white;
      padding: 15px 20px;
      border-radius: 12px;
      margin-bottom: 20px;
      display: none;
      align-items: center;
      gap: 10px;
      animation: slideDown 0.5s ease;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .error-message {
      color: #dc2626;
      font-size: 0.875rem;
      margin-top: 5px;
      display: none;
      align-items: center;
      gap: 5px;
    }

    .form-control.error {
      border-color: #dc2626;
      background-color: #fef2f2;
    }

    .form-control.success {
      border-color: #16a34a;
      background-color: #f0fdf4;
    }

    /* Loading state */
    .btn-loading {
      position: relative;
      color: transparent !important;
    }

    .btn-loading::after {
      content: '';
      position: absolute;
      width: 20px;
      height: 20px;
      top: 50%;
      left: 50%;
      margin-left: -10px;
      margin-top: -10px;
      border: 2px solid transparent;
      border-top-color: #ffffff;
      border-radius: 50%;
      animation: spin 1s linear infinite;
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

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .profile-container {
        padding: 20px 0;
      }
      
      .profile-content {
        padding: 25px 20px;
      }
      
      .hero {
        padding: 40px 0;
      }
      
      .button-group {
        flex-direction: column;
      }
      
      .btn-primary, .btn-secondary {
        width: 100%;
      }
    }

    /* Accessibility improvements */
    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }

    /* Focus indicators */
    .form-control:focus-visible,
    .btn:focus-visible,
    .nav-link:focus-visible {
      outline: 2px solid #3b82f6;
      outline-offset: 2px;
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
      .form-control {
        border-width: 3px;
      }
    }

    /* Reduced motion support */
    @media (prefers-reduced-motion: reduce) {
      * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
      }
    }

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

  <section class="hero">
    <div class="container">
      <h1><i class="bi bi-person-gear me-3"></i>My Profile</h1>
    </div>
  </section>

  <div class="container profile-container">
    {{-- <div class="row"> --}}
      <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="profile-content">
          <div class="success-message" id="successMessage">
            <i class="bi bi-check-circle-fill"></i>
            <span>Profile updated successfully!</span>
          </div>
          
          <h3><i class="bi bi-pencil-square"></i>Edit Your Profile</h3>
          
          <form id="profileForm" novalidate>
            <div class="form-group">
              <label for="fullName" class="form-label">
                <i class="bi bi-person"></i>
                Full Name <span class="text-danger">*</span>
              </label>
              <div class="input-group">
                <input type="text" class="form-control" id="fullName" value="Md" required
                       aria-describedby="fullNameError" placeholder="Enter your full name">
                <i class="bi bi-person-fill input-icon"></i>
              </div>
              <div class="error-message" id="fullNameError">
                <i class="bi bi-exclamation-circle"></i>
                <span>Please enter your full name</span>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="form-label">
                <i class="bi bi-envelope"></i>
                Email Address <span class="text-danger">*</span>
              </label>
              <div class="input-group">
                <input type="email" class="form-control" id="email" value="rimel111@gmail.com" required
                       aria-describedby="emailError" placeholder="Enter your email address">
                <i class="bi bi-envelope-fill input-icon"></i>
              </div>
              <div class="error-message" id="emailError">
                <i class="bi bi-exclamation-circle"></i>
                <span>Please enter a valid email address</span>
              </div>
            </div>

            <div class="form-group">
              <label for="address" class="form-label">
                <i class="bi bi-house"></i>
                Address
              </label>
              <div class="input-group">
                <input type="text" class="form-control" id="address" value="Kingston, 5236, United State"
                       aria-describedby="addressError" placeholder="Enter your address">
                <i class="bi bi-house-fill input-icon"></i>
              </div>
              <div class="error-message" id="addressError">
                <i class="bi bi-exclamation-circle"></i>
                <span>Please enter your address</span>
              </div>
            </div>

            <div class="form-group">
              <label for="phoneNumber" class="form-label">
                <i class="bi bi-telephone"></i>
                Phone Number
              </label>
              <div class="input-group">
                <input type="tel" class="form-control" id="phoneNumber" 
                       aria-describedby="phoneError" placeholder="Enter your phone number">
                <i class="bi bi-telephone-fill input-icon"></i>
              </div>
              <div class="error-message" id="phoneError">
                <i class="bi bi-exclamation-circle"></i>
                <span>Please enter a valid phone number</span>
              </div>
            </div>

            <div class="button-group justify-content-center">
              <button type="submit" class="btn btn-primary" id="saveBtn">
                <i class="bi bi-check-lg"></i>
                <span>Save Changes</span>
              </button>
              <button type="reset" class="btn btn-secondary" id="cancelBtn">
                <i class="bi bi-x-lg"></i>
                <span>Cancel</span>
              </button>
            </div>
          </form>
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
            <a href="#" class="footer-logo">SuwandiSecBrand</a>
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
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Enhanced form validation and user interaction
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('profileForm');
      const saveBtn = document.getElementById('saveBtn');
      const cancelBtn = document.getElementById('cancelBtn');
      const successMessage = document.getElementById('successMessage');
      
      // Store original values for reset functionality
      const originalValues = {};
      const inputs = form.querySelectorAll('input');
      inputs.forEach(input => {
        originalValues[input.id] = input.value;
      });

      // Real-time validation
      inputs.forEach(input => {
        input.addEventListener('input', function() {
          validateField(this);
          checkFormChanges();
        });

        input.addEventListener('blur', function() {
          validateField(this);
        });

        // Clear validation on focus
        input.addEventListener('focus', function() {
          clearFieldValidation(this);
        });
      });

      function validateField(field) {
        const errorElement = document.getElementById(field.id + 'Error');
        let isValid = true;

        // Clear previous validation state
        field.classList.remove('error', 'success');

        // Validation rules
        if (field.hasAttribute('required') && !field.value.trim()) {
          isValid = false;
        } else if (field.type === 'email' && field.value && !isValidEmail(field.value)) {
          isValid = false;
          errorElement.querySelector('span').textContent = 'Please enter a valid email address';
        } else if (field.type === 'tel' && field.value && !isValidPhone(field.value)) {
          isValid = false;
          errorElement.querySelector('span').textContent = 'Please enter a valid phone number';
        }

        // Apply validation styling
        if (isValid && field.value.trim()) {
          field.classList.add('success');
          errorElement.style.display = 'none';
        } else if (!isValid) {
          field.classList.add('error');
          errorElement.style.display = 'flex';
        } else {
          errorElement.style.display = 'none';
        }

        return isValid;
      }

      function clearFieldValidation(field) {
        const errorElement = document.getElementById(field.id + 'Error');
        field.classList.remove('error');
        errorElement.style.display = 'none';
      }

      function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
      }

      function isValidPhone(phone) {
        const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
        return phoneRegex.test(phone.replace(/[\s\-\(\)]/g, ''));
      }

      function checkFormChanges() {
        let hasChanges = false;
        inputs.forEach(input => {
          if (input.value !== originalValues[input.id]) {
            hasChanges = true;
          }
        });

        // Enable/disable save button based on changes
        if (hasChanges) {
          saveBtn.classList.remove('btn-secondary');
          saveBtn.classList.add('btn-primary');
        }
      }

      // Form submission
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate all fields
        let isFormValid = true;
        inputs.forEach(input => {
          if (!validateField(input)) {
            isFormValid = false;
          }
        });

        if (isFormValid) {
          // Show loading state
          saveBtn.classList.add('btn-loading');
          saveBtn.disabled = true;

          // Simulate API call
          setTimeout(() => {
            // Remove loading state
            saveBtn.classList.remove('btn-loading');
            saveBtn.disabled = false;

            // Show success message
            successMessage.style.display = 'flex';
            
            // Update original values
            inputs.forEach(input => {
              originalValues[input.id] = input.value;
            });

            // Smooth scroll to success message
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });

            // Hide success message after 5 seconds
            setTimeout(() => {
              successMessage.style.display = 'none';
            }, 5000);

            // Remove success styling from inputs
            setTimeout(() => {
              inputs.forEach(input => {
                input.classList.remove('success');
              });
            }, 2000);
          }, 1500);
        } else {
          // Focus on first invalid field
          const firstInvalid = form.querySelector('.error');
          if (firstInvalid) {
            firstInvalid.focus();
            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        }
      });

      // Cancel/Reset functionality
      cancelBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Reset to original values
        inputs.forEach(input => {
          input.value = originalValues[input.id];
          input.classList.remove('error', 'success');
          const errorElement = document.getElementById(input.id + 'Error');
          errorElement.style.display = 'none';
        });

        // Hide success message
        successMessage.style.display = 'none';

        // Focus on first input
        inputs[0].focus();
      });

      // Keyboard shortcuts
      document.addEventListener('keydown', function(e) {
        // Ctrl/Cmd + S to save
        if ((e.ctrlKey || e.metaKey) && e.key === 's') {
          e.preventDefault();
          form.dispatchEvent(new Event('submit'));
        }
        
        // Escape to cancel
        if (e.key === 'Escape') {
          cancelBtn.click();
        }
      });

      // Auto-save draft functionality (optional)
      let autoSaveTimeout;
      inputs.forEach(input => {
        input.addEventListener('input', function() {
          clearTimeout(autoSaveTimeout);
          autoSaveTimeout = setTimeout(() => {
            // Here you could implement auto-save to localStorage
            // localStorage.setItem('profileDraft', JSON.stringify(getFormData()));
          }, 2000);
        });
      });

      function getFormData() {
        const data = {};
        inputs.forEach(input => {
          data[input.id] = input.value;
        });
        return data;
      }

      
    });
  </script>
</body>

</html>


