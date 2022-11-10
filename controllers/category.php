<?php
    require('models/category.php');

    function hienThiDanhMuc() {
        $ds = danhSach();
        include('views/category/danh_sach.php');
    }

    function themMoiDanhMuc() {

        include('views/category/them_moi.php');
    }
?>