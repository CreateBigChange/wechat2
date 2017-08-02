<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}

.opt{font-size: 38px;}
</style>

<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css.map">
<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=nOZT9GLb6Rgz6hjxs3a2Uw1kOEhw73y0"></script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/wechat/Public/Olive/js/bootstrap.min.js"></script>



<!--date/js-->
<!--	<script src="/wechat/Public/js/date/jquery.1.7.2.min.js"></script>-->
	<script src="/wechat/Public/js/date/mobiscroll_002.js" type="text/javascript"></script>
	<script src="/wechat/Public/js/date/mobiscroll_004.js" type="text/javascript"></script>
	<script src="/wechat/Public/js/date/mobiscroll.js" type="text/javascript"></script>
	<script src="/wechat/Public/js/date/mobiscroll_003.js" type="text/javascript"></script>
	<script src="/wechat/Public/js/date/mobiscroll_005.js" type="text/javascript"></script>


	<link href="/wechat/Public/css/date/mobiscroll_003.css" rel="stylesheet" type="text/css">
	<link href="/wechat/Public/css/date/mobiscroll_002.css" rel="stylesheet" type="text/css">
	<link href="/wechat/Public/css/date/mobiscroll.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">

<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
 
  <script>
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
  </script>



<title></title>


<style type="text/css">
	
	#Content{
		width:100%;
		height:170px;
	}
	.BaseColor{
		color:#66D9EF;
	}
</style>
</head>


<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title BaseColor" id="myModalLabel">
					Setting
				</h4>
			</div>
			<form class="form-inline" role="form" action="/wechat/index.php/Home/StudentAbroad/">
				<div class="modal-body">
						 <div class="form-group">
							<input size="16" type="text"  readonly class="form_datetime form-control" name="begintime" placeholder="Begin Time">

							 <div class="demos">
								 <label for="appDateTime">日期时间</label>
								 <input value="2015-05-01 15:42:02" class="" readonly="readonly" name="appDateTime" id="appDateTime" type="text">
							 </div>


						 </div>
						<div class="form-group">
							<input size="16" type="text"  readonly class="form_datetime form-control" name="endtime" placeholder="End Time">
					   </div>
					   <div class="form-group" style="margin-top: 20px;">
						   <input type="text" class="form-control " id="name" name="subject" placeholder="SubJect">
					   </div>

						<div class="form-group" style="margin-top: 20px;">
							<p>
							  <label for="amount">price：</label>
							  <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
							</p>
							<div id="slider-range-min"></div>
						</div>
					  <div class="form-group">
						  <ul class="nav nav-tabs">
							<li class="dropdown" style="border-radius: 30px;width:100%;">
									<a href="#" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown">
										 <span class="glyphicon glyphicon-plus"  ></span> People
									</a>
									<div id="addPeople"></div>
									 <ul class="dropdown-menu">
										  <div class="form-group">
												<input type='text' placeholder="search for name/id"></input>
												<select multiple class="form-control" style="height:200px; " onchange="showItme()" id="selectPeople">
												  <option class="opt" value='1'>1</option>
												  <option class="opt" value='2'>2</option>
												  <option class="opt" value='3'>3</option>
												  <option class="opt" value='4'>4</option>
												  <option class="opt" value='5'>5</option>
											</select>
										  </div>
										  <script type="text/javascript">
											function showItme(){
												var objS=$("#selectPeople")[0];
												 var grade = objS.options[objS.selectedIndex].value;
												 console.log(grade);
												 $("#addPeople").append("<img src='' style='width:50px;height:50px;'>")
											}
										  </script>
									 </ul>
							</li>
						  </ul>
					  </div>
					  <div class="form-group">
						<textarea class="form-control "  id="Content" placeholder="Content" ></textarea>
					</div>
					<script type="text/javascript">

						$(".form_datetime").click(function () {
							alert("xxx");
						})
//							$(".form_datetime").datetimepicker({
//									format: "dd MM yyyy - hh:ii"
//								});
					</script>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">cancel
					</button>
					<a href="<?php echo U('Activity')?>"><button type="button" class="btn btn-info">
						confirm
						</button>
					</a>
				</div>
			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal -->
</div>


<body>
<div style="position:fixed;top:10px;left:10px;z-index: 999;"><a href="<?php echo U('Person')?>"><img src="/wechat/Public/resouce/img/20170522200815.png" style="width:80px;"></a></div>
<div id="allmap"></div>
</body>
</html>


<script type="text/javascript">
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


</script>

<script type="text/javascript">

	// 百度地图API功能
	var map = new BMap.Map("allmap",{mapType: BMAP_NORMAL_MAP}); // 创建Map实例
	map.centerAndZoom(new BMap.Point(112.9214250000,27.9149460000), 15	);  // 初始化地图,设置中心点坐标和地图级别
	//map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("湘潭");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    
   

	var sContent =
	"<h4 style='margin:0 0 5px 0;padding:0.2em 0'>咖域咖啡</h4>" + 
	"<img style='float:right;margin:4px' id='imgDemo' src='/wechat/Public/resouce/img/1ad5ad6eddc451da7e1de9f2bffd5266d11632c4.jpg' width='139' height='104' title='咖域咖啡'/>" + 
	"<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>啡域咖啡——国产自主咖啡店品牌。啡域咖啡（coffee zone），又名啡域·街头行动咖啡，是致力于咖啡文化传播的加盟连锁品牌，</p>" + 
	"</div> <button class='btn btn-info btn-lg' onclick='showmodel(this)'>Enter</button>";



	var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象




	function showmodel(){

		$('#myModal').modal('toggle')
	}


	/*c创建商店*/
	var shop1 = new BMap.Point(112.926829,27.904789);//创建点
	var shop2 =new BMap.Point(112.916339,27.901789);//创建点

	/*设置相关进入地图*/
	//var circle1 = new BMap.Circle(shop1,500,{strokeColor:"blue", strokeWeight:2, strokeOpacity:0.5}); //用点创建圆
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

		$('#myModal').modal('toggle')
	}


</script>

<script type="text/javascript">
	$(function () {
		var currYear = (new Date()).getFullYear();
		var opt={};
		opt.date = {preset : 'date'};
		opt.datetime = {preset : 'datetime'};
		opt.time = {preset : 'time'};
		opt.default = {
			theme: 'android-ics light', //皮肤样式
			display: 'modal', //显示方式
			mode: 'scroller', //日期选择模式
			dateFormat: 'yyyy-mm-dd',
			lang: 'zh',
			showNow: true,
			nowText: "今天",
			startYear: currYear - 10, //开始年份
			endYear: currYear + 10 //结束年份
		};

		$("#appDate").mobiscroll($.extend(opt['date'], opt['default']));
		var optDateTime = $.extend(opt['datetime'], opt['default']);
		var optTime = $.extend(opt['time'], opt['default']);
		$("#appDateTime").mobiscroll(optDateTime).datetime(optDateTime);
		$("#appTime").mobiscroll(optTime).time(optTime);
	});
</script>