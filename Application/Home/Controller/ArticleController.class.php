<?php

/*
 * 我的文章控制器
 *@author turtle
 *
 */

namespace Home\Controller;

use Home\Common;

class ArticleController extends CommonController {

    protected $articleLogic;

    public function _auto() {
        $this -> articleLogic = D('Article', 'Logic');
    }
    
    public function briefSummaryList() {
        $bsummaryList = D('Article') -> getArticle(1);
        $this -> bsummaryList = $bsummaryList;
        $this -> display('briefsummarylist');
    }

    public function essayList() {
        $essayList = D('Article') -> getArticle(2);
        $this -> essayList = $essayList;
        $this -> display('essaylist');
    }

    public function summaryList() {
        $summaryList = D('Article') -> getArticle(3);
        $this -> summaryList = $summaryList;
        $this -> display('summarylist');
    }

    public function addBriefSummary() {
        $title = "添加小结";
        $articleid = intval(I('get.articleid', 0));
        $type = intval(I('get.type', 0));
        if ($articleid != 0 && $type != 0) {
            $title = "编辑小结";
            $article = $this -> articleLogic -> getMyArticle($articleid, $type);
            $this -> article = $article;
        }
        $this -> title = $title;
        $this -> display('addbriefsummary');
    }

    public function addEssay() {
        $categoryList = A('Category') -> getCategory();
        $this -> categoryList = $categoryList;
        $title = "添加随笔";
        $articleid = intval(I('get.articleid', 0));
        $type = intval(I('get.type', 0));
        if ($articleid != 0 && $type != 0) {
            $title = "编辑随笔";
            $article = $this -> articleLogic -> getMyArticle($articleid, $type);
            $this -> article = $article;
        }
        $this -> title = $title;
        $this -> display('addessay');
    }

    public function addSummary() {
        $categoryList = A('Category') -> getCategory();
        $this -> categoryList = $categoryList;
        $planList = M('Plan') -> where(array("uid" => intval($_SESSION['uid']))) -> select();
        $this -> planList = $planList;
        $title = "添加总结";
        $articleid = intval(I('get.articleid', 0));
        $type = intval(I('get.type', 0));
        if ($articleid != 0 && $type != 0) {
            $title = "编辑总结";
            $article = $this -> articleLogic -> getMyArticle($articleid, $type);
            $this -> article = $article;
        }
        $this -> title = $title;
        $this -> display('addsummary');
    }

    public function createBrief() {
        $this -> getRequest(addBrief);
    }


    public function createEssay() {
        $this -> getRequest(createEssay);
    }

    public function createSummary() {
        $this -> getRequest(createSummary);
    }

    public function myArticle() {
        $articleid = intval(I('get.articleid'));
        $type = intval(I('get.type'));
        $article = $this -> articleLogic -> getMyArticle($articleid, $type);
        $this -> article = $article;
        $this -> display('myarticle');
    }
    
    public function editEssay() {
        $this -> getRequest(editEssay);
    }

    public function editBrief() {
        $this -> getRequest(editBrief);
    }

    public function editSummary() {
        $this -> getRequest(editSummary);
    }


    /*
     * 获取前端提交过来的数据
     */

    protected function getRequest($function) {
        if (IS_POST) {
            $data = I('post.data');
            $response = $this -> articleLogic -> $function($data);
            $this -> ajaxReturn($response);
        } else {
            $this -> ajaxReturn("sorry, access denied");
        }
    }
}
