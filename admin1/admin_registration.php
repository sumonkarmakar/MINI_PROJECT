<?php
    include "./lib/header.php";
    include "connection.php";
?>
<!--<h1>Admin Registration Form</h1>-->
<center>
<h2>Admin Registration Form</h2>
    <form method="post" action="">
        <fieldset>
            <legend>Use Personal Information</legend>
            <label for="">Name</label>
            <input type="text" name="name"><br>
            <label for="">Email</label>
            <input type="email" name="email"><br>
            <label for="">Password</label>
            <input type="password" name="pwd"><br>
            <label for="">Medicine Name</label>
            <input type="email" name="email"><br>
        </fieldset>
    </form>
</center>
<?php
    include "./lib/footer.php";
?>