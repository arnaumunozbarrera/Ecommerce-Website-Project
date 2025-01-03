<?php
    function getProductByCategoryId($con, $categoryId) : array
    {   
        $sql = "SELECT p.*, c.*
                FROM product p
                INNER JOIN category c ON p.categoryid = c.categoryid
                WHERE p.categoryid = $1
                ORDER BY p.brand";  

        $consulta = pg_query_params($con, $sql, [$categoryId]);

        if (!$consulta) {
            die("Error en la consulta: " . pg_last_error($con));
        }

        $res = pg_fetch_all($consulta);

        return $res ? $res : [];    
    }

    function getProductById($con, $productId) : array
    {   
        $sql = "SELECT *
                FROM product 
                WHERE productid = $1";

        $consulta = pg_query_params($con, $sql, [$productId]);

        if (!$consulta) {
            die("Error en la consulta: " . pg_last_error($con));
        }

        $res = pg_fetch_all($consulta);

        return $res ? $res : [];    
    }

    function searchLike($con, $query) : array 
    {
        $sql = "SELECT * FROM product WHERE productname ILIKE $1 OR brand ILIKE $1 OR description ILIKE $1 ";

        $consulta = pg_query_params($con, $sql, ['%' . $query . '%']);

        if (!$consulta) {
            die("Error en la consulta: " . pg_last_error($con));
        }
        $res = pg_fetch_all($consulta);

        return $res ? $res : []; 
    }

    function getHistoryByUsername($con, $username) : array
    {   
        $sql = "SELECT *
                FROM ticket 
                WHERE username = $1";

        $consulta = pg_query_params($con, $sql, [$username]);

        if (!$consulta) {
            die("Error en la consulta: " . pg_last_error($con));
        }

        $res = pg_fetch_all($consulta);

        return $res ? $res : [];    
    }
?>