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
                                    <td>Admin Id</td>
                                    <td>Admin Name</td>
                                    <td>Admin Email</td>
                                    <td>Admin Contact</td>
                                    
                                    <td>Admin Image</td>
                                    
                                    <td>Admin Delete</td>
                                    <td>Admin Edit</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $db = new mysqli("localhost","root","","alo");
                                $i=0;
                                $get_user="select * from admin";
                                $run_user=mysqli_query($db,$get_user);
                                while($row=mysqli_fetch_array($run_user)){
                                
                                    $id=$row['a_id'];
                                    $name=$row['a_name'];
                                    $mail=$row['a_email'];
                                    $contact=$row['a_contact'];
                                    $img=$row['a_img'];
                                    
                                   
                                    $i++;
                                    ?>
                               
                               <tr>
                                   
                               <td> <?php echo $i;?></td>
                               <td> <?php echo $name;?></td>
                               <td> <?php echo $mail;?></td>
                               <td> <?php echo $contact;?></td>
                               
                               <td><img src="admin_img/<?php echo $img ?>" width="80 " height="80"></td>
                               
                               <td>
                                   <a href="index.php?delete_user=<?php echo $id;?>">
                                   <i class="fa fa-trash-o"></i> Delete
                                </a>
                               </td>
                               <td>
                                   <a href="index.php?edit_user=<?php echo $id;?>">
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