<?php
    require('models/category.php');

    function hienThiDanhMuc() {
        $ds = danhSach();
        include('views/category/danh_sach.php');
    }

    function themMoiDanhMuc() {
        $tm = themDanhMuc();
        include('views/category/them_moi.php');
    }

    function formsuaDanhMuc() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $lay_mot = layMotDanhMuc($id);
        }
        include('views/category/chinh_sua.php');
    }

    function suaDanhMuc() {
        $up = hamSuaSanPham();
    }
?>