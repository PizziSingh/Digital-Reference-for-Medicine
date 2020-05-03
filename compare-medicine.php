<?php
include('php/include/header.php');
include('php/include/config.php');


$med1 = 1;
$med2 = 2;

$med_q1 = "select * from medicine_info where med_id=$med1";
$med_q2 = "select * from medicine_info where med_id=$med2";
$usage_q1 = "select * from med_usage where med_id=$med1";
$usage_q2 = "select * from med_usage where med_id=$med2";
$med_res1 = mysqli_query($conn, $med_q1);
$med_res2 = mysqli_query($conn, $med_q2);
$usage_res1 = mysqli_query($conn, $usage_q1);
$usage_res2 = mysqli_query($conn, $usage_q2);

$med_row1 = mysqli_fetch_array($med_res1);
$med_row2 = mysqli_fetch_array($med_res2);

?>

<div class="page-bread mb70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center ">
                <h3>Pricing Tables</h3>

            </div>

        </div>
    </div>
</div>
<div class="container mb30">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
            <h2><?php echo "Compare " . $med_row1['med_name'] . "vs." . $med_row2['med_name']  ?> </h2>
            <p>
                Head-to-head comparisons of medication uses, side effects, ratings, and more.
            </p>
        </div>
    </div>

    <div class="row flex-container">
        <div class="column col-md-6 med-card">
            <h4><?php echo $med_row1['med_name'] ?><br><span class="badge btn-primary">Prescription Only</span></h4>
        </div>
        <div class="column col-md-6 med-card bg-alt">
            <h4><?php echo $med_row2['med_name'] ?><br><span class="badge btn-primary">Prescription Only</span></h4>
        </div>
    </div>
    <div class="row flex-container compare-heading">
        <h3>Description</h3>

    </div>
    <div class="row flex-container">
        <div class="column col-md-6 med-card">
            <h5>Lowers cholesterol. <br></h5>
            <p><?php echo $med_row1['description'] ?></p>
        </div>
        <div class="column col-md-6 med-card bg-alt">
            <h5 style="color:#4267b2;">Lowers cholesterol. <br></h5>
            <p><?php echo $med_row2['description'] ?></p>
        </div>
    </div>

    
    <div class="row flex-container compare-heading">
        <h3>Used For</h3>

    </div>
    <div class=" flex-container">
        <div class="column col-md-6 med-card">
            <div>
                <ul>
                <?php
                    while ($usage_row1 = mysqli_fetch_array($usage_res1)) {
                    echo '<li>'.$usage_row1['uname'].'</li>';
                    } 
                    ?>
                    
                </ul>
            </div>
        </div>
        <div class="column col-md-6 med-card bg-alt">
            <div>
                <ul>
                <?php
                    while ($usage_row2 = mysqli_fetch_array($usage_res2)) {
                    echo '<li>'.$usage_row2['uname']. '</li>';
                  
                    }
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <?php 
    $side_q1 = "select * from sideeffect,sideeffect_level where sideeffect.lid=sideeffect_level.lid and med_id=$med1";
    $side_res1 = mysqli_query($conn, $side_q1);
    $side_q2 = "select * from sideeffect,sideeffect_level where sideeffect.lid=sideeffect_level.lid and med_id=$med2";
    $side_res2 = mysqli_query($conn, $side_q2);
    ?>
    
    <div class="row flex-container compare-heading">
        <h3>Side Effects</h3>

    </div>
    <div class="row flex-container">
        <div class="column col-md-6 med-card">

            <ul>
            <?php
                    while ($side_row1 = mysqli_fetch_array($side_res1)) {
                        if($side_row1['lid']==1)
                            echo '<li>'.$side_row1['sname'].'<span class="badge btn-danger">'.$side_row1['lname'].'</span></li> ';
                        if($side_row1['lid']==2)
                            echo '<li>'.$side_row1['sname'].'<span class="badge btn-primary">'.$side_row1['lname'].'</span></li> ';
                            if($side_row1['lid']==3)
                            echo '<li>'.$side_row1['sname'].'<span class="badge btn-info">'.$side_row1['lname'].'</span></li> ';                        
                   
                    }
                    ?>
                    

            </ul>

        </div>
        <div class="column col-md-6 med-card bg-alt">
            <div>
                <ul>
                <?php
                while ($side_row2 = mysqli_fetch_array($side_res2)) {
                    echo '<li>'.$side_row2['sname']. '<span class="badge btn-primary">'.$side_row2['lname'].'</span></li>';
                    
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="row flex-container compare-heading">
        <h3>Dosage Form</h3>

    </div>
    <div class="row flex-container">
        <div class="column col-md-6 med-card">
            <p>Pill</p>
        </div>
        <div class="column col-md-6 med-card bg-alt">
            <p>Liquid</p>
        </div>
    </div>
    <div class="row flex-container compare-heading">
        <h3>Price</h3>

    </div>
    <div class="row flex-container">
        <div class="column col-md-6 med-card">
            <p><i class="fas fa-rupee-sign"></i><?php echo $med_row1['price'] ?></p>
        </div>
        <div class="column col-md-6 med-card bg-alt">
            <p><i class="fas fa-rupee-sign"></i><?php echo $med_row2['price'] ?></p>
        </div>
    </div>
    <div class="row flex-container compare-heading">
        <h3>Manufactured By</h3>

    </div>
    <div class="row flex-container">
        <div class="column col-md-6 med-card">
            <p><?php echo $med_row1['manufacturer'] ?></p>
        </div>
        <div class="column col-md-6 med-card bg-alt">
            <p><?php echo $med_row2['manufacturer'] ?></p>
        </div>
    </div>

   






</div>
<div class="gray-bg pt80 pb40">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
                <h2>What our customers say</h2>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-offset-0">
                <div class="owl-carousel owl-theme testimonial-slider mb40">
                    <div class="item">
                        <div class="testimonial-card">
                            <div class="content">
                                " There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. "
                            </div>
                            <div class="testimonial-author clearfix">
                                <img src="images/av1.jpg" alt="" class="img-responsive img-circle pull-left" width="90">
                                <div class="author-meta">
                                    <h5 class="mb0">John Doe</h5>
                                    <em>Finder Customer</em>
                                    <ul class="list-inline mb0 rating-list">
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star-half-empty text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="testimonial-card">
                            <div class="content">
                                " There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. "
                            </div>
                            <div class="testimonial-author clearfix">
                                <img src="images/av2.jpg" alt="" class="img-responsive img-circle pull-left" width="90">
                                <div class="author-meta">
                                    <h5 class="mb0">John Doe</h5>
                                    <em>Finder Customer</em>
                                    <ul class="list-inline mb0 rating-list">
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star-half-empty text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="testimonial-card">
                            <div class="content">
                                " There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. "
                            </div>
                            <div class="testimonial-author clearfix">
                                <img src="images/av3.jpg" alt="" class="img-responsive img-circle pull-left" width="90">
                                <div class="author-meta">
                                    <h5 class="mb0">John Doe</h5>
                                    <em>Finder Customer</em>
                                    <ul class="list-inline mb0 rating-list">
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star text-warning"></i></li>
                                        <li><i class="fa fa-star-half-empty text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/item-->
                </div>
                <!--/slider-->
                <!--                        <div class="download-app-card">
                                                    <div class="download-overlay">
                                                        <h1>Download Our Mobile App</h1>
                                                        <p>Available at Play store and app store. It's Free!</p>
                                                        <a href="#"><img src="images/google-play.png" alt=""></a>
                                                        <a href="#"><img src="images/appstore.png" alt=""></a>
                                                    </div>
                                                </div>-->
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb30">
                <h3>About Us</h3>
                <p>
                    Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo.
                </p>
                <ul class="list-inline f-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>

            </div>
            <div class="col-md-4 mb30">
                <h3>Support Information</h3>
                <p>
                    <small>Address:</small><br>
                    124, Lorem Street, New York, USA
                </p>
                <p>
                    <small>Call Us:</small><br>
                    <a href="#">+01 1800-234-45678</a>
                </p>
                <p>
                    <small>Mail Us:</small><br>
                    <a href="#">support@finder.com</a>
                </p>
            </div>
            <div class="col-md-4 mb30">
                <h3>useful links</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="f-links list-unstyled">
                            <li><a href="#">Restaurants</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Deal & Coupons</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Restaurants</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="f-links list-unstyled">
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Cinemas</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy & policy</a></li>
                            <li><a href="#">T & C</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; Copyright 2017. All Right Reserved.
        </div>
    </div>
</footer>
<!-- jQuery-->
<script src="js/plugins/all.js"></script>
<script src="js/finder.custom.js"></script>
<script>
    $(document).ready(function() {
        var height = Math.max($(".left-col").height(), $(".right-col").height());
        $(".left-col").height(height);
        $(".right-col").height(height);
    });
</script>

</body>

</html>