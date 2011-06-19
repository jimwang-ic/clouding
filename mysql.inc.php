<?php

	if( !@mysql_connect("140.119.164.193:3306","root","root"))
		echo("cannot connect to server!");

	if (!isset($_SESSION)) {
    session_start();
	}
	
	$id = $_SESSION['username'];
	//$id = 'ww2308';                   

	

	mysql_select_db("foodbook");
	
	$sql = "SELECT * FROM article where author = '$id' ORDER BY ID DESC";	

	$result = mysql_query($sql);
	//mysql_query("SET NAMES utf8");
	mysql_query("SET NAMES utf8;");
	mysql_query("SET CHARACTER_SET_CLIENT=utf8;");
	mysql_query("SET CHARACTER_SET_RESULTS=utf8;");	
	//$row = @mysql_fetch_row($result);
	
	$n=0;
	while($n < 5){  	
		$row = mysql_fetch_row($result);
		$record[$n]['author'] = $row[1];
		$record[$n]['class'] = $row[2];
		$record[$n]['region'] = $row[4];
		$record[$n]['date'] = $row[5];
		$record[$n]['title'] = $row[6];
		echo $row[6];
		$record[$n]['content'] = $row[7];
		$content[$n] = str_replace("\n","<br/>",$row[7]);
		//$POC[$n] = $row[7];
		$n++;
	}	
	
	
	//$POC[5]= array();
	//echo $record[1]['content'];
	for($n=0;$n<5;$n++){
		$POC[$n] = "";
		$tmp[$n] = explode("\n",$record[$n]['content']);   //´«¦æ
		for($i=0;$i<10;$i++){
			$POC[$n] = $POC[$n].$tmp[$n][$i].'<br/>';  //Part Of Content
		}
	}
	//echo $POC[0];
	
	//echo $string.'<br/>';
	//echo '<br>';
?>