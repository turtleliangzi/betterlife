<?php
/*
 * 分类控制器
 */

namespace Home\Controller;
use Think\Controller;

class CategoryController extends Controller {

    protected $categoryLogic;
    public function _initialize() {
        $this -> categoryLogic = D('Category', 'Logic');
    }

    public function getCategory() {
        return $this -> categoryLogic -> getCategory();
    }

    public function getSign() {
        if (IS_POST) {
            $categoryid = I('post.categoryid');
            $signList = $this -> categoryLogic -> getSign($categoryid);
            $this -> ajaxReturn($signList);
            
        }
    } 
}
