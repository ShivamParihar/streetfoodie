<?php

session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}
$quantity = 1;
$quantity = $_POST["quantity"];

if (!(ctype_digit($quantity))) {
    header("Location:quantity.php");
} else {

    $res_id = $_SESSION['all["res_id"]'];
    $dish_name = $_SESSION['all["dish_name"]'];
    $dish_id = $_SESSION['all["dish_id"]'];
    $price = ($_SESSION['all["price"]']) * ($quantity);
    $user_id = $_SESSION['all["user_id"]'];
    $order_id = $_SESSION['all["order_id"]'];
    include("connect.php");

    if ($order_id == 0) {

        $sql = "select * from order1";
        $result = mysqli_query($con, $sql);
        $order_id = 0;

        while ($row = mysqli_fetch_array($result)) {
            $order_id = $row['order_id'];
            $order_id++;
        }
        $_SESSION['all["order_id"]'] = $order_id;

        $sql = "insert into order1(order_id,user_id) values('$order_id','$user_id')";
        mysqli_query($con, $sql);
    }

    $sql1 = "insert into order_info values('$order_id','$res_id','$dish_id','$dish_name','$price','$quantity')";
    mysqli_query($con, $sql1);
    header("Location:cart.php");
}