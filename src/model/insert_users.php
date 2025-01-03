<?php
    function addUser(
        $DNI,
        $username,
        $email,
        $password,
        $poblation,
        $postalCode,
        $phoneNumber,
        $address,
        $conn
    ): string {
        $checkQuery = "SELECT 1 FROM \"user\" WHERE \"DNI\" = $1 OR username = $2 OR email = $3 OR \"phoneNumber\" = $4";
        $checkResult = pg_query_params($conn, $checkQuery, [$DNI, $username, $email, $phoneNumber]);

        if (pg_num_rows($checkResult) > 0) {
            return "DNI, Email, Username or Phone number already used";
        }

        $sql = "INSERT INTO \"user\" (username, email, password, poblation, \"postalCode\", \"phoneNumber\", \"DNI\", \"address\") 
                VALUES ($1, $2, $3, $4, $5, $6, $7, $8)";

        $result = pg_query_params($conn, $sql, [$username, $email, $password, $poblation, $postalCode, $phoneNumber, $DNI, $address]);

        if ($result) 
        {
            return "Successfull register"; 
        } 
        else 
        {
            return "Error registering user" . pg_last_error($conn);
        }
    }

    function updateUser(
        $DNI,
        $username,
        $email,
        $password,
        $poblation,
        $postalCode,
        $phoneNumber,
        $address,
        $conn
    ): string {
        $sql = "UPDATE \"user\" 
                SET email = $1, 
                    password = $2, 
                    poblation = $3, 
                    \"postalCode\" = $4, 
                    \"phoneNumber\" = $5, 
                    \"address\" = $7 
                WHERE \"DNI\" = $6";
    
        $result = pg_query_params($conn, $sql, [$email, $password, $poblation, $postalCode, $phoneNumber, $DNI, $address]);
    
        if ($result) 
        {
            return "Successfull modify"; 
        } 
        else 
        {
            return "Error modifying user" . pg_last_error($conn);
        }
    }

    function insertImg(
        $username,
        $img,
        $conn
    ): string {
        $sql = "UPDATE \"user\" 
                SET img = $1 
                WHERE \"username\" = $2";
    
        $result = pg_query_params($conn, $sql, [$img, $username]);
    
        if ($result) 
        {
            return "Successfull insert"; 
        } 
        else 
        {
            return "Error inserting image" . pg_last_error($conn);
        }
    }
?>
