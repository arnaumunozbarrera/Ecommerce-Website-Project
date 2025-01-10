<?php
    session_start(); 

    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_users.php'; 
    require_once __DIR__.'/../model/consult_products.php'; 

    if (isset($_SESSION['username']) && (isset($_GET['action'])) && ($_GET['action'] == 'logout'))
    {
        $name = $_SESSION['username'];
        header('Refresh: 1; URL=index.php');
    }
    else if (isset($_SESSION['username'])) 
    {
        $name = $_SESSION['username'];
    } 
    else 
    {
        $name = "User";
    }

    $conn = getConn();
    $r = getUserByUsername($name, $conn);

    require_once __DIR__.'/../view/navbar.php';  

    if (isset($_GET['query'])) 
    {
        $query = $_GET['query'];
        $prods = searchLike($conn, $query);

        if ($prods && sizeof($prods) >= 1)
        {
            require_once __DIR__.'/../view/productes.php';
        }
        else 
        {
            echo "<p style='color: white; font-size: 24px; text-align: center'>No items found for this search</p>";
        }
    }
?>

