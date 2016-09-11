<?php
/*
 * 分类业务逻辑
 */

namespace Home\Logic;

use Think\Model;

class CategoryLogic extends Model {
    
    protected $categoryModel;
    public function _initialize() {
        $this -> categoryModel = D('Category');
    }

    public function getCategory() {
        return $this -> categoryModel -> getCategory();
    }


    public function getSign($categoryid) {
        return $this -> categoryModel -> getSign($categoryid);
    }
}
