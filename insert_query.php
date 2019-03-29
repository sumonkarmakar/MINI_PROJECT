<?php
    include "connection.php";
?>
<?php
    //$conn = new MySQLi("localhost","root",null,"medicine_mgmt");
    if(isset($_POST['Submit'])){
        $sql = "Insert into `registration`(id,name,email,password,gender,address,mobile_no) values
        (null,'$_POST[name]','$_POST[email]','$_POST[pass]','$_POST[gender]',
                '$_POST[address]','$_POST[mobile]')";
        mysqli_query($db,$sql);
       // echo "inserted successfully";
       header("location:registration.php");
    }else{
        echo "<script>
            alert('Inserted Successfully');
        </script>";
    }
    
?>