<?php

namespace Home\Controller;
use Think\Controller;

class FocusController extends Controller {

		public function index(){

		$appid="wx98804dd861f4b1a5";
		$secret="a639d35f141c49f254f01dbc3688cdb2";
		$code=$_GET["code"];
		$state=$_GET["state"];

		$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$secret."&code=".$code."&grant_type=authorization_code";

		

		$json=$this->curl($url);
		
		$arry=json_decode($json,true);

		

		$access_token=$arry["access_token"];
		$openid=$arry["openid"];

		$infourl="https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";

		$infojson=$this->curl($infourl);
		$infoarray=json_decode($infojson,true);

		if($infoarray!=""){
			session("openid",$infoarray['openid']);
			session("nickname",$infoarray['nickname']);
			session("sex",$infoarray['sex']);
			session("language",$infoarray['language']);
			session("city",$infoarray['city']);
			session("privince",$infoarray['privince']);
			session("country",$infoarray['country']);
			session("headimgurl",$infoarray['headimgurl']);
			session("privilege",$infoarray['privilege']);

			header("Location: http://bbs. lampbrother.net"); 
			$this->redirect("StudentAbroad/Register",0);

		}



		}


		public function curl($url){

			 $ch = curl_init();
			 curl_setopt($ch,CURLOPT_URL,$url);
			 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			 curl_setopt($ch,CURLOPT_HEADER,0);
			 $output = curl_exec($ch);
			return $output;

		}


}


?>

