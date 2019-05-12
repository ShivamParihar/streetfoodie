<?php
session_start();
if (!isset($_SESSION['all["phone"]'])) {
    header("Location:index.php");
}
$_SESSION['error'] = '';
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
        <title>Home</title>  
        <style>
        .ban {width:100%;text-align:center;}
        .banimg {width:60%;}
        
            @media screen and (min-width: 479px){
                .hide{display:none!important}                 
            }
            @media screen and (max-width: 479px){
                .hide-low{display:none!important}   
                .banimg {width:100%;}
              
} 
            }   
            
        </style>
    </head>
    <body>           
        <!--search function-->
        <script>
            function showsearch(str) {
                var text = str;
                text = text.trim();

                document.getElementById("demo").style.display = "flex";
                document.getElementById("demo1").style.display = "block";

                if (text == '') {
                    return;
                } else {
                    text = text.toLowerCase();

                    var xmlr = new XMLHttpRequest();
                    xmlr.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("demo").innerHTML = this.responseText;
                        }
                    };
                    xmlr.open("GET", "gethint.php?q=" + text, true);
                    xmlr.send();

                }
            }
        </script>           

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
                
                <!--Banner
                <div class="ban"><image src="images/banner1.jpg" class="banimg" ></image></div><br/><br/>
                -->
                
                <!--Search-->                
                <form class="example" action="" style="margin:auto;max-width:300px;text-align:center;">
                    <input type="text" placeholder="Search for a dish..." onkeyup="showsearch(this.value)">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form><br/><br/>

                <div id="demo" class="flex-container" style="display:none;"></div>

                <br/><h1 id="demo1" style="display:none;font-family:Abel;text-align:center;">#See more from restaurants...</h1><br/>

                <?php
                include("connect.php");
                $sql = 'select * from restaurant';
                $result = mysqli_query($con, $sql);
                echo '<div class="flex-container">';
                while ($row = mysqli_fetch_array($result)) {
                    $res_name = $row['res_name'];
                    $res_id = $row['res_id'];
                    echo '<div>';
                    echo '<div class="icon_image"  style="background-image: url(\'images/final.jpg\');"></div>';
                    echo '<div class="body_image"><a href="restaurant1.php?res_name=' . $res_name . '&res_id=' . $res_id . '">' . $res_name . '</a><br/>5 p.m - 9:30 p.m</div>';
                    echo '</div>';
                }
                echo "</div>";
                ?>

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
            &copy; 2018<?php //echo date("Y");  ?><br/>
        </div>
    </body>
    <!--<div class="icon_image"  style="background-image: url(\'images/' . $res_name . '.jpg\');">-->
</html>
