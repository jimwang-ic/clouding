<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="register_finish.php">
<p><strong>請填寫註冊資料</strong></p>
帳號：<input type="text" name="id" /> <br>
密碼：<input type="password" name="pw" /> <br>
再一次輸入密碼：<input type="password" name="pw2" /> <br>
性別：<select name="gender">
    <OPTION VALUE="male">男</Option> 
	<OPTION VALUE="female">女</Option>
     </select> <br>
地區：<select name="region">
	<OPTION VALUE="taipei">台北市</Option> 
	<OPTION VALUE="n_taipei">新北市</Option>
	<OPTION VALUE="keelung">基隆市</Option> 
	<OPTION VALUE="kaohsiung">高雄市</Option>
	<OPTION VALUE="taichung">台中市</Option> 
	<OPTION VALUE="hsinchu">新竹縣</Option>
	<OPTION VALUE="tainan">台南市</Option>
	<OPTION VALUE="taoyuan">桃園縣</Option>
	</select> <br>
<input type="submit" name="button" value="確定" />
</form>