<?php
session_start();
if($_SESSION['admin_email']== null && $_SESSION['admin_password']== null)
{
header('location:login.php');
}
?>
