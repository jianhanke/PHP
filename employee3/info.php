<?php 
$id=$_GET['id'];
require './conn.php';
$sql    ="select * from employee where id= $id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="order by dede58.com"/>
    <title>员工管理系统</title>
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
                <li><a href="#">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
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
                    <a href="#"><i class="iconfont">&#xe603;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="#"><i class="iconfont">&#xe61c;</i>系统设置</a></li>
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
            <div class="crumb-list"><i class="iconfont">&#xe630;</i><a href="#">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="showList.php">员工管理</a><span class="crumb-step">&gt;</span><span>员工详情</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th>姓名：</th>
                                <td><?php echo $row['name']; ?></td>
                            </tr>
                            <tr>
                                <th>照片</th>
                               <th>
                               <img src='<?php echo $row['picture']; ?>' width="100" height="100" align="left">  
                                </th>
                            </tr>


                            <tr>
                                <th width="120">性别：</th>
                                <td><?php echo $row['gender']; ?></td>
                            </tr>
                            <tr>
                                <th>出生日期：</th>
                                <td><?php echo $row['birthdate']; ?></td>
                            </tr>
                            <tr>
                                <th>部门：</th>
                                <td><?php echo $row['department']; ?></td>
                            </tr>
                            <!-- <tr>
                                <th><i class="require-red">*</i>照片：</th>
                                <td><input name="smallimg" id="" type="file"><input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/></td>
                            </tr> -->
                            <tr>
                                <th>备注：</th>
                                <td><?php echo $row['remarks']; ?></td>
                            </tr>
                              <tr>
                               
                            </tr>
                            <tr>
                                <th></th>
                                <td><input class="btn btn6" onClick="history.go(-2)" value="返回主页" type="button"></td>
                            </tr>
                        </tbody></table>
            </div>
        </div>
                    
    </div>
    <!--/main-->
</div>
</body>
</html>