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
    <link rel="stylesheet" href="views/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/template/css/asset.css">
    <link rel="stylesheet" href="views/template/css/nivo-slider.css">
    <link rel="stylesheet" href="views/template/css/jquery-ui.css">
    <link rel="stylesheet" href="views/template/style.css">
    <link rel="stylesheet" href="views/template/css/responsive.css">
    
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
                                                <img id="zoom1" src="views/template/image/product/<?= $lay_sp['image'] ?>" data-zoom-image="views/template/image/product/<?= $lay_sp['image'] ?>" alt="big-1">
                                            </a>
                                        </div>

                                        <div class="single-zoom-thumb">
                                            <ul class="s-tab-zoom" id="gallery_01">
                                                
                                                <?php foreach($lay_img as $key => $value ) :?>
                                                    <li>
                                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="img/single-product/1.jpg" data-zoom-image="img/single-product/1.jpg"><img src="views/template/image/Anh_phu/<?= $value['image']?>" alt="zo-th-1" /></a>
                                                    </li>

                                                <?php endforeach;?>
                                            </ul>
                                        </div>
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

                                <!-- <form action="">
                                    <div class="quantity">
                                        <span class="single-product-btn">
                                            <a href="index.php?url=dat_lich_client&id=<?=$lay_sp['id']?>">Đặt lịch xem xe</a>
                                        </span>
                                    </div>
                                </form> -->

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
                                            </div>
                                            
                                        </div>
                                        <!-- Tab panes end -->
                                    </div>
                                          
                                </div>
                                    
                                </div>
                            </div>
                       </div>

                       <div class="related-product-area" style="padding-top: 0;">
                           <div class="row">
                                <div class="col-md-12">
                                    <h4 class="related-title">Đặt lịch xem xe</h4>
                                </div>
                           </div>
                           <div class="row">
                                <div class="single-product-page-list">
                                    <div class="single_product-list">
                                        <div class="customer-register my-account">
                                            <form method="post" class="register" id="form-1">
                                                <div class="form-fields" style="border: 1px solid #d7d0d0; border-bottom: none;">
                                                    <!-- <h2>Register</h2> -->
                                                    <input type="hidden" name="product_id" value="<?=$lay_sp['id']?>">
                                                    <p class="form-row form-row-wide">
                                                        <label for="name">Họ tên </label>
<<<<<<< HEAD
                                                        <input id="name" placeholder="Họ và tên" type="text" class="input-text" name="name"  value="<?= $_SESSION['user']['name'] ?? '' ?>" onblur="checkTen()" >
=======
                                                        <input id="name" placeholder="Họ và tên" type="text" class="input-text" name="name"  value="<?= $_SESSION['user']['name'] ?? '' ?>" onblur="checkTen()" required>
>>>>>>> dc8e5f6fc6e708890dbc1122f315e23ff1a37b4c
                                                        <span style="margin-top: 10px ; color: red;" class="form-message"></span>
                                                    </p>
                                                    <!-- <p class="form-row form-row-wide">
                                                        <label for="reg_email">User Name <span class="required">*</span></label>
                                                        <input type="text" class="input-text" name="user_name" id="reg_email" value="">
                                                    </p> -->
                                                    <p class="form-row form-row-wide">
                                                        <label for="address">Địa chỉ </label>
                                                        <input id="address" placeholder="Địa chỉ" type="text" class="input-text" name="address"  value="<?= $_SESSION['user']['address'] ?? '' ?>" onblur="checkDiaChi()" required>
                                                        <span style="margin-top: 10px ; color: red;" class="form-message"></span>
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="phone">Số điện thoại </label>
                                                        <input id="phone" placeholder="Số điện thoại" type="number" class="input-text" name="phone"  value="<?= $_SESSION['user']['phone'] ?? '' ?>" onblur="checkPhone()" required>
                                                        <span style="margin-top: 10px ; color: red;" class="form-message"></span>
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="email">Email </label>
                                                        <input id="email" placeholder="Nhập địa chỉ email chính xác để nhận mail từ website" type="email" class="input-text" name="email"  value="<?= $_SESSION['user']['email'] ?? '' ?>" onblur="checkEmail()" required>
                                                        <span style="margin-top: 10px ; color: red;" class="form-message"></span>
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="date">Ngày xem </label>
                                                        <input id="date"  type="date" class="input-text" name="date"  value="" onblur="checkDate()" required>
                                                        <span style="margin-top: 10px ; color: red;" class="form-message"></span>
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="time">Giờ xem </label>
                                                        <input id="hour"  type="time" class="input-text" name="time"  value="" onblur="checkTime()" required>
                                                        <span style="margin-top: 10px ; color: red;" class="form-message"></span>
                                                    </p>
                                                    <!-- <p class="form-row form-row-wide">
                                                        <label for="reg_password">Password <span class="required">*</span></label>
                                                        <input type="password" class="input-text" name="password" id="reg_password">
                                                    </p> -->
                                                    <div style="left: -999em; position: absolute;">
                                                        <label for="trap">Anti-spam</label>
                                                        <input type="text" name="email_2" id="trap" tabindex="-1">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-action" style="border: 1px solid #d7d0d0; border-top: none;">
                                                    <div class="actions-log" style="float:left;">
                                                        <input id="submit_btn" type="submit" class="button" name="dat_lich" value="Đặt lịch">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                       </div>

<<<<<<< HEAD

                       <!-- <div class="related-product-area" style="padding-top: 40;">
                           <div class="row">
                                <div class="col-md-12">
                                    <h4 class="related-title">Bình Luận</h4>
                                </div>
                           </div>
                           <div class="row">
                                <div class="single-product-page-list">
                                    <div class="single_product-list">
                                        <div class="customer-register my-account">
                                            <form method="post" class="register" id="form-1">
                                                <div class="form-fields" style="border: 1px solid #d7d0d0; border-bottom: none;">
                                                   
                                                   
                                                        <label for="name">Nội Dung </label>
                                                        <input id="name" placeholder="" type="text" class="input-text" name="cmt">
                                                        <span style="margin-top: 10px ; color: red;" class="form-message"></span>
                                        
                                                    <div style="left: -999em; position: absolute;">
                                                        <label for="trap">Anti-spam</label>
                                                        <input type="text" name="email_2" id="trap" tabindex="-1">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-action" style="border: 1px solid #d7d0d0; border-top: none;">
                                                    <div class="actions-log" style="float:left;">
                                                        <input id="submit_btn" type="submit" class="button" name="cmt" value="Gửi Bình Luận">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                       </div> -->


=======
>>>>>>> dc8e5f6fc6e708890dbc1122f315e23ff1a37b4c
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
                </div>

                <?php include('views/template/aside.php') ?>
            </div>
        </div>
    </div>

    <script>

        function checkTen() {
            var name = document.querySelector('#name');
            
            var ten = document.getElementById("name").value;

            let parent = name.parentElement;
            let span = parent.querySelector('span');

            if(ten == "" || ten == null) {
                parent.classList.add('error');
                span.innerText = 'Vui lòng nhập thông tin';
                
            } else {
                span.innerText = '';
            }
        }

        function checkDiaChi() {
            // Kiểm tra địa chỉ ko được trống
            var address = document.querySelector('#address');
            var dia_chi = document.getElementById("address").value;

            let parent = address.parentElement;
            let span = parent.querySelector('span');

            if(dia_chi == "" || dia_chi == null) {
                parent.classList.add('error');
                span.innerText = 'Vui lòng nhập thông tin';
            } else {
                span.innerText = '';
            }
        }

        function checkPhone() {
            // Kiểm tra số điện thoại
            var phone = document.querySelector('#phone');
            var sdt = document.getElementById("phone").value;
            var sdt_l = document.getElementById("phone");
            let parent = phone.parentElement;
            let span = parent.querySelector('span');

            if(sdt == "" || sdt == null) {
                parent.classList.add('error');
                span.innerText = 'Vui lòng nhập thông tin';
            } else {
                span.innerText = '';
            } 
        }

        function checkEmail() {
            var email = document.querySelector('#email');
            var dc_email = document.getElementById("email").value;
            let parent = email.parentElement;
            let span = parent.querySelector('span');
            ktEmail = /^\w(\.?[\w+])*@\w(\.?[\w+])*\.[a-z]{2,4}$/i;

            if(dc_email == "" || dc_email == null) {
                parent.classList.add('error');
                span.innerText = 'Vui lòng nhập thông tin';
            } else {
                if(!ktEmail.test(dc_email)) {
                   span.innerText = 'Bạn nhập không đúng định dạng email!';
                } else {
                    span.innerText = '';
                }
               
            } 
        }

        function checkDate() {
            var date = document.querySelector('#date');
            var ngay = document.getElementById("date").value;

            let parent = date.parentElement;
            let span = parent.querySelector('span');

            var today = new Date();
            var date_now = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            if(ngay < date_now) {
                parent.classList.add('error');
                span.innerText = 'Ngày không hợp lệ';
            } else {
                span.innerText = '';
            }
        }

        function checkTime() {
            var hour = document.querySelector('#hour');
            var gio = document.getElementById("hour").value;

            let parent = hour.parentElement;
            let span = parent.querySelector('span');

            var today = new Date();
            var time = today.getHours() + ":" + today.getMinutes() ;
            // span.innerText = time;
            // span.innerText = gio;

            if(gio <= time) {
                parent.classList.add('error');
                span.innerText = 'Giờ không hợp lệ';
            } else {
                span.innerText = '';
            }
        }

       
        
        
     </script>

    <script src="views/template/js/validator.js"></script>

    <!-- All js plugins included in this file. -->
    <script src="views/template/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="views/template/js/bootstrap.min.js"></script>
    <script src="views/template/js/jquery.nivo.slider.pack.js"></script>
    <script src="views/template/js/owl.carousel.min.js"></script>
    <script src="views/template/js/mail.js"></script>
    <script src="views/template/js/plugins.js"></script>
    <script src="views/template/js/active.js"></script>

</body>