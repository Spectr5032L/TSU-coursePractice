<?php
session_start();
require_once 'helper.php';
require_once '../connect.php';

$email = $_POST['email'];
$pass = $_POST['password'];
#$code = $_POST['code'];
$_SESSION['validation'] = [];
$_SESSION['user'] = [];






$query = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
if($user = mysqli_fetch_assoc($query)) {


if(password_verify($pass, $user['password']) ) {
    $_SESSION['user']['id'] = $user['id'];
    $_SESSION['user']['role'] = $user['role'];
    if($user['role'] == 'client') {
        redirect('/client-account.php');
    } else if($user['role'] == 'spec') {
        redirect('/personal-account.php');
    }
    
}
    errorMsg('error', 'Неверно введен пароль');
    addOldValue('name', $name); 
} else {
    addOldValue('name', $name);
    errorMsg('error', 'Пользователь не найден');
}

redirect('../../auth.php');
?>