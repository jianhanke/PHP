<?php
require './conn.php';
require './functions/upload.php';
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$department = $_POST['department'];
$remarks = $_POST['remarks'];

$file = $_FILES['picture'];
if ($file['error'] == 4) {
	$newname = $_POST['picture'];
} else {
	$newname = upload($file);
}

$sql = "update employee set name = '$name', gender = '$gender', birthdate = '$birthdate', department = '$department', picture = '$newname', remarks = '$remarks' where id = $id";
$result = mysqli_query($link, $sql);
if ($result) {
	header("location:./info.php?id=$id");
} else {
	echo '保存失败！';
}