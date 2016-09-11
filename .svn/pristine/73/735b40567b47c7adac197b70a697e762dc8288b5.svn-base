<?php
/*
 * 文章业务逻辑
 */

namespace Home\Logic;

use Think\Model;

class ArticleLogic extends Model {
    
    protected $articleModel;

    public function _initialize() {
        $tihs -> articleModel = D('Article');
    }

    public function addBrief($data) {
        $data['title'] = htmlspecialchars($data['title']);
        if (empty($data['title'])) {
            return return_result(0, "小结标题不能为空");
        }
        if (empty($data['content'])) {
            return return_result(0, "小结内容不能为空");   
        }

        $data['createtime'] = strtotime(date("Y-m-d H:m:s",time()));
        $data['uid'] = intval($_SESSION['uid']);
        $data['type'] = 1;
        $rs = D('Article') -> addArticle($data);
        if ($rs) {
            return return_result(1, "添加小结成功");
        } else {
            return return_result(0, "添加小结失败");
        }
    }

    public function createEssay($data) {
        $data['title'] = htmlspecialchars($data['title']);
        $data['category'] = intval($data['category']);
        if (empty($data['title'])) {
            return return_result(0, "随笔标题不能为空");
        }
        if ($data['category'] === 0) {
            return return_result(0, "分类不能为空");
        }
        if (empty($data['tags'])) {
            return return_result(0, "标签不能为空");
        }
        if (empty($data['content'])) {
            return return_result(0, "内容不能为空");
        }
        $data['tags'] = json_encode($data['tags']);
        $data['type'] = 2;
        $data['createtime'] = strtotime(date("Y-m-d H:m:s", time()));
        $data['uid'] = intval($_SESSION['uid']);
        $rs = D('Article') -> addArticle($data);
        if ($rs) {
            return return_result(1, "添加随笔成功");
        } else {
            return return_result(0, "添加随笔失败");
        }
    }

    public function createSummary($data) {
        $data['title'] = htmlspecialchars($data['title']);
        $data['category'] = intval($data['category']);
        $data['paln'] = intval($data['plan']);
        if (empty($data['title'])) {
            return return_result(0, "随笔标题不能为空");
        }
        if ($data['category'] === 0) {
            return return_result(0, "分类不能为空");
        }
        if (empty($data['tags'])) {
            return return_result(0, "标签不能为空");
        }
        if ($data['plan'] === 0) {
            return return_result(0, "计划不能为空");
        } 
        if (empty($data['content'])) {
            return return_result(0, "内容不能为空");
        }
        $data['tags'] = json_encode($data['tags']);
        $data['type'] = 3;
        $data['createtime'] = strtotime(date("Y-m-d H:m:s", time()));
        $data['uid'] = intval($_SESSION['uid']);
        $rs = D('Article') -> addArticle($data);
        if ($rs) {
            return return_result(1, "添加总结成功");
        } else {
            return return_result(0, "添加总结失败");
        }
    }

    public function getMyArticle($articleid, $type) {
        $article['conclusionid'] = $articleid;
        $article['type'] = $type;
        $article['uid'] = intval($_SESSION['uid']);
        $authArticle = D('Article') -> authArticle($article);
        if (empty($authArticle)) {
            return "";
        }

        return D('Article') -> getArticleById($articleid, $type);
    }

    public function editEssay($data) {
        $data['conclusionid'] = intval($data['conclusionid']);
        $data['title'] = htmlspecialchars($data['title']);
        $data['category'] = intval($data['category']);
        if (empty($data['title'])) {
            return return_result(0, "随笔标题不能为空");
        }
        if ($data['category'] === 0) {
            return return_result(0, "分类不能为空");
        }
        if (empty($data['tags'])) {
            return return_result(0, "标签不能为空");
        }
        if (empty($data['content'])) {
            return return_result(0, "内容不能为空");
        }
        $data['tags'] = json_encode($data['tags']);
        $data['changetime'] = strtotime(date("Y-m-d H:m:s", time()));
        $rs = D('Article') -> editArticle($data);
        if ($rs === false) {
            return return_result(0, "编辑失败");
        } else {
            return return_result(1, "编辑成功");
        }
    } 

    public function editBrief($data) {
        $data['conclusionid'] = intval($data['conclusionid']);
        $data['title'] = htmlspecialchars($data['title']);
        if (empty($data['title'])) {
            return return_result(0, "随笔标题不能为空");
        }
        if (empty($data['content'])) {
            return return_result(0, "内容不能为空");
        }
        $data['changetime'] = strtotime(date("Y-m-d H:m:s", time()));
        $rs = D('Article') -> editArticle($data);
        if ($rs === false) {
            return return_result(0, "编辑失败");
        } else {
            return return_result(1, "编辑成功");
        }
    }

    public function editSummary($data) {
        $data['conclusionid'] = intval($data['conclusionid']);
        $data['title'] = htmlspecialchars($data['title']);
        $data['category'] = intval($data['category']);
        $data['paln'] = intval($data['plan']);
        if (empty($data['title'])) {
            return return_result(0, "随笔标题不能为空");
        }
        if ($data['category'] === 0) {
            return return_result(0, "分类不能为空");
        }
        if (empty($data['tags'])) {
            return return_result(0, "标签不能为空");
        }
        if ($data['plan'] === 0) {
            return return_result(0, "计划不能为空");
        } 
        if (empty($data['content'])) {
            return return_result(0, "内容不能为空");
        }
        $data['tags'] = json_encode($data['tags']);
        $data['changetime'] = strtotime(date("Y-m-d H:m:s", time()));
        $rs = D('Article') -> editArticle($data);
        if ($rs === false) {
            return return_result(0, "编辑失败");
        } else {
            return return_result(1, "编辑成功");
        }

    }
}
