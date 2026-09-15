<?php

//ROUTE PAR DEFAUT
//PATTERN : /
//URL : ?
//CTRL : pagesController
//ACTION : dashboard

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($connexion);
