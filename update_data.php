<?php 

    include("database_connection.php");

    $sql = "UPDATE customers SET name = 'thinzar' WHERE id = 3 ";
    
    try{
        mysqli_query($conn, $sql);
        echo "user data has been updated";
    }catch(mysqli_sql_exception $e){
        echo "error";
    }finally{
        mysqli_close($conn);
    }


?>