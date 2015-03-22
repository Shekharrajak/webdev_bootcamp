<?php
if(isset($_GET['del']))
{
include "db_config.php";
$sel="DELETE FROM `users` where `user_id`='".$_GET['del']."'";
$sel9=mysql_query($sel) or die(mysql_error());
echo '<script language="javascript">document.location.href="details.php"</script>';

}
?>