<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Artineer Town </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/paint .png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">

   

</head>

<body>

  

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/paint2.png" class="logo" alt="">
					<h1 style="color:#ff409f">ArTinEEr ToWn</h1></a>
                </div>
				
                <!-- End Header Navigation -->

              
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>  
                        <li class="dropdown ">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu " role="menu">
                                <li>
                                    <div class="row">
                                        
                                        
                                        <div class="col-menu col-md-3">
                                           
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="art.php"> ART</a></li>
                                                    <li><a href="architecture.php"> Architecture</a></li>  
                                                </ul>
                                            </div>
											
                                        </div>
                                        
                                        
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
						       <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
						      <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Help</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
								
                               
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
                       
                    </ul>
                </div>
              

              

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<img src="images/cart.png" >
					
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
               
        
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
	
	
	
	<!-- forms-->
	
	 <div class="container">
	 <div class="row">
	 <div class="col-lg-6">
	 <h2 style="color:#ff409f;">Login Form</h2>
	 
	 
	 <form action="validation.php" method="post">
	    <div class="form-group">
	      <label>Username</label>
	      <input type="text" name="username" class="form-control">
	    </div>
		
		<div class="form-group">
	      <label>Password</label>
	      <input type="Password" name="password" class="form-control">
	    </div>
		
		<button type="submit" name="login" class="btn btn-primary" style="background-color:#ff409f;">Login</button>
	 
	   </form>
	 
	 </div>
	 
	 <div class="col-lg-6">
	 <h2 style="color:#ff409f;">If you don't have account Signin Now !</h2>
	 
	 <form action="registration.php" method="post">
	 
	  <div class="form-group">
	      <label>Username</label>
	      <input type="text" name="user" class="form-control">
	    </div>
		
		
		
		<div class="form-group">
	      <label>Email</label>
	      <input type="mailto" name="mail" class="form-control">
	    </div>
		
		<div class="form-group">
	      <label>Phone</label>
	      <input type="phone-square" name="phone" class="form-control">
	    </div>
		
		<div class="form-group">
	      <label>Password</label>
	      <input type="Password" name="password" class="form-control">
	    </div>
		
		  <button type="submit" name="submit" class="btn btn-primary" style="background-color:#ff409f;">Signin</button>
	 
	     </form>
	  </div>
	 </div>
	 </div>

    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	   <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4><center>ABOUT Artineer Town<center></h4>
                            <p>online shop enable you to discover different tools of departments of Engineering and Art , in addition to enable to buy any item of it in any time   
                                </p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4><center>JOIN US ON<center></h4>
							
							<p style="color:white">join our social media and follow our news</p>
							
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" ></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" ></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" ></i></a></li>
                               
                            </ul>
                          
                        </div>
						
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4><center>Contact Us</center></h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Taha Hessien next to <br>salah eldin Mosque Minia,Egypt<br> </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888 705 770">01116026278</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">artineerinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>