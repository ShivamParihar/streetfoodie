<?php

session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}
$_SESSION['all["dish_name"]'] = $_GET['dish_name'];
$_SESSION['all["dish_id"]'] = $_GET['dish_id'];
$_SESSION['all["price"]'] = $_GET['price'];
$_SESSION['all["res_id"]'] = $_GET['res_id'];
$_SESSION['all["res_name"]'] = $_GET['res_name'];

header("Location:quantity.php");