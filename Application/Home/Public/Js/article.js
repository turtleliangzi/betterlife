$(function () {
    $("#add-briefsummary").click(function () {
        var bool = true;
        if($("input[name='title']").val() == "") {
            $("input[name='title']").css("border", "1px solid #cc3333");
            bool = false;

        }
        if (bool) {
            addBriefsummary();
        }   
    });

    $("#edit-briefsummary").click(function () {
        var bool = true;
        if ($("input[name='title']").val() == "") {
            $("#input[name='title']").css("border", "1px solid #cc3333");
            bool = false;
        }

        if (bool) {
            editBriefsummary();
        }   
    })

    $("#add-essay").click(function () {
        var bool = true;
        if ($("input[name='title']").val() == "") {
            $("input[name='title']").css("border", "1px solid #cc3333");
            bool = false;
        }

        if (bool) {
            addEssay();
        }    
    })
    $("#edit-essay").click(function () {
        var bool =true;
        if ($("input[name='title']").val() == "" ) { 
            $("input[name='title']").css("border", "1px solid #cc3333");
            bool = false;
        }

        if (bool) {
            editEssay();
        } 
    })

    $("#add-summary").click(function () {
        var bool = true;
        if ($("input[name='title']").val() == "") {
            $("input[name='title']").css("border", "1px solid #cc3333");
            bool = false;
        }   
        if (bool) {
            addSummary();
        }
    });

    $("#edit-summary").click(function () {
        var bool = true;
        if ($("input[name='title']").val() == "") {
            $("input[name='title']").css("border", "1px solid #cc3333");
            bool = false;
        }   
        if (bool) {
            editSummary();
        }
    })

    function addSummary() {
        var title = $("input[name='title']").val();
        var plan = $("select[name='plan']").val();
        var category = $("select[name='category']").val();
        var tags = new Array();
        for (i = 0; i < $(".bl-resource-tag").length; i++) {
            tags[i] = $(".bl-resource-tag").eq(i).attr('tagid');
        }
        var share = $("input[name='share']:checked").val();
        var content = editor.html();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/article/createsummary",
            data: {
                data: {
                    title: title,
                    plan: plan,
                    category: category,
                    tags: tags,
                    share: share,
                    content: content,
                }
            },
            dataType: 'json',
            beforeSend: function () {
                $("#add-summary").html("添加中...");
                $("#add-summary").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/article/summarylist");
                $("#add-summary").html("添加总结");
                $("#add-summary").removeAttr("disabled");
            }   
        })

    }
    function editSummary() {
        var title = $("input[name='title']").val();
        var plan = $("select[name='plan']").val();
        var category = $("select[name='category']").val();
        var tags = new Array();
        for (i = 0; i < $(".bl-resource-tag").length; i++) {
            tags[i] = $(".bl-resource-tag").eq(i).attr('tagid');
        }
        var share = $("input[name='share']:checked").val();
        var content = editor.html();
        var articleid = $("input[name='articleid']").val();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/article/editsummary",
            data: {
                data: {
                    title: title,
                    plan: plan,
                    category: category,
                    tags: tags,
                    share: share,
                    content: content,
                    conclusionid: articleid,
                }
            },
            dataType: 'json',
            beforeSend: function () {
                $("#edit-summary").html("编辑中...");
                $("#edit-summary").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/article/summarylist");
                $("#edit-summary").html("编辑总结");
                $("#edit-summary").removeAttr("disabled");
            }   
        })

    }


    function addEssay() {
        var title = $("input[name='title']").val();
        var category = $("select[name='category']").val();
        var tags = new Array();
        for (i = 0; i < $(".bl-resource-tag").length; i++) {
            tags[i] = $(".bl-resource-tag").eq(i).attr('tagid');
        }
        var share = $("input[name='share']:checked").val();
        var content = editor.html();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/article/createessay",
            data: {
                data: {
                    title: title,
                    category: category,
                    tags: tags,
                    content: content,
                    share: share,
                }
            },
            dataType: 'json',
            beforeSend: function () {
                $("#add-essay").html("添加中...");
                $("#add-essay").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/article/essaylist");
                $("#add-essay").html("添加随笔");
                $("#add-essay").removeAttr("disabled");
            }

        }) 

    }

    function editEssay() {
        var title = $("input[name='title']").val();
        var category = $("select[name='category']").val();
        var tags = new Array();
        for (i = 0; i < $(".bl-resource-tag").length; i++) {
            tags[i] = $(".bl-resource-tag").eq(i).attr('tagid');
        }
        var share = $("input[name='share']:checked").val();
        var content = editor.html();
        var articleid = $("input[name='articleid']").val();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/article/editessay",
            data: {
                data: {
                    title: title,
                    category: category,
                    tags: tags,
                    content: content,
                    share: share,
                    conclusionid: articleid,
                }
            },
            dataType: 'json',
            beforeSend: function () {
                $("#edit-essay").html("编辑中...");
                $("#edit-essay").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/article/essaylist");
                $("#edit-essay").html("编辑随笔");
                $("#edit-essay").removeAttr("disabled");
            }

        }) 

    }

    function addBriefsummary() {
        var title = $("input[name='title']").val();
        var content = editor.html();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/article/createbrief",
            data: {
                data: {
                    title: title,
                    content: content,
                }
            },
            dataType: 'json',
            beforeSebd: function () {
                $("#add-briefsummary").html("添加中...");
                $("#add-briefsummary").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/article/briefsummarylist");
                $("#add-briefsummary").html("添加小结");
                $("#add-briefsummary").removeAttr("disabled");
            }  
        })
    };
    function editBriefsummary() {
        var title = $("input[name='title']").val();
        var content = editor.html();
        var articleid = $("input[name='articleid']").val();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/article/editbrief",
            data: {
                data: {
                    title: title,
                    content: content,
                    conclusionid: articleid,
                }
            },
            dataType: 'json',
            beforeSebd: function () {
                $("#edit-briefsummary").html("编辑中...");
                $("#edit-briefsummary").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/article/briefsummarylist");
                $("#edit-briefsummary").html("编辑小结");
                $("#edit-briefsummary").removeAttr("disabled");
            }  
        })
    };


    /*  
     *       *       * 显示错误信息函数
     *            *            */
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
