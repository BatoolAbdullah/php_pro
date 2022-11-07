<?php
$id_user = $_GET['userd'];
require_once('../conaction.php');
$sql = "delete from users where Id_User = '$id_user'";
$exe = mysqli_query($conn,$sql);
if(!$exe){
    die('Error' . mysqli_error($conn));
}
header('location:users.php');
mysqli_close($conn);
?>