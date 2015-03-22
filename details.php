<?php
include "db_config.php";
?>
<center>Admin Area</center>
<br>
<table align="center" border="0" width="65%" cellpadding="0" cellspacing="1" bgcolor="#000000" align="center" >


<tr bgcolor="#FFFFFF">
<th colspan="7" align="center">List Of Students</th>
</tr>


<tr bgcolor="#FF9966">
<th>Sl.No.</th>
<th>UserName</th>
<th>Gender</th>
<th>Email</th>

<th colspan="2" align="center">Edit Records</th>
</tr>
<?php
$sel="SELECT * FROM `users`";
$SEL4=mysql_query($sel) or die(mysql_error());
$x=1;
while($row=mysql_fetch_array($SEL4))
{
?>
<tr bgcolor="#FFFFFF">
<td><?php echo $x;?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>


<td><a href="edit.php?edit_id=<?php echo $row['user_id'];?>">Edit</a></td>
<td><a href="delete.php?del=<?php echo $row['user_id'];?>">Delete</a></td>

</tr>

<?php
$x=$x+1;
}
?>

</table>
<center><a href="logout.php" >Logout</a></center>

