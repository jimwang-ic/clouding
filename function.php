<?php   
function ShowAuthor($author){
		
		$sql = "SELECT photo_route FROM member where ID = '$author'";
		$result1 = mysql_query($sql);
		$tmp = @mysql_fetch_row($result1);
		$friend[$n]['picture']=$tmp[0];	
		return $friend[$n]['picture'];
}



?>