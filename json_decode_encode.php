
<?php 

    // $age = array("Peter" => 35, "Ben" => 27 , "lin" => 43);

    // echo json_encode($age);
    // {"Peter":35,"Ben":27,"lin":43} json object

    // $cars = array("Toyota", "BMW", "Mercedes");

    // echo json_encode($cars);
    // ["Toyota","BMW","Mercedes"] json array 



    $jsonObj = '{"Peter":35,"Ben":27,"lin":43}';

    // $phpobject = json_decode($jsonObj);
    $phpAssoArray = json_decode($jsonObj, true);

    // echo $phpAssoArray["Peter"];
    // echo $phpAssoArray["Ben"];
    // echo $phpAssoArray["lin"];


    // echo $phpobject->Peter; 
    // echo $phpobject->Ben;
    // echo $phpobject->lin;
    //  var_dump($phpobject);

    // foreach($phpobject as $key => $value ){
    //     echo $key . "=>" . $value . "\n"; 
    // }


    // $jsonArray = '["Toyota","BMW","Mercedes"]'; 
    // $phpobject = json_decode($jsonArray);

    // var_dump($phpobject);

    // foreach($phpAssoArray as $key=>$value){
    //     echo $key . "\n";  
    // }
?>