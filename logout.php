<?php
session_start();
unset($_SESSION['admin']);
echo '<script language="javascript">document.location.href="index.php"</script>';

?>