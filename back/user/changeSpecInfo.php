<?php 
require_once '../connect.php';
require_once '../user/helper.php';
session_start();


 $id_spec = $_POST['id_spec'];

 $about = $_POST['about'];
 $skills = $_POST['skills'];
 $exp = $_POST['exp'];
 $position = $_POST['pos'];
 $salary = $_POST['salary'];
 
 $skills = array_map('trim', explode(",", $skills));

 $skillsJson = json_encode($skills);

 var_dump($skillsJson);



$query = "UPDATE `CharacteristicsSpecialist` 
          SET About = '$about', skils = '$skillsJson', ExperienceInt = '$exp' 
          WHERE IdSpec = '$id_spec'";

$query1 = "UPDATE `contactForm` 
          SET salary = '$salary', skills = '$skillsJson'
          WHERE id = '$id_spec'";

mysqli_query($connect, $query1);

  if (mysqli_query($connect, $query)) {
    redirect('../../personal-account.php');
  }

?> 