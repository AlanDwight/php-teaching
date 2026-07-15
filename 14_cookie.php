<?php 

    setcookie("fav_food", "pizza", time() + 86400 * 2 , "/");
    setcookie("fav_drink", "beer", time() + 86400 * 2 , "/");
    // setcookie("fav_food", "pizza", time() - 0  , "/");
    // setcookie("fav_drink", "beer", time() - 0  , "/");

    foreach($_COOKIE as $key => $value){
        echo $key . "=" . $value . "<br>" ;  
    }

    if(isset($_COOKIE["fav_food"])){
        echo "buy some {$_COOKIE["fav_food"]}";
    }else{
        echo "i don't know your favourite snack";
    }

?>