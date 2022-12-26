<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{

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
                    Dashboard/Cause
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
                        <i class="fa a-money fa-w"></i> Cause
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                           
                           
                        
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label" placeholder='food'>Food</label>
                           <textarea name="food" id="" cols="9" rows="19"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label" placeholder='water'>Water  </label>
                           <textarea name="water" id="" cols="6" rows="19"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label" placeholder='care'>health</label>
                           <textarea name="health" id="" cols="6" rows="19"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label" placeholder='edcation'>edu</label>
                           <textarea name="edu" id="" cols="6" rows="19"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label" placeholder='residence'>residence</label>
                           <textarea name="residence" id="" cols="6" rows="19"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label" placeholder='social'>soccial</label>
                           <textarea name="social" id="" cols="6" rows="19"></textarea>
                        </div>
                        
                        
                        
                        
                        
                       
                        <div class="form-group">
                            <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" id="">
                            
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
<?php
$db = new mysqli("localhost","root","","alo");
if(isset($_POST['submit'])){
    
    $food=$_POST['food'];
    $water=$_POST['water'];
    $health=$_POST['health'];
    $edu=$_POST['edu'];
    $residence=$_POST['residence'];
    $social=$_POST['social'];

    



    $inset_product="insert into cause (food, water,health, edu, residence, social) values ('$food', '$water', '$health', '$edu', '$residence', '$social')";
    $run_product=mysqli_query($db,$inset_product);

    if($run_product){
        echo "<script>alert('updated Successfully')</script>";
        echo "<script>window.open('index.php?view_cause','_self')</script>";
    }
   
}
?>
<?php } ?>