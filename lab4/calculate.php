<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат - Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/logo.png" alt="МосПолитех">
            </div>
            <div class="title">
                <h1>Калькулятор</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="calculator">
                <div class="result-wrapper">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['expression'])) {
                        $expression = $_POST['expression'];
                        
                        if (preg_match('/^[0-9+\-*\/().\s]+$/', $expression)) {
                            $result = evaluateExpression($expression);
                            echo '<p class="expression">Выражение: ' . htmlspecialchars($expression) . '</p>';
                            echo '<p class="result">Результат: ' . $result . '</p>';
                        } else {
                            echo '<p class="error">Ошибка: недопустимые символы</p>';
                        }
                    } else {
                        echo '<p class="error">Нет данных для вычисления</p>';
                    }
                    
                    function evaluateExpression($expr) {
                        $expr = str_replace(' ', '', $expr);
                        return calculateRecursive($expr);
                    }
                    
                    function calculateRecursive(&$expr) {
                        $num = parseNumber($expr);
                        
                        while (strlen($expr) > 0) {
                            $op = $expr[0];
                            if ($op == ')') {
                                break;
                            }
                            $expr = substr($expr, 1);
                            $num2 = calculateRecursive($expr);
                            
                            switch ($op) {
                                case '+': $num += $num2; break;
                                case '-': $num -= $num2; break;
                                case '*': $num *= $num2; break;
                                case '/': 
                                    if ($num2 == 0) return '∞';
                                    $num /= $num2; 
                                    break;
                            }
                        }
                        return $num;
                    }
                    
                    function parseNumber(&$expr) {
                        $negative = false;
                        
                        if ($expr[0] == '-') {
                            $negative = true;
                            $expr = substr($expr, 1);
                        }
                        
                        if ($expr[0] == '(') {
                            $expr = substr($expr, 1);
                            $num = calculateRecursive($expr);
                            if ($expr[0] == ')') {
                                $expr = substr($expr, 1);
                            }
                            return $negative ? -$num : $num;
                        }
                        
                        $numStr = '';
                        while (strlen($expr) > 0 && (ctype_digit($expr[0]) || $expr[0] == '.')) {
                            $numStr .= $expr[0];
                            $expr = substr($expr, 1);
                        }
                        
                        $num = (float)$numStr;
                        return $negative ? -$num : $num;
                    }
                    ?>
                    <a href="index.php" class="back-btn">Вернуться</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>задание для самостоятельной работы</p>
    </footer>
</body>
</html>