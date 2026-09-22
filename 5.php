<?php 

    $name = "aung naing min";
    $pattern = "/[an]/i";

    $name = preg_replace($pattern, "w", $name);

    echo $name; 

?>