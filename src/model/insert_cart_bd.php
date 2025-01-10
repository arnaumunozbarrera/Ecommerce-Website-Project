<?php
    function setCart($datetime, $totalcost, $name, $cartQuantity, $conn): string {
        
        $sql = "INSERT INTO \"ticket\" (datetime, totalcost, username, nitems) 
                VALUES ($1, $2, $3, $4)
                RETURNING ticketid";

        $result = pg_query_params($conn, $sql, [$datetime, $totalcost, $name, $cartQuantity]);


        if ($result) {
            $row = pg_fetch_assoc($result);
            return $row['ticketid'];
        } else {
            return "Error processing cart:" . pg_last_error($conn);
        }
    }

    function setTicketLine($ticketid, $productid, $price, $quantity, $name, $conn): string
    {
        $sql = "INSERT INTO \"ticketline\" (ticketid, productid, price, quantity, name) 
                VALUES ($1, $2, $3, $4, $5)";

        $result = pg_query_params($conn, $sql, [$ticketid, $productid, $price, $quantity, $name]);

        if (!$result) {
            error_log("Error inserting ticket line: " . pg_last_error($conn));
            return false;
        }
    
        return true;
    }
?>
