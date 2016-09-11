<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <title>尽善尽美|用户注册</title>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/betterlife.css"></link>
    <script src="/Application/Home/Public/Js/jquery-2.1.4.min.js"></script>
    <meta type="keywords" content="计划 总结 日记 文章 分享 尽善尽美  betterlife 美好生活  ">
    <meta type="description" content="尽善尽美 | 极其完善 极其美好 是一款集做计划、写（总结）文章、查找资源、分享文章>    于一体的应用网站，旨在为大家的生活带来便利。">
  </head>
  <body style="background-color:#1abc9c">
    <div id="login-box">
      <div class="login-box-left">
        <p>欢迎使用尽善尽美</p>
      </div>
      <div class="login-box-right" style="height:350px;">
        <div class="control-group" style="margin-top:10px;">
          <input class="login-field" name="username" type="text" placeholder="用户名"  data-toggle="tooltip" data-placement="left" title="用户名由6～12位数字或字母或字母和数字组成">
          <i class="fa fa-user login-icon"></i>
        </div>
        <div class="control-group">
          <input class="login-field" type="password" placeholder="密码" name="password"  data-toggle="tooltip" data-placement="left" title="密码由6～12位字母和数字组成">
          <i class="fa fa-lock login-icon" style="font-size:26px;"></i>
        </div>
        <div class="control-group">
          <input class="login-field" type="password" placeholder="确认密码" name="confirmpassword"  data-toggle="tooltip" data-placement="left" title="请确认两次输入的密码相同">
          <i class="fa fa-lock login-icon" style="font-size:26px;"></i>
        </div>
        <div class="control-group">
          <button class="login-btn" id="register-btn">注册</button>
        </div>
      </div>
    </div> 
    <div class="message" id="message">
    
    </div>
  </body>
  <script src="/Application/Home/Public/Js/bootstrap.min.js"></script>
  <script src="/Application/Home/Public/Js/register.js"></script>
  <script src="/Application/Home/Public/Js/betterlife.js"></script>
</html>