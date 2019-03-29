<?php
    include("lib/header.php");
    include("connection.php");
?>
<!-- <h1>This is the department page</h1> -->
<h3 align="center">Department Page</h3>
<table align="center" cellpadding="10" border="1">
    <tr>
        <th bgcolor="lightgrey"><i>Department Id</i></th>
        <th bgcolor="lightgrey"><i>Department Name</i></th>
    </tr>
<?php
    $sql = "SELECT * FROM `department` WHERE 1";
    $res = $db->query($sql);
    while($row=$res->fetch_array()){
        print "<tr>
                    <td>$row[department_id]</td>
                    <td>$row[department_name]</td>
               </tr>";
    }
    
?>
</table>
<?php 
    include("lib/footer.php");
?>