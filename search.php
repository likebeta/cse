<?php 
	$var_q = isset($_GET['q']) ? $_GET['q'] : '';
	$var_type = isset($_GET['type']) ? $_GET['type'] : 'webdisk';
?>
<!DOCTYPE html> 
<html> 
<head>
	<title>关于 <?php echo $var_q;?> 的搜索结果 - 尝鲜搜索</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
	<meta name="description" content="尝鲜搜索 是一个专业的网络硬盘文件资源搜索引擎，可以搜索如 DBank搜索，115，新浪爱问等资源丰富的网盘，另外还提供在线文档、PDF电子书等搜索功能……" /> 
	<meta name="keywords" content="下载,网盘,网盘搜索,网络硬盘,共享,文档,DBank搜索,115搜索,PDF,小说,电子书,杂志,动漫,BT,游戏" /> 
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<link rel="shortcut icon" href="images/favicon.ico" />
</head> 
<body>	
<div id="search-result"> 
	<div id="search-header"> 
		<?php include_once('header.php');?>
 	    <script type="text/javascript" src="common.js"></script> 
	    <script type="text/javascript"> 	    
			var isIE = !-[1,];
			if(isIE){g("hl").value="zh-TW";}
			switchTab('<?php echo $var_type;?>');	
		</script> 
	    <script type="text/javascript"  src="opensug.js"></script>
	</div>  
	<div id="content"> 
	    <!-- google ad -->
	    <div style="margin:20px 0;text-align:center;">
			<script type="text/javascript"><!--
				google_ad_client = "ca-pub-7145062453308929";
				/* search */
				google_ad_slot = "0358641993";
				google_ad_width = 728;
				google_ad_height = 90;
				//-->
			</script>
			<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
		</div><!-- google ad end -->
		<div id="cse-search-results">
			<div id="loading">稍等，正在很用力地帮你找东西……</div>
		</div>
		<script type="text/javascript">
		  var googleSearchIframeName = "cse-search-results";
		  var googleSearchFormName = "cse-search-box";
		  var googleSearchFrameWidth = 600;
		  var googleSearchDomain = "www.google.com";
		  var googleSearchPath = "/cse";
		</script>
		<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
		<script type="text/javascript"> 
			setTimeout(function(){
				g("loading").style.display="none";
				var resultHtml=g("cse-search-results");
				if(resultHtml.innerHTML.indexOf('iframe')<0 && resultHtml.innerHTML.indexOf('IFRAME')<0){
					g("cse-search-results").innerHTML="<div id=\"loading\"><h3>由于某些神奇的原因，你被某墙重置了，很可能你查询的关键字不河蟹啊！不河蟹！</h3><p>别问为什么，这个没有为什么！除了翻Wall出去就没别的办法了，怪就怪你出生在一个充满着各种神奇的国度吧～<br/>请1至2分钟后再尝试搜索其他关键字吧，一般都会恢复的了，祝你好运……</p><p>[去 <a target=\"_blank\" href=\"http://www.likebeta.com\">尝鲜 | 折腾互联网</a> 或者 <a target=\"_blank\" href=\"http://www.icache.me\">在云端</a> 看看 ]</p></div>";
				}
			},2500);
		</script>
	</div><!--content--> 
	<div id="sidebar"> 
		<ul id="adcol">
		</ul> 
		<div id="adcol_h"> 
			<script type="text/javascript">
				var cpro_id = 'u579679';
			</script>
			<script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script>
		</div> 
	</div> 
</div><!--search-result--> 
<?php include_once('links.php');?>
</body> 		
</html>