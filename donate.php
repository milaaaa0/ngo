<?php
if(!isset($_SESSION)) { 
    session_start(); 
}


$db= new mysqli("localhost", "root", "", "alo");

 if(isset($_POST['submit'])){
     $tran=$_POST['tran_id'];
     $name=$_POST['cus_name'];
      $email=$_POST['cus_email'];
      $amnt=$_POST['amount'];

     $query ="INSERT INTO donation (tran_id, d_name, d_email, d_amnt) VALUES ('$tran', '$name', '$email', '$amnt') ";
    $run = mysqli_query($db, $query);
     
     

   

   if($run){
     echo "<script> alert('Succesfull')</script>";

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
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

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
        <link rel="stylesheet" href="assets/css/style.css">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>
   <style>
    .button {
    padding: 12px 20px;
    text-align: center; 
   font-size: 16px;
    font-weight: 500;
    color: #777777;
    border-radius: 0;
    border: 2px solid #FDBE33;
    box-shadow: inset 0 0 0 0 #FDBE33;
    transition: ease-out 0.3s;
    -webkit-transition: ease-out 0.3s;
    -moz-transition: ease-out 0.3s;
}
.button:hover {
    color: #20212B;
    box-shadow: inset 0 0 0 30px #FDBE33;
}
</style>
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
                                <?php
error_reporting(0);
date_default_timezone_set('Asia/Dhaka');
//Generate Unique Transaction ID
function rand_string( $length ) {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}
$cur_random_value=rand_string(6);

?>                <div class="text">
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
                        <h2>Donate Now</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Donate</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Donate Start -->
        <div class="container">
            <div class="donate" data-parallax="scroll" data-image-src="img/donate.jpg">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's donate to needy people for better lives</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">

                        
                        <form style='margin:0 auto; text-align:center;' action="https://sandbox.aamarpay.com/index.php" method="post" name="form1">
                    <table border="0" cellpadding="4" cellspacing="2" align="center" style="border-collapse:collapse;" >
                    <input type="hidden" name="store_id" value="aamarpay">
                    <input type="hidden" name="signature_key" value="28c78bb1f45112f5d40b956fe104645a">
                   
                    </td></tr>
                    <tr><td style= "color:#fff"> Transaction ID: *</td><td><input type="text" name="tran_id" value=""></td></tr>
                    <tr><td style= "color:#fff">Pay Amount *</td><td><input type="text" name="amount" value="1"> </td></tr>
                    
                    <input type="hidden" name="currency" value="BDT">
                    
                    <tr><td style= "color:#fff"> Name: *</td><td><input type="text" name="cus_name" value="Mr. ABC"></td></tr>
                    <tr><td style= "color:#fff"> Email Address: *</td><td><input type="text" name="cus_email" value="test@test.com"></td></tr>
                    <tr><td style= "color:#fff"> Address  1: </td><td><input type="text" name="cus_add1" value="Dhaka"></td></tr>
                    <tr><td style= "color:#fff"> Address 2: </td><td><input type="text" name="cus_add2" value="Dhaka"></td></tr>
                    <tr><td style= "color:#fff"> City: </td><td><input type="text" name="cus_city" value="Dhaka"></td></tr>
                    <tr><td style= "color:#fff"> State: </td><td><input type="text" name="cus_state" value="Dhaka"></td></tr>
                    <tr><td style= "color:#fff"> Postal: </td><td><input type="text" name="cus_postcode" value="1206"></td></tr>
                    <tr><td style= "color:#fff"> Country: </td><td><input type="text" name="cus_country" value="Bangladesh"></td></tr>
                    <tr><td style= "color:#fff"> Phone: </td><td><input type="text" name="cus_phone" value="010000000"></td></tr>
                    <tr><td style= "color:#fff"> Fax: </td><td><input type="text" name="cus_fax" value="010000000"></td></tr>
                    
                    <tr><td style= "color:#fff">VAT Ratio: </td><td><input type="text" name="amount_vatratio" value="0"></td></tr>
                    <tr><td style= "color:#fff">VAT : </td><td><input type="text" name="amount_vat" value="0"></td></tr>
                    <tr><td style= "color:#fff">TAX Ratio: </td><td><input type="text" name="amount_taxratio" value="0"></td></tr>
                    <tr><td style= "color:#fff">TAX: </td><td><input type="text" name="amount_tax" value="0"></td></tr>
                    <tr><td style= "color:#fff"> Charge Ratio: </td><td><input type="text" name="amount_processingfee_ratio" value="0"></td></tr>
                    <tr><td style= "color:#fff">Processing Charge: </td><td><input type="text" name="amount_processingfee" value="0"></td></tr>
                    
                    <tr><td style= "color:#fff"> Description: </td><td><input type="text" name="desc" value="Donation Description"></td></tr>
                    <input type="hidden" name="success_url" value="http://localhost/alo/success.php">
                    <input type="hidden" name="fail_url" value = "http://localhost/alo/fail.php">
                    <input type="hidden" name="cancel_url" value = "http://localhost/alo/fail.php">
                    
                    
                    
                    <tr><td><input type="submit" class='button' value="Pay Now" name="pay"><br/></td></tr></table>
                    </form></center>
                    


                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->


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

