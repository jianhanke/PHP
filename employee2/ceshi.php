<?php 
    require './conn.php';
    $sql="select * from employee";
    $result=@mysqli_query($link,$sql) or die('查询失败'.mysql_error($link));
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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
	
</body>
</html>