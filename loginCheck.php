<?php

session_start();
$phone = '';
$password = '';

function text_input($data) {
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = text_input($_POST["phone"]);
    $password = text_input($_POST["password"]);
}
if ((!ctype_digit($phone)) || (!(strlen($phone) == 10))) {
    $_SESSION['error'] = "*Enter a valid mobile number";
    header("Location:index.php");
} else {
    include("connect.php");

    $sql = "select * from login_info where phone='$phone' and password='$password'";
    $result = mysqli_query($con, $sql);   

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['all["phone"]'] = $phone;
        $_SESSION['all["user_name"]'] = $row['user_name'];
        $_SESSION['all["user_id"]'] = $row['user_id'];
        $_SESSION['all["address"]'] = $row['address'];
        $_SESSION['all["res_name"]'] = "aapna sweets";        
        $_SESSION['all["res_id"]'] =1;
        $_SESSION['all["dish_name"]'] ="";
        $_SESSION['all["price"]'] =0;
        $_SESSION['all["total_price"]'] =0;
        $_SESSION['all["time"]'] =0;
        $_SESSION['all["order_id"]'] =0;
        $_SESSION['all["order_no"]'] =$row['order_no'];
        $_SESSION['all["coins"]'] =$row['coins'];
        $_SESSION['all["delivery_fee"]'] =$row['delivery_fee'];
        $_SESSION['all["dish_id"]'] =0;
        $_SESSION['all["to_pay"]'] =0;
        $_SESSION['all["cashback"]'] =0;
        $_SESSION['all["percent"]'] =0;
        $_SESSION['all["temp_coins"]'] =0;
        $_SESSION['all["key"]']= 0;
        $_SESSION['all["refer_code"]']=$row['refer_code'];
        $_SESSION['all["refer_id"]']=$row['refer_id'];
       
        header("Location:home.php");
    } else {
        $_SESSION['error'] = "*Phone number or password in invalid";
        header("Location:index.php");
    }
    $con->close();
}
?>
