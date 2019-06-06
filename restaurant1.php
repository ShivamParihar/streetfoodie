<?php

session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}
$_SESSION['all["res_name"]'] = $_GET['res_name'];
$_SESSION['all["res_id"]'] = $_GET['res_id'];

header("Location:restaurant.php");