<?php
 	define('HOST','localhost');
 	define('USER','root');
 	define('PASS','zhao/980931');
 	define('DB','learn');
 	$link = @mysqli_connect(HOST,USER,PASS,DB) or exit('连接错误'.mysqli_connect_error());

 	mysqli_set_charset($link,'utf8');
 ?>