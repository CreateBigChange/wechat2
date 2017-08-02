<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>E角</title>

    <meta content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" name="viewport">
    <link rel="shortcut icon" href="/wechat/Public/resouce/img/logo/title.ico" type="image/x-icon">
    <link rel="icon" href="/wechat/Public/resouce/img/logo/title.ico" type="image/x-icon">

    <link href="/wechat/Public/css/style.css" rel="stylesheet"/>
    <link href='/wechat/Public/css/google.css' rel='stylesheet' type='text/css'>
    <link href="/wechat/Public/Olive/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
    <link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->

    <link href="/wechat/Public/Olive/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS  -->
    <link href="/wechat/Public/Olive/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS  -->
    <link rel="stylesheet" type="text/css" href="/wechat/Public/css/StudentAbroad/register.css">

    <script type="text/javascript">
        /*用于标记是否完成手机的验证和接受条款*/
         AcceptSign = 0;
         Phone = 0;
         MODULE="/wechat/index.php/Home";
         CONTROLLER ="/wechat/index.php/Home/StudentAbroad";
         login="<?php echo U('LaunchActivity/LaunchActivity')?>";

    </script>

</head>
<body>

<!-- 模态框（Modal）语言等级说明 -->
<div class="modal fade rateInformation" id="direction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog LanguageModel">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title Direction" >Direction</h4>
                </center>
            </div>
            <div class="modal-body">

                <div class="list-group">
                    <a href="#" class="list-group-item active title-color">
                        <h4 class="list-group-item-heading ">
                            5 stars
                        </h4>
                    </a>
                    <a href="#" class="list-group-item ">
                        <p class="list-group-item-text ">
                            Expert User. Has fully operational command of the language： appropriate，accurate and fluent
                            with complete understanding.
                        </p>
                    </a>
                    <a href="#" class="list-group-item active title-color">
                        <h4 class="list-group-item-heading ">
                            4 stars
                        </h4>
                    </a>
                    <a href="#" class="list-group-item">
                        <p class="list-group-item-text">
                            Good User. Has operational command of the language,though with occasional
                            inaccuracies,inappropriacies and misunderstandings in some situations. Generally handles
                            complex language well and understands detailed reasoning
                        </p>
                    </a>
                    <a href="#" class="list-group-item active title-color">
                        <h4 class="list-group-item-heading">
                            3 stars
                        </h4>
                    </a>
                    <a href="#" class="list-group-item">
                        <p class="list-group-item-text">
                            Competent User. Has generally effective command of the language despite some
                            inaccuracies,inappropriacies and misunderstandings. Can use and understand fairly complex
                            language,particularly in familiar situations.
                        </p>
                    </a>
                    <a href="#" class="list-group-item active title-color">
                        <h4 class="list-group-item-heading">
                            2 stars
                        </h4>
                    </a>
                    <a href="#" class="list-group-item">
                        <p class="list-group-item-text">
                            Limited User. Basic competence is limited to familiar situations. Has frequent problems in
                            understanding and expression. Is not able to use complex language.

                        </p>
                    </a>
                    <a href="#" class="list-group-item active title-color">
                        <h4 class="list-group-item-heading">
                            1 stars
                        </h4>
                    </a>
                    <a href="#" class="list-group-item">
                        <p class="list-group-item-text">
                            Intermittent User. No real communication is possible except for the most basic information
                            using isolated words or short formulae in familiar situations and to meet immediate needs.
                            Has great difficulty understanding spoken and written Engli
                        </p>
                    </a>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default closeBtn" data-dismiss="modal">Close</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->


<!--关注微信公众号的模态框-->

<!-- 模态框（Modal） -->
<div class="modal fade Verify" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title verifyTitle" >Verify</h4>
                </center>
            </div>
            <div class="modal-body VerifyBody">
                <form role="form">
                    <div class="form-group">
				    <span>
				    	<input type="text" class="form-control PhoneNumInput" id="phone" placeholder="Phone Number">
				    </span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control pinInput" placeholder="PIN" id="pin" value="">
                        <button type="button" id="getpit" class="btn btn-info Pin">Get PIN</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default verifyClose" data-dismiss="modal">Close</button>
                <a href="<?php echo U('Activity')?>"></a>
                <button type="button" class="btn btn-primary messagebtn" id="messagebtn" data-dismiss="modal">Confirm</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->


<div class="lg-container body">
    <h1 class="BaseColor register"> Register </h1>
    <form action="/wechat/index.php/Home/StudentAbroad/RegisterFinished" id="lg-form" name="lg-form" method="post"
          enctype="multipart/form-data">
        <div>
            <input type="text" name="ChineseName" id="username" placeholder="Chinese Name"/>
        </div>

        <div>
            <input type="text" name="EnglishName" placeholder="English Name"/>
        </div>
        <div>
        <!--语言的添加-->
        <div id="content">
        </div>
        <!--语言的添加-->
        <button class="btn  btn-default BaseColor Language" id="more" type='button'>+language</button>
        <img src="/wechat/Public/resouce/img/u=5599099874283859303&fm=21&gp=0.png" class="Limg" data-toggle="modal"
             data-target="#direction"/>
         </div>
        <div>
            <input type="text" name="Interest" id="Interest" placeholder="Interest"/>
        </div>
        <div>
            <input type="text" name="Major" id="Major" placeholder="Major"/>
        </div>

        <div>
            <label for="Interest">Nation:</label>
            <select name="nation" class="nation">
                <option value="china">中国</option>
                <option value=USA"">USA</option>
                <option value="English">English</option>
                <option value="Japan">日本</option>
                <option value="Korea">한국</option>
                <option value="Russia">россия </option>
            </select>

        </div>
        <div>
            <label for="Interest">Intruduction:</label>
            <textarea type="text" name="resume" id="resume" placeholder="individual resume"></textarea>
        </div>
        <div>

            <button style="overflow-y: auto" data-toggle="modal" data-target="#myModal" class="btn btn-default message">Message Verify</button>
        </div>
        <div class="finishBtn">

            <button type="button" class="btn btn-default BaseColor finishButton" id="login">Finish</button>

            <input type="checkbox" id="accept" class="AcceptInput"/>
            <div class="Accept">Accept <a href="#">《Student in terms of Service》</a>
            </div>
        </div>
    </form>
    <div id="message"></div>
</div>

<script src="/wechat/Public/js/jquery-1.8.2.min.js"></script>
<script src="/wechat/Public/js/register.js"></script>
<script src="/wechat/Public/js/bootstrap.js"></script>

</body>
</html>