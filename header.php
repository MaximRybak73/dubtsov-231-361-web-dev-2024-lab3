<header>
    <div class="container">
        <nav class="nav">
            <div class="text">RybolovClub73</div>
            <ul>
                <li>
                    <a href="<?php
                    // Переменные для ссылки
                    $name = 'Главная'; // текст ссылки
                    $link = 'index.php'; // адрес ссылки
                    
                    // Выводим адрес ссылки
                    echo $link;
                    ?>" <?php
                    // Если это текущая страница, добавляем класс "selected_menu"
                    if ($current_page == 'home') {
                        echo ' class="selected_menu"';
                    }
                    ?>>
                        <?php
                        // Выводим текст ссылки
                        echo $name;
                        ?>
                    </a>
                </li>

                <li>
                    <a href="<?php
                    // Переменные для ссылки
                    $name = 'Войти'; // текст ссылки
                    $link = 'autentification.php'; // адрес ссылки
                    // Выводим адрес ссылки
                    echo $link;
                    ?>" <?php
                    // Если это текущая страница, добавляем класс "selected_menu"
                    if ($current_page =='login') {
                        echo ' class="selected_menu"';
                    }
                    ?>>
                        <?php
                        // Выводим текст ссылки
                        echo $name;
                        ?>
                    </a>
                </li>

                <li>
                    <a href="<?php
                    // Переменные для ссылки
                    $name = 'Обратная связь'; // текст ссылки
                    $link = 'feedback.php'; // адрес ссылки
                    
                    // Выводим адрес ссылки
                    echo $link;
                    ?>" <?php
                    // Если это текущая страница, добавляем класс "selected_menu"
                    if ($current_page == 'feedback') {
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