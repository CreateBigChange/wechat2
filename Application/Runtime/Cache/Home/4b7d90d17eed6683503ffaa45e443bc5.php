<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
	<title>活动</title>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/wechat/Public/Olive/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON STYLESHEET -->
    <link href="/wechat/Public/Olive/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/wechat/Public/Olive/css/style-responsive.css" rel="stylesheet"><!-- THEME BASIC RESPONSIVE  CSS -->
    <link href="/wechat/Public/bootstrap-star-rating-master/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="/wechat/Public/css/bootstrap3.css" rel="stylesheet">
    <link rel="stylesheet" href="/wechat/Public/css/Activity.css">
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
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
     <!-- END STYLESHEET-->

<body>


<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog self-model">
        <div class="modal-content" style="width: 100%;overflow:hidden;zoom:1;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <center>
               	<h4 class="modal-title model_font" id="myModalLabel">Message</h4>
               </center> 
            </div>
            <div class="modal-body"  >
			<form role="form"  enctype="multipart/form-data"  action="/wechat/index.php/Home/LaunchActivity/comment?ActivityId=<?php echo ($ActivityId); ?>"  method="post">

			  <div class="form-group">
			    <textarea class="form-control model_font" name="comment" rows="10"></textarea>
			  </div>
					<input type="file"   name="file" id="doc" multiple="multiple"  style="display: none;width:150px;" onchange="javascript:setImagePreviews();" accept="image/*" />
					<div id="inputfile">				
					</div>
					<div id="dd" >
					</div>
					<div>
						<img src="/wechat/Public/resouce/img/20e26efe6ab39c460e9cbdca87af4bef.png" class="photoimg" id="addimg">
					</div>	


            <div class="modal-footer" style="clear:both;">
                <button type="button" class="btn btn-default model_font" data-dismiss="modal" >close</button>
                <button type="submit" class="btn btn-info model_font">submit</button>
            </div>
            </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 模态框（Modal） -->

<div class="modal fade" id="repeal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel" style="font-size:18px;">cancel</h4>
            </div>
            <div class="modal-body" style="font-size:15px;">are you sure cancel the Acticity?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal" style="font-size:15px;width:80px;">No</button>
                <a href="/wechat/index.php/Home/LaunchActivity/LaunchActivity"><button type="button" class="btn btn-default" style="font-size:15px;width:80px;">Yes</button></a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 模态框（Modal） -->

<div class="head">
	<span class="title_font">Acticity Detail</span>
</div>
<div class="body">
	
	<div class="detail">
		<div class="topic common"><?php echo ($data["Subject"]); ?> </div>
		<div class="time common"><?php echo ($data["StartTime"]); ?>-<?php echo ($data["EndTime"]); ?> </div>
		<div class="price common"><?php echo ($data["Price"]); ?><div class="password"><button  class="btn btn-info"   style="margin-top: -15px;" data-toggle="modal" data-target="#repeal">cancel</button></div></div>
        <div class="price common">key:<?php echo ($data["Key"]); ?></div>


		<div class="address">
			<div class="detail_address common"><img src="/wechat/Public/resouce/img/timg.png"  class="address_img" /><?php echo ($data["address"]); ?></div>
			<div class="phone common"> <a href="tel:18390231902"  class="tela"><img src="/wechat/Public/resouce/img/54bedfff028d1b848078722914c30eb6.png"  class="phone-img" /></a></div>
		</div>
		
    <div class="detail_content common" style="letter-spacing:2px;word-wrap:break-word; overflow:hidden;">content:<?php echo ($data["Content"]); ?></div>

	</div>
	<div class="foreigner">
        <?php if(is_array($data["foreight"])): $i = 0; $__LIST__ = $data["foreight"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="foreignerpicture">
              <a href="<?php  echo U('StudentAbroad/Person')?>"><img class="foreignertouxiang" src="/wechat/Public/Olive/img/avatar1.jpg"></a>
              <div class="foreignername">
                   <div><span class="nametitle"><?php echo ($vo["EnglishName"]); ?> </span></div>
                    <div >
                        <?php if(is_array($vo["language"])): $i = 0; $__LIST__ = $vo["language"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$language): $mod = ($i % 2 );++$i;?><div class="detailanguage">
                                <span class="namedetail"><?php echo ($language["Language"]); ?></span>
                                <div class="stars">
                                    <?php $__FOR_START_241407668__=0;$__FOR_END_241407668__=$language["Rate"];for($i=$__FOR_START_241407668__;$i < $__FOR_END_241407668__;$i+=1){ ?><img  src="/wechat/Public/resouce/img/Activity/star-full.png" class="star"/><?php } ?>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<div class="chinese">
        <?php if(is_array($data["student"])): $i = 0; $__LIST__ = $data["student"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
                <a href="<?php echo U('LookPerson') ?>"><img class="touxiang" src="/wechat/Public/Olive/img/avatar1.jpg" /></a>
                <div class="name">
                    <div class="chineseName"><?php echo ($vo["ChineseName"]); ?></div>
                         <div style="width: 100%;height: 50px;">
                             <?php if(is_array($vo["language"])): $i = 0; $__LIST__ = $vo["language"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$language): $mod = ($i % 2 );++$i;?><div class="chineseLAN"><?php echo ($language["Language"]); ?></div>
                                 <div class="chineseLAN badge pull-right rate"><?php echo ($language["Rate"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
                          </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

<div class="commition">
         <section >
         
          <!-- BEGIN WRAPPER  -->
            <section class="wrapper" style="margin-top:10px;width:97%;margin-left:15px;"> 
            <!-- BEGIN ROW  -->
            <!-- BEGIN ROW  -->
               <div class="row">
                  <div class="col-lg-6" style="background:#ffffff;padding: 0px !important;">
                    <?php if(is_array($data["comment"])): $i = 0; $__LIST__ = $data["comment"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?><section class="panel">
                        <div class="panel-body">
                           <div class="timeline-messages">
                              <div class="msg-time-chat" style="margin-bottom:100px;">
                                 <a class="message-img" href="#"><img alt="" src="img/chat-avatar.jpg" class=""></a>
                                 <div class=" msg-in" >
                                    <span class="arrow"></span>
                                    <div class="text" style="overflow:hidden">
                                       <p class="attribution" style="font-size:18px;"><a href="#" style="font-size:18px;"><?php echo ($comment["user"]["EnglishName"]); ?></a> <?php echo ($comment["Time"]); ?></p>
                                       <p style="font-size:12px;">
                                            <?php echo ($comment["Content"]); ?>
                                       </p>

                                       <p style="font-size:12px;" id="contentpanel" >
                                       	        are you brother?!!!
                                       	        are you brother?!!!
                                       </p>
                        				<a   href="javascript:void(0)" style="font-size:15px;float: right;color:#58C9F3;" class="deloay">unfold </a>
                                        <img  src="/wechat/Uploads/img/comment/<?php echo ($comment["Img"]); ?>"  class="commentimg"/>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section><?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
               </div>
            <!-- END ROW  -->
            </section>
          <!-- END WRAPPER  -->
         </section>
</div>
</div>

 <div style="position: fixed;bottom: 0px;width:100%;padding:0px;background:#E5E6E6;">
    
         <!--<div  contenteditable="true" type="text" name="" placeholder="please type your text"  class="textarea" ></div>-->

		 <center><button class="btn btn-info confire"  data-toggle="modal" data-target="#myModal"> Message</button></center>

		 <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=nOZT9GLb6Rgz6hjxs3a2Uw1kOEhw73y0"></script>
		<script type="text/javascript" src="https://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>
     <script type="text/javascript">

         $(".deloay").click(function(){

             $("#contentpanel").slideToggle("slow");



             if($(".deloay").text()=="fold")
             {
                 $(".deloay").text("unfold");
             }
             else
             {
                 $(".deloay").text("fold");
             }

         });
     </script>
     <script type="text/javascript">
         $(".detail_address").click(function(){


             $.ajax({
                 url:"https://api.map.baidu.com/location/ip?ak=output=json&ak=nOZT9GLb6Rgz6hjxs3a2Uw1kOEhw73y0&coor=WGS84",
                 dataType:"jsonp",
                 success:function(data){
                     //http://lbs.amap.com/console/show/picker 获取当前经纬度
                     window.location.href="https://uri.amap.com/navigation?from=&to=112.92037,27.89834,咖域咖啡&via=&mode=car&policy=1&src=mypage&coordinate=gaode&callnative=0";
                 }
             })
         })
     </script>
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
             var fileList = docObj.files;
             //循环遍历
             for (var i = 0; i < fileList.length; i++) {
                 //动态添加html元素
                 dd.innerHTML += "<div style='float:left' > <img  class='touxiangimg' onclick='deleteimg(this)' id='img" + i + "'  /> </div>";
                 //获取图片imgi的对象
                 var imgObjPreview = document.getElementById("img"+i);

                 if (docObj.files && docObj.files[i]) {
                     //火狐下，直接设img属性
                     imgObjPreview.style.display = 'block';
                     imgObjPreview.style.width = '100px';
                     imgObjPreview.style.height = '100px';
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








     <!--多张图片上传-->
</div>
</body>
</html>