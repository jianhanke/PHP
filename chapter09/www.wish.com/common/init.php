<?php
// 在项目中设置时区，以适应各种服务器环境
/*date_default_timezone_set('Asia/Shanghai');
mb_internal_encoding('UTF-8');
// 连接数据库
$link = @mysqli_connect('localhost', 'root', 'zhao/980931', 'php_wish');
if (!$link) {
    exit('数据库连接失败：' . mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8');*/

date_default_timezone_set('Asia/Shanghai');		//设置时区
mb_internal_encoding('UTF-8');	//设置编码

$link = @mysqli_connect('localhost','root','zhao/980931','php_wish') or exit('数据库连接失败'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
