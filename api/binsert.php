<?php
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods Authorization, X-Request-With ");

$data= json_decode(file_get_contents("php://input"), true);
$db= new mysqli("localhost","root","","alo");

$name= $data['name'];
$dob= $data['dob'];
$med= $data['med'];

include "babies.php";

$sql="insert into b_info(baby_name, baby_dob, med_condition) values ( '{$name}', '{$dob}','{$med}')";

if(mysqli_query($db, $sql)){
    echo json_encode(array('message' => 'record inserted', 'status' => true));
}else{
    echo json_encode(array('message' => 'no record found', 'status' => false));
}