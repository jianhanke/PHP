<?php 
	require './conn.php';
	if(!empty($_POST)){
		$user=$_POST['user'];
		$pwd=$_POST['pwd'];
		$sql="insert into work(User,Password) value('$user','$pwd')";
		$result= @mysqli_query($link,$sql) or exit('注册失败'.mysqli_error($link));
		if($result){
			header('location:./login.php');

		}else{
			exit('注册失败');
		}
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	.title{
		text-align:center ;
	}
	.table{
		text-align:center;
	}

	</style>
</head>
<body>
		<h2 class="title">       欢迎注册后台账号</h2>
		<br /><br />

		<form action="" method="post" enctype="multipart/form-data" class="table">

		 <a > 请输入注册账号</a>
		<input type="text" vaule="账号" name="user" >
		
		<br /><br />
		
		请输入注册密码
		<input type="text" vaule="密码" name="pwd">		
		<br />
		<input type="submit" value="提交" >

		</form>
	

</body>
</html>