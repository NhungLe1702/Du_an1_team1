<!doctype html>
<html lang="en">

<!-- Mirrored from web.dotthemes.com/html/dotbike-preview/dotbike/single-product-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:55:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DotBike | Single Product</title>
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
    
    <!--breadcrumbs-area start -->
    <div class="breadcrumbs-area">
        <div class="container">
           
        </div>
    </div>
    <!--breadcrumbs-area end -->
    <!--single-product-area start-->
    <div class="single-product-area page-bg page-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!--sigle-product-area-->
                    <div class="sigle-product-area">
                       <div class="row">
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                 <div class="single-product-tab">
                                    <div class="zoomWrapper">
                                        <div id="img-1" class="zoomWrapper single-zoom">
                                            <a href="#">
                                                <img id="zoom1" src="views/template/image/product/<?= $lay_sp['image'] ?>" data-zoom-image="views/template/image/product/<?php echo $lay_sp['image'] ?>" alt="big-1">
                                            </a>
                                        </div>
                                        <!-- <div class="single-zoom-thumb">
                                            <ul class="s-tab-zoom" id="gallery_01">
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="img/single-product/1.jpg" data-zoom-image="img/single-product/1.jpg"><img src="img/single-product/s1.png" alt="zo-th-1" /></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="elevatezoom-gallery" data-image="img/single-product/2.jpg" data-zoom-image="img/single-product/2.jpg"><img src="img/single-product/s2.png" alt="zo-th-2"></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="elevatezoom-gallery" data-image="img/single-product/3.jpg" data-zoom-image="img/single-product/3.jpg"><img src="img/single-product/s3.png" alt="ex-big-3" /></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="elevatezoom-gallery" data-image="img/single-product/4.jpg" data-zoom-image="img/single-product/4.jpg"><img src="img/single-product/s4.png" alt="zo-th-4"></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="img/single-product/1.jpg" data-zoom-image="img/single-product/1.jpg"><img src="img/single-product/s1.png" alt="zo-th-1" /></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="elevatezoom-gallery" data-image="img/single-product/2.jpg" data-zoom-image="img/single-product/2.jpg"><img src="img/single-product/s2.png" alt="zo-th-2"></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="elevatezoom-gallery" data-image="img/single-product/3.jpg" data-zoom-image="img/single-product/3.jpg"><img src="img/single-product/s3.png" alt="ex-big-3" /></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="elevatezoom-gallery" data-image="img/single-product/4.jpg" data-zoom-image="img/single-product/4.jpg"><img src="img/single-product/s4.png" alt="zo-th-4"></a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div> 
                            </div>


                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="single-product-detels">
                                    <h4 class="single-product-title"><?= $lay_sp['name'] ?></h4>
                                    
                                    <div class="single-price-box">
                                        <div class="tutole-price"><span><?= number_format(($lay_sp['price'] - $lay_sp['sale'] )) ?></span></div>
                                        <div class="revew">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <form action="#">
                                    <div class="quantity">
                                        <span class="single-product-btn">
                                            <a href="#">Đặt lịch xem xe</a>
                                        </span>
                                    </div>
                                </form>

                                <div class="product-det-tab">
                                    <!-- Nav tabs stat-->
                                    <ul style="border-bottom: 1px solid #ebebeb ;" class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#Description" aria-controls="Description" role="tab" data-toggle="tab">Thông tin</a></li>
                                        
                                    </ul>
                                    <!-- Nav tabs end-->
                                    <!-- Tab panes start -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="cont-pd tab-pane active" id="Description">
                                            <!-- <?= $lay_sp['description'] ?> -->
                                            <ul>
                                                <li > 
                                                    <label>Năm sản xuất: <span><?= $lay_sp['year'] ?></span></label>
                                                </li>

                                                <li>
                                                    <label>Xuất xứ: <span> <?= $lay_sp['origin'] ?></span></label>
                                                </li>

                                                <li>
                                                    <label>Hãng xe: <span> <?=  $lay_ten_danh_muc['name'] ?></span></label>
                                                    
                                                </li>
                                            </ul>
                                            <!-- <table>
                                                <thead>
                                                    <tr>
                                                        <th>Năm sản xuất</th>
                                                        <th>Xuất xứ</th>
                                                        <th>Hãng xe</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td><?= $lay_sp['year'] ?></td>
                                                        <td><?= $lay_sp['origin'] ?></td>
                                                        <td><?= $lay_sp['id_category'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table> -->

                                        </div>
                                        
                                    </div>
                                    <!-- Tab panes end -->
                                </div>
                                <div class="socil-media">
                                    <img src="img/socul-img.png" alt="">
                                </div>
                            </div>


                       </div>


                       <div class="related-product-area">
                           <div class="row">
                                <div class="col-md-12">
                                    <h4 class="related-title">Mô tả</h4>
                                </div>
                           </div>
                           <div class="row">
                                <div class="single-product-page-list">
                                    <div class="single_product-list">

                                    <div class="product-det-tab">
                                        
                                        <div class="tab-content">
                                            <div style="line-height: 25px;" role="tabpanel" class="cont-pd tab-pane active" id="Description">
                                                <?= $lay_sp['description'] ?>
                                                <!-- <ul>
                                                    <li > 
                                                        <label>Năm sản xuất: <span><?= $lay_sp['year'] ?></span></label>
                                                    </li>

                                                    <li>
                                                        <label>Xuất xứ: <span> <?= $lay_sp['origin'] ?></span></label>
                                                    </li>

                                                    <li>
                                                    <label>Hãng xe: <span> <?= $lay_sp['id_category'] ?></span></label>
                                                        
                                                    </li>
                                                </ul> -->
                                                

                                            </div>
                                            
                                        </div>
                                        <!-- Tab panes end -->
                                    </div>
                                          
                                </div>
                                    
                                </div>
                            </div>
                       </div>

                      


                       <div class="related-product-area">
                           <div class="row">
                                <div class="col-md-12">
                                    <h4 class="related-title">Sản phẩm cùng hãng</h4>
                                </div>
                           </div>
                           <div class="row">
                                <div class="single-product-page-list">
                                    <div class="single_product-list">


                                    <?php foreach( $laysp_cung_loai as $key => $value) :   ?>
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
                                    
                                </div>
                            </div>
                       </div>
                    </div>
                    <!--sigle-product-area-->
                </div>



                <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="price-slider-box"></div>
                    <div class="categoryies-option">
                        <h4>Hãng xe</h4>
                        <ul>
                            <?php foreach(danhSachDanhMuc() as $key => $value) : ?>
                                <li style="padding-left:  20px; color: black!important;">
                                   
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
                    
                </div> -->

                <?php include('views/template/aside.php') ?>
            </div>
        </div>
    </div>
    <!--single-product-area end-->
   
    
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