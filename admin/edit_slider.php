<?php  
  require('../config.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM slider WHERE id = $GetId";
    $result = mysqli_query($connection,$select);
    $row1= mysqli_fetch_array($result);
?>
<?php

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
                                <strong class="card-title">Data Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody>
                                      <tr><td>description</td></tr>
                                 <tr>
                               <td><textarea  name="description" class="editor" ><?php echo $row1['description'];?></textarea></td></tr>
                               <tr><td>name</td></tr>
                         <tr><td><textarea name="name" class="editor" ><?php echo $row1['name'];?></textarea></td></tr>
                                        <tr><td>image</td></tr>
                          <tr><td> <input type="file" name="img_upload"><img src="<?php echo $row1['image'];?>" width="80" height="90">
                          </td></tr>
                                 
                              
                          
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
  if(isset($_POST['submit']))
      {
  $target_dir = "uploads/";
  $file_name = rand(10,99999). basename($_FILES["img_upload"]["name"]);
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
      if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)) {
        
    
    $description=$_POST['description'];

    $name=$_POST['name'];
    
   
   

   // $InputArray = array('play','read');
   //     print_r(implode($InputArray));


      //'no'  
      if ($file == "")
  {
   $update = "UPDATE slider SET description='$description',name='$name',image='$target_file' WHERE id = '$GetId' ";
     $connection->query($update);
      echo "<script>alert('Record update');location.href='slider.php';</script>";
  }
  else
    {
        $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
        if($check !== false) {

        $uploadOk = 1;
        } else {
        echo "File is not an image.";
        $uploadOk = 0;
        }

      
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
        {
            echo "Sorry, only jpg png,jpeg,gif files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) 
        {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } 

        else
        {
            if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file))
            {
                 $update = "UPDATE slider SET description='$description',name='$name',image='$target_file' WHERE id = '$GetId' ";
                 // upadte tblename set fieldname=variABLE
                 // PLZ WRTITE coreect speeling

                if (mysqli_query($connection,$update) == TRUE)
                {
                    echo "<script>alert('Record Update');location.href='slider.php';</script>";
                }
                // unlink($old_file);
            }
            else
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

  }
}
      }
  ?>



    


</body>
</html>