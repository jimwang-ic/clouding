<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if (!isset($_SESSION)) {
    session_start();
}

include("mysql_connect.inc.php");

$id = $_SESSION['username'];
$friendid = $_POST['FriendID'];
$sql = "INSERT INTO relationship (ID , friendID) VALUES ('$id','$friendid')" ;
$sql_1 = "SELECT friendID FROM relationship WHERE ID ='$id' ";
mysql_query("SET NAMES utf8;");
$result=mysql_query($sql_1);
$m=0;
while ($row = mysql_fetch_array($result)){
     if($row['friendID']==$friendid){
	     $m=1;    
	 }
     
}


if($m == 0){
	mysql_query($sql);
	echo 'finish';
}
else{
    echo 'fail';
}

echo "<p><a href=./index.php>back to home</a></p>";
//mysql_query($sql);

?>