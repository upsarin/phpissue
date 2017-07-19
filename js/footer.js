$('.city_change').change(function () {
    if($(".city_change").val() == "nsk"){
        $("#contact_html").html('<a href="" class="adress_link" id="japan">Автобрат Япония и Корея</a><br/><a href="" class="adress_link" id="europe">Автобрат Европа</a><br><a href="" class="adress_link" id="front_fix">Автобрат Кузовной ремонт</a><br> <span class="main-office">(Выберете нужный сервис в Вашем городе)</span> <br> <span id="cur_adress">Новосибирск Советская 64, 5-515</span> <br> Запись по телефону <span id="cur_phone">8 800 550 26 05</span> <br> avtobrat.finance@yandex.ru');
        $(".adress_link").click(function(){


            if(this.id == "japan"){
                $("#" + this.id).css({color: "#B30D25"});
                $("#europe").css({color: "#337ab7"});
                $("#front_fix").css({color: "#337ab7"});
                $("#cur_adress").html("Новосибирск ул. Петухова, 150");
                $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.6739359331746!2d82.9310319485227!3d54.93785258629068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe7820192976f%3A0x637db9dbeb95b978!2z0YPQuy4g0J_QtdGC0YPRhdC-0LLQsCwgMTUwLCDQndC-0LLQvtGB0LjQsdC40YDRgdC6LCDQndC-0LLQvtGB0LjQsdC40YDRgdC60LDRjyDQvtCx0LsuLCA2MzAxMTk!5e0!3m2!1sru!2sru!4v1491457663370" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
            } else if(this.id == "europe"){
                $("#" + this.id).css({color: "#B30D25"});
                $("#japan").css({color: "#337ab7"});
                $("#front_fix").css({color: "#337ab7"});
                $("#cur_adress").html("Новосибирск ул. Сибиряков-Гвардейцев 62к2");
                $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.929273935895!2d82.89370231537313!3d54.939259061907144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe75c900f1c43%3A0x503205661705521a!2z0YPQuy4g0KHQuNCx0LjRgNGP0LrQvtCyLdCT0LLQsNGA0LTQtdC50YbQtdCyLCA2MtC6Miwg0J3QvtCy0L7RgdC40LHQuNGA0YHQuiwg0J3QvtCy0L7RgdC40LHQuNGA0YHQutCw0Y8g0L7QsdC7LiwgNjMwMDg4!5e0!3m2!1sru!2sru!4v1491459102539" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
            } else if(this.id == "front_fix"){
                $("#" + this.id).css({color: "#B30D25"});
                $("#europe").css({color: "#337ab7"});
                $("#japan").css({color: "#337ab7"});
                $("#cur_adress").html("Новосибирск ул. Сибиряков-Гвардейцев 62к2");
                $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.929273935895!2d82.89370231537313!3d54.939259061907144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe75c900f1c43%3A0x503205661705521a!2z0YPQuy4g0KHQuNCx0LjRgNGP0LrQvtCyLdCT0LLQsNGA0LTQtdC50YbQtdCyLCA2MtC6Miwg0J3QvtCy0L7RgdC40LHQuNGA0YHQuiwg0J3QvtCy0L7RgdC40LHQuNGA0YHQutCw0Y8g0L7QsdC7LiwgNjMwMDg4!5e0!3m2!1sru!2sru!4v1491459102539" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
            } else {
                $("#cur_adress").html("Новосибирск ул. Петухова, 150");
                $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.6739359331746!2d82.9310319485227!3d54.93785258629068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe7820192976f%3A0x637db9dbeb95b978!2z0YPQuy4g0J_QtdGC0YPRhdC-0LLQsCwgMTUwLCDQndC-0LLQvtGB0LjQsdC40YDRgdC6LCDQndC-0LLQvtGB0LjQsdC40YDRgdC60LDRjyDQvtCx0LsuLCA2MzAxMTk!5e0!3m2!1sru!2sru!4v1491457663370" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
            }
            return false;
        });

    } else {
        $("#contact_html").html('Автобрат Европа Дизель <br>Автобрат Азия <br>Автобрат Трансмиссия <span class="main-office">(Выберете нужный сервис в Вашем городе)</span> <br> Новосибирск Советская 64, 5-515 <br> Запись по телефону 8 800 550 26 05 <br> avtobrat.finance@yandex.ru');
    }
});
console.log("test");
$(".adress_link").click(function(){


    if(this.id == "japan"){
        $("#" + this.id).css({color: "#B30D25"});
        $("#europe").css({color: "#337ab7"});
        $("#front_fix").css({color: "#337ab7"});
        $("#cur_adress").html("Новосибирск ул. Петухова, 150");
        $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.6739359331746!2d82.9310319485227!3d54.93785258629068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe7820192976f%3A0x637db9dbeb95b978!2z0YPQuy4g0J_QtdGC0YPRhdC-0LLQsCwgMTUwLCDQndC-0LLQvtGB0LjQsdC40YDRgdC6LCDQndC-0LLQvtGB0LjQsdC40YDRgdC60LDRjyDQvtCx0LsuLCA2MzAxMTk!5e0!3m2!1sru!2sru!4v1491457663370" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
    } else if(this.id == "europe"){
        $("#" + this.id).css({color: "#B30D25"});
        $("#japan").css({color: "#337ab7"});
        $("#front_fix").css({color: "#337ab7"});
        $("#cur_adress").html("Новосибирск ул. Сибиряков-Гвардейцев 62к2");
        $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.929273935895!2d82.89370231537313!3d54.939259061907144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe75c900f1c43%3A0x503205661705521a!2z0YPQuy4g0KHQuNCx0LjRgNGP0LrQvtCyLdCT0LLQsNGA0LTQtdC50YbQtdCyLCA2MtC6Miwg0J3QvtCy0L7RgdC40LHQuNGA0YHQuiwg0J3QvtCy0L7RgdC40LHQuNGA0YHQutCw0Y8g0L7QsdC7LiwgNjMwMDg4!5e0!3m2!1sru!2sru!4v1491459102539" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
    } else if(this.id == "front_fix"){
        $("#" + this.id).css({color: "#B30D25"});
        $("#europe").css({color: "#337ab7"});
        $("#japan").css({color: "#337ab7"});
        $("#cur_adress").html("Новосибирск ул. Сибиряков-Гвардейцев 62к2");
        $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.929273935895!2d82.89370231537313!3d54.939259061907144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe75c900f1c43%3A0x503205661705521a!2z0YPQuy4g0KHQuNCx0LjRgNGP0LrQvtCyLdCT0LLQsNGA0LTQtdC50YbQtdCyLCA2MtC6Miwg0J3QvtCy0L7RgdC40LHQuNGA0YHQuiwg0J3QvtCy0L7RgdC40LHQuNGA0YHQutCw0Y8g0L7QsdC7LiwgNjMwMDg4!5e0!3m2!1sru!2sru!4v1491459102539" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
    } else {
        $("#cur_adress").html("Новосибирск ул. Петухова, 150");
        $(".map").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.6739359331746!2d82.9310319485227!3d54.93785258629068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe7820192976f%3A0x637db9dbeb95b978!2z0YPQuy4g0J_QtdGC0YPRhdC-0LLQsCwgMTUwLCDQndC-0LLQvtGB0LjQsdC40YDRgdC6LCDQndC-0LLQvtGB0LjQsdC40YDRgdC60LDRjyDQvtCx0LsuLCA2MzAxMTk!5e0!3m2!1sru!2sru!4v1491457663370" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
    }
    return false;
});