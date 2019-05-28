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
        <title>Privacy policy</title>
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
                <div class="card">
                    <h2>Privacy Policy</h2>
                    <p>This Privacy Policy (“Policy”) describes the policies and procedures 
                        on the collection, use, disclosure and protection of your information 
                        when you use our website located at streetfoodie.tk</p>
                    <h5>YOUR CONSENT</h5>
                    <p>By using this Platform and the Services, you agree and consent to the collection, transfer, use, storage, disclosure and sharing of your information as described and collected by us in accordance with this Policy. If you do not agree with the Policy, please do not use or access this Platform.
                    </p>

                    <h5>POLICY CHANGES</h5>
                    <p>We may occasionally update this Policy and such changes will be posted on this page. If we make any significant changes to this Policy we will endeavour to provide you with reasonable notice of such changes, we will obtain your consent.</p>

                    <h5>INFORMATION WE COLLECT FROM YOU</h5>
                    <p>We will collect and process the following information about you:</p>
                    <p># <strong>Information you give us</strong> - This includes information submitted when you.</p>
                    <p>* Create or update your account, which may include your name,email, phone number, login name and password, address, payment information, date of birth and profile picture. </p>
                    <p>* Provide content to us, which may include reviews, ordering details and history, favourite vendors, special merchant requests, contact information of people you refer to us and other information you provide on the  Platform (“Your Content”).
                    </p>
                    <p>*Use our Services, we may collect and store information about you to process your requests and automatically complete forms for future transactions, including (but not limited to) your phone number, address, email, billing information.
                    </p>
                    
                    <p># <strong>Information we collect about you </strong>With regard to each of your visits to the Platform, we will automatically collect and analyse the following demographic and other information:
                    </p>
                    <p>* When you communicate with us (via email, phone, through the Platform or otherwise), we may maintain a record of your communication</p>
                    <p>* <strong>Location information</strong>: Depending on the Services that you use, and your app settings or device permissions, we may collect your real time information, or approximate location information as determined through data such as GPS, IP address.</p>
                    <p>* <strong>Transaction Information</strong>: We collect transaction details related to your use of our Services, and information about your activity on the Services, including the full Uniform Resource Locators (URL), the type of Services you requested or provided, comments, domain names, search results selected, number of clicks, information and pages viewed and searched for, the order of those pages, length of your visit to our Services, the date and time you used the Services, amount charged, details regarding application of promotional code, methods used to browse away from the page and any phone number used to call our customer service number and other related transaction details;
                    </p>
                    <p>* <strong>Device Information</strong>: We may collect information about the devices you use to access our Services, including the hardware models, operating systems and versions, software, file names and versions, preferred languages, unique device identifiers, advertising identifiers, serial numbers, device motion information and mobile network information. Analytics companies may use mobile device IDs to track your usage of the Platform;
                    </p>
                    <p>* If you are a partner restaurant, merchant or a delivery partner, we will, additionally, record your calls with us made from the device used to provide Services, related call details, SMS details location and address details.</p>
                    <p>*All the terms and conditions will be followed strictly</p>
                    <h2>Contact us</h2>
                    <p>If you have any queries relating to the processing/ usage of information provided by you or Privacy Policy, you may email at streetfoodie85@gmail.com.
                    </p>
                    


                </div>
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
            &copy; 2018<?php //echo date("Y"); ?><br/>
        </div>
    </body>
</html>

