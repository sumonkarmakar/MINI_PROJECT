<?php
    include "connection.php";
    session_start();

    
        $email=$_POST['uname'];
        $password=$_POST['psw'];
        $sql="SELECT * FROM `registration` WHERE email='$email'  and password='$password'";
        $query=mysqli_query($db,$sql);
        $num=mysqli_num_rows($query);
        
        if($num>0){
            $run=mysqli_fetch_array($query);
            $_SESSION['userid']=$run['id'];
            $_SESSION['username']=$run['name'];
            
                if($_POST['rem']) {
                     $time = time()+36000;
                     setcookie("email",$useremail,$time);
                     setcookie("pass",$userpassword,$time);
                }
                header('location:dashboard.php');
            //header('location:login.php');
        }
        else{
           /* echo '<script language="javascript">';
            echo 'alert("email or password does not matched")';
            echo '</script>';
           /* echo '<a href="login.php">Back</a>';*/
           
            header('location:login.php');
        }
    
?>