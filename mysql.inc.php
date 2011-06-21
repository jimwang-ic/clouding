<?php


	include("mysql_connect.inc.php");
	$id = $_SESSION['username'];
	//$id = 'ww2308';                   
	
	
	$sql = "SELECT * FROM article A1,relationship A2 WHERE A1.author = A2.FriendID && A2.ID = '$id' ORDER BY A1.ID DESC";
				
	$result = mysql_query($sql);

	$n=0;
	while($n < 5){  	
		$row = mysql_fetch_row($result);
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
	

	
	
	for($n=0;$n<5;$n++){
		$POC[$n] = "";
		$tmp[$n] = explode("\n",$record[$n]['content']);   //´«¦æ
		for($i=0;$i<10;$i++){
			$POC[$n] = $POC[$n].$tmp[$n][$i].'<br/>';  //Part Of Content
		}
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
		if($friend[$n]['id']==$id)
			continue;
		$friend[$n]['picture']=$tmp[0];	
		//echo $row[0].'<br>';
		$n++;
	}
	
	
	$sql = "SELECT * FROM article ORDER BY like_count DESC";
	$result = mysql_query($sql);

	$n=0;
	while($n < 5){  	
		$row = mysql_fetch_row($result);
		$hot[$n]['id'] = $row[0];
		$hot[$n]['author'] = $row[1];
		$hot[$n]['class'] = $row[2];
		$hot[$n]['region'] = $row[4];
		$hot[$n]['date'] = $row[5];
		$hot[$n]['title'] = $row[6];
		$hot[$n]['content'] = $row[7];
		$hot[$n]['like_count']= $row[8];
		//echo $hot[$n]['like_count'].'<br/>';
		$contenthot[$n] = str_replace("\n","<br/>",$row[7]);
		//$POC[$n] = $row[7];
		$n++;
		//echo $row[6];
	}	
	
	for($n=0;$n<5;$n++){
		$HPOC[$n] = "";
		$tmp[$n] = explode("\n",$hot[$n]['content']);   //´«¦æ
		for($i=0;$i<10;$i++){
			$HPOC[$n] = $HPOC[$n].$tmp[$n][$i].'<br/>';  //hot.php Part Of Content
		}
	}
	
?>