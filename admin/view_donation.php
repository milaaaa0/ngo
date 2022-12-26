<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{

?>
<div class="row">
        
        <div class="col-lg-12">
            <div class="breadcrumb">
                <li class="active">
                    <l class="fa fa-dashboard"></l>
                  view Donation
                </li>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <div class="panel panel default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa a-money fa-w"></i> view Donation
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover-table-striped">
                            <thead>
                                <tr>
                                <th> Donation no</th>
                                    <th>  name</th>
                                    <th> email </th>
                                    <th>Amount</th>
                                    
                                   
                                    <th>customer delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $db = new mysqli("localhost","root","","alo");
                                $i=0;
                                $get_c="select * from donation";
                                $run_c=mysqli_query($db,$get_c);
                                while($row=mysqli_fetch_array($run_c)){
                                    $c_id=$row['id'];
                                    $c_name=$row['d_name'];
                                   
                                    $c_email=$row['d_email'];
                                    $amnt=$row['d_amnt'];
                                    
                                    
                                    
                                    $i++;
                                    ?>
                                    <tr>
                                   
                                   <td> <?php echo $i;?></td>
                                   <td> <?php echo $c_name;?></td>
                                   <td><?php echo $c_email;?></td>
                                  
                                   <td ><?php echo $amnt; ?></td>
                                 
                                   <td>
                                   <a href="index.php?delete_donation=<?php echo $id;?>">
                                   <i class="fa fa-trash-o"></i> Delete
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