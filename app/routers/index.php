<?php
//Route par défaut : les dix derniers posts
//PATTERN : 
//URL : ?
//CTRL : postsController
//ACTION : index

include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\index($connexion);