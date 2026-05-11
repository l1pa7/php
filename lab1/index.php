<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World! - МосПолитех</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/logo.png" alt="МосПолитех">
            </div>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="dynamic-content">
                <?php
                    date_default_timezone_set('Europe/Moscow');
                    $currentDateTime = date('d.m.Y H:i:s');
                    $message = "Hello, World!";
                    
                    echo "<h2>$message</h2>";
                    echo "<p>Текущая дата и время: <strong>$currentDateTime</strong></p>";
                    echo "<p>Добро пожаловать на страницу!</p>";
                    
                    $dayOfWeek = date('l');
                    $daysRussian = [
                        'Monday' => 'Понедельник',
                        'Tuesday' => 'Вторник',
                        'Wednesday' => 'Среда',
                        'Thursday' => 'Четверг',
                        'Friday' => 'Пятница',
                        'Saturday' => 'Суббота',
                        'Sunday' => 'Воскресенье'
                    ];
                    
                    echo "<p>Сегодня: <strong>" . $daysRussian[$dayOfWeek] . "</strong></p>";
                ?>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>