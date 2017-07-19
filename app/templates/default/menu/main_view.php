<div id="content">

    <div id="menu">
        <div id="menu-list">
            <a href="/menu/chinese-boxes/" class="menu-list-item  newtag <?=($_SESSION['user']['cat_alias'] == "chinese-boxes") ? "active" : ""?>"><div class="menu-uf_new"></div>Китайские коробочки<div style="clear: both;"></div></a>
            <a href="/menu/rolls/" class="menu-list-item <?=($_SESSION['user']['cat_alias'] == "rolls" || !$_SESSION['user']['cat_alias']) ? "active" : ""?>">Суши и Роллы</a>
            <a href="/menu/sets/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "sets") ? "active" : ""?>">Сеты</a>
            <a href="/menu/pie/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "pie") ? "active" : ""?>">Осетинские пироги</a>
            <a href="/menu/pizza/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "pizza") ? "active" : ""?>">Пицца</a>
            <a href="/menu/birthday/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "birthday") ? "active" : ""?>">Сеты Именинникам</a>
            <a href="/menu/sets-discont/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "sets-discont") ? "active" : ""?>">Сеты Акция*</a>
            <a href="/menu/deserts/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "deserts") ? "active" : ""?>">Десерты и напитки</a>
            <a href="/menu/salad/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "salad") ? "active" : ""?>">Салаты</a>
            <a href="/menu/hots/" class="menu-list-item  <?=($_SESSION['user']['cat_alias'] == "hots") ? "active" : ""?>">Супы и Горячее</a>
            <div style="clear: both;"></div>
        </div>
            <? if($array['filter']['cat'] == '11') {?>
                <div class="menu-birthday">
                    <img src="/images/imen.png" width="100%">
                    <input maxlength="2" type="text" id="oldareyou" value="45">
                    <div id="discontvalue">45%</div>
                </div>
                <script>
                    $("#oldareyou").change(function(){
                        if($("#oldareyou").val() > 45){
                            $("#oldareyou").val() = 45;
                        }

                        $("#discontvalue").html($("#oldareyou").val()+"%");
                        var countObjs = $(".menu-item-one .menu-item-price .menu-elem-price").length;
                        var obj = $(".menu-item-one .menu-item-old-price");
                        for(var i=0; i<countObjs; ++i){
                            var oldPrice = obj[i];
                            oldPrice = parseInt(oldPrice.innerHTML);
                            console.log(oldPrice);
                            var newPrice = oldPrice - Math.floor(oldPrice*($("#oldareyou").val()/100));
                            newPrice =
                            $(".menu-item-one .menu-item-price .menu-elem-price")[i].innerHTML = newPrice;

                        }

                    });
                </script>
            <?}?>
        <div id="menu-items">
            <?foreach($array['content']['content'] as $element){ ?>
                <?
                $filter = array("content_id" => $element["id"]);
                $images = Element::SelectAll('files', $filter, null, null);
                ?>
                <div class="menu-item" id="<?=$element["id"]?>">
                    <div class="menu-item-inside" >
                        <div class="menu-item-inside-url" id="<?=$element["id"]?>">
                            <div class="menu-item-img">
                                <img src="/<?=$images[0]['path']?>" width="220" height="147" alt="<?=$element['title']?>" title="<?=$element['title']?>">
                                <div class="menu-tags">
                                    <!--<div class="menu-hit">ХИТ</div>-->
                                    <div style="clear: both;"></div>
                                </div>
                            </div>

                            <div class="menu-item-one">
                                <div class="menu-item-name"><?=$element['title']?> <?=($element['cat'] == 16) ? $element['weight'] : ""?></div>
                                <div class="menu-item-text"><?=$element['desc']?></div>
                                <div class="menu-item-weight" style="display: none;"><?=$element['weight']?></div>
                                <?if($element['old_price'] != "" || ($element['cat'] == "11")){ ?>
                                    <?if($element['cat'] == "11"){?>
                                        <div class="menu-item-old-price"><?=str_replace(",","", $element['price'])?></div>
                                    <? } else { ?>
                                        <div class="menu-item-old-price"><?=$element['old_price']?> руб.</div>
                                    <? } ?>
                                <? } ?>
                                <?if($element['cat'] == "11"){?>
                                    <div data-price="<?=($element['price']*1000)*0.45?>" class="menu-item-price "><span class="menu-elem-price"><?=($element['price']*1000)*0.45?></span> руб.</div>
                                <? } else { ?>
                                    <div data-price="<?=$element['price']?>" class="menu-item-price "><span class="menu-elem-price"><?=$element['price']?></span> руб.</div>
                                <? } ?>
                            </div>
                            <?if($element['half'] == "y") { ?>
                                <div class="menu-item-one-half" style="display: none;">
                                    <div class="menu-item-name"><?=$element['title']?> <?=($element['cat'] == 16) ? $element['half-weight'] : "1/2"?></div>
                                    <div class="menu-item-text"><?=$element['desc']?></div>
                                    <div class="menu-item-weight" style="display: none;"><?=$element['half-weight']?></div>
                                    <div class="menu-item-price"><?=$element['half-price']?> руб.</div>
                                </div>
                            <? } ?>
                        </div>
                        <?if($element['half'] == "y") { ?>
                            <div class="menu-select">
                                <select name="select" class="menu-select-razmer razmer">
                                    <?if($element['cat'] == 16) { ?>
                                        <option value="1"><?=$element['weight']?></option>
                                        <option value="1/2"><?=$element['half-weight']?></option>
                                    <? } else { ?>
                                        <option value="1">порция</option>
                                        <option value="1/2">половина порции</option>
                                    <? } ?>
                                </select>
                                <a class="menu-select-razmer-bot"></a>
                            </div>
                        <? } ?>
                        <?if($element['wok'] == "y") { ?>
                            <div class="menu-select" style="bottom: 85px;">
                                <select class="menu-select-razmer wok-garnir" id="selectgarnir<?=$element['id'];?>">
                                    <option value="none">Выберете гарнир</option>
                                    <option value="Соба">Соба</option>
                                    <option value="Гохан">Гохан</option>
                                    <option value="Удон">Удон</option>
                                    <option value="Фунчоза">Фунчоза</option>
                                </select>
                                <a class="menu-select-razmer-bot"></a>
                            </div>
                        <? } ?>
                        <?if($element['wok'] == "y") { ?>
                            <div class="menu-select" style="bottom: 50px;">
                                <select class="menu-select-razmer wok-sous" id="selectsous8484">
                                    <option value="none">Выберете соус</option>
                                    <option value="BBQ">BBQ</option>
                                    <option value="Грибной">Грибной</option>
                                    <option value="Острый">Острый</option>
                                    <option value="Кисло-сладкий">Кисло-сладкий</option>
                                    <option value="Терияке">Терияке</option>
                                    <option value="Без соуса">Без соуса</option>
                                </select>
                                <a class="menu-select-razmer-bot"></a>
                            </div>
                        <? } ?>
                        <div class="pb-pop-controls-one">
                            <div class="pb-pop-controls">
                                <span class="pb-pop-c-dec pb-pop-c-inactive minus" id="<?=$element['id'];?>"></span>
                                <div class="plus-minus-count"><b id="count_<?=$element['id'];?>">
                                        <?if($_SESSION['user']['busket']["full"][$element['id']]){ ?>
                                            <?=$_SESSION['user']['busket']["full"][$element['id']]['count'];?>
                                        <? } else { ?>
                                            0
                                        <? } ?>
                                    </b></div>
                                <span class="pb-pop-c-inc pb-pop-c-inc-catalog plus" id="<?=$element['id'];?>"></span>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                        <div class="pb-pop-controls-one-half" style="display: none;">
                            <div class="pb-pop-controls">
                                <span class="pb-pop-c-dec pb-pop-c-inactive minus" id="<?=$element['id'];?>"></span>
                                <div class="plus-minus-count"><b id="count_<?=$element['id'];?>">
                                        <?if($_SESSION['user']['busket']["half"][$element['id']]){ ?>
                                            <?=$_SESSION['user']['busket']["half"][$element['id']]['count'];?>
                                        <? } else { ?>
                                            0
                                        <? } ?>
                                    </b></div>
                                <span class="pb-pop-c-inc pb-pop-c-inc-catalog plus" id="<?=$element['id'];?>"></span>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
            <div style="clear: both;width: 20px;"></div>
        </div>
        <div style="text-align: center; font-size: 13px;line-height: 150%;margin-bottom: 20px;">
            Кампай - доставка суши и ролов, обедов в Бердске. Вы можете заказать суши, сеты ролов, еду в офис, а также суши по акции. <br />
            Доставка по Бердску в умеренные сроки. Доставка осуществляется в офис или на дом, в Бердске, а так же пригороде.
        </div>
    </div>
</div>

<script>
    $("#menu-items .menu-item .menu-item-inside-url").click(function(){
        /*
        var productId = parseInt(this.id);

        $("#element-window .element-window-img img").attr("src", $(".menu-item#"+productId+" .menu-item-img img").attr("src"));
        $("#element-window .element-window-text-name").html($(".menu-item#"+productId+" .menu-item-one .menu-item-name").html());
        $("#element-window .element-window-text-text").html($(".menu-item#"+productId+" .menu-item-one .menu-item-text").html());
        $("#element-window .item-price").html($(".menu-item#"+productId+" .menu-item-one .menu-elem-price").html());
        $("#element-window .menu-mass-window-one").html($(".menu-item#"+productId+" .menu-item-one .menu-item-weight").html());
        $("#element-window").css({
            display: "block"
        });
        $("#overlay").css({
            display: "block"
        });
        */
    });
    function sendProductToBusket(elementId, sizeName, name, size, price, weight, sous, garnir){
        data = "elementId="+elementId+"&sizeName="+sizeName+"&name="+name+"&size="+size+"&price="+price+"&weight="+weight+"&sous="+sous+"&garnir="+garnir+"&action=add";
        $.ajax({
            url: "/ajax/busket.php",
            type: "POST",
            data: data,
            success: function(html){
                $("#basket_all").html(html);
            }
        });
    }
    function deleteProductFromBusket(elementId, sizeName, name, size, price){
        data = "elementId="+elementId+"&sizeName="+sizeName+"&name="+name+"&size="+size+"&price="+price+"&action=delete";
        $.ajax({
            url: "/ajax/busket.php",
            type: "POST",
            data: data,
            success: function(html){
                $("#basket_all").html(html);
            }
        });
    };
    $(".pb-pop-controls-one .plus").click(function(){
        var elementId = parseInt(this.id);
        var sizeName = "full";
        var size = "1";
        var name = $(".menu-item#"+elementId+" .menu-item-one .menu-item-name").html();
        var price = $(".menu-item#"+elementId+" .menu-item-one .menu-elem-price").html();
        var weight;
        var sous;
        var garnir;
        var curCount = parseInt($(".pb-pop-controls-one #count_"+elementId).html());
        $(".pb-pop-controls-one #count_"+elementId).html(curCount+1);

        if($(".menu-item#" + elementId + " .menu-item-one-half")) {
            size = $(".menu-item#" + elementId + " .razmer").val();
        }
        if($(".menu-item#" + elementId + " .sous")) {
            sous = $(".menu-item#" + elementId + " .sous").val();
        }
        if($(".menu-item#" + elementId + " .garnir")) {
            garnir = $(".menu-item#" + elementId + " .garnir").val();
        }
        weight = $(".menu-item#"+elementId+" .menu-item-one .menu-item-weight").html();;

        if($(".menu-item#"+elementId+" .razmer") && size == "1/2") {
            sizeName = "half";
            size = "1/2";
            weight = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-weight").html();
            name = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-name").html();
            price = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-price").html();
        }
        sendProductToBusket(elementId, sizeName, name, size, price, weight, sous, garnir);
    });
    $(".pb-pop-controls-one-half .plus").click(function(){
        var elementId = parseInt(this.id);
        var sizeName = "full";
        var size = "1";
        var name = $(".menu-item#"+elementId+" .menu-item-one .menu-item-name").html();
        var price = $(".menu-item#"+elementId+" .menu-item-one .menu-elem-price").html();
        var weight;
        var sous;
        var garnir;
        var curCount = parseInt($(".pb-pop-controls-one-half #count_"+elementId).html());
        $(".pb-pop-controls-one-half #count_"+elementId).html(curCount+1);

        if($(".menu-item#" + elementId + " .menu-item-one-half")) {
            size = $(".menu-item#" + elementId + " .razmer").val();
        }
        if($(".menu-item#" + elementId + " .sous")) {
            sous = $(".menu-item#" + elementId + " .sous").val();
        }
        if($(".menu-item#" + elementId + " .garnir")) {
            garnir = $(".menu-item#" + elementId + " .garnir").val();
        }
        weight = $(".menu-item#"+elementId+" .menu-item-one .menu-item-weight").html();;

        if($(".menu-item#"+elementId+" .razmer") && size == "1/2") {
            sizeName = "half";
            size = "1/2";
            weight = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-weight").html();
            name = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-name").html();
            price = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-price").html();
        }
        sendProductToBusket(elementId, sizeName, name, size, price, weight, sous, garnir);

    });
    $(".pb-pop-controls-one .minus").click(function(){
        var elementId = parseInt(this.id);
        var sizeName = "full";
        var size = "1";
        var name = $(".menu-item#"+elementId+" .menu-item-one .menu-item-name").html();
        var price = $(".menu-item#"+elementId+" .menu-item-one .menu-elem-price").html();
        var weight;
        var curCount = parseInt($(".pb-pop-controls-one #count_"+elementId).html());
        if(curCount != 0) {
            $(".pb-pop-controls-one #count_" + elementId).html(curCount - 1);
            deleteProductFromBusket(elementId, sizeName, name, size, price);
        }
    });
    $(".pb-pop-controls-one-half .minus").click(function(){
        var elementId = parseInt(this.id);
        var sizeName = "half";
        var size = "1/2";
        var name = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-name").html();
        var price = $(".menu-item#"+elementId+" .menu-item-one-half .menu-item-price").html();
        var weight;
        var curCount = parseInt($(".pb-pop-controls-one-half #count_"+elementId).html());
        if(curCount != 0) {
            $(".pb-pop-controls-one-half #count_" + elementId).html(curCount - 1);
            deleteProductFromBusket(elementId, sizeName, name, size, price);
        }
    });

</script>