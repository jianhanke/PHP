<?php 
    require('./conn.php');
    $sql="select * from work order by id desc";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    if(!empty($_POST)){
 
    if($row['User']==$_POST['username'] && $row['Password']==$_POST['password']){
        header('location:./showList.html');
      
    }else{
        exit('登陆失败');
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
            <form action="" method="post" >
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value=" " id="user" size="40" class="admin_input_style" autofocus="autofocus" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="pwd" value="" id="pwd" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                        <input type="button" value="注册" onclick="window.location.href='./enroll.php'">
 
                    </li>
                </ul>
            </form>
        </div>
    </div>

</div>
</body>
</html>