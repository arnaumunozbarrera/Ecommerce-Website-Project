<?php

    function getUserByUsername($username, $conn): array
    {
        $sql = "SELECT * 
                FROM \"user\" 
                WHERE \"username\" = $1";
        $consulta = pg_query_params($conn, $sql, [$username]);

        if (!$consulta) {
            die("Error en la consulta: " . pg_last_error($con));
        }

        $res = pg_fetch_all($consulta);

        return $res ? $res : []; 
    }

    function userCorrect($username, $password, $conn): string {
        $sql = "SELECT password FROM \"user\" WHERE \"username\" = $1";
        $result = pg_query_params($conn, $sql, [$username]);

        if (pg_num_rows($result) < 1) {
            return "User does not exist";
        }

        $row = pg_fetch_assoc($result);
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            return "Successful login";
        }
        else {
            return "Invalid username or password";
        }
    }
?>