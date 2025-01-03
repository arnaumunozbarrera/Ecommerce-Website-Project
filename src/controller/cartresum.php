<?php
    session_start();

    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_products.php';

    $name = $_SESSION['username'];

    require_once __DIR__ . '/../view/cartresum.php';
    
    if(isset($_GET['action']) && $_GET['action'] == 'deletecart') 
    {

        unset($_SESSION['carrito'.$name]);

        require_once __DIR__ . '/../view/cartresum.php';

        header('Refresh: 1; URL=index.php?action=cart');
    }

    $id = $_GET['product_id'];

    if($_GET['act'] == 'removeitem') 
    {
        unset($_SESSION['carrito'.$name][$id]);

        require_once __DIR__ . '/../view/cartresum.php';
    }

    if($_GET['act'] == 'modifyquant') 
    {
        $value = $_GET['value'];
        $_SESSION['carrito'.$name][$id]['quantity'] = $value;
        require_once __DIR__ . '/../view/cartresum.php';
    }
?>

