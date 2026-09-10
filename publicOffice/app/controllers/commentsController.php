<?php

namespace App\Controllers\CommentsController;
use \PDO;

function indexByPostIdAction(PDO $connexion, int $postId) 
{
    include_once '../app/models/commentsModel.php';
    $comments = \App\Models\CommentsModel\findAllByPostId($connexion, $postId);
    include '../app/views/templates/comments/indexByPostId.php';
}

function storeAction(PDO $connexion)
{
    include_once '../app/models/commentsModel.php';
    $id= \App\Models\CommentsModel\insertOne($connexion);

    //header('location: ?postId='. $post_id);
    GLOBAL $content, $title;
    $title='Thanks $_POST["pseudo"]';
    ob_start();
        include "../app/views/templates/comments/store.php";
    $content = ob_get_clean();
}