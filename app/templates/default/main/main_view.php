        <?
        $elements = $array['content']['content'];
        $filter_images = array("content_id" => $elements[0]['id'], "content_type" => "content");
        $images_array = Element::SelectAll('files', $filter_images, null, null);
        foreach($images_array as $image => $val){
            $element['images'][$val['type']] = $val['path'];
        }
        ?>
        <style>
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
            <? if($elements[0]["id"] == "240"){?>
                <?=$elements[0]["desc"];?>
            <? } ?>
            <div class="contain-blocks">
                <div id="main-page" class="clearfix" style="margin-bottom: 30px; height: 650px;">
                    <div class="category-list col-xs-12 col-sm-6 col-md-6 col-lg-4" style="height: auto;">
                        <ul>
                            <?
                            $filter = array("parent" => "2");
                            $cats = Element::SelectAll('cats', $filter, null, null);
                            ?>
                            <?foreach($cats as $c_key => $c_val){ ?>
                                <a href="/cat/<?=$c_val['alias']?>">
                                    <li class="cat-element" id="<?=$c_val['id'];?>"><?=$c_val['name'];?></li>
                                    <div class="cat-element-block" id="<?=$c_val['id'];?>"><?=$array['preview_desc'];?></div>
                                </a>
                            <? } ?>
                        </ul>
                    </div>
                    <?
                    $filter = array("active" => "Y", "page_id" => "5");
                    $last_news = Element::SelectAll('content', $filter, "6", null);
                    ?>
                    <div class="cat-block">

                    </div>
                    <?foreach($last_news as $element => $val){?>

                        <a href="/blog/detail/<?=$val['alias']?>" class="col-xs-12 col-sm-6 col-md-6 col-lg-<?=($element%2 == 0) ? "5" : "3"?>">
                            <div class="b2 corner-red">
                                <span class="text-bottom"><?=$val['title']?></span>
                            </div>
                        </a>
                    <? } ?>
                </div>

                <div id="category-main">
                    <div id="cat1" class="cat-item-main clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                            <div class="subcategory-main">
                                <h3><a href="#auto-form" class="auto-form">Тойота <br>все модели</a></h3>
                                <ul>
                                    <a href="#auto-form" class="auto-form">
                                        <li><?=$elements[0]['alter_mark_name-1'];?></li>
                                    </a>
                                    <a href="auto-form">
                                        <li><?=$elements[0]['alter_mark_name-2'];?></li>
                                    </a>
                                    <a href="#auto-form" class="auto-form">
                                        <li><?=$elements[0]['alter_mark_name-3'];?></li>
                                    </a>
                                    <a href="#auto-form" class="auto-form">
                                        <li><?=$elements[0]['alter_mark_name-4'];?></li>
                                    </a>
                                    <a href="#auto-form" class="form-details">
                                        <li><?=$elements[0]['alter_mark_name-5'];?></li>
                                    </a>
                                    <a href="#auto-form" class="form-details">
                                        <li><?=$elements[0]['alter_mark_name-6'];?></li>
                                    </a>
                                    <a href="#auto-form" class="form-details">
                                        <li><?=$elements[0]['alter_mark_name-7'];?></li>
                                    </a>
                                    <a href="#auto-form" class="auto-form">
                                        <li><?=$elements[0]['alter_mark_name-8'];?></li>
                                    </a>
                                    <a href="#auto-form" class="auto-form">
                                        <li><?=$elements[0]['alter_mark_name-9'];?></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                        <a class="col-xs-12 col-sm-6 col-md-8 col-lg-8 auto-form" href="#auto-form">
                            <div class="b13 corner-red"><?=$elements[0]['alter_name_mark_news-1'];?></div>
                        </a>
                        <a href="#auto-form" class="auto-form col-lg-4">
                            <div class="b14">
                                <span class="text-bottom"><?=$elements[0]['alter_name_mark_news-2'];?></span>
                            </div>
                        </a>
                        <a href="#auto-form" class="cauto-form col-lg-4">
                            <div class="b15"><?=$elements[0]['alter_name_mark_news-3'];?></div>
                        </a>
                        <a href="#auto-form" class="auto-form col-lg-4">
                            <div class="b16"><?=$elements[0]['alter_name_mark_news-4'];?></div>
                        </a>

                    </div>
                    <?=$elements[0]['alter_desc']?>
                </div>
            </div>
        </div>


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

                $("a.btn").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    showModal();
                    return false;
                });
                $("a[href='#auto-form']").click(function(){
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    showModal();
                    return false;
                });
            });
        </script>