<?php

session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}
$user_id = $_SESSION['all["user_id"]'];
$address = $_POST['address'];
$_SESSION['all["address"]']=$address;

include ('connect.php');
$sql='update login_info set address="'.$address.'" where user_id='.$user_id.'';

mysqli_query($con, $sql);

header("Location:cart.php");