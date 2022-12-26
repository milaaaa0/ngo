<?php

include("include/db.php");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div><!-- navbar-header finish -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>
                
            </a><!-- dropdown-toggle finish -->
            
            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?user_profile>id=<?php echo $admin_id; ?>"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_info"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-envelope"></i> Information
                        
                        <span class="badge"> <?php echo $count_pro ; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_babies"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Newborn Babies
                        
                        <span class="badge"> <?php echo $count_cust ; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
               
                
                <li class="divider"></li>
                
                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
            </ul><!-- dropdown-menu finish -->
            
        </li><!-- dropdown finish -->
        
    </ul><!-- nav navbar-right top-nav finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?dashboard"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a><!-- a href finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Information
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="products" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?personal_info"> Personal Information </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_info"> View Information </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-edit"></i> Newborn babies
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="p_cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_babies"> Insert newborn babies info </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_babies"> View babies Information </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            
             
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Slides
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_slider"> Insert Slider </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_slider"> View Slider </a>
                    </li><!-- li finish -->
                    <a href="index.php?insert_about"> insert about </a>
                    </li><!-- li finish -->
                    <a href="index.php?view_about"> view about </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cause"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> cause
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="cause" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_cause"> Insert Cause </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_cause"> View Cause </a>
                    </li><!-- li finish -->
                    
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="index.php?insert_about"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> View About
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
           
            
            <li><!-- li begin -->
                <a href="index.php?view_donation"><!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i> View Donation
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#users"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Users
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="users" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_user"> Insert User </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_user"> View Users </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?edit_user?id=<?php echo $admin_id;?>"> Edit User Profile </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->

<?php } ?>