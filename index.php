<?php
session_start();

require('controllers/client.php');
require('controllers/category.php');
require('controllers/customer.php');

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

    case 'register':
        registerForm();
        break;

    case 'login':
        loginForm();
        break;

    case 'logout':
        logOutUser();
        break;

    default:
        echo 'Đường dẫn không tồn tại';
        break;
}

include('views/template/footer.php');
