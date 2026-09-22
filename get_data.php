<?php 
    include("database_connection.php");

    $sql_query = "SELECT * FROM customers"; // mysql query language 

    $result = mysqli_query($conn,$sql_query);

    if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>" . $row["id"];
            echo "<br>" . $row["name"];
            echo "<br>" . $row["password"];
            echo "<br>" . $row["register_timestamp"];
        }


    }else{
        echo "table is empty";
    }

    // mysqli_close($conn);

?>