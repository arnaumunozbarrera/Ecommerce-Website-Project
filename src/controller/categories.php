<?php
    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_categories.php';
    
    $con = getConn();
    $categories = getCategories($con);
    
    foreach ($categories as &$category) 
    {
        $category['categoryname'] = htmlentities($category['categoryname'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    require_once __DIR__.'/../view/categories.php';  
?>