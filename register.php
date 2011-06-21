<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Post Article</title>
    <meta name="description" content="Food" />
    <meta name="keywords" content="Food" />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>
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