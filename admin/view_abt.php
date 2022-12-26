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
                    Dashboard/View About
                </li>
            </div>
        </div>
</div>
<div class="row">
        

        <div class="col-lg-12">
            <div class="panel panel default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa a-money fa-w"></i> About
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover-table-striped">
                            <thead>
                                <tr>
                                <td> Id</td>
                                    <td>About</td>
                                    <td>Mission</td>
                                    <td>Vission</td>
                                    <td>Image</td>
                                    <td>Baby Delete</td>
                                    <td>Baby Edit</td>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                $get_p_cat="select * from about";
                                $run_p_cat=mysqli_query($db,$get_p_cat);
                                while($row=mysqli_fetch_array($run_p_cat)){
                                    $id=$row['abt_id'];
                                    $about=$row['abt'];
                                    $mission=$row['mission'];
                                    $vission=$row['vission'];
                                    $img=$row['abt_img'];
                                    
                                    $i++;
                                    ?>
                                    <tr>
                                   
                                    <td> <?php echo $i;?></td>
                               <td> <?php echo $about;?></td>
                               <td> <?php echo $mission;?></td>
                               <td> <?php echo $vission;?></td>
                               
                               <td><img src="abt_img/<?php echo $img ?>" width="80 " height="80"></td>
                                   <td>
                                   <a href="index.php?delete_abt=<?php echo $id;?>">
                                   <i class="fa fa-trash-o"></i> Delete
                                </a>
                               </td>
                               <td>
                                   <a href="index.php?edit_abt=<?php echo $id;?>">
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