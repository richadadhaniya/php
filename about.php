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


					<div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                	<?php
                                    $select = "SELECT * FROM about";
                                     $result = mysqli_query($connection,$select);              
                                      while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="admin/<?php echo $row['image'] ?>" alt="">
                                        </div>
                                    </div>
									<div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title"><?php echo $row['description'] ?></h4>
                                            
                                            
                                            <p><?php echo $row['sub_description'] ?></p>
                                            
                                            
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
</body>
</html>
<?php 
    include ('footer.php');
 ?>