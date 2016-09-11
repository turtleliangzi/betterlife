<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
  <head>
    <title>尽善尽美 | 极其完善、极其美好</title>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/betterlife.css">

    <script src="/Application/Home/Public/Js/jquery-2.1.4.min.js"></script>
    <meta type="keywords" content="计划 总结 日记 文章 分享 尽善尽美  betterlife 美好生活  ">
    <meta type="description" content="尽善尽美 | 极其完善 极其美好 是一款集做计划、写（总结）文章、查找资源、分享文章于一体的应用网站，旨在为大家的生活带来便利。">
  </head>
  <body>
    <!-- header -->
    <div class="bl-header">
      <div class="bl-header-bar">
        <div class="bl-logo">尽善尽美</div> 
        <div class="bl-header-bar-right">
          <ul>
            <li style="color:#fff"><a href="./index.php/Home/Index">首页</a></li>
            <li><a href="./index.php/Home/Mypage">我的主页</a></li>
          </ul>
        </div>
      </div>
    </div>


<div id="bl-mypage-content">
  <div class="bl-content-left">
  <div style="background:url(/Application/Home/Public/Img/a0.jpg) center center;background-size:cover">
    <div class="bl-left-img-box">
      <a class="bl-left-img">
        <img class="img-circle img-responsive" src="/Application/Home/Public/Img/a0.jpg">
      </a>
      <div class="bl-left-nickname">
        <span class="bl-left-nickname-block">Turtle</span>
      </div>
      <a class="btn btn-sm btn-info" style="padding-left:15px;padding-right:15px;">添加好友</a>
    </div>
  </div>
  <div class="bl-left-friends">
    <a class="" style="text-decoration:none;margin-bottom:20px;display:inline-block;color:#777;">
      <span class="bl-left-friends-mount">100</span>
      <em class="bl-left-friend-title">好友数</em>
    </a>
  </div>
  <div class="bl-left-desc">
    <p>简介</p>
    <p>我就是我，就不跟你说!!!</p>
  </div>
  <div class="bl-left-nav-box">
    <div class="bl-left-nav">
      <div class="bl-left-nav-title">
        <i class="fa fa-calendar"></i>
        我的计划
      </div>
      <ul>  
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;已完成</li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;正在进行</li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;将要进行</li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;已放弃</li>
      </ul>
    </div>
    <div class="bl-left-nav">
      <div class="bl-left-nav-title">
        <i class="fa fa-list-alt"></i>
        我的文章
      </div>
      <ul>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;小结</li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;随笔</li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;总结</li>
      </ul>
    </div>
    <div class="bl-left-nav">
      <div class="bl-left-nav-title">
        <i class="fa fa-file-text-o"></i>
        我的资源
      </div>
      <ul>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;资源库</li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;添加资源</li>
      </ul>

    </div>
  </div>
</div>


  <div class="bl-mypage-middle" style="">
    <div class="bl-mypage-title">
      <h4>我的计划&nbsp;&nbsp; <small style="color:#669966">正在进行中...</small></h4>
      <button class="btn btn-success"><i class="fa fa-plus"></i>添加计划</button>
    </div>

    <div class="bl-mypage-myplan">
      <div class="bl-label">
        <span class="bl-label-title">计划名称</span> 
        <span class="bl-label-content">一个月之内完成该网站的初步建设</span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">涉及到的资源</span> 
        <span class="bl-label-content">angularjs、php、thinkphp、html、css、js</span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">分类及标签</span> 
        <span class="bl-label-content"><i class="fa fa-list"></i>技术&nbsp;&nbsp;<i class="fa fa-tags"></i>互联网、网站设>计</span> 
      </div>
      <div class="bl-label">
        <span class="bl-label-title">计划简介</span> 
        <span class="bl-label-content"><textarea class="form-control" style="display:inline-block" disabled>一个月之内完成
            该网站的初步建设</textarea></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">开始时间</span> 
        <span class="bl-label-content">2015-07-31</span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">预计结束时间</span> 
        <span class="bl-label-content">2015-08-31</span>
      </div>
      <div class="bl-buttons">
        <button type="button" class="btn btn-primary"><i class="fa fa-cog"></i>修改计划</button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-progress-modal"><i class="fa fa-pencil-square-o"></i>填写进度</button>
        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>完成计划</button>
        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i>放弃计划</button>
      </div>
    </div>
    <div class="bl-progress">
      <h5 style="padding:20px;font-size:16px;font-weight:bold;">当前进度</h5>
      <ul class="bl-progress-timeline">
        <li class="bl-timeline-header">
          <div class="btn btn-default">开始</div>
        </li>
        <li class="bl-timeline-item">
          <div class="bl-timeline-wrap bl-timeline-info">
            <span class="bl-timeline-date text-muted">2015/8/18</span>
            <div class="bl-timeline-content panel p-sm b-a">
              <span class="arrow b-white left pull-top"></span>
              <div>计划开始</div></div>
          </div>
        </li>
        <li class="bl-timeline-item">
          <div class="bl-timeline-wrap bl-timeline-info">
            <span class="bl-timeline-date text-muted">2015/8/19</span>
            <div class="bl-timeline-content panel p-sm b-a">
              <span class="arrow b-white left pull-top"></span>
              <div>读完第一章</div>
            </div>
          </div>
        </li>
        <li class="bl-timeline-item">
          <div class="bl-timeline-wrap bl-timeline-info">
            <span class="bl-timeline-date text-muted">2015/8/20</span>
            <div class="bl-timeline-content panel p-sm b-a">
              <span class="arrow b-white left pull-top"></span>
              <div>读完第二章</div>
            </div>
          </div>
        </li>
        <li class="bl-timeline-item">
          <div class="bl-timeline-wrap bl-timeline-info">
            <span class="bl-timeline-date text-muted">2015/8/21</span>
            <div class="bl-timeline-content">读完第三章</div>
          </div>
        </li>
        <li class="bl-timeline-item">
          <div class="bl-timeline-wrap bl-timeline-info">
            <span class="bl-timeline-date text-muted">2015/8/23</span>
            <div class="bl-timeline-content">全部读完</div>
          </div>
        </li>
        <li class="bl-timeline-item">
          <div class="bl-timeline-wrap bl-timeline-info">
            <span class="bl-timeline-date text-muted">2015/8/23</span>
            <div class="bl-timeline-content">计划结束</div>
          </div>
        </li>
        <li class="bl-timeline-header">
          <div class="btn btn-default">完成</div>
        </li>
      </ul>
    </div>

  </div>
</div>
<div class="modal fade" id="add-progress-modal" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">填写进度</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="form-group">
            <label>时间</label>
            <input type="text" readonly  name="progresstime" placeholder="2015-09-03" class="form-control" id="progress-time">
          </div>
          <div class="form-group">
            <label>进度内容</label>
            <textarea class="form-control" name="progresscontent" placeholder="请填写进度内容"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div>
  </div>
</div>
<script>
$(function () {
  $("#progress-time").datepicker({

  }); 
});

</script>
<script src="/Application/Home/Public/Js/bootstrap.min.js"></script>
<script src="/Application/Home/Public/Js/jquery-ui.min.js"></script>
<script src="/Application/Home/Public/Js/betterlife.js"></script>

</body>
</html>