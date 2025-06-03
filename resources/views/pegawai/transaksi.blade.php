<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SSB Pegawai - Transaction Management">
    <meta name="keywords" content="admin, transaction, bootstrap, business, corporate, creative, invoice, html5, responsive">
    <meta name="author" content="SSB Pegawai Admin">
    <meta name="robots" content="noindex, nofollow">
    <title>Transaksi Pembayaran - SSB Pegawai</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
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

        .text-bolds {
            font-weight: 700;
            color: #2c3e50;
        }

        /* Status Badges */
        .badges {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .bg-lightred {
            background: linear-gradient(145deg, #e74c3c, #c0392b);
            color: white;
        }

        .bg-lightgreen {
            background: linear-gradient(145deg, #27ae60, #229954);
            color: white;
        }

        .bg-lightblue {
            background: linear-gradient(145deg, #3498db, #2980b9);
            color: white;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .accept-btn {
            background: linear-gradient(145deg, #27ae60, #229954);
            color: white;
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
        }

        .accept-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(39, 174, 96, 0.4);
        }

        .reject-btn {
            background: linear-gradient(145deg, #e74c3c, #c0392b);
            color: white;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
        }

        .reject-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
        }

        .action-btn i {
            font-size: 16px;
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            z-index: 1000;
            transform: translateX(400px);
            transition: transform 0.3s ease;
        }

        .notification.show {
            transform: translateX(0);
        }

        .notification.success {
            background: linear-gradient(145deg, #27ae60, #229954);
        }

        .notification.error {
            background: linear-gradient(145deg, #e74c3c, #c0392b);
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

            .search-box {
                width: 100%;
            }

            .table-container {
                overflow-x: auto;
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
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div id="global-loader">
        <div>
            <div class="whirly-loader"></div>
            <div class="loading-text">Loading Transaction Data...</div>
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
                        <a href="transaksi" class="menu-link active">
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
                    <h1>Transaksi Pembayaran</h1>
                    <p>Manage Transaction and Payment Processing</p>
                </div>
                <a href="{{ route('index.customer') }}" class="home-btn">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>

            <div class="table-container">
                <div class="table-header">
                    <h2 class="table-title">Transaction Management</h2>
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search transactions...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="data-table datanew" id="transactionTable">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>ID Produk</th>
                                <th>Total Harga</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td class="text-bolds">{{ $transaction->customer_id }}</td>
                                <td>{{ $transaction->product->product_id }}</td>
<td>{{ $transaction->total_price }}</td>
<td>
    @if($transaction->payment_proof)
        <a href="{{ asset('storage/' . $transaction->payment_proof) }}" target="_blank">
            <img src="{{ asset('storage/' . $transaction->payment_proof) }}" alt="Bukti Pembayaran" style="max-width: 80px; max-height: 80px;">
        </a>
    @else
        <span class="text-muted">Belum ada</span>
    @endif  
</td>
                                <td>
                                    @if($transaction->status == 'pending')
                                        <span class="badges bg-lightred">Pending</span>
                                    @elseif($transaction->status == 'rejected')
                                        <span class="badges bg-lightgreen">Rejected</span>
                                    @elseif($transaction->status == 'approved')
                                        <span class="badges bg-lightblue">Approved</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <!-- Accept Button -->
                                        <button class="action-btn accept-btn" data-action="accept" data-id="{{ $transaction->transaction_id }}" title="Accept Transaction">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <!-- Reject Button -->
                                        <button class="action-btn reject-btn" data-action="reject" data-id="{{ $transaction->transaction_id }}" title="Reject Transaction">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <div id="notification" class="notification"></div>

    <script>
        // Loading Screen
        window.onload = function() {
            setTimeout(() => {
                const loader = document.getElementById("global-loader");
                loader.style.opacity = "0";
                setTimeout(() => {
                    loader.style.display = "none";
                }, 500);
            }, 1000); // Show loading for 1 second
        };

        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#transactionTable tbody tr');
            
            tableRows.forEach(row => {
                const rowText = row.textContent.toLowerCase();
                if (rowText.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Logout confirmation - Fixed for POST method
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

        // Show notification
        function showNotification(message, type) {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type}`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Transaction Action Handlers
        document.querySelectorAll("button[data-action='accept']").forEach(button => {
            button.addEventListener("click", function() {
                const transactionId = this.getAttribute("data-id");
                updateTransactionStatus(transactionId, 'accept');
            });
        });

        document.querySelectorAll("button[data-action='reject']").forEach(button => {
            button.addEventListener("click", function() {
                const transactionId = this.getAttribute("data-id");
                updateTransactionStatus(transactionId, 'reject');
            });
        });

        function updateTransactionStatus(transactionId, action) {
            const button = document.querySelector(`button[data-id='${transactionId}'][data-action='${action}']`);
            const originalContent = button.innerHTML;

            // Show loading state
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            button.disabled = true;
        
            fetch('/update-status/' + transactionId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ action: action })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Update status in the table
                    const row = button.closest('tr');
                    const statusCell = row.querySelector('td:nth-child(5)');
                    const newStatus = data.new_status;
                
                    if (newStatus === 'approved') {
                        statusCell.innerHTML = '<span class="badges bg-lightblue">Approved</span>';
                        showNotification('Transaction approved successfully!', 'success');
                    } else if (newStatus === 'rejected') {
                        statusCell.innerHTML = '<span class="badges bg-lightred">Rejected</span>';
                        showNotification('Transaction rejected successfully!', 'success');
                    }
                } else {
                    showNotification('Error updating transaction status!', 'error');
                }
            })
            .catch(error => {
                console.error('Error updating status:', error);
                showNotification('Error updating transaction status!', 'error');
            })
            .finally(() => {
                // Restore button state
                button.innerHTML = originalContent;
                button.disabled = false;
            });
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

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.data-table tbody tr').forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateY(20px)';
                row.style.transition = `all 0.3s ease ${index * 0.1}s`;
                observer.observe(row);
            });
        });
    </script>
</body>
</html>