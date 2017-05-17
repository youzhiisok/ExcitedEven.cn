<html>
<head>
<meta charset="utf-8">
<title>留言板</title>
</head>
<body>
<form action="" method="post">
名字:<input type="text" name="name"><p>
密码:<input type="password" name="pwd"><p>
确认:<input type="password" name="pwd_a"><p>
<input type="submit" value="提交" name="sub">
<input type="button" onclick="window.location.href='index.php'" value="返回">
</form>
</body>
</html>
<?php
	include_once 'conn.php';
	mysql_query("set names 'utf8'");
	if (isset($_POST["sub"]))
	{
		if ($_POST["name"]!=null)
		{
			$name=$_POST["name"];
			if($_POST["pwd"]!=null&&$_POST["pwd_a"]!=null)
			{
				if ($_POST["pwd"]==$_POST["pwd_a"])
				{
					$result=mysql_fetch_array(mysql_query("select * from tb_user where name='$name'"));
					if($result["name"]==null)
					{
						$pwd=$_POST["pwd"];
						$sql="insert into tb_user values('','$name','$pwd')";
						$ia=mysql_query($sql,$conn);
						echo mysql_error();
						if ($ia)
						{
							echo "注册成功!";
						}
						mysql_close($conn);
					}
					else 
						echo "用户名已存在";
				}
				else 
					echo "两次密码不一样!";
			}
			else 
				echo "密码不能为空!";
		}
		else
			echo "用户名不能为空!";
	}
?>