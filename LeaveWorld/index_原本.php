<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<?php 
	include_once 'conn.php';
	mysql_query("set names 'utf8'");
?>

<center>

欢迎来到留言板！<br>

<center><input type="button" onclick="window.location.href='login.php'" value="登录">

<input type="button" onclick="window.location.href='error.php'" value="注册"></center>


    </center>

<br>

    <center> <textarea rows="10" cols="80" name="content" >
    
    
<?php
	$sql="select * from message order by id desc";
	$query=mysql_query($sql);
	while($result=mysql_fetch_array($query)){
		echo "---------------------------------------------------------------------------------\n";
		echo "姓名:".$result['name']."\t\t\t";echo "主题:".$result['title']."\n";echo "内容:".$result['content']."\n\n\n";
	}
?>
    
</textarea><br>

    </center>
    
</form>

</body>

</html>