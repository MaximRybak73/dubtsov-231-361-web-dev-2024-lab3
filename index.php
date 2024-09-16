<?php
$title = "RybolovClub73";
include "header.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Это пробный сайт" />
    <link href="style.css " rel="stylesheet" type="text/css" />
    <link href="images/icon.webp" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Macondo:regular" rel="stylesheet" />
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>
    <figure class="Image">
        <?php
        $s = date("s");
        $photo = ($s % 2 == 0) ? "shop1" : "shop2";
        echo '<img src="images/' . $photo . '.webp" alt="Фото рыболовного магазина">';
        ?>
    </figure>
    <table>
        <caption>На что ловить в зависимости от реки:</caption>
        <tr>
            <th>Река</th>
            <th>Вид удилища</th>
        </tr>
        <tr>
            <td>Волга</td>
            <td>Фидер, спиннинг</td>
        </tr>
        <tr>
            <td>Свияга</td>
            <td>Телескопическая удочка, донка</td>
        </tr>
        <tr>
            <td>Сельд</td>
            <td>Фидер, телескопическая удочка</td>
        </tr>
        <tr>
            <td>Барыш</td>
            <td>Маховое удилище, спиннинг</td>
        </tr>
    </table>
    <?php include "footer.php"; ?>
</body>
</html>