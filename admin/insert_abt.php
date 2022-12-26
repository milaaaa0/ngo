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
                    Dashboard/Insert About
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
                        <i class="fa a-money fa-w"></i> About
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           
                        
                        
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">About us</label>
                           <textarea name="abt" id="" cols="6" rows="19"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Mission</label>
                           <textarea name="mission" id="" cols="6" rows="19"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Vission</label>
                           <textarea name="vission" id="" cols="6" rows="19"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">image</label>
                            <input type="file" name="image" class="form-control" required="">
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
    
    $about=$_POST['abt'];
    $mission=$_POST['mission'];
    $vission=$_POST['vission'];

    $img=$_FILES['image']['name'];
   


    $temp_name1=$_FILES['image']['tmp_name'];
    

    move_uploaded_file($temp_name1, "abt_img/$img");
    

    $inset_product="insert into about (abt,mission,vission, abt_img) values ('$about', '$mission', '$vission','$img')";
    $run_product=mysqli_query($db,$inset_product);

    if($run_product){
        echo "<script>alert('updated Successfully')</script>";
        echo "<script>window.open('index.php?view_about','_self')</script>";
    }
   
}
?>
<?php } ?>