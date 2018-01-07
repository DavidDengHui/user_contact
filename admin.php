<?php
global $res;
$res = 0;
if ( empty($PID) ) {
	require_once("error.php");
	exit;
}
else {
    $SQL = "SELECT * FROM ".$DB_TABL;
    $INF =  mysqli_query($CNCT, $SQL);
    while( $MSG = mysqli_fetch_row($INF) ) {
        if ( $MSG[1] == $PID ) {
            if ( $MSG[13] == 1 ) {
                $res = 1;
                break;
            }
        }
    }
    if ( $res != 1 ) {
    	require_once("error.php");
    	exit;
    }
    $res = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>用户管理</title>
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
<b><a style="font-size: 2rem; color: rgba(255, 255, 255, 1);">用户管理</a></b>
<br />
</h1>
<div class="main-agileits">
<!--form-stars-here-->
	<div class="form-w3-agile">
        <h1>请输入要操作的用户学号</h1>
			<form action="" method="post">
				<input type="text" name="sid" placeholder="姓名或学号，如：张三或201700000000" required="" value="<?php echo $_POST['sid'] ?>" />
				<div class="submit-w3l">
					<input type="submit" name="submit" value="检查信息">
					<?php
					if(!empty($_POST['sid'])){
	                    $SQL = "SELECT * FROM ".$DB_TABL;
                        $INF =  mysqli_query($CNCT, $SQL);
                        while( $MSG = mysqli_fetch_row($INF) ) {
                        	if ( $MSG[11] == $_POST['sid'] || $MSG[3] == $_POST['sid'] ) {
                        	    $ID = $MSG[11];
                        		$res = 1;
                        		echo "<h1>".$MSG[3]." - ".$MSG[4]."</h1><h1>学号： ".$MSG[11]."</h1>";
                        		$RET = array("已完成", "否", "否");
                        	    if ( $MSG[2] == "0" ) {
                        	        $RET[0] = "未完成";
                        	    }
                        	    if ( $MSG[12] == "1" ) {
                        	        $RET[1] = "是";
                        	    }
                        	    if ( $MSG[13] == "1" ) {
                        	        $RET[2] = "是";
                        	    }
                        		print <<<EOT
                <center>
                <table border="1" style="color: rgba(255, 255, 255, 1);">
                <tr>
                <td style="text-align:right; height: 2rem; width: 10rem;">学院： </td>
                <td style="text-align:left; height: 2rem; width: 10rem;">{$MSG[5]}</td>
                </tr>
                <tr>
                <td style="text-align:right; height: 2rem; width: 10rem;">班级： </td>
                <td style="text-align:left; height: 2rem; width: 10rem;">{$MSG[6]}</td>
                </tr>
                <tr>
                <td style="text-align:right; height: 2rem; width: 10rem;">部门： </td>
                <td style="text-align:left; height: 2rem; width: 10rem;">{$MSG[7]}</td>
                </tr>
                <tr>
                <td style="text-align:right; height: 2rem; width: 10rem;">职务： </td>
                <td style="text-align:left; height: 2rem; width: 10rem;">{$MSG[8]}</td>
                </tr>
                <tr>
                <td style="text-align:right; height: 2rem; width: 10rem;">信息录入： </td>
                <td style="text-align:left; height: 2rem; width: 10rem;">{$RET[0]}</td>
                </tr>
                <tr>
                <td style="text-align:right; height: 2rem; width: 10rem;">挂失： </td>
                <td style="text-align:left; height: 2rem; width: 10rem;">{$RET[1]}</td>
                </tr>
                <tr>
                <td style="text-align:right; height: 2rem; width: 10rem;">管理员： </td>
                <td style="text-align:left; height: 2rem; width: 10rem;">{$RET[2]}</td>
                </tr>
                </table>
                </center>
EOT;
                            }
                        }
				        if ( $res == 1 ) {
				            echo "<p style='color: white;'>【！查询成功！】<br />";
				        }
				        else {
				            echo "<p style='color: white;'>【！查无此人！】<br />";
				        }
                    }
					?>
				</div>
			</form>
			<br />
        	<hr />
        <h1>请选择要修改的参数</h1>
			<form action="" method="post">
				<input type="text" name="sid2" placeholder="请再次输入上方的正确学号" value="<?php echo $ID; ?>" required=""/>
                <center>
                <table border="1" style="color: rgba(255, 255, 255, 1);">
                <tr>
                <td style="text-align:left; height: 2rem; width: 6rem;"><input type="radio" name="choose" value="name" required=""/>姓名</td>
                <td style="text-align:left; height: 2rem; width: 6rem;"><input type="radio" name="choose" value="sex" required=""/>性别</td>
                </tr>
                <tr>
                <td style="text-align:left; height: 2rem; width: 6rem;"><input type="radio" name="choose" value="post1" required=""/>部门</td>
                <td style="text-align:left; height: 2rem; width: 6rem;"><input type="radio" name="choose" value="post2" required=""/>职务</td>
                </tr>
                <tr>
                <td style="text-align:left; height: 2rem; width: 6rem;"><input type="radio" name="choose" value="state" required=""/>信息录入</td>
                <td style="text-align:left; height: 2rem; width: 6rem;"><input type="radio" name="choose" value="lost" required=""/>挂失</td>
                </tr>
                <tr>
                <td style="text-align:left; height: 2rem; width: 6rem;"><input type="radio" name="choose" value="admin" required=""/>管理员</td>
                </tr>
                </table>
                </center>
				<input type="text" name="run" placeholder="参数，完成录入、挂失、管理员输入1" required=""/>
				<input type="text" name="sid3" placeholder="请输入您自己的学号" required=""/>
                <br />
				<div class="submit-w3l">
					<input type="submit" name="doit" value="提交操作">
					<?php
					echo "<p style='color: white;'>【！请在确认前检查学号信息！】<br />";
					if(!empty($_POST['doit'])){
                        $SQL = "SELECT * FROM ".$DB_TABL;
                        $INF =  mysqli_query($CNCT, $SQL);
                        $GO = 0;
                        while( $MSG = mysqli_fetch_row($INF) ) {
                            if ( $MSG[1] == $PID ) {
                                if ( $MSG[11] == $_POST['sid3'] ) {
                                    $GO = 1;
                                    break;
                                }
                            }
                        }
                        if ( $GO == 1 ) {
                            if ( $_POST['sid2'] == "201700000000" ) {
    					        echo "<p style='color: white;'><br />该用户信息尚未完善<br />【！<a style='color: red;'>操作失败</a>！】<br />";
    					    }
    					    else {
        	                    $SQL = "update users set ".$_POST['choose']."='".$_POST['run']."' where sid='".$_POST['sid2']."'";
        				        $INF =  mysqli_query($CNCT, $SQL);
                                echo "<p style='color: white;'><br />已修改为\"".$_POST['run']."\"<br />【！操作成功！】<br />";
    					    }
                        }
                        else {
                            echo "<p style='color: white;'><br />请此工作证所属者前来操作<br />【！<a style='color: red;'>操作失败</a>！】<br />";
                        }
                    }
					?>
				</div>
			</form>
	
	<br />
	<hr />
		<div class="submit-w3l">
			<input type="submit" name="submit" value="返回" onclick="javascript:window.history.back(-1);">
		</div>
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
