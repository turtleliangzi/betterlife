
$(function () {
    $("#login-btn").click(function () {
        var bool = true;
        $(".login-field").each(function (index) {
            if ($(this).val() == "") {
                $(this).css('border', '2px solid #cc3333');
                bool = false;
            }
        })
        if (bool) {
            var nickname = $("input[name='nickname']").val();
            var password = $("input[name='password']").val();
            login(nickname, password);
        }
    });
    function login(nickname, password) {
        $.ajax({
            type: "POST",
            url: "http://turtletl.com/login/dologin",
            data: {
                data: {
                    nickname: nickname,
                    password: password,
                }
            },
            beforeSend: function () {
                $("#login-btn").html("登录中...");
                $("#login-btn").attr("disabled", "true");
            },
            dataType: "json",
            success: function (response) { 
                alertInfo(response, "/mypage");
                $("#login-btn").html("登录");
                $("#login-btn").removeAttr("disabled");
            }   
        })
    };    

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
