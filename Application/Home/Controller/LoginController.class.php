<?php
/*
 * 用户登陆控制器
 */

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {

    protected $loginLogic;

    public function _initialize() {
        $this -> loginLogic = D('Login', 'Logic');
    }

    public function login() {
        $this -> display('login');
    }

    public function doLogin() {
        $this -> getRequest(doLogin);  
    }

    /*
     * 获取前端接收过来的数据
     */

    protected function getRequest($function) {
        if (IS_POST) {
            $data = I('post.data');
            $response = $this -> loginLogic -> $function($data);
            $this -> ajaxReturn($response);
        } else {
            $this -> ajaxReturn("sorry, access denied");
        }
    }
}
