<?php

namespace App\Controllers\PostsController;
use \PDO;
use \App\Models\PostsModel;

function indexAction(PDO $connexion)
{
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connexion);
    $recentsPosts = \App\Models\PostsModel\findAllByDate($connexion);

    global $title, $content;
    $title = 'Blog';

    ob_start();
    include '../app/views/templates/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id)
{
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id); 

    global $title, $content;
    $title = $post['title'];    

    ob_start();
    include '../app/views/templates/posts/show.php';
    $content = ob_get_clean();
    }
