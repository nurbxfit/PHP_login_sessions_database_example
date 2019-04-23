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
        <head>
        <title>Your Home Page</title>
       
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class='container'>
            <div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'> TLDM Login </h5>
                    <p class='card-text'>please login to continue</p>
                </div>
                <div class='card-body'>
                    <form method='POST'>
                        <div class='form-group'>
                            <label>Username:</label>
                            <input class='form-control' name='username' type='text' placeholder='Username'>
                        </div>
                        <div class='form-group'>
                            <label>Password</label>
                            <input class='form-control' name='password' type='password' placeholder='************'>
                        </div>
                        <button type='submit' name='submit' value='Login' class='btn btn-primary'>Login</button>
                        <span><?php echo $error; ?></span>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>