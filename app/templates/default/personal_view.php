<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$array['seotitle']?></title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/calendar.js"></script>
    <![endif]-->
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="icon" href="/favicon.ico" />

    <link rel="stylesheet" href="/car_css/app.css">
    <link rel="stylesheet" href="/car_css/main.css">
    <link rel="stylesheet" href="/car_css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/car_css/nouislider.css">

    <link rel="stylesheet" href="/car_css/media.css">
    <link rel="stylesheet" href="/css/personal.css">


    <script src="/car_js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="/car_js/bootstrap.js"></script>
    <script src="/car_js/jquery.maskedinput-1.2.2.js"></script>
    <script src="/car_js/footer.js"></script>
    <script>
        $(document).ready(function(){

            $('#edit-list li a').click(function(){
                var question = "Вы уверены в том, что хотите удалить эту фотографию?";
                confirmQ = confirm(question);

                var id = this.id;
                if(confirmQ == true){
                    var data = "id=" + this.id + "&action=delete";
                    $.ajax({
                        url: "/ajax/editphoto.php",
                        type: "POST",
                        data: data,
                        success: function(html){

                            if(html == "deleted"){
                                $('a#' + id).css('display', 'none');
                            }

                        }
                    });
                }
                return false;
            });
        });

    </script>
    <style>


        .morebtn {
            top: 0px;
        }
        @media (max-width: 320px){
            .view a#popup-window {
                right: 0% !important;
                top: -780px;
                left: 160px;
            }
            .preblock {
                margin-top: 100px;
            }
        }
        @media (max-width: 480px) and (min-width: 321px){
            .view a#popup-window {
                right: 0% !important;
                top: -700px;
                left: 160px;
            }
            .preblock {
                margin-top: 100px;
            }
        }
        @media (max-width: 539px) and (min-width: 481px){
            .view a#popup-window {
                right: 0% !important;
                top: -730px;
                left: 160px;
            }
            .preblock {
                margin-top: 100px;
            }
        }
        @media (max-width: 768px) and (min-width: 540px){
            .view a#popup-window {
                right: 0% !important;
                top: -600px;
                left: 160px;
            }
            .preblock {
                margin-top: 100px;
            }
        }
        @media (max-width: 900px) and (min-width: 769px){
            .view a#popup-window {
                right: 0% !important;
                top: -550px;
                left: 160px;
            }
            .preblock {
                margin-top: 100px;
            }
        }
        .hide{
            display: none;
        }
        #auto-form .form-img-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 4px;
        }

        #auto-form p {
            font: 400 16px PFDinTextPro;
            max-width: 360px;
            display: block;
            margin: 0 auto;
        }
        #auto-form input, .form .button {
            width: 300px;
            height: 50px;
            display: block;
            margin: 0 auto;
            margin-top: 15px;
            padding: 0;
            color: #000;
        }
        #auto-form input, .form .button {
            width: 300px;
            height: 50px;
            display: block;
            margin: 0 auto;
            margin-top: 15px;
            padding: 0;
            color: #000;
        }
        #auto-form .button {
            background: none;
            border: none;
            background: #BD3C29;
            color: #fff!important;
            font-size: 16px;
        }
        #auto-form .form-img-wrap img {
            width: 100%;
            height: auto;
            margin-right: 40px;
        }
        #auto-form .mfp-close {
            position: relative;
            width: 55px;
            height: 20px;
            top: -40px;
            right: -20px;
        }
        #auto-form {
            position: fixed;
            width: 620px;
            height: 470px;
            background: #d6cece;
            border-radius: 10px;
            display: block;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            padding: 40px;
            padding-top: 60px;
            z-index: 10000;
            display: flex;
        }
    </style>

</head>
<body class="no-m-p wide new_page  bg-gray headroom-disabled desktop_layout">
<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready" id="form-wrapper" tabindex="-1" style="overflow-x: hidden; overflow-y: auto; display: none">
    <div class="mfp-container mfp-s-ready mfp-inline-holder">
        <div class="mfp-content">
            <form action="form-auto-send.php" method="post" class="form" id="auto-form">
                <div class="form-img-wrap">
                    <img src="http://www.sobaka.ru/uploads/mag/lapin1.jpg"></div>
                <div>
                    <p>Здравствуйте, меня зовут Алексей. В нашей компании я отвечаю за продажи новых автомобилей и обменные сделки. Оставьте заявку и я Вам позвоню в рабочее время и вышлю коммерческое предложение на емейл.</p>
                    <input type="hidden" name="manager_id" value="249"/>
                    <input type="text" placeholder="Имя" name="name" required="">
                    <input type="email" placeholder="Email" name="email" required="">
                    <input type="tel" placeholder="Телефон" name="phone" required="">
                    <button type="submit" class="button">Отправить</button>
                </div>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </form>
        </div>
    </div>
</div>
<div id="wrapper">
    <nav class="navbar main-nav ">
        <div class="contain">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.jpg" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>

                <ul class="nav navbar-nav navbar-right" id="menu-full">
                    <li><a href="/cat/avtozchsti" style="color: black">Автозапчасти</a></li>
                    <li><a href="/cat/tiuning" style="color: black">Тюнинг</a></li>
                    <li><a href="/cat/prodzh-vto" style="color: black">Продажа авто</a></li>
                    <li><a href="/cat/obmeny-ts" style="color: black">Обмены ТС</a></li>
                    <li><a href="/blog/" style="color: black">Блог</a></li>
                    <li><a href="/about/" style="color: black">О компании</a></li>
                    <?if($_SESSION['user']['id'] != "guest"){ ?>
                        <li><a id="link-logout" class="" href="/logout/" style="background-color: #B30D25 !important;box-shadow: 0px 3px 0px 0px #7b0012;width: 157px;height: 30px;color: #ffffff !important;font: 700 16px/30px PFDinTextPro;display: block;text-decoration: none;margin-top: 10px;text-align: center;padding: 6px;">Выход</a></li>
                        <li><a class="" href="/personal/" style="background-color: #B30D25 !important;box-shadow: 0px 3px 0px 0px #7b0012;width: 157px;height: 30px;color: #ffffff !important;font: 700 16px/30px PFDinTextPro;display: block;text-decoration: none;margin-top: 10px;text-align: center;padding: 6px;">Аккаунт</a></li>
                    <? } else { ?>
                        <li><a class="" href="/register/" style="background-color: #B30D25 !important;box-shadow: 0px 3px 0px 0px #7b0012;width: 157px;height: 30px;color: #ffffff !important;font: 700 16px/30px PFDinTextPro;display: block;text-decoration: none;margin-top: 10px;text-align: center;padding: 6px;">Регистрация</a></li>
                        <li><a class="" href="/login/" style="background-color: #B30D25 !important;box-shadow: 0px 3px 0px 0px #7b0012;width: 157px;height: 30px;color: #ffffff !important;font: 700 16px/30px PFDinTextPro;display: block;text-decoration: none;margin-top: 10px;text-align: center;padding: 6px;">Вход</a></li>
                    <? } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="sub-nav">
        <div class="contain">
            <span style="float: left" class="span-select">Выберите регион:</span>
            <div class="select-outer">
                <select id="select" name="select" size="1">
                    <option>
                        Москва
                    </option>
                    <option>
                        Новосибирск
                    </option>
                </select>
                <a class="select-button"></a>
            </div>
            <span class="phone">8 800 550 26 05</span>
            <a class="btn btn-phone" href="#">Обратный звонок</a>
        </div>
    </div>


    <nav class="navbar post-nav ">
        <div class="contain">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.jpg" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="position: relative;top: 24px;left: 190px;">
                <?=minc::pos("breadcrumbs")?>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="content">
        <? include $content; ?>
        <div class="border"></div>
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter42894669 = new Ya.Metrika({
                            id:42894669,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/42894669" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!— /Yandex.Metrika counter —>
        <div id="our-contacts">
            <div class="contain">

                <div class="col-xs-12 col-sm-6 contact-links col-md-3">
                    <?=minc::pos("footer-menu")?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 address cur_address">
                    <span class="our-office">Выбирайте город</span>
                    <div class="select-outer">
                        <select id="select" name="select" size="1" class="city_change">
                            <option value="msk">
                                Москва
                            </option>
                            <option value="nsk">
                                Новосибирск
                            </option>
                        </select>
                        <a class="select-button"></a>
                    </div>
                    <div class="contact" id="contact_html">
                        <a href="" class="adress_link" id="japan">Автобрат Европа Дизель</a>
                        <br/><a href="" class="adress_link" id="europe">Автобрат Азия</a>
                        <br><a href="" class="adress_link" id="front_fix">Автобрат Трансмиссия</a>
                        <br> <span class="main-office">(Выберете нужный сервис в Вашем городе)</span>
                        <br> <span id="cur_adress">Новосибирск ул. Петухова 150</span>
                        <br> Запись по телефону <span id="cur_phone">8 800 550 26 05</span>
                        <br> avtobrat.finance@yandex.ru
                        <!— Yandex.Metrika counter —>

                    </div>

                </div>


                <div class="col-md-5 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.6739359331746!2d82.9310319485227!3d54.93785258629068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe7820192976f%3A0x637db9dbeb95b978!2z0YPQuy4g0J_QtdGC0YPRhdC-0LLQsCwgMTUwLCDQndC-0LLQvtGB0LjQsdC40YDRgdC6LCDQndC-0LLQvtGB0LjQsdC40YDRgdC60LDRjyDQvtCx0LsuLCA2MzAxMTk!5e0!3m2!1sru!2sru!4v1491457663370" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>


                </div>



            </div>

            <p style="    width: 80%;
    margin: 0 auto;
    text-align: center;
    margin-top: 40px;">Обращаем ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ.</p>

        </div>
    </div>
    <script>

        $(document).ready(function($){
            $('.form-auto').magnificPopup({});
            $('.form-details').magnificPopup({});
            $(".view #popup-window").click(function(){
                $(".view .hide").slideDown();




                $(".view #popup-window").css({
                    top: "0px",
                });
                return false;
            });

        });
        $("a[href='/register/']").click(function(){
            window.location = "/register/";
            return false;
        });

        $("#form").submit(function () {

            $.ajax({
                type: "POST",
                url: "/main-form-send.php",
                data: $('#form').serialize(),




            }).done(function () {
                $('input').val(null);

                alert("Спасибо за заявку! Скоро мы с вами свяжемся.");

                $("#form").trigger("reset");

            });
            return false;
        });

        $('#link-logout').click(function(e){
            console.log(this)
            var data = "action=logout_user&module=login"
            data = data + '&ajax=Y';

            $.ajax({
                url: "/login/",
                type: "POST",
                data: data,
                success: function(html){
                    location.href='/';

                }
            });
            return false;
        });


        $(document).ready(function(){

            function showModal(){
                var data = "id=<?=$manager[0]['value']?>";
                $.ajax({
                    url: "/ajax/backmail.php",
                    type: "POST",
                    data: data,
                    success: function (html) {
                        $("#auto-form").html(html);
                        $("#auto-form .mfp-close").click(function(){
                            $("#form-wrapper").css({
                                display: "none"
                            });
                        });
                    }
                });
            }
            showModal();

            $("#auto-form .button").click(function(){
                $.ajax({
                    url: "/ajax/send_mail.php",
                    type: "POST",
                    data: data,
                    success: function (html) {
                        $("#auto-form").html(html);
                        $("#auto-form .mfp-close").click(function(){
                            $("#form-wrapper").css({
                                display: "none"
                            });
                        });
                    }
                });
            });
            $("#auto-form .mfp-close").click(function(){
                $("#form-wrapper").css({
                    display: "none"
                });
            });

            $("a.btn").click(function(){
                if(this.className != "btn btn-default blogs") {
                    $("#form-wrapper").css({
                        display: "block"
                    });
                    showModal();
                    return false;
                }
            });
            $("a[href='#auto-form']").click(function(){
                $("#form-wrapper").css({
                    display: "block"
                });
                showModal();
                return false;
            });
        });

    </script>
</body>
</html>
