<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      background-color: #2F4F4F; /* Hijau sesuai gambar */
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .hero {
      width: 100%;
      max-width: 400px;
      background-color: #3E6363;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    .hero h1 {
      font-size: 32px;
      margin-bottom: 30px;
    }

    .hero .form-control {
      font-size: 18px;
      margin-bottom: 20px;
      height: 50px;
    }

    .hero button {
      font-size: 18px;
      padding: 10px 20px;
    }

    .back-to-home {
      margin-top: 20px;
      display: block;
      color: #ffffff;
      text-decoration: none;
      font-size: 16px;
    }

    .back-to-home:hover {
      color: #cccccc;
    }
  </style>
  <title>Register | SuwandiSecBrand</title>
</head>
<body>

  <div class="hero">
    <h1>Register</h1>
    <form action="{{ route('register.submit') }}" method="post">
      @csrf
      <input type="text" name="name" class="form-control" placeholder="Full Name" required>
      <input type="username" name="username" class="form-control" placeholder="Username" required>
      <input type="email" name="email" class="form-control" placeholder="Email" required>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <button type="submit" class="btn btn-primary w-100">Register</button>
      <p class="mt-3">Already have an account? <a href="login">Login</a></p>
      <a href="index" class="back-to-home">Back to Home</a>
    </form>
  </div>