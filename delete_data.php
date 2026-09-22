<?php 

    include("database_connection.php");

    $sql = " DELETE FROM customers WHERE name = 'ye yint oo' ";
    

    try{
        mysqli_query($conn, $sql);
        echo "user has been deleted";
    }catch(mysqli_sql_exception $e){
        echo "error";
    }finally{
        mysqli_close($conn);
    }


?>