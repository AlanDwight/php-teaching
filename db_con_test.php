<?php 

    $db_host_name = "localhost";
    $db_user_name = "root";
    $db_password_name = "";
    $db_name = "test_database";

    try {
        //code...
        $query = "select * from customers_list";
        $conn = mysqli_connect($db_host_name, $db_user_name, $db_password_name, $db_name);
        
        $result =  mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["username"] . "<br>";
                echo $row["password"] . "<br>";
            }
        }

        if($conn){
            echo "db connected";
        }
    } catch (mysqli_sql_exception) {
        //throw $th;

        echo "can't connect";
    }



?>