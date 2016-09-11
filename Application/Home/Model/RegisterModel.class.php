<?php
/*
 *用户注册模型
 */

namespace Home\Model;

use Think\Model;

class RegisterModel extends Model {
    
    protected $tableName = 'user';

    public function  authUsername($username) {
        $where['nickname'] = $username;
        return M('user') -> where($where) -> select();
    }

    public function addUser($data) {
        return M('user') -> add($data);
    }
}
