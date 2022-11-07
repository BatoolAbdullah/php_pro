<?php
require_once('Header.php');
require_once('nav.php');
?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Add admin</h2>
    <hr>
    <?php
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset ($_SESSION['add']);
    }
     ?>
     <form action="" method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <form name="Register" id="reg" action="add_user.php" method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><label class="form-label">Name:</label></td>
                                    <td><input class="form-control" id="name" type="text" name="Name_User" placeholder="FristName MiddlelName LastName"></td>
                                </tr>
                                <tr>
                                    <td><label>Password:</label></td>
                                    <td><input class="form-control" id="pass" type="password" name="Pass_User" placeholder="Must be at least 4 characters in uppercase, lowercase, number, symbol">
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>Email:</label></td>
                                    <td><input class="form-control" id="email" type="email" name="Email_User"></td>
                                </tr>
                                <tr>
                                    <td><label>Phone Number:</label></td>
                                    <td><input class="form-control" id="tel" type="tel" name="Phone_User" placeholder="Must consist of 9 numbers"></td>
                                </tr>
                            
                                </tr>
                                
                                <tr>
                                    <td><label>Permission:</label></td>
                                 <td><select name="User_Taype" id="per">
                                            <option>Choose the Permation</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                        </select></td>
                                </tr>
                               
                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="btn btn-success" type="submit" value="Add" name="added">
                                        <a href="./users.php" class="btn btn-danger">Cancel</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                    <?php
        if(isset($_POST['added'])){
            require_once('../conaction.php');
            $Username = $_POST['Username'];
            $password = md5($_POST['password']);
            $email = $_POST['email'];
           // $phone = $_POST['Phone_User'];
           // $type = $_POST['User_Taype'];
            $sql = "INSERT INTO  admin SET 
            Username ='$Username ',
            password ='$password ',
            email ='$email '";
                  $res = mysqli_query($conn,$sql)or die(mysqli_error());
                  if(!$res==TRUE)
                  {
                      $_SESSION['add']="<div calss='succss'>Admin add seccssfully</div>";
                      header("location:".SITEURL.'maneg_heels.php');
                  }
                  else{
                    $_SESSION['add']="<div calss='error'>Admin add failed</div>";
                    header("location:".SITEURL.'add_user.php');

                }
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