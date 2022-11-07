
<?php
require_once("Header.php");
require_once("nav.php");

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>About Us</h2>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <form name="about_us" id="add_about_us" action="#" method="post">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><label>About Us Text:</label></td>
                                    <td><textarea name="Text_About" id="editor"></textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#editor'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </td>
                                </tr>
                                        <tr>
                                                <td></td>
                                            <td>
                                                <input class="btn btn-success" type="submit" value="Add" name="add_about">
                                            </td>
                                        </tr>
                            </table>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['add_about'])){
                        require_once('../conaction.php');
                        $text = $_POST['Text_About'];
                        $textr = str_replace("'", "''", "$text");
                        $sql = "insert into about_us(Text_About)values('$textr')";
                        $result = mysqli_query($conn,$sql);
                        if(!$result){
                            echo "Inserted Error" . mysqli_error($conn);
                        }
                        else {
                            echo "<script>alert('Success')</script>";
                        }
                        mysqli_close($conn);
                    }
                    ?>
                </div>
            </div> 
        </div>
    </div>  
</main>
    <!--End Brands-->
     <!-- Start Script -->
     <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
    <?php
    require_once("foter.php");
?>