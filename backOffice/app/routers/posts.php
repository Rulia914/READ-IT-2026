<?php
//?posts=show&id=$1

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';

switch ($_GET['posts']) {
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
        break;
    default:
        PostsController\indexAction($connexion);
        break;

}