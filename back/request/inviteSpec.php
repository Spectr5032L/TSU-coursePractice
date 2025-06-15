<?php 
require_once '../connect.php';
require_once '../user/helper.php';
session_start();

var_dump($_POST);
 $id_spec = $_POST['id_spec'];
 $id_client = $_POST['id_client'];
 $id_req = $_POST['idPosition'];

$query = "INSERT INTO `inviteClientSpec` (client_id, spec_id, id_request ,status) VALUES ('$id_client','$id_spec','$id_req','invited')";

  if (mysqli_query($connect, $query)) {
    redirect('../../client-account.php');
  }

?> 