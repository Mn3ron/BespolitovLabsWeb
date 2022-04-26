<?php

$mysqli = new mysqli('localhost', 'a0664956_web3', 'ErD2kSJk', 'a0664956_web3');
$name = $_GET["name"];
$email = $_GET["email"];
$message= $_GET["message"];


$mysqli->set_charset('utf8');


$sql = "INSERT INTO `reviews` (name, email, message) VALUES ('$name','$email','$message')";
if ($mysqli->query($sql)){
    $result ="done";
}
else $result ="error";

echo json_encode($result, JSON_UNESCAPED_UNICODE);




$mysqli->close();

?>