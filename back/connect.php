<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "tsu-curse-itog");
if(!$connect) {
    die('Ошибка подключения к бд');
}
?>