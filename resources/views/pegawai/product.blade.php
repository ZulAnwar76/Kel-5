<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>SSB Pegawai - Product Add</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        /* Loading Screen */
        #global-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }

        .whirly-loader {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .loading-text {
            color: white;
            font-size: 18px;
            margin-top: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            background: linear-gradient(145deg, #2c3e50, #34495e);
            color: white;
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            background: linear-gradient(145deg, #34495e, #2c3e50);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #3498db;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            font-size: 28px;
        }

        .sidebar-menu {
            padding: 20px 0;
            flex: 1;
            height: calc(100vh - 200px);
            overflow-y: auto;
        }

        .menu-item {
            margin: 8px 15px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #bdc3c7;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .menu-link:hover {
            background: linear-gradient(145deg, #3498db, #2980b9);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }

        .menu-link.active {
            background: linear-gradient(145deg, #e74c3c, #c0392b);
            color: white;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
        }

        .menu-link i {
            margin-right: 15px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        .submenu {
            margin-left: 20px;
            display: none;
        }

        .submenu .menu-link {
            padding: 12px 20px;
            font-size: 14px;
        }

        .submenu.show {
            display: block;
        }

        .menu-arrow {
            margin-left: auto;
            transition: transform 0.3s ease;
        }

        .menu-arrow.rotate {
            transform: rotate(180deg);
        }

        /* Logout Section Styles */
        .logout-section {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            padding: 0 15px;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #e74c3c;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 2px solid #e74c3c;
            background: transparent;
            width: 100%;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
        }

        .logout-btn:hover {
            background: #e74c3c;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(231, 76, 60, 0.3);
        }

        .logout-btn i {
            margin-right: 15px;
            font-size: 18px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 30px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            position: relative;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px 25px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .page-title {
            color: white;
        }

        .page-title h1 {
            font-size: 32px;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .page-title p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
        }

        .home-btn {
            background: linear-gradient(145deg, #27ae60, #229954);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
        }

        .home-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(39, 174, 96, 0.4);
            color: white;
        }

        /* Form Container */
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-header {
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e1e8ed;
        }

        .form-title {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
        }

        .form-subtitle {
            color: #7f8c8d;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Form Styles */
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            min-width: 250px;
        }

        .form-group.full-width {
            flex: 100%;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
            transform: translateY(-1px);
        }

        .form-control:hover {
            border-color: #bdc3c7;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        select.form-control {
            cursor: pointer;
        }

        /* File input styling */
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input-wrapper input[type=file] {
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border: 2px dashed #e1e8ed;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .file-input-label:hover {
            border-color: #3498db;
            background: #e3f2fd;
        }

        .file-input-label i {
            margin-right: 10px;
            color: #3498db;
        }

        /* Button Styles */
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e1e8ed;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-submit {
            background: linear-gradient(145deg, #27ae60, #229954);
            color: white;
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(39, 174, 96, 0.4);
        }

        .btn-cancel {
            background: linear-gradient(145deg, #95a5a6, #7f8c8d);
            color: white;
            box-shadow: 0 4px 15px rgba(149, 165, 166, 0.3);
        }

        .btn-cancel:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(149, 165, 166, 0.4);
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar-header .logo span {
                display: none;
            }

            .menu-link span {
                display: none;
            }

            .main-content {
                padding: 15px;
            }

            .top-bar {
                flex-direction: column;
                gap: 15px;
            }

            .form-row {
                flex-direction: column;
            }

            .form-group {
                min-width: auto;
            }

            .btn-group {
                flex-direction: column;
            }
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(145deg, #3498db, #2980b9);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(145deg, #2980b9, #21618c);
        }

        /* Loading Animation for buttons */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <!-- Global Loader -->
    <div id="global-loader">
        <div>
            <div class="whirly-loader"></div>
            <div class="loading-text">Loading Product Form...</div>
        </div>
    </div>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <a href="indexpegawai" class="logo">
                    <i class="fas fa-chart-line"></i>
                    <span>SSB Pegawai</span>
                </a>
            </div>
            
            <div class="sidebar-menu">
                <div class="menu-item">
                    <a href="indexpegawai" class="menu-link">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
                
                <div class="menu-item">
                    <a href="javascript:void(0);" class="menu-link" onclick="toggleSubmenu(this)">
                        <i class="fas fa-box"></i>
                        <span>Product</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="submenu show">
                        <a href="listproduct" class="menu-link">
                            <i class="fas fa-list"></i>
                            <span>List Produk</span>
                        </a>
                        <a href="{{ route('product.create') }}" class="menu-link active">
                            <i class="fas fa-plus"></i>
                            <span>Tambah Produk</span>
                        </a>
                    </div>
                </div>
                
                <div class="menu-item">
                    <a href="javascript:void(0);" class="menu-link" onclick="toggleSubmenu(this)">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Sales</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <a href="transaksi" class="menu-link">
                            <i class="fas fa-credit-card"></i>
                            <span>Proses Transaksi</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="logout-section">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <button type="button" class="logout-btn" onclick="confirmLogout()">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="top-bar">
                <div class="page-title">
                    <h1>Product Add</h1>
                    <p>Create new product for your inventory</p>
                </div>
               <a href="{{ route('index.customer') }}" class="home-btn">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>

            <div class="form-container">
                <div class="form-header">
                    <div>
                        <h2 class="form-title">Add New Product</h2>
                        <p class="form-subtitle">Fill in the details below to add a new product to your inventory</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('product.submit') }}" enctype="multipart/form-data" id="productForm">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">Product Name *</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter product name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="category" class="form-label">Category *</label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="">Select Category</option>
                                <option value="sport">Sport</option>
                                <option value="casual">Casual</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="size" class="form-label">Size</label>
                            <input type="number" id="size" name="size" class="form-control" placeholder="Contoh: 40,41,42,43">
                        </div>
                        
                        <div class="form-group">
                            <label for="price" class="form-label">Price (Rp) *</label>
                            <input type="number" id="price" name="price" class="form-control" placeholder="Contoh: 100000" required>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="image" class="form-label">Product Image</label>
                        <div class="file-input-wrapper">
                            <input type="file" id="image" name="image" accept="image/*">
                            <label for="image" class="file-input-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Choose image file or drag and drop here</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="4" placeholder="Enter product description..."></textarea>
                    </div>

                    <div class="btn-group">
                        <button type="submit" class="btn btn-submit">
                            <i class="fas fa-save"></i>
                            <span>Submit Product</span>
                        </button>
                        <a href="produk" class="btn btn-cancel">
                            <i class="fas fa-times"></i>
                            <span>Cancel</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Loading Screen
        window.onload = function() {
            setTimeout(() => {
                const loader = document.getElementById("global-loader");
                loader.style.opacity = "0";
                setTimeout(() => {
                    loader.style.display = "none";
                }, 500);
            }, 800); // Show loading for 0.8 seconds
        };

        // Logout confirmation
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                document.getElementById('logout-form').submit();
            }
        }

        // Submenu Toggle
        function toggleSubmenu(element) {
            const submenu = element.nextElementSibling;
            const arrow = element.querySelector('.menu-arrow');
            
            // Close all other submenus
            document.querySelectorAll('.submenu').forEach(sub => {
                if (sub !== submenu) {
                    sub.classList.remove('show');
                }
            });
            
            document.querySelectorAll('.menu-arrow').forEach(arr => {
                if (arr !== arrow) {
                    arr.classList.remove('rotate');
                }
            });
            
            // Toggle current submenu
            submenu.classList.toggle('show');
            arrow.classList.toggle('rotate');
        }

        // Initialize sidebar state on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Find the active Product submenu and ensure it's shown
            const activeSubmenu = document.querySelector('.submenu.show');
            if (activeSubmenu) {
                const parentMenuItem = activeSubmenu.closest('.menu-item');
                const parentLink = parentMenuItem.querySelector('.menu-link');
                const arrow = parentLink.querySelector('.menu-arrow');
                if (arrow) {
                    arrow.classList.add('rotate');
                }
            }
        });

        // File input feedback
        document.getElementById('image').addEventListener('change', function() {
            const label = document.querySelector('.file-input-label span');
            if (this.files.length > 0) {
                label.textContent = `Selected: ${this.files[0].name}`;
            } else {
                label.textContent = 'Choose image file or drag and drop here';
            }
        });

        // Form submission with loading
        document.getElementById('productForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span class="loading"></span> Processing...';
            submitBtn.disabled = true;
            
            // If form validation fails, restore button
            setTimeout(() => {
                if (!this.checkValidity()) {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            }, 100);
        });

        // Input animations
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Price input formatting
        document.getElementById('price').addEventListener('input', function() {
            // Remove non-numeric characters except decimal point
            this.value = this.value.replace(/[^0-9.]/g, '');
        });

        // Smooth animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe form groups for animation
        document.querySelectorAll('.form-group').forEach((group, index) => {
            group.style.opacity = '0';
            group.style.transform = 'translateY(20px)';
            group.style.transition = `all 0.3s ease ${index * 0.1}s`;
            observer.observe(group);
        });
    </script>
</body>
</html>