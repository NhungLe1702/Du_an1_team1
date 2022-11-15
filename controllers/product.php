<?php
    require('models/product.php');

    function hienThiSanPham()
    {
        $ds_sp = layDSSanPham();
        include('views/product/danh_sach.php');
    }

    function formTaoSanPham()
    {
        $them_sp = themMoiSanPham();
        include('views/product/tao_moi.php');
    }

    function formSuaSanPham() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $lay_mot = layMotSanPham($id);
        }
        include('views/product/chinh_sua.php');
    }

    function suaSanPham() {
        $up = hamSuaSanPham();
    }

?>

