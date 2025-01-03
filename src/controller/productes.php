<?php
    session_start();

    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_products.php';
    
    $cat = intval($_GET['cat_id']);
    $con = getConn();
    $prods = getProductByCategoryId($con, $cat);
    
    require_once __DIR__.'/../view/productes.php'; 
?>