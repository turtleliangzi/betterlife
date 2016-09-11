<?php
/*
 * 资源模型
 */

namespace Home\Model;

use Think\Model;

class SourceModel extends Model {

    protected $tableName = 'resource';
    
    public function authFolder($foldername, $uid) {
        if (is_int($foldername)) {
            $where['folderid'] = $foldername;
        } else {
            $where['foldername'] = $foldername;
        }
        $where['uid'] = $uid;
        return M('ResourceFolder') -> where($where) -> find();
    }

    public function createFolder($data) {
        return M('ResourceFolder') -> add($data);
    }

    public function authSource($rname, $uid) {
        $where['rname'] = $rname;
        $where['uid'] = $uid;
        return M('Resource') -> where($where) -> find();
    }

    public function createSource($data) {
        $data['introduction'] = addslashes($data['introduction']);
        return M('Resource') -> add($data);
    }

    public function mysource($folderid) {
        $where['folderid'] = $folderid;
        $resource =  M('Resource') -> where($where) -> select();
        foreach ($resource as $k => $r) {
            $resource[$k]['category'] = M('Category') -> where(array("categoryid" => $r['category'])) -> find();
            $tags = json_decode($r['tags'], true);
            foreach ($tags as $key => $tag) {
                $resource[$k]['tag'][$key] = M('Sign') -> where(array("signid" => intval($tag))) -> find();
            }
            $resource[$k]['introduction'] = stripslashes($resource['introduction']);
            $resource[$k]['introduction'] = html_entity_decode($resource['introduction']);
        }
        return $resource;
    }

    public function authSourceById($data) {
        return M('Resource') -> where($data) -> find();
    }

    public function getSourceById($rid) {
        $source = M('Resource') -> where(array("rid" => $rid)) -> find();
        $source['categorys'] = M('Category') -> where(array("categoryid" => intval($source['category']))) -> find();
        $tags = json_decode($source['tags'], true);
        foreach ($tags as $k => $tag) {
            $source['tag'][$k] = M('Sign') -> where(array("signid" => $tag)) -> find();
        }
        $source['folder'] = M('ResourceFolder') -> where(array("folderid" => intval($source['folderid']))) -> find();
        $source['introduction'] = stripslashes($source['introduction']);
        $source['introduction'] = html_entity_decode($source['introduction']);
        return $source;
    }
}
