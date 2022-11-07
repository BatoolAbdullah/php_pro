<?php
require_once("Header.php");
require_once("nav.php");

?>
<html>
    <body>
        
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
    <!-- Start Content -->
  
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-9">
                <div class="row">
                <h2>Mange Heels</h2>
              
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    
                    <th scope="col">#</th>
                    <th scope="col">Heels_preic</th>
                    <th scope="col">Name_heels</th>
                    <th scope="col">Heels_imag</th>
                    <th scope="col">Heels_size</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                       </th>
                        
                </tr>
            </thead>
            <tbody>
                <?php
         require_once('../conaction.php');
         $sql = "select * from heels order by Id_heels desc";
                  $result = mysqli_query($conn, $sql);
                    if (!$result) {
                      die("Selected Erorr");
                     }
                              while ($row = mysqli_fetch_assoc($result)) {
                              $id =$row['Id_heels'];
                             $text = $row['Name_heels']; 
                              $Float = $row['Heels_preic'];
                              $img = $row['Heels_imag'];
                              $size = $row['Heels_size'];
                                         echo "
                                              <tr>
                                             <td>$id</td> 
                                             <td>$Float</td>
                                              <td>$text</td>
                                             <td>$img</td>
                                  <td>$size</td>
                  <td><a href='Edit_heels.php?val=$id' class='btn btn-info'>Edit</a></td>
                 <td><a href='delete_heels.php?val=$id' class='btn btn-danger'>Delete</a></td>
                                                  </tr> "; 
                                                 } 
                                                 mysqli_close($conn);
 
                                                  ?>
                                                  
                                                </tbody>
  </table>           
    
    <!-- End Content -->

    <!-- Start Brands -->
            <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->
 <!-- Start Script -->
 <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    
  
</body>
    </html>
    <!-- End Script -
    <?php
require_once("foter.php");
?>
