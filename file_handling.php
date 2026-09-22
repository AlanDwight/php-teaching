<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$data =  json_decode($jsonobj);
echo $data->Peter;
?>