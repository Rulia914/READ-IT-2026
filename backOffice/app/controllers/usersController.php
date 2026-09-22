<?php

namespace App\Controllers\UsersController;

use \PDO;
use \App\Models\UsersModel;

include '../app/models/usersModel.php';

function logoutAction()
{
    unset($_SESSION["user"]);
    header('Location: ' . PUBLIC_BASE_URL);
}
