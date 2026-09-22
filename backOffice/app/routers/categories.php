<?php


use \App\Controllers\CategoriesController;

include_once '../app/controllers/categoriesController.php';

switch ($_GET['categories']) {
    default:
        CategoriesController\indexAction($connexion);
        break;
}