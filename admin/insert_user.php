<?php

$db = new mysqli("localhost","root","","alo");






    


    if(isset($_POST['submit'])){
        $name=$_POST['u_name'];
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $contact=$_POST['contact'];
        
        $image=$_FILES['image']['name'];
        
    
        $temp_name1=$_FILES['image']['tmp_name'];
       
    
        move_uploaded_file($temp_name1, "admin_img/$image");
        
       
        
    
        $insert = "insert into admin  (a_name ,a_email, a_pass, a_contact, a_img) values ('$name', '$mail', '$pass', '$contact', '$image')";
        
        $run = mysqli_query($db,$insert);
    
        if($run){
            echo "<script>alert('One user inserted Successfully')</script>";
            echo "<script>window.open('index.php?view_user','_self')</script>";
        }
       
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    


<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  
<script>tinymce.init({selector:'textarea'});</script>
<link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        
        <div class="col-lg-12">
            <div class="breadcrumb">
                <li class="active">
                    <l class="fa fa-dashboard"></l>
                    Dashboard/Insert product
                </li>
            </div>
        </div>
    
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <div class="panel panel default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa a-money fa-w"></i> Insert Product
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="insert_user.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           
                            Name<input type="text" name="u_name" class="form-control" placeholder="enter your name" required="">
                        </div>
                        
                        <div class="form-group">
                            
                            Email<input type="email" class="form-control"  placeholder="Your email" name="mail" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                        </div>
                        
                    
                        <div class="form-group">
                           
                           Password<input type="password" name="pass" class="form-control" placeholder="enter password" required="">
                        </div>
                        <div class="form-group">
                           
                           contact<input type="number" name="contact" class="form-control" placeholder="enter Contact number" required="">
                        </div>
                        
                        <div class="form-group">
                           
                           Image<input type="file" name="image" class="form-control" placeholder="" required="">
                        </div>

                        
                               
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary form-control" id="">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3">


        </div>
    </div>




</body>
</html>
