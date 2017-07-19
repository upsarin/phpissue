<?
session_start();

if($_POST){ ?>

    <?
    if(!$_SESSION['user']['summ']){
        $_SESSION['user']['summ'] = 0;
    }
    if($_SESSION['user']['busket'][$_POST['sizeName']][$_POST['elementId']] && $_POST['action'] == "add"){
        $_SESSION['user']['busket'][$_POST['sizeName']][$_POST['elementId']]['count'] += 1;
        $_SESSION['user']['summ'] += $_POST['price'];
    } else if($_SESSION['user']['busket'][$_POST['sizeName']][$_POST['elementId']] && $_POST['action'] == "delete"){
        $_SESSION['user']['busket'][$_POST['sizeName']][$_POST['elementId']]['count'] -= 1;
        $_SESSION['user']['summ'] -= $_POST['price'];
    } else if(!$_SESSION['user']['busket'][$_POST['sizeName']][$_POST['elementId']]) {
        $_SESSION['user']['busket'][$_POST['sizeName']][$_POST['elementId']] = $_POST;
        $_SESSION['user']['busket'][$_POST['sizeName']][$_POST['elementId']]['count'] = 1;
        $_SESSION['user']['summ'] += $_POST['price'];
    }


    ?>
    <div id="basket_all">
        <div class="order-coast-text"><?=$_SESSION['user']['summ']?> руб.</div>
        <a href="/busket" class="order-bottom">оформить</a>
        <div style="clear:both"></div>
    </div>
<? } ?>