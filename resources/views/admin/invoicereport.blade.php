<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Report - SSB Admin</title>
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

        .status-badge {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-completed {
            background: linear-gradient(145deg, #27ae60, #229954);
            color: white;
        }

        .status-pending {
            background: linear-gradient(145deg, #f39c12, #e67e22);
            color: white;
        }

        .status-cancelled {
            background: linear-gradient(145deg, #e74c3c, #c0392b);
            color: white;
        }

        .price {
            font-weight: 700;
            color: #27ae60;
            font-size: 16px;
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

        /* Hidden logout form */
        #logoutForm {
            display: none;
        }

        /* Custom Styles for Invoice Report Page */
        #filterForm {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
            flex-wrap: wrap;
        }

        #filterForm select,
        #filterForm input {
            padding: 10px 15px;
            border: 2px solid #e1e8ed;
            border-radius: 25px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        #filterForm select:focus,
        #filterForm input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        #filterForm button {
            padding: 10px 20px;
            border-radius: 25px;
            border: none;
            background: linear-gradient(145deg, #27ae60, #229954);
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #filterForm button:hover {
            background: linear-gradient(145deg, #229954, #1e7a33);
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
        }

        #filterForm button:disabled {
            background: #bdc3c7;
            cursor: not-allowed;
        }

        .export-buttons {
            margin-bottom: 15px;
            display: flex;
            gap: 10px;
        }

        .export-buttons button {
            padding: 10px 20px;
            border-radius: 25px;
            border: none;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #exportPdfBtn {
            background: #e74c3c;
        }

        #exportPdfBtn:hover {
            background: #c0392b;
        }

        #exportExcelBtn {
            background: #27ae60;
        }

        #exportExcelBtn:hover {
            background: #1e7a33;
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
                        <i class="fas fa-file-alt"></i>
                        <span>Report</span>
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </a>
                    <div class="submenu">
                        <a href="invoicereport" class="menu-link active">
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
                    <h1>Invoice Report</h1>
                    <p>Manage your Invoice Reports and Transaction Data</p>
                </div>
                <a href="{{ route('index.customer') }}" class="home-btn">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>

            <div class="table-container">
                <div class="table-header">
                    <h2 class="table-title">Transaction Reports</h2>
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search transactions...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <!-- FILTER FORM -->
                <form id="filterForm" style="display: flex; gap: 15px; margin-bottom: 20px; align-items: center; flex-wrap: wrap;">
                    <input type="date" id="dateFilter" placeholder="Tanggal">
                    <select id="monthFilter">
                        <option value="">All Months</option>
                        @for ($m = 1; $m <= 12; $m++)
                            <option value="{{ sprintf('%02d', $m) }}">{{ DateTime::createFromFormat('!m', $m)->format('F') }}</option>
                        @endfor
                    </select>
                    <button type="button" id="resetFilter" style="padding: 8px 18px; border-radius: 20px; border: none; background: #e1e8ed; color: #2c3e50; font-weight: 600;">Reset</button>
                </form>

                <!-- EXPORT BUTTONS -->
                <div class="export-buttons" style="margin-bottom: 15px; display: flex; gap: 10px;">
                    <button type="button" id="exportPdfBtn" style="padding: 10px 20px; border-radius: 25px; border: none; background: #e74c3c; color: white; font-weight: 600; cursor: pointer;">
                        <i class="fas fa-file-pdf"></i> Export PDF
                    </button>
                    <button type="button" id="exportExcelBtn" style="padding: 10px 20px; border-radius: 25px; border: none; background: #27ae60; color: white; font-weight: 600; cursor: pointer;">
                        <i class="fas fa-file-excel"></i> Export Excel
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="data-table" id="invoiceTable">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Nama Customer</th>
                                <th>Nama Pegawai</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekap_penjualan as $rekap)
                            <tr>
                                <td><strong>{{ $rekap->transaction_id }}</strong></td>
                                <td>{{ $rekap->customer }}</td>
                                <td>{{ $rekap->pegawai }}</td>
                                <td class="price">Rp {{ number_format($rekap->total_price, 0, ',', '.') }}</td>
                                <td>
                                    <span class="status-badge 
                                        @if($rekap->status == 'completed') status-completed
                                        @elseif($rekap->status == 'pending') status-pending
                                        @else status-cancelled
                                        @endif">
                                        {{ ucfirst($rekap->status) }}
                                    </span>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($rekap->created_at)->format('d M Y, H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jsPDF & html2canvas for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <!-- SheetJS for Excel export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script>
        // Search & Filter functionality
        function filterAndSearchTable() {
            const searchValue = document.getElementById('searchInput').value.trim().toLowerCase();
            const date = document.getElementById('dateFilter').value;
            const month = document.getElementById('monthFilter').value;
            const rows = document.querySelectorAll('#invoiceTable tbody tr');

            rows.forEach(row => {
                let show = true;

                // Ambil kolom: ID Transaksi dan Nama Customer saja
                const idTransaksi = row.querySelector('td:nth-child(1)').innerText.trim().toLowerCase();
                const namaCustomer = row.querySelector('td:nth-child(2)').innerText.toLowerCase();

                if (searchValue) {
                    // Jika searchValue angka, hanya tampilkan baris dengan ID Transaksi yang sama persis
                    if (/^\d+$/.test(searchValue)) {
                        if (idTransaksi !== searchValue) {
                            show = false;
                        }
                    } else {
                        // Jika searchValue bukan angka, cari di nama customer saja
                        if (!namaCustomer.includes(searchValue)) {
                            show = false;
                        }
                    }
                }

                // Date, Month
                const dateText = row.querySelector('td:last-child').innerText.trim();
                const dateObj = new Date(dateText.replace(/(\d{2}) (\w{3}) (\d{4}), (\d{2}):(\d{2})/, function(_, d, m, y, h, min) {
                    const months = {Jan:0,Feb:1,Mar:2,Apr:3,May:4,Jun:5,Jul:6,Aug:7,Sep:8,Oct:9,Nov:10,Dec:11};
                    return `${y}-${('0'+(months[m]+1)).slice(-2)}-${d}T${h}:${min}:00`;
                }));

                if (date) {
                    const filterDate = new Date(date);
                    if (dateObj.toDateString() !== filterDate.toDateString()) show = false;
                }
                if (month) {
                    if ((dateObj.getMonth()+1).toString().padStart(2,'0') !== month) show = false;
                }

                row.style.display = show ? '' : 'none';
            });
        }

        document.getElementById('searchInput').addEventListener('keyup', filterAndSearchTable);
        ['dateFilter','monthFilter'].forEach(id => {
            document.getElementById(id).addEventListener('change', filterAndSearchTable);
        });
        document.getElementById('resetFilter').addEventListener('click', function() {
            document.getElementById('dateFilter').value = '';
            document.getElementById('monthFilter').value = '';
            filterAndSearchTable();
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

        // Fixed logout confirmation function
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                // Submit the hidden logout form with POST method
                document.getElementById('logoutForm').submit();
            }
        }

        // Add loading animation to buttons (excluding logout button)
        document.querySelectorAll('button:not(.logout-btn), .btn').forEach(btn => {
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

        // Export buttons functionality
        // Export to PDF
        document.getElementById('exportPdfBtn').addEventListener('click', function() {
            const table = document.getElementById('invoiceTable');
            html2canvas(table, {scale:2}).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new window.jspdf.jsPDF('l', 'pt', 'a4');
                const pageWidth = pdf.internal.pageSize.getWidth();
                const pageHeight = pdf.internal.pageSize.getHeight();
                const imgWidth = pageWidth - 40;
                const imgHeight = canvas.height * imgWidth / canvas.width;
                pdf.addImage(imgData, 'PNG', 20, 20, imgWidth, imgHeight);
                pdf.save('invoice_report.pdf');
            });
        });

        document.getElementById('exportExcelBtn').addEventListener('click', function() {
            const table = document.getElementById('invoiceTable').cloneNode(true);

            // Format tanggal di kolom terakhir (Created At) ke format Date JS
            Array.from(table.querySelectorAll('tbody tr')).forEach(row => {
                const td = row.querySelector('td:last-child');
                if (td) {
                    const text = td.innerText.trim();
                    const match = text.match(/(\d{2}) (\w{3}) (\d{4}), (\d{2}):(\d{2})/);
                    if (match) {
                        const [ , d, m, y, h, min ] = match;
                        const months = {Jan:'01',Feb:'02',Mar:'03',Apr:'04',May:'05',Jun:'06',Jul:'07',Aug:'08',Sep:'09',Oct:'10',Nov:'11',Dec:'12'};
                        // Format: YYYY-MM-DDTHH:mm:ss (ISO)
                        const isoDate = `${y}-${months[m]}-${d}T${h}:${min}:00`;
                        td.innerText = isoDate;
                    }
                }
            });

            // Export pakai SheetJS
            const wb = XLSX.utils.table_to_book(table, {sheet:"Invoice Report"});
            // Set kolom Created At (kolom E) jadi tipe date
            const ws = wb.Sheets["Invoice Report"];
            const range = XLSX.utils.decode_range(ws['!ref']);
            for(let R = range.s.r+1; R <= range.e.r; ++R) { // mulai dari baris 2 (data)
                const cellAddress = {c:4, r:R}; // kolom ke-5 (E)
                const cellRef = XLSX.utils.encode_cell(cellAddress);
                const cell = ws[cellRef];
                if(cell && typeof cell.v === 'string' && cell.v.match(/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/)) {
                    cell.t = 'd';
                    cell.v = new Date(cell.v);
                    cell.z = 'yyyy-mm-dd hh:mm:ss';
                }
            }
            XLSX.writeFile(wb, 'invoice_report.xlsx');
        });
    </script>
</body>
</html>