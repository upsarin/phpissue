                <h1>Авторизация</h1>
					<form action="/login/" method="POST" class="form" id="login" style="width: 500px; margin: 0px auto;">
						<input type="hidden" name="action" value="login_user" />
						<input type="hidden" name="module" value="login" />
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
						<br />
                        <input class="btn btn-phone register" type="submit" name="send" value="Вход" style="border: none;padding-left: 0px;"/>
                    </form>
