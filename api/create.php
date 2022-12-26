<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once 'database.php';
include_once 'person.php';
$database = new Database();
$db = $database->getConnection();
$item = new person($db);


$item->name = $_GET['person_name'];
$item->dob = $_GET['person_dob'];
$item->d_name = $_GET['dad_name'];
$item->m_name = $_GET['mom_name'];
$item->gender = $_GET['person_gender'];
$item->status = $_GET['person_status'];
if($item->createEmployee()){
echo 'Employee created successfully.';
} else{
echo 'Employee could not be created.';
}
?>