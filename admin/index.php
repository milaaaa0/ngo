<?php
session_start();
$db = new mysqli("localhost","root","","alo");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{



?>
 <?php
  $admin_session=$_SESSION['admin_email'];
  $get_admin="select * from admin where a_email='$admin_session'";
  $run_admin=mysqli_query($db,$get_admin);
  $row_admin=mysqli_fetch_array($run_admin);
  $admin_id=$row_admin['a_id'];
 $admin_name=$row_admin['a_name'];
 $admin_email=$row_admin['a_email'];
  $admin_image=$row_admin['a_img'];

$get_pro="select * from personal_info ";
$run_pro=mysqli_query($db,$get_pro);
$count_pro=mysqli_num_rows($run_pro);


$get_cust="select * from b_info ";
$run_cust=mysqli_query($db,$get_cust);
$count_cust=mysqli_num_rows($run_cust);

$get_order="select * from donation";
$run_order=mysqli_query($db,$get_order);
$count_order=mysqli_num_rows($run_order);

$get_cause="select * from donation";
$run_cause=mysqli_query($db,$get_cause);
$count_cause=mysqli_num_rows($run_cause);

$get_work="select * from work";
$run_work=mysqli_query($db,$get_work);
$count_work=mysqli_num_rows($run_work);

$get_med="select * from health";
$run_med=mysqli_query($db,$get_med);
$count_med=mysqli_num_rows($run_med);

$get_edu="select * from edu";
$run_edu=mysqli_query($db,$get_med);
$count_edu=mysqli_num_rows($run_edu);


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <?php
    include 'include/sidebar.php';
    ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <?php
            if(isset($_GET['dashboard'])){
                include ('dashboard.php');
            }
            if(isset($_GET['personal_info'])){
                include ('personal.php');
            }
            if(isset($_GET['view_info'])){
                include ('view_info.php');
            }
            if(isset($_GET['edit_info'])){
                include 'edit_info.php';
            }
            if(isset($_GET['delete_info'])){
                include ('delete_info.php');
            }
            if(isset($_GET['insert_babies'])){
                include 'babies.php';
            }
            if(isset($_GET['view_babies'])){
                include ('view_babies.php');
            }
            if(isset($_GET['edit_babies'])){
                include ('edit_babies.php');
            }
            if(isset($_GET['delete_babies'])){
                include ('delete_babies.php');
            }
            if(isset($_GET['delete_user'])){
                include ('delete_user.php');
            }
            if(isset($_GET['insert_user'])){
                include ('insert_user.php');
            }
            if(isset($_GET['view_user'])){
                include ('view_user.php');
            }
            if(isset($_GET['edit_user'])){
                include ('edit_user.php');
            }
            if(isset($_GET['insert_slider'])){
                include ('insert_slider.php');
            }
            if(isset($_GET['view_slider'])){
                include ('view_slider.php');
            }
            if(isset($_GET['edit_slider'])){
                include ('edit_slider.php');
            }
            if(isset($_GET['delete_slider'])){
                include ('delete_slider.php');
            }
            if(isset($_GET['insert_about'])){
                include ('insert_abt.php');
            }
            if(isset($_GET['view_about'])){
                include ('view_abt.php');
            }
            if(isset($_GET['insert_cause'])){
                include ('insert_cause.php');
            }
            if(isset($_GET['view_cause'])){
                include ('view_cause.php');
            }
            if(isset($_GET['view_donation'])){
                include ('view_donation.php');
            }
            if(isset($_GET['view_work'])){
                include ('view_work.php');
            }
            if(isset($_GET['view_med'])){
                include ('view_med.php');
            }
            if(isset($_GET['view_edu'])){
                include ('view_edu.php');
            }




           ?>


        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
 <?php 
}  
?>