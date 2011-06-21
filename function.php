<?php   
function ShowAuthor($author){
		
		$sql = "SELECT photo_route FROM member where ID = '$author'";
		$result1 = mysql_query($sql);
		$tmp = @mysql_fetch_row($result1);
		echo $tmp[0].'dasdd<br>';	
		$friend[$n]['picture']=$tmp[0];	
	
}



?>