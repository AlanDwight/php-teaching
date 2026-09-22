<?php

    $jsonFile= "user_data.json";
    $csvFile = "user_data.csv";
    
    
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);

    if(!empty($data)){
        $fp = fopen($csvFile, 'w'); 


        fputcsv($fp, array_keys($data[0]));

        foreach($data as $row){
            fputcsv($fp, $row);
        }

        fclose($fp);
        echo "sucessful file conversion";

    }else{
        echo "empty json data";
    }


?>