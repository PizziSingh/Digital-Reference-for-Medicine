<?php
include('php/include/header.php');
include('php/include/config.php');


$name = $_POST['medname'];

$med_q = "select * from medicine_info where med_name='$name'";
$med_res = mysqli_query($conn, $med_q);
$med_row = mysqli_fetch_array($med_res);

?>
<div class="listing-detail-header mb50">
    <div class="container">
        <h2 class="font500"><?php echo $med_row['med_name'] ?></h2>
        <h3 class="font500">Manufactured By : <?php echo $med_row['manufacturer'] ?></h3>
        <h3 class="font500">Generic Name : <?php echo $med_row['generic_name'] ?></h3>
        <h3 class="font400">Brand Name : <?php echo $med_row['brand_name'] ?></h3>
        <p><i class="fa fa-map-signs"></i> <?php echo $med_row['med_name'] ?></p>

        <ul class="rating-list list-inline clearfix">
            <li><i class="fa fa-star text-warning"></i></li>
            <li><i class="fa fa-star text-warning"></i></li>
            <li><i class="fa fa-star text-warning"></i></li>
            <li><i class="fa fa-star text-warning"></i></li>
            <li><i class="fa fa-star-half-empty text-warning"></i></li>
            <li>(234)</li>
            <li class="pull-right"><a href="#review" class="link-underline">Submit a Review</a></li>
        </ul>
    </div>
</div>
<div class="listing-slider-row mb70">
    <div class="owl-carousel owl-theme detail-slider">
        <div class="item">
            <img src="images/img1.jpg" alt="" class="img-responsive">
        </div>
        <div class="item">
            <img src="images/img2.jpg" alt="" class="img-responsive">
        </div>
        <!-- <div class="item">
                    <img src="images/img3.jpg" alt="" class="img-responsive">
                </div>
                <div class="item">
                    <img src="images/img4.jpg" alt="" class="img-responsive">
                </div>
                <div class="item">
                    <img src="images/img5.jpg" alt="" class="img-responsive">
                </div>
                <div class="item">
                    <img src="images/img6.jpg" alt="" class="img-responsive">
                </div> -->
    </div>
</div>

<div class="container mb30">
    <div class="row">
        <div class="col-sm-8 mb40">
                <div class="card">
                    <h5>Featured</h5>
                </div>
                <div class="card">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text"><?php echo $med_row['description'] ?></p>

                </div>
            

            <?php

            $id = $med_row['med_id'];
            $usage_q = "select * from med_usage where med_id='$id'";
            $usage_res = mysqli_query($conn, $usage_q);
            ?>
            <br>
            <div class="card">
                <div class="card-header">
                    <h5>Featured</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <?php
                        while ($usage_row = mysqli_fetch_array($usage_res)) {
                            echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">' ?>
                            <?php echo $usage_row['uname'] ?>
                            <?php echo '</h5>
            
        </div>
        <p class="mb-1">' ?>
                            <?php echo $usage_row['description'] ?>
                        <?php echo '
        </p>
        
    </a>';
                        } ?>
                    </div>
                </div>
            </div>  

                <div class="list-group">
                    <h3 class="font700 left-title mb25">Side effects</h3>
                    <?php

                    $id = $med_row['med_id'];
                    $side_q = "SELECT * from sideeffect,sideeffect_level where sideeffect_level.lid=sideeffect.lid and med_id=$id";
                    $side_res = mysqli_query($conn, $side_q);
                    ?>
                    <ul class="list-group">
                        <?php
                        while ($side_row = mysqli_fetch_assoc($side_res)) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">' ?>
                            <?php echo $side_row['sname'] ?>
                            <?php
                            if ($side_row['lid'] == 1) {
                                echo '
                        <span class="badge badge-danger badge-pill">' ?> <?php echo $side_row['lname'] ?>
                            <?php
                            } ?>
                            <?php
                            if ($side_row['lid'] == 2) {
                                echo '
                        <span class="badge badge-warning badge-pill">' ?> <?php echo $side_row['lname'] ?>
                            <?php
                            } ?>
                            <?php
                            if ($side_row['lid'] == 3) {
                                echo '
                        <span class="badge badge-info badge-pill">' ?> <?php echo $side_row['lname'] ?>
                            <?php
                            } ?>
                        <?php echo '</span>
                </li>';
                        }
                        ?>

                    </ul>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>


            <h3 class=" mb25">Reviews</h3>
            <div class="clearfix review-box mb35">
                <img src="images/av1.jpg" alt="" class="img-responsive img-circle pull-left" width="80">
                <div class="overflow-hidden">
                    <span class=" pull-right">4 days ago</span>
                    <ul class="list-inline rating-list mb20">
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star-half-empty text-warning"></i></li>
                    </ul>
                    <p>
                        Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
            </div>
            <!--/review-box-->
            <div class="clearfix review-box mb35">
                <img src="images/av2.jpg" alt="" class="img-responsive img-circle pull-left" width="80">
                <div class="overflow-hidden">
                    <span class=" pull-right">6 days ago</span>
                    <ul class="list-inline rating-list mb20">
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star-half-empty text-warning"></i></li>
                    </ul>
                    <p>
                        Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
            </div>
            <!--/review-box-->
            <div class="clearfix review-box mb45">
                <img src="images/av3.jpg" alt="" class="img-responsive img-circle pull-left" width="80">
                <div class="overflow-hidden">
                    <span class=" pull-right">3 days ago</span>
                    <ul class="list-inline rating-list mb20">
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star text-warning"></i></li>
                        <li><i class="fa fa-star-half-empty text-warning"></i></li>
                    </ul>
                    <p>
                        Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
            </div>
            <!--/review-box-->
            <h3 class="left-title mb25">Submit a Review</h3>
            <form id="review">
                <div class="form-group">
                    <label for="title">Title of your review</label>
                    <input type="text" id="title" class="form-control" placeholder="Beautiful Place...!">
                </div>
                <div class="form-group">
                    <label for="msgr">Your Message</label>
                    <textarea class="form-control" rows="6" id="msgr" placeholder="Describe your experience"></textarea>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <div class="mb40">
                <h2 class="font300 mb25"><i class="fa fa-heart-o text-danger"></i> 413 <small>People Love it</small>
                </h2>
                <h2 class="font300 mb25"><i class="fa fa-star text-warning"></i> 4.8/5 <small>From <a href="#reviews" class="link-underline">234 Reviews</a></small></h2>
                <!-- <div class="buttons">
                    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-bag"></i>Book Now</a>
                    <a href="#" class="btn btn-warning"><i class="fa fa-hand-peace-o"></i> Claim</a>
                </div> -->
            </div>
            <!-- <div class="mb40">
                            <h3 class="left-title mb25">Working Hours</h3>
                            <div class="working-hours">
                                <div class="day clearfix">
                                    <span class="name">Mon</span><span class="hours">07:00 AM - 07:00 PM</span>
                                </div>

                                <div class="day clearfix">
                                    <span class="name">Tue</span><span class="hours">07:00 AM - 07:00 PM</span>
                                </div>

                                <div class="day clearfix">
                                    <span class="name">Wed</span><span class="hours">07:00 AM - 07:00 PM</span>
                                </div>

                                <div class="day clearfix">
                                    <span class="name">Thu</span><span class="hours">07:00 AM - 07:00 PM</span>
                                </div>

                                <div class="day clearfix">
                                    <span class="name">Fri</span><span class="hours">07:00 AM - 07:00 PM</span>
                                </div>

                                <div class="day clearfix">
                                    <span class="name">Sat</span><span class="hours">07:00 AM - 02:00 PM</span>
                                </div>

                                <div class="day clearfix">
                                    <span class="name">Sun</span><span class="hours">Closed</span>
                                </div>
                            </div>
                        </div> -->
            <div class="mb40">
                <h3 class="left-title mb25">Enquire Form</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea class="form-control" rows="6" id="msg"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


<!--footer-->
<?php
include('php/include/footer.php');
?>