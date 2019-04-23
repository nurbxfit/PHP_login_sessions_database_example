<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TLDM</title>
        <link href="/public/css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="main">
            <h1>TLDM LOGIN</h1>
            <div id="login">
                <h2>Login Form</h2>
                <form action="" method="post">
                    <label>UserName :</label>
                    <input id="name" name="username" placeholder="username" type="text">
                    <label>Password :</label>
                    <input id="password" name="password" placeholder="**********" type="password">
                    <input name="submit" type="submit" value=" Login ">
                    <span><?php echo $error; ?></span>
                </form>
            </div>
        </div>
    </body>
</html>