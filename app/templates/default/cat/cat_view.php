<?

$params = array('element_id' => $array['id']);
$table_child = 'field_value';
$fields = DBConnect::init()->getFeildsValues($params, null, $table_child);
foreach($fields as $field => $value){
    $element[$value['code']] = $value['value'];
}
$filter_images = array("content_id" => $array['id'], "content_type" => "cats");
$images_array = Element::SelectAll('files', $filter_images, null, null);
foreach($images_array as $image => $val){
    $element['images'][$val['type']] = $val['path'];
}

$manager = DBConnect::init()->getFeildsValues(array('element_id' => $array['id'], "code" => "cat_manager"), null, $table_child);
$manager_desc = DBConnect::init()->getFeildsValues(array('element_id' => $array['id'], "code" => "cat_manager_desc"), null, $table_child);
?>


<style>
    .text-wrapper {
        width: 80%;
        max-height: 100px;
        height: 100px;

        padding: 5px 10px;
        font-size: 12px;
        border-radius: 10px;
    }
    .stars-view-star13 .star-item {
        position: relative;
        vertical-align: middle;
        background-image: url(http://zoon.ru/build/icons.png?5aefb0);
        background-repeat: no-repeat;
        display: inline;
        display: inline-block;
        background-position: -172px -132px;
        width: 13px;
        height: 13px;
    }
    #conc .concu-text {
        position: relative;
        left: 0px;
        max-width: 440px;
    }
    #conc .icon {
        overflow: hidden;
        background: #FFF none repeat scroll 0% 0%;
        border: 2px solid #E9E9E9;
        width: 85px;
        border-radius: 50px;
        height: 85px;
        position: relative;
        top: 0px;
        left: 0px;
        margin: 0px 15px 0px 0px;
    }
    #conc .icon:hover {
        border: 2px solid #B30D25;
    }
    #conc .services-q13 {
        margin: 10px;
    }
    #conc .concurents-list img {
        margin-right: 25px;
        width: 60px !important;
        height: 60px;
    }
    .usluga img {
        width: 100%;
        height: 100%;
    }
    .header-sales {
        background: url("/<?=$element['images']["detail_image"]?>") no-repeat scroll center bottom;
    }
    #header-sales .contain {
        background: rgba(162, 152, 152, 0.5);
    }
    #icon-1 {
        <?if($element['images']["icon-1"]) {?>
            background: url(/<?=$element['images']["icon-1"]?>);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        <? } ?>
    }
    #icon-2 {
         <?if($element['images']["icon-2"]) {?>
            background: url(/<?=$element['images']["icon-2"]?>);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        <? } ?>
    }
    #icon-3 {
        <?if($element['images']["icon-3"]) {?>
            background: url(/<?=$element['images']["icon-3"]?>);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        <? } ?>
    }
    #icon-4 {
    <?if($element['images']["icon-4"]) {?>
            background: url(/<?=$element['images']["icon-4"]?>);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        <? } ?>
    }
    #icon-5 {
    <?if($element['images']["icon-5"]) {?>
            background: url(/<?=$element['images']["icon-5"]?>);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        <? } ?>
    }
    #icon-6 {
        <?if($element['images']["icon-6"]) {?>
            background: url(/<?=$element['images']["icon-6"]?>);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        <? } ?>
    }
</style>

    <div id="messages" class="clearfix">

    </div>

    <div id="main-page">
        <div id="header-sales" class="header-sales">
            <?=$array['cat_preview_desc'];?>
        </div>
        <div id="category-help">
            <?=$element["cat_h"];?>

            <ul class="clearfix">
                <div class="contain wrap-li">
                    <?foreach($array['content']['child_cats'] as $cats => $val){?>
                        <?
                        $filter = array("content_id" => $val['id'], "content_type" => "cats", "type"=>"preview_file");
                        $images = Element::SelectAll('files', $filter, null, null);
                        $publish = DBConnect::init()->getFeildsValues(array("code" => "link-active", 'element_id' => $val['id']), null, "field_value");
                        ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                            <li>
                                <a href="<?=($publish[0]['value'] != "y") ? "/no-index/" : "/cat/". $val['alias'];?>">
                                    <div class="usluga">
                                        <div class="icon" style="overflow: hidden;">
                                            <div class="ib services-q13">
                                                <?if(!empty($images[0]['path'])){?>
                                                    <img src="/<?=$images[0]['path']?>" style="<?=$val['style']?>"/>
                                                <? } ?>
                                            </div>
                                        </div>
                                        <p><?=$val['name']?></p>
                                    </div>
                                </a>
                            </li>
                        </div>
                    <? } ?>
                </div>
            </ul>

        </div>
        <?if($_SESSION['user']['filter']['car_mark']){?>
        <div id="our-service" class="clearfix">
            <div class="contain">
                <h2>Мы предоставлем до трех лет гарантии только на некоторые марки автомобилей в Москве</h2>
                <div class="serv clearfix">
                    <div class="slick-slider">
                        <div>
                            <div class="slider-item">
                                <span class="lg sprites-bubble-2"></span>
                                <p>Продажа авто из Японии</p>
                                <ul>
                                    <li>Toyota</li>
                                    <li>Nissan</li>
                                    <li>Mazda</li>
                                    <li>Honda</li>
                                    <li>Mitsubishi</li>
                                    <li>Subaru</li>
                                    <li>Suzuki</li>
                                    <li>Isuzu</li>
                                    <li>Daihatsu</li>
                                    <li>Японские микровэны</li>
                                    <li>Японские минивэны</li>
                                    <li>Японские джипы</li>
                                </ul>
                            </div>
                        </div>
                        <div>

                            <div class="slider-item">
                                <span class="lg sprites-briefcase"></span>
                                <p>Продажа авто из Кореи</p>
                                <ul>
                                    <li>KiA</li>
                                    <li>Huynda</li>
                                    <li>SsangYong</li>
                                    <li>Корейскиеминивэны</li>
                                    <li>Корейские джип</li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <div class="slider-item">
                                <span class="lg sprites-files"></span>
                                <p>Продажа авто из США</p>
                                <ul>
                                    <li>Chevrolet </li>
                                    <li>Ford </li>
                                    <li>Dodge </li>
                                    <li>Caddilac </li>
                                    <li>Chrysler </li>
                                    <li>Lexus </li>
                                    <li>Scion </li>
                                    <li>Infinity </li>
                                    <li>Acura </li>
                                    <li>Американские пикапы </li>
                                    <li>Американские минивэны</li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <div class="slider-item">
                                <span class="lg sprites-laptop"></span>
                                <p>Продажа авто из Европы</p>
                                <ul>
                                    <li>Audi </li>
                                    <li>BMW </li>
                                    <li>Mercedes-Benz </li>
                                    <li>Volkswagen </li>
                                    <li>Opel </li>
                                    <li>Skoda </li>
                                    <li>Ford для европы из Испании </li>
                                    <li>Тойота для Европы </li>
                                    <li>Ниссан для Европы </li>
                                    <li>Хонда для Европы </li>
                                    <li>Субару для Европы</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <? } ?>

        <?=$array['cat_desc'];?>
        <?if($element['conc-h1-left']){?>
            <div id="conc">
                <div class="contain ">
                    <div class="col-md-6 col-lg-6 concurents">
                        <h2><?=$element['conc-h1-left'];?></h2>
                        <?if($element['conc-left-1']){?>
                            <div class="concurents-list clearfix">
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-1"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-left-1'];?>
                            </div>
                        <? } ?>
                        <?if($element['conc-left-2']){?>
                            <div class="concurents-list clearfix">
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-2"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-left-2'];?>
                            </div>
                        <? } ?>
                        <?if($element['conc-left-3']){?>
                            <div class="concurents-list clearfix">
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-3"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-left-3'];?>
                            </div>
                        <? } ?>
                        <?if($element['conc-left-4']){?>
                            <div class="concurents-list clearfix"><br />
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-4"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-left-4'];?>
                            </div>
                        <? } ?>
                    </div>
                    <div class="col-md-6 col-lg-6  concurents  ">
                        <h2><?=$element['conc-h1-right'];?></h2>
                        <?if($element['conc-right-1']){?>
                            <div class="concurents-list clearfix">
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-5"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-right-1'];?>
                            </div>
                        <? } ?>
                        <?if($element['conc-right-2']){?>
                            <div class="concurents-list clearfix">
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-6"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-right-2'];?>
                            </div>
                        <? } ?>
                        <?if($element['conc-right-3']){?>
                            <div class="concurents-list clearfix">
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-7"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-right-3'];?>
                            </div>
                        <? } ?>
                        <?if($element['conc-right-4']){?>
                            <div class="concurents-list clearfix">
                                <div class="icon" style="overflow: hidden;">
                                    <div class="ib services-q13">
                                        <img src="/<?=$element['images']["conc-icon-8"]?>" style="">
                                    </div>
                                </div>
                                <?=$element['conc-right-4'];?>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        <? } ?>
        <?if($element['faq-h1']){?>
            <div id="faq">
                <div class="contain">
                    <h2><?=$element['faq-h1'];?></h2>
                    <div class="view-row clearfix">
                        <?if($element['faq-slide-1']){?>
                            <div class="col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-0 col-lg-4">
                                <div class="view-source"><a href="/" id="faq-check-1"><?=$element['faq-slide-1'];?></a>
                                    <div class="hide" style="display: none;" id="faq-1"><?=$element['faq-slide-1-desc'];?></div>
                                </div>
                            </div>
                        <? } ?>
                        <?if($element['faq-slide-2']){?>
                            <div class="col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-0 col-lg-4">
                                <div class="view-source"><a href="/" id="faq-check-2"><?=$element['faq-slide-2'];?></a>
                                    <div class="hide" style="display: none;" id="faq-2"><?=$element['faq-slide-2-desc'];?></div>
                                </div>
                            </div>
                        <? } ?>
                        <?if($element['faq-slide-3']){?>
                            <div class="col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-0 col-lg-4">
                                <div class="view-source"><a href="/" id="faq-check-3"><?=$element['faq-slide-3'];?></a>
                                    <div class="hide" style="display: none;" id="faq-3"><?=$element['faq-slide-3-desc'];?></div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                    <div class="view-row clearfix">
                        <?if($element['faq-slide-4']){?>
                            <div class="col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-0 col-lg-4">
                                <div class="view-source"><a href="/" id="faq-check-4"><?=$element['faq-slide-4'];?></a>
                                    <div class="hide" style="display: none;" id="faq-4"><?=$element['faq-slide-4-desc'];?></div>
                                </div>
                            </div>
                        <? } ?>
                        <?if($element['faq-slide-5']){?>
                            <div class="col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-0 col-lg-4">
                                <div class="view-source"><a href="/" id="faq-check-5"><?=$element['faq-slide-5'];?></a>
                                    <div class="hide" style="display: none;" id="faq-5"><?=$element['faq-slide-5-desc'];?></div>
                                </div>
                            </div>
                        <? } ?>
                        <?if($element['faq-slide-6']){?>
                            <div class="col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-0 col-lg-4">
                                <div class="view-source"><a href="/" id="faq-check-6"><?=$element['faq-slide-6'];?></a>
                                    <div class="hide" style="display: none;" id="faq-6"><?=$element['faq-slide-6-desc'];?></div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        <? } ?>

        <?
        $elements = array();

        $filter = array("value" => $array['id'], "code" => "cat", "iblock" => "users");
        $users = DBConnect::init()->selectAll("field_value", $filter);
        if(count($users) > 0){ ?>
            <h2>Сервисы по данной категории</h2>
                <div class="contain-catalog">
                   <? foreach($users as $user => $val){
                       $element = Element::SelectAll('users', array("id" => $val['element_id']), null, null);
                       $element = $element[0];
                       $params = array('element_id' => $element['id']);
                       $table = 'field_value';
                       $fields = DBConnect::init()->getFeildsValues($params, null, $table);
                       foreach($fields as $field => $value){
                           $element[$value['code']] = $value['value'];
                       }
                       $filter = array("content_id" => $element['id'], "content_type" => "users", "type" => "com_image");
                       $image_preview = Element::SelectAll('files', $filter, null, null);
                   ?>

                       <div class="expertiza-item clearfix">
                           <div class="jurist-about">
                                   <?if($image_preview){ ?>
                                       <img src="/<?=$image_preview[0]['path']?>" style="width: 290px; height: 250px" />
                                   <? } else { ?>
                                       <img src="/images/Notebook.png" style="width: 227px; height: 210px;" />
                                   <? } ?>
                           </div>

                           <div class="jurist-info" style="width: 70%;">
                               <h4><?=$element['first_name']?></h4>
                               <div class="rating-comments rating-offset clearfix" style="width: 100%;">
                                   <div class="pull-left mg-right-s">	<div class="stars-view stars-view-star13 clearfix">
                                           <span class="star-item" data-pos="1"><span style="width: 100%; display: block;"></span></span>
                                           <span class="star-item" data-pos="2"><span style="width: 100%; display: block;"></span></span>
                                           <span class="star-item" data-pos="3"><span style="width: 100%; display: block;"></span></span>
                                           <span class="star-item" data-pos="4"><span style="width: 100%; display: block;"></span></span>
                                           <span class="star-item" data-pos="5"><span style="width: 70%; display: block;"></span></span>
                                       </div>
                                   </div>
                                   <div class="pull-left gray" style="clear: both;">Адрес: <?=$element['adress']?> | Телефон: <?=$element['phone']?> | Email: <?=$element['email']?></div>
                                   <div class="pull-left gray" style="clear: both;">Время работы: <?=$element['work_time']?></div>
                               </div>
                               <div style=" overflow: hidden;width: 80%;float: left;">
                                   <div class="text-wrapper">
                                       <?=$element['desc']?>
                                   </div>
                               </div>
                               <div style="width: 14%;float: left;position: relative;bottom: 0px;right: 0px;" class="about-btn">
                                   <a class="btn slide-contact" href="/contact/users/" data-user="<?=$element['id']?>">Записаться</a>
                               </div>
                           </div>

                       </div>
                       <div class="expertiza-item clearfix" id="form-<?=$element['id']?>" style="display: none;">
                           <div class="jurist-about" style="height: 350px">
                               <div class="calendar">
                                   <p>Please enable Javascript to view this calendar.</p>
                               </div>
                           </div>
                           <div class="jurist-info" style="width: 70%; height: 350px">
                               <h4><?=$element['first_name']?></h4>
                               <h4>Онлайн запись</h4>
                               <div class="rating-comments rating-offset clearfix" style="width: 100%;">
                                   <label for="time-hour" style="float: left;padding: 5px 15px;">Дата</label>
                                   <input type="text" class="form-control" name="date" id="date-<?=$element['id']?>" value="" style="width: 160px;float: left;"/>

                                   <label for="time-hour" style="float: left;padding: 5px 15px;">Время</label>
                                   <input type="text" class="form-control" name="time-hour" id="time-hour-<?=$element['id']?>" value="12" maxlength="2" style="width: 40px;float: left"/>
                                   <input type="text" class="form-control" name="time-min" id="time-min-<?=$element['id']?>" value="00" maxlength="2" style="width: 40px;float: left"/>
                                   <input type="text" class="form-control" name="name" id="name-<?=$element['id']?>" value="" placeholder="Введите ваше имя" style="margin-top: 40px"/>
                                   <input type="text" class="form-control" name="phone" id="phone-<?=$element['id']?>" value="" placeholder="Введите ваш телефон для обратной связи"/>
                                   <input type="hidden" id="email-<?=$element['id']?>" value="<?=$element['email']?>"/>
                                   <input type="hidden" id="adress-<?=$element['id']?>" value="<?=$element['adress']?>"/>
                                   <input type="hidden" id="com-name-<?=$element['id']?>" value="<?=$element['first_name']?>"/>
                               </div>
                               <div style=" overflow: hidden;width: 80%;float: left;">

                               </div>
                               <div style="width: auto;float: left;position: relative;bottom: 0px;right: 0px;" class="about-btn">
                                   <a class="btn slide-send" href="/contact/users/" data-user="<?=$element['id']?>" style="margin-right: 5px">Отправить</a>
                                   <a class="btn slide-close" href="/contact/users/" data-user="<?=$element['id']?>">Скрыть</a>
                               </div>
                           </div>
                       </div>
                   <? } ?>
                </div>
        <? } ?>

    </div>

    <div class="border"></div>
    <script>
        $(document).ready(function(){

            function showModal(){
                var data = "id=<?=$manager[0]['value']?>";
                $.ajax({
                    url: "/ajax/backmail.php",
                    type: "POST",
                    data: data,
                    success: function (html) {
                        $("#auto-form").html(html);
                        $("#auto-form .mfp-close").click(function(){
                            $("#form-wrapper").css({
                                display: "none"
                            });
                        });
                    }
                });
            }
            showModal();
            <?if($element['faq-slide-1-check'] != "n"){?>
                $("#faq-check-1").click(function(){
                    $("#faq-1").slideDown();
                    return false;
                });
            <? } else { ?>
                $("#faq-check-1").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });

                    return false;
                });
            <? } ?>
            <?if($element['faq-slide-2-check'] != "n"){?>
                $("#faq-check-2").click(function(){
                    $("#faq-2").slideDown();
                    return false;
                });
            <? } else { ?>
                $("#faq-check-2").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    showModal();
                    return false;
                });
            <? } ?>
            <?if($element['faq-slide-3-check'] != "n"){?>
                $("#faq-check-3").click(function(){
                    $("#faq-3").slideDown();
                    return false;
                });
            <? } else { ?>
                $("#faq-check-3").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    return false;
                });
            <? } ?>
            <?if($element['faq-slide-4-check'] != "n"){?>
                $("#faq-check-4").click(function(){
                    $("#faq-4").slideDown();
                    return false;
                });
            <? } else { ?>
                $("#faq-check-4").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    return false;
                });
            <? } ?>
            <?if($element['faq-slide-5-check'] != "n"){?>
                $("#faq-check-5").click(function(){
                    $("#faq-5").slideDown();
                    return false;
                });
            <? } else { ?>
                $("#faq-check-5").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    return false;
                });
            <? } ?>
            <?if($element['faq-slide-6-check'] != "n"){?>
                $("#faq-check-6").click(function(){
                    $("#faq-6").slideDown();
                    return false;
                });
            <? } else { ?>
                $("#faq-check-6").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    return false;
                });
            <? } ?>


            $("#auto-form .button").click(function(){
                $.ajax({
                    url: "/ajax/send_mail.php",
                    type: "POST",
                    data: data,
                    success: function (html) {
                        $("#auto-form").html(html);
                        $("#auto-form .mfp-close").click(function(){
                            $("#form-wrapper").css({
                                display: "none"
                            });
                        });
                    }
                });
            });

            $("#auto-form .mfp-close").click(function(){
                $("#form-wrapper").css({
                    display: "none"
                });
            });
            $("a[href='/no-index/']").click(function(){
                $("#form-wrapper").css({
                    display: "block"
                });
                showModal();
                return false;
            });
            $("a.btn").click(function(){
                if(this.className == "btn slide-contact") {
                    $("#form-" + $(this).attr("data-user")).slideDown();
                    $("#form-" + $(this).attr("data-user") + " .calendar .current-month").attr("data-id", $(this).attr("data-user"));
                    $(".current-month").click(function(){
                        var userId = $(this).attr("data-id");
                        var year = $(this).attr("year");
                        var month = $(this).attr("month");
                        var curDay = $(this).attr("day");
                        $("#date-"+userId).val(year + "-" + month + "-" + curDay);
                    });
                    return false;
                } else if(this.className == "btn slide-close"){
                    $("#form-" + $(this).attr("data-user")).slideUp();
                    return false;
                } else if(this.className == "btn slide-send") {
                    var userId = $(this).attr("data-user");
                    var email = $("#email-" + userId).val();
                    var date = $("#date-" + userId).val();
                    var timeHour = $("#time-hour-" + userId).val();
                    var timeMin = $("#time-min-" + userId).val();
                    var name = $("#name-" + userId).val();
                    var phone = $("#phone-" + userId).val();
                    var adress = $("#adress-" + userId).val();
                    var comName = $("#com-name-" + userId).val();

                    var send = true;
                    if(email == ""){
                        send = false;
                    }
                    if(date == ""){
                        send = false;
                    }
                    if(timeHour == ""){
                        send = false;
                    }
                    if(timeMin == ""){
                        send = false;
                    }
                    if(name == ""){
                        send = false;
                    }
                    if(phone == ""){
                        send = false;
                    }

                    if(send) {
                        var data = "userId=" + userId + "&email=" + email + "&date=" + date + "&timeHour=" + timeHour + "&timeMin=" + timeMin + "&name=" + name + "&phone=" + phone + "&adress=" + adress + "&comName=" + comName;
                        $.ajax({
                            url: "/ajax/calendar.php",
                            type: "POST",
                            data: data,
                            success: function (html) {
                                $("#form-"+ userId).html(html);
                                setTimeout(function(){
                                    $("#form-"+ userId).slideUp();
                                }, 200)
                            }
                        });
                    }
                    return false;
                }else {
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    showModal();
                    return false;
                }
            });
        });
    </script>
