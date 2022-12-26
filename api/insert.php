<?php
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods Authorization, X-Request-With ");

include "person.php";
$data= json_decode(file_get_contents("php://input"), true);
$db= new mysqli("localhost","root","","alo");

$name= $data['name'];
$dob= $data['dob'];
$d_name= $data['d_name'];
$m_name=$data['m_name']
// $gen=$data['gen'];
// $sta=$data['sta'];



$sql="insert into personal_info(person_name, person_dob, dad_name, mom_name, person_gender, person__status) values ( '{$name}', '{$dob}','{$d_name}', '{$m_name}', '{$gen}', '{$sta}')";

if(mysqli_query($db, $sql)){
    echo json_encode(array('message' => 'record inserted', 'status' => true));
}else{
    echo json_encode(array('message' => 'no record found', 'status' => false));
}