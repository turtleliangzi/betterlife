$(function () {
    $("#add-plan").click(function () {
        var bool = true;
        $(".input-field").each(function (index) {
            if($(this).val() === "") {
                $(this).css('border', '1px solid #cc3333');
                bool = false;
            }  
        });

        if (bool) {
            addPlan();
        }   
    });

    $("#add-progress").click(function () {
        var bool = true;
        $(".text-field").each(function (index) {
            if ($(this).val() == "") {
                $(this).css('border', '1px solid #cc3333');
                bool = false;
            }   
        });
        if (bool) {
            addProgress();
        }   
    });
    
    $("#edit-plan").click(function () {
        var bool = true;
        $(".input-field").each(function (index) {
            if ($(this).val() === "") {
                $(this).css("border", "1px solid #cc3333");
                bool = false;
            }   
        });
        
        if (bool) {
            editPlan();
        }   
    })

    $("#save-sources").click(function () {
        $(".sources").empty();
        var sources = new Array();
        for (i = 0; i < $("input[name='source']:checked").length; i++){
            sources[i] = new Array();
            sources[i]['source'] = $("input[name='source']:checked").eq(i).attr('source');
            sources[i]['sourceid'] = $("input[name='source']:checked").eq(i).val();
        }
        for (i = 0; i < sources.length; i++) {
            $(".sources").append('<button class="btn btn-default bl-resource-source" sourceid="'+sources[i]['sourceid']+'">'+sources[i]['source']+'</button>');
        }


    });   

    $("#complete").click(function () {
        var r = confirm("确认完成该计划吗？");
        if (r == true) {
            var planid = $("input[name='planid']").val();
            $.ajax({
                type: "POST",
                url: "http://turtletl.com/plan/completeplan",
                data: {
                    data: {
                        planid: planid,
                    }
                },
                dataType: 'json',
                success: function (response) {
                    alert(response.message);
                }   
            })
        }   
    });

    $("#advance").click(function () {
        var r = confirm("确定提前开始该计划吗？");
        if ( r == true) {
            var planid = $("input[name='planid']").val();
            $.ajax({
                type: "POST",
                url: "http://turtletl.com/plan/advanceplan",
                data: {
                    data: {
                        planid: planid,
                    }
                },
                dataType: 'json',
                success: function (response) {
                    alert(response.message);
                }   
            })
        }
    });

    $("#pickup").click(function () {
        var r = confirm("确定重新制定该计划吗？");
        if (r == true) {
            var planid = $("input[name='planid']").val();
            $.ajax({
                type: "POST",
                url: "http://turtletl.com/plan/pickupplan",
                data: {
                    data: {
                        planid: planid,
                    }
                },
                dataType: 'json',
                success: function (response) {
                    alert(response.message); 
                    location.href="/plan/editplan?planid="+planid;
                }   
            })
        }    
    });

    $("#giveup").click(function () {
        var r = confirm("确定放弃该计划吗？");
        if (r == true) {
            $("#giveup-modal").modal('show');
            $("#giveup-reason").click(function () {
                var reason = $("textarea[name='reason']").val();
                var planid = $("input[name='planid']").val();
                $.ajax({
                    type: "POST",
                    url: "http://turtletl.com/plan/giveupplan",
                    data: {
                        data: {
                            reason: reason,
                            planid: planid,    
                        }
                    },
                    dataType: 'json',
                    success: function (response) {
                        alert(response.message);
                    }   
                })   
            })
        }
    })

    function addProgress() {
        var progresstime = $("input[name='progresstime']").val();
        var progresscontent = $("textarea[name='progresscontent']").val();
        var planid = $("input[name='planid']").val();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/plan/addProgress",
            data: {
                data: {
                    content: progresscontent,
                    time: progresstime,
                    planid: planid,
                }
            },
            dataType: 'json',   
            success: function (response) {
                alert(response['message']);
                if (response.status == 1) {
                    $("#add-progress-modal").modal("hide");
                    location.reload();
                }

            }
        })

    }

    function addPlan() {
        var title = $("input[name='title']").val();
        var sources = new Array();
        for (i = 0; i < $(".bl-resource-source").length; i++) {
            sources[i] = $(".bl-resource-source").eq(i).attr('sourceid');
        }
        var category = $("select[name='category']").val();
        var tags = new Array();
        for (i = 0; i < $(".bl-resource-tag").length; i++) {
            tags[i] = $(".bl-resource-tag").eq(i).attr('tagid');
        }
        var description = editor.html();
        var starttime = $("input[name='starttime']").val();
        var endtime = $("input[name='endtime']").val();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/plan/createplan",
            data: {
                data: {
                    title : title,
                    sources : sources,
                    category: category,
                    tags: tags,
                    description: description,
                    starttime: starttime,
                    endtime: endtime,
                }
            },
            dataType: 'json',
            beforeSend: function () {
                $("#add-plan").html("添加中...");
                $("#add-plan").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "/mypage");
                $("#add-plan").html("添加计划");
                $("#add-plan").removeAttr("disabled");
            }   
        }) 

    }
    function editPlan() {
        var title = $("input[name='title']").val();
        var sources = new Array();
        for (i = 0; i < $(".bl-resource-source").length; i++) {
            sources[i] = $(".bl-resource-source").eq(i).attr('sourceid');
        }
        var category = $("select[name='category']").val();
        var tags = new Array();
        for (i = 0; i < $(".bl-resource-tag").length; i++) {
            tags[i] = $(".bl-resource-tag").eq(i).attr('tagid');
        }
        var description = editor.html();
        var starttime = $("input[name='starttime']").val();
        var endtime = $("input[name='endtime']").val();
        var planid = $("input[name='planid']").val();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/plan/modifyplan",
            data: {
                data: {
                    planid: planid,
                    title : title,
                    sources : sources,
                    category: category,
                    tags: tags,
                    description: description,
                    starttime: starttime,
                    endtime: endtime,
                }
            },
            dataType: 'json',
            beforeSend: function () {
                $("#edit-plan").html("编辑中...");
                $("#edit-plan").attr("disabled", "true");
            },
            success: function (response) {
                alertInfo(response, "");
                $("#edit-plan").html("编辑计划");
                $("#edit-plan").removeAttr("disabled");
            }   
        })

    }

     /*  
      *显示错误信息函数
      *            */
    function alertInfo(response, href) {
        $("#message").empty();
        $("#message").css("display", "block");
        if (response.status == 1) {
            if (href === "") {
                location.replace(document.referrer);
            } else {
                location.href=href;  
            }
        } else {
            $("#message").append("<p class='alert-danger message-info'>"+ response.message+"</p>");
            $("#message").animate({
            }, 1000, function() {
                $("#message").fadeOut(8000);
            });

        }
    }  
})
