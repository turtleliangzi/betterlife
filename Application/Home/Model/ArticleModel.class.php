<?php
/*
 * 文章模型
 */

namespace Home\Model;

use Think\Model;

class ArticleModel extends Model {


    public function addArticle($data) {
        $data['content'] = addslashes($data['content']);
        return M('Article') -> add($data);
    }

    public function editArticle($data) {
        $data['content'] = addslashes($data['content']);
        return M('Article') -> save($data);
    }

    public function getArticle($type) {
        $where['type'] = $type;
        $where['uid'] = intval($_SESSION['uid']);
        $article = M('Article') -> where($where) -> order('createtime desc') -> select();
        if ($type === 2 || $type === 3) {
            foreach ($article as $k => $a) {
                $article[$k]['categorys'] = M('Category') -> where(array("categoryid" => intval($a['category']))) -> find();
                $tag = json_decode($a['tags'], true);
                foreach ($tag as $key => $t) {
                    $article[$k]['tag'][$key] = M('Sign') -> where(array('signid' => intval($t))) -> find();
                }
            }
        }
        return $article;   
    }

    public function authArticle($article) {
        return M('Article') -> where($article) -> find();
    }

    public function getArticleById($articleid, $type) {
        $article = M('Article') -> where(array("conclusionid" => $articleid)) -> find();
        if ($type === 2 || $type === 3) {
            $article['categorys'] = M('Category') -> where(array("categoryid" => intval($article['category']))) -> find();
            $tags = json_decode($article['tags'], true);
            foreach ($tags as $k => $t) {
                $article['tag'][$k] = M('Sign') -> where(array("signid" => intval($t))) -> find();

            }
        }
        if ($type === 3) {
            $article['plan'] = M('Plan') -> where(array("planid" => $article['plan'])) -> find(); 
        
        }
        $article['content'] = stripslashes($article['content']);
        $article['content'] = html_entity_decode($article['content']);
        return $article;
    }

    public function getShareArticle() {
        $articleList = M('Article') -> where(array("share" => 1))->order('createtime desc') -> select();
        foreach ($articleList as $key => $article) {
            $articleList[$key]['categorys'] = M('Category') -> where(array('categoryid' => intval($article['category']))) -> find();
            $tags = json_decode($article['tags'], true);
            foreach ($tags as $k => $tag) {
                $articleList[$key]['tag']['$k'] = M('Sign') -> where(array('signid' => intval($tag))) -> find();
            }
            $articleList[$key]['member'] = M('User') -> where(array('uid' => $article['uid'])) -> find();
            $articleList[$key]['content'] = stripslashes($article['content']);
            $articleList[$key]['content'] = html_entity_decode($articleList[$key]['content']);

        }
        return $articleList;
    }
}
