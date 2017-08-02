<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>活动</title>
    <link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/wechat/Public/Olive/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON STYLESHEET -->
    <link href="/wechat/Public/Olive/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/wechat/Public/Olive/css/style-responsive.css" rel="stylesheet"><!-- THEME BASIC RESPONSIVE  CSS -->
    <link href="/wechat/Public/bootstrap-star-rating-master/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet">

	<!-- BEGIN JS --> 


    <script src="/wechat/Public/Olive/js/jquery.js" ></script><!-- BASIC JS LIABRARY -->
    <script src="/wechat/Public/Olive/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
    <script src="/wechat/Public/Olive/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
    <script src="/wechat/Public/Olive/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS  -->
    <script src="/wechat/Public/Olive/js/jquery.nicescroll.js" > </script><!-- NICESCROLL JS  -->
	<script src="/wechat/Public/Olive/assets/dropzone/dropzone.js" ></script><!-- DROPZONE JS  -->
	<script src="/wechat/Public/Olive/assets/dropzone/form-dropzone.js" ></script><!-- DROPZONE JS  -->
	<script src="/wechat/Public/Olive/js/respond.min.js" ></script><!-- RESPOND JS  -->
	<script src="/wechat/Public/Olive/js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->




  	<script src="/wechat/Public/bootstrap-star-rating-master/js/star-rating.js" type="text/javascript"></script>
<!-- END JS --> 

</head>
<style type="text/css">
	.title{

	}
	.head{
		height:120px;
		width:100%;
		background: #66D9EF;
		color: #ffffff;
		
		line-height: 120px;
		text-align: center;
	}
	.title_font{
		font-size: 60px;

	}
	.body{
		
		margin-top: 10px;
		background: #E0E2E4;
	}
	.touxiang{
		width: 160px;
		border-radius: 100px;
		float: left;
	}
	.foreignertouxiang{

		overflow: hidden;
		background: #F6F8F1;
		margin-left: 60px;
		float: left;
		width: 160px;
		border-radius: 100px;
	}
	.foreignername{
		float: left;
		width: 380px;
		margin-left: 20px;
		margin-top: 20px;
		text-align: left;

	}
	.foreignerpicture{
		width: 100%;
		height: 160px;
		margin-top: 30px;
		margin-bottom:30px;

	}
	.foreigner{
		background:#FFFFFF;
		margin-left: 15px;
		margin-top: 30px;

		margin-right: 15px;
		overflow: hidden;
		
	}

	.chinese{
		overflow: hidden;
		background:#FFFFFF;
		margin-left: 15px;
		margin-top: 40px;
		margin-right: 15px;
	}
	.picture{
	 width: 40%;
	 float: left;
	 margin-top: 30px;
	 margin-bottom: 30px;
	 margin-left: 50px;

	}
	.name{
		text-indent: 20px;
		padding-top: 30px;
		color: #000000;
		width: 160px;
		font-size: 37px;
		float: left;
	}
	.nametitle{
		font-size: 38px;
	}
	.namedetail{
		font-size: 38px;
	}
	.scode{
		font-size: 38px;
}
.btn-commit{
	width: 100px;
	height: 80px;
	font-size: 38px !important; 
	float: right;
	margin-right: 30px;
	margin-top: 20px;
}
.commition{

}

.textarea{


    width:80%;


    min-height:60px;


    max-height:300px;


    _height:120px;


    margin-left:30px;


    margin-right:auto;

     margin-top: 20px;
     background: #ffffff;
    padding:3px;


    outline:0;


    border:1px solid #a0b3d6;


    font-size:38px;


    line-height:38px;


    padding:2px;


    word-wrap:break-word;


    overflow-x:hidden;


    overflow-y:auto;

    float:left;
 


    border-color:
rgba(82,168,236,0.8);


    box-shadow:inset 0 1px 3px
rgba(0,0,0,0.1),0 0 8px
rgba(82,168,236,0.6);

}
.confire{
	font-size:38px !important;
	height:100px;
	width: 95% ; 

	 margin-top: 20px;
	 margin-bottom: 20px;
}
.self-model{
	width: auto !important;
	margin-top: 0px !important;
}
.model_font{
	font-size: 40px !important;
}
#contentpanel{
	display: none;
}

.glyphicon{
	display: none !important;
}
.label{
	display: none !important;
}
.comment{
	font-size:50px !important;margin-top:10px;margin-left:10px;
}
.detail{

	width: 97%;
	background:#ffffff;
	margin-left: 15px;
	overflow:hidden;
}
.time{
	
}
.price{
	
}
.address{
	border-bottom: 2px solid #E0E2E4;
}
.topic{
	text-align: center;
}
.detail_content{
	line-height: 50px !important;
	height: auto !important;
}
.phone{
	float: right;
	border-bottom: 0px solid #E0E2E4 !important;
}
.common{
	font-family: '微软雅黑';
	font-size: 30px;
	color:#5E5E5E;
	border-bottom: 2px solid #E0E2E4;
	margin: 10px;
	letter-spacing: 5px;
	line-height: 80px;
	height: 80px;
}
.phone-img{
	width: 40px;
	float: right;
	margin-top: 20px;
	margin-right: 50px;
}
.detail_address{
	border-bottom: 0px solid #E0E2E4;
	background: url("/wechat/Public/resouce/img/timg.png");
	height: 80px;
	overflow: hidden;
}
.address_img{
	width:100px;
}
.password{
	float:right;
	font-size: 30px;
}
</style>



  
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
     <!-- END STYLESHEET-->

<body>



<!-- 模态框（Modal） -->
<div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog self-model">
        <div class="modal-content" style="overflow:hidden;zoom:1;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <center>
               	<h4 class="modal-title model_font" id="myModalLabel">评价</h4>
               </center> 
            </div>
            <div class="modal-body">

			<form role="form">
				<span><img  class="foreignertouxiang" style="width:120px;" src="/wechat/Public/Olive/img/avatar1.jpg" /><span style="line-height:110px;font-size:50px;">&nbsp;&nbsp;&nbsp;&nbsp;xxxxxxx</span></span>
				 <div style="margin-top:60px;font-size:60px;text-align: center"> xxx</div>
				<div style="margin-top:20px;  letter-spacing: 60px;margin-left:240px;">

					<input id="input-2ba" type="number" class="rating" min="0" max="5" step="1" data-stars=5

                 data-symbol="&#xe005;" data-default-caption="{rating} hearts" data-star-captions="{}">
				</div>
				<center>
					<div style="width:80%;">
					
						<button class="btn btn-info comment"  >非常好</button>
						<button class="btn btn-info comment" >1111</button>
						<button class="btn btn-info comment" >223123123123123</button>
						<button class="btn btn-info comment">1</button>
						<button class="btn btn-info comment" >123333</button>
						<button class="btn btn-info comment" >6666</button>

					</div>
				</center>


			  <div class="form-group" style="margin-top:60px;">
			    <textarea class="form-control model_font" rows="6" col=""></textarea>
			  </div>
			</form>

            </div>
            <div class="modal-footer" style="float:right;">
                <button type="button" class="btn btn-default model_font" data-dismiss="modal" >关闭</button>
                <button type="button" class="btn btn-primary model_font">提交</button>
               
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 模态框（Modal） -->



<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog self-model">
        <div class="modal-content" style="width: 100%;overflow:hidden;zoom:1;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <center>
               	<h4 class="modal-title model_font" id="myModalLabel">留言</h4>
               </center> 
            </div>
            <div class="modal-body"  >
			<form role="form" >

			  <div class="form-group">
			    <textarea class="form-control model_font" rows="10"></textarea>
			  </div>
					<input type="file"  multiple name="file" id="doc" multiple="multiple"  style="display: none;width:150px;" onchange="javascript:setImagePreviews();" accept="image/*" />
					
					<div id="inputfile">				
					</div>
					<div id="dd" >
					</div>
					<div>
						<img src="/wechat/Public/resouce/img/20e26efe6ab39c460e9cbdca87af4bef.png" style="width:200px;height:190px;margin:5px;border:2px solid #ddd;" id="addimg">
					</div>	
					<script>



$("#addimg").click(function(){

	$("#doc").click();

})


    //下面用于多图片上传预览功能
    function setImagePreviews(avalue) {
        //获取选择图片的对象
        var docObj = document.getElementById("doc");
        //后期显示图片区域的对象
        var dd = document.getElementById("dd");
        dd.innerHTML = "";
        //得到所有的图片文件
        var fileList = docObj.files;
        //循环遍历
        for (var i = 0; i < fileList.length; i++) {    
            //动态添加html元素        
            dd.innerHTML += "<div style='float:left' > <img style='width:200px;height:150px;float:left;margin:5px;' onclick='deleteimg(this)' id='img" + i + "'  /> </div>";
            //获取图片imgi的对象
            var imgObjPreview = document.getElementById("img"+i); 
            
            if (docObj.files && docObj.files[i]) {
                //火狐下，直接设img属性
                imgObjPreview.style.display = 'block';
                imgObjPreview.style.width = '200px';
                imgObjPreview.style.height = '180px';
                //imgObjPreview.src = docObj.files[0].getAsDataURL();
                //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要以下方式
                imgObjPreview.src = window.URL.createObjectURL(docObj.files[i]);   //获取上传图片文件的物理路径
            }
            else {
                //IE下，使用滤镜
                docObj.select();
                var imgSrc = document.selection.createRange().text;
                //alert(imgSrc)
                var localImagId = document.getElementById("img" + i);
               //必须设置初始大小
                localImagId.style.width = "200px";
                localImagId.style.height = "180px";
                //图片异常的捕捉，防止用户修改后缀来伪造图片
                try {
                    localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                    localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
                }
                catch (e) {
                    alert("您上传的图片格式不正确，请重新选择!");
                    return false;
                }
                imgObjPreview.style.display = 'none';
                document.selection.empty();
            }
        }  
        return true;
    }


function deleteimg(myobj){

	myobj.remove();

}


/*
					var No=0;
					function deleteimg(obj){
						num=obj.getAttribute("no");
						$("[no='"+num+"']").remove();
					}
					function fun(obj){
						

						for(i=0;i<obj.files.length;i++){
						var img =obj.files[i]	
						var reader=new FileReader();						
						reader.readAsDataURL(img);
						reader.onload=function(e){

							
							$("#showimg").append("<img src="+reader.result+" class='img'  no="+No+" onclick='deleteimg(this)'/>");								
							No++;							
						}

						}

					}
					$("#addimg").click(function(){
							html='<input style="display:none" type="file"   multiple  class="file" name="imgfile[]" no='+No+' onchange="fun(this)">';							
							if($(".file").length>=10){
								alert("只能增加10张图片");							
								return;
							} 							
							$("#inputfile").append(html);								
							$(".file")[$(".file").length-1].click();													
						});
					function reloadPage(){
					location.reload(true);
					}

*/

					</script>					
		


			</form>




			  <!--多张图片上传-->
            </div>
            <div class="modal-footer" style="clear:both;">
                <button type="button" class="btn btn-default model_font" data-dismiss="modal" >取消</button>
                <button type="button" class="btn btn-info model_font">提交</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 模态框（Modal） -->







<div class="head">
	<span class="title_font">活动详情</span>
</div>
<div class="body">
	
	<div class="detail">
		<div class="topic common">咖域咖啡的晚会专场 </div>
		<div class="time common">2017年5月13日 , 9:00-12:00 <button style="float:right;font-size: 38px;" class="btn btn-success"  data-toggle="modal" data-target="#repeal">报名</button></div>
		<div class="price common">¥20 <div class="password">密钥:183002155</div></div>
		
		<div class="address">
			<span class="detail_address common"><img src="/wechat/Public/resouce/img/timg.png"  class="address_img" />湖南科技大学堕落街 咖域咖啡</span>
			<span class="phone common"> <a href="tel:18390231902" style="display:block;height:80px;width:200px;"><img src="/wechat/Public/resouce/img/54bedfff028d1b848078722914c30eb6.png"  class="phone-img" /></a></span>
		</div>
		<div class="detail_content common"><span style="letter-spacing:2px;">内容</span>:本次的活动请带好手机和相关的活动物品，大家7点准时到哦</div>

	</div>
	

	<script type="text/javascript">




		$(".detail_address").click(function(){


		$.ajax({
			url:"http://api.map.baidu.com/location/ip?ak=output=json&ak=nOZT9GLb6Rgz6hjxs3a2Uw1kOEhw73y0&coor=WGS84",
			dataType:"jsonp",
			success:function(data){
				


				//http://lbs.amap.com/console/show/picker 获取当前经纬度


		        window.location.href="http://uri.amap.com/navigation?from=&to=112.92037,27.89834,咖域咖啡&via=&mode=car&policy=1&src=mypage&coordinate=gaode&callnative=0";


			}
		})
			

					

		})
	</script>>
	<div class="foreigner">
		
		<div class="foreignerpicture">
			<a href="<?php  echo U('Person')?>"><img class="foreignertouxiang" src="/wechat/Public/Olive/img/avatar1.jpg"></a>
			<div class="foreignername">
				
					<div><span class="nametitle">张三 </span><span></span><span class="scode">5.0</span></div>
					
					<span class="namedetail">英语</span><span class="scode"> 5.0 </span><span> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="namedetail">英语</span><span class="scode"> 5.0 </span><span> </span> 
				
			</div>
			

		</div>
		<div class="foreignerpicture">
			<a href="<?php  echo U('LookPerson')?>"><img class="foreignertouxiang" src="/wechat/Public/Olive/img/avatar1.jpg"></a>
			<div class="foreignername">
				
					<div><span class="nametitle">张三 </span><span></span><span class="scode">5.0</span></div>
					
					<span class="namedetail">英语</span><span class="scode"> 5.0 </span><span> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="namedetail">英语</span><span class="scode"> 5.0 </span><span> </span> 
				
			</div>
						<div class="commit">
				<button class="btn btn-info btn-commit" data-toggle="modal" data-target="#comment" >评价</button>
			</div>
			
		
		</div>
		<div class="foreignerpicture">
			<img class="foreignertouxiang" src="/wechat/Public/Olive/img/avatar1.jpg">
			<div class="foreignername">
				
					<div><span class="nametitle">张三 </span><span></span><span class="scode">5.0</span></div>
					
					<span class="namedetail">英语</span><span class="scode"> 5.0 </span><span> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="namedetail">英语</span><span class="scode"> 5.0 </span><span> </span> 
				
			</div>
			
	
		</div>

	</div>

	<div class="chinese">

		<div class="picture">
			<a href="<?php echo U('LookPerson') ?>"><img class="touxiang" src="/wechat/Public/Olive/img/avatar1.jpg" /></a>
			<div class="name">
				
				<div>王五</div>
				<div>
					<span>中文</span> <span>5.0</span>
				</div>
			</div>
		</div>
		<div class="picture">
			<img class="touxiang" src="/wechat/Public/Olive/img/avatar1.jpg">
			<div class="name">
				
				<div>王五</div>
				<div>
					<span>中文</span> <span>5.0</span>
				</div>
			</div>
		</div>
		<div class="picture">
			<img class="touxiang" src="/wechat/Public/Olive/img/avatar1.jpg">
			<div class="name">
				
				<div>王五</div>
				<div>
					<span>中文</span> <span>5.0</span>
				</div>
			</div>
		</div>

		<div class="picture">
			<img class="touxiang" src="/wechat/Public/Olive/img/avatar1.jpg">
			<div class="name">xx</div>
		</div>
		<div class="picture">
			<img class="touxiang" src="/wechat/Public/Olive/img/avatar1.jpg">
			<div class="name">xx</div>
		</div>
		<div class="picture">
			<img class="touxiang" src="/wechat/Public/Olive/img/avatar1.jpg">
			<div class="name">xx</div>
		</div>
		
	</div>

<div class="commition">
         <section >
         
          <!-- BEGIN WRAPPER  -->
            <section class="wrapper" style="margin-top:10px;width:97%;margin-left:15px;"> 
            <!-- BEGIN ROW  -->
        
            <!-- END ROW  -->

            <!-- END ROW  -->
            <!-- BEGIN ROW  -->
               <div class="row">

                  <div class="col-lg-6" style="background:#ffffff;">
                     <section class="panel">
                        <div class="panel-body">
                           <div class="timeline-messages">
                              <div class="msg-time-chat" style="margin-bottom:100px;">
                                 <a class="message-img" href="#"><img alt="" src="img/chat-avatar.jpg" class="avatar" style="width:100px;height:100px;"></a>
                                 <div class="message-body msg-in" style="margin-left:200px;">
                                    <span class="arrow"></span>
                                    <div class="text" style="overflow:hidden">
                                       <p class="attribution" style="font-size:28px;"><a href="#" style="font-size:28px;">Chintan Pandya</a> at 1:55pm, 13th April 2013</p>
                                       <p style="font-size:38px;">
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       brother?</p>
                                       <p style="font-size:38px;" id="contentpanel" >
                                       	        are you brother?!!!
                                       	        are you brother?!!!
                                       	        are you brother?!!!
                                       	        are you brother?!!!
                                       	        are you brother?!!!
                                       	        are you brother?!!!
                                       </p>
                            			

                        				<a   href="javascript:void(0)" style="font-size:35px;float: right;color:#58C9F3;" class="deloay">展开 </a> 

                                    	<script type="text/javascript">
                                    			
                                    		$(".deloay").click(function(){

											    $("#contentpanel").slideToggle("slow");

											    

											    if($(".deloay").text()=="收起")
											    {
											    	$(".deloay").text("展开");
											    }
											    else
											    {
											    	$(".deloay").text("收起");
											    }
											    	
											    


											});
										
										</script>>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </section>
                     <section class="panel">
                        <div class="panel-body">
                           <div class="timeline-messages">
                              <div class="msg-time-chat" style="margin-bottom:100px;">
                                 <a class="message-img" href="#"><img alt="" src="img/chat-avatar.jpg" class="avatar" style="width:100px;height:100px;"></a>
                                 <div class="message-body msg-in" style="margin-left:200px;">
                                    <span class="arrow"></span>
                                    <div class="text">
                                       <p class="attribution" style="font-size:28px;"><a href="#" style="font-size:28px;">Chintan Pandya</a> at 1:55pm, 13th April 2013</p>
                                       <p style="font-size:38px;">Hello, How are you brother?Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                            			brother?</p>

                        
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </section>                     <section class="panel">
                        <div class="panel-body">
                           <div class="timeline-messages">
                              <div class="msg-time-chat" style="margin-bottom:100px;">
                                 <a class="message-img" href="#"><img alt="" src="img/chat-avatar.jpg" class="avatar" style="width:100px;height:100px;"></a>
                                 <div class="message-body msg-in" style="margin-left:200px;">
                                    <span class="arrow"></span>
                                    <div class="text">
                                       <p class="attribution" style="font-size:28px;"><a href="#" style="font-size:28px;">Chintan Pandya</a> at 1:55pm, 13th April 2013</p>
                                       <p style="font-size:38px;">Hello, How are you brother?Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                                       Hello, How are you brother?
                            			brother?</p>

                        
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </section>

                  </div>
               </div>
            <!-- END ROW  -->
            </section>
          <!-- END WRAPPER  -->
         </section>
</div>
</div>

 <div style="position: fixed;bottom: 0px;width:100%;padding:0px;background:#E5E6E6;height:130px;">
    
         <!--<div  contenteditable="true" type="text" name="" placeholder="please type your text"  class="textarea" ></div>-->

		 <center><button class="btn btn-info confire"  data-toggle="modal" data-target="#myModal"> 留言</button></center>

		 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=nOZT9GLb6Rgz6hjxs3a2Uw1kOEhw73y0"></script>  
		<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>


</div>
</body>
</html>