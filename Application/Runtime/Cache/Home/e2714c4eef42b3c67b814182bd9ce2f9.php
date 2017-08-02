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








	<div class="lg-container" style="width:80%;" >
		<h1  class="BaseColor" style="font-size: 70px;margin-top:30px;"> 语言管理 </h1>
		<form action="" id="lg-form" name="lg-form" method="post">
			

			<div>
				
		    <!--语言的添加-->
			<div id="content">

				<input type="text" name="Language" id="username" placeholder="语言" disabled />
				<div class="panel-body"><span class="rating" style="font-size:80px;">
				<center>
					
									<span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                </span>
				</center>

                </div>

			</div>
			<div id="content">

				<input type="text" name="Language" id="username" placeholder="语言" disabled />
				<div class="panel-body">
				<center>
									<span class="rating" style="font-size:80px;">
				
				<span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                </span>

				</center>

                </div>

			</div>
			<!--语言的添加-->

			

			</div>
			






			
			


			<div style="overflow: auto; ">				
				<button type="button"  class="btn btn-default BaseColor" id="login" style="width:100%;"  >完成</button>

				



		</form>
		<div id="message"></div>
	</div>
</body>
</html>