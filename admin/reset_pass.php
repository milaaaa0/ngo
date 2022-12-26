<?php 
session_start();
$db= new mysqli("localhost", "root",  "","alo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action=""method="post" class="form-login">
            <h2 class="form-login-heading">Password recovery</h2>
            <input type="password" class="form-control" name="pass" placeholder="Password" required><br>
         
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">Update Password


            </button>
            
        </form>
    </div>



</body>
</html>
<?php
if(isset($_POST['admin_login'])){

    if(isset($_GET['a_token'])){
    
        $token= $_GET['a_token'];
    

        $pass= mysqli_real_escape_string($db, $_POST['pass']);
   
        if($pass){
             $updatequery= "update admin set a_pass='$pass' where a_token='$token'";
             $iquery= mysqli_query($db, $updatequery );

             if($iquery){
                echo "<script>alert('password updated')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }else{
                echo "<script>alert('password not updated')</script>";

            }
        }
    }
}