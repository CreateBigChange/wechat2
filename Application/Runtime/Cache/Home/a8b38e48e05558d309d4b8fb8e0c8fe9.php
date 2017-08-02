<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}

		.opt{font-size: 38px;}
	</style>

	<link rel="stylesheet" href="/wechat/Public/css/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="/wechat/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/wechat/Public/css/datetimepicker.css">
	<link rel="stylesheet" href="/wechat/Public/css/jquery-ui.min.css">




	<title></title>


</head>
<body style="padding-left:0px !important;">

<div style="position:fixed;top:10px;left:10px;z-index: 999;"><a href="<?php echo U('StudentAbroad/Person')?>"><img src="/wechat/Public/resouce/img/20170522200815.png" style="width:80px;"></a></div>
<div id="allmap"></div>

</body>
<script src="/wechat/Public/js/jquery.min.js"></script>
<script src="/wechat/Public/Olive/js/bootstrap.min.js"></script>
<script src="/wechat/Public/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/wechat/Public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=nOZT9GLb6Rgz6hjxs3a2Uw1kOEhw73y0"></script>


</html>

<script type="text/javascript">
	function showItme(){
		var objS=$("#selectPeople")[0];
		var grade = objS.options[objS.selectedIndex].value;
		console.log(grade);
		$("#addPeople").append("<img src='' style='width:50px;height:50px;'>")
	}

	$(function() {
		$( "#slider-range-min" ).slider({
			range: "min",
			value: 0,
			min: 0,
			max: 20,
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.value );
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
	});

	/**
	 **  用于相关的函数的定义
	 **
	 **/

	//添加覆盖物
	function add_overlay(markers){

		for(i=0;i<markers.length;i++){
			map.addOverlay(markers[i]);
		}
	}

	//清除覆盖物
	function remove_overlay(){
		map.clearOverlays();
	}




	// 百度地图API功能
	var map = new BMap.Map("allmap",{mapType: BMAP_NORMAL_MAP}); // 创建Map实例
	map.centerAndZoom(new BMap.Point(112.9214250000,27.9149460000), 15	);  // 初始化地图,设置中心点坐标和地图级别
	//map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("湘潭");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放



	var sContent =
			"<h4 style='margin:0 0 5px 0;padding:0.2em 0'>咖域咖啡</h4>" +
			"<img style='float:right;margin:4px' id='imgDemo' src='/wechat/Public/resouce/img/shop/1ad5ad6eddc451da7e1de9f2bffd5266d11632c4.jpg' width='139' height='104' title='咖域咖啡'/>" +
			"<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>啡域咖啡——国产自主咖啡店品牌。啡域咖啡（coffee zone），又名啡域·街头行动咖啡，是致力于咖啡文化传播的加盟连锁品牌，</p>" +
			"</div> <button class='btn btn-info btn-lg' onclick='showmodel(this)'>Enter</button>";



	var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象




	function showmodel(){

		$('#myModal').modal('toggle')


		window.location.href="<?php echo U('LaunchActivity/information')?>"+"?address=1";
	}


	/*c创建商店*/
	var shop1 = new BMap.Point(112.926829,27.904789);//创建点
	var shop2 =new BMap.Point(112.916339,27.901789);//创建点

	/*设置相关进入地图*/
	//var circle1 = new BMap.Circle(shop1,500,{strokeColor:"blue", strokeWeight:5, strokeOpacity:0.5}); //用点创建圆
	var marker1 = new BMap.Marker(shop1); // 用点创建标记
	//marker1.setLabel(new BMap.Label('<h5>咖域*咖啡</h5>'))

	//var circle2 = new BMap.Circle(shop2,500,{strokeColor:"blue", strokeWeight:2, strokeOpacity:0.5}); //用点创建圆
	var marker2 = new BMap.Marker(shop2); // 用点创建标记
	//marker2.setLabel(new BMap.Label('<h5 style="color:#66D9EF;">学友烧烤</h5>'))






	var markers =[marker1,marker2];



	add_overlay(markers);

	/***
	 **
	 **   添加事件
	 **/


	// marker1.addEventListener("click",attribute);

	// 	function attribute(e){
	// 	var p = e.target;

	// 	$('#myModal').modal('toggle')
	// }

	marker1.addEventListener("click",function(){
		this.openInfoWindow(infoWindow);
		//图片加载完毕重绘infowindow
		document.getElementById('imgDemo').onload = function (){
			infoWindow.redraw();   //防止在网速较慢，图片未加载时，生成的信息框高度比图片的总高度小，导致图片部分被隐藏
		}

	})

	marker2.addEventListener("click",attribute);



	function attribute(e){
		var p = e.target;

		//添加事件
	}


</script>