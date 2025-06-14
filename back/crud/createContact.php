<?php
require_once '../connect.php';

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$city = $_POST['city'];
$salary = $_POST['salary'];
$skills = $_POST['skills'];
$reason = $_POST['reason'];
$exp = $_POST['exp'];
$about = $_POST['about'];
$edu = $_POST['edu'];

if (!preg_match('/^\+?[0-9\s\-\(\)]{7,20}$/', $phone)) {
    header('Location: ../../vacancy.php?status=invalid_phone');
    exit();
}

$total_skills_length = 0;
foreach ($skills as $skill) {
    $total_skills_length += strlen($skill);
    if (strlen($skill) > 200) {
        header('Location: ../../vacancy.php?status=skills_too_long');
        exit();
    }
}
if ($total_skills_length > 400) {
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
$salary = mysqli_real_escape_string($connect, $salary);
// $skills = mysqli_real_escape_string($connect, $skills);
$reason = mysqli_real_escape_string($connect, $reason);
$exp = mysqli_real_escape_string($connect, $exp);
$about = mysqli_real_escape_string($connect, $about);
$edu = mysqli_real_escape_string($connect, $edu);


// Преобразование массива навыков в JSON
$skills_json = mysqli_real_escape_string($connect, json_encode($skills));

if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    $allowed = ['jpg', 'jpeg', 'png'];
    $fileInfo = pathinfo($_FILES['photo']['name']);
    $fileExt = strtolower($fileInfo['extension']);

    if (in_array($fileExt, $allowed)) {
        $photo = $_FILES['photo'];
        list($width, $height) = getimagesize($photo['tmp_name']);

        if ($width == 120 and $height == 170) {
            $photoPath = 'assets/img/avatar/candidates/' . uniqid() . '.' . $fileExt;
            move_uploaded_file($photo['tmp_name'], '../../' . $photoPath);

            // Проверка на дубликаты
            // $check_query = "SELECT * FROM `ContactForm` WHERE nameSername='$name' AND phone='$phone' AND email='$email' AND skills='$skills_json' AND cityFor='$city' AND reason='$reason' AND position='$position'";
            $check_query = "SELECT * FROM `ContactForm` WHERE nameSername= phone='$phone' AND email='$email'";
            $result = mysqli_query($connect, $check_query);

            if (mysqli_num_rows($result) > 0) {
                header('Location: ../../vacancy.php?status=duplicate');
            } else {
                // Вставка данных
                $query = "INSERT INTO `ContactForm` (nameSername, phone, email, skills, cityFor, reason, position, salary, photo_path, status) VALUES ('$name', '$phone', '$email', '$skills_json', '$city', '$reason', '$position', '$salary', '$photoPath', 'job')";

                if (mysqli_query($connect, $query)) {

                    $contactFormId = mysqli_insert_id($connect);

                    // Хешируем пароль
                    $hashedPassword = password_hash('1234', PASSWORD_DEFAULT);

                    // Вставка в таблицу users
                    $userInsertQuery = "INSERT INTO users (spec_id, email, password, role) VALUES ('$contactFormId', '$email', '$hashedPassword', 'spec')";
                    if (!mysqli_query($connect, $userInsertQuery)) {
                        echo "Ошибка при добавлении в users: " . mysqli_error($connect);
                        exit();
                    }
                    $CharacteristicInsertQuery = "INSERT INTO CharacteristicsSpecialist (IdSpec, Skils, Education, ExperienceInt, About) VALUES ('$contactFormId', '$skills_json','$edu' , '$exp', '$about')";
                    if (!mysqli_query($connect, $CharacteristicInsertQuery)) {
                        echo "Ошибка при добавлении в CharacteristicsSpecialist: " . mysqli_error($connect);
                        exit();
                    }

                    header('Location: ../../vacancy.php?status=success');
                } else {
                    echo "Ошибка: " . $query . "<br>" . mysqli_error($connect);
                }
            }
        } else {
            header('Location: ../../vacancy.php?status=invalid_photo_size');
            exit();
        }
    } else {
        header('Location: ../../vacancy.php?status=invalid_file_type');
        exit();
    }
} else {
    header('Location: ../../vacancy.php?status=upload_error');
    exit();
}

mysqli_close($connect);
