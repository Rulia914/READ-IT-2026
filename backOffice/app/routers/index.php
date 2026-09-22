<?php
//ROUTE CATEGORIES.INDEX
//PATTERN: categories/
//URL: ?categories=xxx
//CTRL : categoriesController
//Action: index
if(isset($_GET['categories'])):
    include_once '../app/routers/categories.php';


//ROUTE USERS
//URL: ?users=xxx
//ROUTER: users
elseif(isset($_GET['users'])):
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