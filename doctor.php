<?php
    include "connection.php";
	include("lib/header.php");
?>
 
<h3 align="center">Doctor Page</h3>
<table align="center" cellpadding="10" border="1">
	<tr>
		<th bgcolor="lightgrey">ID</th>
		<th bgcolor="lightgrey">Name</th>
		<th bgcolor="lightgrey">Qualification</th>
		<th bgcolor="lightgrey">Department</th>
	</tr>
<?php
	$sql = "SELECT * FROM `doctor` WHERE 1";
	$res = $db->query($sql);
	while($row=$res->fetch_array()){
		print "<tr>
						<td>$row[id]</td>
						<td>$row[name]</td>
						<td>$row[qualification]</td>
						<td>$row[department]</td>
				</tr>";
	}
?>
</table>
<?php
    include("lib/footer.php");
?>