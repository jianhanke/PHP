<?php 

$arr = array(0.1=>'aa','1'=>'bb');
    echo $arr[1];

    $str = 'Heng_yang';
$arr = explode('_',$str);
$res = implode('',$arr);
echo $res;

$num = 10;
function multiply(){
global $num;
return $num*10;
}
echo multiply();

$arr = array(1,2);
foreach($arr as $v){
++$v;
}

print_r($arr);
$arr = array(5=>'aa','k'=>'bb','cc');
print_r($arr);
 echo 'Hello', 'World'; 
echo 'hello' + 128 ;


setcookie("admin","qiao");
echo $_COOKIE['admin']



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 <form action="../form.php">
<input type="submit">
</form>

 	
 </body>
 </html>