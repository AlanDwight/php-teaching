<!-- handle database -->

<?php 
    $db_server = "localhost";
    $db_user = "root"; 
    $db_password = "";
    $db_name = "userdb";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    }catch(mysqli_sql_exception){
        // echo "database connection error<br>";
    }

    if($conn){
        echo "you are connencted";
    }else {
        // echo "couldn't established connection";
    }

    // echo "<br><br><br>";
?>

