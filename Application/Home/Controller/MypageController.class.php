<?php

namespace Home\Controller;

use Home\Common;

class MypageController extends CommonController {
    
    public function index() {
        A('Plan') -> autoStartPlan();
        $planList = D('Plan', 'Logic') -> getPlan(1);
        $this -> planList = $planList;
        $this -> display('index');   
    }
}
