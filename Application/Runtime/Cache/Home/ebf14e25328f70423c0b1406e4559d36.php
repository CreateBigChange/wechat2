<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>微信页面</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<style>
			.btn1{
				display:block;
				height: 49px;
				width: 193px;
				background-image: url(/wechat/Public/resouce/shareimg/01.png) no-repeat;
				background-color: #ffffff;
				position: relative;
				top: 300px;
				border-radius: 25px;
				border: 0px;
	
			}
			.btn2{
				
				margin: 0 auto;
				top:380px;
				width: 40%;

				
			}
			.input1{
			
				top: 350px;
				height: 2rem;
				width: 60%;
				text-align : center;
				font-size:1rem;
				background-image: url(/wechat/Public/resouce/shareimg/02.png) ;
				background-color: #ffffff;
				border-radius:60px;
				border: 0px;
				
			}
			body{
				margin-left: 0px;
				margin-top: -45px;
				padding:0px;
				margin-right: 0px;
			}

			.btn{
				position: absolute;
				margin: 0 auto;
				top:34%;
				left:37%;
				z-index: 100;
			
			}
			.img{
				width: 100%;
				
			}
			.imgdiv{
				position: relative;
			}
			.btnimg{
				width: 100px;
			}
			form{
				position: absolute;
				margin: auto 0;
				width: 100%;
				top:40%;
				
			}
			.learn{
				
				margin-top:5px;
				width: 50%;
				left:8%;
			}
		</style>
		<script type="text/javascript">
		function check(){
			var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
			if(!myreg.test(document.getElementById("phone").val())) 
			{ 
				alert('请输入有效的手机号码！'); 
				return false; 
			} 
		}
		</script>
	</head>
	<body>
	<div class="imgdiv">
		<img src="/wechat/Public/resouce/shareimg/bg.png" class="img" />
		
		<center>
			<div class="btn">
				<img src="/wechat/Public/resouce/shareimg/01.png" class="btnimg"/>
			</div>
		</center>
			
		
		<center>
			<form>
				<center>
					<input type="text" maxlength="14" class="input1" id="phone" placeholder="请输入手机号码，获取学习券" />
				</center>
				<center>
					<img src="/wechat/Public/resouce/shareimg/00.png"  class="learn" onclick ="return check()" class="btn2">
				</center>
			</form>

		</center>

	</div>
	</body>
</html>