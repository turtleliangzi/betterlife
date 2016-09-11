<?php
/*
 * 我的计划控制器
 * @author turtle
 * createtime 2015-08-28
 */

namespace Home\Controller;

use Home\Common;

class PlanController extends CommonController {

    protected $planLogic;

    public function _auto() {
        $this -> planLogic = D('Plan', 'Logic');
        $this -> autoStartPlan();
    }
    
    public function planOnGoing() {
        $planid = intval(I('get.planid', 0));
        $plan = $this -> planLogic -> getPlanById($planid, 1);
        $this -> plan = $plan;
        $progressList = M('PlanProgress') -> where(array("planid" => $planid)) -> select();
        $this -> progressList = $progressList;
        $this -> display('planongoing');
    }

    public function planIsDone() {
        $planid = intval(I('get.planid'), 0);
        $plan = $this -> planLogic -> getPlanById($planid);
        $this -> plan = $plan;
        $progressList = M('PlanProgress') -> where(array('planid' => $planid)) -> select();
        $this -> progressList = $progressList;
        $this -> display('planisdone');
    }

    public function planWillDo() {
        $planid = intval(I('get.planid'), 0);
        $plan = $this -> planLogic -> getPlanById($planid, 0);
        $this -> plan = $plan;
        $this -> display('planwilldo');
    }

    public function planGiveUp() {
        $planid = intval(I('get.planid'), 0);
        $plan = $this -> planLogic -> getPlanById($planid, 3);
        $this -> plan = $plan;
        $this -> display('plangiveup');
    }

    public function planIsDoneList() {
        $planList = $this -> planLogic -> getPlan(2);
        $this -> planList = $planList;
        $this -> display('planisdonelist');
    }

    public function planWillDoList() {
        $planList = $this -> planLogic -> getPlan(0);
        $this -> planList = $planList;
        $this -> display('planwilldolist');
    }

    public function planGiveUpList() {
        $planList = $this -> planLogic -> getPlan(3);
        $this -> planList = $planList;
        $this -> display('plangiveuplist');
    }

    public function addPlan() {
        $categoryList = A('Category') -> getCategory();
        $where['uid'] = intval($_SESSION['uid']);
        $where['status'] = 1;
        $sourceList = M('Resource') -> where($where) -> select();
        $this -> sourceList = $sourceList;
        $this -> categoryList = $categoryList;
        $this -> display('addplan');
    }

    public function addProgress() {
        $this -> getRequest(addProgress);
    }

    public function completeplan() {
        $this -> getRequest(completeplan);
    }

    public function giveupPlan() {
        $this -> getRequest(giveupPlan);
    }

    public function createPlan() {
       $this -> getRequest(createPlan); 
    }

    public function advancePlan() {
        $this -> getRequest(advancePlan);
    }

    public function editPlan() {
        $planid = intval(I('get.planid', 0));
        $plan = $this -> planLogic -> getPlanById($planid);
        $this -> plan = $plan;
        $categoryList = A('Category') -> getCategory();
        $this -> categoryList = $categoryList;
        $where['uid'] = intval($_SESSION['uid']);
        $where['status'] = 1;
        $sourceList = M('Resource') -> where($where) -> select();
        $this -> sourceList = $sourceList;
        $this -> display('editplan');
    }

    public function modifyPlan() {
        $this -> getRequest(modifyPlan);
    }

    public function pickupPlan() {
        $this -> getRequest(pickupPlan);
    }

    /*
     * 当开始日期等于现在时间时，改变计划状态为正在进行中
     */

    public function autoStartPlan() {
        $this -> planLogic -> autoStartPlan();
    }

    /*
     * 获取前端提交过来的数据
     */

    protected function getRequest($function) {
        if (IS_POST) {
            $data = I('post.data');
            $response = $this -> planLogic -> $function($data);
            $this -> ajaxReturn($response);
        } else {
            $this -> ajaxReturn("sorry, access denied");
        }   
    }
}
