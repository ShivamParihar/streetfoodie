<?php

session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}

$dish_id = $_GET['dish_id'];
$order_id = $_GET['order_id'];
include("connect.php");

$sql = "delete from order_info where dish_id='".$dish_id."' and order_id='".$order_id."'";
mysqli_query($con, $sql);
header("Location:cart.php");
