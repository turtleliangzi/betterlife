$(function () {
    $(".login-field").each(function (index) {
        $(this).mouseover(function () {
            $(this).tooltip('show');
        });
        $(this).mouseout(function () {
            $(this).tooltip('hide');
        }); 
    });
    $("#register-btn").click(function () {
        var bool = true;
        $(".login-field").each(function (index) {
            if ($(this).val() === "") {
                $(this).css('border', '2px solid #cc3333');
                bool = false;
            }
        });
        if (bool) {
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            register(username, password);    
        }
    });

    function register(username, password) {
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/register/doregister",
            data: {
                data: {
                    username: username,
                    password: password,
                }
            },
            dataType: "json",
            beforeSend: function () {
                $("#register-btn").html("注册中...");
                $("#register-btn").attr("disabled", "true");
            },
            success: function(response) {
                alertInfo(response, "/login/login");
                $("#register-btn").html("注册");
                $("#register-btn").removeAttr("disabled");
            }   
        }) 
    }  

    /*  
     *       * 显示错误信息函数
     *            */
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
