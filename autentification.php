<?php
$title = "RybolovClub73";
$current_page = 'login';
include "header.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset=UTF-8 />
    <link href="forAutent.css " rel="stylesheet" type="text/css" />
    <link href="images/icon.webp" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Macondo:regular" rel="stylesheet" />
    <title><?php echo $title?></title>
</head>
<body>
    <form action="https://httpbin.org/post" method="post">
        <label for="user_name">Введите логин:</label>
        <input type="text" placeholder="login" maxlength="15" id="user_name"><br><br>

        <label for="password">Введите пароль:</label>
        <input type="password" placeholder="password"><br><br>

        <label for="checkbox">Запомнить меня:</label>
        <input type="checkbox"><br><br>

        <input type="submit" value="Войти">
    </form>
    <?php include "footer.php"; ?>
</body>
</html>