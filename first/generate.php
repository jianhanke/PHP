<?php 
function generate($element){
	$items='';
	$default=['tag'=>'','text'=>'','attr'=>[],'option'=>[],'default'=>''];
	foreach ($elemet as $v) {
		$v=array_merge($default,&v);
			$generate='generate_'.array_shift($v);
			
			$items .='<tr>' .call_user_func_array($generate,$v) .'</tr>';
		
	}
	return "<table>$items</table>";
}
?>
