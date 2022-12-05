<?php
$user = $_SESSION['user'] ?? false;
?>
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
    <div class="header home2">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="currency">
                            <ul>
                                <li>
                                    <a href="#">₫ VND <i class="fa fa-caret-down"></i></a>
                                    <!-- <ul class="currency-menu">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#">€ EUR</a></li>
                                        <li><a href="#">£ PBP</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                        <div class="language">
                            <ul>
                                <li>
                                    <a href="#"><img src="views/template/img/currency/c5.png" alt="" style="width: 5%" > VIET NAM <i class="fa fa-caret-down"></i></a>
                                    <!-- <ul class="language-menu">
                                        <li><a href="#"><img src="views/template/img/currency/c1.png" alt=""> English</a></li>
                                        <li><a href="#"><img src="views/template/img/currency/c2.png" alt=""> Arabic</a></li>
                                        <li><a href="#"><img src="views/template/img/currency/c3.png" alt=""> French</a></li>
                                        <li><a href="#"><img src="views/template/img/currency/c4.png" alt=""> German</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="top-bar-menu">
                            <ul>
                                <?php if (!empty($user)) : ?>
                                    <li>
                                       <a href="index.php?url=edit_thongtin&id=<?= $user['id'] ?>"> Hello <?= $user['name'] ?> </a>
                                    </li>
                                    
                                    <li><button onclick="confirmLogOut()" style="border-radius: 5px ; border: none; background-color: #008dc7; color: white; ">Log Out</button></li>
                                <?php else : ?>
                                    <li><a href="index.php?url=register">Tài Khoản</a></li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-midle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="logo">
                            <a href="index.php?url=trang_chu"><img src="views/template/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="search-area">
                            <div class="search-box-inner">
                                <form action="index.php?url=tim_kiem_SP" method="post">
                                    <input type="text" placeholder="Tìm Kiếm" name="kw" required>
                                    <button type="submit" name="tim_kiem"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header-middle-right">
                            <div class="login-account">
                                <a href="#"><i class="fa fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom sticky-header">
            <div class="header-bottom-inner">
                <div class="container">
                    <div class="row">
                        <div class="mgeamenu-full-width">
                            <div class="col-md-9 col-sm-6 col-xs-3">
                                
                            <div class="main-menu hidden-sm hidden-xs">

                                <?php if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>

                                    <?php if($role == 1) { ?>
                                        <nav>
                                            <ul>
                                                <li><a href="index.php?url=trang_chu"><i class="fa fa-home"></i></a></li>
                                                <li><a href="index.php?url=danh_muc">Thương hiệu</a></li>
                                                <li><a href="index.php?url=hien_thi_san_pham">Sản Phẩm</a></li>
                                                <li><a href="index.php?url=khach_Hang">Khách hàng</a></li>
                                                <!-- <li><a href="index.php?url=khung_gio">Khung giờ</a></li> -->
                                                <li><a href="index.php?url=don_xem_admin">Đơn Xem</a></li>
                                                <!-- <li><a href="index.php?url=thong_ke_san_pham">Thống kê</a></li> -->
                                                <li class="mega_parent mega-item2"><a href="index.php?url=thong_ke_san_pham">Thống kê</a>
                                                    <!-- <ul class="mega-menu" style="width: 25%;">
                                                        <li style="width: 100% ;">
                                                            <ul class="mega_submenu" > 
                                                                <li style="padding-left:  20px; color: black!important; ">
                                                                    <label for="Road">
                                                                        <a  href="index.php?url=thong_ke_san_pham">Sản phẩm</a>
                                                                    </label>
                                                                </li>   

                                                                <li style="padding-left:  20px; color: black!important;">
                                                                    <label for="Road">
                                                                        <a  href="index.php?url=thong_ke_don_xem">Đơn xem</a>
                                                                    </label>
                                                                </li> 

                                                                <li style="padding-left:  20px; color: black!important;">
                                                                    <label for="Road">
                                                                        <a  href="index.php?url=thong_ke_doanh_thu">Doanh thu</a>
                                                                    </label>
                                                                </li> 
                                                            </ul>
                                                        </li>
                                                    </ul> -->
                                                </li>

                                            </ul>
                                        </nav>
                                    <?php } else { ?>
                                        <nav>
                                            <ul>
                                                <li><a  href="index.php?url=trang_chu"><i class="fa fa-home"></i></a></li>
                                                <li><a href="index.php?url=trang_chu">Trang chủ</a></li>
                                                <li><a href="index.php?url=san_pham">Sản Phẩm </a></li>
                                                <li><a href="index.php?url=gioi_thieu">Giới thiệu  </a></li>
                                                
                                                <!-- <li><a href="index.php?url=tao_don_xem_client">Đơn Xem</a></li> -->
                                                <!-- <li><a href="index.php?url=hoi_dap">Hỏi đáp</a></li> -->
                                                <li><a href="index.php?url=lien_he">Liên hệ</a></li>
                                            </ul>   
                                        </nav>
                                    <?php } ?>

                                <?php } else { ?>
                                    <nav>
                                        <ul>
                                            <li><a  href="index.php?url=trang_chu"><i class="fa fa-home"></i></a></li>
                                            <li><a href="index.php?url=trang_chu">Trang chủ</a></li>
                                            

                                            <li class="mega_parent mega-item2"><a href="#">Thương hiệu</a>
                                                <ul class="mega-menu">
                                                    <!-- <li style="width: 100%; "> -->
                                                        <ul class="mega_submenu" >
                                                            <?php foreach(danhSachDanhMuc() as $key => $value) : ?>
                                                                <li style="padding-left:  20px; color: black!important;">
                                                                    <!-- <input id="Road" type="checkbox" name="Road"> -->
                                                                    <label for="Road">
                                                                        <a  href="index.php?url=ds_san_pham_theo_dm&id=<?php echo $value['id'] ?>"><?=$value['name']?></a>
                                                                    </label>
                                                                </li>
                                                            <?php endforeach ?>    
                                                       </ul>
                                                    <!-- </li> -->
                                                </ul>
                                            </li>

                                            <li><a href="index.php?url=san_pham">Sản Phẩm </a></li>
                                            <li><a href="index.php?url=gioi_thieu">Giới thiệu  </a></li>
                                            <!-- <li><a href="index.php?url=hoi_dap">Hỏi đáp</a></li> -->
                                            <li><a href="index.php?url=lien_he">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                <?php } ?>    
                                </div>

                                <!-- <div class="main-menu hidden-sm hidden-xs">
                                    <nav>

                                        <?php if (!empty($user['role']) && $user['role'] == 1) : ?>
                                            <ul>
                                                <li><a href="index.php?url=trang_chu"><i class="fa fa-home"></i></a></li>
                                                <li><a href="index.php?url=danh_muc">Thương hiệu</a></li>
                                                <li><a href="index.php?url=ds_san_pham">Sản Phẩm</a></li>
                                                <li><a href="#">Khách hàng</a></li>
                                                <li><a href="#">Đơn Xem</a></li>
                                                <li><a href="#">Bình luận</a></li>
                                                <li><a href="#">Thống kê</a></li>
                                            </ul>
                                        <?php else : ?>
                                            <ul>
                                                <li><a href="index.php?url=trang_chu"><i class="fa fa-home"></i></a></li>
                                                <li><a href="index.php?url=trang_chu">Trang chủ</a></li>
                                                <li><a href="#">Sản Phẩm </a></li>
                                                <li><a href="#">Giới thiệu </a></li>
                                                <li><a href="#">Pages</a></li>
                                                <li><a href="#">Hỏi đáp</a></li>
                                                <li><a href="#">Liên hệ</a></li>
                                            </ul>
                                        <?php endif; ?>
                                    </nav>
                                </div> -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-9">
                                <div class="call-us">
                                    <span><i class="fa fa-phone"></i></span> Liên Hệ: +00965888546-32
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>