<?php
session_start();
$connect=mysqli_connect("localhost","root","","artineer");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">

   

</head>
<body>

   

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
								<li><a href="#">Terms&conditions </a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                       
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



    <!-- Start Shop Page  -->
      <!--
    <div class="shop-box-inner">
        <div class="container">
          
                
                <div class="row shop-content-right">
                    <div class="right-product-box">
                        
                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
									<div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                   
                                                    <img src="images/pan1.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                       
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Architecture Tool</h4>
                                                    <h5>170 EGP </h5>
                                                </div>
                                            </div>
                                        </div>
                    
									
									
									
                                        
										
										
										
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    
                                                    <img src="images/pan3.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                       
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Architecture Tool</h4>
                                                    <h5>400 EGP</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                   
                                                    <img src="images/pan4.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Architecture Tool </h4>
                                                    <h5> 150 EGP</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                   
                                                    <img src="images/pan5.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Architecture Tool</h4>
                                                    <h5>80 EGP</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    
                                                    <img src="images/pan6.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                       
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Architecture Tool</h4>
                                                    <h5> 100 EGP</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    
                                                    <img src="images/pan7.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Architecture Tool</h4>
                                                    <h5>60 EPG</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    
                                                    <img src="images/pan8.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Architecture Tool </h4>
                                                    <h5>120 EGP</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    
                                                    <img src="images/paint11.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        
                                                        <a class="cart" href="cart.php">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Art Tool</h4>
                                                    <h5>50 EGP</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                                <div class="products-single fix">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                       
                                                        <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        
                                                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        -->
    <!-- End Shop Page -->

    <div class="container" style="width:80%;">
          
          <?php
          $query = "SELECT * FROM product2 ORDER BY Id ASC";
          $result = mysqli_query($connect, $query);
          if(mysqli_num_rows($result) > 0)
          {
              while($row = mysqli_fetch_array($result))
              {
                  ?>
                  <div class="col-md-3">
                  <form method="post" action="shop.php?action=add&id=<?php echo $row["Id"]; ?>">
                  <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
                  <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                  <h5 class="text-info"><?php echo $row["Pname"]; ?></h5>
                  <h5 class="text-danger">$ <?php echo $row["Price"]; ?></h5>
                  <input type="text" name="quantity" class="form-control" value="1">
                  <input type="hidden" name="hidden_name" value="<?php echo $row["Pname"]; ?>">
                  <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>">
                  <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to cart">
                  </div>
                  </form>
                  </div>
                  
              
                  
                  <?php
              }
          }
          ?>
          
          
           <div style="clear:both"></div>
          <h2 style="color:#ff409f;">My Shopping Bag</h2>
          <div class="table-responsive">
          <table class="table table-bordered">
          <tr>
          <th width="40%">Product Name</th>
          <th width="10%">Quantity</th>
          <th width="20%">Price Details</th>
          <th width="15%">Order Total</th>
          <th width="5%">Action</th>
          </tr>
          <?php
          if(!empty($_SESSION["cart"]))
          {
              $total = 0;
              foreach($_SESSION["cart"] as $keys => $values)
              {
                  ?>
                  <tr>
                  <td><?php echo $values["item_name"]; ?></td>
                  <td><?php echo $values["item_quantity"] ?></td>
                  <td>$ <?php echo $values["product_price"]; ?></td>
                  <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
                  <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
                  </tr>
                  <?php 
                  $total = $total + ($values["item_quantity"] * $values["product_price"]);
              }
              ?>
              <tr>
              <td colspan="3" align="right">Total</td>
              <td align="right">$ <?php echo number_format($total, 2); ?></td>
              <td></td>
              </tr>
              
              
              
              <?php
          }
          ?>
          </table>
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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>