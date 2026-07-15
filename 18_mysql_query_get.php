<?php 
include("database.php");

// $sql_query = "SELECT * FROM users WHERE user_name = 'adadad'";
$sql_query = "SELECT * FROM users";

$result = mysqli_query($conn, $sql_query); 

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){ // get more than one row
        echo "<br>". $row['id'] . "<br>";
        echo $row['user_name']. "<br>";
        echo $row['reg_date']. "<br>";
    }
}else{
    echo "no user found";
}


mysqli_close("$conn");

?>