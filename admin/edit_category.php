<?php  
  require('../config.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM category WHERE id = $GetId";
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
                                <strong class="card-title">contact</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                 <tr>
                               <td><input type="text" name="name" value="<?php echo $row1['name'];?>" ></td>
                               
                                       </tr>     
                                        
                                    </tbody>
                                </table>
                                <button type="submit" name="submit">save</button>
                              </form>
                              	<?php
								  if(isset($_POST['submit']))
								  {
								    $name=$_POST['name'];
								    

								    $update = "UPDATE category SET name='$name' WHERE id = '$GetId' ";
								    if (mysqli_query($connection,$update) == TRUE)
						                {
						                    echo "<script>alert('Record Update');location.href='category.php';</script>";
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