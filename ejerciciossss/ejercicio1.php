<?php
class Client{

var $name;
Var $age;
var $city;

public function __construct(){}
}
#objeto a json 
$client = new client();
$client->name = "camila" ;
$client->age = 21;
$client->city = "San Lorenzo";

$code_json = json_encode($client);
echo $code_json;
?>