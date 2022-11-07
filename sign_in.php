 <?php 
session_start();

 ?>
 <?php

require_once("heder_signin.php");
?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Signin</title>
  <!-- Custom styles for this template -->
</head>

<body class="text-center">
    <?php  
    $E_email="";
    $E_passwrod="";
    $er="";
    $Ok= 1;
if(isset($_POST['login']))
{
    if(isset($_POST['email'])&&isset($_POST['password']))
{
    $email= $_POST['admin_email'];
    $password= $_POST['admin_password'];
if(empty($email)){
    $E_email= "please Enter the email";
    $Ok= 0;
}
if(empty($password)){
    $E_password= "please Enter the password";
    $Ok= 0;
}
if($Ok==1){
   require_once ("../conaction.php");
   $password= md5($_POST['admin_password']);
   //$per = 'admin' ;
   $sql ="select * from admin where email ='$email' and password ='$password'";
$exec = mysqli_query($conn ,$sql);
//تدي لنا الاسماء بطريقة مترابطة
while($row = mysqli_fetch_assoc($exec))
{
    if($email ==$row['email'] && $password == $row['password'] )
    {
        $_SESSION['admin_email'] = $row ['email']  ;
        $_SESSION['admin_password'] = $row ['password']  ;
        header('location:maneg_heels.php');
    }
}
if(!$email ==$row['email'] && !$password == $row['password'])
{
    $er ='Erorr in email or password'; 
}
}
}
}
    ?>
  <main class="form-signin w-100 m-auto">
    <form action="" method="post">
      <svg class="mb-4" xmlns="http://www.w3.org/2000/svg" width="72" height="57" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
      </svg>
      <h1 class="h3 mb-3 fw-normal"> Sign_in </h1>
      <div class="form-floating">
        <input type="Username" class="form-control" id="floatingInput" placeholder="email" name="admin_email">
        <label for="floatingInput">email</label>
        <p style="backgroung-color:red;"><?php echo $E_email;?></p>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="admin_password">
        <label for="floatingPassword">Password</label>
        <p style="backgroung-color:red;"><?php echo $E_passwrod;?></p>

      </div>
      <p style="backgroung-color:red;"><?php echo $er;?></p>

      <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; Batool&Rana</p>
    </form>
  </main>

</body>

</html>