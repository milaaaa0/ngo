
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Method: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With ");

include('person.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];
if($requestMethod == 'GET'){

    $baby= getPersonList();
    echo $baby;

}else{
    $data = [
        'status' =>405,
        'message' => $requestMethod. 'Method not allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}