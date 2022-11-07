
 <?php 
session_start();

 ?>
 <?php

require_once("heder_signin.php");

?>


<?php
//نضمن صفحة constants.php هنا
 include('../conaction.php');  ?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/ss.css">
    </head>

    <body>
        
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <!-- Login Form Start -->
            <form action="maneg_heels.php" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="Username" placeholder="Enter Username"><br><br>

            password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit"  action="maneg_heels.php" name="submit" value="Login" class="btn-priamry">
            <br><br>
            </form>
            <!-- Login Form End -->

         </div>

    </body>
</html>

<?php 

    //اتأكد اذا زر الدخول انضغط او لا
    if(isset($_POST['submit']))
    {
        
        //اجيب البيانات من فورم الدخول
         $Username = $_POST['username'];
        $password = md5($_POST['password']);
        $Username = mysqli_real_escape_string($conn, $_POST['Username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. اتأكد اذا اسم المستخدم وكلمة المرور موجودين في الداتابيس او لا
        $sql = "SELECT * FROM admin WHERE Username='$Username' AND password='$password'";

        //3. انفذ جملة الاستعلام
        $res = mysqli_query($conn, $sql);

        //4. اعد الصفوف عشان اتأكد اذا المستخدم موجود او لا  
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //اذا المستخدم موجود معناه تمت عملية الدخول
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $Username; 
            header('location:maneg_heels.php');
        }
        else
        {
            //اذا المستخدم مش موجود معناه فشل الدخول
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            header('location:login.php');
        }


    }

?>