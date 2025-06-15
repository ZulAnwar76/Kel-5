<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password | SuwandiSecBrand</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.jpg') }}">
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
  {{-- Pop up notifikasi sukses --}}
  @if(session('status'))
    <div id="reset-success-toast" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
      <div class="toast align-items-center text-white bg-success border-0 show" role="alert">
        <div class="d-flex">
          <div class="toast-body">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('status') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      </div>
    </div>
  @endif

  <section class="vh-100" style="background-color: #EBF0FF;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-1 mb-4 mb-lg-0">
                  <div class="text-center w-100">
                    <img src="{{ asset('images2/login.png') }}" class="login-img img-fluid" alt="Reset Illustration">
                    <p class="mt-1 mb-2 pb-1 text-white-50">Masukkan email Anda untuk mereset password.</p>
                  </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-2">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #3366FF;">Reset Password</p>
                  
                  <form class="mx-1 mx-md-4" id="reset-form" method="POST" action="{{ route('forgot-password.submit') }}">
                    @csrf

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0 w-100">
                        <input class="form-control" id="email" type="email" name="email" required autofocus placeholder="Email" />
                        <label class="form-label" for="email">Email</label>
                      </div>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-lg btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit">
                        Kirim Link Reset
                      </button>
                    </div>

                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul class="mb-0">
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif

                  </form>
                </div><!-- end right column -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
  <script>
    setTimeout(function() {
      var toast = document.getElementById('reset-success-toast');
      if(toast) toast.style.display = 'none';
    }, 3000);
  </script>
</body>
</html>
