<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>为什么没有空格</title>
	
</head>
<body>
<?php
echo '<table>';
for ($i = 1; $i <= 9; ++$i) {       // 九九乘法表的层数
    echo '<tr>';
    for ($j = 1; $j <= $i; ++$j) {  // 单元格个数
        echo "<td>{$j}×{$i}=" . $j * $i . '</td>';
    }
    echo '</tr>';
}	
echo '</table>';


?>
</body>
</html>