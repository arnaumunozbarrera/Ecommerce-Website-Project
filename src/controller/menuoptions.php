<?php
    session_start();

    if (isset($_SESSION['username']))
    {
        require_once __DIR__.'/../view/menuoptions2.php';

        $name = $_SESSION['username'];

        if ($_GET['action'] == 'logout') 
        {
            unset($_SESSION['username']);
            unset($_SESSION['count']);
            header('Refresh: 1; URL=index.php');
        }
    }
    else 
    {
        require_once __DIR__.'/../view/menuoptions.php';
    }
?>