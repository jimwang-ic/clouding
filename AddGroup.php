<?php

include("mysql_connect.inc.php");

$n = 0;
$ID = array();
Foreach($_POST['data'] as $FriendID){
    $ID[$n] =$FriendID; 
	$n++;
  
}

$m = 0;

while($m<$n){
    $sql = "SELECT * FROM interest where ID = '$ID[$m]' ";
    $result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	$record[$m]['ID'] = $row[0];
    $record[$m][0] = $row[1];
	$record[$m][1] = $row[2];
	$record[$m][2] = $row[3];
	$record[$m][3] = $row[4];
	$record[$m][4] = $row[5];
	$record[$m][5] = $row[6];
	$record[$m][6] = $row[7];
	$record[$m][7]= $row[8];
	$record[$m][8] = $row[9];
	$record[$m][9]= $row[10];
    
	$m++;
}
    //print_r($record);

	$m = 0;
   
while($m<10){
    $count = 0;
	$o = 0;
   while($o<$n){ 
	   if($record[$o][$m]>=50)
	   $count++;
	   $o++;
	}
	$count_reco[$m] = $count;
   $m++;
}
	//print_r($count_reco);
?>
<br><br>
<?php

	$m =0;
	$score_total = array('0','0','0','0','0','0','0','0','0','0') ;
while($m<10){
	$o = 0;
    while($o<$n){ 
	   $score_total[$m] = $score_total[$m] + $record[$o][$m];
	   $o++;
	}
    $m++;
}

$m = $n;
$p = 0;
$q = 0;
$count = 0;
while($m>=0){
    $o = 0;
    while($o<10){
     if($count_reco[$o]==$m){
	     $rank[$p++] = $o;
	     $count++;
	 }
	 $o++;
	 }
	 if($count>=3){
	     
	     break;
	 }
	 $q = $count;
	 $m--;
}

 if($q ==0){	

    $n = 0;
    $t_0 = 0;
    $t_1 = 0;
    $t_2 = 0;
    $s = $score_total['0'];
while(++$n<10){
  if($score_total[$n]>$s){
     $s = $score_total[$n];
	 $t_0 = $n;
  } 
}
$score_total[$t_0] = 0;

$n = 0;
$s = $score_total['0'];
while(++$n<10){
  if($score_total[$n]>$s){
     $s = $score_total[$n];
	 $t_1 = $n;
  } 
}
$score_total[$t_1] = 0;

$n = 0;
$s = $score_total['0'];
while(++$n<10){
  if($score_total[$n]>$s){
     $s = $score_total[$n];
	 $t_2 = $n;
  }
}
$score_total[$t_2] = 0;

    $f_rank = array("$t_0","$t_1","$t_2");
//print_r($f_rank);
}	

if($q ==1){	
    $r = $rank[$q++];
	$s_0 = $score_total[$r];
	$r = $rank[$q];
	$s_1 = $score_total[$r];
	if($s_0 > $s_1){
        $t_0 = 1;
	    $t_1 = 2;
		$s = $s_0;
	}
	else{
	    $t_0 = 2;
	    $t_1 = 1;
		$s = $s_1;
	}
	$u = 0;
while (++$q<$count){
    $r = $rank[$q];
	if($score_total[$r]>$s){
	    $u = $s;
	    $s = $score_total[$r];
		$t_1 = $t_0;
		$t_0 = $q;
	}	
	else if($score_total[$r]>$u){
	    $u = $score_total[$r];
		$t_1 = $q;
	}
}
    $f_rank = array("$rank[0]","$rank[$t_0]","$rank[$t_1]");
    //print_r($f_rank);
}	
	
if($q ==2){	
    $t = 2;
    $r = $rank[$q];
	$s = $score_total[$r];
while (++$q<$count){
    $r = $rank[$q];
	if($score_total[$r]>$s){
	    $s = $score_total[$r];
		$t = $q;
	}	
    }
    $f_rank = array("$rank[0]","$rank[1]","$rank[$t]");
    //print_r($f_rank);
}

if($q==3){
    $f_rank = array("$rank[0]","$rank[1]","$rank[2]");
    //print_r($f_rank);
}

$name = array("ch","jpn","kor","south","ds","us","west","hotpt","bbq","nm");
$c_0 = $f_rank[0];
$c_1 = $f_rank[1];
$c_2 = $f_rank[2];
$class = array("$name[$c_0]","$name[$c_1]","$name[$c_2]");

print_r($class);

?><br><br>
