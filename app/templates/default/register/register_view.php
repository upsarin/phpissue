<div id="main-page">
    <div id="category-main">
        <div class="row">
            <div class="col-xs-8" style="text-align: left; margin: 50px auto; float: none;">
                <?if(isset($_GET['error']) && ($_GET['error'] == "Y")) { ?>
                    <div class="errors">
                        <p>При регистрации произошла ошибка</p>
                    </div>
                <? } ?>

                <?if(isset($_GET['hesh'])){ ?>
                    <?=minc::pos("pos-register-activate", $array['id'])?>
                <? } else { ?>
                    <?=minc::pos("pos-register", $array['id'])?>
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