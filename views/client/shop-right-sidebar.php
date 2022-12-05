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
                           <p class="filter-title">Xem: </p>
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
                        
                    </div>
                    
                    <div class="row">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="grid-view">

                                <!-- Đổ ra sản phẩm người dùng -->
                               <?php foreach( $ds_sp as $key => $value) :   ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-product text-center">
                                            
                                            <div class="single-product-inner">
                                                <div class="product-img" style="height: 190px ;">
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
                                <div class="showing-page"><p>Hiển thị 1 đến 12 trên 12 (1 Trang)</p></div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <?php include('views/template/aside.php'); ?>
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