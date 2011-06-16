<html> <!-- login介面 -->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>login</title>
	<style>
		body{text-align:center}
		div.welcome{color:green}
		div.error{color:red}
	</style>
</head>

<body style="text-align:center">

  <p>
  <strong>Login</strong><br /><p/>
  <?php
		echo '<form method="POST" action="connect.php">';
		echo 'Username：<input type="text" name="username" /><br />';
		echo 'Password：<input type="password" name="password" /><br />';
		echo '<input type="submit" value="登入" />';
		echo '</form>';
  ?>
</body>
</html>


