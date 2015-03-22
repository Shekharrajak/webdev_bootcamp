<?php
//For Update
if(isset($_POST['upd']))
{
include "connection.php";

$upd="UPDATE `student` SET `std_name`='".$_POST['snam']."',`address`='".$_POST['add']."',`contact_no`='".$_POST['cnn']."',`age`='".$_POST['ag1']."' WHERE `std_id`='".$_POST['idddddd']."'";
mysql_query($upd) or die(mysql_error());
echo '<script language="javascript">document.location.href="details.php"</script>';

}
?>



<?php
//The following Code only Show the selected records in the form,
if(isset($_GET['edit_id']))
{
include "connection.php";
$sel="SELECT * FROM `student` where `std_id`='".$_GET['edit_id']."'";
$sel9=mysql_query($sel) or die(mysql_error());

$row=mysql_fetch_array($sel9);
?>

<form name="frmEdit" method="post" action="edit.php">
<input type="hidden" name="idddddd" value="<?php echo $_GET['edit_id'];?>">
<table align="center" width="29%" border="1">

<tr>
<th colspan="2">Update Records</th>
</tr>

<tr>
<td width="29%">Student's Name </td>
<td><input  type="text" name="snam" value="<?php echo $row['std_name'];?>"></td>

</tr>

<tr>
<td>Address</td>
<td><input name="add" type="text" id="add" value="<?php echo $row['address'];?>"></td>

</tr>

<tr>
<td>Contact No </td>
<td><input name="cnn" type="text" id="cnn" value="<?php echo $row['contact_no'];?>"></td>

</tr>
<tr>
<td>Age</td>
<td><input type="text" name="ag1" value="<?php echo $row['age'];?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="upd" value="Update"></td>
</tr>
</table>
</form>
<?php
}
?>