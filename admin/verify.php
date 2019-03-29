<?php
    include "connection.php";
    session_start();
    if(!$_SESSION['id']){
        header("location:index.php");
    }
?>