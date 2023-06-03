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
                <li><a href="maintenance.php">About</a></li>
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
            <h1>Place Order</h1>
            <div class="container">
                <form action="../backend/final_order.php" method="post" class="form-control form-control-registration">
                    <div class="col">
                        <label for="" class="form-label">Total Price</label>
                        <input min="0" type="NUMBER" name="total_price" value="<?php echo $_GET['totalPrice'] ?>" class="form-inputbar" readonly/>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Delivery Address</label>
                        <input type="text" name="customer_address" value="" class="form-inputbar" required/>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Payment Mode</label>
                        <input type="text" name="payment_mode" value="" list="payment_mode" class="form-inputbar" placeholder="Enter or select payment mode" required/>
                        <datalist id="payment_mode">
                            <option value="Credit Card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                            <option value="FreshBasKet Wallet">FreshBasKet Wallet</option>
                            <option value="UPI">UPI</option>
                        </datalist>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Delivery Type</label>
                        <input type="text" name="delivery_type" value="" class="form-inputbar" required/>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                        <button type="submit" name="add_customer" class="form-inputbar btn btn-view" id="btn-form-submit">Submit</button>
                    </div>
                    <div class="col">
                        <button type="reset" class="form-inputbar btn btn-delete" id="btn-form-reset" onclick='return checkDelete()'>Reset</button>
                    </div>
                </from>
            </div>
        </section>
        <hr> 
    </main>

    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>