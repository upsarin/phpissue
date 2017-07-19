
<h1>Регистрация Автосервисов</h1>
<form action="" method="POST" class="form" style="width: 500px; margin: 0px auto;" role="form">
    <input type="hidden" name="action" value="save_register" />
    <input type="hidden" name="module" value="register" />
    <? foreach($data as $key => $val){ ?>
        <?if($val['siteview'] == "Y"){?>
            <div class="form-group">
                <? $val['code'] = $val['field_type'] . '[' . $val['code'] . ']'; ?>
                <label for="<?= $val['code'] ?>"><?= $val['name'] ?></label>

                <? if($val['input_type'] == "text") { ?>
                    <input class="form-control" type="<?=$val['input_type']?>" name="<?=$val['code']?>" value="<?=$val['default_value']?>" <?=($val['required'] == "Y") ? "required" : ""?> placeholder = "<?=$val['name']?>"/>
                <? } else if ($val['input_type'] == "password" || $val['input_type'] == "check_password"){ ?>
                    <input class="form-control" type="<?=$val['input_type']?>" name="<?=$val['code']?>" value="" <?=($val['required'] == "Y") ? "required" : ""?> placeholder = "<?=$val['name']?>"/>
                <? } else if($val['input_type'] == "textarea"){ ?>
                    <textarea class="form-control" name="<?=$val['code']?>" value="<?=$val['default_value']?>"><?=$val['default_value']?></textarea>
                <? } else if($val['input_type'] == "select"){ ?>
                    <?=Element::inputShow($val)?>
                <? } ?>
            </div>
        <? } ?>
    <? } ?>
    <input class="form-control" id="alter[work_time]" type="hidden" name="alter[work_time]" value="с __:__ до __:__ ежедневно">
    <input class="form-control" id="alter[out]" type="hidden" name="alter[out]" value="no">
    <input class="form-control" id="alter[internet_com]" type="hidden" name="alter[internet_com]" value="no">
    <input class="form-control" id="alter[rassrochka]" type="hidden" name="alter[rassrochka]" value="no">
    <input class="form-control" id="alter[express]" type="hidden" name="alter[express]" value="no">
    <input class="form-control" id="main[city]" type="hidden" name="main[city]" value="<?=$_SESSION['user']['city']?>">
    <input class="form-control" id="main[group]" type="hidden" name="main[group]" value="10">
    <input class="form-control" id="main[permissions]" type="hidden" name="main[permissions]" value="5">
    <br />
    <input class="btn btn-phone register" type="submit" name="send" value="Регистрация" style="border: none;padding-left: 0px;"/>
</form>
