<?php 
    include ("dbconnection.php");
    $s_id = $_GET['sID'];
    echo $s_id; 
    session_start();
    $c_id = $_SESSION['id'];
    echo $c_id; 
    $query = "insert into cart (c_id,s_id,quantity) values ($c_id,$s_id,1)";
    $res = mysqli_query($con,$query);
    $query2 ="update stock SET quantity = quantity - 1 WHERE s_id=$s_id";
    $res2 = mysqli_query($con,$query2);

    header('location: ../frontend/customer_dashboard.php');
    
?>