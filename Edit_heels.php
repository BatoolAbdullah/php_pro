<?php
require_once('Header.php');
require_once('nav.php');
?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Edit Heels</h2>

    <?php
                if(isset($_GET['val'])){
                $Id_heels = $_GET['val'];
                require_once('../conaction.php');
                $sql = "select * from heels where Id_heels = '$Id_heels'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Selected Erorr" . mysqli_error($conn));
                }
                while ($row = mysqli_fetch_assoc($result)) { 
                      ?>
                       <form name="heels" id="add_heels" action="" method="POST" enctype="multipart/form-data">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td><label class="form-label">Name_heels:</label></td>
                    <td><input class="form-control" id="title" type="text" 
                    name="Name_heels" value="<?php echo $row['Name_heels']; ?>"></td>
                </tr>
                <tr>
                    <td><label>Heels_preic:</label></td>
                    <td><input class="form-control" id="date" type="text"
                    name="Heels_preic" value="<?php echo $row['Heels_preic']; ?>"></td>
                </tr>
                <tr>
                    <td><label>Heels_size:</label></td>
                    <td><textarea name="Heels_size" id="editor"><?php echo $row['Heels_size']; ?></textarea>
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
                    <td>Uplode Heels Image:</td>
                    <td><img class="w-50 h-50 my-2" src="./Heels_uplode/<?php echo $row['Heels_imag']; ?>"  height="230px">
                        <label id="format"><input class="form-control" type="file" name="Heels_uplode">
                       </label></td>
                </tr>
                <tr>
                    <td>
                    <input class="btn btn-success" type="submit" value="Update" name="Edit_heels">
                    <a href="maneg_heels.php" class="btn btn-danger">Cancel</a>
                    </td>
                </tr>
            </table>
        </div>
    </form>
         <?php
        }}
    ?>
    <?php
    if(isset($_POST['Edit_heels'])) {
        require_once('../conaction.php');
        $text = $_POST['Name_heels']; 
        $editor = $_POST['Heels_preic'];
         $size = $_POST['Heels_size'];
        if (isset($_FILES['Heels_uplode']) && !empty($_FILES['Heels_uplode']['tmp_name'])) {
            $folder ="./Heels_uplode/";
            $img = $_FILES['Heels_uplode']['name'];
            $tmp = $_FILES['Heels_uplode']['tmp_name'];
            $sql = "UPDATE `heels` SET `Name_heels` = '$text ', `Heels_preic` = '$editor', 
                `Heels_size` = '$size', `Heels_imag` = '$img' WHERE `hlees`.`Id_heels` = $Id_heels ";
            move_uploaded_file($tmp,$folder.$img); 
        }
            else {
                $sql = "UPDATE `heels` SET `Name_heels` = '$text ', `Heels_preic` = '$editor', 
                `Heels_size` = '$size' WHERE `hlees`.`Id_heels` = $Id_heels "; 
                }
            if(!$result = mysqli_query($conn,$sql))
             {
                    echo "Update Error" . mysqli_error($conn); }
            else{
            header("Location:maneg_heels.php");
            }
    }
    ?>
</main>
<!-- end main  -->
<?php
    require_once('foter.php');
?>