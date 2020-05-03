<?php
     include("php/include/config.php ");
     if(isset($_POST['e_mail']))
     {
         $email=$_POST['e_mail'];
         $sql="select * from user_credentials where r_email='$email'";
         $res=mysqli_query($conn,$sql);
         echo mysqli_num_rows($res);
     }
?>