<?php
/*
 *分类模型
 */

namespace Home\Model;

use Think\Model;

class CategoryModel extends Model {
    
    protected $categoryModel;
    protected $signModel;
    public function _initialize() {
        $this -> categoryModel = M('Category');
        $this -> signModel = M('Sign');
    }

    public function getCategory() {
        return $categoryList =  M('Category') -> where('status=1') ->  select();
    }

    public function getSign($categoryid) {
        $where['category'] = $categoryid;
        $where['status'] = 1;
        return $this -> signModel -> where($where) -> select();
    }

    public function authCategoryExist($categoryid) {
        $where['categoryid'] = $categoryid;
        return $this -> categoryModel -> where($where) -> select();
    }
}
