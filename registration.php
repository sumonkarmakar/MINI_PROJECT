<?php
    include "./lib/header.php";
    include "connection.php";
?>
<!--<h1>This is user registration page</h1>-->
<center>
<h2>Registration form</h2>  
    <form method="post" action="insert_query.php">  
     <fieldset>  
        <legend><i>User Personal Information</i></legend>  
        <label>Enter Your Full Name</label> 
        <input type="text" name="name"><br>  
         <label>Enter your Email</label>  
         <input type="email" name="email"><br>  
         <label>Enter Your Password</label> 
         <input type="password" name="pass"><br>  
         <label>Confirm Your Password</label> 
         <input type="password" name="pass"><br>  
         <br><label>Enter your Gender</label>  
         <input type="radio" id="gender" name="gender" value="male"/>Male    
         <input type="radio" id="gender" name="gender" value="female"/>Female    
         <input type="radio" id="gender" name="gender" value="others"/>Others <br/>   
          <br>Enter your Address:  
         <textarea name="address"></textarea><br>  
         <br><label>Mobile Number</label>
         <input type="number" name="mobile"><br>
         <input type="submit" name="Submit" value="Register">  
     </fieldset>  
  </form>  
</center>
<?php 
    include("./lib/footer.php");
?>