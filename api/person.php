<?php
// require 'database.php';

function getPersonList(){

    $db= new mysqli("localhost","root","","alo");

    $query= "select * from personal_info";
    $run= mysqli_query($db, $query);

    if($run){
        if(mysqli_num_rows($run) > 0){

            $res=mysqli_fetch_all($run, MYSQLI_ASSOC);

            $data = [
                'status' =>200,
                'message' => 'person fetched Successfully',
                'data' => $res,
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);

        }else{
            $data = [
                'status' =>404,
                'message' => 'no person found',
            ];
            header("HTTP/1.0 404 no person found");
            return json_encode($data);
        }

    }
    else{
        $data = [
            'status' =>500,
            'message' => 'internal Server down',
        ];
        header("HTTP/1.0 500 Method Not Allowed");
        return json_encode($data);
    }
}




