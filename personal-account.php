<?php 
    require_once 'back/connect.php';
    session_start();
    var_dump($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUBIT • База специалистов</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.css">
    <script src="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <header id="header">
        <div class="header-conteiner">
            <div class="container-logo">
                <div>
                    <a href="tel:+79008003535">+7 (900) 800-35 35</a>
                    <br>
                    hubit.info@main.ru
                </div>
                <div class="header-logo">
                    <strong>HUB</strong><strong style="color: #3CA0E7;">IT</strong>
                </div>
            </div>
            <nav role="navigation" class="primary-navigation">
                <ul>
                    <li><a href="back/user/logout.php">Выход</a></li>
                    <li><a href="index.php">Компаниям &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="index.php#specialization">Специализации</a></li>
                            <li><a href="index.php#stack">Стек технологий</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Кандидатам &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="vacancy.php">Вакансии</a></li>
                            <!-- <li><a href="#">Обучение</a></li> -->
                        </ul>
                    </li>
                    <li><a href="index.php#about-company">Компания</a></li>
                    <li style="border-right: 2px solid #3ca0e7;"><a href="index.php#form-cons">Консультация</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="main-container">
            <?php 
                $usid = $_SESSION['user']['id'];
                $qu = $userRequest = "SELECT * FROM users WHERE id='$usid'";
                $ru = mysqli_query($connect, $qu);
                $rurow = mysqli_fetch_assoc($ru);
                $spec_id = $rurow['spec_id'];

                $query = "SELECT id, nameSername, skills, position, salary, photo_path FROM ContactForm WHERE id = '$spec_id'";
                $result = mysqli_query($connect, $query);
                $row = mysqli_fetch_assoc($result);
                $skillsArray = json_decode($row['skills'], true);
                $skills = array_slice($skillsArray, 0, 3);
                $idSpec = $row['id'];
                $pathimg = $row['photo_path'];
            ?>
            <div class="applications-cards">
                <h3>Личный профиль</h3>
                <div class="specialists-items">
                    <div class="specialization-item">
                        <div class="item-img">
                            <img src='<?php echo $pathimg ?>' alt='Фото $nameSername'>
                        </div>
                        <div class="item-description">
                            <h2 style="width: 300px;"><?php echo $row['nameSername']; ?></h2>
                            <div>
                                <div class="item-info">
                                    <span><?php echo $row['position']; ?></span>
                                    <span><?php echo $row['salary']; ?> ₽ (руб/мес)</span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <?php foreach ($skills as $skill): ?>
                                                    <li><?= htmlspecialchars(trim($skill)) ?></li>
                                                <?php endforeach; ?>
                                </ul>
                                <div class="button-container">
                                    <form action="editProfile.php" method="POST" enctype="multipart/form-data">
                                        <input name="id_spec" value="<?php echo $row['id']; ?>" hidden>
                                        
                                    <button type="submit" class="submit-btn">Отредактировать</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 



                $queryWork = "SELECT * FROM inviteClientSpec WHERE status = 'approved' AND spec_id = '$idSpec'";
                $resultWork = mysqli_query($connect, $queryWork);
                
                if (mysqli_num_rows($resultWork) > 0): 
                   $rowWork= mysqli_fetch_assoc($resultWork);
                   $clid = $rowWork['client_id'];

                   $userRequest = "SELECT * FROM users WHERE id='$clid'";
                   $resultUser = mysqli_query($connect, $userRequest);
                   $rowUser= mysqli_fetch_assoc($resultUser);
                    $clientComId = $rowUser['client_id'];

                   $comQuery = "SELECT * FROM communicationForm WHERE id='$clientComId'";
                   $resultCom = mysqli_query($connect,  $comQuery);
                   $rowCom= mysqli_fetch_assoc($resultCom);
                  



                   $idRequest = $rowWork['id_request'];
                   $queryRequest = "SELECT * FROM Requests WHERE id='$idRequest'";
                   $resultRequest = mysqli_query($connect, $queryRequest);
                   $rowRequest= mysqli_fetch_assoc($resultRequest);
            ?>
            <div class="applications-cards">
                <h3>Рабочее место</h3>
                <div class="specialists-items">
                    <div class="specialization-item">
                       <div class="item-description">
                        <h2 style="width: 500px;">Должность: <?php echo $rowRequest['position']; ?></h2>
                        <h2 style="width: 500px;">Компания: <?php echo $rowCom['nameCompany']; ?></h2>
                        <h2 style="width: 500px;">Начальник: <?php echo $rowCom['nameSername']; ?></h2>
                        <h2 style="width: 500px;">Зарплата: <?php echo $row['salary']; ?> ₽ (руб/мес)</h2>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>                                
               

            <div style="margin-left: 150px" class="selected-specialists">
                <h3>Подобранные вакансии</h3>
                
                <div class="applications-items">
                    <?php
                    $userid = $_SESSION['user']['id'];
                    $queryRequests = "SELECT * FROM inviteClientSpec WHERE spec_id = '$idSpec'";
                    $icsReq = mysqli_query($connect, $queryRequests);
                    
                    if (mysqli_num_rows($icsReq) > 0):
                    ?>
                    <?php while ($rowReq = mysqli_fetch_assoc($icsReq)): 
                
                        $idPos = $rowReq['id_request'];
                        $idClient = $rowReq['client_id'];
                        $queryReq = "SELECT * FROM Requests WHERE id= '$idPos'";
                        $resultReq = mysqli_query($connect, $queryReq);
                        $row1 = mysqli_fetch_assoc($resultReq);

                        $skillsArray1 = json_decode($row1['skills'], true);
                        $skills1 = array_slice($skillsArray, 0, 3);  

                            
                        
                        ?>
                    <div class="applications-item">
                        <div class="applications-description">
                            <h2 style="width: 300px;"><?php echo $row1['position'] ?></h2>
                            <div>
                                <div class="item-info">
                                    <span>Дата создания: <?php echo $row1['createdAt'] ?></span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <?php foreach ($skills1 as $skill): ?>
                                                <li><?= htmlspecialchars(trim($skill)) ?></li>
                                            <?php endforeach; ?>
                                </ul>
                                <form method='post' action="/back/request/approveRequest.php">
                                <div class="applications-button-container">
                                    <input name='id_spec' value='<?php echo $idSpec ?>' hidden>
                                    <input name='id_client' value='<?php echo $idClient ?>' hidden>
                                    <button class="submit-btn accept-btn" type="submit">Принять</button>
                                    <!-- <button class="submit-btn reject-btn">Отклонить</button> -->
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; ?>
                <?php else: ?>
                    <div style="margin-left: 25px;" class="applications-cards">
                <span style="font-size: 25px;">Нет активных заявок<span>
                <div class="specialists-items">
                    <div class="specialization-item">
                       
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
                <?php endif; ?> 
               
                    

                </div>
            </div>

              <?php endif; ?>                          

        </div>
    </main>

    <footer>
        <div class="header-logo">
            <strong>HUB</strong><strong style="color: #3CA0E7;">IT</strong>
        </div>
        <div class="footer-container">
            <div class="footer-contact">
                <a href="tel:+79008003535">+7 (900) 800-35 35</a><br>
                hubit.info@main.ru <br>
                Москва, проспект Программистов 25, <br> <span style="padding-left: 20px;">корпус А, офис 102</span>
            </div>
            <div class="footer-links">
                <div>
                    <a href="index.php#specialization">Специализации</a>
                    <a href="index.php#stack">Стек технологий</a>
                </div>
                <div>
                    <a href="vacancy.php">Вакансии</a>
                    <a href="index.php#about-company">Компания</a>
                </div>
                <div>
                    <a href="index.php#form-cons">Консультация</a>
                </div>
            </div>
            <a class="footer-up" href="#header">Наверх <span>↑</span></a>
        </div>
    </footer>

</body>

</html>