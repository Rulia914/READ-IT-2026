<?php
//PAGE CONTACT
//PATTERN : ?contact
//URL : 
//CTRL : 
//ACTION : 
if(isset($_GET['contact']) ):
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