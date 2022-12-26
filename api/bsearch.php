<?php
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

// $data= json_decode(file_get_contents("php://input"), true);

// $search= $data['search'];
$search = isset($_GET['search']) ? $_GET['search'] : die();

include "babies.php";

$sql = "select * from b_info where baby_name LIKE '%{$search}%'";
$db= new mysqli("localhost","root","","alo");

$result= mysqli_query($db, $sql);

if(mysqli_num_rows($result) > 0){

    $output= mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
    
}else{
    echo json_encode(array('message' => 'no search found', 'status' =>false));
}