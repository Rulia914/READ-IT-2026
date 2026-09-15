<?php

namespace App\Controllers\UsersController;

use \PDO;
use \App\Models\UsersModel;
include_once '../app/models/usersModel.php';

function loginFormAction(PDO $connexion)
{
    global $content, $title;
    $title = "Login Form";
    ob_start();
    include '../app/views/templates/users/usersLoginForm.php';
    $content = ob_get_clean();
}

function loginAction(PDO $connexion, array $userData)
{   //On va chercher le user qui correspond
    $user = UsersModel\findOneByLogindAndPwd($connexion, $userData);
    //si pas, on redirige vers le loginform
    if(!$user) :
         header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
     //sinon on redirige vers le dashboard
    else :
     header('location:'. ADMIN_BASE_URL);
    endif;
}
