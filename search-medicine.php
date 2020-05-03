<?php
include("php/include/header.php");
?>

<div class="page-bread mb70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Medicine Results</h3>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</div>
<div class="container mb70">
    <div class="row">
        <form action="medicine-detail.php" method="POST">
            <div class="col-md-3 col-sm-6">
                <div class="form-group">
                    <input type="text" id="medicine" name="medicine" class=" search_text form-control " autocomplete="off" placeholder="Keywords...">
                </div>
                <div id="medicineresult">

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <input type="submit" class="btn btn-primary btn-block" value="Search">
            </div>
        </form>
    </div>
</div>
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
                <h2>50 Results found</h2>
                <p>
                    List most recent places are submitted by our users. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

            </div>
        </div>
        <!--/row-->
        <div class="clearfix">
            <div class="pull-right">
                <div class="form-group">
                    <select class="form-control" title="Sorting">
                        <option>Popular</option>
                        <option>Low Price</option>
                        <option>Best Rating</option>
                        <option>High price</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img1.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Drinks</a>
                            <h3><a href="#">Tasty Coffee</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div>
                        <!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img2.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Restaurant</a>
                            <h3><a href="#">Italian Food</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div>
                        <!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img3.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Vacation</a>
                            <h3><a href="#">Beach Life</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <!--/card-content-->
                        s
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
5                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img5.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Bars</a>
                            <h3><a href="#">Soft Drink</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img6.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Swimming</a>
                            <h3><a href="#">Swimming Pools</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img7.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Electronics</a>
                            <h3><a href="#">Mobile Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img8.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Shop</a>
                            <h3><a href="#">Cloth Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img1.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Drinks</a>
                            <h3><a href="#">Tasty Coffee</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img2.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Restaurant</a>
                            <h3><a href="#">Italian Food</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img3.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Vacation</a>
                            <h3><a href="#">Beach Life</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img4.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Property</a>
                            <h3><a href="#">House Rent</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img5.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Bars</a>
                            <h3><a href="#">Soft Drink</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img6.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Swimming</a>
                            <h3><a href="#">Swimming Pools</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img7.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Electronics</a>
                            <h3><a href="#">Mobile Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img8.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Shop</a>
                            <h3><a href="#">Cloth Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img1.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Drinks</a>
                            <h3><a href="#">Tasty Coffee</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img2.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Restaurant</a>
                            <h3><a href="#">Italian Food</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img3.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Vacation</a>
                            <h3><a href="#">Beach Life</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img4.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Property</a>
                            <h3><a href="#">House Rent</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img5.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Bars</a>
                            <h3><a href="#">Soft Drink</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
                        <!--/card-content-->
                        <!-- <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img6.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Swimming</a>
                            <h3><a href="#">Swimming Pools</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div>
                        /card-content -->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img7.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Electronics</a>
                            <h3><a href="#">Mobile Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
            <!--/card-content-->
            <div class="card-icons">
                <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- <div class="col-sm-6 col-md-3 mb30">
                <div class="card-overlay">
                    <img src="images/img8.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Shop</a>
                            <h3><a href="#">Cloth Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div> -->
<!--/card-content-->
<div class="card-icons">
    <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
    <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="text-center mb30">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#medicine').keyup(function() {

            var query = $(this).val();
            if (query != '') {
                $.ajax({
                    url: "search.php",
                    method: "POST",
                    data: {
                        query: query
                    },

                    beforeSend: console.log("query"),

                    complete: function(data) {

                        $('#medicineresult').fadeIn();
                        $('#medicineresult').html(data.responseText);
                    },

                });
            } else {
                $('#medicineresult').fadeOut();
                $('#medicineresult').html("");
            }
        });
        $(document).on('click', 'h6', function() {
            $('#medicine').val($(this).text());
            $('#medicineresult').fadeOut();

        })
    });
</script>
<!--footer-->
<?php
include("php/include/footer.php");
?>