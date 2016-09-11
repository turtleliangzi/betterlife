<?php

/*
 * 计划业务逻辑
 */

namespace Home\Logic;

use Think\Model;

class PlanLogic extends Model {

    protected $planModel;

    public function _initialize() {
        $this -> planModel = D('Plan');
    }

    public function createPlan($data) {
        $data['title'] = htmlspecialchars($data['title']);
        $category = intval($data['category']);
        if (empty($data['title'])) {
            return return_result(0, "计划名不能为空");
        }
        if ($category == 0) {
            return return_result(0, "请选择分类");
        }
        if (empty($data['tags'])) {
            return return_result(0, "请选择标签");
        }
        
        $plan['title'] = $data['title'];
        $plan['uid'] = intval($_SESSION['uid']);
        $plan['category'] = $data['category'];
        $plan['tags'] = json_encode($data['tags']);
        $plan['starttime'] = strtotime($data['starttime']);
        $plan['endtime'] = strtotime($data['endtime']);
        $plan['description'] = $data['description'];
        $rs = $this -> planModel -> createPlan($plan);
        if ($rs) {
            foreach ($data['sources'] as $k => $r) {
                $resource[$k]['resource'] = $r;
                $resource[$k]['plan'] = $rs; 
            }
            $r = $this -> planModel -> addSource($resource);
            if ($r) {
                return return_result(1, "计划添加成功");
            } else {
                $this -> planModel -> deletePlan($rs);
                return return_result(0, "计划添加失败");
            }
        } else {
            return return_result(0, "计划添加失败");
        }

    }

    public function getPlan($status) {
        $where['uid'] = intval($_SESSION['uid']);
        $where['status'] = $status;
        $planList = $this -> planModel -> getPlan($where);
        $now = strtotime(date('Y-m-d', time()));
        if ($status === 0) {
            foreach ($planList as $k => $plan) {
                $days = intval(($plan['starttime'] - $now)/86400);
                $planList[$k]['days'] = $days;
            }
        } else if ($status === 1) {
            foreach ($planList as $k => $plan) {
                $days = intval(($plan['endtime'] - $now)/86400);
                $planList[$k]['days'] = $days;
            }
        }
        return $planList;
    }

    public function getPlanById($planid, $status) {
        $authPlan = $this -> planModel -> authPlan($planid, $status);
        if (empty($authPlan)) {
            return "";
        }
        return $this -> planModel -> getPlanById($planid);
    }

    public function autoStartPlan() {
        $planList = $this -> planModel -> autoStartPlan();
        foreach ($planList as $k => $plan) {
            $planList[$k]['status'] = 1;
            M('Plan') -> save($planList[$k]);
        }

    }

    public function addProgress($data) {
        $data['planid'] = intval($data['planid']);
        $data['content'] = htmlspecialchars($data['content']);
        if (empty($data['content'])) {
            return return_result(0, "内容不能为空");
        }
        $plan = $this -> planModel -> authPlan($data['planid']);
        if (empty($plan)) {
            return return_result(0, "该计划不存在");
        }
        $data['time'] = strtotime($data['time']);
        $rs = $this -> planModel -> addProgress($data);
        if ($rs) {
            return return_result(1, "添加进度成功");
        } else {
            return return_result(0, "添加进度失败");
        }
    }

    public function completeplan($data) {
        $data['planid'] = intval($data['planid']);
        $plan = $this -> planModel -> authPlan($data['planid']);
        if (empty($plan)) {
            return return_result(0, "该计划不存在");
        }
        $rs = $this -> planModel -> completeplan($data['planid']);
        if ($rs === false) {
            return return_result(0, "完成计划失败");
        } else {
            return return_result(1, "完成计划成功");
        }
    }

    public function giveupPlan($data) {
        $data['planid'] = intval($data['planid']);
        $data['reason'] = htmlspecialchars($data['reason']);
        $plan = $this -> planModel -> authPlan($data['planid']);
        if (empty($plan)) {
            return return_result(0, "该计划不存在");
        }
        $data['status'] = 3;
        $rs = $this -> planModel -> giveupPlan($data);
        if ($rs === false) {
            return return_result(0, "放弃计划失败");
        } else {
            return return_result(1, "放弃计划成功");
        }
    }
    
    public function advancePlan($data) {
        $data['planid'] = intval($data['planid']);
        $plan = $this -> planModel -> authPlan($data['planid']);
        if (empty($plan)) {
            return return_result(0, "该计划不存在");
        }
        $data['starttime'] = strtotime(date("Y-m-d", time()));
        $data['status'] = 1;
        $rs = $this -> planModel -> advancePlan($data);
        if ($rs === false) {
            return return_result(0, "提前开始计划失败");   
        } else {
            return return_result(1, "提前开始计划成功");
        }
    }

    public function modifyPlan($data) {
        $plan['planid'] = intval($data['planid']);
        $plan['title'] = htmlspecialchars($data['title']);
        $plan['category'] = intval($data['category']);
        $authPlan = $this -> planModel -> authPlan($plan['planid']);
        if (empty($authPlan)) {
            return return_result(0, "该计划不存在");
        }
        if (empty($plan['title'])) {
            return return_result(0, "计划名不能为空");
        }
        if (empty($data['tags'])) {
            return return_result(0, "标签不能为空");
        }
        if ($plan['category'] === 0) {
            return return_result(0, "请选择分类");
        }
        $plan['tags'] = json_encode($data['tags']);
        $plan['starttime'] = strtotime($data['starttime']);
        $plan['endtime'] = strtotime($data['endtime']);
        $plan['description'] = $data['description'];
        $rs = $this -> planModel -> modifyPlan($plan);
        if ($rs === false) {
            return return_result(0, "编辑计划失败");
        } else {
            foreach ($data['sources'] as $k => $source) {
                $resource[$k]['resource'] = $source;
                $resource[$k]['plan'] = $data['planid'];
            }
            $this -> planModel -> modifyResource($resource, $plan['planid']);
            return return_result(1, "编辑计划成功");

        }

    }

    public function pickupPlan($data) {
        $data['planid'] = intval($data['planid']);
        $plan = $this -> planModel -> authPlan($data['planid']);
        if (empty($plan)) {
            return return_result(0, "该计划不存在");
        }
        $rs = $this -> planModel -> pickupPlan($data);
        if ($rs === false) {
            return return_result(0, "拾取计划失败");
        } else {
            return return_result(1, "拾取计划成功");
        }
    }

}
