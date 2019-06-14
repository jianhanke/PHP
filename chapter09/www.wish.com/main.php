<?php 

	require './common/function.php';
	require './common/init.php';

	$sql="select * form wish";
	$result=@mysqli_query($link,$sql) or exit('sql 错误'.mysqli_error());

	$row=mysqli_fetch_assoc($result);
	




require './main.html';
 ?>