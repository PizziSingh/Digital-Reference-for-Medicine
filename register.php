<?php
include('php/include/header.php');
?>


<div class="page-bread mb70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Sign Up</h3>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</div>
<div class="container mb70">
    <div>
        <h3 class="font300 mb0 text-center">Create an account. It's Free!</h3>
        <hr>
    </div>
    <div class="row">

        <form method="post" action="php/register_process.php">

            <div class="col-sm-6">
                <div class="border-card">
                    <h3 class="font300 mb0 text-center">Personal Details</h3>
                    <hr>

                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" id="name" class="form-group-icon form-control" placeholder="Enter Name" required autocomplete="off">
                        <span id="name_error"></span>
                    </div>

                    <div class="form-group">
                        <label>Email address</label><span id="availibility"></span>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="pwd" type="text" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div>
                        <label>Phone No.</label>
                        <input name="cno" type="text" class="form-control" placeholder="Enter Phone No." required>
                    </div>
                </div>
                <input type="submit" value="SignUp" id="register" class='btn btn-primary btn-block'>

            </div>




            <div class="col-sm-6">
                <div class="border-card">
                    <h3 class="font300 mb0 text-center">Professional Details</h3>
                    <hr>

                    <div class="form-group">
                        <label>Profession Type</label>

                        <select name="pt_name" class="form-control">
                            <?php
                            include('php/include/config.php');

                            $sql = 'select * from profession_type';

                            $catres = mysqli_query($conn, $sql);
                            $co = 1;

                            while ($catrow = mysqli_fetch_assoc($catres)) {
                                echo "<option value='" . $catrow['pt_id'] . "'>" . $catrow['pt_name'] . "</option>";
                                $co++;
                            }

                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Specialty</label>

                        <select class="form-control" name="s_name">
                            <?php
                            include('php/include/config.php');

                            $sql = 'select * from speciality';

                            $catres = mysqli_query($conn, $sql);
                            $co = 1;

                            while ($catrow = mysqli_fetch_assoc($catres)) {
                                echo "<option value='" . $catrow['s_id'] . "'>" . $catrow['s_name'] . "</option>";
                                $co++;
                            }

                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Practice Type </label>

                        <select class="form-control" name="prt_name">
                            <?php
                            include('php/include/config.php');

                            $sql = 'select * from practice_type';

                            $catres = mysqli_query($conn, $sql);
                            $co = 1;

                            while ($catrow = mysqli_fetch_assoc($catres)) {
                                echo "<option value='" . $catrow['prt_id'] . "'>" . $catrow['prt_name'] . "</option>";
                                $co++;
                            }

                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Birth Year</label>
                        <input name="dob" type="date" class="form-control" placeholder="Confirm Birth Year" required>

                    </div>
                    <div>
                        <label>Graduation Year</label>
                        <input name="yog" type="date" class="form-control" placeholder="Enter Graduation Year" required>
                    </div>
                    <div>
                    </div>

                </div>

            </div>



        </form>



    </div>


</div>

</div>
<script>
    $(document).ready(function() {
        $('#email').blur(function() {

            var email = $(this).val();
            $.ajax({
                url: 'check.php',
                method: 'POST',
                data: {
                    e_mail: email
                },
                success: function(data) {
                    if (data != 0) {
                        $('#availibility').html('<span style="color:red;">Email Already Taken</span>');
                        $('#register').attr("disabled", true);
                    } else {
                        $('#availibility').html('<span style="color:green;">Email Available</span>');
                        $('#register').attr("disabled", false);
                    }
                }
            })
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#name').keyup(function() {
            var regex = /^[a-zA-Z]+$/;
            if (regex.test($('#name').val())) {
                $('#name_error').hide;
                $('#name_error').html('<span style="color:red;">Correct</span>');

            } else {
                $('#name_error').html('<span style="color:red;">Incorrect</span>');
            }
        })
    })
</script>

<?php
include('php/include/footer.php');
?>