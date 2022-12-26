<?php

$db = new mysqli("localhost","root","","alo");




?>

    
<?php

    if(isset($_POST['submit'])){
        $name=$_POST['p_name'];
        $dob=$_POST['dob'];
        $d_name=$_POST['d_name'];
        $m_name=$_POST['m_name'];
        $gender=$_POST['gender'];
        $status=$_POST['status'];
    
        $picture=$_FILES['picture']['name'];
        
    
        $temp_name1=$_FILES['picture']['tmp_name'];
       
    
        move_uploaded_file($temp_name1, "p_image/$picture");
        
    
        $inset_product="insert into personal_info (person_name ,person_dob, dad_name, mom_name, person_gender, person_status, p_img) values ('$name', '$dob', '$d_name' ,'$m_name', '$gender' ,'$status' ,'$picture')";
        $run_product=mysqli_query($db,$inset_product);
    
        if($run_product){
            echo "<script>alert('Product inserted Successfully')</script>";
            echo "<script>window.open('index.php?view_info','_self')</script>";
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
                    <form action="personal.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           
                            Name<input type="text" name="p_name" class="form-control" placeholder="enter your name" required="">
                        </div>
                        
                        <div class="form-group">
                            
                            DOB<input type="date" class="form-control" id="dob" placeholder="Your dob" name="dob" required="required" data-validation-required-message="Please enter your dob" />
                                <p class="help-block text-danger"></p>
                        </div>
                        
                    
                        <div class="form-group">
                           
                           Fathers Name<input type="text" name="d_name" class="form-control" placeholder="enter your father's name" required="">
                        </div>
                        <div class="form-group">
                           
                           Mothers Name<input type="text" name="m_name" class="form-control" placeholder="enter your mother's name" required="">
                        </div>
                        <div class="form-group">
                        Gender<br>
                        <input type="radio" name="gender" id="male" value="male" > Male<br>
      <input type="radio" name="gender" id="female" value="female"> Female<br>
      
                                <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                        Status<br>
                        <input type="radio" name="status" id="single" value="single" > single<br>
      <input type="radio" name="status" id="married" value="married"> Married<br>
      <input type="radio" name="status" id="widowed" value="widowed"> Widowed<br>
    
      

      
                                <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                             Image 
                            <input type="file" name="picture" class="form-control" required="">
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
