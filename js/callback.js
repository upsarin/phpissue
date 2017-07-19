$(document).ready(function(){
   //$("#callback_phone").mask("8 (999) 999-9999");
    $("#callback-icon").animate({
        opacity: 0.5,
    }, 2000);
    if(screen.width > "767") {
        $("#callback-icon a").click(function () {
            $("#callback").animate({
                right: "20%",
                opacity: 1
            }, 500);
            return false;
        });
    } else {
        $("#callback-icon a").click(function () {
            $("#callback").animate({
                right: "0%",
                opacity: 1
            }, 500);
            return false;
        });
    }
    $("#callback .trigger__close-overlayer").click(function(){
        $("#callback").animate({
            right: "-100%",
            opacity: 0
        }, 500);
        return false;
    });
    $(".callback_send").click(function(){
        $("#callback_errors").css({display: "none"});
        var courseUserName = $("#callback_name").val();
        var courseUserPhone = $("#callback_phone").val();
        var title = "Перезвоните мне";
        var error = false;

        if(courseUserName == ""){
            $("#callback_errors").css({display: "block"});
            $("#callback_errors").html("Введите ваше Имя");
            error = true;
        }
        if(courseUserPhone == ""){
            $("#callback_errors").css({display: "block"});
            $("#callback_errors").html("Введите телефон для обратной связи");
            error = true;
        }
        if(!error){
            console.log("form complete");

            data = "title=" + title + "&city=" + $(".select__footer-dark select option:selected").html() + "&name=" + courseUserName + "&phone=" + courseUserPhone;
            $.ajax({
                url: "/callback/ajax_mail.php",
                type: "POST",
                data: data,
                success: function(html){
                    $("#callback .input-wrap").html(html);
                    $("#callback .trigger__close-overlayer").css({
                        top: "-235px",
                    })
                    $("#callback").animate({
                        right: "-100%",
                        opacity: 0
                    }, 500);
                }
            });
        }
        return false;
    });
});
