<?
$routes = explode('/', $_SERVER['REQUEST_URI']);
if($routes[3]){
    $filter = array("parent" => "3", "alias" => $routes[3]);
    $cur_cat = Element::SelectAll('cats', $filter, null, null);
}
$filter = array("parent" => "3");
$cats = Element::SelectAll('cats', $filter, null, null);



if($_SESSION['user']['filter']['cat']){
    $cat_id = $_SESSION['user']['filter']['cat'];
} else {
    $cat_id = "33";
}
$filter = array("id" => $cat_id);
$elements = Element::SelectAll('cats', $filter, null, null);
$element = $elements[0];

$params = array('element_id' => $cat_id);
$table = 'field_value';
$fields = DBConnect::init()->getFeildsValues($params, null, $table);
foreach($fields as $field => $value){
    $element[$value['code']] = $value['value'];
}
$filter_images = array("content_id" => $cat_id, "content_type" => "cats");
$images_array = Element::SelectAll('files', $filter_images, null, null);
foreach($images_array as $image => $val){
    $element['images'][$val['type']] = $val['path'];
}
?>

<style>
    @media (max-width: 900px){
        .about-btn {
            right: 0px !important;
        }
    }
    .select {
        cursor: pointer;
        display: inline-block;
        position: relative;
        font-size: 16px;
        color: #fff;
        width: 280px;
        height: 40px;
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
<div id="catalog">
    <div id="header-sales" class="header-sales">
        <?=$element['preview_desc'];?>
    </div>
    <pre>

    </pre>
    <div class="contain">
        <?foreach($_SESSION['user']['filter'] as $filter => $val){?>
            <input type="hidden" value="<?=$val?>" id="<?=str_replace("'", "", $filter)?>-value"/>
        <? }?>
        <form id="catalog-form" action="/blog/" method="get" accept-charset="UTF-8">
            <div>
                <p for="edit-category">Категории</p>
                <?
                $filter = array("parent" => "2");
                $cats = Element::SelectAll('cats', $filter, null, null);
                ?>

                <div class="select">

                    <select class="select1" id="edit-category" name="filter['cat']">
                        <option value="" <?=(!$_SESSION['user']['filter']['cat']) ? "selected='selected'" : ""?>>- Все -</option>
                        <?foreach($cats as $cat => $val){?>
                            <option value="<?=$val['id']?>" <?=($_SESSION['user']['filter']['cat'] == $val['id']) ? "selected='selected'" : ""?>><?=$val['name']?></option>
                        <? } ?>
                    </select>

                </div>
            </div>
            <input type="submit" name="filter[submit]" value="поиск" style="width: 173px; visibility: hidden">
        </form>
    </div>
    <!-- container -->


    <div class="contain-catalog">
        <?if(count($array['content']['content']) > 0){?>
            <?foreach($array['content']['content'] as $element => $val){ ?>
                <?
                $filter = array("id" => $val['cat']);
                $cats = Element::SelectAll('cats', $filter, null, null);
                if($cats[0]['parent'] != "1"){
                    $filter = array("id" => $cats[0]['parent']);
                    $cats_parent = Element::SelectAll('cats', $filter, null, null);
                }
                $filter = array("content_id" => $val['id'], "content_type" => "content", "type" => "news_image");
                $image_preview = Element::SelectAll('files', $filter, null, null);
                ?>
                <div class="expertiza-item clearfix">
                    <div class="jurist-about">
                        <a href="/blog/detail/<?=$val['alias']?>">
                            <?if($image_preview){ ?>
                                <img src="/<?=$image_preview[0]['path']?>" style="width: 290px; height: 250px" />
                            <? } else { ?>
                                <img src="/images/Notebook.png" style="width: 227px; height: 210px;" />
                            <? } ?>
                        </a>
                    </div>

                    <div class="jurist-info" style="width: 70%;">
                        <a class="jurist-title" href="/blog/detail/<?=$val['alias']?>"><?=$val['title']?></a>
                        <div style="margin-top: 10px; color: #B30D25;">
                            <?if($cats_parent > 0){ ?>
                                <?=$cats_parent[0]['name']?> /
                            <? } ?>
                            <?=$cats[0]['name']?>
                        </div>
                        <div style="max-height: 95px; overflow: hidden;">
                            <?=$val['preview_desc']?>
                        </div>
                        <div style="position: relative; bottom: 0px; right: -70%;" class="about-btn">
                            <a class="btn" href="/blog/detail/<?=$val['alias']?>">Подробнее</a>
                        </div>
                    </div>

                </div>
            <? } ?>
        <? } else { ?>
            <p>Извините, по вашему запросу ничего не найдено.</p>
        <? } ?>
    </div>

    <div class="contain">


        <center>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-lg ">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </center>
        
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


    </div>
    <!-- container -->
</div>

<script>
    $(document).ready(function ($) {



        if (document.documentElement.clientWidth >= 992) {
            $('.select1').each(function () {
                var $this = $(this),
                    numberOfOptions = $(this).children('option').length;

                $this.addClass('select-hidden');
                $this.wrap('<div class="select"></div>');
                $this.after('<div class="select-styled"></div>');

                var $styledSelect = $this.next('div.select-styled');
                $styledSelect.text($this.children('option').eq(0).text());

                var $list = $('<ul />', {
                    'class': 'select-options'
                }).insertAfter($styledSelect);

                for (var i = 0; i < numberOfOptions; i++) {
                    $('<li />', {
                        text: $this.children('option').eq(i).text(),
                        rel: $this.children('option').eq(i).val()
                    }).appendTo($list);
                }

                var $listItems = $list.children('li');

                $styledSelect.click(function (e) {
                    e.stopPropagation();
                    $('div.select-styled.active').not(this).each(function () {
                        $(this).removeClass('active').next('ul.select-options').hide();
                    });
                    $(this).toggleClass('active').next('ul.select-options').toggle();
                });

                $listItems.click(function (e) {
                    e.stopPropagation();
                    $styledSelect.text($(this).text()).removeClass('active');
                    $this.val($(this).attr('rel'));
                    $list.hide();
                    //console.log($this.val());
                });

                $(document).click(function () {
                    $styledSelect.removeClass('active');
                    $list.hide();
                });

            });
        };

        $(".select-styled").html($("#edit-category option[value='"+ $("#cat-value").val() +"']").html());
        $(".select-options li").click(function(){
            $("#catalog-form input[type='submit']").click();
        });
    });

</script>
