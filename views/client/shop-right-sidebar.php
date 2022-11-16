<!doctype html>
<html lang="en">

<!-- Mirrored from web.dotthemes.com/html/dotbike-preview/dotbike/shop-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:55:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DotBike | Shop pages</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="img/apple-touch-icon.png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/asset.css">
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    
   
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-12">
                    <ul>
                        <li><a href="index.html">Home</a> <span><i class="fa fa-angle-right"></i></span></li>
                        <li><a href="index.html">Products</a> <span><i class="fa fa-angle-right"></i></span></li>
                        <li>Bikes & Frames</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <!--breadcrumbs-area end -->
    <!--shop-area start-->
    <div class="shop-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="shop-item-filter">
                        
                        <div class="toolber-form  middle">
                           <p class="filter-title">Show: </p>
                            <div class="filter-form show-form">
                                <form action="#">
                                    <select>
                                        <option value="">12</option>
                                        <option value="">14</option>
                                        <option value="">16</option>
                                        <option value="">18</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!--tab-list start-->
                        <div class="shop-tab">
                            <!-- <ul role="tablist">
                                <li role="presentation" class="active"><a href="#grid-view" aria-controls="grid-view" role="tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a href="#list-view" aria-controls="list-view" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                            </ul> -->
                        </div>
                        <!--tab-list end-->
                    </div>
                    
                    <div class="row">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="grid-view">

                                <!-- Đổ ra sản phẩm người dùng -->
                               <?php foreach( $ds_sp as $key => $value) :   ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-product text-center">
                                            
                                            <div class="single-product-inner">
                                                <div class="product-img" style="height: 170px ;">
                                                    <img src="views/template/image/product/<?=$value['image'] ?>" alt="">
                                                </div>
                                                <div class="product-details">
                                                    <div class="name" style="height: 50px ; margin-bottom: 10px ;">
                                                        <h3>
                                                            <a href="index.php?url=chi_tiet_san_pham&id=<?php echo $value['id']?>&id_category=<?php echo $value['id_category']?>">
                                                                <?=$value['name'] ?>
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    
                                                    <div class="revew">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <div class="old-price"><span><?= number_format($value['price'])?></span></div>
                                                        <div class="new-price">
                                                            <span>
                                                                <?php echo number_format(($value['price'] - $value['sale'] ))  ?>
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="product-hover">
                                                    <ul>
                                                        <!-- <li><a href="#" class="add-to-cart">Add to cart</a></li> -->
                                                        <li><a title="Add to Wishlist" href="#" class="add-to-cart"><i class="fa fa-check-square-o"></i></a></li>
                                                        <li><a title="Add to compare" href="#" class="add-to-cart"><i class="fa fa-signal"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach ?>
                            </div>

                            <!-- <div role="tabpanel" class="tab-pane" id="list-view">
                                <div class="col-md-12 col-sm-12 col-xs-12 product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-img">
                                                <span class="price">off <br> 30%</span>
                                                <img src="img/product/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-details">
                                                <h3><a href="#">Dot Bike Express-MR868</a></h3>
                                                <div class="product-review">
                                                    <div class="revew">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <div class="ratting-count">
                                                        <p>15 Reviews</p>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <div class="old-price"><span>$300.00</span></div>
                                                    <div class="new-price"><span>$260.00</span></div>
                                                </div>
                                                <div class="producut-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="product-action-btn">
                                                    <ul>
                                                        <li><a class="add_cart" href="#">Add to cart</a></li>
                                                        <li><a class="Wishlist" href="#"><i class="fa fa-heart"></i>Add to Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-img">
                                                <img src="img/product/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-details">
                                                <h3><a href="#">Dot Bike Express-MR868</a></h3>
                                                <div class="product-review">
                                                    <div class="revew">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <div class="ratting-count">
                                                        <p>15 Reviews</p>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <div class="old-price"><span>$300.00</span></div>
                                                    <div class="new-price"><span>$260.00</span></div>
                                                </div>
                                                <div class="producut-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="product-action-btn">
                                                    <ul>
                                                        <li><a class="add_cart" href="#">Add to cart</a></li>
                                                        <li><a class="Wishlist" href="#"><i class="fa fa-heart"></i>Add to Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-img">
                                                <span class="price">off <br> 30%</span>
                                                <img src="img/product/1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-details">
                                                <h3><a href="#">Dot Bike Express-MR868</a></h3>
                                                <div class="product-review">
                                                    <div class="revew">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <div class="ratting-count">
                                                        <p>15 Reviews</p>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <div class="old-price"><span>$300.00</span></div>
                                                    <div class="new-price"><span>$260.00</span></div>
                                                </div>
                                                <div class="producut-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="product-action-btn">
                                                    <ul>
                                                        <li><a class="add_cart" href="#">Add to cart</a></li>
                                                        <li><a class="Wishlist" href="#"><i class="fa fa-heart"></i>Add to Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-img">
                                                <img src="img/product/4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-details">
                                                <h3><a href="#">Dot Bike Express-MR868</a></h3>
                                                <div class="product-review">
                                                    <div class="revew">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <div class="ratting-count">
                                                        <p>15 Reviews</p>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <div class="old-price"><span>$300.00</span></div>
                                                    <div class="new-price"><span>$260.00</span></div>
                                                </div>
                                                <div class="producut-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="product-action-btn">
                                                    <ul>
                                                        <li><a class="add_cart" href="#">Add to cart</a></li>
                                                        <li><a class="Wishlist" href="#"><i class="fa fa-heart"></i>Add to Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-img">
                                                <img src="img/product/5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-details">
                                                <h3><a href="#">Dot Bike Express-MR868</a></h3>
                                                <div class="product-review">
                                                    <div class="revew">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <div class="ratting-count">
                                                        <p>15 Reviews</p>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <div class="old-price"><span>$300.00</span></div>
                                                    <div class="new-price"><span>$260.00</span></div>
                                                </div>
                                                <div class="producut-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="product-action-btn">
                                                    <ul>
                                                        <li><a class="add_cart" href="#">Add to cart</a></li>
                                                        <li><a class="Wishlist" href="#"><i class="fa fa-heart"></i>Add to Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-img">
                                                <span class="price">off <br> 30%</span>
                                                <img src="img/product/6.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-details">
                                                <h3><a href="#">Dot Bike Express-MR868</a></h3>
                                                <div class="product-review">
                                                    <div class="revew">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <div class="ratting-count">
                                                        <p>15 Reviews</p>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <div class="old-price"><span>$300.00</span></div>
                                                    <div class="new-price"><span>$260.00</span></div>
                                                </div>
                                                <div class="producut-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="product-action-btn">
                                                    <ul>
                                                        <li><a class="add_cart" href="#">Add to cart</a></li>
                                                        <li><a class="Wishlist" href="#"><i class="fa fa-heart"></i>Add to Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>

                    <div class="pagination-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination-inner">
                                    <ul>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">next</a></li>
                                    </ul>
                                </div>
                                <div class="showing-page"><p>Showing 1 to 12 of 12 (1 Pages)</p></div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="price-slider-box">
                        <!-- <div class="price-filter">
                            <div class="price-slider-title">
                                <h6>Min / Max Price</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="price-slider-top">
                                    <div class="input-type">
                                        <input type="text" id="min-price" />
                                    </div>
                                    <div class="input-type">
                                        <input type="text" id="max-price" />
                                    </div>
                                </div>
                                <div id="price-slider" class="price-slider"></div>
                            </form>
                        </div> -->
                        <!-- /.price-filter -->
                    </div>
                    
                    <div class="categoryies-option">
                        <h4>Hãng xe</h4>
                        <ul>
                            <?php foreach(danhSachDanhMuc() as $key => $value) : ?>
                                <li style="padding-left:  20px; color: black!important;">
                                    <!-- <input id="Road" type="checkbox" name="Road"> -->
                                    <label for="Road">
                                        <a style="color: #666666; hover: text-decorated: underline;" href="index.php?url=ds_san_pham_theo_dm&id=<?php echo $value['id'] ?>"><?=$value['name']?><span> (15)</span></a>
                                        
                                    </label>
                                </li>
                            <?php endforeach ?>

                        </ul>
                    </div>
                    <div class="categoryies-option color-box">
                        <h4>color</h4>
                        <ul>
                            <li>
                                <input id="asbestos" class="asbestos" type="checkbox" name="asbestos">
                                <label for="asbestos">Road bike<span> (15)</span></label>
                            </li>
                            <li>
                                <input id="white" class="white" type="checkbox" name="white">
                                <label for="white">White<span> (12)</span></label>
                            </li>
                            <li>
                                <input id="green" class="green" type="checkbox" name="green">
                                <label for="green">folding bike<span> (13)</span></label>
                            </li>
                            <li>
                                <input id="belize" class="belize" type="checkbox" name="belize">
                                <label for="belize">folding bike<span> (13)</span></label>
                            </li>
                            <li>
                                <input id="pomegramate" class="pomegramate" type="checkbox" name="pomegramate">
                                <label for="pomegramate">folding bike<span> (13)</span></label>
                            </li>
                            <li>
                                <input id="orange" class="orange" type="checkbox" name="orange">
                                <label for="orange">folding bike<span> (13)</span></label>
                            </li>
                            <li>
                                <input id="block" class="block" type="checkbox" name="block">
                                <label for="block">folding bike<span> (13)</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="categoryies-option">
                        <h4>size</h4>
                        <ul>
                            <li>
                                <input id="s" type="checkbox" name="s">
                                <label for="s">s<span> (32)</span></label>
                            </li>
                            <li>
                                <input id="M" type="checkbox" name="M">
                                <label for="M">M<span> (25)</span></label>
                            </li>
                            <li>
                                <input id="L" type="checkbox" name="L">
                                <label for="L">L<span> (41)</span></label>
                            </li>
                            <li>
                                <input id="XL" type="checkbox" name="XL">
                                <label for="XL">XL<span> (20)</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="categoryies-option">
                        <h4>availabilty</h4>
                        <ul>
                            <li>
                                <input id="Not" type="checkbox" name="Not">
                                <label for="Not">Not available <span> (7)</span></label>
                            </li>
                            <li>
                                <input id="stock" type="checkbox" name="stock">
                                <label for="stock">In stock <span> (30)</span></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All js plugins included in this file. -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>

</body>


<!-- Mirrored from web.dotthemes.com/html/dotbike-preview/dotbike/shop-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:55:33 GMT -->
</html>