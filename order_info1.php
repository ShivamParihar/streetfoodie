<?php
session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}

$_SESSION['all["order_id"]'] = $_GET['order_id'];
$_SESSION['all["total_price"]']= $_GET['total_price'];
$_SESSION['all["time"]'] = $_GET['time'];
$_SESSION['all["to_pay"]'] = $_GET['to_pay'];


header("Location:order_info.php");