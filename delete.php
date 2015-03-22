<?php
if(isset($_GET['del']))
{
include "connection.php";
$sel="DELETE FROM `student` where `std_id`='".$_GET['del']."'";
$sel9=mysql_query($sel) or die(mysql_error());
echo '<script language="javascript">document.location.href="details.php"</script>';

}
?>