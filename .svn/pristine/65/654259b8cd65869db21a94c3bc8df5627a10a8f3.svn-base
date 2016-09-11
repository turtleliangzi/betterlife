<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
  <head>
    <title>预否|预，则立;不预，则废</title>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/betterlife.css">

    <script src="/Application/Home/Public/Js/jquery-2.1.4.min.js"></script>
    <script src="/Application/Home/Public/Js/plupload.full.min.js"></script>
    <meta name="keywords" content="廖亮，turtle，预否，预，则立，不预，则废，计划， 总结， 日记， 文章， 分享， 尽善尽美，  betterlife， 美好生活  ">
    <meta name="description" content="廖亮，turtle，尽善尽美 | 极其完善 极其美好 是一款集做计划、写（总结）文章、查找资源、分享文章于一体的应用网站，旨在为大家的生活带来便利。">
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


<div id="bl-content">
  <div class="bl-content-left" style="border:none;">
    <?php if(is_array($articleList)): $i = 0; $__LIST__ = $articleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><div class="panel panel-dark">
      <div class="panel-heading">
        <div class="bl-user-img">
          <img style="width:100%;" src="/Application/Home/Public/Img/a0.jpg" alt="个人头像" class="img-circle">
        </div>
        <div class="bl-user-nickname">
          <?php echo ($article['member']['nickname']); ?>
        </div>
      </div>
      <div class="panel-body">
        <div class="bl-articl-title">
          <a><?php echo ($article['title']); ?></a>
        </div>
        <div class="bl-sort-tags">
          <i class="fa fa-list"></i><span><?php echo ($article['categorys']['cname']); ?></span>&nbsp;&nbsp;
          <i class="fa fa-tags"></i><span><?php if(is_array($article['tag'])): $i = 0; $__LIST__ = $article['tag'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i; echo ($tag['signname']); ?>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?></span>
        </div>
        <div class="bl-articl-content">
          <?php echo ($article['content']); ?>
        </div>
      </div>
      <div class="panel-footer">
        <span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0条评论</span>
        <span><i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;0个赞</span>
        <span><i class="fa fa-bookmark-o"></i>&nbsp;&nbsp;收藏</span>
        <span>举报</span>
      </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <div class="bl-content-right">
    <div class="pin-wrapper" style="height:243px;">
      <div class="pinned note-container">
        <i style="position:absolute;left:110px;top:-16px;z-index:10;color:rgb(222, 69, 91);font-size:24px;transform:rotate(-20deg);" class="fa fa-map-pin"></i>
        <div class="note">
          <h3 style="text-align:center;margin-bottom:5px;">大家言语</h3>
          <p>一些话，没说出你就是它们的主人，说出了你就是它们的奴隶。——<small>要对自己说的话负责</small></p>
        </div>
      </div>    
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="text-align:center;font-size:24px;"><i class="fa fa-android" style="font-size:26px;color:#669966;margin-right:10px;"></i>APP下载</div>
      <div class="panel-body">
        <img src="/Uploads/default/1443092525.png" style="width:100%;">
      </div>
    </div>
  </div>
</div>

<script src="/Application/Home/Public/Js/jquery-ui.min.js"></script>
<script src="/Application/Home/Public/Js/bootstrap.min.js"></script>
<script src="/Application/Home/Public/Js/betterlife.js"></script>
<script src="/Application/Home/Public/Js/plupload.full.min.js"></script>

</body>
</html>