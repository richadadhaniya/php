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
                                <strong class="card-title">category Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody>
                                      

                                       <tr><td>name</td></tr>
                                 <tr>
                         <td><input type="text" name="name"></td></tr>
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
                    $name=$_POST['name'];
                    

                    $insert = "INSERT INTO category(name) VALUES ('$name')";
                            $query = mysqli_query($connection,$insert);

                            if ($query == true) 
                            {
                                echo "<script>alert('Record Update');location.href='category.php';</script>";
                            }
                    else
                    {
                      echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
                    }
                  }
                  ?>


</body>
</html>