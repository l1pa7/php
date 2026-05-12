<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи - МосПолитех</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/logo.png" alt="МосПолитех">
            </div>
            <div class="title">
                <h1><?php echo "Feedback Form"; ?></h1>
            </div>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="form-wrapper">
                <form action="https://httpbin.org/post" method="POST" target="_blank">
                    <div class="form-group">
                        <label for="username">Имя пользователя</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail пользователя</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="type">Тип обращения</label>
                        <select id="type" name="type" required>
                            <option value="complaint">Жалоба</option>
                            <option value="suggestion">Предложение</option>
                            <option value="gratitude">Благодарность</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Текст обращения</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Вариант ответа</label>
                        <div class="checkbox-group">
                            <label>
                                <input type="radio" name="response_type[]" value="sms"> СМС
                            </label>
                            <label>
                                <input type="radio" name="response_type[]" value="email"> E-mail
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Отправить</button>
                </form>

                <a href="page2.php" class="btn-link">Перейти на вторую страницу</a>
            </div>
        </div>
    </main>

    <footer>
        <p>задание для самостоятельной работы</p>
    </footer>
</body>
</html>