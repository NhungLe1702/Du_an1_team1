<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/template/css/asset.css">
    <link rel="stylesheet" href="views/template/css/nivo-slider.css">
    <link rel="stylesheet" href="views/template/style.css">
    <link rel="stylesheet" href="views/template/css/responsive.css">
</head>
<body>
<div class="footer" style="padding: 0;">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="single-footer footer-dec">
                            <div class="footer-logo">
                                <a href="#"><img src="views/template/img/logo/logo.png" alt=""></a>
                            </div>
                            <p class="dec" style="font-weight: bolder ; font-size: x-large ;">
                               CÔNG TY TNHH DOTBIKE VIET NAM
                            </p>
                            <p>
                              <b style="font-size: 17px ;"> Hà Nội:</b> Tòa nhà FPT Polytechnic, đường Trịnh Văn Bô, Phương Canh, Nam Từ Liêm <br> <br>
                              <b style="font-size: 17px ;"> Đà Nẵng:</b> 137 Nguyễn Thị Thập, Phường Hòa Minh, Quận Liên Chiểu <br> <br>
                              <b style="font-size: 17px ;"> Tây Nguyên:</b>  Tổ dân phố 8, P. Tân An, TP. Buôn Ma Thuột, Tỉnh Đắk Lắk <br> 
                            </p>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-footer">
                            <div class="footer-title">
                                <h4>MENU</h4>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="index.php?url=trang_chu"><i class="fa fa-angle-right"></i> Trang Chủ</a></li>
                                <li><a href="index.php?url=san_pham"><i class="fa fa-angle-right"></i> Thương Hiệu</a></li>
                                <li><a href="index.php?url=san_pham"><i class="fa fa-angle-right"></i> Sản Phẩm</a></li>
                                <li><a href="index.php?url=gioi_thieu"><i class="fa fa-angle-right"></i> Giới Thiệu</a></li>
                                <li><a href="index.php?url=lien_he"><i class="fa fa-angle-right"></i> Liên Hệ</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-footer">
                            <div class="footer-title">
                                <h4>Tài Khoản</h4>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="index.php?url=register"><i class="fa fa-angle-right"></i> Đăng Kí</a></li>
                                <li><a href="index.php?url=register"><i class="fa fa-angle-right"></i> Đăng Nhập</a></li>
                                <li><a href="index.php?url=forget"><i class="fa fa-angle-right"></i> Quên mật khẩu?</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer newsletter">
                            <div class="footer-title">
                                <h4>Hỗ Trợ Khách Hàng</h4>
                            </div>
                            <p> <b>Hotline:</b>  0339770803</p>
                            <p><b> Email:</b> dotbike.cskh@gmail.com</p>
                            <p>Đăng ký danh sách gửi thư để nhận thông tin cập nhật về hàng mới, ưu đãi và thông tin giảm giá khác</p>
                            <!-- <form action="#">
                                <input type="text" placeholder="Write your e-mail here">
                                <button>Subscribe</button>
                            </form> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="footer-botton">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <p>Copyright © dotbike 2020 | Design by <a target="_blank" href="http://dotthemes.com/">dotthemes.com</a> | All rights reserved</p>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                       <div class="master-card">
                           <a href="#"><img src="views/template/img/logo/cont.png" alt=""></a>
                       </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <script>
        function confirmLogOut() {
            if (confirm('Đăng xuất?')) {
                window.location.href = 'index.php?url=logout';
            }
        }
    </script>
</body>
</html>