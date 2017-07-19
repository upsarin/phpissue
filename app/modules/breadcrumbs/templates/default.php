

    <?
    $routes = explode('/', $_SERVER['REQUEST_URI']);
    if($routes[1] == "administrator"){


    } else {
        if($routes[2] == "detail"){
            $bread[0]['page_alias'] = $routes[1];
            $bread[0]['page_type'] = "list";

            $bread[1]['page_alias'] = $routes[3];
            $bread[1]['page_type'] = "detail";
        } else if($routes[1] == "cat"){
            $bread[0]['page_alias'] = $routes[2];
            $bread[0]['page_type'] = "list";
        } else {
            $bread[0]['page_alias'] = $routes[1];
            $bread[0]['page_type'] = "list";
        }



        foreach($bread as $key => $val){
            if($val['page_type'] == "list"){
                if($routes[1] == "cat"){
                    $table = "cats";
                } else {
                    $table = "pages";
                }
                $page = Element::GetOne($alias = $val['page_alias'], $filter = NULL, $fields = NULL, $table);
                $really_bread[0]['alias'] = "/". $page[0]['alias'] ."/?filter=N";
                if($routes[1] == "cat"){
                    $really_bread[0]['title'] = $page[0]['name'];
                } else {
                    $really_bread[0]['title'] = $page[0]['title'];
                }

            } else {
                $content = Element::GetOne($alias = $val['page_alias'], $filter = NULL, $fields = NULL, $table = "content");
                $really_bread[2]['alias'] = "/". $content[0]['alias'] ."/";
                $really_bread[2]['title'] = $content[0]['title'];
            }
            if($content[0]['cat']){
                $cat = Element::GetByID($content[0]['cat'], $return=null, $table="cats");
                $really_bread[1]['alias'] = "/". $page[0]['alias'] ."/?c=". $cat['id'] ."&filter=N";
                $really_bread[1]['title'] = $cat['name'];
            }
        }

    }
    ?>
    <ul class="breadcrumbs">
        <li><a href="/">Главная</a></li>
        <?if($really_bread[0]){ ?>
            <li>
                <a href="<?=$really_bread[0]['alias']?>" itemprop="url">
                    <?=$really_bread[0]['title']?>
                </a>
            </li>
        <? } ?>
        <?if(false/*$really_bread[1]*/){ ?>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?=$really_bread[1]['alias']?>" itemprop="url">
                    <span itemprop="title"><?=$really_bread[1]['title']?></span>
                </a>
            </li>
        <? } ?>
        <?if($really_bread[2]){ ?>
            <li class="current" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="/" itemprop="url">
                    <span itemprop="title"><?=$really_bread[2]['title']?></span>
                </a>
            </li>
        <? } ?>
    </ul>



