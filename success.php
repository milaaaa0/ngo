<?php
$db= new mysqli("localhost","root","","alo");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $tran=$_POST['tran_id'];
    $name=$_POST['cus_name'];
    $email=$_POST['cus_email'];
    $amnt=$_POST['amount'];
    
    $query ="INSERT INTO donation (d_tran, d_name, d_email, d_amnt) VALUES ('$tran', '$name', '$email', '$amnt') ";
    $run = mysqli_query($db, $query);
    
    if($run){

    echo "<script> alert('donation done succesfully')</script>";
    echo "<script>window.open('donate.php','_self')</script>";
    }

   
   
    
    //  $paystatus=$_POST['pay_status'];
    //  $amount=$_POST['amount'];


    
    
}