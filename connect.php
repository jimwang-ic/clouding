<?php 
	session_start(); 
?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

	//連接資料庫
	//只要此頁面上有用到連接MySQL就要include它
	include("mysql_connect.inc.php");
	$id = $_POST['username'];
	$pw = $_POST['password'];

	//echo $id." ".$pw.'<br>';
	//搜尋資料庫資料
	$sql = "SELECT * FROM member where ID = '$id'";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);

	//判斷帳號與密碼是否為空白
	//以及MySQL資料庫裡是否有這個會員
	//echo $row[1].'<br>';
	//echo $row[2].'<br>';
	if($id != null && $pw != null && $row[0] == $id && $row[3] == $pw)
	{
	        //將帳號寫入session，方便驗證使用者身份
	        $_SESSION['username'] = $id;
	        echo '登入成功!';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
	else
	{
	        echo '登入失敗!';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	}
	
	
	

?>