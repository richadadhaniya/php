 <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="shop.php">pages</a></li>
                                <li><a href="about.php">About</a></li>
                                
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <?php
                                     $select = "SELECT * FROM contact";
                                      $result = mysqli_query($connection,$select);              
                                       while($row = mysqli_fetch_assoc($result)) 
                                       {
                                        ?> 
                            <ul class="footer_widget_menu">
                                <li><a href="#"><?php echo $row['address'] ?></a></li>
                                <li><a href="#"><?php echo $row['contactno'] ?></a></li>
                                <li><a href="#"><?php echo $row['email'] ?></a></li>
                                
                            </ul>
                        </div>
                    <?php } ?>
                    </div>
                    <!-- Single Footer Area Start -->
                    
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <?php
                                     $select = "SELECT * FROM socialmedia";
                                      $result = mysqli_query($connection,$select);              
                                       while($row = mysqli_fetch_assoc($result)) 
                                       {
                                        ?>
                        <div class="col-12">
                            <div class="footer_social_area text-center">

                                <a href="<?php echo $row['instagram'] ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo $row['facebook'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $row['twitter'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
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