<?php 

    
    // setcookie("fav_food", "pizza", time() + 86400 * 2 , "/");
    // setcookie("fav_drink", "beer", time() + 86400 * 2 , "/");

    setcookie("fav_food", "pizza", time() - 0  , "/");
    setcookie("fav_drink", "beer", time() - 0  , "/");


    // for ($i=0 ; $i < 2  ; $i++ ) { 
    //     echo $_COOKIE[key($_COOKIE)[$i]];
    // }

    // foreach($_COOKIE as $key => $value){
    //     echo $key .+ "=" . $value . "<br>" ;  
    // }

    // $date = date("Y-m-d H:i:s", time());
    // echo $date;

    echo "<br>";
    if(isset($_COOKIE["fav_food"])){
        echo "buy some {$_COOKIE["fav_food"]}";
    }else{
        echo "i don't know your favourite snack";
    }

?>