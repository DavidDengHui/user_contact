<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>大学生创新创业基地管理委员会</title>
</head>
<body>
<center>
<h1>
建设中
</h1>
</h2>
<?php
$id=$_REQUEST['pid'];
if ( empty($id) ) {
	echo "Error";
	$id = 20170000;
}
else {
	echo $id;
}
?>
</h2>
<h3>
<a title="点击查看个人信息" href="/self.php?pid=<?php echo $id; ?>" tar_get="_blank">个人信息</a>
</h3>
</center>
</body>
</html>
