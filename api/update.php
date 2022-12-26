<?php
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods Authorization, X-Request-With ");

$data= json_decode(file_get_contents("php://input"), true);
$db= new mysqli("localhost","root","","alo");

$id=$data['id'];
$name= $data['name'];
$dob= $data['dob'];
$d_name=$data['d_name'];
$m_name=$data['m_name'];
$gender=$data['gender'];
$status=$data['status'];


include "person.php";

$sql="update personal_info set person_name ='{$name}', person_dob ='{$dob}', dad_name ='{$d_name}', mom_name='{$m_name}', person_gender='{$gender}', person_status='{$status}' where id ='{$id}'";

if(mysqli_query($db, $sql)){
    echo json_encode(array('message' => 'record updated', 'status' => true));
}else{
    echo json_encode(array('message' => 'no record found', 'status' => false));
}