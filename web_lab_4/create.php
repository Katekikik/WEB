<?php
require('db.php');
$items = $xml->item;
$lastItem = $items[($xml->count()) - 1];
if (!empty($_POST)) {
    if (isset($_POST["submit"])) {
        $name = $_POST['createItemName'];
        $price = $_POST['createItemPrice'];
        $time = $_POST['createItemTime'];
        $newItem = $xml->addChild('item', '');
        $newItem->addChild('Name', $name);
        $newItem->addChild('Price', $price);
        $newItem->addChild('HoursToApply', $time);
        $newItem->addChild('img', "imgs/букетик.webp");
        $newItem->addAttribute('ID', $lastItem['ID'] + 1);
        $xml->saveXML('data.xml');
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
<br>
<h1 class="goback"><a href="index.php">Назад</a></h1>
<br>
<div class="formula">
    <form class="formula" method="POST" style="border: 4px solid #9e63e3;">
        <div class="text1">
            <p class="main_color">Создать товар</p>
        </div>
        <div class="text2">
            <span class="adminText">Наименование:</span>
            <input class="adminText" type="text" name="createItemName" placeholder="Введите наименование">
        </div>
        <div class="text2">
            <span class="adminText">Цена:</span>
            <input class="adminText" type="text" name="createItemPrice" placeholder="Введите цену">
        </div>
        <div class="text2">
            <span class="adminText">Время доставки:</span>
            <input class="adminText" type="text" name="createItemTime" placeholder="Введите кол-во минут">
        </div>
        <button type="submit" name="submit" class="button1" style="margin-bottom: 2%">
            <p class="button_color">Создать букет</p>
        </button>

    </form>
</div>


</body>
</html>