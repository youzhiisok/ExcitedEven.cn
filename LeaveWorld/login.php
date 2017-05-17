<?php 
	include_once 'conn.php';
	mysql_query("set names 'utf8'");
?>
<head>用户登录</head>
<form method="post">
名字:<input type="text" name="name"><p>
密码:<input type="password" name="pwd"><p>
<input type="submit" value="登录" name="sub">
<input type="button" onclick="window.location.href='index.php'" value="返回">
</form>
<?php 
	if (isset($_POST["sub"]))
	{
		$name=$_POST["name"];
		$pwd=$_POST["pwd"];
		if ($name!=null&&$pwd!=null)
		{
			$result=mysql_fetch_array(mysql_query("select * from tb_user where pwd='$pwd' AND name='$name' AND state=1"));
			if($result["name"]!=null)
			{
				Header("Location:http://www.excitedeven.cn/LeaveWorld/login_AC.php"); 
			}
			else 
				echo "用户名、密码错误或用户不存在!";
		}
	}
?>