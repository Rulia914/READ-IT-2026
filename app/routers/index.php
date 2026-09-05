<?php

//DETAIL D'UN POSTE
//PATTERN : ?postID=x
//CTRL : postsController
//ACTION : showAction
if(isset($_GET['postId']) ):
    include_once '../app/controllers/postsController.php';
    App\Controllers\PostsController\showAction($connexion, $_GET['postId']);

//Route par défaut : les dix derniers posts
//PATTERN : /
//URL : ?
//CTRL : postsController
//ACTION : indexAction
else:
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($connexion);

endif;