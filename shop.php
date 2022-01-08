<?php 
    include ('header.php');
    include ('config.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
    

    
        

        <!-- ****** Quick View Modal Area Start ****** -->
        
        <!-- ****** Quick View Modal Area End ****** -->

        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                 
                                <div class="nav-side-menu">
                                    
                                    <h6 class="mb-0">Catagories</h6>
                                    <?php
                                    $select="SELECT * FROM category";
                                    $result=(mysqli_query($connection,$select));
                                    while ($row=mysqli_fetch_assoc($result)) {

                            ?> 
                                    <div class="menu-list">
                                        <ul id="menu-content2" class="menu-content collapse out">
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#women2">
                                                <a href="product1.php?id=<?php echo $row['Id'] ?>"><?php echo $row['name'] ?></a>
                                                
                                            </li>
                                            <!-- Single Item -->
                                            
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                </div>
                                    <?php } ?>
                            </div>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                        

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">
                                <?php
                         $select = "SELECT * FROM product";
                            $result = mysqli_query($connection,$select);
                             while($row = mysqli_fetch_assoc($result)) 
                            {
                     ?>
                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="admin/<?php echo ($row['image']); ?>" alt="image">
                                        
                                       
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price"><?php echo($row['name']); ?></h4>
                                        <p><?php echo($row['description']); ?></p>
                                        <a href="product_detail.php?id=<?php echo $row["Id"]; ?>" class="view-details-link"> See details</a><br>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADD TO <CENTER></CENTER>ART</a>
                                    </div>
                                </div>

                                     <?php } ?>
                                <!-- Single gallery Item -->
                           
                               
                        
                        


                                
                            </div>
                        </div>

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>
 </body>
 </html>
 <?php 
    include ('footer.php');
 ?>