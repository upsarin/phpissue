<?
session_start();
require_once ("/home3/autobrot/public_html/app/classes/User.php");
require_once ("/home3/autobrot/public_html/app/classes/Main_classes.php");
require_once ("/home3/autobrot/public_html/app/core/dbo.php");


if($_POST['action'] != "") { ?>
    <? if($_POST['action'] == "new"){ ?>
        <?
        $elements = Element::SelectAll('pages', array("tech" => "N"), null, null);
        ?>
		<div class="row">
			<div class=".col-md-4" style="padding: 30px;">
				<h2>Создание нового элемента</h2>
				<select id="model" class="form-control">
					<option value="0">Выберите инфоблок</option>
					<? foreach($elements as $element => $val){ ?>
                        <?if($val['tech'] != "Y"){?>
						    <option value="<?=$val['model']?>"><?=$val['title']?></option>
                        <? } ?>
					<? } ?>
				</select>
				<br />
				<br />
				<br />
				<input type="submit" id="submit_pre_form" class="btn btn-default" value="Выбрать"/>
			</div>
		</div>
    <? } else { ?>
        Такого действия нет.
    <? } ?>
<? } ?>