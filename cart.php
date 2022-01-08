
<?php 
    session_start();
    include ('header.php');
    include ('config.php');
     
    // print_r($_SESSION['cart']);
    
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
    <title>Karl - Fashion Ecommerce Template | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    

   
            

        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                            <form method="POST">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="#"><img src="img/product-img/product-9.jpg" alt="Product"></a>
                                            <h6>Yellow Cocktail Dress</h6>
                                        </td>
                                        <td class="price"><span>$49.88</span></td>
                                        <td class="total_price"><span>$49.88</span></td>
                                    </tr>
                                 -->
                                 <?php
                                  if (empty($_POST)) {                                                                
                                            $total=0;
                                           foreach ($_SESSION['carts'] as $id => $val)
                                           {
                                                  $rate = $val['qty'] * $val['price'];
                                                  $total =$total +$rate;
                                               $discountPrice = ($total - ($total * 10 / 100));
                                       echo '
                                        <tr class="cart_item">
                                           <td class="product-thumbnail">
                                             <a href="#"><img src="admin/'.$val['image'].'" alt="Product" style="height:200px; width:50%;"></a>
                                           </td>

                                           <td class="product-name">
                                              <a href="#">'.$val['product name'].'</a>
                                           </td>

                                           <td class="product-price">
                                              <p>'.$val['price'].'</p>
                                           </td>

                                         <td class="quantity-box">
                                           <input type="number" class="form-control"  name="'.$id.'" value="'.$val['qty'].'" min="0">
                                        </td>

                                         <td class="product-subtotalhh">
                                               <span class="amount"><p>'. $rate.'</p></span>
                                           </td>
                                           

                                            <td class="product-remove">    
                                               <a href="add_cart.php?id='.$id.'" class="btn btn-primary">
                                                 <i class="far fa-window-close"></i>
                                                </a>
                                           </td>
                                       </tr>
                                       ';    
                               }
                           }
                           else {
                               echo "cart is empty";
                           }
                               ?>
                                </tbody>
                            </table>
                            <div class="cart-footer d-flex mt-30">
                            
                            <div class="update-checkout w-50 text-right">
                                
                                
                            </div>
                         
                        </div>
                        
                        </div>

                        

                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">

                        
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="update-checkout w-50 text-right">
                                
                                
                            </div>
                            
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> 
                                    <?php
                                        if ( empty($_POST)) {     
                                    ?>
                                 <span><?php echo $total?></span>
                                 <?php
                                    }
                                    else
                                    {
                                        echo "0";
                                    }
                                 ?>
                                </li>
                                <li><span>Shipping</span> <span>Free</span></li>
                                <li><span><strong>Total</strong></span> <span><strong></strong></span></li>
                            </ul>
                            <button type="submit" name="submit" value="update" cart"">Update</button>
                        </form>
                        </div>
                    </div>
                    <?php  ?>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->

        
    
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