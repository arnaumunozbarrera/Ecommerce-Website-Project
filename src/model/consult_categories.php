<?php
    function getCategories($con) : array
    {
        $sql = "SELECT * FROM category order by categoryid";
        $consulta = pg_query($con, $sql) or die("Error sql");
        $res = pg_fetch_all($consulta);
        
        return $res;
    }
?>