<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function _initialize() {
        
    }

    public function index(){
        $articleList = D('Article') -> getShareArticle();
        $this -> articleList = $articleList;
        $this -> display('index');
    }

    public function error() {
	$this -> display('error');
    }

}
