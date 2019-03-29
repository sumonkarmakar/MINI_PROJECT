<?php
    include "connection.php";
    include "./lib/header.php";
    if(isset($_POST['Submit'])){
         $sql = "insert into `doctor`(`id`,`name`,`qualification`,`department`)
        VALUES(null,'$_POST[name]','$_POST[qualification]','$_POST[department]');";
         $db->query($sql);
    }
?>

<center>
    <h3>Doctor Add Page</h3>
    <form method="post" action="" align="center">
 	<table align="center">
        <tr>
            <input type="hidden" name="id" >
        </tr>
 		<tr>
 			<td>Name</td>
 			<td>
 				<input type="text" name="name"><br>
 			</td>
        </tr>
        <tr>
            <td>Qualification</td>
 			<td>
 				<input type="text" name="qualification"><br>
 			</td>
        </tr>
        <tr>
             <td>Department</td>
             <td>
             <select name="department">
                <option value="select department" selected disabled>
                    Select Department
                </option>
                <?php
                    $sql = "select * from department";
                    $res = mysqli_query($db,$sql);
                    while($doctor=mysqli_fetch_array($res)){
                        print "<option value=\"$doctor[department_name]\">$doctor[department_name]</option>";
                    }
                ?>
            </select>
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