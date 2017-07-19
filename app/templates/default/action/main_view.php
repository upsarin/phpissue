<div id="content">
    <?if(isset($array["content"]) && !empty($array["content"])) {
        include $html_temp;
    } else if($array["action"] == "create") { ?>
        <div class="add_form">
            <?=minc::pos("form", $array["name"])?>
        </div>
    <? } ?>
</div>