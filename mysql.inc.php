<?php
	if( !@mysql_connect("140.119.164.193:3306","root","root"))
		echo("cannot connect to server!");
		
	mysql_query("SET NAMES utf8");	
	mysql_select_db("foodbook");	
	$result = mysql_query("SELECT * FROM article") or die(mysql_error());
	$row = mysql_fetch_array($result);
	echo "$row[6]";
?>