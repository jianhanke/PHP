<?php 	
$id=$_GET['id'];
require './conn.php';
if(isset($id)){

if(!empty($_POST)){
	$pwd=$_POST['psd1'];
	$sql=" update work set Password='$pwd' where id=$id ";
	$result=mysqli_query($link,$sql);
	header("location:./login.php");
	}
}
else{
	header("location:login.php");
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<title> 修改密码</title>
	<form action="" method="post">
	密码: <input type="text" name="psd1"  >
	<br>
	重复密码: <input type="text" name="psd2" >
	<br>
		<input type="submit" value="提交">

	</form>
</body>
</html>