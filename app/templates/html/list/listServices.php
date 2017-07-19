<style>
    .page-home .header .navbar, .cookie-is-visible .page-home .header .navbar {
        background: #2a2937;
    }

    .product-grid .product .head .image img {
        top: 0;
        height: 100%;
        width: 100%;
    }

</style>


<div class="section">
    <div class="section category-toolbar">
        <div class="container">

            <p class="">
            </p><p>
            <h1 class="quote">Услуги и Акции</h1>


        </div>
    </div>

    <div class="section section-productcat-products">
        <div class="container">
            <div class="product-grid">
                <ul class="product-grid-list equalizer" data-equalizer-watch=".in">


                    <?
                    usort($array['content']['content'], 'sortById');
                    ?>

                    <? foreach($array['content']['content'] as $element){ ?>
                        <?if($_SESSION['user']['city']['path']){?>
                            <li class="product-grid-item">
                                <a class="product" href="/services/detail/<?=$element['alias']?>/">
                                    <div class="in" style="height: 419px;">
                                        <div class="head">
                                            <div class="image">
                                                <img src="/css/images/content/services/services/<?=$element['name']?>.jpg?h=240&amp;w=320&amp;hash=7EE269C66BB9D6C0D8EAADA73395CE0BB00DCEB0" alt="CDJ-TOUR1">
                                            </div>
                                            <div class="product-info">
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h2 class="name"><?=$element['title']?></h2>
                                            <p class="desc"></p>

                                            <p class="longdesc"><?=strip_tags($element['preview_desc'])?></p>
                                        </div>
                                    </div>
                                    <div class="foot">



                                                <span class="tilebtn">
                                                    <span class="ico icon-tilebtn-more">
                                                        <span class="sr-only">
                                                            More
                                                        </span>
                                                    </span>
                                                </span>
                                    </div>
                                </a>
                            </li>
                        <? } ?>
                    <? } ?>
                </ul>
            </div>
        </div>
    </div>

</div>