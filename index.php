<?php
session_start();

require('controllers/client.php');
require('controllers/category.php');
require('controllers/customer.php');
require('controllers/product.php');
require('controllers/contact.php');
require('controllers/q_a.php');
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

    case 'san_pham':
        sanPhamClient();
        break;

    case 'chi_tiet_san_pham':
        chiTietSanPham();
        break;

    case 'ds_san_pham_theo_dm':
        laySPtheoMaLoai();
        break;
        
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

    case 'contact':
        contact();
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

    case 'q_a':
        queans();
        break;       

    default:
        echo 'Đường dẫn không tồn tại';
        break;
}



include('views/template/footer.php');
