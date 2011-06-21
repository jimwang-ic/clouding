<?php
//start session
if (!isset($_SESSION)) {
    session_start();
}

include("mysql_connect.inc.php");

$id = $_SESSION['username'];

$sql = "SELECT * FROM interest WHERE ID = '$id'";

$result = mysql_query($sql);

$row = mysql_fetch_row($result);
 
sort($row);

foreach ($row as $key => $val) {
    echo "Attributes[" . $key . "] = " . $val . "<br />";
}



?>