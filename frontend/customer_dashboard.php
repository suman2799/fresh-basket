<!------------------------ Declarations -----------------------
    Input Names :
        1. "product-name"

    Button Names :
        1. "find-item" 
--------------------------------------------------------------->

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
    <section class="breadcrumbs">
            <div class="breadcrumbs-title">
                <!-- This part is added by Debjyoti use for session details [Modification Done] -->
                <?php
                    include ("../backend/dbconnection.php");
                    session_start();
                    $id = $_SESSION['id'];
                    $ar = $con->query("SELECT `c_name` FROM `customer` WHERE `c_id` = '$id' LIMIT 1");
                    
                    $userData = $ar->fetch_assoc(); 

                    if($userData == 0){
                        echo "<script>alert('Login Failed. Reenter Log In Credentials.');window.location.href='../index.php'</script>"; 

                    }
                    // You can add any class or id [Modification Done]
                    echo "  <h2>Welcome ".$userData['c_name']." </h2>
                            <h2>User Id. - ".$id."</h2>";
                ?>               
            </div>
        </section>
        <hr class="breadcrumbs-hr">

        <section>
            <h1>Welcome</h1>
            <div class="container">
            <div class="tabs">
                    <!-- ---------------------- Search Product Tab --------------------- -->
                    <input type="radio" id="tab-view-client" name="tabs-clients" checked="checked">
                    <label class="tab-label label-view" for="tab-view-client">Search Product</label>
                    <div class="tab-content tab-content-view">
                        <h2>Search Product</h2>
                        <!-------------------- Add form address here ----------------------->
                        <form action="../backend/customer_search_product.php" method="post" class="search-control">
                            <input type="text" class="search-bar" name="product-name" placeholder="Enter Product Name" required />
                            <button class="btn btn-find" name="find-item" type="submit">Find Product</button>
                        </form>
                    </div>

                    <!------------------------ Place Order Tab ------------------------>
                    <input type="radio" id="tab-add-client" name="tabs-clients">
                    <label class="tab-label label-add" for="tab-add-client">Place Order</label>
                    <div class="tab-content tab-content-add">
                        <h2>Place New Order</h2>
                        <div class="col">
                                <a href="../backend/show_cart.php"><button type="submit" name="place_order" class="form-inputbar btn btn-view" id="btn-form-submit">Place</button></a>
                        </div>
                    </div> 

                    <!------------------------ Previous Order Tab ------------------------->
                    <input type="radio" id="tab-delete-client" name="tabs-clients">
                    <label class="tab-label label-delete" for="tab-delete-client">Previous Order</label>
                    <div class="tab-content tab-content-delete">
                        <h2>View Previous Order</h2>
                        <div class="col">
                                <a href="../backend/view_order.php"><button type="submit" name="view_order" class="form-inputbar btn btn-view" id="btn-form-submit">View</button></a>
                        </div>
                    </div> 

            </div>
        </section>
        <hr>
    </main>

    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>