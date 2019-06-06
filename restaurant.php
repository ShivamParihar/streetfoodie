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
        <link rel="stylesheet" href="page.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
        <title>Restaurant</title>
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
        <!--search function-->
        <script>
            function showsearch(str){
                var text=str;
                text=text.trim();
                
                document.getElementById("demo2").style.display="flex";
                document.getElementById("demo3").style.display="block";
                
                if(text==''){
                    return;
                }else{
                    text = text.toLowerCase();
                    
                    var xmlr= new XMLHttpRequest();
                    xmlr.onreadystatechange = function(){
                        if(this.readyState==4 && this.status==200){
                            document.getElementById("demo2").innerHTML=this.responseText;
                        }
                    };
                    xmlr.open("GET","gethint1.php?q="+text,true);
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
                
                <script>
                    pageSize = 16;

                    $(function () {
                        var pageCount = Math.ceil($(".line-content").size() / pageSize);

                        for (var i = 0; i < pageCount; i++) {
                            if (i == 0)
                                $("#pagin").append('<li><a class="current" href="#">' + (i + 1) + '</a></li>');
                            else
                                $("#pagin").append('<li><a href="#">' + (i + 1) + '</a></li>');
                        }
                        
                        showPage(1);

                        $("#pagin li a").click(function () {
                            $("#pagin li a").removeClass("current");
                            $(this).addClass("current");
                            showPage(parseInt($(this).text()))
                        });
                    })
                    showPage = function (page) {
                        $(".line-content").hide();

                        $(".line-content").each(function (n) {
                            if (n >= pageSize * (page - 1) && n < pageSize * page)
                                $(this).show();
                        });
                    }
                </script>    


                <?php
                $res_name = $_SESSION['all["res_name"]'];
                $res_id = $_SESSION['all["res_id"]'];
                echo '<h1>' . $res_name . '</h1><br/>';
                ?>
                
                <!--Search-->                
                <form class="example" action="" style="margin:auto;max-width:300px;">
                    <input type="text" placeholder="Search for a dish..." onkeyup="showsearch(this.value)">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form><br/><br/>
                
                <div id="demo2" class="flex-container" style="display:none;"></div>
                
                <br/><h1 id="demo3" style="display:none;font-family:Abel;text-align:center;">#See more dishes...</h1><br/>

                
                <div class="flex-container">
                    <?php
                    include("connect.php");
                    $sql = 'select * from dish where res_id="' . $res_id . '"';
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        $dish_name = $row['dish_name'];
                        $dish_id = $row['dish_id'];
                        $price = $row['price'];

                        echo '<div class="line-content">';
                        echo '<div class="icon_image" style="background-image:url(\'images/final.jpg\');"></div>';
                        echo '<div class="body_image">' . $dish_name . '<br/>Rs.' . $price . '  <div class="add_button"><a href="dish1.php?dish_name=' . $dish_name . '&price=' . $price . '&res_id='.$res_id.'&dish_id='.$dish_id.'&res_name='.$res_name.'">Add</a></div></div>';

                        echo '</div>';
                    }
                    ?>
                </div>
                <ul id="pagin"></ul>
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
