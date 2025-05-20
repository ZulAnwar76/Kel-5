<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>SSB Admin</title>

<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

<link rel="stylesheet" href="css/bootstrap.min1.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="css/style1.css">
<style>
  /* Styling untuk ikon "accept" dan "reject" */
  .table-responsive td img {
      width: 20px; /* Ukuran ikon */
      height: 20px; /* Ukuran ikon */
      cursor: pointer; /* Menambahkan efek pointer pada ikon */
  }
  
  /* Menambahkan jarak antar ikon dalam kolom aksi */
  .table-responsive td a {
      margin-right: 10px; /* Menambah jarak antar ikon */
  }
  </style>
  
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
    <li><a href="listproduct">List Produk</a></li>
    <li><a href="{{ url('product') }}">Tambah Produk</a></li>
  </ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="images/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="transaksi" class="active">Proses Transaki</a></li>
</ul>
</li>
</div>
</div>
</div>

<div class="page-wrapper">
  <div class="content">
  <div class="page-header">
  <div class="page-title">
  <h4>Transaksi Pembayaran</h4>
  <h6>Manage Transaki</h6>
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
            {{-- <tr>
                <th>
                    <label class="checkboxs">
                        <input type="checkbox" id="select-all">
                        <span class="checkmarks"></span>
                    </label>
                </th> --}}
                <th>Kustomer ID</th>
                <th>ID Produk</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($transactions as $transaction)
    <tr>
        <td class="text-bolds">{{ $transaction->customer_id }}</td>
        <td>{{ $transaction->product->product_id }}</td>
        <td>{{ $transaction->total_price }}</td>
        <td>
            @if($transaction->status == 'pending')
                <span class="badges bg-lightred">Pending</span>
            @elseif($transaction->status == 'paid')
                <span class="badges bg-lightgreen">Paid</span>
            @elseif($transaction->status == 'approved')
                <span class="badges bg-lightblue">Approved</span>
            @endif
        </td>
        <td>
            <!-- Accept Button -->
            <a class="me-3" href="javascript:void(0);" data-action="accept" data-id="{{ $transaction->transaction_id }}">
                <img src="images/icons/checkmark-green.svg" alt="accept">
            </a>
            <!-- Reject Button -->
            <a class="me-3" href="javascript:void(0);" data-action="reject" data-id="{{ $transaction->transaction_id }}">
                <img src="images/icons/x-red.svg" alt="reject">
            </a>
        </td>
    </tr>
    @endforeach
</tbody>

    </table>
  </div>
  
  <script>
    // Menangani klik pada tombol Accept (langsung tanpa pop-up)
    document.querySelectorAll("a[data-action='accept']").forEach(button => {
        button.addEventListener("click", function() {
            const transactionId = this.getAttribute("data-id");

            // Mengirim permintaan AJAX untuk mengubah status ke 'approved'
            updateTransactionStatus(transactionId, 'accept');
        });
    });

    // Menangani klik pada tombol Reject (langsung tanpa pop-up)
    document.querySelectorAll("a[data-action='reject']").forEach(button => {
        button.addEventListener("click", function() {
            const transactionId = this.getAttribute("data-id");

            // Mengirim permintaan AJAX untuk mengubah status ke 'rejected'
            updateTransactionStatus(transactionId, 'reject');
        });
    });

    // Fungsi untuk mengirimkan permintaan AJAX
    function updateTransactionStatus(transactionId, action) {
        fetch('/update-status/' + transactionId, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'  // CSRF token Laravel
            },
            body: JSON.stringify({ action: action })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Update tampilan status pada tabel
                const statusCell = document.querySelector(`a[data-id='${transactionId}']`).closest('tr').querySelector('td:nth-child(4)');
                const newStatus = data.new_status;

                if (newStatus === 'approved') {
                    statusCell.innerHTML = '<span class="badges bg-lightblue">Approved</span>';
                } else if (newStatus === 'rejected') {
                    statusCell.innerHTML = '<span class="badges bg-lightred">Rejected</span>';
                }
            }
        })
        .catch(error => {
            console.error('Error updating status:', error);
        });
    }
</script>
  
  <style>
      .notification {
          background-color: #28a745; /* Green background for accept */
          color: white;
          padding: 10px;
          border-radius: 5px;
          position: fixed;
          top: 10px;
          right: 10px;
          z-index: 1000;
          font-size: 16px;
      }
  
      .notification.reject {
          background-color: #dc3545; /* Red background for reject */
      }
      
  </style>
  

  
  <script>
  window.onload = function() {
      document.getElementById("global-loader").style.display = "none";
  };
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