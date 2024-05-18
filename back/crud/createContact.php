<?php
    require_once '../connect.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $city = $_POST['city'];
    $skills = $_POST['skills'];
    $reason = $_POST['reason'];

    if (!preg_match('/^\+?[0-9\s\-\(\)]{7,20}$/', $phone)) {
        header('Location: ../../vacancy.php?status=invalid_phone');
        exit();
    }

    if (strlen($skills) > 400) {
        header('Location: ../../vacancy.php?status=skills_too_long');
        exit();
    }
    
    if (strlen($reason) > 400) {
        header('Location: ../../vacancy.php?status=reason_too_long');
        exit();
    }
    
    if (strlen($position) > 30) {
        header('Location: ../../vacancy.php?status=position_too_long');
        exit();
    }

    // Экранирование спецсимволов
    $email = mysqli_real_escape_string($connect, $email);
    $name = mysqli_real_escape_string($connect, $name);
    $phone = mysqli_real_escape_string($connect, $phone);
    $position = mysqli_real_escape_string($connect, $position);
    $city = mysqli_real_escape_string($connect, $city);
    $skills = mysqli_real_escape_string($connect, $skills);
    $reason = mysqli_real_escape_string($connect, $reason);

    $check_query = "SELECT * FROM `ContactForm` WHERE nameSername='$name' AND phone='$phone' AND email='$email' AND skills='$skills' AND cityFor='$city' AND reason='$reason' AND position='$position'";
    $result = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($result) > 0) {
        header('Location: ../../vacancy.php?status=duplicate');
    } else {
        $query = "INSERT INTO `ContactForm` (nameSername, phone, email, skills, cityFor, reason, position) VALUES ('$name', '$phone', '$email', '$skills', '$city', '$reason', '$position')";
        
        if (mysqli_query($connect, $query)) {
            header('Location: ../../vacancy.php?status=success');
        } else {
            echo "Ошибка: " . $query . "<br>" . mysqli_error($connect);
        }
    }

    mysqli_close($connect);
?>
