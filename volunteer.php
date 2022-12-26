<?php
session_start();
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
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Volunteer</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Volunteer Start -->
        <div class="container">
            <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpeg">
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
