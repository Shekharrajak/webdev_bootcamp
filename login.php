<?php
include "db_config.php";

$sel="SELECT * FROM `users` where email='".$_POST["email"]."' and password='".$_POST["pass"]."'";

$result=mysql_query($sel) or die(mysql_error());

if(mysql_num_rows($result) == 0)
	echo "<h1>Invalid email and password combination<br>Go to <a href='index.php'>homepage</a></h1>";
else
echo '<script language="javascript">document.location.href="details.php"</script>';

?>