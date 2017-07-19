<?
session_start();
require_once ("/home3/autobrot/public_html/app/classes/User.php");
require_once ("/home3/autobrot/public_html/app/classes/Main_classes.php");
require_once ("/home3/autobrot/public_html/app/core/dbo.php");


    if($_POST['id'] == ""){
        $_POST['id'] = "249";
    }
    $element = Element::SelectAll('content', array("id" => $_POST['id']), null, null);
    $element = $element[0];
    $params = array('element_id' => $element['id']);
    $table = 'field_value';
    $fields = DBConnect::init()->getFeildsValues($params, null, $table);

    $manager_email = DBConnect::init()->getFeildsValues(array('element_id' => $element['id'], "code" => "team_email"), null, $table);
    $manager_phone = DBConnect::init()->getFeildsValues(array('element_id' => $element['id'], "code" => "team_phone"), null, $table);
    foreach($fields as $field => $value){
        $element[$value['code']] = $value['value'];
    }

    $images = Element::SelectAll('files', array("content_id" => $element['id']), null, null);
    $image = $images[0];
    ?>

    <form action="/ajax/form-auto-send.php" method="post" class="form" id="auto-form">
        <div class="form-img-wrap">
            <img src="/<?=$image['path'];?>"></div>
        <div>
            <?=$element['cat_manager_desc']?>
            <input type="hidden" name="manager_id" value="<?=$element['id']?>"/>
            <input type="text" placeholder="Имя" name="name" required="">
            <input type="email" placeholder="Email" name="email" required="">
            <input type="tel" placeholder="Телефон" name="phone" required="">
            <button type="submit" class="button">Отправить</button>
        </div>
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </form>
