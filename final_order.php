<?php

session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}
include("connect.php");
$order_no = $_SESSION['all["order_no"]'];
$order_id = $_SESSION['all["order_id"]'];
$user_id = $_SESSION['all["user_id"]'];
$total_price = 0;
$sql = 'select * from order_info where order_id="' . $order_id . '"';
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $price = $row['price'];
    $total_price += $price;
}
$time = getdate();
$time = $time['0'];
$time+=19800;
$coins = $_SESSION['all["coins"]'];

//50% offer
if($order_no==0){
    $order_no++;
    $cashback=$total_price/2;
}else{
    $cashback=0;
}

if ($total_price >= 100) {    
    $temp_coins = $coins;
    $to_pay = 0;
    /*if ($total_price > $coins) {
        $to_pay = $total_price - $coins;
        $coins = 0;
    } else {
        $to_pay = 0;
        $coins -= $total_price;
    }*/
    
    if($coins>=20){
        $to_pay = $total_price - 20;
        $coins -= 20;
    }else if($coins<20){
        $to_pay = $total_price - $coins;
        $coins = 0;
    }
    
    $delivery_fee=$_SESSION['all["delivery_fee"]'];
    $to_pay+=$delivery_fee;
    
    $_SESSION['all["cashback"]'] = $cashback;
    $_SESSION['all["to_pay"]'] = $to_pay;
    $_SESSION['all["coins"]'] = $coins;
    $_SESSION['all["temp_coins"]'] = $temp_coins;
    $_SESSION['all["key"]'] = 1;
    
    
}else{
    $delivery_fee=$_SESSION['all["delivery_fee"]'];
    $to_pay=$total_price;
    $to_pay+=$delivery_fee;   
    
    $_SESSION['all["cashback"]'] = $cashback;
    $_SESSION['all["to_pay"]'] = $to_pay;
    $_SESSION['all["coins"]'] = $coins;
    $_SESSION['all["temp_coins"]'] = $coins;
    $_SESSION['all["key"]'] = 2;
    
}

//5% 9% 13%
/*if ($total_price >= 120) {    
    $temp_coins = $coins;
    $to_pay = 0;
    if ($total_price > $coins) {
        $to_pay = $total_price - $coins;
        $coins = 0;
    } else {
        $to_pay = 0;
        $coins -= $total_price;
    }
    $percent = $_SESSION['all["percent"]'];
    $cashback = ($to_pay * $percent) / 100;
    $cashback = round($cashback);

    $delivery_fee=$_SESSION['all["delivery_fee"]'];
    $to_pay+=$delivery_fee;
    
    $coins += $cashback;
    $_SESSION['all["cashback"]'] = $cashback;
    $_SESSION['all["to_pay"]'] = $to_pay;
    $_SESSION['all["coins"]'] = $coins;
    $_SESSION['all["temp_coins"]'] = $temp_coins;
    $_SESSION['all["key"]'] = 1;
    
    if ($order_no == 3) {
        $order_no = 0;
    } else {
        $order_no++;
    }
    
}else{
    $delivery_fee=$_SESSION['all["delivery_fee"]'];
    $to_pay=$total_price;
    $to_pay+=$delivery_fee;   
    
    $_SESSION['all["cashback"]'] = 0;
    $_SESSION['all["to_pay"]'] = $to_pay;
    $_SESSION['all["coins"]'] = $coins;
    $_SESSION['all["temp_coins"]'] = $coins;
    $_SESSION['all["key"]'] = 2;
    $cashback=0;
}*/

include ('connect.php');
    $sql = 'update order1 set time="' . $time . '", total_price=' .
            $total_price . ',delivery_fee='.$delivery_fee.' , delivery="no", to_pay=' .
            $to_pay . ', cashback=' . $cashback . ' where order_id=' . $order_id . '';
    mysqli_query($con, $sql);

$_SESSION['all["order_no"]'] = $order_no;
$coins+= $cashback;
$_SESSION['all["coins"]'] = $coins;
    $sql = 'update login_info set order_no=' . $order_no . ', coins=' . $coins . ' where user_id=' . $user_id . '';
    mysqli_query($con, $sql);
    
$time = date("h:i:sa    d-m-Y", $time);
$_SESSION['all["total_price"]'] = $total_price;
$_SESSION['all["time"]'] = $time;

$msg = 'check the order';
$sub = "street foodie order";
$msg = wordwrap($msg, 70);
$email = "xavieranand23@gmail.com";

$a = mail($email, $sub, $msg);

header("Location:order_info.php");
