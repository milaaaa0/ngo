<?php

$db= new mysqli("localhost","root","","alo");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<div class="row"><!-- row no: 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
        
    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row no: 2 begin -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_pro; ?> </div>
                           
                        <div> People </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?view_info"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-green"><!-- panel panel-green begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_edu; ?> </div>
                           
                        <div> Education </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?view_edu"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-green finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-orange"><!-- panel panel-yellow begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tags fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_work; ?> </div>
                           
                        <div> Work </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?view_work"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-yellow finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-red"><!-- panel panel-red begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-shopping-cart fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_med; ?> </div>
                           
                        <div> Medical </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?view_med"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-red finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
</div><!-- row no: 2 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-8"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-money fa-fw"></i> Donations
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                        
                         <thead>
                                <tr>
                                <th> Donation no</th>
                                    <th>  name</th>
                                    <th> email </th>
                                    <th>Amount</th>
                                    
                               
                                </tr>
                            </thead>
                        
                        <tbody>
                            <!-- tbody begin -->
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

                               
                                
                            </tr><!-- tr finish -->
                           
                            
                                



                            
                           
                           
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
                
                <div class="text-right"><!-- text-right begin -->
                    
                    <a href="index.php?view_donation"><!-- a href begin -->
                        
                        View All Donations <i class="fa fa-arrow-circle-right"></i>
                        
                    </a><!-- a href finish -->
                    
                </div><!-- text-right finish -->
                
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-8 finish -->
    
    <div class="col-md-4"><!-- col-md-4 begin -->
        <div class="panel"><!-- panel begin -->
            <div class="panel-body"><!-- panel-body begin -->
                <div class="mb-md thumb-info"><!-- mb-md thumb-info begin -->

                    <img src="admin_img/<?php echo $admin_image ; ?> " height="400" width="400" alt="admin-thumb-info" class=" img-responsive" >
                    
                    <div class="thumb-info-title"><!-- thumb-info-title begin -->
                       
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        <!-- <span class="thumb-info-type"> <?php echo $admin_job; ?></span> -->

                        
                    </div><!-- thumb-info-title finish -->

                </div><!-- mb-md thumb-info finish -->
                
                <div class="mb-md"><!-- mb-md begin -->
                    <div class="widget-content-expanded"><!-- widget-content-expanded begin -->
                        <i class="fa fa-user"></i> <span> Email: </span><?php echo $admin_email; ?> <br/>
                        <!-- <i class="fa fa-flag"></i> <span> Country: </span> <?php echo $admin_country; ?> <br/>
                        <i class="fa fa-envelope"></i> <span> Contact: </span> <?php echo $admin_contact; ?> <br/> -->
                    </div><!-- widget-content-expanded finish -->
                    
                    <hr class="dotted short">
                    
                  <!-- /  <h5 class="text-muted"> <?php echo $admin_about; ?></h5> -->
                    
                    <!-- <p>p begin
                        
                       
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloribus tempore non ut velit, nesciunt totam, perspiciatis corrupti expedita nulla aut necessitatibus eius nisi. Unde quasi, recusandae doloribus minus quisquam.
                        
                    </p>p finish -->
                    
                </div><!-- mb-md finish -->
                
            </div><!-- panel-body finish -->
        </div><!-- panel finish -->
    </div><!-- col-md-4 finish -->
    
</div><!-- row no: 3 finish -->

<?php } ?>