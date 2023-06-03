<!DOCTYPE html>
<html lang="en">

<head>
    <title>FBasket | Place Order</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../imgs/favicon.png">
</head>

<body>
    <header>
        <hi class="logo">FreshBasKet</hi>
        <input type="checkbox" id="nav-toggle" class="nav-toggle" />
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="customer_dashboard.php">Dashboard</a></li>
                <li><a href="maintenance.php">Notices</a></li>
                <li><a href="maintenance.php">Contact Us</a></li>
            </ul>
        </nav>

        <!-- ------------------ Logout drop down added here ------------------>
        <div class="login">
                <ul>
                    <li><a href="#/"><img class="profile-icon" src="../imgs/Profile-icon.png" alt="NO img"></a>
                        <div class="dropdown">
                            <ul>
                                <li><a href="../backend/logout.php" class="logout-btn"><img class="logout-icon" src="../imgs/Logout.png" alt="NO img"> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <label for="nav-toggle" class="nav-toggle-lable"> 
                <span></span>
            </label>
        </header>
            <label for="nav-toggle" class="nav-toggle-lable">
                <span></span>
            </label>
        </header>

    <main>
        <section>
        <h1>Order Status</h1>
            <div class="container">
                <h2>Order has been Successfully Placed!</h2>
            </div>
        </section>
        <hr> 
    </main>

    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>