<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$row=5;
	$col=10;
	echo '<table>';
	for($i=1;$i<=$row;++$i){
		echo '<tr>';
		for($j=1;$j<=$col;++$j){
			echo '<td></td>';
		}
		echo '</tr>';
	}
	echo '</table>';

	echo '到底那个错了';
?>
	 
	
</body>
</html>