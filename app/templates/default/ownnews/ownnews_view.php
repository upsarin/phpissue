<style>
    h2 {
        color: orange;
    }

</style>


<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <h2><?=$array['title']?></h2>
        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>Новости и обновления</h1>
                <p>Тут собраны последние новости по порталу</p>
            </div>
            <div class="row personal-desktop">
                <?
                $filter = array("active" => "Y");
                $content = DBConnect::init()->selectAll("content", $filter);
                foreach($content as $element => $val){ ?>
                    <?if($val['page_id'] == "5" || $val['page_id'] == "10"){?>
                        <div class="col-6 col-sm-6 col-lg-6">
                            <h2><?=$val['name']?></h2>
                            <div class="desktop-text">
                                <p><?=$val['preview_desc']?></p>
                            </div>
                            <?if($val['page_id'] == "5"){?>
                                <p><a class="btn btn-default blogs" href="/blog/detail/<?=$val['alias']?>/" role="button">Узнать больше »</a></p>
                            <? } ?>
                        </div><!--/span-->
                    <? } ?>
                <? } ?>



            </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="list-group">
                <a href="/personal/" class="list-group-item ">Личный кабинет</a>
                <a href="/personal/settings/" class="list-group-item ">Настройка</a>
                <a href="/personal/ownnews/" class="list-group-item active">Новости сервиса и обновления</a>
                <a href="/personal/portfolio/" class="list-group-item">Портфолио</a>
                <!--<a href="/personal/online/" class="list-group-item">Список броней</a>-->
                <a href="/personal/stats/" class="list-group-item">Рейтинг</a>
            </div>
        </div><!--/span-->
    </div>
</div>