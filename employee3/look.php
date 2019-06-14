<?php 
$id=$_GET['id'];
require './conn.php';

$sql="select * from employee where id=$id";
$result=mysqli_query($link,$sql);

$row=mysqli_fetch_assoc($result);

if(isset($_COOKIE['history'])){
    $history_arr=explode(',',$_COOKIE['history']);
    foreach ($history_arr as $k => $v) {
        if($v==$id){
            unset($history_arr[$k]);
        }
    }
        if(count($history_arr)>3){
            array_shift($history_arr);
        }
        $history_arr[]=$id;
        $history=implode(',',$history_arr);
        setcookie('history',$history);
    }else{
        $history_arr =array($id);
        setcookie('history',$id);
    }
    if(isset($_GET['action'])){
        if($_GET['action']=='clear'){
            $history_arr=array();
            setcookie('history','',time()-1);
        }
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

    <style> 
    *{
        margin:0;
        padding: 0;
    }
    ul{
        {list-style: none};
    }
  

    </style>
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
    <div class="main-wrap

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="iconfont">&#xe630;</i><a href="#">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="showList.php">员工管理</a><span class="crumb-step">&gt;</span><span>查看信息</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="update.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <table class="insert-tab" width="80%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>姓名：</th>
                                <td>
                                    <input class="common-text required" name="name" size="12" value="<?php echo $row['name']; ?>" type="text">
                        </td>
                            </tr>
                            <tr>

                                    <th><i class="require-red">*</i>照片: </th>
                        <th>
                                    
                                    <img src=' <?php echo $row['picture'] ?> ' width="100" height="100" align="left">            
                        </th> 
                        </tr>
                           
                         
                            <tr>
                                <th width="120"><i class="require-red">*</i>性别：</th>
                                <td>
                                    <select name="gender" class="required">
                                        <option value="">请选择</option>
                                        <option value="男"
                                        <?php echo $row['gender']=='男' ? 'selected="selected"' : '' ?>>男
                                        </option>
                                        <option value="女"
                                        <?php echo $row['gender']=='女' ? 'selected="selected"' : '' ?>>女
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>出生日期：</th>
                                <td>
                                    <input class="common-text required" name="birthdate" size="12" value="<?php echo $row['birthdate']; ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>部门：</th>
                                <td><input class="common-text" name="department" size="12" value="<?php echo $row['department']; ?>" type="text"></td>
                            </tr>
                            <!-- <tr>
                                <th><i class="require-red">*</i>照片：</th>
                                <td><input name="smallimg" id="" type="file"><input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/></td>
                            </tr> -->
                            <tr>
                                <th>备注：</th>
                                <td><textarea name="remarks" class="common-textarea" cols="30" style="width: 98%;" rows="10"><?php echo $row['remarks'] ?></textarea></td>
                            </tr>
                            <tr>  
                    
            </tr>
                            <tr>
                                <th></th>
                                <td>
                                   
                                    <input class="btn btn6" onClick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
                <p> 最近查看的员工:</p>
                <ul>
                <?php 
                foreach ($history_arr as $v){
                    $sql="select * from employee where id=$v";
                   $result =mysqli_query($link,$sql);
                    $row=mysqli_fetch_assoc($result);
                    echo '<li> <a href="info.php ?id='.$row['id'].'"> '.$row['name'].'</li>';
                }
                ?>
                <li> <a href="?id=<?php echo $id; ?>&action=clear "> 【清除历史】 </li>
            
                </ul>
                 
            

            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>