<?php
    session_start();

    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_products.php';

    $conn = getConn();
    $name = $_SESSION['username'];

    if(isset($_GET['action']) && $_GET['action'] == 'history') 
    {
        $history = getHistoryByUsername($conn, $name);
        require_once __DIR__ . '/../view/history.php';
    }
?>

