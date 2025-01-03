<?php 
    session_start();
        
    require_once __DIR__.'/../view/login.php';
    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_users.php'; 

    $conn=getConn();

    if (!isset($_SESSION['count']))
    {
        $_SESSION['count'] = 0;
    }
    else 
    {
        $_SESSION['count']++;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'user') 
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $result = userCorrect($username, $password, $conn);

        if ($result == 'Successful login')
        {
            $_SESSION['username'] = $username;
            $name = $_SESSION['username'];

            if (!isset($_SESSION['carrito'.$name]))
            {
                $_SESSION['carrito'.$name] = array();
            }

        } 
        else 
        {
            unset($_SESSION['count']);
        }

        require_once __DIR__.'/../view/error.php';
    }
?>

