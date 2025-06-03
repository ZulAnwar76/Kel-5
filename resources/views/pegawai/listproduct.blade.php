<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product - SSB Pegawai</title>
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
            width: 80px;
            height: 80px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
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
            flex-wrap: wrap;
            gap: 15px;
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

        .price {
            font-weight: 700;
            color: #27ae60;
            font-size: 16px;
        }

        /* Pagination Styles */
        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #e1e8ed;
        }

        .pagination-info {
            color: #7f8c8d;
            font-size: 14px;
        }

        .pagination {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .pagination button {
            padding: 8px 12px;
            border: 1px solid #e1e8ed;
            background: white;
            color: #2c3e50;
            border-radius: 8px;
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

            .table-header {
                flex-direction: column;
                align-items: stretch;
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

        /* Hidden logout form */
        #logoutForm {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <a href="indexpegawai" class="logo">
                    <i class="fas fa-running"></i>
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
                    <a href="javascript:void(0);" class="menu-link">
                        <i class="fas fa-box"></i>
                        <span>Product</span>
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </a>
                    <div class="submenu">
                        <a href="listproduct" class="menu-link active">
                            <i class="fas fa-list"></i>
                            <span>List Product</span>
                        </a>
                        <a href="{{ route('product.create') }}" class="menu-link">
                            <i class="fas fa-plus"></i>
                            <span>Tambah Produk</span>
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
                        <a href="transaksi" class="menu-link">
                            <i class="fas fa-credit-card"></i>
                            <span>Proses Transaksi</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="logout-section">
                <!-- Hidden form for logout -->
                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                
                <!-- Logout button that triggers the form -->
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
                    <h1>List Produk</h1>
                    <p>Manage List Produk Sepatu Second Branded</p>
                </div>
                <a href="{{ route('index.customer') }}" class="home-btn">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>

            <div class="table-container">
                <div class="table-header">
                    <h2 class="table-title">Daftar Produk Sepatu</h2>
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search products...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="data-table" id="productTable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Category</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody id="productTableBody">
                            @foreach($products as $product)
                            <tr>
                                <td><strong>{{ $product->name }}</strong></td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->size }}</td>
                                <td class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination-container">
                    <div class="pagination-info">
                        Showing <span id="startItem">1</span> to <span id="endItem">10</span> of <span id="totalItems">{{ count($products) }}</span> entries
                    </div>
                    <div class="pagination" id="pagination">
                        <!-- Pagination buttons will be generated by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Hide loading screen after page loads
        window.addEventListener('load', function() {
            setTimeout(function() {
                const loader = document.getElementById('global-loader');
                loader.style.opacity = '0';
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }, 800); // Show loader for 800ms
        });

        // Pagination functionality
        const itemsPerPage = 10;
        let currentPage = 1;
        let filteredItems = [];
        let allItems = [];

        // Initialize data
        document.addEventListener('DOMContentLoaded', function() {
            const tableRows = Array.from(document.querySelectorAll('#productTable tbody tr'));
            allItems = tableRows;
            filteredItems = [...allItems];
            
            // Initialize active submenu
            const activeLink = document.querySelector('.menu-link.active');
            if (activeLink && activeLink.closest('.submenu')) {
                const submenu = activeLink.closest('.submenu');
                const parentLink = submenu.previousElementSibling;
                submenu.style.display = 'block';
                if (parentLink.querySelector('.fa-chevron-down')) {
                    parentLink.querySelector('.fa-chevron-down').style.transform = 'rotate(180deg)';
                }
            }
            
            updatePagination();
        });

        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            
            filteredItems = allItems.filter(row => {
                const rowText = row.textContent.toLowerCase();
                return rowText.includes(searchValue);
            });
            
            currentPage = 1;
            updatePagination();
        });

        function updatePagination() {
            const totalItems = filteredItems.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            
            // Update pagination info
            const startItem = (currentPage - 1) * itemsPerPage + 1;
            const endItem = Math.min(currentPage * itemsPerPage, totalItems);
            
            document.getElementById('startItem').textContent = totalItems > 0 ? startItem : 0;
            document.getElementById('endItem').textContent = endItem;
            document.getElementById('totalItems').textContent = totalItems;
            
            // Show/hide rows
            allItems.forEach(row => row.style.display = 'none');
            
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            
            filteredItems.slice(startIndex, endIndex).forEach(row => {
                row.style.display = '';
            });
            
            // Generate pagination buttons
            generatePaginationButtons(totalPages);
        }

        function generatePaginationButtons(totalPages) {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';
            
            // Previous button
            const prevBtn = document.createElement('button');
            prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
            prevBtn.disabled = currentPage === 1;
            prevBtn.onclick = () => changePage(currentPage - 1);
            paginationContainer.appendChild(prevBtn);
            
            // Page numbers
            const maxVisible = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisible / 2));
            let endPage = Math.min(totalPages, startPage + maxVisible - 1);
            
            if (endPage - startPage + 1 < maxVisible) {
                startPage = Math.max(1, endPage - maxVisible + 1);
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.textContent = i;
                pageBtn.className = i === currentPage ? 'active' : '';
                pageBtn.onclick = () => changePage(i);
                paginationContainer.appendChild(pageBtn);
            }
            
            // Next button
            const nextBtn = document.createElement('button');
            nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
            nextBtn.disabled = currentPage === totalPages || totalPages === 0;
            nextBtn.onclick = () => changePage(currentPage + 1);
            paginationContainer.appendChild(nextBtn);
        }

        function changePage(page) {
            const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
            if (page >= 1 && page <= totalPages) {
                currentPage = page;
                updatePagination();
            }
        }

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

        // Logout confirmation function
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                document.getElementById('logoutForm').submit();
            }
        }

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

        // Apply animations to visible rows
        function applyRowAnimations() {
            document.querySelectorAll('.data-table tbody tr').forEach((row, index) => {
                if (row.style.display !== 'none') {
                    row.style.opacity = '0';
                    row.style.transform = 'translateY(20px)';
                    row.style.transition = `all 0.3s ease ${index * 0.1}s`;
                    observer.observe(row);
                }
            });
        }

        // Apply animations after pagination updates
        const originalUpdatePagination = updatePagination;
        updatePagination = function() {
            originalUpdatePagination();
            setTimeout(applyRowAnimations, 100);
        };
    </script>
</body>
</html>