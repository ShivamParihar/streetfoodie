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
        <title>Cart</title>
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

                include("connect.php");
                $sql = 'select * from order_info where order_id="' . $order_id . '"';
                $result = mysqli_query($con, $sql);
                $total_price = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $price = $row['price'];
                    $total_price += $price;
                }
                $sql = 'select * from order_info where order_id="' . $order_id . '"';
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);

                if ($num > 0) {
                    echo '<h1>Your cart</h1>';

                    //offer line
                    /*$order_no = $_SESSION['all["order_no"]'];
                    if($order_no==3) {
                        if ($total_price < 120) {
                            echo '<h3 style="color:#ff3333;">Order for Rs ' . (120 - $total_price) . ' more to get 10% cashback</h3>';
                            $_SESSION['all["percent"]'] =0;
                        } else if ($total_price >= 120 && $total_price < 250) {
                            echo '<h3 style="color:#ff3333;">Congo!! you are getting 10% cashback</h3>';
                            echo '<h3 style="color:#ff3333;">Order for Rs ' . (250 - $total_price) . ' more to get 18% cashback</h3>';
                            $_SESSION['all["percent"]'] =10;
                        } else if ($total_price >= 250 && $total_price < 400) {
                            echo '<h3 style="color:#ff3333;">Congo!! you are getting 18% cashback</h3>';
                            echo '<h3 style="color:#ff3333;">Order for Rs ' . (400 - $total_price) . ' more to get 26% cashback</h3>';
                            $_SESSION['all["percent"]'] =18;
                        } else {
                            echo '<h3 style="color:#ff3333;">Congo!! you are getting 26% cashback</h3>';
                            $_SESSION['all["percent"]'] =26;
                        }
                    }else{
                        if ($total_price < 120) {
                            echo '<h3 style="color:#ff3333;">Order for Rs ' . (120 - $total_price) . ' more to get 5% cashback</h3>';
                            $_SESSION['all["percent"]'] =0;
                        } else if ($total_price >= 120 && $total_price < 250) {
                            echo '<h3 style="color:#ff3333;">Congo!! you are getting 5% cashback</h3>';
                            echo '<h3 style="color:#ff3333;">Order for Rs ' . (250 - $total_price) . ' more to get 9% cashback</h3>';
                            $_SESSION['all["percent"]'] =5;
                        } else if ($total_price >= 250 && $total_price < 400) {
                            echo '<h3 style="color:#ff3333;">Congo!! you are getting 9% cashback</h3>';
                            echo '<h3 style="color:#ff3333;">Order for Rs ' . (400 - $total_price) . ' more to get 13% cashback</h3>';
                            $_SESSION['all["percent"]'] =9;
                        } else {
                            echo '<h3 style="color:#ff3333;">Congo!! you are getting 13% cashback</h3>';
                            $_SESSION['all["percent"]'] =13;
                        }
                    }*/
                    
                    
                    echo '<div class="flex-container">';
                    while ($row = mysqli_fetch_array($result)) {

                        $dish_name = $row['dish_name'];
                        $dish_id = $row['dish_id'];
                        $price = $row['price'];
                        $res_id = $row['res_id'];
                        $quantity = $row['quantity'];

                        $sql = 'select * from restaurant where res_id=' . $res_id . '';
                        $result1 = mysqli_query($con, $sql);
                        $row1 = mysqli_fetch_array($result1);
                        $res_name = $row1['res_name'];

                        echo '<div style="width:90%;">';
                        echo '<div class="icon_image" style="background-image: url(\'images/final.jpg\');"></div>';
                        echo '<div class="body_image">' . $res_name . '<br/>' . $dish_name . '<br/>Quantity - ' .
                        $quantity . '<br/>Net price - Rs.' . $price . '  <div class="add_button"><a href="remove_order.php?dish_id=' .
                        $dish_id . '&order_id=' . $order_id . '">Remove</a></div></div>';


                        echo '</div>';
                    }
                    echo '</div>';

                    echo '<div class="add_button" style="position:absolute;left:40%;margin:15px;"><a href="final_address.php">Order</a></div>';
                    echo '<p style="visibility:hidden;">a</p>';
                } else {
                    echo '<h1 style="text-align:center;">Nothing in your cart</h1>';
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
