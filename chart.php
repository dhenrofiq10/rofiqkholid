<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard 1</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="admin.css" />
    <script src="latihan.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
       
    

        
        .details {
            display: grid;
            grid-template-columns: 2fr 1fr; /* dua kolom */
            grid-gap: 30px;
            margin-top: 10px;
        }

        /* Recent Orders Styles */
        .recentOrders,
        .recentCustomer {
            background: var(--white);
            padding: 20px;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }

        .cardHeader {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .cardHeader h2 {
            font-weight: 600;
            color: var(--blue);
        }

        .cardHeader .btn {
            padding: 5px 10px;
            background: var(--blue);
            text-decoration: none;
            color: var(--white);
            border-radius: 6px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table thead td {
            font-weight: 600;
            background: #f9f9f9;
        }

        table tr {
            color: var(--black1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        table tr:last-child {
            border-bottom: none;
        }

        table tbody tr:hover {
            background: var(--blue);
            color: var(--white);
        }

        table tr td {
            padding: 10px;
        }

        table tr td:last-child {
            text-align: end;
        }

        .status {
            padding: 2px 4px;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status.delivered {
            background: #8de02c;
        }

        .status.pending {
            background: #e9b10a;
        }

        .status.return {
            background: #f00;
        }

        .status.inprogress {
            background: #1795ce;
        }

        /* Media Queries for Responsive Design */
        @media screen and (max-width: 768px) {
            .details {
                grid-template-columns: 1fr; /* satu kolom pada perangkat kecil */
            }
        }

        @media screen and (max-width: 576px) {
            .topbar {
                flex-direction: column; /* Kolom untuk tampilan lebih kecil */
            }

            .topbar .search input {
                width: 100%; /* Lebar penuh pada perangkat kecil */
            }

            .cardBox {
                flex-direction: column; /* Kolom untuk kartu */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">University</span>
                    </a>
                </li>
                <li>
                    <a href="welcome.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Customer</span>
                    </a>
                </li>
                <li>
                    <a href="form.php">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Form</span>
                    </a>
                </li>
                <li>
                    <a href="tabel_a.php">
                        <span class="icon"><ion-icon name="browsers-outline"></ion-icon></span>
                        <span class="title">Table</span>
                    </a>
                </li>
                <li>
                    <a href="chart.php">
                        <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
                        <span class="title">Chart</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here" />
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <img src="gamer.png" alt="User Avatar" />
                </div>
            </div>

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="number">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBox"><ion-icon name="eye-outline"></ion-icon></div>
                </div>

                <div class="card">
                    <div>
                        <div class="number">80</div>
                        <div class="cardName">Daily Sales</div>
                    </div>
                    <div class="iconBox"><ion-icon name="cart-outline"></ion-icon></div>
                </div>

                <div class="card">
                    <div>
                        <div class="number">1,200</div>
                        <div class="cardName">Total Views</div>
                    </div>
                    <div class="iconBox"><ion-icon name="eye-outline"></ion-icon></div>
                </div>

                <div class="card">
                    <div>
                        <div class="number">12,000</div>
                        <div class="cardName">Total Sales</div>
                    </div>
                    <div class="iconBox"><ion-icon name="cart-outline"></ion-icon></div>
                </div>
            </div>

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <canvas id="myChart"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script src="barchar.js"></script>
            </div>
                <div class="recentCustomer">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <canvas id="donat"></canvas>
            </div>
            <script src="donat.js"></script>
        </div>
        </div>
    </div>
</body>
</html>
