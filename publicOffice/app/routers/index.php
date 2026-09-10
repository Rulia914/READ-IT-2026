<?php
//AJOUT D'UN COMMENT
//PATTERN : ?comments=add
//URL : 
//CTRL : commentsController
//ACTION : store
if(isset($_GET['comments']) && $_GET['comments'] == 'add'):
    include_once '../app/controllers/commentsController.php';
    \App\Controllers\CommentsController\storeAction($connexion);

//PAGE CONTACT
//PATTERN : ?contact
//URL : 
//CTRL : 
//ACTION : 
elseif(isset($_GET['contact']) ):
    $title = "Contact";
    ob_start();
    include_once '../app/views/templates/partials/_contact.php';
    $content = ob_get_clean();


//DETAIL POST.show
//PATTERN : /posts/id/slug
//URL : ?posts=show&id=x
//CTRL : postsController
//ACTION : showAction
elseif(isset($_GET['posts']) ):
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