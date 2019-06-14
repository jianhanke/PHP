<?php
session_start();
require('./conn.php');
    //if(isset($_COOKIE['history'])){
  //  $id=$_COOKIE['history'];
    if(isset($_SESSION['history'])){
        /*echo '<script >
            alert("登陆成功"); 
            </script> '; */
        $id=$_SESSION['history'];
    $sql="select * from work where Id='$id' ";
       $result=mysqli_query($link,$sql);
           $row=mysqli_fetch_assoc($result); 
}else{
    header("location:./login.php");
}
$sql = "select * from employee order by id desc";
// $sql = "select name ,picture , gender, birthdate ,department ,remarks from employee order by id desc";
// order by id desc "id"以降序方式排列 默认升序
if (!empty($_POST)) {
	$searchSort =$_POST['search-sort'];
	$keywords =$_POST['keywords'];
	$sql="select * from employee where $searchSort like '%$keywords%' order by id desc";
}
    $result = mysqli_query($link, $sql) or die('查询失败'.mysqli_error($link));
    
        
     
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="order by dede58.com"/>
    <title>员工管理系统 </title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
   
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="#">首页</a></li>
                <li><a href="https://www.baidu.com/">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
            
                <li><a href="#">管理员: <?php echo  $row['Id'] ?> </a></li>
                <li><a href="revisePwd.php?id='<?php echo $row['Id']; ?> ' ">修改密码</a></li>
                <li><a href="logout.php" > 退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="iconfont">&#xe641;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="showList.php"><i class="iconfont">&#xe660;</i>员工管理</a></li>
                        <li><a href="#"><i class="iconfont">&#xe602;</i>部门管理</a></li>
                        <li><a href="#"><i class="iconfont">&#xe612;</i>用户管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="iconfont">&#xe603;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="./system.php"><i class="iconfont">&#xe61c;</i>系统设置</a></li>
                        <li><a href="#"><i class="iconfont">&#xe678;</i>数据备份</a></li>
                        <li><a href="#"><i class="iconfont">&#xe639;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="iconfont">&#xe630;</i><a href="#">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">员工管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">搜索范围:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="name">姓名</option>
                                    <option value="gender">性别</option>
                                    <option value="department">部门</option>
                                    <option value="remarks">备注</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <div class="result-list">
                    <a id="addEmployee" href="insert.php"><i class="iconfont">&#xe695;</i>新增员工</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                    
                        <th>姓名</th>
                        <th>照片</th>
                        <th>性别</th>
                        <th>出生日期</th>
                        <th>部门</th>
                        <th width="40%">备注</th>
                        <th>操作</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><img src='<?php echo $row['picture']?>' height="200" weight="200" text-align: center></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['birthdate'] ?></td>
                            <td><?php echo $row['department'] ?></td>
                            <td><?php echo $row['remarks'] ?></td>
                            <td>
                                <a class="link-update" href="./modify.php ?id=<?php echo $row['id']; ?>">修改</a>
                                <a class="link-del" href="./delete.php ?id=<?php echo $row['id']; ?>">删除</a>
                                <a class="link-look" href="./look.php ?id=<?php echo $row['id'] ?>">查看</a>
                            </td>
                        </tr>
                    <?php endwhile;  ?>
                </table>
                
                <div class="list-page"> <?php echo mysqli_num_rows($result); ?> 条 1/1 页</div>
              
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>