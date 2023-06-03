<!DOCTYPE html>
<html lang="en">
<head>
    <title>FBasket | Customer</title>
	
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
                <li><a href="../frontend/customer_dashboard.php">Dashboard</a></li>
                <li><a href="../frontend/maintenance.php">Notices</a></li>
                <li><a href="../frontend/maintenance.php">Contact Us</a></li>
            </ul>
        </nav>
        <!-- ------------------ Logout drop down added here ------------------>
        <div class="login">
            <ul>
                <li><a href="#/"><img class="profile-icon" src="../imgs/Profile-icon.png" alt="NO img"></a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="logout.php" class="logout-btn"><img class="logout-icon" src="../imgs/Logout.png" alt="NO img"> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <label for="nav-toggle" class="nav-toggle-lable"> 
            <span></span>
        </label>
    </header>

    <main>
        <section class="container-color-tables">
            <h1>Product List</h1>
            <div class="container">
                <!-------------------- This is the Backend code [Unmodified Code] ------------------>
                <?php
                    include ("dbconnection.php");

                    // if (isset($_POST['find-item'])) {
                        // $p_name =  $_POST['product-name'];

                        session_start();
                        $c_id = $_SESSION['id'];

                        $query = "select * from order_details where c_id = $c_id";
                        $res = mysqli_query($con, $query);
                        if(mysqli_fetch_assoc($res)<=0){
                            echo "<h2>The Product not found!</h2>";
                        }
                        else{
                            $res2 = mysqli_query($con, $query);
                            $str = "<table><tr><th>Order Id</th><th>Price(Rs.)</th><th>Date</th><th>Address</th></tr>";
                            while ($row = mysqli_fetch_assoc($res2)) {
                                $str .= "<tr><td>{$row['o_id']}</td><td>{$row['price']}</td><td>{$row['date']}</td><td>{$row['address']}</td>";          
                            }
                            $str.="</table>";
                            echo $str;
                        }

                        
                    // }
                ?>
            </div>
        </section>
        <hr>
        <section>
            <h1>Price Filter</h1>
            <div class="container">
                <!----------------------------- Add form address here ------------------------------>
                <form action="price_wise_search.php" method="post" class="form-control form-control-registration">
                    <div class="col">
                        <label for="" class="form-label">Price Upto</label>
                        <input type="text" name="price_upto" value="" class="form-inputbar" required/>
                    </div>
                    <div class="col">
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
                </form>
            </div>
        </section>
    </main>

    <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>