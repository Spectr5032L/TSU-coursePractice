<?php
require 'back/user/helper.php';


if($_SESSION['user']['role'] == 'spec' )
{
    redirect('personal-account.php');
}
else if ($_SESSION['user']['role'] == 'client') {
    redirect('client-account.php');
} else {
    redirect('auth.php');
}

