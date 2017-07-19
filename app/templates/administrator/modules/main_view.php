
<div class="sicky-wrapper-free-space"></div>

<?if($array["action"] == "create" || $array["action"] == "edit") { ?>
    <div class="container main-block" id="joinOurTeamFull" style="float: left;">
        <h2><?=$array["title"]?></h2>
        <div class="add_form">
            <?=minc::pos("admin-form", $array["name"])?>
        </div>
    </div>
<? } else if($array["action"] == "settings"){?>
    <div class="container main-block" id="joinOurTeamFull" style="float: left;">
        <div class="add_form">
            <?=minc::pos("settings", $array['name'])?>
        </div>
    </div>
<? } else { ?>
    <div class="container main-block" id="joinOurTeamFull" style="width: 100%;
    float: left;">
        <h2><?=$array["title"]?></h2>
        <? if(isset($_GET['phrase']) && !empty($_GET['phrase'])){ ?>
            <h4 class="phrase">Сообщение для HUSTON: Полет нормальный, <?=$_GET['phrase']?></h4>
        <? } ?>
        <a class="createA" href="/administrator/modules/">создать</a>
        <form action="/administrator/modules/" method="POST">
            <!--<input type="text" name="filter[name]" value="" /> -->


        </form>
        <form action="/administrator/modules/" method="POST">

            <table class="page-table">
                <tr class="titles">
                    <th></th>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Позиция</th>
                </tr>
                <?
                $filter = array("type" => "html");
                $array['content']['content'] = Element::SelectAll('modules', $filter, null, null);
                ?>
                <? foreach($array['content']['content'] as $key => $val){?>
                    <?if($val["model"] != 'administrator'){ ?>
                        <tr>
                            <td><input name="id[]" type="checkbox" value="<?=$val['id']?>" /></td>
                            <td><?=$val['id']?></td>
                            <td><a href="/administrator/modules/edit/<?=$val['id']?>/"><?=$val['name']?></a></td>
                            <td><?=$val['pos']?></td>
                        </tr>
                    <? } ?>
                <? } ?>

            </table>
            <? if(isset($array['pagination']['list_limit']) && isset($array['pagination']['page_num'])){ ?>
                <?=minc::pos("pagination", $array['name'], $array['pagination'])?>
            <? } ?>
            <select name="action">
                <option value=""></option>
                <option value="del">удалить</option>
                <option value="deactivate">не активные</option>
                <option value="activate">активные</option>
            </select>

            <input type="submit" name="do_action" value="выполнить"/>
        </form>


    </div>

<? } ?>
<script>

</script>