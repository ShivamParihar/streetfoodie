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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
        <title>Offers for you</title>
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
                <!--
                    <h1>Offers for you</h1>
                    <div class="card">
                    <p>
                        <i class="fa fa-star" style="font-size:20px;color:red;"></i>
                        Order for Rs. 120 or more to get 5% cashback<br/><br/>
                        <i class="fa fa-star" style="font-size:20px;color:red;"></i>
                        Order for Rs. 250 or more to get 9% cashback<br/><br/>
                        <i class="fa fa-star" style="font-size:20px;color:red;"></i>
                        Order for Rs. 400 or more to get 13% cashback<br/><br/><br/>
                        
                        <i class="fa fa-star" style="font-size:30px;color:red;"></i>                        
                        Get double(2x)% cashback on your every 4th order <br/><strong><small>*T&C applied</small></strong>
                        <small>- Previous 3 orders should be of Rs. 120 or more</small>
                        
                    </p>\
                </div>    
                -->
                
                
                <!--
                <h1>Refer and earn</h1>
                    <div class="card">
                        
                    <p>           
                    <?php   
                    $refer_code=$_SESSION['all["refer_code"]'];
                    //echo 'Your referral code is <strong>'.$refer_code.'</strong>';
                    ?>
                    <br/><br/>
                    Avail a cashback of Rs. 10 for both you and your friend on every order your referral places.<br/>  
                    ASK YOUR FRIEND TO REGISTER USING YOUR REFERRAL CODE.<br/>
                    YOU AND YOUR FRIEND BOTH GET RS 10 CASHBACK ON YOUR FRIENDS EVERY ORDER.<br/>
                    <br/>
                    * Steps to avail the offer:<br/>
                    1. Get your referral code from the website.<br/>
                    2. Ask your friend to register using your referral code.<br/>
                    3. On every order your friend places, You both get Rs. 10 cashback.<br/>
                    <br/>
                    *Cashback is only applicable on orders above Rs.99<br/>
                    *Offer Validity till 15th October.
                    </p>             
                    </div>
                -->    
                
                <h1>Flat 50% cashback</h1>
                    <div class="card">
                        
                    <p>
                    Navratri Special:<br/><br/>
                    StreetFoodie is giving flat 50% cashback on 1st order from Soil to Spoon of any price<br/>
                    Just enjoy the food ride<br/><br/>
                    <a href="t&c.php" style="color:blue;">*T&C applied</a>
                    </p>             
                    </div>                
                
            </div>
        </div>

        <!--Footer-->
        <div class="footer">
            <div class="back_to_top"><a href=#>BACK TO TOP</a></div>
            <br/>
            <a href="home.php">Home</a></br>	
            <a href="cart.php">Cart</a><br/>
            <a href="your_orders.php">Your orders</a><br/>
            <a href="privacyPolicy.php">Privacy policy</a><br/>
            <a href="partner.php">Partner with us</a><br/>
            <a href="cancellation.php">Cancellation policy</a><br/>
            &copy; 2018<?php //echo date("Y"); ?><br/>
        </div>
    </body>
</html>

