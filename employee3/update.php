<?php 				
require './conn.php';


$id=$_POST['id'];

$name=$_POST['name'];
$gender=$_POST['gender'];
$birthdate=$_POST['birthdate'];
$department=$_POST['department'];
$remarks=$_POST['remarks'];

     if($_FILES['uploads']['error']==UPLOAD_ERR_OK){   								//就算长传的是空文件 ，也算是上传（上传错误而已 ），
	$postfix=strrchr($_FILES['picture']['name'], '.');
	$save='uploads/' . time() . "$postfix";	
	move_uploaded_file($_FILES['picture']['tmp_name'],$save);
	}
	if($_FILES['upload']['error']!==UPLOAD_ERR_CANT_WRITE)
		$save=$_POST['pictureHidden'];
	

	$sql = "update employee set  name ='$name',picture='$save',gender='$gender',birthdate='$birthdate',department='$department',remarks='$remarks' where id =$id";   //没有where 所有数据都会被覆盖。
	$result=mysqli_query($link,$sql);

	if($result){
		header("location:./info.php  ?id=$id");
		}else{
			echo '失败';
		}
 ?>

