<?php
    session_start();

    require_once __DIR__ .'/../model/connect_bd.php';
    require_once __DIR__ .'/../model/insert_cart_bd.php';

    $con = getConn();
    $name = $_SESSION['username'];
    
    if (isset($_GET['action']) && $_GET['action'] == 'confirm' && isset($_SESSION['carrito'.$name])) 
    {
        $datetime = date('d-m-Y H:i:s');

        foreach ($_SESSION['carrito' . $name] as $productid => $productDetails) 
        {
            $cartQuantity += $productDetails['quantity'];
            $string = str_replace('.', '', $productDetails['price']);
            $string = str_replace(',', '.', $string);
            $float = (float) $string;
            $totalcost += $float * $productDetails['quantity'];
        }

        $result = setCart($datetime, $totalcost, $name, $cartQuantity, $con);

        if ($result)
        {
            // echo $result;
            unset($_SESSION['carrito'.$name]);
            require_once __DIR__ . '/../view/confirmpage.php';
        }
    } 
    else 
    {
        $result = "Can't confirm an empty cart";
        require_once __DIR__ . '/../view/confirmpage.php';
    }
?>