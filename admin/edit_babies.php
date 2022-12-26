<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{
    ?>
<?php


    $db = new mysqli("localhost","root","","alo");
    if(isset($_GET['edit_babies'])){
         $edit_id=$_GET['edit_babies'];
         $get_p="select * from b_info where id='$edit_id'";
         $run_edit=mysqli_query($db,$get_p);
         $row_edit=mysqli_fetch_array($run_edit);
         $id=$row_edit['id'];
         $name=$row_edit['baby_name'];
         $dob=$row_edit['baby_dob'];
         $med=$row_edit['med_condition'];
        
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
                            <input type="text" name="name" class="form-control" required values="<?php echo $name; ?>">
                        </div>
                        </div>
                        
                            
                            
                       
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">DOB</label>
                            <div class="col-md-3">
                            <input type="date" name="dob" class="form-control" required="<?php echo $dob;?>">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Medical Condition</label>
                            <div class="col-md-3">
                            <input type="text" name="med" class="form-control" required="<?php echo $med;?>">
                        </div>
                            </div>
                        
                        
                        
                        <div class="form-group">
                        <label for="" class="col-md-3 control-label"></label>
                        <div class="col-md-3">

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

    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $med=$_POST['med'];
    

   

    $update_product = "update b_info set baby_name='$name', baby_dob='$dob',
    med_condition='$med' where id ='$id'";

    $run_product=mysqli_query($db,$update_product);

    if($run_product){
        echo "<script>alert('Information has been edited Successfully')</script>";
        echo "<script>window.open('index.php?view_babies')</script>";
    }
   
}
?>
<?php } ?>


