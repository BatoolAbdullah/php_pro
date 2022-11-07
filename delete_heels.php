<?php
$id = $_GET['val'];
require_once('../conaction.php');
$sql = "delete from heels where Id_heels  = '$id'";
$result = mysqli_query($conn,$sql);
if(!$result){
    echo "Delete Error" . mysqli_error($conn);
}
header('Location:maneg_heels.php');
mysqli_close($conn);
?>