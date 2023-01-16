<?php
require('db.php');
$items = $xml->item;

if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    $id = $_GET['ID'];

    foreach($items as $item)
    {
        if($item['ID'] == $id)
        {
            $name = $item->Name;
            $price = $item->Price;
            $time = $item->HoursToApply;
            break;
        }
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = $_POST['ID'];
    foreach($items as $item)
    {
        if($item['ID'] == $id)
        {
            $item->Name = $_POST['updateItemName'];
            $item->Price = $_POST['updateItemPrice'];
            $item->HoursToApply = $_POST['updateItemTime'];
            break;
        }
    }
    $xml->saveXML('data.xml');
    header('location:index.php');
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
<h1 class="goback"><a href="index.php" >Назад</a></h1>
<br>
<div class="formula">
    <form class = "formula" method="POST" style="border: 4px solid #9e63e3;">
        <div class="text1">
            <p class="main_color">Обновить товары</p>
        </div>
        <div class="text2">
            <span class="adminText">Наименование:</span>
            <input class="adminText" type="text" name="updateItemName" value="<?php echo $name; ?>">
        </div>
        <div class="text2">
            <span class="adminText">Цена:</span>
            <input class="adminText" type="text" name="updateItemPrice" value="<?php echo $price; ?>">
        </div>
        <div class="text2">
        <span class="adminText">Время доставки(в минутах):</span>
            <input class="adminText" type="text" name="updateItemTime" value="<?php echo $time; ?>">
            <input type="hidden" name="ID" value= "<?php echo $id;?>">
        </div>
        <button name="submit" type="submit" class="button1" style="margin-bottom: 2%">
            <p class="button_color">Обновить букет</p>
        </button>

    </form>
</div>
</body>
</html>