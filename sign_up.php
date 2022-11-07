<?php
require_once("Header.php");
require_once("nav.php");
?>
<!-- main  -->
<?php
$E_user_name ="";
$E_Password1 ="";
$E_eq ="";
$E_email ="";
$E_phone ="";
if(isset($_POST['ok'])){
    require_once('conaction.php');
    $name = $_POST['Name_User'];
    $password1 = md5($_POST['Pass_User']);
    $email = $_POST['Email_User '];
    $phone = $_POST['Phone_User'];
    $uppercase = preg_match('@[A-Z]@', $password1 );
    $lowercase = preg_match('@[a-z]@', $password1 );
    $number = preg_match('@[0-9]@', $password1 );
    $specialChars = preg_match('@[^\w]@', $password1 );

if (empty($name) || (!(ctype_alpha($name))))
{
    $E_user_name ="you most enter the name";
}
elseif(empty($password1)||!$uppercase||!$lowercase||!$number||!$specialChars||strlen($password1)<4){
    $E_Password1 ="password should be at least 4 characters in length ";
}
elseif(empty($email)||(!filter_var($email, FILTER_VALIDATE_EMAIL)))
{
    $E_email ="your email is either empty ";
}elseif(empty($phone)||(!(ctype_digit($phone)))||strlen($phone)<9){
    $E_phone ="your phone is either empty ";
}

$sql = "INSERT INTO `users` (`Name_User`, `Pass_User`, `Email_User`, `Phone_User`)
VALUES ('$name', '$password','$email', '$phone')";
$result = mysqli_query($conn,$sql);
if(!$result){
   echo "Insert Error" . mysqli_error($conn);
}
mysqli_close($conn);
}

?>
<div style="margin-top:20px;margin-bottom:20px;" class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h3>Register on the site</h3>
        <form name="Register" id="reg" action="sign_up.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><label class="form-label">Name:</label></td>
                    <td><input class="form-control" id="name" type="text" name="Name_User" placeholder="FristName MiddlelName LastName"></td>
                    <td>
                        <pre> *</pre>
                    </td>
                </tr>
                <tr>
                    <td><label>Password:</label></td>
                    <td><input class="form-control" id="pass" type="password" name="Pass_User" placeholder="Must be at least 4 characters in uppercase, lowercase, number, symbol"></td>
                    <td>
                        <pre> *</pre>
                    </td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input class="form-control" id="email" type="email" name="Email_User "></td>
                    <td>
                        <pre> *</pre>
                    </td>
                </tr>
                <tr>
                    <td><label>Phone Number:</label></td>
                    <td><input class="form-control" id="tel" type="tel" name="Phone_User" placeholder="Must consist of 9 numbers"></td>
                    <td>
                        <pre> *</pre>
                    </td>
                </tr>
                <tr>
                    <td><label class="form-check-label">Agree:</label> </td>
                    <td><input class="form-check-input" type="checkbox" name="agree" onclick="theChecker();">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-primary" type="submit" value="Register" name="ok">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['ok'])){
            require_once('conaction.php');
            $name = $_POST['Name_User'];
            $password = md5($_POST['Pass_User']);
            $email = $_POST['Email_User '];
            $phone = $_POST['Phone_User'];
               $sql = "INSERT INTO `users` (`Name_User`, `Pass_User`, `Email_User`, `Phone_User`)
VALUES ('$name', '$password','$email', '$phone')";
$result = mysqli_query($conn,$sql);
if(!$result){
   echo "Insert Error" . mysqli_error($conn);
}
mysqli_close($conn);
}
        ?>
    </div>
    <div class="col-md-2"></div>
</div>
<?php
require_once('foter.php');
?>