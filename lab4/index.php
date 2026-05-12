<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор - МосПолитех</title>
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
                <form id="calcForm" method="POST" action="calculate.php">
                    <input type="text" id="display" name="expression" readonly>
                </form>
                
                <div class="buttons">
                    <button onclick="appendToDisplay('(')">(</button>
                    <button onclick="appendToDisplay(')')">)</button>
                    <button onclick="clearDisplay()">C</button>
                    <button onclick="appendToDisplay('/')">/</button>
                    
                    <button onclick="appendToDisplay('7')">7</button>
                    <button onclick="appendToDisplay('8')">8</button>
                    <button onclick="appendToDisplay('9')">9</button>
                    <button onclick="appendToDisplay('*')">*</button>
                    
                    <button onclick="appendToDisplay('4')">4</button>
                    <button onclick="appendToDisplay('5')">5</button>
                    <button onclick="appendToDisplay('6')">6</button>
                    <button onclick="appendToDisplay('-')">-</button>
                    
                    <button onclick="appendToDisplay('1')">1</button>
                    <button onclick="appendToDisplay('2')">2</button>
                    <button onclick="appendToDisplay('3')">3</button>
                    <button onclick="appendToDisplay('+')">+</button>
                    
                    <button onclick="appendToDisplay('0')">0</button>
                    <button onclick="appendToDisplay('.')">.</button>
                    <button class="equals" onclick="calculate()">=</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>задание для самостоятельной работы</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>