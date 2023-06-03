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
            <h1>Cart List</h1>
            <div class="container">
                <!-------------------- This is the Backend code [Unmodified Code] ------------------>
                <?php
                    include ("dbconnection.php");
                        $total_price = 0;
                        session_start();
                        $c_id = $_SESSION['id'];
                        $query = "select * from `cart` where `c_id`=$c_id;";
                        $res = mysqli_query($con, $query);
                        if(mysqli_fetch_assoc($res)<=0){
                            echo "<h2>The Product not found!</h2>";
                        }
                        else{
                            $res2 = mysqli_query($con, $query);
                            $str = "<table><tr><th>Product Name</th><th>Qunatity</th><th>Price</th>";
                            while ($row = mysqli_fetch_assoc($res2)) {
                                $s_id = $row['s_id'];
                                $query3= "select * from `stock` where s_id=$s_id";
                                $res3 = mysqli_query($con, $query3);
                                $row2 = mysqli_fetch_assoc($res3);
                                $str .= "<tr><td>{$row2['s_name']}</td><td>{$row['quantity']}</td><td>{$row2['amount']}</td></tr>";
                                $total_price += $row2['amount'];
                            
                            }
                            $str.="</table>";
                            echo $str;
                        }
                        echo "<h3>Total Price = $total_price</h3>";

                        echo "<a class='btn btn-view' href='../frontend/place_order.php?totalPrice=".$total_price."' id='btn-view-table' href=''title='View More info' name='add-item'>Add</a></td>";
                ?>
            </div>
        </section>
        <hr>
    </main>

    <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>