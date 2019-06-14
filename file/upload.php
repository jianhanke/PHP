<?php 

if(isset($_FILES['upload'])){
	if($_FILES['upload']['error']!==UPLOAD_ERR_OK){
		
	}
	$save='./uploads/'. time() .'.dat';
	if(!move_uploaded_file($_FILES['upload']['tmp_name'],$save)){
		
	}
	echo "上传成功";
}


 ?>