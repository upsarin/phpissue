


<h5><?=$data['mess']?></h5>
<? if(isset($data['error'])) { ?>
	<? if($_REQUEST['ajax'] != "Y") { ?>
		<div class="errors">
	<? } else { ?>
		<div id="errors">
	<? } ?>
		<p>
		<?=$data['error']?>
		</p>
	</div>  
		<? if($_REQUEST['ajax'] != "Y") { ?>
                    <h1>Авторизация</h1>
					<form action="/login/" method="POST" class="form" id="login" style="width: 500px; margin: 0px auto;">
						<input type="hidden" name="action" value="login_user">
						<input type="hidden" name="module" value="login">
                            <div class="form-group">
                                <label for="main[login]">Логин</label>
                                <input class="form-control" type="text" name="main[login]" value="" placeholder="Логин">
                            </div>
                            <div class="form-group">
                                <label for="main[password]">Пароль</label>
                                <input class="form-control" type="password" name="main[password]" value="" placeholder="Пароль">
                            </div>
                                                    						<br>
                        <input class="btn btn-phone register" type="submit" name="send" value="Вход" style="border: none;padding-left: 0px;">
                    </form>

		<? } ?>
<? } else { ?>
	<script>
		window.location = "/personal/";
	</script>
<? } ?>