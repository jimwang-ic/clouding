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
?>

<html>
<head>
	<link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body id=  "www-url-cz" align="Left" >


<?php
$id = $_SESSION['username'];


$sql = "SELECT * FROM article WHERE class = '$name[$c_0]' ORDER BY score DESC";

$result = mysql_query($sql); 

while($row = mysql_fetch_row($result))
{
	if($row[1]!=$id)
	{
		$ID_1 = $row[0];
		$Title_1 = $row[6];
		break;
	}
}
print "<h2><font size='5' face='arial' color='red'>Rank 1 :<font/><a href='./RecommendPage.php?number=".$ID_1."'".">".$Title_1 ."</a>"."<h2/><br/>";

$sql = "SELECT * FROM article WHERE class = '$name[$c_1]' ORDER BY score DESC";

$result = mysql_query($sql); 

while($row = mysql_fetch_row($result))
{
	if($row[1]!=$id)
	{
		$ID_2 = $row[0];
		$Title_2 = $row[6];
		break;
	}
}
print "<h2><font size='5' face='arial' color='red'>Rank 2 :<font/><a href='./RecommendPage.php?number=".$ID_2."'".">".$Title_2 ."</a>"."<h2/><br/>";

$sql = "SELECT * FROM article WHERE class = '$name[$c_2]' ORDER BY score DESC";

$result = mysql_query($sql); 

while($row = mysql_fetch_row($result))
{
	if($row[1]!=$id)
	{
		$ID_3 = $row[0];
		$Title_3 = $row[6];
		break;
	}
}
print "<h2><font size='5' face='arial' color='red'>Rank 3 :<font/><a href='./RecommendPage.php?number=".$ID_3."'".">".$Title_3 ."</a>"."<h2/><br/>";

?>
</body>
</html>
