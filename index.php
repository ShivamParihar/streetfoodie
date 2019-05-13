<?php
session_start();
if (!isset($_SESSION['error'])) {
    $_SESSION['error'] = "";
}
$_SESSION['error1'] = '';
?>
<!--
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initital-scale=1">
        <title>Sign in</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="formcss.css">
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
    </head>
    <body>
        <div class="form" style='background-color:#fff;'>
            <p class="webname">Street foodie.tk</p>    
            <form method="post" action="loginCheck.php">
                <h3>Sign in</h3>
                <p>With your account</p>
                <span class="err"><small><?php echo $_SESSION['error'] ?></small></span><br/>


                <small>Mobile number</small><br/>
                <input type="text" name="phone" required><br/><br/>
                <small>Password</small><br/>
                <input type="password" name="password" required><br/><br/>
                <input class="button" type="submit" value="Sign in">
            </form>

            <br/>
            <small>Not a user?</small><br/><a class="button" href="register.php">Register</a>
        </div>


    </body>
</html>
-->

Site under development...