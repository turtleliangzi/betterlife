<?php if (!defined('THINK_PATH')) exit();?><html>
  <head></head>
  <body>
    <a class="btn btn-danger" id="btn">上传图片</a> 最大500KB，支持jpg，gif，png格式。 
    <ul id="ul_pics" class="ul_pics clearfix"></ul>
  </body>
</html>
<script src="/Application/Home/Public/Js/jquery-2.1.4.min.js"></script>
<script src="/Application/Home/Public/Js/plupload.full.min.js"></script>
<script>
$(function () {

  var uploader = new plupload.Uploader({ //创建实例的构造方法 
    runtimes: 'html5,flash,silverlight,html4', 
    //上传插件初始化选用那种方式的优先级顺序 
    browse_button: 'btn', 
    // 上传按钮 
    url: "http://turtletl.com/source/upload", 
    //远程上传地址 
    flash_swf_url: 'plupload/Moxie.swf', 
    //flash文件地址 
    silverlight_xap_url: 'plupload/Moxie.xap', 
    //silverlight文件地址 
    filters: { 
      max_file_size: '500kb', 
      //最大上传文件大小（格式100b, 10kb, 10mb, 1gb） 
      mime_types: [ //允许文件上传类型 
      { 
        title: "files", 
        extensions: "jpg,png,gif" 
      }] 
    }, 
    multi_selection: true, 
    //true:ctrl多文件上传, false 单文件上传 
    init: { 
      FilesAdded: function(up, files) { //文件上传前 
        if ($("#ul_pics").children("li").length > 30) { 
          alert("您上传的图片太多了！"); 
          uploader.destroy(); 
        } else { 
          var li = ''; 
          plupload.each(files, 
              function(file) { //遍历文件 
                li += "<li id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>"; 
              }); 
          $("#ul_pics").append(li); 
          uploader.start(); 
        } 
      }, 
      UploadProgress: function(up, file) { //上传中，显示进度条 
        $("#" + file.id).find('.bar').css({ 
          "width": file.percent + "%" 
        }).find(".percent").text(file.percent + "%"); 
      }, 
      FileUploaded: function(up, file, info) { //文件上传成功的时候触发 
        var data = JSON.parse(info.response ); 
        $("#" + file.id).html("<div class='img'><img src='http://turtletl.com/Uploads/" + data.file.savepath  + data.file.savename + "'/></div><p>" + data.file.savename + "</p>"); 
      }, 
      Error: function(up, err) { //上传出错的时候触发 
        alert(err.message); 
      } 
    } 
  }); 
  uploader.init();
})
</script>