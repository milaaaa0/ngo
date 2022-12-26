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
                    <i class="fa fa-dashboard"></i> Dashboard/ view Education
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> View Education
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover-table-striped">
                            <thead>
                                <tr>
                                    <td> Id</td>
                                    <td> Name</td>
                                    <td></td>Age</td>
                                    <td>Instructor</td>
                                    
                                    <td>Camp no </td>
                                    
                                 
                                    
                                    <td> Delete</td>
                                    <td> Edit</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $db = new mysqli("localhost","root","","alo");
                                $i=0;
                                $get_user="select * from edu";
                                $run_user=mysqli_query($db,$get_user);
                                while($row=mysqli_fetch_array($run_user)){
                                
                                    $id=$row['e_id'];
                                    $name=$row['e_name'];
                                    $age=$row['e_age'];
                                    $instructor=$row['e_instructor'];
                                    $camp=$row['e_camp'];
                                   
                                    
                                   
                                    $i++;
                                    ?>
                               
                               <tr>
                                   
                               <td> <?php echo $i;?></td>
                               <td> <?php echo $name;?></td>
                               <td> <?php echo $age;?></td>
                               <td> <?php echo $instructor;?></td>
                           
                               <td> <?php echo $camp;?></td>
                               
                               
                               <td>
                                   <a href="index.php?delete_edu=<?php echo $id;?>">
                                   <i class="fa fa-trash-o"></i> Delete
                                </a>
                               </td>
                               <td>
                                   <a href="index.php?edit_edu=<?php echo $id;?>">
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