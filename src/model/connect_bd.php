<?php 
    function getConn() 
    {
        $servidor = "localhost";
        $port = "5432";
        $DBnom = "tdiw-n7";
        $usuari = "tdiw-n7";
        $clau = "CDLiysLz";
        $connexio = pg_connect("host=$servidor port=$port dbname=$DBnom user=$usuari password=$clau") or die("Error connexio DB");
        return($connexio);
    }
?>