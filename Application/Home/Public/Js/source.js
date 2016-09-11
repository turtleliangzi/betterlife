$(function () {
    $("#new-folder").click(function () {
        var bool = true;
        if ($("input[name='foldername']").val() == "") {
            $("input[name='foldername']").css('border', '1px solid #cc3333');
            bool = false;
        }
        if (bool) {
            var foldername = $("input[name='foldername']").val();
            createFolder(foldername);
        } 
    });

    $("#add-resource").click(function () {
        var bool = true;
        $(".input").each(function (index) {
            if($(this).val() === "") {
                $(this).css('border', '1px solid #cc3333');
                bool = false;
            }  
        });
        if (bool) {
            addSource();
        }   
    }) 

    function addSource() {
        var rname = $("input[name='sourcename']").val();
        var thumb = $("input[name='thumb']").val();
        var folderid = $("select[name='folder']").val();
        var category = $("select[name='category']").val();
        var tags = new Array();
        for(i = 0; i < $(".bl-resource-tag").length; i++) {
            tags[i] = $(".bl-resource-tag").eq(i).attr('tagid');
        }
        var introduction = editor.html();
        var storeplace = $("input[name='place']").val();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/source/createsource",
            data: {
                data: {
                    rname: rname,
                    thumb: thumb,
                    folderid: folderid,
                    category: category,
                    tags: tags,
                    introduction: introduction,
                    storeplace: storeplace,
                }
            },
            dataType: "json",
            beforeSend: function() {
                $("#add-resource").html("添加中...");
                $("#add-resource").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/source/mysourcelist");
                $("#add-resource").html("添加资源");
                $("#add-resource").removeAttr("disabled");
            }       
        })
    }

    function createFolder(foldername) {
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/source/createfolder",
            data: {
                data:{
                    foldername: foldername,
                }
            },
            dataType: "json",
            success: function(response) {
                alert(response.message);
                if (response.status == 1) {
                    $("#folder-modal").modal('hide');
                    location.href="/source/addsource";
                }
            }    
        });
    }   

    /*  
     *显示错误信息函数
     */
    function alertInfo(response, href) {
        $("#message").empty();
        $("#message").css("display", "block");
        if (response.status == 1) {
            location.href=href;  
        } else {
            $("#message").append("<p class='alert-danger message-info'>"+ response.message+"</p>");
            $("#message").animate({
            }, 1000, function() {
                $("#message").fadeOut(8000);
            });

        }
    } 
})
