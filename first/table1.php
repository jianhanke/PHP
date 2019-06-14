<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	
	
	</style>
</head>
<body>
	
	<?php 
		$row=5;
		$col=10;
	echo '<table>';

		echo '<tr>';

		for($i=1;$i<=$col;++$i){
			echo '<th></th>';
		}
		echo '</tr>';
		for($i=1; $i<=$row;++$i){

			$color=($i %2==0) ? 'gray' : 'white';
			echo '<tr class="' /$color .'
				echo '<tr>';

				for($j=1;$j<=$col;++$j){
					echo '<td></td>';
				}
				echo '</tr>';
		}
			echo '</table>';

	 ?>
	
</body>
</html>