<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат get_headers - МосПолитех</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/logo.png" alt="МосПолитех">
            </div>
            <div class="title">
                <h1>Feedback Form</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="result-wrapper">
                <h2>Результат работы функции get_headers</h2>
                <textarea rows="20" readonly><?php
                    $headers = get_headers('https://httpbin.org/get');
                    if ($headers === false) {
                        echo "Не удалось получить заголовки. Проверьте подключение к интернету.";
                    } else {
                        foreach ($headers as $header) {
                            echo $header . "\n";
                        }
                    }
                ?></textarea>
                <a href="page1.php" class="btn-link">Вернуться к форме</a>
            </div>
        </div>
    </main>

    <footer>
        <p>задание для самостоятельной работы</p>
    </footer>
</body>
</html>