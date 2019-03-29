<?php
    include "connection.php";
    include "./lib/header.php";
    if(isset($_POST['Submit'])){
         $sql = "insert into `department`(`department_id`,`department_name`) VALUES(null,'$_POST[name]')";
         $db->query($sql);
    }
?>

<center>
    <h3>Department Add Page</h3>
    <form method="post" action="" align="center">
 	<table align="center">
        <tr>
            <input type="hidden" name="id">
        </tr>
 		<tr>
 			<td>Name</td>
 			<td>
 				<input type="text" name="name"><br>
 			</td>
        </tr>
 		</table>
 		<table align="center">
 		<tr>
 			<td><input type="submit" name="Submit" value="Submit"></td>
 		</tr>
 	</table>
 </form>
</center>

<?php
    include "./lib/footer.php";
?>