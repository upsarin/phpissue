<style>
    h2 {
        color: orange;
    }

</style>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea.desc',
        file_browser_callback_types: 'file image media',
        images_upload_url: 'postAcceptor.php',
        automatic_uploads: false,
        fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
        height: 500,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true,
        templates: [
            { title: 'Test template 1', content: 'Test 1' },
            { title: 'Test template 2', content: 'Test 2' }
        ],
        content_css: [
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>
<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <h2><?=$array['title']?></h2>
        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>Нужна помощь?</h1>
                <p>Не смогли разобраться?</p>
                <p>Потерялись в полях и настройках?</p>
                <p>Пишите! <a class="btn btn-phone" href="#" style="margin: 5px auto;">Написать</a></p>
            </div>
            <div class="row personal-desktop">

                <h1>Редактирование Профиля</h1>

                <?=minc::pos("form-personal", "settings")?>
            </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="list-group">
                <a href="/personal/" class="list-group-item ">Личный кабинет</a>
                <a href="/personal/settings/" class="list-group-item active">Настройка</a>
                <a href="/personal/ownnews/" class="list-group-item ">Новости сервиса и обновления</a>
                <a href="/personal/portfolio/" class="list-group-item">Портфолио</a>
                <!--<a href="/personal/online/" class="list-group-item">Список броней</a>-->
                <a href="/personal/stats/" class="list-group-item">Рейтинг</a>
            </div>
        </div><!--/span-->
    </div>
</div>
<script>
    $(document).ready(function(){

    });
</script>