<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Решение уравнения</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .schema-container {
            text-align: center;
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-top: 2rem;
            box-shadow: 0 1px 50px rgba(0, 0, 0, 0.5);
        }
        .schema-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
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
            <div class="result-wrapper">
<?php
$equation = "22 * X = 220";

$parts = explode('=', $equation);
$left = trim($parts[0]);
$right = trim($parts[1]);

if (strpos($left, '+') !== false) {
    $operator = '+';
} elseif (strpos($left, '-') !== false) {
    $operator = '-';
} elseif (strpos($left, '*') !== false) {
    $operator = '*';
} elseif (strpos($left, '/') !== false) {
    $operator = '/';
}

$operands = explode($operator, $left);

if ($operands[0] === 'X') {
    $known = (float)$operands[1];
    switch ($operator) {
        case '+': $result = (float)$right - $known; break;
        case '-': $result = (float)$right + $known; break;
        case '*': $result = (float)$right / $known; break;
        case '/': $result = (float)$right * $known; break;
    }
} else {
    $known = (float)$operands[0];
    switch ($operator) {
        case '+': $result = (float)$right - $known; break;
        case '-': $result = $known - (float)$right; break;
        case '*': $result = (float)$right / $known; break;
        case '/': $result = $known / (float)$right; break;
    }
}

echo "<h2>Уравнение</h2>";
echo "<p class='equation'>22 * X = 220</p>";
echo "<h2>Результат</h2>";
echo "<p class='result'>X = $result</p>";
?>
            </div>
            
            <div class="schema-container">
                <h2>Блок-схема алгоритма</h2>
                <img src="images/schema.svg" alt="Блок-схема">
            </div>
        </div>
    </main>

    <footer>
        <p>задание для самостоятельной работы</p>
    </footer>
</body>
</html>