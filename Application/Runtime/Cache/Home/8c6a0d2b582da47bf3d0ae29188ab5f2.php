<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
  <head>
    <title>预否|预，则立;不预，则费</title>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/betterlife.css">

    <script src="/Application/Home/Public/Js/jquery-2.1.4.min.js"></script>
    <script src="/Application/Home/Public/Js/plupload.full.min.js"></script>
    <meta name="keywords" content="预否，预，则立，不预，则废，计划， 总结， 日记， 文章， 分享， 尽善尽美，  betterlife， 美好生活  ">
    <meta name="description" content="尽善尽美 | 极其完善 极其美好 是一款集做计划、写（总结）文章、查找资源、分享文章于一体的应用网站，旨在为大家的生活带来便利。">
    <meta name="baidu-site-verification" content="uBoil88hf9" />
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256394989'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256394989%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
  </head>
  <body>
    <!-- header -->
    <div class="bl-header">
      <div class="bl-header-bar">
        <div class="bl-logo">预否</div> 
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
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/article/briefsummarylist">小结</a></li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/article/essaylist">随笔</a></li>
        <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;<a href="/article/summarylist">总结</a></li>
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
      <h4>我的计划&nbsp;&nbsp; <small style="color:#669966">已完成!!!</small></h4>
      <a  class="btn btn-success" style="" href="/plan/addplan"><i class="fa fa-plus"></i>添加计划</a>
    </div>
    <?php if(empty($plan)): ?><div style="width:100%;text-align:center">
      <p style="line-height:30px;font-size:24px;">没有找到该计划的相关信息～～</p>
    </div>
    <?php else: ?>
    <div class="bl-mypage-myplan">
      <div class="bl-label">
        <span class="bl-label-title">计划名称</span>
        <span class="bl-label-content"><?php echo ($plan['title']); ?></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">涉及到的资源</span>
        <span class="bl-label-content"><?php if(is_array($plan['resources'])): $i = 0; $__LIST__ = $plan['resources'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$resource): $mod = ($i % 2 );++$i; echo ($resource['rname']); ?>、<?php endforeach; endif; else: echo "" ;endif; ?></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">分类及标签</span>
        <span class="bl-label-content"><i class="fa fa-list"></i><?php echo ($plan['category']['cname']); ?>&nbsp;&nbsp;<i class="fa fa-tags"></i><?php if(is_array($plan['tags'])): $i = 0; $__LIST__ = $plan['tags'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i; echo ($tag['signname']); ?>、<?php endforeach; endif; else: echo "" ;endif; ?></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">计划简介</span>
        <span class="bl-label-content"><textarea class="form-control" style="display:inline-block" disabled><?php echo ($plan['description']); ?></textarea></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">开始时间</span>
        <span class="bl-label-content"><?php echo (date("Y-m-d", $plan['starttime'] )); ?></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">预计结束时间</span>
        <span class="bl-label-content"><?php echo (date("Y-m-d", $plan['endtime'] )); ?></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">实际结束时间</span>
        <span class="bl-label-content"><?php echo (date("Y-m-d", $plan['realendtime'] )); ?></span>
      </div>
      <div class="bl-label">
        <span class="bl-label-title">满意度</span>
        <div class="rating">
          <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
      </div>
    </div>
    <div class="bl-progress">
      <h5 style="padding:20px;font-size:16px;font-weight:bold;">完成进度</h5>
      <ul class="bl-progress-timeline">
        <li class="bl-timeline-header">
          <div class="btn btn-default">开始</div>
        </li>
        <?php if(is_array($progressList)): foreach($progressList as $key=>$progress): ?><li class="bl-timeline-item">
          <div class="bl-timeline-wrap bl-timeline-info">
            <span class="bl-timeline-date text-muted"><?php echo (date("Y-m-d", $progress['time'] )); ?></span>
            <div class="bl-timeline-content panel p-sm b-a">
              <span class="arrow b-white left pull-top"></span>
              <div><?php echo ($progress['content']); ?></div></div>
          </div>
        </li><?php endforeach; endif; ?>
        <li class="bl-timeline-header">
          <div class="btn btn-default">完成</div>
        </li>
      </ul>
    </div><?php endif; ?>
  </div>
</div>
<script src="/Application/Home/Public/Js/jquery-ui.min.js"></script>
<script src="/Application/Home/Public/Js/bootstrap.min.js"></script>
<script src="/Application/Home/Public/Js/betterlife.js"></script>
<script src="/Application/Home/Public/Js/plupload.full.min.js"></script>

</body>
</html>