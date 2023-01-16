<?php
require('db.php');
if (!empty($_GET)) {
    if (isset($_GET['deleteByName'])) {
        $name = $_GET['deleteByName'];
        $db->query("DELETE FROM catalog WHERE Name='$name'");
    }

    if (isset($_GET["createItemName"]) && isset($_GET["createItemPrice"]) && isset($_GET["createItemTime"])) {
        $name = $_GET['createItemName'];
        $price = $_GET['createItemPrice'];
        $time = $_GET['createItemTime'];
        $db->query("INSERT INTO catalog(Name, img, Price, HoursToApply) VALUE('$name','imgs/букетик.webp', $price, $time)");
        header('location:index.php');
    } else {
        "<script>alert('Нехватка введённых данных!')</script>";
    }


    if (isset($_GET['updateItemName'])) {
        $name = $_GET['updateItemName'];
        $price = $_GET['updateItemPrice'];
        $time = $_GET['updateItemTime'];
        $id = $_GET['id'];
        $db->query("UPDATE catalog SET Name='$name', Price=$price, HoursTOApply=$time WHERE id=$id");
        header('location:index.php');
    }
}
$items = $db->query("SELECT * FROM catalog")->fetchAll(PDO::FETCH_ASSOC);
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
<body class="adminBody">
<h1 class="goback"><a href="index.php">Назад</a></h1>
<div class="admin">
    <form>
        <div class="text1">
            <p class="main_color">Удалить букет</p>
        </div>
        <div class="text2">
            <span>Наименование:</span>
            <input type="text" name="deleteByName" placeholder="Введите наименование">
        </div>
        <br>
        <button class="button1">
            <p class="button_color">Удалить букет</p>
        </button>
    </form>
    <form>
        <div class="text1">
            <p class="main_color">Создать букет</p>
        </div>
        <div class="text2">
            <span>Наименование:</span>
            <input type="text" name="createItemName" placeholder="Введите наименование">
        </div>
        <div class="text2">
            <span>Цена:</span>
            <input type="text" name="createItemPrice" placeholder="Введите цену">
        </div>
        <div class="text2">
            <span>Время доставки:</span>
            <input type="text" name="createItemTime" placeholder="Введите кол-во минут">
        </div>
        <br>
        <button class="button1">
            <p class="button_color">Создать товар</p>
        </button>
    </form>
</div>

<div class="goback">
    <p class="main_color">Обновить букеты</p>
</div>

<div class="admin">
    <?php foreach ($items as $item) { ?>
        <form>
            <div class="text2">
                <span class="adminText">Наименование:</span>
                <input class="adminText" type="text" name="updateItemName" value="<?php echo $item["Name"]; ?>">
            </div>
            <div class="text2">
                <span class="adminText">Цена:</span>
                <input class="adminText" type="text" name="updateItemPrice" value="<?php echo $item["Price"]; ?>">
            </div>
            <div class="text2">
                <span class="adminText">Время доставки:</span>
                <input class="adminText" type="text" name="updateItemTime" value="<?php echo $item["HoursToApply"]; ?>">
                <input class="adminText" style="display:none;" type="text" name="id" value="<?php echo $item["ID"]; ?>">
            </div>
            <br>
            <button class="button1">
                <p class="button_color">Обновить</p>
            </button>
        </form>
    <?php } ?>
</div>
</body>
</html>