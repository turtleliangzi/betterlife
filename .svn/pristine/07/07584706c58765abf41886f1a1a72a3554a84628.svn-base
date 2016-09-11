<?php
/*
 * 计划模型
 */

namespace Home\Model;

use Think\Model;

class PlanModel extends Model {

    public function createPlan($plan) {
        $plan['description'] = addslashes($plan['description']);
        return M('Plan') -> add($plan);
    }

    public function addSource($resource) {
        return M('PlanResource') -> addAll($resource);
    }

    public function deletePlan($planid) {
        M('Plan') -> where(array("planid" => $planid)) -> delete();
    }

    public function getPlan($where) {
        return M('Plan') -> where($where) -> select();
    }

    public function authPlan($planid, $status = "") {
        $where['planid'] = $planid;
        $where['uid'] = intval($_SESSION['uid']);
        if (!empty($status)) {
            $where['status'] = $status;
        }
        return M('Plan') -> where($where) -> find();
    }

    public function getPlanById($planid) {
        $where['planid'] = $planid;
        $plan = M('Plan') -> where($where) -> find();
        $plan['category'] = M('Category') -> where(array("categoryid" => $plan['category'])) -> find();
        $tags = json_decode($plan['tags'], true);
        $plan['tags'] = array();
        foreach ($tags as $k => $tag) {
            $plan['tags'][$k] = M('Sign') -> where(array("signid" => intval($tag))) -> find();
        }
        $plan['resources'] = M('Resource r') -> join(' bl_plan_resource pr on r.rid=pr.resource') -> where(array("plan" => $plan['planid'])) -> select();
        $plan['description'] = stripslashes($plan['description']);
        $plan['description'] = html_entity_decode($plan['description']);
        return $plan;
    }

    public function autoStartPlan() {
        return M('Plan') -> where(array("status" => 0, "uid" => intval($_SESSION['uid']))) -> having('unix_timestamp(curdate()) >= starttime') -> select();
    }

    public function addProgress($data) {
        return M('PlanProgress') -> add($data);
    }

    public function completeplan($planid) {
        $plan['status'] = 2;
        $plan['planid'] = $planid;
        $plan['realendtime'] = time();
        return M('Plan') -> save($plan);
    }

    public function giveupPlan($data) {
        return M('Plan') -> save($data);
    }

    public function advancePlan($data) {
        return M('Plan') -> save($data);
    }

    public function modifyPlan($plan) {
        $plan['description'] = addslashes($plan['description']);
        return M('Plan') -> save($plan);
    }

    public function modifyResource($resource, $planid) {
        $where['plan'] = $planid;
        M('PlanResource') -> where($where) -> delete();
        M('PlanResource') -> addAll($resource);
    }

    public function pickupPlan($data) {

        $data['status'] = 0;
        $data['starttime'] = strtotime(date("Y-m-d", time()));
        return M('Plan') -> save($data);
    }
}
