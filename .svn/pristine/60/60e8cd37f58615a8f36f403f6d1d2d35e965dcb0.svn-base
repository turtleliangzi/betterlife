<?php
/*
 * 公共控制器
 */

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {

    protected $uid;
    protected $user;

    public function _initialize() {
        //判断用户是否登录
        if (!isset($_SESSION['uid']) || $_SESSION['uid'] == 0) {
            $this -> redirect('/login/login');
        }

        if (method_exists($this, '_auto')) {
            $this -> _auto();
        }

        $uid = intval($_SESSION['uid']);
        $user = M('User') -> where(array("uid" => $uid)) -> find();
        $this -> assign('user', $user);
    }
}
