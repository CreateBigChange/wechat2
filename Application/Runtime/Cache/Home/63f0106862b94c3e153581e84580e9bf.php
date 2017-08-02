<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link  href="/wechat/Public/css/style.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">



    <link href="/wechat/Public/Olive/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
	<link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
    <link href="/wechat/Public/Olive/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME CSS  -->
    <link href="/wechat/Public/Olive/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS  -->
    <link href="/wechat/Public/Olive/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS  -->

	<script src="/wechat/Public/js/jquery-1.8.2.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.js"></script>
		
	<style type="text/css">
		
	input{
		font-size: 50px;
		height: 100px;
	}
	button{
		font-size: 50px;
	}
	.BaseColor{
			color:#66D9EF;
	}
	</style>
</head>
<body>

<!--modal-->







	<div class="lg-container" style="width:80%;height:1500px;" >
		<h1  class="BaseColor" style="font-size: 70px;margin-top:30px;"> 修改信息 </h1>
		<form action="" id="lg-form" name="lg-form" method="post">
			
			<div>

				<input  type="text" name="username" id="username" placeholder="中文名 " disabled />
			</div>

			<div>

				<input type="text" name="EnglishName" id="username" placeholder="英文名 " disabled/>
			</div>

			<div>
				
		    <!--语言的添加-->
			<div id="content">

			</div>
			<!--语言的添加-->


			

			</div>
			
			<div>
				<label for="Interest">Interest:</label>
				<input type="text" name="Interest" id="password" placeholder="兴趣" />
			</div>
			<div>
				<label for="Interest">Major:</label>
				<input type="text" name="Interest" id="password" placeholder="专业" />
			</div>

			<div>
				<label for="Interest">Nation:</label>
				<input type="text" name="Nation" id="password" placeholder="国籍" />
			</div>




			<div id="img1" >				
				<button type="button" id="AddImg" class="btn btn-default BaseColor" style="float: left;">上传图片</button>
				
				<img src="" style="width:300px;height:300px;margin-left: 40px;" id="imgsrc"/>
				

			</div>

			<input type="file" style="display:none;" name="" id="file"/>

			
			
			<script type="text/javascript">

				$("#AddImg").click(function(){

					$("#file").click();


				})

			    $("#file").change(function(){

			    	if($(".photos").length==1){
			    		return 0;
			    	}
			    	
			        img=document.getElementById("file").files[0]

			        var reader=new FileReader();

			        reader.readAsDataURL(img);

			        reader.onload=function(e){

			        	$("#imgsrc").attr("src", reader.result);
			            //$("#img1").append("<img   class='photos' style='width:300px;height: 300px;float: right'  src="+reader.result+" />");
			        	
			        }
			    })
			</script>

			<div style="overflow: auto; ">				
				<button type="button"  class="btn btn-default BaseColor" id="login" style="width:100%;"  >完成</button>

				


		</form>
		<div id="message"></div>
	</div>
</body>
</html>