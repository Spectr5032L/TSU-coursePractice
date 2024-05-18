<?php
    require_once '../connect.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    if (!preg_match('/^\+?[0-9\s\-\(\)]{7,20}$/', $phone)) {
        header('Location: ../../index.php?status=invalid_phone');
        exit();
    }

    // Экранирование спецсимволов
    $email = mysqli_real_escape_string($connect, $email);
    $name = mysqli_real_escape_string($connect, $name);
    $phone = mysqli_real_escape_string($connect, $phone);
    $company = mysqli_real_escape_string($connect, $company);
    $message = mysqli_real_escape_string($connect, $message);

    $check_query = "SELECT * FROM `CommunicationForm` WHERE nameSername='$name' AND phone='$phone' AND email='$email' AND nameCompany='$company' AND nameSpecialist='$message'";
    $result = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($result) > 0) {
        header('Location: ../../index.php?status=duplicate');
    } else {
        $query = "INSERT INTO `CommunicationForm` (nameSername, phone, email, nameCompany, nameSpecialist) VALUES ('$name', '$phone', '$email', '$company', '$message')";
        
        if (mysqli_query($connect, $query)) {
            header('Location: ../../index.php?status=success');
        } else {
            echo "Ошибка: " . $query . "<br>" . mysqli_error($connect);
        }
    }

    mysqli_close($connect);
?>
