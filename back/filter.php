<?php 
require_once 'connect.php';

// Получаем значения фильтров из GET запроса
$skillFilter = isset($_GET['skill']) ? mysqli_real_escape_string($connect, $_GET['skill']) : '';
$positionFilter = isset($_GET['position']) ? mysqli_real_escape_string($connect, $_GET['position']) : '';

// Строим SQL запрос с учетом фильтров
$query = "SELECT nameSername, skills, position, photo_path FROM ContactForm WHERE status = 'job'";

if ($skillFilter || $positionFilter) {
    $conditions = [];
    if ($skillFilter) {
        $conditions[] = "skills LIKE '%$skillFilter%'";
    }
    if ($positionFilter) {
        $conditions[] = "position LIKE '%$positionFilter%'";
    }
    $query .= " AND " . implode(" AND ", $conditions);
}

$result = mysqli_query($connect, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nameSername = htmlspecialchars($row['nameSername']);
        $skillsJson = $row['skills'];
        $position = htmlspecialchars($row['position']);
        $photo_path = htmlspecialchars($row['photo_path']);

        // Декодируем JSON строку с навыками
        $skillsArray = json_decode($skillsJson, true);
        $skillsList = '';
        if (is_array($skillsArray)) {
            foreach ($skillsArray as $skill) {
                $skillsList .= "<li>" . htmlspecialchars($skill) . "</li>";
            }
        }

        // Создаем HTML-блок для каждого кандидата
        echo "
        <div class='specialization-item'>
            <div class='item-description'>
                <h2 style='width: 400px;'>$nameSername</h2>
                <div>
                    <span>$position</span>
                    <p>Навыки:</p>
                    <ul class='list-style-one mdl-tabs__panel-text'>
                        $skillsList
                    </ul>
                </div>
            </div>
            <div class='item-img'>
                <img src='$photo_path' alt='Фото $nameSername'>
            </div>
        </div>";
    }
} else {
    echo "<p>Ошибка загрузки данных: " . mysqli_error($connect) . "</p>";
}

// Закрываем соединение с базой данных
mysqli_close($connect);
?>
