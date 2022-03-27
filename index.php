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
        <li> <a href= "Lab1.html" >Задание 1</a> </li>
        <li> <a href= "Lab2.html" >Задание 2</a> </li>
    </ol>
    <li>Лаба 2</li>
    <ol>
        
    </ol>
    <li>Лаба 3</li>
    <ol>
        
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