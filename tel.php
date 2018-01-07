<?php
if ( empty($PID) ) {
	require_once("error.php");
	exit;
}
$admin = $_POST["admin"];
if ( !empty($admin) ) {
    $url = "https://sc.covear.top/?pid=".$PID."&admin=1";
	header("refresh:1;url=".$url);
    exit;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>双创管委会通讯录</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--
 onbeforeunload="return '真的要关闭此窗口吗?'"
-->
	<header class="fixed">
		<div class="header">
			通讯录
		</div>
	</header>

	<div id="letter" ></div>
	<div class="sort_box">
<center>
<p style="height: .2rem;"></p>
<form action="" method="post" name="form1">
<ul class="button-group">
    <li><button type="submit" class="button primary pill" name="btn" value="全部">全部</button></li>
    <li><button type="submit" class="button primary pill" name="btn" value="委员">委员</button></li>
    <li><button type="submit" class="button primary pill" name="btn" value="干事">干事</button></li>
</ul>
<br />
<ul class="button-group">
    <li><button type="submit" class="button pill" name="btn" value="管理部">管理部</button></li>
    <li><button type="submit" class="button pill" name="btn" value="咨询部">咨询部</button></li>
    <li><button type="submit" class="button pill" name="btn" value="财务部">财务部</button></li>
    <li><button type="submit" class="button pill" name="btn" value="策联部">策联部</button></li>
    <li><button type="submit" class="button pill" name="btn" value="宣传部">宣传部</button></li>
</ul>
</form>
<hr />

<?php
    $btn = $_POST["btn"];
    if ( empty($btn) ) {
        $btn = "全部";
    }
    echo "以下是双创管委会".$btn."成员";
?>
<hr />
</center>
<?php
if ( $MSG[13] == 1 ) {
    $admin = 1;
}
else {
    $admin = 0;
}
$SQL = "SELECT * FROM ".$DB_TABL;
$INF =  mysqli_query($CNCT, $SQL);
$sum = 0;
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;
$sum5 = 0;
while( $MSG = mysqli_fetch_row($INF) ) {
	if ( $MSG[2] == 0 ) {
		continue;
	}
	++$sum;
	if ( $MSG[7] == "管理部" ) {
	    ++$sum1;
	}
	if ( $MSG[7] == "咨询部" ) {
	    ++$sum2;
	}
	if ( $MSG[7] == "财务部" ) {
	    ++$sum3;
	}
	if ( $MSG[7] == "策联部" ) {
	    ++$sum4;
	}
	if ( $MSG[7] == "宣传部" ) {
	    ++$sum5;
	}
	if ( $btn != "全部" ) {
	    if ( $btn == "委员" ) {
	        if ( $MSG[7] != "管委会" && $MSG[8] != "部长" && $MSG[8] != "副部长" ) {
                continue;
	        }
	    }
	    else if ( $btn == "干事" ) {
	        if ( $MSG[8] != $btn ) {
	            continue;
	        }
	    }
	    else {
	        if ( $MSG[7] != $btn ) {
	            continue;
	        }
	    }
	}
	print <<<EOT
	<div class="sort_list">
		<div class="num_logo"><div style="width:60px; height:80px; background:url(images/photo/{$MSG[3]}.jpg); background-size:60px 80px;"></div></div>
		<div class="num_name"><b>{$MSG[3]}</b> <a title="点击拨号" href="tel:{$MSG[10]}">{$MSG[10]}</a> </div>
		<div class="num_qq"><b>QQ: </b><a title="QQ联系我" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={$MSG[9]}&site=qq&menu=yes">{$MSG[9]}</a></div>
EOT;

    if ( $MSG[1] < 20171000 ) {
    print <<<EOT
    
		<div class="num_post"><a style="color: red;"><b>{$MSG[7]}{$MSG[8]}</b></a></div>
		<div class="num_class">{$MSG[5]}&nbsp;-&nbsp;{$MSG[6]}</div>
	</div>

EOT;
    }
    else {
    print <<<EOT
    
		<div class="num_post"><a><b>{$MSG[7]}{$MSG[8]}</b></a></div>
		<div class="num_class">{$MSG[5]}&nbsp;-&nbsp;{$MSG[6]}</div>
	</div>

EOT;
    }
}
?>
	</div>
	<div class="initials">
		<ul>
			<li><img src="images/start.png"></li>
		</ul>
	</div>
	<center>
	<br />
	<p style="font-size: 1rem; color: #c0c0c0;">通讯录共计<?php echo $sum; ?>人</p>
	<P style="font-size: .9rem; color: #c0c0c0" >管理部<?php echo $sum1; ?>人</p>
	<P style="font-size: .9rem; color: #c0c0c0" >咨询部<?php echo $sum2; ?>人</p>
	<P style="font-size: .9rem; color: #c0c0c0" >财务部<?php echo $sum3; ?>人</p>
	<P style="font-size: .9rem; color: #c0c0c0" >策联部<?php echo $sum4; ?>人</p>
	<P style="font-size: .9rem; color: #c0c0c0" >宣传部<?php echo $sum5; ?>人</p>
	<?php 
	if ( $admin == 1 ) {
	print <<<EOT
<br />
<form action="" method="post" name="form2">
<ul class="button-group">
    <li><button type="submit" class="button primary pill" name="admin" value="admin">管理</button></li>
</ul>
</form>
EOT;
    
	} 
	?>

	</center>
	<br />
        <footer class="fixed">
                <div class="footer">
                        <p><a style="color: blue;">/</a>&nbsp;<a style="color: red;">/</a>&nbsp;大学生创新创业基地管理委员会&nbsp;<a style="color: red;">/</a>&nbsp;<a style="color: blue;">/</a></p>
                </div>
        </footer>

	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.charfirst.pinyin.js"></script>
	<script type="text/javascript" src="js/sort.js"></script>
</body>
<noscript> 
<iframe scr="*.htm"></iframe> 
</noscript>
</html>
