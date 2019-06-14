<?php 
    if(!empty($_POST)){
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $birthdate=$_POST['birthdate'];
        $department=$_POST['department'];
        $remarks=$_POST['remarks'];

$link = @mysqli_connect('localhost', 'root', 'zhao/980931','learn') or exit('连接数据库出错'.mysqli_connect_error());
mysqli_set_charset($link, 'utf8');
$sql = "insert into learn employee(name, gender, birthdate, department,remarks) values('$name', '$gender', 'birthdate', 'department','remarks')";
$result = @mysqli_query($link, $sql) or die('执行SQL出错'.mysqli_error($link));
echo '插入记录成功';
    }
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
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
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
                    <a href="#"><i class="iconfont"></i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="iconfont"></i>员工管理</a></li>
                        <li><a href="design.html"><i class="iconfont"></i>部门管理</a></li>
                        <li><a href="design.html"><i class="iconfont"></i>用户管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="iconfont"></i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="iconfont"></i>系统设置</a></li>
                        <li><a href="system.html"><i class="iconfont"></i>数据备份</a></li>
                        <li><a href="system.html"><i class="iconfont"></i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="iconfont"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">员工管理</a><span class="crumb-step">&gt;</span><span>新增员工</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>姓名：</th>
                                <td>
                                    <input class="common-text required" name="name" size="12" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th width="120"><i class="require-red">*</i>性别：</th>
                                <td>
                                    <select name="gender" class="required">
                                        <option value="">请选择</option>
                                        <option value="man">男</option><option value="woman">女</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>出生日期：</th>
                                <td>
                                    <input class="common-text required" name="birthdate" size="12" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>部门：</th>
                                <td><input class="common-text" name="department" size="12" value="" type="text"></td>
                            </tr>
                            <!-- <tr>
                                <th><i class="require-red">*</i>照片：</th>
                                <td><input name="smallimg" id="" type="file"><input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/></td>
                            </tr> -->
                            <tr>
                                <th>备注：</th>
                                <td><textarea name="remarks" class="common-textarea" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onClick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>