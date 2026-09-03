<?php

namespace App\Controllers\PostsController;
use \PDO;

function index(PDO $connexion)
{
    include_once '../app/models/postsModel.php';
    $posts=\App\Models\PostsModel\findAll($connexion);
    $recentsPosts = \App\Models\PostsModel\findAllByDate($connexion);
    global $title, $content;
    $title = 'Accueil';

    
    foreach ($posts as $post) {
        $timestamp = strtotime($post['created_at'] ?? 'now');
        
        $post[] = [
            'id'      => $post['id'],
            'title'   => $post['title'],
            'image' => 'images/' . $post['image'],
            'day'   => date('d', $timestamp),
            'month' => date('F', $timestamp),
            'year'  => date('Y', $timestamp)
        ];
    }

    ob_start();
    include '../app/views/templates/posts/index.php';
    $content = ob_get_clean();
}
