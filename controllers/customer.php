<?php
   require_once 'models/customer.php';

    function registerForm(){
        register();
        include 'views/customer/my-account.php';
    }

    function loginForm(){
        login();
        include 'views/customer/my-account.php';
    }

    function logOutUser(){
        logOut();
        echo('<script>window.location.href="index.php?url=trang_chu"</script>');
    }
    function edit_thongtin(){
        $id = $_GET['id'] ?? false;
        $user = find_user($id);
        if (!empty($user)) {
            include 'views/customer/edit_thongtin.php';
        } else {
            
        }
        update_thongtin_khachhang();
    }
    function forget(){
        forget_password();
        include 'views/customer/forget.php';
        
    }

    function hienThiKhachHang() {
        $ds = danhSachKhachHang();
        include('views/customer/danh_sach.php');
    }
