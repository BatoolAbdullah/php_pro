<?php
require_once('Header.php');
require_once('nav.php');
?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Add Heels</h2>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <form name="News" id="add_ne" action="#" method="POST" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><label class="form-label">Name_heels:</label></td>
                                    <td><input class="form-control" id="title" type="text" name="Name_heels"></td>
                                </tr>
                                <tr>
                                    <td><label>Heels_preic:</label></td>
                                    <td><input class="form-control" id="date" type="float" name="Heels_preic">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Heels_size:</label></td>
                                    <td><input class="form-control" id="date" type="float" name="Heels_size">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Uplode Heels_imag:</td>
                                    <td><label id="format"><input class="form-control" type="file" name="Heels_uplode">
                                        </label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    <input class="btn btn-success" type="submit" value="Add" name="Add_heels">
                                    <a href="Add_heels.php" class="btn btn-danger">Cancel</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['Add_heels'])){
                        require_once('../conaction.php');
                            $title = $_POST['Name_heels'];
                            $date = $_POST['Heels_preic'];
                            $text = $_POST['Heels_size'];
                            $textr = str_replace("'", "''", "$text");
                            $folder ="./Heels_uplode/";
                            $img = $_FILES['Heels_uplode']['name'];
                            $tmp = $_FILES['Heels_uplode']['tmp_name'];
                            $sql = "INSERT INTO `heels` (`Name_heels`, `Heels_preic`, `Heels_size`, `Heels_imag`)
                             VALUES ('$title', '$date','$text', '$img')";
                            $result = mysqli_query($conn,$sql);
                            move_uploaded_file($tmp,$folder.$img);
                            if(!$result){
                                echo "Insert Error" . mysqli_error($conn);
                            }
                        mysqli_close($conn);
                    }
                    ?>
                </div>
            </div> 
        </div>
    </div>  
</main>
<!-- end main  -->
<?php
require_once('foter.php');
?>