<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | SuwandiSecBrand</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
  <!-- Google Fonts & MDB UI Kit -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #3366FF;
      font-family: 'Roboto', sans-serif;
    }

    .card {
      border-radius: 25px;
      box-shadow: 0 4px 24px 0 rgba(0, 0, 0, .2);
    }

    .form-label {
      color: #3366FF;
      font-weight: 500;
    }

    .form-control:focus {
      box-shadow: 0 0 0 2px #3366FF;
    }

    .btn-primary,
    .btn-outline-danger {
      border-radius: 50px;
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
                    <img src="images2/register.png" class="login-img img-fluid" alt="Register Illustration">
                    <p class="mt-1 mb-2 pb-1 text-white-50">Buat akun baru untuk bergabung dengan SuwandiSecBrand.</p>
                  </div>
                </div>

                <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-2">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #3366FF;">Register</p>

                  <form class="mx-1 mx-md-4" method="POST" action="{{ route('register.submit') }}">
                    @csrf
                    <div class="form-outline mb-4">
                      <input type="text" id="name" name="name" class="form-control" required />
                      <label class="form-label" for="name">Full Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="text" id="username" name="username" class="form-control" required />
                      <label class="form-label" for="username">Username</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" class="form-control" required />
                      <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control" required />
                      <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-lg btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit">Register</button>
                      <a class="text-muted" href="login">Already have an account? Login</a>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>
