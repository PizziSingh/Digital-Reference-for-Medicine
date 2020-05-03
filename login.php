<?php  
include("php/include/header.php");
?>


<div class="page-bread mb70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Sign In</h3>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</div>
<div class="container mb70">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="border-card">
                <h3 class="font300 mb0 text-center">Login to your account</h3>
                <hr>
                <?php
                    if(!empty($_SESSION['error']))
                    {
                       
                            print_r($_SESSION['error']);

                            unset($_SESSION['error']);
                        
                    }
                ?>
              
                <form role='form' action="php/login_process.php" method="post">
                    <div class='form-group-icon mb15'>
                        <i class='fa fa-envelope'></i>
                        <input type="text" name="email" class='form-control' placeholder="Email Address   " required>
                    </div>
                    <div class='form-group-icon mb15'>
                        <i class='fa fa-lock'>
                        </i><input type="text" name="pwd" class='form-control' placeholder="Password" required>
                    </div>
                    <div class="checkbox">
                        <label for="rm">
                            Forgot Password
                        </label>
                    </div>
                    <input type="submit" value="Login" class='btn btn-default btn-lg btn-block'>
                </form>
                <hr>

                <!-- <div class='buttons-login'>
                        <a href='#' class='btn btn-facebook btn-social btn-block'><i class='fa fa-facebook'></i> Login with facebook</a>
                        <a href='#' class='btn btn-twitter btn-social btn-block'><i class='fa fa-twitter'></i> Login with facebook</a>
                        <a href='#' class='btn btn-gplus btn-social btn-block'><i class='fa fa-google-plus'></i> Login with facebook</a>
                    </div> -->
            </div>
        </div>
    </div>
</div>
<?php
include("php/include/footer.php");
?>
