<?php
    include('config.php');
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
        }
        else
        {
            // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];
            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            if($db->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }else{
                //connection established
                $test='undefined';
                $login_query = "SELECT * FROM `user` WHERE user.Username = '$username' AND user.Password = '$password'";
                $login_result = $db->query($login_query);
                if($row = $login_result->fetch_assoc())
                {
                    //if login succesfull, create session
                    $_SESSION['login_user'] = $username;
                    //redirect to profile page
                    header('location:profile.php');
                }else{
                    $error = "Invalid Username or Password";
                    echo $error;
                }
            }
        }
        //close connection
        $db->close();
    }
?>