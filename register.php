<?php
include "db_config.php";

$ins="INSERT INTO `users`(`username`,`email`,`password`,`gender`)VALUES('".$_POST['username']."','".$_POST['email']."','".$_POST['pass']."','".$_POST['gender']."')";

mysql_query($ins) or die(mysql_error());

echo '<script language="javascript">document.location.href="details.php"</script>';
?>