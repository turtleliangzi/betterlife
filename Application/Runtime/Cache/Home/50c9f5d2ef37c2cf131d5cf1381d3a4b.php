<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <title>尽善尽美|用户登录</title>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/betterlife.css"></link>
    <script src="/Application/Home/Public/Js/jquery-2.1.4.min.js"></script>
    <script src="/Application/Home/Public/Js/bootstrap.min.js"></script>
    <script src="/Application/Home/Public/Js/betterlife.js"></script>
    <script src="/Application/Home/Public/Js/login.js"></script>
    <meta type="keywords" content="计划 总结 日记 文章 分享 尽善尽美  betterlife 美好生活  ">
    <meta type="description" content="尽善尽美 | 极其完善 极其美好 是一款集做计划、写（总结）文章、查找资源、分享文章>    于一体的应用网站，旨在为大家的生活带来便利。">
  </head>
  <body style="background-color:#1abc9c">
    <div id="login-box">
      <div class="login-box-left">
        <p>欢迎使用尽善尽美</p>
      </div>
      <div class="login-box-right">
        <div class="control-group" style="margin-top:10px;">
          <input class="login-field" name="nickname" type="text" placeholder="用户名">
          <i class="fa fa-user login-icon"></i>
        </div>
        <div class="control-group">
          <input class="login-field" type="password" placeholder="密码" name="password">
          <i class="fa fa-lock login-icon" style="font-size:26px;"></i>
        </div>
        <div class="control-group">
          <button class="login-btn" id="login-btn">登录</button>
        </div>
      </div>
    </div> 
    <div class="message " id="message" >
    </div>
  </body>
</html>