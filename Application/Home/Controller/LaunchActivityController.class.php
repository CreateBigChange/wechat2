<?php
namespace Home\Controller;
use Think\Controller;
class LaunchActivityController extends Controller {

    public function  LaunchActivity(){

        $Shop=M("shop");

        $result=$Shop->select();
        //dump($result);
       // $this->assgin("shop",$result);
        $this->display();
    }


    public function  launch(){

        $Shop = M('shop');
        $activity=M('activity');

/***********************插入到acticity表中*******************************************/
        $map["StartTime"]=$_POST["begintime"];

        $map["EndTime"]=$_POST["endtime"];

        $map["Subject"]=$_POST["subject"];

        $map["Price"]=$_POST["price"];
        $map["Content"]=$_POST["content"];

        $map["Key"]=rand(10000000,99999999);

        $map["ShopId"]=$_POST["shopid"];

        $Phone=$Shop->where("id=".$map["ShopId"])->getField("Phone");
        $map["Phone"]=$Phone;


        $id= $activity->add($map);




/*******************************插入到acticityPeople表中********************************************/
        $activityPoeple=M("activitypeople");
        $data['UserId']=$_SESSION['userid'];
        $data['ActivityId']=$id;

        $sign=$activityPoeple->add($data);
        //dump($data);
        if($sign<0){
            return "插入失败";
        }

        if($id<0)
        {
            return "插入失败";
        }

        $this->redirect( 'Activity?ActivityId='.$id);

    }

    public  function  Activity(){
       //活动的id
        $id=$_GET["ActivityId"];


/**************************活动信息*************************************/
        $activity=M('activity');
        $shop=M('shop');



        $activityData=$activity->where("Id=".$id)->select();

        $shopaddress=$shop->where("Id=".$activityData[0]['ShopId'])->field("Address")->select();



        $data['StartTime']=$activityData[0]['StartTime'];
        $data['EndTime']=$activityData[0]['EndTime'];
        $data['Subject']=$activityData[0]['Subject'];
        $data['Price']=$activityData[0]['Price'];
        $data['Content']=$activityData[0]['Content'];
        $data['Key']=$activityData[0]['Key'];
        $data['ShopId']=$activityData[0]['ShopId'];
        $data['Phone']=$activityData[0]['Phone'];
        $data['address']=$shopaddress[0]['Address'];
/**************************参与活动的人的信息******************************/
        $activityForeighter=M("activitypeople");
        $userModel=M("user");


        $people=$activityForeighter->where("ActivityId=".$id)->field("UserId")->select();

        for($i=0;$i<count($people);$i++){

            $peopleNo[$i]=$people[$i]["UserId"];

        }

        $PeopleMap["Id"]=array("in",implode($peopleNo,','));

        $userinfo=$userModel->where($PeopleMap)->select();

        //dump($userinfo);

        for($i=0;$i<count($userinfo);$i++){

            if(strlen($userinfo[$i]["ChineseName"])>5)
                $userinfo[$i]["ChineseName"]=substr($userinfo[$i]["ChineseName"],0,5)."...";

        }

        /*******************获取用户的语言信息***********************/
        $language=M("userlanguage");
        $languageMap["UserId"]=array("in",implode($peopleNo,','));
        $languageResult=$language->where($languageMap)->select();

        for($i=0;$i<count($languageResult);$i++){

            for($k=0;$k<count($userinfo);$k++){

                if($userinfo[$k]["Id"]==$languageResult[$i]['UserId']){
                    $userinfo[$k]["language"][count($userinfo[$k]["language"])]=$languageResult[$i];
                    break;
                }
            }
        }

        for($fi=0,$si=0,$i=0;$i<count($userinfo);$i++){

            if($userinfo[$i]['foreigher']=='1')
            {
                $Foreighter[$fi]=$userinfo[$i];
                $fi++;
            }
            else{
                $Student[$si]=$userinfo[$i];
                $si++;
            }
        }

        $data['foreight']=$Foreighter;
       //dump($Foreighter);
        $data['student']=$Student;
/****************************活动的留言信息*********************************************/
        $activityCommentModel=M("activitycomment");
        $comment=$activityCommentModel->where("ActivityId=".$id)->select();
        for($i=0;$i<count($comment);$i++){
            $commentUser=$userModel->where("Id=".$comment[$i]['UserId'])->select();
            $comment[$i]["user"]=$commentUser[0];
        }
       // dump($comment);
        $data['comment']=$comment;
/***************************传给view***************************************/
        $this->assign("data",$data);

        $this->assign("ActivityId",$id);


        $this->display();
    }
    public function  comment(){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/img/'; // 设置附件上传根目录
        $upload->savePath  =     'comment/'; // 设置附件上传（子）目录
        $upload->autoSub = false;
        // 上传文件
        $info   =   $upload->upload();

        /*********保存信息到数据库**********/
        $img=M("activitycomment");



        $data["Content"]=$_POST["comment"];
        $data["Img"]=$info["file"]["savename"];
        $data["Time"]=time();
        $data["ActivityId"]=$_GET["ActivityId"];
        $data["UserId"]=$_SESSION["userid"];



        $result=$img->add($data);

        if($result<0)
        {
            return $result;
        }




        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $this->success('操作完成',"Activity?ActivityId=".$_GET["ActivityId"],3);
        }

    }
}
?>