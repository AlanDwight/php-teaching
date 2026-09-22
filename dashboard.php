<?php
session_start();

// Check if user is logged in

// if (!empty($_SESSION['is_login'])) {
//     echo "Welcome back, " . htmlspecialchars($_SESSION['user_name']);
// } else {
//     echo "Please log in first.";
// }

foreach($_SESSION as $key => $value){
    echo $key . " : " . $value . "<br>";
}


// Log out user (cleanup)
// session_unset();   // Free all session variables
// session_destroy(); // Destroy the session on server
?>
