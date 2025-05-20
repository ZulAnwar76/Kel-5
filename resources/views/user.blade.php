<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .navbar-brand {
      font-weight: bold;
      color: white !important;
    }

    .nav-link {
      color: #ccc !important;
    }

    .nav-link:hover {
      color: white !important;
    }

    .active-nav {
      color: white !important;
      border-bottom: 2px solid #f9c947;
    }

    .hero {
      background-color: #2f4f4f;
      color: white;
      padding: 40px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 48px;
      margin: 0;
    }

    .profile-container {
      padding: 40px 0;
    }

    .profile-sidebar {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
    }

    .profile-sidebar a {
      color: #555;
      font-weight: bold;
      text-decoration: none;
      display: block;
      margin-bottom: 15px;
    }

    .profile-sidebar a.active {
      color: #f9c947;
    }

    .profile-content {
      background: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: #2f4f4f;
      border-color: #2f4f4f;
    }

    .btn-primary:hover {
      background-color: #f9c947;
      border-color: #f9c947;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index">SuwandiSecBrand<span>.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact us</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-5">
          <li class="nav-item">
            <a class="nav-link" href="uder"><img src="images/user.svg" alt="User" width="24"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart"><img src="images/cart.svg" alt="Cart" width="24"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history">
              <img src="images/history.svg" alt="History" width="24" style="filter: invert(1);">
            </a>
            </li>		
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>My Profile</h1>
  </section>

  <!-- Profile Section -->
  <div class="container profile-container">
    <div class="row">
      <div class="col-md-3">
        <div class="profile-sidebar">
          <a href="#" class="active">My Profile</a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="profile-content">
          <h3>Edit Your Profile</h3>
          <form>
            <div class="mb-3">
                <label for="firstName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" value="Md">
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" value="rimel111@gmail.com">
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" value="Kingston, 5236, United State">
            </div>
            <div class="mb-3">
              <label for="currentPassword" class="form-label">Phone Number</label>
              <input type="phonenumber" class="form-control" id="phonenumber">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
