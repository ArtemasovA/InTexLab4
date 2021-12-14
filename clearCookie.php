<?php 
if (isset($_COOKIE['name'])) {
	setcookie("name", "", time()-3600);
}
header("Location: http://{$_SERVER[HTTP_HOST]}/lab4/index.php");
?>
