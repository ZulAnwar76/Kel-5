<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="POS - Bootstrap Admin Template">
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
  <meta name="author" content="Dreamguys - Bootstrap Admin Template">
  <meta name="robots" content="noindex, nofollow">
  <title>SSB Pegawai</title>

  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">

  <link rel="stylesheet" href="css/bootstrap.min1.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">

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

      <div class="header-left active">
        <!-- Logo besar -->
        <a href="indexpegawai" class="logo">
          <span class="logo-text">SSB Pegawai</span>
        </a>

        <!-- Logo kecil -->
        <a href="indexpegawai" class="logo-small">
          <span class="logo-text-small">SSB Pegawai</span>
        </a>

        <!-- Toggle Button -->
        <a id="toggle_btn" href="javascript:void(0);">
        </a>
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
            <li>
              <a href="indexpegawai"><img src="images/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
            </li>
            <li class="submenu">
              <a href="javascript:void(0);"><img src="images/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
              <ul>
                <li><a href="{{ route('product.create') }}" class="active">Tambah Produk</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="javascript:void(0);"><img src="images/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
              <ul>
                <li><a href="transaksi">Proses Transaksi</a></li>
              </ul>
            </li>
        </div>
      </div>
    </div>

    <div class="page-wrapper">
      <div class="content">
        <div class="page-header">
          <div class="page-title">
            <h4>Product Add</h4>
            <h6>Create new product</h6>
          </div>
        </div>
        <form method="POST" action="{{ route('product.submit') }}" enctype="multipart/form-data">
          @csrf  
        <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" class="form-control" required>
                      <option value="">Select Category</option>
                      <option value="sport">Sport</option>
                      <option value="casual">Casual</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" id="size" name="size" class="form-control" placeholder="e.g., 40,41,42,43">
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" class="form-control" placeholder="e.g., 100.00" required>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="image">Tambah Gambar</label>
                    <input type="file" id="image" name="image" class="form-control" accept="image/*">
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                  </div>
                </div>

                <div class="col-lg-12">
                  <button type="submit" class="btn btn-submit me-2">Submit</button>
                  <a href="produk" class="btn btn-cancel">Cancel</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
  </div>

  <script src="js/jquery-3.6.0.min.js"></script>

  <script src="js/feather.min.js"></script>

  <script src="js/jquery.slimscroll.min.js"></script>

  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap4.min.js"></script>

  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="plugins/select2/js/select2.min.js"></script>

  <script src="plugins/sweetalert/sweetalert2.all.min.js"></script>
  <script src="plugins/sweetalert/sweetalerts.min.js"></script>

  <script src="js/script.js"></script>
</body>

</html>