<?php
//For Update
if(isset($_POST['upd']))
{
include "db_config.php";

$upd="UPDATE `users` SET `username`='".$_POST['username']."',`email`='".$_POST['email']."',`gender`='".$_POST['gender']."',`password`='".$_POST['password']."' WHERE `user_id`='".$_POST['user_id']."'";
mysql_query($upd) or die(mysql_error());
echo '<script language="javascript">document.location.href="details.php"</script>';

}
?>



<?php
//The following Code only Show the selected records in the form,
if(isset($_GET['edit_id']))
{
include "db_config.php";
$sel="SELECT * FROM `users` where `user_id`='".$_GET['edit_id']."'";
$sel9=mysql_query($sel) or die(mysql_error());

$row=mysql_fetch_array($sel9);
?>

<form name="frmEdit" method="post" action="edit.php">
<input type="hidden" name="user_id" value="<?php echo $_GET['edit_id'];?>">
<table align="center" width="29%" border="1">

<tr>
<th colspan="2">Update Records</th>
</tr>

<tr>
<td width="29%"> Name </td>
<td><input  type="text" name="username" value="<?php echo $row['username'];?>"></td>

</tr>

<tr>
<td>Email</td>
<td><input name="email" type="text" id="email" value="<?php echo $row['email'];?>"></td>

</tr>

<tr>
<td>Gender</td>
<td>
<select  name="gender" >
	   <option value="M">Male</option>
	   <option value="F">Female</option>
	   <option value="O">Other</option>
	 </select>
</td>
</tr>
<tr>
<td>password</td>
<td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="upd" value="Update"></td>
</tr>
</table>
</form>
<?php
}
?>