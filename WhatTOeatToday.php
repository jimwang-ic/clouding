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

$n = 1;
$t_0 = 1;
$t_1 = 1;
$t_2 = 1;
$s = $row['1'];
while(++$n<11){
  if($row[$n]>$s){
     $s = $row[$n];
	 $t_0 = $n;
  } 
}
$row[$t_0] = 0;

$n = 1;
$s = $row['1'];
while(++$n<11){
  if($row[$n]>$s){
     $s = $row[$n];
	 $t_1 = $n;
  } 
}
$row[$t_1] = 0;

$n = 1;
$s = $row['1'];
while(++$n<11){
  if($row[$n]>$s){
     $s = $row[$n];
	 $t_2 = $n;
  }
}
$row[$t_2] = 0;

$f_rank = array("$t_0","$t_1","$t_2");
//print_r($f_rank);

$name = array("ch","jpn","kor","south","ds","us","west","hotpot","bbq","nm");
$c_0 = $f_rank[0]-1;
$c_1 = $f_rank[1]-1;
$c_2 = $f_rank[2]-1;
$class = array("$name[$c_0]","$name[$c_1]","$name[$c_2]");

//print_r($class);

$sql = "SELECT * FROM article WHERE class = '$name[$c_0]' ORDER BY score DESC";

$result = mysql_query($sql); 

$row = mysql_fetch_row($result);

$ID_1 = $row[0];

print "<a href='./RecommendPage.php?number=".$ID_1."'".">".$row[6]."</a>"."<br/>";

$sql = "SELECT * FROM article WHERE class = '$name[$c_1]' ORDER BY score DESC";

$result = mysql_query($sql); 

$row = mysql_fetch_row($result);

$ID_2 = $row[0];

print "<a href='./RecommendPage.php?number=".$ID_2."'".">".$row[6]."</a>"."<br/>";

$sql = "SELECT * FROM article WHERE class = '$name[$c_2]' ORDER BY score DESC";

$result = mysql_query($sql); 

$row = mysql_fetch_row($result);

$ID_3 = $row[0];

print "<a href='./RecommendPage.php?number=".$ID_3."'".">".$row[6]."</a>"."<br/>";



?>