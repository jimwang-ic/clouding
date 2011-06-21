<?php
	//將session清空
	unset($_SESSION['username']);
	$_SESSION['username']="";
	echo '登出中......';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
?>