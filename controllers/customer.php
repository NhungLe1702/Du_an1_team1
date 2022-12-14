<?php
   require_once 'models/customer.php';

    function registerForm(){
        $hasError = false;
        $errors = [];
        if (isset($_POST['register'])) {

            if ($_POST['name'] == "" || is_numeric($_POST['name'])) {
                $hasError = true;
                $errors['name']= 'Thông tin chưa đúng định dạng';
            }

            if ($_POST['user_name'] == "" || $_POST['address'] == "" || $_POST['phone'] == "" || $_POST['email'] == "" || $_POST['password'] == "") {
                $hasError = true;
                $errors['loi_de_trong']= 'Không được để trống';
            }

            if(strlen($_POST['phone']) != 10 ) {
                $hasError = true;
                $errors['phone']= 'Số điện thoại phải có 10 số';
            }

            if(!$hasError) {
                register();
            }
        }

       
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
