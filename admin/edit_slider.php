<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{
    ?>
<?php


    $db = new mysqli("localhost","root","","alo");
    if(isset($_GET['edit_slider'])){
         $edit_id=$_GET['edit_slider'];
         $get_p="select * from slider where s_id='$edit_id'";
         $run_edit=mysqli_query($db,$get_p);
         $row_edit=mysqli_fetch_array($run_edit);
         $p_id=$row_edit['s_id'];
         $name=$row_edit['s_name'];
         
         
         $picture=$row_edit['s_img'];
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
                    <i class="fa fa-dashboard"></i> Dashboard/ edit Slider
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
                        <i class="fa fa-money fa-fw"></i> Edit Slider
                </div>

                <div class="panel-body">
                    <form action="edit_slider.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Name</label>
                            <div class="col-md-3">
                            <input type="text" name="slider_name" class="form-control" required values="<?php echo $name; ?>">
                        </div>
                        </div>
                        
                            
                            
                       
                        
                       
                        
                        
                    
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label"> Image </label>
                            <div class="col-md-6">
                            <input type="file" name="picture" class="form-control" required="">
                            <br><img src="slider_img/<?php echo $picture;?>" width="70" height="70" alt="">
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

    $name=$_POST['slider_name'];
    
    
   
    $picture=$_FILES['picture']['name'];
    


    $temp_name1=$_FILES['picture']['tmp_name'];
    

    move_uploaded_file($temp_name1, "slider_img/$picture");
   

    $update_product = "update slider set s_name='$name', s_img='$picture' where s_id='$p_id'";

    $run_product=mysqli_query($db,$update_product);

    if($run_product){
        echo "<script>alert('User has been edited Successfully')</script>";
        echo "<script>window.open('index.php?view_slider')</script>";
    }
   
}
?>
<?php } ?>


