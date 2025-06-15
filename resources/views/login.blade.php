<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | SuwandiSecBrand</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
  <!-- Google Fonts & MDB UI Kit -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #3366FF;
      font-family: 'Roboto', sans-serif;
    }
    .card {
      border-radius: 25px;
      box-shadow: 0 4px 24px 0 rgba(0,0,0,.2);
    }
    .gradient-custom-2 {
      background: linear-gradient(90deg, #3366FF 0%, #3366FF 100%);
      color: #fff;
    }
    .btn-primary,
    .btn-outline-danger {
      border-radius: 50px;
    }
    .form-control:focus {
      box-shadow: 0 0 0 2px #3366FF;
    }
    .logo-img {
      max-width: 100px;
      margin-bottom: 1rem;
    }
    .login-img {
      max-width: 320px;
      margin: 0 auto 1.2rem;
      display: block;
    }
    .form-label {
      color: #3366FF;
      font-weight: 500;
    }
    .text-muted:hover {
      text-decoration: underline;
    }
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
                    <img src="images2/login.png" class="login-img img-fluid" alt="Login Illustration">
                    <p class="mt-1 mb-2 pb-1 text-white-50">Selamat datang di SuwandiSecBrand. Silakan login untuk melanjutkan.</p>
                  </div>
                </div>

                <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-2">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #3366FF;">Login</p>

                  <form class="mx-1 mx-md-4" method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0 w-100">
                        <input class="form-control" id="auth" type="text" name="username" required autofocus placeholder="Username" />
                        <label class="form-label" for="auth">Username</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0 w-100">
                        <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password"/>
                        <label class="form-label" for="password">Password</label>
                      </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-4">
                      <input class="form-check-input me-2" type="checkbox" value="" id="remember_me" />
                      <label class="form-check-label" for="remember_me">
                        Remember me
                      </label>
                    </div>
                    @if(session('error'))
                      <p class="text-danger text-center mb-3">{{ session('error') }}</p>
                    @endif
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-lg btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit">Login</button>
                      <a class="btn btn-link text-muted w-100" href="{{ route('reset-password') }}">Reset Password</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="register" type="button" class="btn btn-outline-danger">Register</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="/" class="text-muted">Back to Home</a>
                    </div>
                  </form>
                </div><!-- end right column -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Illustration image: place "images/login-illustration.png" in your images folder -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>
</html>