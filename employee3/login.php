<?php 
    session_start();

    if(!empty($_POST)){
    $user=$_POST['username'];
    $psd=$_POST['pwd'];

    require './conn.php';
    $sql="select * from work where User=$user";
    $result=mysqli_query($link,$sql);
     $row=mysqli_fetch_assoc($result);
    if($row){
        if($psd==$row['Password']){
            
            // setcookie('history',$row['Id']);
            $_SESSION['history']= $row['Id'];  //双引号，单引号，都不用加
          header("location:./showList.php");
          
        }else{
           die ("密码错误");
        }
    }else{
        die('用户名错误');
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="order by dede58.com"/>
    <title>『豪情』后台管理</title>
	<link rel="stylesheet" type="text/css" href="css/admin_login.css"/>
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" id="user" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="pwd" value="" id="pwd" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" autofocus="autofocus"/>
                         <input type="button" value="注册" onclick="window.location.href='./enroll.php'">
                    </li>
                </ul>
            </form>
        </div>
    </div>
    </div>
</body>
<script>
    window.onload = function() {
  document.getElementById("user").focus();
}
</script>
</html>