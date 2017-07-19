
<style>
    .hero .head {
        top: 180px;
    }
    @media (max-width: 481px) {
        .hero .head {
            top: 80px !important;
        }
        .section.section-product-info {
            margin-top: -190px !important;
            margin-bottom: -50px !important;
        }
        .hero.hero-compact .head .name {
            margin-top: -73px;
        }

    }

    @media (max-width: 1001px){
        .bg .section {
            margin-top: 0px;
        }
        .section.section-product-info {
            margin-bottom: -50px;
        }
    }
    @media (max-width: 767px) and (min-width: 482px) {

    }
    @media (max-width: 767px) {
        .section {
            margin-top: -250px;
        }
        .section.section-product-info {
            margin-top: -150px;
            margin-bottom: -50px;
        }
        .hero .head .desc {
            width: 70%;
        }
    }
    .section-product-info {
        background: url(/css/images/bg.png);
        background-size: cover;
        padding-bottom: 50px;
    }
    .product-combine .product .content-wrap {
        min-height: 90px;
    }
    @media (max-width: 767px) {
        .section {
            margin-top: -250px;
        }
        .course-cons .bg:after {
            background: none !important;
        }
        .hero .btn-holder .btn:first-child {
            margin-top: -40px;
        }
    }
    .section-product-combine {
        margin-top: -50px;
    }

    .hero.hero-compact .btn-holder {
        bottom: 90px;
    }
</style>

<?
    $element = $array['content'][0];
    if($element['alias'] == "traning"){
        $element['title'] = "Свободная тренировка";
    }
    $filter = array("content_id" => $element['id']);
    $images = Element::SelectAll('files', $filter, null, null);
?>

<div class="js-sticky__wrap" style="height: 480px; margin-bottom: 0px;">
    <header class="hero sticky_hero">
        <div class="image bg-adapt" style="background-image: url('/css/images/content/services/services/<?=$element['name']?>_detail.jpg?mh=600&amp;c=1&amp;cw=2000&amp;hash=0D2DFF733EF51C66941EB5413B4D7F2A7723A5C9');">
        </div>
        <div class="content">
            <div class="container">
                <div class="head">
                    <div class="name">
                        <?=$element['title']?>
                    </div>
                    <div id="fb-root"></div>
                    <h1 class="desc"><?=strip_tags($element['preview_desc'])?></h1>
                </div>
                <div class="btn-holder">
                    <a href="/apply/" class="btn btn-dark btn-border">
                    <span class="text">
                        Подать заявку
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="section section-product-info">
    <div class="container">

        <!--
            Add class has-serie if this highlight block exists
            Add class has-latest-update if this highlight block exists
        -->

        <div class="info has-serie has-latest-update row">

            <div class="col usp">
                <p><?=$element[$_SESSION['user']['city'] .'_desc']?></p>
            </div>
        </div>

    </div>
</div>
<div class="section section-product-combine">
    <header class="hero">
        <div class="image bg-adapt" style="background-image: url('/css/images/content/services/services/<?=$element['name']?>_detail.jpg?mh=600&amp;c=1&amp;cw=2000&amp;hash=0D2DFF733EF51C66941EB5413B4D7F2A7723A5C9&quot;);background-size: cover;">
        </div>
        <div class="content">
            <div class="container">
                <div class="head">
                    <div class="name">
                        <?=$element['title']?>
                    </div>
                    <div id="fb-root"></div>
                    <h1 class="desc"><?=strip_tags($element['preview_desc'])?></h1>
                </div>
                <div class="btn-holder">
                    <a href="/apply/" class="btn btn-dark btn-border">
                    <span class="text">
                        Подать заявку
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="section section-product-combine bg-dark-1 color-light" style="margin-top: -80px;">
    <div class="container product-combine">
        <h2 class="h2 no-line color-light">РЕКОМЕНДУЕМЫЕ КУРСЫ</h2>

        <div class="row equalizer" data-equalizer-watch=".equalizer-item">
            <div class="col-md-9">

                <div class="row">
                    <?
                    $array['id'] = "102";
                    $array['filter']['!id'] = $element['id'];
                    $array['filter']['alter']['city_array'] = $_SESSION['user']['city'];
                    $array['content']['related'] = Element::GetList($array, $array['filter'], $limit="3");
                    ?>
                    <?if(count($array['content']['related']) > 0){?>
                        <?foreach($array['content']['related'] as $element_related){?>

                            <?
                            $filter_related = array("content_id" => $element_related['id']);
                            $images_related = Element::SelectAll('files', $filter_related, null, null);
                            ?>
                            <div class="col-md-4 equalizer-item" style="height: 239px;">

                                <a href="/courses/detail/<?=$element_related['alias']?>/" class="product clearfix">
                                <span class="visual-wrap" style="padding: 0px;">
                                    <img src="/css/images/content/services/services/<?=$element_related['name']?>.jpg?h=250&amp;w=400&amp;hash=D222B2974AEEBAAACDA6B5913693BDD85BF118C0" alt="<?=$element_related['title']?>">
                                </span>
                                    <span class="content-wrap" style="min-height: 140px;">
                                        <h6 class="no-line"><?=$element_related['title']?></h6>

                                </span>
                                </a>
                            </div>
                        <? } ?>
                    <? } ?>
                </div>

            </div>
        </div>

        <a href="/services/" class="ghostbtn ghostbtn-forw ghostbtn-light"><span class="text">Посмотреть все</span></a>

    </div>
</div>


