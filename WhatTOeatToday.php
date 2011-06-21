<?php
//start session
if (!isset($_SESSION)) {
    session_start();
}

include("mysql_connect.inc.php");

$id = $_SESSION['username'];



include("mysql_connect.inc.php");

$id = $_SESSION['username'];

$sql = "SELECT friendID FROM relationship where ID = '$id'";

$result = mysql_query($sql);

echo "<h3>$id's friend list<h3/>" ;
echo "======================================<br/>";

while ($row = mysql_fetch_row($result)){
	echo "<p>$row[0]<p/>";
}



?>