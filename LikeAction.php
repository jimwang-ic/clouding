<?php

if (!isset($_SESSION)) {
    session_start();
} 

$q = $_GET["q"];

//echo $q;
include("mysql_connect.inc.php");

$sql = "SELECT author FROM article WHERE ID = '$q'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);

$id = $row[0];


/**** query article's class & like count & article score***/
$sql = "SELECT * FROM article WHERE author = '$id' && ID = '$q'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);

$classname = $row[2];
//echo "<p>".$id."<p/>";

$new_like_count = $row[8] + 1;

$article_score = $row[3];

/**Update like count**/ 

$sql = "UPDATE article SET like_count = '$new_like_count' WHERE author = '$id' && ID = '$q'" ;

mysql_query($sql);

echo $new_like_count." 個人說很讚";
/**************/

//echo "<p>".$row[2]."<p/>";



/**query interest from use id  and add to the database **/
$sql = "SELECT * FROM interest WHERE ID = '$id'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);

//echo "<p>".$row[$classname]."<p/>";

//echo "<p>".$row[3]."<p/>";
if($classname > 50 )
	$newscore = $row[$classname] + 1;
else 
	$newscore = $row[$classname] - 1;	
//echo "<p>".$newscore."<p/>";
//echo "<p>".$classname."test"."<p/>";


$sql = "UPDATE interest SET $classname = '$newscore' WHERE ID = '$id'";
mysql_query($sql);

/*****/


?>