<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

	<title></title>

	<link  href="/wechat/Public/css/style.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
	<script src="/wechat/Public/js/jquery-1.7.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.js"></script>
<style type="text/css">
	.head{margin-top: 100px;}
	ul{
		font-size: 38px;
	}
	.footer{
		width:100%;
		margin-top: 100px;
		font-size: 38px;
	}

	.number{
		text-align:right;
	}
</style>
</head>
<body>
<div class="head">
		<center>
			<img src="/wechat/Public/resouce/img/coin.png" style="width:300px;height:300px;">
		</center>
		<center style="font-size:38px;margin-top:40px;">My Balance</center>
		<center>
			<div style="width:60%;height: 160px;font-size: 60px;text-align: center;color: red;line-height: 160px;">¥100.0</div>
		</center>
		<center>
			<button class="btn btn-success" style="width:80%;height: 100px;font-size: 60px;"> withdraw</button>
		</center>		
</div>
<div class="footer">

<div class="panel panel-default" style="width:100%;">
    <div class="panel-heading" style="font-size: 60px;">Income and expense</div>
    <table class="table" >
        <th>&nbsp</th><th>Type</th><th>Date</th><th class="number">Number</th> <th>&nbsp</th>
        <tr><td></td><td>Income </td><td style="font-size: 30px;">2017.30.1 25</td><td class="number">$200</td> <tr><td></tr>
        <tr><td></td><td>pay </td><td style="font-size: 30px;">2017.30.1 25</td><td class="number">$100</td> <tr><td></tr>
    </table>
</div>

</div>
</body>
</html>>