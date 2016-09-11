<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
  <head>
    <title>尽善尽美 | 极其完善、极其美好</title>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/betterlife.css">

    <script src="/Application/Home/Public/Js/jquery-2.1.4.min.js"></script>
    <script src="/Application/Home/Public/Js/plupload.full.min.js"></script>
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
            <li style="color:#fff"><a href="/index">首页</a></li>
            <li><a href="/mypage">我的主页</a></li>
          </ul>
        </div>
        <div class="bl-header-bar-right" style="float:right">
          <ul>
            <li style="width:50px;line-height:50px;"><a href="/login/login">登录</a> </li>
            <li style="width:50px; line-height:50px;"><a href="/register/register">注册</a></li>
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
        <span class="bl-left-nickname-block"><?php echo ($user['nickname']); ?></span>
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
    <p><?php echo ($user['introduction']); ?></p>
  </div>
  <div class="bl-left-nav-box">
    <div class="bl-left-nav">
      <div class="bl-left-nav-title">
        <i class="fa fa-calendar"></i>
        我的计划
        <i style="margin-left:120px;" class="fa fa-chevron-down"></i>
      </div>
      <ul>  
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/plan/planisdonelist">已完成</a></li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/mypage">正在进行</a></li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/plan/planwilldolist">将要进行</a></li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/plan/plangiveuplist">已放弃</a></li>
      </ul>
    </div>
    <div class="bl-left-nav">
      <div class="bl-left-nav-title">
        <i class="fa fa-list-alt"></i>
        我的文章
        <i style="margin-left:120px;" class="fa fa-chevron-down"></i>
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
        <i style="margin-left:120px;" class="fa fa-chevron-down"></i>
      </div>
      <ul>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/source/mysourcelist">资源库</a></li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/source/addsource">添加资源</a></li>
      </ul>

    </div>
  </div>
</div>


  <div class="bl-mypage-middle">
    <div class="bl-mypage-title">
      <h4>我的小结&nbsp;&nbsp;</h4>
      <button class="btn btn-success"><i class="fa fa-plus"></i>添加小结</button>
    </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>小结标题</th>
          <th>完成时间</th>
          <th>是否分享</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>一个月之内完成该网站的初步建设</td>
          <td>2015-07-31</td>
          <td>否</td>
        </tr>
        <tr>
          <td>2</td>
          <td>一个月之内完成该网站的初步建设</td>
          <td>2015-07-31</td>
          <td>否</td>
        </tr>
        <tr>
          <td>3</td>
          <td>一个月之内完成该网站的初步建设</td>
          <td>2015-07-31</td>
          <td>否</td>
        </tr>
        <tr>
          <td>4</td>
          <td>一个月之内完成该网站的初步建设</td>
          <td>2015-07-31</td>
          <td>否</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script src="/Application/Home/Public/Js/jquery-ui.min.js"></script>
<script src="/Application/Home/Public/Js/bootstrap.min.js"></script>
<script src="/Application/Home/Public/Js/betterlife.js"></script>
<script src="/Application/Home/Public/Js/plupload.full.min.js"></script>

</body>
</html>