<?php
namespace App\Models\UsersModel;

use \PDO;

function findOneByLogindAndPwd(PDO $connexion, array $userData){
    $sql=' SELECT id, firstname, lastname
            FROM users
            WHERE login = :login
            AND pwd = :pwd;
    ';
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
    $rs->bindValue(':pwd', $_POST['pwd'], PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}