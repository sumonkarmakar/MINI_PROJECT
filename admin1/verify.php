<?php
    include "connection.php";
    session_start();
    // if($_POST['userName']=='admin' && $_POST['password']=='admin123'){
    //     $_SESSION['login']="verify";
    //     header("location:home.php");
    // }
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $sql = "select * from `admin` where `name`='$userName' and `password`='$password'";
    $res = $db->query($sql);
    $num = $res->num_rows;

    if($num>0){
        $row = $res->fetch_array();
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username']=$row['name'];
        // header location of the next page
        header("location:home.php");
    }
    
?>