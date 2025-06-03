<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SSB Pegawai - Dashboard Management">
    <meta name="keywords" content="admin, dashboard, bootstrap, business, corporate, creative, sepatu, html5, responsive">
    <meta name="author" content="SSB Pegawai Admin">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - SSB Pegawai</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"></script>
    
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

        /* Chart Container */
        .chart-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 30px;
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

        /* Home Button Styles */
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

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .chart-wrapper {
                height: 300px;
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
            <div class="loading-text">Loading Dashboard...</div>
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
                    <a href="indexpegawai" class="menu-link active">
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
                        <a href="listproduct" class="menu-link">
                            <i class="fas fa-list"></i>
                            <span>List Produk</span>
                        </a>
                        <a href="{{ url('product') }}" class="menu-link">
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
                    <div class="submenu show">
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
                    <h1>Dashboard Pegawai</h1>
                    <p>Pantau kinerja dan statistik bisnis penjualan sepatu second branded pada grafik yang tersedia.</p>
                </div>
                <a href="{{ route('index.customer') }}" class="home-btn">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>

            <!-- Dashboard Cards -->
            <div class="dashboard-grid">
                <div class="dashboard-card products">
                    <div class="card-header">
                        <div>
                            <div class="card-number" id="total-products">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="card-label">Sepatu Tersedia</div>
                        </div>
                        <div class="card-icon products">
                            <i class="fas fa-shoe-prints"></i>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card users">
                    <div class="card-header">
                        <div>
                            <div class="card-number" id="total-users">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="card-label">Users Aktif</div>
                        </div>
                        <div class="card-icon users">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card sales">
                    <div class="card-header">
                        <div>
                            <div class="card-number" id="total-sales">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="card-label">Total Penjualan</div>
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
                        </div>
                        <div class="card-icon transactions">
                            <i class="fas fa-receipt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="chart-container">
                <div class="chart-header">
                    <h2 class="chart-title">Grafik Penjualan Sepatu</h2>
                    <p class="chart-subtitle">Statistik Penjualan Bulanan dan Trend Transaksi</p>
                </div>
                <div class="chart-wrapper">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>

            <!-- Statistics Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value" id="shoes-sold">-</div>
                    <div class="stat-label">Sepatu Terjual</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="monthly-revenue">-</div>
                    <div class="stat-label">Pendapatan Bulan Ini</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="avg-transaction">-</div>
                    <div class="stat-label">Rata-rata Transaksi</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="success-rate">-</div>
                    <div class="stat-label">Tingkat Keberhasilan</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // API endpoints untuk sepatu second branded
        const API_ENDPOINTS = {
            shoes: '/api/sepatu/count',              // Endpoint untuk jumlah sepatu
            users: '/api/users/active',             // Endpoint untuk users aktif
            sales: '/api/transaksi/total-sales',    // Endpoint untuk total penjualan
            transactions: '/api/transaksi/count',   // Endpoint untuk jumlah transaksi
            monthlySales: '/api/transaksi/monthly-sales',  // Endpoint untuk penjualan bulanan
            statistics: '/api/dashboard/statistics' // Endpoint untuk statistik tambahan
        };

        // Global variables
        let salesChart;
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

        // Loading Screen
        window.onload = function() {
            setTimeout(() => {
                const loader = document.getElementById("global-loader");
                loader.style.opacity = "0";
                setTimeout(() => {
                    loader.style.display = "none";
                    // Load dashboard data setelah loader hilang
                    loadDashboardData();
                    // Setup refresh interval setiap 5 menit
                    setupAutoRefresh();
                }, 500);
            }, 1500);
        };

        // Setup auto refresh
        function setupAutoRefresh() {
            refreshInterval = setInterval(() => {
                loadDashboardData(false); // Silent refresh tanpa loading
            }, 300000); // 5 menit
        }

        // Function utama untuk load dashboard data
        async function loadDashboardData(showLoading = true) {
            try {
                if (showLoading) {
                    showLoadingState();
                }

                // Fetch semua data secara paralel
                const [shoesData, usersData, salesData, transactionsData, monthlyData, statsData] = await Promise.all([
                    fetchShoesCount(),
                    fetchActiveUsers(),
                    fetchTotalSales(),
                    fetchTransactionsCount(),
                    fetchMonthlySales(),
                    fetchStatistics()
                ]);

                // Update dashboard cards
                updateDashboardCards({
                    shoes: shoesData.count || 0,
                    users: usersData.count || 0,
                    sales: salesData.total || 0,
                    transactions: transactionsData.count || 0
                });

                // Update chart
                createSalesChart(monthlyData);

                // Update statistics
                updateStatistics(statsData);

                console.log('Dashboard data loaded successfully');

            } catch (error) {
                console.error('Error loading dashboard data:', error);
                showErrorState();
            }
        }

        // Logout confirmation - Fixed for POST method
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                document.getElementById('logout-form').submit();
            }
        }

        // Fetch jumlah sepatu tersedia
        async function fetchShoesCount() {
            try {
                const response = await fetch(API_ENDPOINTS.shoes, {
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

                return await response.json();
            } catch (error) {
                console.error('Error fetching shoes count:', error);
                // Return dummy data untuk demo
                return { count: Math.floor(Math.random() * 150) + 50 };
            }
        }

        // Fetch users aktif
        async function fetchActiveUsers() {
            try {
                const response = await fetch(API_ENDPOINTS.users, {
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

                return await response.json();
            } catch (error) {
                console.error('Error fetching active users:', error);
                // Return dummy data untuk demo
                return { count: Math.floor(Math.random() * 80) + 20 };
            }
        }

        // Fetch total penjualan
        async function fetchTotalSales() {
            try {
                const response = await fetch(API_ENDPOINTS.sales, {
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

                return await response.json();
            } catch (error) {
                console.error('Error fetching total sales:', error);
                // Return dummy data untuk demo
                return { total: Math.floor(Math.random() * 100000000) + 20000000 };
            }
        }

        // Fetch jumlah transaksi
        async function fetchTransactionsCount() {
            try {
                const response = await fetch(API_ENDPOINTS.transactions, {
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

                return await response.json();
            } catch (error) {
                console.error('Error fetching transactions count:', error);
                // Return dummy data untuk demo
                return { count: Math.floor(Math.random() * 300) + 50 };
            }
        }

        // Fetch data penjualan bulanan
        async function fetchMonthlySales() {
            try {
                const response = await fetch(API_ENDPOINTS.monthlySales, {
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

                return await response.json();
            } catch (error) {
                console.error('Error fetching monthly sales:', error);
                // Return dummy data untuk demo
                return generateDummyMonthlySales();
            }
        }

     // Fetch statistik tambahan
        async function fetchStatistics() {
            try {
                const response = await fetch(API_ENDPOINTS.statistics, {
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

                return await response.json();
            } catch (error) {
                console.error('Error fetching statistics:', error);
                // Return dummy data untuk demo
                return generateDummyStatistics();
            }
        }

        // Generate dummy monthly sales data
        function generateDummyMonthlySales() {
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            return {
                labels: months,
                datasets: [{
                    label: 'Penjualan (Rp)',
                    data: months.map(() => Math.floor(Math.random() * 20000000) + 5000000),
                    borderColor: '#3498db',
                    backgroundColor: 'rgba(52, 152, 219, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Jumlah Transaksi',
                    data: months.map(() => Math.floor(Math.random() * 50) + 10),
                    borderColor: '#e74c3c',
                    backgroundColor: 'rgba(231, 76, 60, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    yAxisID: 'y1'
                }]
            };
        }

        // Generate dummy statistics
        function generateDummyStatistics() {
            return {
                shoes_sold: Math.floor(Math.random() * 200) + 50,
                monthly_revenue: Math.floor(Math.random() * 50000000) + 10000000,
                avg_transaction: Math.floor(Math.random() * 500000) + 200000,
                success_rate: Math.floor(Math.random() * 20) + 80
            };
        }

        // Show loading state
        function showLoadingState() {
            const loadingElements = ['total-products', 'total-users', 'total-sales', 'total-transactions'];
            loadingElements.forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                }
            });
        }

        // Show error state
        function showErrorState() {
            const errorElements = ['total-products', 'total-users', 'total-sales', 'total-transactions'];
            errorElements.forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
                    element.style.color = '#e74c3c';
                }
            });

            // Show error message in chart area
            const chartWrapper = document.querySelector('.chart-wrapper');
            if (chartWrapper) {
                chartWrapper.innerHTML = '<div class="error-message">Error loading chart data. Please refresh the page.</div>';
            }
        }

        // Update dashboard cards
        function updateDashboardCards(data) {
            // Update sepatu tersedia
            const productsElement = document.getElementById('total-products');
            if (productsElement) {
                productsElement.textContent = formatNumber(data.shoes);
            }

            // Update users aktif
            const usersElement = document.getElementById('total-users');
            if (usersElement) {
                usersElement.textContent = formatNumber(data.users);
            }

            // Update total penjualan
            const salesElement = document.getElementById('total-sales');
            if (salesElement) {
                salesElement.textContent = formatCurrency(data.sales);
            }

            // Update total transaksi
            const transactionsElement = document.getElementById('total-transactions');
            if (transactionsElement) {
                transactionsElement.textContent = formatNumber(data.transactions);
            }
        }

        // Create sales chart
        function createSalesChart(data) {
            const ctx = document.getElementById('salesChart');
            if (!ctx) return;

            // Destroy existing chart
            if (salesChart) {
                salesChart.destroy();
            }

            salesChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
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
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#3498db',
                            borderWidth: 1,
                            cornerRadius: 8,
                            displayColors: true,
                            callbacks: {
                                label: function(context) {
                                    if (context.datasetIndex === 0) {
                                        return 'Penjualan: ' + formatCurrency(context.parsed.y);
                                    } else {
                                        return 'Transaksi: ' + formatNumber(context.parsed.y);
                                    }
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            display: true,
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 11,
                                    weight: '500'
                                }
                            }
                        },
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return formatCurrency(value);
                                },
                                font: {
                                    size: 10
                                }
                            }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            grid: {
                                drawOnChartArea: false,
                            },
                            ticks: {
                                callback: function(value) {
                                    return formatNumber(value);
                                },
                                font: {
                                    size: 10
                                }
                            }
                        }
                    },
                    elements: {
                        point: {
                            radius: 4,
                            hoverRadius: 6,
                            borderWidth: 2
                        }
                    }
                }
            });
        }

        // Update statistics
        function updateStatistics(data) {
            const shoesSoldElement = document.getElementById('shoes-sold');
            if (shoesSoldElement && data.shoes_sold) {
                shoesSoldElement.textContent = formatNumber(data.shoes_sold);
            }

            const monthlyRevenueElement = document.getElementById('monthly-revenue');
            if (monthlyRevenueElement && data.monthly_revenue) {
                monthlyRevenueElement.textContent = formatCurrency(data.monthly_revenue);
            }

            const avgTransactionElement = document.getElementById('avg-transaction');
            if (avgTransactionElement && data.avg_transaction) {
                avgTransactionElement.textContent = formatCurrency(data.avg_transaction);
            }

            const successRateElement = document.getElementById('success-rate');
            if (successRateElement && data.success_rate) {
                successRateElement.textContent = data.success_rate + '%';
            }
        }

        // Toggle submenu
        function toggleSubmenu(element) {
            const submenu = element.nextElementSibling;
            const arrow = element.querySelector('.menu-arrow');
            
            if (submenu && submenu.classList.contains('submenu')) {
                submenu.classList.toggle('show');
                arrow.classList.toggle('rotate');
            }
        }

        // Logout function
        function logoutUser() {
            if (confirm('Apakah Anda yakin ingin keluar dari sistem?')) {
                // Clear refresh interval
                if (refreshInterval) {
                    clearInterval(refreshInterval);
                }
                
                // Redirect to logout or login page
                window.location.href = '/logout';
            }
        }

        // Cleanup on page unload
        window.addEventListener('beforeunload', function() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
            }
            if (salesChart) {
                salesChart.destroy();
            }
        });

        // Error handling for failed API calls
        window.addEventListener('error', function(e) {
            console.error('Global error:', e.error);
        });

        // Handle visibility change for auto-refresh
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                // Page is hidden, clear interval
                if (refreshInterval) {
                    clearInterval(refreshInterval);
                }
            } else {
                // Page is visible, restart refresh
                setupAutoRefresh();
                loadDashboardData(false); // Silent refresh
            }
        });
    </script>
</body>
</html>