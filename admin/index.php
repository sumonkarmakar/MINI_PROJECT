<?php
    session_start();
    if($_POST['log']){
        $user=$_POST['name'];
        $userpassword=$_POST['password'];

        $sql = "select * from `admin` where `name`='$name' and `password`='$password'";
        $res=$db->query($sql);
        $num=$res->num_rows;
        if($num>0){
            $row=$res->fetch_array();
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['name'];
            header("location:home.php");
        }
    }

    
?>
<form method="post" action="">
<center>
    <h3>Hello Admin Please Login Here</h3>
    <table align="center">
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" id=""></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="pass" id=""></td>
    </tr>
    <tr>
        <td><input type="submit" name="log" value="login"></td>
    </tr>
    </table>
</center>
</form>