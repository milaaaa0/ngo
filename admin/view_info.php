<?php

include("include/db.php");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{
    ?>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard/ view info
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> View Information
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover-table-striped">
                            <thead>
                                <tr>
                                    <td>Person Id</td>
                                    <td>Person Name</td>
                                    <td>Person DOB</td>
                                    <td>Person Father's Name</td>
                                    
                                    <td>Person Mother's Name</td>
                                    <td>Person Gender</td>
                                    <td>Person Status</td>
                                    <td>Person Image</td>
                                    <td>Person Delete</td>
                                    <td>Person Edit</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $db = new mysqli("localhost","root","","alo");
                                $i=0;
                                $get_product="select * from personal_info";
                                $run_p=mysqli_query($db,$get_product);
                                while($row=mysqli_fetch_array($run_p)){
                                
                                    $p_id=$row['id'];
                                    $p_name=$row['person_name'];
                                    $p_dob=$row['person_dob'];
                                    $d_name=$row['dad_name'];
                                    $m_name=$row['mom_name'];
                                    $p_gender=$row['person_gender'];
                                    $p_status=$row['person_status'];
                                    $p_image=$row['p_img'];
                                   
                                    $i++;
                                    ?>
                               
                               <tr>
                                   
                               <td> <?php echo $i;?></td>
                               <td> <?php echo $p_name;?></td>
                               <td> <?php echo $p_dob;?></td>
                               <td> <?php echo $d_name;?></td>
                               <td> <?php echo $m_name;?></td>
                               <td> <?php echo $p_gender;?></td>
                               <td> <?php echo $p_status;?></td>
                               <td><img src="p_image/<?php echo $p_image ?>" width="80 " height="80"></td>
                               
                               <td>
                                   <a href="index.php?delete_info=<?php echo $p_id;?>">
                                   <i class="fa fa-trash-o"></i> Delete
                                </a>
                               </td>
                               <td>
                                   <a href="index.php?edit_info=<?php echo $p_id;?>">
                                   <i class="fa fa-pencil"></i> Edit
                                </a>
                               </td>
                               </tr>
                               <?php
                               }?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php } ?>  