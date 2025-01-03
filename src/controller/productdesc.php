<?php
    session_start();

    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_products.php';
    
    $id = $_GET['product_id'];
    $con = getConn();
    $prod = getProductById($con, $id);

    require_once __DIR__.'/../view/productdesc.php'; 

    if($_GET['act'] == 'add') 
    {
        $name = $_SESSION['username'];

        if (isset($_SESSION['carrito'.$name][$prod['productid']])) 
        {
            $_SESSION['carrito'.$name][$prod['productid']]['quantity'] += 1; 
        } 
        else 
        {
            $_SESSION['carrito'.$name][$prod['productid']] = array(
                'name' => $prod['productname'],
                'brand' => $prod['brand'],
                'img' => $prod['path'],
                'quantity' =>1,
                'price' => $prod['price'], 
            );
        }
    }
?>