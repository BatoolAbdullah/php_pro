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
    <?php
    require_once('../conaction.php');
    ?>
       <?php
    require_once('Search.php');
                    ?>
  <div class="container py-5">
        <div class="row">
             <div class="col-lg-9">
                <div class="row">
                <?php
                        require_once('../conaction.php');
                       $value = $_GET['find'];
                        $sql = "select * from heels where Name_heels like '%$value%' order by Id_heels  desc";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            die("Selected Erorr");
                         }
                        while ($row = mysqli_fetch_assoc($result)) {
                        $text = $row['Name_heels']; 
                        $Float = $row['Heels_preic'];
                        $img = $row['Heels_imag'];
                        $size = $row['Heels_size'];

    echo "<div class='row'>
    <div class='col-md-4'>
        <div class='card mb-4 product-wap rounded-0'>
            <div class='card rounded-0'>
                <img class='card-img rounded-0 img-fluid' src='$img'>
                <div class='card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center'>
                    <ul class='list-unstyled'>
                        <li><a class='btn btn-success text-white mt-2' href='shop-single.php'><i class='far fa-eye'></i></a></li>
                        <li><a class='btn btn-success text-white mt-2' href='shop-single.php'><i class='fas fa-cart-plus'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class='card-body'>
                <a href='shop-single.html' class='h3 text-decoration-none'>$text</a>
                <ul class='w-100 list-unstyled d-flex justify-content-between mb-0'>
                    <li>$size</li>
                    <li class='pt-2'>
                        <span class='product-color-dot color-dot-red float-left rounded-circle ml-1'></span>
                        <span class='product-color-dot color-dot-blue float-left rounded-circle ml-1'></span>
                        <span class='product-color-dot color-dot-black float-left rounded-circle ml-1'></span>
                        <span class='product-color-dot color-dot-light float-left rounded-circle ml-1'></span>
                        <span class='product-color-dot color-dot-green float-left rounded-circle ml-1'></span>
                    </li>
                </ul>
                <ul class='list-unstyled d-flex justify-content-center mb-1'>
                    <li>
                        <i class='text-warning fa fa-star'></i>
                        <i class='text-warning fa fa-star'></i>
                        <i class='text-warning fa fa-star'></i>
                        <i class='text-muted fa fa-star'></i>
                        <i class='text-muted fa fa-star'></i>
                    </li>
                </ul>
                <p class='text-center mb-0'> $Float</p>
            </div>
        </div>
    </div>";
}
mysqli_close($conn);

?>
                
                    
    
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
