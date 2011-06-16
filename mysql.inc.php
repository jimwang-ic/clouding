<?php
	if( !@mysql_connect("140.119.164.193:3306","root","root"))
		echo("cannot connect to server!");
	
	
	//$id = $_SESSION['username'];
	$id = 'ww2308';                    //¼È®É
	mysql_query("SET NAMES utf8");	

	mysql_select_db("foodbook");
	$sql = "SELECT * FROM article where author = '$id'";	
	$result = mysql_query($sql);
	//$row = @mysql_fetch_row($result);
	$n=0;
	while($row = mysql_fetch_row($result)){  
		
		$record[$n]['author'] = $row[1];
		$record[$n]['class'] = $row[2];
		$record[$n]['region'] = $row[4];
		$record[$n]['date'] = $row[5];
		$record[$n]['title'] = $row[6];
		$record[$n]['content'] = $row[7];	
		$n++;
	
	}	
	
	$POC = array();
	
	//echo $record[1]['content'];
	for($n=0;$n<5;$n++){
		$tmp[$n] = explode("\n",$record[$n]['content']);
		for($i=0;$i<15;$i++){
			$POC[$n] = $POC[$n].$tmp[$n][$i].'<br/>';  //Part Of Content
		}
	}
	//echo $POC[0];
	$content = str_replace("\n","<br/>",$row[7]);
	//echo $string.'<br/>';
	//echo '<br>';
?>