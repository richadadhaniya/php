<?php 
    include ('header.php');
    include ('config.php');
 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Karl - Fashion Ecommerce Template | Checkout</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    

    <div id="wrapper">

      
            <!-- Top Header Area End -->
           
        

        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-6 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>Billing Address</h5>
                                <p>Enter your cupone code</p>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="first_name"> Name <span>*</span></label>
                                        <input type="text" name="name" class="form-control" id="first_name" value="" required>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-12 mb-3">
                                        <label for="street_address">Address <span>*</span></label>
                                        <input type="text" name="address" class="form-control mb-3" id="street_address" value="">
                                        
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <label for="city">City <span>*</span></label>
                                        <input type="text" name="city" class="form-control" id="city" value="">
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Contact_no<span>*</span></label>
                                        <input type="number" name="contact_no" class="form-control" id="phone_number" min="0" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email Address <span>*</span></label>
                                        <input type="email" name="email" class="form-control" id="email_address" value="">
                                    </div>
                                    	<input type="submit" name="submit" value="Place Order" class="btn btn-primary">
                                    
                                </div>
                                <!-- <a href="#" class="btn karl-checkout-btn" name="submit" >Place Order</a> -->
                            </form>
                            <?php
								 if(isset($_POST['submit']))
								 {
								  $name=$_POST['name'];
								   $address=$_POST['address'];
								   $city=$_POST['city'];
								   $contact_no=$_POST['contact_no'];
								   $email=$_POST['email'];

								   $insert="INSERT INTO checkout(name,address,city,contact_no,email) VALUES ( '$name', '$address','$city','$contact_no','$email')";
								   if(!mysqli_query($connection,$insert))
								   {
								     echo "<script>alert('Record not inserted')</script>";
								   }
								   else
								   {
								     echo "<script>alert('Record Inserted');location.href='checkout.php';</script>";
								   }
								 }
						     ?>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">

                            <div class="cart-page-heading">
                                <h5>Your Order</h5>
                                <p>The Details</p>
                            </div>

                            <ul class="order-details-form mb-4">
                                <li><span>Product</span> <span>Total</span></li>
                                <li><span>Shipping</span> <span>Free</span></li>
                                <li><span>Total</span> <span>$59.90</span></li>
                            </ul>


                            <div id="accordion" role="tablist" class="mb-4">
                                <div class="card">
                                    

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>cash on delievery</a>
                                        </h6>
                                    </div>
                                   
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>credit card</a>
                                        </h6>
                                    </div>
                                    
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fa fa-circle-o mr-3"></i>direct bank transfer</a>
                                        </h6>
                                    </div>
                                    
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>

 <?php 
    include ('footer.php');
 ?>