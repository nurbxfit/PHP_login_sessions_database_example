<?php
    session_start();
    //destroy session
    if(session_destroy()){
        //redirect to index.php
        header('location:index.php');
    }
?>