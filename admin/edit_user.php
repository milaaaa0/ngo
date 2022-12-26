<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{
    ?>
<?php


    $db = new mysqli("localhost","root","","alo");
    if(isset($_GET['edit_user'])){
         $edit_id=$_GET['edit_user'];
         $get_p="select * from admin where a_id='$edit_id'";
         $run_edit=mysqli_query($db,$get_p);
         $row_edit=mysqli_fetch_array($run_edit);
         $p_id=$row_edit['a_id'];
         $name=$row_edit['a_name'];
         $mail=$row_edit['a_email'];
         $pass=$row_edit['a_pass'];
         $contact=$row_edit['a_contact'];
         
         $picture=$row_edit['a_img'];
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
                            <label for="" class="col-md-3 control-label">Email</label>
                            <div class="col-md-3">
                            <input type="email" name="mail" class="form-control" required="<?php echo $mail;?>">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Password</label>
                            <div class="col-md-3">
                            <input type="password" name="pass" class="form-control" required="<?php echo $pass;?>">
                        </div>
                            </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Contact</label>
                            <div class="col-md-3">
                            <input type="number" name="contact" class="form-control" required="<?php echo $contact;?>">
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
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $contact=$_POST['contact'];
   
    $picture=$_FILES['picture']['name'];
    


    $temp_name1=$_FILES['picture']['tmp_name'];
    

    move_uploaded_file($temp_name1, "admin_img/$picture");
   

    $update_product = "update admin set a_name='$name', a_email='$mail', a_pass='$pass', a_contact='$contact', a_img='$picture' where id='$p_id'";

    $run_product=mysqli_query($db,$update_product);

    if($run_product){
        echo "<script>alert('User has been edited Successfully')</script>";
        echo "<script>window.open('index.php?view_user')</script>";
    }
   
}
?>
<?php } ?>


