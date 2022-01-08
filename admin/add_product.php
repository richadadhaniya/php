<?php
   require_once('../config.php');
  require_once('header.php');
 
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
   <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">product Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody>
                                      <tr><td>name</td></tr>
                         <tr><td><input type="text" name="name"></td></tr>
                          <tr><td>description</td></tr>
                                 <tr>
                         <td><textarea  name="description" class="editor" ></textarea></td></tr>

                                      <tr><td>image</td></tr>
                                       <tr><td> <input type="file" name="image"></td></tr>
                                        <tr><td>category</td></tr>
                               <tr><td>
                                         <select name="categorys">
                                          <?php
                                   $select = "SELECT * FROM category";
                                   $result = mysqli_query($connection,$select);              
                                   while($row = mysqli_fetch_assoc($result))
                                     {
                                      ?>
                                      <option value="<?php echo $row['Id'];?>">  
                                        <?php echo $row['name'];?>
                    </option>
                                      <?php
                                     }
                                      ?>

                                      </select></td></tr> 

                                      
                             
                          
                         <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                           <script>
                         tinymce.init({
                           selector: 'textarea.editor',
                           menubar: false
                         });
</script>
                        

                                           
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
   
  </table>
   <button type="submit" name="submit">save</button>
 </form>
<?php

if (isset($_POST['submit'])) 
{
  $target_dir = "uploads/";
  $file_name = rand(10,99999). basename($_FILES["image"]["name"]);
  $target_file = $target_dir . $file_name;
  $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      echo "Sorry, only image files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else 
  {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
          $name = $_POST['name'];
          $description = $_POST['description'];
          $category = $_POST['categorys'];
       
        
        $insert = "INSERT INTO product(name,description,image,category) VALUES ('$name','$description','$target_file','$category')";
        $query = mysqli_query($connection,$insert);

        if ($query == true) {
          
          echo "<script>alert('Data Inserted');location.href='product.php';</script>";

        }
          
      } 
      else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}
?>


</body>
</html>