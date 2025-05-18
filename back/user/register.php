<?php
session_start();
require_once 'helper.php';
require_once '../connect.php';

$name = 'sas';
$pass = 'sas';
//$_SESSION['validation'] = [];


$pass = password_hash($pass, PASSWORD_DEFAULT);

mysqli_query($connect, "INSERT INTO users (login, password, role) VALUES ('$name', '$pass', 'ADMIN')");
redirect('../../auth.php');
mysqli_close($connect);

?>