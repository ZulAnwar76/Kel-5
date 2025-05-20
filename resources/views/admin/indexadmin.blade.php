<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>SSB Admin</title>
<style>
  /* CSS langsung di dalam file PHP */
  html, body {
    margin: 0;
    padding: 0;
    height: 100%;
  }
  
  .page-wrapper {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
    padding: 20px;
  }
  
  .content {
    width: 100%;
  }
  
  .row {
    margin: 0;
    padding: 0;
  }
  
  .dash-count {
    background-color: #f5f5f5;
    border-radius: 8px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  h4, h5 {
    margin: 0;
    text-align: center;
  }
  
  .dash-counts {
    margin-bottom: 10px;
  }
  
  .mb-3 {
    margin-bottom: 0 !important;
  }
  
  .row.justify-content-center {
    gap: 20px;
  }
  .header {
        display: flex;
        justify-content: space-between; /* Elemen akan tersebar ke kiri dan kanan */
        align-items: center; /* Rata tengah secara vertikal */
        padding: 10px 20px; /* Berikan sedikit padding */
        background-color: #f8f9fa; /* Warna latar belakang (opsional) */
    }

    .header-left {
        display: flex;
        align-items: center;
    }

    .header-right {
        margin-left: auto; /* Dorong elemen header-right ke ujung kanan */
    }

    .logout-button {
        margin-right: 20px; /* Tambahkan margin untuk menjaga jarak dari tepi */
        padding: 5px 15px;
        font-size: 14px;
    }
  </style>


<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">

<link rel="stylesheet" href="css/bootstrap.min1.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">
  <div class="header">
    <div class="header-left">
        <!-- Logo besar -->
        <a href="indexadmin" class="logo">
            <span class="logo-text">SSB Admin</span>
        </a>

        <!-- Logo kecil -->
        <a href="indexadmin" class="logo-small">
            <span class="logo-text-small">SSB Admin</span>
        </a>
    </div>

    <!-- Tombol Logout -->
    <div class="header-right">
        <button 
            class="btn btn-danger btn-sm logout-button"
            onclick="logoutUser()">Logout
        </button>
    </div>
</div>

          
<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>



<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="indexadmin"><img src="images/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="images/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="productlist">Log Produk</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="images/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="saleslist">Log Penjualan</a></li>
</ul>
</li>


<li class="submenu">
<a href="javascript:void(0);"><img src="images/icons/time.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="invoicereport">Rekap Penjualan</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="images/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="userlist">User list</a></li>
</ul>
</li>
</div>
</div>
</div>

<div class="page-wrapper">
  <div class="content">
    <div class="row justify-content-center align-items-start" style="margin: 0; padding: 0; height: 100vh;">
      <!-- Customers Card -->
      <div class="col-lg-3 col-sm-6 col-12 d-flex mb-3">
        <div class="dash-count">
          <div class="dash-counts">
            <h4>100</h4>
            <h5>Customers</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="user"></i>
          </div>
        </div>
      </div>

      <!-- Purchase Invoice Card -->
      <div class="col-lg-3 col-sm-6 col-12 d-flex mb-3">
        <div class="dash-count das2">
          <div class="dash-counts">
            <h4>100</h4>
            <h5>Purchase Invoice</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="file-text"></i>
          </div>
        </div>
      </div>

      <!-- Sales Invoice Card -->
      <div class="col-lg-3 col-sm-6 col-12 d-flex mb-3">
        <div class="dash-count das3">
          <div class="dash-counts">
            <h4>105</h4>
            <h5>Sales Invoice</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="file"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  window.onload = function() {
      document.getElementById("global-loader").style.display = "none";
  };
</script>

<script>
  function logoutUser() {
      window.location.href = "/login";
  }
</script>

<script src="js/jquery-3.6.0.min.js"></script>

<script src="js/feather.min.js"></script>

<script src="js/jquery.slimscroll.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script src="js/bootstrap.bundle.min1.js"></script>

<script src="plugins/apexchart/apexcharts.min.js"></script>
<script src="plugins/apexchart/chart-data.js"></script>

<script src="js/script.js"></script>
</body>
</html>