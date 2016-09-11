<?php

/*
 * 用户登录业务逻辑
 */

namespace Home\Logic;

use Think\Model;

class LoginLogic extends Model {
    
    protected $tableName = 'user';
    protected $loginModel;

    public function _initialize() {
        $this -> loginModel = D('Login');
    }

    public function doLogin($data) {
        $data['nickname'] = htmlspecialchars($data['nickname']);
        $data['password'] = htmlspecialchars($data['password']);
        if (empty($data['nickname']) || !isset($data['nickname'])) {
            return return_result(0, "用户名不能为空");
        } 
        if (empty($data['password']) || !isset($data['password'])) {
            return return_result(0, "密码不能为空");
        }
        $user = $this -> loginModel -> authUserExist($data['nickname']);
        if (empty($user)) {
            return return_result(0, "该用户名不存在");
        }
        $salt = $user['salt'];
        if (md5(md5($data['password']).$salt) === $user['password']) {
            $_SESSION['uid'] = intval($user['uid']);
            return return_result(1, "登录成功");
        } else {
            return return_result(0, "用户名或密码错误");
        }
    }

}
