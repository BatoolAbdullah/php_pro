<?php
    require_once("Header.php");
    require_once("nav.php");

?>

<!-- main  -->
<div style="margin-top:20px;margin-bottom:20px;" class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3>Contact Us</h3>
        <form id="contact" action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <input placeholder="Enter Your Name" name="name_sender" id="name_s" class="form-control" type="text" onchange="checkC();">
                </div>
            </div>
            <div style="margin-top:20px;margin-bottom:20px;" class="row">
                <div class="col-md-12">
                    <input placeholder="Enter Your Email" name="email_sender" id="email_s" class="form-control" type="email" onchange="checkC();">
                </div>
            </div>
            <div style="margin-top:20px;margin-bottom:20px;" class="row">
                <div class="col-md-12">
                    <textarea name="message" rows="10" class="form-control" onchange="checkC();"></textarea>
                </div>
            </div>
            <div style="margin-top:20px;margin-bottom:20px;" class="row">
                <div class="col-md-12">
                    <input type="submit" value="Send" class="btn btn-success" id="send_c" name="send">
                </div>
            </div>
        </form>
        <?php
        if(isset($_POST['send'])){
            require_once('conaction.php.');
            $name = $_POST['name_sender'];
            $email = $_POST['email_sender'];
            $text = $_POST['message'];
            //علاسب الكوما
            $textr = str_replace("'", "''", "$text");
            $sql = "insert into contct(User_name,User_email,Textcoment)values('$name','$email','$textr')";
            $result = mysqli_query($conn,$sql);
            if(!$result){
                echo "Erorr" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>
    </div>
    <div class="col-md-3"></div>
</div>

    <?php
        require_once("foter.php");

    ?>

