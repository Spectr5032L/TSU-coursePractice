<?php
require_once '../connect.php';

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$message = $_POST['message'];
$skills = $_POST['skills'];

// Валидация номера телефона
if (!preg_match('/^\+?[0-9\s\-\(\)]{7,20}$/', $phone)) {
    header('Location: ../../index.php?status=invalid_phone');
    exit();
}

// Проверка и подсчет длины навыков
$total_skills_length = 0;
foreach ($skills as $skill) {
    $total_skills_length += strlen($skill);
    if (strlen($skill) > 200) {
        header('Location: ../../index.php?status=skills_too_long');
        exit();
    }
}
if ($total_skills_length > 400) {
    header('Location: ../../index.php?status=skills_too_long');
    exit();
}

// Экранирование спецсимволов для остальных данных
$email = mysqli_real_escape_string($connect, $email);
$name = mysqli_real_escape_string($connect, $name);
$phone = mysqli_real_escape_string($connect, $phone);
$company = mysqli_real_escape_string($connect, $company);
$message = mysqli_real_escape_string($connect, $message);

// Преобразование массива навыков в JSON без экранирования
$skills_json = json_encode($skills, JSON_UNESCAPED_UNICODE);

// Проверка на дубликаты
$check_query = "SELECT * FROM `CommunicationForm` WHERE nameSername='$name' AND phone='$phone' AND email='$email' AND nameCompany='$company' AND nameSpecialist='$message'";
$result = mysqli_query($connect, $check_query);

if (mysqli_num_rows($result) > 0) {
    header('Location: ../../index.php?status=duplicate');
} else {
    $query = "INSERT INTO `CommunicationForm` (nameSername, phone, email, nameCompany, nameSpecialist) VALUES ('$name', '$phone', '$email', '$company', '$message')";





    if (mysqli_query($connect, $query)) {
        $cli_id = mysqli_insert_id($connect);
        $hashedPassword = password_hash('1234', PASSWORD_DEFAULT);
        $query1 = "INSERT INTO users (client_id, email, password, role) VALUES ('$cli_id', '$email', '$hashedPassword', 'client')";
        if (!mysqli_query($connect, $query1)) {
            echo "Ошибка при добавлении в users: " . mysqli_error($connect);
            exit();
        }

        header('Location: ../../index.php?status=success');
    } else {
        echo "Ошибка: " . $query . "<br>" . mysqli_error($connect);
    }
}

mysqli_close($connect);
