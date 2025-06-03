<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>SSB Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        #global-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .whirly-loader {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
            background: none;
            width: 100%;
            cursor: pointer;
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

        .data-table tbody tr:hover {
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            transform: scale(1.01);
            transition: all 0.2s ease;
        }

        .data-table tbody tr:last-child td:first-child {
            border-bottom-left-radius: 12px;
        }

        .data-table tbody tr:last-child td:last-child {
            border-bottom-right-radius: 12px;
        }

        /* Pagination Styles */
        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            padding: 20px 0;
            border-top: 1px solid #e1e8ed;
        }

        .pagination-info {
            color: #7f8c8d;
            font-size: 14px;
        }

        .pagination {
            display: flex;
            gap: 5px;
        }

        .pagination button {
            padding: 8px 12px;
            border: 1px solid #e1e8ed;
            background: white;
            color: #2c3e50;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .pagination button:hover:not(:disabled) {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .pagination button.active {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .pagination button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .entries-selector {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .entries-selector select {
            padding: 8px 12px;
            border: 2px solid #e1e8ed;
            border-radius: 6px;
            font-size: 14px;
        }

        .entries-selector select:focus {
            outline: none;
            border-color: #3498db;
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

            .pagination-container {
                flex-direction: column;
                gap: 15px;
            }
        }

        /* Hide original elements */
        .main-wrapper {
            display: none;
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
    <!-- Original Laravel Structure (Hidden) -->
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>
    <div class="main-wrapper" style="display: none;">
        <div class="header">
            <div class="header-left active">
                <a href="indexadmin" class="logo">
                    <span class="logo-text">SSB Admin</span>
                </a>
                <a href="indexadmin" class="logo-small">
                    <span class="logo-text-small">SSB Admin</span>
                </a>
                <a id="toggle_btn" href="javascript:void(0);"></a>
            </div>
            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="indexadmin"><img src="images/icons/dashboard.svg" alt="img"><span> Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="images/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="productlist" class="active">Log Produk</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="images/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="saleslist">Log Penjualan</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="images/icons/time.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoicereport">Rekap Penjualan</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="images/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="userlist">User list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title"></div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set"></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table datanew" id="originalTable" style="display: none;">
                                <thead>
                                    <tr>
                                        <th>ID Pegawai</th>
                                        <th>ID Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Waktu Penambahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>AJ1 High Red & Black</td>
                                        <td>27 May 2025, 23:30</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>Nike Sacai</td>
                                        <td>27 May 2025, 23:37</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>AJ1 Travis Scott</td>
                                        <td>27 May 2025, 23:40</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>NB 530</td>
                                        <td>27 May 2025, 23:44</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Modern Design -->
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
                    <div class="submenu" style="display: block;">
                        <a href="productlist" class="menu-link active">
                            <i class="fas fa-list"></i>
                            <span>Log Produk</span>
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
                            <span>Rekap Penjualan</span>
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
                    <h1>Log Produk</h1>
                    <p>Manage your Product Logs and Product Data</p>
                </div>
                <a href="{{ route('index.customer') }}" class="home-btn">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>

            <div class="table-container">
                <div class="table-header">
                    <h2 class="table-title">Product Activity Logs</h2>
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search products...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="entries-selector">
                    <label for="entriesPerPage">Show:</label>
                    <select id="entriesPerPage">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>entries</span>
                </div>

                <div class="table-responsive">
                    <table class="data-table" id="productTable">
                        <thead>
                            <tr>
                                <th>ID Pegawai</th>
                                <th>ID Produk</th>
                                <th>Nama Produk</th>
                                <th>Waktu Penambahan</th>
                            </tr>
                        </thead>
                        <tbody id="productTableBody">
                            <!-- Data will be populated by JavaScript from the original table -->
                        </tbody>
                    </table>
                </div>

                <div class="pagination-container">
                    <div class="pagination-info" id="paginationInfo">
                        Showing 0 to 0 of 0 entries
                    </div>
                    <div class="pagination" id="paginationControls">
                        <!-- Pagination buttons will be generated here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Original Scripts -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/feather.min.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="plugins/select2/js/select2.min.js"></script>
    <script src="plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="plugins/sweetalert/sweetalerts.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        // Pagination variables
        let allData = [];
        let filteredData = [];
        let currentPage = 1;
        let entriesPerPage = 10;

        // Copy data from original table to new table with pagination
        document.addEventListener('DOMContentLoaded', function() {
            // Hide loader
            document.getElementById('global-loader').style.display = 'none';
            
            // Get data from original table
            const originalTable = document.getElementById('originalTable');
            
            if (originalTable) {
                const originalRows = originalTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                
                for (let i = 0; i < originalRows.length; i++) {
                    const cells = originalRows[i].getElementsByTagName('td');
                    if (cells.length >= 4) {
                        allData.push({
                            pegawaiId: cells[0].textContent.trim(),
                            productId: cells[1].textContent.trim(),
                            namaProduct: cells[2].textContent.trim(),
                            waktuPenambahan: cells[3].textContent.trim()
                        });
                    }
                }
                
                filteredData = [...allData];
                updateTable();
                updatePagination();
            }
        });

        // Update table display
        function updateTable() {
            const tableBody = document.getElementById('productTableBody');
            const startIndex = (currentPage - 1) * entriesPerPage;
            const endIndex = startIndex + entriesPerPage;
            const pageData = filteredData.slice(startIndex, endIndex);
            
            tableBody.innerHTML = '';
            
            pageData.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><strong>${item.pegawaiId}</strong></td>
                    <td>${item.productId}</td>
                    <td>${item.namaProduct}</td>
                    <td>${item.waktuPenambahan}</td>
                `;
                tableBody.appendChild(row);
            });
            
            updatePaginationInfo();
        }

        // Update pagination controls
        function updatePagination() {
            const totalPages = Math.ceil(filteredData.length / entriesPerPage);
            const paginationControls = document.getElementById('paginationControls');
            
            paginationControls.innerHTML = '';
            
            // Previous button
            const prevBtn = document.createElement('button');
            prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
            prevBtn.disabled = currentPage === 1;
            prevBtn.onclick = () => goToPage(currentPage - 1);
            paginationControls.appendChild(prevBtn);
            
            // Page numbers
            const maxVisiblePages = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
            let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
            
            if (endPage - startPage + 1 < maxVisiblePages) {
                startPage = Math.max(1, endPage - maxVisiblePages + 1);
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.textContent = i;
                pageBtn.className = i === currentPage ? 'active' : '';
                pageBtn.onclick = () => goToPage(i);
                paginationControls.appendChild(pageBtn);
            }
            
            // Next button
            const nextBtn = document.createElement('button');
            nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
            nextBtn.disabled = currentPage === totalPages || totalPages === 0;
            nextBtn.onclick = () => goToPage(currentPage + 1);
            paginationControls.appendChild(nextBtn);
        }

        // Go to specific page
        function goToPage(page) {
            const totalPages = Math.ceil(filteredData.length / entriesPerPage);
            if (page >= 1 && page <= totalPages) {
                currentPage = page;
                updateTable();
                updatePagination();
            }
        }

        // Update pagination info
        function updatePaginationInfo() {
            const startIndex = (currentPage - 1) * entriesPerPage + 1;
            const endIndex = Math.min(currentPage * entriesPerPage, filteredData.length);
            const total = filteredData.length;
            
            document.getElementById('paginationInfo').textContent = 
                `Showing ${total > 0 ? startIndex : 0} to ${endIndex} of ${total} entries`;
        }

        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            
            if (searchValue === '') {
                filteredData = [...allData];
            } else {
                filteredData = allData.filter(item => 
                    item.pegawaiId.toLowerCase().includes(searchValue) ||
                    item.productId.toLowerCase().includes(searchValue) ||
                    item.namaProduct.toLowerCase().includes(searchValue) ||
                    item.waktuPenambahan.toLowerCase().includes(searchValue)
                );
            }
            
            currentPage = 1;
            updateTable();
            updatePagination();
        });

        // Entries per page change
        document.getElementById('entriesPerPage').addEventListener('change', function() {
            entriesPerPage = parseInt(this.value);
            currentPage = 1;
            updateTable();
            updatePagination();
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
                            if (sub !== submenu) {
                                sub.style.display = 'none';
                            }
                        });
                        document.querySelectorAll('.fa-chevron-down').forEach(chev => {
                            if (chev !== chevron) {
                                chev.style.transform = 'rotate(0deg)';
                            }
                        });
                        
                        submenu.style.display = 'block';
                        chevron.style.transform = 'rotate(180deg)';
                    }
                }
            });
        });

        // Logout confirmation - Fixed for POST method
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                document.getElementById('logout-form').submit();
            }
        }

        // Initialize active submenu
        document.addEventListener('DOMContentLoaded', function() {
            const activeSubmenu = document.querySelector('.submenu a.active');
            if (activeSubmenu) {
                const submenu = activeSubmenu.closest('.submenu');
                const parentLink = submenu.previousElementSibling;
                submenu.style.display = 'block';
                if (parentLink.querySelector('.fa-chevron-down')) {
                    parentLink.querySelector('.fa-chevron-down').style.transform = 'rotate(180deg)';
                }
            }
        });
    </script>
</body>
</html>