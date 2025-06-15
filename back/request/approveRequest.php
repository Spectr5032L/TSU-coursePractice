<?php 
require_once '../connect.php';
require_once '../user/helper.php';
session_start();

var_dump($_POST);
 $id_spec = $_POST['id_spec'];
 $id_client = $_POST['id_client'];
 



$query = "UPDATE `inviteClientSpec` 
          SET status = 'approved' 
          WHERE client_id = '$id_client' 
            AND spec_id = '$id_spec'";

$query1 = "UPDATE `contactForm` 
          SET status = 'accept' 
          WHERE id ='$id_spec'";

mysqli_query($connect, $query1);

  if (mysqli_query($connect, $query)) {
    redirect('../../personal-account.php');
  }

?> 