
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'Tooldb';

 $conn = @mysqli_connect($server,$username,$password,$db_name);
 if(!$conn){
     die("Connect Error");
 }
 //echo "<script>alert('تم الاتصال بنجاح')</script>";
?>