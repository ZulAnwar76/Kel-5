<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password | SuwandiSecBrand</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
  <style>
    body { background-color: #3366FF; font-family: 'Roboto', sans-serif; }
    .card { border-radius: 25px; box-shadow: 0 4px 24px 0 rgba(0,0,0,.2);}
    .gradient-custom-2 { background: linear-gradient(90deg, #3366FF 0%, #3366FF 100%); color: #fff;}
    .btn-primary, .btn-outline-danger { border-radius: 50px;}
    .form-control:focus { box-shadow: 0 0 0 2px #3366FF;}
    .logo-img { max-width: 100px; margin-bottom: 1rem;}
    .login-img { max-width: 320px; margin: 0 auto 1.2rem; display: block;}
    .form-label { color: #3366FF; font-weight: 500;}
    .text-muted:hover { text-decoration: underline;}
  </style>
</head>
<body>
  <section class="vh-100" style="background-color: #EBF0FF;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-1 mb-4 mb-lg-0">
                  <div class="text-center w-100">
                    <img src="images2/login.png" class="login-img img-fluid" alt="Reset Illustration">
                    <p class="mt-1 mb-2 pb-1 text-white-50">Masukkan password baru Anda.</p>
                  </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-2">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #3366FF;">Ganti Password</p>
                  <form class="mx-1 mx-md-4" id="confirm-reset-form" action="#">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0 w-100">
                        <input class="form-control" id="new_password" type="password" name="new_password" required placeholder="Password Baru" />
                        <label class="form-label" for="new_password">Password Baru</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0 w-100">
                        <input class="form-control" id="confirm_password" type="password" name="confirm_password" required placeholder="Konfirmasi Password" />
                        <label class="form-label" for="confirm_password">Konfirmasi Password</label>
                      </div>
                    </div>
                    <div class="text-center pt-1 mb-4 pb-1">
                      <button class="btn btn-primary btn-lg btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit">Ganti Password</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="/" class="btn btn-outline-danger w-100">Kembali ke Home</a>
                    </div>
                  </form>
                  <!-- Toast untuk notif JS -->
                  <div id="confirm-reset-toast-js" class="position-fixed top-0 end-0 p-3" style="z-index: 9999; display:none;">
                    <div class="toast align-items-center text-white bg-success border-0 show" role="alert">
                      <div class="d-flex">
                        <div class="toast-body">
                          <i class="fas fa-check-circle me-2"></i>
                          Password berhasil diganti!
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" onclick="document.getElementById('confirm-reset-toast-js').style.display='none';"></button>
                      </div>
                    </div>
                  </div>
                </div><!-- end right column -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Loading Screen -->
  <div id="loading-screen" style="display:none;position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:10000;background:rgba(255,255,255,0.8);">
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center;">
      <div class="spinner-border text-primary" style="width:3rem;height:3rem;" role="status"></div>
      <div class="mt-3 fw-bold" style="color:#3366FF;">Mengalihkan ke Home...</div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
  <script>
    // Tampilkan toast JS saat tombol submit ditekan
    document.getElementById('confirm-reset-form').addEventListener('submit', function(e) {
      e.preventDefault();
      var toast = document.getElementById('confirm-reset-toast-js');
      toast.style.display = 'block';
      setTimeout(function() {
        toast.style.display = 'none';
        // Tampilkan loading screen
        document.getElementById('loading-screen').style.display = 'block';
        // Redirect ke home setelah 1.5 detik
        setTimeout(function() {
          window.location.href = '/';
        }, 1500);
      }, 2000); // Toast tampil 2 detik
    });
  </script>
</body>
</html>