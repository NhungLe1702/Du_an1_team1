<?php

    include_once('models/db.php');

    function register()
    {
        // die();
        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $user_name = $_POST['user_name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "INSERT INTO customer(name,user_name,address,phone,email,password)
                        VALUE('$name','$user_name','$address',$phone,'$email','$password')";
            $register = pdo_execute($sql);
        }
    }
    function login()
    {
        if (isset($_POST['login'])) {
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            
            $sql = "SELECT * FROM customer WHERE user_name = '$user_name' and password = '$password'";
            $user = getData($sql, FETCH_ONE);
            if (!empty($user)) {
                $_SESSION['user'] = $user;
                echo('<script>window.location.href="index.php?url=trang_chu"</script>');
                exit();
            } else {

            }
        }
    }

    function logOut() {
        unset($_SESSION['user']);
    }

    function danhSachKhachHang() {
        $sql = "SELECT * FROM customer";
        $dskh = getData($sql, FETCH_ALL);
        return $dskh;
    }

    function xoaKhachHang($id) {
        $sql = "DELETE  FROM customer WHERE id = '$id'";
        $xoa_kh = pdo_execute($sql);
    }



?>
