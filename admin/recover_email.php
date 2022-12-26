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
            <h2 class="form-login-heading">Admin login recovery</h2>
            <input type="text" class="form-control" name="admin_email" placeholder="email" required><br>
         
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">Send Mail


            </button>
            
        </form>
    </div>



</body>
</html>
<?php
if(isset($_POST['admin_login'])){
    $email=mysqli_real_escape_string($db,$_POST['admin_email']);
    

    $emailquery= "select * from admin where a_email='$email'";
    $query=mysqli_query($db, $emailquery);

    $emailcount= mysqli_num_rows($query);

    if($emailcount){
        $userdata= mysqli_fetch_array($query);
        $username=$userdata['a_name'];
        $token=$userdata['a_token'];


        $subject="pasword reset";
        $body = "Hi, $username. Click here to reset your password http://localhost/alo/admin/reset_pass.php?a_token=$token";
        $sender_email= "From: nusratshameema@gmail.com";

        if(mail($email,$subject,$body,$sender_email)){
            echo "<script>alert('check your mail')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        } else{
            echo "<script> alert('email sending fail..')</script>";
        }
    }
}
?>