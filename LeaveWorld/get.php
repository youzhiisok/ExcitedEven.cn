<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	include 'conn.php';
	mysql_query("set names 'utf8'");
	$name=$_POST["name"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$sql="INSERT INTO message VALUES('','$name','$title','$content')";
	$ia=mysql_query($sql,$conn);
	echo mysql_error();
	if ($ia)
	{
		echo "留言成功";
	}
	mysql_close($conn);
?>
<input type="button" onclick="window.location.href='login_AC.php'" value="返回">
