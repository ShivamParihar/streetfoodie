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
        <title>Your orders</title>
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
                $user_id = $_SESSION['all["user_id"]'];

                include("connect.php");
                $sql = 'select * from order1 where user_id="' . $user_id . '" and delivery_fee!=0 order by order_id DESC';
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);

                if ($num > 0) {
                    echo '<h1>Your orders</h1> 
                    <h5>*You can cancel the order within 5 minutes of ordering by calling on number 7987495536</h5>
                    <h5>*click on the order id to get full information</h5>
                <table>
                    <tr>
                        <th>Order id</th>
                        <th>Time</th>
                        <th>Total price</th>
                        <th>Delivered</th>
                    </tr>';
                    $sql = 'select * from order1 where user_id="' . $user_id . '" and delivery_fee!=0 order by order_id DESC';
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $time = $row['time'];
                        $time = date("h:i:sa    d-m-Y", $time);
                        $order_id = $row['order_id'];
                        $total_price = $row['total_price'];
                        $to_pay = $row['to_pay'];

                        echo '<tr>';
                        echo "<td><a href='order_info1.php?order_id=" . $order_id . "&total_price=" . $total_price . "&time=" . $time . "&to_pay=" . $to_pay . "'>" . $order_id . "</a></td>";
                        echo '<td>' . $time . '</td>';
                        echo '<td>' . $total_price . '</td>';
                        echo '<td>' . $row['delivery'] . '</td>';
                        echo '</tr>';
                    }
                    $_SESSION['all["key"]'] = 0;

                    echo '</table>';
                } else {
                    echo '<h1>No orders yet</h1>';
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
            &copy; 2018<?php //echo date("Y");    ?><br/>
        </div>
    </body>
</html>
