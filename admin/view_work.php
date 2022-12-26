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
                    <i class="fa fa-dashboard"></i> Dashboard/ view User
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> View User
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover-table-striped">
                            <thead>
                                <tr>
                                    <td> Id</td>
                                    <td>Worker Name</td>
                                    <td>Worker Age</td>
                                    <td>Worker Gender</td>
                                    
                                    <td>Worker Work</td>
                                    <td>Worker Incharge </td>
                                    <td> Delete</td>
                                    <td> Edit</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $db = new mysqli("localhost","root","","alo");
                                $i=0;
                                $get_user="select * from work";
                                $run_user=mysqli_query($db,$get_user);
                                while($row=mysqli_fetch_array($run_user)){
                                
                                    $id=$row['id'];
                                    $name=$row['w_name'];
                                    $age=$row['w_age'];
                                    $gender=$row['w_gender'];
                                    $work=$row['work'];
                                    $incharge=$row['w_incharge'];
                                    
                                   
                                    $i++;
                                    ?>
                               
                               <tr>
                                   
                               <td> <?php echo $i;?></td>
                               <td> <?php echo $name;?></td>
                               <td> <?php echo $age;?></td>
                               <td> <?php echo $gender;?></td>
                               <td> <?php echo $work;?></td>
                               
                               <td> <?php echo $incharge;?></td>
                               
                               
                               
                               
                               <td>
                                   <a href="index.php?delete_work=<?php echo $id;?>">
                                   <i class="fa fa-trash-o"></i> Delete
                                </a>
                               </td>
                               <td>
                                   <a href="index.php?edit_work=<?php echo $id;?>">
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