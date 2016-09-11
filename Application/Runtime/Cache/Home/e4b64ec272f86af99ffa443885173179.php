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
      <h4>编辑计划</h4>
    </div>
    <div class="form-group" style="margin-top:10px">
      <label for="plan-name">计划名称</label>
      <input type="text" name="title" value="<?php echo ($plan['title']); ?>" class="form-control input-field" id="plan-name" placeholder="请填写计划名称">
      <input type="hidden" name="planid" value="<?php echo ($plan['planid']); ?>">
    </div>
    <div class="form-group">
      <label>涉及到的资源</label>
      <div class="sources" style="display:inline-block">
        <?php if(is_array($plan['resources'])): $i = 0; $__LIST__ = $plan['resources'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$resource): $mod = ($i % 2 );++$i;?><button class="btn btn-default"><?php echo ($resource['rname']); ?></button><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="bl-addplan-resources" style="display:inline-block">
        <button class="btn btn-info" data-toggle="modal" data-target="#addplan-modal"><i style="color:#fff" class="fa fa-plus"></i></button>
      </div>
    </div>
    <div class="form-group">
      <label>分类</label>
      <select class="form-control" name="category">
        <?php if(is_array($categoryList)): foreach($categoryList as $key=>$category): if($plan['category']['categoryid'] == $category['categoryid']): ?><option class="category" selected value="<?php echo ($category['categoryid']); ?>"><?php echo ($category['cname']); ?></option>
        <?php else: ?>
        <option class="category" value="<?php echo ($category['categoryid']); ?>"><?php echo ($category['cname']); ?></option><?php endif; endforeach; endif; ?>
      </select>
    </div>
    <div class="form-group">
      <label>标签</label>
      <div class="tags" style="display:inline-block">
        <?php if(is_array($plan['tags'])): $i = 0; $__LIST__ = $plan['tags'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><button class="btn btn-default bl-resource-tag" tagid="<?php echo ($tag['signid']); ?>"><i class="fa fa-tag"><?php echo ($tag['signname']); ?></i></button><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="bl-addplan-resources" style="display:inline-block">
        <button class="btn btn-info" data-toggle="modal" data-target="#tag-modal"><i style="color:#fff" class="fa fa-plus"></i></button>
      </div>
    </div>
    <div class="form-group">
      <label>简介</label>
      <textarea id="plan-desc" name="plandesc" style="width:99%"><?php echo ($plan['description']); ?></textarea>
    </div>
    <div class="form-group">
      <label>开始时间</label>
      <div class="form-group" >
        <input type="text" class="form-control" id="start-time"  value="<?php echo (date('Y-m-d', $plan['starttime'] )); ?>" readonly name="starttime">
      </div>
    </div>
    <div class="form-group">
      <label>预计结束时间</label>
      <div class="form-group">
        <input type="text" class="form-control" name="endtime" id="end-time" readonly  value="<?php echo (date('Y-m-d', $plan['endtime'] )); ?>">
      </div>
    </div>
    <div class=form-group" style="text-align:center;margin-top:20px;margin-top:10px;">
      <button id="edit-plan" class="btn btn-success" >编辑计划</button>
    </div>
  </div>
  <script>
$(function() {
  $("#start-time").datepicker({
    onClose: function(selectedDate) {
      $("#end-time").datepicker("option", "minDate", selectedDate)
    }
  });
  $("#end-time").datepicker({
    onClose: function(selectedDate) {
      $("#start-time").datepicker("option", "maxDate", selectedDate)
    }
  });
})
  </script>
</div>
<script charset="utf-8" src="/editor/kindeditor.js"></script>
<script charset="utf-8" src="/editor/lang/zh_CN.js"></script>
<script>
KindEditor.ready(function(K) {
  window.editor = K.create('#plan-desc'); 
});
</script>
<div class="modal fade" id="addplan-modal" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">我的资源</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <?php if(is_array($sourceList)): foreach($sourceList as $key=>$source): ?><label class="col-xs-6 col-sm-4">
              <input type="checkbox" value="<?php echo ($source['rid']); ?>" name="source" source="<?php echo ($source['rname']); ?>">
              <span class="source-name"><?php echo ($source['rname']); ?></span>
            </label><?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" id="save-sources" data-dismiss="modal">保存</button>
      </div>
    </div>
  </div>
</div><div class="modal fade" id="tag-modal" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">标签</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save-tags">保存</button>
      </div>
    </div>
  </div>
</div>
<div class="message" id="message">

</div>
<script src="/Application/Home/Public/Js/plan.js"></script>
<script src="/Application/Home/Public/Js/jquery-ui.min.js"></script>
<script src="/Application/Home/Public/Js/bootstrap.min.js"></script>
<script src="/Application/Home/Public/Js/betterlife.js"></script>
<script src="/Application/Home/Public/Js/plupload.full.min.js"></script>

</body>
</html>