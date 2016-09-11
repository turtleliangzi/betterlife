<?php
/*
 * 用户注册业务逻辑
 */

namespace Home\Logic;

use Think\Model;

class RegisterLogic extends Model{

    protected $registerModel;
    protected $tableName = 'user';

    public function _initialize() {
        $this -> registerModel = D('Register');
    }

    public function doRegister($user) {
        $user['username'] = htmlspecialchars($user['username']);
        $user['password'] = htmlspecialchars($user['password']);
        if (empty($user['username']) || !isset($user['username'])) {
            return return_result(0, "用户名不能为空");
        }
        if (empty($user['password']) || !isset($user['password'])) {
            return return_result(0, "密码不能为空");
        }
        $userExist = $this -> registerModel -> authUsername($user['username']);
        if (!empty($userExist)) {
            return return_result(0, "该用户名已存在");
        }
        $data = encrypt($user['password']);
        $data['nickname'] = $user['username'];
        $data['registertime'] = time();
        $rs = $this -> registerModel -> addUser($data);
        if ($rs) {
            return return_result(1, "用户注册成功");
        } else {
            return return_result(0, "用户注册失败");
        }
    }
}
