<?php
if (!isset($_SESSION)) {
    session_start();
}

include("mysql_connect.inc.php");


$myTable = 'article';

//定義 $errMsg 變數, 用以存放錯誤訊息
$errMsg='';



if ( isset($_POST['message']) && $_POST['message'] !='' ) {
  $message=$_POST['message'];
} else {
  $message='';
  $errMsg.='您忘記輸入留言<br />';
}

$name = $_SESSION['username'];
$class = $_POST['class'];
$score = $_POST['score'];
$region = $_POST['region'];
$title = $_POST['title'];
  
if ($errMsg ==''){
  //設定使用台北時區
  date_default_timezone_set('Asia/Taipei');
  //將姓名、留言、目前的日期時間寫入資料庫
	
  $sql=sprintf("INSERT $myTable (author,class,score,region,date,title,content)
                VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
               $name,
               $class,
               $score,
               $region,
               date("Y-m-d H:i:s"),
               $title,
               $message );
               
  $result=mysql_query($sql);
  if (mysql_affected_rows() > 0){
    echo '已經成功新增一筆留言<br />';
  }
  else {
    echo '無法新增留言<br />';
  }
}
//如果 $errMsg 不是空字串, 便顯示錯誤訊息
else {
  echo $errMsg . '請按瀏覽器的上一頁鈕重新輸入<br />';
}

echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

?>