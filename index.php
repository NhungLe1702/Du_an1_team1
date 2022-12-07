<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once('models/db.php');

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';
require 'libs/sendMail.php';

require('controllers/client.php');
require('controllers/category.php');
require('controllers/customer.php');
require('controllers/product.php');
require('controllers/view_order_admin.php');

include('views/template/header.php');

// Dùng để quản lý đường dẫn và điều hướng đến màn hình phù hợp
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        hienThiTrangChu();
        break;

    case 'trang_chu':
        hienThiTrangChu();
        break;

    case 'trang_chu':
        hienThiTrangChu();
        break;
    
    case 'hoi_dap':
        hoiDap();
        break;  

    case 'san_pham':
        sanPhamClient();
        break;

    case 'thong_ke_san_pham':
        thongKeSanPham();
        break;

    case 'thong_ke_don_xem':
        thongKeDonXem();
        break; 
    
    case 'thong_ke_doanh_thu':
        thongKeDoanhThu();
        break;
        
    case 'chi_tiet_san_pham':
        chiTietSanPham();
        break;

    case 'ds_san_pham_theo_dm':
        laySPtheoMaLoai();
        break;

    case 'lien_he':
        contact();
        break;    
    case 'pages':
        pages();
        break;
    case 'gioi_thieu':
        gioi_thieu();
        break;
    case 'contact':
        contact();
        break;
    // case 'xu_ly_dat_lich':
    //     xuLyDatLich();
    //     break;
    // case 'dat_lich_client':
    //     formDatLich();
    //     break;

    // case 'tao_don_xem_client':
    //     tao_don_xem();
    //     break;

    case 'don_xem_admin':
        don_xem_admin();
        break;

    case 'update_view_order':
        update_view_order();
        break;

    case 'xoa_don_xem':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            xoaDonXem($id);
        }
        don_xem_admin();
        break;

    case 'loc_don_xem_theo_status':
        locDonXemTheoStatus();
        break;

    case 'in_hoa_don':
        inHoaDon();
        break;

    //Khung giờ
    
    // case 'khung_gio':
    //     dsKhungGio();
    //     break;

    // case 'form_them_khung_gio':
    //     formTaoKhungGio();
    //     break;

    // case 'them_khung_gio' :
    //     themMoiKhungGio();
    //     break;
        
    // Sản phẩm

    case 'hien_thi_san_pham':
        hienThiSanPham();
        break;
    case 'them_san_pham':
        formTaoSanPham();
        break;
    
    case 'xoa_san_pham':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            xoaSanPham($id);
        }
        hienThiSanPham();
        break;

    case 'form_sua_san_pham':
        formSuaSanPham();
        break;

    case 'sua_san_pham':
        suaSanPham() ;
        break;
    
    case 'tim_kiem_SP':
        timKiemSanPham();
        break;
        
    case 'loc_san_pham_theo_dm':
        locSPtheoMaLoai();
        break;
    

    // danh mục    

    case 'danh_muc';
        hienThiDanhMuc();
        break;

    case 'them_danh_muc':
        themMoiDanhMuc();
        break;

    case 'xoa_danh_muc':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            xoaDanhMuc($id);
        }
        hienThiDanhMuc();
        break;

    case 'sua_danh_muc':
        suaDanhMuc();
        break;

    case 'form_sua_danh_muc':
        formsuaDanhMuc();
        break;

    // Khách hàng 

    case 'register':
        registerForm();
        break;

    case 'login':
        loginForm();
        break;

    case 'logout':
        logOutUser();
        break;
    case 'edit_thongtin':
        edit_thongtin();
        break;

     case 'forget':
        forget();
        break;

    // quan li khach hang cua admin

    case 'khach_Hang':
        hienThiKhachHang();
        break;

    case 'xoa_khach_hang':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            xoaKhachHang($id) ;
        }
        hienThiKhachHang();
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}



include('views/template/footer.php');
