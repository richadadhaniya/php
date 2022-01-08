<?php  
  require('../config.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM socialmedia WHERE id = $GetId";
    $result = mysqli_query($connection,$select);
    $row1= mysqli_fetch_array($result);
?>
<?php

  require_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">socialmedia</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Instagram</th>
                                            <th>Facebook</th>
                                            <th>Twitter</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                 <tr>
                               <td><input type="text" name="instagram" value="<?php echo $row1['instagram'];?>"></td>
                               <td>
                           <input type="text" name="facebook" value="<?php echo $row1['facebook'];?>"></td>
                         <td><input type="text" name="twitter" value="<?php echo $row1['twitter'];?>"></td>
                                       </tr>     
                                        
                                    </tbody>
                                </table>
                                <button type="submit" name="submit">save</button>
                              </form>
                              	<?php
								  if(isset($_POST['submit']))
								  {
								    $instagram=$_POST['instagram'];
								    $facebook=$_POST['facebook'];
								    $twitter=$_POST['twitter'];

								    $update = "UPDATE socialmedia SET instagram='$instagram',facebook='$facebook',twitter='$twitter' WHERE id = '$GetId' ";
								    if (mysqli_query($connection,$update) == TRUE)
						                {
						                    echo "<script>alert('Record Update');location.href='socialmedia.php';</script>";
						                }
								    else
								    {
								      echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
								    }
								  }
								  ?>
                            </div>
                        </div>
                    </div>
   	
  </table>
   
 
</body>
</html>