<?php

session_start();

$phone='';
$user_name = '';
$password = '';
$cpassword = '';
$address = '';
$user_id = '';
$refer_code = '';

function text_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = text_input($_POST["phone"]);
    $user_name = text_input($_POST["user_name"]);
    $address = text_input($_POST["address"]);
    $password = text_input($_POST["password"]);
    $cpassword = text_input($_POST["cpassword"]);
    $refer_code = text_input($_POST["refer_code"]);
}

if ((ctype_digit($phone)) && (strlen($phone) == 10)) {
    if ($password != $cpassword) {
        $_SESSION['error1'] = "*Password do not Match";
        header("Location:register.php");
    } else {
        include("connect.php");

        $sql = "select * from login_info where phone='$phone'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $_SESSION['error1'] = "*Mobile number is already registered";
            header("Location:register.php");
        } else {
            
            // 20 refer code
            $sql2="select * from login_info where refer_code='$refer_code'";
            $result2 = mysqli_query($con,$sql2);
            if($row = mysqli_fetch_array($result2)){
                $refer_id=$row['user_id'];
            }else{
                $refer_id=0;
            }
            
            //to get last user_id and refer_code
            $sql = "select* from login_info";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $user_id = $row['user_id'];
                $refer_code = $row['refer_code'];
            }
            $user_id++;
            
            // increment 20 refer code
            
            $i=0;
            while(true){
                    $length=strlen($refer_code);
                    $s0=substr($refer_code,0,$i);
                    $s1=substr($refer_code,$i,1);
                    $s2=substr($refer_code,$i+1);
                    
                    $s1i=ord($s1);
                    if($s1i<122){
                           $s1i++;
                           $s1=chr($s1i);
                           $refer_code=$s0.$s1.$s2;
                           break;
                    }
                    else{
                        $i++;
                    }
            }
            
            $sql1 = "insert into login_info values('$user_id','$user_name','$phone','$address','$password',30,'$refer_code','$refer_id',0,0)";
            mysqli_query($con, $sql1);
            header('Location:registerCheck1.php');
        }
        $con->close();
    }
} else {
    $_SESSION['error1'] = "*Invalid Mobile Number";
    header("Location:register.php");
}
?>
