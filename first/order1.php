<?php
$goods = array(
	  	'mainboard' => array('name'=>'主板','price'=>379,'city'=>'广东'),
	  	'videoCard' => array('name'=>'显卡','price'=>799,'city'=>'上海'),
	  	'hardDisk' => array('name'=>'硬盘','price'=>589,'city'=>'北京')
);
$total=0;
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table {border-collapse: collapse;border: solid #ccc 1px;border-radius: 6px;text-align:center;}
		tr,td{ border:solid #ccc 1px; padding:10px;}
		tr:nth-child(1){ background-color:#dce9f9;}
		td:nth-child(1){ width:70px;}
		tr:nth-child(5){ text-align:right; }
		span{ color:red;font-weight:bold;}
		h2{ text-align:center; margin:9px 0;}
	</style>
</head>
<body>
<table>
				<caption>商品订货单</caption>
	<tr><th>商品</th> <th>单价</th> <th>产地</th> <th>数量</th> <th>总价</th> </tr>
	<?php foreach($goods as $k => $v): ?>
	 <tr>
			<th><?php echo $v['name']; ?></td>
			<td><?php echo $v['price'] ?></td>
			<td><?php echo $v['city'] ?></td>
			<td><?php echo $_POST[$k] ?></td>
			<td> <?php $money=$_POST[$k]*$v['price']; echo $money ;$total+=$money?></td>
	 </tr>
    <?php endforeach ?>
     
	 	<tr> 
		<td colspan="5">总计:<?php echo$total ?></td>
	 	</tr>

</table>
	
</body>
</html>