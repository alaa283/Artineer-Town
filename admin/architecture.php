
<?php
$con=mysqli_connect('localhost' , 'root' , '' , 'artineer');

if(isset($_POST['insert_architecture']))
{
  $name=$_POST['name'];
  $image=$_POST['image'];
  $price=$_POST['price'];
  $sql=mysqli_query($con,"INSERT INTO `product2`(`Pname`, `image`, `Price`) VALUES ('$name','$image','$price')");
}


?>
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
                        <li class="nav-item active"><a class="nav-link" href="art.php">Art</a></li>  
                        
						       <li class="nav-item"><a class="nav-link" href="architecture.php">Architecture</a></li>
                    </ul>
                </div>
              
            </div>
            <!-- Start Side Menu -->
            <div class="side">
               
        
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <div class="container">
	 <div class="row">
	 <div class="col-lg-6">
    <form id="contactForm" method="post" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="name architecture" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="insert image" id="image" class="form-control" name="image" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="price" name="price" placeholder="price" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit" name="insert_architecture">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
	</div>
	</div>
<table>
      <tr>
      <th>name</th>
      <th>price</th>
      </tr>
      <?php
      $query="SELECT  `Id`, `Pname`, `Price` FROM `product2`";
      $sql1=mysqli_query($con,$query);
      while($row = mysqli_fetch_array($sql1))
      {
        echo"<tr><form action=update.php method=post>";
        echo"<td><input type=text name=Pname value='".$row['Pname']."'></td>";
        echo"<td><input type=text name=Price value='".$row['Price']."'></td>";
        echo"<input type=hidden name=Id value='".$row['Id']."'>";
        echo"<td><input type=submit value=Update></td>";
        echo"<td><a href=delete.php?id=".$row['Id'].">Delete</a></td>";
        echo"</form></tr>";
      }
      ?>
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
    <script src="js/custom.js"></script>
</body>

</html>