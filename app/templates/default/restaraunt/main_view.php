<style>
    #content {
        min-height: 800px;
        padding-top: 100px;
    }
    .menu-item-inside {
        background-size: contain !important;
        background-repeat: no-repeat !important;
    }
    #menu-items h1{
        font-size: 25px;
        margin-bottom: 50px;
        color: #544c4c;
    }
    #menu-items {
        margin-top: 50px;
    }
    .menu-item {
        height: 310px;
    }
</style>
<div id="content">

    <?
    $filter = array("content_id" => $array['content']['content'][0]['id']);
    $images = Element::SelectAll('files', $filter, null, null);
    ?>
    <div id="mainpage-action" style="z-index: 0; overflow: hidden;">
        <?foreach($images as $k_image => $image){?>
                <? if(strpos($image["type"], "slaider") !== false){?>
                    <img src="/<?=$image['path']?>" />
                <? } ?>
        <? } ?>
    </div>
    <script>
        $(function(){
            $("#mainpage-action").slidesjs({
                width: 1440,
                height:350,

                pagination: {
                    active: true,
                    // [boolean] Create pagination items.
                    // You cannot use your own pagination. Sorry.
                    effect: "slide"
                    // [string] Can be either "slide" or "fade".
                },

                navigation: {
                    active:false
                },

                play: {
                    active: false,
                    // [boolean] Generate the play and stop buttons.
                    // You cannot use your own buttons. Sorry.
                    effect: "slide",
                    // [string] Can be either "slide" or "fade".
                    interval: 3000,
                    // [number] Time spent on each slide in milliseconds.
                    auto: false,
                    // [boolean] Start playing the slideshow on load.
                    swap: false,
                    // [boolean] show/hide stop and play buttons
                    pauseOnHover: false,
                    // [boolean] pause a playing slideshow on hover
                    restartDelay: 3500
                    // [number] restart delay on inactive slideshow
                },

                play: {
                    active: true,
                    // [boolean] Generate the play and stop buttons.
                    // You cannot use your own buttons. Sorry.
                    effect: "slide",
                    // [string] Can be either "slide" or "fade".
                    interval: 3500,
                    // [number] Time spent on each slide in milliseconds.
                    auto: true,
                    // [boolean] Start playing the slideshow on load.
                    swap: false,
                    // [boolean] show/hide stop and play buttons
                    pauseOnHover: false,
                    // [boolean] pause a playing slideshow on hover
                    restartDelay: 3500
                    // [number] restart delay on inactive slideshow
                },

                callback: {
                    loaded: function(number) {
                        // Do something awesome!
                        // Passes start slide number
                    },
                    start: function(number) {

                    },
                    complete: function(number) {
                        // Do something awesome!
                        // Passes slide number at end of animation
                    }
                }


            });

            sjs = $('#mainpage-action').data('plugin_slidesjs');
            $('.slider_text_name').click( function(clickevent){ sjs.stop(); } );
            $('.slider_text_tel').click( function(clickevent){ sjs.stop(); } );

        });

    </script>
    <div id="menu-items">
        <h1>Меню ресторана</h1>
        <?foreach($images as $k_image => $image){?>
                <? if(strpos($image["type"], "slaider") === false){?>
                    <div class="menu-item" id="<?=$element["id"]?>">
                        <div class="menu-item-inside" style="background: url(/<?=$image['path']?>)" data-url="/<?=$image['path']?>">
                        </div>
                    </div>
                <? } ?>
        <? } ?>
    </div>



</div>

<script>
    $(document).ready(function(){
        $(".menu-item div").click(function(){
            $("#overlay").css({display: "block"});

            $("#popup-window").html('<img src="' + $(this).attr("data-url") + '" width="'+screen.width+'"/>');
            $("#popup-window").css({
                position: "absolute",
                top: "5%",
                left: "0%",
                display: "block",
                background: "white",
                margin: "0px",
                width: "100%",
                height: "100%"
            });
            $("#popup-window img").click(function(){
                $("#overlay").click();
            });
            console.log($(this).attr("data-url"));
        });
    });
</script>