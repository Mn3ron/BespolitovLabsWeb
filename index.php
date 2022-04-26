<html>
<head>
    <style type="text/CSS (ЦСС)">
        LI { list-style-type: none; } /* Убираем исходную нумерацию */
        OL { counter-reset: list1; } /* Инициируем счетчик */
        OL LI:before {
            counter-increment: list1; /* Увеличиваем значение счетчика */
            content: counter(list1) ". "; /* Выводим значение */
        }
        OL OL { counter-reset: list2; } /* Инициируем счетчик вложенного списка */
        OL OL LI:before {
            counter-increment: list2; /* Увеличиваем значение счетчика */
            content: counter(list1) "." counter(list2) ". "; /* Выводим значение типа 2.1, 2.2,... */
        }
    </style>
</head>
<body>

<header>Бесполитов Д.А.</header>

<nav>Лабы</nav>
<ol>
    <li>Лаба 1</li>
    <ol >
        <li> <a href= "LR1/Lab1.html" >Задание 1</a> </li>
        <li> <a href= "LR1/Lab2.html" >Задание 2</a> </li>
        <li> <a href= "LR1/Lab3.html" >Задание 3</a> </li>
        <li> <a href= "LR1/Lab4.html" >Задание 4</a> </li>
        <li> <a href= "LR1/Lab5.html" >Задание 5</a> </li>
        <li> <a href= "LR1/Lab6.html" >Задание 6</a> </li>
        <li> <a href= "LR1/Lab7.html" >Задание 7</a> </li>
    </ol>
    <li>Лаба 2</li>
    <ol>
        <li> <a href= "LR2/Lab0.html" >Пример</a> </li>
        <li> <a href= "LR2/Lab1.html" >Задание 1</a> </li>
        <li> <a href= "LR2/Lab2.html" >Задание 2</a> </li>
        <li> <a href= "LR2/Lab3.html" >Задание 3</a> </li>
        <li> <a href= "LR2/Lab4.html" >Задание 4</a> </li>
        <li> <a href= "LR2/Lab5.html" >Задание 5</a> </li>
        <li> <a href= "LR2/Lab6.html" >Задание 6</a> </li>
        <li> <a href= "LR2/Lab7.html" >Задание 7</a> </li>
    </ol>
    <li>Лаба 3</li>

    <ol>
        <li><a href= "LR3/Lab1.html" >Задание 1</a> </li>
        <li><a href= "LR3/Lab2.html" >Задание 2</a> </li>
    </ol>
    <li>Лаба 4</li>
    <ol>

    </ol>
	<li>Лаба 5</li>
    <ol>

    </ol>
</ol>






</body>
</html>