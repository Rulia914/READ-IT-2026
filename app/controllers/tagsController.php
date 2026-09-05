<?php

namespace App\Controllers\TagsController;
use \PDO;

function indexByPostIdAction(PDO $connexion, int $postId) : array
{
    include_once '../app/models/tagsModel.php';
    return \App\Models\TagsModel\findAllByPostId($connexion, $postId);
}