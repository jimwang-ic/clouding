<?php

	if( !@mysql_connect("140.119.164.193:3306","root","root"))
		echo("cannot connect to server!");

	if (!isset($_SESSION)) {
    session_start();
	}
	
	$id = $_SESSION['username'];
	//$id = 'ww2308';                   
/*=======
	session_start(); 
	include("mysql_connect.inc.php");
	//$id = $_SESSION['username'];

	$id = 'ww2308';                    //�Ȯ�
	//mysql_query("SET NAMES utf8");	
	//mysql_select_db("foodbook");
	
	$sql = "SELECT * FROM article where author = '$id'";	

	$id = 'ww2308';                   
>>>>>>> 5169b53df77c293aa6866fa81be9a4ff3cb49556*/
	mysql_query("SET NAMES utf8");	

	mysql_select_db("foodbook");
	
	$sql = "SELECT * FROM article where author = '$id' ORDER BY ID DESC";	

	$result = mysql_query($sql);
	//$row = @mysql_fetch_row($result);
	$n=0;
	while($n < 5){  	
		$row = mysql_fetch_row($result);
		$record[$n]['author'] = $row[1];
		$record[$n]['class'] = $row[2];
		$record[$n]['region'] = $row[4];
		$record[$n]['date'] = $row[5];
		$record[$n]['title'] = $row[6];
		$record[$n]['content'] = $row[7];
		$content[$n] = str_replace("\n","<br/>",$row[7]);
		//$POC[$n] = $row[7];
		$n++;
	}	
	

	//$POC[5]= array();
	//echo $record[1]['content'];
	for($n=0;$n<5;$n++){
		$POC[$n] = "";
		$tmp[$n] = explode("\n",$record[$n]['content']);   //����
		for($i=0;$i<10;$i++){
			$POC[$n] = $POC[$n].$tmp[$n][$i].'<br/>';  //Part Of Content
		}
	}
	//echo $POC[0];
	
	//echo $string.'<br/>';
	//echo '<br>';
?>