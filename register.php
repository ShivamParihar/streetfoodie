<?php
session_start();
if (!isset($_SESSION['error1'])) {
    $_SESSION['error1'] = "";
}
?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initital-scale=1">
        <title>Register</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="formcss.css">
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
    </head>
    <body>       
        <div class="form">
            <p class="webname">Street foodie.tk</p>    
            <form action="registerCheck.php" method="post">
                <h3>Register</h3>
                <span class="err"><small><?php echo $_SESSION['error1'] ?></small></span><br/>            
                <small>Mobile Number*</small><br/>
                <input type="text" name="phone" required><br/><br/>
                <small>Name*</small><br/>
                <input type="text" name="user_name" required><br/><br/>
                <small>Address*</small><br/>
                <input type="text" name="address" required><br/><br/>                
                <small>Password*</small><br/>
                <input type="password" name="password" required><br/><br/>
                <small>Confirm password*</small><br/>
                <input type="password" name="cpassword" required><br/><br/>
                <small>Referral code (optional)</small><br/>
                <input type="text" name="refer_code"><br/><br/>
                <input class="button" type="submit" value="Create account">
            </form>
            <br/>
            <small>Already a user?</small><br/><a class="button" href="index.php">Sign in</a>
        </div>

    </body>
</html>
