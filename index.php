<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ALO</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+8801521564889</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>alongo.org@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">ALO</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                           
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Facilities</a>
                            <div class="dropdown-menu">
                                
                                <a href="edu.php" class="dropdown-item">Education</a>
                                <a href="med.php" class="dropdown-item">Medical</a>
                                <a href="recruitment.php" class="dropdown-item">Recruitment</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                            <div class="dropdown-menu">
                            <a href="about.php" class="dropdown-item">About Us</a>
                                
                            <a href="team.php" class="dropdown-item">Meet The Team</a>

                                
                            </div>
                        </div>
                        <a href="causes.php" class="nav-item nav-link">Causes</a>
                       
                        <a href="blog.php" class="nav-item nav-link">Gallery</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Donation</a>
                            <div class="dropdown-menu">
                                
                                <a href="donate.php" class="dropdown-item">Donate Now</a>
                                <a href="volunteer.php" class="dropdown-item">Become A Volunteer</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <!-- <a  href="login.php" class="nav-item nav-link">
                                    <i class="fas fa-user " ></i> </a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
     
        <div class="carousel">
    
         
            <div class="container-fluid">
            <?php
    $db=new mysqli("localhost","root","","alo");
    $get_slider="select * from slider LIMIT 0,1";
    $run_slider=mysqli_query($db,$get_slider);
    while($row=mysqli_fetch_array($run_slider)){
       
        $slider_image=$row['s_img'];
        // echo "<div class='item active'>
        // <img src='admin/slider_images/$slider_image'>
        // </div>
    //     // ";
    // }
    ?>

   <?php
    $get_slider="select * from slider LIMIT 1,3 ";
    $run_slider=mysqli_query($db,$get_slider);
    while($row=mysqli_fetch_array($run_slider)){
       
        $slider_image=$row['s_img'];
    //     echo "<div class='item'>
    //     <img src='admin/slider_images/$slider_image'>
    //     </div>
    //     ";
    // }
    ?>          
       
                <div class="owl-carousel">
           
                    <div class="carousel-item">
                   
                           <div class="carousel-img">
                        
                            <img src="admin/slider_img/<?php echo $row['s_img'];?>" alt="Image">
                            
      
                            </div>
                           
                       <div class="carousel-text">
                            <h1>Aid for landless outcast</h1>
                            <p>
                            We stand for every Rohingya, everywhere. 
And we never give up
                            </p>
                      
    
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>
                               
                                <!-- <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a> -->
 
     


                               
                                </div>
                                
                        </div>

                       
                       
    </div> 
        
                       
    <?php
    }
}
    
?>                
             
    
            </div>  
          

         </div>
        
    </div>
           
             
                 
                </div>
                   
         
        </div>
        
        
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                
                    <div class="col-lg-6">
                    <?php
                             $db=new mysqli("localhost","root","","alo");
                             $query = "select * from about";
                             $run=mysqli_query($db, $query);
                             $check=mysqli_num_rows($run)> 0;

                             if($check){
                                
                                while($row=mysqli_fetch_assoc($run)){

                                
                            ?> 
                        <div class="about-img" data-parallax="scroll" data-image-src="admin/abt_img/<?php echo $row['abt_img'];?>"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Worldwide non-profit charity organization</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    <?php echo $row['abt'];?>
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    <?php echo $row['mission'];?>
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    <?php echo $row['vission'];?>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            else{
                                echo "no faculty found";
                            }?>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lifes with you</h2>
                </div>
                <div class="row">
                <?php
                             $db=new mysqli("localhost","root","","alo");
                             $query = "select * from cause";
                             $run=mysqli_query($db, $query);
                             $check=mysqli_num_rows($run)> 0;

                             if($check){
                                
                                while($row=mysqli_fetch_assoc($run)){

                                
                            ?> 
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                           
                            <div class="service-text">
                                <h3>Healthy Food</h3>
                                <p><?php echo $row['food'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Pure Water</h3>
                                <p><?php echo $row['water'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Health Care</h3>
                                <p><?php echo $row['health'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Primary Education</h3>
                                <p><?php echo $row['edu'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Residence Facilities</h3>
                                <p><?php echo $row['residence'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p><?php echo $row['social'];?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                            }
                            else{
                                echo "no faculty found";
                            }?>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                                <p>Countries</p> -->
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Causes Start -->
        <div class="causes">
       
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>
               
                


    <div class="row">
    <?php
                             $db=new mysqli("localhost","root","","alo");
                             $query = "select * from raise";
                             $run=mysqli_query($db, $query);
                             $check=mysqli_num_rows($run)> 0;

                             if($check){
                                
                                while($row=mysqli_fetch_assoc($run)){

                                
                            ?> 
   
               <!-- <div class="owl-carousel causes-carousel">  -->
               <div class="col-lg-4 col-md-5">
               
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="admin/c_img/<?php echo $row ['img'];?>" alt="Image" >
                        </div>
                        
                
                        
                        <div class="causes-progress">
                        
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <span><?php echo $row['annual'];?></span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong><?php echo $row['raise1'];?></p>
                                
                                <p><strong>Goal:</strong> <?php echo $row['goal1'];?></p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3><?php echo $row['r1_title'];?></h3>
                            <p><?php echo $row['r1_desc'];?></p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom" href="blog.php">Learn More</a>
                            <a class="btn btn-custom" href="donate.php">Donate Now</a>
                      
                        </div>
                        
                    </div>
                    
                        </div>
                        <?php
                                }
    
                            }

    
?>                     
                             </div>
                                                 
                            
       
             </div> 
     
    
               
               
                            
            </div>
           
        </div>
       
        

        <!-- Team Start -->
        
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                <?php
                             $db=new mysqli("localhost","root","","alo");
                             $query = "select * from admin";
                             $run=mysqli_query($db, $query);
                             $check=mysqli_num_rows($run)> 0;

                             if($check){
                                
                                while($row=mysqli_fetch_assoc($run)){

                                
                            ?> 
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="admin/admin_img/<?php echo $row['a_img'];?>"  height ="250px" width="250px" alt="Team Image">
                            </div>
                            <div class="team-text">
                                


                                <h2><?php echo $row['a_name'];?></h2>
                                <p><?php echo $row ['post'];?></p>
                                <div class="team-social">
                                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com/nusrat.shameema"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/nusrat-shameema-mila-92648118a/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://instagram.com/Nusratshameema"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                         
                    <?php
                                }
                            }
                            else{
                                echo "no faculty found";
                            }?>
                </div>
            </div>
        </div> 
        <!-- Team End -->
        
        
        <!-- Volunteer Start -->
        <?php

        $db = new mysqli("localhost","root","","alo");






    


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $reason=$_POST['reason'];
       
        
    
        $inset_product="insert into volunteer  (name ,email, reason) values ('$name', '$mail', '$reason')";
        $run_product=mysqli_query($db,$inset_product);
    
        if($run_product){
            echo "<script>alert('information inserted Successfully')</script>";
           
        }else{
            echo "error".mysql_error($db);
        }
       
    }
    


?>
        <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpeg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                        <form action="volunteer.php" method="post">
                                <div class="control-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" name="mail" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="reason" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" name="submit" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->
        
        
       
        
        
        <!-- Contact Start -->
        <?php 

$db= new mysqli("localhost", "root",  "","alo");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];

    $query= "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$sub', '$msg')";
    $run = mysqli_query($db , $query);

    if($run){
         echo "<script> alert('Succesfull')</script>";
    
        



     }else {
         echo "error".mysql_error($db);
     }
}

?>
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpeg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form  action ="contact.php " method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" name="mail" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="sub" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" name="msg" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" name="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Gallery</p>
                    <h2>Latest news & articles directly from our Gallery</h2>
                </div>
                <div class="row">
                
                <?php
                             $db=new mysqli("localhost","root","","alo");
                             $query = "select * from blog";
                             $run=mysqli_query($db, $query);
                             $check=mysqli_num_rows($run)> 0;

                             if($check){
                                
                                while($row=mysqli_fetch_assoc($run)){

                                
                            ?> 
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="admin/blog_img/<?php echo $row['img'];?>" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><?php echo $row['title'];?></h3>
                                <p>
                                    <?php echo $row['des'];?>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                   
                    <?php
                                }
                            }
                            else{
                                echo "no faculty found";
                            }?>
                             
                    
                </div>
                


                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Dhanmondi,Dhaka Bangladesh</p>
                            <p><i class="fa fa-phone-alt"></i>+8801521564889</p>
                            <p><i class="fa fa-envelope"></i>alongo.org@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href="twitter.com"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href="youtube.com"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href="instagram.com"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="about.php">About Us</a>
                            <a href="contact.php">Contact Us</a>
                            <a href="causes.php">Popular Causes</a>
                            
                            <a href="blog.php">Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="about.php">About Us</a>
                            <a href="contact.php">Contact Us</a>
                            <a href="causes.php">Popular Causes</a>
                            
                            <a href="blog.php">Latest Blog</a>
                        </div>
                        </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
<?php

$db= new mysqli("localhost", "root", "", "alo");

if(isset($_POST['submit'])){
    $mail=$_POST['n_mail'];
    
    

    $query="INSERT INTO news (mail) VALUES ('$mail') ";
    $run = mysqli_query($db, $query);

    if($run){
        echo "<script> alert('Thankyou')</script>";
        echo "<script>window.open('contact.php','_self')</script>";


    }else{
        echo "error".mysql_error($db);
    }

}
?>
                            <form action="contact.php" method="post">
                                <input class="form-control" placeholder="Email goes here" name="n_mail">
                                <button class="btn btn-custom" name="submit">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://facebook.com/nusrat.shameema">Mila</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
