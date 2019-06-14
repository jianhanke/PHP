<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$action = isset($_GET['action']) ? $_GET['action'] : '';
$num1 = isset($_GET['num1']) ? (float)$_GET['num1'] : 0;
$num2 = isset($_GET['num2']) ? (float)$_GET['num2'] : 0;
switch ($action) {
	case 'add':
		echo "$num1 + $num2 = ", $num1 + $num2;
		break;
	case 'sub':
		echo "$num1 - $num2 = ", $num1 - $num2;
		break;
	case 'mul':
		echo "$num1 * $num2 = ", $num1 * $num2;
		break;
	case 'div':
		echo "$num1 / $num2 = ", $num2 ? ($num1 / $num2) : '除数不能为0';
		break;
	default:
		echo '参数不正确';
}
</body>
</html>