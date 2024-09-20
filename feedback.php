<?php
$title = "RybolovClub73";
$current_page = 'feedback';
include("header.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link href="forFeedback.css " rel="stylesheet" type="text/css" />
    <link href="images/icon.webp" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Macondo:regular" rel="stylesheet" />
    <title><?php echo $title ?></title>
</head>

<body>
    <form action="https://httpbin.org/post" method="post">
        <label for="FIO">Введите ФИО:</label>
        <input type="text" placeholder="ФИО" id="FIO"><br><br>

        <label for="Email">Введите Email:</label>
        <input type="text" placeholder="Email" id="Email"><br>

        <label>Откуда узнали о нас?</label>
        <label><input type="radio" name="state">Социальные сети</label>
        <label><input type="radio" name="state">От друзей</label>
        <label><input type="radio" name="state">Реклама</label>
        <br>

        <label>Выберите тип обращения:</label>
        <select>
            <option>---</option>
            <option>Жалоба</option>
            <option>Предложение</option>
        </select><br><br>

        <textarea placeholder="Введите текст сообщения:"></textarea><br><br>

        <input type="file"><br><br>

        <label for="checkbox">Даю согласие на обработку персональных данных:</label>
        <input type="checkbox"><br><br>
        <input type="submit" value="Отправить">
    </form>
    <?php include('footer.php');?>
</body>
</html>