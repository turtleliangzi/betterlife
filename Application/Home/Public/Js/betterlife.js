$(function () {
    
    $(".category").each(function (index) {
        $(this).click(function (){
            jqueryAjax($(this).val());
        })   
    });

    $("#save-tags").click(function () {
        $(".tags").empty();
        var tags = new Array();
        for (i = 0; i < $("input[name='tags']:checked").length; i++){
            tags[i] = new Array();
            tags[i]['tag'] = $("input[name='tags']:checked").eq(i).attr('tag');
            tags[i]['tagid'] = $("input[name='tags']:checked").eq(i).val();
        }
        for (i = 0; i < tags.length; i++) {
            $(".tags").append('<button class="btn btn-default bl-resource-tag" tagid="'+tags[i]['tagid']+'"><i class="fa fa-tag "></i>'+tags[i]['tag']+'</button>');
        }

    });

    $("#upload").click(function () {
        alert($("input[name='sourceimg']").val());   
    })
    /*
     * 登录和注册
     */

    $(".login-field").each(function (index) {
        $(this).focus(function () {
            $(this).css('border', '2px solid #1abc9c');   
        });  
        $(this).blur(function () {
            $(this).css('border', '2px solid #fff'); 
        });
    });

    /*
     * 输入框
     */
    $(".input-field").each(function (index) {
        $(this).focus(function () {
            $(this).css('border', '1px solid #66afe9');   
        });
        $(this).blur(function () {
            $(this).css('border', '1px solid #ccc');   
        })   
    })

    function jqueryAjax(categoryid) {
        $(".tags").empty();
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/category/getsign",
            data: {
                categoryid: categoryid,
            },
            dataType: "json",
            success: function (response) {
                $("#tag-modal .row").empty();
                $.each(response, function(k, rs) {
                    $("#tag-modal .row").append('<label class="col-xs-6 col-sm-4"> <input type="checkbox"  name="tags" value="'+rs['signid']+'" tag="'+rs['signname']+'"> <span class="tag-name">'+ rs['signname']+'</span></label>')
                })
            }
        });
    }

      


})

