<div id="content">
    <div id="delivery">

        <div id="map-barnaul" style="width: 100%; height: 500px">
        </div>
        <div class="delivery-more">
            <?=$array["content"]["content"][0]["desc"];?>
        </div>
        <? $count_coords = 0; ?>
        <? foreach($array["content"]["content"][0] as $element => $el_val){
            if(strpos($element, "address") == "true"){
                $array["content"]["content"][0]["addresses"][$count_coords] = $el_val;
                $count_coords += 1;
             }
        } ?>


        <script type="text/javascript">

            ymaps.ready(init);

            function init(){
                var myMap = new ymaps.Map("map-barnaul", {
                    center: [54.912360,82.935880],
                    zoom: 10,
                    controls: ['zoomControl']
                });
                <? foreach($array["content"]["content"][0]["addresses"] as $key => $val){ ?>
                    var myPlacemark<?=$key?> = new ymaps.Placemark(
                        // Координаты метки
                        [<?=$val?>] , {
                            // Свойства
                            // Текст метки
                            hintContent: 'Ресторан Кампай'
                        }, {
                            iconLayout: 'default#image',
                            iconImageHref: '/images/mapicon.png', // картинка иконки
                            iconImageSize: [38, 34], // размеры картинки
                            iconImageOffset: [-6, -10] // смещение картинки
                        });
                    myMap.geoObjects.add(myPlacemark<?=$key?>);
                <? } ?>
                
                myMap.behaviors.disable('scrollZoom');
                myMap.behaviors.enable('DblClickZoom','Drag');

            }


        </script>



    </div>

</div>