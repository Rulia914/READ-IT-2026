<?php

namespace App\Controllers\CommentsController;
use \PDO;

function indexByPostIdAction(PDO $connexion, int $postId) 
{
    include_once '../app/models/commentsModel.php';
    $comments = \App\Models\CommentsModel\findAllByPostId($connexion, $postId);
    include '../app/views/templates/comments/indexByPostId.php';
}