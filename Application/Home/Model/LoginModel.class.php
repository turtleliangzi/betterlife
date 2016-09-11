<?php
/*
 * 用户登陆模型
 */

namespace Home\Model;

use Think\Model;

class LoginModel extends Model {

    protected $tableName = 'user';

    public function authUserExist($username) {
        $where['nickname'] = $username;
        return M('user') -> where($where) -> find();
    }
}
