<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<from action="form.php" method="post" enctype="multipart/form-data">
		账户:  <input type="text"     name="user" value=""> <!--文本框--><br />
		密码:   <input type="password" name="pwd" value=""> <br />

		<input type="file" name="upload">
		<input type="hidden" name="id" value="2">
		<input type="reset" value="重置">
		<input type="submit" value="提交">
	
		<br />
		<br />
		<!--单选框-->
		<input type="radio" name="gender" value="m" checked>男
		<input type="radio" name="w">女

		<br />
		<br />
		<!--复选框-->
		<input type="checkbox" name="hobby[]" value="swimming"> 游泳
		<input type="checkbox" name="hobby[]" value="reading"> 读书
		<input type="checkbox" name="hobby[]" value="bobby[]"> 跑步

		<br />
		<br />

		<textarea>
			<!--文本内容-->
		</textarea>
		<br />
		<br />

		<select name="area">
			<option selected>---请选择--</option>
			<option value="Berjing">  北京</option>
			<option value="Shenzhen"> 深圳</option>
			<option value="Shanghai"> 上海</option>
			</select>
			<br />
			<br />

			<label> <input type="radio" name="gender" value="m">男</label>
			<label> <input type="radio" name="gender" value="w">女</label>

	</from>

	 <form name="f5" target="_blank" action="http://www.qq.com/">

	请输入关键字:<input type="text" name="wd" size="42" maxlength="100" >
	<input name="" type="submit" value="百度一下" >
	<input name="" type="reset" value="重写" >
		</form> 

		<form name="f6" action="http://www.baidu.com/s" target="_blank">
<input type="hidden" name="wd" value="site:www.50css.com" />
<input name="" type="submit" value="点击查看网林网站被百度收录的情况" />
</form>
	
</body>
</html>