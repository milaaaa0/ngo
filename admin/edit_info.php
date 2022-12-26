<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{
    ?>
<?php


    $db = new mysqli("localhost","root","","alo");
    if(isset($_GET['edit_info'])){
         $edit_id=$_GET['edit_info'];
         $get_p="select * from personal_info where id='$edit_id'";
         $run_edit=mysqli_query($db,$get_p);
         $row_edit=mysqli_fetch_array($run_edit);
         $p_id=$row_edit['id'];
         $name=$row_edit['person_name'];
         $dob=$row_edit['person_dob'];
         $d_name=$row_edit['dad_name'];
         $m_name=$row_edit['mom_name'];
         $gender=$row_edit['person_gender'];
         $status=$row_edit['person_status'];
         $picture=$row_edit['picture'];
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
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard/ edit Information
                </li>
            </ol>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Edit Information
                    </h3>
                </div>

                <div class="panel-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Name</label>
                            <div class="col-md-3">
                            <input type="text" name="p_name" class="form-control" required values="<?php echo $name; ?>">
                        </div>
                        </div>
                        
                            
                            
                       
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">DOB</label>
                            <div class="col-md-3">
                            <input type="date" name="dob" class="form-control" required="<?php echo $dob;?>">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Fathers Name</label>
                            <div class="col-md-3">
                            <input type="text" name="d_name" class="form-control" required="<?php echo $d_name;?>">
                        </div>
                            </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Mothers Name</label>
                            <div class="col-md-3">
                            <input type="text" name="m_name" class="form-control" required="<?php echo $m_name;?>">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-3">
                      
                        <input type="radio" name="gender" id="male" value="male" > Male<br>
      <input type="radio" name="gender" id="female" value="female"> Female<br>
      
                                <p class="help-block text-danger"></p>
                        </div></div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Status</label>
                            <div class="col-md-3">
                           
                        <input type="radio" name="status" id="single" value="single" > single<br>
      <input type="radio" name="status" id="married" value="married"> Married<br>
      <input type="radio" name="status" id="widowed" value="widowed"> Widowed<br>
    
                                <p class="help-block text-danger"></p>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label"> Image </label>
                            <div class="col-md-6">
                            <input type="file" name="picture" class="form-control" required="">
                            <br><img src="p_image/<?php echo $picture;?>" width="70" height="70" alt="">
                        </div>
                            </div>
                        <div class="form-group">
                        <label for="" class="col-md-3 control-label"></label>
                        <div class="col-md-6">

                            <input type="submit" name="submit" value="Update Info" class="btn btn-primary form-control" id="">
                            
                        </div>
                        </div>
                        
                            </form>
                            </div>
                            </div></div>

</div>



</body>
</html>

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
    

    move_uploaded_file($temp_name1, "p_img/$picture");
   

    $update_product = "update personal_info set person_name='$name', person_dob='$dob',
    dad_name='$d_name', mom_name='$m_name', person_gender='$gender', person_status='$status', p_img='$picture' where id='$p_id'";

    $run_product=mysqli_query($db,$update_product);

    if($run_product){
        echo "<script>alert('Product has been edited Successfully')</script>";
        echo "<script>window.open('index.php?view_info')</script>";
    }
   
}
?>
<?php } ?>


