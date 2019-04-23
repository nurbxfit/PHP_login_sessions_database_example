<?php
   include('config.php');
   session_start();
   $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from user where user.Username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   //echo "ROW: ".json_encode($row);
   $login_session = $row['Username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>