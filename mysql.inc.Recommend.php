<?php


	include("mysql_connect.inc.php");
	$id = $_SESSION['username'];
	//$id = 'ww2308';                   
	
	$aID = $_GET['number'];
	
	$sql = "SELECT * FROM article WHERE ID = '$aID'";
				
	$result = mysql_query($sql);

	$n=0;
	while($row = mysql_fetch_row($result))
	{  	
		$record[$n]['id'] = $row[0];
		$record[$n]['author'] = $row[1];
		$record[$n]['class'] = $row[2];
		$record[$n]['region'] = $row[4];
		$record[$n]['date'] = $row[5];
		$record[$n]['title'] = $row[6];
		$record[$n]['content'] = $row[7];
		$record[$n]['like_count']= $row[8];
		$content[$n] = str_replace("\n","<br/>",$row[7]);
		//$POC[$n] = $row[7];
		$n++;
		//echo $row[6];
	}	
	
	
	$sql = "SELECT * FROM member where ID = '$id'";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);
	$gender = $row[1];
	$region = $row[2];
	$photo_route = $row[4];
	
	$sql = "SELECT friendID FROM relationship where ID = '$id'";
	$result = mysql_query($sql);
	
	$n=0;
	while($n<5){
	
		$row = @mysql_fetch_row($result);
		//echo $row[0]." ";
		$sql = "SELECT photo_route FROM member where ID = '$row[0]'";
		$result1 = mysql_query($sql);
		$tmp = @mysql_fetch_row($result1);
		//echo $tmp[0].'<br>';
		
		$friend[$n]['id']=$row[0];
		$friend[$n]['picture']=$tmp[0];	
		//echo $row[0].'<br>';
		$n++;
	}
	
?>