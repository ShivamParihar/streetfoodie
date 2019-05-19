<?php
session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initital-scale=1">       
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Acme'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css"> 
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
        <title>Order info</title>
        <style>
            @media screen and (min-width: 479px){
                .hide{display:none!important}                 
            }
            @media screen and (max-width: 479px){
                .hide-low{display:none!important}                 
            }   
        </style>
    </head>
    <body>       
        <!--header-->
        <div class="header">
            <div>Street foodie<small>.tk</small></div>
        </div>

        <!--navigation bar-->
        <div class="topnav">
            <a href="home.php" class="hide-low">Home</a>
            <a href="cart.php" class="hide-low">Cart</a>
            <a href="your_orders.php" class="hide-low">Your orders</a>
            <a href="profile.php" class="hide-low">Profile</a>
            <a href="wallet.php" class="hide-low">Wallet</a>
            <a href="offer.php" class="hide-low">Offers</a>
            <a href="logout.php" style="float:right" class="hide-low">Logout</a>
            <a href="javascript:void(0)" style="text-align: right;background-color:#292929;color:#fff" class="hide" onclick="myFunction()">&#9776;</a>
        </div>

        <!--navigation bar-->
        <div id="demo4" class="topnav hide hide-low" >
            <a href="home.php">Home</a>
            <a href="cart.php">Cart</a>
            <a href="your_orders.php">Your orders</a>
            <a href="change_address.php">Change address</a>
            <a href="wallet.php">Wallet</a>
            <a href="offer.php">Offers</a>
            <a href="logout.php" style="float:right" >Logout</a>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("demo4");
                if (x.className.indexOf("hide-low") == -1) {
                    x.className += " hide-low";
                } else {
                    x.className = x.className.replace(" hide-low", " ");
                }
            }
        </script>
        
        <!--Content-->
        <div class="row">
            <div class="content">
                <?php
                $order_id = $_SESSION['all["order_id"]'];

                if ($order_id != 0) {
                    $total_price = $_SESSION['all["total_price"]'];
                    $time = $_SESSION['all["time"]'];
                    $cashback = $_SESSION['all["cashback"]'];
                    $to_pay = $_SESSION['all["to_pay"]'];
                    $temp_coins = $_SESSION['all["temp_coins"]'];
                    $key = $_SESSION['all["key"]'];
                    $delivery_fee = $_SESSION['all["delivery_fee"]'];
                    $coins = $_SESSION['all["coins"]'];

                    echo '<h2>Order id : ' . $_SESSION['all["order_id"]'] . '</h2>';
                    echo '<h2>Time : ' . $time . '</h2>';
                    echo '<h2>Total price : ' . $total_price . '</h2>';
                    echo '<h2>Delivery fee : ' . $delivery_fee . '</h2>';
                    if ($key == 1) {
                        echo '<h2>Coins in wallet : ' . $temp_coins . '</h2>';
                        echo '<h2>To pay : ' . ($total_price+$delivery_fee) . ' - '.($temp_coins-$coins).' (wallet) = Rs. ' . $to_pay . '</h2>';
                        echo '<h2>Cashback for this order : Rs. ' . $cashback . '</h2>';
                        echo '<p>*You can cancel the order within 5 minutes of ordering by calling on number 7987495536</p>';
                    } else if($key== 0){
                        echo '<h2>You paid  : ' . $to_pay . '</h2>';
                    }else if($key==2){
                        echo '<h2>To pay : ' . $to_pay .'</h2>';
                        echo '<h2>Cashback for this order : Rs. ' . $cashback . '</h2>';
                        echo '<p>*You can cancel the order within 5 minutes of ordering by calling on number 7987495536</p>';
                    }

                    echo '<table>';
                    echo '<tr>';
                    echo '<th>Restaurant</th>';
                    echo '<th>Dish</th>';
                    echo '<th>Quantity</th>';
                    echo '<th>Net price</th>';
                    echo '</tr>';

                    include("connect.php");
                    $sql = 'select * from order_info where order_id="' . $order_id . '"';
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $res_id = $row['res_id'];

                        $sql1 = "select * from restaurant where res_id=" . $res_id;
                        $result1 = mysqli_query($con, $sql1);
                        $row1 = mysqli_fetch_assoc($result1);
                        $res_name = $row1['res_name'];
                        echo '<tr>';
                        echo "<td>" . $res_name . "</td>";
                        echo "<td>" . $row['dish_name'] . "</td>";
                        echo '<td>' . $row['quantity'] . '</td>';
                        echo '<td>' . $row['price'] . '</td>';
                        echo '</tr>';
                    }

                    $_SESSION['all["order_id"]'] = 0;

                    echo '</table>';
                } else {
                    echo '<h2>First select the order id from your orders to get status</h2>';
                }
                ?>
            </div>
        </div>

        <!--Footer-->
        <div class="footer">
            <div class="back_to_top"><a href=#>BACK TO TOP</a></div>
            </br>
            <a href="home.php">Home</a></br>	
            <a href="cart.php">Cart</a><br/>
            <a href="your_orders.php">Your orders</a><br/>
            <a href="privacyPolicy.php">Privacy policy</a><br/>
            <a href="partner.php">Partner with us</a><br/>
            <a href="cancellation.php">Cancellation policy</a><br/>
            &copy; 2018<?php //echo date("Y");     ?><br/>
        </div>
    </body>
</html>
