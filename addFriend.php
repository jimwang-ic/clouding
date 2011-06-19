<?php

if (!isset($_SESSION)) {
    session_start();
}



include("mysql_connect.inc.php");

$id = $_SESSION['username'];

$friendid = $_POST['FriendID'];
$sql = "INSERT INTO relationship (ID , friendID) VALUES ('$id','$friendid')";

mysql_query($sql);

?>