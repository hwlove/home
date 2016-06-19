<!-- <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
	body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
	<title>异步加载地图</title>
</head>
<body>
	<div id="allmap" style="width:50%;height:50%"></div>
	<input type="hidden" value="<?php echo $data['lng']?>" id="lng" />
	<input type="hidden" value="<?php echo $data['lat']?>" id="lat" />
</body>
</html>
<script type="text/javascript">
	//百度地图API功能
	function loadJScript() {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "http://api.map.baidu.com/api?v=2.0&ak=iq2HLSvDiV3VYGovchjgMj9I&callback=init";
		document.body.appendChild(script);
	}
	function init() {
		var lng=document.getElementById('lng').value;
		var lat=document.getElementById('lat').value;
		var map = new BMap.Map("allmap");            // 创建Map实例
		var point = new BMap.Point(lng, lat); // 创建点坐标
		map.centerAndZoom(point,15);                 
		map.enableScrollWheelZoom();                 //启用滚轮放大缩小
	}  
	window.onload = loadJScript;  //异步加载地图
</script> -->


<!-- 信息窗口展示
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#allmap{width:100%;height:500px;}
		p{margin-left:5px; font-size:14px;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=iq2HLSvDiV3VYGovchjgMj9I"></script>
	<title>添加复杂内容的信息窗口</title>
</head>
<body>
	<div id="allmap"></div>
	<p>点击标注点，可查看由文本，图片构成的复杂型信息窗口</p>
	<input type="hidden" value="<?php //echo $data['lng']?>" id="lng" />
	<input type="hidden" value="<?php //echo $data['lat']?>" id="lat" />
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var sContent =
	"<h4 style='margin:0 0 5px 0;padding:0.2em 0'>天安门</h4>" + 
	"<img style='float:right;margin:4px' id='imgDemo' src='http://app.baidu.com/map/images/tiananmen.jpg' width='139' height='104' title='天安门'/>" + 
	"<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>天安门坐落在中国北京市中心,故宫的南侧,与天安门广场隔长安街相望,是清朝皇城的大门...</p>" + 
	"</div>";
	var lng=document.getElementById('lng').value;
	var lat=document.getElementById('lat').value;
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(lng, lat);
	var marker = new BMap.Marker(point);
	var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
	map.centerAndZoom(point, 15);
	map.addOverlay(marker);
	marker.addEventListener("click", function(){          
	   this.openInfoWindow(infoWindow);
	   //图片加载完毕重绘infowindow
	   document.getElementById('imgDemo').onload = function (){
		   infoWindow.redraw();   //防止在网速较慢，图片未加载时，生成的信息框高度比图片的总高度小，导致图片部分被隐藏
	   }
	});
</script>
-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#allmap{width:100%;height:500px;}
		p{margin-left:5px; font-size:14px;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=iq2HLSvDiV3VYGovchjgMj9I"></script>
	<title>根据关键字本地搜索</title>
</head>
<body>
	<div id="allmap"></div>
	<p>返回北京市“景点”关键字的检索结果，并展示在地图上</p>
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");          
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
	var local = new BMap.LocalSearch(map, {
		renderOptions:{map: map}
	});
	local.search("景点");
</script>
