<?php
if ( empty($PID) ) {
	require_once("error.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>信息录入</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="大学生创新创业基地管理委员会" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/check.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="snow-container">
			  <div class="snow foreground"></div>
			  <div class="snow foreground layered"></div>
			  <div class="snow middleground"></div>
			  <div class="snow middleground layered"></div>
			  <div class="snow background"></div>
			  <div class="snow background layered"></div>
			</div>
<h1>
<br />
<b><a style="font-size: 2rem;">信息录入</a></b>
<br />
大学生创新创业基地管理委员会
</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2 class="sub-agileits-w3layouts">
			    您好，<?php echo $MSG[3]; ?>！<br />
			    您是<?php echo $MSG[7].$MSG[8]; ?>，<br />
			    请如实填写以下信息以作登记！<br />
			</h2>
			
			<form action="" method="post">
					<input type="text" name="dept" placeholder="学院，如：通号学院" required="" />
					<input type="text" name="class" placeholder="班级，如：通信171" required="" />
					<input type="text" name="sid" placeholder="学号，如：201730400000" required="" />
					<input type="text" name="tel" placeholder="电话，如：18173300000" required="" />
					<input type="text" name="qq" placeholder="QQ，如：1187520000" required="" />
				<div class="submit-w3l">
					<input type="submit" name="submit" value="提交信息">
					<?php
					if(!empty($_POST['submit'])){
	                    $SQL = "update users set state=1,dept='".$_POST['dept']."',class='".$_POST['class']."',qq='".$_POST['qq']."',tel='".$_POST['tel']."',sid='".$_POST['sid']."' where pid='".$PID."'";
				        $INF =  mysqli_query($CNCT, $SQL);
				        echo "<p style='color: white;'>【！录入成功！】<br />";
				        echo "接下来将会跳转到<b><i>通讯录</i></b><br />";
				        $url = "https://sc.covear.top/?pid=".$PID;
				        header("refresh:3;url=".$url);
				        echo "提示：您下次扫码将会直接进入<b><i>通讯录</i></b></p>";
				        exit;
                    }
					?>
				</div>
			</form>
		</div>
		</div>
<!--//form-ends-here-->
<!-- copyright -->
	<div class="copyright w3-agile">
        <p>Copyright &copy; 2017-<?php echo date("Y"); ?> <a class='banquan' target='_blank' href='//covear.top/'>David Deng</a><br /><a href="http://www.miitbeian.gov.cn/" target="_blank">湘ICP>备17019987号</a> <a title="View Information" href="http://icp.chinaz.com/info?q=covear.top" target="_blank">·</a> Sponsored by <a target="_blank" href="https://www.aliyun.com/">Aliyun</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

</body>
</html>
