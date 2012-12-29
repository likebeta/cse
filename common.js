if (g("q").value == "") {
	showSearchBg(true);
} 
else {
	showSearchBg(false);
}

function g(id) {
	return document.getElementById(id);
}
function showSearchBg(bShow) {
	if (bShow) {
		g("q").style.background = "#FFFFFF url(images/google_custom_search_watermark.gif) left no-repeat";
	} 
	else {
		g("q").style.background = "none";
	}
}
function switchTab(type) {
	if (g("search_" + type) == null) {
		return false;
	}	

	
	var tabs = g("search_tabs").getElementsByTagName("A");
	for (var i = 0; i < tabs.length; i++) {
		if (tabs[i].className != "") {
			tabs[i].className = "";
		}
	}
	g("search_" + type).className = "selected";
	
	var descs = g("search_descs").getElementsByTagName("DIV");
	for (var i = 0; i < descs.length; i++) {
		if (descs[i].style.display != "none") {
			descs[i].style.display = "none";
		}
	}
	g("desc_" + type).style.display = "block";
	
	g("type").value = type;
	changeCx(type);
}
function changeCx(value) {
	var b = new Array();
	b["webdisk"] = "002457698430829784820:x7rsjtjeb1m";
	b["docs"] = "002457698430829784820:brslovf93ii";
	b["music"] = "002457698430829784820:t5xqkvcrkxe";
	b["video"] = "002457698430829784820:j7yqteunygw";
	b["wiki"] = "002457698430829784820:jilcktgeh9o";	
	g("cx").value = b[value] || b["webdisk"];
}
function doSearch() {
	if (g("q").value == "") {
		alert("嘿，小朋友，妈妈说搜索东西要输入关键字的...");
		return false;
	} 
	else {
		g('cse-search-box').submit();
		return true;
	}
}