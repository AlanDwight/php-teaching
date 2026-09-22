<?php 

    session_start();

    $_SESSION["user_name"] = "alan";
    $_SESSION["is_login"] = true; 

    echo "User login";

?>