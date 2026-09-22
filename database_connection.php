<!-- how to handle database connection  -->

<?php 

    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "customer_database";

    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }catch(mysqli_sql_exception $e){
        echo "Connection failed";
    }

    if($conn){
        // echo "[+] Connected to database!";
    }
    
?>