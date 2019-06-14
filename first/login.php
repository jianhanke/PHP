<?php
		var_dump($_GET);
		if(isset($_GET['username'])&&isset($_GET['password'])){
			echo $_GET['username'];
			echo $_GET['password'];
					}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="get">
	用户名: <input type="text" name="username">
	密码  : <input type="password" name="password">
	<input type="submit" valie="登录">
	</form>
	<?php

		if(isset($_POST['username'])&&isset($_POST['password'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
		}
	?>
	
</body>
</html>