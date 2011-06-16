<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

	$db_server = "140.119.164.193";

	$db_server = "140.119.164.193:3306";
	//資料庫名稱

	$db_name = "Foodbook";

	$db_user = "root";

	$db_passwd = "root";


	if(!@mysql_connect($db_server, $db_user, $db_passwd))
	        die("can't connect to DB");

	mysql_query("SET NAMES utf8");


	if(!@mysql_select_db($db_name))
	        die("can't connect to DB");
?>  