<?php 
require_once '../connect.php';
require_once '../user/helper.php';
session_start();
$position = $_POST['pos'];
$skills = $_POST['skills'];

$clid= $_SESSION['user']['id'];

$position = mysqli_real_escape_string($connect, $position);
$skills_json = mysqli_real_escape_string($connect, json_encode($skills));

 $query = "INSERT INTO `Requests` (position, skills, createdAt, client_id) VALUES ('$position', '$skills_json', NOW(), '$clid')";

  if (mysqli_query($connect, $query)) {
    redirect('../../client-account.php');
  }

?> 