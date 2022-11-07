<?php
require_once('header.php');
require_once('nav.php');
?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Edit User</h2>
    <hr>
    <?php
    $id = $_GET['userd'];
    require_once('../conaction.php');
    $sql = "select * from users where Id_User  = '$id'";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        die("Selected Erorr");
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['Id_User'];
        $name = $row['Name_User'];
        $pass = $row['Pass_User'];
        $email = $row['Email_User'];
        $phone = $row['Phone_User'];
        $per = $row['User_Taype'];
        echo "
        <form name='User' id='edit_user' action='' method='POST' enctype='multipart/form-data'>
        <div class='table-responsive'>
            <table class='table'>
                <tr>
                    <td><label class='form-label'>Name:</label></td>
                    <td><input class='form-control' id='name' type='text' value='$name' name='Name_User' placeholder='FristName MiddlelName LastName'></td>
                </tr>
                <tr>
                    <td><label>Password:</label></td>
                    <td><input class='form-control' id='pass' type='text' value='$pass' name='Pass_User' placeholder='Must be at least 4 characters in uppercase, lowercase, number, symbol'>
                    </td>
                </tr>
                <tr>
                    <td><label>Confirm Password:</label></td>
                    <td><input class='form-control' id='pass1' type='password' value='$pass' name='Pass_User'></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input class='form-control' id='email' type='email' value='$email' name='Email_User '></td>
                </tr>
                <tr>
                    <td><label>Phone Number:</label></td>
                    <td><input class='form-control' id='tel' type='tel' value='$phone' name='Phone_User' placeholder='Must consist of 9 numbers'></td>
                </tr>
               
                <tr>
                    <td><label>Permission:</label></td>
                    <td><input type='text' class='form-control' value='$per' disabled>
                        <select name='user_per' id='per'>
                            <option>Choose the Permation</option>
                            <option value='Admin'>Admin</option>
                            <option value='User'>User</option>
                        </select></td>
                </tr>
                <tr>
                    <td><input type='hidden' name='myid' value = '$id'></td>
                    <td>
                        <input class='btn btn-success' type='submit' value='Save' name='save_edit'>
                        <a href='./users.php' class='btn btn-danger'>Cancel</a>
                    </td>
                </tr>
            </table>
        </div>
    </form>
        ";
    }
    ?>
    <?php
    if(isset($_POST['save_edit'])){
        require_once('../conaction.php');
        $id = $_POST['myid'];
            $name = $_POST['Name_User'];
            $password = md5($_POST['Pass_User']);
            $email = $_POST['Email_User '];
            $phone = $_POST['Phone_User'];
            $type = $_POST['User_Taype'];
          
                $sql = "UPDATE `users` SET `Name_User` = '$name', `Pass_User` = '$password',
                `Email_User` = '$email', `Phone_User` = '$phone',`User_Taype` = '$type' WHERE `users`.`Id_User ` = $id";
            if(!$result = mysqli_query($conn,$sql))
                {
                    echo "Update Error" . mysqli_error($conn);
                }
            else{
            header("Location:users.php");
            }
    }
    ?>
</main>
<!-- end main  -->
<?php
require_once('foter.php');
?>