<div id="order-page">
    <div class="order-zagol">ОФОРМЛЕНИЕ ЗАКАЗА</div>













    <div id="order-right">



        <div class="order-youorder">Ваш заказ:</div>
        <?foreach($_SESSION['busket']['full'] as $element => $val){?>
            <div class="basket-popup-item" id="item1011055">
                <div class="basket-popup-item-img-price">
                    <div class="basket-popup-item-img"><img src="/upload/iblock/9aa/kanadskiy_2.jpg" 9642="" width="60" height="40"></div>
                    <div class="basket-popup-item-price">340 руб.</div>

                </div>

                <div class="basket-popup-item-name">
                    <div class="basket-popup-item-name-text">Канадский ролл</div>
                    <div class="basket-popup-item-name-porc">полная порция</div>

                    <div class="pb-pop-controls-one" style="position: relative;top:8px;">
                        <div class="pb-pop-controls pb-pop-controls-order">

                            <span class="pb-pop-c-dec pb-pop-c-dec-order" data-spec="1" onclick="dec_tovar(this,'1011055');"></span>
                            <div class="plus-minus-count plus-minus-count-order"><b id="popup-d1011055">
                                    2

                                </b></div>
                            <span class="pb-pop-c-inc pb-pop-c-inc-order" data-spec="1" onclick="add_one_tovar(this,'1011055');"></span>


                            <div style="clear: both;"></div>
                        </div>

                        <div class="sum-of-items-container">
                            <div style="float:left">=</div>
                            <div class="sum-of-items" id="popup-sum1011055" style="padding-left: 10px;float:left;font-size: 10pt;font-weight: bold;padding-top: 3px;">680</div>
                            <div class="ruble">РУБ</div>
                            <div style="clear: both;"></div>
                        </div>

                    </div>

                </div>



                <div style="clear: both;"></div>
            </div>
        <? } ?>

    </div>


    <div id="order-left">
        <form class="order" action="" method="POST" name="iblock_add" id="order-form">
            <div>
                <div style="float: left;margin-right:20px;">
                    <label for="order-name">Имя</label>
                    <input type="text" name="name" class="textInput idleField" id="order-name">
                </div>

                <div style="float: left;">
                    <label for="order-tel">Телефон</label>
                    <input type="text" name="tel" class="textInput idleField" id="order-tel">
                </div>

                <div style="clear: both;"></div>

                <div style="float: left;margin-right:20px;">
                    <label for="order-nodelivery" name="nodelivery" class="lb">
                        <input type="checkbox" name="nodelivery" value="без" id="order-nodelivery"> Без доставки, скидка 10%</label>
                </div>

                <div style="clear: both;"></div>

                <div id="order-delivery-block" style="display: none;">
                    <label for="delivery-select" name="nodelivery-adress" class="lb">Адрес самовывоза:</label>
                    <div id="order-delivery-adress">

                        <select name="delivery-select" class="menu-select-delivery">
                            <option value="пр. Димитрова, д. 12">пр. Димитрова, д. 12</option>
                            <option value="ул. Громова, д.13">ул. Громова, д.13</option>
                            <option value="г. Бердск, ул. Попова, д. 9а">г. Бердск, ул. Попова, д. 9а</option>

                        </select>

                    </div>
                    <div class="order-delivery-discont">* Скидка  10 % предоставляется на сумму, не включающую стоимость напитков</div>
                </div>

                <div style="float: left;margin-right:20px;" class="order-streetbox">


                    <label for="order-street">Улица</label>
                    <input type="text" name="street" class="textInput idleField" id="order-street">


                </div>

                <div style="float: left;" class="order-streetbox">
                    <div style="padding-top: 0px;">
                        <div style="float: left;margin-right: 20px;">
                            <label for="order-house">Дом</label>
                            <input type="text" name="house" class="textInput idleField" id="order-house">
                        </div>

                        <div style="float: left;">
                            <label for="order-office">Квартира/офис</label>
                            <input type="text" name="office" class="textInput idleField" id="order-office">
                        </div>

                        <div style="clear: both;"></div>

                    </div>

                </div>

                <div style="clear: both;"></div>



                <div style="float: left;margin-right:20px;">
                    <label for="order-date" id="order-date-label">Дата доставки</label>
                    <input type="text" name="date" class="textInput idleField" id="order-date">

                </div>

                <div style="float: left;">




                    <label for="order-time" id="order-time-label">Время доставки</label>
                    <input type="text" name="time" class="textInput idleField" id="order-time">
                </div>

                <div style="clear: both;"></div>

                <label for="order-comment">Комментарий к заказу</label>
                <textarea id="order-comment" class="textInput" name="comment" placeholder="Например: дата доставки, время доставки, № подъезда, сдача с крупной купюры"></textarea>



            </div>

            <div>

                <div style="float: left;min-width: 280px;">
                    <div id="order-allsum">1718</div>
                    <div style="font-size: 36pt;float:left;margin-left: 20px;">РУБ.</div>
                    <div style="clear: both;"></div>
                </div>
                <input type="hidden" name="go" value="Y">
                <input type="hidden" name="ordercity" value="nsk">

                <div id="order-botton"><input type="submit" value="ОФОРМИТЬ"></div>
                <div style="clear: both;"></div>
            </div>

            <div class="order-allsum-discont-div">
                <div style="display: none;" class="order-allsum-discont-text">С учетом скидок: </div>
                <div style="display: none;" id="order-allsum-discont">1718</div>
                <div style="display: none;" class="order-allsum-discont-text"> руб.</div>
                <!--<div id="order-allsum-discont-name">()</div>-->
                <div class="your-discont">Ваша выгода <span>0</span> руб.</div>

                <div style="clear: both;"></div>
            </div>



        </form>

    </div>




    <div style="clear: both;"></div>


</div>