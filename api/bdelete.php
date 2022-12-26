<?php
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods Authorization, X-Request-With ");

$data= json_decode(file_get_contents("php://input"), true);

$id= $data['bid'];

include "babies.php";

$sql = "delete from b_info where id= {$id}";
$db= new mysqli("localhost","root","","alo");



if(mysqli_query($db, $sql)){
    echo json_encode(array('message' => 'deleted', 'status' =>true));
}
    
else{
    echo json_encode(array('message' => 'no record found', 'status' =>false));
}