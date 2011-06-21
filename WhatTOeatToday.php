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
print_r($f_rank);

?>