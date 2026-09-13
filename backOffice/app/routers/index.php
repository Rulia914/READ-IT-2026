<?php

//DETAIL POST.show
//PATTERN : /posts/id/slug
//URL : ?posts=show&id=x
//CTRL : postsController
//ACTION : showAction
if(isset($_GET['posts']) ):
    include_once '../app/routers/posts.php';

//Route par défaut : les dix derniers posts
//PATTERN : /
//URL : ?
//CTRL : postsController
//ACTION : indexAction
else:
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($connexion);

endif;