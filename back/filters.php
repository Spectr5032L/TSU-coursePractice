<?php

require_once 'connect.php';


$skills = $_POST['skills'] ?? '';
$position = $_POST['position'] ?? '';
$experience = $_POST['experience'] ?? '';


$query = "SELECT nameSername, skills, position, salary, photo_path FROM ContactForm WHERE status = 'job'";
$conditions = [];

if (!empty($skills)) {
    $conditions[] = "skills LIKE '%" . mysqli_real_escape_string($connect, $skills) . "%'";
}
if (!empty($position)) {
    $conditions[] = "position LIKE '%" . mysqli_real_escape_string($connect, $position) . "%'";
}
if (!empty($experience)) {
    $conditions[] = "experience >= " . (int)$experience;
}

if (!empty($conditions)) {
    $query .= " AND " . implode(' AND ', $conditions);
}


$result = mysqli_query($connect, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
           while ($row = mysqli_fetch_assoc($result)) {
        $nameSername = htmlspecialchars($row['nameSername']);
        $skillsArray = json_decode($row['skills'], true);
        $position = htmlspecialchars($row['position']);
        $salary = htmlspecialchars($row['salary']);
        $photo_path = htmlspecialchars($row['photo_path']);

        $skillsList = '';
        if (is_array($skillsArray)) {
            foreach ($skillsArray as $skill) {
                $skillsList .= "<li>" . htmlspecialchars($skill) . "</li>";
            }
        }

        echo "
        <div class='specialization-item'>
            <div class='item-img'>
                <img src='$photo_path' alt='Фото $nameSername'>
            </div>
            <div class='item-description'>
                <h2 style='width: 300px;'>$nameSername</h2>
                <div>
                    <div class='item-info'>
                        <span>$position</span>
                        <span>" . number_format($salary, 0, '', ' ') . " (руб/мес)</span>
                    </div>
                    <ul class='list-style-one mdl-tabs__panel-text'>
                        $skillsList
                    </ul>
                </div>
            </div>
        </div>";
    }
    }
} else {
    echo "<p>Ошибка: " . mysqli_error($connect) . "</p>";
}

mysqli_close($connect);