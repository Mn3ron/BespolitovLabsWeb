<?php

$mysqli = new mysqli('localhost', 'a0664956_web3', 'ErD2kSJk', 'a0664956_web3');



// Устанавливаем кодировку подключения
$mysqli->set_charset('utf8');

// Формируем запрос
$sql = 'SELECT * FROM `reviews`';
$result = $mysqli->query($sql);
$array = array();
// Перебор результата
$i=0;
while($row = $result->fetch_array()) {

        $array[$i*3] = $row['message'];
        $array[$i*3+1] = $row['email'];
        $array[$i*3+2] = $row['name'];
        $i++;

}
echo json_encode($array, JSON_UNESCAPED_UNICODE);
// Освобождаем память
$result->free();

// Закрываем соединение
$mysqli->close();

?>