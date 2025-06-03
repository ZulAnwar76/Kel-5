<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SSB Admin - Dashboard Management">
    <meta name="keywords" content="admin, dashboard, bootstrap, business, corporate, creative, sepatu, html5, responsive">
    <meta name="author" content="SSB Admin">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard - SSB Management</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
        }

        /* Loading Screen */
        #global-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
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

        .refresh-btn {
            background: linear-gradient(145deg, #27ae60, #229954);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
        }

        .refresh-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(39, 174, 96, 0.4);
        }

        /* Dashboard Cards */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .dashboard-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }

        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3498db, #2980b9);
        }

        .dashboard-card.products::before {
            background: linear-gradient(90deg, #9b59b6, #8e44ad);
        }

        .dashboard-card.users::before {
            background: linear-gradient(90deg, #e74c3c, #c0392b);
        }

        .dashboard-card.sales::before {
            background: linear-gradient(90deg, #27ae60, #229954);
        }

        .dashboard-card.transactions::before {
            background: linear-gradient(90deg, #f39c12, #e67e22);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }

        .card-icon.products {
            background: linear-gradient(145deg, #9b59b6, #8e44ad);
        }

        .card-icon.users {
            background: linear-gradient(145deg, #e74c3c, #c0392b);
        }

        .card-icon.sales {
            background: linear-gradient(145deg, #27ae60, #229954);
        }

        .card-icon.transactions {
            background: linear-gradient(145deg, #f39c12, #e67e22);
        }

        .card-number {
            font-size: 36px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .card-label {
            font-size: 16px;
            color: #7f8c8d;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card-trend {
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 12px;
            font-weight: 600;
            margin-top: 8px;
        }

        .card-trend.positive {
            background: rgba(39, 174, 96, 0.1);
            color: #27ae60;
        }

        .card-trend.negative {
            background: rgba(231, 76, 60, 0.1);
            color: #e74c3c;
        }

        /* Chart Containers */
        .charts-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
            margin-bottom: 30px;
        }

        .chart-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .chart-header {
            margin-bottom: 25px;
            text-align: center;
        }

        .chart-title {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .chart-subtitle {
            color: #7f8c8d;
            font-size: 14px;
        }

        .chart-wrapper {
            position: relative;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .small-chart-wrapper {
            position: relative;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Statistics Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Loading state for cards */
        .loading-state {
            opacity: 0.6;
            position: relative;
        }

        .loading-state::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        /* Error State */
        .error-message {
            color: #e74c3c;
            text-align: center;
            padding: 20px;
            background: rgba(231, 76, 60, 0.1);
            border-radius: 10px;
            margin: 10px 0;
        }

        /* Recent Activity */
        .activity-feed {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            margin-top: 25px;
        }

        .activity-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 16px;
            color: white;
        }

        .activity-icon.sale {
            background: linear-gradient(145deg, #27ae60, #229954);
        }

        .activity-icon.user {
            background: linear-gradient(145deg, #3498db, #2980b9);
        }

        .activity-icon.product {
            background: linear-gradient(145deg, #9b59b6, #8e44ad);
        }

        .activity-content h4 {
            color: #2c3e50;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .activity-content p {
            color: #7f8c8d;
            font-size: 12px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .charts-grid {
                grid-template-columns: 1fr;
            }
        }

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

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .chart-wrapper {
                height: 300px;
            }
        }

        /* Animation for cards */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dashboard-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .dashboard-card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .dashboard-card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .dashboard-card:nth-child(4) {
            animation-delay: 0.3s;
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div id="global-loader">
        <div>
            <div class="whirly-loader"></div>
            <div class="loading-text">Loading Admin Dashboard...</div>
        </div>
    </div>

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
                    <a href="indexadmin" class="menu-link active">
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
                    <div class="submenu">
                        <a href="productlist" class="menu-link">
                            <i class="fas fa-list"></i>
                            <span>List Produk</span>
                        </a>
                    </div>
                </div>
                
                <div class="menu-item">
                    <a href="javascript:void(0);" class="menu-link" onclick="toggleSubmenu(this)">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <a href="userlist" class="menu-link">
                            <i class="fas fa-user-friends"></i>
                            <span>User list</span>
                        </a>
                    </div>
                </div>

                <div class="menu-item">
                    <a href="invoicereport" class="menu-link">
                        <i class="fas fa-chart-bar"></i>
                        <span>Reports</span>
                    </a>
                </div>
            </div>
            
            <div class="logout-section">
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
                    <h1>Admin Dashboard</h1>
                    <p>Monitor kinerja bisnis dan kelola data penjualan sepatu second branded.</p>
                </div>
                <button class="refresh-btn" onclick="refreshDashboard()">
                    <i class="fas fa-sync-alt"></i>
                    <span>Refresh Data</span>
                </button>
            </div>

            <!-- Dashboard Cards -->
            <div class="dashboard-grid">
                <div class="dashboard-card products">
                    <div class="card-header">
                        <div>
                            <div class="card-number" id="total-products">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="card-label">Total Produk</div>
                            <div class="card-trend positive" id="products-trend" style="display: none;">
                                <i class="fas fa-arrow-up"></i> +0%
                            </div>
                        </div>
                        <div class="card-icon products">
                            <i class="fas fa-shoe-prints"></i>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card users">
                    <div class="card-header">
                        <div>
                            <div class="card-number" id="total-customers">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="card-label">Total Customers</div>
                            <div class="card-trend positive" id="customers-trend" style="display: none;">
                                <i class="fas fa-arrow-up"></i> +0%
                            </div>
                        </div>
                        <div class="card-icon users">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card sales">
                    <div class="card-header">
                        <div>
                            <div class="card-number" id="total-revenue">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="card-label">Total Pendapatan</div>
                            <div class="card-trend positive" id="revenue-trend" style="display: none;">
                                <i class="fas fa-arrow-up"></i> +0%
                            </div>
                        </div>
                        <div class="card-icon sales">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card transactions">
                    <div class="card-header">
                        <div>
                            <div class="card-number" id="total-transactions">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="card-label">Total Transaksi</div>
                            <div class="card-trend positive" id="transactions-trend" style="display: none;">
                                <i class="fas fa-arrow-up"></i> +0%
                            </div>
                        </div>
                        <div class="card-icon transactions">
                            <i class="fas fa-receipt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts-grid">
                <!-- Sales Chart -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h2 class="chart-title">Grafik Penjualan Bulanan</h2>
                        <p class="chart-subtitle">Pendapatan dan Transaksi per Bulan</p>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>

                <!-- Product Categories Chart -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h2 class="chart-title">Kategori Produk</h2>
                        <p class="chart-subtitle">Distribusi Produk per Kategori</p>
                    </div>
                    <div class="small-chart-wrapper">
                        <canvas id="categoriesChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Statistics Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value" id="products-sold-today">-</div>
                    <div class="stat-label">Produk Terjual Hari Ini</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="low-stock-products">-</div>
                    <div class="stat-label">Produk Stok Rendah</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="new-customers-month">-</div>
                    <div class="stat-label">Customer Baru Bulan Ini</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="avg-order-value">-</div>
                    <div class="stat-label">Rata-rata Nilai Order</div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="activity-feed">
                <div class="chart-header">
                    <h2 class="chart-title">Aktivitas Terbaru</h2>
                    <p class="chart-subtitle">Transaksi dan aktivitas sistem terkini</p>
                </div>
                <div id="recent-activities">
                    <!-- Activities will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Global variables
        let salesChart;
        let categoriesChart;
        let dashboardData = {};
        let refreshInterval;

        // Format number dengan locale Indonesia
        function formatNumber(number) {
            return new Intl.NumberFormat('id-ID').format(number);
        }

        // Format currency dengan Rupiah
        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(amount);
        }

        // Format untuk nilai singkat (K, M, B)
        function formatShortNumber(number) {
            if (number >= 1000000000) {
                return (number / 1000000000).toFixed(1) + 'B';
            }
            if (number >= 1000000) {
                return (number / 1000000).toFixed(1) + 'M';
            }
            if (number >= 1000) {
                return (number / 1000).toFixed(1) + 'K';
            }
            return number.toString();
        }

        // Loading Screen
        window.onload = function() {
            setTimeout(() => {
                const loader = document.getElementById("global-loader");
                loader.style.opacity = "0";
                setTimeout(() => {
                    loader.style.display = "none";
                    loadDashboardData();
                    setupAutoRefresh();
                }, 500);
            }, 1500);
        };

        // Setup auto refresh setiap 5 menit
        function setupAutoRefresh() {
            refreshInterval = setInterval(() => {
                loadDashboardData(false);
            }, 300000);
        }

        // Main function untuk load dashboard data
        async function loadDashboardData(showLoading = true) {
            try {
                if (showLoading) {
                    showLoadingState();
                }

                // Fetch dashboard data dari API
                const response = await fetch('/api/admin/dashboard-data', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                    }
                });

if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                dashboardData = data;

                // Update dashboard cards
                updateDashboardCards(data);

                // Update charts
                updateCharts(data);

                // Update statistics
                updateStatistics(data);

                // Update recent activities
                updateRecentActivities(data.recent_activities || []);

                hideLoadingState();

            } catch (error) {
                console.error('Error loading dashboard data:', error);
                
                // Load mock data sebagai fallback
                loadMockData();
                hideLoadingState();
                
                // Show error message
                showErrorMessage('Gagal memuat data dari server. Menampilkan data simulasi.');
            }
        }

        // Load mock data untuk demo
        function loadMockData() {
            const mockData = {
                total_products: 156,
                total_customers: 89,
                total_revenue: 15750000,
                total_transactions: 234,
                products_sold_today: 12,
                low_stock_products: 8,
                new_customers_month: 23,
                avg_order_value: 67300,
                monthly_sales: [
                    { month: 'Jan', revenue: 8500000, transactions: 45 },
                    { month: 'Feb', revenue: 9200000, transactions: 52 },
                    { month: 'Mar', revenue: 11800000, transactions: 68 },
                    { month: 'Apr', revenue: 10500000, transactions: 59 },
                    { month: 'May', revenue: 13200000, transactions: 74 },
                    { month: 'Jun', revenue: 15750000, transactions: 89 }
                ],
                product_categories: [
                    { category: 'Sneakers', count: 45, color: '#3498db' },
                    { category: 'Boots', count: 32, color: '#e74c3c' },
                    { category: 'Formal', count: 28, color: '#27ae60' },
                    { category: 'Sandals', count: 25, color: '#f39c12' },
                    { category: 'Sports', count: 26, color: '#9b59b6' }
                ],
                recent_activities: [
                    { type: 'sale', title: 'Penjualan Nike Air Max', description: '2 menit yang lalu', amount: 850000 },
                    { type: 'user', title: 'Customer baru bergabung', description: '5 menit yang lalu', user: 'Ahmad Rizki' },
                    { type: 'product', title: 'Produk baru ditambahkan', description: '15 menit yang lalu', product: 'Adidas Ultraboost' },
                    { type: 'sale', title: 'Penjualan Converse All Star', description: '23 menit yang lalu', amount: 450000 },
                    { type: 'user', title: 'Customer baru bergabung', description: '35 menit yang lalu', user: 'Sari Indah' }
                ]
            };

            dashboardData = mockData;
            updateDashboardCards(mockData);
            updateCharts(mockData);
            updateStatistics(mockData);
            updateRecentActivities(mockData.recent_activities);
        }

        // Update dashboard cards
        function updateDashboardCards(data) {
            document.getElementById('total-products').textContent = formatNumber(data.total_products);
            document.getElementById('total-customers').textContent = formatNumber(data.total_customers);
            document.getElementById('total-revenue').textContent = formatCurrency(data.total_revenue);
            document.getElementById('total-transactions').textContent = formatNumber(data.total_transactions);

            // Show trends (mock trend calculation)
            showTrend('products-trend', '+12%', 'positive');
            showTrend('customers-trend', '+8%', 'positive');
            showTrend('revenue-trend', '+15%', 'positive');
            showTrend('transactions-trend', '+10%', 'positive');
        }

        // Show trend indicators
        function showTrend(elementId, percentage, type) {
            const element = document.getElementById(elementId);
            if (element) {
                element.innerHTML = `<i class="fas fa-arrow-${type === 'positive' ? 'up' : 'down'}"></i> ${percentage}`;
                element.className = `card-trend ${type}`;
                element.style.display = 'block';
            }
        }

        // Update statistics
        function updateStatistics(data) {
            document.getElementById('products-sold-today').textContent = formatNumber(data.products_sold_today);
            document.getElementById('low-stock-products').textContent = formatNumber(data.low_stock_products);
            document.getElementById('new-customers-month').textContent = formatNumber(data.new_customers_month);
            document.getElementById('avg-order-value').textContent = formatCurrency(data.avg_order_value);
        }

        // Update charts
        function updateCharts(data) {
            createSalesChart(data.monthly_sales);
            createCategoriesChart(data.product_categories);
        }

        // Create sales chart
        function createSalesChart(salesData) {
            const ctx = document.getElementById('salesChart').getContext('2d');
            
            if (salesChart) {
                salesChart.destroy();
            }

            salesChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: salesData.map(item => item.month),
                    datasets: [{
                        label: 'Pendapatan (Juta Rp)',
                        data: salesData.map(item => item.revenue / 1000000),
                        borderColor: '#3498db',
                        backgroundColor: 'rgba(52, 152, 219, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#3498db',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 6
                    }, {
                        label: 'Transaksi',
                        data: salesData.map(item => item.transactions),
                        borderColor: '#e74c3c',
                        backgroundColor: 'rgba(231, 76, 60, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#e74c3c',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 6,
                        yAxisID: 'y1'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                usePointStyle: true,
                                padding: 20,
                                font: {
                                    size: 12,
                                    weight: '600'
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            title: {
                                display: true,
                                text: 'Pendapatan (Juta Rp)',
                                font: {
                                    size: 12,
                                    weight: '600'
                                }
                            },
                            grid: {
                                color: 'rgba(0,0,0,0.1)'
                            }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Jumlah Transaksi',
                                font: {
                                    size: 12,
                                    weight: '600'
                                }
                            },
                            grid: {
                                drawOnChartArea: false,
                            },
                        },
                        x: {
                            grid: {
                                color: 'rgba(0,0,0,0.1)'
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });
        }

        // Create categories chart
        function createCategoriesChart(categoriesData) {
            const ctx = document.getElementById('categoriesChart').getContext('2d');
            
            if (categoriesChart) {
                categoriesChart.destroy();
            }

            categoriesChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: categoriesData.map(item => item.category),
                    datasets: [{
                        data: categoriesData.map(item => item.count),
                        backgroundColor: categoriesData.map(item => item.color),
                        borderWidth: 0,
                        hoverBorderWidth: 3,
                        hoverBorderColor: '#fff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true,
                                font: {
                                    size: 11,
                                    weight: '600'
                                }
                            }
                        }
                    },
                    cutout: '60%'
                }
            });
        }

        // Update recent activities
        function updateRecentActivities(activities) {
            const container = document.getElementById('recent-activities');
            container.innerHTML = '';

            activities.forEach(activity => {
                const activityElement = document.createElement('div');
                activityElement.className = 'activity-item';
                
                let description = activity.description;
                if (activity.amount) {
                    description += ` - ${formatCurrency(activity.amount)}`;
                } else if (activity.user) {
                    description += ` - ${activity.user}`;
                } else if (activity.product) {
                    description += ` - ${activity.product}`;
                }

                activityElement.innerHTML = `
                    <div class="activity-icon ${activity.type}">
                        <i class="fas fa-${getActivityIcon(activity.type)}"></i>
                    </div>
                    <div class="activity-content">
                        <h4>${activity.title}</h4>
                        <p>${description}</p>
                    </div>
                `;
                
                container.appendChild(activityElement);
            });
        }

        // Get activity icon based on type
        function getActivityIcon(type) {
            const icons = {
                'sale': 'shopping-cart',
                'user': 'user-plus',
                'product': 'box'
            };
            return icons[type] || 'info-circle';
        }

        // Show loading state
        function showLoadingState() {
            const cards = document.querySelectorAll('.dashboard-card');
            cards.forEach(card => {
                card.classList.add('loading-state');
            });
        }

        // Hide loading state
        function hideLoadingState() {
            const cards = document.querySelectorAll('.dashboard-card');
            cards.forEach(card => {
                card.classList.remove('loading-state');
            });
        }

        // Show error message
        function showErrorMessage(message) {
            const mainContent = document.querySelector('.main-content');
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${message}`;
            
            // Insert after top-bar
            const topBar = document.querySelector('.top-bar');
            topBar.parentNode.insertBefore(errorDiv, topBar.nextSibling);
            
            // Remove after 5 seconds
            setTimeout(() => {
                if (errorDiv.parentNode) {
                    errorDiv.parentNode.removeChild(errorDiv);
                }
            }, 5000);
        }

        // Refresh dashboard
        function refreshDashboard() {
            const refreshBtn = document.querySelector('.refresh-btn');
            const icon = refreshBtn.querySelector('i');
            
            // Add spinning animation
            icon.style.animation = 'spin 1s linear infinite';
            refreshBtn.disabled = true;
            
            loadDashboardData(true).finally(() => {
                // Remove spinning animation
                setTimeout(() => {
                    icon.style.animation = '';
                    refreshBtn.disabled = false;
                }, 1000);
            });
        }

        // Toggle submenu
        function toggleSubmenu(element) {
            const submenu = element.parentNode.querySelector('.submenu');
            const arrow = element.querySelector('.menu-arrow');
            
            if (submenu.classList.contains('show')) {
                submenu.classList.remove('show');
                arrow.classList.remove('rotate');
            } else {
                // Close all other submenus
                document.querySelectorAll('.submenu.show').forEach(sub => {
                    sub.classList.remove('show');
                });
                document.querySelectorAll('.menu-arrow.rotate').forEach(arr => {
                    arr.classList.remove('rotate');
                });
                
                // Open current submenu
                submenu.classList.add('show');
                arrow.classList.add('rotate');
            }
        }

        // Confirm logout
        function confirmLogout() {
            if (confirm('Apakah Anda yakin ingin keluar dari dashboard admin?')) {
                // Clear refresh interval
                if (refreshInterval) {
                    clearInterval(refreshInterval);
                }
                
                // Redirect to logout or login page
                window.location.href = 'login';
            }
        }

        // Set active menu
        function setActiveMenu(element) {
            // Remove active class from all menu links
            document.querySelectorAll('.menu-link').forEach(link => {
                link.classList.remove('active');
            });
            
            // Add active class to clicked element
            element.classList.add('active');
        }

        // Handle window resize for charts
        window.addEventListener('resize', function() {
            if (salesChart) {
                salesChart.resize();
            }
            if (categoriesChart) {
                categoriesChart.resize();
            }
        });

        // Handle page visibility change
        document.addEventListener('visibilitychange', function() {
            if (document.visibilityState === 'visible') {
                // Refresh data when page becomes visible
                loadDashboardData(false);
            }
        });

        // Cleanup on page unload
        window.addEventListener('beforeunload', function() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
            }
        });
        </script>
</body>
</html>