<?php
$db = new mysqli("localhost","root","","alo");

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
                    Dashboard/View Newborn babies Information
                </li>
            </div>
        </div>
</div>
<div class="row">
        

        <div class="col-lg-12">
            <div class="panel panel default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa a-money fa-w"></i> Insert Information
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover-table-striped">
                            <thead>
                                <tr>
                                <td>Baby Id</td>
                                    <td>Baby Name</td>
                                    <td>Baby DOB </td>
                                    <td>Medical Condition</td>
                                    <td>Baby Delete</td>
                                    <td>Baby Edit</td>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                $get_p_cat="select * from b_info";
                                $run_p_cat=mysqli_query($db,$get_p_cat);
                                while($row=mysqli_fetch_array($run_p_cat)){
                                    $id=$row['id'];
                                    $name=$row['baby_name'];
                                    $dob=$row['baby_dob'];
                                    $med=$row['med_condition'];
                                    
                                    $i++;
                                    ?>
                                    <tr>
                                   
                                   <td> <?php echo $i;?></td>
                                   <td> <?php echo $name;?></td>
                                   <td> <?php echo $dob;?></td>
                                   
                                   <td> <?php echo $med;?></td>
                                   <td>
                                   <a href="index.php?delete_babies=<?php echo $id;?>">
                                   <i class="fa fa-trash-o"></i> Delete
                                </a>
                               </td>
                               <td>
                                   <a href="index.php?edit_babies=<?php echo $id;?>">
                                   <i class="fa fa-pencil"></i> Edit
                                </a>
                               </td>
                              
                               </tr>
                               <?php }?>

                            </tbody>
                        </table>

                        </div>
                </div>
            </div>
        </div>

</body>
</html>


<?php } ?>