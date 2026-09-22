<?php

namespace App\Controllers\CategoriesController;

use \PDO;
use \App\Models\CategoriesModel;
include '../app/models/categoriesModel.php';
function indexAction(PDO $connexion){
    
    $categories= CategoriesModel\findAll($connexion);

    GLOBAL $content, $title;
    $title = "Gestion des catégories";

    ob_start();
    include '../app/views/categories/index.php';
    $content=ob_get_clean();
}