<?php

session_start();

$text = $_GET['q'];

include("connect.php");

//$sql = "select * from restaurant where res_name like '$text%'";
//$result = mysqli_query($con, $sql);

$sendlist = '';

//
//while ($row = mysqli_fetch_array($result)) {
//    $res_name = $row['res_name'];
//    $res_id = $row['res_id'];
//    $sendlist .= '<div class="line-content"><div class="icon_image" style="background-image: url(\'' . $res_name . '.png\');"></div></div><div class="body_image"><a href="restaurant1.php?res_name=' .
//            $res_name . '&res_id=' . $res_id . '">' . $res_name . '</a></div></div>';
//}

$sql = "select * from dish where dish_name like '%$text%'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) < 0) {
    
} else {
    while ($row = mysqli_fetch_array($result)) {
        $dish_name = $row['dish_name'];
        $dish_id= $row['dish_id'];
        $price = $row['price'];
        $res_id = $row['res_id'];

        $sql1 = "select * from restaurant where res_id='" . $res_id . "'";
        $result1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_array($result1);
        $res_name = $row1['res_name'];

        $sendlist .= '<div><div class="icon_image" style="background-image: url(\'images/final.jpg\');"></div><div class="body_image">' . $res_name . '<br/>' . $dish_name .
                '<br/>Rs.' . $price . '   <div class="add_button"><a href="dish1.php?dish_name=' .
                $dish_name . '&price=' . $price . '&res_id=' . $res_id . '&dish_id='.$dish_id.'&res_name='.$res_name.'">Add</a></div></div></div>';
    }
}

echo $sendlist;
?>

