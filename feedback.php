<?php
$title = "RybolovClub73";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link href="forAutent.css " rel="stylesheet" type="text/css" />
    <link href="images/icon.webp" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Macondo:regular" rel="stylesheet" />
    <title>RybolovClub73</title>
</head>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="text">RybolovClub73</div>
                <ul>
                    <li>
                        <a href="<?php
                        // Переменные для ссылки
                        $name = 'Назад'; // текст ссылки
                        $link = 'index.php'; // адрес ссылки
                        $current_page = true; // определяем, активна ли страница
                        
                        // Выводим адрес ссылки
                        echo $link;
                        ?>" <?php
                        // Если это текущая страница, добавляем класс "selected_menu"
                        if ($current_page) {
                            echo ' class="selected_menu"';
                        }
                        ?>>
                        <?php
                        // Выводим текст ссылки
                        echo $name;
                        ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <form action="https://httpbin.org/post" method="post">
        <label for="FIO">Введите ФИО:</label>
        <input type="text" placeholder="ФИО" id="FIO"><br><br>

        <label for="Email">Введите Email:</label>
        <input type="text" placeholder="Email" id="Email"><br><br>

        <label>Откуда узнали о нас?</label>
        <label><input type="radio" name="state">Социальные сети</label>
        <label><input type="radio" name="state">От друзей</label>
        <label><input type="radio" name="state">Реклама</label>
        <br><br>

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