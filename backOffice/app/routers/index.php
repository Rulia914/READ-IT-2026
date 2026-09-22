<?php
//ROUTE USERS
//URL: ?users=xxx
//ROUTER: users

if(isset($_GET['users'])):
    include_once '../app/routers/users.php';
    
//ROUTE PAR DEFAUT
//PATTERN : /
//URL : ?
//CTRL : pagesController
//ACTION : dashboard
else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($connexion);

endif;