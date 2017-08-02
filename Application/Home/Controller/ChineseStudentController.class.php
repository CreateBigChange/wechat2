<?php
namespace Home\Controller;
use Think\Controller;
class ChineseStudentController extends Controller {

    public function Register(){
    		$this->display();
    }

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
        $Map["Nation"]     ="China";
        $Map["Resume"]     =$_POST["resume"];
        $Map["Phone"]      =$_SESSION["mobile"];
        $Map["foreigher"]="0";

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
        /**************插入到登录表******************/
        //$ip = get_client_ip();
        $ip="125.221.225.220";

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

    public function find(){
    		$this->display();
    }

    public function detail(){

    	$this->display();
    }
    public  function person(){

    	$this->display();
    }
}