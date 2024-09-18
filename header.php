<header>
    <div class="container">
        <nav class="nav">
            <div class="text">RybolovClub73</div>
            <ul>
            <li>
                    <a href="<?php
                        // Переменные для ссылки
                        $name = 'Войти'; // текст ссылки
                        $link = 'autentification.php'; // адрес ссылки
                        $current_page = true; // определяем, активна ли страница

                        // Выводим адрес ссылки
                        echo $link;
                    ?>" 
                    <?php 
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

                <li><a href="feedback.php">Обратная связь</a></li>
                <li><a href="">Забронировать дом на пруду</a></li>
            </ul>
        </nav>
    </div>
</header>