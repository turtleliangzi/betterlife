<?php
/*
 * 资源业务逻辑
 */

namespace Home\Logic;

use Think\Model;

class SourceLogic extends Model {
    
    protected $sourceModel;
    protected $tableName = 'resource';

    public function _initialize() {
        $this -> sourceModel = D('Source');
    }

    public function createFolder($data) {
        $data['foldername'] = htmlspecialchars($data['foldername']);
        if (empty($data['foldername']) || !isset($data['foldername'])) {
            return return_result(0, "文件夹名不能为空");
        }
        $data['uid'] = intval($_SESSION['uid']);
        $source = $this -> sourceModel -> authFolder($data['foldername'], $data['uid']);
        if (!empty($source)) {
            return return_result(0, "该文件夹已存在");
        }
        $data['time'] = time();
        $rs = $this -> sourceModel -> createFolder($data);
        if ($rs) {
            return return_result(1, "新建文件夹成功");  
        } else {
            return return_result(0, "新建文件夹失败");
        }
    }

    public function createSource($data) {
        $data['rname'] = htmlspecialchars($data['rname']);
        $data['storeplace'] = htmlspecialchars($data['storeplace']);
        $data['folderid'] = intval($data['folderid']);
        $data['category'] = intval($data['category']);
        $data['tags'] = json_encode($data['tags']);
        if (empty($data['rname']) || !isset($data['rname'])) {
            return return_result(0, "资源名不能为空");
        }
        if (empty($data['storeplace']) || !isset($data['storeplace'])) {
            return return_result(0, "存放地不能为空");
        }
        if ($data['folderid'] == 0 || !isset($data['folderid'])) {
            return return_result(0, "文件夹不能为空");
        }
        if ($data['category'] == 0 || !isset($data['category'])) {
            return return_result(0, "分类不能为空");
        }
        if (empty($data['tags']) || !isset($data['tags'])) {
            return return_result(0, "标签不能为空");
        }
        $data['uid'] = intval($_SESSION['uid']);
        $resource = $this -> sourceModel -> authSource($data['rname'], $data['uid']);
        if (!empty($resource)) {
            return return_result(0, "该资源名已存在");
        }
        $data['createtime'] = time();
        $rs = $this -> sourceModel -> createSource($data);
        if ($rs) {
            return return_result(1, "添加资源成功");
        } else {
            return return_result(0, "添加资源失败");
        }
    }

    public function mysource($folderid) {
        $uid = intval($_SESSION['uid']);
        $folder = $this -> sourceModel -> authFolder($folderid, $uid);
        if (empty($folder)) {
            return "";
        }
        $sourceList = $this -> sourceModel -> mysource($folderid);
        return $sourceList;
    }

    public function getSourceById($rid) {
        $data['rid'] = $rid;
        $data['uid'] = intval($_SESSION['uid']);
        $sourceExist = $this -> sourceModel -> authSourceById($data);
        if (empty($sourceExist)) {
            return "";
        }
        $source = $this -> sourceModel -> getSourceById($rid);
        return $source;
    }
}
