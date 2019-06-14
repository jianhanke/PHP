<?php 
    require './conn.php';
    $sql="select * from employee";
    $result=@mysqli_query($link,$sql) or die('查询失败'.mysql_error($link));
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
                    <a href="#"><i class="iconfont">&#xe641;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="iconfont">&#xe660;</i>员工管理</a></li>
                        <li><a href="design.html"><i class="iconfont">&#xe602;</i>部门管理</a></li>
                        <li><a href="design.html"><i class="iconfont">&#xe612;</i>用户管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="iconfont">&#xe603;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="iconfont">&#xe61c;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="iconfont">&#xe678;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="iconfont">&#xe639;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="iconfont">&#xe630;</i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">员工管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">

                
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
                    <a id="addEmployee" href="insert.html"><i class="iconfont">&#xe695;</i>新增员工</a>
                </div>
            </div>
            <div class="result-content">
            <h2> 总共   <?php echo mysql_num_rows($result); ?>条记录</h2>
            <table border=" ">
                <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        

                </tr>

            </table>



                <table class="result-tab" width="100%">
                    <tr>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>出生日期</th>
                        <th>部门</th>
                        <th>备注</th>
                        <th>操作</th>
                    </tr>
                        <?php while($row=mmysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td>张小明</td>
                        <td>男</td>
                        <td>2014-03-15</td>
                        <td>技术部</td>
                        <td>唱歌非常棒</td>
                        <td>
                            <a class="link-update" href="#">修改</a>
                            <a class="link-del" href="#">删除</a>
                        </td>
                    </tr>
                    <tr>
                        <td>李晓敏</td>
                        <td>女</td>
                        <td>2013-12-30</td>
                        <td>市场部</td>
                        <td>毕业于安阳师范学院</td>
                        <td>
                            <a class="link-update" href="#">修改</a>
                            <a class="link-del" href="#">删除</a>
                        </td>
                    </tr>
        <h2>共有 <?php echo mysqli_num_rows($result); ?>条记录</h2>
        <table border="0">
      <tr>
                        <th>序号</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>出生日期</th>
                        <th>部门</th>
                        <th>备注</th>
        </tr>
    <?php while($row=mysqli_fetch_assoc($result)) : ?>
                  <tr>
                        <th><?php echo $row['id']; ?></th>
                        <th><?php echo $row['name']; ?></th>
                        <th><?php echo $row['gender']; ?></th>
                        <th><?php echo $row['birthdate']; ?></th>
                        <th><?php echo $row['department']; ?></th>
                        <th><?php echo $row['remarks']; ?></th>
                    </tr>
    <?php endwhile; ?>
    </table>
    </table>  
                   

                </table>
                <div class="list-page"> <?php echo mysqli_num_rows($resulet) ?> 条 1/1 页</div>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>