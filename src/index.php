
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $action = $_GET['action'] ?? null;
    switch ($action) {
        case 'user':
            require __DIR__. '/login.php';
            break;
        case 'register':
            require __DIR__. '/register.php';
            break;
        case 'account':
            require __DIR__. '/account.php';
            break;
        case 'cart':
            require __DIR__. '/cartresum.php';
            break;
        case 'confirm':
            require __DIR__. '/confirm.php';
            break;
        case 'deletecart':
            require __DIR__. '/deletecart.php';
            break;
        case 'modify':
            require __DIR__. '/account.php';
            break;
        case 'upload':
            require __DIR__. '/upload.php';
            break;
        case 'history':
            require __DIR__. '/history.php';
            break;
        default:
            require __DIR__. '/home.php';
            break;
    }
?>