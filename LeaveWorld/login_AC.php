<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板</title>
</head>
<body>
<?php 
	include_once 'conn.php';
	mysql_query("set names 'utf8'");
?>

<center>

欢迎来到留言板！<br>

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
    
    <center>
	<input type="button" onclick="window.location.href='leave.php'" value="发表">
	<input type="button" onclick="window.location.href='index.php'" value="注销">
	</center>

</form>

</body>

</html>