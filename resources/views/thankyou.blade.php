<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Thank You | SuwandiSecBrand</title>

  <style>
    :root {
      --primary-blue: #0f1729;
      --secondary-blue: #1e3a8a;
      --accent-blue: #3b82f6;
      --light-blue: #dbeafe;
      --very-light-blue: #f8fafc;
      --success-blue: #2563eb;
      --royal-blue: #1d4ed8;
      --sky-blue: #0ea5e9;
      --text-dark: #0f1729;
      --text-muted: #64748b;
      --white: #ffffff;
      --silver: #f1f5f9;
      --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      --gradient-primary: linear-gradient(135deg, #0f1729 0%, #1e3a8a 50%, #2563eb 100%);
      --gradient-light: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      --gradient-accent: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: #D3DEFF;
      font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
      line-height: 1.6;
      color: var(--text-dark);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Enhanced Hero Section */
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

    .hero::after {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 800px;
      height: 800px;
      background: #3366FF;
      border-radius: 50%;
      animation: float 20s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(5deg); }
    }

.intro-excerpt h1 {
  font-size: 70px;
  font-weight: 800;
  letter-spacing: -1px;
  position: relative;
  z-index: 2;
  text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-left: 80px; /* ubah nilai sesuai kebutuhan */
}


    /* Enhanced Thank You Container */
.thankyou-container {
  background: var(--white);
  border-radius: 32px;
  box-shadow: var(--shadow);
  margin-top: 40px;         /* Ubah dari -80px ke 40px agar ada jarak dari hero */
  margin-bottom: 40px;      /* Tambahkan jarak ke bawah agar tidak menempel footer */
  position: relative;
  z-index: 10;
  overflow: hidden;
  border: 1px solid rgba(59, 130, 246, 0.1);
  width: 100%;
  margin-left: auto;        /* Tengah secara horizontal */
  margin-right: auto;
}

    .thankyou-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 6px;
      background: var(--gradient-accent);
    }

    .thankyou-content {
      padding: 100px 60px;
      text-align: center;
      position: relative;
    }

    /* Enhanced Success Animation */
    .success-animation {
      width: 140px;
      height: 140px;
      margin: 0 auto 50px;
      background: var(--gradient-accent);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      animation: successPulse 3s ease-in-out infinite alternate;
      box-shadow: 0 20px 40px rgba(59, 130, 246, 0.3);
      position: relative;
    }

    .success-animation::before {
      content: '';
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      background: var(--gradient-accent);
      border-radius: 50%;
      opacity: 0.2;
      animation: ripple 2s ease-out infinite;
    }

    @keyframes ripple {
      0% { transform: scale(1); opacity: 0.3; }
      100% { transform: scale(1.2); opacity: 0; }
    }

    .success-animation svg {
      width: 70px;
      height: 70px;
      color: var(--white);
      animation: checkmarkDraw 1.2s ease-in-out;
      z-index: 2;
      position: relative;
    }

    @keyframes successPulse {
      0% { 
        transform: scale(1); 
        box-shadow: 0 20px 40px rgba(59, 130, 246, 0.3);
      }
      100% { 
        transform: scale(1.05); 
        box-shadow: 0 25px 50px rgba(59, 130, 246, 0.4);
      }
    }

    @keyframes checkmarkDraw {
      0% { opacity: 0; transform: scale(0.3) rotate(-10deg); }
      50% { opacity: 0.7; transform: scale(1.1) rotate(0deg); }
      100% { opacity: 1; transform: scale(1) rotate(0deg); }
    }

    /* Enhanced Typography */
    .thankyou-title {
      font-size: 56px;
      font-weight: 900;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 24px;
      letter-spacing: -1.5px;
      line-height: 1.1;
    }

    .thankyou-subtitle {
      font-size: 24px;
      color: var(--text-muted);
      margin-bottom: 40px;
      font-weight: 400;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Enhanced Order Summary */
    .order-summary {
      background: linear-gradient(135deg, var(--very-light-blue) 0%, var(--light-blue) 100%);
      border-radius: 24px;
      padding: 40px;
      margin: 50px 0;
      border: 2px solid rgba(59, 130, 246, 0.1);
      box-shadow: var(--shadow-lg);
    }

    .order-summary h4 {
      background: var(--gradient-accent);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 800;
      margin-bottom: 30px;
      font-size: 24px;
    }

    .order-details {
      display: grid;
      gap: 20px;
      text-align: left;
      max-width: 500px;
      margin: 0 auto;
    }

    .order-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 0;
      border-bottom: 2px solid rgba(59, 130, 246, 0.1);
      transition: all 0.3s ease;
    }

    .order-item:hover {
      padding-left: 10px;
      background: rgba(59, 130, 246, 0.02);
      border-radius: 8px;
    }

    .order-item:last-child {
      border-bottom: none;
      font-weight: 800;
      background: var(--gradient-accent);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-size: 20px;
    }

    /* Enhanced Action Buttons */
    .action-buttons {
      display: flex;
      gap: 24px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 50px;
    }

    .btn-primary-custom {
      background: var(--gradient-accent);
      border: none;
      color: var(--white);
      padding: 20px 40px;
      border-radius: 16px;
      font-weight: 700;
      font-size: 18px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
      position: relative;
      overflow: hidden;
    }

    .btn-primary-custom::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.6s;
    }

    .btn-primary-custom:hover::before {
      left: 100%;
    }

    .btn-primary-custom:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(59, 130, 246, 0.4);
      color: var(--white);
      text-decoration: none;
    }

    .btn-secondary-custom {
      background: var(--white);
      border: 3px solid var(--accent-blue);
      color: var(--accent-blue);
      padding: 17px 37px;
      border-radius: 16px;
      font-weight: 700;
      font-size: 18px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }

    .btn-secondary-custom::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 100%;
      background: var(--gradient-accent);
      transition: width 0.4s ease;
      z-index: -1;
    }

    .btn-secondary-custom:hover::before {
      width: 100%;
    }

    .btn-secondary-custom:hover {
      color: var(--white);
      transform: translateY(-4px);
      text-decoration: none;
      border-color: var(--royal-blue);
    }

    .btn-icon {
      margin-right: 12px;
      font-size: 20px;
      transition: transform 0.3s ease;
    }

    .btn-primary-custom:hover .btn-icon,
    .btn-secondary-custom:hover .btn-icon {
      transform: scale(1.1);
    }

    /* Enhanced Features Grid */
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 40px;
      margin-top: 80px;
      padding: 0 20px;
    }

    .feature-card {
      background: var(--white);
      padding: 40px 30px;
      border-radius: 24px;
      text-align: center;
      box-shadow: var(--shadow-lg);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      border: 1px solid rgba(59, 130, 246, 0.1);
      position: relative;
      overflow: hidden;
    }

    .feature-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--gradient-accent);
      transform: scaleX(0);
      transition: transform 0.4s ease;
    }

    .feature-card:hover::before {
      transform: scaleX(1);
    }

    .feature-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 32px 64px rgba(59, 130, 246, 0.15);
    }

    .feature-icon {
      width: 90px;
      height: 90px;
      background: var(--gradient-accent);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 30px;
      transition: transform 0.4s ease;
      box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
    }

    .feature-card:hover .feature-icon {
      transform: scale(1.1) rotate(5deg);
    }

    .feature-icon svg {
      width: 45px;
      height: 45px;
      color: var(--white);
    }

    .feature-title {
      font-size: 22px;
      font-weight: 800;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 15px;
      letter-spacing: -0.3px;
    }

    .feature-description {
      color: var(--text-muted);
      font-size: 16px;
      line-height: 1.6;
      font-weight: 400;
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

    .custom-social li {
      display: inline-block;
      margin: 0 15px;
    }

    .custom-social a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 55px;
      height: 55px;
      background: rgba(255, 255, 255, 0.1);
      color: var(--white);
      border-radius: 50%;
      font-size: 20px;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .custom-social a:hover {
      background: var(--white);
      color: var(--primary-blue);
      transform: translateY(-4px) scale(1.1);
      box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
    }

    /* Enhanced Responsive Design */
    @media (max-width: 768px) {
      .thankyou-content {
        padding: 80px 30px;
      }
      
      .thankyou-title {
        font-size: 42px;
      }
      
      .thankyou-subtitle {
        font-size: 20px;
      }
      
      .action-buttons {
        flex-direction: column;
        align-items: center;
        gap: 16px;
      }
      
      .btn-primary-custom,
      .btn-secondary-custom {
        width: 100%;
        max-width: 320px;
        justify-content: center;
      }
      
      .features-grid {
        grid-template-columns: 1fr;
        gap: 30px;
        margin-top: 60px;
      }

      .intro-excerpt h1 {
        font-size: 36px;
      }

      .hero {
        padding: 80px 0 40px;
      }
    }

    /* Enhanced Accessibility */
    .btn-primary-custom:focus,
    .btn-secondary-custom:focus {
      outline: 4px solid var(--sky-blue);
      outline-offset: 3px;
    }

    /* Enhanced Loading Animation */
    .thankyou-container {
      animation: slideUpFade 1.2s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes slideUpFade {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Navbar Enhancement */
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

    /* Subtle Animations */
    .feature-card {
      animation: fadeInUp 0.8s ease-out;
      animation-fill-mode: both;
    }

    .feature-card:nth-child(1) { animation-delay: 0.1s; }
    .feature-card:nth-child(2) { animation-delay: 0.2s; }
    .feature-card:nth-child(3) { animation-delay: 0.3s; }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
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

/* Responsive: Hero, Thank You, dan Features */
@media (max-width: 991.98px) {
  .thankyou-content {
    padding: 60px 20px;
  }
  .thankyou-title {
    font-size: 36px;
  }
  .thankyou-subtitle {
    font-size: 18px;
  }
  .order-summary {
    padding: 24px;
    margin: 30px 0;
  }
  .features-grid {
    grid-template-columns: 1fr;
    gap: 24px;
    margin-top: 40px;
    padding: 0 5px;
  }
  .feature-card {
    padding: 28px 12px;
  }
}

@media (max-width: 575.98px) {
  .intro-excerpt h1,
  .thankyou-title {
    font-size: 24px !important;
    margin-left: 0 !important;
  }
  .thankyou-content {
    padding: 32px 5px;
  }
  .success-animation {
    width: 80px;
    height: 80px;
    margin-bottom: 24px;
  }
  .success-animation svg {
    width: 40px;
    height: 40px;
  }
  .order-summary {
    padding: 12px;
    margin: 18px 0;
    border-radius: 14px;
  }
  .features-grid {
    gap: 14px;
    margin-top: 24px;
    padding: 0 2px;
  }
  .feature-card {
    padding: 16px 6px;
    border-radius: 12px;
  }
  .feature-title {
    font-size: 16px;
  }
  .feature-description {
    font-size: 13px;
  }
  .action-buttons {
    flex-direction: column;
    gap: 10px;
    margin-top: 24px;
  }
  .btn-primary-custom,
  .btn-secondary-custom {
    width: 100%;
    max-width: 100%;
    font-size: 1rem;
    padding: 12px 0;
    border-radius: 12px;
    justify-content: center;
  }
  .navbar-brand {
    font-size: 1.2rem !important;
  }
}

/* Interaktif: efek hover pada feature-card dan tombol */
.feature-card:hover {
  box-shadow: 0 16px 40px rgba(59,130,246,0.13);
  transform: translateY(-4px) scale(1.01);
  transition: 0.2s;
}
.btn-primary-custom:active,
.btn-secondary-custom:active {
  filter: brightness(0.95);
  transform: scale(0.98);
}
  </style>
</head>

<body>

  <!-- Navbar -->
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


  <!-- Enhanced Hero Section -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="intro-excerpt">
            <h1>Pesanan Berhasil</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Enhanced Thank You Section -->
  <div class="container">
    <div class="thankyou-container">
      <div class="thankyou-content">
        <!-- Enhanced Success Animation -->
        <div class="success-animation">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 12l2 2 4-4"/>
            <circle cx="12" cy="12" r="9"/>
          </svg>
        </div>

        <!-- Enhanced Main Content -->
        <h1 class="thankyou-title">Terima Kasih!</h1>
        <p class="thankyou-subtitle">Pesanan sepatu Anda telah berhasil diproses dan akan segera dikirim. Kami sangat menghargai kepercayaan Anda pada produk berkualitas kami.</p>

        <!-- Enhanced Action Buttons -->
        <div class="action-buttons">
          <a href="shop" class="btn-primary-custom">
            <i class="fas fa-shopping-bag btn-icon"></i>
            Lanjut Belanja
          </a>
          <a href="index" class="btn-secondary-custom">
            <i class="fas fa-home btn-icon"></i>
            Kembali ke Beranda
          </a>
        </div>

        <!-- Enhanced Features Grid -->
        <div class="features-grid">
          <div class="feature-card">
            <div class="feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                <polyline points="3.27,6.96 12,12.01 20.73,6.96"/>
                <line x1="12" y1="22.08" x2="12" y2="12"/>
              </svg>
            </div>
            <h5 class="feature-title">Siap Diambil di Toko</h5>
            <p class="feature-description">Pesanan Anda akan diproses dalam 1-2 hari kerja dan dikirim dengan ekspedisi terpercaya untuk sampai dengan aman dan cepat</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22,4 12,14.01 9,11.01"/>
              </svg>
            </div>
            <h5 class="feature-title">Jaminan Kualitas Premium</h5>
            <p class="feature-description">Semua produk sepatu kami telah melalui kontrol kualitas ketat dan inspeksi menyeluruh untuk memastikan kepuasan maksimal</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
              </svg>
            </div>
            <h5 class="feature-title">Layanan Pelanggan 24/7</h5>
            <p class="feature-description">Tim customer service profesional kami siap membantu Anda kapan saja untuk semua kebutuhan dan pertanyaan seputar produk</p>
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
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-tiktok"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->


  <!-- JS -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>

  <script>
    // Enhanced animation triggers
    document.addEventListener('DOMContentLoaded', function() {
      // Smooth page load animation
      document.body.style.opacity = '0';
      setTimeout(function() {
        document.body.style.transition = 'opacity 0.6s ease-in-out';
        document.body.style.opacity = '1';
      }, 100);

      // Add intersection observer for feature cards
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };

      // const observer = new IntersectionObserver(function(entries) {
      //   entries.forEach(entry => {
      //     if (entry.isIntersecting) {
      //       entry.target.style.animationPlayState = 'running';
      //     }
      //   });  observerOptions);

      const observer = new IntersectionObserver(function(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.animationPlayState = 'running';
    }
  });
}, observerOptions); // <- parameter ini harus di luar blok fungsi


    // Target all elements with the class 'feature-card' or any other class you want to animate
        const animatedElements = document.querySelectorAll('.feature-card, .thankyou-message, .animate-on-scroll');
        animatedElements.forEach(el => {
          // Apply base styles for animation (optional)
          el.style.animation = 'fadeInUp 1s ease forwards';
          el.style.animationPlayState = 'paused';
          observer.observe(el);
        });
    });
</script>
