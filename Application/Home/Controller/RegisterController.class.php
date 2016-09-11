<?php
/*
 * 用户注册控制器
 */

namespace Home\Controller;

use Think\Controller;

class RegisterController extends Controller {

    protected $registerLogic;

    public function _initialize() {
        $this -> registerLogic = D('Register', 'Logic');
    }

    public function register() {
        $this -> display('register');
    }

    public function doRegister() {
        $this -> getRequest(doRegister);   
    }

    /*
     *获取前端提交过来的数据
     */

    public function getRequest($function) {
        if (IS_POST) {
            $data = I('post.data');
            $response = $this -> registerLogic -> $function($data);
            $this -> ajaxReturn($response);
        } else {
            $this -> ajaxReturn("sorry, access denied");
        }
    }
}
