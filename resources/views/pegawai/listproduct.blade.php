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

  <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

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
            <a href="indexadmin" class="logo">
              <span class="logo-text">SSB Pegawai</span>
            </a>
          
            <!-- Logo kecil -->
            <a href="indexadmin" class="logo-small">
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
                      <li><a href="listproduct" class="active">List Product</a></li>
                    </ul>
                  <ul>
                    <li><a href="{{ route('product.create') }}">Tambah Produk</a></li>
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
  <h4>List Produk</h4>
  <h6>Manage List Produk</h6>
  </div>
  </div>

  <div class="card">
  <div class="card-body">
  <div class="table-top">
  <div class="search-set">
  </div>

  </div>
  <div class="table-responsive">
    <table class="table datanew">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Category</th>
                <th>Size</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  </div>
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

  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>

  <script src="plugins/select2/js/select2.min.js"></script>

  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>

  <script src="plugins/sweetalert/sweetalert2.all.min.js"></script>
  <script src="plugins/sweetalert/sweetalerts.min.js"></script>

  <script src="js/script.js"></script>
  </body>
  </html>