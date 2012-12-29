<?php 
	$var_q = isset($_GET['q']) ? $_GET['q'] : '';
	$var_type = isset($_GET['type']) ? $_GET['type'] : 'webdisk';
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>尝鲜搜索 - 专业的网盘搜索引擎</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<meta name="description" content="尝鲜搜索是一个专业的网络硬盘文件资源搜索引擎,可以搜索如 DBank搜索,115,新浪爱问等资源丰富的网盘,另外还提供在线文档、PDF电子书等搜索功能……" /> 
	<meta name="keywords" content="下载,网盘,网盘搜索,网络硬盘,共享,文档,DBank搜索,115搜索,PDF,小说,电子书,杂志,动漫,BT,游戏" /> 
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<link rel="shortcut icon" href="images/favicon.ico" />
</head> 
<body>	
<?php include_once('header.php');?>
<script type="text/javascript" src="common.js"></script> 
<script type="text/javascript"> 
	var isIE = !-[1,];
	if(isIE){g("hl").value="zh-TW";}
	switchTab('webdisk');
</script> 
<script type="text/javascript" src="opensug.js"></script>
<!-- google ad -->
<div style="text-align:center;">
	<script type="text/javascript">/*336*280,创建于2011-8-24*/ var cpro_id = 'u585646';</script>
	<script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script>
	<span style="width:45px;display:inline-block"></span>
	<script type="text/javascript"><!--
		google_ad_client = "ca-pub-7145062453308929";
		/* 366&#42;280 */
		google_ad_slot = "0541007826";
		google_ad_width = 336;
		google_ad_height = 280;
	//-->
	</script>
	<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
</div>
<!-- google ad end -->
<?php include_once('links.php');?>
</body> 		
</html>