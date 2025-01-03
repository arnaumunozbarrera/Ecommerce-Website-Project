<?php
    function setCart($datetime, $totalcost, $name, $cartQuantity, $conn): string {
        
        $sql = "INSERT INTO \"ticket\" (datetime, totalcost, username, nitems) 
                VALUES ($1, $2, $3, $4)";

        $result = pg_query_params($conn, $sql, [$datetime, $totalcost, $name, $cartQuantity]);


        if ($result) {
            return "Cart confirmation successfull "; 
        } else {
            return "Error processing cart:" . pg_last_error($conn);
        }
    }
?>
