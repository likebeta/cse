function getUrlParam(name) {
	const pattern = "(^|&)" + name + "=([^&]*)(&|$)";
	const match = window.location.search.substr(1).match(new RegExp(pattern));
	return match ? decodeURIComponent(match[2]) : "";
}

function initSearchPage() {
	const q = getUrlParam("q");
	const type = getUrlParam("type") || "webdisk";

	g("q").value = q;
	g("type").value = type;

	if (q) {
		document.title = "关于 " + q + " 的搜索结果 - 尝鲜搜索";
	}

	switchTab(type);
	showSearchBg(!q);
}

showSearchBg(!g("q").value);

function g(id) {
	return document.getElementById(id);
}

function showSearchBg(bShow) {
	g("q").style.background = bShow
		? "#FFFFFF url(asset/images/google_custom_search_watermark.gif) left no-repeat"
		: "none";
}

function switchTab(type) {
	if (!g("search_" + type)) {
		return false;
	}

	const tabs = g("search_tabs").getElementsByTagName("A");
	for (let i = 0; i < tabs.length; i++) {
		tabs[i].className = "";
	}
	g("search_" + type).className = "selected";

	const descs = g("search_descs").getElementsByTagName("DIV");
	for (let i = 0; i < descs.length; i++) {
		descs[i].style.display = "none";
	}
	g("desc_" + type).style.display = "block";

	g("type").value = type;
	changeCx(type);
}

function changeCx(value) {
	const cxMap = {
		webdisk: "002457698430829784820:x7rsjtjeb1m",
		docs: "002457698430829784820:brslovf93ii",
		music: "002457698430829784820:t5xqkvcrkxe",
		video: "002457698430829784820:j7yqteunygw",
		wiki: "002457698430829784820:jilcktgeh9o"
	};
	g("cx").value = cxMap[value] || cxMap.webdisk;
}

function doSearch() {
	if (!g("q").value) {
		alert("嘿，小朋友，妈妈说搜索东西要输入关键字的...");
		return false;
	}
	g("cse-search-box").submit();
	return true;
}
