<?php

  require_once('header.php');
?>
 <div id="right-panel" class="right-panel">

        <!-- Header-->
        
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">socialmedia Table</strong>
                            </div>
                            <div class="card-body">
                              <form>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Instagram</th>
                                            <th>Facebook</th>
                                            <th>Twitter</th>
                                            <th>edit</th>
                                        </tr>
                                    </thead>
                                  
                                      <?php
                                     $select = "SELECT * FROM socialmedia";
                                      $result = mysqli_query($connection,$select);              
                                       while($row = mysqli_fetch_assoc($result)) 
                                       {
                                        ?> 
  <tr>

                          <td><i style="color: #cc00cc" class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com/accounts/login/" target="_blank">
                            <?php echo $row['instagram'] ?></td>
                          <td><i style="color: #0066cc" class="fa fa-facebook-official" aria-hidden="true"></i><a href="https://www.facebook.com/add.a.link/" target="_blank"><?php echo $row['facebook'] ?>
                      </td>
                          <td><i style="color: #4da6ff" class="fa fa-twitter-square" aria-hidden="true"></i><a href="https://twitter.com/link?lang=en" target="_blank"><?php echo $row['twitter'] ?></td>
                          
                          
                          <td><a href="edit_socialmedia.php?id=<?php echo $row['Id'] ?>"><i style="color: #669999" class="fa fa-pencil" aria-hidden="true"></i></a> </td>
                        </tr>
                        <?php } ?>
                                </table>
                            </form>
                              
                            </div>
                        </div>
                    </div>
                  
    <!-- Right Panel -->
 <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
