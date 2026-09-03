<?php
//Route par défaut : les dix derniers posts
//PATTERN : /
//URL : ?
//CTRL : postsController
//ACTION : indexAction

include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($connexion);