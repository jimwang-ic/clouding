<?php

if (!isset($_SESSION)) {
    session_start();
} 

$q = $_GET["q"];

//echo $q;
include("mysql_connect.inc.php");

$id = $_SESSION['username'];

$sql = "SELECT * FROM article WHERE author = '$id' && ID = '$q'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);

$classname = $row[2];

//echo "<p>".$row[2]."<p/>";

$sql = "SELECT * FROM interest WHERE ID = '$id'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);

//echo "<p>".$row[$classname]."<p/>";

//echo "<p>".$row[3]."<p/>";
$newscore = $row[$classname] + 5;
//echo "<p>".$newscore."<p/>";
//echo "<p>".$classname."test"."<p/>";


$sql = "UPDATE interest SET $classname = '$newscore' WHERE ID = '$id'";
mysql_query($sql);

?>