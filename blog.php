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
                        <h2>From Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles directly from our blog</h2>
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
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                             
                        <?php
                        if(isset($_GET['page'])){
                            $page=$_GET['page'];

                         }else{
                             $page=1;
                            
                         }
                        $per_page= 05;
                         $start=($page-1)*05;
                         $q= "select * from blog limit $start, $per_page";
                        $r=mysqli_query($db, $q);
                        ?>
                        <?php

$query="select * from blog";
$result=mysqli_query($db,$query);
$total_record=mysqli_num_rows($result);
$total_pages=ceil($total_record / $per_page);

echo "
<li><a href='blog.php?page=1'> " . 'First Page' ."</a></li>

";
for($i=1; $i<=$total_pages; $i++){
    echo "<li><a href='blog.php?page=".$i."' class='btn-btn-primary'>$i</a></li>";
}

    

echo "
<li><a href='blog.php?page=$total_pages'> ". 'Last Page'."</a></li>
";

                      
    
?>
                            <!-- <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
                        </ul> 
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
