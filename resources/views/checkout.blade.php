<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>SuwandiSecBrand - Checkout</title>
  <style>
    .payment-methods button {
      margin-bottom: 10px;
      width: 100%;
    }

    .payment-methods button.active {
      background-color: #2F4F4F !important;
      color: white !important;
      border: 2px solid #2F4F4F !important;
    }
  </style>
</head>
<body>

  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
		<div class="container">
		  <a class="navbar-brand" href="index">SuwandiSecBrand<span>.</span></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarsFurni">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
			  <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
			  <li><a class="nav-link" href="shop">Shop</a></li>
			  <li><a class="nav-link" href="about">About us</a></li>
			  <li><a class="nav-link" href="contact">Contact us</a></li>
			  <li><a class="nav-link" href="login">Login</a></li>
			  <li><a class="nav-link" href="register">Register</a></li>
			</ul>
			<ul class="navbar-nav ms-5">
				<li class="nav-item">
				  <a class="nav-link" href="user"><img src="images/user.svg" alt="User" width="24"></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="cart"><img src="images/cart.svg" alt="Cart" width="24"></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="wishlist"><img src="images/wishlist.svg" alt="Wishlist" width="24"></a>
				</li>
			  </ul>		
		  </div>
		</div>
	  </nav>
  <!-- End Header/Navigation -->

  <!-- Start Hero Section -->
  <div class="hero">
    <div class="container">
      <h1>Checkout</h1>
    </div>
  </div>
  <!-- End Hero Section -->

  <div class="untree_co-section">

<div class="container">
    <form action="{{ route('checkout.placeOrder') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Billing Details -->
            <div class="col-md-6">
                <h2 class="h3 mb-3 text-black">Billing Details</h2>
                <div class="p-3 p-lg-5 border bg-white">
                    <div class="form-group">
                        <label for="c_fname">Nama</label>
                        <input type="text" class="form-control" id="c_fname" name="c_fname" value="{{ old('c_fname') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="c_address">Alamat</label>
                        <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address" value="{{ old('c_address') }}" required>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_email">Email</label>
                            <input type="email" class="form-control" id="c_email" name="c_email" value="{{ old('c_email') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="c_phone">Telepon</label>
                            <input type="tel" class="form-control" id="c_phone" name="c_phone" value="{{ old('c_phone') }}" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Your Order -->
            <div class="col-md-6">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border bg-white">
                    <table class="table site-block-order-table mb-5">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
    @foreach ($cartItems as $item)
    <tr>
        <td>{{ $item->product->name }}</td>
        <td>{{ number_format($item->product->price, 2) }}</td>
    </tr>
    @endforeach
    <tr>
        <td class="text-black font-weight-bold">Order Total</td>
        <td class="text-black font-weight-bold">{{ number_format($totalPrice, 2) }}</td>
    </tr>
</tbody>

                    </table>

                    <!-- Payment Methods -->
                    <div class="payment-methods">
                        <button class="btn btn-outline-secondary" type="button" id="bank-transfer" onclick="toggleDetails('bank-transfer-details')">
                            Direct Bank Transfer
                        </button>
                        <div id="bank-transfer-details" class="collapse mt-2">
                            <p class="mb-0">Transfer ke: <strong>106 0002133380 Mandiri</strong> atas nama <strong>Farida Hanum</strong></p>
                            <p class="mb-0">Atau ke: <strong>106 0062642038 BNI</strong> atas nama <strong>Farida Hanum</strong></p>
                        </div>

                        <button class="btn btn-outline-secondary" type="button" id="dana" onclick="toggleDetails('dana-details')">
                            Dana
                        </button>
                        <div id="dana-details" class="collapse mt-2">
                            <p class="mb-0">Nomor Dana: <strong>+62 896-5326-6351</strong></p>
                        </div>
                    </div>

                    <!-- Bukti Pembayaran -->
                    <div class="form-group mt-4">
                        <h5 class="text-black text-center mb-3">Bukti Pembayaran</h5>
                        <label for="payment-proof" class="custom-file-upload">
                            <img src="/images/upload.png" alt="Upload Icon" class="upload-icon">
                            <span id="file-name" class="file-name">Pilih file bukti pembayaran...</span>
                        </label>
                        <input type="file" id="payment-proof" name="payment-proof" class="form-control-file d-none" accept="image/*" onchange="displayFileName()" required>
                        <p class="text-danger text-center mt-2">*wajib menyertakan bukti pembayaran</p>
                    </div>

                    <!-- Tombol Kembali dan Place Order -->
                    <div class="form-group mt-4 d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-secondary btn-lg py-3" onclick="goBack()">Kembali</button>
                        <button type="submit" class="btn btn-black btn-lg py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>





<style>
  .custom-file-upload {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 50px;
    padding: 10px 20px;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .custom-file-upload:hover {
    background-color: #f8f9fa;
  }

  .upload-icon {
    width: 24px;
    height: 24px;
    margin-right: 10px;
  }

  .file-name {
    font-size: 16px;
    color: #333;
  }
</style>

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
    alert('Pesanan Anda berhasil dibuat!');
  }
</script>

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
                  <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                  <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
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
		
			function placeOrder() {
			  alert('Your order has been placed successfully!');
			}
		  </script>
		<script>
    function toggleDetails(id) {
        document.getElementById(id).classList.toggle('show');
    }

    function displayFileName() {
        const input = document.getElementById('payment-proof');
        const fileName = input.files[0]?.name || 'Pilih file bukti pembayaran...';
        document.getElementById('file-name').textContent = fileName;
    }

    function goBack() {
        window.history.back();
    }
</script>
		  <script src="js/bootstrap.bundle.min.js"></script>
		</body>
		</html>