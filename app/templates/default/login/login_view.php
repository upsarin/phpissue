<div id="main-page">
	<div id="category-main">
		<div class="row">
			<div class="col-xs-8" style="text-align: left; margin: 50px auto; float: none;">
				<?if(isset($_REQUEST['error']) && ($_REQUEST['error'] == "Y")) { ?>
				<div class="errors">
					<p>Неправильный логин или пароль, или неправильное сочетание логина и пароля!</p>
				</div>
				<? } ?>
				<? if(!isset($_REQUEST['action'])) { ?>
					<?=minc::pos("login", $array['id'])?>
				<? } else { ?>
					<?=minc::pos("login", $array['id'])?>
				<? } ?>
			</div>
		</div>
	</div>
</div>


<script>
    $(document).ready(function() {
        $("a.btn-phone").click(function () {
            $("#form-wrapper").css({
                display: "block"
            });
            showModal();
            return false;
        });
    }
</script>