<?php 
require './conn.php';
    $id=$_GET['id'];
    $sql="delete from employee where id=$id";
    $result=mysqli_query($link,$sql);
    if($result){
        header("location:./showList.php");
    }else{
        echo '删除失败';
    }
 ?>