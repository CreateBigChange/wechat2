
/****************************调整语言等级****************************************/

function starClick(e) {

    $(e).parent().children().removeClass("afterStar");
    $(e).parent().children().removeClass("afterStar:after");
    $(e).parent().children().removeClass("afterStar:before");


    num = parseInt($(e).attr("num")) + 1;
    for (var i = 0; i < num; i++) {

        myelement = $(e).parent().children("div." + i + "");

        myelement.addClass("afterStar");
        myelement.addClass("afterStar:after");
        myelement.addClass("afterStar:before");

    }

    $(e).parent().find("input").attr("value", "" + num + "");
}

jQuery(document).ready(function() {
    /********************************短信验证码的发送和检验**********************************************/
    /**
     * @function  短信验证码的发送和检验
     * @param     验证码
     * @return    0 代表错误
     *             1 代表成功
     */
    $("#messagebtn").click(function () {
        pin = $("#pin").val();

        $.ajax({
            url: MODULE+'/MessageVerify/verify',
            type: 'POST',
            cache: false,
            data: {"pin": pin},
            success: function (data) {
                if(data=="0"){
                    alert("验证码有误")
                }else{
                    Phone=1;

                }
            },
            error: function () {
                alert("ajax失败")
            }
        })
    })


/****************************************接受条款*****************************************/
    /**
     * @function 接受条款
     */
    $("#accept").click(function () {

        if (AcceptSign == 1) {
            AcceptSign = 0;
        }
        else {
            AcceptSign = 1;
        }
    })


    /**
     * **************************************添加语言等级*********************************
     */

    $("#more").click(function () {


        var text = '<select name="language[]" class="form-control" style="font-size:13px;height:30px;border:1px solid rgba(51,51,51,.5);" >';
      

text+= '<option value="Afrikaans">Afrikaans</option>';
text+= '<option value="Azerbaycan">Azərbaycan</option>';
text+= '<option value="Indonesian">Bahasa Indonesia</option>';
text+= '<option value="Malay">Bahasa Melayu</option>';
text+= '<option value="Catalan">Català</option>';
text+= '<option value="Czech">Čeština</option>';
text+= '<option value="Serbian">Cрпски</option>';
text+= '<option value="Danish">Dansk</option>';
text+= '<option value="German">Deutsch</option>';
text+= '<option value="Estonian">Eesti</option>';
text+= '<option value="English">English</option>';
text+= '<option value="Spanish">Español</option>';
text+= '<option value="Basque">Euskara</option>';
text+= '<option value="Filipino">Filipino（Tagalog）</option>';
text+= '<option value="French">Français</option>';
text+= '<option value="Galician">Galego</option>';
text+= '<option value="Croatian">Hrvatski</option>';
text+= '<option value="Zulu">isiZulu</option>';
text+= '<option value="Icelandic">íslenska</option>';
text+= '<option value="Italian">Italiano</option>';
text+= '<option value="Swahili">Kiswahili </option>';
text+= '<option value="Latvian">Latviešu</option>';
text+= '<option value="Lithuanian">Lietuvių</option>';
text+= '<option value="Hungarian">Magyar</option>';
text+= '<option value="Dutch">Nederland</option>';
text+= '<option value="Norwegian">Norsk Bokmål</option>';
text+= '<option value="Uzbek">Ozbekcha</option>';
text+= '<option value="Polish">Polski</option>';
text+= '<option value="Portuguese">Português</option>';
text+= '<option value="Romanian">Română</option>';
text+= '<option value="Albanian">Shqip</option>';
text+= '<option value="Slovak">Slovenčina</option>';
text+= '<option value="Slovenian">Slovenščina</option>';
text+= '<option value="Finnish">Suomi</option>';
text+= '<option value="Swedish">Svenska</option>';
text+= '<option value="Vietnamese">Tiếng việt</option>';
text+= '<option value="Turkish">Türkçe</option>';
text+= '<option value="Greek">Ελληνικά</option>';
text+= '<option value="Bulgarian">Български</option>';
text+= '<option value="Macedonian">македонски</option>';
text+= '<option value="Mongolian">Монгол</option>';
text+= '<option value="Russian">Русский</option>';
text+= '<option value="Ukrainian">Український</option>';
text+= '<option value="Georgian">ქართული</option>';
text+= '<option value="Japanese">にほんご</option>';
text+= '<option value="Hebrew">עברית</option>';
text+= '<option value="Arabic">العربية</option>';
text+= '<option value="Persian">فارسی</option>';
text+= '<option value="Nepali">नेपाली</option>';
text+= '<option value="Marathi">मराठी</option>';
text+= '<option value="Hindi">हिंदी</option>';
text+= '<option value="Gujarati">ગુજરાતી</option>';
text+= '<option value="Tamil">தமிழ்</option>';
text+= '<option value="Telugu">తెలుగు</option>';
text+= '<option value="Kannada">ಕನ್ನಡ</option>';
text+= '<option value="Malayalam">മലയാളം</option>';
text+= '<option value="Sinhala">සිංහල</option>';
text+= '<option value="Thai">ไทย</option>';
text+= '<option value="Cambodian">ខ្មែរ</option>';
text+= '<option value="Amharic">አማርኛ</option>';
text+= '<option value="Chinese Traditional">繁体中文</option>';
text+= '<option value="Chinese Traditional（Hong Kong）">繁体中文（香港）</option>';
text+= '<option value="Chinese Simplified">简体中文</option>';
text+= '<option value="Korean">한국어</option>';
text += '</select>';

        text += '<div class="panel-body">';
        text += '<span class="rating" >';
        text += ' <div class="star small star_position 0" num=0 onclick="starClick(this)"></div>'
        text += '<div class="star small star_position 1" num=1 onclick="starClick(this)"></div>'
        text += '<div class="star small star_position 2" num=2 onclick="starClick(this)"></div>'
        text += '<div class="star small star_position 3" num=3 onclick="starClick(this)"></div>'
        text += '<div class="star small star_position 4" num=4 onclick="starClick(this)"></div>';

        text += '<input name="star[]" value=0  class="starinput" style="visibility:hidden;"/>';

        text += '</span>';
        text += '</div>';

        $("#content").append(text);

    })

/******************************添加图片***************************************************/
$("#AddImg").click(function () {

    $("#file").click();


})

    $("#file").change(function () {

        if ($(".photos").length == 1) {
            return 0;
        }

        img = document.getElementById("file").files[0]

        var reader = new FileReader();

        reader.readAsDataURL(img);

        reader.onload = function (e) {

            $("#imgsrc").attr("src", reader.result);

            //$("#img1").append("<img   class='photos' style='width:300px;height: 300px;float: right'  src="+reader.result+" />");

        }
    })


/********************************获取短信验证码*************************************************/
    /** @function 获取短信验证码
     *   @param  code 手机号码
     *   @return  手机号不能为空   成功
     *             提交成功         失败
     *
     *
     **/

    $("#getpit").click(function () {
        code = $("#phone").val();
        $.ajax({
            url: MODULE+'/MessageVerify/getcode',
            type: 'POST',
            cache: false,
            data: {"mobile": code},
            success: function (data) {
                if(data=="手机号不能为空"){
                    alert(data);
                }
            },

            error: function (data) {
                alert("ajax 失败");
            }
        })

        $(this).attr("disable");
        var i = 60;
        var s = setInterval(function () {

            $("#getpit").text(i);
            i = i - 1;
            if (i == 0) {
                $("#getpit").text("Get PIN");
                clearInterval(s);
            }
        }, 1000)
    })

/*******************************登录********************************************/


$("#login").click(function () {

    //创建FormData数据
    if(AcceptSign==0){
        alert("请先接受条框")
       return 0;
    }
    if(Phone==0){
        alert("请先进行手机验证")
       return 0;
    }
    if($("#username")==""){
        alert("用户名不能为空")
        return  0;
    }
    if($("#englishname")==""){
        alert("英文名不能为空")
        return  0;
    }
    if($("#content")==""){
        alert("语言不能为空")
        return  0;
    }








    $.ajax({
        url: CONTROLLER+'/RegisterFinished ',
        type: 'POST',
        cache: false,
        data: new FormData($('#lg-form')[0]),
        processData: false,
        contentType: false,
        success: function () {
            if (AcceptSign == "1") {
                window.location.href = login;
            }
        },
        error: function (data) {

            alert(data);

        }
    })

})


});
