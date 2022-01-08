<?php 
    include ('header.php');
    include ('config.php');
 ?>

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="container">
    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form"  method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                <input type="submit" name="submit" value="submit">
            </div>

            </form>
            <?php
 if(isset($_POST['submit']))
 {
  $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $insert="INSERT INTO query_table(name,email,subject,message) VALUES ( '$name', '$email','$subject','$message')";
   if(!mysqli_query($connection,$insert))
   {
     echo "<script>alert('Record not inserted')</script>";
   }
   else
   {
     echo "<script>alert('Record Inserted');location.href='contact.php';</script>";
   }
 }
 ?>

            
            <?php
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $insert = "INSERT INTO query_table(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
   $query = mysqli_query($connection,$insert);

       if ($query == true) {
         
         echo "<script>alert('Data Sent Successfully');location.href='contact.php';</script>";

       }
     
}

?>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <?php
                                     $select = "SELECT * FROM contact";
                                      $result = mysqli_query($connection,$select);              
                                       while($row = mysqli_fetch_assoc($result)) 
                                       {
                                        ?> 
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p><?php echo $row['address'] ?></p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p><?php echo $row['contactno'] ?></p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p><?php echo $row['email'] ?></p>
                </li>
            </ul>
        </div>
        <!--Grid column-->
      <?php } ?>
    </div>
    </div>

</section>
<!--Section: Contact v.2-->
<?php 
    include ('footer.php');
 ?>