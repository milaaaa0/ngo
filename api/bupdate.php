<?php
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods Authorization, X-Request-With ");

$data= json_decode(file_get_contents("php://input"), true);
$db= new mysqli("localhost","root","","alo");

$id=$data['bid'];
$name= $data['name'];
$dob= $data['dob'];
$med= $data['med'];

include "babies.php";

$sql="update b_info set baby_name ='{$name}', baby_dob ='{$dob}', med_condition ='{$med}' where id ='{$id}'";

if(mysqli_query($db, $sql)){
    echo json_encode(array('message' => 'record updated', 'status' => true));
}else{
    echo json_encode(array('message' => 'no record found', 'status' => false));
}