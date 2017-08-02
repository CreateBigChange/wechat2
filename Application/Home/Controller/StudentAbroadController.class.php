<?php
namespace Home\Controller;
use Think\Controller;

class StudentAbroadController extends Controller {

    public function Register(){
            
            $openid=session("openid");

            $wechat=M("wechat_userinfo");
            $user=M("user");

            $userid=$wechat->where("openid='".$openid."'")->getField("userid");
            if($userid!=null){

                $this->redirect("LaunchActivity/LaunchActivity");

                $_SESSION['userid']=$userid;
            }
    		$this->display();

    }

    public function  test(){
        echo "www";
    }
    /**
     * @function 注册
     * @paran
     * @return  0 手机未验证
     *           1 信息正确
     */
    public function RegisterFinished(){


        $User=new \Home\Model\UserModel();

        $UserLanguage=new \Home\Model\UserLanguage();
        $Login=new \Home\Model\UserLoginModel();


        /**表示手机验证码已经验证过**/
        $sign=$_SESSION["mobile_sign"];
        if(empty($sign))
        {
            echo "0";
            exit(0);
        }

        /**************插入到用户表******************/
        $Map["ChineseName"]=$_POST["ChineseName"];
        $Map["EnglishName"]=$_POST["EnglishName"];
        $Map["Interesting"]=$_POST["Interest"];
        $Map["Major"]      =$_POST["Major"];
        $Map["Nation"]     =$_POST["nation"];
        $Map["Resume"]     =$_POST["resume"];
        $Map["Phone"]      =$_SESSION["mobile"];
        $Map["foreigher"]="1";

        $id=$User->insert($Map);

        if($id<0){
            return "插入到用户表失败";
        }
        $_SESSION['userid']=$id;
        /**************插入到语言******************/
        for($i=0;$i<count($_POST["language"]);$i++){

            $language[] = array('UserId'=>$id,'Language'=>$_POST["language"][$i],'Rate'=>$_POST["star"][$i]);

        }
        $UserLanguage->insert($language);
        if($UserLanguage<0){
            return "插入到语言表失败";
        }
        /****************插入到wechatuserinfo表***************************/
        $wechatmap["openid"]=session("openid");
        $wechatmap["nickname"]=session("nickname");
        $wechatmap["sex"]=session("sex");
        $wechatmap["language"]=session("language");
        $wechatmap["city"]=session("city");
        $wechatmap["privince"]=session("privince");
        $wechatmap["country"]=session("country");
        $wechatmap["headimgurl"]=session("headimgurl");
        $wechatmap["privilege"]=session("privilege");
        $wechatmap["userid"]=$id;


       


        $wechat_userinfo=M("wechat_userinfo");

        $result=$wechat_userinfo->data($wechatmap)->add();

        if($result<0)
        {
            return "插入到wechatuserinfo表失败";
        }


        /**************插入到登录表******************/
        $ip = get_client_ip();
       // $ip="125.221.225.220";

        $data=array(
            "format"=>"json",
            "ip"=>$ip
        );

        $url="http://int.dpool.sina.com.cn/iplookup/iplookup.php";
        $url = $url.'?'.http_build_query($data);
        $content=file_get_contents($url);

        $addressarr=(array)json_decode($content);

        $Lmap['Ip']=$ip;
        $Lmap['UserId']=$id;
        $Lmap['Country']=$addressarr['country'];
        $Lmap['Province']=$addressarr['province'];
        $Lmap['City']=$addressarr['city'];
        $Lmap['District']=$addressarr['district'];
        $Lmap['Time']=time();

        $loginresult=$Login->insert($Lmap);

        if($loginresult<0){
            return "插入到登录表失败";
        }

    }

    /**
     *
     * @function curl Get请求
     * @param
     *          url 请求的url
     *          data 携带的data
     *          time 超时
     *
     * @returen  返回的内容
     */
    public function CURL($url,$data,$timeout = 15){

        if($url == "" || $timeout <= 0){
            return false;
        }

        $url = $url.'?'.http_build_query($data);


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HEADER, 0); // 不要http header 加快效率
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }


    public function codeverify(){


//        $appid="wx98804dd861f4b1a5";
//
//        $secret="a639d35f141c49f254f01dbc3688cdb2";
//
//        $url ="https://api.weixin.qq.com/cgi-bin/token";
//
//        $data=array("grant_type"=>"client_credential",
//                    "appid"=>$appid,
//                    "secret"=>$secret
//        );
//
//        $result=$this->CURL($url,$data);
//        $tokenarr=(array)json_decode($result);
//        $access_token=$tokenarr['$tokenarr'];


//        https://api.weixin.qq.com/cgi-bin/user/get?access_token=ACCESS_TOKEN&next_openid=NEXT_OPENID

    }   

    public function LaunchActivity(){
    		$this->display();
    }


    public function person(){

        $userid=$_SESSION['userid'];

        $user=M('user');
        $activity=M("activity");
        $activitypeople=M("activitypeople");
        $shop=M("shop");

        //找出用户信息
        $userinfo=$user->where("id=$userid")->find();

        //找出用户参与的所有活动的活动id
        $activitys=$activitypeople->field("ActivityId")->where("UserId=".$userid)->select();
       

        $userinfo["activitysum"]=count($activitys);

        for($i=0;$i<count($activitys);$i++){
            $detailactivity[$i]=$activitys[$i]["ActivityId"];
        }

        $map['Id']=array('in',$detailactivity);

        $activityinfos=$activity->where($map)->select();

        if($activityinfos){

            for($i=0;$i<count($activityinfos);$i++){

                $num=$activitypeople->where("ActivityId=".$activityinfos[$i]["Id"])->Count();
                $address=$shop->where("Id=".$activityinfos[$i]["ShopId"])->field("Address")->select();
                $address=$address[0]["Address"];
                $activityinfos[$i]["address"]=$address;
                $activityinfos[$i]["peopleNum"]=$num; 
            }

        }



        $this->assign("data",$activityinfos);
        $this->assign("person",$userinfo);



        $this->display();

    }
    public function money(){

    	$this->display();
    }
    public function message(){
    	$this->display();
    }
    public function shareDetail(){
    	$this->display();
    }
    public function shareToForeiger(){
    	$this->display();
    }
    public function feedBack(){
    	$this->display();
    }
    public function ChangeInfo(){
    	$this->display();
    }
}