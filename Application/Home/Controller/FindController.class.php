<?php
namespace Home\Controller;
use Think\Controller;
class FindController extends Controller {
    public function find(){
/*************************所有活动********************************/
            $activityModel=M("activity");
            $shopModel=M("shop");


            $activity=$activityModel->select();

            for($i=0;$i<count($activity);$i++){

                $result=$shopModel->where("id=".$activity[$i]["ShopId"])->select();
                $count=$activityModel->where("ShopId=".$activity[$i]["ShopId"])->count();

                $activity[$i]["shop"]=$result[0];
                $activity[$i]["count"]=$count;

            }

            $this->assign("activity",$activity);
            //dump($activity);
            $this->display();

    }

}