<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales List - SSB Admin</title>
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
        }

        .submenu .menu-link {
            padding: 12px 20px;
            font-size: 14px;
        }

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

        /* Table Styles */
        .table-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .table-header {
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-title {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
        }

        .search-box {
            position: relative;
            width: 300px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 45px 12px 20px;
            border: 2px solid #e1e8ed;
            border-radius: 25px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .search-box input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .search-box i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table th {
            background: linear-gradient(145deg, #34495e, #2c3e50);
            color: white;
            padding: 18px 15px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 3px solid #3498db;
        }

        .data-table th:first-child {
            border-top-left-radius: 12px;
        }

        .data-table th:last-child {
            border-top-right-radius: 12px;
        }

        .data-table td {
            padding: 18px 15px;
            border-bottom: 1px solid #e1e8ed;
            color: #2c3e50;
            font-size: 14px;
        }

        .data-table tr:hover {
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            transform: scale(1.01);
            transition: all 0.2s ease;
        }

        .data-table tr:last-child td:first-child {
            border-bottom-left-radius: 12px;
        }

        .data-table tr:last-child td:last-child {
            border-bottom-right-radius: 12px;
        }

        .transaction-id {
            font-weight: 700;
            color: #3498db;
        }

        .customer-id {
            background: linear-gradient(145deg, #fef3c7, #fbbf24);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            color: #92400e;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .product-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .product-id {
            font-size: 12px;
            color: #64748b;
            font-weight: 500;
        }

        .product-name {
            font-weight: 600;
            color: #2c3e50;
        }

        .price {
            font-weight: 700;
            color: #27ae60;
            font-size: 16px;
        }

        .datetime {
            color: #64748b;
            font-size: 13px;
            font-weight: 500;
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

            .logout-btn span {
                display: none;
            }

            .main-content {
                padding: 15px;
            }

            .top-bar {
                flex-direction: column;
                gap: 15px;
            }

            .search-box {
                width: 100%;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
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
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <a href="indexadmin" class="logo">
                    <i class="fas fa-chart-line"></i>
                    <span>SSB Admin</span>
                </a>
            </div>
            
            <div class="sidebar-menu">
                <div class="menu-item">
                    <a href="indexadmin" class="menu-link">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
                
                <div class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <i class="fas fa-box"></i>
                        <span>Product</span>
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </a>
                    <div class="submenu">
                        <a href="productlist" class="menu-link">
                            <i class="fas fa-list"></i>
                            <span>Product List</span>
                        </a>
                    </div>
                </div>
                
                <div class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Sales</span>
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </a>
                    <div class="submenu">
                        <a href="saleslist" class="menu-link active">
                            <i class="fas fa-receipt"></i>
                            <span>Log Penjualan</span>
                        </a>
                    </div>
                </div>
                
                <div class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <i class="fas fa-file-alt"></i>
                        <span>Report</span>
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </a>
                    <div class="submenu">
                        <a href="invoicereport" class="menu-link">
                            <i class="fas fa-file-invoice"></i>
                            <span>Invoice Report</span>
                        </a>
                    </div>
                </div>
                
                <div class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </a>
                    <div class="submenu">
                        <a href="userlist" class="menu-link">
                            <i class="fas fa-user-list"></i>
                            <span>User List</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="logout-section">
                <a href="#" class="logout-btn" onclick="confirmLogout()">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="top-bar">
                <div class="page-title">
                    <h1>Sales Management</h1>
                    <p>Monitor and manage your sales transactions</p>
                </div>
                <a href="{{ route('index.customer') }}" class="home-btn">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>

            <div class="table-container">
                <div class="table-header">
                    <h2 class="table-title">Sales List</h2>
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search sales...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="data-table" id="salesTable">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>ID Customer</th>
                                <th>Product Info</th>
                                <th>Total Harga</th>
                                <th>Waktu Penjualan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="transaction-id">TXN-001</span></td>
                                <td><span class="customer-id">CUST-101</span></td>
                                <td>
                                    <div class="product-info">
                                        <span class="product-id">PRD-001</span>
                                        <span class="product-name">Laptop Gaming ASUS</span>
                                    </div>
                                </td>
                                <td><span class="price">Rp 15,999,000</span></td>
                                <td><span class="datetime">23 May 2024, 14:30</span></td>
                            </tr>
                            <tr>
                                <td><span class="transaction-id">TXN-002</span></td>
                                <td><span class="customer-id">CUST-102</span></td>
                                <td>
                                    <div class="product-info">
                                        <span class="product-id">PRD-002</span>
                                        <span class="product-name">Mouse Wireless Logitech</span>
                                    </div>
                                </td>
                                <td><span class="price">Rp 450,000</span></td>
                                <td><span class="datetime">23 May 2024, 13:15</span></td>
                            </tr>
                            <tr>
                                <td><span class="transaction-id">TXN-003</span></td>
                                <td><span class="customer-id">CUST-103</span></td>
                                <td>
                                    <div class="product-info">
                                        <span class="product-id">PRD-003</span>
                                        <span class="product-name">Keyboard Mechanical RGB</span>
                                    </div>
                                </td>
                                <td><span class="price">Rp 1,250,000</span></td>
                                <td><span class="datetime">23 May 2024, 12:45</span></td>
                            </tr>
                            <tr>
                                <td><span class="transaction-id">TXN-004</span></td>
                                <td><span class="customer-id">CUST-104</span></td>
                                <td>
                                    <div class="product-info">
                                        <span class="product-id">PRD-004</span>
                                        <span class="product-name">Monitor 4K Dell</span>
                                    </div>
                                </td>
                                <td><span class="price">Rp 8,750,000</span></td>
                                <td><span class="datetime">23 May 2024, 11:20</span></td>
                            </tr>
                            <tr>
                                <td><span class="transaction-id">TXN-005</span></td>
                                <td><span class="customer-id">CUST-105</span></td>
                                <td>
                                    <div class="product-info">
                                        <span class="product-id">PRD-005</span>
                                        <span class="product-name">Headset Gaming HyperX</span>
                                    </div>
                                </td>
                                <td><span class="price">Rp 2,100,000</span></td>
                                <td><span class="datetime">23 May 2024, 10:55</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#salesTable tbody tr');
            
            tableRows.forEach(row => {
                const rowText = row.textContent.toLowerCase();
                if (rowText.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Sidebar menu toggle
        document.querySelectorAll('.sidebar-menu .menu-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.nextElementSibling && this.nextElementSibling.classList.contains('submenu')) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    const chevron = this.querySelector('.fa-chevron-down');
                    
                    if (submenu.style.display === 'block') {
                        submenu.style.display = 'none';
                        chevron.style.transform = 'rotate(0deg)';
                    } else {
                        // Hide all other submenus
                        document.querySelectorAll('.submenu').forEach(sub => {
                            sub.style.display = 'none';
                        });
                        document.querySelectorAll('.fa-chevron-down').forEach(chev => {
                            chev.style.transform = 'rotate(0deg)';
                        });
                        
                        submenu.style.display = 'block';
                        chevron.style.transform = 'rotate(180deg)';
                    }
                }
            });
        });

        // Initialize active submenu
        document.addEventListener('DOMContentLoaded', function() {
            const activeLink = document.querySelector('.menu-link.active');
            if (activeLink && activeLink.closest('.submenu')) {
                const submenu = activeLink.closest('.submenu');
                const parentLink = submenu.previousElementSibling;
                submenu.style.display = 'block';
                if (parentLink.querySelector('.fa-chevron-down')) {
                    parentLink.querySelector('.fa-chevron-down').style.transform = 'rotate(180deg)';
                }
            }
        });

        // Logout confirmation
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                // Add your logout logic here
                window.location.href = '/logout';
            }
        }

        // Add loading animation to buttons
        document.querySelectorAll('button, .btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = '<span class="loading"></span> Processing...';
                this.disabled = true;
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.disabled = false;
                }, 2000);
            });
        });

        // Smooth scroll and animations
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Table row animations
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

        document.querySelectorAll('.data-table tbody tr').forEach((row, index) => {
            row.style.opacity = '0';
            row.style.transform = 'translateY(20px)';
            row.style.transition = `all 0.3s ease ${index * 0.1}s`;
            observer.observe(row);
        });
    </script>
</body>
</html>