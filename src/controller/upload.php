<?php
    session_start();

    require_once __DIR__.'/../model/connect_bd.php';
    require_once __DIR__.'/../model/insert_users.php';

    $conn = getConn();
    $name = $_SESSION['username'];
    $target_dir = "/images/users/";
    $target_dir_abs= "/home/TDIW/tdiw-n7/public_html/images/users/";
    $target_file = $target_dir_abs . basename($_FILES["fileToUpload"]["name"]);
    $target_dir = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $uploadOk = ($check !== false) ? 1 : 0;

    if ($uploadOk == 0) 
    {
        echo "Sorry, your file was not uploaded.";
    } 
    else 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        insertImg($name, $target_dir, $conn);
        header("Location: index.php?action=account");
?>
    <br/>
    <img src="<?=$target_dir  ?>" alt="Profile img">  
<?php
        } 
        else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
?>