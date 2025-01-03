<?php
    require_once __DIR__.'/../view/register.php';
    require_once __DIR__ .'/../model/insert_users.php'; 
    require_once __DIR__.'/../model/connect_bd.php';

    $conn=getConn();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'register') 
    {
        $DNI = $_POST['DNI'] ?? '';
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT) ?? '';
        $poblation = $_POST['poblation'] ?? '';
        $postalCode = $_POST['postalCode'] ?? '';
        $phoneNumber = $_POST['phoneNumber'] ?? '';
        $address = $_POST['address'] ?? '';

        $length_DNI_PHONE = 9;
        $length_POSTAL = 5;

        if(filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($DNI) == $length_DNI_PHONE 
            && strlen($phoneNumber) == $length_DNI_PHONE && strlen($postalCode) == $length_POSTAL)
        {
            $result = addUser($DNI, $username, $email, $password, $poblation, $postalCode, $phoneNumber, $address, $conn);
        }
        else 
        {
            $result = "Error registering user";
        }

        require_once __DIR__.'/../view/error.php';        
    }
?>