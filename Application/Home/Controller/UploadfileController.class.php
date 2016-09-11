<?php
/*
 * 文件上传控制器
 */

namespace Home\Controller;

use Think\Controller;

class UploadfileController extends Controller {

    public function upload() {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {
            $this -> ajaxReturn($upload->getError());
        }else{
            $this -> ajaxReturn($info);
        }

    }
}
