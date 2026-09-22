<?php 
    $filename = "newData.txt";

    $file = fopen( $filename, 'a') or die("error: can't read the file");
    $txt = "\nnew data\n"; 
    fwrite($file, $txt);

    fclose($file);

?>