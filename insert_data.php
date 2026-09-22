<?php 
    include("database_connection.php");

    $username = "ye yint oo"; 
    $password = "yeyintoo123"; // plaintext password

    $hash = password_hash($password, PASSWORD_DEFAULT);

    // sql statment 
    $sql = "INSERT INTO customers (name, password) VALUES ('$username', '$hash')";

    // handle query error gracefully 

    try{
        mysqli_query($conn, $sql);
        echo "User is now registered and the table has been updated"; 
    }catch(mysqli_sql_exception $e){
        echo "<br> error updating to the database <br>";
    }finally{
        mysqli_close($conn);
    }

    

    // CRUD OPERATION 

    // CREATE
    // RETRIEVE
    // UPDATE 
    // DELETE
?>