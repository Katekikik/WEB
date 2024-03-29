<?php
require('db.php');

$items = $db->query("SELECT * FROM catalog")->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="Styles.css">
    <title>Борисенко Екатерина</title>
    <meta charset="utf-8">
</head>

<header>
    <div>
        <hr class="main_color">
        <div class="menu">
            <div class="mbox">
                <p class="m1text">КАТАЛОГ</p>
            </div>
            <div class="mbox">
                <p class="m1text">ДОСТАВКА</p>
            </div>
            <div class="mbox">
                <p class="m1text">ОТЗЫВЫ</p>
            </div>
            <div class="mbox">
                <p class="m1text">АКЦИИ</p>
            </div>
            <div class="mbox">
                <p class="m1text">КОРЗИНА</p>
            </div>
        </div>
        <hr class="main_color">
    </div>
</header>

<body style="height: 100vh; font-family: Arial;">
<div class="popular_part">
    <div class="box1">
        <div class="text1">
            <p class="main_color">Авторские букеты<br>в Петербурге</p>
        </div>
        <div class="text2">
            <p class="main_color">Оригинальные свежие букеты<br>с доставкой по всему городу</p>
        </div>
        <button class="button1">
            <p class="button_color">Смотреть каталог</p>
        </button>
    </div>
    <div class="box2">
        <img id="pik1" src="imgs/florist.jpg">
    </div>

</div>


<div class="menu" id="icon_back">
    <div class="mpic">
        <img class="icon" src="imgs/доставка.png">
    </div>
    <div class="mbox1">
        <p class="msize">Быстрая доставка</p>
        <p class="msize">Можем собрать букет и передать<br>его в доставку всего за час.</p>
    </div>
    <div class="mpic">
        <img class="icon" src="imgs/цветок.png">
    </div>
    <div class="mbox1">
        <p class="msize">Всегда свежие цветы</p>
        <p class="msize">Тщателно следим за состоянием<br>цветов, а опытные флористы<br>отбирают каждый цветок.</p>
    </div>
    <div class="mpic">
        <img class="icon" src="imgs/камера.png">
    </div>
    <div class="mbox1">
        <p class="msize">Отправляем фото цветов</p>
        <p class="msize">Перед доставкой сделаем<br>фотографию букета и отправим вам.</p>
    </div>
</div>

<div id="core_text">
    <p class="main_color">Популярные букеты</p>
</div>

<div class="popular_part" id="pop">
    <div class="box1" id="m">
        <div class="text1">
            <p class="main_color">Букет «Нежность»</p>
        </div>
        <div class="text2">
            <p class="main_color">Элегантный букет, который<br>станет отличным подарком</p>
        </div>
        <div class="text1">
            <p class="main_color">3999 Р</p>
        </div>
        <button class="button1">
            <p class="button_color">Заказать</p>
        </button>
    </div>
    <div class="box3">
        <img id="pik2" src="imgs/букетик.webp">
    </div>
</div>

<br>
<br>
<br>

<div class="popular_part" id="sail">
    <div class="box5" id="back">
        <div class="text3">
            <p>Скидка 10%<br>на первый заказ</p>
        </div>
        <div class="text4">
            <p>Если заказываете у нас букет впервые - при оформлении заказа заказа введите промокод «kikik» и получите
                скидку 10%</p>
        </div>
    </div>
    <div class="box4">
        <img id="pik3" src="imgs/beautiful.jpg">
    </div>
</div>
<br>
<br>
<div id="border">
    <div class="text1">
        <p class="main_color">Отзывы клиентов</p>
    </div>
    <div class="menu">
        <div class="mbox2">
            <p class="main_color">Всё очень понравилось! Быстрое оформление заказа, выбор удобного времени доставки.
                Всем большое
                спасибо!</p>
            <p class="main_color">Марина</p>
        </div>
        <div class="mbox2">
            <p class="main_color">Внимательные флористы, вежливые. Магазин находится рядом с метро. Букет очень
                понравился, буду ещё
                заказывать!</p>
            <p class="main_color">Татьяна</p>
        </div>
        <div class="mbox2">
            <p class="main_color">Выбор букетов на любой вкус и цену. Бывают хорошие скидки, а флористы всегда помогут и
                соберут красивый
                букет</p>
            <p class="main_color">Екатерина</p>
        </div>
    </div>
</div>
<br>

<div id="new">
    <div class="text1">
        <a class="main_color" href="admin.php?id=1" style="text-align: center">Редактировать список</a>
    </div>
    <div class="menu" style="margin-top: 3%; height: 1000px; ">

        <?php
        foreach ($items as $item) {
            ?>

            <div class="mbox2" style="width: 400px; height: 550px">
                <img class="icon" src=<?php echo $item['img']; ?>>
                <p class="main_color">Букет <?php echo $item['Name'] ?> </p>
                <p class="main_color">За <?php echo $item['Price'] ?> рублей</p>
                <p class="main_color">Время доставки <?php echo $item['HoursToApply'] ?> мин.</p>
                <br>
            </div>

        <?php } ?>
    </div>
</div>


<div>
    <div class="menu" id="marg">
        <div class="mbox3">
            <p class="m1text">КАТАЛОГ</p>
        </div>
        <div class="mbox3">
            <p class="m1text">ДОСТАВКА</p>
        </div>
        <div class="mbox3">
            <p class="m1text">ОТЗЫВЫ</p>
        </div>
        <div class="mbox3">
            <p class="m1text">АКЦИИ</p>
        </div>
        <div class="mbox3">
            <p class="m1text">КОРЗИНА</p>
        </div>
    </div>
</div>

</body>
</html>