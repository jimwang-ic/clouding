<?php

//start session
if (!isset($_SESSION)) {
    session_start();
}

include("mysql_connect.inc.php");

$id = $_SESSION['username'];

$sql = "SELECT friendID FROM relationship where ID = '$id'";

$result = mysql_query($sql);

echo "$id's friend list <br /><br />" ;

while ($row = mysql_fetch_row($result)){
	echo "$row[0]";
}

?>