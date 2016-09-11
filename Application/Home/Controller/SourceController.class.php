<?php

/*
 * 我的资源控制器
 * @author turtle
 * createtime 2015-08-30
 */

namespace Home\Controller;

use Home\Common;

class SourceController extends CommonController {

    protected $sourceLogic;

    public function _auto() {
        $this -> sourceLogic = D('Source', 'Logic');
    }

    public function mysourcelist() {
        $where['uid'] = $_SESSION['uid'];
        $folderList = M('ResourceFolder') -> where($where) ->  select();
        $this -> folderList = $folderList;
        $this -> display('mysourcelist');
    }

    public function mysource() {
        $folderid = intval(I('get.folderid'));
        $sourceList = $this -> sourceLogic -> mysource($folderid);
        $this -> sourceList = $sourceList;
        $folder = M('ResourceFolder') -> where(array("folderid" => $folderid)) -> find();
        $this -> folder = $folder;
        $this -> display('mysource');
    }

    public function addSource() {
        $categoryList = A('Category') -> getCategory();
        $folderList = M('ResourceFolder') -> select();
        $this -> folderList = $folderList;
        $this -> categoryList = $categoryList;
        $this -> display('addsource');
    }

    public function createFolder() {
        $this -> getRequest(createFolder);
    }

    public function createSource() {
        $this -> getRequest(createSource);
    }

    public function source() {
        $rid = intval(I('get.rid', 0));
        $source = $this -> sourceLogic -> getSourceById($rid);
        $this -> source = $source;
        $this -> display('source');
    }

    protected function getRequest($function) {
        if (IS_POST) {
            $data = I('post.data');
            $response = $this -> sourceLogic -> $function($data);
            $this -> ajaxReturn($response);
        } else {
            $this -> ajaxReturn("sorry, access denied");
        }
    }

}
