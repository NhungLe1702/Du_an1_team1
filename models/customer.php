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
        echo "<script> alert('Đăng kí tài khoản thành công')</script>";
    }
    
}
function login()
{
    // $thongbao = 'Đăng nhập không thành công.';
    if (isset($_POST['login'])) {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM customer WHERE user_name = '$user_name' and password = '$password'";
        $user = getData($sql, FETCH_ONE);
        if (!empty($user)) {
            $_SESSION['user'] = $user;
            echo ('<script>window.location.href="index.php?url=trang_chu"</script>');
            exit();
        } else {
            // if(isset($thongbao))  echo $thongbao ;
            echo "<script> alert('Sai tài khoản hoặc mật khẩu')</script>";
        }

    }
    
}

function logOut()
{
    echo  ("<script>confirm('Đăng xuất?')</script>" );
    unset($_SESSION['user']);
}

function danhSachKhachHang()
{
    $sql = "SELECT * FROM customer";
    $dskh = getData($sql, FETCH_ALL);
    return $dskh;
}

function xoaKhachHang($id)
{
    $sql = "DELETE  FROM customer WHERE id = '$id'";
    $xoa_kh = pdo_execute($sql);
}
function find_user($id)
{
    $sql = "SELECT * from customer where id = {$id}";
    return getData($sql, FETCH_ONE);
}

function update_thongtin_khachhang()
{
    if (isset($_POST['update_thongtin'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "
                UPDATE customer
                SET
                    name = '{$name}',
                    user_name = '{$user_name}',
                    address = '{$address}',
                    phone = '{$phone}',
                    email = '{$email}',
                    password = '{$password}'
                WHERE id = '{$id}'
            ";
        pdo_execute($sql);
        unset($_POST);
        unset($_REQUEST);
        echo "<script> alert('Thay đổi thông tin thành công')</script>";
        echo ('<script>location.href = "?url=trang_chu";</script>');
    }
}

function forget_password()
{
    if(isset($_POST['forget'])){
        $email = $_POST['email'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $sql = "
            SELECT * FROM customer
            where email = '{$email}' and user_name = '{$user_name}'
            ";
        $user = getData($sql, FETCH_ONE);
        if (!empty($user)) {
            $id = $user['id'];
            $sql = "
                UPDATE customer
                set
                    password = '{$password}'
                where id = '{$id}'
            ";
            pdo_execute($sql);
            echo "<script> alert('Thay đổi mật khẩu thành công')</script>";
            echo ('<script>window.location.href="index.php?url=login"</script>');
        }else{
            echo "<script> alert('Không tìm thấy tài khoản!')</script>";
        }
    }
}
