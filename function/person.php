<?php


// $errorname = $erroremail = $errorphone = $genderErr = $addressErr = "";
// $name = $email = $phone = $gender = $address = "";

// $anyErr = false;

$con = mysqli_connect('localhost', 'root', '');

// check conn
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// create db
$db ="alo";
$sql = "CREATE DATABASE IF NOT EXISTS $db;";

mysqli_query($con, $sql);

// use ngo db for further queries
mysqli_select_db($con, $db);

// $table_name = "personal_info";
// $sql = "CREATE TABLE IF NOT EXISTS
//     $table_name(
//         Firstname VARCHAR(50) NOT NULL,
//         Lastname VARCHAR(50) NOT NULL,
//         Email VARCHAR(50) PRIMARY KEY,
//         Contact VARCHAR(10),
//         Password VARCHAR(30)
//     )";

// mysqli_query($con, $sql);

// echo 'table created';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $d_name = $_POST['d_name'];
    $m_name = $_POST['m_name'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    // echo $fname, $lname, $email, $phone, $password;





    // insert query
    $sql = "INSERT INTO $personal_info (name, age, dob, d_name, m_name, gender, status, email, pass) values (?,?,?,?,?,?,?,?,?);";
    $pst = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($pst, "sssssssss", $name, $age, $dob, $d_name, $m_name, $gender, $status, $email, $pass);

    if (mysqli_stmt_execute($pst)) {
        echo "<script> alert('Successfully registered! Please login now.'); </script>";
    }
    else{
        echo "<script> alert('unSuccessfully registered! Please login now.'); </script>";
    }


    mysqli_close($con);

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<?php

?>