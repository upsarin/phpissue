<html>
<head>


    <title><?=$array['seotitle']?></title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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


    <script src="/car_js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="/car_js/bootstrap.js"></script>
    <script src="/car_js/jquery.maskedinput-1.2.2.js"></script>
    <script src="/car_js/footer.js"></script>

    <style>
        .hide{
            display: none;
        }
    </style>

</head>
<body class="no-m-p wide new_page  bg-gray headroom-disabled desktop_layout">
<div id="wrapper">
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
            <span class="phone">+7(383)375-72-05 </span>
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

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>

                <?=minc::pos("main-menu")?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="content">
        <div id="messages" class="clearfix">

        </div>
        <div id="main-page" style="min-height: 400px;">
            <div class="contain-catalog" style="margin-top: 70px;">
                <div class="expertiza-item clearfix">
                    <div class="jurist-about">
                        <a href="/">
                            <img src="/images/logo-post.png" width="227" height="186" alt="">
                        </a>
                    </div>
                    <div class="jurist-info" style="width: 70%;">
                        <a class="jurist-title" href="/"><h2>Запрашиваемая вами страница не найдена.</h2></a>
                        <p>Возможно на данной странице ведутся технические работы, с вопросами обращайтесь к администратору сайта.</p>
                    </div>

                </div>

            </div>
        </div>
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



        </div>
    </div>
    <script>

        $(document).ready(function($){
            $('.form-auto').magnificPopup({});
            $('.form-details').magnificPopup({});
            $(".view #popup-window").click(function(){
                $(".view .hide").slideDown();
                return false;
            });

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




    </script>
</body>
</html>