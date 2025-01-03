<?php
    session_start(); 

    require_once __DIR__.'/../model/connect_bd.php'; 
    require_once __DIR__.'/../model/consult_users.php';
    require_once __DIR__ .'/../model/insert_users.php'; 

    $conn = getConn();
    $name = $_SESSION['username'];
    $account = getUserByUsername($name, $conn);

    require_once __DIR__.'/../view/account.php';

    $befDNI = $account['DNI'];
    $befusername = $account['username'];
    $befemail = $account['email'];
    $befpassword = $account['password'];
    $befpoblation = $account['poblation'];
    $befpostalCode = $account['postalCode'];
    $befphoneNumber = $account['phoneNumber'];
    $befaddress = $account['address'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'modify') 
    {
        $DNI = $_POST['DNI'] ?? '';
        if ($DNI == '')
            $DNI = $befDNI;

        $username = $_POST['username'] ?? '';
        if ($username == '')
            $username = $befusername;

        $email = $_POST['email'] ?? '';
        if ($email == '')
            $email = $befemail;

        $password = $_POST['password'];
        if (password_verify($password,$befpassword) || $password == null || $password == '' ) 
        {
            $password = $befpassword;
        } 
        else 
        {
            $password = password_hash($password, PASSWORD_BCRYPT);
        }

        $poblation = $_POST['poblation'] ?? '';
        if ($poblation == '')
            $poblation = $befpoblation;

        $postalCode = $_POST['postalCode'] ?? '';
        if ($postalCode == '')
            $postalCode = $befpostalCode;

        $phoneNumber = $_POST['phoneNumber'] ?? '';
        if ($phoneNumber == '')
            $phoneNumber = $befphoneNumber;

        $address = $_POST['address'] ?? '';
        if ($address == '')
            $address = $befaddress;

        $length_DNI_PHONE = 9;
        $length_POSTAL = 5;

        if(filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($DNI) == $length_DNI_PHONE 
            && strlen($phoneNumber) == $length_DNI_PHONE && strlen($postalCode) == $length_POSTAL)
        {
            $result = updateUser($DNI, $username, $email, $password, $poblation, $postalCode, $phoneNumber, $address, $conn);
            require_once __DIR__.'/../view/error.php';    
            header('Refresh: 1; URL=index.php?action=account');
            // header("Location: ".$_SERVER['PHP_SELF']."?t=".time());
        }
        else {
            $result = "Error modifying user";
            require_once __DIR__.'/../view/error.php';    
        }
    }
?>