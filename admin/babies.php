<?php

$db = new mysqli("localhost","root","","alo");






    


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $med=$_POST['med'];
       
        
    
        $inset_product="insert into b_info  (baby_name ,baby_dob, med_condition) values ('$name', '$dob', '$med')";
        $run_product=mysqli_query($db,$inset_product);
    
        if($run_product){
            echo "<script>alert('information inserted Successfully')</script>";
            echo "<script>window.open('index.php?view_babies','_self')</script>";
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
                    <form action="babies.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           
                            Name<input type="text" name="name" class="form-control" placeholder="enter your name" required="">
                        </div>
                        
                        <div class="form-group">
                            
                            DOB<input type="date" class="form-control" id="dob" placeholder="Your dob" name="dob" required="required" data-validation-required-message="Please enter your dob" />
                                <p class="help-block text-danger"></p>
                        </div>
                        
                    
                        <div class="form-group">
                           
                           Medical Condition<input type="text" name="med" class="form-control" placeholder="enter medical condition" required="">
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
