<?php 
    include ("dbconnection.php");
    echo "hi";
    if (isset($_POST['add_customer'])) {
        $total_price = $_POST['total_price'];

        if($total_price<=0){
            echo "<script>alert('Order faild. No item in the cart.');window.location.href='../frontend/customer_dashboard.php'</script>"; 
        }
        else{
        $customer_address = $_POST['customer_address'];
        echo "hi";
        session_start();
        $c_id = $_SESSION['id'];
        $query = "insert into order_details (c_id,price,date,address) values ($c_id,$total_price,SYSDATE(),'$customer_address')";
        // echo $date;
        $res = mysqli_query($con,$query);  
        $query2 = "delete FROM cart WHERE c_id = $c_id;";
        $res2 = mysqli_query($con,$query2);

        header('location: ../frontend/payment_successful.php');
        }
    }
?>