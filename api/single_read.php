<?php
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

// $data= json_decode(file_get_contents("php://input"), true);

// $id= $data['bid'];

$id = isset($_GET['id']) ? $_GET['id'] : die();
include "person.php";

$sql = "select * from personal_info where id= {$id}";
$db= new mysqli("localhost","root","","alo");

$result= mysqli_query($db, $sql);

if(mysqli_num_rows($result) > 0){

    $output= mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
    
}else{
    echo json_encode(array('message' => 'no record found', 'status' =>false));
}