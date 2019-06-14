<?php 
if(!empty($_FILES['upload'])){

if(isset($_FILES['upload'])){
	if($_FILES['upload']['error']!==UPLOAD_ERR_OK){
		exit('上传失败');
	}
	$postfix=strrchr($_FILES['upload']['name'], '.');

	$save='upload/' . time() .  ".$postfix";
	if(!move_uploaded_file($_FILES['upload']['tmp_name'],$save)){
		exit('上传失败，无法将文件保存到制定位置');
	}
	echo "上传成功";
}else{
	exit('没有文件');
}
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
 	<input type="hidden" name="MAX_FILE_SIZE" >
 	<input type="file" name="upload">
 	<input type="submit" value="提交文件">
 	</form>
 	
 </body>
 </html>