<form action="/personal/settings/" method="POST" class="form" style="width: 500px; margin: 0px auto;" role="form">
    <input type="hidden" name="action" value="update_user" />
    <input type="hidden" name="module" value="form" />
    <input type="hidden" name="iblock_name" value="users" />
    <input type="hidden" name="edit_user_id" value="<?=$_SESSION['user']['id']?>" />
    <?
    $params = array("type" => 'register', "active" => "Y");
    $sort = array("sort", "asc");
    $data['FIELDS'] = DBConnect::init()->getFeilds($params, $sort);


    $id = $_SESSION['user']['id'];

    $table = 'users';
    $params = array('id' => $id);
    $data['VALUES'] = DBConnect::init()->getFeildsValues($params, null, $table);
    if(isset($id) && is_numeric($id)){
        if(count($data) > 0){
            foreach($data['FIELDS'] as $key => $val){
                if($val['field_type'] == 'main'){
                    $data['FIELDS'][$key]['value'] = $data['VALUES'][0][$val['code']];
                } else {
                    $params = array('element_id' => $id, 'code' => $val['code']);
                    $field_value = Element::GetFeildsValues($params, null, 'field_value');
                    $data['FIELDS'][$key]['value'] = $field_value[0]['value'];
                }
            }
        }
    }
    ?>

    <? foreach($data['FIELDS'] as $key => $val){
        if($val['field_type'] == 'main'){
            if($val['input_type'] == 'password'){
                $val['input_type'] = 'text';
                $val['code'] = 'password_new';
            }
            if($val['input_type'] == 'check_password'){
                $val['input_type'] = 'text';
                $val['code'] = 'check_password_new';
            }
            $val['value'] = $data['VALUES'][0][$val['code']];
        } else {
            $params = array('element_id' => $id, 'code' => $val['code']);
            $field_value = Element::GetFeildsValues($params, null, 'field_value');
            $val['value'] = $field_value[0]['value'];
        }
        $val['edit_code'] = $val['code'];
        $val['code'] = $val['field_type'] . '[' . $val['code'] . ']';
        ?>
        <div class="form-group">
            <?  ?>
            <label for="<?= $val['code'] ?>"><?= $val['name'] ?></label>
            <?if($val['input_type'] == "file"){?>
                <?=Element::inputShow($val, $id)?>
            <? } else { ?>
                <?=Element::inputShow($val)?>
            <? } ?>

        </div>

    <? } ?>

    <br />
    <input class="btn btn-phone register" type="submit" name="send" value="Сохранить" style="border: none;padding-left: 0px;"/>
</form>