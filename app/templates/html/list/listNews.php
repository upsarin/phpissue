<div class="bg-experience">
    <div class="bg-news">
        <div class="container">
            <div class="section news-overview">
                <header class="row news-overview-header">
                    <h1 style="margin: 75px auto 9px;">
                        Новости
                    </h1>

                </header>

                <div class="row section news-overview-main-wrap">
                    <div class="col-sm-12 news-overview-main filter-me">
                        <div class="timeline">
                            <!--
                                <div class="timeline-era era-prev-wrap" style="display: none;">
                                    <a href="index-pag=0&amp;cat=U%7CS%7CP.html" class="ghostbtn ghostbtn-large ghostbtn-light">
                                        <span class="text">
                                            <i class="ico icon-arrow-b-u"></i>
                                            Back to the future
                                        </span>
                                    </a>
                                </div>
                             -->
                            <div class="timeline-wrap">
                                <div class="timeline-era timeline-result-item">
                                    <!--<h2 class="timeline-title">December</h2>-->
                                    <?if(count($array['content']['content']) > 0){?>
                                        <?foreach($array['content']['content'] as $element){?>

                                            <?
                                            $filter = array("content_id" => $element['id']);
                                            $images = Element::SelectAll('files', $filter, null, null);
                                            ?>
                                            <section class="news-item medium has-image" data-filter="showcase">
                                                <a class="box" href="/<?=$array['alias']?>/detail/<?=$element['alias']?>/">
                                            <span class="date">
                                                <?=($element['active_to'] != "0000-00-00 00:00:00") ? date("M d, Y", strtotime($element['active_to'])) : ""?>
                                            </span>
                                                    <? if(!count($images)) {
                                                        $images[0]['path'] = "/css/images/notfound.png";
                                                    } ?>
                                                        <picture class="image img-adapt">
                                                            <span data-mq="xs" data-srcset="/<?=$images[0]['path']?>?mh=218&amp;c=1&amp;cw=260&amp;hash=C99DC7B457DB23502592DEE78BD5F824AFE9A74D"></span>
                                                            <span data-mq="md" data-srcset="/<?=$images[0]['path']?>?mh=218&amp;c=1&amp;cw=260&amp;hash=C99DC7B457DB23502592DEE78BD5F824AFE9A74D"></span>
                                                            <div class="img-adapt">
                                                                <img src="/<?=$images[0]['path']?>?mh=218&amp;c=1&amp;cw=260&amp;hash=C99DC7B457DB23502592DEE78BD5F824AFE9A74D" alt="<?=$element['title']?>" />
                                                            </div>
                                                        </picture>



                                                    <span class="body">
                                                    <h2 class="title ellipsis">
                                                        <?=$element['title']?>
                                                    </h2>
                                                    <span class="desc ellipsis">
                                                        <?=strip_tags($element['preview_desc'])?>
                                                    </span>
                                                </span>

                                                    <span class="tilebtn">
                                                    <i class="ico"></i>
                                                </span>
                                                </a>
                                                <span class="tags">
                                                <!--cat name-->
                                            </span>

                                            </section>
                                        <? } ?>
                                    <? } ?>
                                </div>

                            </div>
                            <!--
                            <div class="timeline-era era-next-wrap">
                                <a href="index-pag=2&amp;cat=U%7CS%7CP.html" id="timeline-next" class="ghostbtn ghostbtn-large ghostbtn-light">
                                    <span class="text">
                                        <i class="ico icon-arrow-b-d"></i>
                                        Back in time
                                    </span>
                                </a>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

