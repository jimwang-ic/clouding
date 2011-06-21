
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>login</title>
    <meta name="description" content="Food" />
    <meta name="keywords" content="Food" />
	
	<style>
		body{text-align:center}
		div.welcome{color:green}
		div.error{color:red}
	</style>
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body style="text-align:center";>

  <div style="text-align:center">
	<span style="text-align:center"><strong>Foodbook</strong></span>
	<span><a href="register.php">註冊會員</a></span>
  </div>
  <h2><strong>Login</strong></h2>
  <?php
		echo '<form method="POST" action="connect.php">';
		echo 'Username：<input type="text" name="username" /><br />';
		echo 'Password：<input type="password" name="password" /><br />';
		echo '<input type="submit" value="登入" />';
		echo '</form>';
  ?>
</body>
</html>


