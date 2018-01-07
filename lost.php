<?php
if ( empty($PID) ) {
	require_once("error.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>您的访问出错</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="大学生创新创业基地管理委员会" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/check.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body onbeforeunload="return '真的要关闭此窗口吗?'">
<h1>
<br />
<b><a style="font-size: 2rem; color: rgba(255,0,0,100);">访问出错</a></b>
<br />
</h1>
<h1>
请您将此工作证归还
</h1>
<div class="main-agileits">
<!--form-stars-here-->
	<div class="form-w3-agile">
        <h1>
        为什么来到这儿？
        </h1>
	<h1>
	<b><a style="font-size: 2rem; color: rgba(255,0,0,0.7);">这个工作证不属于你</a></b>
	<br />
	</h1>
	<hr />
	<h2 style="color: rgba(255,255,255,1);">
	请您将此工作证归还<br />它的主人或许正需要它<br />您可以这样联系TA<br />
	</h2>
	<br />
	<img src="images/photo/<?php echo $MSG[3]; ?>.jpg"  alt="PIC" style="width: 8rem"/>
	<h1><?php echo $MSG[3]; ?></h1>
	<h1><?php echo $MSG[5]."-".$MSG[6]; ?></h1>
	<h1><b>电话: </b> <a title="点击拨号" href="tel:<?php echo $MSG[10]; ?>"><?php echo $MSG[10]; ?></a></h1>
	<h1><a>QQ: <a title="QQ联系我" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $MSG[9]; ?>&site=qq&menu=yes"><?php echo $MSG[9]; ?></a></b></h1>
    <hr />
    <h1>希望您能尽快归还</h1>
    <h1>感谢您的配合</h1><!--
		<div class="submit-w3l">
			<input type="submit" name="submit" value="返回" onclick="javascript:window.history.back(-1);">
		</div>-->
	</div>
</div>
<!--//form-ends-here-->
<!-- copyright -->
	<div class="copyright w3-agile">
	<p>Copyright &copy; 2017-<?php echo date("Y"); ?> <a class='banquan' target='_blank' href='//covear.top/'>David Deng</a><br /><a href="http://www.miitbeian.gov.cn/" target="_blank">湘ICP备17019987号</a> <a title="View Information" href="http://icp.chinaz.com/info?q=covear.top" target="_blank">·</a> Sponsored by <a target="_blank" href="https://www.aliyun.com/">Aliyun</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

</body>
</html>
