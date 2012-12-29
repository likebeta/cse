<div id="header"> 
	<a id="header_logo" href="./" title="尝鲜搜索 - 首页"></a> 
	<div id="header_link"><a target="_blank" href="http://www.likebeta.com">尝鲜旗下网站</a>&nbsp;&nbsp;|&nbsp;&nbsp;站长：<a target="_blank" href="http://t.qq.com/likebeta">likebeta</a></div> 
	<div id="header_link_r"></div> 
</div>
<div id="search_outer"> 
    <div id="search_inner"> 
        <div id="search_bar"> 
	 		<form action="search.php" id="cse-search-box">
	            <input type="hidden" name="type" id="type" value="<?php echo $var_type;?>" />
	            <input type="hidden" id="cx" name="cx" value="002457698430829784820:x7rsjtjeb1m" />
	            <input type="hidden" name="cof" value="FORID:11" />
	            <input type="hidden" name="ie" value="UTF-8" />
	            <input type="hidden" name="hl" id="hl" value="zh-CN" /> 
	            <input type="submit" style="display:none" name="sa" id="sa" value="搜索" />
	            <input type="text" name="q" id="q" class="search_input" tabindex="1" value="<?php echo $var_q;?>" autocomplete="off"  baiduSug="1" onfocus="showSearchBg(false);" onblur="if(g('q').value==''){showSearchBg(true);}" />
	        </form>
            <a id="search_submit" onclick="doSearch();"></a> 
 		</div>
		<div id="search_descs">
			<div id="desc_webdisk">从网络硬盘中搜寻：音乐，电影，动漫，游戏，书籍，软件...<br/>搜索包括RayFile飞速网,115网盘，DBank网盘,千脑网盘,Xun6网盘,UUShare,SkyDrive等热门网络</div> 
			<div id="desc_docs">从文档共享网站中搜寻PDF,Word文档,PPT演示文稿,Excel表格,PDF,ePub电子书等...<br/>搜索包括百度文库，豆丁网，SlideShare等热门文档共享网站</div> 
			<div id="desc_music">搜索热门音乐,流行音乐MP3...</div> 
			<div id="desc_video">搜索各种视频、电影、动漫、电视剧...</div> 
			<div id="desc_wiki">从百度百科,互动百科,维基百科等多个百科类网站中搜索知识...</div>
		</div>
		<div id="search_tabs"> 
			<a id="search_webdisk" class="selected" onclick="switchTab('webdisk');">网盘混搜</a> 
			<a id="search_docs" onclick="switchTab('docs');">文档书籍</a> 
			<a id="search_music" onclick="switchTab('music');">音乐MP3</a> 
			<a id="search_video" onclick="switchTab('video');">视频电影</a> 
			<a id="search_wiki" onclick="switchTab('wiki');">百科知识</a> 
		</div> 
   </div> 
</div>
